# Sistema de Roles y Alcance Organizacional
## SGRH - Documentación Técnica

**Fecha:** 2026-01-20  
**Versión:** 2.0 - Simplificado  
**Compatible:** PHP 5.7+, MySQL 5.7+

---

## Arquitectura del Sistema

El sistema funciona en **dos capas independientes y complementarias**:

### 1. Roles (QUÉ puede hacer)
Define las acciones que un usuario puede realizar en el sistema.

**Gestión:**
- Asignados en `usuario_roles` (tabla relacional)
- Un usuario puede tener múltiples roles
- Los permisos se acumulan (tiene TODOS los permisos de todos sus roles)

**Verificación:**
```php
if (can('plantilla.ver')) {
    // Usuario puede ver plantilla
}
```

**Permisos disponibles:** Ver `includes/permisos_config.php`

### 2. Alcance Organizacional (QUÉ puede ver/modificar)
Filtra los DATOS que un usuario puede consultar o modificar.

**Criterios de alcance:**
- **Empresa:** Ya controlado por `usuario_empresas` (relacional)
- **Unidades:** Array en `permisos_especiales.unidades_permitidas`
- **Departamentos:** Array en `permisos_especiales.adscripciones_permitidas`

**Regla de oro:**
- Arrays vacíos o ausentes = **SIN RESTRICCIONES** (ve todo de su empresa)
- Arrays con IDs = **FILTRADO** (solo ve esos registros)

---

## Estructura de Datos

### Tabla: `usuarios`
```sql
permisos_especiales TEXT NULL  -- JSON con estructura simplificada:
{
  "unidades_permitidas": [1, 3, 5],
  "adscripciones_permitidas": [10, 15, 20]
}
```

### Funciones Helper (`includes/alcance.php`)

#### `get_usuario_alcance($usuario_id, $empresa_id)`
Retorna alcance del usuario:
```php
[
  'unidades' => [1, 3, 5],
  'adscripciones' => [10, 15]
]
```

#### `aplicar_filtro_alcance(&$where_parts, &$params, $tabla_alias, $alcance)`
Agrega condiciones WHERE a un query:
```php
$where_parts = ['p.empresa_id = :empresa_id'];
$params = [':empresa_id' => $empresa_id];

aplicar_filtro_alcance($where_parts, $params, 'p', $alcance);
// Agrega: p.unidad_id IN (:alcance_unidad_0, :alcance_unidad_1...)
```

#### `tiene_alcance($alcance, $unidad_id, $adscripcion_id)`
Valida si usuario tiene permiso para un registro específico:
```php
if (!tiene_alcance($alcance, $unidad_id, $adscripcion_id)) {
    throw new RuntimeException('Sin permiso para esta unidad/departamento');
}
```

#### `get_unidades_permitidas($usuario_id, $empresa_id)`
Lista de unidades para combos (ya filtrada):
```php
$unidades = get_unidades_permitidas($usuario_id, $empresa_id);
foreach ($unidades as $u) {
    echo "<option value='{$u['unidad_id']}'>{$u['nombre']}</option>";
}
```

#### `get_adscripciones_permitidas($usuario_id, $empresa_id)`
Lista de adscripciones para combos (ya filtrada por unidades y adscripciones):
```php
$adscripciones = get_adscripciones_permitidas($usuario_id, $empresa_id);
```

---

## Implementación en Vistas

### Patrón estándar para cualquier vista:

```php
// 1. Incluir helper
require_once __DIR__ . '/../includes/alcance.php';

// 2. Obtener alcance al inicio
$usuario_id = (int)$_SESSION['usuario_id'];
$empresa_id = (int)$_SESSION['empresa_id'];
$alcance = get_usuario_alcance($usuario_id, $empresa_id);

// 3. Aplicar filtros en queries de lectura
$where_parts = ['p.empresa_id = :empresa_id'];
$params = [':empresa_id' => $empresa_id];

aplicar_filtro_alcance($where_parts, $params, 'p', $alcance);

// Agregar otros filtros normales
if ($filtro_estado) {
    $where_parts[] = 'p.estado = :estado';
    $params[':estado'] = $filtro_estado;
}

$where_sql = implode(' AND ', $where_parts);
$sql = "SELECT ... FROM tabla p WHERE $where_sql";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);

// 4. Validar alcance en operaciones de escritura
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $unidad_id = (int)$_POST['unidad_id'];
    $adscripcion_id = (int)$_POST['adscripcion_id'];
    
    if (!tiene_alcance($alcance, $unidad_id, $adscripcion_id)) {
        throw new RuntimeException('No tienes permiso para modificar esta unidad/departamento');
    }
    
    // Proceder con INSERT/UPDATE
}

// 5. Usar helpers para combos
$unidades = get_unidades_permitidas($usuario_id, $empresa_id);
$adscripciones = get_adscripciones_permitidas($usuario_id, $empresa_id);
```

---

## Vistas ya implementadas

### ✅ `admin_usuarios.php`
- Modal de permisos con selects de unidades y adscripciones
- Guarda en JSON: `permisos_especiales`
- AJAX endpoint: `ajax_get_usuario_permisos.php`

### ✅ `plantilla.php` (consulta)
- Filtro automático por alcance
- Combos limitados a unidades/departamentos permitidos
- Stats respetan alcance

### ✅ `admin_org_plantilla.php` (admin)
- Filtro automático por alcance
- Validación en CREATE/UPDATE de plazas
- Combos limitados a alcance

### ✅ `clima_resultados_mi_unidad.php`
- Ya limitado por unidad del empleado (lógica propia)
- No requiere cambios

### ✅ `clima_planes_mi_unidad.php`
- Ya limitado por unidad del empleado (lógica propia)
- No requiere cambios

---

## Guía de Administración

### Escenario 1: Usuario puede ver plantilla de TODO
```json
{
  "unidades_permitidas": [],
  "adscripciones_permitidas": []
}
```
**Roles asignados:** "Consultor RH" (con permiso `plantilla.ver`)  
**Resultado:** Ve todas las plazas de su empresa.

### Escenario 2: Usuario puede ver plantilla de Unidades 1 y 3
```json
{
  "unidades_permitidas": [1, 3],
  "adscripciones_permitidas": []
}
```
**Roles asignados:** "Jefe de Área" (con permiso `plantilla.ver`)  
**Resultado:** Solo ve plazas de unidades 1 y 3 (todas las adscripciones dentro).

### Escenario 3: Usuario puede administrar plantilla de Depto 10 y 15
```json
{
  "unidades_permitidas": [],
  "adscripciones_permitidas": [10, 15]
}
```
**Roles asignados:** "Administrador Plantilla" (con permisos `plantilla.admin`, `organizacion.plantilla.edit`)  
**Resultado:** Puede crear/editar plazas solo en adscripciones 10 y 15.

### Escenario 4: Combinado (más restrictivo)
```json
{
  "unidades_permitidas": [1, 3],
  "adscripciones_permitidas": [10, 15, 20]
}
```
**Roles asignados:** "Supervisor" (con permiso `plantilla.ver`)  
**Resultado:** Ve plazas que cumplan:
- Unidad 1 ó 3 **Y**
- Adscripción 10, 15 ó 20

(Solo registros que cumplan AMBAS condiciones)

---

## Permisos Disponibles

Ver archivo: `includes/permisos_config.php`

**Principales:**
- `plantilla.ver`: Ver plantilla autorizada
- `plantilla.admin`: Administrar plantilla
- `organizacion.plantilla.edit`: Editar plazas específicas
- `organizacion.admin`: Admin completo de organización
- `usuarios.admin`: Admin de usuarios
- `clima.admin`: Admin de clima laboral
- `clima.planes_unidad`: Crear planes de acción
- `contratos.ver`, `contratos.crear`: Kit de contratación

---

## Migraciones

### `03_add_permisos_especiales_usuarios.sql`
Creó la columna `permisos_especiales` (TEXT) en `usuarios`.

### `04_estructura_alcance_organizacional.sql`
Documenta la estructura JSON esperada (no modifica esquema).

---

## Interfaz de Usuario

### Admin Usuarios → Botón "Roles"
Asigna roles al usuario (define permisos funcionales).

### Admin Usuarios → Botón "Alcance"
**Modal incluye:**
1. **Alcance - Unidades:** Multiselect (Ctrl+clic)
2. **Alcance - Departamentos:** Multiselect (Ctrl+clic)

**Comportamiento:**
- Carga alcance actual vía AJAX
- Guarda en JSON al submit
- Si no selecciona unidades/departamentos = sin restricciones (ve todo)

**Flujo recomendado:**
1. Asignar **roles** primero (define QUÉ puede hacer)
2. Asignar **alcance** después (filtra QUÉ datos ve)

---

## Testing Recomendado

### Test 1: Admin sin restricciones
1. Usuario con `organizacion.admin`
2. No asignar unidades/departamentos
3. Verificar que ve TODO en plantilla

### Test 2: Usuario limitado a Unidad 1
1. Usuario con `plantilla.ver`
2. Asignar solo unidad_id=1
3. Verificar que:
   - Solo ve plazas de unidad 1
   - Combos de filtros solo muestran unidad 1

### Test 3: Usuario limitado a Depto 10
1. Usuario con `plantilla.admin`
2. Asignar solo adscripcion_id=10
3. Intentar crear plaza en depto 15 → debe fallar
4. Crear plaza en depto 10 → debe funcionar

### Test 4: Combinación restrictiva
1. Usuario con unidades [1,2] y adscripciones [10]
2. Verificar que solo ve registros con unidad 1 ó 2 **Y** adscripción 10

---

## Extensión a Nuevas Vistas

Para aplicar alcance a cualquier vista nueva:

```php
// 1. Include helper
require_once __DIR__ . '/../includes/alcance.php';

// 2. Obtener alcance
$alcance = get_usuario_alcance($_SESSION['usuario_id'], $_SESSION['empresa_id']);

// 3. En SELECT
$where_parts = ['tabla.empresa_id = :eid'];
$params = [':eid' => $empresa_id];
aplicar_filtro_alcance($where_parts, $params, 'tabla', $alcance);

// 4. En INSERT/UPDATE
if (!tiene_alcance($alcance, $unidad_id, $adscripcion_id)) {
    throw new RuntimeException('Sin permiso');
}

// 5. Combos
$unidades = get_unidades_permitidas($usuario_id, $empresa_id);
```

---

## Notas Importantes

- **Compatibilidad PHP 5.7:** No usar `??`, usar `isset()` ternarios
- **Performance:** Alcances vacíos = 0 filtros adicionales (rápido)
- **Seguridad:** Validar siempre en POST, no confiar en combos client-side
- **Bitácora:** Todas las operaciones críticas registran en `bitacora`
- **Transacciones:** Usar `beginTransaction()` / `commit()` en operaciones complejas

---

## Soporte y Mantenimiento

**Archivos clave:**
- `includes/alcance.php` - Lógica central
- `includes/permisos_config.php` - Permisos disponibles
- `public/admin_usuarios.php` - UI de asignación
- `migrations/04_*.sql` - Documentación de estructura

**Logs y debugging:**
```php
// Verificar alcance de usuario:
$alcance = get_usuario_alcance($usuario_id, $empresa_id);
var_dump($alcance);

// Ver permisos efectivos:
$permisos = get_all_user_perms($usuario_id);
var_dump($permisos);
```

---

## Changelog

**2026-01-20 - v1.0**
- Implementación inicial de alcance organizacional
- Integración en plantilla.php y admin_org_plantilla.php
- UI en admin_usuarios.php
- Helper centralizado alcance.php
- Documentación completa
