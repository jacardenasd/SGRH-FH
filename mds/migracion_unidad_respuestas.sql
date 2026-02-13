-- Script para completar la migración de unidad_id en respuestas existentes
-- Esto llena el campo unidad_id en las respuestas identificadas ya guardadas

-- PASO 1: Actualizar respuestas identificadas con su unidad_id
UPDATE clima_respuestas cr
SET cr.unidad_id = (
    SELECT ce.unidad_id 
    FROM clima_elegibles ce
    WHERE ce.periodo_id = cr.periodo_id 
    AND ce.empleado_id = cr.empleado_id
    LIMIT 1
)
WHERE cr.empleado_id IS NOT NULL AND cr.unidad_id IS NULL;

-- Verificar cuántos registros se actualizaron
SELECT 
    COUNT(*) as total_respuestas,
    SUM(CASE WHEN unidad_id IS NULL THEN 1 ELSE 0 END) as sin_unidad,
    SUM(CASE WHEN unidad_id IS NOT NULL THEN 1 ELSE 0 END) as con_unidad
FROM clima_respuestas;

-- PASO 2: Mostrar resumen por estado
SELECT 
    cr.periodo_id,
    COUNT(*) as total_respuestas,
    SUM(CASE WHEN cr.empleado_id IS NOT NULL THEN 1 ELSE 0 END) as identificadas,
    SUM(CASE WHEN cr.empleado_id IS NULL THEN 1 ELSE 0 END) as anonimas,
    COUNT(DISTINCT cr.unidad_id) as unidades_cubiertas
FROM clima_respuestas cr
GROUP BY cr.periodo_id;
