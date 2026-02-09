<?php
/**
 * API para obtener publicaciones existentes de un período
 */

session_start();
require_once dirname(__DIR__) . '/includes/config.php';
require_once dirname(__DIR__) . '/includes/conexion.php';

header('Content-Type: application/json');

$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 1;
$periodo_id = (int)($_GET['periodo_id'] ?? 0);

if ($periodo_id <= 0) {
    echo json_encode([]);
    exit;
}

// Obtener todas las publicaciones para este período
$stmt = $pdo->prepare("
    SELECT 
        cp.periodo_id,
        cp.unidad_id,
        cp.habilitado,
        cp.fecha_publicacion,
        ou.nombre as unidad_nombre,
        cpx.anio,
        COUNT(DISTINCT ce.empleado_id) as elegibles,
        COUNT(DISTINCT cr.respuesta_id) as respuestas
    FROM clima_publicacion cp
    JOIN org_unidades ou ON ou.unidad_id = cp.unidad_id
    JOIN clima_periodos cpx ON cpx.periodo_id = cp.periodo_id
    LEFT JOIN clima_elegibles ce ON ce.periodo_id = cp.periodo_id AND ce.unidad_id = cp.unidad_id
    LEFT JOIN clima_respuestas cr ON cr.periodo_id = cp.periodo_id AND cr.empleado_id = ce.empleado_id
    WHERE cp.periodo_id = ? AND cp.empresa_id = ?
    GROUP BY cp.periodo_id, cp.unidad_id, ou.nombre, cpx.anio
    ORDER BY ou.nombre
");

$stmt->execute([$periodo_id, $empresa_id]);
$publicaciones = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($publicaciones);
?>
