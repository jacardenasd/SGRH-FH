# 📋 Campos Calculables del CURP

## ¿Dónde están los campos sexo, fecha_nacimiento, edad, nacionalidad y lugar_nacimiento?

Estos campos **YA NO se guardan** en `empleados_demograficos`. Se calculan **dinámicamente** desde el CURP usando funciones SQL.

---

## 🔧 Funciones SQL Disponibles

### 1. `curp_extraer_sexo(curp)`
Extrae el sexo del CURP (posición 11: H=Hombre → M, M=Mujer → F)

```sql
SELECT curp_extraer_sexo('HEGG500101HDFRRS09') as sexo;
-- Resultado: 'M' (Masculino)
```

### 2. `curp_extraer_fecha_nacimiento(curp)`
Calcula la fecha de nacimiento del CURP (posiciones 5-10: AAMMDD)

```sql
SELECT curp_extraer_fecha_nacimiento('HEGG500101HDFRRS09') as fecha_nacimiento;
-- Resultado: '1950-01-01'
```

### 3. `calcular_edad(fecha_nac)`
Calcula la edad actual desde una fecha de nacimiento

```sql
SELECT calcular_edad(curp_extraer_fecha_nacimiento('HEGG500101HDFRRS09')) as edad;
-- Resultado: 76 (en 2026)
```

### 4. `curp_extraer_nacionalidad(curp)`
Determina si la persona nació en México o en el extranjero (posiciones 12-13)

```sql
SELECT curp_extraer_nacionalidad('HEGG500101HDFRRS09') as nacionalidad;
-- Resultado: 'MEXICANA'

SELECT curp_extraer_nacionalidad('HEGG500101HNEFRS09') as nacionalidad;
-- Resultado: 'EXTRANJERA' (NE = Nacido en el Extranjero)
```

### 5. `curp_extraer_lugar_nacimiento(curp)`
Obtiene el estado de nacimiento del CURP (posiciones 12-13)

```sql
SELECT curp_extraer_lugar_nacimiento('HEGG500101HDFRRS09') as lugar_nacimiento;
-- Resultado: 'CIUDAD DE MEXICO' (DF)
```

---

## 💡 Ejemplos de Uso

### Consulta Simple
```sql
SELECT 
    e.empleado_id,
    e.nombre,
    e.curp,
    curp_extraer_sexo(e.curp) as sexo,
    curp_extraer_fecha_nacimiento(e.curp) as fecha_nacimiento,
    calcular_edad(curp_extraer_fecha_nacimiento(e.curp)) as edad,
    curp_extraer_nacionalidad(e.curp) as nacionalidad,
    curp_extraer_lugar_nacimiento(e.curp) as lugar_nacimiento
FROM empleados e
WHERE e.empleado_id = 123;
```

### JOIN con Empleados y Demográficos
```sql
SELECT 
    e.empleado_id,
    e.no_emp,
    e.nombre,
    e.apellido_paterno,
    e.curp,
    e.salario_diario,
    e.salario_mensual,
    e.sueldo_integrado,
    e.fecha_ingreso,
    curp_extraer_sexo(e.curp) as sexo,
    curp_extraer_fecha_nacimiento(e.curp) as fecha_nacimiento,
    calcular_edad(curp_extraer_fecha_nacimiento(e.curp)) as edad,
    curp_extraer_nacionalidad(e.curp) as nacionalidad,
    curp_extraer_lugar_nacimiento(e.curp) as lugar_nacimiento,
    ed.nss,
    ed.domicilio_calle,
    ed.correo_empresa,
    ed.telefono_personal
FROM empleados e
LEFT JOIN empleados_demograficos ed ON ed.empleado_id = e.empleado_id
WHERE e.empresa_id = 1 AND e.es_activo = 1;
```

### Uso en PHP
```php
$sql = "SELECT 
            e.*,
            ed.*,
            curp_extraer_sexo(e.curp) as sexo,
            curp_extraer_fecha_nacimiento(e.curp) as fecha_nacimiento,
            calcular_edad(curp_extraer_fecha_nacimiento(e.curp)) as edad,
            curp_extraer_nacionalidad(e.curp) as nacionalidad,
            curp_extraer_lugar_nacimiento(e.curp) as lugar_nacimiento
        FROM empleados e
        LEFT JOIN empleados_demograficos ed ON ed.empleado_id = e.empleado_id
        WHERE e.empleado_id = :id";
        
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $empleado_id]);
$empleado = $stmt->fetch(PDO::FETCH_ASSOC);

echo $empleado['sexo']; // M o F
echo $empleado['fecha_nacimiento']; // 1990-05-15
echo $empleado['edad']; // 35
echo $empleado['nacionalidad']; // MEXICANA
echo $empleado['lugar_nacimiento']; // JALISCO
```

---

## ✅ Ventajas de este Enfoque

1. **No hay duplicación de datos** - La fuente de verdad es el CURP
2. **Datos siempre actualizados** - La edad se calcula en tiempo real
3. **Menos espacio en disco** - No se guardan campos redundantes
4. **Integridad de datos** - Si el CURP es correcto, los datos derivados también lo son
5. **Mantenimiento simplificado** - Un solo lugar para corregir el CURP

---

## 🔄 Campos Migrados

| Campo | Antes | Ahora |
|-------|-------|-------|
| `curp` | `empleados_demograficos.curp` | `empleados.curp` |
| `fecha_alta` | `empleados_demograficos.fecha_alta` | `empleados.fecha_ingreso` |
| `sueldo_diario` | `empleados_demograficos.sueldo_diario` | `empleados.salario_diario` |
| `sueldo_mensual` | `empleados_demograficos.sueldo_mensual` | `empleados.salario_mensual` |
| `sueldo_integrado` | `empleados_demograficos.sueldo_integrado` | `empleados.sueldo_integrado` ✨ NUEVO |
| `correo` | `empleados_demograficos.correo` | `usuarios.correo` |
| `numero_empleado` | `empleados_demograficos.numero_empleado` | `empleados.no_emp` |
| `sexo` | `empleados_demograficos.sexo` | **Función:** `curp_extraer_sexo(curp)` |
| `fecha_nacimiento` | `empleados_demograficos.fecha_nacimiento` | **Función:** `curp_extraer_fecha_nacimiento(curp)` |
| `edad` | `empleados_demograficos.edad` | **Función:** `calcular_edad(fecha_nac)` |
| `nacionalidad` | `empleados_demograficos.nacionalidad` | **Función:** `curp_extraer_nacionalidad(curp)` |
| `lugar_nacimiento` | `empleados_demograficos.lugar_nacimiento` | **Función:** `curp_extraer_lugar_nacimiento(curp)` |

---

## 📝 Notas Importantes

- Si un empleado **NO tiene CURP**, las funciones retornan `NULL` o valores por defecto
- La función `curp_extraer_sexo()` retorna `'X'` si el CURP es inválido
- La función `curp_extraer_nacionalidad()` retorna `'MEXICANA'` por defecto
- Las funciones son **DETERMINISTIC** para mejor rendimiento en consultas

---

## 🚀 Aplicar Migración

Para aplicar todos estos cambios:

```bash
mysql -u root -p sgrh < migrations/refactor_empleados_demograficos.sql
```

Verifica que las funciones se crearon correctamente:

```sql
SHOW FUNCTION STATUS WHERE Db = 'sgrh';
```
