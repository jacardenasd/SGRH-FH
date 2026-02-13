<?php
// public/clima_captura_respuestas.php
// SGRH - Captura de respuestas de encuestas respondidas en papel
// Para coordinadores de RH - Interfaz simplificada

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();
require_empresa();
require_password_change_redirect();
require_demograficos_redirect();

if (function_exists('require_perm_any')) {
    require_perm_any(['organizacion.admin', 'clima.admin', 'clima.captura']);
} else {
    if (!can('organizacion.admin') && !can('clima.admin')) {
        header('Location: sin_permiso.php');
        exit;
    }
}

if (session_status() === PHP_SESSION_NONE) session_start();

$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 0;

if ($empresa_id <= 0) {
    die('Sesión inválida.');
}

function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

$flash = null;
$flash_type = 'info';

// =====================================================
// PROCESAR FORMULARIO - CAPTURAR RESPUESTAS
// =====================================================
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action']) ? (string)$_POST['action'] : '';

    if ($action === 'guardar_respuestas') {
        try {
            $periodo_id = isset($_POST['periodo_id']) ? (int)$_POST['periodo_id'] : 0;
            $empleado_id = isset($_POST['empleado_id']) ? (int)$_POST['empleado_id'] : 0;
            $unidad_id = isset($_POST['unidad_id']) ? (int)$_POST['unidad_id'] : 0;
            $adscripcion_id = isset($_POST['adscripcion_id']) ? (int)$_POST['adscripcion_id'] : 0;
            $es_anonima = isset($_POST['es_anonima']) && $_POST['es_anonima'] === '1';
            
            // DEBUG: Mostrar exactamente qué llega en POST
            error_log("POST COMPLETO: " . json_encode($_POST));
            error_log("POST PARSED: periodo_id=$periodo_id, empleado_id=$empleado_id, unidad_id=$unidad_id, adscripcion_id=$adscripcion_id, es_anonima=" . ($es_anonima ? 'SI' : 'NO'));

            if ($periodo_id <= 0) throw new Exception('Período inválido');

            // Iniciar transacción explícita
            $pdo->beginTransaction();

            // Si es anónima, usar unidad_id; si no, verificar empleado
            if (!$es_anonima) {
                if ($empleado_id <= 0) throw new Exception('Empleado inválido');
                if ($unidad_id <= 0) throw new Exception('Unidad inválida');

                // Verificar elegibilidad
                $chk = $pdo->prepare("SELECT elegible FROM clima_elegibles WHERE periodo_id=? AND empleado_id=? AND empresa_id=? LIMIT 1");
                $chk->execute([$periodo_id, $empleado_id, $empresa_id]);
                if (!$chk->fetch()) {
                    throw new Exception('Este empleado no es elegible para este período');
                }
            } else {
                // Para anónimas, usar NULL como empleado_id
                $empleado_id = null;
                if ($unidad_id <= 0) throw new Exception('Unidad inválida para captura anónima');
                // Para anónimas, adscripcion_id debe venir del formulario
                if ($adscripcion_id <= 0) $adscripcion_id = null;
            }

            // Procesando respuestas Likert (valores 1-3)
            $inserts_count = 0;
            $debug_inserts = array(); // Para debugging
            
            foreach ($_POST as $key => $value) {
                if (strpos($key, 'r_') === 0) {
                    $reactivo_id = (int)substr($key, 2);
                    $valor = (int)$value;

                    // Validación estricta: valor debe estar entre 1 y 3
                    if ($reactivo_id > 0 && $valor >= 1 && $valor <= 3) {
                        if ($es_anonima) {
                            // Para anónimas: INSERT simple para permitir múltiples respuestas de la misma unidad
                            $ins = $pdo->prepare("
                                INSERT INTO clima_respuestas (periodo_id, empleado_id, unidad_id, adscripcion_id, reactivo_id, valor, fecha_respuesta)
                                VALUES (?, ?, ?, ?, ?, ?, NOW())
                            ");
                            $result = $ins->execute([$periodo_id, $empleado_id, $unidad_id, $adscripcion_id, $reactivo_id, $valor]);
                        } else {
                            // Para identificadas: UPDATE si ya existe (permite edición)
                            $ins = $pdo->prepare("
                                INSERT INTO clima_respuestas (periodo_id, empleado_id, unidad_id, adscripcion_id, reactivo_id, valor, fecha_respuesta)
                                VALUES (?, ?, ?, ?, ?, ?, NOW())
                                ON DUPLICATE KEY UPDATE valor = VALUES(valor), fecha_respuesta = VALUES(fecha_respuesta)
                            ");
                            $result = $ins->execute([$periodo_id, $empleado_id, $unidad_id, $adscripcion_id, $reactivo_id, $valor]);
                        }
                        
                        // Debug: guardar info del insert
                        $debug_inserts[] = [
                            'reactivo' => $reactivo_id,
                            'valor' => $valor,
                            'result' => $result,
                            'rowCount' => $ins->rowCount()
                        ];
                        
                        $inserts_count++;
                    } else if ($reactivo_id > 0) {
                        // Si el valor no está en rango, lanzo error
                        throw new Exception("Reactivo $reactivo_id: valor inválido ($valor). Debe ser entre 1 y 3");
                    }
                }
            }

            // Procesar respuestas abiertas si existen
            foreach ($_POST as $key => $value) {
                if (strpos($key, 'pa_') === 0) {
                    $pregunta_id = (int)substr($key, 3);
                    $respuesta = trim((string)$value);

                    if ($pregunta_id > 0 && !empty($respuesta)) {
                        if ($es_anonima) {
                            // Para anónimas: INSERT simple para permitir múltiples respuestas
                            $ins = $pdo->prepare("
                                INSERT INTO clima_respuestas_abiertas 
                                (periodo_id, empleado_id, empresa_id, unidad_id, adscripcion_id, pregunta_id, respuesta, fecha_respuesta)
                                VALUES (?, ?, ?, ?, ?, ?, ?, NOW())
                            ");
                            $ins->execute([$periodo_id, $empleado_id, $empresa_id, $unidad_id, $adscripcion_id, $pregunta_id, $respuesta]);
                        } else {
                            // Para identificadas: UPDATE si ya existe
                            $ins = $pdo->prepare("
                                INSERT INTO clima_respuestas_abiertas 
                                (periodo_id, empleado_id, empresa_id, unidad_id, adscripcion_id, pregunta_id, respuesta, fecha_respuesta)
                                VALUES (?, ?, ?, ?, ?, ?, ?, NOW())
                                ON DUPLICATE KEY UPDATE respuesta = VALUES(respuesta), fecha_respuesta = VALUES(fecha_respuesta)
                            ");
                            $ins->execute([$periodo_id, $empleado_id, $empresa_id, $unidad_id, $adscripcion_id, $pregunta_id, $respuesta]);
                        }
                    }
                }
            }

            // DEBUG: Logging antes de commit
            error_log("=== DEBUG CLIMA CAPTURA ===");
            error_log("Periodo: $periodo_id, Empleado: " . ($empleado_id ?: 'NULL') . ", Unidad: $unidad_id, Adscripcion: " . ($adscripcion_id ?: 'NULL'));
            error_log("Total inserts intentados: $inserts_count");
            error_log("Primeros 3 inserts: " . json_encode(array_slice($debug_inserts, 0, 3)));
            error_log("En transacción: " . ($pdo->inTransaction() ? 'SI' : 'NO'));
            
            // Confirmar transacción
            $pdo->commit();
            error_log("COMMIT ejecutado exitosamente");

            $tipo = $es_anonima ? 'anónima' : 'identificada';
            $flash = "✓ Respuestas guardadas correctamente ($inserts_count preguntas registradas - Captura $tipo)";
            $flash_type = 'success';

            // Redirigir según el tipo de captura
            if ($es_anonima) {
                // Para anónimas: volver a modo anónimo con el mismo departamento
                $dept_id_redirect = $departamento_anonimo > 0 ? $departamento_anonimo : (isset($_POST['departamento_anonimo']) ? (int)$_POST['departamento_anonimo'] : 0);
                header('Location: clima_captura_respuestas.php?guardado=1&periodo_id=' . $periodo_id . '&tipo_captura=anonima' . ($dept_id_redirect > 0 ? '&departamento_anonimo=' . $dept_id_redirect : ''));
            } else {
                // Para identificadas: volver al mismo empleado para permitir edición
                header('Location: clima_captura_respuestas.php?guardado=1&periodo_id=' . $periodo_id . '&tipo_captura=identificada&sel_empleado_id=' . $empleado_id);
            }
            exit;

        } catch (Exception $e) {
            // Revertir transacción en caso de error
            if ($pdo->inTransaction()) {
                $pdo->rollBack();
            }
            
            $flash = '❌ Error: ' . $e->getMessage();
            $flash_type = 'danger';
            
            // Debug info (comentar después de resolver)
            error_log("Error en clima_captura: " . $e->getMessage());
            error_log("POST data: periodo_id=$periodo_id, empleado_id=$empleado_id, unidad_id=$unidad_id, adscripcion_id=$adscripcion_id, es_anonima=" . ($es_anonima ? 'SI' : 'NO'));
        }
    }
}

// =====================================================
// OBTENER DATOS
// =====================================================
// IMPORTANTE: Guardar valores de GET PRIMERO, antes de que se sobrescriban con POST
$periodo_id_get = isset($_GET['periodo_id']) ? (int)$_GET['periodo_id'] : 0;
$empleado_id_get = isset($_GET['sel_empleado_id']) ? (int)$_GET['sel_empleado_id'] : (isset($_GET['empleado_id']) ? (int)$_GET['empleado_id'] : 0);
$tipo_captura_get = isset($_GET['tipo_captura']) ? (string)$_GET['tipo_captura'] : 'identificada';
$unidad_anonima_get = isset($_GET['unidad_anonima']) ? (int)$_GET['unidad_anonima'] : 0;
$departamento_anonimo_get = isset($_GET['departamento_anonimo']) ? (int)$_GET['departamento_anonimo'] : 0;

// Usar los valores de GET para inicializar
$periodo_id = $periodo_id_get;
$empleado_id = $empleado_id_get;
$tipo_captura = $tipo_captura_get;
$unidad_anonima = $unidad_anonima_get;
$departamento_anonimo = $departamento_anonimo_get;

// IMPORTANTE: Limpiar empleado_id si estamos en modo anónimo
if ($tipo_captura === 'anonima') {
    $empleado_id = 0;
}

// DEBUG: Log lo que recibimos en GET
error_log("GET PARAMS: periodo_id=" . (isset($_GET['periodo_id']) ? $_GET['periodo_id'] : 'VACIO') . 
          ", empleado_id=" . (isset($_GET['sel_empleado_id']) ? $_GET['sel_empleado_id'] : (isset($_GET['empleado_id']) ? $_GET['empleado_id'] : 'VACIO')) . 
          ", tipo_captura=" . (isset($_GET['tipo_captura']) ? $_GET['tipo_captura'] : 'VACIO'));
error_log("PARSED: periodo_id=$periodo_id, empleado_id=$empleado_id, tipo_captura=$tipo_captura");

// Períodos disponibles
$periodos = $pdo->prepare("
    SELECT periodo_id, anio, fecha_inicio, fecha_fin
    FROM clima_periodos
    WHERE empresa_id = ? AND estatus IN ('borrador','publicado')
    ORDER BY anio DESC, periodo_id DESC
");
$periodos->execute([$empresa_id]);
$periodos_list = $periodos->fetchAll(PDO::FETCH_ASSOC);

if ($periodo_id <= 0 && !empty($periodos_list)) {
    $periodo_id = (int)$periodos_list[0]['periodo_id'];
}

// Datos del período seleccionado
$periodo = null;
if ($periodo_id > 0) {
    $pstmt = $pdo->prepare("SELECT * FROM clima_periodos WHERE periodo_id = ? AND empresa_id = ?");
    $pstmt->execute([$periodo_id, $empresa_id]);
    $periodo = $pstmt->fetch(PDO::FETCH_ASSOC);
}

// Empleados elegibles para el período
$empleados_elegibles = array();
if ($periodo_id > 0) {
    $emp_stmt = $pdo->prepare("
        SELECT DISTINCT ce.empleado_id, us.nombre, us.apellido_paterno, u.nombre as unidad, ce.unidad_id,
               a.nombre as departamento
        FROM clima_elegibles ce
        INNER JOIN empleados e ON e.empleado_id = ce.empleado_id
        INNER JOIN usuario_empresas ue ON ue.empleado_id = e.empleado_id AND ue.empresa_id = e.empresa_id
        INNER JOIN usuarios us ON us.usuario_id = ue.usuario_id
        LEFT JOIN org_unidades u ON u.unidad_id = ce.unidad_id
        LEFT JOIN org_adscripciones a ON a.adscripcion_id = e.adscripcion_id
        WHERE ce.periodo_id = ? AND ce.empresa_id = ? AND ce.elegible = 1
        ORDER BY us.nombre, us.apellido_paterno
    ");
    $emp_stmt->execute([$periodo_id, $empresa_id]);
    $empleados_elegibles = $emp_stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Datos del empleado seleccionado (para modo identificado)
$empleado_info = null;
$unidad_info = null;
$departamento_info = null;
$es_anonima = false;
$ya_fue_capturado = false;
if ($tipo_captura === 'anonima' && $departamento_anonimo > 0) {
    $es_anonima = true;
    // Para anónima, obtener nombre de departamento y unidad
    $dept_stmt = $pdo->prepare("
        SELECT a.adscripcion_id, a.nombre as departamento, a.unidad_id, u.nombre as unidad
        FROM org_adscripciones a
        LEFT JOIN org_unidades u ON u.unidad_id = a.unidad_id
        WHERE a.adscripcion_id = ?
        LIMIT 1
    ");
    $dept_stmt->execute([$departamento_anonimo]);
    $departamento_info = $dept_stmt->fetch(PDO::FETCH_ASSOC);
    
    // Asignar unidad_id desde el departamento para las respuestas
    if ($departamento_info) {
        $unidad_anonima = (int)$departamento_info['unidad_id'];
    }
} elseif ($empleado_id > 0 && $periodo_id > 0) {
    $est = $pdo->prepare("
        SELECT us.nombre, us.apellido_paterno, ce.unidad_id, u.nombre as unidad, a.nombre as departamento, e.adscripcion_id
        FROM empleados e
        INNER JOIN usuario_empresas ue ON ue.empleado_id = e.empleado_id AND ue.empresa_id = e.empresa_id
        INNER JOIN usuarios us ON us.usuario_id = ue.usuario_id
        INNER JOIN clima_elegibles ce ON ce.empleado_id = e.empleado_id
        LEFT JOIN org_unidades u ON u.unidad_id = ce.unidad_id
        LEFT JOIN org_adscripciones a ON a.adscripcion_id = e.adscripcion_id
        WHERE e.empleado_id = ? AND ce.periodo_id = ? AND ce.empresa_id = ?
        LIMIT 1
    ");
    $est->execute([$empleado_id, $periodo_id, $empresa_id]);
    $empleado_info = $est->fetch(PDO::FETCH_ASSOC);
    
    // Verificar si ya tiene respuestas capturadas
    $chk_resp = $pdo->prepare("
        SELECT COUNT(*) as total FROM clima_respuestas 
        WHERE periodo_id = ? AND empleado_id = ? 
        LIMIT 1
    ");
    $chk_resp->execute([$periodo_id, $empleado_id]);
    $resp_count = $chk_resp->fetch(PDO::FETCH_ASSOC);
    $ya_fue_capturado = ($resp_count['total'] > 0);
}

// Dimensiones y reactivos
$dimensiones = $pdo->query("SELECT * FROM clima_dimensiones WHERE activo=1 ORDER BY orden")->fetchAll(PDO::FETCH_ASSOC);

$reactivos_por_dim = array();
foreach ($dimensiones as $d) {
    $did = (int)$d['dimension_id'];
    $stmt = $pdo->prepare("SELECT * FROM clima_reactivos WHERE dimension_id = ? AND activo = 1 ORDER BY orden");
    $stmt->execute([$did]);
    $reactivos_por_dim[$did] = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Respuestas previas del empleado/unidad (para edición)
$resp_map = array();
$abiertas_map = array();

// DEBUG: Log para diagnosticar carga de respuestas
error_log("=== CARGA DE RESPUESTAS PREVIAS ===");
error_log("periodo_id: $periodo_id, empleado_id: $empleado_id, es_anonima: " . ($es_anonima ? 'SI' : 'NO') . ", unidad_anonima: $unidad_anonima");
error_log("Condición: " . (($periodo_id > 0 && !$es_anonima && $empleado_id > 0) ? "CARGAR respuestas identificadas" : "NO CARGAR"));

if ($periodo_id > 0) {
    if (!$es_anonima && $empleado_id > 0) {
        // Modo identificada: cargar respuestas del empleado
        error_log("Cargando respuestas del empleado $empleado_id en periodo $periodo_id");
        $resp_stmt = $pdo->prepare("
            SELECT reactivo_id, valor FROM clima_respuestas
            WHERE periodo_id = ? AND empleado_id = ?
        ");
        $resp_stmt->execute([$periodo_id, $empleado_id]);
        while ($r = $resp_stmt->fetch(PDO::FETCH_ASSOC)) {
            $resp_map[(int)$r['reactivo_id']] = (int)$r['valor'];
        }
        error_log("Respuestas cargadas: " . count($resp_map));
        
        // Respuestas abiertas previas - modo identificada
        $abt_stmt = $pdo->prepare("
            SELECT pregunta_id, respuesta FROM clima_respuestas_abiertas
            WHERE periodo_id = ? AND empleado_id = ?
        ");
        $abt_stmt->execute([$periodo_id, $empleado_id]);
        while ($r = $abt_stmt->fetch(PDO::FETCH_ASSOC)) {
            $abiertas_map[(int)$r['pregunta_id']] = $r['respuesta'];
        }
        error_log("Respuestas abiertas cargadas: " . count($abiertas_map));
    } elseif ($es_anonima && $unidad_anonima > 0) {
        // Modo anónimo: NO cargar respuestas previas
        // Cada captura anónima es independiente, no se "editan" respuestas anteriores
        // Las respuestas se acumulan para el análisis agregado
        // $resp_map y $abiertas_map quedan vacíos intencionalmente
        error_log("Modo ANÓNIMO: NO se cargan respuestas previas (esto es correcto)");
    } else {
        error_log("No se carga nada: periodo_id=$periodo_id, es_anonima=" . ($es_anonima ? 'SI' : 'NO') . ", empleado_id=$empleado_id, unidad_anonima=$unidad_anonima");
    }
}

error_log("=== RESULTADO: resp_map=" . count($resp_map) . " items, abiertas_map=" . count($abiertas_map) . " items ===");

// Preguntas abiertas
$preguntas_abiertas = array();
$stPA = $pdo->prepare("
    SELECT pregunta_id, texto, orden, obligatorio
    FROM clima_preguntas_abiertas
    WHERE activo = 1
    ORDER BY orden
");
$stPA->execute();
$preguntas_abiertas = $stPA->fetchAll(PDO::FETCH_ASSOC);

// =======================
// LAYOUT
// =======================
$page_title = 'Clima Laboral - Captura de Respuestas en Papel';
$active_menu = 'clima_captura';

$extra_css = [
    'global_assets/css/icons/icomoon/styles.min.css',
    'global_assets/js/plugins/forms/selects/select2.min.css',
];

$extra_js = [
    'global_assets/js/plugins/forms/selects/select2.min.js',
];

require_once __DIR__ . '/../includes/layout/head.php';
require_once __DIR__ . '/../includes/layout/navbar.php';
require_once __DIR__ . '/../includes/layout/sidebar.php';
require_once __DIR__ . '/../includes/layout/content_open.php';
?>

<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-clipboard3 mr-2"></i> <span class="font-weight-semibold">Captura de Respuestas en Papel</span></h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>

<div class="content">

    <?php if ($flash): ?>
    <div class="alert alert-<?php echo h($flash_type); ?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
        <?php echo h($flash); ?>
    </div>
    <?php endif; ?>
    <?php if (isset($_GET['guardado']) && $_GET['guardado'] == '1'): ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
        ✓ Respuestas guardadas correctamente.
    </div>
    <?php endif; ?>

    <!-- Panel de Selección -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">
                        <i class="icon-filter3 mr-2"></i>Seleccionar Período
                    </h5>
                </div>
                <div class="card-body">
                    <form method="GET" class="form-inline">
                        <div class="form-group" style="width: 100%;">
                            <select name="periodo_id" class="form-control" onchange="this.form.submit();">
                                <option value="">-- Seleccione período --</option>
                                <?php foreach ($periodos_list as $p): ?>
                                <option value="<?php echo (int)$p['periodo_id']; ?>" <?php echo $periodo_id == (int)$p['periodo_id'] ? 'selected' : ''; ?>>
                                    Año <?php echo (int)$p['anio']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">
                        <i class="icon-person mr-2"></i>Captura
                    </h5>
                </div>
                <div class="card-body">
                    <form method="GET" class="form-inline" id="formTipo">
                        <input type="hidden" name="periodo_id" value="<?php echo (int)$periodo_id; ?>">
                        <div class="form-group" style="width: 100%;">
                            <select name="tipo_captura" id="tipo_captura" class="form-control" onchange="document.getElementById('formTipo').submit();">
                                <option value="identificada" <?php echo (!isset($_GET['tipo_captura']) || $_GET['tipo_captura'] === 'identificada') ? 'selected' : ''; ?>>
                                    👤 Identificada (por empleado)
                                </option>
                                <option value="anonima" <?php echo isset($_GET['tipo_captura']) && $_GET['tipo_captura'] === 'anonima' ? 'selected' : ''; ?>>
                                    🔒 Anónima (por departamento)
                                </option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">
                     Seleccionar <?php if ($tipo_captura !== 'anonima'): ?> empleado <?php else: ?> departamento <?php endif; ?>
                </h5>
                </div>
                <div class="card-body">
                    <div class="body">
                        <form method="GET" class="form-inline" id="formSeleccion" style="margin-bottom: 1rem; width: 100%;">
                            <input type="hidden" name="periodo_id" value="<?php echo (int)$periodo_id; ?>">
                            <input type="hidden" name="tipo_captura" value="<?php echo h($tipo_captura); ?>">
                            <?php if ($tipo_captura !== 'anonima'): ?>
                            <div class="form-group w-100 mb-2">
                                <select id="selector_cambio" name="sel_empleado_id" class="form-control w-100 select2-searchable" onchange="this.form.submit();">
                                    <option value="">-- Seleccione empleado --</option>
                                    <?php foreach ($empleados_elegibles as $e): ?>
                                    <option value="<?php echo (int)$e['empleado_id']; ?>" <?php echo $empleado_id == (int)$e['empleado_id'] ? 'selected' : ''; ?>>
                                        <?php echo h($e['nombre'] . ' ' . $e['apellido_paterno']); ?> - <?php echo h($e['departamento'] ?? 'Sin departamento'); ?> (<?php echo h($e['unidad'] ?? 'Sin área'); ?>)
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <?php endif; ?>
                            <?php if ($tipo_captura === 'anonima'): ?>
                            <div class="form-group w-100 mb-2">
                                <select id="selector_anonimo" name="departamento_anonimo" class="form-control w-100" onchange="this.form.submit();">
                                    <option value="">-- Seleccione departamento --</option>
                                    <?php 
                                    // Obtener departamentos únicos de empleados elegibles
                                    $departamentos_unicos = array();
                                    foreach ($empleados_elegibles as $e) {
                                        if (!empty($e['departamento']) && isset($e['unidad_id'])) {
                                            // Necesitamos obtener el adscripcion_id
                                            $key = $e['departamento'] . '|' . $e['unidad_id'];
                                            if (!isset($departamentos_unicos[$key])) {
                                                $departamentos_unicos[$key] = [
                                                    'departamento' => $e['departamento'],
                                                    'unidad' => $e['unidad'] ?? 'Sin unidad',
                                                    'unidad_id' => $e['unidad_id']
                                                ];
                                            }
                                        }
                                    }
                                    
                                    // Obtener adscripcion_ids para los departamentos
                                    if (!empty($departamentos_unicos)) {
                                        $dept_map = array();
                                        foreach ($departamentos_unicos as $info) {
                                            $dept_query = $pdo->prepare("
                                                SELECT a.adscripcion_id, a.nombre, a.unidad_id, u.nombre as unidad_nombre
                                                FROM org_adscripciones a
                                                LEFT JOIN org_unidades u ON u.unidad_id = a.unidad_id
                                                WHERE a.nombre = ? AND a.unidad_id = ?
                                                LIMIT 1
                                            ");
                                            $dept_query->execute([$info['departamento'], $info['unidad_id']]);
                                            $dept_row = $dept_query->fetch(PDO::FETCH_ASSOC);
                                            if ($dept_row) {
                                                $dept_map[(int)$dept_row['adscripcion_id']] = [
                                                    'nombre' => $dept_row['nombre'],
                                                    'unidad_id' => $dept_row['unidad_id'],
                                                    'unidad_nombre' => $dept_row['unidad_nombre'] ?? 'Sin unidad'
                                                ];
                                            }
                                        }
                                        
                                        // Ordenar por unidad y luego por departamento
                                        uasort($dept_map, function($a, $b) {
                                            $unidad_cmp = strcmp($a['unidad_nombre'], $b['unidad_nombre']);
                                            if ($unidad_cmp !== 0) {
                                                return $unidad_cmp;
                                            }
                                            return strcmp($a['nombre'], $b['nombre']);
                                        });
                                        
                                        foreach ($dept_map as $dept_id => $dept_data):
                                    ?>
                                    <option value="<?php echo $dept_id; ?>" <?php echo $departamento_anonimo == $dept_id ? 'selected' : ''; ?>>
                                        <?php echo h($dept_data['nombre'] . ' (' . $dept_data['unidad_nombre'] . ')'); ?>
                                    </option>
                                    <?php 
                                        endforeach;
                                    }
                                    ?>
                                </select>
                            </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <?php if (((($empleado_info && !$es_anonima) || ($es_anonima && $departamento_anonimo > 0))) && $periodo): ?>
    
    <!-- Alerta si ya fue capturado -->
    <?php if (!$es_anonima && $ya_fue_capturado): ?>
    <div class="alert alert-warning mt-3" style="border-left: 4px solid #FF9800;">
        <i class="icon-warning mr-2"></i>
        <strong>⚠️ Este empleado ya fue capturado en este período.</strong>
        <br>Si deseas actualizar sus respuestas, edita el formulario a continuación. De lo contrario, 
        <a href="?periodo_id=<?php echo (int)$periodo_id; ?>" class="btn btn-sm btn-secondary ml-2">
            <i class="icon-arrow-left3 mr-1"></i>Volver
        </a>
    </div>
    <?php endif; ?>

    <!-- Formulario de Captura -->
    <div class="card mt-3 ml-md-3 ml-2">
        <div class="card-header header-elements-inline bg-light" style="background-color: #e3f2fd;">
            <div class="d-flex flex-column flex-md-row align-items-md-center w-100">
                <div class="flex-grow-1">
                    <h5 class="card-title mb-1">
                        <i class="icon-edit mr-2"></i>
                        <?php if ($es_anonima): ?>
                            🔒 Captura Anónima - <strong><?php echo h($departamento_info['departamento'] ?? 'Departamento'); ?></strong>
                        <?php else: ?>
                            👤 Captura Identificada - <span class="text-primary font-weight-bold"><?php echo isset($empleado_info['no_emp']) ? h($empleado_info['no_emp']) : ''; ?></span> <strong><?php echo h($empleado_info['nombre'] . ' ' . $empleado_info['apellido_paterno']); ?></strong>
                        <?php endif; ?>
                    </h5>
                    <div class="text-muted small mt-1">
                        <?php if ($es_anonima): ?>
                        <span class="mr-3"><strong>Departamento:</strong> <?php echo h($departamento_info['departamento'] ?? 'Sin asignar'); ?></span>
                        <span class="mr-3"><strong>Unidad:</strong> <?php echo h($departamento_info['unidad'] ?? 'Sin asignar'); ?></span>
                        <?php else: ?>
                        <span class="mr-3"><strong>Unidad:</strong> <?php echo h($empleado_info['unidad'] ?? 'Sin asignar'); ?></span>
                        <?php if (isset($empleado_info['departamento'])): ?>
                        <span class="mr-3"><strong>Departamento:</strong> <?php echo h($empleado_info['departamento'] ?? 'Sin asignar'); ?></span>
                        <?php endif; ?>
                        <?php endif; ?>
                        <span><strong>Período:</strong> Año <?php echo (int)$periodo['anio']; ?></span>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="card-body">
            <div class="row mt-4">
                <div class="col-md-12">
            <form method="POST" id="frmCaptura">
                <input type="hidden" name="action" value="guardar_respuestas">
                <input type="hidden" name="periodo_id" value="<?php echo (int)$periodo_id_get; ?>">
                <input type="hidden" name="es_anonima" value="<?php echo $es_anonima ? '1' : '0'; ?>">
                <?php if ($es_anonima): ?>
                    <input type="hidden" name="unidad_id" value="<?php echo (int)$unidad_anonima; ?>">
                    <input type="hidden" name="adscripcion_id" value="<?php echo (int)$departamento_anonimo; ?>">
                    <input type="hidden" name="empleado_id" value="">
                <?php else: ?>
                    <input type="hidden" name="empleado_id" value="<?php echo (int)$empleado_id_get; ?>">
                    <input type="hidden" name="unidad_id" value="<?php echo (int)$empleado_info['unidad_id']; ?>">
                    <input type="hidden" name="adscripcion_id" value="<?php echo isset($empleado_info['adscripcion_id']) ? (int)$empleado_info['adscripcion_id'] : ''; ?>">
                <?php endif; ?>


    <!-- Instrucciones -->
    <div class="alert alert-info" style="border-left: 4px solid #2196F3;">
        <i class="icon-info22"></i>
        <strong>Instrucciones:</strong> 
        Ingresa las respuestas de la encuesta en papel. Escala 1-3: 
        <span class="font-weight-bold">1 = Totalmente De acuerdo, 2 = Parcialmente De acuerdo, 3 = En Desacuerdo</span>
    </div>

    
                <!-- Preguntas Likert -->
                <?php
                $contador = 1;
                $orden_super = array(
                    'Relación con el Jefe Inmediato',
                    'Relación con los Compañeros',
                    'Relación con la Empresa',
                    'Relación con el Trabajo'
                );

                foreach ($orden_super as $superdim):
                    $dims_en_super = array();
                    foreach ($dimensiones as $d) {
                        if ($d['superdimension'] === $superdim) {
                            $dims_en_super[] = $d;
                        }
                    }

                    if (empty($dims_en_super)) continue;
                ?>

                <div style="background-color: #f0f4ff; padding: 10px; margin: 15px 0; border-left: 3px solid #5C6BC0; border-radius: 3px;">
                    <strong style="color: #1a3a52;">📦 <?php echo h($superdim); ?></strong>
                </div>

                <?php foreach ($dims_en_super as $dim):
                    $did = (int)$dim['dimension_id'];
                    $reactivos = isset($reactivos_por_dim[$did]) ? $reactivos_por_dim[$did] : array();
                    if (empty($reactivos)) continue;
                ?>

                <div style="background-color: #f9f9f9; padding: 12px; margin-bottom: 15px; border-left: 3px solid #ddd; border-radius: 3px;">
                    <h6 class="font-weight-semibold text-muted mb-3">
                        • <?php echo h($dim['nombre']); ?>
                    </h6>

                    <?php foreach ($reactivos as $rx):
                        $rid = (int)$rx['reactivo_id'];
                        $valor_actual = isset($resp_map[$rid]) ? $resp_map[$rid] : 0;
                    ?>

                    <div class="form-group" style="margin-bottom: 12px;">
                        <label class="font-weight-500" style="font-size: 13px;">
                            <strong><?php echo $contador; ?></strong>. <?php echo h($rx['texto']); ?>
                        </label>
                        <div class="input-group" style="max-width: 180px;">
                            <input 
                                type="number" 
                                name="r_<?php echo $rid; ?>" 
                                class="form-control likert-input" 
                                min="1" max="3" step="1" 
                                inputmode="numeric" 
                                placeholder="1-3" 
                                required 
                                maxlength="1"
                                oninput="if(this.value.length > 1) this.value = this.value.slice(0,1); if(this.value < 1 || this.value > 3) this.value = '';"
                                value="<?php echo ($valor_actual >= 1 && $valor_actual <= 3) ? (int)$valor_actual : ''; ?>"
                                data-reactivo="<?php echo $rid; ?>"
                            >
                        </div>
                    </div>
                    <?php $contador++; ?>
                    <?php endforeach; ?>
                </div>

                <?php endforeach; ?>
                <?php endforeach; ?>

                <!-- Preguntas Abiertas -->
                <?php if (!empty($preguntas_abiertas)): ?>
                <div style="margin-top: 25px; padding-top: 15px; border-top: 2px solid #ccc;">
                    <h5 class="font-weight-semibold mb-3">
                        <i class="icon-chat3 mr-2"></i>Preguntas Abiertas
                    </h5>

                    <?php foreach ($preguntas_abiertas as $pa):
                        $pid = (int)$pa['pregunta_id'];
                        $respuesta_actual = isset($abiertas_map[$pid]) ? $abiertas_map[$pid] : '';
                    ?>

                    <div class="form-group">
                        <label class="font-weight-500">
                            <strong>★</strong> <?php echo h($pa['texto']); ?>
                            <?php if ($pa['obligatorio']): ?><span class="text-danger">*</span><?php endif; ?>
                        </label>
                        <textarea 
                            name="pa_<?php echo $pid; ?>" 
                            class="form-control" 
                            rows="3"
                            placeholder="Escribe aquí (máximo 500 caracteres)"
                            <?php echo $pa['obligatorio'] ? 'required' : ''; ?>
                        ><?php echo h($respuesta_actual); ?></textarea>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <div class="form-group mt-3 pt-3 border-top">
                    <button type="button" class="btn btn-success" onclick="validarYGuardar();">
                        <i class="icon-checkmark3 mr-2"></i>Guardar Respuestas
                    </button>
                    <a href="?periodo_id=<?php echo (int)$periodo_id; ?>" class="btn btn-secondary ml-2">
                        <i class="icon-cross2 mr-2"></i>Cancelar
                    </a>
                </div>
                
                <!-- Alerta de campos faltantes -->
                <div id="alerta_faltantes" class="alert alert-warning mt-3" style="display: none;">
                    <i class="icon-warning mr-2"></i>
                    <strong>Campos faltantes:</strong>
                    <ul id="lista_faltantes" style="margin: 10px 0 0 0; padding-left: 20px;"></ul>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
    <?php elseif ($periodo_id > 0 && empty($empleados_elegibles)): ?>
    <div class="alert alert-warning mt-3">
        <i class="icon-info22 mr-2"></i>
        No hay empleados elegibles registrados para este período. Verifica que existan elegibles en la configuración.
    </div>
    <?php elseif ($periodo_id > 0 && $tipo_captura === 'identificada' && empty($empleado_id)): ?>
    <div class="alert alert-info mt-3">
        <i class="icon-person mr-2"></i>
        Selecciona un empleado de la lista para capturar sus respuestas.
    </div>
    <?php elseif ($periodo_id > 0 && $tipo_captura === 'anonima' && $unidad_anonima <= 0): ?>
    <div class="alert alert-info mt-3">
        <i class="icon-shield3 mr-2"></i>
        Selecciona un departamento para capturar respuestas anónimas.
    </div>
    <?php endif; ?>

    <?php if (!$periodo_id): ?>
    <div class="alert alert-info mt-3">
        <i class="icon-info22 mr-2"></i>
        Selecciona un período para comenzar a capturar respuestas de encuestas respondidas en papel.
    </div>
    <?php endif; ?>

</div>

<script>
// Inicializar Select2 solo para el select de empleados
document.addEventListener('DOMContentLoaded', function() {
    if (window.jQuery && jQuery().select2) {
        jQuery('#selector_cambio').select2({
            placeholder: '-- Seleccione empleado --',
            allowClear: true,
            width: '100%',
            language: 'es'
        });
    }
    
    // Validación adicional para inputs de respuestas Likert (solo 1 dígito del 1-3)
    var likertInputs = document.querySelectorAll('input.likert-input[name^="r_"]');
    likertInputs.forEach(function(input) {
        // Prevenir entrada de más de 1 carácter
        input.addEventListener('input', function(e) {
            // Limitar a 1 carácter
            if (this.value.length > 1) {
                this.value = this.value.slice(0, 1);
            }
            // Solo permitir 1, 2 o 3
            var val = parseInt(this.value, 10);
            if (isNaN(val) || val < 1 || val > 3) {
                if (this.value !== '') {
                    this.value = '';
                }
            }
        });
        
        // Prevenir teclas no numéricas
        input.addEventListener('keypress', function(e) {
            var char = String.fromCharCode(e.which);
            if (!/[1-3]/.test(char)) {
                e.preventDefault();
            }
        });
        
        // Validar al perder el foco
        input.addEventListener('blur', function() {
            var val = parseInt(this.value, 10);
            if (this.value !== '' && (isNaN(val) || val < 1 || val > 3)) {
                this.value = '';
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
            }
        });
    });
});

function actualizarModoCaptura() {
    var tipo = document.getElementById('tipo_captura').value;
    var selector = document.getElementById('selector_cambio');
    var selectorAnon = document.getElementById('selector_anonimo');
    if (tipo === 'identificada') {
        selector.parentElement.style.display = 'block';
        selectorAnon.parentElement.style.display = 'none';
    } else {
        selector.parentElement.style.display = 'none';
        selectorAnon.parentElement.style.display = 'block';
    }
}

// Validar y guardar respuestas
function validarYGuardar() {
    var form = document.getElementById('frmCaptura');
    if (!form) return;
    var faltantes = [];
    var invalidos = [];
    var inputs = form.querySelectorAll('input[name^="r_"]');
    inputs.forEach(function(input) {
        var valor = input.value.trim();
        var rid = input.getAttribute('data-reactivo');
        if (!valor) {
            var label = input.closest('.form-group').querySelector('label');
            if (label) {
                faltantes.push(label.textContent.trim());
            }
        } else {
            var numVal = parseInt(valor, 10);
            if (isNaN(numVal) || numVal < 1 || numVal > 3) {
                invalidos.push('Reactivo ' + rid + ': debe ser entre 1 y 3');
            }
        }
    });
    var alerta = document.getElementById('alerta_faltantes');
    var lista = document.getElementById('lista_faltantes');
    var mensajes = [];
    if (faltantes.length > 0) {
        mensajes.push('<strong style="color: #d32f2f;">Campos faltantes:</strong>');
        faltantes.forEach(function(campo) {
            mensajes.push(campo);
        });
    }
    if (invalidos.length > 0) {
        if (faltantes.length > 0) mensajes.push('');
        mensajes.push('<strong style="color: #d32f2f;">Valores inválidos:</strong>');
        invalidos.forEach(function(err) {
            mensajes.push(err);
        });
    }
    if (faltantes.length > 0 || invalidos.length > 0) {
        lista.innerHTML = '';
        mensajes.forEach(function(msg) {
            var li = document.createElement('li');
            li.innerHTML = msg;
            lista.appendChild(li);
        });
        alerta.style.display = 'block';
        window.scrollTo(0, alerta.offsetTop - 100);
    } else {
        alerta.style.display = 'none';
        form.submit();
    }
}
</script>

<?php
require_once __DIR__ . '/../includes/layout/scripts.php';
require_once __DIR__ . '/../includes/layout/content_close.php';
?>
