<?php
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
    die('No tienes permisos para acceder a esta página.');
}

$empresa_id = (int)$_SESSION['empresa_id'];
$usuario_id = (int)$_SESSION['usuario_id'];

function h($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}

$flash = null;
$flash_type = 'success';
$selected_periodo = null;

// Procesar publicación/despublicación
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    try {
        $action = $_POST['action'];
        $periodo_id = (int)($_POST['periodo_id'] ?? 0);
        $selected_periodo = $periodo_id;
        $unidades = isset($_POST['unidades']) ? array_map('intval', (array)$_POST['unidades']) : [];
        
        if ($periodo_id <= 0 || empty($unidades)) {
            throw new RuntimeException("Debe seleccionar período y unidades");
        }
        
        // Verificar período
        $chk = $pdo->prepare("SELECT periodo_id FROM clima_periodos WHERE periodo_id = ? AND empresa_id = ?");
        $chk->execute([$periodo_id, $empresa_id]);
        if (!$chk->fetch()) {
            throw new RuntimeException("Período no válido");
        }
        
        if ($action === 'publicar') {
            $stmt = $pdo->prepare("
                INSERT INTO clima_publicacion (periodo_id, empresa_id, unidad_id, habilitado, fecha_publicacion, publicado_por)
                VALUES (?, ?, ?, 1, NOW(), ?)
                ON DUPLICATE KEY UPDATE habilitado = 1, fecha_publicacion = NOW(), publicado_por = ?
            ");
            
            $count = 0;
            foreach ($unidades as $unidad_id) {
                $stmt->execute([$periodo_id, $empresa_id, $unidad_id, $usuario_id, $usuario_id]);
                $count++;
            }
            
            $flash = "✅ $count unidades publicadas";
            $flash_type = 'success';
        } elseif ($action === 'despublicar') {
            $stmt = $pdo->prepare("
                UPDATE clima_publicacion 
                SET habilitado = 0, fecha_publicacion = NOW(), publicado_por = ?
                WHERE periodo_id = ? AND empresa_id = ? AND unidad_id = ?
            ");
            
            $count = 0;
            foreach ($unidades as $unidad_id) {
                $stmt->execute([$usuario_id, $periodo_id, $empresa_id, $unidad_id]);
                $count++;
            }
            
            $flash = "✅ $count unidades despublicadas";
            $flash_type = 'success';
        }
    } catch (Exception $e) {
        $flash = "❌ " . $e->getMessage();
        $flash_type = 'danger';
    }
}

// Obtener períodos
$stmt = $pdo->prepare("
    SELECT periodo_id, anio, estatus,
           (SELECT COUNT(DISTINCT unidad_id) FROM clima_elegibles WHERE periodo_id = cp.periodo_id) as tu,
           (SELECT COUNT(*) FROM clima_elegibles WHERE periodo_id = cp.periodo_id) as te,
           (SELECT COUNT(*) FROM clima_respuestas WHERE periodo_id = cp.periodo_id) as tr
    FROM clima_periodos cp
    WHERE empresa_id = ?
    ORDER BY anio DESC
");
$stmt->execute([$empresa_id]);
$periodos = $stmt->fetchAll(PDO::FETCH_ASSOC);

$page_title = 'Publicar Resultados - Clima';
$extra_css = [];

require_once __DIR__ . '/../includes/layout/head.php';
require_once __DIR__ . '/../includes/layout/navbar.php';
require_once __DIR__ . '/../includes/layout/sidebar.php';
require_once __DIR__ . '/../includes/layout/content_open.php';
?>

<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-chart mr-2"></i> <span class="font-weight-semibold">Publicar Resultados</span> - Clima Laboral</h4>
    </div>
  </div>
</div>

<div class="content">

  <?php if ($flash): ?>
    <div class="alert alert-<?php echo h($flash_type); ?> alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
      <?php echo $flash; ?>
    </div>
  <?php endif; ?>

  <div class="card">
        <div class="card-header">
          <h5 class="mb-0">Publicación por Período y Unidad</h5>
        </div>

        <?php if (empty($periodos)): ?>
          <div class="card-body">
            <div class="alert alert-warning">
              No hay períodos. Ejecuta <strong>setup_smart.php</strong>
            </div>
          </div>
        <?php else: ?>
          <form method="POST" class="form-horizontal">
            <input type="hidden" name="action" value="publicar">
            <div class="card-body border-bottom">
              
              <div class="form-group row">
                <label class="col-form-label col-lg-3">Período:</label>
                <div class="col-lg-9">
                  <select name="periodo_id" id="periodo_id" class="form-control" required onchange="cargar()">
                    <option value="">-- Selecciona --</option>
                    <?php foreach ($periodos as $p): ?>
                      <option value="<?php echo h($p['periodo_id']); ?>" <?php echo ($selected_periodo == $p['periodo_id']) ? 'selected' : ''; ?>>
                        Año <?php echo h($p['anio']); ?> - <?php echo h($p['estatus']); ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div id="stats" style="display:none;">
                <div class="row mt-3">
                  <div class="col-md-4">
                    <div class="card bg-light">
                      <div class="card-body text-center">
                        <h4 id="s1">0</h4>
                        <small>Unidades</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card bg-light">
                      <div class="card-body text-center">
                        <h4 id="s2">0</h4>
                        <small>Elegibles</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card bg-light">
                      <div class="card-body text-center">
                        <h4 id="s3">0</h4>
                        <small>Respuestas</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group row mt-4">
                <label class="col-form-label col-lg-3">Unidades:</label>
                <div class="col-lg-9">
                  <div class="mb-2">
                    <button type="button" class="btn btn-sm btn-primary" onclick="todos()" id="btn_todos" style="display:none;">Seleccionar Todas</button>
                    <button type="button" class="btn btn-sm btn-secondary" onclick="ninguna()" id="btn_ninguna" style="display:none;">Limpiar</button>
                  </div>
                  <div id="unidades" style="border:1px solid #ddd; border-radius:4px; padding:12px; background:#f9f9f9; max-height:250px; overflow-y:auto;">
                    <p class="text-muted">Selecciona un período</p>
                  </div>
                </div>
              </div>

            </div>

            <div class="card-footer">
              <button type="submit" name="action" value="publicar" class="btn btn-success" id="btn_pub" disabled>Publicar</button>
              <button type="submit" name="action" value="despublicar" class="btn btn-warning" id="btn_desp" disabled>Despublicar</button>
              <a href="clima_admin.php" class="btn btn-light">Cancelar</a>
            </div>
          </form>
        <?php endif; ?>
  </div>

</div>

<script>
const periodos = <?php echo json_encode($periodos); ?>;

// Auto-reload data if there's a flash message
<?php if ($flash): ?>
window.addEventListener('DOMContentLoaded', function() {
    const periodoSelect = document.getElementById('periodo_id');
    if (periodoSelect && periodoSelect.value) {
        cargar();
    }
});
<?php endif; ?>

function cargar() {
    const id = document.getElementById('periodo_id').value;
    const stats = document.getElementById('stats');
    const unidades = document.getElementById('unidades');
    const btn_todos = document.getElementById('btn_todos');
    const btn_ninguna = document.getElementById('btn_ninguna');
    const btn_pub = document.getElementById('btn_pub');
    const btn_desp = document.getElementById('btn_desp');

    if (!id) {
        stats.style.display = 'none';
        btn_todos.style.display = 'none';
        btn_ninguna.style.display = 'none';
        unidades.innerHTML = '<p class="text-muted">Selecciona un período</p>';
        btn_pub.disabled = true;
        btn_desp.disabled = true;
        document.getElementById('tabla').innerHTML = '<tr><td class="text-muted">-</td></tr>';
        return;
    }

    const per = periodos.find(p => p.periodo_id == id);
    if (per) {
        document.getElementById('s1').textContent = per.tu;
        document.getElementById('s2').textContent = per.te;
        document.getElementById('s3').textContent = per.tr;
        stats.style.display = 'block';
    }

    btn_todos.style.display = 'inline-block';
    btn_ninguna.style.display = 'inline-block';
    btn_pub.disabled = false;
    btn_desp.disabled = false;

    // Cargar unidades
    fetch('get_unidades_clima.php?periodo_id=' + id)
        .then(r => r.json())
        .then(data => {
            let html = '';
            if (!data || data.length === 0) {
                html = '<p class="text-muted">Sin unidades</p>';
            } else {
                data.forEach(u => {
                    const badge = u.publicado == 1 ? '<span class="badge badge-success badge-sm ml-2">Publicado</span>' : '';
                    html += `<div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="u${u.unidad_id}" name="unidades[]" value="${u.unidad_id}">
                        <label class="custom-control-label" for="u${u.unidad_id}">
                            ${u.unidad_nombre} ${badge}
                            <small class="d-block text-muted">Elegibles: ${u.elegibles} | Respuestas: ${u.respuestas}</small>
                        </label>
                    </div>`;
                });
            }
            unidades.innerHTML = html;
        })
        .catch(e => console.error('Error cargando unidades:', e));
}

function todos() {
    document.querySelectorAll('input[name="unidades[]"]').forEach(cb => cb.checked = true);
}

function ninguna() {
    document.querySelectorAll('input[name="unidades[]"]').forEach(cb => cb.checked = false);
}
</script>

<?php
require_once __DIR__ . '/../includes/layout/footer.php';
require_once __DIR__ . '/../includes/layout/content_close.php';
?>
