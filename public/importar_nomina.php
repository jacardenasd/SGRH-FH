<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';

require_login();
require_password_change_redirect();
require_demograficos_redirect();
require_empresa();
require_perm('nomina.importar');

if (session_status() === PHP_SESSION_NONE) session_start();

$page_title = 'Importar nómina | SGRH';
include __DIR__ . '/../includes/layout/head.php';
include __DIR__ . '/../includes/layout/navbar.php';
include __DIR__ . '/../includes/layout/sidebar.php';

function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

$warnings = $_SESSION['import_warnings'] ?? null;
if ($warnings !== null) {
    unset($_SESSION['import_warnings']);
}
?>

<div class="page-content">
  <div class="content-wrapper">
    <div class="content">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">Importar layout de nómina</h5>
          <a href="importar_nomina_historial.php" class="btn btn-info btn-sm">
            <i class="icon-list"></i> Ver Historial
          </a>
        </div>
        <div class="card-body">

          <?php if (!empty($_GET['ok']) && $warnings): ?>
            <div class="alert alert-success">
              <h6 class="font-weight-semibold">✓ Importación procesada exitosamente</h6>
              <p class="mb-2">
                <a href="importar_nomina_historial.php" class="alert-link">Ver detalle en historial</a>
              </p>
              <?php if (!empty($warnings['puestos']) || !empty($warnings['adscripciones']) || !empty($warnings['jefes'])): ?>
                <hr class="my-2">
                <h6 class="font-weight-semibold text-warning">⚠ Elementos faltantes detectados:</h6>
                <?php if (!empty($warnings['puestos'])): ?>
                  <div class="mt-2">
                    <strong>Puestos faltantes (<?= count($warnings['puestos']) ?>):</strong>
                    <ul class="mb-2">
                      <?php foreach ($warnings['puestos'] as $puesto => $v): ?>
                        <li class="text-muted"><code><?= h($puesto) ?></code></li>
                      <?php endforeach; ?>
                    </ul>
                    <small class="text-muted">Crea estos puestos en Organización → Puestos y reimporta.</small>
                  </div>
                <?php endif; ?>
                
                <?php if (!empty($warnings['adscripciones'])): ?>
                  <div class="mt-2">
                    <strong>Adscripciones/Departamentos faltantes (<?= count($warnings['adscripciones']) ?>):</strong>
                    <ul class="mb-2">
                      <?php foreach ($warnings['adscripciones'] as $ads => $v): ?>
                        <li class="text-muted"><code><?= h($ads) ?></code></li>
                      <?php endforeach; ?>
                    </ul>
                    <small class="text-muted">Crea estas adscripciones en Organización → Adscripciones y reimporta.</small>
                  </div>
                <?php endif; ?>
                
                <?php if (!empty($warnings['jefes'])): ?>
                  <div class="mt-2">
                    <strong>Jefes no encontrados (<?= count($warnings['jefes']) ?>):</strong>
                    <ul class="mb-2">
                      <?php foreach ($warnings['jefes'] as $jefe => $v): ?>
                        <li class="text-muted"><code><?= h($jefe) ?></code></li>
                      <?php endforeach; ?>
                    </ul>
                    <small class="text-muted">Estos jefes no existen en el sistema. Verifica ortografía o crea los empleados faltantes.</small>
                  </div>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          <?php elseif (!empty($_GET['ok'])): ?>
            <div class="alert alert-success">
              Importación procesada exitosamente. 
              <a href="importar_nomina_historial.php" class="alert-link">Ver detalle en historial</a>
            </div>
          <?php endif; ?>
          
          <?php if (!empty($_GET['err'])): ?>
            <div class="alert alert-danger">Error al procesar importación. Revisa logs.</div>
          <?php endif; ?>

          <form method="post" action="importar_nomina_procesar.php" enctype="multipart/form-data">
            <div class="form-group">
              <label>Archivo Excel (layout nómina)</label>
              <input type="file" name="archivo" class="form-control" accept=".xlsx" required>
            </div>
            <button class="btn btn-primary">Procesar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include __DIR__ . '/../includes/layout/scripts.php'; ?>
