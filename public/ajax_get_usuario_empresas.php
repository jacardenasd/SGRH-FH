<?php
// public/ajax_get_usuario_empresas.php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/conexion.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';

require_login();
require_empresa();
require_perm('usuarios.admin');

header('Content-Type: application/json; charset=utf-8');

$usuario_id = isset($_GET['usuario_id']) ? (int)$_GET['usuario_id'] : 0;

if ($usuario_id <= 0) {
    http_response_code(400);
    echo json_encode(['error' => 'usuario_id inválido']);
    exit;
}

try {
    // Obtener empresas asignadas al usuario
    $stmt = $pdo->prepare("SELECT empresa_id, es_admin FROM usuario_empresas WHERE usuario_id = :uid AND estatus = 1");
    $stmt->execute([':uid' => $usuario_id]);
    $empresas_asignadas_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $empresas_asignadas = [];
    $admin_empresas = [];
    foreach ($empresas_asignadas_rows as $e) {
        $empresas_asignadas[] = (int)$e['empresa_id'];
        if ((int)$e['es_admin'] === 1) {
            $admin_empresas[(int)$e['empresa_id']] = true;
        }
    }

    echo json_encode([
        'success' => true,
        'empresas_asignadas' => $empresas_asignadas,
        'admin_empresas' => $admin_empresas
    ], JSON_UNESCAPED_UNICODE);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()], JSON_UNESCAPED_UNICODE);
}

