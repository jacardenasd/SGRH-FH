-- Clima: Tabla de excepciones de elegibilidad
-- Ejecutar este script en la base de datos del sistema

CREATE TABLE IF NOT EXISTS `clima_excepciones` (
  `periodo_id` INT NOT NULL,
  `empresa_id` INT NOT NULL,
  `empleado_id` INT NOT NULL,
  `unidad_id_override` INT NULL,
  `reset` TINYINT(1) NOT NULL DEFAULT 1,
  `motivo` VARCHAR(100) NOT NULL DEFAULT 'EXCEPCION_MANUAL',
  `created_by` INT NULL,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`periodo_id`, `empresa_id`, `empleado_id`),
  KEY `idx_empresa_periodo` (`empresa_id`, `periodo_id`),
  KEY `idx_empleado` (`empleado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Opcional: FK segun existan las tablas y llaves
-- ALTER TABLE `clima_excepciones`
--   ADD CONSTRAINT `fk_ex_periodo` FOREIGN KEY (`periodo_id`) REFERENCES `clima_periodos` (`periodo_id`),
--   ADD CONSTRAINT `fk_ex_empleado` FOREIGN KEY (`empleado_id`) REFERENCES `empleados` (`empleado_id`),
--   ADD CONSTRAINT `fk_ex_unidad` FOREIGN KEY (`unidad_id_override`) REFERENCES `org_unidades` (`unidad_id`);
