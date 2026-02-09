# 📊 CÓMO PUBLICAR RESULTADOS DE CLIMA LABORAL COMO ADMIN

## Opción 1: Interfaz Web (Recomendado)

### Pasos:

1. **Accede al Panel de Administración de Clima**
   - URL: `http://localhost/sgrh/public/clima_admin.php`
   - Debes tener permisos: `organizacion.admin` o `clima.admin`

2. **Ve a "Gestionar Períodos"**
   - Click en el menú de Clima Laboral → Períodos
   - URL: `http://localhost/sgrh/public/clima_periodos.php`

3. **Selecciona el Período a Publicar**
   - Busca el período para el año 2026 (el que creó el script)
   - Click en "Editar" (lápiz)

4. **Cambia el Estado a "Publicado"**
   - Campo "Estatus": selecciona **"publicado"** en lugar de "borrador"
   - Click en "Guardar"

5. **Verifica los Resultados**
   - Ve a: `http://localhost/sgrh/public/clima_resultados.php`
   - Deberías ver los datos del clima laboral generados

---

## Opción 2: SQL Directo (Para administradores de BD)

Si prefieres ejecutar SQL directamente:

```sql
-- Ver períodos disponibles
SELECT periodo_id, empresa_id, anio, estatus 
FROM clima_periodos 
WHERE empresa_id = 1 
ORDER BY anio DESC;

-- Publicar un período (cambiar estatus a 'publicado')
UPDATE clima_periodos 
SET estatus = 'publicado' 
WHERE periodo_id = 2 AND empresa_id = 1;

-- Verificar resultados
SELECT COUNT(*) as total_elegibles 
FROM clima_elegibles 
WHERE periodo_id = 2;

SELECT COUNT(*) as total_respuestas 
FROM clima_respuestas 
WHERE periodo_id = 2;
```

---

## Opción 3: Script PHP Automático

Crea un archivo `publicar_clima.php`:

```php
<?php
session_start();
require_once dirname(__DIR__) . '/includes/config.php';
require_once dirname(__DIR__) . '/includes/conexion.php';

$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 1;

// Buscar el período más reciente no publicado
$stmt = $pdo->prepare("
    SELECT periodo_id 
    FROM clima_periodos 
    WHERE empresa_id = ? AND estatus != 'publicado'
    ORDER BY anio DESC 
    LIMIT 1
");
$stmt->execute([$empresa_id]);
$periodo = $stmt->fetch(PDO::FETCH_ASSOC);

if ($periodo) {
    $periodo_id = $periodo['periodo_id'];
    
    // Publicar
    $upd = $pdo->prepare("
        UPDATE clima_periodos 
        SET estatus = 'publicado' 
        WHERE periodo_id = ? AND empresa_id = ?
    ");
    $upd->execute([$periodo_id, $empresa_id]);
    
    echo "✅ Período $periodo_id publicado exitosamente<br>";
    echo "<a href='clima_resultados.php'>Ver Resultados</a>";
} else {
    echo "⚠️ No hay períodos para publicar";
}
?>
```

---

## Verificar Estado de Publicación

### 1. Panel de Admin
- `http://localhost/sgrh/public/clima_admin.php`

### 2. Ver Resultados
- `http://localhost/sgrh/public/clima_resultados.php`
- `http://localhost/sgrh/public/clima_resultados_mi_unidad.php`

### 3. Verificar Datos en BD
```sql
SELECT COUNT(*) as elegibles FROM clima_elegibles WHERE periodo_id = 2;
SELECT COUNT(*) as respuestas FROM clima_respuestas WHERE periodo_id = 2;
SELECT habilitado FROM clima_publicacion WHERE periodo_id = 2 AND empresa_id = 1;
```

---

## ⚙️ Estado del Período

Los estados posibles son:
- **borrador** - Aún se puede editar
- **publicado** - Visible para empleados y en reportes
- **cerrado** - No se pueden hacer cambios

---

## Permisos Requeridos

Para acceder a estas funciones necesitas:
- `organizacion.admin` O
- `clima.admin`

Verifica en tabla `usuarios_permisos`:
```sql
SELECT * FROM usuarios_permisos 
WHERE usuario_id = ? 
AND permiso IN ('organizacion.admin', 'clima.admin');
```
