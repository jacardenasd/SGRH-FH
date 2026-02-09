<?php
// public/clima_analisis_abiertas.php
// SGRH - Clima Laboral - Análisis de Respuestas Abiertas
// Análisis de texto, agrupamiento y visualización de respuestas abiertas
// Compatible PHP 5.7 - NO usar operador ??

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();
require_empresa();
require_password_change_redirect();
require_demograficos_redirect();

if (!can('organizacion.admin') && !can('clima.admin')) {
    http_response_code(403);
    die('<div class="alert alert-danger">No tienes permisos para acceder a esta sección.</div>');
}

if (session_status() === PHP_SESSION_NONE) session_start();

$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 0;

function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

function table_exists($pdo, $table_name) {
    $sql = "SELECT COUNT(*)
            FROM information_schema.tables
            WHERE table_schema = DATABASE() AND table_name = :t";
    $st = $pdo->prepare($sql);
    $st->execute(array(':t' => $table_name));
    return ((int)$st->fetchColumn() > 0);
}

// =======================
// VERIFICAR TABLAS
// =======================
if (!table_exists($pdo, 'clima_preguntas_abiertas') || !table_exists($pdo, 'clima_respuestas_abiertas')) {
    die('<div class="alert alert-warning">Las tablas de preguntas abiertas no están disponibles en este sistema.</div>');
}

// =======================
// PARÁMETROS
// =======================
$periodo_id = isset($_GET['periodo_id']) ? (int)$_GET['periodo_id'] : 0;
$pregunta_id = isset($_GET['pregunta_id']) ? (int)$_GET['pregunta_id'] : 0;
$unidad_id = isset($_GET['unidad_id']) ? (int)$_GET['unidad_id'] : 0;
$exportar = isset($_GET['exportar']) && $_GET['exportar'] === '1';

// =======================
// OBTENER PERIODOS
// =======================
$periodos_stmt = $pdo->prepare("
    SELECT periodo_id, anio, estatus, fecha_inicio, fecha_fin 
    FROM clima_periodos 
    WHERE empresa_id = ? 
    ORDER BY anio DESC
");
$periodos_stmt->execute([$empresa_id]);
$periodos = $periodos_stmt->fetchAll(PDO::FETCH_ASSOC);

if ($periodo_id <= 0 && !empty($periodos)) {
    $periodo_id = (int)$periodos[0]['periodo_id'];
}

$periodo = null;
if ($periodo_id > 0) {
    $pstmt = $pdo->prepare("SELECT * FROM clima_periodos WHERE periodo_id = ? AND empresa_id = ? LIMIT 1");
    $pstmt->execute([$periodo_id, $empresa_id]);
    $periodo = $pstmt->fetch(PDO::FETCH_ASSOC);
}

// =======================
// OBTENER PREGUNTAS ABIERTAS
// =======================
$preguntas_stmt = $pdo->prepare("
    SELECT p.pregunta_id, p.texto, p.orden, d.nombre AS dimension_nombre
    FROM clima_preguntas_abiertas p
    LEFT JOIN clima_dimensiones d ON p.dimension_id = d.dimension_id
    WHERE p.activo = 1
    ORDER BY p.orden, p.pregunta_id
");
$preguntas_stmt->execute();
$preguntas = $preguntas_stmt->fetchAll(PDO::FETCH_ASSOC);

// =======================
// OBTENER UNIDADES
// =======================
$unidades_stmt = $pdo->prepare("
    SELECT DISTINCT u.unidad_id, u.nombre
    FROM org_unidades u
    INNER JOIN clima_elegibles ce ON ce.unidad_id = u.unidad_id
    WHERE ce.empresa_id = ? AND ce.periodo_id = ?
    ORDER BY u.nombre
");
$unidades_stmt->execute([$empresa_id, $periodo_id]);
$unidades = $unidades_stmt->fetchAll(PDO::FETCH_ASSOC);

// =======================
// OBTENER RESPUESTAS
// =======================
$respuestas = [];
$sql_where = ["ra.periodo_id = :periodo_id", "ce.empresa_id = :empresa_id"];
$params = [':periodo_id' => $periodo_id, ':empresa_id' => $empresa_id];

if ($pregunta_id > 0) {
    $sql_where[] = "ra.pregunta_id = :pregunta_id";
    $params[':pregunta_id'] = $pregunta_id;
}

if ($unidad_id > 0) {
    $sql_where[] = "ra.unidad_id = :unidad_id";
    $params[':unidad_id'] = $unidad_id;
}

$sql_respuestas = "
    SELECT 
        ra.respuesta_abierta_id,
        ra.respuesta,
        ra.fecha_respuesta,
        ra.pregunta_id,
        p.texto AS pregunta_texto,
        u.nombre AS unidad_nombre,
        d.nombre AS dimension_nombre
    FROM clima_respuestas_abiertas ra
    INNER JOIN clima_elegibles ce ON ce.periodo_id = ra.periodo_id AND ce.empleado_id = ra.empleado_id
    INNER JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
    LEFT JOIN org_unidades u ON ra.unidad_id = u.unidad_id
    LEFT JOIN clima_dimensiones d ON p.dimension_id = d.dimension_id
    WHERE " . implode(' AND ', $sql_where) . "
    ORDER BY p.orden, ra.fecha_respuesta DESC
";

$stmt_resp = $pdo->prepare($sql_respuestas);
$stmt_resp->execute($params);
$respuestas = $stmt_resp->fetchAll(PDO::FETCH_ASSOC);

// =======================
// ANÁLISIS DE TEXTO
// =======================
function analizar_texto($respuestas) {
    // Categorías temáticas
    $temas_keywords = array(
        'Comunicación' => array('comunicación', 'comunicacion', 'informar', 'información', 'informacion', 'avisar', 'transparencia', 'mensaje', 'comunicar'),
        'Capacitación' => array('capacitación', 'capacitacion', 'entrenamiento', 'curso', 'cursos', 'formación', 'formacion', 'aprendizaje', 'desarrollo profesional'),
        'Liderazgo' => array('jefe', 'jefa', 'líder', 'lider', 'supervisor', 'gerente', 'director', 'directora', 'liderazgo', 'coordinador'),
        'Salario' => array('salario', 'sueldo', 'pago', 'prestaciones', 'bono', 'bonos', 'compensación', 'compensacion', 'económico', 'economico'),
        'Ambiente' => array('ambiente', 'clima', 'compañerismo', 'companerismo', 'convivencia', 'relaciones', 'atmósfera', 'atmosfera'),
        'Carga de Trabajo' => array('trabajo', 'carga', 'tiempo', 'horario', 'horas', 'estrés', 'estres', 'presión', 'presion', 'tareas'),
        'Reconocimiento' => array('reconocimiento', 'agradecer', 'apreciar', 'valorar', 'motivación', 'motivacion', 'incentivo', 'incentivos'),
        'Herramientas' => array('herramientas', 'equipo', 'equipos', 'tecnología', 'tecnologia', 'recursos', 'material', 'materiales', 'infraestructura'),
        'Beneficios' => array('beneficio', 'beneficios', 'prestación', 'prestacion', 'seguro', 'vales', 'apoyo', 'ayuda'),
        'Organización' => array('organización', 'organizacion', 'proceso', 'procesos', 'estructura', 'claridad', 'orden', 'planificación', 'planificacion')
    );

    $temas_contador = array();
    foreach ($temas_keywords as $tema => $keywords) {
        $temas_contador[$tema] = 0;
    }

    $analisis = array(
        'total' => 0,
        'palabras_frecuentes' => array(),
        'longitud_promedio' => 0,
        'sentimiento' => array('positivo' => 0, 'negativo' => 0, 'neutro' => 0),
        'temas' => $temas_contador
    );

    if (empty($respuestas)) {
        return $analisis;
    }

    $analisis['total'] = count($respuestas);
    $todas_palabras = array();
    $longitud_total = 0;

    // Palabras positivas y negativas en español
    $palabras_positivas = array(
        'excelente', 'bueno', 'buena', 'buenos', 'buenas', 'bien', 'mejor', 'mejora', 'mejorar',
        'apoyo', 'apoyar', 'comunicación', 'comunicacion', 'equipo', 'colaboración', 'colaboracion',
        'respeto', 'respetuoso', 'ambiente', 'positivo', 'positiva', 'feliz', 'satisfecho', 'satisfecha',
        'crecimiento', 'desarrollo', 'oportunidad', 'oportunidades', 'reconocimiento', 'agradecer',
        'gracias', 'motivación', 'motivacion', 'motivado', 'motivada', 'eficiente', 'efectivo',
        'fortaleza', 'ventaja', 'beneficio', 'ventajas', 'beneficios'
    );

    $palabras_negativas = array(
        'mal', 'malo', 'mala', 'malos', 'malas', 'peor', 'problema', 'problemas', 'falta', 'faltan',
        'no', 'ningún', 'ningun', 'ninguna', 'nunca', 'dificultad', 'dificultades', 'conflicto',
        'conflictos', 'estrés', 'estres', 'presión', 'presion', 'insatisfecho', 'insatisfecha',
        'mejorar', 'cambiar', 'necesita', 'necesitan', 'carencia', 'deficiencia', 'deficiente',
        'desorganización', 'desorganizacion', 'negativo', 'negativa', 'crítica', 'critica'
    );

    foreach ($respuestas as $resp) {
        $texto = mb_strtolower($resp['respuesta'], 'UTF-8');
        $longitud_total += mb_strlen($texto, 'UTF-8');

        // Limpiar y tokenizar
        $texto = preg_replace('/[^\p{L}\p{N}\s]/u', ' ', $texto);
        $palabras = preg_split('/\s+/', $texto, -1, PREG_SPLIT_NO_EMPTY);

        // Filtrar palabras cortas y stopwords
        $stopwords = array('el', 'la', 'de', 'que', 'y', 'a', 'en', 'un', 'ser', 'se', 'no', 'hay', 'por', 'con', 'su', 'para', 'como', 'está', 'esta', 'al', 'lo', 'del', 'las', 'los', 'una', 'está', 'todo', 'más', 'mas', 'si', 'yo', 'mi', 'hace', 'muy', 'puede', 'sido', 'son', 'tiene', 'así', 'nos', 'sin', 'sobre', 'pero');
        
        $palabras_filtradas = array_filter($palabras, function($p) use ($stopwords) {
            return mb_strlen($p, 'UTF-8') >= 4 && !in_array($p, $stopwords);
        });

        foreach ($palabras_filtradas as $palabra) {
            if (!isset($todas_palabras[$palabra])) {
                $todas_palabras[$palabra] = 0;
            }
            $todas_palabras[$palabra]++;
        }

        // Análisis de sentimiento
        $positivas_encontradas = 0;
        $negativas_encontradas = 0;

        foreach ($palabras_positivas as $pp) {
            if (mb_strpos($texto, $pp) !== false) {
                $positivas_encontradas++;
            }
        }

        foreach ($palabras_negativas as $pn) {
            if (mb_strpos($texto, $pn) !== false) {
                $negativas_encontradas++;
            }
        }

        if ($positivas_encontradas > $negativas_encontradas) {
            $analisis['sentimiento']['positivo']++;
        } elseif ($negativas_encontradas > $positivas_encontradas) {
            $analisis['sentimiento']['negativo']++;
        } else {
            $analisis['sentimiento']['neutro']++;
        }

        // Detectar temas
        foreach ($temas_keywords as $tema => $keywords) {
            foreach ($keywords as $kw) {
                if (mb_strpos($texto, $kw) !== false) {
                    $temas_contador[$tema]++;
                    break; // Solo contar una vez por respuesta
                }
            }
        }
    }

    // Ordenar palabras por frecuencia
    arsort($todas_palabras);
    $analisis['palabras_frecuentes'] = array_slice($todas_palabras, 0, 30, true);

    // Calcular longitud promedio
    $analisis['longitud_promedio'] = $analisis['total'] > 0 ? round($longitud_total / $analisis['total'], 1) : 0;

    // Ordenar temas por frecuencia
    arsort($temas_contador);
    $analisis['temas'] = $temas_contador;

    return $analisis;
}

$analisis = analizar_texto($respuestas);

// =======================
// AGRUPAMIENTO POR PREGUNTA
// =======================
$respuestas_por_pregunta = array();
foreach ($respuestas as $resp) {
    $pid = (int)$resp['pregunta_id'];
    if (!isset($respuestas_por_pregunta[$pid])) {
        $respuestas_por_pregunta[$pid] = array(
            'pregunta_texto' => $resp['pregunta_texto'],
            'dimension' => $resp['dimension_nombre'],
            'total' => 0,
            'respuestas' => array()
        );
    }
    $respuestas_por_pregunta[$pid]['total']++;
    $respuestas_por_pregunta[$pid]['respuestas'][] = $resp;
}

// =======================
// EXPORTAR A CSV
// =======================
if ($exportar && !empty($respuestas)) {
    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="respuestas_abiertas_' . date('Y-m-d') . '.csv"');
    echo "\xEF\xBB\xBF"; // UTF-8 BOM

    $output = fopen('php://output', 'w');
    fputcsv($output, array('ID', 'Pregunta', 'Dimensión', 'Unidad', 'Respuesta', 'Fecha'));

    foreach ($respuestas as $r) {
        fputcsv($output, array(
            $r['respuesta_abierta_id'],
            $r['pregunta_texto'],
            $r['dimension_nombre'],
            $r['unidad_nombre'],
            $r['respuesta'],
            $r['fecha_respuesta']
        ));
    }

    fclose($output);
    exit;
}

// =======================
// LAYOUT
// =======================
$page_title = 'Clima Laboral - Análisis de Respuestas Abiertas';
$active_menu = 'clima_admin';

$extra_css = [
  'global_assets/css/icons/icomoon/styles.min.css',
];

$extra_js = [];

require_once __DIR__ . '/../includes/layout/head.php';
require_once __DIR__ . '/../includes/layout/navbar.php';
require_once __DIR__ . '/../includes/layout/sidebar.php';
require_once __DIR__ . '/../includes/layout/content_open.php';
?>

<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-comment-discussion mr-2"></i> <span class="font-weight-semibold">Clima Laboral</span> - Análisis de Respuestas Abiertas</h4>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="clima_admin.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Panel Clima</a>
        <span class="breadcrumb-item active">Respuestas Abiertas</span>
      </div>
    </div>
  </div>
</div>

<div class="content">

  <!-- FILTROS -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title"><i class="icon-filter3 mr-2"></i>Filtros de Análisis</h5>
    </div>
    <div class="card-body">
      <form method="GET" action="clima_analisis_abiertas.php" id="formFiltros">
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label class="font-weight-semibold">Periodo</label>
              <select name="periodo_id" class="form-control" onchange="this.form.submit()">
                <?php foreach ($periodos as $p): ?>
                  <option value="<?php echo $p['periodo_id']; ?>" <?php echo ($p['periodo_id'] == $periodo_id) ? 'selected' : ''; ?>>
                    <?php echo h($p['anio']) . ' - ' . ucfirst(h($p['estatus'])); ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label class="font-weight-semibold">Pregunta</label>
              <select name="pregunta_id" class="form-control" onchange="this.form.submit()">
                <option value="0">-- Todas las preguntas --</option>
                <?php foreach ($preguntas as $pr): ?>
                  <option value="<?php echo $pr['pregunta_id']; ?>" <?php echo ($pr['pregunta_id'] == $pregunta_id) ? 'selected' : ''; ?>>
                    <?php echo h(mb_substr($pr['texto'], 0, 60, 'UTF-8')) . '...'; ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label class="font-weight-semibold">Unidad</label>
              <select name="unidad_id" class="form-control" onchange="this.form.submit()">
                <option value="0">-- Todas las unidades --</option>
                <?php foreach ($unidades as $un): ?>
                  <option value="<?php echo $un['unidad_id']; ?>" <?php echo ($un['unidad_id'] == $unidad_id) ? 'selected' : ''; ?>>
                    <?php echo h($un['nombre']); ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>&nbsp;</label>
              <div>
                <a href="?periodo_id=<?php echo $periodo_id; ?>&pregunta_id=<?php echo $pregunta_id; ?>&unidad_id=<?php echo $unidad_id; ?>&exportar=1" class="btn btn-success btn-block">
                  <i class="icon-download4 mr-2"></i> Exportar CSV
                </a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php if (!$periodo): ?>
    <div class="alert alert-warning border-0">
      <i class="icon-alert mr-2"></i>
      <strong>No hay periodo seleccionado.</strong> Selecciona un periodo válido.
    </div>
  <?php else: ?>

    <!-- RESUMEN GENERAL -->
    <div class="row">
      <div class="col-sm-6 col-xl-3">
        <div class="card card-body">
          <div class="media">
            <div class="mr-3 align-self-center">
              <i class="icon-comment-discussion icon-3x text-indigo-400"></i>
            </div>
            <div class="media-body text-right">
              <h3 class="font-weight-semibold mb-0"><?php echo number_format($analisis['total']); ?></h3>
              <span class="text-uppercase font-size-sm text-muted">Total Respuestas</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card card-body">
          <div class="media">
            <div class="mr-3 align-self-center">
              <i class="icon-file-text2 icon-3x text-blue-400"></i>
            </div>
            <div class="media-body text-right">
              <h3 class="font-weight-semibold mb-0"><?php echo $analisis['longitud_promedio']; ?></h3>
              <span class="text-uppercase font-size-sm text-muted">Caracteres Promedio</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card card-body bg-success-400 has-bg-image">
          <div class="media">
            <div class="mr-3 align-self-center">
              <i class="icon-thumbs-up3 icon-3x opacity-75"></i>
            </div>
            <div class="media-body text-right">
              <h3 class="font-weight-semibold mb-0"><?php echo $analisis['sentimiento']['positivo']; ?></h3>
              <span class="text-uppercase font-size-sm opacity-75">Comentarios Positivos</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card card-body bg-danger-400 has-bg-image">
          <div class="media">
            <div class="mr-3 align-self-center">
              <i class="icon-warning2 icon-3x opacity-75"></i>
            </div>
            <div class="media-body text-right">
              <h3 class="font-weight-semibold mb-0"><?php echo $analisis['sentimiento']['negativo']; ?></h3>
              <span class="text-uppercase font-size-sm opacity-75">Comentarios Negativos</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ANÁLISIS DE SENTIMIENTO -->
    <div class="card">
      <div class="card-header header-elements-inline">
        <h5 class="card-title"><i class="icon-chart-pie mr-2"></i>Análisis de Sentimiento</h5>
      </div>
      <div class="card-body">
        <div class="chart-container">
          <div id="chartSentimiento" style="height: 300px;"></div>
        </div>
      </div>
    </div>

    <!-- TEMAS MÁS MENCIONADOS -->
    <div class="card">
      <div class="card-header header-elements-inline">
        <h5 class="card-title"><i class="icon-list mr-2"></i>Temas Más Mencionados</h5>
      </div>
      <div class="card-body">
        <div class="chart-container">
          <div id="chartTemas" style="height: 400px;"></div>
        </div>
      </div>
    </div>

    <!-- PALABRAS FRECUENTES -->
    <div class="card">
      <div class="card-header header-elements-inline">
        <h5 class="card-title"><i class="icon-cloud mr-2"></i>Nube de Palabras (Top 30)</h5>
      </div>
      <div class="card-body">
        <div style="text-align: center; line-height: 2.5; padding: 20px;">
          <?php 
          $max_freq = !empty($analisis['palabras_frecuentes']) ? max($analisis['palabras_frecuentes']) : 1;
            foreach ($analisis['palabras_frecuentes'] as $palabra => $freq): 
              $size = 14 + (($freq / $max_freq) * 32);
              $opacity = 0.6 + (($freq / $max_freq) * 0.4);
              $colors = ['#2196F3', '#673AB7', '#009688', '#FF5722', '#795548'];
              $color = $colors[abs(crc32($palabra)) % count($colors)];
          ?>
              <span style="font-size: <?php echo round($size); ?>px; opacity: <?php echo $opacity; ?>; margin: 0 10px 10px 0; color: <?php echo $color; ?>; font-weight: 600; display: inline-block; transition: all 0.3s;" class="word-cloud-item">
                  <?php echo h($palabra); ?>
                  <small style="font-size: 11px; color: #999; font-weight: normal;">(<?php echo $freq; ?>)</small>
              </span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- RESPUESTAS POR PREGUNTA -->
    <?php foreach ($respuestas_por_pregunta as $pid => $data): ?>
    <div class="card">
      <div class="card-header header-elements-inline">
        <h5 class="card-title">
          <i class="icon-bubble-question mr-2"></i>
          <?php echo h($data['pregunta_texto']); ?>
        </h5>
        <div class="header-elements">
          <span class="badge bg-primary badge-pill"><?php echo $data['total']; ?> respuestas</span>
          <?php if ($data['dimension']): ?>
            <span class="badge bg-secondary ml-2"><?php echo h($data['dimension']); ?></span>
          <?php endif; ?>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr class="bg-light">
                <th width="15%">Unidad</th>
                <th width="75%">Respuesta</th>
                <th width="10%">Fecha</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data['respuestas'] as $r): ?>
              <tr>
                <td><span class="badge badge-flat border-primary text-primary"><?php echo h($r['unidad_nombre']); ?></span></td>
                <td><?php echo nl2br(h($r['respuesta'])); ?></td>
                <td><small class="text-muted"><?php echo date('d/m/Y', strtotime($r['fecha_respuesta'])); ?></small></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php endforeach; ?>

              <?php if (empty($respuestas)): ?>
    <div class="alert alert-info border-0">
      <i class="icon-info22 mr-2"></i>
      No hay respuestas abiertas para los filtros seleccionados.
    </div>
    <?php endif; ?>

  <?php endif; ?>

</div>

<style>
.word-cloud-item:hover {
  transform: scale(1.1);
  opacity: 1 !important;
}
</style>

<?php
require_once __DIR__ . '/../includes/layout/footer.php';
require_once __DIR__ . '/../includes/layout/content_close.php';
require_once __DIR__ . '/../includes/layout/scripts.php';
?>

<script src="https://cdn.jsdelivr.net/npm/echarts@5.4.0/dist/echarts.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  console.log('Echarts disponible:', typeof echarts !== 'undefined');
  
  // Gráfica de Sentimiento (Echarts)
  if (document.getElementById('chartSentimiento')) {
    var chartSent = echarts.init(document.getElementById('chartSentimiento'));
    var sentimientoData = [
      { 
        value: <?php echo $analisis['sentimiento']['positivo']; ?>, 
        name: 'Positivo',
        itemStyle: { color: '#26A69A' }
      },
      { 
        value: <?php echo $analisis['sentimiento']['negativo']; ?>, 
        name: 'Negativo',
        itemStyle: { color: '#EF5350' }
      },
      { 
        value: <?php echo $analisis['sentimiento']['neutro']; ?>, 
        name: 'Neutro',
        itemStyle: { color: '#78909C' }
      }
    ];
    
    console.log('Datos de sentimiento:', sentimientoData);
    
    var optionSent = {
      tooltip: {
        trigger: 'item',
        formatter: '{b}: {c} ({d}%)'
      },
      legend: {
        bottom: 10,
        left: 'center'
      },
      series: [{
        type: 'pie',
        radius: ['40%', '70%'],
        avoidLabelOverlap: false,
        itemStyle: {
          borderRadius: 10,
          borderColor: '#fff',
          borderWidth: 2
        },
        label: {
          show: true,
          formatter: '{b}\n{d}%'
        },
        data: sentimientoData
      }]
    };
    chartSent.setOption(optionSent);
  }

  // Gráfica de Temas (Echarts)
  if (document.getElementById('chartTemas')) {
    var chartTemas = echarts.init(document.getElementById('chartTemas'));
    var temasLabels = <?php echo json_encode(array_keys($analisis['temas']), JSON_UNESCAPED_UNICODE); ?>;
    var temasData = <?php echo json_encode(array_values($analisis['temas'])); ?>;
    
    console.log('Etiquetas de temas:', temasLabels);
    console.log('Datos de temas:', temasData);
    
    var optionTemas = {
      tooltip: {
        trigger: 'axis',
        axisPointer: {
          type: 'shadow'
        }
      },
      grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        top: '3%',
        containLabel: true
      },
      xAxis: {
        type: 'value',
        boundaryGap: [0, 0.01]
      },
      yAxis: {
        type: 'category',
        data: temasLabels
      },
      series: [{
        type: 'bar',
        data: temasData,
        itemStyle: {
          color: new echarts.graphic.LinearGradient(0, 0, 1, 0, [
            { offset: 0, color: '#2196F3' },
            { offset: 1, color: '#1976D2' }
          ])
        },
        label: {
          show: true,
          position: 'right',
          formatter: '{c}'
        }
      }]
    };
    chartTemas.setOption(optionTemas);
  }

  // Responsive charts
  window.addEventListener('resize', function() {
    if (typeof chartSent !== 'undefined') chartSent.resize();
    if (typeof chartTemas !== 'undefined') chartTemas.resize();
  });
});
</script>
