<?php
/**
 * ajax_get_usuario_permisos.php
 * Obtiene el alcance organizacional de un usuario (unidades y departamentos permitidos)
 */

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();
require_empresa();
require_perm('usuarios.admin');

header('Content-Type: application/json; charset=utf-8');

$usuario_id = isset($_GET['usuario_id']) ? (int)$_GET['usuario_id'] : 0;
$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 0;

if ($usuario_id <= 0 || $empresa_id <= 0) {
    echo json_encode(['error' => 'Parámetros inválidos'], JSON_UNESCAPED_UNICODE);
    exit;
}

try {
    // Nota: la tabla `usuarios` no tiene `empresa_id`; el alcance se guarda por usuario.
    $stmt = $pdo->prepare("SELECT permisos_especiales FROM usuarios WHERE usuario_id = :uid LIMIT 1");
    $stmt->execute([':uid' => $usuario_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$user) {
        echo json_encode(['error' => 'Usuario no encontrado'], JSON_UNESCAPED_UNICODE);
        exit;
    }
    
    $alcance_data = [];
    if (!empty($user['permisos_especiales'])) {
        $alcance_data = json_decode($user['permisos_especiales'], true);
        if (!is_array($alcance_data)) {
            $alcance_data = [];
        }
    }
    
    $response = [
        'unidades_permitidas' => isset($alcance_data['unidades_permitidas']) && is_array($alcance_data['unidades_permitidas']) ? $alcance_data['unidades_permitidas'] : [],
        'adscripciones_permitidas' => isset($alcance_data['adscripciones_permitidas']) && is_array($alcance_data['adscripciones_permitidas']) ? $alcance_data['adscripciones_permitidas'] : []
    ];
    
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    
} catch (Exception $e) {
    echo json_encode(['error' => 'Error al obtener permisos: ' . $e->getMessage()], JSON_UNESCAPED_UNICODE);
}
