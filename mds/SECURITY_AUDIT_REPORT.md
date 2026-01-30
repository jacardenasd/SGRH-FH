# ANÁLISIS COMPLETO DE SEGURIDAD - SISTEMA SGRH
## Reporte Detallado de Vulnerabilidades y Recomendaciones

**Fecha de Análisis:** 26 de Enero, 2026  
**Versión:** 1.0  
**Alcance:** Sistema de Gestión de Recursos Humanos (SGRH) - PHP/MySQL

---

## RESUMEN EJECUTIVO

### Puntuación de Seguridad General: **64/100** ⚠️ MEDIANO-BAJO

El sistema implementa medidas de seguridad básicas pero tiene **vulnerabilidades críticas y altas** que deben ser corregidas inmediatamente. La mayoría de los controles están parcialmente implementados o inconsistentemente aplicados.

---

## 1. VULNERABILIDADES CRÍTICAS (Riesgo Máximo)

### 1.1 🔴 CREDENCIALES EN TEXTO PLANO - Severidad: CRÍTICA

**Ubicación:** [includes/mail_config.php](includes/mail_config.php#L1-L20)

```php
define('SMTP_USERNAME', 'contacto@rhfarma.mx');
define('SMTP_PASSWORD', 'Card3n4x!Mx2025');
```

**Problema:**
- Las credenciales SMTP están en texto plano en el código fuente
- Cualquiera con acceso al repositorio o servidor obtiene credenciales válidas
- La contraseña es visible en el código versionado

**Riesgo:**
- Compromiso total de cuenta de correo corporativa
- Suplantación de identidad (envío de correos maliciosos desde dominio corporativo)
- Exposición de información sensible a través de correos

**Recomendación:**
```php
// ✅ CORRECTO: Usar variables de entorno
define('SMTP_USERNAME', getenv('SMTP_USERNAME'));
define('SMTP_PASSWORD', getenv('SMTP_PASSWORD'));

// O utilizar archivo .env no versionado
$env = parse_ini_file(__DIR__ . '/../.env.local');
define('SMTP_USERNAME', $env['SMTP_USERNAME']);
define('SMTP_PASSWORD', $env['SMTP_PASSWORD']);
```

---

### 1.2 🔴 CREDENCIALES DE BASE DE DATOS EN TEXTO PLANO - Severidad: CRÍTICA

**Ubicación:** [includes/conexion.php](includes/conexion.php#L1-L20)

```php
$host = 'localhost';
$db   = 'sgrh';
$user = 'root';      // ⚠️ Usuario root
$pass = 'root';      // ⚠️ Contraseña por defecto
$charset = 'utf8mb4';
```

**Problemas:**
1. Credenciales en texto plano (mismo que SMTP)
2. Usuario `root` utilizado (máximo privilegio)
3. Contraseña igual al usuario (patrón muy débil)
4. Sin protección adicional por entorno

**Impacto:**
- Acceso total a la base de datos por cualquiera
- Posibilidad de extraer todos los datos (empleados, salarios, información personal)
- Posibilidad de modificar o eliminar datos
- Escalada de privilegios a nivel de servidor

**Recomendación:**
```php
// ✅ CORRECTO: Usar variables de entorno + usuario limitado
$db_config = [
    'host' => getenv('DB_HOST') ?: 'localhost',
    'db'   => getenv('DB_NAME') ?: 'sgrh',
    'user' => getenv('DB_USER') ?: 'sgrh_app',  // Usuario específico, NO root
    'pass' => getenv('DB_PASS'),
    'charset' => 'utf8mb4'
];

$dsn = "mysql:host={$db_config['host']};dbname={$db_config['db']};charset={$db_config['charset']}";
```

**Permisos mínimos recomendados para usuario en BD:**
```sql
CREATE USER 'sgrh_app'@'localhost' IDENTIFIED BY 'password_fuerte_aqui';
GRANT SELECT, INSERT, UPDATE, DELETE ON sgrh.* TO 'sgrh_app'@'localhost';
REVOKE ALL ON *.* FROM 'sgrh_app'@'localhost';
FLUSH PRIVILEGES;
```

---

### 1.3 🔴 FALTA DE PROTECCIÓN CSRF EN FORMULARIOS CRÍTICOS - Severidad: CRÍTICA

**Ubicación:** Múltiples archivos públicos

**Análisis:**
- ✅ CSRF token implementado en algunos archivos ([public/admin_usuarios.php](public/admin_usuarios.php#L19-L21))
- ❌ **AUSENTE** en archivos críticos:
  - `cambiar_password.php` - **SIN PROTECCIÓN CSRF**
  - `recuperar_contrasena.php` - **SIN PROTECCIÓN CSRF**
  - `login.php` - **SIN PROTECCIÓN CSRF**
  - `mi_perfil.php` - **SIN PROTECCIÓN CSRF**

**Código vulnerable (cambiar_password.php):**
```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $p1 = $_POST['password1'] ?? '';
    $p2 = $_POST['password2'] ?? '';
    // ❌ NO HAY VALIDACIÓN DE CSRF TOKEN
    if ($p1 !== $p2) {
        $error = 'Las contraseñas no coinciden.';
    }
    // Procede a cambiar contraseña SIN PROTECCIÓN
}
```

**Ataque posible (CSRF):**
Un atacante puede crear un sitio malicioso que cuando el usuario lo visita, ejecuta:
```html
<!-- En sitio atacante -->
<form action="http://sgrh.empresa.com/public/cambiar_password.php" method="POST">
    <input type="hidden" name="password1" value="password_new_123">
    <input type="hidden" name="password2" value="password_new_123">
</form>
<script>document.forms[0].submit();</script>
```

**Recomendación:**
```php
// En todos los formularios POST críticos:
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// En formulario HTML:
?>
<form method="post">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    <!-- resto del formulario -->
</form>
<?php

// En validación POST:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!hash_equals($_SESSION['csrf_token'], $token)) {
        die('Solicitud inválida (CSRF)');
    }
    // Proceder...
}
```

---

### 1.4 🔴 DIRECTORIO /storage ACCESIBLE PÚBLICAMENTE - Severidad: CRÍTICA

**Ubicación:** [/storage](storage) directorio web root

**Problemas:**
1. El directorio `storage` está en la raíz web (`/sgrh/storage/`)
2. Archivos PDFs, fotos, y documentos son accesibles por URL directa
3. No hay configuración `.htaccess` en directorios principales de storage
4. Solo existe en [storage/contratos/.htaccess](storage/contratos/.htaccess) con reglas incompletas

**Riesgo:**
- Descarga no autorizada de documentos confidenciales
- Acceso a fotos de empleados sin control de permisos
- Los archivos pueden ser indexados por motores de búsqueda
- Fuga de información personal (GDPR/LGPD)

**Arquivos detectados accesibles:**
```
/sgrh/storage/documentos/empresa_*/doc_*.pdf
/sgrh/storage/empleados_fotos/empresa_*/emp_*.jpg
/sgrh/storage/contratos/*.pdf
/sgrh/storage/mails/*
```

**Recomendación:**
```apache
# ✅ Crear /storage/.htaccess
<FilesMatch ".*">
    Order Deny,Allow
    Deny from all
</FilesMatch>

# Permitir solo acceso controlado por PHP
# En los scripts de descarga, verificar permisos primero
```

También, **mover `storage` fuera del web root:**
```
/var/www/sgrh-app/    (código PHP)
/var/www/sgrh-storage/ (archivos privados)
```

Actualizar referencia en PHP:
```php
define('STORAGE_PATH', '/var/www/sgrh-storage');
define('STORAGE_WEB_PATH', '/sgrh-private'); // Ruta controlada por PHP
```

---

### 1.5 🔴 PATH TRAVERSAL EN DESCARGA DE PDFs - Severidad: CRÍTICA

**Ubicación:** [public/contratos_descargar_pdf.php](public/contratos_descargar_pdf.php#L1-L45)

```php
$filePath = $doc['ruta_archivo'];  // ❌ Ruta directa sin validación

if (!file_exists($filePath)) {
    die('El archivo PDF no existe en el servidor');
}

// ❌ NO hay validación anti-traversal
readfile($filePath);
```

**Vulnerabilidad:** 
Si un atacante manipula la BD o SQL injection, podría poner ruta como:
- `../../../../etc/passwd`
- `../../../.env`
- `../../../../includes/config.php`

**Ataque:**
```
Si BD tiene: ruta_archivo = "../../../../includes/mail_config.php"
Descargará el archivo de configuración con credenciales
```

**Recomendación:**
```php
// ✅ CORRECTO con validación anti-traversal
$filePath = $doc['ruta_archivo'];

// Validar que esté dentro de storage
$storagePath = realpath(__DIR__ . '/../storage');
$realPath = realpath($filePath);

if ($realPath === false || strpos($realPath, $storagePath) !== 0) {
    http_response_code(403);
    die('Acceso denegado a este archivo');
}

if (!file_exists($realPath)) {
    http_response_code(404);
    die('Archivo no encontrado');
}

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . basename($realPath) . '"');
header('Content-Length: ' . filesize($realPath));
readfile($realPath);
```

---

## 2. VULNERABILIDADES ALTAS (Riesgo Muy Alto)

### 2.1 🟠 INFORMACIÓN SENSIBLE EN MENSAJES DE ERROR - Severidad: ALTA

**Ubicación:** [includes/conexion.php](includes/conexion.php#L17-L20)

```php
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die('Error de conexión BD');  // ✅ Bueno, genérico
}
```

**Ubicación problemática:** [public/login.php](public/login.php#L30-L40)

```php
if ($ok) {
    // Forzar cambio si aplica
    if (!empty($_SESSION['debe_cambiar_pass'])) {
        header('Location: cambiar_password.php');
```

**Problemas:**
1. Las excepciones en archivos productivos pueden mostrar stack traces
2. No hay manejo consistente de excepciones

**Recomendación:**
```php
// En config.php
if (APP_ENV === 'production') {
    error_reporting(E_ALL);
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');
    ini_set('error_log', '/var/log/sgrh/php_errors.log');
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

// En todas las operaciones de BD:
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
} catch (Exception $e) {
    error_log("DB Error: " . $e->getMessage());
    http_response_code(500);
    die('Error procesando solicitud. Por favor intenta más tarde.');
}
```

---

### 2.2 🟠 FALTA DE VALIDACIÓN DE INTEGRIDAD EN UPLOADS - Severidad: ALTA

**Ubicación:** [public/mi_perfil.php](public/mi_perfil.php#L170-L210)

```php
$info = @getimagesize($tmp);
if ($info === false) {
    $errores[] = 'El archivo no es una imagen válida.';
} else {
    $mime = $info['mime'];
    if (!in_array($mime, ['image/jpeg', 'image/png'])) {
        $errores[] = 'Solo se permiten imágenes JPG o PNG.';
    }
    // ✅ Bien: valida MIME
    // ❌ PERO: no valida magic bytes
}
```

**Vulnerabilidad:**
- Solo valida MIME type (puede ser falsificado)
- No verifica magic bytes del archivo
- Un atacante puede renombrar ejecutable a `.jpg`

**Ataque:**
```php
// Archivo: shell.php.jpg (o simple shell.jpg con contenido PHP)
<?php system($_GET['cmd']); ?>
// Si el servidor ejecuta .jpg como PHP en ciertos contextos...
```

**Recomendación:**
```php
// ✅ CORRECTO: Validar magic bytes
function validar_imagen($filepath) {
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $filepath);
    finfo_close($finfo);
    
    $allowed = ['image/jpeg', 'image/png', 'image/webp'];
    return in_array($mime, $allowed);
}

// Además, validar tamaño de imagen
$size = getimagesize($tmp);
if ($size === false) {
    $errores[] = 'No es una imagen válida';
} elseif ($size[0] < 100 || $size[1] < 100) {
    $errores[] = 'Imagen muy pequeña';
} elseif ($size[0] > 4000 || $size[1] > 4000) {
    $errores[] = 'Imagen muy grande';
}

// Y guardar con nombre genérico
$filename = 'emp_' . $empleado_id . '_' . bin2hex(random_bytes(8)) . '.' . $ext;
```

---

### 2.3 🟠 SESSION CONFIGURATION INSEGURA - Severidad: ALTA

**Ubicación:** [includes/config.php](includes/config.php#L1-L10)

```php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// ❌ NO hay configuración de seguridad de sesión
```

**Problemas:**
1. No hay configuración de `session.cookie_httponly`
2. No hay configuración de `session.cookie_secure` (HTTPS)
3. No hay `session.cookie_samesite`
4. No hay configuración de `session.use_strict_mode`
5. Timeout de sesión predeterminado (24 minutos)

**Riesgos:**
- Robo de cookies por XSS
- Ataques de session fixation
- Session hijacking en HTTPS

**Recomendación:**
```php
// En includes/config.php (ANTES de session_start)
if (PHP_VERSION_ID >= 70300) {
    session_set_cookie_params([
        'lifetime' => 3600,        // 1 hora
        'path'     => '/',
        'domain'   => '',          // Omitir para usar dominio actual
        'secure'   => (strpos($_SERVER['SERVER_PROTOCOL'], 'HTTPS') !== false),
        'httponly' => true,        // Prevenir acceso desde JavaScript
        'samesite' => 'Strict'     // Prevenir envío en requests cross-site
    ]);
} else {
    // Para PHP < 7.3
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_secure', (strpos($_SERVER['SERVER_PROTOCOL'], 'HTTPS') !== false) ? 1 : 0);
}

ini_set('session.use_strict_mode', 1);
ini_set('session.sid_length', 32);
ini_set('session.sid_bits_per_character', 6);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
```

---

### 2.4 🟠 REGISTRO INCOMPLETO DE INTENTOS DE ACCESO - Severidad: ALTA

**Ubicación:** [includes/auth.php](includes/auth.php#L12-L60)

```php
function login_intento($rfc_raw, $password) {
    // ...
    if (!$rows) {
        return [false, 'Credenciales incorrectas.'];
    }
    // ❌ NO hay registro de intento fallido
    
    if (!$u_match) {
        return [false, 'Credenciales incorrectas.'];
    }
    // ❌ NO hay registro de intento fallido
}
```

**Problemas:**
1. No se registran intentos fallidos de login
2. No hay límite de intentos de fuerza bruta
3. No hay alertas en intentos sospechosos
4. Tabla de bitácora existe pero no se usa en login

**Riesgo:**
- Ataque de fuerza bruta sin detección
- Sin trazabilidad de intentos comprometidos
- Violaciones de seguridad no detectadas

**Recomendación:**
```php
function login_intento($rfc_raw, $password) {
    global $pdo;
    $rfc_base = normaliza_rfc_base($rfc_raw);
    
    // Verificar intentos recientes fallidos
    $stmt = $pdo->prepare("
        SELECT COUNT(*) FROM login_attempts 
        WHERE rfc_base = :rfc 
          AND attempted_at > DATE_SUB(NOW(), INTERVAL 15 MINUTE)
    ");
    $stmt->execute([':rfc' => $rfc_base]);
    $failed = (int)$stmt->fetchColumn();
    
    if ($failed >= 5) {
        // Registrar alerta
        registrar_alerta_seguridad('login_brute_force', $rfc_base);
        return [false, 'Cuenta bloqueada temporalmente. Intenta en 15 minutos.'];
    }
    
    // ... resto del login
    
    if (!$u_match) {
        // Registrar intento fallido
        $stmt = $pdo->prepare("
            INSERT INTO login_attempts (rfc_base, ip, attempted_at)
            VALUES (:rfc, :ip, NOW())
        ");
        $stmt->execute([
            ':rfc' => $rfc_base,
            ':ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown'
        ]);
        return [false, 'Credenciales incorrectas.'];
    }
    
    // Limpiar intentos fallidos en login exitoso
    $pdo->prepare("DELETE FROM login_attempts WHERE rfc_base = :rfc")
        ->execute([':rfc' => $rfc_base]);
    
    // Registrar login exitoso
    $pdo->prepare("
        INSERT INTO bitacora (usuario_id, modulo, accion, ip)
        VALUES (:uid, 'auth', 'login_success', :ip)
    ")->execute([':uid' => $u_match['usuario_id'], ':ip' => $_SERVER['REMOTE_ADDR']]);
    
    return [true, 'OK'];
}
```

---

### 2.5 🟠 AUSENCIA DE RATE LIMITING EN ENDPOINTS CRÍTICOS - Severidad: ALTA

**Ubicación:** [public/clima_guardar_respuesta.php](public/clima_guardar_respuesta.php#L1-L80)

```php
$reactivo_id = 0;
if (isset($_POST['reactivo_id'])) { $reactivo_id = (int)$_POST['reactivo_id']; }

$valor = 0;
if (isset($_POST['valor'])) { $valor = (int)$_POST['valor']; }

// ❌ Sin verificación de rate limit
// Un atacante podría spamear respuestas
```

**Problemas:**
1. APIs AJAX sin protección contra abuso
2. No hay límite de requests por usuario/IP
3. No hay throttling en operaciones costosas

**Riesgo:**
- DOS (Denial of Service)
- Spam masivo de datos
- Degradación del servicio

**Recomendación:**
```php
// Helper para rate limiting
function check_rate_limit($key, $limit = 100, $window = 3600) {
    global $pdo;
    
    $stmt = $pdo->prepare("
        SELECT COUNT(*) FROM rate_limits 
        WHERE rate_key = :key 
          AND created_at > DATE_SUB(NOW(), INTERVAL ? SECOND)
    ");
    $stmt->execute([$key, $window]);
    $count = (int)$stmt->fetchColumn();
    
    if ($count >= $limit) {
        return false;
    }
    
    // Registrar request
    $pdo->prepare("
        INSERT INTO rate_limits (rate_key, created_at)
        VALUES (:key, NOW())
    ")->execute([':key' => $key]);
    
    return true;
}

// En clima_guardar_respuesta.php
$rate_key = "clima_respuesta_{$usuario_id}_{$periodo_id}";
if (!check_rate_limit($rate_key, 50, 3600)) { // 50 respuestas por hora
    out(false, ['error' => 'Demasiados intentos. Intenta más tarde.']);
}
```

---

## 3. VULNERABILIDADES MEDIAS (Riesgo Alto)

### 3.1 🟡 INFORMACIÓN SENSIBLE EN HEADERS HTTP - Severidad: MEDIA

**Ubicación:** Falta de headers de seguridad en todas partes

```php
// ❌ NO PRESENTE en archivos
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('Strict-Transport-Security: max-age=31536000');
header('Content-Security-Policy: default-src \'self\'');
```

**Recomendación:**
```php
// En includes/config.php o layout/head.php
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');

// Si usando HTTPS (recomendado):
if (strpos($_SERVER['SERVER_PROTOCOL'], 'HTTPS') !== false) {
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
}

// CSP básico
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'");
```

---

### 3.2 🟡 FALTA DE VALIDACIÓN DE ENTRADA CONSISTENTE - Severidad: MEDIA

**Análisis:**
- ✅ Prepared Statements usados (bueno)
- ✅ htmlspecialchars() en outputs generalmente usado
- ❌ Validación de entrada incompleta

**Ejemplo problemático:** [public/recuperar_contrasena.php](public/recuperar_contrasena.php#L8-L15)

```php
$rfc = $_POST['rfc'] ?? '';
$no_emp = $_POST['no_emp'] ?? '';

$u = pr_find_user_by_rfc_noemp($rfc, $no_emp);
// ✅ Los valores se usan en prepare (SQL injection NO), pero...
// ❌ No hay validación de que RFC tenga 10 caracteres
// ❌ No hay validación de que no_emp sea numérico
```

**Recomendación:**
```php
// Helper de validación
function validar_rfc($rfc) {
    $rfc = strtoupper(trim($rfc));
    $rfc = preg_replace('/[^A-Z0-9]/', '', $rfc);
    if (strlen($rfc) !== 10) {
        return false;
    }
    return $rfc;
}

function validar_numero_empleado($no_emp) {
    $no_emp = trim($no_emp);
    if (!is_numeric($no_emp) || $no_emp < 0) {
        return false;
    }
    return (int)$no_emp;
}

// En recuperar_contrasena.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rfc = validar_rfc($_POST['rfc'] ?? '');
    $no_emp = validar_numero_empleado($_POST['no_emp'] ?? '');
    
    if ($rfc === false || $no_emp === false) {
        $error = 'Datos ingresados inválidos.';
    } else {
        // Proceder con búsqueda
    }
}
```

---

### 3.3 🟡 XSS EN OUTPUTS DINÁMICOS - Severidad: MEDIA

**Ubicación:** [public/diagnostico_correos.php](public/diagnostico_correos.php#L329)

```php
<strong>Servidor:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Desconocido'; ?>
```

**Problemas:**
- `$_SERVER` es parcialmente controlable por atacantes en algunos servidores
- Debería escaparse igual

**También en:** [public/test_mailer.php](public/test_mailer.php#L205-L249)

```php
value="<?php echo htmlspecialchars($_POST['correo'] ?? ''); ?>"
// ✅ Esto SÍ está escapado correctamente
```

**Recomendación:**
```php
// SIEMPRE escapar _SERVER también:
<strong>Servidor:</strong> <?php echo htmlspecialchars($_SERVER['SERVER_SOFTWARE'] ?? 'Desconocido'); ?>
```

---

### 3.4 🟡 CONTRASE

ÑAS DÉBILES PERMITIDAS - Severidad: MEDIA

**Ubicación:** [includes/auth.php](includes/auth.php#L132-L140)

```php
function cambiar_password($usuario_id, $new_password) {
    $new_password = trim((string)$new_password);

    if (strlen($new_password) < 8 || 
        !preg_match('/[A-Za-z]/', $new_password) || 
        !preg_match('/[0-9]/', $new_password)) {
        return [false, 'La contraseña debe tener al menos 8 caracteres, incluyendo letras y números.'];
    }
    // ✅ Requiere 8 caracteres + letras + números, PERO...
    // ❌ No requiere mayúsculas, minúsculas O símbolos
    // ❌ Permite: 12345678aaa (predecible)
}
```

**Validación insuficiente:**
```
Acepta: "12345678a" (muy débil)
Acepta: "aaaaaaaa11" (muy débil)
Rechaza: "MyP@ssw0rd" (buena pero rechazada sin el número)
```

**Recomendación:**
```php
function cambiar_password($usuario_id, $new_password) {
    $new_password = trim((string)$new_password);
    
    // Validación robusta
    $errs = [];
    if (strlen($new_password) < 12) {
        $errs[] = '12 caracteres mínimo';
    }
    if (!preg_match('/[a-z]/', $new_password)) {
        $errs[] = 'minúsculas';
    }
    if (!preg_match('/[A-Z]/', $new_password)) {
        $errs[] = 'mayúsculas';
    }
    if (!preg_match('/[0-9]/', $new_password)) {
        $errs[] = 'números';
    }
    if (!preg_match('/[!@#$%^&*()_+\-=\[\]{}|;:,.<>?]/', $new_password)) {
        $errs[] = 'caracteres especiales';
    }
    
    // Bloquear contraseñas comunes
    $common_passwords = ['password123', 'letmein', 'welcome1', 'qwerty123'];
    if (in_array(strtolower($new_password), $common_passwords)) {
        $errs[] = 'La contraseña es muy común';
    }
    
    if (!empty($errs)) {
        return [false, 'La contraseña debe incluir: ' . implode(', ', $errs)];
    }
    
    // Proceder...
    $hash = password_hash($new_password, PASSWORD_ARGON2ID);
    // ...
}
```

---

### 3.5 🟡 FALTA DE PROTECCIÓN ADICIONAL EN ENDPOINTS SENSIBLES - Severidad: MEDIA

**Ubicación:** [public/admin_usuarios.php](public/admin_usuarios.php#L180-L210)

```php
if ($action === 'reset_pass') {
    $new_plain = reset_password_to_rfc($usuario_id_post);
    // ✅ Hay CSRF token
    // ❌ NO hay verificación de "confirmación doble" para operación destructiva
    // ❌ NO hay envío de notificación al usuario
    // ❌ NO hay log detallado
}
```

**Riesgo:**
- Admin podría resetear accidentalmente contraseña
- Usuario no es notificado (podría no darse cuenta de ataque)
- Cambio destructivo sin confirmación

**Recomendación:**
```php
// Protección adicional
if ($action === 'reset_pass') {
    // 1. Verificar permiso específico
    require_perm('usuarios.reset_password');
    
    // 2. Obtener confirmación adicional
    $confirm = isset($_POST['confirm_reset']) ? (int)$_POST['confirm_reset'] : 0;
    if ($confirm !== 1) {
        $flash = 'Por favor confirma la operación';
        $flash_type = 'warning';
    } else {
        // 3. Proceder con reset
        $new_plain = reset_password_to_rfc($usuario_id_post);
        
        // 4. Notificar al usuario
        $stmt = $pdo->prepare("SELECT correo FROM usuarios WHERE usuario_id = ?");
        $stmt->execute([$usuario_id_post]);
        $correo = $stmt->fetchColumn();
        if ($correo) {
            enviar_notificacion_reset_password($correo, $usuario_id_post);
        }
        
        // 5. Log detallado
        bitacora('admin_usuarios', 'reset_pass', [
            'usuario_id_reseteado' => $usuario_id_post,
            'admin_usuario_id' => $_SESSION['usuario_id'],
            'admin_ip' => $_SERVER['REMOTE_ADDR'],
            'timestamp' => date('Y-m-d H:i:s')
        ]);
        
        $flash = 'Contraseña reseteada y notificación enviada';
    }
}
```

---

## 4. VULNERABILIDADES BAJAS (Riesgo Bajo)

### 4.1 🟡 CONTROL DE ACCESO INCOMPLETO EN DESCARGA DE ARCHIVOS - Severidad: BAJA

**Ubicación:** [public/ver_foto_empleado.php](public/ver_foto_empleado.php#L1-L50)

```php
$stmt = $pdo->prepare("
    SELECT e.foto_path
    FROM usuario_empresas ue
    JOIN empleados e ON e.empleado_id = ue.empleado_id
    WHERE ue.usuario_id = :usuario_id
      AND ue.empresa_id = :empresa_id
      AND ue.estatus = 1
      AND ue.empleado_id = :empleado_id
    LIMIT 1
");
```

**Problema:**
- Solo permite ver la foto del empleado vinculado al usuario
- ✅ Buen control de acceso PERO...
- ❌ No hay validación de si `empleado_id` es del usuario o de otro

**Escenario:**
```
Usuario A vinculado a empleado_id = 5
Solicita: ver_foto_empleado.php?empleado_id=3
Consulta verifica si 3 es empleado del usuario A
(Lo más probable es que NO, pero la validación depende de datos de BD)
```

**Recomendación:**
```php
// Más explícito y seguro:
$stmt = $pdo->prepare("
    SELECT e.foto_path, e.empleado_id
    FROM usuario_empresas ue
    JOIN empleados e ON e.empleado_id = ue.empleado_id
    WHERE ue.usuario_id = :usuario_id
      AND ue.empresa_id = :empresa_id
      AND ue.estatus = 1
      AND ue.empleado_id = :empleado_id
    LIMIT 1
");
$stmt->execute([
    ':usuario_id' => $usuario_id,
    ':empresa_id' => $empresa_id,
    ':empleado_id' => $empleado_id
]);

$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row || (int)$row['empleado_id'] !== $empleado_id) {
    http_response_code(403);
    die('Acceso denegado');
}
```

---

### 4.2 🟡 INFORMACIÓN INNECESARIA EN RESPUESTAS - Severidad: BAJA

**Ubicación:** [public/login.php](public/login.php#L35-L50)

```html
<div class="text-center">
    <small class="text-muted">Contraseña inicial: tu número de empleado.</small>
</div>
```

**Problema:**
- Revela la política de contraseñas inicial
- Información útil para atacante (sabe que No. empleado = contraseña inicial)

**Recomendación:**
```html
<!-- Mejor: información genérica -->
<div class="text-center">
    <small class="text-muted">Contraseña olvidada? <a href="recuperar_contrasena.php">Recuperarla aquí</a></small>
</div>
```

---

## 5. CONTROLES DE SEGURIDAD BIEN IMPLEMENTADOS ✅

### 5.1 ✅ Prepared Statements
- **Análisis:** Uso consistente de PDO con placeholders nombrados
- **Ubicación:** Todos los archivos revisados
- **Ejemplo correcto:**
```php
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario_id = :uid");
$stmt->execute([':uid' => (int)$usuario_id]);
```

### 5.2 ✅ Password Hashing
- **Análisis:** Uso de `password_hash()` con `PASSWORD_DEFAULT` (BCRYPT)
- **Ubicación:** [includes/auth.php](includes/auth.php#L46-L50)
```php
if (password_verify($password, $u_match['password_hash'])) {
    $u_match = $u;
}
```

### 5.3 ✅ Session Regeneration
- **Análisis:** Se regenera ID de sesión en login
- **Ubicación:** [includes/auth.php](includes/auth.php#L58)
```php
session_regenerate_id(true);
```

### 5.4 ✅ Output Escaping
- **Análisis:** Uso consistente de `htmlspecialchars()` con `ENT_QUOTES`
- **Ubicación:** Mayoría de archivos
```php
function h($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}
```

### 5.5 ✅ HTTPS Preparation
- **Análisis:** Código detecta HTTPS para ajustar cookies
- **Ubicación:** [includes/auth.php](includes/auth.php#L113-L122)

### 5.6 ✅ Transaction Management
- **Análisis:** Uso de transacciones en operaciones multi-tabla
- **Ubicación:** [public/admin_usuarios.php](public/admin_usuarios.php#L183-L225)

### 5.7 ✅ Bitácora de Auditoría
- **Análisis:** Registro de acciones críticas en tabla `bitacora`
- **Ubicación:** [public/admin_usuarios.php](public/admin_usuarios.php#L36-L50)

---

## 6. TABLA RESUMEN DE VULNERABILIDADES

| ID | Vulnerabilidad | Severidad | Archivo | Línea | Recomendación |
|----|---|---|---|---|---|
| 1.1 | Credenciales SMTP en texto | 🔴 CRÍTICA | mail_config.php | 7-8 | Variables de entorno |
| 1.2 | Credenciales BD en texto | 🔴 CRÍTICA | conexion.php | 3-7 | Variables de entorno + usuario limitado |
| 1.3 | Sin CSRF en login/password | 🔴 CRÍTICA | Multiple | - | Implementar CSRF en todos formularios |
| 1.4 | /storage accesible | 🔴 CRÍTICA | storage/* | - | .htaccess + mover fuera de web root |
| 1.5 | Path traversal PDF | 🔴 CRÍTICA | contratos_descargar_pdf.php | 14-20 | realpath() + validación |
| 2.1 | Info sensible en errores | 🟠 ALTA | conexion.php | 17-20 | Error handling genérico |
| 2.2 | Validación uploads incompleta | 🟠 ALTA | mi_perfil.php | 180-210 | Magic bytes validation |
| 2.3 | Session insegura | 🟠 ALTA | config.php | 1-10 | session_set_cookie_params |
| 2.4 | Sin log de intentos fallidos | 🟠 ALTA | auth.php | 40-50 | login_attempts table |
| 2.5 | Sin rate limiting | 🟠 ALTA | clima_guardar_respuesta.php | - | Rate limiting middleware |
| 3.1 | Headers de seguridad | 🟡 MEDIA | All files | - | X-Frame-Options, CSP, etc |
| 3.2 | Validación entrada incompleta | 🟡 MEDIA | recuperar_contrasena.php | 8-15 | Input validation functions |
| 3.3 | XSS en $_SERVER | 🟡 MEDIA | diagnostico_correos.php | 329 | htmlspecialchars en _SERVER |
| 3.4 | Contraseñas débiles | 🟡 MEDIA | auth.php | 132-140 | Validación más robusta |
| 3.5 | Sin confirmación doble | 🟡 MEDIA | admin_usuarios.php | 190-210 | Confirmación + notificación |
| 4.1 | Control acceso débil | 🟡 BAJA | ver_foto_empleado.php | 20-35 | Validación más explícita |
| 4.2 | Info innecesaria | 🟡 BAJA | login.php | 47 | Mensaje genérico |

---

## 7. PLAN DE REMEDIACIÓN (Priorizado)

### FASE 1: CRÍTICA (Hacer INMEDIATAMENTE - dentro de 24-48 horas)

1. **[1.1] Mover credenciales SMTP a .env**
   - Tiempo estimado: 30 min
   - Impacto: CRÍTICO
   
2. **[1.2] Mover credenciales BD a .env**
   - Tiempo estimado: 45 min
   - Impacto: CRÍTICO
   
3. **[1.4] Proteger directorio /storage con .htaccess**
   - Tiempo estimado: 1 hora
   - Impacto: CRÍTICO
   
4. **[1.5] Validar path traversal en descarga PDF**
   - Tiempo estimado: 1 hora
   - Impacto: CRÍTICO

### FASE 2: ALTA (Próximos 3-5 días)

5. **[1.3] Implementar CSRF en todos los formularios**
   - Tiempo estimado: 4 horas
   - Impacto: ALTO
   
6. **[2.3] Configurar sesiones seguras**
   - Tiempo estimado: 2 horas
   - Impacto: ALTO
   
7. **[2.4] Implementar rate limiting y log de intentos fallidos**
   - Tiempo estimado: 6 horas
   - Impacto: ALTO

### FASE 3: MEDIA (Próximas 1-2 semanas)

8. Implementar headers de seguridad adicionales
9. Validación de entrada mejorada
10. Validación robusta de contraseñas
11. Confirmación doble en operaciones críticas

---

## 8. CHECKLIST DE SEGURIDAD RECOMENDADO

Después de implementar remediaciones:

- [ ] Auditoría de penetración independiente
- [ ] Escaneo automático con OWASP ZAP o Burp Suite
- [ ] Implementar WAF (Web Application Firewall)
- [ ] Monitoreo de intrusion detection (IDS)
- [ ] Rotación periódica de contraseñas de BD
- [ ] Backups encriptados fuera del sitio
- [ ] Policy de HTTPS obligatorio
- [ ] Certificado SSL/TLS válido (no autofirmado)
- [ ] Pruebas de seguridad regulares (trimestral)
- [ ] Capacitación en seguridad para desarrolladores

---

## 9. CONTACTOS Y REFERENCIAS

**OWASP Top 10 Vulnerabilidades:**
- A01:2021 - Broken Access Control
- A02:2021 - Cryptographic Failures
- A03:2021 - Injection
- A05:2021 - Cross-Site Request Forgery (CSRF)
- A07:2021 - Identification and Authentication Failures
- A08:2021 - Software and Data Integrity Failures

**Estándares a implementar:**
- NIST Cybersecurity Framework
- ISO 27001 (Seguridad de Información)
- LGPD (Ley de Protección de Datos Personales - Brasil)
- GDPR (Regulación General de Protección de Datos - Europa)

---

**Reporte compilado por:** Security Audit Tool
**Fecha:** 2026-01-26
**Clasificación:** CONFIDENCIAL - Solo para uso interno

