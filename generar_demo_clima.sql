-- ==============================================================
-- GENERADOR DE DATOS DEMO - CLIMA LABORAL
-- ==============================================================
-- Script para generar resultados demo realistas de clima laboral
-- Escala: 1-3 (En desacuerdo, Parcialmente de acuerdo, Totalmente de acuerdo)
-- Conversión a porcentaje: (125 - valor * 25)
-- Resultado: 1=100%, 2=75%, 3=50%
-- ==============================================================

-- Configuración de variables
SET @periodo_id = 1;
SET @empresa_id = 1;

-- ==============================================================
-- 1. VERIFICAR Y CREAR EMPLEADOS DE DEMO SI ES NECESARIO
-- ==============================================================
-- Si no hay empleados activos, crear 20 empleados de demo

SET @active_employees = 0;
SELECT COUNT(*) INTO @active_employees 
FROM empleados 
WHERE empresa_id = @empresa_id AND estatus = 'activo';

-- Si no hay empleados activos, crear empleados de demo
IF @active_employees = 0 THEN
    -- Obtener una unidad existente
    SET @unidad_id = NULL;
    SELECT unidad_id INTO @unidad_id FROM org_unidades LIMIT 1;
    
    -- Si hay una unidad, generar empleados de demo
    IF @unidad_id IS NOT NULL THEN
        INSERT IGNORE INTO empleados (empresa_id, no_emp, rfc_base, nombre, estatus, unidad_id, es_activo)
        SELECT @empresa_id, CONCAT('DEMO', LPAD(n, 5, '0')), CONCAT('RFC', LPAD(n, 7, '0')), CONCAT('Empleado Demo ', n), 'activo', @unidad_id, 1
        FROM (
            SELECT 1 AS n UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5
            UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10
            UNION SELECT 11 UNION SELECT 12 UNION SELECT 13 UNION SELECT 14 UNION SELECT 15
            UNION SELECT 16 UNION SELECT 17 UNION SELECT 18 UNION SELECT 19 UNION SELECT 20
        ) AS numbers;
    END IF;
END IF;

-- ==============================================================
-- 2. VERIFICAR QUE EXISTA EL PERIODO
-- ==============================================================
-- El período debe existir en clima_periodos
-- Asumiendo que ya existe el período 1 del año actual
-- Si no existe, descomenta la siguiente línea:
-- INSERT INTO clima_periodos (periodo_id, anio, empresa_id, fecha_inicio, fecha_fin) 
-- VALUES (1, 2026, 1, '2026-01-01', '2026-03-31');

-- ==============================================================
-- 3. LIMPIAR DATOS ANTIGUOS (OPCIONAL)
-- ==============================================================
-- Descomenta estas líneas si quieres limpiar primero:
-- DELETE FROM clima_respuestas WHERE periodo_id = @periodo_id;
-- DELETE FROM clima_elegibles WHERE periodo_id = @periodo_id;
-- DELETE FROM clima_publicacion WHERE periodo_id = @periodo_id;
-- DELETE FROM clima_aplicaciones WHERE periodo_id = @periodo_id;

-- ==============================================================
-- 4. GENERAR ELEGIBLES POR UNIDAD
-- ==============================================================
-- Esto determina quiénes pueden responder la encuesta

INSERT IGNORE INTO clima_elegibles (periodo_id, empresa_id, unidad_id, empleado_id, elegible)
SELECT DISTINCT
    @periodo_id AS periodo_id,
    e.empresa_id,
    e.unidad_id,
    e.empleado_id,
    1 AS elegible
FROM empleados e
JOIN org_unidades ou ON e.unidad_id = ou.unidad_id
WHERE e.empresa_id = @empresa_id
  AND e.estatus = 'activo'
LIMIT 200;  -- Limitar a 200 empleados

-- ==============================================================
-- 4. GENERAR RESPUESTAS POR DIMENSIÓN CON VARIACIÓN REALISTA
-- ==============================================================
-- Distribución: 20% escala 1, 50% escala 2, 30% escala 3

-- Obtener variables necesarias
SET @total_reactivos = 0;
SET @total_elegibles = 0;

SELECT COUNT(DISTINCT reactivo_id) INTO @total_reactivos 
FROM clima_reactivos;

SELECT COUNT(*) INTO @total_elegibles 
FROM clima_elegibles 
WHERE periodo_id = @periodo_id AND empresa_id = @empresa_id;

-- Insertar respuestas con distribución realista
INSERT INTO clima_respuestas (periodo_id, empleado_id, reactivo_id, valor, fecha_respuesta)
SELECT 
    @periodo_id AS periodo_id,
    ce.empleado_id,
    cr.reactivo_id,
    CASE 
        -- 20% de las respuestas son 1 (En desacuerdo)
        WHEN RAND() < 0.20 THEN 1
        -- 50% de las respuestas son 2 (Parcialmente de acuerdo)
        WHEN RAND() < 0.70 THEN 2
        -- 30% de las respuestas son 3 (Totalmente de acuerdo)
        ELSE 3
    END AS valor,
    DATE_SUB(NOW(), INTERVAL FLOOR(RAND() * 60) DAY) AS fecha_respuesta
FROM clima_elegibles ce
CROSS JOIN clima_reactivos cr
WHERE ce.periodo_id = @periodo_id 
  AND ce.empresa_id = @empresa_id
  AND ce.elegible = 1
  AND NOT EXISTS (
    SELECT 1 FROM clima_respuestas cr2 
    WHERE cr2.periodo_id = ce.periodo_id
      AND cr2.empleado_id = ce.empleado_id
      AND cr2.reactivo_id = cr.reactivo_id
  )
LIMIT 5000;  -- Limitar inserciones

-- ==============================================================
-- 5. REGISTRAR ENVIOS COMPLETADOS (tabla clima_envios)
-- ==============================================================
INSERT IGNORE INTO clima_envios (periodo_id, empresa_id, unidad_id, empleado_id, completado, completado_at)
SELECT 
    @periodo_id AS periodo_id,
    ce.empresa_id,
    ce.unidad_id,
    cr.empleado_id,
    1 AS completado,
    MAX(cr.fecha_respuesta) AS completado_at
FROM clima_respuestas cr
JOIN clima_elegibles ce ON cr.periodo_id = ce.periodo_id 
    AND cr.empleado_id = ce.empleado_id
WHERE cr.periodo_id = @periodo_id
GROUP BY cr.periodo_id, cr.empleado_id, ce.empresa_id, ce.unidad_id;

-- ==============================================================
-- 7. PUBLICAR RESULTADOS (OPCIONAL)
-- ==============================================================
-- Marca que los resultados están listos para ver
INSERT IGNORE INTO clima_publicacion (periodo_id, empresa_id, unidad_id, habilitado, fecha_publicacion)
SELECT DISTINCT
    @periodo_id AS periodo_id,
    ce.empresa_id,
    ce.unidad_id,
    1 AS habilitado,
    NOW() AS fecha_publicacion
FROM clima_elegibles ce
WHERE ce.periodo_id = @periodo_id AND ce.empresa_id = @empresa_id;

-- ==============================================================
-- 8. VERIFICACIÓN DE RESULTADOS
-- ==============================================================
SELECT 'RESUMEN DE DATOS GENERADOS' AS '=== REPORTE ===';
SELECT 'Total de elegibles' AS tipo, COUNT(*) AS cantidad FROM clima_elegibles WHERE periodo_id = @periodo_id AND empresa_id = @empresa_id;
SELECT 'Elegibles completados' AS tipo, COUNT(*) AS cantidad FROM clima_elegibles WHERE periodo_id = @periodo_id AND empresa_id = @empresa_id AND completado = 1;
SELECT 'Total de respuestas' AS tipo, COUNT(*) AS cantidad FROM clima_respuestas WHERE periodo_id = @periodo_id AND empresa_id = @empresa_id;
SELECT 'Reactivos configurados' AS tipo, COUNT(*) AS cantidad FROM clima_reactivos;
SELECT 'Dimensiones' AS tipo, COUNT(*) AS cantidad FROM clima_dimensiones;

-- Promedio por superdimensión
SELECT 
    CONCAT('Promedio General: ', ROUND((AVG(valor) - 1) / 2 * 100, 1), '%') AS resultado
FROM clima_respuestas
WHERE periodo_id = @periodo_id AND empresa_id = @empresa_id;

-- Promedio por dimensión
SELECT 
    CONCAT(d.nombre, ': ', ROUND((AVG(cr.valor) - 1) / 2 * 100, 1), '%') AS resultado
FROM clima_respuestas cr
JOIN clima_reactivos crt ON cr.reactivo_id = crt.reactivo_id
JOIN clima_dimensiones d ON crt.dimension_id = d.dimension_id
WHERE cr.periodo_id = @periodo_id AND cr.empresa_id = @empresa_id
GROUP BY d.dimension_id, d.nombre
ORDER BY d.nombre;

-- ==============================================================
-- FIN DEL SCRIPT
-- ==============================================================
