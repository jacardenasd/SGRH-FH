<?php
// Diagnostico OMR: calibrar marcas en plantilla fija

require_once __DIR__ . '/../includes/conexion.php';

function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

$errors = [];
$success = null;
$preview_url = '';
$reactivos_count = 0;
$page_index = 1;

try {
    $stmt = $pdo->query("SELECT COUNT(*) as cnt FROM clima_reactivos WHERE activo = 1");
    $reactivos_count = (int)($stmt->fetch(PDO::FETCH_ASSOC)['cnt'] ?? 0);
} catch (Exception $e) {
    $reactivos_count = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'save_config') {
    $config_json = trim((string)($_POST['config_json'] ?? ''));
    if ($config_json === '') {
        $errors[] = 'Config vacia.';
    } else {
        $decoded = json_decode($config_json, true);
        if (!is_array($decoded)) {
            $errors[] = 'Config invalida. JSON no valido.';
        } else {
            $config_path = __DIR__ . '/../storage/omr_config.json';
            $existing = [];
            if (file_exists($config_path)) {
                $existing_raw = file_get_contents($config_path);
                $existing = json_decode($existing_raw, true);
                if (!is_array($existing)) {
                    $existing = [];
                }
            }

            if (isset($decoded['pageIndex'])) {
                $page_index_value = (int)$decoded['pageIndex'];
                $pages = isset($existing['pages']) && is_array($existing['pages']) ? $existing['pages'] : [];
                $updated = false;

                foreach ($pages as $idx => $page_cfg) {
                    if (isset($page_cfg['pageIndex']) && (int)$page_cfg['pageIndex'] === $page_index_value) {
                        $pages[$idx] = $decoded;
                        $updated = true;
                        break;
                    }
                }

                if (!$updated) {
                    $pages[] = $decoded;
                }

                $existing['pages'] = $pages;
                $json_pretty = json_encode($existing, JSON_PRETTY_PRINT);
            } else {
                $json_pretty = json_encode($decoded, JSON_PRETTY_PRINT);
            }

            if ($json_pretty === false) {
                $errors[] = 'No se pudo guardar la configuracion.';
            } else {
                file_put_contents($config_path, $json_pretty);
                $success = 'Configuracion OMR guardada correctamente.';
            }
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo'])) {
    $page_index = isset($_POST['page_index']) ? (int)$_POST['page_index'] : 1;
    if ($page_index <= 0) {
        $page_index = 1;
    }

    $archivo = $_FILES['archivo'];
    if ($archivo['error'] !== UPLOAD_ERR_OK) {
        $errors[] = 'Error al subir archivo.';
    } else {
        $extension = strtolower(pathinfo($archivo['name'], PATHINFO_EXTENSION));
        $permitidas = ['pdf', 'png', 'jpg', 'jpeg'];
        if (!in_array($extension, $permitidas, true)) {
            $errors[] = 'Formato no permitido. Use PDF o imagen.';
        } else {
            $temp_dir = __DIR__ . '/temp_omr';
            if (!is_dir($temp_dir)) {
                mkdir($temp_dir, 0755, true);
            }

            $base_name = 'omr_' . uniqid();
            $temp_path = $temp_dir . '/' . $base_name . '.' . $extension;

            if (!move_uploaded_file($archivo['tmp_name'], $temp_path)) {
                $errors[] = 'No se pudo guardar el archivo temporal.';
            } else {
                if ($extension === 'pdf') {
                    if (!extension_loaded('imagick')) {
                        $errors[] = 'Imagick no esta instalado.';
                    } else {
                        try {
                            $imagick = new Imagick();
                            $imagick->setResolution(300, 300);
                            $imagick->readImage($temp_path . '[' . ($page_index - 1) . ']');
                            $imagick->setImageFormat('png');
                            $preview_name = $base_name . '.png';
                            $preview_path = $temp_dir . '/' . $preview_name;
                            $imagick->writeImage($preview_path);
                            $imagick->clear();
                            $imagick->destroy();
                            $preview_url = 'temp_omr/' . $preview_name;
                        } catch (Exception $e) {
                            $errors[] = 'No se pudo convertir el PDF a imagen.';
                        }
                    }
                } else {
                    $preview_url = 'temp_omr/' . basename($temp_path);
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostico OMR</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; padding: 20px; }
        .container { max-width: 1200px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px; }
        .section { margin: 18px 0; padding: 12px; background: #f9f9f9; border-left: 4px solid #2196F3; }
        .error { color: #b00020; font-weight: bold; }
        .success { color: #2e7d32; font-weight: bold; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .panel { background: #fff; padding: 12px; border: 1px solid #eee; border-radius: 6px; }
        .btn { background: #2196F3; color: #fff; border: none; padding: 8px 12px; border-radius: 4px; cursor: pointer; }
        .btn:disabled { background: #90caf9; cursor: not-allowed; }
        .btn-outline { background: #fff; color: #2196F3; border: 1px solid #2196F3; }
        .img-wrap { border: 1px dashed #ccc; padding: 8px; text-align: center; background: #fff; }
        #preview { max-width: 100%; height: auto; cursor: crosshair; }
        textarea { width: 100%; height: 200px; }
        label { display: block; font-weight: bold; margin-bottom: 4px; }
        input[type="number"], input[type="text"] { width: 100%; padding: 6px; margin-bottom: 8px; }
        .small { color: #666; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Diagnostico OMR (marcas en plantilla)</h2>

        <?php if (!empty($errors)): ?>
            <div class="section">
                <?php foreach ($errors as $err): ?>
                    <div class="error">✗ <?php echo h($err); ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="section">
                <div class="success">✓ <?php echo h($success); ?></div>
            </div>
        <?php endif; ?>

        <div class="section">
            <form method="POST" enctype="multipart/form-data">
                <label>Sube el PDF/imagen de la encuesta:</label>
                <input type="file" name="archivo" accept=".pdf,.png,.jpg,.jpeg" required>
                <label>Pagina a calibrar (si es PDF)</label>
                <input type="number" name="page_index" min="1" value="<?php echo h($page_index); ?>">
                <button class="btn" type="submit">Generar vista</button>
            </form>
            <div class="small">Selecciona la pagina a calibrar si es un PDF.</div>
        </div>

        <?php if ($preview_url): ?>
            <div class="grid">
                <div class="panel">
                    <h4>1) Selecciona puntos de calibracion</h4>
                    <div class="img-wrap">
                        <img id="preview" src="<?php echo h($preview_url); ?>" alt="Preview OMR">
                    </div>
                    <div style="margin-top: 10px;">
                        <button class="btn btn-outline" type="button" data-mode="col1">Columna 1</button>
                        <button class="btn btn-outline" type="button" data-mode="col2">Columna 2</button>
                        <button class="btn btn-outline" type="button" data-mode="col3">Columna 3</button>
                        <button class="btn btn-outline" type="button" data-mode="rowStart">Fila 1 (inicio)</button>
                        <button class="btn btn-outline" type="button" data-mode="rowEnd">Ultima fila (fin)</button>
                    </div>
                    <div class="small" style="margin-top:8px;">
                        Haz click sobre el centro de cada icono/marca.
                    </div>
                    <pre id="points" class="small"></pre>
                </div>

                <div class="panel">
                    <h4>2) Configuracion</h4>
                    <label>Numero de preguntas (filas)</label>
                    <input id="rows" type="number" min="1" value="<?php echo h($reactivos_count ?: 1); ?>">

                    <label>Radio de muestreo (px)</label>
                    <input id="radius" type="number" min="3" value="8">

                    <label>Umbral de relleno (0-1)</label>
                    <input id="threshold" type="text" value="0.35">

                    <label>Diferencia minima (0-1)</label>
                    <input id="min_delta" type="text" value="0.08">

                    <label>Config JSON</label>
                    <textarea id="config_json" readonly></textarea>

                    <form method="POST">
                        <input type="hidden" name="action" value="save_config">
                        <input type="hidden" name="config_json" id="config_json_input" value="">
                        <button class="btn" type="submit">Guardar configuracion</button>
                    </form>

                    <div class="small" style="margin-top:8px;">
                        Guarda esto para que el OCR use OMR automaticamente.
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

<script>
(function () {
    var img = document.getElementById('preview');
    if (!img) return;

    var mode = null;
    var points = {
        col1: null,
        col2: null,
        col3: null,
        rowStart: null,
        rowEnd: null
    };

    var buttons = document.querySelectorAll('button[data-mode]');
    buttons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            mode = btn.getAttribute('data-mode');
            buttons.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');
        });
    });

    img.addEventListener('click', function (ev) {
        if (!mode) return;
        var rect = img.getBoundingClientRect();
        var scaleX = img.naturalWidth / rect.width;
        var scaleY = img.naturalHeight / rect.height;
        var x = Math.round((ev.clientX - rect.left) * scaleX);
        var y = Math.round((ev.clientY - rect.top) * scaleY);
        points[mode] = { x: x, y: y };
        renderPoints();
        updateConfig();
    });

    var pointsEl = document.getElementById('points');
    var configEl = document.getElementById('config_json');
    var configInput = document.getElementById('config_json_input');
    var rowsEl = document.getElementById('rows');
    var radiusEl = document.getElementById('radius');
    var thresholdEl = document.getElementById('threshold');
    var minDeltaEl = document.getElementById('min_delta');

    [rowsEl, radiusEl, thresholdEl, minDeltaEl].forEach(function (el) {
        el.addEventListener('input', updateConfig);
    });

    function renderPoints() {
        var lines = [];
        Object.keys(points).forEach(function (key) {
            var p = points[key];
            lines.push(key + ': ' + (p ? (p.x + ', ' + p.y) : '-'));
        });
        pointsEl.textContent = lines.join('\n');
    }

    function updateConfig() {
        if (!img.naturalWidth || !img.naturalHeight) return;
        var cols = [points.col1, points.col2, points.col3];
        if (!cols[0] || !cols[1] || !cols[2] || !points.rowStart || !points.rowEnd) {
            return;
        }

        var config = {
            page: {
                width: img.naturalWidth,
                height: img.naturalHeight
            },
            pageIndex: <?php echo (int)($page_index - 1); ?>,
            columns: [
                cols[0].x / img.naturalWidth,
                cols[1].x / img.naturalWidth,
                cols[2].x / img.naturalWidth
            ],
            rowStart: points.rowStart.y / img.naturalHeight,
            rowEnd: points.rowEnd.y / img.naturalHeight,
            rows: parseInt(rowsEl.value || '0', 10),
            sampleRadius: parseInt(radiusEl.value || '8', 10),
            fillThreshold: parseFloat(thresholdEl.value || '0.35'),
            minDelta: parseFloat(minDeltaEl.value || '0.08')
        };

        var json = JSON.stringify(config, null, 2);
        configEl.value = json;
        configInput.value = json;
    }

    renderPoints();
})();
</script>
</body>
</html>
