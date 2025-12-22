<?php
/**
 * importar_nomina_procesar.php (corregido - tolerante a esquema)
 * - Construye INSERT/UPDATE dinámicos según columnas reales en BD para evitar "Unknown column".
 * - Evita HY093 (parámetros de más/menos) alineando execute() a placeholders existentes.
 * - Guarda el renglón completo en nomina_import_detalle.payload_json para auditoría.
 */

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/conexion.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';

require_login();
require_password_change_redirect();
require_empresa();
require_perm('usuarios.admin');

ini_set('memory_limit', '768M');
set_time_limit(0);

require_once __DIR__ . '/../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

function rfc_base($rfc_raw) {
    $r = strtoupper(trim((string)$rfc_raw));
    $r = preg_replace('/[^A-Z0-9]/', '', $r);
    return substr($r, 0, 10);
}

function parse_date_any($v) {
    if ($v === null) return null;

    // Excel serial date (aprox)
    if (is_numeric($v)) {
        $ts = ((int)$v - 25569) * 86400;
        if ($ts > 0) return gmdate('Y-m-d', $ts);
    }

    $s = trim((string)$v);
    if ($s === '') return null;

    $p = explode('/', $s);
    if (count($p) === 3) {
        $d = str_pad(trim($p[0]), 2, '0', STR_PAD_LEFT);
        $m = str_pad(trim($p[1]), 2, '0', STR_PAD_LEFT);
        $y = trim($p[2]);
        if (strlen($y) === 2) $y = '20' . $y;
        return $y . '-' . $m . '-' . $d;
    }

    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $s)) return $s;
    return null;
}

function parse_money_2($v) {
    $s = trim((string)$v);
    if ($s === '') return null;
    $s = str_replace([',', '$'], '', $s);
    if (!is_numeric($s)) return null;
    return round((float)$s, 2);
}

function normalize_es_activo($raw) {
    $s = strtoupper(trim((string)$raw));
    $s = preg_replace('/\s+/', ' ', $s);

    if ($s === 'ACTIVO' || $s === 'SI' || $s === 'SÍ' || $s === '1' || $s === 'TRUE') return 1;
    if ($s === 'INACTIVO' || $s === 'BAJA' || $s === 'NO' || $s === '0' || $s === 'FALSE') return 0;

    if ($s === '') return null;
    if (is_numeric($s)) return ((int)$s) ? 1 : 0;

    return null;
}

function table_columns(PDO $pdo, $table) {
    $stmt = $pdo->query("SHOW COLUMNS FROM `$table`");
    $cols = [];
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $cols[$r['Field']] = true;
    }
    return $cols;
}

function build_upsert_sql($table, $data, $uniqueKeys) {
    // $data: col=>placeholder OR 'NOW()'
    $cols = array_keys($data);

    $insertCols = [];
    $insertVals = [];
    foreach ($data as $c => $ph) {
        $insertCols[] = $c;
        $insertVals[] = $ph;
    }

    $updates = [];
    foreach ($cols as $c) {
        if (in_array($c, $uniqueKeys, true)) continue;
        // No intentamos actualizar created_at si existe
        if ($c === 'created_at') continue;
        $updates[] = "$c=VALUES($c)";
    }

    $sql = "INSERT INTO `$table` (" . implode(',', $insertCols) . ") VALUES (" . implode(',', $insertVals) . ")";
    if (!empty($updates)) {
        $sql .= " ON DUPLICATE KEY UPDATE " . implode(',', $updates);
    }
    return $sql;
}

if (empty($_FILES['archivo']['tmp_name'])) {
    header('Location: importar_nomina.php?err=1');
    exit;
}

$archivoTmp = $_FILES['archivo']['tmp_name'];
$archivoNombre = $_FILES['archivo']['name'];

try {
    $pdo->beginTransaction();

    $usuarioSesionId = isset($_SESSION['usuario_id']) ? (int)$_SESSION['usuario_id'] : null;

    // Cabecera importación
    $stmt = $pdo->prepare("
        INSERT INTO nomina_importaciones (empresa_id, usuario_id, archivo_nombre, status, mensaje)
        VALUES (NULL, :uid, :fn, 'cargado', NULL)
    ");
    $stmt->execute([':uid' => $usuarioSesionId, ':fn' => $archivoNombre]);
    $import_id = (int)$pdo->lastInsertId();

    // Cargar Excel
    $reader = IOFactory::createReaderForFile($archivoTmp);
    $reader->setReadDataOnly(true);
    $spreadsheet = $reader->load($archivoTmp);

    // Hoja Reporte (con fallback)
    $sheet = $spreadsheet->getSheetByName('Reporte');
    if ($sheet === null) {
        foreach ($spreadsheet->getSheetNames() as $nm) {
            if (mb_strtolower(trim($nm), 'UTF-8') === 'reporte') {
                $sheet = $spreadsheet->getSheetByName($nm);
                break;
            }
        }
    }
    if ($sheet === null) $sheet = $spreadsheet->getSheet(0);

    $highestRow = (int)$sheet->getHighestRow();

    // Mapa empresas: nombre => id
    $empMap = [];
    $q = $pdo->query("SELECT empresa_id, nombre FROM empresas");
    while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
        $empMap[trim((string)$row['nombre'])] = (int)$row['empresa_id'];
    }

    // Columnas reales
    $colsEmp = table_columns($pdo, 'empleados');
    $colsUsr = table_columns($pdo, 'usuarios');

    // Detalle import
    $insDet = $pdo->prepare("
        INSERT INTO nomina_import_detalle
        (import_id, no_emp, rfc_base, payload_json, accion, mensaje)
        VALUES
        (:iid, :no, :rfc, :payload, :acc, :msg)
    ");

    // Selector empleado (preferimos por empresa_id + no_emp + rfc_base si existe)
    $selEmpSql = "SELECT empleado_id FROM empleados WHERE empresa_id=:eid AND no_emp=:no";
    $selEmpNeedsRfc = false;
    if (isset($colsEmp['rfc_base'])) { $selEmpSql .= " AND rfc_base=:rfc"; $selEmpNeedsRfc = true; }
    $selEmpSql .= " LIMIT 1";
    $selEmp = $pdo->prepare($selEmpSql);

    // Configurar UPSERT empleados con mapeo flexible
    $empColMap = [
        'empresa_id' => ':empresa_id',
        'no_emp' => ':no_emp',
        'rfc_base' => ':rfc_base',
        'curp' => ':curp',
        'nombre' => ':nombre',
        'apellido_paterno' => ':ap',
        'apellido_materno' => ':am',
        'correo' => ':correo',
        'es_activo' => ':es_activo',
        'fecha_ingreso' => ':fi',
        'fecha_baja' => ':fb',
        'tipo_empleado_id' => ':tipo_id',
        'tipo_empleado_nombre' => ':tipo_nom',
        'tipo_empleado' => ':tipo_nom',

        'departamento_id' => ':dep_id',
        'departamento_nombre' => ':dep_nom',
        'departamento' => ':dep_nom',

        // En algunos esquemas "puesto_del_empleado_*"
        'puesto_del_empleado_id' => ':puesto_del_id',
        'puesto_del_empleado' => ':puesto_del',

        // En otros "puesto_nomina_*"
        'puesto_nomina_id' => ':puesto_nomina_id',
        'puesto_nombre' => ':puesto_nomina',
        'puesto_nomina' => ':puesto_nomina',

        // Centro de trabajo (varía)
        'identificador_centro_trabajo_empleado' => ':ct_id',
        'centro_trabajo_empleado' => ':ct_nom',
        'centro_trabajo_id' => ':ct_id',
        'centro_trabajo_nombre' => ':ct_nom',
        'centro_trabajo' => ':ct_nom',

        // Jefe (varía)
        'jefe_inmediato_empleado' => ':jefe_nom',
        'jefe_inmediato' => ':jefe_nom',
        'jefe_inmediato_nombre' => ':jefe_nom',

        // Salarios (varía)
        'salario_diario_empleado' => ':sd',
        'salario_mensual_empleado' => ':sm',
        'salario_diario' => ':sd',
        'salario_mensual' => ':sm',

        'estatus' => ':estatus',
        'created_at' => 'NOW()',
        'updated_at' => 'NOW()'
    ];

    $empDataForSql = [];
    foreach ($empColMap as $col => $ph) {
        if (!isset($colsEmp[$col])) continue;
        $empDataForSql[$col] = $ph;
    }

    $empUniqueKeys = ['empresa_id', 'no_emp'];
    if (isset($colsEmp['rfc_base'])) $empUniqueKeys[] = 'rfc_base';

    $insEmpSql = build_upsert_sql('empleados', $empDataForSql, $empUniqueKeys);
    $insEmp = $pdo->prepare($insEmpSql);

    // Usuarios UPSERT flexible (por no_emp + rfc_base si existe)
    $usrColMap = [
        'no_emp' => ':no_emp',
        'rfc_base' => ':rfc_base',
        'nombre' => ':nombre',
        'nombres' => ':nombre',
        'apellido_paterno' => ':ap',
        'apellido_materno' => ':am',
        'correo' => ':correo',
        'estatus' => ':estatus',
        'empleado_id' => ':empleado_id',
        'password_hash' => ':pass_hash',
        'debe_cambiar_pass' => ':debe_cambiar',
        'pass_cambiada' => ':pass_cambiada',
        'created_at' => 'NOW()',
        'updated_at' => 'NOW()'
    ];

    $usrDataForSql = [];
    foreach ($usrColMap as $col => $ph) {
        if (!isset($colsUsr[$col])) continue;
        $usrDataForSql[$col] = $ph;
    }

    $usrUniqueKeys = ['no_emp'];
    if (isset($colsUsr['rfc_base'])) $usrUniqueKeys[] = 'rfc_base';

    $insUsrSql = build_upsert_sql('usuarios', $usrDataForSql, $usrUniqueKeys);
    $insUsr = $pdo->prepare($insUsrSql);

    // usuario_empresas opcional
    $useUE = false;
    try {
        $colsUE = table_columns($pdo, 'usuario_empresas');
        $useUE = isset($colsUE['usuario_id']) && isset($colsUE['empresa_id']);
    } catch (Throwable $e) { $useUE = false; }

    if ($useUE) {
        $insUE = $pdo->prepare("
            INSERT INTO usuario_empresas (usuario_id, empresa_id, es_admin, estatus)
            VALUES (:uid, :eid, 0, 1)
            ON DUPLICATE KEY UPDATE estatus=1
        ");
        $selUsrIdSql = "SELECT usuario_id FROM usuarios WHERE no_emp=:no";
        $selUsrNeedsRfc = false;
        if (isset($colsUsr['rfc_base'])) { $selUsrIdSql .= " AND rfc_base=:rfc"; $selUsrNeedsRfc = true; }
        $selUsrIdSql .= " LIMIT 1";
        $selUsrId = $pdo->prepare($selUsrIdSql);
    }

    $total = 0; $insertados = 0; $actualizados = 0; $errores = 0;

    for ($r = 2; $r <= $highestRow; $r++) {
        $empresaNombre = trim((string)$sheet->getCell("A{$r}")->getValue());
        $no_emp = trim((string)$sheet->getCell("B{$r}")->getValue());
        if ($empresaNombre === '' && $no_emp === '') continue;

        $total++;

        $empresa_id = $empMap[$empresaNombre] ?? null;

        $ap = trim((string)$sheet->getCell("C{$r}")->getValue());
        $am = trim((string)$sheet->getCell("D{$r}")->getValue());
        $nombre = trim((string)$sheet->getCell("E{$r}")->getValue());

        $rfc_raw = $sheet->getCell("F{$r}")->getValue();
        $rfc = rfc_base($rfc_raw);
        $curp = trim((string)$sheet->getCell("G{$r}")->getValue());

        $es_activo_raw = $sheet->getCell("H{$r}")->getValue();
        $es_activo = normalize_es_activo($es_activo_raw);

        $fi = parse_date_any($sheet->getCell("I{$r}")->getValue());
        $fb = parse_date_any($sheet->getCell("J{$r}")->getValue());

        $tipo_id = trim((string)$sheet->getCell("K{$r}")->getValue());
        $tipo_nom = trim((string)$sheet->getCell("L{$r}")->getValue());

        $dep_id = trim((string)$sheet->getCell("M{$r}")->getValue());
        $dep_nom = trim((string)$sheet->getCell("N{$r}")->getValue());

        $puesto_id_raw = trim((string)$sheet->getCell("O{$r}")->getValue()); // puede ser HP9
        $puesto_nom = trim((string)$sheet->getCell("P{$r}")->getValue());

        $ct_id_raw = trim((string)$sheet->getCell("Q{$r}")->getValue());
        $ct_id = ($ct_id_raw === '' ? null : (int)$ct_id_raw);
        $ct_nom = trim((string)$sheet->getCell("R{$r}")->getValue());

        $jefe_nom = trim((string)$sheet->getCell("S{$r}")->getValue());

        $salario_diario = parse_money_2($sheet->getCell("T{$r}")->getValue());
        $salario_mensual = parse_money_2($sheet->getCell("U{$r}")->getValue());

        $payloadArr = [
            'NOMBRE DE EMPRESA' => $empresaNombre,
            'NUMERO EMPLEADO' => $no_emp,
            'APELLIDO PATERNO EMPLEADO' => $ap,
            'APELLIDO MATERNO EMPLEADO' => $am,
            'NOMBRES DEL EMPLEADO' => $nombre,
            'RFC EMPLEADO_RAW' => (string)$rfc_raw,
            'RFC_BASE' => $rfc,
            'NO. CURP EMPLEADO' => $curp,
            'ES ACTIVO_RAW' => (string)$es_activo_raw,
            'ES ACTIVO' => $es_activo,
            'FECHA INGRESO DEL EMPLEADO' => $fi,
            'FECHA BAJA' => $fb,
            'TIPO EMPLEADO ID_RAW' => $tipo_id,
            'TIPO EMPLEADO' => $tipo_nom,
            'DEPARTAMENTO ID_RAW' => $dep_id,
            'DEPARTAMENTO EMPLEADO' => $dep_nom,
            'PUESTO DEL EMPLEADO ID_RAW' => $puesto_id_raw,
            'PUESTO DEL EMPLEADO' => $puesto_nom,
            'IDENTIFICADOR CENTRO TRABAJO EMPLEADO_RAW' => $ct_id_raw,
            'CENTRO TRABAJO EMPLEADO' => $ct_nom,
            'JEFE INMEDIATO EMPLEADO' => $jefe_nom,
            'SALARIO DIARIO EMPLEADO' => $salario_diario,
            'SALARIO MENSUAL EMPLEADO' => $salario_mensual
        ];
        $payload = json_encode($payloadArr, JSON_UNESCAPED_UNICODE);

        if (!$empresa_id) {
            $errores++;
            $insDet->execute([
                ':iid'=>$import_id,
                ':no'=>$no_emp,
                ':rfc'=>($rfc !== '' ? $rfc : 'SINRFCBASE'),
                ':payload'=>$payload,
                ':acc'=>'error',
                ':msg'=>'Empresa no existe en catálogo empresas'
            ]);
            continue;
        }

        // Existe empleado?
        $selParams = [':eid'=>$empresa_id, ':no'=>$no_emp];
        if ($selEmpNeedsRfc) $selParams[':rfc'] = $rfc;
        $selEmp->execute($selParams);
        $emp = $selEmp->fetch(PDO::FETCH_ASSOC);

        // Params empleados (solo placeholders presentes)
        $empParams = [];
        foreach ($empDataForSql as $col => $ph) {
            if ($ph === 'NOW()') continue;

            switch ($ph) {
                case ':empresa_id': $empParams[':empresa_id'] = $empresa_id; break;
                case ':no_emp': $empParams[':no_emp'] = $no_emp; break;
                case ':rfc_base': $empParams[':rfc_base'] = $rfc; break;
                case ':curp': $empParams[':curp'] = ($curp !== '' ? $curp : null); break;
                case ':nombre': $empParams[':nombre'] = ($nombre !== '' ? $nombre : null); break;
                case ':ap': $empParams[':ap'] = ($ap !== '' ? $ap : null); break;
                case ':am': $empParams[':am'] = ($am !== '' ? $am : null); break;
                case ':correo': $empParams[':correo'] = null; break;
                case ':es_activo': $empParams[':es_activo'] = $es_activo; break;
                case ':fi': $empParams[':fi'] = $fi; break;
                case ':fb': $empParams[':fb'] = $fb; break;
                case ':tipo_id': $empParams[':tipo_id'] = ($tipo_id !== '' ? $tipo_id : null); break;
                case ':tipo_nom': $empParams[':tipo_nom'] = ($tipo_nom !== '' ? $tipo_nom : null); break;
                case ':dep_id': $empParams[':dep_id'] = ($dep_id !== '' ? $dep_id : null); break;
                case ':dep_nom': $empParams[':dep_nom'] = ($dep_nom !== '' ? $dep_nom : null); break;

                case ':puesto_nomina_id': $empParams[':puesto_nomina_id'] = ($puesto_id_raw !== '' ? $puesto_id_raw : null); break;
                case ':puesto_nomina': $empParams[':puesto_nomina'] = ($puesto_nom !== '' ? $puesto_nom : null); break;

                case ':puesto_del_id': $empParams[':puesto_del_id'] = ($puesto_id_raw !== '' ? $puesto_id_raw : null); break;
                case ':puesto_del': $empParams[':puesto_del'] = ($puesto_nom !== '' ? $puesto_nom : null); break;

                case ':ct_id': $empParams[':ct_id'] = $ct_id; break;
                case ':ct_nom': $empParams[':ct_nom'] = ($ct_nom !== '' ? $ct_nom : null); break;
                case ':jefe_nom': $empParams[':jefe_nom'] = ($jefe_nom !== '' ? $jefe_nom : null); break;
                case ':sd': $empParams[':sd'] = $salario_diario; break;
                case ':sm': $empParams[':sm'] = $salario_mensual; break;
                case ':estatus': $empParams[':estatus'] = 1; break;
            }
        }

        $insEmp->execute($empParams);

        // Re-lee empleado_id
        $selEmp->execute($selParams);
        $emp2 = $selEmp->fetch(PDO::FETCH_ASSOC);
        $empleado_id = $emp2 ? (int)$emp2['empleado_id'] : null;

        $accion = (!$emp ? 'insert' : 'update');
        if (!$emp) $insertados++; else $actualizados++;

        // Usuarios upsert (si existe)
        $pass_hash = password_hash($no_emp, PASSWORD_DEFAULT);

        $usrParams = [];
        foreach ($usrDataForSql as $col => $ph) {
            if ($ph === 'NOW()') continue;

            switch ($ph) {
                case ':no_emp': $usrParams[':no_emp'] = $no_emp; break;
                case ':rfc_base': $usrParams[':rfc_base'] = $rfc; break;
                case ':nombre': $usrParams[':nombre'] = ($nombre !== '' ? $nombre : null); break;
                case ':ap': $usrParams[':ap'] = ($ap !== '' ? $ap : null); break;
                case ':am': $usrParams[':am'] = ($am !== '' ? $am : null); break;
                case ':correo': $usrParams[':correo'] = null; break;
                case ':estatus': $usrParams[':estatus'] = 1; break;
                case ':empleado_id': $usrParams[':empleado_id'] = $empleado_id; break;
                case ':pass_hash': $usrParams[':pass_hash'] = $pass_hash; break;
                case ':debe_cambiar': $usrParams[':debe_cambiar'] = 1; break;
                case ':pass_cambiada': $usrParams[':pass_cambiada'] = 0; break;
            }
        }
        $insUsr->execute($usrParams);

        // Relación usuario-empresa si aplica
        if ($useUE) {
            $selUsrParams = [':no'=>$no_emp];
            if ($selUsrNeedsRfc) $selUsrParams[':rfc'] = $rfc;
            $selUsrId->execute($selUsrParams);
            $u = $selUsrId->fetch(PDO::FETCH_ASSOC);
            if ($u) {
                $insUE->execute([':uid'=>(int)$u['usuario_id'], ':eid'=>$empresa_id]);
            }
        }

        // detalle OK
        $insDet->execute([
            ':iid'=>$import_id,
            ':no'=>$no_emp,
            ':rfc'=>($rfc !== '' ? $rfc : 'SINRFCBASE'),
            ':payload'=>$payload,
            ':acc'=>$accion,
            ':msg'=>'OK'
        ]);
    }

    // Cierre importación
    $msgResumen = "Total={$total}; Insertados={$insertados}; Actualizados={$actualizados}; Errores={$errores}";
    $stmt = $pdo->prepare("
        UPDATE nomina_importaciones
        SET total_registros=:t, status='procesado', mensaje=:msg
        WHERE import_id=:iid
    ");
    $stmt->execute([':t'=>$total, ':msg'=>$msgResumen, ':iid'=>$import_id]);

    $pdo->commit();
    header('Location: importar_nomina.php?ok=1');
    exit;

} catch (Throwable $ex) {
    if (isset($pdo) && $pdo->inTransaction()) $pdo->rollBack();

    $log = __DIR__ . '/../storage/logs/import_nomina_' . date('Ymd') . '.log';
    error_log(date('[Y-m-d H:i:s] ') . $ex->getMessage() . PHP_EOL, 3, $log);

    die("ERROR IMPORTACIÓN: " . $ex->getMessage() . " " . $ex->getFile() . ":" . $ex->getLine() . " Log: " . $log);
}
