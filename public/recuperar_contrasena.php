<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/password_reset.php';
require_once __DIR__ . '/../includes/csrf.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$mensaje = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  csrf_validate();
    $rfc = $_POST['rfc'] ?? '';
    $no_emp = $_POST['no_emp'] ?? '';

    $u = pr_find_user_by_rfc_noemp($rfc, $no_emp);

  if ($u && $u['estatus'] === 'activo') {
    list($okReset, $msgReset) = pr_reset_to_no_emp((int)$u['usuario_id'], $no_emp);
    if ($okReset) {
      $mensaje = 'Contraseña restablecida a tu número de empleado. Inicia sesión y cámbiala de inmediato.';
    } else {
      $error = 'No se pudo restablecer la contraseña: ' . $msgReset;
    }
  } else {
    // Respuesta genérica (anti-enumeración)
    $mensaje = 'Si la información es correcta, tu contraseña ha sido restablecida a tu número de empleado.';
  }
}

$page_title = 'Recuperar contraseña | SGRH';
include __DIR__ . '/../includes/layout/head.php';
?>

<style>
  .login-bg {
    background: linear-gradient(135deg, rgba(15, 23, 42, 0.65), rgba(15, 118, 110, 0.65)),
                url('<?php echo ASSET_BASE; ?>global_assets/images/backgrounds/user_bg1.png') center center / cover no-repeat;
    min-height: 100vh;
  }
  .login-card {
    box-shadow: 0 12px 45px rgba(0, 0, 0, 0.25);
    border: 0;
  }
</style>

<div class="page-content">
  <div class="content-wrapper">
    <div class="content d-flex justify-content-center align-items-center login-bg">

      <form class="login-form" method="post" autocomplete="off">
        <?php csrf_input(); ?>
        <div class="card mb-0">
          <div class="card-body">
            <div class="text-center mb-3">
              <h5 class="mb-0">Recuperar contraseña</h5>
              <span class="d-block text-muted">Ingresa RFC (sin homoclave) y No. empleado</span>
            </div>

            <?php if ($error): ?>
              <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <?php if ($mensaje): ?>
              <div class="alert alert-success"><?php echo htmlspecialchars($mensaje); ?></div>
            <?php endif; ?>

            <div class="form-group">
              <input type="text" name="rfc" class="form-control" placeholder="RFC (10)" maxlength="10" style="text-transform: uppercase;" autocomplete="off" required>
            </div>

            <div class="form-group">
              <input type="text" name="no_emp" class="form-control" placeholder="No. empleado" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Restablecer contraseña</button>

            <div class="text-center mt-3">
              <a href="login.php">Volver al login</a>
            </div>

          </div>
        </div>
      </form>

    </div>
  </div>
</div>

<?php include __DIR__ . '/../includes/layout/scripts.php'; ?>
