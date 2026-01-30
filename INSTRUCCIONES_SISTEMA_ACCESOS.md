# INSTALACIÓN DEL SISTEMA DE REGISTRO DE ACCESOS

## Descripción
Este sistema registra todos los intentos de acceso (login) al sistema SGRH, incluyendo:
- Accesos exitosos y fallidos
- Fecha y hora
- Dirección IP
- Navegador utilizado
- Usuario y empresa

## Pasos de instalación

### 1. Crear la tabla en la base de datos

Ejecuta el siguiente SQL en tu base de datos MySQL (phpMyAdmin, HeidiSQL, etc.):

```sql
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
  INDEX `idx_rfc_fecha`(`rfc_intento`, `created_at`) USING BTREE,
  CONSTRAINT `fk_accesos_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_accesos_empresa` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`empresa_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci 
COMMENT = 'Registro de accesos (login) de usuarios al sistema' 
ROW_FORMAT = Dynamic;
```

### 2. Verificar que los cambios estén aplicados

Los siguientes archivos han sido modificados/creados:

- ✅ `includes/auth.php` - Función `registrar_acceso()` agregada y `login_intento()` modificada
- ✅ `public/admin_accesos.php` - Página de administración del historial
- ✅ `includes/layout/sidebar.php` - Enlace agregado en el menú de Administración

### 3. Acceder al sistema

Una vez creada la tabla:

1. Inicia sesión en el sistema SGRH con un usuario administrador
2. Ve al menú **Administración** → **Historial de Accesos**
3. Podrás ver todos los accesos registrados con filtros por:
   - Usuario
   - RFC
   - Dirección IP
   - Estado (exitoso/fallido)
   - Rango de fechas

## Características del sistema

### Registro automático
- ✅ Todos los intentos de login se registran automáticamente
- ✅ Se guardan tanto accesos exitosos como fallidos
- ✅ Se registra IP, navegador y timestamp

### Panel de administración
- ✅ Vista de estadísticas de los últimos 30 días
- ✅ Filtros avanzados de búsqueda
- ✅ Paginación de resultados
- ✅ Información detallada de cada acceso

### Seguridad
- ✅ Solo usuarios con permiso `usuarios.admin` pueden ver el historial
- ✅ No se guarda información sensible (contraseñas)
- ✅ Identificación de intentos de acceso no autorizado

## Ejecutar la migración usando phpMyAdmin

1. Abre phpMyAdmin en tu navegador (http://localhost/phpMyAdmin)
2. Selecciona la base de datos `sgrh`
3. Ve a la pestaña "SQL"
4. Copia y pega el SQL del archivo `migrations/20250128_crear_tabla_usuarios_accesos.sql`
5. Haz clic en "Continuar" o "Go"
6. Verifica que aparezca el mensaje de éxito

## Verificación

Para verificar que todo funciona:

1. Cierra tu sesión actual
2. Intenta hacer login (exitoso o fallido)
3. Ingresa como administrador
4. Ve a Administración → Historial de Accesos
5. Deberías ver el registro de tu acceso reciente

## Soporte

Si tienes problemas:
- Verifica que la tabla `usuarios_accesos` existe en la base de datos
- Verifica que tienes el permiso `usuarios.admin`
- Revisa los logs de PHP para ver errores
