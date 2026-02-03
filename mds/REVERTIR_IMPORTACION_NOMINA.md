# Funcionalidad de Reversión de Importaciones de Nómina

## Descripción General

Se ha añadido la capacidad de **revertir la última importación de nómina** que fue procesada. Esta funcionalidad permite deshacer todos los cambios realizados durante una importación que fue hecha con datos o layout incorrecto.

## Características

- ✅ **Reversión automática**: Deshace automáticamente los cambios en la base de datos
- ✅ **Recuperación de datos**: Restaura los datos originales de empleados que fueron actualizados
- ✅ **Eliminación segura**: Elimina registros que fueron insertados durante la importación
- ✅ **Auditoría completa**: Registra todos los cambios en logs
- ✅ **Confirmación requerida**: Solicita confirmación antes de ejecutar la reversión
- ✅ **Detalles de operación**: Muestra un resumen detallado de cada cambio revertido

## Cómo Acceder

### Opción 1: Desde la página de Importación
1. Ir a **Nómina → Importar nómina** (`public/importar_nomina.php`)
2. En la cabecera, verás un link: "Revertir última importación"
3. Click en él

### Opción 2: Desde el Historial
1. Ir a **Nómina → Importar nómina** → "Ver historial"
2. En la fila de la importación que quieres revertir, verás un botón **⏪ (Revertir)**
3. Solo aparece si la importación está en estado "Procesado"

### Opción 3: Acceso directo
```
http://localhost/sgrh/public/importar_nomina_revertir.php
```

## Proceso de Reversión

### 1. Identificación
El sistema automáticamente identifica la **última importación procesada** (más reciente en la BD).

### 2. Análisis
Revisa cada registro de la importación:
- **INSERT**: Se eliminará el registro insertado
- **UPDATE**: Se restaurarán los datos originales guardados
- **SKIP/ERROR**: No habrá cambios

### 3. Confirmación
El sistema muestra:
- ID y fecha de la importación
- Archivo original
- Total de registros afectados
- Advertencia clara sobre la irreversibilidad

Debes confirmar la acción con un click en "Revertir esta importación" y confirmar en el diálogo.

### 4. Ejecución
El sistema:
1. Inicia una transacción
2. Procesa cada registro en orden inverso
3. Elimina inserciones
4. Restaura datos anteriores
5. Registra todo en logs
6. Confirma o revierte según errores

### 5. Resultado
Muestra un resumen con:
- ✓ Total de registros eliminados
- ✓ Total de registros restaurados
- ✓ Total de errores (si hubo)
- ✓ Tabla detallada de cambios por empleado

## Estados de Importación

| Estado | Descripción | ¿Se puede revertir? |
|--------|-------------|------------------|
| **cargado** | Archivo cargado pero no procesado | ❌ No |
| **procesado** | Datos importados exitosamente | ✅ Sí |
| **revertido** | Importación que fue revertida | ❌ No |
| **error** | Error durante procesamiento | ❌ No |

## Datos Guardados para Reversión

El sistema almacena automáticamente:
- En `nomina_import_detalle.payload_json`: El JSON con:
  - `datos_antes`: Valores originales de cada campo
  - `datos_despues`: Valores nuevos que se aplicaron
  - Metadatos de la acción

Esto permite restaurar exactamente al estado anterior.

## Límite y Restricciones

- ⚠️ **Solo la última importación**: El sistema revierte únicamente la más reciente
- ⚠️ **Importaciones procesadas**: Solo se pueden revertir importaciones con estado "procesado"
- ⚠️ **Una sola vez**: Una vez revertida, la importación no se puede revertir de nuevo
- ⚠️ **Irreversible**: La reversión en sí no se puede deshacer (no hay un "revert revert")

## Logs y Auditoría

Cada reversión crea una entrada en:
```
storage/logs/import_nomina_reversion_YYYYMMDD.log
```

Ejemplo:
```
[REVERSION IMPORTACION 80] Eliminados: 5, Restaurados: 12, Errores: 0
```

## Casos de Uso

### 1. Layout Incorrecto
Si importaste con columnas en orden equivocado:
```
Antes: [Nombre] [Apellido] [RFC]
Después: [RFC] [Nombre] [Apellido]
```
✅ Usa "Revertir importación" → Reimporta con layout correcto

### 2. Datos Duplicados
Si por error se importó el mismo archivo dos veces:
```
1. Primera importación: 500 empleados (INSERT)
2. Segunda importación: 500 empleados (UPDATE - incorrectos)
```
✅ Usa "Revertir importación" → Los 500 UPDATE se revierten

### 3. Campos Mapeados Mal
Si algunos campos se mapearon incorrectamente:
```
Columna P (puesto) se mapeo como salario → datos equivocados
```
✅ Usa "Revertir importación" → Corrige el mapeo → Reimporta

## Ejemplo de Ejecución

```
ÚLTIMA IMPORTACIÓN PROCESADA
═══════════════════════════════════════════════════════════
ID: #80
Archivo: nomina_feb2026.xlsx
Total registros: 517
Fecha: 03/02/2026 15:45:32

⚠ ADVERTENCIA:
• Se ELIMINARÁN los empleados que fueron insertados
• Se RESTAURARÁN los datos que fueron actualizados
• Los registros con errores no serán afectados

[Botón] Revertir esta importación
[Botón] Cancelar

═════════════════════════════════════════════════════════════

DETALLES DE LA REVERSIÓN
═════════════════════════════════════════════════════════════
No. Empleado  │ Acción Original │ Reversión      │ Estado
────────────────────────────────────────────────────────────
00001         │ Insertado       │ Eliminado      │ ✓
00002         │ Actualizado     │ Restaurado     │ ✓
00003         │ Actualizado     │ Restaurado     │ ✓
...           │ ...             │ ...            │ ...
```

## Consideraciones Importantes

### ⚠️ Cosas que NO se revierten:
- Cambios manuales realizados DESPUÉS de la importación
- Cambios en otras tablas relacionadas (demograficos, etc.)
- Cambios en tabla de auditoria

### ✅ Cosas que SÍ se revierten:
- Inserciones en tabla `empleados`
- Actualizaciones en tabla `empleados`
- Inserciones en tabla `usuarios` (si se crearon)
- Inserciones en tabla `empleados_demograficos` (parcialmente)

## Contacto y Soporte

Si encuentras problemas con la reversión:
1. Revisa los logs en `storage/logs/import_nomina_reversion_*.log`
2. Verifica el estado de la importación en el historial
3. Contacta al administrador del sistema

---

**Versión**: 1.0  
**Fecha de Creación**: 03/02/2026
