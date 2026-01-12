<?php
// public/admin_usuarios.php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();
require_empresa();
require_password_change_redirect();
require_demograficos_redirect();
require_perm('usuarios.admin');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$empresa_id = (int)$_SESSION['empresa_id'];

// -------------------------
// CSRF token (simple)
// -------------------------
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
}
$csrf_token = $_SESSION['csrf_token'];

// -------------------------
// Helpers
// -------------------------
function h($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}

function bitacora($modulo, $accion, $detalle = null) {
    global $pdo;
    if (session_status() === PHP_SESSION_NONE) session_start();

    $empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : null;
    $usuario_id = isset($_SESSION['usuario_id']) ? (int)$_SESSION['usuario_id'] : null;
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;

    $sql = "INSERT INTO bitacora (empresa_id, usuario_id, modulo, accion, detalle_json, ip)
            VALUES (:empresa_id, :usuario_id, :modulo, :accion, :detalle_json, :ip)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':empresa_id' => $empresa_id,
        ':usuario_id' => $usuario_id,
        ':modulo' => (string)$modulo,
        ':accion' => (string)$accion,
        ':detalle_json' => $detalle !== null ? json_encode($detalle, JSON_UNESCAPED_UNICODE) : null,
        ':ip' => $ip,
    ]);
}

function get_rol_id_empleado() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT rol_id FROM roles WHERE nombre = 'Empleado' AND estatus = 1 LIMIT 1");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row ? (int)$row['rol_id'] : 1;
}

function ensure_min_access($usuario_id, $empresa_id) {
    global $pdo;

    $uid = (int)$usuario_id;
    $eid = (int)$empresa_id;
    $rol_empleado = get_rol_id_empleado();

    // 1) Si no tiene roles, asignar Empleado
    $stmt = $pdo->prepare("SELECT COUNT(*) AS c FROM usuario_roles WHERE usuario_id = :uid");
    $stmt->execute([':uid' => $uid]);
    $has_roles = ((int)$stmt->fetchColumn()) > 0;
    if (!$has_roles) {
        $stmtIns = $pdo->prepare("INSERT INTO usuario_roles (usuario_id, rol_id) VALUES (:uid, :rid)");
        $stmtIns->execute([':uid' => $uid, ':rid' => $rol_empleado]);
    }

    // 2) Asegurar asignación a empresa (y empleado_id si se puede resolver)
    $stmt = $pdo->prepare("SELECT usuario_id FROM usuario_empresas WHERE usuario_id = :uid AND empresa_id = :eid LIMIT 1");
    $stmt->execute([':uid' => $uid, ':eid' => $eid]);
    $has_empresa = (bool)$stmt->fetch(PDO::FETCH_ASSOC);

    if (!$has_empresa) {
        // intentar resolver empleado_id por no_emp + rfc_base en la empresa
        $stmtU = $pdo->prepare("SELECT no_emp, rfc_base FROM usuarios WHERE usuario_id = :uid LIMIT 1");
        $stmtU->execute([':uid' => $uid]);
        $u = $stmtU->fetch(PDO::FETCH_ASSOC);

        $empleado_id = null;
        if ($u) {
            $stmtE = $pdo->prepare("SELECT empleado_id FROM empleados WHERE empresa_id = :eid AND no_emp = :no_emp AND rfc_base = :rfc_base LIMIT 1");
            $stmtE->execute([
                ':eid' => $eid,
                ':no_emp' => $u['no_emp'],
                ':rfc_base' => $u['rfc_base'],
            ]);
            $e = $stmtE->fetch(PDO::FETCH_ASSOC);
            if ($e) {
                $empleado_id = (int)$e['empleado_id'];
            }
        }

        $stmtIns = $pdo->prepare("INSERT INTO usuario_empresas (usuario_id, empresa_id, empleado_id, es_admin, estatus)
                                  VALUES (:uid, :eid, :empleado_id, 0, 1)");
        $stmtIns->execute([
            ':uid' => $uid,
            ':eid' => $eid,
            ':empleado_id' => $empleado_id,
        ]);
    }
}

function reset_password_to_rfc($usuario_id) {
    global $pdo;
    $uid = (int)$usuario_id;

    $stmt = $pdo->prepare("SELECT rfc_base FROM usuarios WHERE usuario_id = :uid LIMIT 1");
    $stmt->execute([':uid' => $uid]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$row) {
        throw new RuntimeException('Usuario no encontrado');
    }

    $new_plain = $row['rfc_base'];
    $hash = password_hash($new_plain, PASSWORD_BCRYPT);

    $upd = $pdo->prepare("UPDATE usuarios
                          SET password_hash = :ph, debe_cambiar_pass = 1, pass_cambiada = 0, updated_at = NOW()
                          WHERE usuario_id = :uid");
    $upd->execute([':ph' => $hash, ':uid' => $uid]);

    return $new_plain;
}

function toggle_usuario_estatus($usuario_id) {
    global $pdo;
    $uid = (int)$usuario_id;
    $stmt = $pdo->prepare("SELECT estatus FROM usuarios WHERE usuario_id = :uid LIMIT 1");
    $stmt->execute([':uid' => $uid]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$row) throw new RuntimeException('Usuario no encontrado');

    $actual = $row['estatus'];
    // alterna entre activo e inactivo (no tocamos baja aquí)
    $nuevo = ($actual === 'activo') ? 'inactivo' : 'activo';
    $upd = $pdo->prepare("UPDATE usuarios SET estatus = :nuevo, updated_at = NOW() WHERE usuario_id = :uid");
    $upd->execute([':nuevo' => $nuevo, ':uid' => $uid]);
    return $nuevo;
}

// -------------------------
// Handle POST actions
// -------------------------
$flash = null;
$flash_type = 'success';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_token = isset($_POST['csrf_token']) ? (string)$_POST['csrf_token'] : '';
    if (!hash_equals($csrf_token, $post_token)) {
        $flash = 'Solicitud inválida (token).';
        $flash_type = 'danger';
    } else {
        $action = isset($_POST['action']) ? (string)$_POST['action'] : '';
        $usuario_id_post = isset($_POST['usuario_id']) ? (int)$_POST['usuario_id'] : 0;

        try {
            $pdo->beginTransaction();

            if ($action === 'ensure_min') {
                ensure_min_access($usuario_id_post, $empresa_id);
                bitacora('admin_usuarios', 'ensure_min', ['usuario_id' => $usuario_id_post, 'empresa_id' => $empresa_id]);
                $flash = 'Accesos mínimos asegurados.';
            } elseif ($action === 'reset_pass') {
                $new_plain = reset_password_to_rfc($usuario_id_post);
                bitacora('admin_usuarios', 'reset_pass', ['usuario_id' => $usuario_id_post]);
                $flash = 'Contraseña reseteada a RFC_BASE: ' . $new_plain;
            } elseif ($action === 'toggle_status') {
                $nuevo = toggle_usuario_estatus($usuario_id_post);
                bitacora('admin_usuarios', 'toggle_status', ['usuario_id' => $usuario_id_post, 'nuevo' => $nuevo]);
                $flash = 'Estatus actualizado a: ' . $nuevo;
            } else {
                $flash = 'Acción no reconocida.';
                $flash_type = 'warning';
            }

            $pdo->commit();
        } catch (Throwable $e) {
            if ($pdo->inTransaction()) $pdo->rollBack();
            $flash = 'Error: ' . $e->getMessage();
            $flash_type = 'danger';
        }
    }
}

// -------------------------
// Filters
// -------------------------
$f_q = isset($_GET['q']) ? trim((string)$_GET['q']) : '';
$f_estatus = isset($_GET['estatus']) ? trim((string)$_GET['estatus']) : '';
$f_rol_id = isset($_GET['rol_id']) ? (int)$_GET['rol_id'] : 0;
$f_solo_asignados = isset($_GET['solo_asignados']) ? (int)$_GET['solo_asignados'] : 1;

// Roles list
$roles_stmt = $pdo->query("SELECT rol_id, nombre FROM roles WHERE estatus = 1 ORDER BY rol_id");
$roles_list = $roles_stmt->fetchAll(PDO::FETCH_ASSOC);

// Users list
$where = [];
$params = [':empresa_id' => $empresa_id];

if ($f_solo_asignados === 1) {
    $where[] = "ue.usuario_id IS NOT NULL";
}

if ($f_estatus !== '' && in_array($f_estatus, ['activo','inactivo','baja'], true)) {
    $where[] = "u.estatus = :estatus";
    $params[':estatus'] = $f_estatus;
}

if ($f_rol_id > 0) {
    $where[] = "EXISTS (SELECT 1 FROM usuario_roles urx WHERE urx.usuario_id = u.usuario_id AND urx.rol_id = :rol_id)";
    $params[':rol_id'] = $f_rol_id;
}

if ($f_q !== '') {
    $where[] = "(
        u.no_emp LIKE :q1 OR
        u.rfc_base LIKE :q2 OR
        CONCAT_WS(' ', u.nombre, u.apellido_paterno, u.apellido_materno) LIKE :q3 OR
        u.correo LIKE :q4
    )";
    $qv = '%' . $f_q . '%';
    $params[':q1'] = $qv;
    $params[':q2'] = $qv;
    $params[':q3'] = $qv;
    $params[':q4'] = $qv;
}

$where_sql = $where ? ('WHERE ' . implode(' AND ', $where)) : '';

$sql = "
    SELECT
        u.usuario_id,
        u.no_emp,
        u.rfc_base,
        u.nombre,
        u.apellido_paterno,
        u.apellido_materno,
        u.correo,
        u.estatus,
        ue.es_admin,
        ue.estatus AS ue_estatus,
        ue.empleado_id,
        GROUP_CONCAT(DISTINCT r.nombre ORDER BY r.rol_id SEPARATOR ', ') AS roles
    FROM usuarios u
    LEFT JOIN usuario_empresas ue
        ON ue.usuario_id = u.usuario_id
       AND ue.empresa_id = :empresa_id
    LEFT JOIN usuario_roles ur
        ON ur.usuario_id = u.usuario_id
    LEFT JOIN roles r
        ON r.rol_id = ur.rol_id
    $where_sql
    GROUP BY u.usuario_id, u.no_emp, u.rfc_base, u.nombre, u.apellido_paterno, u.apellido_materno, u.correo, u.estatus, ue.es_admin, ue.estatus, ue.empleado_id
    ORDER BY u.estatus = 'activo' DESC, u.no_emp ASC
";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

// UI vars
$page_title = 'Administración de usuarios';
$active_menu = 'admin_usuarios';
$extra_css = [
    'global_assets/css/icons/icomoon/styles.min.css',
    'global_assets/css/plugins/tables/datatables/datatables.min.css',
];
$extra_js = [
    'global_assets/js/plugins/tables/datatables/datatables.min.js',
    'global_assets/js/plugins/forms/selects/select2.min.js',
];

require_once __DIR__ . '/../includes/layout/head.php';
require_once __DIR__ . '/../includes/layout/navbar.php';
require_once __DIR__ . '/../includes/layout/sidebar.php';
require_once __DIR__ . '/../includes/layout/content_open.php';
?>

<div class="page-header page-header-light">
    <div class="page-header-content header-elements-lg-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold"><?php echo h($page_title); ?></span></h4>
        </div>
    </div>
    <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?php echo ASSET_BASE; ?>public/dashboard.php" class="breadcrumb-item">
                    <i class="icon-home2 mr-2"></i> Inicio
                </a>
                <span class="breadcrumb-item">Administración</span>
                <span class="breadcrumb-item active">Usuarios</span>
            </div>
        </div>
    </div>
</div>

<div class="content">

    <?php if ($flash): ?>
        <div class="alert alert-<?php echo h($flash_type); ?> alert-styled-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            <?php echo h($flash); ?>
        </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Filtros</h5>
        </div>
        <div class="card-body">
            <form method="get" action="" class="row">
                <div class="col-md-4">
                    <label>Búsqueda</label>
                    <input type="text" class="form-control" name="q" value="<?php echo h($f_q); ?>" placeholder="No. empleado, RFC, nombre, correo">
                </div>
                <div class="col-md-2">
                    <label>Estatus</label>
                    <select class="form-control" name="estatus">
                        <option value="" <?php echo $f_estatus === '' ? 'selected' : ''; ?>>Todos</option>
                        <option value="activo" <?php echo $f_estatus === 'activo' ? 'selected' : ''; ?>>Activo</option>
                        <option value="inactivo" <?php echo $f_estatus === 'inactivo' ? 'selected' : ''; ?>>Inactivo</option>
                        <option value="baja" <?php echo $f_estatus === 'baja' ? 'selected' : ''; ?>>Baja</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Rol</label>
                    <select class="form-control" name="rol_id">
                        <option value="0">Todos</option>
                        <?php foreach ($roles_list as $r): ?>
                            <option value="<?php echo (int)$r['rol_id']; ?>" <?php echo ((int)$r['rol_id'] === $f_rol_id) ? 'selected' : ''; ?>>
                                <?php echo h($r['nombre']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Alcance</label>
                    <select class="form-control" name="solo_asignados">
                        <option value="1" <?php echo $f_solo_asignados === 1 ? 'selected' : ''; ?>>Solo asignados a empresa</option>
                        <option value="0" <?php echo $f_solo_asignados === 0 ? 'selected' : ''; ?>>Todos (incluye no asignados)</option>
                    </select>
                </div>
                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="icon-search4 mr-2"></i> Aplicar
                    </button>
                    <a href="admin_usuarios.php" class="btn btn-light ml-2">Limpiar</a>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Usuarios</h5>
            <div class="header-elements">
                <span class="badge badge-info"><?php echo count($usuarios); ?> registros</span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover" id="tabla_usuarios">
                <thead>
                    <tr>
                        <th>No. Emp</th>
                        <th>RFC</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Roles</th>
                        <th>Asignado a empresa</th>
                        <th>Admin empresa</th>
                        <th>Estatus</th>
                        <th style="width: 220px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $u): ?>
                        <?php
                            $nombre = trim($u['nombre'] . ' ' . $u['apellido_paterno'] . ' ' . $u['apellido_materno']);
                            $asignado = !empty($u['ue_estatus']);
                            $admin_emp = !empty($u['es_admin']);
                        ?>
                        <tr>
                            <td><?php echo h($u['no_emp']); ?></td>
                            <td><?php echo h($u['rfc_base']); ?></td>
                            <td><?php echo h($nombre); ?></td>
                            <td><?php echo h($u['correo']); ?></td>
                            <td><?php echo h($u['roles'] ?: ''); ?></td>
                            <td>
                                <?php if ($asignado): ?>
                                    <span class="badge badge-success">Sí</span>
                                <?php else: ?>
                                    <span class="badge badge-secondary">No</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($admin_emp): ?>
                                    <span class="badge badge-warning">Sí</span>
                                <?php else: ?>
                                    <span class="badge badge-light">No</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($u['estatus'] === 'activo'): ?>
                                    <span class="badge badge-success">Activo</span>
                                <?php elseif ($u['estatus'] === 'inactivo'): ?>
                                    <span class="badge badge-secondary">Inactivo</span>
                                <?php else: ?>
                                    <span class="badge badge-danger">Baja</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <form method="post" action="" class="mr-1">
                                        <input type="hidden" name="csrf_token" value="<?php echo h($csrf_token); ?>">
                                        <input type="hidden" name="action" value="ensure_min">
                                        <input type="hidden" name="usuario_id" value="<?php echo (int)$u['usuario_id']; ?>">
                                        <button type="submit" class="btn btn-outline-primary btn-sm" title="Asegurar accesos mínimos (Rol Empleado + asignación a empresa)">
                                            <i class="icon-shield-check"></i>
                                        </button>
                                    </form>

                                    <form method="post" action="" class="mr-1">
                                        <input type="hidden" name="csrf_token" value="<?php echo h($csrf_token); ?>">
                                        <input type="hidden" name="action" value="reset_pass">
                                        <input type="hidden" name="usuario_id" value="<?php echo (int)$u['usuario_id']; ?>">
                                        <button type="submit" class="btn btn-outline-warning btn-sm" title="Resetear contraseña a RFC_BASE (obliga cambio)">
                                            <i class="icon-key"></i>
                                        </button>
                                    </form>

                                    <form method="post" action="" class="mr-1">
                                        <input type="hidden" name="csrf_token" value="<?php echo h($csrf_token); ?>">
                                        <input type="hidden" name="action" value="toggle_status">
                                        <input type="hidden" name="usuario_id" value="<?php echo (int)$u['usuario_id']; ?>">
                                        <button type="submit" class="btn btn-outline-secondary btn-sm" title="Activar / inactivar usuario">
                                            <i class="icon-sync"></i>
                                        </button>
                                    </form>

                                    <a href="#" class="btn btn-outline-light btn-sm disabled" title="Edición (siguiente entrega)">
                                        <i class="icon-pencil7"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php
require_once __DIR__ . '/../includes/layout/footer.php';
require_once __DIR__ . '/../includes/layout/content_close.php';
?>

<script>
  $(function(){
    if ($.fn.DataTable) {
      $('#tabla_usuarios').DataTable({
        pageLength: 25,
        order: [],
        language: {
          search: 'Buscar:',
          lengthMenu: 'Mostrar _MENU_',
          info: 'Mostrando _START_ a _END_ de _TOTAL_',
          paginate: { previous: 'Anterior', next: 'Siguiente' },
          zeroRecords: 'No se encontraron registros',
          infoEmpty: 'Sin registros'
        }
      });
    }
  });
</script>

<?php require_once __DIR__ . '/../includes/layout/scripts.php'; ?>
