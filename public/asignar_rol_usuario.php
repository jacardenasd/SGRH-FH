<?php
/**
 * Script para asignar roles a usuarios
 * Uso: Accede desde el navegador y sigue las instrucciones
 */

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();

// Solo admin puede ejecutar esto
if (($_SESSION['usuario_id'] ?? 0) != 1) {
    die("❌ Solo el administrador principal puede ejecutar este script.");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Asignar Rol a Usuario</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: 50px auto; padding: 20px; background: #f5f5f5; }
        .container { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h2 { color: #333; border-bottom: 2px solid #007bff; padding-bottom: 10px; }
        .alert { padding: 15px; margin: 15px 0; border-radius: 5px; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .alert-info { background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #f8f9fa; font-weight: bold; }
        tr:hover { background: #f8f9fa; }
        .form-group { margin: 20px 0; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 5px; }
        .form-control { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px; }
        .search-box { width: 100%; padding: 10px; border: 2px solid #007bff; border-radius: 4px; font-size: 14px; margin-bottom: 10px; background: #f0f8ff; }
        .search-box:focus { outline: none; border-color: #0056b3; background: white; }
        .btn { padding: 12px 24px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; margin-right: 10px; }
        .btn-primary { background: #007bff; color: white; }
        .btn-success { background: #28a745; color: white; }
        .btn:hover { opacity: 0.9; }
        code { background: #f4f4f4; padding: 2px 6px; border-radius: 3px; font-family: monospace; }
        .section { margin: 30px 0; padding: 20px; border: 1px solid #ddd; border-radius: 5px; background: #f9f9f9; }
        .search-info { font-size: 12px; color: #666; margin-top: 5px; }
    </style>
</head>
<body>

<div class="container">
    <h2>👥 Asignar Rol a Usuario</h2>

<?php
// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_id = (int)($_POST['usuario_id'] ?? 0);
    $rol_id = (int)($_POST['rol_id'] ?? 0);
    
    if ($usuario_id > 0 && $rol_id > 0) {
        try {
            // Verificar que el usuario existe
            $stmt = $pdo->prepare("SELECT CONCAT(no_emp, '_', rfc_base) as username, correo as email FROM usuarios WHERE usuario_id = ?");
            $stmt->execute([$usuario_id]);
            $usuario = $stmt->fetch();
            
            if (!$usuario) {
                echo "<div class='alert alert-error'>❌ Error: No existe un usuario con ID $usuario_id</div>";
            } else {
                // Verificar que el rol existe
                $stmt = $pdo->prepare("SELECT nombre FROM roles WHERE rol_id = ?");
                $stmt->execute([$rol_id]);
                $rol = $stmt->fetch();
                
                if (!$rol) {
                    echo "<div class='alert alert-error'>❌ Error: No existe un rol con ID $rol_id</div>";
                } else {
                    // Asignar el rol
                    $stmt = $pdo->prepare("INSERT IGNORE INTO usuario_roles (usuario_id, rol_id) VALUES (?, ?)");
                    $result = $stmt->execute([$usuario_id, $rol_id]);
                    
                    if ($stmt->rowCount() > 0) {
                        echo "<div class='alert alert-success'>";
                        echo "✅ <strong>Rol asignado exitosamente</strong><br>";
                        echo "Usuario: <strong>{$usuario['username']}</strong> ({$usuario['email']})<br>";
                        echo "Rol: <strong>{$rol['nombre']}</strong>";
                        echo "</div>";
                    } else {
                        echo "<div class='alert alert-info'>";
                        echo "ℹ️ El usuario <strong>{$usuario['username']}</strong> ya tenía el rol <strong>{$rol['nombre']}</strong> asignado.";
                        echo "</div>";
                    }
                }
            }
        } catch (Exception $e) {
            echo "<div class='alert alert-error'>❌ Error: " . htmlspecialchars($e->getMessage()) . "</div>";
        }
    } else {
        echo "<div class='alert alert-error'>❌ Debes seleccionar un usuario y un rol</div>";
    }
}

// Obtener datos
$usuarios = $pdo->query("
    SELECT u.usuario_id, 
           CONCAT(u.no_emp, '_', u.rfc_base) as username,
           CONCAT(u.nombre, ' ', IFNULL(u.apellido_paterno,''), ' ', IFNULL(u.apellido_materno,'')) as nombre_completo,
           u.correo as email, 
           u.estatus,
           GROUP_CONCAT(DISTINCT r.nombre) as roles_actuales
    FROM usuarios u
    LEFT JOIN usuario_roles ur ON ur.usuario_id = u.usuario_id
    LEFT JOIN roles r ON r.rol_id = ur.rol_id
    WHERE u.estatus = 'activo'
    GROUP BY u.usuario_id
    ORDER BY u.nombre, u.apellido_paterno
")->fetchAll();

$roles = $pdo->query("
    SELECT rol_id, nombre, descripcion, estatus 
    FROM roles 
    WHERE estatus = 1 
    ORDER BY nombre
")->fetchAll();

$roles_asignados = $pdo->query("
    SELECT ur.usuario_id, ur.rol_id, 
           CONCAT(u.no_emp, '_', u.rfc_base) as username,
           CONCAT(u.nombre, ' ', IFNULL(u.apellido_paterno,''), ' ', IFNULL(u.apellido_materno,'')) as nombre_completo,
           r.nombre as rol_nombre
    FROM usuario_roles ur
    JOIN usuarios u ON u.usuario_id = ur.usuario_id
    JOIN roles r ON r.rol_id = ur.rol_id
    WHERE u.estatus = 'activo'
    ORDER BY u.nombre, u.apellido_paterno, r.nombre
")->fetchAll();
?>

    <!-- Formulario -->
    <div class="section">
        <h3>📝 Asignar Nuevo Rol</h3>
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
                            <?php if ($u['roles_actuales']): ?>
                                - Roles: <?php echo htmlspecialchars($u['roles_actuales']); ?>
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
            <a href="admin_pagos_proveedores.php" class="btn btn-success">💰 Ir a Pagos</a>
        </form>
    </div>

    <!-- Usuarios con sus roles -->
    <div class="section">
        <h3>👥 Usuarios y sus Roles</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario (Login)</th>
                    <th>Nombre Completo</th>
                    <th>Email</th>
                    <th>Roles Asignados</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $grouped_roles = [];
                foreach ($roles_asignados as $ra) {
                    $grouped_roles[$ra['usuario_id']][] = $ra['rol_nombre'];
                }
                
                foreach ($usuarios as $u): 
                    $user_roles = $grouped_roles[$u['usuario_id']] ?? [];
                ?>
                    <tr>
                        <td><?php echo $u['usuario_id']; ?></td>
                        <td><code><?php echo htmlspecialchars($u['username']); ?></code></td>
                        <td><strong><?php echo htmlspecialchars($u['nombre_completo']); ?></strong></td>
                        <td><?php echo htmlspecialchars($u['email'] ?? 'Sin email'); ?></td>
                        <td>
                            <?php if (count($user_roles) > 0): ?>
                                <?php foreach ($user_roles as $role): ?>
                                    <span style="background: #007bff; color: white; padding: 4px 8px; border-radius: 3px; margin: 2px; display: inline-block; font-size: 12px;">
                                        <?php echo htmlspecialchars($role); ?>
                                    </span>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <span style="color: #999;">Sin roles asignados</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Roles disponibles -->
    <div class="section">
        <h3>🎭 Roles Disponibles</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($roles as $r): ?>
                    <tr>
                        <td><?php echo $r['rol_id']; ?></td>
                        <td><strong><?php echo htmlspecialchars($r['nombre']); ?></strong></td>
                        <td><?php echo htmlspecialchars($r['descripcion'] ?? ''); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <hr>
    <p>
        <strong>💡 Opción Manual (SQL):</strong> Si prefieres ejecutar SQL manualmente:
    </p>
    <div style="background: #f4f4f4; padding: 15px; border-radius: 5px; font-family: monospace; font-size: 13px;">
        <code>
        -- 1. Ver usuarios<br>
        SELECT usuario_id, CONCAT(no_emp, '_', rfc_base) as username, correo FROM usuarios WHERE estatus = 'activo';<br><br>
        
        -- 2. Ver roles<br>
        SELECT rol_id, nombre FROM roles WHERE estatus = 1;<br><br>
        
        -- 3. Asignar rol (reemplaza los IDs)<br>
        INSERT IGNORE INTO usuario_roles (usuario_id, rol_id) VALUES (1, 1);<br><br>
        
        -- 4. Verificar<br>
        SELECT CONCAT(u.no_emp, '_', u.rfc_base) as username, r.nombre FROM usuario_roles ur<br>
        JOIN usuarios u ON u.usuario_id = ur.usuario_id<br>
        JOIN roles r ON r.rol_id = ur.rol_id;
        </code>
    </div>

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
