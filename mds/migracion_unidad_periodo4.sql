-- Migración final para período 4: recuperar unidad_id desde respuestas_abiertas
-- Para empleados que ya no existen pero sus respuestas abiertas tienen unidad_id

UPDATE clima_respuestas cr
INNER JOIN (
    SELECT DISTINCT periodo_id, empleado_id, unidad_id
    FROM clima_respuestas_abiertas
    WHERE periodo_id = 4 AND empleado_id IS NOT NULL
) ra ON ra.periodo_id = cr.periodo_id AND ra.empleado_id = cr.empleado_id
SET cr.unidad_id = ra.unidad_id
WHERE cr.periodo_id = 4 
  AND cr.unidad_id IS NULL
  AND cr.empleado_id IS NOT NULL;

-- Verificación final
SELECT 
    'Migración completada' as estado,
    COUNT(*) as total_respuestas,
    SUM(CASE WHEN unidad_id IS NULL THEN 1 ELSE 0 END) as sin_unidad,
    SUM(CASE WHEN unidad_id IS NOT NULL THEN 1 ELSE 0 END) as con_unidad
FROM clima_respuestas;

-- Desglose por período
SELECT 
    periodo_id,
    COUNT(*) as total,
    SUM(CASE WHEN unidad_id IS NULL THEN 1 ELSE 0 END) as sin_unidad,
    SUM(CASE WHEN unidad_id IS NOT NULL THEN 1 ELSE 0 END) as con_unidad,
    COUNT(DISTINCT unidad_id) as unidades_distintas
FROM clima_respuestas
GROUP BY periodo_id;
