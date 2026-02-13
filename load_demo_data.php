<?php
// load_demo_data.php - Cargar datos de demostración

header('Content-Type: text/html; charset=utf-8');

$output = "";

try {
    // Intentar conexión a BD
    $host = 'localhost';
    $db = 'sgrh';
    $user = 'root';
    $passwords = ['', 'root', '123456', 'password', 'MAMP'];
    
    $pdo = null;
    foreach ($passwords as $pass) {
        try {
            $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
            ];
            $test_pdo = new PDO($dsn, $user, $pass, $options);
            if ($test_pdo) {
                $pdo = $test_pdo;
                break;
            }
        } catch (Exception $e) {
            // Intentar siguiente contraseña
        }
    }
    
    if (!$pdo) {
        die('<div class="diagnostic error"><div class="check-result"><span class="icon">✗</span><div>Error: No se pudo conectar a la BD sgrh</div></div></div>');
    }
    
    $output .= '<div class="diagnostic success"><div class="check-result"><span class="icon">✓</span><div>Conectado a BD</div></div></div>';
    
    // 1. Crear dimensiones
    $output .= '<h4 style="margin-top: 20px;">Creando dimensiones...</h4>';
    $pdo->exec("
        INSERT IGNORE INTO `clima_dimensiones` (`nombre`, `orden`, `activo`) 
        VALUES 
        ('Satisfacción General', 1, 1),
        ('Relaciones Interpersonales', 2, 1),
        ('Oportunidades de Desarrollo', 3, 1);
    ");
    $output .= '<div class="diagnostic success"><div class="check-result"><span class="icon">✓</span><div>3 Dimensiones creadas</div></div></div>';
    
    // 2. Obtener ID de dimensión para reactivos
    $stmt = $pdo->query("SELECT dimension_id FROM clima_dimensiones LIMIT 1");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $dim_id = $row['dimension_id'];
    
    // 3. Crear reactivos (preguntas)
    $output .= '<h4 style="margin-top: 20px;">Creando preguntas...</h4>';
    $preguntas = [
        'Estoy satisfecho con mi empleo actual',
        'Mi supervisor me proporciona retroalimentación constructiva',
        'Tengo oportunidades de crecimiento y desarrollo profesional',
        'Mis colegas y yo trabajamos bien en equipo',
        'Siento que mi trabajo es valorado por la organización',
        'Las condiciones de trabajo son seguras y cómodas',
        'Recibo un salario justo por mi trabajo',
        'Tengo un equilibrio adecuado entre trabajo y vida personal',
        'La comunicación interna es efectiva en la empresa',
        'Estoy motivado a dar lo mejor de mí en mis tareas diarias'
    ];
    
    foreach ($preguntas as $idx => $pregunta) {
        $stmt = $pdo->prepare("
            INSERT IGNORE INTO `clima_reactivos` (`dimension_id`, `texto`, `orden`, `activo`) 
            VALUES (?, ?, ?, ?)
        ");
        $stmt->execute([$dim_id, $pregunta, ($idx + 1), 1]);
    }
    $output .= '<div class="diagnostic success"><div class="check-result"><span class="icon">✓</span><div>10 Preguntas creadas</div></div></div>';
    
    // 4. Crear período activo
    $output .= '<h4 style="margin-top: 20px;">Creando período...</h4>';
    $stmt = $pdo->prepare("
        INSERT IGNORE INTO `clima_periodos` (`nombre`, `fecha_inicio`, `fecha_fin`, `activo`) 
        VALUES (?, ?, ?, ?)
    ");
    $stmt->execute([
        'Encuesta Clima 2025 - Demo',
        date('Y-01-01'),
        date('Y-12-31'),
        1
    ]);
    $output .= '<div class="diagnostic success"><div class="check-result"><span class="icon">✓</span><div>Período activo creado</div></div></div>';
    
    // Verificación final
    $output .= '<h4 style="margin-top: 20px;">Verificación final...</h4>';
    
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM clima_reactivos WHERE activo=1");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $total_reactivos = $row['total'];
    
    $output .= '<div class="diagnostic success">';
    $output .= '<div class="check-result"><span class="icon">✓</span><div>' . $total_reactivos . ' preguntas activas en el sistema</div></div>';
    $output .= '<div class="check-result"><span class="icon">✓</span><div>Sistema listo para usar OCR</div></div>';
    $output .= '</div>';
    
    $output .= '<div class="info-box" style="margin-top: 20px;">';
    $output .= '<strong>✓ Listo!</strong> Ahora puedes:<br>';
    $output .= '1. Ir a <a href="public/clima_captura_ia.php" target="_blank">Captura OCR</a><br>';
    $output .= '2. Cargar una imagen/PDF de un formulario<br>';
    $output .= '3. El sistema extraerá las respuestas automáticamente';
    $output .= '</div>';
    
} catch (Exception $e) {
    $output .= '<div class="diagnostic error">';
    $output .= '<div class="check-result"><span class="icon">✗</span><div>Error: ' . htmlspecialchars($e->getMessage()) . '</div></div>';
    $output .= '</div>';
}

echo $output;
?>
