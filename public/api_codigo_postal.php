<?php
// public/api_codigo_postal.php
// API para buscar datos de código postal: estado, municipio, colonias
// Acceso: GET /api_codigo_postal.php?cp=28000

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/conexion.php';

header('Content-Type: application/json; charset=utf-8');

$cp = isset($_GET['cp']) ? trim((string)$_GET['cp']) : '';

if (strlen($cp) < 4 || strlen($cp) > 10) {
    echo json_encode(array('ok' => false, 'error' => 'Código postal inválido.'));
    exit;
}

// Buscar datos del CP
$sql = "SELECT DISTINCT codigo_postal, estado, municipio, colonia
        FROM cat_codigos_postales
        WHERE codigo_postal = :cp
        ORDER BY estado, municipio, colonia";

$stmt = $pdo->prepare($sql);
$stmt->execute(array(':cp' => $cp));
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($resultados) === 0) {
    echo json_encode(array('ok' => false, 'error' => 'Código postal no encontrado.'));
    exit;
}

// Agrupar: estado, municipios, colonias
$estado = $resultados[0]['estado'];
$municipios = array();
$colonias = array();

foreach ($resultados as $row) {
    $mun = $row['municipio'];
    if (!isset($municipios[$mun])) {
        $municipios[$mun] = true;
    }
    if (!in_array($row['colonia'], $colonias, true)) {
        $colonias[] = $row['colonia'];
    }
}

echo json_encode(array(
    'ok' => true,
    'codigo_postal' => $cp,
    'estado' => $estado,
    'municipios' => array_keys($municipios),
    'colonias' => $colonias
));
