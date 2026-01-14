<?php
// public/contratos_descargar_pdf.php
// Descarga segura de PDFs generados
session_start();
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/conexion.php';

if (!isset($_SESSION['usuario_id'])) {
    http_response_code(401);
    die('No autorizado');
}

$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 0;
$documento_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($documento_id === 0) {
    die('ID de documento inválido');
}

// Obtener documento
$sql = "SELECT * FROM contratos_documentos WHERE documento_id = :did AND empresa_id = :eid";
$st = $pdo->prepare($sql);
$st->execute([':did' => $documento_id, ':eid' => $empresa_id]);
$doc = $st->fetch(PDO::FETCH_ASSOC);

if (!$doc) {
    die('Documento no encontrado o no tiene permisos');
}

$filePath = $doc['ruta_archivo'];

if (!file_exists($filePath)) {
    die('El archivo PDF no existe en el servidor');
}

// Descargar
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $doc['nombre_archivo'] . '"');
header('Content-Length: ' . filesize($filePath));
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');

readfile($filePath);
exit;
