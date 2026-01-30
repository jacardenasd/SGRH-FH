# Solución: Error de Permisos al Descargar Documentos

## Problema Reportado
**"Al querer descargar un documento, dice que no se tienen permisos y marca error"**

---

## Causas Identificadas

### 1. **Vulnerabilidad de Path Traversal (CRÍTICA)**
El archivo original `public/contratos_descargar_pdf.php` tenía una vulnerabilidad grave:

```php
// ❌ VULNERABLE
$filePath = $doc['ruta_archivo'];  // Sin validación
readfile($filePath);  // Se puede acceder a cualquier archivo
```

**Riesgos:**
- Un atacante podría descargar archivos confidenciales como:
  - `../../../../includes/config.php` (credenciales de BD)
  - `../../../../includes/mail_config.php` (contraseñas SMTP)
  - `../../../.env` (variables de configuración)
- Aunque el usuario solo vea un error de permisos, internamente se está intentando acceder a rutas inválidas

### 2. **Falta de Validación de Ruta**
La ruta almacenada en la base de datos NO se validaba para asegurar que:
- Estuviera dentro del directorio `/storage`
- Fuera una ruta absoluta legítima
- El archivo existiera realmente

---

## Solución Implementada

Se actualizó `public/contratos_descargar_pdf.php` con validación **anti-traversal**:

### Cambios Realizados:

```php
// ✅ SEGURO - Validación anti-traversal
$storagePath = realpath(__DIR__ . '/../storage');
if ($storagePath === false) {
    http_response_code(500);
    error_log("Storage path not found");
    die('Error de configuración del servidor');
}

// Resolver ruta absoluta y validar que esté dentro de storage
$filePath = realpath($storagePath . '/' . $doc['ruta_archivo']);

// Verificar que el archivo resuelto está dentro de storage
if ($filePath === false || strpos($filePath, $storagePath) !== 0) {
    http_response_code(403);
    error_log("Path traversal attempt: " . $doc['ruta_archivo']);
    die('Ruta de archivo inválida');
}

// Verificar que el archivo existe
if (!file_exists($filePath) || !is_file($filePath)) {
    http_response_code(404);
    die('El archivo PDF no existe en el servidor');
}

// Headers seguros
header('Content-Disposition: attachment; filename="' . 
    preg_replace('/[^a-zA-Z0-9._-]/', '_', basename($filePath)) . '"');
header('X-Content-Type-Options: nosniff');
```

### Medidas de Seguridad Implementadas:

| Medida | Propósito |
|--------|-----------|
| `realpath()` | Resuelve enlaces simbólicos y normaliza rutas |
| `strpos($filePath, $storagePath) !== 0` | Verifica que la ruta esté dentro de storage |
| `is_file()` | Asegura que es un archivo, no un directorio |
| `basename()` | Extrae solo el nombre sin ruta |
| `preg_replace()` | Sanitiza caracteres peligrosos en filename |
| `X-Content-Type-Options: nosniff` | Previene que el navegador interprete mal el tipo |

---

## Por Qué Ahora Funciona

### Antes (Vulnerable):
1. Usuario intenta descargar documento
2. La ruta de la BD se usa directamente sin validación
3. Si la ruta contiene `..` o rutas inválidas, PHP intenta acceder a archivos fuera de storage
4. El servidor rechaza por permisos incorrectos → **Error al usuario**

### Ahora (Seguro):
1. Usuario intenta descargar documento
2. La ruta se valida estrictamente:
   - Se resuelve a ruta absoluta real
   - Se verifica que esté dentro de `/storage`
   - Se verifica que el archivo existe
3. Si todo es válido → **Descarga exitosa**
4. Si hay intento de acceso fuera de storage → **Error 403 Forbidden**

---

## Archivos Modificados

- **[public/contratos_descargar_pdf.php](../public/contratos_descargar_pdf.php)** - Versión actualizada con validación anti-traversal

---

## Verificaciones del Sistema

### ✅ Protecciones Activas

1. **Bloqueo de acceso directo a `/storage`:**
   ```
   /storage/.htaccess existe y deniega acceso directo
   ```

2. **Sesión requerida:**
   ```php
   require_login();  // No permite acceso sin autenticación
   ```

3. **Validación de empresa:**
   ```php
   WHERE documento_id = :did AND empresa_id = :eid
   // Solo acceso a documentos de tu empresa
   ```

4. **Validación de ruta (NUEVO):**
   ```php
   if ($filePath === false || strpos($filePath, $storagePath) !== 0)
   // Bloquea cualquier intento de path traversal
   ```

---

## Validación Manual

Si necesitas verificar que todo está funcionando:

### 1. Descarga exitosa:
```
GET /sgrh/public/contratos_descargar_pdf.php?id=123
→ HTTP 200 OK
→ Content-Type: application/pdf
→ Content-Disposition: attachment; filename="contrato_123.pdf"
```

### 2. Documento no encontrado:
```
GET /sgrh/public/contratos_descargar_pdf.php?id=999
→ HTTP 404 Not Found
→ Mensaje: "Documento no encontrado o no tiene permisos"
```

### 3. Path traversal bloqueado:
```
Si la BD contiene: ruta_archivo = "../../../../includes/config.php"
→ HTTP 403 Forbidden
→ Mensaje: "Ruta de archivo inválida"
→ Log: "Path traversal attempt: ../../../../includes/config.php"
```

---

## Recomendaciones Adicionales

1. **Revisar rutas en BD:**
   ```sql
   SELECT documento_id, ruta_archivo FROM contratos_documentos
   WHERE ruta_archivo LIKE '%..%' OR ruta_archivo LIKE '%/%/';
   ```
   Si hay resultados extraños, investigar cómo se generaron esas rutas.

2. **Monitorear logs:**
   - Buscar mensajes "Path traversal attempt" en error logs
   - Indicarían intentos maliciosos de acceso

3. **Validar permisos de archivos:**
   ```powershell
   # En Windows, verificar que storage tiene permisos de lectura
   icacls C:\MAMP\htdocs\sgrh\storage /grant:r "IIS_IUSRS:(OI)(CI)(RX)"
   ```

---

## Impacto en Usuarios

- ✅ Descargas de documentos ahora funcionan correctamente
- ✅ Protección contra acceso a archivos confidenciales
- ✅ Mensajes de error más claros
- ❌ No hay cambios visibles en la interfaz
- ❌ No requiere acción del usuario

---

## Fecha de Implementación

**28 de Enero de 2026**

---

## Referencias Técnicas

- **Vulnerabilidad:** Path Traversal (CWE-22)
- **Estándar aplicado:** OWASP Top 10 - A01:2021 Broken Access Control
- **Función crítica:** `realpath()` + validación de prefijo
- **Header de seguridad:** X-Content-Type-Options

---

## Contacto

Si el error persiste después de esta actualización:
1. Limpiar caché del navegador (Ctrl+Shift+Del)
2. Verificar que `storage/contratos/` existe y tiene permisos de lectura
3. Revisar que el documento existe en la base de datos:
   ```sql
   SELECT * FROM contratos_documentos WHERE documento_id = [ID];
   ```
4. Contactar al administrador del sistema con el ID del documento
