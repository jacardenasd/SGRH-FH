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
// PROCESAR PDF/IMAGEN CON OCR
// =====================================================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'procesar_pdf') {
    try {
        if (!$tesseract_disponible) {
            throw new Exception('Tesseract OCR no está instalado. Por favor instálelo primero.');
        }

        if (!isset($_FILES['archivo_pdf']) || $_FILES['archivo_pdf']['error'] !== UPLOAD_ERR_OK) {
            throw new Exception('Error al cargar el archivo. Por favor intente nuevamente.');
        }

        $archivo = $_FILES['archivo_pdf'];
        $extension = strtolower(pathinfo($archivo['name'], PATHINFO_EXTENSION));
        
        // Validar extensión
        $extensiones_permitidas = ['pdf', 'png', 'jpg', 'jpeg', 'tiff', 'tif'];
        if (!in_array($extension, $extensiones_permitidas)) {
            throw new Exception('Formato no permitido. Use: PDF, PNG, JPG, JPEG o TIFF');
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

        // Generar nombre único para archivo temporal
        $temp_filename = uniqid('ocr_', true);
        $temp_filepath = $temp_dir . '/' . $temp_filename . '.' . $extension;
        
        // Mover archivo cargado
        if (!move_uploaded_file($archivo['tmp_name'], $temp_filepath)) {
            throw new Exception('Error al guardar archivo temporal');
        }

        // Procesar con Tesseract
        require_once __DIR__ . '/../includes/clima_ocr_processor.php';
        $processor = new ClimaOCRProcessor($pdo, $tesseract_disponible);
        
        $resultados_ocr = $processor->procesarArchivo($temp_filepath, $periodo_id, $empresa_id);
        
        // Limpiar archivo temporal
        @unlink($temp_filepath);

        if ($resultados_ocr['success']) {
            $flash = '✓ Archivo procesado correctamente. Revise los resultados antes de guardar.';
            $flash_type = 'success';
        } else {
            $flash = '⚠ El archivo fue procesado pero se encontraron algunos problemas. Por favor revise.';
            $flash_type = 'warning';
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

        header('Location: clima_captura_ia.php?guardado=1&periodo=' . $periodo_id);
        exit;

    } catch (Exception $e) {
        if ($pdo->inTransaction()) {
            $pdo->commit();
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

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura Automática con OCR - Clima Laboral</title>
    <link rel="stylesheet" href="../global_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../global_assets/css/material_icons.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .main-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 8px 8px 0 0 !important;
            padding: 15px 20px;
        }
        .upload-zone {
            border: 2px dashed #ccc;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
            background-color: #fafafa;
            transition: all 0.3s;
            cursor: pointer;
        }
        .upload-zone:hover {
            border-color: #667eea;
            background-color: #f0f0ff;
        }
        .upload-zone.dragover {
            border-color: #667eea;
            background-color: #e8e8ff;
        }
        .upload-icon {
            font-size: 48px;
            color: #667eea;
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
            background-color: white;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
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
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #5568d3 0%, #653a8a 100%);
        }
        .progress-container {
            display: none;
            margin-top: 20px;
        }
        .alert {
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="mb-1">
                    <i class="material-icons" style="vertical-align: middle;">document_scanner</i>
                    Captura Automática con OCR
                </h2>
                <p class="text-muted mb-0">Procesar encuestas escaneadas automáticamente con Tesseract</p>
            </div>
            <a href="clima_admin.php" class="btn btn-outline-secondary">
                <i class="material-icons" style="vertical-align: middle; font-size: 18px;">arrow_back</i>
                Volver
            </a>
        </div>

        <!-- Estado de Tesseract -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="material-icons mr-3" style="font-size: 36px; color: <?php echo $tesseract_disponible ? '#28a745' : '#dc3545'; ?>">
                            <?php echo $tesseract_disponible ? 'check_circle' : 'error'; ?>
                        </i>
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
            <!-- Formulario de Carga -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="material-icons" style="vertical-align: middle;">cloud_upload</i>
                        Cargar Encuesta Escaneada
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" id="formUpload">
                        <input type="hidden" name="action" value="procesar_pdf">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="font-weight-bold">Período:</label>
                                <select name="periodo_id" class="form-control" required>
                                    <option value="">-- Seleccionar Período --</option>
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
                            <i class="material-icons upload-icon">cloud_upload</i>
                            <h5>Arrastre su archivo aquí o haga clic para seleccionar</h5>
                            <p class="text-muted mb-0">Formatos aceptados: PDF, PNG, JPG, JPEG, TIFF (Máx. 10MB)</p>
                            <input type="file" 
                                   name="archivo_pdf" 
                                   id="archivo_pdf" 
                                   accept=".pdf,.png,.jpg,.jpeg,.tiff,.tif"
                                   style="display: none;"
                                   required>
                            <div id="fileName" class="mt-3 font-weight-bold" style="display: none;"></div>
                        </div>

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
                            <button type="submit" class="btn btn-primary btn-lg" id="btnProcesar">
                                <i class="material-icons" style="vertical-align: middle;">auto_fix_high</i>
                                Procesar con OCR
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Resultados del OCR -->
            <?php if ($resultados_ocr && isset($resultados_ocr['respuestas'])): ?>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="material-icons" style="vertical-align: middle;">fact_check</i>
                            Resultados del Procesamiento - Validar antes de Guardar
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <i class="material-icons" style="vertical-align: middle;">info</i>
                            <strong>Revise los resultados:</strong> Verifique que las respuestas detectadas sean correctas antes de guardar.
                            Puede modificar cualquier valor que no sea correcto.
                        </div>

                        <form method="POST" id="formValidar">
                            <input type="hidden" name="action" value="guardar_validado">
                            <input type="hidden" name="periodo_id" value="<?php echo h($resultados_ocr['periodo_id']); ?>">
                            <input type="hidden" name="empleado_id" value="<?php echo isset($resultados_ocr['empleado_id']) ? h($resultados_ocr['empleado_id']) : ''; ?>">
                            <input type="hidden" name="unidad_id" value="<?php echo isset($resultados_ocr['unidad_id']) ? h($resultados_ocr['unidad_id']) : ''; ?>">
                            <input type="hidden" name="es_anonima" value="<?php echo isset($resultados_ocr['es_anonima']) ? '1' : '0'; ?>">

                            <?php if (isset($resultados_ocr['empleado_nombre'])): ?>
                                <div class="alert alert-secondary">
                                    <strong>Empleado detectado:</strong> <?php echo h($resultados_ocr['empleado_nombre']); ?>
                                </div>
                            <?php endif; ?>

                            <h6 class="mb-3">Respuestas Detectadas (<?php echo count($resultados_ocr['respuestas']); ?>):</h6>

                            <?php foreach ($resultados_ocr['respuestas'] as $respuesta): ?>
                                <div class="resultado-item">
                                    <div class="reactivo-header">
                                        Pregunta #<?php echo $respuesta['reactivo_id']; ?>: <?php echo h($respuesta['texto_reactivo']); ?>
                                        
                                        <?php if (isset($respuesta['confianza'])): ?>
                                            <?php
                                            $confianza_class = 'confianza-baja';
                                            if ($respuesta['confianza'] >= 90) $confianza_class = 'confianza-alta';
                                            elseif ($respuesta['confianza'] >= 70) $confianza_class = 'confianza-media';
                                            ?>
                                            <span class="confianza-badge <?php echo $confianza_class; ?>">
                                                Confianza: <?php echo $respuesta['confianza']; ?>%
                                            </span>
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
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="material-icons" style="vertical-align: middle;">save</i>
                                    Guardar Respuestas Validadas
                                </button>
                                <button type="button" class="btn btn-secondary btn-lg" onclick="location.reload()">
                                    <i class="material-icons" style="vertical-align: middle;">cancel</i>
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
                <div class="card-header bg-danger text-white">
                    <h5 class="mb-0">
                        <i class="material-icons" style="vertical-align: middle;">download</i>
                        Instalación de Tesseract OCR
                    </h5>
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
    </div>

    <script src="../global_assets/js/jquery.min.js"></script>
    <script src="../global_assets/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Drag and drop functionality
            const uploadZone = document.getElementById('uploadZone');
            const fileInput = document.getElementById('archivo_pdf');
            const fileName = document.getElementById('fileName');

            uploadZone.addEventListener('click', () => fileInput.click());

            uploadZone.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadZone.classList.add('dragover');
            });

            uploadZone.addEventListener('dragleave', () => {
                uploadZone.classList.remove('dragover');
            });

            uploadZone.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadZone.classList.remove('dragover');
                
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    fileInput.files = files;
                    mostrarNombreArchivo(files[0].name);
                }
            });

            fileInput.addEventListener('change', function() {
                if (this.files.length > 0) {
                    mostrarNombreArchivo(this.files[0].name);
                }
            });

            function mostrarNombreArchivo(nombre) {
                fileName.textContent = '📄 ' + nombre;
                fileName.style.display = 'block';
            }

            // Mostrar progreso al enviar
            $('#formUpload').on('submit', function() {
                $('#progressContainer').show();
                $('#btnProcesar').prop('disabled', true);
            });
        });
    </script>
</body>
</html>
