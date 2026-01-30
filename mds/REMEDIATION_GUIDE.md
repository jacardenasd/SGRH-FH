# GUÍA DE REMEDIACIÓN - CÓDIGO DE EJEMPLO

## 1. IMPLEMENTAR VARIABLES DE ENTORNO

### Archivo: `.env.local` (NO versionado en git)

```ini
# Configuración de Base de Datos
DB_HOST=localhost
DB_NAME=sgrh
DB_USER=sgrh_app
DB_PASS=TuPasswordSeguroAqui123!

# Configuración SMTP
SMTP_HOST=smtpout.secureserver.net
SMTP_PORT=465
SMTP_USERNAME=contacto@rhfarma.mx
SMTP_PASSWORD=Card3n4x!Mx2025
SMTP_SECURE=tls

# Configuración General
APP_ENV=production
APP_DEBUG=false
APP_URL=https://sgrh.tuempresa.com
```

### Archivo: `.gitignore` (asegurar que .env.local NO se versionó)

```
.env.local
.env.*.local
config/db.php
storage/logs/*
node_modules/
```

---

## 2. REESCRIBIR includes/conexion.php

### ANTES (VULNERABLE):
```php
<?php
$host = 'localhost';
$db   = 'sgrh';
$user = 'root';
$pass = 'root';
```

### DESPUÉS (SEGURO):
```php
<?php
// includes/conexion.php

// Cargar variables de entorno
if (file_exists(__DIR__ . '/../.env.local')) {
    $env = parse_ini_file(__DIR__ . '/../.env.local');
    foreach ($env as $key => $value) {
        if (!getenv($key)) {
            putenv("$key=$value");
        }
    }
}

// Configuración desde variables de entorno
$dsn_config = [
    'host'    => getenv('DB_HOST') ?: 'localhost',
    'db'      => getenv('DB_NAME') ?: 'sgrh',
    'user'    => getenv('DB_USER') ?: 'sgrh_app',
    'pass'    => getenv('DB_PASS'),
    'charset' => 'utf8mb4'
];

// Validar que exista contraseña
if (empty($dsn_config['pass'])) {
    error_log("CRITICAL: DB_PASS no configurado en .env.local");
    die('Configuración de base de datos incompleta. Contacta al administrador.');
}

$dsn = sprintf(
    "mysql:host=%s;dbname=%s;charset=%s",
    $dsn_config['host'],
    $dsn_config['db'],
    $dsn_config['charset']
);

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $dsn_config['user'], $dsn_config['pass'], $options);
    // Verificar encoding en tiempo de conexión
    $pdo->exec("SET NAMES utf8mb4");
} catch (PDOException $e) {
    error_log("Database connection error: " . $e->getMessage());
    die('No fue posible conectar a la base de datos. Por favor intenta más tarde.');
}
```

---

## 3. REESCRIBIR includes/mail_config.php

### ANTES (VULNERABLE):
```php
<?php
define('SMTP_USERNAME', 'contacto@rhfarma.mx');
define('SMTP_PASSWORD', 'Card3n4x!Mx2025');
```

### DESPUÉS (SEGURO):
```php
<?php
// includes/mail_config.php

// Cargar .env si existe
if (file_exists(__DIR__ . '/../.env.local')) {
    $env = parse_ini_file(__DIR__ . '/../.env.local');
    foreach ($env as $key => $value) {
        if (!getenv($key)) {
            putenv("$key=$value");
        }
    }
}

// Configuración SMTP desde variables de entorno
define('MAIL_DRIVER', getenv('MAIL_DRIVER') ?: 'smtp');

define('SMTP_HOST', getenv('SMTP_HOST') ?: 'localhost');
define('SMTP_PORT', (int)(getenv('SMTP_PORT') ?: 587));
define('SMTP_SECURE', getenv('SMTP_SECURE') ?: 'tls');
define('SMTP_USERNAME', getenv('SMTP_USERNAME') ?: '');
define('SMTP_PASSWORD', getenv('SMTP_PASSWORD') ?: '');

define('MAIL_FROM_ADDRESS', getenv('SMTP_FROM') ?: 'noreply@rhfarma.mx');
define('MAIL_FROM_NAME', 'SGRH - Sistema de Gestión de RH');
define('MAIL_ADMIN_ADDRESS', getenv('MAIL_ADMIN') ?: 'admin@rhfarma.mx');

// Validaciones
if (empty(SMTP_USERNAME) || empty(SMTP_PASSWORD)) {
    error_log("WARNING: SMTP credentials not configured");
}
```

---

## 4. IMPLEMENTAR CSRF EN FORMULARIOS

### En includes/csrf.php (nuevo archivo):

```php
<?php
// includes/csrf.php

function inicializar_csrf_token() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    
    return $_SESSION['csrf_token'];
}

function obtener_csrf_token() {
    return $_SESSION['csrf_token'] ?? '';
}

function validar_csrf_token($token) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    $esperado = $_SESSION['csrf_token'] ?? '';
    if (empty($esperado) || empty($token)) {
        return false;
    }
    
    return hash_equals($esperado, $token);
}

function csrf_token_input() {
    $token = inicializar_csrf_token();
    return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars($token) . '">';
}
```

### En formularios HTML:

```html
<!-- ANTES (vulnerable): -->
<form method="post">
    <input type="password" name="password1">
    <!-- Sin token CSRF -->
</form>

<!-- DESPUÉS (seguro): -->
<form method="post">
    <?php echo csrf_token_input(); ?>
    <input type="password" name="password1">
</form>
```

### En handlers POST:

```php
<?php
require_once __DIR__ . '/../includes/csrf.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar CSRF
    $csrf = $_POST['csrf_token'] ?? '';
    if (!validar_csrf_token($csrf)) {
        http_response_code(403);
        die('Solicitud inválida (CSRF). Por favor intenta nuevamente.');
    }
    
    // Proceder con la lógica POST...
}
```

---

## 5. CONFIGURAR SESIONES SEGURAS

### En includes/config.php:

```php
<?php
// includes/config.php

// ===== CONFIGURACIÓN DE SESIONES =====

// Determinar si estamos en HTTPS
$is_https = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' 
    || !empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https';

if (PHP_VERSION_ID >= 70300) {
    // PHP 7.3+: Usar session_set_cookie_params() con array
    session_set_cookie_params([
        'lifetime' => 3600,              // 1 hora
        'path'     => '/',
        'domain'   => '',                // Usa dominio actual
        'secure'   => $is_https,         // Solo HTTPS en production
        'httponly' => true,              // Prevenir acceso desde JavaScript
        'samesite' => 'Strict'           // Prevenir CSRF a nivel de cookie
    ]);
} else {
    // PHP < 7.3: Configurar mediante ini_set
    session_set_cookie_params(
        3600,                               // lifetime
        '/',                               // path
        '',                                // domain
        $is_https,                         // secure
        true                               // httponly
    );
    ini_set('session.cookie_samesite', 'Strict');
}

// Configuraciones adicionales
ini_set('session.use_strict_mode', 1);           // Rechazar ID de sesión inválido
ini_set('session.use_only_cookies', 1);          // No permitir sesión en URL
ini_set('session.use_trans_sid', 0);             // Desabilitar trans-sid
ini_set('session.sid_length', 48);               // ID más largo (48 bytes)
ini_set('session.sid_bits_per_character', 6);    // Mayor entropía

// Regenerar ID en cada request si en desarrollo
// En producción, regenerar solo en login
if (getenv('APP_ENV') === 'development' && session_status() === PHP_SESSION_NONE) {
    session_start();
    session_regenerate_id();
} elseif (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ===== HEADERS DE SEGURIDAD =====

// Evitar que el navegador interprete mal el content-type
header('X-Content-Type-Options: nosniff');

// Evitar clickjacking
header('X-Frame-Options: DENY');

// Protección XSS (navegadores antiguos)
header('X-XSS-Protection: 1; mode=block');

// Referrer policy
header('Referrer-Policy: strict-origin-when-cross-origin');

// Permissions policy (evitar acceso a cámara, micrófono, etc.)
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');

// HTTPS strict transport security (solo en HTTPS)
if ($is_https) {
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
}

// Content Security Policy (básico)
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'");

// ===== RESTO DE CONFIGURACIÓN =====

if (getenv('APP_ENV') === 'production' || getenv('APP_DEBUG') === 'false') {
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
    ini_set('log_errors', '1');
    ini_set('error_log', '/var/log/sgrh/php_errors.log');
} else {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
}

error_reporting(E_ALL);
define('APP_ENV', getenv('APP_ENV') ?: 'dev');
define('APP_DEBUG', getenv('APP_DEBUG') !== 'false');
define('APP_URL', getenv('APP_URL') ?: 'http://localhost/sgrh');
define('BASE_PATH', dirname(__DIR__));
define('PUBLIC_PATH', BASE_PATH . '/public');
date_default_timezone_set('America/Mexico_City');
define('ASSET_BASE', '/sgrh/');

// Ejecutar migraciones si es necesario
require_once __DIR__ . '/migrations.php';
require_once __DIR__ . '/../vendor/autoload.php';
```

---

## 6. IMPLEMENTAR RATE LIMITING

### En includes/rate_limit.php (nuevo):

```php
<?php
// includes/rate_limit.php

class RateLimit {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    /**
     * Verificar si se ha excedido el límite de rate
     * 
     * @param string $key Identificador único (ej: "login:192.168.1.1")
     * @param int $limit Número máximo de intentos
     * @param int $window Ventana de tiempo en segundos
     * @return bool true si OK, false si se excedió límite
     */
    public function check($key, $limit = 10, $window = 3600) {
        // Limpiar registros antiguos
        $this->pdo->prepare(
            "DELETE FROM rate_limits WHERE created_at < DATE_SUB(NOW(), INTERVAL ? SECOND)"
        )->execute([$window]);
        
        // Contar requests recientes
        $stmt = $this->pdo->prepare(
            "SELECT COUNT(*) FROM rate_limits WHERE rate_key = :key"
        );
        $stmt->execute([':key' => $key]);
        $count = (int)$stmt->fetchColumn();
        
        if ($count >= $limit) {
            return false;
        }
        
        // Registrar este request
        $this->pdo->prepare(
            "INSERT INTO rate_limits (rate_key, created_at) VALUES (:key, NOW())"
        )->execute([':key' => $key]);
        
        return true;
    }
    
    public function get_remaining($key, $limit = 10) {
        $stmt = $this->pdo->prepare(
            "SELECT COUNT(*) FROM rate_limits WHERE rate_key = :key"
        );
        $stmt->execute([':key' => $key]);
        $used = (int)$stmt->fetchColumn();
        return max(0, $limit - $used);
    }
}
```

### En public/login.php:

```php
<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/auth.php';
require_once __DIR__ . '/../includes/rate_limit.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rfc  = $_POST['rfc'] ?? '';
    $pass = $_POST['password'] ?? '';
    
    // Rate limiting: máximo 5 intentos cada 15 minutos
    $rate_limiter = new RateLimit($pdo);
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $rate_key = "login:$ip";
    
    if (!$rate_limiter->check($rate_key, 5, 900)) {
        $error = 'Demasiados intentos fallidos. Intenta en 15 minutos.';
        http_response_code(429);
    } else {
        list($ok, $msg) = login_intento($rfc, $pass);
        
        if ($ok) {
            // Limpiar rate limit en login exitoso
            $pdo->prepare(
                "DELETE FROM rate_limits WHERE rate_key = :key"
            )->execute([':key' => $rate_key]);
            
            // Resto del login...
            if (!empty($_SESSION['debe_cambiar_pass'])) {
                header('Location: cambiar_password.php');
                exit;
            }
            header('Location: dashboard.php');
            exit;
        } else {
            $error = $msg;
        }
    }
}
```

### SQL para crear tabla de rate_limits:

```sql
CREATE TABLE rate_limits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rate_key VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_rate_key (rate_key),
    INDEX idx_created_at (created_at)
);
```

---

## 7. PROTEGER DIRECTORIO /storage

### Archivo: /storage/.htaccess (crear nuevo):

```apache
# Bloquear todos los accesos directos
<FilesMatch ".*">
    Order Deny,Allow
    Deny from all
</FilesMatch>

# Excepto para tipos específicos que van a ser servidos por PHP
# (Opcional, depende de tu arquitectura)
```

### Archivo: /storage/contratos/.htaccess (actualizar):

```apache
# Bloquear acceso directo a documentos
<FilesMatch ".*">
    Order Deny,Allow
    Deny from all
</FilesMatch>

# Los archivos se descargan a través de PHP que valida permisos
```

### Archivo: /storage/empleados_fotos/.htaccess (crear nuevo):

```apache
# Bloquear acceso directo a fotos
<FilesMatch ".*">
    Order Deny,Allow
    Deny from all
</FilesMatch>

# Las fotos se sirven a través de ver_foto_empleado.php con control de acceso
```

---

## 8. VALIDAR PATH TRAVERSAL EN DESCARGAS

### Reescribir public/contratos_descargar_pdf.php:

```php
<?php
// public/contratos_descargar_pdf.php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/conexion.php';
require_once __DIR__ . '/../includes/guard.php';

require_login();

$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 0;
$documento_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($documento_id === 0 || $empresa_id === 0) {
    http_response_code(400);
    die('Parámetros inválidos');
}

// Obtener documento
$sql = "SELECT ruta_archivo, nombre_archivo FROM contratos_documentos 
        WHERE documento_id = :did AND empresa_id = :eid";
$stmt = $pdo->prepare($sql);
$stmt->execute([':did' => $documento_id, ':eid' => $empresa_id]);
$doc = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$doc) {
    http_response_code(404);
    die('Documento no encontrado o no tiene permisos');
}

// ✅ VALIDACIÓN ANTI-TRAVERSAL
$storagePath = realpath(__DIR__ . '/../storage');
if ($storagePath === false) {
    http_response_code(500);
    error_log("Storage path not found");
    die('Error de configuración del servidor');
}

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

// Información segura del archivo
$filename = basename($filePath);
$filesize = filesize($filePath);

// Headers seguros
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $filename) . '"');
header('Content-Length: ' . $filesize);
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');
header('X-Content-Type-Options: nosniff');

// Servir archivo
readfile($filePath);
exit;
```

---

## 9. VALIDACIÓN ROBUSTA DE CONTRASEÑAS

### En includes/password.php (nuevo):

```php
<?php
// includes/password.php

class PasswordValidator {
    
    // Contraseñas comunes a bloquear
    private static $common = [
        'password', 'password123', 'admin123', 'letmein',
        'welcome', 'qwerty', '123456', 'abc123'
    ];
    
    public static function validate($password) {
        $errors = [];
        
        // Largo mínimo
        if (strlen($password) < 12) {
            $errors[] = 'mínimo 12 caracteres';
        }
        
        // Máximo
        if (strlen($password) > 128) {
            $errors[] = 'máximo 128 caracteres';
        }
        
        // Minúsculas
        if (!preg_match('/[a-z]/', $password)) {
            $errors[] = 'minúsculas (a-z)';
        }
        
        // Mayúsculas
        if (!preg_match('/[A-Z]/', $password)) {
            $errors[] = 'mayúsculas (A-Z)';
        }
        
        // Números
        if (!preg_match('/[0-9]/', $password)) {
            $errors[] = 'números (0-9)';
        }
        
        // Caracteres especiales
        if (!preg_match('/[!@#$%^&*()_+\-=\[\]{}|;:,.<>?\\\/"\'`~]/', $password)) {
            $errors[] = 'caracteres especiales';
        }
        
        // Bloquear comunes
        if (in_array(strtolower($password), self::$common)) {
            $errors[] = 'La contraseña es demasiado común';
        }
        
        // No permitir repetición
        if (preg_match('/(.)\1{2,}/', $password)) {
            $errors[] = 'No repitas caracteres más de 2 veces';
        }
        
        return [
            'valid' => count($errors) === 0,
            'errors' => $errors
        ];
    }
    
    public static function hash($password) {
        // Usar ARGON2ID si está disponible (PHP 7.2+)
        $algo = defined('PASSWORD_ARGON2ID') ? PASSWORD_ARGON2ID : PASSWORD_BCRYPT;
        return password_hash($password, $algo);
    }
}
```

### Uso en cambiar_password.php:

```php
<?php
require_once __DIR__ . '/../includes/password.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $p1 = $_POST['password1'] ?? '';
    $p2 = $_POST['password2'] ?? '';
    
    if ($p1 !== $p2) {
        $error = 'Las contraseñas no coinciden';
    } else {
        $validation = PasswordValidator::validate($p1);
        if (!$validation['valid']) {
            $error = 'Contraseña debe incluir: ' . implode(', ', $validation['errors']);
        } else {
            // Hash y guardar
            $hash = PasswordValidator::hash($p1);
            $stmt = $pdo->prepare(
                "UPDATE usuarios SET password_hash = :h, debe_cambiar_pass = 0 WHERE usuario_id = :uid"
            );
            $stmt->execute([':h' => $hash, ':uid' => $_SESSION['usuario_id']]);
            
            $_SESSION['debe_cambiar_pass'] = 0;
            header('Location: dashboard.php');
            exit;
        }
    }
}
```

---

## 10. TABLA SQL PARA AUDITORÍA COMPLETA

```sql
-- Tabla de intentos de login fallidos
CREATE TABLE IF NOT EXISTS login_attempts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rfc_base VARCHAR(10) NOT NULL,
    ip_address VARCHAR(45),
    attempted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_agent TEXT,
    INDEX idx_rfc_time (rfc_base, attempted_at),
    INDEX idx_ip_time (ip_address, attempted_at)
);

-- Tabla de rate limiting
CREATE TABLE IF NOT EXISTS rate_limits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rate_key VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_rate_key (rate_key),
    INDEX idx_created_at (created_at)
);

-- Tabla de alertas de seguridad
CREATE TABLE IF NOT EXISTS security_alerts (
    alert_id INT AUTO_INCREMENT PRIMARY KEY,
    alert_type VARCHAR(50) NOT NULL,
    severity ENUM('low', 'medium', 'high', 'critical'),
    usuario_id INT,
    ip_address VARCHAR(45),
    descripcion TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    resuelta TINYINT DEFAULT 0,
    INDEX idx_tipo (alert_type),
    INDEX idx_usuario (usuario_id),
    INDEX idx_fecha (created_at)
);

-- Extender tabla bitacora existente si es necesario
ALTER TABLE bitacora ADD COLUMN ip VARCHAR(45) AFTER usuario_id;
ALTER TABLE bitacora ADD COLUMN user_agent VARCHAR(500) AFTER ip;
ALTER TABLE bitacora ADD INDEX idx_fecha_modulo (created_at, modulo);
```

---

## CHECKLIST DE IMPLEMENTACIÓN

- [ ] Crear archivo `.env.local` con credenciales
- [ ] Reescribir `includes/conexion.php`
- [ ] Reescribir `includes/mail_config.php`
- [ ] Crear `includes/csrf.php`
- [ ] Actualizar `includes/config.php` con sesiones seguras
- [ ] Crear `includes/rate_limit.php`
- [ ] Crear `includes/password.php`
- [ ] Actualizar todos los formularios con CSRF
- [ ] Crear archivos `.htaccess` en `/storage`
- [ ] Actualizar `public/contratos_descargar_pdf.php`
- [ ] Crear tablas SQL necesarias
- [ ] Probar login con rate limiting
- [ ] Probar cambio de contraseña
- [ ] Ejecutar escaneo de seguridad
- [ ] Configurar backups automáticos
- [ ] Documentar configuración de producción

