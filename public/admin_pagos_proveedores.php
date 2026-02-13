<?php
// public/admin_pagos_proveedores.php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();
require_empresa();
require_password_change_redirect();
require_demograficos_redirect();

// Verificar si el permiso existe, si no, usar organizacion.admin como fallback
if (function_exists('can') && can('pagos_proveedores.admin')) {
    // OK, tiene el permiso específico
} elseif (function_exists('can') && can('organizacion.admin')) {
    // Fallback: Admin de organización puede acceder
} else {
    // Si no tiene ningún permiso, intentar require_perm que redirigirá
    require_perm('organizacion.admin');
}

$empresa_id = (int)$_SESSION['empresa_id'];

// -------------------------
// CSRF token
// -------------------------
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
}
$csrf_token = $_SESSION['csrf_token'];

// -------------------------
// Helpers
// -------------------------
function h($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}

function bitacora($modulo, $accion, $detalle = null) {
    global $pdo;
    if (session_status() === PHP_SESSION_NONE) session_start();

    $empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : null;
    $usuario_id = isset($_SESSION['usuario_id']) ? (int)$_SESSION['usuario_id'] : null;
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;

    $sql = "INSERT INTO bitacora (empresa_id, usuario_id, modulo, accion, detalle_json, ip)
            VALUES (:empresa_id, :usuario_id, :modulo, :accion, :detalle_json, :ip)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':empresa_id' => $empresa_id,
        ':usuario_id' => $usuario_id,
        ':modulo' => (string)$modulo,
        ':accion' => (string)$accion,
        ':detalle_json' => $detalle !== null ? json_encode($detalle, JSON_UNESCAPED_UNICODE) : null,
        ':ip' => $ip,
    ]);
}

// -------------------------
// Handle POST actions
// -------------------------
$flash = null;
$flash_type = 'success';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_token = isset($_POST['csrf_token']) ? (string)$_POST['csrf_token'] : '';
    if (!hash_equals($csrf_token, $post_token)) {
        $flash = 'Solicitud inválida (token).';
        $flash_type = 'danger';
    } else {
        $action = isset($_POST['action']) ? (string)$_POST['action'] : '';

        try {
            $pdo->beginTransaction();

            // ============================================
            // ACCIONES DE PROVEEDORES
            // ============================================
            if ($action === 'save_proveedor') {
                $proveedor_id = isset($_POST['proveedor_id']) ? (int)$_POST['proveedor_id'] : 0;
                $razon_social = trim((string)($_POST['razon_social'] ?? ''));
                $rfc = trim((string)($_POST['rfc'] ?? ''));
                $nombre_comercial = trim((string)($_POST['nombre_comercial'] ?? ''));
                $telefono = trim((string)($_POST['telefono'] ?? ''));
                $email = trim((string)($_POST['email'] ?? ''));
                $banco = trim((string)($_POST['banco'] ?? ''));
                $numero_cuenta = trim((string)($_POST['numero_cuenta'] ?? ''));
                $clabe = trim((string)($_POST['clabe'] ?? ''));
                $tipo_proveedor = (string)($_POST['tipo_proveedor'] ?? 'servicios');
                $categoria = trim((string)($_POST['categoria'] ?? ''));
                $estatus = isset($_POST['estatus']) ? (int)$_POST['estatus'] : 1;
                $notas = trim((string)($_POST['notas'] ?? ''));

                if ($razon_social === '') {
                    throw new RuntimeException('La razón social es obligatoria.');
                }
                if ($rfc === '') {
                    throw new RuntimeException('El RFC es obligatorio.');
                }

                if ($proveedor_id > 0) {
                    // Update
                    $stmt = $pdo->prepare("
                        UPDATE proveedores
                           SET razon_social = :razon_social,
                               rfc = :rfc,
                               nombre_comercial = :nombre_comercial,
                               telefono = :telefono,
                               email = :email,
                               banco = :banco,
                               numero_cuenta = :numero_cuenta,
                               clabe = :clabe,
                               tipo_proveedor = :tipo_proveedor,
                               categoria = :categoria,
                               estatus = :estatus,
                               notas = :notas,
                               updated_by = :updated_by
                         WHERE proveedor_id = :id
                           AND empresa_id = :eid
                         LIMIT 1
                    ");
                    $stmt->execute([
                        ':razon_social' => $razon_social,
                        ':rfc' => $rfc,
                        ':nombre_comercial' => ($nombre_comercial !== '' ? $nombre_comercial : null),
                        ':telefono' => ($telefono !== '' ? $telefono : null),
                        ':email' => ($email !== '' ? $email : null),
                        ':banco' => ($banco !== '' ? $banco : null),
                        ':numero_cuenta' => ($numero_cuenta !== '' ? $numero_cuenta : null),
                        ':clabe' => ($clabe !== '' ? $clabe : null),
                        ':tipo_proveedor' => $tipo_proveedor,
                        ':categoria' => ($categoria !== '' ? $categoria : null),
                        ':estatus' => $estatus,
                        ':notas' => ($notas !== '' ? $notas : null),
                        ':updated_by' => $_SESSION['usuario_id'],
                        ':id' => $proveedor_id,
                        ':eid' => $empresa_id,
                    ]);
                    bitacora('pagos_proveedores', 'update_proveedor', ['proveedor_id' => $proveedor_id]);
                    $flash = 'Proveedor actualizado.';
                } else {
                    // Insert
                    $stmt = $pdo->prepare("
                        INSERT INTO proveedores (empresa_id, razon_social, rfc, nombre_comercial, telefono, email, 
                                                  banco, numero_cuenta, clabe, tipo_proveedor, categoria, estatus, notas, created_by)
                        VALUES (:eid, :razon_social, :rfc, :nombre_comercial, :telefono, :email,
                                :banco, :numero_cuenta, :clabe, :tipo_proveedor, :categoria, :estatus, :notas, :created_by)
                    ");
                    $stmt->execute([
                        ':eid' => $empresa_id,
                        ':razon_social' => $razon_social,
                        ':rfc' => $rfc,
                        ':nombre_comercial' => ($nombre_comercial !== '' ? $nombre_comercial : null),
                        ':telefono' => ($telefono !== '' ? $telefono : null),
                        ':email' => ($email !== '' ? $email : null),
                        ':banco' => ($banco !== '' ? $banco : null),
                        ':numero_cuenta' => ($numero_cuenta !== '' ? $numero_cuenta : null),
                        ':clabe' => ($clabe !== '' ? $clabe : null),
                        ':tipo_proveedor' => $tipo_proveedor,
                        ':categoria' => ($categoria !== '' ? $categoria : null),
                        ':estatus' => $estatus,
                        ':notas' => ($notas !== '' ? $notas : null),
                        ':created_by' => $_SESSION['usuario_id'],
                    ]);
                    $new_id = (int)$pdo->lastInsertId();
                    bitacora('pagos_proveedores', 'insert_proveedor', ['proveedor_id' => $new_id]);
                    $flash = 'Proveedor creado exitosamente.';
                }

            } elseif ($action === 'toggle_proveedor_status') {
                $proveedor_id = isset($_POST['proveedor_id']) ? (int)$_POST['proveedor_id'] : 0;

                $stmt = $pdo->prepare("SELECT estatus FROM proveedores WHERE proveedor_id = :id AND empresa_id = :eid LIMIT 1");
                $stmt->execute([':id' => $proveedor_id, ':eid' => $empresa_id]);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if (!$row) throw new RuntimeException('Proveedor no encontrado.');

                $nuevo = ((int)$row['estatus'] === 1) ? 0 : 1;

                $upd = $pdo->prepare("UPDATE proveedores SET estatus = :n WHERE proveedor_id = :id AND empresa_id = :eid LIMIT 1");
                $upd->execute([':n' => $nuevo, ':id' => $proveedor_id, ':eid' => $empresa_id]);

                bitacora('pagos_proveedores', 'toggle_proveedor_status', ['proveedor_id' => $proveedor_id, 'nuevo' => $nuevo]);
                $flash = 'Estatus del proveedor actualizado.';

            // ============================================
            // ACCIONES DE PAGOS
            // ============================================
            } elseif ($action === 'save_pago') {
                $pago_id = isset($_POST['pago_id']) ? (int)$_POST['pago_id'] : 0;
                $proveedor_id = isset($_POST['proveedor_id']) ? (int)$_POST['proveedor_id'] : 0;
                $fecha_solicitud = trim((string)($_POST['fecha_solicitud'] ?? ''));
                $fecha_limite_pago = trim((string)($_POST['fecha_limite_pago'] ?? ''));
                $concepto = trim((string)($_POST['concepto'] ?? ''));
                $subtotal = isset($_POST['subtotal']) ? (float)$_POST['subtotal'] : 0;
                $iva = isset($_POST['iva']) ? (float)$_POST['iva'] : 0;
                $retenciones = isset($_POST['retenciones']) ? (float)$_POST['retenciones'] : 0;
                $total = isset($_POST['total']) ? (float)$_POST['total'] : 0;
                $numero_factura = trim((string)($_POST['numero_factura'] ?? ''));
                $numero_contrato = trim((string)($_POST['numero_contrato'] ?? ''));
                $unidad_id = isset($_POST['unidad_id']) && $_POST['unidad_id'] !== '' ? (int)$_POST['unidad_id'] : null;
                $estatus = (string)($_POST['estatus'] ?? 'borrador');
                $prioridad = (string)($_POST['prioridad'] ?? 'normal');
                $notas = trim((string)($_POST['notas'] ?? ''));

                if ($proveedor_id === 0) {
                    throw new RuntimeException('Debe seleccionar un proveedor.');
                }
                if ($concepto === '') {
                    throw new RuntimeException('El concepto es obligatorio.');
                }
                if ($fecha_solicitud === '') {
                    throw new RuntimeException('La fecha de solicitud es obligatoria.');
                }

                if ($pago_id > 0) {
                    // Update
                    $stmt = $pdo->prepare("
                        UPDATE pago_proveedores
                           SET proveedor_id = :proveedor_id,
                               fecha_solicitud = :fecha_solicitud,
                               fecha_limite_pago = :fecha_limite_pago,
                               concepto = :concepto,
                               subtotal = :subtotal,
                               iva = :iva,
                               retenciones = :retenciones,
                               total = :total,
                               numero_factura = :numero_factura,
                               numero_contrato = :numero_contrato,
                               unidad_id = :unidad_id,
                               estatus = :estatus,
                               prioridad = :prioridad,
                               notas = :notas,
                               updated_by = :updated_by
                         WHERE pago_id = :id
                           AND empresa_id = :eid
                         LIMIT 1
                    ");
                    $stmt->execute([
                        ':proveedor_id' => $proveedor_id,
                        ':fecha_solicitud' => $fecha_solicitud,
                        ':fecha_limite_pago' => ($fecha_limite_pago !== '' ? $fecha_limite_pago : null),
                        ':concepto' => $concepto,
                        ':subtotal' => $subtotal,
                        ':iva' => $iva,
                        ':retenciones' => $retenciones,
                        ':total' => $total,
                        ':numero_factura' => ($numero_factura !== '' ? $numero_factura : null),
                        ':numero_contrato' => ($numero_contrato !== '' ? $numero_contrato : null),
                        ':unidad_id' => $unidad_id,
                        ':estatus' => $estatus,
                        ':prioridad' => $prioridad,
                        ':notas' => ($notas !== '' ? $notas : null),
                        ':updated_by' => $_SESSION['usuario_id'],
                        ':id' => $pago_id,
                        ':eid' => $empresa_id,
                    ]);
                    bitacora('pagos_proveedores', 'update_pago', ['pago_id' => $pago_id]);
                    $flash = 'Solicitud de pago actualizada.';
                } else {
                    // Generar folio
                    $year = date('Y');
                    $stmt = $pdo->prepare("SELECT COUNT(*) as total FROM pago_proveedores WHERE empresa_id = :eid AND YEAR(fecha_solicitud) = :year");
                    $stmt->execute([':eid' => $empresa_id, ':year' => $year]);
                    $count = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
                    $folio = 'PAG-' . $year . '-' . str_pad($count + 1, 4, '0', STR_PAD_LEFT);

                    // Insert
                    $stmt = $pdo->prepare("
                        INSERT INTO pago_proveedores (empresa_id, proveedor_id, folio, fecha_solicitud, fecha_limite_pago,
                                                       concepto, subtotal, iva, retenciones, total, numero_factura, numero_contrato,
                                                       unidad_id, estatus, prioridad, notas, created_by)
                        VALUES (:eid, :proveedor_id, :folio, :fecha_solicitud, :fecha_limite_pago,
                                :concepto, :subtotal, :iva, :retenciones, :total, :numero_factura, :numero_contrato,
                                :unidad_id, :estatus, :prioridad, :notas, :created_by)
                    ");
                    $stmt->execute([
                        ':eid' => $empresa_id,
                        ':proveedor_id' => $proveedor_id,
                        ':folio' => $folio,
                        ':fecha_solicitud' => $fecha_solicitud,
                        ':fecha_limite_pago' => ($fecha_limite_pago !== '' ? $fecha_limite_pago : null),
                        ':concepto' => $concepto,
                        ':subtotal' => $subtotal,
                        ':iva' => $iva,
                        ':retenciones' => $retenciones,
                        ':total' => $total,
                        ':numero_factura' => ($numero_factura !== '' ? $numero_factura : null),
                        ':numero_contrato' => ($numero_contrato !== '' ? $numero_contrato : null),
                        ':unidad_id' => $unidad_id,
                        ':estatus' => $estatus,
                        ':prioridad' => $prioridad,
                        ':notas' => ($notas !== '' ? $notas : null),
                        ':created_by' => $_SESSION['usuario_id'],
                    ]);
                    $new_id = (int)$pdo->lastInsertId();
                    bitacora('pagos_proveedores', 'insert_pago', ['pago_id' => $new_id, 'folio' => $folio]);
                    $flash = 'Solicitud de pago creada exitosamente con folio: ' . $folio;
                }

            } elseif ($action === 'cambiar_estatus_pago') {
                $pago_id = isset($_POST['pago_id']) ? (int)$_POST['pago_id'] : 0;
                $nuevo_estatus = (string)($_POST['nuevo_estatus'] ?? '');
                $comentario = trim((string)($_POST['comentario'] ?? ''));

                if ($nuevo_estatus === '') {
                    throw new RuntimeException('Debe especificar el nuevo estatus.');
                }

                // Obtener estatus actual
                $stmt = $pdo->prepare("SELECT estatus FROM pago_proveedores WHERE pago_id = :id AND empresa_id = :eid");
                $stmt->execute([':id' => $pago_id, ':eid' => $empresa_id]);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if (!$row) throw new RuntimeException('Solicitud no encontrada.');

                $estatus_anterior = $row['estatus'];

                // Actualizar estatus
                $upd = $pdo->prepare("UPDATE pago_proveedores SET estatus = :nuevo, updated_by = :updated_by WHERE pago_id = :id AND empresa_id = :eid");
                $upd->execute([':nuevo' => $nuevo_estatus, ':updated_by' => $_SESSION['usuario_id'], ':id' => $pago_id, ':eid' => $empresa_id]);

                // Registrar en historial
                $hist = $pdo->prepare("INSERT INTO pago_proveedores_historial (pago_id, estatus_anterior, estatus_nuevo, comentario, created_by) 
                                        VALUES (:pago_id, :anterior, :nuevo, :comentario, :created_by)");
                $hist->execute([
                    ':pago_id' => $pago_id,
                    ':anterior' => $estatus_anterior,
                    ':nuevo' => $nuevo_estatus,
                    ':comentario' => ($comentario !== '' ? $comentario : null),
                    ':created_by' => $_SESSION['usuario_id'],
                ]);

                bitacora('pagos_proveedores', 'cambiar_estatus', ['pago_id' => $pago_id, 'de' => $estatus_anterior, 'a' => $nuevo_estatus]);
                $flash = 'Estatus cambiado de "' . $estatus_anterior . '" a "' . $nuevo_estatus . '"';

            } elseif ($action === 'subir_documento') {
                $pago_id = isset($_POST['pago_id']) ? (int)$_POST['pago_id'] : 0;
                $tipo_documento = (string)($_POST['tipo_documento'] ?? 'otro');
                $descripcion = trim((string)($_POST['descripcion'] ?? ''));

                if ($pago_id === 0) {
                    throw new RuntimeException('ID de pago inválido.');
                }

                // Verificar que existe el pago
                $stmt = $pdo->prepare("SELECT folio FROM pago_proveedores WHERE pago_id = :id AND empresa_id = :eid");
                $stmt->execute([':id' => $pago_id, ':eid' => $empresa_id]);
                if (!$stmt->fetch()) {
                    throw new RuntimeException('Solicitud de pago no encontrada.');
                }

                // Validar archivo
                if (!isset($_FILES['archivo']) || $_FILES['archivo']['error'] !== UPLOAD_ERR_OK) {
                    throw new RuntimeException('Debe seleccionar un archivo válido.');
                }

                $file = $_FILES['archivo'];
                $nombre_original = basename($file['name']);
                $extension = strtolower(pathinfo($nombre_original, PATHINFO_EXTENSION));
                $allowed = ['pdf', 'jpg', 'jpeg', 'png', 'doc', 'docx', 'xls', 'xlsx'];

                if (!in_array($extension, $allowed)) {
                    throw new RuntimeException('Tipo de archivo no permitido. Permitidos: ' . implode(', ', $allowed));
                }

                // Crear directorio si no existe
                $upload_dir = __DIR__ . '/../storage/pagos_documentos/';
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0755, true);
                }

                // Generar nombre único
                $nombre_archivo = 'pago_' . $pago_id . '_' . time() . '_' . uniqid() . '.' . $extension;
                $ruta_completa = $upload_dir . $nombre_archivo;

                if (!move_uploaded_file($file['tmp_name'], $ruta_completa)) {
                    throw new RuntimeException('Error al guardar el archivo.');
                }

                // Guardar en BD
                $stmt = $pdo->prepare("
                    INSERT INTO pago_proveedores_documentos 
                    (pago_id, nombre_archivo, nombre_original, tipo_documento, ruta_archivo, mime_type, tamano_bytes, descripcion, uploaded_by)
                    VALUES (:pago_id, :nombre_archivo, :nombre_original, :tipo_documento, :ruta_archivo, :mime_type, :tamano, :descripcion, :uploaded_by)
                ");
                $stmt->execute([
                    ':pago_id' => $pago_id,
                    ':nombre_archivo' => $nombre_archivo,
                    ':nombre_original' => $nombre_original,
                    ':tipo_documento' => $tipo_documento,
                    ':ruta_archivo' => $nombre_archivo,
                    ':mime_type' => $file['type'],
                    ':tamano' => $file['size'],
                    ':descripcion' => ($descripcion !== '' ? $descripcion : null),
                    ':uploaded_by' => $_SESSION['usuario_id'],
                ]);

                bitacora('pagos_proveedores', 'subir_documento', ['pago_id' => $pago_id, 'tipo' => $tipo_documento, 'archivo' => $nombre_original]);
                $flash = 'Documento subido exitosamente.';

            } elseif ($action === 'eliminar_documento') {
                $documento_id = isset($_POST['documento_id']) ? (int)$_POST['documento_id'] : 0;

                // Obtener info del documento
                $stmt = $pdo->prepare("
                    SELECT d.*, p.empresa_id 
                    FROM pago_proveedores_documentos d
                    JOIN pago_proveedores p ON p.pago_id = d.pago_id
                    WHERE d.documento_id = :id
                ");
                $stmt->execute([':id' => $documento_id]);
                $doc = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!$doc || $doc['empresa_id'] != $empresa_id) {
                    throw new RuntimeException('Documento no encontrado.');
                }

                // Eliminar archivo físico
                $archivo_path = __DIR__ . '/../storage/pagos_documentos/' . $doc['nombre_archivo'];
                if (file_exists($archivo_path)) {
                    unlink($archivo_path);
                }

                // Eliminar de BD
                $stmt = $pdo->prepare("DELETE FROM pago_proveedores_documentos WHERE documento_id = :id");
                $stmt->execute([':id' => $documento_id]);

                bitacora('pagos_proveedores', 'eliminar_documento', ['documento_id' => $documento_id]);
                $flash = 'Documento eliminado.';

            } else {
                $flash = 'Acción no reconocida.';
                $flash_type = 'warning';
            }

            $pdo->commit();
        } catch (Throwable $e) {
            if ($pdo->inTransaction()) $pdo->rollBack();
            $flash = 'Error: ' . $e->getMessage();
            $flash_type = 'danger';
        }
    }
}

// -------------------------
// Vista activa (tab)
// -------------------------
$vista = isset($_GET['vista']) ? (string)$_GET['vista'] : 'proveedores';
if (!in_array($vista, ['proveedores', 'pagos'], true)) {
    $vista = 'proveedores';
}

// -------------------------
// Cargar datos de PROVEEDORES
// -------------------------
$f_q_prov = isset($_GET['q_prov']) ? trim((string)$_GET['q_prov']) : '';
$f_estatus_prov = isset($_GET['estatus_prov']) ? trim((string)$_GET['estatus_prov']) : '';
$f_tipo_prov = isset($_GET['tipo_prov']) ? trim((string)$_GET['tipo_prov']) : '';

$where_prov = ["p.empresa_id = :eid"];
$params_prov = [':eid' => $empresa_id];

if ($f_estatus_prov !== '' && in_array($f_estatus_prov, ['0','1'], true)) {
    $where_prov[] = "p.estatus = :estatus";
    $params_prov[':estatus'] = (int)$f_estatus_prov;
}

if ($f_tipo_prov !== '') {
    $where_prov[] = "p.tipo_proveedor = :tipo";
    $params_prov[':tipo'] = $f_tipo_prov;
}

if ($f_q_prov !== '') {
    $where_prov[] = "(p.razon_social LIKE :q1 OR p.rfc LIKE :q2 OR p.nombre_comercial LIKE :q3)";
    $q = '%' . $f_q_prov . '%';
    $params_prov[':q1'] = $q;
    $params_prov[':q2'] = $q;
    $params_prov[':q3'] = $q;
}

$where_sql_prov = 'WHERE ' . implode(' AND ', $where_prov);

$sql_prov = "
    SELECT
      p.proveedor_id,
      p.razon_social,
      p.rfc,
      p.nombre_comercial,
      p.telefono,
      p.email,
      p.banco,
      p.numero_cuenta,
      p.clabe,
      p.tipo_proveedor,
      p.categoria,
      p.estatus,
      p.notas,
      p.created_at
    FROM proveedores p
    $where_sql_prov
    ORDER BY p.estatus DESC, p.razon_social ASC
";
$stmt_prov = $pdo->prepare($sql_prov);
$stmt_prov->execute($params_prov);
$proveedores = $stmt_prov->fetchAll(PDO::FETCH_ASSOC);

// -------------------------
// Cargar datos de PAGOS
// -------------------------
$f_q_pago = isset($_GET['q_pago']) ? trim((string)$_GET['q_pago']) : '';
$f_estatus_pago = isset($_GET['estatus_pago']) ? trim((string)$_GET['estatus_pago']) : '';
$f_prioridad_pago = isset($_GET['prioridad_pago']) ? trim((string)$_GET['prioridad_pago']) : '';

$where_pago = ["pg.empresa_id = :eid"];
$params_pago = [':eid' => $empresa_id];

if ($f_estatus_pago !== '') {
    $where_pago[] = "pg.estatus = :estatus";
    $params_pago[':estatus'] = $f_estatus_pago;
}

if ($f_prioridad_pago !== '') {
    $where_pago[] = "pg.prioridad = :prioridad";
    $params_pago[':prioridad'] = $f_prioridad_pago;
}

if ($f_q_pago !== '') {
    $where_pago[] = "(pg.folio LIKE :q1 OR pg.concepto LIKE :q2 OR prov.razon_social LIKE :q3)";
    $q = '%' . $f_q_pago . '%';
    $params_pago[':q1'] = $q;
    $params_pago[':q2'] = $q;
    $params_pago[':q3'] = $q;
}

$where_sql_pago = 'WHERE ' . implode(' AND ', $where_pago);

$sql_pago = "
    SELECT
      pg.pago_id,
      pg.folio,
      pg.fecha_solicitud,
      pg.fecha_limite_pago,
      pg.concepto,
      pg.total,
      pg.estatus,
      pg.prioridad,
      pg.numero_factura,
      prov.razon_social AS proveedor_nombre,
      prov.rfc AS proveedor_rfc,
      u.nombre AS unidad_nombre,
      pg.created_at
    FROM pago_proveedores pg
    LEFT JOIN proveedores prov ON prov.proveedor_id = pg.proveedor_id
    LEFT JOIN org_unidades u ON u.unidad_id = pg.unidad_id
    $where_sql_pago
    ORDER BY pg.fecha_solicitud DESC, pg.pago_id DESC
";
$stmt_pago = $pdo->prepare($sql_pago);
$stmt_pago->execute($params_pago);
$pagos = $stmt_pago->fetchAll(PDO::FETCH_ASSOC);

// Combo proveedores activos
$stmt_combo = $pdo->prepare("SELECT proveedor_id, razon_social, rfc FROM proveedores WHERE empresa_id = :eid AND estatus = 1 ORDER BY razon_social");
$stmt_combo->execute([':eid' => $empresa_id]);
$proveedores_combo = $stmt_combo->fetchAll(PDO::FETCH_ASSOC);

// Combo unidades
$stmt_unidades = $pdo->prepare("SELECT unidad_id, nombre FROM org_unidades WHERE empresa_id = :eid AND estatus = 1 ORDER BY nombre");
$stmt_unidades->execute([':eid' => $empresa_id]);
$unidades_combo = $stmt_unidades->fetchAll(PDO::FETCH_ASSOC);

// -------------------------
// Estadísticas rápidas
// -------------------------
$stats = [
    'proveedores_activos' => 0,
    'pagos_pendientes' => 0,
    'pagos_autorizados' => 0,
    'monto_pendiente' => 0,
];

$stmt_stats = $pdo->prepare("SELECT COUNT(*) as total FROM proveedores WHERE empresa_id = :eid AND estatus = 1");
$stmt_stats->execute([':eid' => $empresa_id]);
$stats['proveedores_activos'] = (int)$stmt_stats->fetch(PDO::FETCH_ASSOC)['total'];

$stmt_stats = $pdo->prepare("SELECT COUNT(*) as total FROM pago_proveedores WHERE empresa_id = :eid AND estatus = 'pendiente'");
$stmt_stats->execute([':eid' => $empresa_id]);
$stats['pagos_pendientes'] = (int)$stmt_stats->fetch(PDO::FETCH_ASSOC)['total'];

$stmt_stats = $pdo->prepare("SELECT COUNT(*) as total FROM pago_proveedores WHERE empresa_id = :eid AND estatus = 'autorizado'");
$stmt_stats->execute([':eid' => $empresa_id]);
$stats['pagos_autorizados'] = (int)$stmt_stats->fetch(PDO::FETCH_ASSOC)['total'];

$stmt_stats = $pdo->prepare("SELECT SUM(total) as total FROM pago_proveedores WHERE empresa_id = :eid AND estatus IN ('pendiente', 'revision', 'autorizado')");
$stmt_stats->execute([':eid' => $empresa_id]);
$stats['monto_pendiente'] = (float)$stmt_stats->fetch(PDO::FETCH_ASSOC)['total'];

// UI vars
$page_title = 'Administración de Pagos a Proveedores';
$active_menu = 'admin_pagos_proveedores';
$extra_css = [
    'global_assets/css/icons/icomoon/styles.min.css',
    'global_assets/css/plugins/tables/datatables/datatables.min.css',
    'global_assets/css/plugins/forms/selects/select2.min.css',
];
$extra_js = [
    'global_assets/js/plugins/tables/datatables/datatables.min.js',
    'global_assets/js/plugins/forms/selects/select2.min.js',
];

require_once __DIR__ . '/../includes/layout/head.php';
require_once __DIR__ . '/../includes/layout/navbar.php';
require_once __DIR__ . '/../includes/layout/sidebar.php';
require_once __DIR__ . '/../includes/layout/content_open.php';
?>

<div class="page-header page-header-light">
    <div class="page-header-content header-elements-lg-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-cart mr-2"></i><span class="font-weight-semibold"><?php echo h($page_title); ?></span></h4>
        </div>
    </div>
    <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?php echo ASSET_BASE; ?>public/dashboard.php" class="breadcrumb-item">
                    <i class="icon-home2 mr-2"></i> Inicio
                </a>
                <span class="breadcrumb-item">Administración</span>
                <span class="breadcrumb-item active">Pagos a Proveedores</span>
            </div>
        </div>
    </div>
</div>

<div class="content">

    <?php if ($flash): ?>
        <div class="alert alert-<?php echo h($flash_type); ?> alert-styled-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            <?php echo h($flash); ?>
        </div>
    <?php endif; ?>

    <!-- Estadísticas -->
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card card-body">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-users4 icon-3x text-success"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="font-weight-semibold mb-0"><?php echo number_format($stats['proveedores_activos']); ?></h3>
                        <span class="text-uppercase font-size-sm text-muted">Proveedores Activos</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-hour-glass2 icon-3x text-warning"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="font-weight-semibold mb-0"><?php echo number_format($stats['pagos_pendientes']); ?></h3>
                        <span class="text-uppercase font-size-sm text-muted">Pagos Pendientes</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-checkmark-circle icon-3x text-info"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="font-weight-semibold mb-0"><?php echo number_format($stats['pagos_autorizados']); ?></h3>
                        <span class="text-uppercase font-size-sm text-muted">Autorizados</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-cash3 icon-3x text-primary"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="font-weight-semibold mb-0">$<?php echo number_format($stats['monto_pendiente'], 2); ?></h3>
                        <span class="text-uppercase font-size-sm text-muted">Monto Pendiente</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-tabs nav-tabs-highlight mb-3">
        <li class="nav-item">
            <a href="?vista=proveedores" class="nav-link <?php echo $vista === 'proveedores' ? 'active' : ''; ?>">
                <i class="icon-users4 mr-2"></i> Proveedores
            </a>
        </li>
        <li class="nav-item">
            <a href="?vista=pagos" class="nav-link <?php echo $vista === 'pagos' ? 'active' : ''; ?>">
                <i class="icon-cash mr-2"></i> Solicitudes de Pago
            </a>
        </li>
    </ul>

    <?php if ($vista === 'proveedores'): ?>
    <!-- ===================== TAB: PROVEEDORES ===================== -->
    
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Filtros</h5>
        </div>
        <div class="card-body">
            <form method="get" action="" class="row">
                <input type="hidden" name="vista" value="proveedores">
                <div class="col-md-4">
                    <label>Búsqueda</label>
                    <input type="text" class="form-control" name="q_prov" value="<?php echo h($f_q_prov); ?>" placeholder="Razón social, RFC, nombre comercial">
                </div>
                <div class="col-md-3">
                    <label>Tipo</label>
                    <select class="form-control" name="tipo_prov">
                        <option value="">Todos</option>
                        <option value="bienes" <?php echo $f_tipo_prov === 'bienes' ? 'selected' : ''; ?>>Bienes</option>
                        <option value="servicios" <?php echo $f_tipo_prov === 'servicios' ? 'selected' : ''; ?>>Servicios</option>
                        <option value="construccion" <?php echo $f_tipo_prov === 'construccion' ? 'selected' : ''; ?>>Construcción</option>
                        <option value="arrendamiento" <?php echo $f_tipo_prov === 'arrendamiento' ? 'selected' : ''; ?>>Arrendamiento</option>
                        <option value="otro" <?php echo $f_tipo_prov === 'otro' ? 'selected' : ''; ?>>Otro</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Estatus</label>
                    <select class="form-control" name="estatus_prov">
                        <option value="">Todos</option>
                        <option value="1" <?php echo $f_estatus_prov === '1' ? 'selected' : ''; ?>>Activo</option>
                        <option value="0" <?php echo $f_estatus_prov === '0' ? 'selected' : ''; ?>>Inactivo</option>
                    </select>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="icon-search4 mr-2"></i> Aplicar
                    </button>
                    <a href="?vista=proveedores" class="btn btn-light ml-2">Limpiar</a>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Catálogo de Proveedores</h5>
            <div class="header-elements">
                <span class="badge badge-info"><?php echo count($proveedores); ?> registros</span>
            </div>
        </div>

        <div class="card-body">
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal_proveedor" onclick="openProveedorCreate()">
                <i class="icon-plus2 mr-2"></i>Nuevo proveedor
            </button>
        </div>

        <div class="table-responsive">
            <table class="table" id="tabla_proveedores">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Razón Social</th>
                        <th>RFC</th>
                        <th>Nombre Comercial</th>
                        <th>Tipo</th>
                        <th>Contacto</th>
                        <th>Estatus</th>
                        <th style="width: 150px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($proveedores as $p): ?>
                        <tr>
                            <td><?php echo (int)$p['proveedor_id']; ?></td>
                            <td><?php echo h($p['razon_social']); ?></td>
                            <td><?php echo h($p['rfc']); ?></td>
                            <td><?php echo h($p['nombre_comercial'] ?? '-'); ?></td>
                            <td>
                                <span class="badge badge-secondary"><?php echo h($p['tipo_proveedor']); ?></span>
                            </td>
                            <td>
                                <?php if ($p['telefono']): ?>
                                    <i class="icon-phone2 text-muted mr-1"></i><?php echo h($p['telefono']); ?><br>
                                <?php endif; ?>
                                <?php if ($p['email']): ?>
                                    <i class="icon-mail5 text-muted mr-1"></i><?php echo h($p['email']); ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ((int)$p['estatus'] === 1): ?>
                                    <span class="badge badge-success">Activo</span>
                                <?php else: ?>
                                    <span class="badge badge-secondary">Inactivo</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-outline-primary btn-sm mr-1"
                                            data-toggle="modal" data-target="#modal_proveedor"
                                            onclick='openProveedorEdit(<?php echo json_encode($p, JSON_UNESCAPED_UNICODE); ?>)'>
                                        <i class="icon-pencil7"></i>
                                    </button>

                                    <form method="post" action="" class="mr-1">
                                        <input type="hidden" name="csrf_token" value="<?php echo h($csrf_token); ?>">
                                        <input type="hidden" name="action" value="toggle_proveedor_status">
                                        <input type="hidden" name="proveedor_id" value="<?php echo (int)$p['proveedor_id']; ?>">
                                        <button type="submit" class="btn btn-outline-secondary btn-sm" title="Activar / inactivar">
                                            <i class="icon-sync"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php else: ?>
    <!-- ===================== TAB: PAGOS ===================== -->
    
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Filtros</h5>
        </div>
        <div class="card-body">
            <form method="get" action="" class="row">
                <input type="hidden" name="vista" value="pagos">
                <div class="col-md-4">
                    <label>Búsqueda</label>
                    <input type="text" class="form-control" name="q_pago" value="<?php echo h($f_q_pago); ?>" placeholder="Folio, concepto, proveedor">
                </div>
                <div class="col-md-3">
                    <label>Estatus</label>
                    <select class="form-control" name="estatus_pago">
                        <option value="">Todos</option>
                        <option value="borrador" <?php echo $f_estatus_pago === 'borrador' ? 'selected' : ''; ?>>Borrador</option>
                        <option value="pendiente" <?php echo $f_estatus_pago === 'pendiente' ? 'selected' : ''; ?>>Pendiente</option>
                        <option value="revision" <?php echo $f_estatus_pago === 'revision' ? 'selected' : ''; ?>>En Revisión</option>
                        <option value="autorizado" <?php echo $f_estatus_pago === 'autorizado' ? 'selected' : ''; ?>>Autorizado</option>
                        <option value="rechazado" <?php echo $f_estatus_pago === 'rechazado' ? 'selected' : ''; ?>>Rechazado</option>
                        <option value="pagado" <?php echo $f_estatus_pago === 'pagado' ? 'selected' : ''; ?>>Pagado</option>
                        <option value="cancelado" <?php echo $f_estatus_pago === 'cancelado' ? 'selected' : ''; ?>>Cancelado</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Prioridad</label>
                    <select class="form-control" name="prioridad_pago">
                        <option value="">Todas</option>
                        <option value="baja" <?php echo $f_prioridad_pago === 'baja' ? 'selected' : ''; ?>>Baja</option>
                        <option value="normal" <?php echo $f_prioridad_pago === 'normal' ? 'selected' : ''; ?>>Normal</option>
                        <option value="alta" <?php echo $f_prioridad_pago === 'alta' ? 'selected' : ''; ?>>Alta</option>
                        <option value="urgente" <?php echo $f_prioridad_pago === 'urgente' ? 'selected' : ''; ?>>Urgente</option>
                    </select>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="icon-search4 mr-2"></i> Aplicar
                    </button>
                    <a href="?vista=pagos" class="btn btn-light ml-2">Limpiar</a>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Solicitudes de Pago</h5>
            <div class="header-elements">
                <span class="badge badge-info"><?php echo count($pagos); ?> registros</span>
            </div>
        </div>

        <div class="card-body">
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal_pago" onclick="openPagoCreate()">
                <i class="icon-plus2 mr-2"></i>Nueva solicitud de pago
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-hover" id="tabla_pagos">
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Fecha</th>
                        <th>Proveedor</th>
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Unidad</th>
                        <th>Prioridad</th>
                        <th>Estatus</th>
                        <th style="width: 150px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pagos as $pg): ?>
                        <tr>
                            <td><strong><?php echo h($pg['folio']); ?></strong></td>
                            <td><?php echo date('d/m/Y', strtotime($pg['fecha_solicitud'])); ?></td>
                            <td>
                                <?php echo h($pg['proveedor_nombre']); ?><br>
                                <small class="text-muted"><?php echo h($pg['proveedor_rfc']); ?></small>
                            </td>
                            <td><?php echo h(substr($pg['concepto'], 0, 60)) . (strlen($pg['concepto']) > 60 ? '...' : ''); ?></td>
                            <td><strong>$<?php echo number_format($pg['total'], 2); ?></strong></td>
                            <td><?php echo h($pg['unidad_nombre'] ?? '-'); ?></td>
                            <td>
                                <?php
                                $prioridad_color = [
                                    'baja' => 'secondary',
                                    'normal' => 'info',
                                    'alta' => 'warning',
                                    'urgente' => 'danger'
                                ];
                                ?>
                                <span class="badge badge-<?php echo $prioridad_color[$pg['prioridad']] ?? 'secondary'; ?>">
                                    <?php echo h($pg['prioridad']); ?>
                                </span>
                            </td>
                            <td>
                                <?php
                                $estatus_color = [
                                    'borrador' => 'secondary',
                                    'pendiente' => 'warning',
                                    'revision' => 'info',
                                    'autorizado' => 'primary',
                                    'rechazado' => 'danger',
                                    'pagado' => 'success',
                                    'cancelado' => 'dark'
                                ];
                                ?>
                                <span class="badge badge-<?php echo $estatus_color[$pg['estatus']] ?? 'secondary'; ?>">
                                    <?php echo h($pg['estatus']); ?>
                                </span>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info btn-sm"
                                            data-toggle="modal" data-target="#modal_cambiar_estatus"
                                            onclick='openCambiarEstatus(<?php echo (int)$pg['pago_id']; ?>, "<?php echo h($pg['folio']); ?>", "<?php echo h($pg['estatus']); ?>")' 
                                            title="Cambiar estatus">
                                        <i class="icon-diff"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                            data-toggle="modal" data-target="#modal_documentos"
                                            onclick='openDocumentos(<?php echo (int)$pg['pago_id']; ?>, "<?php echo h($pg['folio']); ?>")'
                                            title="Documentos">
                                        <i class="icon-file-text2"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-warning btn-sm"
                                            data-toggle="modal" data-target="#modal_historial"
                                            onclick='verHistorial(<?php echo (int)$pg['pago_id']; ?>, "<?php echo h($pg['folio']); ?>")'
                                            title="Ver historial">
                                        <i class="icon-history"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary btn-sm"
                                            data-toggle="modal" data-target="#modal_ver_pago"
                                            onclick='verDetallePago(<?php echo (int)$pg['pago_id']; ?>)'
                                            title="Ver detalle">
                                        <i class="icon-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php endif; ?>

</div>

<!-- Modal: Proveedor -->
<div class="modal fade" id="modal_proveedor" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <form method="post" action="?vista=proveedores" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_proveedor_title">Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      </div>

      <div class="modal-body">
        <input type="hidden" name="csrf_token" value="<?php echo h($csrf_token); ?>">
        <input type="hidden" name="action" value="save_proveedor">
        <input type="hidden" name="proveedor_id" id="proveedor_id" value="0">

        <div class="row">
          <div class="col-md-8">
            <label>Razón Social *</label>
            <input type="text" class="form-control" name="razon_social" id="razon_social" required>
          </div>
          <div class="col-md-4">
            <label>RFC *</label>
            <input type="text" class="form-control" name="rfc" id="rfc" required maxlength="13">
          </div>

          <div class="col-md-6 mt-3">
            <label>Nombre Comercial</label>
            <input type="text" class="form-control" name="nombre_comercial" id="nombre_comercial">
          </div>
          <div class="col-md-6 mt-3">
            <label>Tipo de Proveedor *</label>
            <select class="form-control" name="tipo_proveedor" id="tipo_proveedor" required>
              <option value="servicios">Servicios</option>
              <option value="bienes">Bienes</option>
              <option value="construccion">Construcción</option>
              <option value="arrendamiento">Arrendamiento</option>
              <option value="otro">Otro</option>
            </select>
          </div>

          <div class="col-md-6 mt-3">
            <label>Categoría</label>
            <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Ej: tecnología, limpieza, papelería">
          </div>
          <div class="col-md-6 mt-3">
            <label>Teléfono</label>
            <input type="text" class="form-control" name="telefono" id="telefono">
          </div>

          <div class="col-md-6 mt-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="col-md-6 mt-3">
            <label>Estatus</label>
            <select class="form-control" name="estatus" id="estatus">
              <option value="1">Activo</option>
              <option value="0">Inactivo</option>
            </select>
          </div>

          <div class="col-md-12 mt-3">
            <h6 class="font-weight-semibold">Datos Bancarios</h6>
          </div>

          <div class="col-md-4 mt-2">
            <label>Banco</label>
            <input type="text" class="form-control" name="banco" id="banco">
          </div>
          <div class="col-md-4 mt-2">
            <label>Número de Cuenta</label>
            <input type="text" class="form-control" name="numero_cuenta" id="numero_cuenta">
          </div>
          <div class="col-md-4 mt-2">
            <label>CLABE</label>
            <input type="text" class="form-control" name="clabe" id="clabe" maxlength="18">
          </div>

          <div class="col-md-12 mt-3">
            <label>Notas</label>
            <textarea class="form-control" name="notas" id="notas" rows="2"></textarea>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal: Pago -->
<div class="modal fade" id="modal_pago" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <form method="post" action="?vista=pagos" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_pago_title">Nueva Solicitud de Pago</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      </div>

      <div class="modal-body">
        <input type="hidden" name="csrf_token" value="<?php echo h($csrf_token); ?>">
        <input type="hidden" name="action" value="save_pago">
        <input type="hidden" name="pago_id" id="pago_id" value="0">

        <div class="row">
          <div class="col-md-6">
            <label>Proveedor *</label>
            <select class="form-control select2" name="proveedor_id" id="proveedor_id_pago" required>
              <option value="">Seleccione...</option>
              <?php foreach ($proveedores_combo as $pc): ?>
                <option value="<?php echo (int)$pc['proveedor_id']; ?>">
                  <?php echo h($pc['razon_social']) . ' - ' . h($pc['rfc']); ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-md-3">
            <label>Fecha de Solicitud *</label>
            <input type="date" class="form-control" name="fecha_solicitud" id="fecha_solicitud" required>
          </div>
          <div class="col-md-3">
            <label>Fecha Límite de Pago</label>
            <input type="date" class="form-control" name="fecha_limite_pago" id="fecha_limite_pago">
          </div>

          <div class="col-md-12 mt-3">
            <label>Concepto *</label>
            <textarea class="form-control" name="concepto" id="concepto" rows="2" required></textarea>
          </div>

          <div class="col-md-3 mt-3">
            <label>Subtotal *</label>
            <input type="number" class="form-control" name="subtotal" id="subtotal" step="0.01" min="0" required onchange="calcularTotal()">
          </div>
          <div class="col-md-3 mt-3">
            <label>IVA</label>
            <input type="number" class="form-control" name="iva" id="iva" step="0.01" min="0" value="0" onchange="calcularTotal()">
          </div>
          <div class="col-md-3 mt-3">
            <label>Retenciones</label>
            <input type="number" class="form-control" name="retenciones" id="retenciones" step="0.01" min="0" value="0" onchange="calcularTotal()">
          </div>
          <div class="col-md-3 mt-3">
            <label>Total *</label>
            <input type="number" class="form-control" name="total" id="total" step="0.01" min="0" required readonly>
          </div>

          <div class="col-md-4 mt-3">
            <label>Número de Factura</label>
            <input type="text" class="form-control" name="numero_factura" id="numero_factura">
          </div>
          <div class="col-md-4 mt-3">
            <label>Número de Contrato</label>
            <input type="text" class="form-control" name="numero_contrato" id="numero_contrato">
          </div>
          <div class="col-md-4 mt-3">
            <label>Unidad Solicitante</label>
            <select class="form-control" name="unidad_id" id="unidad_id">
              <option value="">Seleccione...</option>
              <?php foreach ($unidades_combo as $u): ?>
                <option value="<?php echo (int)$u['unidad_id']; ?>"><?php echo h($u['nombre']); ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="col-md-6 mt-3">
            <label>Estatus</label>
            <select class="form-control" name="estatus" id="estatus_pago">
              <option value="borrador">Borrador</option>
              <option value="pendiente">Pendiente</option>
              <option value="revision">En Revisión</option>
            </select>
          </div>
          <div class="col-md-6 mt-3">
            <label>Prioridad</label>
            <select class="form-control" name="prioridad" id="prioridad">
              <option value="normal">Normal</option>
              <option value="baja">Baja</option>
              <option value="alta">Alta</option>
              <option value="urgente">Urgente</option>
            </select>
          </div>

          <div class="col-md-12 mt-3">
            <label>Notas</label>
            <textarea class="form-control" name="notas" id="notas_pago" rows="2"></textarea>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal: Cambiar Estatus -->
<div class="modal fade" id="modal_cambiar_estatus" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form method="post" action="?vista=pagos" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cambiar Estatus</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      </div>

      <div class="modal-body">
        <input type="hidden" name="csrf_token" value="<?php echo h($csrf_token); ?>">
        <input type="hidden" name="action" value="cambiar_estatus_pago">
        <input type="hidden" name="pago_id" id="cambiar_estatus_pago_id">

        <p><strong>Folio:</strong> <span id="cambiar_estatus_folio"></span></p>
        <p><strong>Estatus actual:</strong> <span id="cambiar_estatus_actual"></span></p>

        <div class="form-group">
          <label>Nuevo Estatus *</label>
          <select class="form-control" name="nuevo_estatus" id="nuevo_estatus" required>
            <option value="">Seleccione...</option>
            <option value="pendiente">Pendiente</option>
            <option value="revision">En Revisión</option>
            <option value="autorizado">Autorizado</option>
            <option value="rechazado">Rechazado</option>
            <option value="pagado">Pagado</option>
            <option value="cancelado">Cancelado</option>
          </select>
        </div>

        <div class="form-group">
          <label>Comentario</label>
          <textarea class="form-control" name="comentario" id="comentario_estatus" rows="3"></textarea>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar Estatus</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal: Ver Detalle de Pago -->
<div class="modal fade" id="modal_ver_pago" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detalle de Solicitud</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      </div>

      <div class="modal-body" id="detalle_pago_content">
        <div class="text-center">
          <i class="icon-spinner2 spinner"></i> Cargando...
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Gestión de Documentos -->
<div class="modal fade" id="modal_documentos" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title"><i class="icon-file-text2 mr-2"></i>Documentos del Pago - <span id="docs_folio"></span></h5>
        <button type="button" class="close text-white" data-dismiss="modal"><span>&times;</span></button>
      </div>

      <div class="modal-body">
        <!-- Formulario para subir documento -->
        <div class="card mb-3">
          <div class="card-header bg-primary text-white">
            <h6 class="mb-0"><i class="icon-upload mr-2"></i>Subir Nuevo Documento</h6>
          </div>
          <div class="card-body">
            <form method="post" action="?vista=pagos" enctype="multipart/form-data" id="form_subir_doc" onsubmit="return validarFormularioDoc()">
              <input type="hidden" name="csrf_token" value="<?php echo h($csrf_token); ?>">
              <input type="hidden" name="action" value="subir_documento">
              <input type="hidden" name="pago_id" id="doc_pago_id">

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label><strong>Tipo de Documento *</strong></label>
                    <select class="form-control" name="tipo_documento" required>
                      <option value="factura">📄 Factura</option>
                      <option value="solicitud_pago">📝 Solicitud de Pago a Tesorería</option>
                      <option value="comprobante_pago">💳 Comprobante de Pago</option>
                      <option value="orden_compra">🛒 Orden de Compra</option>
                      <option value="contrato">📋 Contrato</option>
                      <option value="otro">📎 Otro</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label><strong>Archivo * (PDF, JPG, PNG, DOC, XLS - Máx. 10MB)</strong></label>
                    <input type="file" class="form-control" name="archivo" required 
                           accept=".pdf,.jpg,.jpeg,.png,.doc,.docx,.xls,.xlsx">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" class="form-control" name="descripcion" 
                           placeholder="Descripción opcional del documento">
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-success">
                <i class="icon-upload mr-2"></i>Subir Documento
              </button>
            </form>
          </div>
        </div>

        <!-- Lista de documentos -->
        <div class="card">
          <div class="card-header bg-info text-white">
            <h6 class="mb-0"><i class="icon-folder mr-2"></i>Documentos Adjuntos</h6>
          </div>
          <div class="card-body">
            <div id="lista_documentos">
              <div class="text-center text-muted py-3">
                <i class="icon-spinner2 spinner"></i> Cargando documentos...
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Ver Historial -->
<div class="modal fade" id="modal_historial" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title"><i class="icon-history mr-2"></i>Historial de Cambios - <span id="hist_folio"></span></h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      </div>

      <div class="modal-body">
        <div id="historial_content">
          <div class="text-center">
            <i class="icon-spinner2 spinner"></i> Cargando historial...
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php
require_once __DIR__ . '/../includes/layout/footer.php';
require_once __DIR__ . '/../includes/layout/content_close.php';
?>

<script>
// ===== PROVEEDORES =====
function openProveedorCreate() {
  $('#modal_proveedor_title').text('Nuevo proveedor');
  $('#proveedor_id').val('0');
  $('#razon_social').val('');
  $('#rfc').val('');
  $('#nombre_comercial').val('');
  $('#telefono').val('');
  $('#email').val('');
  $('#banco').val('');
  $('#numero_cuenta').val('');
  $('#clabe').val('');
  $('#tipo_proveedor').val('servicios');
  $('#categoria').val('');
  $('#estatus').val('1');
  $('#notas').val('');
}

function openProveedorEdit(p) {
  $('#modal_proveedor_title').text('Editar proveedor');
  $('#proveedor_id').val(p.proveedor_id || 0);
  $('#razon_social').val(p.razon_social || '');
  $('#rfc').val(p.rfc || '');
  $('#nombre_comercial').val(p.nombre_comercial || '');
  $('#telefono').val(p.telefono || '');
  $('#email').val(p.email || '');
  $('#banco').val(p.banco || '');
  $('#numero_cuenta').val(p.numero_cuenta || '');
  $('#clabe').val(p.clabe || '');
  $('#tipo_proveedor').val(p.tipo_proveedor || 'servicios');
  $('#categoria').val(p.categoria || '');
  $('#estatus').val(String(p.estatus || 0));
  $('#notas').val(p.notas || '');
}

// ===== PAGOS =====
function openPagoCreate() {
  $('#modal_pago_title').text('Nueva solicitud de pago');
  $('#pago_id').val('0');
  $('#proveedor_id_pago').val('').trigger('change');
  $('#fecha_solicitud').val('<?php echo date('Y-m-d'); ?>');
  $('#fecha_limite_pago').val('');
  $('#concepto').val('');
  $('#subtotal').val('0');
  $('#iva').val('0');
  $('#retenciones').val('0');
  $('#total').val('0');
  $('#numero_factura').val('');
  $('#numero_contrato').val('');
  $('#unidad_id').val('');
  $('#estatus_pago').val('borrador');
  $('#prioridad').val('normal');
  $('#notas_pago').val('');
}

function calcularTotal() {
  const subtotal = parseFloat($('#subtotal').val()) || 0;
  const iva = parseFloat($('#iva').val()) || 0;
  const retenciones = parseFloat($('#retenciones').val()) || 0;
  const total = subtotal + iva - retenciones;
  $('#total').val(total.toFixed(2));
}

function openCambiarEstatus(pagoId, folio, estatusActual) {
  $('#cambiar_estatus_pago_id').val(pagoId);
  $('#cambiar_estatus_folio').text(folio);
  $('#cambiar_estatus_actual').text(estatusActual);
  $('#nuevo_estatus').val('');
  $('#comentario_estatus').val('');
}

function verDetallePago(pagoId) {
  $('#detalle_pago_content').html('<div class="text-center"><i class="icon-spinner2 spinner"></i> Cargando...</div>');
  
  // Aquí puedes hacer una llamada AJAX para cargar los detalles
  // Por ahora mostramos un mensaje de placeholder
  setTimeout(function() {
    $('#detalle_pago_content').html('<p class="text-center text-muted">Funcionalidad de detalle en desarrollo. ID: ' + pagoId + '</p>');
  }, 500);
}

function openDocumentos(pagoId, folio) {
  $('#doc_pago_id').val(pagoId);
  $('#docs_folio').text(folio);
  $('#form_subir_doc')[0].reset();
  cargarDocumentos(pagoId);
}

function cargarDocumentos(pagoId) {
  $('#lista_documentos').html('<div class="text-center text-muted py-3"><i class="icon-spinner2 spinner"></i> Cargando documentos...</div>');
  
  $.ajax({
    url: 'get_pago_documentos.php',
    method: 'GET',
    data: { pago_id: pagoId },
    dataType: 'json',
    success: function(response) {
      if (response.success) {
        mostrarDocumentos(response.documentos);
      } else {
        $('#lista_documentos').html('<div class="alert alert-warning">Error al cargar documentos</div>');
      }
    },
    error: function() {
      $('#lista_documentos').html('<div class="alert alert-danger">Error de conexión</div>');
    }
  });
}

function mostrarDocumentos(docs) {
  if (docs.length === 0) {
    $('#lista_documentos').html('<div class="text-center text-muted py-3"><i class="icon-file-empty mr-2"></i>No hay documentos adjuntos</div>');
    return;
  }

  let html = '<div class="table-responsive"><table class="table table-sm table-hover"><thead><tr>' +
             '<th>Tipo</th><th>Archivo</th><th>Subido</th><th>Acciones</th></tr></thead><tbody>';
  
  docs.forEach(function(doc) {
    const iconos = {
      factura: '📄',
      solicitud_pago: '📝',
      comprobante_pago: '💳',
      orden_compra: '🛒',
      contrato: '📋',
      otro: '📎'
    };
    const icon = iconos[doc.tipo_documento] || '📎';
    
    html += '<tr>';
    html += '<td>' + icon + ' ' + doc.tipo_documento.replace('_', ' ') + '</td>';
    html += '<td><strong>' + doc.nombre_original + '</strong>';
    if (doc.descripcion) html += '<br><small class="text-muted">' + doc.descripcion + '</small>';
    html += '</td>';
    html += '<td><small>' + doc.fecha_subida + '</small></td>';
    html += '<td>';
    html += '<a href="download_documento.php?id=' + doc.documento_id + '" class="btn btn-sm btn-outline-primary mr-1" title="Descargar"><i class="icon-download"></i></a>';
    html += '<button class="btn btn-sm btn-outline-danger" onclick="eliminarDocumento(' + doc.documento_id + ', ' + doc.pago_id + ')" title="Eliminar"><i class="icon-trash"></i></button>';
    html += '</td>';
    html += '</tr>';
  });
  
  html += '</tbody></table></div>';
  $('#lista_documentos').html(html);
}

function eliminarDocumento(documentoId, pagoId) {
  if (!confirm('¿Está seguro de eliminar este documento?')) return;
  
  $.ajax({
    url: '?vista=pagos',
    method: 'POST',
    data: {
      csrf_token: '<?php echo $csrf_token; ?>',
      action: 'eliminar_documento',
      documento_id: documentoId
    },
    success: function() {
      cargarDocumentos(pagoId);
      alert('Documento eliminado');
    },
    error: function() {
      alert('Error al eliminar documento');
    }
  });
}

function verHistorial(pagoId, folio) {
  $('#hist_folio').text(folio);
  $('#historial_content').html('<div class="text-center"><i class="icon-spinner2 spinner"></i> Cargando historial...</div>');
  
  $.ajax({
    url: 'get_pago_historial.php',
    method: 'GET',
    data: { pago_id: pagoId },
    dataType: 'json',
    success: function(response) {
      if (response.success) {
        mostrarHistorial(response.historial);
      } else {
        $('#historial_content').html('<div class="alert alert-warning">Error al cargar historial</div>');
      }
    },
    error: function() {
      $('#historial_content').html('<div class="alert alert-danger">Error de conexión</div>');
    }
  });
}

function mostrarHistorial(historial) {
  if (historial.length === 0) {
    $('#historial_content').html('<div class="text-center text-muted py-3"><i class="icon-history mr-2"></i>Sin historial de cambios</div>');
    return;
  }

  let html = '<div class="timeline">';
  
  historial.forEach(function(h) {
    const estatusColor = {
      borrador: 'secondary',
      pendiente: 'warning',
      revision: 'info',
      autorizado: 'primary',
      rechazado: 'danger',
      pagado: 'success',
      cancelado: 'dark'
    };
    const color = estatusColor[h.estatus_nuevo] || 'secondary';
    
    html += '<div class="timeline-item mb-3">';
    html += '<div class="card">';
    html += '<div class="card-body">';
    html += '<div class="d-flex justify-content-between"><div>';
    html += '<span class="badge badge-' + color + ' mr-2">' + h.estatus_nuevo + '</span>';
    if (h.estatus_anterior) {
      html += '<small class="text-muted">(anterior: ' + h.estatus_anterior + ')</small>';
    }
    html += '</div><small class="text-muted">' + h.fecha + '</small></div>';
    if (h.comentario) {
      html += '<div class="mt-2"><i class="icon-comment mr-2"></i>' + h.comentario + '</div>';
    }
    html += '<div class="mt-1"><small class="text-muted"><i class="icon-user mr-1"></i>' + (h.usuario || 'Sistema') + '</small></div>';
    html += '</div></div></div>';
  });
  
  html += '</div>';
  $('#historial_content').html(html);
}

function validarFormularioDoc() {
  const archivo = document.querySelector('input[name="archivo"]');
  if (!archivo.files || archivo.files.length === 0) {
    alert('Debe seleccionar un archivo');
    return false;
  }
  
  const tamaño = archivo.files[0].size;
  const maxSize = 10 * 1024 * 1024; // 10MB
  
  if (tamaño > maxSize) {
    alert('El archivo es demasiado grande. Máximo permitido: 10MB');
    return false;
  }
  
  return true;
}

// DataTables
$(function(){
  if ($.fn.DataTable) {
    $('#tabla_proveedores, #tabla_pagos').DataTable({
      pageLength: 25,
      order: [],
      language: {
        search: 'Buscar:',
        lengthMenu: 'Mostrar _MENU_',
        info: 'Mostrando _START_ a _END_ de _TOTAL_',
        paginate: { previous: 'Anterior', next: 'Siguiente' },
        zeroRecords: 'No se encontraron registros',
        infoEmpty: 'Sin registros'
      }
    });
  }

  // Select2
  if ($.fn.select2) {
    $('.select2').select2({
      dropdownParent: $('#modal_pago')
    });
  }
});
</script>

<?php require_once __DIR__ . '/../includes/layout/scripts.php'; ?>
