<?php
// public/clima_encuesta_impresion.php
// SGRH - Encuesta de Clima Laboral - Versión Imprimible (PDF)
// Para distribuir en papel al personal

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();
require_empresa();

if (session_status() === PHP_SESSION_NONE) session_start();

$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 0;

if ($empresa_id <= 0) {
    die('Sesión inválida.');
}

function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

// =====================================================
// Obtener periodo activo
// =====================================================
$periodo_id = isset($_GET['periodo_id']) ? (int)$_GET['periodo_id'] : 0;

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

$periodo = null;
if ($periodo_id > 0) {
    $pstmt = $pdo->prepare("SELECT * FROM clima_periodos WHERE periodo_id = ? AND empresa_id = ?");
    $pstmt->execute([$periodo_id, $empresa_id]);
    $periodo = $pstmt->fetch(PDO::FETCH_ASSOC);
}

// =====================================================
// Cargar dimensiones y reactivos
// =====================================================
$dimensiones = $pdo->query("SELECT * FROM clima_dimensiones WHERE activo=1 ORDER BY orden")->fetchAll(PDO::FETCH_ASSOC);

$reactivos_por_dim = array();
foreach ($dimensiones as $d) {
    $did = (int)$d['dimension_id'];
    $stmt = $pdo->prepare("SELECT * FROM clima_reactivos WHERE dimension_id = ? AND activo = 1 ORDER BY orden");
    $stmt->execute([$did]);
    $reactivos_por_dim[$did] = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Likert
$likert = array(
    1 => 'Totalmente De acuerdo',
    2 => 'Parcialmente De acuerdo',
    3 => 'En Desacuerdo'
);

// Íconos para la escala 1-3
$likert_icons = array(
    1 => '😊',
    2 => '😐',
    3 => '😞'
);

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

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de Clima Laboral - Imprimible</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        @page {
            size: A4;
            margin: 0.35cm;
        }

        .container {
            max-width: 210mm;
            margin: 0 auto;
            padding: 4px;
        }

        .header {
            text-align: center;
            border-bottom: 1px solid #333;
            padding-bottom: 4px;
            margin-bottom: 6px;
        }

        .header h1 {
            font-size: 14px;
            margin-bottom: 1px;
        }

        .header p {
            font-size: 8.5px;
            color: #666;
            margin: 1px 0;
        }

        .datos-demograficos {
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            padding: 5px;
            margin-bottom: 5px;
            font-size: 8.5px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 3px;
        }

        .dato-campo {
            display: flex;
            flex-direction: column;
        }

        .dato-label {
            font-weight: bold;
            margin-bottom: 1px;
            font-size: 7.5px;
        }

        .dato-linea {
            border-bottom: 1px solid #333;
            height: 14px;
        }

        .fecha {
            text-align: right;
            font-size: 8px;
            margin-bottom: 6px;
            color: #666;
        }

        .instrucciones {
            background-color: #f5f5f5;
            border-left: 3px solid #5C6BC0;
            padding: 6px;
            margin-bottom: 7px;
            font-size: 8.5px;
            line-height: 1.2;
        }

        .instrucciones strong {
            color: #5C6BC0;
        }

        .instrucciones ul {
            margin-left: 12px;
            margin-top: 4px;
        }

        .instrucciones li {
            margin-bottom: 2px;
        }

        .seccion {
            margin-bottom: 6px;
            page-break-inside: avoid;
        }

        .pregunta {
            margin-bottom: 6px;
            padding: 3px;
            border: 1px solid #e0e0e0;
            page-break-inside: avoid;
        }

        .pregunta-flex {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .pregunta-numero {
            font-weight: bold;
            font-size: 12px;
            min-width: 26px;
            text-align: right;
            margin-right: 4px;
            margin-bottom: 0;
        }

        .pregunta-texto {
            font-size: 9.5px;
            margin-bottom: 0;
            line-height: 1.25;
            flex: 1;
        }

        .opciones-likert {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 5px;
            margin-top: 5px;
        }

        .opcion-likert {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 6px 8px;
            border: 1px dashed #cdd7f5;
            border-radius: 6px;
            background-color: #fff;
            text-align: left;
        }

        .casilla {
            display: none; /* Sin checkbox visual */
        }

        .likert-icon {
            display: inline-block;
            font-size: 18px;
            margin: 0;
        }

        .likert-text {
            font-size: 8px;
            line-height: 1.15;
            color: #555;
            white-space: nowrap;
        }

        .leyenda-likert {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 6px;
            margin-top: 6px;
        }

        .leyenda-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 9px;
            background-color: #fff;
            border: 1px dashed #cdd7f5;
            padding: 6px;
            border-radius: 4px;
        }

        .leyenda-text {
            font-size: 9px;
            color: #34495e;
        }

        .pregunta-abierta {
            margin-bottom: 10px;
            page-break-inside: avoid;
        }

        .pregunta-abierta-titulo {
            font-weight: bold;
            margin-bottom: 2px;
            font-size: 9px;
        }

        .pregunta-abierta-texto {
            font-size: 8px;
            margin-bottom: 2px;
            color: #555;
        }

        .linea-respuesta {
            border-bottom: 1px solid #999;
            height: 12px;
            margin-bottom: 1px;
        }

        .footer {
            margin-top: 10px;
            padding-top: 4px;
            border-top: 1px solid #ccc;
            font-size: 7px;
            color: #999;
            text-align: center;
        }

        .superdimension-header {
            background-color: #f0f4ff;
            font-weight: bold;
            padding: 3px;
            margin-top: 8px;
            margin-bottom: 6px;
            border-left: 2px solid #5C6BC0;
            font-size: 10px;
        }

        .print-button {
            text-align: center;
            margin-bottom: 8px;
        }

        .print-button button {
            padding: 8px 16px;
            background-color: #5C6BC0;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 12px;
        }

        .print-button button:hover {
            background-color: #3d4fa6;
        }

        @media print {
            .print-button {
                display: none;
            }
            body {
                padding: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="print-button">
            <button onclick="window.print()">🖨️ Imprimir encuesta</button>
        </div>

        <div class="header">
            <h1>ENCUESTA DE CLIMA LABORAL</h1>
            <p>CONFIDENCIAL - Tus respuestas son anónimas y valiosas para nosotros</p>
        </div>

        <div class="datos-demograficos">
            <div class="dato-campo" style="grid-column: span 2;">
                <div class="dato-label">EMPRESA:</div>
                <div class="dato-linea"></div>
            </div>
            <div class="dato-campo">
                <div class="dato-label">SEXO:</div>
                <div class="dato-linea"></div>
            </div>
            <div class="dato-campo">
                <div class="dato-label">UNIDAD / ÁREA:</div>
                <div class="dato-linea"></div>
            </div>
            <div class="dato-campo">
                <div class="dato-label">EDAD:</div>
                <div class="dato-linea"></div>
            </div>
            <div class="dato-campo">
                <div class="dato-label">DEPARTAMENTO:</div>
                <div class="dato-linea"></div>
            </div>
            <div class="dato-campo">
                <div class="dato-label">ESCOLARIDAD:</div>
                <div class="dato-linea"></div>
            </div>
            <div class="dato-campo">
                <div class="dato-label">ESTADO CIVIL:</div>
                <div class="dato-linea"></div>
            </div>
            <div class="dato-campo">
                <div class="dato-label">ANTIGÜEDAD (años):</div>
                <div class="dato-linea"></div>
            </div>
        </div>

        <div class="fecha">
            Período: <?php echo $periodo ? 'Año ' . (int)$periodo['anio'] . ' (' . $periodo['fecha_inicio'] . ' a ' . $periodo['fecha_fin'] . ')' : '___'; ?>
        </div>

        <div class="instrucciones">
            <strong>Instrucciones:</strong>
            <ul>
                <li>Completa los datos demográficos arriba (sin nombre).</li>
                <li>Marca con ✓ la opción (recuadro con ícono) que mejor represente tu opinión.</li>
                <li><strong>Escala:</strong> 😊 = Totalmente De acuerdo | 😐 = Parcialmente De acuerdo | 😞 = En Desacuerdo</li>
                <li>Tus respuestas son <strong>anónimas y confidenciales</strong>. Solo se usan para mejorar el clima laboral.</li>
            </ul>
            <div class="leyenda-likert">
                <?php foreach ($likert as $valor => $texto): ?>
                <div class="leyenda-item">
                    <span class="likert-icon" style="margin: 0 2px 0 0; font-size: 15px;"><?php echo isset($likert_icons[$valor]) ? $likert_icons[$valor] : ''; ?></span>
                    <span class="leyenda-text"><?php echo h($texto); ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php
        // Ordenar superdimensiones
        $orden_super = array(
            'Relación con el Jefe Inmediato',
            'Relación con los Compañeros',
            'Relación con la Empresa',
            'Relación con el Trabajo'
        );

        $contador = 1;
        foreach ($orden_super as $superdim):
            // Encontrar dimensiones de esta superdimensión
            $dims_en_super = array();
            foreach ($dimensiones as $d) {
                if ($d['superdimension'] === $superdim) {
                    $dims_en_super[] = $d;
                }
            }

            if (empty($dims_en_super)) continue;
        ?>

        <div class="superdimension-header">
            📦 <?php echo h($superdim); ?>
        </div>

        <?php foreach ($dims_en_super as $dim):
            $did = (int)$dim['dimension_id'];
            $reactivos = isset($reactivos_por_dim[$did]) ? $reactivos_por_dim[$did] : array();
            if (empty($reactivos)) continue;
        ?>

        <div class="seccion">
            <div class="seccion-titulo">
                • <?php echo h($dim['nombre']); ?>
            </div>

            <?php foreach ($reactivos as $rx): ?>
            <div class="pregunta">
                <div class="pregunta-flex">
                    <div class="pregunta-numero">
                        <?php echo $contador; ?>.
                    </div>
                    <div class="pregunta-texto">
                        <?php echo h($rx['texto']); ?>
                    </div>
                </div>
                <div class="opciones-likert">
                    <?php foreach ($likert as $valor => $texto): ?>
                    <div class="opcion-likert">
                        <span class="likert-icon"><?php echo isset($likert_icons[$valor]) ? $likert_icons[$valor] : ''; ?></span>
                        <div class="likert-text"><?php echo h($texto); ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php $contador++; ?>
            <?php endforeach; ?>
        </div>

        <?php endforeach; ?>
        <?php endforeach; ?>

        <!-- Preguntas Abiertas (Compactas) -->
        <?php if (!empty($preguntas_abiertas)): ?>
        <div style="margin-top: 10px; padding-top: 8px; border-top: 1px solid #ccc;">
            <h6 style="font-size: 11px; font-weight: bold; margin-bottom: 8px;">📝 COMENTARIOS Y SUGERENCIAS</h6>

            <?php foreach ($preguntas_abiertas as $pa): ?>
            <div class="pregunta-abierta">
                <div class="pregunta-abierta-titulo">
                    <?php echo h($pa['texto']); ?>
                    <?php if ($pa['obligatorio']): ?><span style="color: red;"> *</span><?php endif; ?>
                </div>
                <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="linea-respuesta" style="height: 12px;"></div>
                <?php endfor; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="footer">
            <p>✓ Gracias por tu valiosa participación | Encuesta Anónima - Período <?php echo $periodo ? (int)$periodo['anio'] : '___'; ?></p>
        </div>
    </div>

</body>
</html>
