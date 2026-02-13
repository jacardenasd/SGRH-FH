<?php
// test_connection.php - Verificar conexión a BD

header('Content-Type: application/json');

$result = ['success' => false, 'message' => ''];

try {
    $host = 'localhost';
    $db = 'sgrh';
    $user = 'root';
    $passwords = ['', 'root', '123456', 'password', 'MAMP'];
    
    $pdo = null;
    $used_pass = '';
    
    foreach ($passwords as $pass) {
        try {
            $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
            ];
            $test_pdo = new PDO($dsn, $user, $pass, $options);
            $test_query = $test_pdo->query("SELECT 1");
            if ($test_query) {
                $pdo = $test_pdo;
                $used_pass = $pass;
                break;
            }
        } catch (Exception $e) {
            // Intentar siguiente
        }
    }
    
    if ($pdo) {
        // Verificar tablas
        $stmt = $pdo->query("SELECT COUNT(*) as c FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'sgrh'");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $table_count = $row['c'];
        
        // Verificar reactivos
        $stmt = $pdo->query("SELECT COUNT(*) as c FROM clima_reactivos WHERE activo=1");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $reactivos_count = $row['c'];
        
        $result['success'] = true;
        $result['message'] = "Conectado exitosamente";
        $result['tables'] = $table_count;
        $result['reactivos'] = $reactivos_count;
        
    } else {
        $result['message'] = "No se pudo conectar a la BD sgrh. Verifica que MAMP esté corriendo.";
    }
    
} catch (Exception $e) {
    $result['message'] = "Error: " . $e->getMessage();
}

echo json_encode($result);
?>
