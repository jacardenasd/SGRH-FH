<?php
// diagnostico_ocr_error.php
// Herramienta para diagnosticar errores en captura OCR

session_start();
require_once __DIR__ . '/includes/conexion.php';

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnóstico OCR - Errores</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f5f5f5; }
        .container { max-width: 1000px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; }
        h1 { color: #333; border-bottom: 3px solid #2196F3; padding-bottom: 10px; }
        .section { margin: 20px 0; padding: 15px; background: #f9f9f9; border-left: 4px solid #2196F3; }
        .section h3 { margin-top: 0; color: #1976d2; }
        table { width: 100%; border-collapse: collapse; margin: 10px 0; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #f0f0f0; font-weight: bold; }
        .ok { color: green; font-weight: bold; }
        .error { color: red; font-weight: bold; }
        .warning { color: orange; font-weight: bold; }
        code { background: #f0f0f0; padding: 2px 6px; border-radius: 3px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔍 Diagnóstico de Errores OCR</h1>
        
        <div class="section">
            <h3>1. Logs de Error PHP</h3>
            <?php
                $log_file = __DIR__ . '/storage/logs/php_errors.log';
                if (file_exists($log_file)) {
                    $lines = file($log_file, FILE_SKIP_EMPTY_LINES);
                    $recent = array_slice($lines, -20); // Últimas 20 líneas
                    
                    if (count($recent) > 0) {
                        echo "<p>⬇️ Últimos errores registrados:</p>";
                        echo "<pre style='background: #f5f5f5; padding: 10px; overflow-x: auto; max-height: 300px;'>";
                        foreach ($recent as $line) {
                            echo htmlspecialchars($line);
                        }
                        echo "</pre>";
                    } else {
                        echo "<p class='ok'>✓ No hay errores recientes en el log</p>";
                    }
                } else {
                    echo "<p class='warning'>⚠️  Archivo de log no encontrado: $log_file</p>";
                }
            ?>
        </div>
        
        <div class="section">
            <h3>2. Variables de Sesión</h3>
            <?php
                if (!empty($_SESSION)) {
                    echo "<table>";
                    echo "<tr><th>Variable</th><th>Valor</th></tr>";
                    foreach ($_SESSION as $key => $value) {
                        $val_display = is_array($value) ? 'Array[' . count($value) . ']' : substr($value, 0, 50);
                        echo "<tr><td><code>$key</code></td><td>$val_display</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p class='warning'>⚠️  Sesión vacía</p>";
                }
            ?>
        </div>
        
        <div class="section">
            <h3>3. Estado de la BD - Tabla clima_respuestas</h3>
            <?php
                try {
                    $stmt = $pdo->query("
                        SELECT COUNT(*) as total FROM clima_respuestas
                    ");
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    echo "<p class='ok'>✓ Total de respuestas en BD: " . $result['total'] . "</p>";
                    
                    // Ver últimas respuestas guardadas
                    $stmt = $pdo->query("
                        SELECT cr.*, c.texto 
                        FROM clima_respuestas cr
                        LEFT JOIN clima_reactivos c ON cr.reactivo_id = c.reactivo_id
                        ORDER BY cr.fecha_respuesta DESC
                        LIMIT 10
                    ");
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    if (count($rows) > 0) {
                        echo "<p>Últimas 10 respuestas guardadas:</p>";
                        echo "<table>";
                        echo "<tr><th>Período</th><th>Empleado</th><th>Pregunta</th><th>Valor</th><th>Fecha</th></tr>";
                        foreach ($rows as $row) {
                            $emp = $row['empleado_id'] ?: 'Anónimo';
                            $pregunta = substr($row['texto'], 0, 40) . (strlen($row['texto']) > 40 ? '...' : '');
                            echo "<tr>";
                            echo "<td>{$row['periodo_id']}</td>";
                            echo "<td>$emp</td>";
                            echo "<td>$pregunta</td>";
                            echo "<td>{$row['valor']}</td>";
                            echo "<td>{$row['fecha_respuesta']}</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    
                } catch (Exception $e) {
                    echo "<p class='error'>✗ Error: " . $e->getMessage() . "</p>";
                }
            ?>
        </div>
        
        <div class="section">
            <h3>4. Verificar Empleados Elegibles</h3>
            <?php
                try {
                    if (isset($_SESSION['empresa_id'])) {
                        $empresa_id = $_SESSION['empresa_id'];
                        
                        $stmt = $pdo->prepare("
                            SELECT COUNT(*) as total 
                            FROM clima_elegibles 
                            WHERE empresa_id = ? AND elegible = 1
                        ");
                        $stmt->execute([$empresa_id]);
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        
                        echo "<p class='ok'>✓ Empleados elegibles: " . $result['total'] . "</p>";
                        
                        // Ver algunos elegibles
                        $stmt = $pdo->prepare("
                            SELECT DISTINCT ce.empleado_id, e.nombre, cp.nombre as periodo
                            FROM clima_elegibles ce
                            LEFT JOIN empleados e ON ce.empleado_id = e.empleado_id
                            LEFT JOIN clima_periodos cp ON ce.periodo_id = cp.periodo_id
                            WHERE ce.empresa_id = ? AND ce.elegible = 1
                            LIMIT 5
                        ");
                        $stmt->execute([$empresa_id]);
                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        
                        if (count($rows) > 0) {
                            echo "<p>Muestra de empleados elegibles:</p>";
                            echo "<table>";
                            echo "<tr><th>ID Empleado</th><th>Nombre</th><th>Período</th></tr>";
                            foreach ($rows as $row) {
                                echo "<tr>";
                                echo "<td>{$row['empleado_id']}</td>";
                                echo "<td>{$row['nombre']}</td>";
                                echo "<td>{$row['periodo']}</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "<p class='warning'>⚠️  No hay empleados elegibles configurados</p>";
                        }
                    } else {
                        echo "<p class='warning'>⚠️  No hay empresa_id en sesión</p>";
                    }
                } catch (Exception $e) {
                    echo "<p class='error'>✗ Error: " . $e->getMessage() . "</p>";
                }
            ?>
        </div>
        
        <div class="section">
            <h3>5. Posibles Causas del Error "No deja agregar más de una encuesta"</h3>
            <ul>
                <li><strong>UNIQUE Constraint:</strong> Si intentas guardar 2 respuestas del MISMO empleado en el MISMO período para la MISMA pregunta
                    <br>👉 Solución: Usar empleados diferentes o períodos diferentes</li>
                <li><strong>Empleado no elegible:</strong> El empleado no está registrado como elegible para ese período
                    <br>👉 Solución: Agregar empleado en clima_elegibles primero</li>
                <li><strong>Unidad inválida:</strong> Para capturas anónimas, si no selecciona unidad
                    <br>👉 Solución: Seleccionar una unidad válida</li>
                <li><strong>Problema de transacción:</strong> La sesión anterior no se limpió
                    <br>👉 Solución: Recargar completamente la página (Ctrl+F5)</li>
            </ul>
        </div>
        
        <div class="section" style="background: #fff3cd; border-left-color: orange;">
            <h3>📝 Recomendaciones</h3>
            <ol>
                <li>Copia el contenido de la sección 1 (Logs de Error) <strong>exactamente</strong></li>
                <li>Proporciona el <strong>error exacto</strong> que ves en pantalla</li>
                <li>Indica si usas <strong>empleados diferentes</strong> o el <strong>mismo empleado</strong></li>
                <li>Dile al soporte técnico toda esta información</li>
            </ol>
        </div>
        
        <hr>
        <p style="text-align: center; color: #666;">
            <a href="clima_captura_ia.php">← Volver a Captura OCR</a>
        </p>
    </div>
</body>
</html>
