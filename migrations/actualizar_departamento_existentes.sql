-- =====================================================
-- Actualizar departamento en respuestas existentes
-- Descripción: Agrega adscripcion_id a respuestas que tienen empleado_id
-- Fecha: 2026-02-12
-- =====================================================

USE sgrh;

-- =====================================================
-- PASO 1: ANÁLISIS - Ver cuántas respuestas hay
-- =====================================================

SELECT '=== ANÁLISIS DE RESPUESTAS EXISTENTES ===' AS '';

-- Total de respuestas
SELECT 
    'Total de respuestas Likert' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas;

-- Respuestas con empleado (identificadas)
SELECT 
    'Respuestas identificadas (con empleado_id)' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas
WHERE empleado_id IS NOT NULL;

-- Respuestas anónimas (sin empleado)
SELECT 
    'Respuestas anónimas (sin empleado_id)' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas
WHERE empleado_id IS NULL;

-- Respuestas identificadas que YA tienen departamento
SELECT 
    'Respuestas identificadas que YA tienen departamento' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas
WHERE empleado_id IS NOT NULL AND adscripcion_id IS NOT NULL;

-- Respuestas identificadas SIN departamento
SELECT 
    'Respuestas identificadas SIN departamento (se actualizarán)' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas cr
WHERE cr.empleado_id IS NOT NULL 
  AND cr.adscripcion_id IS NULL;

-- Respuestas identificadas cuyos empleados SÍ tienen departamento
SELECT 
    'Respuestas que PUEDEN actualizarse (empleado tiene depto)' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas cr
INNER JOIN empleados e ON e.empleado_id = cr.empleado_id
WHERE cr.empleado_id IS NOT NULL 
  AND cr.adscripcion_id IS NULL
  AND e.adscripcion_id IS NOT NULL;

-- Respuestas identificadas cuyos empleados NO tienen departamento
SELECT 
    'Respuestas que NO pueden actualizarse (empleado sin depto)' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas cr
INNER JOIN empleados e ON e.empleado_id = cr.empleado_id
WHERE cr.empleado_id IS NOT NULL 
  AND cr.adscripcion_id IS NULL
  AND e.adscripcion_id IS NULL;

SELECT '' AS '';
SELECT '=== ANÁLISIS DE RESPUESTAS ABIERTAS ===' AS '';

-- Total de respuestas abiertas
SELECT 
    'Total de respuestas abiertas' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas_abiertas;

-- Respuestas abiertas identificadas
SELECT 
    'Respuestas abiertas identificadas' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas_abiertas
WHERE empleado_id IS NOT NULL;

-- Respuestas abiertas anónimas
SELECT 
    'Respuestas abiertas anónimas' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas_abiertas
WHERE empleado_id IS NULL;

-- Respuestas abiertas que pueden actualizarse
SELECT 
    'Respuestas abiertas que PUEDEN actualizarse' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas_abiertas cra
INNER JOIN empleados e ON e.empleado_id = cra.empleado_id
WHERE cra.empleado_id IS NOT NULL 
  AND cra.adscripcion_id IS NULL
  AND e.adscripcion_id IS NOT NULL;

SELECT '' AS '';
SELECT '=== PRESIONA ENTER PARA CONTINUAR CON LA ACTUALIZACIÓN ===' AS '';
SELECT 'O ESCRIBE \\q PARA SALIR SIN CAMBIOS' AS '';
SELECT '' AS '';

-- =====================================================
-- PASO 2: ACTUALIZACIÓN - clima_respuestas (Likert)
-- =====================================================

-- Actualizar respuestas Likert identificadas
UPDATE clima_respuestas cr
INNER JOIN empleados e ON e.empleado_id = cr.empleado_id
SET cr.adscripcion_id = e.adscripcion_id
WHERE cr.empleado_id IS NOT NULL 
  AND cr.adscripcion_id IS NULL
  AND e.adscripcion_id IS NOT NULL;

SELECT 'Respuestas Likert actualizadas' AS resultado, ROW_COUNT() AS registros_afectados;

-- =====================================================
-- PASO 3: ACTUALIZACIÓN - clima_respuestas_abiertas
-- =====================================================

-- Actualizar respuestas abiertas identificadas
UPDATE clima_respuestas_abiertas cra
INNER JOIN empleados e ON e.empleado_id = cra.empleado_id
SET cra.adscripcion_id = e.adscripcion_id
WHERE cra.empleado_id IS NOT NULL 
  AND cra.adscripcion_id IS NULL
  AND e.adscripcion_id IS NOT NULL;

SELECT 'Respuestas abiertas actualizadas' AS resultado, ROW_COUNT() AS registros_afectados;

-- =====================================================
-- PASO 4: VERIFICACIÓN POST-ACTUALIZACIÓN
-- =====================================================

SELECT '' AS '';
SELECT '=== VERIFICACIÓN POST-ACTUALIZACIÓN ===' AS '';

-- Verificar respuestas Likert actualizadas
SELECT 
    'Respuestas Likert CON departamento' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas
WHERE empleado_id IS NOT NULL AND adscripcion_id IS NOT NULL;

-- Verificar respuestas abiertas actualizadas
SELECT 
    'Respuestas abiertas CON departamento' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas_abiertas
WHERE empleado_id IS NOT NULL AND adscripcion_id IS NOT NULL;

-- Respuestas que quedaron SIN departamento (anónimas + empleados sin depto)
SELECT 
    'Respuestas Likert SIN departamento (anónimas + empleados sin depto)' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas
WHERE adscripcion_id IS NULL;

SELECT 
    'Respuestas abiertas SIN departamento (anónimas + empleados sin depto)' AS tipo,
    COUNT(*) AS total
FROM clima_respuestas_abiertas
WHERE adscripcion_id IS NULL;

-- Detalle de respuestas anónimas por período
SELECT 
    cp.anio AS periodo,
    COUNT(DISTINCT cr.respuesta_id) AS total_anonimas_sin_depto
FROM clima_respuestas cr
INNER JOIN clima_periodos cp ON cp.periodo_id = cr.periodo_id
WHERE cr.empleado_id IS NULL AND cr.adscripcion_id IS NULL
GROUP BY cp.periodo_id, cp.anio
ORDER BY cp.anio DESC;

SELECT '' AS '';
SELECT '✅ Actualización completada exitosamente' AS mensaje;
