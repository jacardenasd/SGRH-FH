<?php
/**
 * PUBLICAR RESULTADOS - CLIMA LABORAL
 * Script rápido para publicar el período más reciente de clima
 */

session_start();
require_once dirname(__DIR__) . '/includes/config.php';
require_once dirname(__DIR__) . '/includes/conexion.php';

$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 1;
$mensaje = '';
$tipo = 'info';

try {
    echo "<h1>📊 Publicar Período de Clima Laboral</h1>";
    
    // 1. Buscar período más reciente sin publicar
    echo "<h2>1. Buscando períodos...</h2>";
    
    $stmt = $pdo->prepare("
        SELECT periodo_id, anio, estatus, 
               (SELECT COUNT(*) FROM clima_elegibles WHERE periodo_id = cp.periodo_id) as elegibles,
               (SELECT COUNT(*) FROM clima_respuestas WHERE periodo_id = cp.periodo_id) as respuestas
        FROM clima_periodos cp
        WHERE empresa_id = ? 
        ORDER BY anio DESC 
        LIMIT 5
    ");
    $stmt->execute([$empresa_id]);
    $periodos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (empty($periodos)) {
        echo "⚠️ No hay períodos de clima para esta empresa<br>";
    } else {
        echo "<table border='1' cellpadding='10'>";
        echo "<tr style='background:#007bff;color:white'>";
        echo "<th>Período ID</th><th>Año</th><th>Estado</th><th>Elegibles</th><th>Respuestas</th><th>Acción</th>";
        echo "</tr>";
        
        foreach ($periodos as $p) {
            $status_badge = '';
            $accion_btn = '';
            
            if ($p['estatus'] === 'publicado') {
                $status_badge = "<span style='background:#28a745;color:white;padding:5px 10px;border-radius:3px'>✅ Publicado</span>";
                $accion_btn = "<span style='color:#888'>-</span>";
            } elseif ($p['estatus'] === 'borrador') {
                $status_badge = "<span style='background:#ffc107;color:black;padding:5px 10px;border-radius:3px'>📝 Borrador</span>";
                $accion_btn = "<form method='POST' style='display:inline'><input type='hidden' name='periodo_id' value='{$p['periodo_id']}'><button type='submit' class='btn btn-sm btn-primary'>Publicar</button></form>";
            } elseif ($p['estatus'] === 'cerrado') {
                $status_badge = "<span style='background:#dc3545;color:white;padding:5px 10px;border-radius:3px'>🔒 Cerrado</span>";
                $accion_btn = "<span style='color:#888'>-</span>";
            }
            
            echo "<tr>";
            echo "<td><strong>{$p['periodo_id']}</strong></td>";
            echo "<td>{$p['anio']}</td>";
            echo "<td>$status_badge</td>";
            echo "<td>{$p['elegibles']}</td>";
            echo "<td>{$p['respuestas']}</td>";
            echo "<td>$accion_btn</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    
    // 2. Procesar si envió un período a publicar
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $periodo_id = (int)($_POST['periodo_id'] ?? 0);
        
        if ($periodo_id > 0) {
            echo "<h2>2. Publicando período $periodo_id...</h2>";
            
            // Verificar que pertenece a la empresa
            $check = $pdo->prepare("SELECT periodo_id, estatus FROM clima_periodos WHERE periodo_id = ? AND empresa_id = ?");
            $check->execute([$periodo_id, $empresa_id]);
            $periodo = $check->fetch(PDO::FETCH_ASSOC);
            
            if (!$periodo) {
                throw new Exception("Período no encontrado o no tienes acceso");
            }
            
            if ($periodo['estatus'] === 'publicado') {
                echo "✅ El período ya está publicado<br>";
            } else {
                // Actualizar estado
                $upd = $pdo->prepare("
                    UPDATE clima_periodos 
                    SET estatus = 'publicado', updated_at = NOW()
                    WHERE periodo_id = ? AND empresa_id = ?
                ");
                $upd->execute([$periodo_id, $empresa_id]);
                
                echo "✅ <strong>Período $periodo_id publicado exitosamente</strong><br>";
                
                // Obtener estadísticas
                $stat1 = $pdo->prepare("SELECT COUNT(*) FROM clima_elegibles WHERE periodo_id = ?");
                $stat1->execute([$periodo_id]);
                $elegibles = $stat1->fetchColumn();
                
                $stat2 = $pdo->prepare("SELECT COUNT(*) FROM clima_respuestas WHERE periodo_id = ?");
                $stat2->execute([$periodo_id]);
                $respuestas = $stat2->fetchColumn();
                
                $stat3 = $pdo->prepare("SELECT COUNT(*) FROM clima_publicacion WHERE periodo_id = ? AND habilitado = 1");
                $stat3->execute([$periodo_id]);
                $publicado = $stat3->fetchColumn();
                
                echo "<div style='background:#d4edda;border:1px solid #c3e6cb;padding:15px;border-radius:4px;margin-top:15px'>";
                echo "<h3>📊 Estadísticas del Período</h3>";
                echo "<ul>";
                echo "<li>Empleados elegibles: <strong>$elegibles</strong></li>";
                echo "<li>Respuestas registradas: <strong>$respuestas</strong></li>";
                echo "<li>Unidades con resultados publicados: <strong>$publicado</strong></li>";
                echo "</ul>";
                echo "</div>";
                
                echo "<p style='margin-top:20px'>";
                echo "<a href='clima_resultados.php' class='btn btn-primary'>📈 Ver Resultados del Período</a> ";
                echo "<a href='clima_admin.php' class='btn btn-secondary'>🏠 Volver al Panel</a>";
                echo "</p>";
            }
        }
    }
    
} catch (Exception $e) {
    echo "<div style='background:#f8d7da;border:1px solid #f5c6cb;padding:15px;border-radius:4px;color:#721c24'>";
    echo "<h3>❌ Error</h3>";
    echo "<p>" . htmlspecialchars($e->getMessage()) . "</p>";
    echo "</div>";
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Publicar Clima Laboral</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
        .container { max-width: 900px; margin: 0 auto; background: white; padding: 20px; border-radius: 4px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        h1, h2 { color: #333; }
        table { border-collapse: collapse; width: 100%; margin: 15px 0; }
        th { background: #007bff; color: white; padding: 10px; text-align: left; }
        td { padding: 10px; border-bottom: 1px solid #ddd; }
        tr:hover { background: #f9f9f9; }
        .btn { padding: 8px 15px; border: none; border-radius: 3px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-primary { background: #007bff; color: white; }
        .btn-secondary { background: #6c757d; color: white; }
        .btn:hover { opacity: 0.9; }
        form { display: inline; }
        button { padding: 8px 15px; background: #007bff; color: white; border: none; border-radius: 3px; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <p style="color:#666;font-size:14px;">
            <a href="/">← Volver</a> | 
            <a href="clima_admin.php">Panel Admin</a> | 
            <a href="clima_periodos.php">Gestionar Períodos</a> |
            <a href="clima_resultados.php">Ver Resultados</a>
        </p>
    </div>
</body>
</html>
