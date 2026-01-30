# Gestión de Datos Demo - Clima Laboral

## Cambios Realizados

### 1. ✅ Eliminación de datos antiguos
- Se eliminaron todas las respuestas de clima existentes con escala antigua (1-5)
- Se limpiaron también elegibles y publicaciones asociadas

### 2. ✅ Actualización del procedimiento SQL
**Archivo:** `sgrh.sql`

Cambios en `generar_respuestas_clima()`:
- **Antes:** Escala 1-5 (10% nivel 1, 70% niveles 3-4, 20% nivel 5)
- **Ahora:** Escala 1-3 con distribución realista:
  - 20% = 1 (En Desacuerdo)
  - 50% = 2 (Parcialmente De acuerdo)
  - 30% = 3 (Totalmente De acuerdo)

### 3. ✅ Corrección de fórmula de conversión
**Archivo:** `public/clima_resultados_mi_unidad.php`

Fórmula actualizada en 6 instancias:
```php
// Conversión de escala 1-3 a 0-100% con límites
min(100, max(0, (($prom - 1) / 2) * 100))
```

Esto garantiza:
- 1 → 0%
- 2 → 50%
- 3 → 100%
- Valores nunca exceden 100% ni caen debajo de 0%

### 4. ✅ Scripts de gestión creados

#### `manage_demo_data.php`
Script principal para gestionar datos de demostración:
- `?action=clean` - Elimina datos existentes
- `?action=generate` - Genera nuevos datos con escala correcta
- `?action=clean&generate=1` - Limpia y regenera en una sola ejecución

#### `generar_demo_data.php`
Script alternativo que ejecuta solo el procedimiento almacenado

#### `delete_demo_data.php`
Script de eliminación rápida de datos

## Cómo usar

### Opción 1: Via navegador
```
http://localhost/sgrh/manage_demo_data.php?action=clean
http://localhost/sgrh/manage_demo_data.php?action=generate
```

### Opción 2: Ejecutar ambas acciones
```
http://localhost/sgrh/manage_demo_data.php?action=clean&generate=1
```

## Resultado esperado

- Los datos ahora usan escala 1-3 (correcta)
- Las gráficas mostrarán valores entre 0% y 100%
- La distribución es realista (20% desacuerdo, 50% parcial, 30% acuerdo)
- Todos los gráficos de climate rendirán correctamente

## Verificación

Después de ejecutar los scripts, puedes verificar en:
- http://localhost/sgrh/public/clima_resultados_mi_unidad.php
- http://localhost/sgrh/public/clima_resultados.php (Admin)
