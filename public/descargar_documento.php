<?php
// public/descargar_documento.php
// Descarga segura de documentos de ayuda con validación anti-traversal
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/conexion.php';
require_once __DIR__ . '/../includes/guard.php';

require_login();
require_empresa();

$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 0;
$documento_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($documento_id === 0 || $empresa_id === 0) {
    http_response_code(400);
    die('Parámetros inválidos');
}

// Obtener documento de la BD con validación de empresa
$sql = "SELECT documento_id, titulo, archivo_path FROM documentos 
        WHERE documento_id = :did AND empresa_id = :eid AND estatus = 'activo'";
$st = $pdo->prepare($sql);
$st->execute([':did' => $documento_id, ':eid' => $empresa_id]);
$doc = $st->fetch(PDO::FETCH_ASSOC);

if (!$doc) {
    http_response_code(404);
    die('Documento no encontrado o no tiene permisos');
}

// ✅ VALIDACIÓN ANTI-TRAVERSAL: Prevenir acceso a archivos fuera de storage
$storagePath = realpath(__DIR__ . '/../storage');
if ($storagePath === false) {
    http_response_code(500);
    error_log("Storage path not found");
    die('Error de configuración del servidor');
}

// Resolver ruta absoluta y validar que esté dentro de storage
$filePath = realpath($storagePath . '/' . $doc['archivo_path']);

// Verificar que el archivo resuelto está dentro de storage
if ($filePath === false || strpos($filePath, $storagePath) !== 0) {
    http_response_code(403);
    error_log("Path traversal attempt: " . $doc['archivo_path']);
    die('Ruta de archivo inválida');
}

// Verificar que el archivo existe
if (!file_exists($filePath) || !is_file($filePath)) {
    http_response_code(404);
    die('El archivo no existe en el servidor');
}

// Obtener tipo MIME
$mimeType = mime_content_type($filePath);
if ($mimeType === false) {
    $mimeType = 'application/octet-stream';
}

// Información segura del archivo
$filename = basename($filePath);
$filesize = filesize($filePath);

// Headers seguros
header('Content-Type: ' . $mimeType);
header('Content-Disposition: attachment; filename="' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $filename) . '"');
header('Content-Length: ' . $filesize);
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');
header('X-Content-Type-Options: nosniff');

// Servir archivo
readfile($filePath);
exit;
