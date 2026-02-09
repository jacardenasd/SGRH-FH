<?php
/**
 * API para obtener unidades con datos de clima para un período
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

// Verificar que el período pertenece a la empresa
$chk = $pdo->prepare("SELECT periodo_id FROM clima_periodos WHERE periodo_id = ? AND empresa_id = ?");
$chk->execute([$periodo_id, $empresa_id]);
if (!$chk->fetch()) {
    echo json_encode([]);
    exit;
}

// Obtener unidades con datos de clima
$stmt = $pdo->prepare("
    SELECT 
        ce.unidad_id,
        ou.nombre as unidad_nombre,
        COUNT(DISTINCT ce.empleado_id) as elegibles,
        COUNT(DISTINCT cr.respuesta_id) as respuestas,
        COALESCE(cp.habilitado, 0) as publicado
    FROM clima_elegibles ce
    INNER JOIN org_unidades ou ON ou.unidad_id = ce.unidad_id
    LEFT JOIN clima_respuestas cr ON cr.periodo_id = ce.periodo_id AND cr.empleado_id = ce.empleado_id
    LEFT JOIN clima_publicacion cp ON cp.periodo_id = ce.periodo_id AND cp.unidad_id = ce.unidad_id AND cp.empresa_id = ce.empresa_id
    WHERE ce.periodo_id = ? AND ce.empresa_id = ?
    GROUP BY ce.unidad_id, ou.nombre, cp.habilitado
    ORDER BY ou.nombre
");

$stmt->execute([$periodo_id, $empresa_id]);
$unidades = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($unidades);
?>
