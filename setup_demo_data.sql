-- Direct setup script for Clima Laboral Demo
-- This can be run directly in MySQL/phpMyAdmin

-- 1. Ensure org_unidades has at least one entry
INSERT IGNORE INTO org_unidades (unidad_id, nombre, descripcion) 
VALUES (1, 'Unidad General', 'Unidad de prueba para demo');

-- 2. Create demo employees if none exist
INSERT IGNORE INTO empleados 
(empresa_id, no_emp, rfc_base, nombre, estatus, unidad_id, es_activo, apellido_paterno, apellido_materno)
SELECT 1 as empresa_id, CONCAT('DEMO', LPAD(n, 5, '0')) as no_emp, 
       CONCAT('RFC', LPAD(n, 7, '0')) as rfc_base,
       CONCAT('Empleado Demo ', n) as nombre,
       'activo' as estatus, 
       1 as unidad_id,
       1 as es_activo,
       'Demo' as apellido_paterno,
       CONCAT('Empleado ', n) as apellido_materno
FROM (
  SELECT 1 as n UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5
  UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10
  UNION SELECT 11 UNION SELECT 12 UNION SELECT 13 UNION SELECT 14 UNION SELECT 15
  UNION SELECT 16 UNION SELECT 17 UNION SELECT 18 UNION SELECT 19 UNION SELECT 20
) numbers;

-- 3. Verify data created
SELECT 'Empleados activos:' as verificacion, COUNT(*) as cantidad FROM empleados WHERE estatus='activo';
SELECT 'Unidades:' as verificacion, COUNT(*) as cantidad FROM org_unidades;
SELECT 'Reactivos:' as verificacion, COUNT(*) as cantidad FROM clima_reactivos;
SELECT 'Períodos:' as verificacion, COUNT(*) as cantidad FROM clima_periodos;
