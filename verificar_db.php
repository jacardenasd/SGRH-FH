<?php
// verificar_db.php - Verificar reactivos
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Intentar conexión
$host = 'localhost';
$db = 'sgrh';
$user = 'root';
// Intentar con diferentes contraseñas
$passwords = ['', 'root', '1234', 'password', 'MAMP'];

$pdo = false;
foreach ($passwords as $pass) {
    try {
        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
        ];
        $test_pdo = new PDO($dsn, $user, $pass, $options);
        if ($test_pdo) {
            $pdo = $test_pdo;
            echo "✓ Conectado con contraseña: '$pass'\n";
            break;
        }
    } catch (Exception $e) {
        // Ignorar
    }
}

if (!$pdo) {
    echo "✗ No se pudo conectar a la base de datos\n";
    echo "Se intentó con credenciales user=root, db=sgrh\n";
    echo "Por favor verifica:\n";
    echo "1. MySql está corriendo\n";
    echo "2. La base de datos 'sgrh' existe\n";
    echo "3. El usuario 'root' existe\n";
    exit(1);
}

echo "\n";
echo "===============================\n";
echo "📊 DIAGNÓSTICO DE REACTIVOS    \n";
echo "===============================\n";

try {
    // Total de reactivos
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM clima_reactivos WHERE activo=1");
    if (!$stmt) {
        echo "✗ Tabla 'clima_reactivos' no existe\n";
        exit(1);
    }
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $total_reactivos = $result ? $result['total'] : 0;
    
    echo "\n1️⃣  REACTIVOS ACTIVOS: $total_reactivos\n";
    
    if ($total_reactivos > 0) {
        echo "   ✓ Se encontraron reactivos. Ejemplos:\n\n";
        
        $stmt = $pdo->query("
            SELECT reactivo_id, texto, orden 
            FROM clima_reactivos 
            WHERE activo=1 
            ORDER BY orden 
            LIMIT 5
        ");
        
        $i = 1;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $texto = mb_substr($row['texto'], 0, 60);
            echo "   [$i] ID={$row['reactivo_id']}: $texto...\n";
            $i++;
        }
    } else {
        echo "   ✗ NO HAY REACTIVOS ACTIVOS\n";
        echo "   ⚠️  Este es el problema por el que OCR no trabaja\n";
    }
    
    // Total de dimensiones
    echo "\n2️⃣  DIMENSIONES ACTIVAS: ";
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM clima_dimensiones WHERE activo=1");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $total_dim = $result ? $result['total'] : 0;
    echo "$total_dim\n";
    
    // Total de períodos
    echo "\n3️⃣  PERÍODOS ACTIVOS: ";
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM clima_periodos WHERE activo=1");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $total_per = $result ? $result['total'] : 0;
    echo "$total_per\n";
    
    echo "\n===============================\n";
    
    if ($total_reactivos == 0) {
        echo "\n❌ PROBLEMA IDENTIFICADO:\n";
        echo "   No hay preguntas (reactivos) en el sistema.\n\n";
        echo "✅ SOLUCIÓN:\n";
        echo "   1. Crea las dimensiones de la encuesta\n";
        echo "   2. Carga las preguntas de la encuesta\n";
        echo "   3. Crea un período activo\n";
        echo "   4. Define empleados elegibles\n";
        echo "\n   ¿Necesitas datos de demostración?\n";
        echo "   Puedo generar un SQL con datos de ejemplo.\n";
    } else {
        echo "\n✅ El sistema está listo para usar OCR.\n";
        echo "   Los reactivos se cargaron exitosamente.\n";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
    exit(1);
}

echo "\n";
?>
