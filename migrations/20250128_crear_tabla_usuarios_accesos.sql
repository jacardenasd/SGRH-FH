-- Migration: Crear tabla para registro de accesos de usuarios
-- Fecha: 2025-01-28
-- Descripción: Tabla para registrar todos los intentos de acceso al sistema

CREATE TABLE IF NOT EXISTS `usuarios_accesos` (
  `acceso_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NULL DEFAULT NULL COMMENT 'NULL si el intento falló y no se identificó al usuario',
  `rfc_intento` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'RFC usado en el intento',
  `exitoso` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 = Login exitoso, 0 = Login fallido',
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'Navegador y sistema operativo',
  `empresa_id` int(11) NULL DEFAULT NULL COMMENT 'Empresa seleccionada (puede ser NULL en intentos fallidos)',
  `mensaje` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'Mensaje de error o éxito',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`acceso_id`) USING BTREE,
  INDEX `idx_usuario_fecha`(`usuario_id`, `created_at`) USING BTREE,
  INDEX `idx_fecha`(`created_at`) USING BTREE,
  INDEX `idx_ip`(`ip_address`) USING BTREE,
  INDEX `idx_exitoso`(`exitoso`, `created_at`) USING BTREE,
  CONSTRAINT `fk_accesos_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_accesos_empresa` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`empresa_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci 
COMMENT = 'Registro de accesos (login) de usuarios al sistema' 
ROW_FORMAT = Dynamic;

-- Índice adicional para búsquedas por RFC
CREATE INDEX `idx_rfc_fecha` ON `usuarios_accesos`(`rfc_intento`, `created_at`) USING BTREE;
