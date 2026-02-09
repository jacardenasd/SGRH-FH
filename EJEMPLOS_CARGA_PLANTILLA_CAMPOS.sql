-- Script de ejemplo para cargar datos en los nuevos campos
-- Este script muestra cómo actualizar las plazas existentes con los nuevos campos

-- ============================================================
-- PASO 1: Actualizar todas las plazas con valores por defecto
-- ============================================================

-- Todos con sindicalizado = 'no' por defecto
UPDATE org_plantilla_autorizada 
SET sindicalizado = 'no' 
WHERE sindicalizado IS NULL OR sindicalizado = '';

-- Todos con tipo_plaza = 'planta' por defecto
UPDATE org_plantilla_autorizada 
SET tipo_plaza = 'planta' 
WHERE tipo_plaza IS NULL OR tipo_plaza = '';

-- ============================================================
-- PASO 2: Ejemplos de actualización por nivel específico
-- ============================================================

-- Actualizar plazas de nivel ANALISTA
UPDATE org_plantilla_autorizada 
SET 
  nivel = 'ANALISTA',
  sindicalizado = 'si',
  tipo_plaza = 'planta'
WHERE codigo_plaza LIKE '%ANALISTA%' OR puesto_id IN (SELECT puesto_id FROM org_puestos WHERE nombre LIKE '%ANALISTA%');

-- Actualizar plazas de nivel DIRECCION GENERAL
UPDATE org_plantilla_autorizada 
SET 
  nivel = 'DIRECCION GENERAL',
  sindicalizado = 'no',
  tipo_plaza = 'planta'
WHERE codigo_plaza LIKE '%DIR%' OR puesto_id IN (SELECT puesto_id FROM org_puestos WHERE nombre LIKE '%DIRECTOR%' OR nombre LIKE '%DIRECCION%');

-- Actualizar plazas de nivel OPERATIVO
UPDATE org_plantilla_autorizada 
SET 
  nivel = 'OPERATIVO',
  sindicalizado = 'si',
  tipo_plaza = 'planta'
WHERE puesto_id IN (SELECT puesto_id FROM org_puestos WHERE nombre LIKE '%OPERATIVO%' OR nombre LIKE '%PERSONAL%');

-- Actualizar plazas de nivel SUPERVISOR
UPDATE org_plantilla_autorizada 
SET 
  nivel = 'SUPERVISOR',
  sindicalizado = 'si',
  tipo_plaza = 'planta'
WHERE puesto_id IN (SELECT puesto_id FROM org_puestos WHERE nombre LIKE '%SUPERVISOR%');

-- Actualizar plazas de nivel AUXILIAR
UPDATE org_plantilla_autorizada 
SET 
  nivel = 'AUXILIAR',
  sindicalizado = 'si',
  tipo_plaza = 'planta'
WHERE puesto_id IN (SELECT puesto_id FROM org_puestos WHERE nombre LIKE '%AUXILIAR%');

-- Actualizar plazas TEMPORALES
UPDATE org_plantilla_autorizada 
SET 
  tipo_plaza = 'temporal',
  sindicalizado = 'no'
WHERE fecha_congelacion IS NOT NULL OR estado = 'congelada';

-- ============================================================
-- PASO 3: Verificación de datos
-- ============================================================

-- Ver resumen de datos cargados
SELECT 
  nivel,
  sindicalizado,
  tipo_plaza,
  COUNT(*) AS total_plazas
FROM org_plantilla_autorizada
GROUP BY nivel, sindicalizado, tipo_plaza
ORDER BY nivel, sindicalizado, tipo_plaza;

-- Ver plazas sin nivel asignado
SELECT 
  plaza_id,
  codigo_plaza,
  puesto_id,
  nivel,
  sindicalizado,
  tipo_plaza
FROM org_plantilla_autorizada
WHERE nivel IS NULL
LIMIT 10;

-- Ver distribución por tipo de plaza
SELECT 
  tipo_plaza,
  COUNT(*) AS total,
  COUNT(CASE WHEN empleado_id IS NOT NULL THEN 1 END) AS ocupadas,
  COUNT(CASE WHEN empleado_id IS NULL AND estado = 'activa' THEN 1 END) AS vacantes
FROM org_plantilla_autorizada
WHERE tipo_plaza IS NOT NULL
GROUP BY tipo_plaza;

-- Ver distribución por sindicalización
SELECT 
  sindicalizado,
  COUNT(*) AS total,
  COUNT(CASE WHEN empleado_id IS NOT NULL THEN 1 END) AS ocupadas
FROM org_plantilla_autorizada
WHERE sindicalizado IS NOT NULL
GROUP BY sindicalizado;

-- ============================================================
-- NOTAS IMPORTANTES
-- ============================================================
-- 1. Los valores por defecto son:
--    - sindicalizado: 'no'
--    - tipo_plaza: 'planta'
--    - nivel: NULL (debe ser completado manualmente)
--
-- 2. Valores válidos para nivel:
--    ANALISTA, JEFATURA DE AREA, SUBDIRECCION, OPERATIVO, 
--    GERENCIA, SUPERVISOR, AUXILIAR, DIRECCION GENERAL, 
--    DIRECCION, ASIMILADOS, SUBGERENCIA, VENTAS
--
-- 3. Valores válidos para tipo_plaza:
--    planta, temporal
--
-- 4. Valores válidos para sindicalizado:
--    si, no
