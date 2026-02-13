<?php
/**
 * Debug OCR - Mostrar exactamente qué texto extrae el OCR del PDF
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

$texto_extraido = '';
$estadisticas = [];
$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['archivo'])) {
    $archivo_temp = $_FILES['archivo']['tmp_name'];
    $nombre_archivo = $_FILES['archivo']['name'];
    
    try {
        // Verificar archivo
        if (!file_exists($archivo_temp)) {
            throw new Exception('Archivo no encontrado');
        }

        $estadisticas = [
            'nombre' => htmlspecialchars($nombre_archivo),
            'tamaño' => formatBytes(filesize($archivo_temp))
        ];

        // Verificar Imagick
        if (!extension_loaded('imagick')) {
            throw new Exception('Imagick no está instalado');
        }

        // Procesar con Imagick - CORREGIDO para Windows
        $im = new Imagick();
        $im->setResolution(300, 300);
        
        // Leer el PDF con ruta completa
        $im->readImage($archivo_temp);
        
        $count = $im->getNumberImages();
        $estadisticas['paginas'] = $count;

        // Tesseract path
        $tesseract_path = 'C:\\Program Files\\Tesseract-OCR\\tesseract.exe';
        if (!file_exists($tesseract_path)) {
            throw new Exception('Tesseract no encontrado');
        }

        // Procesar cada página
        for ($i = 0; $i < $count; $i++) {
            try {
                $im->setIteratorIndex($i);
                
                // Guardar como PNG
                $temp_png = sys_get_temp_dir() . '\\ocr_' . $i . '_' . time() . '.png';
                $im->setImageFormat('png');
                $im->writeImage($temp_png);

                // Procesar con Tesseract
                $output_base = sys_get_temp_dir() . '\\ocr_out_' . $i . '_' . time();
                $cmd = '"' . $tesseract_path . '" "' . $temp_png . '" "' . $output_base . '" -l spa --psm 6 2>&1';
                
                exec($cmd, $output, $return_code);

                if (file_exists($output_base . '.txt')) {
                    $texto_pag = file_get_contents($output_base . '.txt');
                    $texto_pag = trim(preg_replace('/\s+/', ' ', $texto_pag));
                    
                    if (!empty($texto_pag) && strlen($texto_pag) > 10) {
                        $texto_extraido .= "\n\n=== PÁGINA " . ($i + 1) . " ===";
                        $texto_extraido .= "\n" . $texto_pag;
                    }
                    
                    @unlink($output_base . '.txt');
                }
                
                @unlink($temp_png);
                
            } catch (Exception $e) {
                error_log('Error página ' . ($i+1) . ': ' . $e->getMessage());
            }
        }

        $im->clear();
        $im->destroy();
        
        if (empty($texto_extraido)) {
            $error_msg = 'No se extrajo ningún texto. Verifica que el PDF sea legible.';
        }

    } catch (Exception $e) {
        $error_msg = htmlspecialchars($e->getMessage());
    }
}

function formatBytes($b, $p = 2) {
    $u = ['B', 'KB', 'MB', 'GB'];
    $b = max($b, 0);
    $pw = floor(($b ? log($b) : 0) / log(1024));
    $pw = min($pw, count($u) - 1);
    $b /= pow(1024, $pw);
    return round($b, $p) . ' ' . $u[$pw];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debug: Extracción OCR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding: 20px; background: #f5f5f5; }
        .card { margin: 15px 0; }
        pre { background: #f9f9f9; padding: 15px; overflow-x: auto; max-height: 500px; border-radius: 4px; }
    </style>
</head>
<body>

<div class="container" style="max-width: 1100px;">
    <h1 class="mb-4">📝 Debug: Extracción de Texto OCR</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Cargar PDF</h5>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="d-flex gap-3">
                <input type="file" name="archivo" accept=".pdf" class="form-control" required>
                <button type="submit" class="btn btn-primary">Procesar</button>
            </form>
        </div>
    </div>

    <?php if (!empty($error_msg)): ?>
    <div class="alert alert-danger">❌ Error: <?php echo $error_msg; ?></div>
    <?php endif; ?>

    <?php if (!empty($estadisticas)): ?>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Información</h5>
        </div>
        <div class="card-body row">
            <div class="col-md-4"><strong>Archivo:</strong> <?php echo $estadisticas['nombre']; ?></div>
            <div class="col-md-4"><strong>Páginas:</strong> <span class="badge badge-info"><?php echo $estadisticas['paginas']; ?></span></div>
            <div class="col-md-4"><strong>Tamaño:</strong> <?php echo $estadisticas['tamaño']; ?></div>
        </div>
    </div>
    <?php endif; ?>

    <?php if (!empty($texto_extraido)): ?>
    <div class="card">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">✅ Texto Extraído</h5>
        </div>
        <div class="card-body">
            <strong>Estadísticas:</strong>
            <ul>
                <li>Caracteres: <strong><?php echo strlen($texto_extraido); ?></strong></li>
                <li>Líneas: <strong><?php echo count(array_filter(explode("\n", $texto_extraido))); ?></strong></li>
                <li>Palabras:  <strong><?php echo count(explode(" ", trim($texto_extraido))); ?></strong></li>
            </ul>
            <hr>
            <pre><?php echo htmlspecialchars($texto_extraido); ?></pre>
        </div>
    </div>
    <?php endif; ?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
