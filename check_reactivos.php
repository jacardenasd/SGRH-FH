<?php
// check_reactivos.php - Diagnóstico de reactivos de clima
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/conexion.php';

echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Diagnóstico Reactivos</title>";
echo "<style>body{font-family:Arial;padding:20px;} .ok{color:green;} .error{color:red;} table{border-collapse:collapse;width:100%;margin-top:10px;} th,td{border:1px solid #ddd;padding:8px;text-align:left;} th{background:#4CAF50;color:white;}</style>";
echo "</head><body>";

echo "<h1>🔍 Diagnóstico de Reactivos de Clima Laboral</h1>";

try {
    // Verificar dimensiones
    echo "<h2>1. Verificar Dimensiones</h2>";
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM clima_dimensiones WHERE activo=1");
    $dimensiones = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($dimensiones['total'] > 0) {
        echo "<p class='ok'>✓ Encontradas {$dimensiones['total']} dimensiones activas</p>";
        
        $stmt = $pdo->query("SELECT * FROM clima_dimensiones WHERE activo=1 ORDER BY dimension_id");
        echo "<table><tr><th>ID</th><th>Nombre</th><th>Descripción</th></tr>";
        while ($dim = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>{$dim['dimension_id']}</td><td>{$dim['nombre']}</td><td>{$dim['descripcion']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='error'>✗ NO hay dimensiones activas. Se deben crear primero.</p>";
    }
    
    // Verificar reactivos
    echo "<h2>2. Verificar Reactivos</h2>";
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM clima_reactivos WHERE activo=1");
    $reactivos = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($reactivos['total'] > 0) {
        echo "<p class='ok'>✓ Encontrados {$reactivos['total']} reactivos activos</p>";
        
        $stmt = $pdo->query("
            SELECT r.reactivo_id, r.texto, r.orden, d.nombre as dimension
            FROM clima_reactivos r
            LEFT JOIN clima_dimensiones d ON r.dimension_id = d.dimension_id
            WHERE r.activo=1
            ORDER BY r.orden, r.reactivo_id
            LIMIT 10
        ");
        echo "<table><tr><th>ID</th><th>Orden</th><th>Dimensión</th><th>Texto</th></tr>";
        while ($react = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $texto_corto = mb_substr($react['texto'], 0, 100) . (mb_strlen($react['texto']) > 100 ? '...' : '');
            echo "<tr><td>{$react['reactivo_id']}</td><td>{$react['orden']}</td><td>{$react['dimension']}</td><td>{$texto_corto}</td></tr>";
        }
        echo "</table>";
        
        if ($reactivos['total'] > 10) {
            echo "<p><em>(Mostrando primeros 10 de {$reactivos['total']})</em></p>";
        }
    } else {
        echo "<p class='error'>✗ NO hay reactivos activos. Este es el problema.</p>";
        echo "<p><strong>Solución:</strong> Debe cargar reactivos en la tabla clima_reactivos</p>";
    }
    
    // Verificar periodos
    echo "<h2>3. Verificar Períodos</h2>";
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM clima_periodos WHERE activo=1");
    $periodos = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($periodos['total'] > 0) {
        echo "<p class='ok'>✓ Encontrados {$periodos['total']} períodos activos</p>";
        
        $stmt = $pdo->query("SELECT * FROM clima_periodos WHERE activo=1 ORDER BY fecha_inicio DESC LIMIT 5");
        echo "<table><tr><th>ID</th><th>Nombre</th><th>Fecha Inicio</th><th>Fecha Fin</th></tr>";
        while ($per = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>{$per['periodo_id']}</td><td>{$per['nombre']}</td><td>{$per['fecha_inicio']}</td><td>{$per['fecha_fin']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='error'>✗ NO hay períodos activos</p>";
    }
    
    // Resumen
    echo "<hr><h2>📊 Resumen</h2>";
    if ($dimensiones['total'] > 0 && $reactivos['total'] > 0 && $periodos['total'] > 0) {
        echo "<p class='ok' style='font-size:1.2em;'><strong>✓ Sistema está listo para usar OCR</strong></p>";
    } else {
        echo "<p class='error' style='font-size:1.2em;'><strong>✗ Faltan datos necesarios:</strong></p>";
        echo "<ul>";
        if ($dimensiones['total'] == 0) echo "<li>Crear dimensiones de clima</li>";
        if ($reactivos['total'] == 0) echo "<li>Cargar reactivos (preguntas) de la encuesta</li>";
        if ($periodos['total'] == 0) echo "<li>Crear un período activo</li>";
        echo "</ul>";
        
        echo "<p><strong>¿Necesita datos de ejemplo?</strong> Puedo generar un script SQL con datos de demo.</p>";
    }
    
} catch (Exception $e) {
    echo "<p class='error'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
}

echo "</body></html>";
?>
