
-- Verificación de participación con respuestas anónimas
-- Este script prueba la lógica actualizada de clima_participacion.php

-- 1. Total de reactivos activos
SELECT 'Total de reactivos activos' as info, COUNT(*) as cantidad FROM clima_reactivos WHERE activo=1;

-- 2. Respuestas por tipo en periodo 3
SELECT 
    'Distribución de respuestas' as info,
    COUNT(*) as total_respuestas,
    COUNT(DISTINCT empleado_id) as empleados_unicos,
    SUM(CASE WHEN empleado_id IS NOT NULL THEN 1 ELSE 0 END) as identificadas,
    SUM(CASE WHEN empleado_id IS NULL THEN 1 ELSE 0 END) as anonimas
FROM clima_respuestas 
WHERE periodo_id = 3;

-- 3. Encuestas anónimas completas por unidad
SELECT 
    'Encuestas anónimas completas por unidad' as info,
    unidad_id,
    COUNT(*) as total_respuestas,
    FLOOR(COUNT(*) / (SELECT COUNT(*) FROM clima_reactivos WHERE activo=1)) as encuestas_completas
FROM clima_respuestas
WHERE periodo_id = 3 AND empleado_id IS NULL
GROUP BY unidad_id;

-- 4. Simulación de consulta de participación por unidad (como en clima_participacion.php)
SELECT
    e.unidad_id,
    u.nombre AS unidad_nombre,
    COUNT(*) AS total_elegibles,
    SUM(CASE WHEN r.empleado_id IS NOT NULL THEN 1 ELSE 0 END) AS respondidos_identificados,
    COALESCE(a.anonimas_completas, 0) AS anonimas_completas,
    (SUM(CASE WHEN r.empleado_id IS NOT NULL THEN 1 ELSE 0 END) + COALESCE(a.anonimas_completas, 0)) AS total_respondidos,
    ROUND(
        ((SUM(CASE WHEN r.empleado_id IS NOT NULL THEN 1 ELSE 0 END) + COALESCE(a.anonimas_completas, 0)) * 100) / NULLIF(COUNT(*),0)
    , 2) AS participacion_pct
FROM clima_elegibles e
LEFT JOIN org_unidades u ON u.unidad_id = e.unidad_id
LEFT JOIN (
    SELECT DISTINCT periodo_id, empleado_id
    FROM clima_respuestas
    WHERE periodo_id = 3 AND empleado_id IS NOT NULL
) r ON r.periodo_id = e.periodo_id AND r.empleado_id = e.empleado_id
LEFT JOIN (
    SELECT 
        unidad_id,
        FLOOR(COUNT(*) / (SELECT COUNT(*) FROM clima_reactivos WHERE activo=1)) as anonimas_completas
    FROM clima_respuestas
    WHERE periodo_id = 3 AND empleado_id IS NULL
    GROUP BY unidad_id
) a ON a.unidad_id = e.unidad_id
WHERE e.periodo_id = 3
  AND e.elegible = 1
GROUP BY e.unidad_id, u.nombre, a.anonimas_completas
ORDER BY u.nombre;

-- 5. Verificar que la empresa se filtra correctamente a través de clima_elegibles
SELECT 
    'Verificación de filtrado por empresa' as info,
    e.empresa_id,
    COUNT(DISTINCT e.empleado_id) as elegibles_distintos,
    COUNT(DISTINCT r.empleado_id) as empleados_que_respondieron
FROM clima_elegibles e
LEFT JOIN clima_respuestas r ON r.periodo_id = e.periodo_id AND r.empleado_id = e.empleado_id
WHERE e.periodo_id = 3 AND e.elegible = 1
GROUP BY e.empresa_id;
