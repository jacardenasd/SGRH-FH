<?php
// public/download_documento.php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();
require_empresa();

$empresa_id = (int)$_SESSION['empresa_id'];
$documento_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($documento_id === 0) {
    die('ID de documento inválido');
}

try {
    // Obtener información del documento y verificar permisos
    $stmt = $pdo->prepare("
        SELECT 
            d.nombre_archivo,
            d.nombre_original,
            d.ruta_archivo,
            d.mime_type,
            p.empresa_id
        FROM pago_proveedores_documentos d
        JOIN pago_proveedores p ON p.pago_id = d.pago_id
        WHERE d.documento_id = :id
    ");
    $stmt->execute([':id' => $documento_id]);
    $doc = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$doc || $doc['empresa_id'] != $empresa_id) {
        die('Documento no encontrado o sin permisos');
    }

    $archivo_path = __DIR__ . '/../storage/pagos_documentos/' . $doc['nombre_archivo'];

    if (!file_exists($archivo_path)) {
        die('Archivo no encontrado en el servidor');
    }

    // Descargar archivo
    header('Content-Type: ' . ($doc['mime_type'] ?: 'application/octet-stream'));
    header('Content-Disposition: attachment; filename="' . $doc['nombre_original'] . '"');
    header('Content-Length: ' . filesize($archivo_path));
    header('Cache-Control: no-cache');
    
    readfile($archivo_path);
    exit;

} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
