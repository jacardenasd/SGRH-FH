<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/password_reset.php';

$token = $_GET['token'] ?? '';
$valid = pr_validate_token($token);

$page_title = 'Restablecer contraseña | SGRH';
include __DIR__ . '/../includes/layout/head.php';
?>

<div class="page-content">
  <div class="content-wrapper">
    <div class="content d-flex justify-content-center align-items-center">

      <form class="login-form" method="post" action="resetear_guardar.php" autocomplete="off">
        <div class="card mb-0">
          <div class="card-body">
            <div class="text-center mb-3">
              <h5 class="mb-0">Restablecer contraseña</h5>
            </div>

            <?php if (!$valid): ?>
              <div class="alert alert-danger">
                El enlace no es válido o ya expiró.
              </div>
              <div class="text-center">
                <a href="recuperar_contrasena.php" class="btn btn-primary">Solicitar nuevo enlace</a>
              </div>
            <?php else: ?>
              <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">

              <div class="form-group">
                <input type="password" name="password1" class="form-control" placeholder="Nueva contraseña" required>
                <small class="form-text text-muted">Mínimo 8 caracteres, letras y números.</small>
              </div>

              <div class="form-group">
                <input type="password" name="password2" class="form-control" placeholder="Confirmar contraseña" required>
              </div>

              <button type="submit" class="btn btn-primary btn-block">Guardar</button>
            <?php endif; ?>

          </div>
        </div>
      </form>

    </div>
  </div>
</div>

<?php include __DIR__ . '/../includes/layout/scripts.php'; ?>
