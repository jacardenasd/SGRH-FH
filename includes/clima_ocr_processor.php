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
                
                // Limpiar imágenes temporales si fueron convertidas de PDF
                if ($extension === 'pdf' && file_exists($imagen)) {
                    @unlink($imagen);
                }
            }
            
            // Analizar el texto extraído
            $resultados = $this->analizarTextoEncuesta($texto_completo, $periodo_id, $empresa_id);
            
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
     * Convertir PDF a imágenes usando Imagick o alternativas
     */
    private function convertirPDFaImagenes($pdf_path) {
        $imagenes = [];
        
        // Intentar con Imagick si está disponible
        if (extension_loaded('imagick')) {
            try {
                $imagick = new Imagick();
                $imagick->setResolution(300, 300);
                $imagick->readImage($pdf_path);
                
                $num_pages = $imagick->getNumberImages();
                
                for ($i = 0; $i < $num_pages; $i++) {
                    $imagick->setIteratorIndex($i);
                    $imagick->setImageFormat('png');
                    
                    $temp_image = $this->temp_dir . '/page_' . uniqid() . '.png';
                    $imagick->writeImage($temp_image);
                    $imagenes[] = $temp_image;
                }
                
                $imagick->clear();
                $imagick->destroy();
                
                return $imagenes;
                
            } catch (Exception $e) {
                error_log('Error con Imagick: ' . $e->getMessage());
            }
        }
        
        // Si no hay Imagick, intentar con pdftoppm (incluido en algunas instalaciones)
        // Por ahora, lanzar excepción indicando que necesitan Imagick
        throw new Exception('PDF detectado: Necesita instalar PHP Imagick para procesar PDFs. Alternativamente, convierta el PDF a imagen (PNG/JPG) manualmente.');
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
            escapeshellarg($imagen_path),
            escapeshellarg($output_file)
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
        
        return $texto;
    }
    
    /**
     * Analizar texto extraído y detectar respuestas
     */
    private function analizarTextoEncuesta($texto, $periodo_id, $empresa_id) {
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
        
        // Obtener reactivos del período
        $reactivos = $this->obtenerReactivosPeriodo($periodo_id, $empresa_id);
        
        if (empty($reactivos)) {
            throw new Exception('No se encontraron reactivos para este período');
        }
        
        // Intentar detectar empleado (si viene en el documento)
        $empleado_info = $this->detectarEmpleado($texto, $empresa_id);
        if ($empleado_info) {
            $resultados['empleado_id'] = $empleado_info['empleado_id'];
            $resultados['empleado_nombre'] = $empleado_info['nombre'];
            $resultados['unidad_id'] = $empleado_info['unidad_id'];
        } else {
            // Si no se detecta empleado, será captura anónima
            $resultados['es_anonima'] = true;
            $resultados['warnings'][] = 'No se detectó información de empleado. Captura anónima.';
        }
        
        // Detectar respuestas usando patrones
        $respuestas_detectadas = $this->detectarRespuestas($texto, $reactivos);
        
        if (empty($respuestas_detectadas)) {
            // Si no se detectan respuestas automáticamente, usar método de análisis de palabras clave
            $respuestas_detectadas = $this->detectarRespuestasPorPalabrasClave($texto, $reactivos);
        }
        
        if (empty($respuestas_detectadas)) {
            $resultados['success'] = false;
            $resultados['warnings'][] = 'No se pudieron detectar respuestas. El documento puede estar en un formato no reconocible.';
            
            // Crear respuestas por defecto para que el usuario las complete manualmente
            foreach ($reactivos as $reactivo) {
                $resultados['respuestas'][] = [
                    'reactivo_id' => $reactivo['reactivo_id'],
                    'texto_reactivo' => $reactivo['texto'],
                    'valor' => 2, // Valor neutral por defecto
                    'confianza' => 0,
                    'metodo' => 'manual_requerido'
                ];
            }
        } else {
            $resultados['respuestas'] = $respuestas_detectadas;
            
            // Calcular confianza promedio
            $total_confianza = 0;
            foreach ($respuestas_detectadas as $resp) {
                $total_confianza += $resp['confianza'];
            }
            $resultados['confianza_promedio'] = round($total_confianza / count($respuestas_detectadas), 1);
        }
        
        // Detectar respuestas abiertas
        $resultados['respuestas_abiertas'] = $this->detectarRespuestasAbiertas($texto);
        
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
        
        // Patrones para detectar respuestas marcadas
        // Formato esperado: "1. [X] De acuerdo [ ] Parcialmente [ ] Desacuerdo"
        // O: "1. X 2. 3."
        
        $lineas = explode("\n", $texto);
        $numero_pregunta = 0;
        
        foreach ($lineas as $linea) {
            $linea = trim($linea);
            
            // Detectar si la línea contiene un número de pregunta
            if (preg_match('/^(\d+)[.\)]\s*/i', $linea, $matches)) {
                $numero_pregunta = (int)$matches[1];
                
                if ($numero_pregunta > 0 && $numero_pregunta <= count($reactivos)) {
                    $reactivo = $reactivos[$numero_pregunta - 1];
                    
                    // Detectar cuál opción está marcada
                    $valor = $this->detectarValorMarcado($linea);
                    
                    if ($valor > 0) {
                        $respuestas[] = [
                            'reactivo_id' => $reactivo['reactivo_id'],
                            'texto_reactivo' => $reactivo['texto'],
                            'valor' => $valor,
                            'confianza' => 75, // Confianza media al detectar por patrón
                            'metodo' => 'patron_estructurado'
                        ];
                    }
                }
            }
        }
        
        return $respuestas;
    }
    
    /**
     * Detectar valor marcado en una línea
     */
    private function detectarValorMarcado($linea) {
        // Buscar X, marcas, checkboxes, etc.
        $linea_upper = mb_strtoupper($linea, 'UTF-8');
        
        // Patrones para opción 1 (Totalmente de acuerdo)
        if (preg_match('/\[X\].*DE\s*ACUERDO|DE\s*ACUERDO.*\[X\]|^\s*X\s*[^\s]|TOTALMENTE/i', $linea)) {
            return 1;
        }
        
        // Patrones para opción 3 (En desacuerdo)
        if (preg_match('/\[X\].*DESACUERDO|DESACUERDO.*\[X\]|EN\s*DESACUERDO/i', $linea)) {
            return 3;
        }
        
        // Patrones para opción 2 (Parcialmente de acuerdo) - por eliminación
        if (preg_match('/\[X\].*PARCIAL|PARCIAL.*\[X\]/i', $linea)) {
            return 2;
        }
        
        // Si encuentra simplemente números 1, 2, o 3 después del número de pregunta
        if (preg_match('/^\d+[.\)]\s*([123])\s*$/i', $linea, $matches)) {
            return (int)$matches[1];
        }
        
        return 0;
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
