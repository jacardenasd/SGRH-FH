<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Asignar Permisos - Pagos a Proveedores</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h2, h3 { color: #333; }
        .alert { padding: 15px; margin: 15px 0; border-radius: 5px; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-danger { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 5px; color: #555; }
        .form-control { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px; }
        .btn { padding: 12px 24px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; text-decoration: none; display: inline-block; margin-right: 10px; }
        .btn-primary { background: #007bff; color: white; }
        .btn-success { background: #28a745; color: white; }
        .btn-secondary { background: #6c757d; color: white; }
        .btn:hover { opacity: 0.9; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #f8f9fa; font-weight: bold; }
        tr:hover { background: #f8f9fa; }
        .badge { padding: 4px 8px; border-radius: 3px; font-size: 12px; display: inline-block; margin: 2px; }
        .badge-success { background: #28a745; color: white; }
        .badge-info { background: #17a2b8; color: white; }
        .badge-warning { background: #ffc107; color: black; }
        .badge-primary { background: #007bff; color: white; }
        code { background: #f4f4f4; padding: 2px 6px; border-radius: 3px; font-family: monospace; }
        .section { margin: 30px 0; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .search-box { width: 100%; padding: 10px; border: 2px solid #007bff; border-radius: 4px; font-size: 14px; margin-bottom: 10px; background: #f0f8ff; }
        .search-box:focus { outline: none; border-color: #0056b3; background: white; }
        .search-info { font-size: 12px; color: #666; margin-top: 5px; }
    </style>
</head>
<body>

<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();

// Verificar permisos
$tiene_acceso = false;
if (function_exists('can')) {
    $tiene_acceso = can('usuarios.admin') || can('organizacion.admin');
} else {
    $tiene_acceso = ($_SESSION['usuario_id'] ?? 0) == 1;
}

if (!$tiene_acceso) {
    echo "<div class='container'>";
    echo "<div class='alert alert-danger'>❌ No tienes permisos para acceder a esta página.</div>";
    echo "<a href='../index.php' class='btn btn-secondary'>← Volver al inicio</a>";
    echo "</div></body></html>";
    exit;
}

// Procesar formulario
$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_id = (int)($_POST['usuario_id'] ?? 0);
    $rol_id = (int)($_POST['rol_id'] ?? 0);
    
    if ($usuario_id > 0 && $rol_id > 0) {
        try {
            $stmt = $pdo->prepare("INSERT IGNORE INTO usuario_roles (usuario_id, rol_id) VALUES (?, ?)");
            $stmt->execute([$usuario_id, $rol_id]);
            $mensaje = "<div class='alert alert-success'>✅ Rol asignado exitosamente al usuario</div>";
        } catch (Exception $e) {
            $mensaje = "<div class='alert alert-danger'>❌ Error: " . htmlspecialchars($e->getMessage()) . "</div>";
        }
    }
}

// Obtener datos
$usuarios = $pdo->query("
    SELECT usuario_id, 
           CONCAT(no_emp, '_', rfc_base) as username,
           CONCAT(nombre, ' ', IFNULL(apellido_paterno,''), ' ', IFNULL(apellido_materno,'')) as nombre_completo,
           correo as email 
    FROM usuarios 
    WHERE estatus = 'activo' 
    ORDER BY nombre, apellido_paterno
")->fetchAll();
$roles = $pdo->query("SELECT rol_id, nombre, descripcion FROM roles WHERE estatus = 1 ORDER BY nombre")->fetchAll();
$permisos_pagos = $pdo->query("SELECT * FROM permisos WHERE clave LIKE 'pagos_proveedores%' ORDER BY clave")->fetchAll();

$rol_permisos = $pdo->query("
    SELECT r.rol_id, r.nombre as rol_nombre, p.clave as permiso_clave
    FROM rol_permisos rp
    JOIN roles r ON r.rol_id = rp.rol_id
    JOIN permisos p ON p.permiso_id = rp.permiso_id
    WHERE p.clave LIKE 'pagos_proveedores%'
")->fetchAll();

$usuarios_con_acceso = $pdo->query("
    SELECT u.usuario_id, 
           CONCAT(u.no_emp, '_', u.rfc_base) as username,
           CONCAT(u.nombre, ' ', IFNULL(u.apellido_paterno,''), ' ', IFNULL(u.apellido_materno,'')) as nombre_completo,
           u.correo as email,
           GROUP_CONCAT(DISTINCT r.nombre) as roles,
           GROUP_CONCAT(DISTINCT p.clave) as permisos
    FROM usuarios u
    LEFT JOIN usuario_roles ur ON ur.usuario_id = u.usuario_id
    LEFT JOIN roles r ON r.rol_id = ur.rol_id
    LEFT JOIN rol_permisos rp ON rp.rol_id = r.rol_id
    LEFT JOIN permisos p ON p.permiso_id = rp.permiso_id AND p.clave LIKE 'pagos_proveedores%'
    WHERE u.estatus = 'activo'
    GROUP BY u.usuario_id, u.no_emp, u.rfc_base, u.nombre, u.apellido_paterno, u.apellido_materno, u.correo
    ORDER BY u.nombre, u.apellido_paterno
")->fetchAll();
?>

<div class="container">
    <h2>👥 Asignar Permisos - Pagos a Proveedores</h2>
    <hr>
    
    <?php echo $mensaje; ?>

    <!-- Formulario -->
    <div class="section">
        <h3>📝 Asignar Rol a Usuario</h3>
        <form method="POST">
            <div class="form-group">
                <label>👤 Usuario:</label>
                <input type="text" id="searchUsuario" class="search-box" placeholder="🔍 Buscar usuario por nombre o login..." autocomplete="off">
                <div class="search-info">Escribe para filtrar la lista (Total: <?php echo count($usuarios); ?> usuarios)</div>
                <select name="usuario_id" id="selectUsuario" class="form-control" required size="8">
                    <option value="">Seleccionar usuario...</option>
                    <?php foreach ($usuarios as $u): ?>
                        <option value="<?php echo $u['usuario_id']; ?>">
                            <?php echo htmlspecialchars($u['username']); ?> - 
                            <?php echo htmlspecialchars($u['nombre_completo']); ?>
                            <?php if ($u['email']): ?>
                                (<?php echo htmlspecialchars($u['email']); ?>)
                            <?php endif; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label>🎭 Rol:</label>
                <select name="rol_id" class="form-control" required>
                    <option value="">Seleccionar rol...</option>
                    <?php foreach ($roles as $r): ?>
                        <option value="<?php echo $r['rol_id']; ?>">
                            <?php echo htmlspecialchars($r['nombre']); ?>
                            <?php if ($r['descripcion']): ?>
                                - <?php echo htmlspecialchars($r['descripcion']); ?>
                            <?php endif; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">✅ Asignar Rol</button>
            <a href="admin_pagos_proveedores.php" class="btn btn-success">💰 Ir al Módulo de Pagos</a>
        </form>
    </div>

    <!-- Permisos -->
    <div class="section">
        <h3>🔐 Permisos del Módulo de Pagos</h3>
        <table>
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Descripción</th>
                    <th>¿Qué permite?</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $explicaciones = [
                    'pagos_proveedores.admin' => '👑 Control total: crear, editar, eliminar todo',
                    'pagos_proveedores.solicitar' => '📝 Crear solicitudes de pago propias',
                    'pagos_proveedores.autorizar' => '✅ Aprobar/rechazar solicitudes',
                    'pagos_proveedores.pagar' => '💰 Marcar pagos como realizados',
                    'pagos_proveedores.ver' => '👁️ Solo consultar, sin modificar'
                ];
                foreach ($permisos_pagos as $p):
                ?>
                    <tr>
                        <td><code><?php echo htmlspecialchars($p['clave']); ?></code></td>
                        <td><?php echo htmlspecialchars($p['descripcion']); ?></td>
                        <td><?php echo $explicaciones[$p['clave']] ?? ''; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Roles con permisos -->
    <div class="section">
        <h3>🎭 Roles con Permisos de Pagos</h3>
        <table>
            <thead>
                <tr>
                    <th>Rol</th>
                    <th>Permisos Asignados</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $roles_map = [];
                foreach ($rol_permisos as $rp) {
                    $roles_map[$rp['rol_nombre']][] = $rp['permiso_clave'];
                }
                
                foreach ($roles as $rol):
                    $permisos_rol = $roles_map[$rol['nombre']] ?? [];
                ?>
                    <tr>
                        <td><strong><?php echo htmlspecialchars($rol['nombre']); ?></strong></td>
                        <td>
                            <?php if (count($permisos_rol) > 0): ?>
                                <?php foreach ($permisos_rol as $perm): ?>
                                    <span class="badge badge-success"><?php echo htmlspecialchars($perm); ?></span>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <span class="badge badge-warning">Sin permisos de pagos</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Usuarios con acceso -->
    <div class="section">
        <h3>👥 Usuarios con Acceso al Módulo</h3>
        <table>
            <thead>
                <tr>
                    <th>Usuario (Login)</th>
                    <th>Nombre Completo</th>
                    <th>Roles</th>
                    <th>Permisos de Pagos</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios_con_acceso as $u): ?>
                    <tr>
                        <td><code><?php echo htmlspecialchars($u['username']); ?></code></td>
                        <td>
                            <strong><?php echo htmlspecialchars($u['nombre_completo']); ?></strong><br>
                            <small><?php echo htmlspecialchars($u['email'] ?? 'Sin email'); ?></small>
                        </td>
                        <td>
                            <?php if ($u['roles']): ?>
                                <?php foreach (explode(',', $u['roles']) as $rol): ?>
                                    <span class="badge badge-info"><?php echo htmlspecialchars($rol); ?></span>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <span class="badge badge-warning">Sin roles</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($u['permisos']): ?>
                                <?php foreach (explode(',', $u['permisos']) as $perm): ?>
                                    <span class="badge badge-primary"><?php echo htmlspecialchars($perm); ?></span>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <span style="color: #999;">Sin acceso</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <hr>
    <p>
        <a href="admin_pagos_proveedores.php" class="btn btn-success">💰 Ir al Módulo de Pagos</a>
        <a href="../index.php" class="btn btn-secondary">← Volver al inicio</a>
    </p>
</div>

<script>
// Buscador de usuarios
const searchUsuario = document.getElementById('searchUsuario');
const selectUsuario = document.getElementById('selectUsuario');
const allOptions = Array.from(selectUsuario.options);

searchUsuario.addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    
    // Guardar la opción seleccionada
    const selectedValue = selectUsuario.value;
    
    // Limpiar select
    selectUsuario.innerHTML = '';
    
    // Filtrar y agregar opciones
    let count = 0;
    allOptions.forEach(option => {
        const optionText = option.textContent.toLowerCase();
        if (optionText.includes(searchTerm)) {
            selectUsuario.appendChild(option.cloneNode(true));
            count++;
        }
    });
    
    // Restaurar selección si existe
    if (selectedValue) {
        selectUsuario.value = selectedValue;
    }
    
    // Ajustar el tamaño del select según resultados
    selectUsuario.size = Math.min(Math.max(count, 3), 15);
});

// Al seleccionar, limpiar búsqueda y cerrar
selectUsuario.addEventListener('change', function() {
    if (this.value) {
        selectUsuario.size = 1;
    }
});

// Al hacer clic en el buscador, abrir lista
searchUsuario.addEventListener('focus', function() {
    selectUsuario.size = 8;
});
</script>

</body>
</html>
