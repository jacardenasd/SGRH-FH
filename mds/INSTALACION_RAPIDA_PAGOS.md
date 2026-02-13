# ⚡ INSTALACIÓN RÁPIDA - Módulo Pagos a Proveedores

## 📋 Pasos de Instalación

### 1️⃣ Ejecutar migración SQL

**Opción A - Línea de comandos:**
```bash
cd c:\MAMP\htdocs\sgrh
mysql -u root -p nombre_base_datos < migrations\05_tramite_pago_proveedores.sql
```

**Opción B - phpMyAdmin:**
1. Abrir phpMyAdmin
2. Seleccionar tu base de datos
3. Ir a pestaña "SQL"
4. Copiar y pegar contenido de: `migrations/05_tramite_pago_proveedores.sql`
5. Ejecutar

---

### 2️⃣ Verificar archivos creados

✅ Los siguientes archivos deben existir:

```
c:\MAMP\htdocs\sgrh\
├── public\admin_pagos_proveedores.php          ⭐ NUEVO
├── migrations\05_tramite_pago_proveedores.sql  ⭐ NUEVO
├── mds\PAGOS_PROVEEDORES_README.md             📖 NUEVO
├── mds\INSTALACION_RAPIDA_PAGOS.md             📖 Este archivo
└── includes\layout\sidebar.php                  ✓ ACTUALIZADO
```

---

### 3️⃣ Verificar permisos

Ejecuta este SQL para verificar:

```sql
-- Ver permisos creados
SELECT * FROM permisos WHERE clave LIKE 'pagos_proveedores%';

-- Ver roles con acceso
SELECT r.nombre, p.clave, p.descripcion
FROM rol_permisos rp
JOIN roles r ON r.rol_id = rp.rol_id
JOIN permisos p ON p.permiso_id = rp.permiso_id
WHERE p.clave LIKE 'pagos_proveedores%';
```

**Resultado esperado:**
- 5 permisos de `pagos_proveedores.*`
- Rol "Admin" con permiso `pagos_proveedores.admin`
- Rol "Admin Organización" con permisos admin y autorizar

---

### 4️⃣ Probar acceso

1. **Iniciar sesión** con usuario Administrador
2. **Verificar menú:** Debe aparecer en sidebar:
   ```
   Administración
   └── Pagos a Proveedores  ⭐ NUEVO
   ```
3. **Acceder al módulo:** Clic en "Pagos a Proveedores"
4. **Verificar interfaz:**
   - Dashboard con 4 estadísticas
   - Tabs: "Proveedores" y "Solicitudes de Pago"

---

## 🎯 Primer Uso

### A. Crear tu primer proveedor

1. Tab **"Proveedores"**
2. Clic **"Nuevo proveedor"**
3. Llenar datos mínimos:
   - Razón Social: `Ejemplo SA de CV`
   - RFC: `EJE010101ABC`
   - Tipo: `Servicios`
4. Guardar ✅

### B. Crear tu primera solicitud

1. Tab **"Solicitudes de Pago"**
2. Clic **"Nueva solicitud de pago"**
3. Llenar formulario:
   - Proveedor: (seleccionar el creado)
   - Fecha: (hoy)
   - Concepto: `Prueba de servicio`
   - Subtotal: `10000`
   - IVA: `1600` (se calcula automáticamente)
4. Guardar ✅

**Resultado:** Se genera folio automático: `PAG-2026-0001`

---

## 📊 Estructura de Datos Creada

### Tablas:
- ✅ `proveedores` - Catálogo de proveedores
- ✅ `pago_proveedores` - Solicitudes de pago
- ✅ `pago_proveedores_documentos` - Adjuntos
- ✅ `pago_proveedores_historial` - Bitácora

### Vista:
- ✅ `v_pagos_proveedores_resumen` - Estadísticas

### Permisos:
- ✅ `pagos_proveedores.admin`
- ✅ `pagos_proveedores.solicitar`
- ✅ `pagos_proveedores.autorizar`
- ✅ `pagos_proveedores.pagar`
- ✅ `pagos_proveedores.ver`

---

## 🔧 Resolución de Problemas

### ❌ "El menú no aparece"

**Solución 1 - Limpiar caché de sesión:**
```php
// Cerrar sesión y volver a iniciar
```

**Solución 2 - Verificar permisos manualmente:**
```sql
-- Asignar permiso a tu usuario admin
INSERT IGNORE INTO usuario_roles (usuario_id, rol_id)
SELECT 1, rol_id FROM roles WHERE nombre LIKE '%Admin%' LIMIT 1;
```

### ❌ "Error al ejecutar SQL"

**Causa:** Tablas ya existen o faltan referencias

**Solución:**
```sql
-- Eliminar tablas si necesitas reinstalar
DROP TABLE IF EXISTS pago_proveedores_historial;
DROP TABLE IF EXISTS pago_proveedores_documentos;
DROP TABLE IF EXISTS pago_proveedores;
DROP TABLE IF EXISTS proveedores;

-- Volver a ejecutar migración
SOURCE migrations/05_tramite_pago_proveedores.sql;
```

### ❌ "RFC duplicado"

**Causa:** Ya existe un proveedor con ese RFC en tu empresa

**Solución:**
```sql
-- Ver proveedores existentes
SELECT * FROM proveedores WHERE rfc = 'TU_RFC';

-- Si es duplicado real, actualiza el existente
-- O cambia el estatus a activo
UPDATE proveedores SET estatus = 1 WHERE proveedor_id = X;
```

---

## 📖 Documentación Completa

Para información detallada, consulta:

📄 **[PAGOS_PROVEEDORES_README.md](PAGOS_PROVEEDORES_README.md)**

Incluye:
- ✨ Características completas
- 🎯 Guía de uso paso a paso
- 🔐 Sistema de permisos detallado
- 📊 Flujos de trabajo
- 🎨 Personalización
- 🐛 Troubleshooting avanzado
- 📈 Roadmap de mejoras

---

## ✅ Checklist de Instalación

Marca los pasos completados:

- [ ] 1. Migración SQL ejecutada sin errores
- [ ] 2. Archivos verificados (todos existen)
- [ ] 3. Permisos verificados en BD
- [ ] 4. Menú visible en sidebar
- [ ] 5. Proveedor de prueba creado
- [ ] 6. Solicitud de prueba creada
- [ ] 7. Cambio de estatus probado

---

## 🎉 ¡Listo para Usar!

Si completaste el checklist, el módulo está **100% operativo**.

### Acceso directo:
```
http://localhost/sgrh/public/admin_pagos_proveedores.php
```

### Próximos pasos sugeridos:
1. Registrar proveedores reales
2. Establecer flujo de autorización
3. Capacitar usuarios
4. Configurar respaldos de BD

---

**Fecha de instalación:** 11 de febrero de 2026  
**Versión del módulo:** 1.0  
**Tiempo estimado de instalación:** 5-10 minutos ⚡

¡Disfruta del nuevo módulo! 🚀
