-- Agregar estado 'revertido' a la tabla nomina_importaciones
ALTER TABLE `nomina_importaciones` 
MODIFY COLUMN `status` enum('cargado','procesado','error','revertido') 
CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'cargado';
