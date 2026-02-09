-- Migración: Agregar campos de sindicalizado, tipo_plaza y nivel a org_plantilla_autorizada
-- Fecha: 2026-02-03
-- Descripción: Se agregaron tres nuevos campos para ampliar la información de las plazas autorizadas

-- Verificar si los campos ya existen
SET @dbname = DATABASE();

-- Agregar campo syndicalizado si no existe
ALTER TABLE org_plantilla_autorizada 
ADD COLUMN IF NOT EXISTS sindicalizado ENUM('si', 'no') 
COMMENT 'Indica si la plaza es sindicalizada' 
DEFAULT 'no';

-- Agregar campo tipo_plaza si no existe
ALTER TABLE org_plantilla_autorizada 
ADD COLUMN IF NOT EXISTS tipo_plaza ENUM('planta', 'temporal') 
COMMENT 'Tipo de plaza: planta o temporal' 
DEFAULT 'planta';

-- Agregar campo nivel si no existe
ALTER TABLE org_plantilla_autorizada 
ADD COLUMN IF NOT EXISTS nivel VARCHAR(50) 
COMMENT 'Nivel jerárquico: ANALISTA, JEFATURA DE AREA, SUBDIRECCION, OPERATIVO, GERENCIA, SUPERVISOR, AUXILIAR, DIRECCION GENERAL, DIRECCION, ASIMILADOS, SUBGERENCIA, VENTAS'
DEFAULT NULL;

-- Crear índice para el campo nivel si no existe
ALTER TABLE org_plantilla_autorizada 
ADD INDEX IF NOT EXISTS idx_plaza_nivel (nivel);

-- Crear índice para el campo tipo_plaza si no existe
ALTER TABLE org_plantilla_autorizada 
ADD INDEX IF NOT EXISTS idx_plaza_tipo_plaza (tipo_plaza);

-- Crear índice para el campo sindicalizado si no existe
ALTER TABLE org_plantilla_autorizada 
ADD INDEX IF NOT EXISTS idx_plaza_sindicalizado (sindicalizado);
