# Cambios Implementados - Campos Adicionales en Plantilla

## Resumen
Se agregaron tres nuevos campos a la tabla `org_plantilla_autorizada` y se actualizó la vista [plantilla.php](plantilla.php) para mostrar esta información.

## Cambios en Base de Datos

### Tabla: `org_plantilla_autorizada`

Se agregaron tres columnas:

1. **`sindicalizado`** - ENUM('si', 'no')
   - Indica si la plaza es sindicalizada
   - Valor por defecto: 'no'
   - Índice: `idx_plaza_sindicalizado`

2. **`tipo_plaza`** - ENUM('planta', 'temporal')
   - Tipo de plaza
   - Valor por defecto: 'planta'
   - Índice: `idx_plaza_tipo_plaza`

3. **`nivel`** - VARCHAR(50)
   - Nivel jerárquico de la plaza
   - Valores permitidos: ANALISTA, JEFATURA DE AREA, SUBDIRECCION, OPERATIVO, GERENCIA, SUPERVISOR, AUXILIAR, DIRECCION GENERAL, DIRECCION, ASIMILADOS, SUBGERENCIA, VENTAS
   - Valor por defecto: NULL
   - Índice: `idx_plaza_nivel`

## Cambios en Vista (plantilla.php)

### 1. Tabla de Listado
Se agregaron tres nuevas columnas en la tabla principal:
- **Nivel**: Muestra el nivel jerárquico de la plaza
- **Sindicalizado**: Muestra con badge si es sindicalizada (Sí/No)
- **Tipo Plaza**: Muestra con badge el tipo (Planta/Temporal)

Las columnas se insertan entre "Puesto" y "Fecha Creación" para mejor legibilidad.

### 2. Colores de Badge
- **Sindicalizado**: 
  - Verde (badge-success) para "Sí"
  - Gris (badge-secondary) para "No"
- **Tipo de Plaza**:
  - Azul (badge-primary) para "Planta"
  - Amarillo (badge-warning) para "Temporal"

### 3. Modal de Detalle
Se actualizó la función JavaScript `verDetalle()` para mostrar:
- Nivel de la plaza
- Estado de sindicalización con badge
- Tipo de plaza con badge

Los campos se muestran inmediatamente después del puesto y antes del estado.

### 4. DataTable
Se actualizó la configuración de DataTable:
- Cambió el índice de columna para ordenamiento de 4 a 7 (Fecha Creación)
- Se ajustó el índice de columnas no ordenables de 8 a 11 (Acciones)

## Archivos Modificados
- [public/plantilla.php](public/plantilla.php) - Vista principal de plantilla
- Base de datos `sgrh` - Tabla `org_plantilla_autorizada`

## Archivos Creados
- [migrations/add_plantilla_campos.sql](migrations/add_plantilla_campos.sql) - Script de migración
- [ejecutar_migracion_plantilla.php](ejecutar_migracion_plantilla.php) - Script de ejecución

## Instrucciones de Uso

### Completar información de plazas
Para que los nuevos campos se muestren correctamente, debe actualizar los registros existentes:

```sql
UPDATE org_plantilla_autorizada 
SET 
  sindicalizado = 'si',  -- o 'no'
  tipo_plaza = 'planta',  -- o 'temporal'
  nivel = 'ANALISTA'  -- Seleccionar del listado de valores
WHERE plaza_id = ?
```

### Valores permitidos para Nivel
- ANALISTA
- JEFATURA DE AREA
- SUBDIRECCION
- OPERATIVO
- GERENCIA
- SUPERVISOR
- AUXILIAR
- DIRECCION GENERAL
- DIRECCION
- ASIMILADOS
- SUBGERENCIA
- VENTAS

---
Implementado: 3 de febrero de 2026
