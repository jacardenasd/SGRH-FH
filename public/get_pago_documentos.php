<?php
// public/get_pago_documentos.php
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

    // Obtener documentos
    $stmt = $pdo->prepare("
        SELECT 
            d.documento_id,
            d.nombre_archivo,
            d.nombre_original,
            d.tipo_documento,
            d.descripcion,
            d.tamano_bytes,
            DATE_FORMAT(d.uploaded_at, '%d/%m/%Y %H:%i') as fecha_subida,
            CONCAT(u.nombre, ' ', IFNULL(u.apellido_paterno, '')) as subido_por
        FROM pago_proveedores_documentos d
        LEFT JOIN usuarios u ON u.usuario_id = d.uploaded_by
        WHERE d.pago_id = :pago_id
        ORDER BY d.uploaded_at DESC
    ");
    $stmt->execute([':pago_id' => $pago_id]);
    $documentos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        'success' => true,
        'documentos' => $documentos,
        'pago_id' => $pago_id
    ]);

} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
