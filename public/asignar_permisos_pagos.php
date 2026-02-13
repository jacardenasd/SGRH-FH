<?php
// Script para asignar permisos del módulo de Pagos a Proveedores
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();

// Verificar si tiene permisos - con fallback
if (function_exists('can')) {
    if (!can('usuarios.admin') && !can('organizacion.admin')) {
        die("❌ No tienes permisos para acceder a esta página. Se requiere permiso de administrador.");
    }
} else {
    // Verificar si es admin por sesión
    if (!isset($_SESSION['usuario_id']) || $_SESSION['usuario_id'] != 1) {
        die("❌ No tienes permisos para acceder a esta página.");
    }
}

echo "<h2>👥 Asignar Permisos - Pagos a Proveedores</h2><hr>";

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_id = isset($_POST['usuario_id']) ? (int)$_POST['usuario_id'] : 0;
    $rol_id = isset($_POST['rol_id']) ? (int)$_POST['rol_id'] : 0;
    $permiso_clave = isset($_POST['permiso_clave']) ? (string)$_POST['permiso_clave'] : '';
    
    if ($usuario_id > 0 && $rol_id > 0) {
        try {
            // Asignar rol al usuario
            $stmt = $pdo->prepare("INSERT IGNORE INTO usuario_roles (usuario_id, rol_id) VALUES (?, ?)");
            $stmt->execute([$usuario_id, $rol_id]);
            
            echo "<div style='padding: 15px; background: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; margin: 15px 0;'>";
            echo "✅ Rol asignado exitosamente al usuario";
            echo "</div>";
        } catch (Exception $e) {
            echo "<div style='padding: 15px; background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px; margin: 15px 0;'>";
            echo "❌ Error: " . htmlspecialchars($e->getMessage());
            echo "</div>";
        }
    }
}

// Obtener todos los usuarios
$stmt = $pdo->query("
    SELECT usuario_id, 
           CONCAT(no_emp, '_', rfc_base) as username,
           CONCAT(nombre, ' ', IFNULL(apellido_paterno,''), ' ', IFNULL(apellido_materno,'')) as nombre_completo,
           correo as email 
    FROM usuarios 
    WHERE estatus = 'activo' 
    ORDER BY nombre, apellido_paterno
");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Obtener roles
$stmt = $pdo->query("SELECT rol_id, nombre, descripcion FROM roles WHERE estatus = 1 ORDER BY nombre");
$roles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Obtener permisos de pagos
$stmt = $pdo->query("SELECT * FROM permisos WHERE clave LIKE 'pagos_proveedores%' ORDER BY clave");
$permisos_pagos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Obtener qué roles tienen qué permisos
$stmt = $pdo->query("
    SELECT r.rol_id, r.nombre as rol_nombre, p.clave as permiso_clave
    FROM rol_permisos rp
    JOIN roles r ON r.rol_id = rp.rol_id
    JOIN permisos p ON p.permiso_id = rp.permiso_id
    WHERE p.clave LIKE 'pagos_proveedores%'
    ORDER BY r.nombre, p.clave
");
$rol_permisos_map = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Obtener qué usuarios tienen qué roles
$stmt = $pdo->query("
    SELECT u.usuario_id, 
           CONCAT(u.no_emp, '_', u.rfc_base) as username,
           CONCAT(u.nombre, ' ', IFNULL(u.apellido_paterno,''), ' ', IFNULL(u.apellido_materno,'')) as nombre_completo,
           r.rol_id, 
           r.nombre as rol_nombre
    FROM usuario_roles ur
    JOIN usuarios u ON u.usuario_id = ur.usuario_id
    JOIN roles r ON r.rol_id = ur.rol_id
    WHERE u.estatus = 'activo'
    ORDER BY u.nombre, u.apellido_paterno, r.nombre
");
$usuario_roles_map = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<style>
    .card { background: white; border: 1px solid #ddd; border-radius: 5px; padding: 20px; margin: 20px 0; }
    .form-group { margin-bottom: 15px; }
    .form-group label { display: block; font-weight: bold; margin-bottom: 5px; }
    .form-control { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
    .search-box { width: 100%; padding: 10px; border: 2px solid #007bff; border-radius: 4px; font-size: 14px; margin-bottom: 10px; background: #f0f8ff; }
    .search-box:focus { outline: none; border-color: #0056b3; background: white; }
    .search-info { font-size: 12px; color: #666; margin-top: 5px; }
    .btn { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; display: inline-block; }
    .btn-primary { background: #007bff; color: white; }
    .btn-success { background: #28a745; color: white; }
    .btn-secondary { background: #6c757d; color: white; }
    table { width: 100%; border-collapse: collapse; margin: 20px 0; }
    th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
    th { background: #f8f9fa; font-weight: bold; }
    .badge { padding: 4px 8px; border-radius: 3px; font-size: 12px; }
    .badge-success { background: #28a745; color: white; }
    .badge-info { background: #17a2b8; color: white; }
    .badge-warning { background: #ffc107; color: black; }
    .badge-primary { background: #007bff; color: white; }
</style>

<!-- Formulario de asignación -->
<div class="card">
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
        <a href="admin_usuarios.php" class="btn btn-secondary">← Volver a Usuarios</a>
    </form>
</div>

<!-- Permisos disponibles -->
<div class="card">
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
            <?php foreach ($permisos_pagos as $p): ?>
                <tr>
                    <td><code><?php echo htmlspecialchars($p['clave']); ?></code></td>
                    <td><?php echo htmlspecialchars($p['descripcion']); ?></td>
                    <td>
                        <?php
                        $explicacion = [
                            'pagos_proveedores.admin' => '👑 Ver todo, crear, editar, eliminar proveedores y pagos',
                            'pagos_proveedores.solicitar' => '📝 Crear solicitudes de pago propias',
                            'pagos_proveedores.autorizar' => '✅ Aprobar/rechazar solicitudes',
                            'pagos_proveedores.pagar' => '💰 Marcar pagos como realizados',
                            'pagos_proveedores.ver' => '👁️ Solo consultar sin modificar'
                        ];
                        echo $explicacion[$p['clave']] ?? '';
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Roles con sus permisos -->
<div class="card">
    <h3>🎭 Roles y sus Permisos de Pagos</h3>
    <table>
        <thead>
            <tr>
                <th>Rol</th>
                <th>Permisos Asignados</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $roles_grouped = [];
            foreach ($rol_permisos_map as $rp) {
                $roles_grouped[$rp['rol_nombre']][] = $rp['permiso_clave'];
            }
            
            foreach ($roles as $rol):
                $permisos_rol = $roles_grouped[$rol['nombre']] ?? [];
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
<div class="card">
    <h3>👥 Usuarios con Acceso al Módulo</h3>
    <table>
        <thead>
            <tr>
                <th>Usuario (Login)</th>
                <th>Nombre Completo</th>
                <th>Roles Asignados</th>
                <th>Permisos de Pagos</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $usuarios_grouped = [];
            foreach ($usuario_roles_map as $ur) {
                $usuarios_grouped[$ur['username']]['roles'][] = $ur['rol_nombre'];
            }
            
            foreach ($usuarios as $usuario):
                $roles_usuario = $usuarios_grouped[$usuario['username']]['roles'] ?? [];
                
                // Obtener permisos del usuario
                $stmt = $pdo->prepare("
                    SELECT DISTINCT p.clave
                    FROM usuario_roles ur
                    JOIN rol_permisos rp ON rp.rol_id = ur.rol_id
                    JOIN permisos p ON p.permiso_id = rp.permiso_id
                    WHERE ur.usuario_id = ?
                    AND p.clave LIKE 'pagos_proveedores%'
                ");
                $stmt->execute([$usuario['usuario_id']]);
                $permisos_usuario = $stmt->fetchAll(PDO::FETCH_COLUMN);
            ?>
                <tr>
                    <td><code><?php echo htmlspecialchars($usuario['username']); ?></code></td>
                    <td>
                        <strong><?php echo htmlspecialchars($usuario['nombre_completo']); ?></strong><br>
                        <small><?php echo htmlspecialchars($usuario['email'] ?? 'Sin email'); ?></small>
                    </td>
                    <td>
                        <?php if (count($roles_usuario) > 0): ?>
                            <?php foreach ($roles_usuario as $rol): ?>
                                <span class="badge badge-info"><?php echo htmlspecialchars($rol); ?></span>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <span class="badge badge-warning">Sin roles</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (count($permisos_usuario) > 0): ?>
                            <?php foreach ($permisos_usuario as $perm): ?>
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
<p><a href="admin_usuarios.php" class="btn btn-secondary">← Volver a Administración de Usuarios</a></p>
<p><a href="admin_pagos_proveedores.php" class="btn btn-success">💰 Ir al Módulo de Pagos</a></p>

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