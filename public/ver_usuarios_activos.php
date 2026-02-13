<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();

// Consulta de usuarios activos
try {
    $stmt = $pdo->query("
        SELECT 
            usuario_id,
            CONCAT(no_emp, '_', rfc_base) as username,
            CONCAT(nombre, ' ', IFNULL(apellido_paterno,''), ' ', IFNULL(apellido_materno,'')) as nombre_completo,
            correo as email
        FROM usuarios 
        WHERE estatus = 'activo' 
        ORDER BY nombre, apellido_paterno
    ");
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("<h2>❌ Error en la consulta</h2><p>Error: " . htmlspecialchars($e->getMessage()) . "</p>");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Usuarios Activos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
        .container { max-width: 1000px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h2 { color: #333; border-bottom: 2px solid #007bff; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #007bff; color: white; font-weight: bold; }
        tr:nth-child(even) { background: #f8f9fa; }
        tr:hover { background: #e9ecef; }
        .count { background: #28a745; color: white; padding: 8px 16px; border-radius: 5px; display: inline-block; margin: 10px 0; }
        .btn { padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 4px; display: inline-block; margin: 10px 5px 10px 0; }
        .btn:hover { background: #0056b3; }
        code { background: #f4f4f4; padding: 15px; display: block; border-radius: 5px; margin: 15px 0; border-left: 4px solid #007bff; }
    </style>
</head>
<body>

<div class="container">
    <h2>👥 Usuarios Activos</h2>
    
    <div class="count">
        Total: <?php echo count($usuarios); ?> usuarios activos
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario (Login)</th>
                <th>Nombre Completo</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><strong><?php echo $u['usuario_id']; ?></strong></td>
                    <td><code><?php echo htmlspecialchars($u['username']); ?></code></td>
                    <td><?php echo htmlspecialchars($u['nombre_completo']); ?></td>
                    <td><?php echo htmlspecialchars($u['email'] ?? 'Sin email'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <hr>
    
    <p><strong>Consulta ejecutada:</strong></p>
    <code>SELECT usuario_id, CONCAT(no_emp, '_', rfc_base) as username, CONCAT(nombre, ' ', apellido_paterno, ' ', apellido_materno) as nombre_completo, correo as email FROM usuarios WHERE estatus = 'activo';</code>

    <a href="asignar_rol_usuario.php" class="btn">🎭 Asignar Roles</a>
    <a href="admin_pagos_proveedores.php" class="btn">💰 Módulo Pagos</a>
    <a href="../index.php" class="btn" style="background: #6c757d;">← Inicio</a>
</div>

</body>
</html>
