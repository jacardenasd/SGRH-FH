<?php
// public/get_pago_historial.php
header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();
require_empresa();

$empresa_id = (int)$_SESSION['empresa_id'];
$pago_id = isset($_GET['pago_id']) ? (int)$_GET['pago_id'] : 0;

if ($pago_id === 0) {
    echo json_encode(['success' => false, 'error' => 'ID inválido']);
    exit;
}

try {
    // Verificar que el pago pertenece a la empresa
    $stmt = $pdo->prepare("SELECT pago_id FROM pago_proveedores WHERE pago_id = :id AND empresa_id = :eid");
    $stmt->execute([':id' => $pago_id, ':eid' => $empresa_id]);
    
    if (!$stmt->fetch()) {
        echo json_encode(['success' => false, 'error' => 'Pago no encontrado']);
        exit;
    }

    // Obtener historial
    $stmt = $pdo->prepare("
        SELECT 
            h.historial_id,
            h.estatus_anterior,
            h.estatus_nuevo,
            h.comentario,
            DATE_FORMAT(h.created_at, '%d/%m/%Y %H:%i:%s') as fecha,
            CONCAT(u.nombre, ' ', IFNULL(u.apellido_paterno, ''), ' ', IFNULL(u.apellido_materno, '')) as usuario
        FROM pago_proveedores_historial h
        LEFT JOIN usuarios u ON u.usuario_id = h.created_by
        WHERE h.pago_id = :pago_id
        ORDER BY h.created_at DESC
    ");
    $stmt->execute([':pago_id' => $pago_id]);
    $historial = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        'success' => true,
        'historial' => $historial,
        'pago_id' => $pago_id
    ]);

} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
