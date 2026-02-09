-- Agregar campo sindicalizado
ALTER TABLE org_plantilla_autorizada ADD COLUMN sindicalizado ENUM('si', 'no') DEFAULT 'no' COMMENT 'Indica si la plaza es sindicalizada';

-- Agregar campo tipo_plaza
ALTER TABLE org_plantilla_autorizada ADD COLUMN tipo_plaza ENUM('planta', 'temporal') DEFAULT 'planta' COMMENT 'Tipo de plaza: planta o temporal';

-- Agregar campo nivel
ALTER TABLE org_plantilla_autorizada ADD COLUMN nivel VARCHAR(50) DEFAULT NULL COMMENT 'Nivel jerárquico';

-- Crear índices
ALTER TABLE org_plantilla_autorizada ADD INDEX idx_plaza_sindicalizado (sindicalizado);
ALTER TABLE org_plantilla_autorizada ADD INDEX idx_plaza_tipo_plaza (tipo_plaza);
ALTER TABLE org_plantilla_autorizada ADD INDEX idx_plaza_nivel (nivel);
