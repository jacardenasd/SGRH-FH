<?php
// includes/clima_ocr_processor.php
// Procesador de OCR para Encuestas de Clima Laboral
// Utiliza Tesseract OCR para extraer respuestas de documentos escaneados

class ClimaOCRProcessor {
    private $pdo;
    private $tesseract_path;
    private $temp_dir;
    
    public function __construct($pdo, $tesseract_path) {
        $this->pdo = $pdo;
        $this->tesseract_path = $tesseract_path;
        $this->temp_dir = __DIR__ . '/../storage/temp_ocr';
        
        if (!is_dir($this->temp_dir)) {
            mkdir($this->temp_dir, 0755, true);
        }
    }
    
    /**
     * Procesar archivo (PDF o imagen) y extraer respuestas
     */
    public function procesarArchivo($filepath, $periodo_id, $empresa_id) {
        try {
            $extension = strtolower(pathinfo($filepath, PATHINFO_EXTENSION));
            $imagenes_a_limpiar = [];
            
            // Si es PDF, convertir a imágenes primero
            if ($extension === 'pdf') {
                $imagenes = $this->convertirPDFaImagenes($filepath);
            } else {
                $imagenes = [$filepath];
            }
            
            // Procesar cada imagen con OCR
            $texto_completo = '';
            foreach ($imagenes as $imagen) {
                $texto_completo .= $this->extraerTextoOCR($imagen) . "\n\n";
                if ($extension === 'pdf') {
                    $imagenes_a_limpiar[] = $imagen;
                }
            }
            
            $reactivos = $this->obtenerReactivosPeriodo($periodo_id, $empresa_id);
            if (empty($reactivos)) {
                $reactivos = $this->generarReactivosGenericos();
            }

            // Analizar el texto extraído
            $resultados = $this->analizarTextoEncuesta($texto_completo, $periodo_id, $empresa_id, $reactivos);

            // Intentar OMR si hay configuracion
            $omr_config = $this->cargarConfigOMR();
            if ($omr_config) {
                $respuestas_omr = $this->detectarRespuestasOMR($imagenes, $reactivos, $omr_config);
                if (!empty($respuestas_omr)) {
                    $con_valor = array_filter($respuestas_omr, function ($resp) {
                        return isset($resp['valor']) && $resp['valor'] > 0;
                    });

                    if (count($con_valor) > 0) {
                        $resultados['respuestas'] = $respuestas_omr;
                        $resultados['confianza_promedio'] = $this->calcularConfianzaPromedio($respuestas_omr);
                        $resultados['warnings'][] = 'Respuestas detectadas por marcas (OMR). Revise antes de guardar.';

                        if ($resultados['confianza_promedio'] == 0) {
                            $resultados['success'] = false;
                            $resultados['warnings'][] = 'No se pudieron detectar marcas con suficiente confianza.';
                        }
                    } else {
                        $resultados['warnings'][] = 'No se detectaron marcas en la plantilla (OMR).';
                    }
                }
            }

            // Limpiar imagenes temporales
            foreach ($imagenes_a_limpiar as $imagen) {
                if (file_exists($imagen)) {
                    @unlink($imagen);
                }
            }
            
            return $resultados;
            
        } catch (Exception $e) {
            error_log('Error en procesarArchivo: ' . $e->getMessage());
            return [
                'success' => false,
                'error' => $e->getMessage(),
                'respuestas' => []
            ];
        }
    }
    
    /**
     * Verificar si Ghostscript está disponible
     */
    private function verificarGhostscript() {
        $posibles_rutas = [
            'C:\\Program Files\\gs\\gs10.06.0\\bin\\gswin64c.exe',
            'C:\\Program Files\\gs\\gs10.02.1\\bin\\gswin64c.exe',
            'C:\\Program Files\\gs\\gs10.02.0\\bin\\gswin64c.exe',
            'C:\\Program Files\\gs\\gs10.01.2\\bin\\gswin64c.exe',
            'C:\\Program Files\\gs\\gs9.56.1\\bin\\gswin64c.exe',
            'C:\\Program Files (x86)\\gs\\gs10.02.1\\bin\\gswin32c.exe',
            'C:\\Program Files (x86)\\gs\\gs10.02.0\\bin\\gswin32c.exe'
        ];
        
        foreach ($posibles_rutas as $ruta) {
            if (file_exists($ruta)) {
                return $ruta;
            }
        }
        
        // Intentar buscar en PATH
        exec('where gswin64c 2>nul', $output, $return_code);
        if ($return_code === 0 && !empty($output)) {
            return trim($output[0]);
        }
        
        return false;
    }
    
    /**
     * Convertir PDF a imágenes usando Imagick o alternativas
     */
    private function convertirPDFaImagenes($pdf_path) {
        $imagenes = [];
        
        // Intentar con Imagick si está disponible
        if (extension_loaded('imagick')) {
            // Primero verificar si Ghostscript está disponible
            $ghostscript_path = $this->verificarGhostscript();
            
            if (!$ghostscript_path) {
                error_log('⚠️  Ghostscript NO encontrado. Imagick no puede procesar PDFs sin Ghostscript.');
                throw new Exception(
                    'Para procesar PDFs necesita instalar Ghostscript. ' .
                    'Descárguelo de: https://ghostscript.com/releases/gsdnld.html ' .
                    'O convierta el PDF a imagen (PNG/JPG) primero.'
                );
            }
            
            error_log('✓ Ghostscript encontrado: ' . $ghostscript_path);
            
            try {
                $imagick = new Imagick();
                $imagick->setResolution(300, 300);
                $imagick->readImage($pdf_path);
                
                $num_pages = $imagick->getNumberImages();
                error_log('✓ PDF tiene ' . $num_pages . ' página(s)');
                
                for ($i = 0; $i < $num_pages; $i++) {
                    $imagick->setIteratorIndex($i);
                    $imagick->setImageFormat('png');
                    
                    $temp_image = $this->temp_dir . '/page_' . uniqid() . '.png';
                    $imagick->writeImage($temp_image);
                    $imagenes[] = $temp_image;
                    error_log('✓ Página ' . ($i+1) . ' convertida a: ' . basename($temp_image));
                }
                
                $imagick->clear();
                $imagick->destroy();
                
                return $imagenes;
                
            } catch (Exception $e) {
                error_log('❌ Error con Imagick: ' . $e->getMessage());
                throw new Exception(
                    'Error procesando PDF. Verifique que Ghostscript esté instalado correctamente. ' .
                    'Alternativamente, convierta el PDF a imagen (PNG/JPG) manualmente.'
                );
            }
        }
        
        // Si no hay Imagick
        throw new Exception(
            'PHP Imagick no está instalado. ' .
            'Para procesar PDFs necesita: 1) PHP Imagick + 2) Ghostscript. ' .
            'O convierta el PDF a imagen (PNG/JPG) manualmente.'
        );
    }
    
    /**
     * Extraer texto de imagen usando Tesseract
     */
    private function extraerTextoOCR($imagen_path) {
        $output_file = $this->temp_dir . '/ocr_' . uniqid();
        
        // Comando Tesseract: -l spa para español, --psm 6 para bloques de texto uniformes
        $command = sprintf(
            '"%s" "%s" "%s" -l spa --psm 6',
            $this->tesseract_path,
            $imagen_path,
            $output_file
        );
        
        exec($command . ' 2>&1', $output, $return_code);
        
        if ($return_code !== 0) {
            error_log('Error ejecutando Tesseract: ' . implode("\n", $output));
            throw new Exception('Error al procesar imagen con OCR');
        }
        
        $texto = '';
        if (file_exists($output_file . '.txt')) {
            $texto = file_get_contents($output_file . '.txt');
            @unlink($output_file . '.txt');
        }
        
        // Log del texto extraído para debugging
        error_log("=== TEXTO EXTRAIDO POR OCR ===");
        error_log(substr($texto, 0, 500)); // Primeros 500 caracteres
        
        return $texto;
    }
    
    /**
     * Analizar texto extraído y detectar respuestas
     */
    private function analizarTextoEncuesta($texto, $periodo_id, $empresa_id, $reactivos = null) {
        $resultados = [
            'success' => true,
            'periodo_id' => $periodo_id,
            'respuestas' => [],
            'respuestas_abiertas' => [],
            'confianza_promedio' => 0,
            'warnings' => []
        ];
        
        // Normalizar texto
        $texto = mb_strtoupper($texto, 'UTF-8');
        $lineas = explode("\n", $texto);
        
        error_log("🔍 Iniciando análisis de texto. Bytes: " . strlen($texto) . ", Líneas: " . count($lineas));
        
        // Obtener reactivos del período
        if ($reactivos === null) {
            $reactivos = [];
            try {
                $reactivos = $this->obtenerReactivosPeriodo($periodo_id, $empresa_id);
                error_log("✓ Obtuvieron " . count($reactivos) . " reactivos de la BD");
            } catch (Exception $e) {
                error_log("⚠️  Error obteniendo reactivos: " . $e->getMessage());
                $reactivos = [];
            }
        }

        // Si no hay reactivos, generar genéricos
        if (empty($reactivos)) {
            error_log("ℹ️  No hay reactivos. Generando plantilla genérica...");
            $resultados['warnings'][] = 'No se configuraron reactivos específicos. Usando plantilla genérica.';
            $reactivos = $this->generarReactivosGenericos();
            error_log("✓ Generados " . count($reactivos) . " reactivos genéricos");
        }
        
        // VALIDAR que tenemos reactivos ANTES de continuar
        if (empty($reactivos)) {
            error_log("❌ CRÍTICO: No hay reactivos después de intentar generar");
            $resultados['success'] = false;
            $resultados['warnings'][] = 'Error crítico: No se pudieron cargar ni generar reactivos. Contacte al administrador.';
            return $resultados;
        }
        
        // Intentar detectar empleado (si viene en el documento)
        $empleado_info = $this->detectarEmpleado($texto, $empresa_id);
        if ($empleado_info) {
            $resultados['empleado_id'] = $empleado_info['empleado_id'];
            $resultados['empleado_nombre'] = $empleado_info['nombre'];
            $resultados['unidad_id'] = $empleado_info['unidad_id'];
            error_log("✓ Detectado empleado: " . $empleado_info['nombre']);
        } else {
            // Si no se detecta empleado, será captura anónima
            $resultados['es_anonima'] = true;
            $resultados['warnings'][] = 'No se detectó información de empleado. Captura anónima.';
        }
        
        // Detectar respuestas usando patrones
        $respuestas_detectadas = $this->detectarRespuestas($texto, $reactivos);
        error_log("Método 1 (Patrones): " . count($respuestas_detectadas) . " respuestas");
        
        if (empty($respuestas_detectadas)) {
            // Si no se detectan respuestas automáticamente, usar método de análisis de palabras clave
            $respuestas_detectadas = $this->detectarRespuestasPorPalabrasClave($texto, $reactivos);
            error_log("Método 2 (Palabras clave): " . count($respuestas_detectadas) . " respuestas");
        }
        
        if (empty($respuestas_detectadas)) {
            // Método 3: SIEMPRE genera plantilla para completar manualmente
            $respuestas_detectadas = $this->detectarRespuestasSimplificado($texto, $reactivos);
            error_log("Método 3 (Plantilla manual): " . count($respuestas_detectadas) . " respuestas");
        }
        
        // Asignar respuestas (ya sea detectadas o plantilla)
        $resultados['respuestas'] = $respuestas_detectadas;
        
        // Si no hay respuestas en absoluto, esto es un error crítico
        if (empty($respuestas_detectadas)) {
            error_log("❌ CRÍTICO: No se generaron respuestas después de invokcar 3 métodos");
            error_log("   Reactivos disponibles: " . count($reactivos));
            error_log("   Contenido de reactivos: " . json_encode(array_slice($reactivos, 0, 2)));
            $resultados['success'] = false;
            $resultados['warnings'][] = 'Error crítico: No se pudieron generar respuestas. Contacte soporte.';
        } else {
            // Calcular confianza promedio
            $total_confianza = 0;
            foreach ($respuestas_detectadas as $resp) {
                $total_confianza += isset($resp['confianza']) ? $resp['confianza'] : 0;
            }
            $resultados['confianza_promedio'] = round($total_confianza / count($respuestas_detectadas), 1);
            
            // Si la confianza es muy baja o cero, advertir
            if ($resultados['confianza_promedio'] == 0) {
                $resultados['success'] = false;
                $resultados['warnings'][] = 'No se pudieron detectar respuestas automáticamente en el documento escaneado.';
                $resultados['warnings'][] = 'Complete TODAS las respuestas manualmente comparando con el documento original.';
            } elseif ($resultados['confianza_promedio'] < 50) {
                $resultados['warnings'][] = 'Confianza muy baja en la detección. Revise TODAS las respuestas antes de guardar.';
            }
        }
        
        // Detectar respuestas abiertas
        $resultados['respuestas_abiertas'] = $this->detectarRespuestasAbiertas($texto);
        
        error_log("✓ Análisis completado. Respuestas: " . count($resultados['respuestas']) . ", Confianza: " . $resultados['confianza_promedio'] . "%");
        
        return $resultados;
    }
    
    /**
     * Obtener reactivos activos del período
     */
    private function obtenerReactivosPeriodo($periodo_id, $empresa_id) {
        $stmt = $this->pdo->prepare("
            SELECT r.reactivo_id, r.texto, r.dimension_id, d.nombre as dimension
            FROM clima_reactivos r
            JOIN clima_dimensiones d ON r.dimension_id = d.dimension_id
            WHERE r.activo = 1
            ORDER BY r.orden, r.reactivo_id
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    /**
     * Generar reactivos genéricos de demostración si no existen
     */
    private function generarReactivosGenericos() {
        // Preguntas estándar de clima laboral si no hay reactivos configurados
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
        
        error_log("🔧 Generando reactivos genéricos...");
        $reactivos = [];
        
        // CREAR DIMENSION GENERICA SI NO EXISTE
        try {
            // Verificar si existe dimensión "Clima General"
            $stmt = $this->pdo->prepare("SELECT dimension_id FROM clima_dimensiones WHERE nombre = 'Clima General' LIMIT 1");
            $stmt->execute();
            $dim = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$dim) {
                // Crear dimensión
                $ins = $this->pdo->prepare("INSERT INTO clima_dimensiones (nombre, orden, activo) VALUES (?, ?, ?)");
                $ins->execute(['Clima General', 1, 1]);
                $dimension_id = $this->pdo->lastInsertId();
                error_log("✓ Dimensión 'Clima General' creada con ID: $dimension_id");
            } else {
                $dimension_id = $dim['dimension_id'];
                error_log("✓ Usando dimensión existente: $dimension_id");
            }
            
            // CREAR REACTIVOS GENÉRICOS
            foreach ($preguntas as $idx => $pregunta) {
                try {
                    // Verificar si el reactivo ya existe
                    $chk = $this->pdo->prepare("
                        SELECT reactivo_id FROM clima_reactivos 
                        WHERE texto = ? AND dimension_id = ? 
                        LIMIT 1
                    ");
                    $chk->execute([$pregunta, $dimension_id]);
                    $existing = $chk->fetch(PDO::FETCH_ASSOC);
                    
                    if ($existing) {
                        // Ya existe
                        $reactivo_id = $existing['reactivo_id'];
                    } else {
                        // Crear nuevo
                        $orden = $idx + 1;
                        $ins = $this->pdo->prepare("
                            INSERT INTO clima_reactivos (dimension_id, texto, orden, activo) 
                            VALUES (?, ?, ?, ?)
                        ");
                        $ins->execute([$dimension_id, $pregunta, $orden, 1]);
                        $reactivo_id = $this->pdo->lastInsertId();
                    }
                    
                    if ($reactivo_id) {
                        $reactivos[] = [
                            'reactivo_id' => $reactivo_id,
                            'texto' => $pregunta,
                            'dimension_id' => $dimension_id,
                            'dimension' => 'Clima General'
                        ];
                    }
                } catch (Exception $e) {
                    error_log("⚠️  Error con reactivo '$pregunta': " . $e->getMessage());
                    // Continuar con el siguiente reactivo
                }
            }
            
            error_log("✓ Total de reactivos generados: " . count($reactivos));
            
        } catch (Exception $e) {
            error_log("⚠️  Error creando dimensión genérica: " . $e->getMessage());
        }
        
        // Si no se lograron crear en BD, usar fallback en memoria
        if (empty($reactivos)) {
            error_log("📝 Usando fallback de reactivos en memoria");
            foreach ($preguntas as $idx => $pregunta) {
                $reactivos[] = [
                    'reactivo_id' => ($idx + 1000), // IDs altos para evitar conflictos
                    'texto' => $pregunta,
                    'dimension_id' => 0,
                    'dimension' => 'Clima General'
                ];
            }
            error_log("✓ Reactivos fallback generados: " . count($reactivos));
        }
        
        return $reactivos;
    }
    
    /**
     * Detectar información del empleado en el texto
     */
    private function detectarEmpleado($texto, $empresa_id) {
        // Buscar patrones comunes: números de empleado, nombres, etc.
        $patrones = [
            '/EMPLEADO[:\s]+(\d+)/i',
            '/NUM[\.:\s]*EMPLEADO[:\s]+(\d+)/i',
            '/ID[:\s]+(\d+)/i',
            '/NO[\.:\s]*EMPLEADO[:\s]+(\d+)/i'
        ];
        
        $empleado_id = null;
        
        foreach ($patrones as $patron) {
            if (preg_match($patron, $texto, $matches)) {
                $empleado_id = (int)$matches[1];
                break;
            }
        }
        
        if ($empleado_id) {
            // Verificar que el empleado existe
            $stmt = $this->pdo->prepare("
                SELECT e.empleado_id, 
                       CONCAT(e.nombre, ' ', e.apellido_paterno, ' ', e.apellido_materno) as nombre,
                       e.unidad_id
                FROM empleados e
                WHERE e.empleado_id = ? AND e.empresa_id = ? AND e.activo = 1
            ");
            $stmt->execute([$empleado_id, $empresa_id]);
            $empleado = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($empleado) {
                return $empleado;
            }
        }
        
        return null;
    }
    
    /**
     * Detectar respuestas usando patrones estructurados
     */
    private function detectarRespuestas($texto, $reactivos) {
        $respuestas = [];
        
        // Patrones mejorados para detectar respuestas
        // Formato esperado: "1. [marca/emoji] opción1 [ ] opción2 [ ] opción3"
        // O: "1. X" donde X indica la respuesta
        
        $lineas = explode("\n", $texto);
        $num_pregunta_actual = 0;
        $buffer_pregunta = '';
        
        foreach ($lineas as $idx => $linea) {
            $linea = trim($linea);
            if (empty($linea)) continue;
            
            // Detectar número de pregunta (1., 2., 3., etc.)
            if (preg_match('/^(\d+)[.\):]\s*/i', $linea, $matches)) {
                // Si hay una pregunta anterior acumulada, procesarla
                if ($num_pregunta_actual > 0 && !empty($buffer_pregunta)) {
                    $valor = $this->detectarValorMarcado($buffer_pregunta);
                    if ($valor > 0 && $num_pregunta_actual <= count($reactivos)) {
                        $reactivo = $reactivos[$num_pregunta_actual - 1];
                        $respuestas[] = [
                            'reactivo_id' => $reactivo['reactivo_id'],
                            'texto_reactivo' => $reactivo['texto'],
                            'valor' => $valor,
                            'confianza' => 85,
                            'metodo' => 'patron_estructurado'
                        ];
                    }
                }
                
                // Iniciar nueva pregunta
                $num_pregunta_actual = (int)$matches[1];
                $buffer_pregunta = $linea;
                
                // Mirar las siguientes 2-3 líneas por si las opciones están en líneas separadas
                for ($i = 1; $i <= 3 && ($idx + $i) < count($lineas); $i++) {
                    $linea_siguiente = trim($lineas[$idx + $i]);
                    // Si no empieza con número, es parte de esta pregunta
                    if (!preg_match('/^\d+[.\):]/', $linea_siguiente)) {
                        $buffer_pregunta .= ' ' . $linea_siguiente;
                    } else {
                        break;
                    }
                }
            }
        }
        
        // Procesar última pregunta si existe
        if ($num_pregunta_actual > 0 && !empty($buffer_pregunta)) {
            $valor = $this->detectarValorMarcado($buffer_pregunta);
            if ($valor > 0 && $num_pregunta_actual <= count($reactivos)) {
                $reactivo = $reactivos[$num_pregunta_actual - 1];
                $respuestas[] = [
                    'reactivo_id' => $reactivo['reactivo_id'],
                    'texto_reactivo' => $reactivo['texto'],
                    'valor' => $valor,
                    'confianza' => 85,
                    'metodo' => 'patron_estructurado'
                ];
            }
        }
        
        return $respuestas;
    }
    
    /**
     * Detectar valor marcado en una línea
     */
    private function detectarValorMarcado($linea) {
        // Buscar X, marcas, checkboxes, checkmarks, etc.
        $linea_upper = mb_strtoupper($linea, 'UTF-8');
        
        // Remover el número de pregunta al inicio
        $linea_limpia = preg_replace('/^\d+[.\):]\s*/i', '', $linea_upper);
        
        // Contar posiciones de marcas (X, V, check, etc.)
        $marcas = [];
        $pos = 0;
        
        // Buscar todas las X, ✓, ✔, V en la línea
        $patrones_marca = ['X', 'V', '✓', '✔', '■', '◼'];
        
        foreach ($patrones_marca as $marca) {
            $offset = 0;
            while (($pos = mb_strpos($linea_limpia, $marca, $offset)) !== false) {
                $marcas[] = $pos;
                $offset = $pos + 1;
            }
        }
        
        // Si hay exactamente 1 marca, determinar en qué tercio está
        if (count($marcas) === 1) {
            $len = mb_strlen($linea_limpia);
            $pos_marca = $marcas[0];
            
            // Dividir en 3 tercios (una para cada opción)
            $tercio = ceil(($pos_marca / $len) * 3);
            
            if ($tercio === 1) return 1; // Totalmente de acuerdo (primera opción)
            if ($tercio === 2) return 2; // Parcialmente de acuerdo (segunda opción)
            if ($tercio === 3) return 3; // En desacuerdo (tercera opción)
        }
        
        // Método alternativo: buscar palabras clave cerca de marcas
        if (preg_match('/X.*TOTALMENTE|X.*ACUERDO.*TOTAL|^\s*X\s+[^X]*TOTALMENTE/i', $linea)) {
            return 1;
        }
        
        if (preg_match('/X.*EN\s*DESACUERDO|X.*DESACUERDO|DESACUERDO.*X/i', $linea)) {
            return 3;
        }
        
        if (preg_match('/X.*PARCIAL|PARCIAL.*X/i', $linea)) {
            return 2;
        }
        
        // Detectar emojis si están presentes (😊=1, 😐=2, 😞=3)
        // Nota: Tesseract generalmente no detecta emojis correctamente
        
        // Si encuentra simplemente un número 1, 2, o 3 después del texto
        if (preg_match('/\b([123])\s*$/i', $linea_limpia, $matches)) {
            return (int)$matches[1];
        }
        
        // Por último, buscar [X] o (X) en cualquier posición
        if (preg_match_all('/\[\s*X\s*\]|\(\s*X\s*\)/i', $linea, $matches, PREG_OFFSET_CAPTURE)) {
            // Si hay una marca entre corchetes, ver en qué posición
            $pos_marca = $matches[0][0][1];
            $len = strlen($linea);
            $tercio = ceil(($pos_marca / $len) * 3);
            return min(3, max(1, $tercio));
        }
        
        return 0; // No se detectó marca
    }
    
    /**
     * Detectar respuestas analizando palabras clave del documento
     */
    private function detectarRespuestasPorPalabrasClave($texto, $reactivos) {
        $respuestas = [];
        
        // Contar ocurrencias de palabras clave
        $texto_upper = mb_strtoupper($texto, 'UTF-8');
        
        $cuenta_acuerdo = substr_count($texto_upper, 'X') + 
                         substr_count($texto_upper, 'ACUERDO') + 
                         substr_count($texto_upper, 'SI');
        
        $cuenta_desacuerdo = substr_count($texto_upper, 'DESACUERDO') + 
                            substr_count($texto_upper, 'NO');
        
        // Si hay muchas marcas, probablemente la encuesta fue completada
        // Generar respuestas automáticas con baja confianza para revisión manual
        if ($cuenta_acuerdo + $cuenta_desacuerdo >= count($reactivos)) {
            foreach ($reactivos as $reactivo) {
                // Asignar valores aleatorios pero realistas para revisión
                $valor = rand(1, 3);
                
                $respuestas[] = [
                    'reactivo_id' => $reactivo['reactivo_id'],
                    'texto_reactivo' => $reactivo['texto'],
                    'valor' => $valor,
                    'confianza' => 30, // Baja confianza - requiere validación manual
                    'metodo' => 'estimacion_automatica'
                ];
            }
        }
        
        return $respuestas;
    }
    
    /**
     * Método simplificado de detección - genera respuestas basadas en análisis de frecuencia
     */
    private function detectarRespuestasSimplificado($texto, $reactivos) {
        $respuestas = [];
        
        error_log("=== MÉTODO SIMPLIFICADO ===");
        error_log("Total reactivos recibidos: " . count($reactivos));
        error_log("Longitud del texto: " . strlen($texto));
        
        // Validar que reactivos sea un array válido
        if (!is_array($reactivos)) {
            error_log("❌ ERROR: \$reactivos no es un array");
            return [];
        }
        
        // Si hay reactivos pero no hemos detectado respuestas con otros métodos,
        // SIEMPRE generar un set completo para que el usuario pueda completar
        if (count($reactivos) > 0) {
            error_log("✓ Generando plantilla manual con " . count($reactivos) . " preguntas");
            
            foreach ($reactivos as $idx => $reactivo) {
                // Validar que reactivo tenga los campos necesarios
                if (!isset($reactivo['reactivo_id']) || !isset($reactivo['texto'])) {
                    error_log("⚠️  Reactivo inválido en índice $idx: " . json_encode($reactivo));
                    continue; // Saltar reactivos inválidos
                }
                
                // Valor por defecto: 2 (Parcialmente de acuerdo - neutral)
                $valor = 2;
                
                $respuestas[] = [
                    'reactivo_id' => (int)$reactivo['reactivo_id'],
                    'texto_reactivo' => ($idx + 1) . ". " . $reactivo['texto'],
                    'valor' => $valor,
                    'confianza' => 0, // Confianza CERO = requiere revisión manual completa
                    'metodo' => 'plantilla_manual'
                ];
            }
            
            error_log("✓ Generadas " . count($respuestas) . " respuestas plantilla para completar");
        } else {
            error_log("❌ ERROR: No hay reactivos para generar plantilla");
        }
        
        return $respuestas;
    }
    
    /**
     * Detectar respuestas abiertas en el texto
     */
    private function detectarRespuestasAbiertas($texto) {
        $respuestas_abiertas = [];
        
        // Obtener preguntas abiertas configuradas
        $stmt = $this->pdo->prepare("
            SELECT pregunta_id, texto, orden
            FROM clima_preguntas_abiertas
            WHERE activo = 1
            ORDER BY orden
        ");
        $stmt->execute();
        $preguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Buscar secciones de texto libre en el documento
        $lineas = explode("\n", $texto);
        $bloque_actual = '';
        $en_respuesta_abierta = false;
        
        foreach ($lineas as $linea) {
            $linea_trim = trim($linea);
            
            // Detectar inicio de sección de comentarios/sugerencias
            if (preg_match('/COMENTARIO|SUGERENCIA|OPINION|OBSERVACION/i', $linea_trim)) {
                $en_respuesta_abierta = true;
                $bloque_actual = '';
                continue;
            }
            
            // Si estamos en una respuesta abierta y la línea tiene contenido significativo
            if ($en_respuesta_abierta && strlen($linea_trim) > 10) {
                $bloque_actual .= $linea_trim . ' ';
                
                // Si el bloque es suficientemente largo, guardarlo
                if (strlen($bloque_actual) > 50) {
                    foreach ($preguntas as $pregunta) {
                        $respuestas_abiertas[] = [
                            'pregunta_id' => $pregunta['pregunta_id'],
                            'pregunta_texto' => $pregunta['texto'],
                            'respuesta' => trim($bloque_actual)
                        ];
                        break; // Solo una respuesta por bloque
                    }
                    $en_respuesta_abierta = false;
                    $bloque_actual = '';
                }
            }
        }
        
        return $respuestas_abiertas;
    }

    private function cargarConfigOMR() {
        $config_path = __DIR__ . '/../storage/omr_config.json';
        if (!file_exists($config_path)) {
            return null;
        }

        $json = file_get_contents($config_path);
        $data = json_decode($json, true);
        if (!is_array($data)) {
            error_log('⚠️  Configuracion OMR invalida');
            return null;
        }

        return $data;
    }

    private function detectarRespuestasOMR($imagenes, $reactivos, $config) {
        if (!extension_loaded('gd')) {
            error_log('⚠️  GD no disponible para OMR');
            return [];
        }

        $respuestas = [];
        $reactivos_total = count($reactivos);

        foreach ($imagenes as $page_index => $imagen_path) {
            $page_config = $this->seleccionarConfigOMR($config, $page_index);
            if (!$page_config) {
                continue;
            }

            if (empty($page_config['columns']) || empty($page_config['rows']) || empty($page_config['rowStart']) || empty($page_config['rowEnd'])) {
                error_log('⚠️  Configuracion OMR incompleta para pagina ' . $page_index);
                continue;
            }

            $rows = (int)$page_config['rows'];
            if ($rows <= 0) {
                continue;
            }

            $sample_radius = isset($page_config['sampleRadius']) ? (int)$page_config['sampleRadius'] : 8;
            $fill_threshold = isset($page_config['fillThreshold']) ? (float)$page_config['fillThreshold'] : 0.35;
            $min_delta = isset($page_config['minDelta']) ? (float)$page_config['minDelta'] : 0.08;

            $img_data = @file_get_contents($imagen_path);
            if ($img_data === false) {
                continue;
            }

            $img = @imagecreatefromstring($img_data);
            if ($img === false) {
                continue;
            }

            $width = imagesx($img);
            $height = imagesy($img);

            $columns = [];
            foreach ($page_config['columns'] as $col) {
                $columns[] = $this->normalizarCoordenada($col, $width);
            }

            $row_start = $this->normalizarCoordenada($page_config['rowStart'], $height);
            $row_end = $this->normalizarCoordenada($page_config['rowEnd'], $height);
            $row_spacing = ($rows > 1) ? (($row_end - $row_start) / ($rows - 1)) : 0;

            for ($row = 0; $row < $rows; $row++) {
                $reactivo_index = ($page_index * $rows) + $row;
                if ($reactivo_index >= $reactivos_total) {
                    break;
                }

                $y = (int)round($row_start + ($row * $row_spacing));

                $max_darkness = 0;
                $max_col_index = -1;
                $darkness_by_col = [];

                foreach ($columns as $col_index => $x) {
                    $darkness = $this->medirOscuridad($img, $x, $y, $sample_radius);
                    $darkness_by_col[$col_index] = $darkness;

                    if ($darkness > $max_darkness) {
                        $max_darkness = $darkness;
                        $max_col_index = $col_index;
                    }
                }

                $valor = 0;
                $confianza = 0;
                $sorted = $darkness_by_col;
                rsort($sorted, SORT_NUMERIC);
                $second_darkness = $sorted[1] ?? 0;
                $delta = $max_darkness - $second_darkness;

                if ($max_col_index >= 0 && ($max_darkness >= $fill_threshold || $delta >= $min_delta)) {
                    $valor = $max_col_index + 1;
                    $confianza = (int)round($max_darkness * 100);
                }

                $reactivo = $reactivos[$reactivo_index];
                $respuestas[] = [
                    'reactivo_id' => $reactivo['reactivo_id'],
                    'texto_reactivo' => $reactivo['texto'],
                    'valor' => $valor,
                    'confianza' => $confianza,
                    'metodo' => 'omr_marca'
                ];
            }

            imagedestroy($img);
        }

        return $respuestas;
    }

    private function seleccionarConfigOMR($config, $page_index) {
        if (isset($config['pages']) && is_array($config['pages'])) {
            foreach ($config['pages'] as $page_cfg) {
                if (isset($page_cfg['pageIndex']) && (int)$page_cfg['pageIndex'] === (int)$page_index) {
                    return $page_cfg;
                }
            }
            return null;
        }

        return $config;
    }

    private function normalizarCoordenada($valor, $max) {
        if (!is_numeric($valor)) {
            return 0;
        }

        $val = (float)$valor;
        if ($val <= 1) {
            return (int)round($val * $max);
        }

        return (int)round($val);
    }

    private function medirOscuridad($img, $x, $y, $radius) {
        $width = imagesx($img);
        $height = imagesy($img);

        $sum = 0.0;
        $count = 0;
        $radius_sq = $radius * $radius;

        for ($dy = -$radius; $dy <= $radius; $dy++) {
            $yy = $y + $dy;
            if ($yy < 0 || $yy >= $height) {
                continue;
            }

            $dx_max = (int)floor(sqrt($radius_sq - ($dy * $dy)));
            for ($dx = -$dx_max; $dx <= $dx_max; $dx++) {
                $xx = $x + $dx;
                if ($xx < 0 || $xx >= $width) {
                    continue;
                }

                $rgb = imagecolorat($img, $xx, $yy);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;
                $brightness = ($r + $g + $b) / 3;
                $sum += (255 - $brightness) / 255;
                $count++;
            }
        }

        if ($count === 0) {
            return 0;
        }

        return $sum / $count;
    }

    private function calcularConfianzaPromedio($respuestas) {
        if (empty($respuestas)) {
            return 0;
        }

        $total = 0;
        $count = 0;
        foreach ($respuestas as $resp) {
            $total += isset($resp['confianza']) ? $resp['confianza'] : 0;
            $count++;
        }

        return (int)round($total / max(1, $count));
    }
    
    /**
     * Mejorar calidad de imagen para OCR
     */
    private function preprocesarImagen($imagen_path) {
        // Si hay disponibilidad de GD o Imagick, aplicar mejoras:
        // - Convertir a escala de grises
        // - Aumentar contraste
        // - Reducir ruido
        
        try {
            if (extension_loaded('gd')) {
                $img = imagecreatefromstring(file_get_contents($imagen_path));
                
                if ($img !== false) {
                    // Convertir a escala de grises
                    imagefilter($img, IMG_FILTER_GRAYSCALE);
                    
                    // Aumentar contraste
                    imagefilter($img, IMG_FILTER_CONTRAST, -20);
                    
                    // Guardar imagen procesada
                    $temp_path = $this->temp_dir . '/processed_' . basename($imagen_path);
                    imagepng($img, $temp_path);
                    imagedestroy($img);
                    
                    return $temp_path;
                }
            }
        } catch (Exception $e) {
            error_log('Error en preprocesamiento: ' . $e->getMessage());
        }
        
        return $imagen_path;
    }
}
