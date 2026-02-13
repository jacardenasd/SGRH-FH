<?php
/**
 * Diagnóstico de respuestas detectadas
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
set_time_limit(300); // 5 minutos para procesar PDFs grandes
ini_set('max_execution_time', '300');

$respuestas_detectadas = [];
$estadisticas = [];
$error_msg = '';
$texto_extraido = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['archivo'])) {
    $archivo_temp = $_FILES['archivo']['tmp_name'];
    $nombre_archivo = $_FILES['archivo']['name'];
    
    try {
        // Verificar archivo
        if (!file_exists($archivo_temp)) {
            throw new Exception('Archivo no encontrado');
        }

        $estadisticas = [
            'archivo' => htmlspecialchars($nombre_archivo),
            'tamaño' => formatBytes(filesize($archivo_temp))
        ];

        // Procesar PDF igual que en debug_ocr_texto.php
        $im = new Imagick();
        $im->setResolution(300, 300);
        $im->readImage($archivo_temp);
        
        $count = $im->getNumberImages();
        $estadisticas['paginas'] = $count;

        $tesseract_path = 'C:\\Program Files\\Tesseract-OCR\\tesseract.exe';
        if (!file_exists($tesseract_path)) {
            throw new Exception('Tesseract no encontrado');
        }

        // Extraer texto de todas las páginas
        for ($i = 0; $i < $count; $i++) {
            try {
                $im->setIteratorIndex($i);
                
                $temp_png = sys_get_temp_dir() . '\\diagn_' . $i . '_' . time() . '.png';
                $im->setImageFormat('png');
                $im->writeImage($temp_png);

                $output_base = sys_get_temp_dir() . '\\diagn_out_' . $i . '_' . time();
                $cmd = '"' . $tesseract_path . '" "' . $temp_png . '" "' . $output_base . '" -l spa --psm 6 2>&1';
                
                exec($cmd, $output, $return_code);

                if (file_exists($output_base . '.txt')) {
                    $texto_pag = file_get_contents($output_base . '.txt');
                    $texto_pag = trim(preg_replace('/\s+/', ' ', $texto_pag));
                    
                    if (!empty($texto_pag)) {
                        $texto_extraido .= "\n\n=== PÁGINA " . ($i + 1) . " ===\n";
                        $texto_extraido .= $texto_pag;
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

        // Detectar respuestas basándose en patrones simples
        $respuestas_detectadas = detectarRespuestasSimples($texto_extraido);
        $estadisticas['total'] = count($respuestas_detectadas);
        
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

/**
 * Detectar respuestas basándose en patrones simples
 */
function detectarRespuestasSimples($texto) {
    $respuestas = [];
    
    // Buscar patrones de preguntas numeradas
    // Patrón: "1) Pregunta..." o "1. Pregunta..."
    if (preg_match_all('/^\s*(\d+)[.)]\s+(.+?)(?=\n\s*(?:\d+[.)]\s+|$))/m', $texto, $matches, PREG_SET_ORDER)) {
        foreach ($matches as $match) {
            $num = (int)$match[1];
            $pregunta = trim($match[2]);
            
            // Buscar respuesta en la siguiente línea
            $respuesta = 'N/A';
            
            // Patrones comunes de respuesta (A, B, C, D) o (1, 2, 3, 4, 5)
            if (preg_match('/\(([ABCD])\)|\[([ABCD])\]|(?:^|\\s)([ABCD])(?:\\s|$)/i', $pregunta, $resp_match)) {
                $respuesta = strtoupper($resp_match[1] ?? $resp_match[2] ?? $resp_match[3]);
            } elseif (preg_match('/\(([1-5])\)|\[([1-5])\]|(?:^|\\s)([1-5])(?:\\s|$)/', $pregunta, $resp_match)) {
                $respuesta = $resp_match[1] ?? $resp_match[2] ?? $resp_match[3];
            }
            
            $respuestas[] = [
                'reactivo_id' => $num,
                'texto_reactivo' => substr($pregunta, 0, 150),
                'valor' => $respuesta,
                'confianza' => 0.5
            ];
        }
    }
    
    // Si no encontró con patrones específicos, generar template genérico
    if (empty($respuestas)) {
        // Contar líneas para estimar número de preguntas
        $lineas = array_filter(explode("\n", $texto));
        $cant_estimada = min(count($lineas) / 2, 20); // Estimar máximo 20 preguntas
        
        if ($cant_estimada < 2) {
            $cant_estimada = count(preg_split('/\d+[.)]/m', $texto)) - 1;
        }
        
        // Generar template con número estimado
        for ($i = 1; $i <= $cant_estimada && $i <= 20; $i++) {
            $respuestas[] = [
                'reactivo_id' => $i,
                'texto_reactivo' => 'Pregunta ' . $i,
                'valor' => 'N/A',
                'confianza' => 0
            ];
        }
    }
    
    return $respuestas;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnóstico: Detección de Respuestas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding: 20px; background: #f5f5f5; }
        .card { margin: 15px 0; }
        table { font-size: 0.9rem; }
    </style>
</head>
<body>

<div class="container" style="max-width: 1100px;">
    <h1 class="mb-4">🔍 Diagnóstico: Detección de Respuestas</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Cargar PDF para Detectar Respuestas</h5>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="d-flex gap-3">
                <input type="file" name="archivo" accept=".pdf" class="form-control" required>
                <button type="submit" class="btn btn-primary">Detectar</button>
            </form>
        </div>
    </div>

    <?php if (!empty($error_msg)): ?>
    <div class="alert alert-danger">❌ Error: <?php echo $error_msg; ?></div>
    <?php endif; ?>

    <?php if (!empty($estadisticas)): ?>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Información del Archivo</h5>
        </div>
        <div class="card-body row">
            <div class="col-md-4"><strong>Archivo:</strong> <?php echo $estadisticas['archivo']; ?></div>
            <div class="col-md-4"><strong>Tamaño:</strong> <?php echo $estadisticas['tamaño']; ?></div>
            <div class="col-md-4"><strong>Respuestas Detectadas:</strong> <span class="badge badge-info" style="font-size: 1rem;"><?php echo $estadisticas['total']; ?></span></div>
        </div>
    </div>
    <?php endif; ?>

    <?php if (!empty($respuestas_detectadas)): ?>
    <div class="card">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">✅ Respuestas Detectadas (<?php echo count($respuestas_detectadas); ?>)</h5>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped">
                <thead class="bg-light">
                    <tr>
                        <th width="5%">#</th>
                        <th width="15%">Reactivo</th>
                        <th width="55%">Pregunta</th>
                        <th width="15%">Respuesta</th>
                        <th width="10%">Confianza</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($respuestas_detectadas as $idx => $resp): ?>
                    <tr>
                        <td><strong><?php echo $idx + 1; ?></strong></td>
                        <td><?php echo htmlspecialchars($resp['reactivo_id'] ?? 'N/A'); ?></td>
                        <td>
                            <small><?php 
                                $texto = $resp['texto_reactivo'] ?? '';
                                echo htmlspecialchars(substr($texto, 0, 70));
                                if (strlen($texto) > 70) echo '...';
                            ?></small>
                        </td>
                        <td>
                            <span class="badge badge-primary">
                                <?php echo htmlspecialchars(substr($resp['valor'] ?? 'N/A', 0, 2)); ?>
                            </span>
                        </td>
                        <td>
                            <span class="badge <?php echo ($resp['confianza'] ?? 0) > 0.7 ? 'badge-success' : 'badge-warning'; ?>">
                                <?php echo round(($resp['confianza'] ?? 0) * 100); ?>%
                            </span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php elseif (!empty($estadisticas)): ?>
    <div class="alert alert-warning">⚠️ No se detectaron respuestas. Verifica que el PDF sea legible.</div>
    <?php endif; ?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
