<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';

require_login();

// NOTA: sin ?? (compatibilidad)
$empresas = isset($_SESSION['empresas']) ? $_SESSION['empresas'] : [];
$error = '';

if (count($empresas) === 0) {
    $error = 'No tienes empresas asignadas. Contacta al administrador.';
}

// helper: obtiene empleado_id por usuario + empresa desde usuario_empresas
function obtener_empleado_id_por_empresa($pdo, $usuario_id, $empresa_id) {
    $stmt = $pdo->prepare("
        SELECT empleado_id
        FROM usuario_empresas
        WHERE usuario_id = :usuario_id
          AND empresa_id = :empresa_id
          AND estatus = 1
        LIMIT 1
    ");
    $stmt->execute([
        ':usuario_id' => (int)$usuario_id,
        ':empresa_id' => (int)$empresa_id
    ]);
    $val = $stmt->fetchColumn();
    return $val ? (int)$val : null;
}

// Validar que exista la conexión ($pdo) desde auth.php (incluido por guard.php)
if (!isset($pdo)) {
    // Si tu conexión tiene otro nombre, ajusta aquí.
    // Pero por estándar, auth.php debería dejar $pdo disponible.
    // No detenemos la página si solo va a renderizar, pero sí si va a guardar selección.
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && count($empresas) > 0) {

    $empresa_id = isset($_POST['empresa_id']) ? (int)$_POST['empresa_id'] : 0;

    $found = null;
    foreach ($empresas as $e) {
        if ((int)$e['empresa_id'] === $empresa_id) {
            $found = $e;
            break;
        }
    }

    if (!$found) {
        $error = 'Empresa no válida.';
    } else {

        $_SESSION['empresa_id'] = (int)$found['empresa_id'];
        $_SESSION['empresa_nombre'] = $found['nombre'];
        $_SESSION['empresa_alias'] = $found['alias'];
        $_SESSION['es_admin_empresa'] = (int)$found['es_admin'];

        // NUEVO: setear empleado_id por empresa seleccionada (modelo multi-empresa)
        if (!isset($pdo)) {
            $error = 'No se pudo establecer el empleado por empresa: falta conexión ($pdo). Revisa includes/auth.php.';
        } else {
            $empleado_id = obtener_empleado_id_por_empresa($pdo, (int)$_SESSION['usuario_id'], (int)$_SESSION['empresa_id']);
            $_SESSION['empleado_id'] = $empleado_id; // puede ser NULL si no está vinculado
        }

        // Cargar permisos (manteniendo tu diseño)
        cargar_permisos_sesion((int)$_SESSION['usuario_id']);

        // Si quieres forzar que siempre exista empleado_id, descomenta:
        /*
        if (empty($_SESSION['empleado_id'])) {
            $error = 'Tu usuario no está vinculado a un empleado para esta empresa. Contacta al administrador.';
        } else {
            header('Location: index.php');
            exit;
        }
        */

        if (!$error) {
            header('Location: index.php');
            exit;
        }
    }
}

// Auto-selección si solo hay una empresa y aún no hay empresa activa
if (count($empresas) === 1 && empty($_SESSION['empresa_id'])) {

    $_SESSION['empresa_id'] = (int)$empresas[0]['empresa_id'];
    $_SESSION['empresa_nombre'] = $empresas[0]['nombre'];
    $_SESSION['empresa_alias'] = $empresas[0]['alias'];
    $_SESSION['es_admin_empresa'] = (int)$empresas[0]['es_admin'];

    // NUEVO: empleado_id por empresa (modelo multi-empresa)
    if (isset($pdo)) {
        $empleado_id = obtener_empleado_id_por_empresa($pdo, (int)$_SESSION['usuario_id'], (int)$_SESSION['empresa_id']);
        $_SESSION['empleado_id'] = $empleado_id;
    } else {
        $_SESSION['empleado_id'] = null;
    }

    cargar_permisos_sesion((int)$_SESSION['usuario_id']);

    header('Location: index.php');
    exit;
}

$page_title = 'Seleccionar empresa | SGRH';
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

      <form class="login-form" method="post">
        <div class="card mb-0">
          <div class="card-body">
            <div class="text-center mb-3">
              <h5 class="mb-0">Selecciona empresa</h5>
              <span class="d-block text-muted">Razón social para operar en el sistema</span>
            </div>

            <?php if ($error): ?>
              <div class="alert alert-danger"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
            <?php endif; ?>

            <div class="form-group">
              <select name="empresa_id" class="form-control" required>
                <option value="">-- Selecciona --</option>
                <?php foreach ($empresas as $e): ?>
                  <option value="<?php echo (int)$e['empresa_id']; ?>">
                    <?php
                      $label = !empty($e['alias']) ? $e['alias'] : $e['nombre'];
                      echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8');
                    ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Continuar</button>

          </div>
        </div>
      </form>

    </div>
  </div>
</div>

<?php include __DIR__ . '/../includes/layout/scripts.php'; ?>
