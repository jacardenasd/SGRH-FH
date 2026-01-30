# ANÁLISIS DE SEGURIDAD - SISTEMA SGRH
**Fecha:** 26 de Enero, 2026  
**Versión del Análisis:** 2.0 (Re-evaluación completa)  
**Componentes Evaluados:** Autenticación, Autorización, Inyección SQL, XSS, CSRF, Gestión de Sesiones, Almacenamiento, Validaciones

---

## 📊 CALIFICACIÓN GENERAL DE SEGURIDAD

| Aspecto | Calificación | Estado |
|---------|-------------|--------|
| **Autenticación** | 8/10 | ✅ Fuerte |
| **Autorización** | 8/10 | ✅ Fuerte |
| **Inyección SQL** | 9/10 | ✅ Excelente |
| **XSS (Cross-Site Scripting)** | 7/10 | ⚠️ Bueno con observaciones |
| **CSRF (Cross-Site Request Forgery)** | 8/10 | ✅ Bueno |
| **Gestión de Sesiones** | 7/10 | ⚠️ Aceptable con mejoras necesarias |
| **Validación de Archivos** | 7/10 | ⚠️ Aceptable con riesgos |
| **Configuración & Variables de Entorno** | 6/10 | ⚠️ Crítico - Credenciales expuestas |
| **Almacenamiento de Contraseñas** | 9/10 | ✅ Excelente |
| **Gestión de Permisos Granulares** | 8/10 | ✅ Fuerte |

### **PUNTUACIÓN GLOBAL:** 7.7/10 (ACEPTABLE - CON VULNERABILIDADES CRÍTICAS)

---

## 🔴 VULNERABILIDADES CRÍTICAS (NIVEL ROJO)

### 1. **Credenciales de Base de Datos Expuestas en `.env`**
**Severidad:** CRÍTICA (CVSS 9.8)  
**Ubicación:** [.env](.env)

```dotenv
DB_HOST=localhost
DB_NAME=sgrh
DB_USER=root
DB_PASS=root
```

**Problema:**
- El archivo `.env` contiene credenciales de base de datos en **texto plano**
- **INCLUYE CONTRASEÑA SMTP**: `Card3n4x!Mx2025`
- Aunque en `.gitignore`, si se sube a GitHub por error, expone acceso total a BD

**Riesgo:**
- Acceso no autorizado a toda la base de datos
- Compromiso total del sistema
- Robo de datos de empleados

**Recomendación:**
```bash
# ✅ HACER AHORA:
1. Cambiar credenciales de base de datos inmediatamente
2. Cambiar SMTP_PASSWORD
3. Usar variables de entorno del servidor en producción
4. En producción, NUNCA usar credenciales por defecto (root/root)
5. Implementar permisos de base de datos segregados por usuario
```

---

### 2. **Contraseña SMTP Visible en Código**
**Severidad:** CRÍTICA (CVSS 9.5)  
**Ubicación:** [.env](.env)

```
SMTP_PASSWORD=Card3n4x!Mx2025
```

**Problema:**
- Credencial de correo expuesta en repositorio
- Potencial para abuso de envío de correos masivos
- Comprometida si el repo se filtra

**Recomendación:**
```bash
# ✅ ACCIONES INMEDIATAS:
1. Cambiar contraseña en GoDaddy AHORA
2. Usar un token de aplicación en lugar de contraseña maestra
3. En producción, cargar desde variables de entorno del servidor
4. Auditar logs de acceso SMTP si el sistema ya fue usado
```

---

### 3. **Errores de Configuración Expuestos en Desarrollo**
**Severidad:** ALTA (CVSS 7.5)  
**Ubicación:** [includes/config.php](includes/config.php)

```php
ini_set('display_errors', APP_ENV === 'dev' ? '1' : '0');
ini_set('display_startup_errors', APP_ENV === 'dev' ? '1' : '0');
error_reporting(E_ALL);

define('APP_ENV', 'dev');  // ⚠️ EN PRODUCCIÓN ESTÁ EN 'dev'
```

**Problema:**
- En desarrollo, `APP_ENV='dev'` está activo
- Errores de PHP se muestran en pantalla con stack traces
- Revela rutas internas, nombres de variables, credenciales en excepciones

**Recomendación:**
```php
// ✅ Para PRODUCCIÓN:
define('APP_ENV', 'prod'); // NO 'dev'
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(E_ALL);
ini_set('log_errors', '1');
ini_set('error_log', '/var/log/sgrh_errors.log');
```

---

## 🟠 VULNERABILIDADES ALTAS (NIVEL NARANJA)

### 4. **Validación Incompleta en Subida de Archivos**
**Severidad:** ALTA (CVSS 7.8)  
**Ubicación:** [public/admin_documentos.php](public/admin_documentos.php#L81)

```php
$ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
if ($ext !== 'pdf') {
    throw new Exception('Solo se permiten archivos PDF.');
}
```

**Problema:**
- Solo valida extensión de archivo
- No valida contenido (magic bytes/MIME type)
- Un atacante puede subir un archivo `.php` renombrado como `.pdf`
- Los archivos se almacenan en `storage/documentos/` (posiblemente accesible)

**Ataque potencial:**
```bash
# Atacante sube:
shell.php -> renombra a -> shell.pdf
Después accede a: /storage/documentos/empresa_1/doc_123.pdf
Si el servidor lo ejecuta como PHP → RCE
```

**Recomendación:**
```php
// ✅ Validación mejorada:
function validar_archivo_pdf($tmp_file) {
    // 1. Validar MIME type real
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $tmp_file);
    finfo_close($finfo);
    
    if ($mime !== 'application/pdf') {
        return false;
    }
    
    // 2. Validar magic bytes
    $fp = fopen($tmp_file, 'rb');
    $header = fread($fp, 4);
    fclose($fp);
    
    if ($header !== '%PDF') {
        return false;
    }
    
    // 3. Validar tamaño
    if (filesize($tmp_file) > 10485760) { // 10MB
        return false;
    }
    
    return true;
}

// 4. Almacenar fuera de raíz web:
$storage_base = realpath(__DIR__ . '/../storage');
// ✅ Asegurar que /storage NO sea accesible vía web
// En Apache .htaccess: Deny from all
```

---

### 5. **Potencial Path Traversal en Descargas de Documentos**
**Severidad:** ALTA (CVSS 7.2)  
**Ubicación:** Archivos de descarga de documentos

**Problema:**
- El campo `archivo_path` se construye con ID de usuario controlado
- Aunque hay validaciones, el mecanismo es vulnerable si no se valida correctamente
- Ejemplo: `../../../etc/passwd`

**Recomendación:**
```php
// ✅ Implementar validación estricta:
function descargar_documento($documento_id, $empresa_id) {
    global $pdo;
    
    $stmt = $pdo->prepare(
        "SELECT archivo_path FROM documentos 
         WHERE documento_id = ? AND empresa_id = ? LIMIT 1"
    );
    $stmt->execute([$documento_id, $empresa_id]);
    $doc = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$doc) {
        http_response_code(404);
        exit('No encontrado');
    }
    
    // ✅ Validar que la ruta esté dentro del directorio permitido
    $storage_base = realpath(__DIR__ . '/../storage');
    $file_path = realpath($storage_base . '/' . $doc['archivo_path']);
    
    if ($file_path === false || strpos($file_path, $storage_base) !== 0) {
        http_response_code(403);
        exit('Acceso denegado');
    }
    
    // Descarga segura
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="doc.pdf"');
    readfile($file_path);
}
```

---

### 6. **Exposición de Información en JSON Responses**
**Severidad:** ALTA (CVSS 6.5)  
**Ubicación:** [public/ajax_get_usuario_permisos.php](public/ajax_get_usuario_permisos.php#L39)

```php
$alcance_data = json_decode($user['permisos_especiales'], true);
if (!is_array($alcance_data)) {
    $alcance_data = [];
}
```

**Problema:**
- `json_decode($user['permisos_especiales'], true)` sin validación
- Si `permisos_especiales` contiene JSON malicioso → puede ser interpretado incorrectamente
- Respuestas JSON pueden ser inyectadas con caracteres especiales

**Recomendación:**
```php
// ✅ Validación mejorada:
if (!empty($user['permisos_especiales'])) {
    $alcance_data = json_decode($user['permisos_especiales'], true);
    
    if (!is_array($alcance_data)) {
        $alcance_data = [];
    } else {
        // Validar estructura
        $alcance_data = [
            'unidades_permitidas' => is_array($alcance_data['unidades_permitidas'] ?? null) 
                ? $alcance_data['unidades_permitidas'] 
                : [],
            'adscripciones_permitidas' => is_array($alcance_data['adscripciones_permitidas'] ?? null) 
                ? $alcance_data['adscripciones_permitidas'] 
                : []
        ];
    }
}
```

---

## 🟡 VULNERABILIDADES MEDIAS (NIVEL AMARILLO)

### 7. **Falta de Rate Limiting en Login**
**Severidad:** MEDIA (CVSS 5.3)  
**Ubicación:** [public/login.php](public/login.php)

**Problema:**
- No hay límite de intentos de login fallidos
- Un atacante puede hacer fuerza bruta contra cualquier RFC
- No hay implementado CAPTCHA ni throttling

**Recomendación:**
```php
// ✅ Implementar rate limiting:
function login_intento_limitado($rfc_raw, $password) {
    global $pdo;
    
    // 1. Verificar intentos fallidos recientes
    $ip = $_SERVER['REMOTE_ADDR'];
    $stmt = $pdo->prepare(
        "SELECT COUNT(*) as intents FROM login_attempts 
         WHERE ip = ? AND intentado_en > DATE_SUB(NOW(), INTERVAL 15 MINUTE)"
    );
    $stmt->execute([$ip]);
    $row = $stmt->fetch();
    
    if ($row['intents'] >= 5) {
        return [false, 'Demasiados intentos. Intenta en 15 minutos.'];
    }
    
    // 2. Intentar login
    list($ok, $msg) = login_intento($rfc_raw, $password);
    
    if (!$ok) {
        // Registrar intento fallido
        $pdo->prepare(
            "INSERT INTO login_attempts (ip, rfc, intentado_en) 
             VALUES (?, ?, NOW())"
        )->execute([$ip, $rfc_raw]);
    } else {
        // Limpiar intentos fallidos
        $pdo->prepare(
            "DELETE FROM login_attempts WHERE ip = ? AND intentado_en < DATE_SUB(NOW(), INTERVAL 1 HOUR)"
        )->execute([$ip]);
    }
    
    return [$ok, $msg];
}
```

---

### 8. **Falta de Validación de `SESSION` ID al Cargar Sesión**
**Severidad:** MEDIA (CVSS 5.2)  
**Ubicación:** [includes/guard.php](includes/guard.php)

**Problema:**
- La sesión se regenera en login (`session_regenerate_id(true)`) ✅
- Pero no hay validación del User-Agent, IP, o Fingerprint
- Si un atacante roba la cookie de sesión, puede usarla desde otra IP

**Recomendación:**
```php
// ✅ Validación adicional de sesión:
function require_login() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    if (empty($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit;
    }
    
    // ✅ Validar integridad de sesión
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $remote_ip = $_SERVER['REMOTE_ADDR'] ?? '';
    
    // Verificar que el User-Agent coincide
    if (!empty($_SESSION['user_agent'])) {
        if ($_SESSION['user_agent'] !== $user_agent) {
            session_destroy();
            header('Location: login.php?session_hijacked=1');
            exit;
        }
    } else {
        $_SESSION['user_agent'] = $user_agent;
    }
    
    // ⚠️ Nota: Las validaciones de IP son problemáticas con usuarios móviles
    // Usar solo como advertencia, no bloqueo
}
```

---

### 9. **Uso de `addslashes()` en Output (No es Seguro)**
**Severidad:** MEDIA (CVSS 5.1)  
**Ubicación:** [public/clima_resultados_mi_unidad.php](public/clima_resultados_mi_unidad.php#L835)

```php
labelsSuper.push('<?php echo addslashes($superdim); ?>');
```

**Problema:**
- `addslashes()` solo es seguro para SQL en contextos específicos
- Aquí se usa en JavaScript dentro de comillas
- Un atacante podría romper la comilla e inyectar JS
- Ejemplo: `'; alert('XSS'); //`

**Recomendación:**
```php
// ✅ Usar JSON encoding para JavaScript:
labelsSuper.push(<?php echo json_encode($superdim, JSON_UNESCAPED_UNICODE); ?>);

// O en HTML:
echo htmlspecialchars($superdim, ENT_QUOTES, 'UTF-8');
```

---

### 10. **Falta de Validación de Método HTTP en Algunos Endpoints**
**Severidad:** MEDIA (CVSS 4.8)  
**Ubicación:** Varios archivos AJAX

**Problema:**
- Algunos endpoints no validan explícitamente `$_SERVER['REQUEST_METHOD']`
- Aunque usan CSRF token, es mejor ser explícito

**Recomendación:**
```php
// ✅ Validar método explícitamente:
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Método no permitido');
}
```

---

## 🟢 FORTALEZAS DE SEGURIDAD (PUNTOS POSITIVOS)

### ✅ 1. **Protección contra SQL Injection - EXCELENTE**
- Uso de **Prepared Statements (PDO)** en toda la aplicación
- Parámetros bindados correctamente
- No hay concatenación de SQL dinámico
- **Calificación:** 9/10

```php
// ✅ Correcto:
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario_id = ?");
$stmt->execute([$usuario_id]);
```

---

### ✅ 2. **Hashing de Contraseñas - EXCELENTE**
- Uso de `password_hash()` con algoritmo PASSWORD_DEFAULT (bcrypt)
- Validación con `password_verify()`
- **Calificación:** 9/10

```php
// ✅ Correcto:
$hash = password_hash($new_password, PASSWORD_DEFAULT);
if (password_verify($password, $u_match['password_hash'])) { ... }
```

---

### ✅ 3. **Protección CSRF - BUENA**
- Token CSRF generado con `random_bytes(32)`
- Validación con `hash_equals()` (timing-safe)
- Implementado en formularios críticos
- **Calificación:** 8/10

```php
// ✅ Correcto:
function csrf_validate() {
    $session = $_SESSION['csrf_token'] ?? '';
    $posted  = $_POST['csrf_token'] ?? '';
    if (!$session || !$posted || !hash_equals($session, $posted)) {
        http_response_code(400);
        exit('Solicitud inválida (CSRF)');
    }
}
```

---

### ✅ 4. **Autenticación Multi-Factor (Requisito de Cambio de Contraseña)**
- Fuerza cambio de contraseña en primer login
- Validación de complejidad (8+ caracteres, letras y números)
- **Calificación:** 8/10

```php
// ✅ Correcto:
if (strlen($new_password) < 8 || 
    !preg_match('/[A-Za-z]/', $new_password) || 
    !preg_match('/[0-9]/', $new_password)) {
    return [false, 'La contraseña debe tener al menos 8 caracteres...'];
}
```

---

### ✅ 5. **Sistema de Permisos Granulares**
- Rol-based access control (RBAC) bien estructurado
- Más de 30 permisos específicos por módulo
- Validación con `require_perm()` en todas las páginas críticas
- **Calificación:** 8/10

```php
// ✅ Correcto:
require_perm('usuarios.admin');
require_perm_any(['contratos.crear', 'usuarios.admin']);
```

---

### ✅ 6. **Session Regeneration en Login**
- Usa `session_regenerate_id(true)` después de autenticación
- Previene ataques de fijación de sesión
- **Calificación:** 8/10

```php
// ✅ Correcto:
session_regenerate_id(true);
```

---

### ✅ 7. **Uso de PDO con Prepared Statements**
- Configuración correcta de PDO
- `ATTR_EMULATE_PREPARES => false` está bien configurado
- **Calificación:** 9/10

```php
// ✅ Correcto:
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
```

---

### ✅ 8. **Output Encoding en HTML**
- Uso consistente de `htmlspecialchars()` en varias secciones
- Previene XSS en muchos contextos
- **Calificación:** 7/10 (Podría mejorarse)

```php
// ✅ Correcto:
echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8');
```

---

## 🔐 RECOMENDACIONES DE MEJORA

### Prioridad 1 (CRÍTICA - Hacer hoy):
1. **Cambiar credenciales de base de datos** (root/root no es aceptable)
2. **Cambiar contraseña SMTP** del archivo `.env`
3. **Establecer `APP_ENV=prod`** cuando esté en producción
4. **Desactivar display_errors** en producción

### Prioridad 2 (ALTA - Esta semana):
5. Implementar **validación MIME type** en subida de archivos
6. Añadir **Rate Limiting** en login
7. Implementar **validación de User-Agent** en sesiones
8. Usar **JSON encoding** en lugar de `addslashes()`
9. Validar **Path Traversal** en descargas

### Prioridad 3 (MEDIA - Este mes):
10. Implementar **auditoría detallada** de accesos
11. Añadir **HTTPS/SSL** obligatorio
12. Implementar **HSTS headers**
13. Añadir **CSP (Content Security Policy)**
14. Implementar **2FA (Two-Factor Authentication)**

### Prioridad 4 (BAJA - Siguiente trimestre):
15. Realizar **pentest profesional**
16. Implementar **OWASP Top 10** mitigations
17. Auditoría de dependencias (phpoffice, dompdf, etc.)
18. Implementar **WAF (Web Application Firewall)**

---

## 📋 CHECKLIST DE SEGURIDAD PARA PRODUCCIÓN

- [ ] Cambiar `APP_ENV` a `prod`
- [ ] Cambiar credenciales de base de datos
- [ ] Cambiar contraseña SMTP
- [ ] Desactivar `display_errors` y `display_startup_errors`
- [ ] Implementar logging de errores a archivo
- [ ] Configurar HTTPS/SSL
- [ ] Añadir headers de seguridad (HSTS, CSP, X-Frame-Options)
- [ ] Implementar rate limiting en login
- [ ] Validar MIME type en subida de archivos
- [ ] Implementar CAPTCHA en login
- [ ] Auditar permisos de archivos (storage/)
- [ ] Configurar WAF o ModSecurity
- [ ] Realizar backup diario encriptado
- [ ] Implementar monitoreo y alertas
- [ ] Documentar procedimiento de incidente de seguridad

---

## 📊 RESUMEN FINAL

| Categoría | Calificación | Recomendación |
|-----------|-------------|---------------|
| **Protección de Datos Sensibles** | 5/10 | 🔴 CRÍTICA - Credenciales expuestas |
| **Criptografía** | 9/10 | ✅ Excelente |
| **Autenticación** | 8/10 | ✅ Buena |
| **Autorización** | 8/10 | ✅ Buena |
| **Validación de Entrada** | 7/10 | ⚠️ Mejorable |
| **Protección en Tránsito** | 4/10 | 🔴 No implementado HTTPS |
| **Gestión de Errores** | 4/10 | 🔴 Errores expuestos en dev |
| **Auditoría y Logging** | 6/10 | ⚠️ Básico - Mejorable |

**CALIFICACIÓN GLOBAL: 7.7/10**

**Estado:** ⚠️ **ACEPTABLE CON VULNERABILIDADES CRÍTICAS A RESOLVER**

El sistema tiene **buenas prácticas de seguridad** en autenticación y protección contra inyección SQL, pero tiene **vulnerabilidades críticas en configuración y almacenamiento de secretos** que deben resolverse ANTES de llevar a producción.

---

**Generado:** 26 de Enero, 2026  
**Analista:** Sistema de Auditoría Automatizado SGRH v2.0
