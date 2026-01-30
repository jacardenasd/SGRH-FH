<?php
// public/admin_usuarios.php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/permisos_config.php';
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
    // Reset por admin: usar No. empleado si existe; de lo contrario, RFC base.
    global $pdo;
    $uid = (int)$usuario_id;

    $stmt = $pdo->prepare("SELECT no_emp, rfc_base FROM usuarios WHERE usuario_id = :uid LIMIT 1");
    $stmt->execute([':uid' => $uid]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$row) {
        throw new RuntimeException('Usuario no encontrado');
    }

    // Preferir no_emp; si viene vacío, usa rfc_base.
    $new_plain = !empty($row['no_emp']) ? $row['no_emp'] : $row['rfc_base'];
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

function toggle_usuario_admin($usuario_id, $empresa_id) {
    global $pdo;
    $uid = (int)$usuario_id;
    $eid = (int)$empresa_id;

    // Asegurar registro en usuario_empresas
    ensure_min_access($uid, $eid);

    $stmt = $pdo->prepare("SELECT es_admin FROM usuario_empresas WHERE usuario_id = :uid AND empresa_id = :eid LIMIT 1");
    $stmt->execute([':uid' => $uid, ':eid' => $eid]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $actual = $row ? (int)$row['es_admin'] : 0;
    $nuevo = $actual === 1 ? 0 : 1;

    $upd = $pdo->prepare("UPDATE usuario_empresas SET es_admin = :nuevo WHERE usuario_id = :uid AND empresa_id = :eid");
    $upd->execute([':nuevo' => $nuevo, ':uid' => $uid, ':eid' => $eid]);

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
                $flash = 'Contraseña reseteada al No. empleado (o RFC base si faltaba): ' . $new_plain;
            } elseif ($action === 'toggle_admin') {
                $nuevo = toggle_usuario_admin($usuario_id_post, $empresa_id);
                bitacora('admin_usuarios', 'toggle_admin', ['usuario_id' => $usuario_id_post, 'nuevo' => $nuevo, 'empresa_id' => $empresa_id]);
                $flash = 'Permiso de admin empresa: ' . ($nuevo ? 'Habilitado' : 'Deshabilitado');
            } elseif ($action === 'toggle_status') {
                $nuevo = toggle_usuario_estatus($usuario_id_post);
                bitacora('admin_usuarios', 'toggle_status', ['usuario_id' => $usuario_id_post, 'nuevo' => $nuevo]);
                $flash = 'Estatus actualizado a: ' . $nuevo;
            } elseif ($action === 'update_roles') {
                $roles_sel = isset($_POST['roles']) && is_array($_POST['roles']) ? array_map('intval', $_POST['roles']) : [];

                // Limpiar roles actuales
                $del = $pdo->prepare("DELETE FROM usuario_roles WHERE usuario_id = :uid");
                $del->execute([':uid' => $usuario_id_post]);

                // Insertar roles seleccionados
                if (!empty($roles_sel)) {
                    $ins = $pdo->prepare("INSERT INTO usuario_roles (usuario_id, rol_id) VALUES (:uid, :rid)");
                    foreach ($roles_sel as $rid) {
                        $ins->execute([':uid' => $usuario_id_post, ':rid' => (int)$rid]);
                    }
                }

                // Asegurar mínimo acceso (agrega Empleado si quedó sin roles)
                ensure_min_access($usuario_id_post, $empresa_id);

                bitacora('admin_usuarios', 'update_roles', ['usuario_id' => $usuario_id_post, 'roles' => $roles_sel]);
                $flash = 'Roles actualizados.';
            } elseif ($action === 'update_alcance_usuario') {
                $unidades_sel = isset($_POST['unidades_permitidas']) && is_array($_POST['unidades_permitidas']) ? array_map('intval', $_POST['unidades_permitidas']) : [];
                $adscripciones_sel = isset($_POST['adscripciones_permitidas']) && is_array($_POST['adscripciones_permitidas']) ? array_map('intval', $_POST['adscripciones_permitidas']) : [];

                // Guardar alcance en campo JSON en tabla usuarios
                $alcance_data = [
                    'unidades_permitidas' => $unidades_sel,
                    'adscripciones_permitidas' => $adscripciones_sel
                ];
                
                $update = $pdo->prepare("UPDATE usuarios SET permisos_especiales = :alcance WHERE usuario_id = :uid");
                $update->execute([
                    ':alcance' => json_encode($alcance_data, JSON_UNESCAPED_UNICODE),
                    ':uid' => $usuario_id_post
                ]);

                bitacora('admin_usuarios', 'update_alcance', ['usuario_id' => $usuario_id_post, 'unidades' => $unidades_sel, 'adscripciones' => $adscripciones_sel]);
                $flash = 'Alcance organizacional actualizado correctamente.';
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

// Obtener permisos disponibles del sistema
$permisos_disponibles = get_permisos_disponibles();

// Obtener unidades para filtros
$unidades_stmt = $pdo->prepare("SELECT unidad_id, nombre FROM org_unidades WHERE empresa_id = :empresa_id AND estatus = 1 ORDER BY nombre");
$unidades_stmt->execute([':empresa_id' => $empresa_id]);
$unidades_lista = $unidades_stmt->fetchAll(PDO::FETCH_ASSOC);

// Obtener adscripciones para filtros de alcance
$adscripciones_stmt = $pdo->prepare("SELECT a.adscripcion_id, a.nombre, a.unidad_id, u.nombre AS unidad_nombre 
                                      FROM org_adscripciones a 
                                      INNER JOIN org_unidades u ON u.unidad_id = a.unidad_id
                                      WHERE a.empresa_id = :empresa_id AND a.estatus = 1 
                                      ORDER BY u.nombre, a.nombre");
$adscripciones_stmt->execute([':empresa_id' => $empresa_id]);
$adscripciones_lista = $adscripciones_stmt->fetchAll(PDO::FETCH_ASSOC);

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
        GROUP_CONCAT(DISTINCT r.nombre ORDER BY r.rol_id SEPARATOR ', ') AS roles,
        GROUP_CONCAT(DISTINCT r.rol_id ORDER BY r.rol_id SEPARATOR ',') AS roles_ids
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
                <a href="<?php echo ASSET_BASE; ?>public/index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Inicio</a>
                <span class="breadcrumb-item">Administración</span>
                <span class="breadcrumb-item active">Usuarios</span>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Filtros de búsqueda</h6>
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
</div>

<div class="content">
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

                                    <button type="button"
                                            class="btn btn-outline-warning btn-sm mr-1 btn-reset-pass"
                                            data-user-id="<?php echo (int)$u['usuario_id']; ?>"
                                            data-user-name="<?php echo h($nombre); ?>"
                                            title="Restablecer contraseña (confirmación requerida)">
                                        <i class="icon-key"></i>
                                    </button>

                                    <!-- Admin empresa: toggle directo -->
                                    <form method="post" action="" class="mr-1">
                                        <input type="hidden" name="csrf_token" value="<?php echo h($csrf_token); ?>">
                                        <input type="hidden" name="action" value="toggle_admin">
                                        <input type="hidden" name="usuario_id" value="<?php echo (int)$u['usuario_id']; ?>">
                                        <button type="submit" class="btn btn-outline-warning btn-sm" title="Activar / inactivar admin empresa">
                                            <i class="icon-crown"></i>
                                        </button>
                                    </form>

                                    <button type="button"
                                            class="btn btn-outline-success btn-sm mr-1 btn-roles"
                                            data-user-id="<?php echo (int)$u['usuario_id']; ?>"
                                            data-user-name="<?php echo h($nombre); ?>"
                                            data-role-ids="<?php echo h($u['roles_ids']); ?>"
                                            title="Asignar/Quitar roles">
                                      <i class="icon-list2"></i> Roles
                                    </button>

                                    <button type="button"
                                            class="btn btn-outline-info btn-sm mr-1 btn-alcance"
                                            data-user-id="<?php echo (int)$u['usuario_id']; ?>"
                                            data-user-name="<?php echo h($nombre); ?>"
                                            title="Gestionar alcance organizacional">
                                      <i class="icon-tree7"></i> Alcance
                                    </button>

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

<!-- Modal: Roles de usuario -->
<div id="modal_roles" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="post" action="">
                <input type="hidden" name="csrf_token" value="<?php echo h($csrf_token); ?>">
                <input type="hidden" name="action" value="update_roles">
                <input type="hidden" name="usuario_id" id="roles_usuario_id" value="">

                <div class="modal-header">
                    <h5 class="modal-title">Roles de <span id="roles_usuario_nombre" class="font-weight-semibold"></span></h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <?php if (!empty($roles_list)): ?>
                        <?php foreach ($roles_list as $rol): ?>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input chk-rol" name="roles[]" value="<?php echo (int)$rol['rol_id']; ?>">
                                    <?php echo h($rol['nombre']); ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="alert alert-warning mb-0">No hay roles configurados.</div>
                    <?php endif; ?>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar roles</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal: Alcance Organizacional -->
<div id="modal_alcance" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="post" action="" id="form_alcance">
                <input type="hidden" name="csrf_token" value="<?php echo h($csrf_token); ?>">
                <input type="hidden" name="action" value="update_alcance_usuario">
                <input type="hidden" name="usuario_id" id="alcance_usuario_id" value="">

                <div class="modal-header bg-teal text-white">
                    <h5 class="modal-title"><i class="icon-tree7 mr-2"></i>Alcance de <span id="alcance_usuario_nombre" class="font-weight-semibold"></span></h5>
                    <button type="button" class="close text-white" data-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-info">
                        <i class="icon-info22 mr-2"></i>
                        Define qué unidades y departamentos puede ver/administrar este usuario.
                        <strong>Si no seleccionas nada, podrá ver TODO de su empresa.</strong>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-semibold"><i class="icon-office mr-2"></i>Unidades</label>
                                <select name="unidades_permitidas[]" id="alcance_unidades" class="form-control" multiple size="8">
                                    <?php foreach ($unidades_lista as $unidad): ?>
                                        <option value="<?php echo (int)$unidad['unidad_id']; ?>"><?php echo h($unidad['nombre']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-muted">
                                    Vacío = todas las unidades. Ctrl+clic para múltiples.
                                </small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-semibold"><i class="icon-tree6 mr-2"></i>Departamentos</label>
                                <select name="adscripciones_permitidas[]" id="alcance_adscripciones" class="form-control" multiple size="8">
                                    <?php foreach ($adscripciones_lista as $adsc): ?>
                                        <option value="<?php echo (int)$adsc['adscripcion_id']; ?>">
                                            <?php echo h($adsc['unidad_nombre'] . ' - ' . $adsc['nombre']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-muted">
                                    Vacío = todos los departamentos. Ctrl+clic para múltiples.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-teal"><i class="icon-checkmark3 mr-2"></i>Guardar alcance</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal: Confirmar reseteo de contraseña -->
<div id="modal_reset_pass" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="post" action="" id="form_reset_pass">
                <input type="hidden" name="csrf_token" value="<?php echo h($csrf_token); ?>">
                <input type="hidden" name="action" value="reset_pass">
                <input type="hidden" name="usuario_id" id="reset_usuario_id" value="">

                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title"><i class="icon-key mr-2"></i>Restablecer contraseña</h5>
                    <button type="button" class="close text-white" data-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <p class="mb-2">La contraseña se restablecerá al <strong>No. empleado</strong> o, si no existe, al <strong>RFC base</strong> del usuario.</p>
                    <p class="mb-0">El usuario deberá cambiarla al iniciar sesión.</p>
                    <div class="alert alert-warning mt-3 mb-0">
                        <i class="icon-info22 mr-2"></i>
                        Usuario: <span id="reset_usuario_nombre" class="font-weight-semibold"></span>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning" id="btn_reset_confirm">
                        <i class="icon-checkmark3 mr-2"></i>Sí, restablecer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(function() {
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

        // Asegurar que los modales arranquen ocultos
        $('#modal_roles, #modal_alcance, #modal_reset_pass').modal({ show: false });

        // Abrir modal de roles
        $(document).on('click', '.btn-roles', function() {
            var uid = $(this).data('user-id');
            var uname = $(this).data('user-name');
            var roles = ($(this).data('role-ids') || '').toString();
            var arr = roles ? roles.split(',') : [];

            $('#roles_usuario_id').val(uid);
            $('#roles_usuario_nombre').text(uname);

            $('.chk-rol').prop('checked', false);
            arr.forEach(function(r) {
                $('.chk-rol[value="' + r + '"]').prop('checked', true);
            });

            $('#modal_roles').modal('show');
        });

        // Abrir modal de alcance
        $(document).on('click', '.btn-alcance', function() {
            var uid = $(this).data('user-id');
            var uname = $(this).data('user-name');

            $('#alcance_usuario_id').val(uid);
            $('#alcance_usuario_nombre').text(uname);

            // Resetear selects
            $('#alcance_unidades').val([]);
            $('#alcance_adscripciones').val([]);

            // Cargar alcance actual del usuario via AJAX
            $.ajax({
                url: 'ajax_get_usuario_permisos.php',
                method: 'GET',
                data: { usuario_id: uid },
                dataType: 'json',
                success: function(data) {
                    if (data.unidades_permitidas && Array.isArray(data.unidades_permitidas)) {
                        $('#alcance_unidades').val(data.unidades_permitidas);
                    }
                    if (data.adscripciones_permitidas && Array.isArray(data.adscripciones_permitidas)) {
                        $('#alcance_adscripciones').val(data.adscripciones_permitidas);
                    }
                },
                error: function() {
                    console.log('No se pudo cargar el alcance actual');
                }
            });

            $('#modal_alcance').modal('show');
        });

        // Abrir modal de confirmación para reseteo de contraseña
        $(document).on('click', '.btn-reset-pass', function() {
            var uid = $(this).data('user-id');
            var uname = $(this).data('user-name');

            $('#reset_usuario_id').val(uid);
            $('#reset_usuario_nombre').text(uname);

            $('#modal_reset_pass').modal('show');
        });
    });
</script>

<?php require_once __DIR__ . '/../includes/layout/scripts.php'; ?>
