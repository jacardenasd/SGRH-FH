-- ============================================================================
-- CONSULTAS SQL ÚTILES - ANÁLISIS DE RESPUESTAS ABIERTAS
-- Módulo: Clima Laboral - SGRH
-- ============================================================================

-- ============================================================================
-- 1. CONSULTAS BÁSICAS
-- ============================================================================

-- Ver todas las preguntas abiertas activas
SELECT 
    p.pregunta_id,
    p.texto,
    p.orden,
    p.obligatorio,
    d.nombre AS dimension
FROM clima_preguntas_abiertas p
LEFT JOIN clima_dimensiones d ON p.dimension_id = d.dimension_id
WHERE p.activo = 1
ORDER BY p.orden;

-- Contar respuestas por periodo
SELECT 
    cp.anio,
    cp.periodo_id,
    COUNT(DISTINCT ra.empleado_id) AS empleados_respondieron,
    COUNT(*) AS total_respuestas
FROM clima_respuestas_abiertas ra
INNER JOIN clima_periodos cp ON ra.periodo_id = cp.periodo_id
GROUP BY cp.periodo_id, cp.anio
ORDER BY cp.anio DESC;

-- Ver respuestas de un periodo específico
SELECT 
    ra.respuesta_abierta_id,
    p.texto AS pregunta,
    ra.respuesta,
    u.nombre AS unidad,
    ra.fecha_respuesta
FROM clima_respuestas_abiertas ra
INNER JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
LEFT JOIN org_unidades u ON ra.unidad_id = u.unidad_id
WHERE ra.periodo_id = 1  -- Cambiar por tu periodo_id
ORDER BY ra.fecha_respuesta DESC;

-- ============================================================================
-- 2. ANÁLISIS POR PREGUNTA
-- ============================================================================

-- Respuestas por pregunta (con contadores)
SELECT 
    p.pregunta_id,
    p.texto AS pregunta,
    COUNT(*) AS total_respuestas,
    AVG(LENGTH(ra.respuesta)) AS longitud_promedio,
    MIN(LENGTH(ra.respuesta)) AS respuesta_mas_corta,
    MAX(LENGTH(ra.respuesta)) AS respuesta_mas_larga
FROM clima_respuestas_abiertas ra
INNER JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
WHERE ra.periodo_id = 1  -- Cambiar periodo
GROUP BY p.pregunta_id, p.texto
ORDER BY total_respuestas DESC;

-- Ver todas las respuestas de una pregunta específica
SELECT 
    ra.respuesta,
    u.nombre AS unidad,
    ra.fecha_respuesta
FROM clima_respuestas_abiertas ra
LEFT JOIN org_unidades u ON ra.unidad_id = u.unidad_id
WHERE ra.periodo_id = 1  -- Cambiar periodo
  AND ra.pregunta_id = 1  -- Cambiar pregunta
ORDER BY ra.fecha_respuesta DESC;

-- ============================================================================
-- 3. ANÁLISIS POR UNIDAD ORGANIZACIONAL
-- ============================================================================

-- Respuestas por unidad
SELECT 
    u.unidad_id,
    u.nombre AS unidad,
    COUNT(DISTINCT ra.empleado_id) AS empleados_respondieron,
    COUNT(*) AS total_respuestas,
    AVG(LENGTH(ra.respuesta)) AS caracteres_promedio
FROM clima_respuestas_abiertas ra
INNER JOIN org_unidades u ON ra.unidad_id = u.unidad_id
WHERE ra.periodo_id = 1
GROUP BY u.unidad_id, u.nombre
ORDER BY total_respuestas DESC;

-- Ver respuestas de una unidad específica
SELECT 
    p.texto AS pregunta,
    ra.respuesta,
    ra.fecha_respuesta
FROM clima_respuestas_abiertas ra
INNER JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
WHERE ra.periodo_id = 1
  AND ra.unidad_id = 5  -- Cambiar por tu unidad_id
ORDER BY p.orden, ra.fecha_respuesta DESC;

-- ============================================================================
-- 4. BÚSQUEDAS POR PALABRAS CLAVE
-- ============================================================================

-- Buscar respuestas que contengan una palabra específica
SELECT 
    p.texto AS pregunta,
    ra.respuesta,
    u.nombre AS unidad,
    ra.fecha_respuesta
FROM clima_respuestas_abiertas ra
INNER JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
LEFT JOIN org_unidades u ON ra.unidad_id = u.unidad_id
WHERE ra.periodo_id = 1
  AND LOWER(ra.respuesta) LIKE '%comunicación%'  -- Cambiar palabra
ORDER BY ra.fecha_respuesta DESC;

-- Contar menciones de palabras clave (múltiples)
SELECT 
    'comunicación' AS palabra_clave,
    COUNT(*) AS menciones
FROM clima_respuestas_abiertas
WHERE periodo_id = 1 AND LOWER(respuesta) LIKE '%comunicación%'
UNION ALL
SELECT 
    'capacitación' AS palabra_clave,
    COUNT(*) AS menciones
FROM clima_respuestas_abiertas
WHERE periodo_id = 1 AND LOWER(respuesta) LIKE '%capacitación%'
UNION ALL
SELECT 
    'liderazgo' AS palabra_clave,
    COUNT(*) AS menciones
FROM clima_respuestas_abiertas
WHERE periodo_id = 1 AND LOWER(respuesta) LIKE '%liderazgo%'
ORDER BY menciones DESC;

-- Buscar respuestas con múltiples palabras (tema complejo)
SELECT 
    p.texto AS pregunta,
    ra.respuesta,
    u.nombre AS unidad
FROM clima_respuestas_abiertas ra
INNER JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
LEFT JOIN org_unidades u ON ra.unidad_id = u.unidad_id
WHERE ra.periodo_id = 1
  AND (
    LOWER(ra.respuesta) LIKE '%salario%' 
    OR LOWER(ra.respuesta) LIKE '%sueldo%'
    OR LOWER(ra.respuesta) LIKE '%prestaciones%'
  )
ORDER BY ra.fecha_respuesta DESC;

-- ============================================================================
-- 5. ANÁLISIS DE LONGITUD Y CALIDAD
-- ============================================================================

-- Respuestas más largas (más detalladas)
SELECT 
    p.texto AS pregunta,
    ra.respuesta,
    LENGTH(ra.respuesta) AS longitud,
    u.nombre AS unidad,
    ra.fecha_respuesta
FROM clima_respuestas_abiertas ra
INNER JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
LEFT JOIN org_unidades u ON ra.unidad_id = u.unidad_id
WHERE ra.periodo_id = 1
ORDER BY LENGTH(ra.respuesta) DESC
LIMIT 20;

-- Respuestas más cortas (menos detalle)
SELECT 
    p.texto AS pregunta,
    ra.respuesta,
    LENGTH(ra.respuesta) AS longitud,
    u.nombre AS unidad
FROM clima_respuestas_abiertas ra
INNER JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
LEFT JOIN org_unidades u ON ra.unidad_id = u.unidad_id
WHERE ra.periodo_id = 1
  AND LENGTH(ra.respuesta) > 0
ORDER BY LENGTH(ra.respuesta) ASC
LIMIT 20;

-- Distribución de longitud de respuestas
SELECT 
    CASE 
        WHEN LENGTH(respuesta) < 50 THEN '1. Muy corta (< 50)'
        WHEN LENGTH(respuesta) < 100 THEN '2. Corta (50-100)'
        WHEN LENGTH(respuesta) < 200 THEN '3. Media (100-200)'
        WHEN LENGTH(respuesta) < 300 THEN '4. Larga (200-300)'
        ELSE '5. Muy larga (> 300)'
    END AS categoria,
    COUNT(*) AS cantidad
FROM clima_respuestas_abiertas
WHERE periodo_id = 1
GROUP BY categoria
ORDER BY categoria;

-- ============================================================================
-- 6. ANÁLISIS TEMPORAL
-- ============================================================================

-- Respuestas por día
SELECT 
    DATE(fecha_respuesta) AS fecha,
    COUNT(*) AS total_respuestas,
    COUNT(DISTINCT empleado_id) AS empleados_unicos
FROM clima_respuestas_abiertas
WHERE periodo_id = 1
GROUP BY DATE(fecha_respuesta)
ORDER BY fecha DESC;

-- Respuestas por hora del día
SELECT 
    HOUR(fecha_respuesta) AS hora,
    COUNT(*) AS total_respuestas
FROM clima_respuestas_abiertas
WHERE periodo_id = 1
GROUP BY HOUR(fecha_respuesta)
ORDER BY hora;

-- Primeras y últimas respuestas
SELECT 
    'Primera respuesta' AS tipo,
    MIN(fecha_respuesta) AS fecha
FROM clima_respuestas_abiertas
WHERE periodo_id = 1
UNION ALL
SELECT 
    'Última respuesta' AS tipo,
    MAX(fecha_respuesta) AS fecha
FROM clima_respuestas_abiertas
WHERE periodo_id = 1;

-- ============================================================================
-- 7. COMPARATIVA ENTRE PERIODOS
-- ============================================================================

-- Comparar cantidad de respuestas entre periodos
SELECT 
    cp.anio,
    cp.periodo_id,
    COUNT(DISTINCT ra.empleado_id) AS empleados_respondieron,
    COUNT(*) AS total_respuestas,
    ROUND(AVG(LENGTH(ra.respuesta)), 0) AS caracteres_promedio
FROM clima_respuestas_abiertas ra
INNER JOIN clima_periodos cp ON ra.periodo_id = cp.periodo_id
GROUP BY cp.periodo_id, cp.anio
ORDER BY cp.anio DESC;

-- Palabras clave por periodo
SELECT 
    cp.anio,
    COUNT(*) AS menciones_comunicacion
FROM clima_respuestas_abiertas ra
INNER JOIN clima_periodos cp ON ra.periodo_id = cp.periodo_id
WHERE LOWER(ra.respuesta) LIKE '%comunicación%'
GROUP BY cp.anio
ORDER BY cp.anio DESC;

-- ============================================================================
-- 8. ANÁLISIS DE DIMENSIONES
-- ============================================================================

-- Respuestas por dimensión
SELECT 
    d.nombre AS dimension,
    p.pregunta_id,
    p.texto AS pregunta,
    COUNT(*) AS total_respuestas
FROM clima_respuestas_abiertas ra
INNER JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
LEFT JOIN clima_dimensiones d ON p.dimension_id = d.dimension_id
WHERE ra.periodo_id = 1
GROUP BY d.nombre, p.pregunta_id, p.texto
ORDER BY d.nombre, total_respuestas DESC;

-- ============================================================================
-- 9. EXPORTACIÓN Y REPORTES
-- ============================================================================

-- Exportación completa para Excel/CSV
SELECT 
    cp.anio AS periodo,
    p.texto AS pregunta,
    d.nombre AS dimension,
    u.nombre AS unidad,
    ra.respuesta,
    DATE_FORMAT(ra.fecha_respuesta, '%d/%m/%Y %H:%i') AS fecha_hora
FROM clima_respuestas_abiertas ra
INNER JOIN clima_periodos cp ON ra.periodo_id = cp.periodo_id
INNER JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
LEFT JOIN clima_dimensiones d ON p.dimension_id = d.dimension_id
LEFT JOIN org_unidades u ON ra.unidad_id = u.unidad_id
WHERE ra.periodo_id = 1  -- Cambiar periodo
ORDER BY p.orden, ra.fecha_respuesta DESC;

-- Resumen ejecutivo por periodo
SELECT 
    cp.anio AS periodo,
    COUNT(DISTINCT ra.empleado_id) AS empleados_respondieron,
    COUNT(*) AS total_respuestas_abiertas,
    COUNT(DISTINCT p.pregunta_id) AS preguntas_activas,
    ROUND(AVG(LENGTH(ra.respuesta)), 0) AS caracteres_promedio,
    MIN(LENGTH(ra.respuesta)) AS respuesta_mas_corta,
    MAX(LENGTH(ra.respuesta)) AS respuesta_mas_larga,
    DATE_FORMAT(MIN(ra.fecha_respuesta), '%d/%m/%Y') AS primera_respuesta,
    DATE_FORMAT(MAX(ra.fecha_respuesta), '%d/%m/%Y') AS ultima_respuesta
FROM clima_respuestas_abiertas ra
INNER JOIN clima_periodos cp ON ra.periodo_id = cp.periodo_id
INNER JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
WHERE ra.periodo_id = 1
GROUP BY cp.anio;

-- ============================================================================
-- 10. ANÁLISIS AVANZADO - SENTIMIENTO (MANUAL)
-- ============================================================================

-- Respuestas con palabras positivas
SELECT 
    COUNT(*) AS respuestas_positivas
FROM clima_respuestas_abiertas
WHERE periodo_id = 1
  AND (
    LOWER(respuesta) LIKE '%excelente%' 
    OR LOWER(respuesta) LIKE '%bueno%'
    OR LOWER(respuesta) LIKE '%bien%'
    OR LOWER(respuesta) LIKE '%mejor%'
    OR LOWER(respuesta) LIKE '%apoyo%'
    OR LOWER(respuesta) LIKE '%feliz%'
    OR LOWER(respuesta) LIKE '%satisfecho%'
  );

-- Respuestas con palabras negativas
SELECT 
    COUNT(*) AS respuestas_negativas
FROM clima_respuestas_abiertas
WHERE periodo_id = 1
  AND (
    LOWER(respuesta) LIKE '%mal%' 
    OR LOWER(respuesta) LIKE '%problema%'
    OR LOWER(respuesta) LIKE '%falta%'
    OR LOWER(respuesta) LIKE '%dificultad%'
    OR LOWER(respuesta) LIKE '%conflicto%'
  );

-- Ver respuestas negativas para análisis
SELECT 
    p.texto AS pregunta,
    ra.respuesta,
    u.nombre AS unidad,
    ra.fecha_respuesta
FROM clima_respuestas_abiertas ra
INNER JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
LEFT JOIN org_unidades u ON ra.unidad_id = u.unidad_id
WHERE ra.periodo_id = 1
  AND (
    LOWER(ra.respuesta) LIKE '%mal%' 
    OR LOWER(ra.respuesta) LIKE '%problema%'
    OR LOWER(ra.respuesta) LIKE '%falta%'
  )
ORDER BY ra.fecha_respuesta DESC;

-- ============================================================================
-- 11. MANTENIMIENTO Y LIMPIEZA
-- ============================================================================

-- Encontrar respuestas vacías o muy cortas (posible basura)
SELECT 
    respuesta_abierta_id,
    pregunta_id,
    respuesta,
    LENGTH(respuesta) AS longitud
FROM clima_respuestas_abiertas
WHERE periodo_id = 1
  AND (
    respuesta = '' 
    OR TRIM(respuesta) = ''
    OR LENGTH(respuesta) < 5
  );

-- Contar respuestas duplicadas (mismo empleado, misma pregunta)
SELECT 
    periodo_id,
    empleado_id,
    pregunta_id,
    COUNT(*) AS veces
FROM clima_respuestas_abiertas
GROUP BY periodo_id, empleado_id, pregunta_id
HAVING COUNT(*) > 1;

-- ============================================================================
-- 12. VALIDACIONES DE INTEGRIDAD
-- ============================================================================

-- Verificar respuestas sin pregunta asociada (huérfanas)
SELECT COUNT(*) AS respuestas_huerfanas
FROM clima_respuestas_abiertas ra
LEFT JOIN clima_preguntas_abiertas p ON ra.pregunta_id = p.pregunta_id
WHERE p.pregunta_id IS NULL;

-- Verificar empleados con respuestas (conteo)
SELECT COUNT(DISTINCT ra.empleado_id) AS empleados_con_respuestas
FROM clima_respuestas_abiertas ra
WHERE ra.periodo_id = 1;

-- Verificar respuestas sin unidad válida
SELECT COUNT(*) AS sin_unidad_valida
FROM clima_respuestas_abiertas ra
LEFT JOIN org_unidades u ON ra.unidad_id = u.unidad_id
WHERE ra.unidad_id IS NOT NULL 
  AND u.unidad_id IS NULL;

-- ============================================================================
-- NOTAS DE USO:
-- ============================================================================
-- 1. Reemplazar "periodo_id = 1" con el ID del periodo que deseas analizar
-- 2. Reemplazar "pregunta_id = 1" con el ID de la pregunta específica
-- 3. Reemplazar "unidad_id = 5" con el ID de la unidad organizacional
-- 4. Las consultas LIKE son case-insensitive en MySQL por defecto
-- 5. Para búsquedas más precisas, considerar usar REGEXP
-- 6. Algunas consultas pueden ser lentas con muchos datos, agregar índices si es necesario
-- ============================================================================

-- FIN DE CONSULTAS
