<?php
// diagnostico_pdf_especifico.php
// Analizar un PDF específico para ver qué está pasando

session_start();
require_once __DIR__ . '/includes/conexion.php';
require_once __DIR__ . '/includes/clima_ocr_processor.php';

$pdf_path = isset($_GET['file']) ? $_GET['file'] : '';
$empresa_id = $_SESSION['empresa_id'] ?? 0;
$periodo_id = isset($_GET['periodo']) ? (int)$_GET['periodo'] : 1;

// Funciones auxiliares de Tesseract (copiadas del código principal)
function verificar_tesseract() {
    $posibles_rutas = [
        'C:\\Program Files\\Tesseract-OCR\\tesseract.exe',
        'C:\\Program Files (x86)\\Tesseract-OCR\\tesseract.exe',
        'tesseract'
    ];
    
    foreach ($posibles_rutas as $ruta) {
        if ($ruta && file_exists($ruta)) {
            return $ruta;
        }
    }
    
    exec('where tesseract 2>nul', $output, $return_code);
    if ($return_code === 0 && !empty($output)) {
        return trim($output[0]);
    }
    
    return false;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnóstico PDF Específico</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; }
        h1 { color: #333; border-bottom: 3px solid #2196F3; padding-bottom: 10px; }
        .section { margin: 20px 0; padding: 15px; background: #f9f9f9; border-left: 4px solid #2196F3; }
        .section h3 { margin-top: 0; color: #1976d2; }
        .ok { color: green; font-weight: bold; }
        .error { color: red; font-weight: bold; }
        .warning { color: orange; font-weight: bold; }
        pre { background: #f0f0f0; padding: 10px; overflow-x: auto; max-height: 400px; }
        button { background: #2196F3; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin: 5px; }
        button:hover { background: #1976d2; }
        input[type="file"] { padding: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔍 Diagnóstico Específico de PDF para OCR</h1>
        
        <div class="section">
            <h3>1. Verificación de Tesseract</h3>
            <?php
                $tesseract = verificar_tesseract();
                if ($tesseract) {
                    echo "<p class='ok'>✓ Tesseract encontrado: $tesseract</p>";
                } else {
                    echo "<p class='error'>✗ Tesseract NO instalado</p>";
                }
            ?>
        </div>
        
        <div class="section">
            <h3>2. Procesar Archivo PDF</h3>
            <form method="POST" enctype="multipart/form-data">
                <div>
                    <label>Selecciona un PDF/Imagen:</label><br>
                    <input type="file" name="archivo" accept=".pdf,.png,.jpg,.jpeg,.tiff" required>
                </div>
                <div>
                    <label>Período ID:</label><br>
                    <input type="number" name="periodo" value="1" min="1">
                </div>
                <button type="submit">Procesar Archivo</button>
            </form>
        </div>
        
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo'])) {
                $archivo = $_FILES['archivo'];
                $extension = strtolower(pathinfo($archivo['name'], PATHINFO_EXTENSION));
                
                echo "<div class='section'>";
                echo "<h3>3. Resultado del Procesamiento</h3>";
                
                // Validar archivo
                if ($archivo['error'] !== UPLOAD_ERR_OK) {
                    echo "<p class='error'>✗ Error al subir archivo: " . $archivo['error'] . "</p>";
                } else if ($archivo['size'] > 10 * 1024 * 1024) {
                    echo "<p class='error'>✗ Archivo muy grande (" . ($archivo['size'] / 1024 / 1024) . " MB > 10 MB)</p>";
                } else if (!in_array($extension, ['pdf', 'png', 'jpg', 'jpeg', 'tiff', 'tif'])) {
                    echo "<p class='error'>✗ Formato no permitido: $extension</p>";
                } else {
                    // Guardar registro en log
                    error_log("📋 DIAGNÓSTICO INICIADO");
                    error_log("📁 Archivo: " . $archivo['name']);
                    error_log("📏 Tamaño: " . ($archivo['size'] / 1024) . " KB");
                    error_log("📄 Extensión: $extension");
                    
                    // Guardar temporalmente
                    $temp_dir = __DIR__ . '/storage/temp_ocr';
                    if (!is_dir($temp_dir)) {
                        mkdir($temp_dir, 0755, true);
                    }
                    
                    $temp_filepath = $temp_dir . '/diag_' . uniqid() . '.' . $extension;
                    if (move_uploaded_file($archivo['tmp_name'], $temp_filepath)) {
                        echo "<p class='ok'>✓ Archivo guardado temporalmente</p>";
                        error_log("✓ Temporal: $temp_filepath");
                        
                        // Intentar procesar
                        try {
                            $processor = new ClimaOCRProcessor($pdo, verificar_tesseract());
                            $periodo_id = isset($_POST['periodo']) ? (int)$_POST['periodo'] : 1;
                            
                            echo "<p>⏱️  Procesando con OCR...</p>";
                            $resultados = $processor->procesarArchivo($temp_filepath, $periodo_id, $empresa_id);
                            
                            echo "<h4>4. Resultados Obtenidos</h4>";
                            echo "<pre>";
                            echo "Success: " . ($resultados['success'] ? 'Sí' : 'No') . "\n";
                            echo "Respuestas: " . count($resultados['respuestas'] ?? []) . "\n";
                            echo "Confianza: " . ($resultados['confianza_promedio'] ?? 0) . "%\n";
                            echo "Warnings: " . count($resultados['warnings'] ?? []) . "\n\n";
                            
                            if (!empty($resultados['warnings'])) {
                                echo "ADVERTENCIAS:\n";
                                foreach ($resultados['warnings'] as $w) {
                                    echo "  - $w\n";
                                }
                                echo "\n";
                            }
                            
                            echo "RESPUESTAS DETECTADAS:\n";
                            if (!empty($resultados['respuestas'])) {
                                foreach (array_slice($resultados['respuestas'], 0, 3) as $idx => $resp) {
                                    echo "[$idx] ID={$resp['reactivo_id']}, Valor={$resp['valor']}, Confianza={$resp['confianza']}%\n";
                                    echo "     Texto: " . substr($resp['texto_reactivo'], 0, 60) . "...\n";
                                }
                            } else {
                                echo "  ❌ NO HAY RESPUESTAS\n";
                            }
                            echo "</pre>";
                            
                        } catch (Exception $e) {
                            echo "<p class='error'>✗ Error procesando: " . htmlspecialchars($e->getMessage()) . "</p>";
                            error_log("❌ Error: " . $e->getMessage());
                        }
                        
                        // Limpiar
                        @unlink($temp_filepath);
                    } else {
                        echo "<p class='error'>✗ No se pudo guardar archivo temporal</p>";
                    }
                }
                echo "</div>";
            }
        ?>
        
        <div class="section" style="background: #fff3cd; border-left-color: orange;">
            <h3>❓ Próximos Pasos si NO hay Respuestas</h3>
            <ol>
                <li>Verifica que <span class="ok">Tesseract esté instalado</span></li>
                <li>Copia el LOG exacto de errores (ver más abajo)</li>
                <li>Proporciona esos logs al soporte técnico</li>
            </ol>
        </div>
        
        <div class="section">
            <h3>5. Últimas Líneas del Log de Errores PHP</h3>
            <?php
                $log_file = __DIR__ . '/storage/logs/php_errors.log';
                if (file_exists($log_file)) {
                    $lines = file($log_file, FILE_SKIP_EMPTY_LINES);
                    $recent = array_slice($lines, -15); // Últimas 15 líneas
                    
                    if (count($recent) > 0) {
                        echo "<pre>";
                        foreach ($recent as $line) {
                            echo htmlspecialchars(trim($line)) . "\n";
                        }
                        echo "</pre>";
                    } else {
                        echo "<p class='ok'>✓ No hay errores en el log</p>";
                    }
                } else {
                    echo "<p class='warning'>⚠️  Log no encontrado</p>";
                }
            ?>
        </div>
        
        <hr>
        <p style="text-align: center; color: #666;">
            <a href="public/clima_captura_ia.php">← Volver a Captura OCR</a>
        </p>
    </div>
</body>
</html>
