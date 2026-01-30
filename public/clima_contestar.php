<?php
// public/clima_contestar.php
// SGRH - Clima Laboral (captura Likert + 2 preguntas abiertas) con cierre (Finalizar)
// Reglas: respeta empresa_id, periodo_id, unidad_id; valida elegibilidad
// Compatible MySQL 5.7 - NO usar operador ??

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();
require_empresa();
require_password_change_redirect();
require_demograficos_redirect();

if (session_status() === PHP_SESSION_NONE) session_start();

$empresa_id = (int)$_SESSION['empresa_id'];
$usuario_id = isset($_SESSION['usuario_id']) ? (int)$_SESSION['usuario_id'] : 0;

function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

function table_exists($pdo, $table_name) {
    $sql = "SELECT COUNT(*)
            FROM information_schema.tables
            WHERE table_schema = DATABASE() AND table_name = :t";
    $st = $pdo->prepare($sql);
    $st->execute(array(':t' => $table_name));
    return ((int)$st->fetchColumn() > 0);
}

$errores = array();

// =====================================================
// 1) Resolver empleado_id (usuario_empresas)
// =====================================================
$empleado_id = 0;
$sqlEmp = "SELECT ue.empleado_id
           FROM usuario_empresas ue
           WHERE ue.usuario_id = :usuario_id
             AND ue.empresa_id = :empresa_id
             AND ue.estatus = 1
           LIMIT 1";
$stEmp = $pdo->prepare($sqlEmp);
$stEmp->execute(array(':usuario_id' => $usuario_id, ':empresa_id' => $empresa_id));
$empleado_id = (int)$stEmp->fetchColumn();

// =====================================================
// 2) Determinar periodo activo
// =====================================================
$periodo_id = 0;
$sqlPer = "SELECT periodo_id
           FROM clima_periodos
           WHERE empresa_id = :empresa_id
             AND estatus IN ('borrador','publicado')
           ORDER BY anio DESC, periodo_id DESC
           LIMIT 1";
$stPer = $pdo->prepare($sqlPer);
$stPer->execute(array(':empresa_id' => $empresa_id));
$periodo_id = (int)$stPer->fetchColumn();

if ($usuario_id <= 0) $errores[] = 'Sesión inválida (usuario).';
if ($empresa_id <= 0) $errores[] = 'No hay empresa activa en sesión.';
if ($empleado_id <= 0) $errores[] = 'No se encontró empleado vinculado al usuario en usuario_empresas.';
if ($periodo_id <= 0) $errores[] = 'No hay un periodo de clima activo (borrador/publicado) para esta empresa.';

// =====================================================
// 3) Validar elegibilidad
// =====================================================
$unidad_id = 0;
if (count($errores) === 0) {
    $sqlEl = "SELECT ce.elegible, ce.unidad_id
              FROM clima_elegibles ce
              WHERE ce.periodo_id = :periodo_id
                AND ce.empleado_id = :empleado_id
                AND ce.empresa_id = :empresa_id
              LIMIT 1";
    $stEl = $pdo->prepare($sqlEl);
    $stEl->execute(array(
        ':periodo_id' => $periodo_id,
        ':empleado_id' => $empleado_id,
        ':empresa_id' => $empresa_id
    ));
    $rowEl = $stEl->fetch(PDO::FETCH_ASSOC);

    if (!$rowEl) {
        $errores[] = 'No estás en la lista de elegibles para este periodo.';
    } else {
        if ((int)$rowEl['elegible'] !== 1) {
            $errores[] = 'No eres elegible para contestar el clima en este periodo.';
        }
        $unidad_id = (int)$rowEl['unidad_id'];
        if ($unidad_id <= 0) $errores[] = 'No se pudo determinar tu Dirección (unidad).';
    }
}

// =====================================================
// 4) ¿Ya finalizó? (si existe clima_envios)
// =====================================================
$ya_finalizo = false;
$finalizado_at = null;
if (count($errores) === 0 && table_exists($pdo, 'clima_envios')) {
    $stFin = $pdo->prepare("SELECT completado, completado_at FROM clima_envios WHERE periodo_id = :p AND empleado_id = :e LIMIT 1");
    $stFin->execute(array(':p' => $periodo_id, ':e' => $empleado_id));
    $fin = $stFin->fetch(PDO::FETCH_ASSOC);
    if ($fin && (int)$fin['completado'] === 1) {
        $ya_finalizo = true;
        $finalizado_at = $fin['completado_at'];
    }
}

// =====================================================
// 5) Cargar dimensiones / reactivos y respuestas previas
// =====================================================
$dimensiones = array();
$reactivos_por_dim = array();
$resp_map = array();
$total_reactivos = 0;
$total_contestados = 0;

if (count($errores) === 0) {
    $stD = $pdo->prepare("
        SELECT dimension_id, nombre, orden
        FROM clima_dimensiones
        WHERE activo = 1
        ORDER BY orden, dimension_id
    ");
    $stD->execute();
    $dimensiones = $stD->fetchAll(PDO::FETCH_ASSOC);

    $stR = $pdo->prepare("
        SELECT reactivo_id, dimension_id, texto, orden
        FROM clima_reactivos
        WHERE activo = 1
        ORDER BY dimension_id, orden, reactivo_id
    ");
    $stR->execute();
    $allR = $stR->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i<count($allR); $i++) {
        $did = (int)$allR[$i]['dimension_id'];
        if (!isset($reactivos_por_dim[$did])) $reactivos_por_dim[$did] = array();
        $reactivos_por_dim[$did][] = $allR[$i];
        $total_reactivos++;
    }

    $stA = $pdo->prepare("
        SELECT reactivo_id, valor
        FROM clima_respuestas
        WHERE periodo_id = :periodo_id
          AND empleado_id = :empleado_id
    ");
    $stA->execute(array(':periodo_id' => $periodo_id, ':empleado_id' => $empleado_id));
    while ($r = $stA->fetch(PDO::FETCH_ASSOC)) {
        $resp_map[(int)$r['reactivo_id']] = (int)$r['valor'];
    }
    $total_contestados = count($resp_map);
}

// Progreso
$porcentaje = 0;
if ($total_reactivos > 0) $porcentaje = round(($total_contestados / $total_reactivos) * 100, 2);

// Likert
$likert = array(
  1 => 'Totalmente De acuerdo',
  2 => 'Parcialmente De acuerdo',
  3 => 'En Desacuerdo'
);

// =====================================================
// 6) Preguntas abiertas (catálogo + respuestas previas)
//    Si aún no existe catálogo/tablas, mostramos 2 base (sin guardar)
// =====================================================
$abiertas_disponibles = false;
$preguntas_abiertas = array();
$abiertas_map = array();

$tbl_open_q = table_exists($pdo, 'clima_preguntas_abiertas');
$tbl_open_a = table_exists($pdo, 'clima_respuestas_abiertas');

if (count($errores) === 0 && $tbl_open_q && $tbl_open_a) {
    $stPA = $pdo->prepare("
        SELECT pregunta_id, texto, orden, obligatorio
        FROM clima_preguntas_abiertas
        WHERE activo = 1
        ORDER BY orden, pregunta_id
    ");
    $stPA->execute();
    $preguntas_abiertas = $stPA->fetchAll(PDO::FETCH_ASSOC);

    if (count($preguntas_abiertas) > 0) {
        $abiertas_disponibles = true;

        $stRA = $pdo->prepare("
            SELECT pregunta_id, respuesta
            FROM clima_respuestas_abiertas
            WHERE periodo_id = :periodo_id
              AND empleado_id = :empleado_id
        ");
        $stRA->execute(array(':periodo_id' => $periodo_id, ':empleado_id' => $empleado_id));
        while ($r = $stRA->fetch(PDO::FETCH_ASSOC)) {
            $abiertas_map[(int)$r['pregunta_id']] = (string)$r['respuesta'];
        }
    }
}

// Fallback: 2 abiertas base
if (!$abiertas_disponibles) {
    $preguntas_abiertas = array(
        array('pregunta_id' => 0, 'texto' => '¿Qué es lo que más valoras de trabajar en tu área actualmente?', 'orden' => 1, 'obligatorio' => 1),
        array('pregunta_id' => 0, 'texto' => 'Si pudieras cambiar una sola cosa para mejorar tu experiencia de trabajo, ¿cuál sería y por qué?', 'orden' => 2, 'obligatorio' => 1),
    );
}

// Layout (Limitless)
$active_menu = 'clima';

require_once __DIR__ . '/../includes/layout/head.php';
require_once __DIR__ . '/../includes/layout/navbar.php';
require_once __DIR__ . '/../includes/layout/sidebar.php';
require_once __DIR__ . '/../includes/layout/content_open.php';
?>

<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-clipboard3 mr-2"></i> <span class="font-weight-semibold">Clima Laboral</span> - Contestar</h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>

    <div class="header-elements d-none d-md-flex">
      <div class="d-flex justify-content-center">
        <?php if (count($errores) === 0): ?>
          <span class="badge badge-light"><?php echo 'Periodo: ' . (int)$periodo_id; ?></span>
          <span class="badge badge-light ml-2"><?php echo 'Avance: ' . number_format((float)$porcentaje, 2) . '%'; ?></span>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<div class="content">

  <?php if (count($errores) > 0): ?>
    <div class="alert alert-danger">
      <strong>No es posible contestar.</strong>
      <ul class="mb-0">
        <?php foreach ($errores as $e): ?>
          <li><?php echo h($e); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php else: ?>

    <?php if ($ya_finalizo): ?>
      <div class="card bg-success text-white">
        <div class="card-body">
          <div class="media">
            <div class="mr-3">
              <i class="icon-checkmark-circle2 icon-3x"></i>
            </div>
            <div class="media-body">
              <h5 class="font-weight-semibold mb-1">Encuesta completada</h5>
              <p class="mb-0">Esta encuesta ya fue finalizada. A continuación puedes ver tus respuestas.</p>
              <?php if ($finalizado_at): ?>
                <div class="mt-2" style="font-size:13px; opacity: 0.9;">
                  <i class="icon-calendar mr-1"></i> Finalizada: <?php echo h($finalizado_at); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($total_reactivos <= 0): ?>
      <div class="alert alert-warning">
        <strong>Aún no hay preguntas cargadas.</strong>
        Carga reactivos en <code>clima_reactivos</code> y dimensiones activas en <code>clima_dimensiones</code>.
      </div>
    <?php endif; ?>

    <?php if (!$ya_finalizo): ?>
    <div class="card">
      <div class="card-header header-elements-inline">
        <h6 class="card-title">Instrucciones</h6>
      </div>
      <div class="card-body">
        <p class="mb-2">
          Esta evaluación es confidencial y se usa para identificar oportunidades de mejora por Dirección.
          La información se guarda automáticamente conforme respondes.
        </p>

        <div class="progress mb-2" style="height: 18px;">
          <div id="barAvance" class="progress-bar" role="progressbar"
               style="width: <?php echo (float)$porcentaje; ?>%;"
               aria-valuenow="<?php echo (float)$porcentaje; ?>" aria-valuemin="0" aria-valuemax="100">
            <?php echo number_format((float)$porcentaje, 2); ?>%
          </div>
        </div>

        <div class="text-muted">
          Contestadas: <span id="cntContestadas"><?php echo (int)$total_contestados; ?></span> / <span id="cntTotal"><?php echo (int)$total_reactivos; ?></span>
        </div>

        <div class="d-flex align-items-center justify-content-between" style="margin-top:16px;">
          <div>
            <span class="text-muted">Cuando termines, da clic en <strong>Finalizar encuesta</strong>.</span>
          </div>
          <div>
            <button type="button" class="btn btn-primary" id="btnFinalizar">
              <i class="icon-checkmark3 mr-2"></i> Finalizar encuesta
            </button>
          </div>
        </div>

      </div>
    </div>
    <?php endif; ?>

    <?php if ($total_reactivos > 0): ?>
      <?php foreach ($dimensiones as $d): ?>
        <?php
          $did = (int)$d['dimension_id'];
          $lista = array();
          if (isset($reactivos_por_dim[$did])) $lista = $reactivos_por_dim[$did];
          if (count($lista) === 0) continue;
        ?>
        <div class="card">
          <div class="card-header header-elements-inline">
            <h6 class="card-title"><?php echo h($d['nombre']); ?></h6>
          </div>
          <div class="card-body">
            <?php foreach ($lista as $rx): ?>
              <?php
                $rid = (int)$rx['reactivo_id'];
                $sel = 0;
                if (isset($resp_map[$rid])) $sel = (int)$resp_map[$rid];
              ?>
              <div class="mb-3 p-3 border rounded <?php echo $ya_finalizo ? 'bg-light' : ''; ?>">
                <div class="mb-3">
                  <strong><?php echo (int)$rx['orden']; ?>.</strong> <?php echo h($rx['texto']); ?>
                </div>
                
                <?php if ($ya_finalizo): ?>
                  <!-- Vista de solo lectura cuando está finalizada -->
                  <?php
                    $emojis = array(1 => '😊', 2 => '😐', 3 => '😞');
                    $labels = array(
                      1 => 'Totalmente De acuerdo',
                      2 => 'Parcialmente De acuerdo',
                      3 => 'En Desacuerdo'
                    );
                    $colors = array(1 => '#4CAF50', 2 => '#FFC107', 3 => '#F44336');
                    
                    if ($sel > 0 && isset($emojis[$sel])) {
                      $emoji = $emojis[$sel];
                      $label_text = $labels[$sel];
                      $color = $colors[$sel];
                  ?>
                  <div style="display: flex; align-items: center; padding: 15px; background-color: <?php echo $color; ?>20; border-left: 4px solid <?php echo $color; ?>; border-radius: 4px;">
                    <div style="font-size: 40px; margin-right: 15px;"><?php echo $emoji; ?></div>
                    <div>
                      <div style="font-size: 16px; font-weight: 600; color: <?php echo $color; ?>;">
                        <?php echo h($label_text); ?>
                      </div>
                      <div style="font-size: 12px; color: #666; margin-top: 3px;">
                        Tu respuesta
                      </div>
                    </div>
                  </div>
                  <?php } else { ?>
                  <div class="alert alert-warning mb-0">
                    <i class="icon-warning mr-2"></i> Sin respuesta registrada
                  </div>
                  <?php } ?>
                <?php else: ?>
                  <!-- Vista editable cuando NO está finalizada -->
                  <div style="display: flex; justify-content: space-around; gap: 10px; margin: 15px 0;">
                    <?php foreach ($likert as $k => $label): ?>
                      <?php 
                        $checked = ($sel === (int)$k) ? 'checked' : '';
                        $emojis = array(1 => '😊', 2 => '😐', 3 => '😞');
                        $colors = array(1 => '#4CAF50', 2 => '#FFC107', 3 => '#F44336');
                        $emoji = isset($emojis[$k]) ? $emojis[$k] : '';
                        $bgColor = isset($colors[$k]) ? $colors[$k] : '#ddd';
                      ?>
                      <label style="cursor: pointer; text-align: center; flex: 1;">
                        <input type="radio"
                               name="r_<?php echo $rid; ?>"
                               value="<?php echo (int)$k; ?>"
                               <?php echo $checked; ?>
                               class="radLikert"
                               data-reactivo="<?php echo $rid; ?>"
                               style="display: none;">
                        <div style="font-size: 50px; padding: 15px; border-radius: 8px; border: 2px solid #ddd; background-color: transparent; transition: all 0.3s; cursor: pointer;"
                             class="emoji-option"
                             data-value="<?php echo (int)$k; ?>"
                             data-reactivo="<?php echo $rid; ?>"
                             data-color="<?php echo $bgColor; ?>">
                          <?php echo $emoji; ?>
                        </div>
                        <div style="font-size: 11px; margin-top: 5px; color: #666;"><?php echo h(str_replace(array('😊 ', '😐 ', '😞 '), '', $label)); ?></div>
                      </label>
                    <?php endforeach; ?>
                  </div>

                  <div style="font-size: 13px; font-weight: 500; min-height: 20px; margin-top: 8px;" id="st_<?php echo $rid; ?>"></div>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

    <!-- =========================
         Preguntas abiertas (cualitativas)
         ========================= -->
    <div class="card">
      <div class="card-header header-elements-inline">
        <h6 class="card-title">Preguntas abiertas</h6>
      </div>
      <div class="card-body">
        <?php if (!$ya_finalizo): ?>
        <p class="text-muted mb-3">
          Tus comentarios nos ayudan a definir planes de acción por Dirección. Evita incluir datos personales o nombres.
        </p>
        <?php endif; ?>

        <?php if (!$abiertas_disponibles && !$ya_finalizo): ?>
          <div class="alert alert-warning">
            Aún no está habilitada la captura de preguntas abiertas en base de datos.
            Ejecuta el script <code>clima_preguntas_abiertas.sql</code> para crear tablas y catálogo.
          </div>
        <?php endif; ?>

        <?php foreach ($preguntas_abiertas as $pa): ?>
          <?php
            $pid = (int)$pa['pregunta_id'];
            $txt = (string)$pa['texto'];
            $ob  = (int)$pa['obligatorio'];
            $orden = (int)$pa['orden'];
            $val = '';
            if ($pid > 0 && isset($abiertas_map[$pid])) $val = (string)$abiertas_map[$pid];
          ?>
          <div class="form-group <?php echo $ya_finalizo ? 'mb-4' : 'mb-3'; ?>" style="margin-bottom:14px;">
            <label class="font-weight-semibold">
              <?php echo h($orden); ?>) <?php echo h($txt); ?>
              <?php if ($ob === 1 && !$ya_finalizo): ?><span class="text-danger">*</span><?php endif; ?>
            </label>
            
            <?php if ($ya_finalizo): ?>
              <!-- Vista de solo lectura -->
              <?php if (!empty($val)): ?>
                <div class="p-3 border rounded bg-light" style="white-space: pre-wrap;">
                  <?php echo h($val); ?>
                </div>
              <?php else: ?>
                <div class="alert alert-warning mb-0">
                  <i class="icon-warning mr-2"></i> Sin respuesta registrada
                </div>
              <?php endif; ?>
            <?php else: ?>
              <!-- Vista editable -->
              <textarea class="form-control txtAbierta" rows="3"
                        data-pregunta="<?php echo $pid; ?>"
                        <?php if ($ob === 1): ?>data-obligatorio="1"<?php endif; ?>
                        <?php if (!$abiertas_disponibles): ?>disabled<?php endif; ?>
                        placeholder="Escribe tu respuesta..."><?php echo h($val); ?></textarea>
              <div class="status-save text-muted" id="sta_<?php echo $pid; ?>"></div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>

        <?php if (!$ya_finalizo): ?>
        <div class="text-muted" style="font-size:12px;">
          <span class="text-danger">*</span> Pregunta obligatoria.
        </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- Botón Finalizar encuesta (al final) -->
    <?php if (!$ya_finalizo): ?>
      <div class="card">
        <div class="card-body text-right">
          <button type="button" class="btn btn-primary" id="btnFinalizarFinal">
            <i class="icon-checkmark3 mr-2"></i> Finalizar encuesta
          </button>
        </div>
      </div>
    <?php endif; ?>

  <?php endif; ?>

</div>

<?php require_once __DIR__ . '/../includes/layout/footer.php'; ?>

<script>
$(function() {

  var YA_FINALIZO = <?php echo $ya_finalizo ? 'true' : 'false'; ?>;

  function setStatus(id, text, isError){
    var el = $('#st_' + id);
    if (isError) {
      el.html('<div style="background-color: #f8d7da; color: #721c24; padding: 10px 12px; border-radius: 4px; border-left: 4px solid #dc3545; font-weight: bold; margin-top: 8px;">⚠️ ' + text + '</div>');
    } else {
      el.html('<span style="color: #28a745; font-weight: bold;">✓ ' + text + '</span>');
    }
  }

  function setStatusAbierta(preguntaId, text, isError){
    var el = $('#sta_' + preguntaId);
    el.removeClass('text-danger').removeClass('text-success')
      .addClass(isError ? 'text-danger' : 'text-success');
    var emoji = isError ? '❌ ' : '✓ ';
    el.text(emoji + text);
  }

  function setAvance(avance, contestadas){
    $('#barAvance').css('width', avance + '%')
      .attr('aria-valuenow', avance)
      .text(parseFloat(avance).toFixed(2) + '%');

    if (contestadas !== undefined) {
      $('#cntContestadas').text(contestadas);
    }
  }

  if (YA_FINALIZO) {
    $('.radLikert').prop('disabled', true);
    $('.txtAbierta').prop('disabled', true);
    $('#btnFinalizar').prop('disabled', true);
    return;
  }

  // Manejador para emojis clicables
  $(document).on('click', '.emoji-option', function(){
    var valor = $(this).data('value');
    var reactivoId = $(this).data('reactivo');
    var color = $(this).data('color');
    
    // Marcar el radio button
    $('input[name="r_' + reactivoId + '"][value="' + valor + '"]').prop('checked', true);
    
    // Restaurar todos los emojis de este reactivo a estado normal
    $('[data-reactivo="' + reactivoId + '"].emoji-option').css({
      'border-width': '2px',
      'border-color': '#ddd',
      'background-color': 'transparent',
      'box-shadow': 'none',
      'transform': 'scale(1)'
    });
    
    // Aplicar estilos solo al emoji seleccionado
    $(this).css({
      'border-width': '3px',
      'border-color': color,
      'background-color': color + '40',
      'box-shadow': '0 0 8px ' + color + '60',
      'transform': 'scale(1.08)'
    });
    
    // Guardar la respuesta
    setStatus(reactivoId, 'Guardando...', false);
    $.ajax({
      url: 'clima_guardar_respuesta.php',
      method: 'POST',
      dataType: 'json',
      data: { reactivo_id: reactivoId, valor: valor }
    }).done(function(resp){
      if (resp && resp.ok) {
        setStatus(reactivoId, 'Guardado', false);
        if (resp.avance !== undefined) {
          var av = parseFloat(resp.avance);
          if (isNaN(av)) av = 0;
          setAvance(av, resp.contestadas);
        }
      } else {
        setStatus(reactivoId, (resp && resp.error) ? resp.error : 'Error al guardar', true);
      }
    }).fail(function(){
      setStatus(reactivoId, 'Error de comunicación al guardar', true);
    });
  });

  // Marcar emojis ya seleccionados al cargar la página
  $('input[class="radLikert"]:checked').each(function(){
    var valor = $(this).val();
    var reactivoId = $(this).data('reactivo');
    var $emojiDiv = $('[data-reactivo="' + reactivoId + '"][data-value="' + valor + '"]');
    var color = $emojiDiv.data('color');
    $emojiDiv.css({
      'border-width': '3px',
      'border-color': color,
      'background-color': color + '40',
      'box-shadow': '0 0 8px ' + color + '60'
    });
  });

  // Guardar Likert (antiguo manejador, mantenerlo para compatibilidad)
  $(document).on('change', '.radLikert', function(){
    var reactivoId = $(this).data('reactivo');
    var valor = $(this).val();

    setStatus(reactivoId, 'Guardando...', false);

    $.ajax({
      url: 'clima_guardar_respuesta.php',
      method: 'POST',
      dataType: 'json',
      data: { reactivo_id: reactivoId, valor: valor }
    }).done(function(resp){
      if (resp && resp.ok) {
        setStatus(reactivoId, 'Guardado', false);
        if (resp.avance !== undefined) {
          var av = parseFloat(resp.avance);
          if (isNaN(av)) av = 0;
          setAvance(av, resp.contestadas);
        }
      } else {
        setStatus(reactivoId, (resp && resp.error) ? resp.error : 'Error al guardar', true);
      }
    }).fail(function(){
      setStatus(reactivoId, 'Error de comunicación al guardar', true);
    });
  });

  // Guardar preguntas abiertas (blur)
  var _abiertaTimer = {};
  $(document).on('blur', '.txtAbierta', function(){
    var pid = parseInt($(this).data('pregunta'), 10);
    if (!pid || pid <= 0) return; // si no hay BD, no guardamos
    var txt = $(this).val();

    var ob = $(this).data('obligatorio');
    if (ob == 1 && $.trim(txt) === '') {
      setStatusAbierta(pid, 'Esta pregunta es obligatoria.', true);
      return;
    }

    setStatusAbierta(pid, 'Guardando...', false);

    if (_abiertaTimer[pid]) clearTimeout(_abiertaTimer[pid]);
    _abiertaTimer[pid] = setTimeout(function(){
      $.ajax({
        url: 'clima_guardar_abierta.php',
        method: 'POST',
        dataType: 'json',
        data: { pregunta_id: pid, respuesta: txt }
      }).done(function(resp){
        if (resp && resp.ok) {
          setStatusAbierta(pid, 'Guardado', false);
        } else {
          setStatusAbierta(pid, (resp && resp.error) ? resp.error : 'Error al guardar', true);
        }
      }).fail(function(){
        setStatusAbierta(pid, 'Error de comunicación al guardar', true);
      });
    }, 250);
  });

  // Función para mostrar alerta en HTML
  function showAlertBox(message, type) {
    type = type || 'danger'; // 'danger', 'success', 'warning', 'info'
    var emoji = '';
    if (type === 'danger') emoji = '❌ ';
    else if (type === 'success') emoji = '✅ ';
    else if (type === 'warning') emoji = '⚠️ ';
    else if (type === 'info') emoji = 'ℹ️ ';
    
    var alertHtml = '<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">' +
                    '<span aria-hidden="true">&times;</span></button>' +
                    emoji + message +
                    '</div>';
    
    // Insertar alerta al inicio del contenido
    $('.content').prepend(alertHtml);
    
    // Auto-desaparecer en 8 segundos (opcional)
    setTimeout(function() {
      $('.alert.alert-' + type + ':first').fadeOut('slow', function() {
        $(this).remove();
      });
    }, 8000);
  }

  // Finalizar
  $('#btnFinalizar, #btnFinalizarFinal').on('click', function(){
    var $btn = $(this);
    
    // Validar que todas las preguntas estén contestadas
    var preguntas_sin_respuesta = [];
    var total_preguntas = 0;
    
    // Recorrer todos los inputs radio de Likert
    $('input[name^="r_"]').each(function(){
      var reactivoId = $(this).data('reactivo');
      var valor = $('input[name="r_' + reactivoId + '"]:checked').val();
      
      if (!valor) {
        if (preguntas_sin_respuesta.indexOf(reactivoId) === -1) {
          preguntas_sin_respuesta.push(reactivoId);
          // Mostrar error en la pregunta
          setStatus(reactivoId, 'Esta pregunta es obligatoria', true);
        }
      }
      total_preguntas++;
    });
    
    if (preguntas_sin_respuesta.length > 0) {
      showAlertBox('Hay ' + preguntas_sin_respuesta.length + ' pregunta(s) sin responder. Completa todas antes de finalizar.', 'danger');
      return;
    }
    
    $btn.prop('disabled', true);

    $.ajax({
      url: 'clima_finalizar.php',
      method: 'POST',
      dataType: 'json',
      data: {}
    }).done(function(resp){
      if (resp && resp.ok) {
        showAlertBox(resp.message ? resp.message : 'Encuesta finalizada.', 'success');
        setTimeout(function() {
          window.location.reload();
        }, 1500);
      } else {
        showAlertBox((resp && resp.error) ? resp.error : 'No fue posible finalizar. Revisa que hayas contestado todo.', 'danger');
        $btn.prop('disabled', false);
      }
    }).fail(function(){
      showAlertBox('Error de comunicación al finalizar. Intenta nuevamente.', 'danger');
      $btn.prop('disabled', false);
    });
  });

});
</script>
