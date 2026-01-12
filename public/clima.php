<?php
// public/clima.php
// SGRH - Clima Laboral - Menú Principal
// Hub de navegación para todo el módulo de clima laboral
// Compatible PHP 5.7 - NO usar operador ??

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();
require_empresa();
require_password_change_redirect();
require_demograficos_redirect();

if (session_status() === PHP_SESSION_NONE) session_start();

$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 0;
$usuario_id = isset($_SESSION['usuario_id']) ? (int)$_SESSION['usuario_id'] : 0;

function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

// =======================
// PERIODO ACTIVO
// =======================
$periodo_activo = null;
if ($empresa_id > 0) {
    $stmt_p = $pdo->prepare("
        SELECT periodo_id, anio, fecha_inicio, fecha_fin, estatus
        FROM clima_periodos
        WHERE empresa_id=? AND estatus IN ('borrador','publicado')
        ORDER BY anio DESC
        LIMIT 1
    ");
    $stmt_p->execute([$empresa_id]);
    $periodo_activo = $stmt_p->fetch(PDO::FETCH_ASSOC);
}

// =======================
// ELEGIBILIDAD USUARIO
// =======================
$soy_elegible = false;
$ya_respondio = false;
$periodo_contestar = null;
if ($empresa_id > 0 && $usuario_id > 0 && $periodo_activo) {
    // Resolver empleado_id
    $stmt_emp = $pdo->prepare("SELECT empleado_id FROM usuario_empresas WHERE usuario_id=? AND empresa_id=? AND estatus=1 LIMIT 1");
    $stmt_emp->execute([$usuario_id, $empresa_id]);
    $empleado_id = (int)$stmt_emp->fetchColumn();

    if ($empleado_id > 0) {
        $stmt_el = $pdo->prepare("SELECT elegible FROM clima_elegibles WHERE periodo_id=? AND empleado_id=? AND empresa_id=? LIMIT 1");
        $stmt_el->execute([(int)$periodo_activo['periodo_id'], $empleado_id, $empresa_id]);
        $row_el = $stmt_el->fetch(PDO::FETCH_ASSOC);
        if ($row_el && (int)$row_el['elegible'] === 1) {
            $soy_elegible = true;
            $periodo_contestar = $periodo_activo;

            // Verificar si ya finalizó la encuesta (no solo si tiene respuestas)
            $stmt_resp = $pdo->prepare("SELECT completado FROM clima_envios WHERE periodo_id=? AND empleado_id=? LIMIT 1");
            $stmt_resp->execute([(int)$periodo_activo['periodo_id'], $empleado_id]);
            $row_envio = $stmt_resp->fetch(PDO::FETCH_ASSOC);
            $ya_respondio = ($row_envio && (int)$row_envio['completado'] === 1);
        }
    }
}

// =======================
// LAYOUT
// =======================
$page_title = 'Clima Laboral';
$active_menu = 'clima';

$extra_css = [
  'global_assets/css/icons/icomoon/styles.min.css',
];

require_once __DIR__ . '/../includes/layout/head.php';
require_once __DIR__ . '/../includes/layout/navbar.php';
require_once __DIR__ . '/../includes/layout/sidebar.php';
require_once __DIR__ . '/../includes/layout/content_open.php';
?>

<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-pulse2 mr-2"></i> <span class="font-weight-semibold">Clima Laboral</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>
</div>

<div class="content">

  <!-- ¿Por qué es importante tu participación? -->
  <div class="card border-left-3 border-left-primary">
    <div class="card-header bg-transparent">
      <h5 class="card-title font-weight-semibold">
        <i class="icon-lifebuoy mr-2"></i>¿Por qué es importante tu participación?
      </h5>
    </div>
    <div class="card-body">
      <p class="mb-3">
        La <strong>Encuesta de Clima Laboral</strong> es una herramienta fundamental para conocer tu percepción 
        sobre el ambiente de trabajo, las condiciones laborales y las relaciones dentro de la organización.
      </p>
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="media">
            <div class="mr-3">
              <i class="icon-mic icon-2x text-primary"></i>
            </div>
            <div class="media-body">
              <h6 class="font-weight-semibold mb-1">Tu voz cuenta</h6>
              <p class="text-muted mb-0">Tus respuestas son confidenciales y nos permiten identificar áreas de oportunidad.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="media">
            <div class="mr-3">
              <i class="icon-chart icon-2x text-success"></i>
            </div>
            <div class="media-body">
              <h6 class="font-weight-semibold mb-1">Mejora continua</h6>
              <p class="text-muted mb-0">Los resultados guían planes de acción concretos para mejorar nuestro entorno.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="media">
            <div class="mr-3">
              <i class="icon-users icon-2x text-info"></i>
            </div>
            <div class="media-body">
              <h6 class="font-weight-semibold mb-1">Construimos juntos</h6>
              <p class="text-muted mb-0">Tu participación contribuye a crear un mejor lugar para trabajar para todos.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="alert alert-info border-0 mb-0">
        <div class="d-flex align-items-center">
          <i class="icon-shield-check icon-2x mr-3"></i>
          <div>
            <strong>Confidencialidad garantizada:</strong> Todas las respuestas son anónimas y se analizan 
            de forma agregada. Los reportes se generan únicamente cuando hay suficientes participantes para 
            proteger tu identidad.
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Periodo activo -->
  <?php if ($periodo_activo): ?>
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">Periodo activo</h5>
    </div>
    <div class="card-body">
      <div class="media">
        <div class="mr-3">
          <i class="icon-calendar5 icon-3x text-success"></i>
        </div>
        <div class="media-body">
          <h5 class="font-weight-semibold mb-1">Clima <?php echo h($periodo_activo['anio']); ?></h5>
          <p class="mb-0">
            <strong>Periodo:</strong> <?php echo h($periodo_activo['fecha_inicio']); ?> al <?php echo h($periodo_activo['fecha_fin']); ?><br>
            <strong>Estatus:</strong>
            <?php if ($periodo_activo['estatus'] === 'publicado'): ?>
              <span class="badge badge-success">Publicado</span>
            <?php else: ?>
              <span class="badge badge-secondary">Borrador</span>
            <?php endif; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <!-- Encuesta para empleado -->
  <?php if ($soy_elegible && $periodo_contestar && !$ya_respondio): ?>
  <div class="card bg-primary text-white">
    <div class="card-body">
      <div class="media">
        <div class="mr-3">
          <i class="icon-checkmark-circle icon-3x"></i>
        </div>
        <div class="media-body">
          <h5 class="font-weight-semibold mb-1">¡Eres elegible para contestar la encuesta!</h5>
          <p class="mb-3">Tu opinión es importante para mejorar el ambiente laboral.</p>
          <a href="clima_contestar.php" class="btn btn-light">
            <i class="icon-play3 mr-2"></i> Contestar encuesta
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <!-- Leyenda sobre Planes de Acción -->
  <div class="card border-left-3 border-left-info">
    <div class="card-header bg-transparent">
      <h5 class="card-title font-weight-semibold">
        <i class="icon-clipboard3 mr-2"></i>Planes de Acción
      </h5>
    </div>
    <div class="card-body">
      <p class="mb-2">
        Los <strong>Planes de Acción</strong> son la respuesta de la organización a los resultados de la encuesta de clima laboral.
      </p>
      <div class="alert alert-light border mb-3">
        <strong>¿Cómo funcionan?</strong>
        <ol class="mb-0 mt-2 pl-3">
          <li>Los resultados se analizan por Dirección para identificar áreas de mejora</li>
          <li>Los líderes de cada Dirección crean planes específicos con acciones concretas</li>
          <li>Cada plan define responsables, fechas compromiso e indicadores de éxito</li>
          <li>El progreso se monitorea y los colaboradores pueden ver los planes de su Dirección</li>
        </ol>
      </div>
      <div class="text-muted">
        <i class="icon-info22 mr-1"></i>
        <strong>Nota para líderes:</strong> Si eres responsable de un equipo, puedes crear y gestionar planes de acción para tu Dirección desde el menú de Clima Laboral.
      </div>
    </div>
  </div>

  <?php if ($soy_elegible && $periodo_contestar && $ya_respondio): ?>
  <div class="card bg-success text-white">
    <div class="card-body">
      <div class="media">
        <div class="mr-3">
          <i class="icon-check icon-3x"></i>
        </div>
        <div class="media-body">
          <h5 class="font-weight-semibold mb-1">Ya has respondido la encuesta</h5>
          <p class="mb-0">¡Gracias por participar! Tu opinión nos ayuda a mejorar el clima laboral de la organización.</p>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <!-- Ayuda para empleados no elegibles -->
  <?php if (!$soy_elegible): ?>
  <div class="card">
    <div class="card-header bg-light">
      <h5 class="card-title">Información</h5>
    </div>
    <div class="card-body">
      <div class="alert alert-light border-left-3 border-left-info mb-0">
        <i class="icon-info22 mr-2"></i>
        <strong>Nota:</strong> No eres elegible para contestar la encuesta actual. Contacta al área de Recursos Humanos si consideras que deberías participar.
      </div>
    </div>
  </div>
  <?php endif; ?>

</div>

<?php
require_once __DIR__ . '/../includes/layout/scripts.php';
require_once __DIR__ . '/../includes/layout/content_close.php';
?>
