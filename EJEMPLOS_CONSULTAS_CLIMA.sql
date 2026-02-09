-- ================================================================
-- EJEMPLOS DE CONSULTAS PARA VERIFICAR DATOS DE CLIMA LABORAL
-- ================================================================

-- ================================================================
-- 1. RESUMEN GENERAL
-- ================================================================

-- Total de respuestas generadas
SELECT 'Total de respuestas' AS metrica, COUNT(*) AS cantidad
FROM clima_respuestas 
WHERE periodo_id = 1 AND empresa_id = 1;

-- Empleados que respondieron
SELECT 'Empleados que respondieron' AS metrica, COUNT(DISTINCT empleado_id) AS cantidad
FROM clima_respuestas 
WHERE periodo_id = 1 AND empresa_id = 1;

-- Elegibles totales
SELECT 'Elegibles totales' AS metrica, COUNT(*) AS cantidad
FROM clima_elegibles
WHERE periodo_id = 1 AND empresa_id = 1;

-- Tasa de participación
SELECT 'Tasa de participación' AS metrica, 
       CONCAT(ROUND((
         SELECT COUNT(DISTINCT empleado_id) FROM clima_respuestas 
         WHERE periodo_id = 1 AND empresa_id = 1
       ) / COUNT(*) * 100, 1), '%') AS valor
FROM clima_elegibles
WHERE periodo_id = 1 AND empresa_id = 1;

-- ================================================================
-- 2. PROMEDIOS GENERALES
-- ================================================================

-- Promedio general (escala 1-3 → 0-100%)
SELECT 'Promedio General' AS superdimension,
       ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) AS promedio,
       COUNT(*) AS respuestas,
       COUNT(DISTINCT cr.empleado_id) AS empleados
FROM clima_respuestas cr
WHERE cr.periodo_id = 1 AND cr.empresa_id = 1;

-- Desglose por valor
SELECT cr.valor AS respuesta,
       CASE 
           WHEN cr.valor = 1 THEN '1 - En Desacuerdo'
           WHEN cr.valor = 2 THEN '2 - Parcialmente De Acuerdo'
           WHEN cr.valor = 3 THEN '3 - Totalmente De Acuerdo'
       END AS significado,
       COUNT(*) AS cantidad,
       CONCAT(ROUND(COUNT(*) / (SELECT COUNT(*) FROM clima_respuestas 
                                WHERE periodo_id = 1 AND empresa_id = 1) * 100, 1), '%') AS porcentaje
FROM clima_respuestas cr
WHERE cr.periodo_id = 1 AND cr.empresa_id = 1
GROUP BY cr.valor
ORDER BY cr.valor;

-- ================================================================
-- 3. RESULTADOS POR SUPERDIMENSIÓN
-- ================================================================

-- Promedio por superdimensión
SELECT 
    CASE 
        WHEN d.superdimension = 1 THEN 'Relación con el Jefe Inmediato'
        WHEN d.superdimension = 2 THEN 'Relación con los Compañeros'
        WHEN d.superdimension = 3 THEN 'Relación con la Empresa'
        WHEN d.superdimension = 4 THEN 'Relación con el Trabajo'
    END AS superdimension,
    d.superdimension AS codigo,
    ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) AS promedio,
    COUNT(*) AS respuestas,
    CASE 
        WHEN ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) < 30 THEN 'Crítico'
        WHEN ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) < 50 THEN 'Alerta'
        WHEN ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) < 70 THEN 'Regular'
        ELSE 'Bueno'
    END AS estado
FROM clima_respuestas cr
JOIN clima_reactivos crt ON cr.reactivo_id = crt.reactivo_id
JOIN clima_dimensiones d ON crt.dimension_id = d.dimension_id
WHERE cr.periodo_id = 1 AND cr.empresa_id = 1
GROUP BY d.superdimension
ORDER BY d.superdimension;

-- ================================================================
-- 4. RESULTADOS POR DIMENSIÓN
-- ================================================================

-- Promedio por dimensión ordenado
SELECT 
    d.dimension_id,
    d.nombre AS dimension,
    CASE 
        WHEN d.superdimension = 1 THEN 'Relación con el Jefe'
        WHEN d.superdimension = 2 THEN 'Relación con Compañeros'
        WHEN d.superdimension = 3 THEN 'Relación con Empresa'
        WHEN d.superdimension = 4 THEN 'Relación con Trabajo'
    END AS superdimension,
    ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) AS promedio,
    COUNT(*) AS respuestas,
    COUNT(DISTINCT cr.empleado_id) AS empleados_respondieron,
    CASE 
        WHEN ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) < 30 THEN '🔴 Crítico'
        WHEN ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) < 50 THEN '🟠 Alerta'
        WHEN ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) < 70 THEN '🟢 Regular'
        ELSE '🔵 Bueno'
    END AS estado
FROM clima_respuestas cr
JOIN clima_reactivos crt ON cr.reactivo_id = crt.reactivo_id
JOIN clima_dimensiones d ON crt.dimension_id = d.dimension_id
WHERE cr.periodo_id = 1 AND cr.empresa_id = 1
GROUP BY d.dimension_id, d.nombre, d.superdimension
ORDER BY d.superdimension, d.nombre;

-- ================================================================
-- 5. RESULTADOS POR UNIDAD
-- ================================================================

-- Promedio por unidad (superdimensión)
SELECT 
    ou.nombre AS unidad,
    CASE 
        WHEN d.superdimension = 1 THEN 'Relación con el Jefe Inmediato'
        WHEN d.superdimension = 2 THEN 'Relación con los Compañeros'
        WHEN d.superdimension = 3 THEN 'Relación con la Empresa'
        WHEN d.superdimension = 4 THEN 'Relación con el Trabajo'
    END AS superdimension,
    ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) AS promedio,
    COUNT(DISTINCT cr.empleado_id) AS respondentes
FROM clima_respuestas cr
JOIN org_unidades ou ON cr.unidad_id = ou.unidad_id
JOIN clima_reactivos crt ON cr.reactivo_id = crt.reactivo_id
JOIN clima_dimensiones d ON crt.dimension_id = d.dimension_id
WHERE cr.periodo_id = 1 AND cr.empresa_id = 1
GROUP BY ou.unidad_id, ou.nombre, d.superdimension
ORDER BY ou.nombre, d.superdimension;

-- Promedio general por unidad
SELECT 
    ou.nombre AS unidad,
    ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) AS promedio_general,
    COUNT(*) AS total_respuestas,
    COUNT(DISTINCT cr.empleado_id) AS respondentes,
    COUNT(DISTINCT crt.reactivo_id) AS reactivos
FROM clima_respuestas cr
JOIN org_unidades ou ON cr.unidad_id = ou.unidad_id
JOIN clima_reactivos crt ON cr.reactivo_id = crt.reactivo_id
WHERE cr.periodo_id = 1 AND cr.empresa_id = 1
GROUP BY ou.unidad_id, ou.nombre
ORDER BY promedio_general DESC;

-- ================================================================
-- 6. TOP DIMENSIONES (Mejores y Peores)
-- ================================================================

-- Top 5 dimensiones mejor evaluadas
SELECT 
    d.nombre,
    ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) AS promedio
FROM clima_respuestas cr
JOIN clima_reactivos crt ON cr.reactivo_id = crt.reactivo_id
JOIN clima_dimensiones d ON crt.dimension_id = d.dimension_id
WHERE cr.periodo_id = 1 AND cr.empresa_id = 1
GROUP BY d.dimension_id, d.nombre
ORDER BY promedio DESC
LIMIT 5;

-- Top 5 dimensiones peor evaluadas
SELECT 
    d.nombre,
    ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) AS promedio
FROM clima_respuestas cr
JOIN clima_reactivos crt ON cr.reactivo_id = crt.reactivo_id
JOIN clima_dimensiones d ON crt.dimension_id = d.dimension_id
WHERE cr.periodo_id = 1 AND cr.empresa_id = 1
GROUP BY d.dimension_id, d.nombre
ORDER BY promedio ASC
LIMIT 5;

-- ================================================================
-- 7. ANÁLISIS DE REACTIVOS INDIVIDUALES
-- ================================================================

-- Promedio por reactivo (pregunta)
SELECT 
    crt.reactivo_id,
    crt.enunciado AS pregunta,
    d.nombre AS dimension,
    COUNT(*) AS respuestas,
    ROUND(AVG(cr.valor), 2) AS promedio_bruto,
    ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) AS promedio_porcentaje
FROM clima_respuestas cr
JOIN clima_reactivos crt ON cr.reactivo_id = crt.reactivo_id
JOIN clima_dimensiones d ON crt.dimension_id = d.dimension_id
WHERE cr.periodo_id = 1 AND cr.empresa_id = 1
GROUP BY crt.reactivo_id, crt.enunciado, d.nombre
ORDER BY promedio_porcentaje DESC;

-- Reactivos con baja puntuación (críticos)
SELECT 
    crt.reactivo_id,
    crt.enunciado AS pregunta,
    d.nombre AS dimension,
    ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) AS promedio
FROM clima_respuestas cr
JOIN clima_reactivos crt ON cr.reactivo_id = crt.reactivo_id
JOIN clima_dimensiones d ON crt.dimension_id = d.dimension_id
WHERE cr.periodo_id = 1 AND cr.empresa_id = 1
GROUP BY crt.reactivo_id, crt.enunciado, d.nombre
HAVING promedio < 50
ORDER BY promedio ASC;

-- ================================================================
-- 8. DATOS DE PARTICIPACIÓN
-- ================================================================

-- Estado de participación
SELECT 
    COUNT(*) AS total_elegibles,
    SUM(CASE WHEN completado = 1 THEN 1 ELSE 0 END) AS respondieron,
    SUM(CASE WHEN completado = 0 THEN 1 ELSE 0 END) AS no_respondieron,
    CONCAT(ROUND(
        SUM(CASE WHEN completado = 1 THEN 1 ELSE 0 END) / COUNT(*) * 100, 1
    ), '%') AS tasa_participacion
FROM clima_elegibles
WHERE periodo_id = 1 AND empresa_id = 1;

-- Participación por unidad
SELECT 
    ou.nombre AS unidad,
    COUNT(ce.empleado_id) AS elegibles,
    SUM(CASE WHEN ce.completado = 1 THEN 1 ELSE 0 END) AS respondieron,
    CONCAT(ROUND(
        SUM(CASE WHEN ce.completado = 1 THEN 1 ELSE 0 END) / COUNT(ce.empleado_id) * 100, 1
    ), '%') AS tasa
FROM clima_elegibles ce
JOIN org_unidades ou ON ce.unidad_id = ou.unidad_id
WHERE ce.periodo_id = 1 AND ce.empresa_id = 1
GROUP BY ce.unidad_id, ou.nombre
ORDER BY tasa DESC;

-- ================================================================
-- 9. VERIFICACIÓN DE INTEGRIDAD
-- ================================================================

-- Verificar que todos los reactivos fueron respondidos
SELECT 
    CASE 
        WHEN COUNT(*) = (SELECT COUNT(*) FROM clima_reactivos) THEN '✅ Todos los reactivos tienen respuestas'
        ELSE '⚠️ Falta respuestas para algunos reactivos'
    END AS verificacion,
    COUNT(*) AS reactivos_con_respuestas
FROM (
    SELECT DISTINCT reactivo_id 
    FROM clima_respuestas 
    WHERE periodo_id = 1 AND empresa_id = 1
) AS r;

-- Verificar datos anómalos
SELECT 'Respuestas fuera de rango (1-3)' AS tipo, COUNT(*) AS cantidad
FROM clima_respuestas
WHERE periodo_id = 1 AND empresa_id = 1 AND (valor < 1 OR valor > 3);

-- ================================================================
-- 10. REPORTE EJECUTIVO
-- ================================================================

-- Resumen para ejecutivos
SELECT 
    'Clima Laboral - Reporte Ejecutivo' AS titulo,
    (SELECT COUNT(*) FROM clima_respuestas WHERE periodo_id = 1 AND empresa_id = 1) AS respuestas_totales,
    (SELECT COUNT(DISTINCT empleado_id) FROM clima_respuestas WHERE periodo_id = 1 AND empresa_id = 1) AS empleados_respondieron,
    (SELECT ROUND((AVG(valor) - 1) / 2 * 100, 1) FROM clima_respuestas WHERE periodo_id = 1 AND empresa_id = 1) AS promedio_general,
    (SELECT COUNT(*) FROM clima_elegibles WHERE periodo_id = 1 AND empresa_id = 1 AND completado = 1) AS elegibles_completados,
    (SELECT COUNT(*) FROM clima_elegibles WHERE periodo_id = 1 AND empresa_id = 1) AS total_elegibles;

-- ================================================================
-- FIN DE EJEMPLOS
-- ================================================================
