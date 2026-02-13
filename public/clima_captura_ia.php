<?php
// public/clima_captura_ia.php
// SGRH - Captura Automática de Encuestas con IA (Tesseract OCR)
// Para procesar PDFs/imágenes escaneadas de encuestas en papel

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/conexion.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

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
$resultados_ocr = null;

// =====================================================
// VERIFICAR INSTALACIÓN DE TESSERACT
// =====================================================
function verificar_tesseract() {
    $tesseract_path = 'C:\\Program Files\\Tesseract-OCR\\tesseract.exe';
    
    // Verificar rutas comunes en Windows
    $posibles_rutas = [
        'C:\\Program Files\\Tesseract-OCR\\tesseract.exe',
        'C:\\Program Files (x86)\\Tesseract-OCR\\tesseract.exe',
        getenv('TESSERACT_PATH')
    ];
    
    foreach ($posibles_rutas as $ruta) {
        if ($ruta && file_exists($ruta)) {
            return $ruta;
        }
    }
    
    // Intentar con PATH del sistema
    exec('where tesseract 2>nul', $output, $return_code);
    if ($return_code === 0 && !empty($output)) {
        return trim($output[0]);
    }
    
    return false;
}

$tesseract_disponible = verificar_tesseract();

// =====================================================
// PROCESAR PDF/IMAGEN CON OCR (MÚLTIPLES ARCHIVOS)
// =====================================================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'procesar_pdf') {
    try {
        if (!$tesseract_disponible) {
            throw new Exception('Tesseract OCR no está instalado. Por favor instálelo primero.');
        }

        if (!isset($_FILES['archivos_pdf']) || empty($_FILES['archivos_pdf']['name'][0])) {
            throw new Exception('Error al cargar los archivos. Por favor intente nuevamente.');
        }

        $periodo_id = isset($_POST['periodo_id']) ? (int)$_POST['periodo_id'] : 0;
        if ($periodo_id <= 0) {
            throw new Exception('Debe seleccionar un período válido');
        }

        // Crear directorio temporal si no existe
        $temp_dir = __DIR__ . '/../storage/temp_ocr';
        if (!is_dir($temp_dir)) {
            mkdir($temp_dir, 0755, true);
        }

        require_once __DIR__ . '/../includes/clima_ocr_processor.php';
        $processor = new ClimaOCRProcessor($pdo, $tesseract_disponible);
        
        // Extensiones permitidas
        $extensiones_permitidas = ['pdf', 'png', 'jpg', 'jpeg', 'tiff', 'tif'];
        
        // Procesar múltiples archivos
        $archivos_procesados = 0;
        $archivos_con_errores = 0;
        $texto_combinado = '';
        $archivos_errores_detalle = [];
        
        $num_archivos = count($_FILES['archivos_pdf']['name']);
        error_log("📁 Procesando $num_archivos archivo(s)");
        
        for ($i = 0; $i < $num_archivos; $i++) {
            // Verificar si el archivo actual tiene error
            if ($_FILES['archivos_pdf']['error'][$i] !== UPLOAD_ERR_OK) {
                $archivos_con_errores++;
                $archivos_errores_detalle[] = $_FILES['archivos_pdf']['name'][$i] . ' (error de carga)';
                continue;
            }
            
            $nombre_archivo = $_FILES['archivos_pdf']['name'][$i];
            $tmp_name = $_FILES['archivos_pdf']['tmp_name'][$i];
            $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));
            
            // Validar extensión
            if (!in_array($extension, $extensiones_permitidas)) {
                $archivos_con_errores++;
                $archivos_errores_detalle[] = $nombre_archivo . ' (formato no válido)';
                continue;
            }
            
            // Validar tamaño (10MB máximo)
            if ($_FILES['archivos_pdf']['size'][$i] > 10 * 1024 * 1024) {
                $archivos_con_errores++;
                $archivos_errores_detalle[] = $nombre_archivo . ' (tamaño > 10MB)';
                continue;
            }
            
            try {
                // Generar nombre único para archivo temporal
                $temp_filename = uniqid('ocr_' . $i . '_', true);
                $temp_filepath = $temp_dir . '/' . $temp_filename . '.' . $extension;
                
                // Mover archivo cargado
                if (!move_uploaded_file($tmp_name, $temp_filepath)) {
                    throw new Exception('Error al guardar archivo temporal');
                }
                
                error_log("📄 Procesando: $nombre_archivo");
                
                // Procesar con Tesseract
                $resultado_individual = $processor->procesarArchivo($temp_filepath, $periodo_id, $empresa_id);
                
                // Si es el primer archivo, usar sus resultados como base
                if ($archivos_procesados === 0) {
                    $resultados_ocr = $resultado_individual;
                } else {
                    // Combinar respuestas de archivos subsecuentes
                    if (isset($resultado_individual['respuestas']) && is_array($resultado_individual['respuestas'])) {
                        // Agregar respuestas que no estén ya
                        foreach ($resultado_individual['respuestas'] as $resp) {
                            $ya_existe = false;
                            foreach ($resultados_ocr['respuestas'] as $resp_existente) {
                                if ($resp_existente['reactivo_id'] === $resp['reactivo_id']) {
                                    $ya_existe = true;
                                    break;
                                }
                            }
                            if (!$ya_existe) {
                                $resultados_ocr['respuestas'][] = $resp;
                            }
                        }
                    }
                    
                    // Combinar respuestas abiertas
                    if (isset($resultado_individual['respuestas_abiertas']) && is_array($resultado_individual['respuestas_abiertas'])) {
                        if (!isset($resultados_ocr['respuestas_abiertas'])) {
                            $resultados_ocr['respuestas_abiertas'] = [];
                        }
                        $resultados_ocr['respuestas_abiertas'] = array_merge(
                            $resultados_ocr['respuestas_abiertas'], 
                            $resultado_individual['respuestas_abiertas']
                        );
                    }
                    
                    // Combinar warnings
                    if (isset($resultado_individual['warnings']) && is_array($resultado_individual['warnings'])) {
                        $resultados_ocr['warnings'] = array_merge(
                            $resultados_ocr['warnings'], 
                            $resultado_individual['warnings']
                        );
                    }
                }
                
                // Limpiar archivo temporal
                @unlink($temp_filepath);
                
                $archivos_procesados++;
                error_log("✓ Archivo procesado: $nombre_archivo");
                
            } catch (Exception $e) {
                $archivos_con_errores++;
                $archivos_errores_detalle[] = $nombre_archivo . ' (' . $e->getMessage() . ')';
                error_log("✗ Error procesando $nombre_archivo: " . $e->getMessage());
                @unlink($temp_filepath);
            }
        }
        
        // DEBUG: Guardar resultados en archivo temporal
        if (isset($resultados_ocr)) {
            $debug_file = $temp_dir . '/debug_resultado_' . uniqid() . '.txt';
            file_put_contents($debug_file, print_r($resultados_ocr, true));
        }
        
        // Preparar mensajes
        if ($archivos_procesados === 0) {
            throw new Exception('No se pudo procesar ningún archivo. ' . implode(', ', $archivos_errores_detalle));
        }
        
        if ($resultados_ocr['success']) {
            $flash = "✓ Procesados $archivos_procesados de $num_archivos archivo(s) correctamente. Revise los resultados antes de guardar.";
            if ($archivos_con_errores > 0) {
                $flash .= " ($archivos_con_errores con errores)";
            }
            $flash_type = 'success';
        } else {
            $flash = "⚠ Se procesaron $archivos_procesados archivo(s) pero se encontraron algunos problemas. Por favor revise.";
            $flash_type = 'warning';
        }
        
        // Agregar información de archivos procesados
        $resultados_ocr['archivos_procesados'] = $archivos_procesados;
        $resultados_ocr['archivos_con_errores'] = $archivos_con_errores;
        if (!empty($archivos_errores_detalle)) {
            $resultados_ocr['warnings'][] = 'Archivos con errores: ' . implode(', ', $archivos_errores_detalle);
        }

    } catch (Exception $e) {
        $flash = '✗ Error: ' . $e->getMessage();
        $flash_type = 'danger';
        error_log('Error en clima_captura_ia: ' . $e->getMessage());
    }
}

// =====================================================
// GUARDAR RESULTADOS VALIDADOS
// =====================================================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'guardar_validado') {
    try {
        $periodo_id = isset($_POST['periodo_id']) ? (int)$_POST['periodo_id'] : 0;
        $empleado_id = isset($_POST['empleado_id']) ? (int)$_POST['empleado_id'] : 0;
        $unidad_id = isset($_POST['unidad_id']) ? (int)$_POST['unidad_id'] : 0;
        $es_anonima = isset($_POST['es_anonima']) && $_POST['es_anonima'] === '1';

        if ($periodo_id <= 0) throw new Exception('Período inválido');

        $pdo->beginTransaction();

        if (!$es_anonima) {
            if ($empleado_id <= 0) throw new Exception('Empleado inválido');
            
            $chk = $pdo->prepare("SELECT elegible FROM clima_elegibles WHERE periodo_id=? AND empleado_id=? AND empresa_id=? LIMIT 1");
            $chk->execute([$periodo_id, $empleado_id, $empresa_id]);
            if (!$chk->fetch()) {
                throw new Exception('Este empleado no es elegible para este período');
            }
        } else {
            $empleado_id = null;
            if ($unidad_id <= 0) throw new Exception('Unidad inválida para captura anónima');
        }

        $inserts_count = 0;
        
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'r_') === 0) {
                $reactivo_id = (int)substr($key, 2);
                $valor = (int)$value;

                if ($reactivo_id > 0 && $valor >= 1 && $valor <= 3) {
                    $ins = $pdo->prepare("
                        INSERT INTO clima_respuestas (periodo_id, empleado_id, reactivo_id, valor, fecha_respuesta)
                        VALUES (?, ?, ?, ?, NOW())
                        ON DUPLICATE KEY UPDATE valor = VALUES(valor), fecha_respuesta = VALUES(fecha_respuesta)
                    ");
                    $ins->execute([$periodo_id, $empleado_id, $reactivo_id, $valor]);
                    $inserts_count++;
                }
            }
        }

        // Procesar respuestas abiertas
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'pa_') === 0) {
                $pregunta_id = (int)substr($key, 3);
                $respuesta = trim((string)$value);

                if ($pregunta_id > 0 && !empty($respuesta)) {
                    $ins = $pdo->prepare("
                        INSERT INTO clima_respuestas_abiertas 
                        (periodo_id, empleado_id, empresa_id, unidad_id, pregunta_id, respuesta, fecha_respuesta)
                        VALUES (?, ?, ?, ?, ?, ?, NOW())
                        ON DUPLICATE KEY UPDATE respuesta = VALUES(respuesta), fecha_respuesta = VALUES(fecha_respuesta)
                    ");
                    $ins->execute([$periodo_id, $empleado_id, $empresa_id, $unidad_id, $pregunta_id, $respuesta]);
                }
            }
        }

        $pdo->commit();

        $flash = "✓ Respuestas guardadas exitosamente ($inserts_count preguntas registradas via OCR)";
        $flash_type = 'success';
        
        // Limpiar los resultados OCR después de guardar exitosamente
        $resultados_ocr = null;

        header('Location: clima_captura_ia.php?guardado=1&periodo=' . $periodo_id);
        exit;

    } catch (Exception $e) {
        if ($pdo->inTransaction()) {
            $pdo->rollBack(); // CORREGIR: Usar rollBack en lugar de commit
        }
        $flash = '✗ Error al guardar: ' . $e->getMessage();
        $flash_type = 'danger';
        error_log('Error guardando desde OCR: ' . $e->getMessage());
    }
}

// =====================================================
// OBTENER PERÍODOS
// =====================================================
$periodos_stmt = $pdo->prepare("
    SELECT periodo_id, anio, fecha_inicio, fecha_fin, estatus
    FROM clima_periodos
    WHERE empresa_id = ?
    ORDER BY anio DESC, periodo_id DESC
    LIMIT 10
");
$periodos_stmt->execute([$empresa_id]);
$periodos_list = $periodos_stmt->fetchAll(PDO::FETCH_ASSOC);

// =====================================================
// OBTENER UNIDADES
// =====================================================
$unidades_stmt = $pdo->prepare("
    SELECT unidad_id, nombre
    FROM org_unidades
    WHERE empresa_id = ? AND estatus = 1
    ORDER BY nombre
");
$unidades_stmt->execute([$empresa_id]);
$unidades_list = $unidades_stmt->fetchAll(PDO::FETCH_ASSOC);

// =======================
// LAYOUT
// =======================
$page_title = 'Captura Automática con OCR - Clima Laboral';
$active_menu = 'clima_admin';

$extra_css = [
  'global_assets/css/icons/icomoon/styles.min.css',
];

require_once __DIR__ . '/../includes/layout/head.php';
require_once __DIR__ . '/../includes/layout/navbar.php';
require_once __DIR__ . '/../includes/layout/sidebar.php';
require_once __DIR__ . '/../includes/layout/content_open.php';
?>

<style>
        .upload-zone {
            border: 2px dashed #ccc;
            border-radius: 4px;
            padding: 40px;
            text-align: center;
            background-color: #fafafa;
            transition: all 0.3s;
        }
        .upload-zone:hover {
            border-color: #2196F3;
            background-color: #f0f7ff;
        }
        .upload-zone.dragover {
            border-color: #2196F3;
            background-color: #e3f2fd;
        }
        .upload-zone.has-file {
            border-color: #26A69A;
            background-color: #e0f2f1;
        }
        .upload-icon {
            font-size: 48px;
            color: #2196F3;
            margin-bottom: 15px;
        }
        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }
        .status-instalado {
            background-color: #d4edda;
            color: #155724;
        }
        .status-no-instalado {
            background-color: #f8d7da;
            color: #721c24;
        }
        .resultado-item {
            background-color: #fafafa;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            padding: 15px;
            margin-bottom: 10px;
        }
        .reactivo-header {
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        .confianza-badge {
            display: inline-block;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 11px;
            margin-left: 10px;
        }
        .confianza-alta {
            background-color: #d4edda;
            color: #155724;
        }
        .confianza-media {
            background-color: #fff3cd;
            color: #856404;
        }
        .confianza-baja {
            background-color: #f8d7da;
            color: #721c24;
        }
        .progress-container {
            display: none;
            margin-top: 20px;
        }
</style>

<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-document-text2 mr-2"></i> <span class="font-weight-semibold">Captura Automática con OCR</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
    <div class="header-elements">
      <a href="clima_admin.php" class="btn btn-link btn-sm text-body">
        <i class="icon-arrow-left8 mr-2"></i> Volver
      </a>
    </div>
  </div>
</div>

<div class="content">

  <!-- Estado de Tesseract -->
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
          <i class="icon-<?php echo $tesseract_disponible ? 'checkmark-circle' : 'cross-circle'; ?> icon-3x mr-3" style="color: <?php echo $tesseract_disponible ? '#28a745' : '#dc3545'; ?>"></i>
          <div>
            <h5 class="mb-1">Estado de Tesseract OCR</h5>
            <?php if ($tesseract_disponible): ?>
              <span class="status-badge status-instalado">✓ Instalado y disponible</span>
              <small class="d-block text-muted mt-1"><?php echo h($tesseract_disponible); ?></small>
            <?php else: ?>
              <span class="status-badge status-no-instalado">✗ No instalado</span>
              <small class="d-block text-danger mt-1">Se requiere instalación de Tesseract</small>
            <?php endif; ?>
          </div>
        </div>
        <?php if (!$tesseract_disponible): ?>
          <a href="#instrucciones-instalacion" class="btn btn-primary btn-sm">
            Ver Instrucciones de Instalación
          </a>
        <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Mensajes Flash -->
        <?php if ($flash): ?>
            <div class="alert alert-<?php echo h($flash_type); ?> alert-dismissible fade show">
                <?php echo h($flash); ?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['guardado']) && $_GET['guardado'] == '1'): ?>
            <div class="alert alert-success alert-dismissible fade show">
                ✓ Las respuestas han sido guardadas exitosamente en la base de datos.
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        <?php endif; ?>

        <?php if ($tesseract_disponible): ?>
            
            <!-- Tips para mejores resultados -->
            <div class="alert alert-info border-0 alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <span class="font-weight-semibold"><i class="icon-lightbulb4 mr-2"></i> Tips para mejores resultados de OCR:</span>
                <ul class="list list-unstyled mt-2 mb-0">
                    <li><i class="icon-arrow-right5 mr-2"></i><strong>Calidad de escaneo:</strong> Use resolución mínima de 300 DPI (preferible 600 DPI)</li>
                    <li><i class="icon-arrow-right5 mr-2"></i><strong>Marcas visibles:</strong> Las marcas X o ✓ deben ser oscuras y claras</li>
                    <li><i class="icon-arrow-right5 mr-2"></i><strong>Formato recomendado:</strong> PNG o JPEG son preferibles a PDF para una página</li>
                    <li><i class="icon-arrow-right5 mr-2"></i><strong>Múltiples archivos:</strong> Puede cargar varias imágenes de una encuesta de múltiples páginas</li>
                    <li><i class="icon-arrow-right5 mr-2"></i><strong>Iluminación:</strong> Documento escaneado con buena iluminación sin sombras</li>
                    <li><i class="icon-arrow-right5 mr-2"></i><strong>Orientación:</strong> El documento debe estar derecho, no inclinado</li>
                    <li><i class="icon-arrow-right5 mr-2"></i><strong>Revisión manual:</strong> Siempre revise las respuestas antes de guardar</li>
                </ul>
            </div>
            
  <!-- Formulario de Carga -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h6 class="card-title">
        <i class="icon-cloud-upload mr-2"></i>
        Cargar Encuesta Escaneada
      </h6>
    </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" id="formUpload">
                        <input type="hidden" name="action" value="procesar_pdf">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="font-weight-bold">Período:</label>
                                <select name="periodo_id" class="form-control" required>
                                    <?php foreach ($periodos_list as $p): ?>
                                        <option value="<?php echo $p['periodo_id']; ?>">
                                            <?php echo h($p['anio']); ?> 
                                            (<?php echo h($p['estatus']); ?>)
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="upload-zone" id="uploadZone">
                            <i class="icon-cloud-upload upload-icon"></i>
                            <h5>Arrastre sus archivos aquí o haga clic para seleccionar</h5>
                            <p class="text-muted mb-0">Formatos aceptados: PDF, PNG, JPG, JPEG, TIFF (Máx. 10MB por archivo)</p>
                            <button type="button" class="btn btn-outline-primary mt-3" id="btnSelect">
                                <i class="icon-folder-open"></i>
                                Seleccionar archivos
                            </button>
                            <div id="fileName" class="mt-3" style="display: none;"></div>
                        </div>
                        
                        <input type="file" 
                               name="archivos_pdf[]" 
                               id="archivo_pdf" 
                               accept=".pdf,.png,.jpg,.jpeg,.tiff,.tif"
                               style="display: none;"
                               multiple
                               required>

                        <div class="progress-container" id="progressContainer">
                            <div class="progress" style="height: 25px;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" 
                                     role="progressbar" 
                                     style="width: 100%;">
                                    Procesando con Tesseract OCR...
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary" id="btnProcesar" disabled>
                                <i class="icon-magic-wand mr-2"></i>
                                Procesar con OCR
                            </button>
                            <p class="text-muted mt-2 mb-0">
                                <small>Seleccione uno o más archivos y un período para procesar</small>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Resultados del OCR -->
            <?php if ($resultados_ocr): ?>
                <?php 
                // DEBUG: Mostrar contenido de resultados_ocr
                if (isset($_GET['debug']) && $_GET['debug'] == '1') {
                    echo '<pre class="alert alert-info">';
                    echo 'DEBUG resultados_ocr:<br>';
                    print_r($resultados_ocr);
                    echo '</pre>';
                }
                ?>
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">
                            <i class="icon-checkmark-circle mr-2"></i>
                            Resultados del Procesamiento - Validar antes de Guardar
                        </h6>
                    </div>
                    <div class="card-body">
                        
                        <?php if (!empty($resultados_ocr['warnings'])): ?>
                            <div class="alert alert-warning">
                                <i class="icon-warning"></i>
                                <strong>Advertencias del procesamiento OCR:</strong>
                                <ul class="mb-0 mt-2">
                                    <?php foreach ($resultados_ocr['warnings'] as $warning): ?>
                                        <li><?php echo h($warning); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (isset($resultados_ocr['confianza_promedio']) && $resultados_ocr['confianza_promedio'] < 50): ?>
                            <div class="alert alert-danger">
                                <i class="icon-alert"></i>
                                <strong>⚠️ ATENCIÓN: Confianza muy baja (<?php echo h($resultados_ocr['confianza_promedio']); ?>%)</strong>
                                <p class="mb-0">Las respuestas detectadas son aproximaciones y DEBEN ser revisadas y corregidas manualmente antes de guardar. Compare con el documento original.</p>
                            </div>
                        <?php endif; ?>
                        
                        <div class="alert alert-info">
                            <i class="icon-info22"></i>
                            <strong>Revise los resultados:</strong> Verifique que las respuestas detectadas sean correctas antes de guardar.
                            Puede modificar cualquier valor que no sea correcto.
                            <?php if (isset($resultados_ocr['confianza_promedio']) && $resultados_ocr['confianza_promedio'] > 0): ?>
                                <br><strong>Confianza promedio:</strong> <?php echo h($resultados_ocr['confianza_promedio']); ?>%
                            <?php endif; ?>
                        </div>

                        <form method="POST" id="formValidar">
                            <input type="hidden" name="action" value="guardar_validado">
                            <input type="hidden" name="periodo_id" value="<?php echo isset($resultados_ocr['periodo_id']) ? h($resultados_ocr['periodo_id']) : ''; ?>">
                            <input type="hidden" name="empleado_id" value="<?php echo isset($resultados_ocr['empleado_id']) ? h($resultados_ocr['empleado_id']) : ''; ?>">
                            <input type="hidden" name="unidad_id" value="<?php echo isset($resultados_ocr['unidad_id']) ? h($resultados_ocr['unidad_id']) : ''; ?>">
                            <input type="hidden" name="es_anonima" value="<?php echo (isset($resultados_ocr['es_anonima']) && $resultados_ocr['es_anonima']) ? '1' : '0'; ?>">

                            <?php if (isset($resultados_ocr['empleado_nombre'])): ?>
                                <div class="alert alert-secondary">
                                    <i class="icon-user"></i>
                                    <strong>Empleado detectado:</strong> <?php echo h($resultados_ocr['empleado_nombre']); ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (isset($resultados_ocr['es_anonima']) && $resultados_ocr['es_anonima']): ?>
                                <div class="form-group">
                                    <label class="font-weight-bold">Unidad/Área (para captura anónima):</label>
                                    <select name="unidad_id" class="form-control" required>
                                        <option value="">-- Seleccionar Unidad --</option>
                                        <?php foreach ($unidades_list as $u): ?>
                                            <option value="<?php echo $u['unidad_id']; ?>">
                                                <?php echo h($u['nombre']); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            <?php endif; ?>
                            <h6 class="mb-3">Respuestas Detectadas (<?php echo isset($resultados_ocr['respuestas']) ? count($resultados_ocr['respuestas']) : 0; ?>):</h6>

                            <?php if (isset($resultados_ocr['respuestas']) && !empty($resultados_ocr['respuestas'])): ?>
                                
                                <?php if (isset($resultados_ocr['confianza_promedio']) && $resultados_ocr['confianza_promedio'] == 0): ?>
                                    <div class="alert alert-info">
                                        <i class="icon-info22"></i>
                                        <strong>Completación manual requerida:</strong>
                                        <p class="mb-0">El sistema preparó una plantilla con todas las preguntas de la encuesta. Por favor, compare con el documento escaneado y marque la respuesta correcta para cada pregunta.</p>
                                    </div>
                                <?php endif; ?>
                                
                                <?php foreach ($resultados_ocr['respuestas'] as $respuesta): ?>
                                <div class="resultado-item">
                                    <div class="reactivo-header">
                                        <?php echo h($respuesta['texto_reactivo']); ?>
                                        
                                        <?php if (isset($respuesta['confianza'])): ?>
                                            <?php if ($respuesta['confianza'] == 0): ?>
                                                <span class="badge badge-danger ml-2">
                                                    <i class="icon-pencil"></i> REVISAR MANUALMENTE
                                                </span>
                                            <?php elseif ($respuesta['confianza'] > 0): ?>
                                                <?php
                                                $confianza_class = 'confianza-baja';
                                                if ($respuesta['confianza'] >= 90) $confianza_class = 'confianza-alta';
                                                elseif ($respuesta['confianza'] >= 70) $confianza_class = 'confianza-media';
                                                ?>
                                                <span class="confianza-badge <?php echo $confianza_class; ?>">
                                                    Confianza: <?php echo $respuesta['confianza']; ?>%
                                                </span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="form-group mb-0">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <?php
                                            $opciones = [
                                                1 => 'Totalmente De acuerdo 😊',
                                                2 => 'Parcialmente De acuerdo 😐',
                                                3 => 'En Desacuerdo 😞'
                                            ];
                                            foreach ($opciones as $valor => $etiqueta):
                                                $checked = ($respuesta['valor'] == $valor) ? 'active' : '';
                                            ?>
                                                <label class="btn btn-outline-primary <?php echo $checked; ?>">
                                                    <input type="radio" 
                                                           name="r_<?php echo $respuesta['reactivo_id']; ?>" 
                                                           value="<?php echo $valor; ?>"
                                                           <?php echo $checked ? 'checked' : ''; ?>>
                                                    <?php echo h($etiqueta); ?>
                                                </label>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <div class="alert alert-warning">
                                    <i class="icon-warning"></i>
                                    No se pudieron generar respuestas. Por favor, intenta de nuevo o contacta a soporte.

                                </div>
                            <?php endif; ?>

                            <?php if (isset($resultados_ocr['respuestas_abiertas']) && !empty($resultados_ocr['respuestas_abiertas'])): ?>
                                <h6 class="mt-4 mb-3">Respuestas Abiertas Detectadas:</h6>
                                <?php foreach ($resultados_ocr['respuestas_abiertas'] as $abierta): ?>
                                    <div class="resultado-item">
                                        <label class="font-weight-bold"><?php echo h($abierta['pregunta_texto']); ?></label>
                                        <textarea name="pa_<?php echo $abierta['pregunta_id']; ?>" 
                                                  class="form-control" 
                                                  rows="3"><?php echo h($abierta['respuesta']); ?></textarea>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="icon-floppy-disk mr-2"></i>
                                    Guardar Respuestas Validadas
                                </button>
                                <button type="button" class="btn btn-info" onclick="limpiarYProcesarNueva()">
                                    <i class="icon-plus-circle2 mr-2"></i>
                                    Procesar Nueva Encuesta
                                </button>
                                <button type="button" class="btn btn-light" onclick="location.reload()">
                                    <i class="icon-cross2 mr-2"></i>
                                    Cancelar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endif; ?>

        <?php else: ?>
            <!-- Instrucciones de Instalación -->
            <div class="card" id="instrucciones-instalacion">
                <div class="card-header bg-danger header-elements-inline">
                    <h6 class="card-title text-white">
                        <i class="icon-download mr-2"></i>
                        Instalación de Tesseract OCR
                    </h6>
                </div>
                <div class="card-body">
                    <h6 class="font-weight-bold">Para Windows:</h6>
                    <ol>
                        <li class="mb-2">
                            Descargue el instalador desde: 
                            <a href="https://github.com/UB-Mannheim/tesseract/wiki" target="_blank" class="font-weight-bold">
                                https://github.com/UB-Mannheim/tesseract/wiki
                            </a>
                        </li>
                        <li class="mb-2">Ejecute el instalador <code>tesseract-ocr-w64-setup-v5.x.x.exe</code></li>
                        <li class="mb-2">Durante la instalación, seleccione el idioma <strong>Spanish</strong></li>
                        <li class="mb-2">La ruta de instalación predeterminada es: <code>C:\Program Files\Tesseract-OCR\</code></li>
                        <li class="mb-2">Una vez instalado, recargue esta página</li>
                    </ol>

                    <div class="alert alert-info mt-3">
                        <strong>Nota:</strong> Después de instalar Tesseract, puede que necesite reiniciar su navegador o servidor web (Apache/MAMP).
                    </div>

                    <h6 class="font-weight-bold mt-4">Verificación Manual:</h6>
                    <p>Abra PowerShell y ejecute:</p>
                    <pre class="bg-light p-3 rounded"><code>tesseract --version</code></pre>
                    <p class="text-muted">Si ve la versión de Tesseract, la instalación fue exitosa.</p>
                </div>
            </div>
        <?php endif; ?>

</div><!-- /content -->

<?php
require_once __DIR__ . '/../includes/layout/footer.php';
?>

<script>
        $(document).ready(function() {
            // Drag and drop functionality
            const uploadZone = document.getElementById('uploadZone');
            const fileInput = document.getElementById('archivo_pdf');
            const fileName = document.getElementById('fileName');
            const btnProcesar = document.getElementById('btnProcesar');

            if (!uploadZone || !fileInput) {
                return;
            }

            // Prevent the browser from opening the file on drop
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach((evt) => {
                window.addEventListener(evt, (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                }, { passive: false });
                document.addEventListener(evt, (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                }, { passive: false });
            });

            // Click handlers
            const btnSelect = document.getElementById('btnSelect');
            if (btnSelect) {
                btnSelect.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    fileInput.click();
                });
            }
            
            uploadZone.addEventListener('click', (e) => {
                // Solo abrir si no se clickeó el botón
                if (e.target !== btnSelect && !btnSelect.contains(e.target)) {
                    fileInput.click();
                }
            });

            uploadZone.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadZone.classList.add('dragover');
            });

            uploadZone.addEventListener('dragleave', (e) => {
                e.preventDefault();
                uploadZone.classList.remove('dragover');
            });

            uploadZone.addEventListener('drop', (e) => {
                e.preventDefault();
                e.stopPropagation();
                uploadZone.classList.remove('dragover');

                const files = e.dataTransfer && e.dataTransfer.files ? e.dataTransfer.files : null;
                if (files && files.length > 0) {
                    // Asignar todos los archivos
                    if (window.DataTransfer) {
                        const dt = new DataTransfer();
                        for (let i = 0; i < files.length; i++) {
                            dt.items.add(files[i]);
                        }
                        fileInput.files = dt.files;
                    } else {
                        fileInput.files = files;
                    }
                    mostrarNombresArchivos(files);
                }
            });

            function onFileChange() {
                if (fileInput.files && fileInput.files.length > 0) {
                    mostrarNombresArchivos(fileInput.files);
                }
            }

            fileInput.addEventListener('change', onFileChange);
            fileInput.addEventListener('input', onFileChange);

            function mostrarNombresArchivos(files) {
                let html = '';
                let totalSize = 0;
                let hasError = false;
                
                // Crear lista de archivos
                html += '<div class="text-left">';
                html += '<strong><i class="icon-checkmark-circle" style="color: #28a745;"></i> ' + files.length + ' archivo(s) seleccionado(s):</strong>';
                html += '<ul class="list-unstyled mt-2 mb-0" style="max-height: 200px; overflow-y: auto;">';
                
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const sizeMb = (file.size / (1024 * 1024)).toFixed(2);
                    totalSize += file.size;
                    
                    let iconColor = '#28a745';
                    let iconClass = 'icon-file-check';
                    let textClass = 'text-success';
                    
                    // Validar tamaño
                    if (file.size > 10 * 1024 * 1024) {
                        iconColor = '#dc3545';
                        iconClass = 'icon-cross-circle';
                        textClass = 'text-danger';
                        hasError = true;
                    }
                    
                    html += '<li class="' + textClass + '">';
                    html += '<i class="' + iconClass + '" style="color: ' + iconColor + ';"></i> ';
                    html += '<strong>' + (i + 1) + '.</strong> ' + file.name + ' <small>(' + sizeMb + ' MB)</small>';
                    if (file.size > 10 * 1024 * 1024) {
                        html += ' <span class="badge badge-danger">Muy grande</span>';
                    }
                    html += '</li>';
                }
                
                html += '</ul>';
                
                const totalSizeMb = (totalSize / (1024 * 1024)).toFixed(2);
                html += '<small class="text-muted">Tamaño total: ' + totalSizeMb + ' MB</small>';
                html += '</div>';
                
                fileName.innerHTML = html;
                fileName.style.display = 'block';
                uploadZone.classList.add('has-file');
                
                // Habilitar/deshabilitar botón según validación
                if (btnProcesar) {
                    btnProcesar.disabled = hasError;
                }
                
                if (hasError) {
                    fileName.innerHTML = '<div class="alert alert-danger mb-0"><i class="icon-cross-circle"></i> Algunos archivos son muy grandes. El tamaño máximo por archivo es 10 MB.</div>' + html;
                }
            }

            // Mostrar progreso al enviar
            $('#formUpload').on('submit', function(e) {
                if (!fileInput.files || fileInput.files.length === 0) {
                    e.preventDefault();
                    alert('Seleccione un archivo antes de procesar.');
                    return;
                }
                $('#progressContainer').show();
                $('#btnProcesar').prop('disabled', true);
            });
            
            // Función para limpiar y procesar nueva encuesta
            window.limpiarYProcesarNueva = function() {
                // Limpiar archivo seleccionado
                fileInput.value = '';
                fileName.innerHTML = '';
                fileName.style.display = 'none';
                uploadZone.classList.remove('has-file');
                
                // Limpiar formulario de upload
                document.getElementById('formUpload').reset();
                
                // Desactivar botón de procesamiento
                if (btnProcesar) {
                    btnProcesar.disabled = true;
                }
                
                // Ocultar resultados previos scrolleando hacia arriba
                window.scrollTo(0, 0);
                
                // Esperar a que usuario seleccione nuevo archivo
                alert('Formulario limpiado. Seleccione el archivo de la siguiente encuesta para procesar.');
            };
        });
</script>

<?php
require_once __DIR__ . '/../includes/layout/content_close.php';
?>
