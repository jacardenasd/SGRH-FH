<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';

require_login();
require_password_change_redirect();
require_empresa();
require_perm('usuarios.admin'); // ajusta a tu permiso real

$page_title = 'Importar nómina | SGRH';
include __DIR__ . '/../includes/layout/head.php';
include __DIR__ . '/../includes/layout/navbar.php';
include __DIR__ . '/../includes/layout/sidebar.php';
?>

<div class="page-content">
  <div class="content-wrapper">
    <div class="content">
      <div class="card">
        <div class="card-header"><h5 class="card-title">Importar layout de nómina</h5></div>
        <div class="card-body">

          <?php if (!empty($_GET['ok'])): ?>
            <div class="alert alert-success">Importación procesada. Revisa el detalle en bitácora.</div>
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
