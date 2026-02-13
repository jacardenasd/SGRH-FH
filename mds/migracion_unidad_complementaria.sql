-- Script complementario para migrar unidad_id de respuestas especiales
-- Maneja respuestas anónimas y respuestas sin datos en clima_elegibles

-- PASO 1: Intentar recuperar unidad_id de respuestas anónimas desde clima_respuestas_abiertas
UPDATE clima_respuestas cr
LEFT JOIN (
    SELECT periodo_id, unidad_id, MIN(respuesta_abierta_id) as id
    FROM clima_respuestas_abiertas
    WHERE empleado_id IS NULL
    GROUP BY periodo_id, unidad_id
) ra ON ra.periodo_id = cr.periodo_id
SET cr.unidad_id = ra.unidad_id
WHERE cr.empleado_id IS NULL 
  AND cr.unidad_id IS NULL
  AND ra.unidad_id IS NOT NULL;

SELECT 'Paso 1: Anonimas migradas desde respuestas_abiertas' as paso,
       COUNT(*) as actualizadas
FROM clima_respuestas
WHERE empleado_id IS NULL AND unidad_id IS NOT NULL;

-- PASO 2: Para respuestas identificadas sin elegibles, obtener unidad actual del empleado
UPDATE clima_respuestas cr
INNER JOIN empleados e ON e.empleado_id = cr.empleado_id
SET cr.unidad_id = e.unidad_id
WHERE cr.empleado_id IS NOT NULL 
  AND cr.unidad_id IS NULL
  AND e.unidad_id IS NOT NULL;

SELECT 'Paso 2: Identificadas migradas desde tabla empleados' as paso,
       COUNT(*) as actualizadas
FROM clima_respuestas
WHERE empleado_id IS NOT NULL AND unidad_id IS NOT NULL;

-- VERIFICACIÓN FINAL
SELECT 
    'Estado final' as resumen,
    COUNT(*) as total_respuestas,
    SUM(CASE WHEN empleado_id IS NULL THEN 1 ELSE 0 END) as anonimas,
    SUM(CASE WHEN empleado_id IS NOT NULL THEN 1 ELSE 0 END) as identificadas,
    SUM(CASE WHEN unidad_id IS NULL THEN 1 ELSE 0 END) as sin_unidad,
    SUM(CASE WHEN unidad_id IS NOT NULL THEN 1 ELSE 0 END) as con_unidad
FROM clima_respuestas;

-- Desglose por período
SELECT 
    periodo_id,
    COUNT(*) as total,
    SUM(CASE WHEN unidad_id IS NULL THEN 1 ELSE 0 END) as sin_unidad,
    COUNT(DISTINCT unidad_id) as unidades_distintas
FROM clima_respuestas
GROUP BY periodo_id;
