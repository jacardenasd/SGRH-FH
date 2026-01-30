<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/auth.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/csrf.php';
require_login();

$mensaje = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  csrf_validate();
    $p1 = $_POST['password1'] ?? '';
    $p2 = $_POST['password2'] ?? '';

    if ($p1 !== $p2) {
        $error = 'Las contraseñas no coinciden.';
    } else {
        list($ok, $msg) = cambiar_password($_SESSION['usuario_id'], $p1);
        if ($ok) {
            // Si falta empresa, mandar a selector; si no, dashboard
            if (empty($_SESSION['empresa_id'])) {
                header('Location: seleccionar_empresa.php');
                exit;
            }
            header('Location: dashboard.php');
            exit;
        } else {
            $error = $msg;
        }
    }
}

$page_title = 'Cambiar contraseña | SGRH';
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
        <div class="card mb-0 login-card">
          <div class="card-body">
            <div class="text-center mb-3">
              <h5 class="mb-0">Cambio de contraseña</h5>
              <span class="d-block text-muted">Es obligatorio en tu primer acceso</span>
            </div>

            <?php if ($error): ?>
              <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <div class="form-group form-group-feedback form-group-feedback-left">
              <input type="password" name="password1" class="form-control" placeholder="Nueva contraseña" required>
              <div class="form-control-feedback"><i class="icon-lock2 text-muted"></i></div>
              <small class="form-text text-muted">Mínimo 8 caracteres, letras y números.</small>
            </div>

            <div class="form-group form-group-feedback form-group-feedback-left">
              <input type="password" name="password2" class="form-control" placeholder="Confirmar contraseña" required>
              <div class="form-control-feedback"><i class="icon-lock2 text-muted"></i></div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Guardar</button>
            </div>

          </div>
        </div>
      </form>

    </div>
  </div>
</div>

<?php include __DIR__ . '/../includes/layout/scripts.php'; ?>
