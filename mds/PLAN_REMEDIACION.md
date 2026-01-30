# PLAN DE REMEDIACIÓN DE SEGURIDAD - SGRH
**Fecha:** 26 de Enero, 2026  
**Versión:** 1.0

---

## 1. REMEDIACIÓN INMEDIATA (HOY)

### 1.1 Generar Nuevas Credenciales de Base de Datos

```sql
-- En tu servidor MySQL:
-- 1. Crear usuario nuevo con permisos limitados
CREATE USER 'sgrh_app'@'localhost' IDENTIFIED BY 'GeneraUnaPwd_Fuerte_2026!';

-- 2. Otorgar permisos específicos (NO todo)
GRANT SELECT, INSERT, UPDATE, DELETE, CREATE TEMPORARY TABLES ON sgrh.* 
  TO 'sgrh_app'@'localhost';

-- 3. Revocar acceso del usuario root al aplicativo
-- (Usar sgrh_app en lugar de root)

-- 4. Cambiar credenciales en .env:
```

**Archivo actualizado:** [.env](.env)

```dotenv
# ✅ ANTES (VULNERABILIDAD):
DB_HOST=localhost
DB_NAME=sgrh
DB_USER=root
DB_PASS=root

# ✅ DESPUÉS (SEGURO):
DB_HOST=localhost
DB_NAME=sgrh
DB_USER=sgrh_app
DB_PASS=GeneraUnaPwd_Fuerte_2026!
```

---

### 1.2 Regenerar y Cambiar Contraseña SMTP

**Acción en GoDaddy:**

1. Acceder a GoDaddy.com → Email
2. Cambiar contraseña de `contacto@rhfarma.mx`
3. Generar una **contraseña de aplicación** específica para SGRH
4. Usar solo para SGRH, NO la contraseña de acceso personal

**Archivo actualizado:** [.env](.env)

```dotenv
# ✅ ANTES (VULNERABLE):
SMTP_PASSWORD=Card3n4x!Mx2025

# ✅ DESPUÉS (SEGURO):
# Usar contraseña de aplicación de 16 caracteres generada en GoDaddy
SMTP_PASSWORD=Gener4dEn_GoDaddy_2026
```

---

### 1.3 Crear Archivo `.env.example` (SIN Secretos)

**Nuevo archivo:** `.env.example`

```dotenv
# Copia este archivo a .env y completa con tus valores
# NUNCA subas .env al repositorio (debe estar en .gitignore)

# Base de datos
DB_HOST=localhost
DB_NAME=sgrh
DB_USER=sgrh_app
DB_PASS=your_secure_password_here

# SMTP / Correo
SMTP_HOST=smtpout.secureserver.net
SMTP_PORT=465
SMTP_SECURE=
SMTP_USERNAME=contacto@rhfarma.mx
SMTP_PASSWORD=your_app_password_here

# Remitente
MAIL_FROM_ADDRESS=contacto@rhfarma.mx
MAIL_FROM_NAME="SGRH - Sistema de Gestión de Recursos Humanos"
MAIL_ADMIN_ADDRESS=contacto@rhfarma.mx

# Ambiente
APP_ENV=prod
APP_DEBUG=false
```

---

### 1.4 Configurar Ambiente de Producción vs. Desarrollo

**Archivo actualizado:** [includes/config.php](includes/config.php)

```php
<?php
// includes/config.php

// ✅ CAMBIO 1: Detectar ambiente desde variable de entorno
$env_file = __DIR__ . '/../.env';
if (is_file($env_file)) {
    require_once __DIR__ . '/env.php';
}

// Ambiente (producción por defecto)
$app_env = getenv('APP_ENV') ?: 'prod';
$app_debug = getenv('APP_DEBUG') ?: 'false';

// ✅ CAMBIO 2: Configuración diferenciada
if ($app_env === 'dev') {
    // Desarrollo: Mostrar errores para debugging
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
} else {
    // Producción: Ocultar errores, loguear a archivo
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
    error_reporting(E_ALL);
    
    // Configurar logging
    ini_set('log_errors', '1');
    $log_path = __DIR__ . '/../storage/logs/errors.log';
    if (!is_dir(dirname($log_path))) {
        @mkdir(dirname($log_path), 0755, true);
    }
    ini_set('error_log', $log_path);
}

// Resto de configuración...
define('APP_URL', getenv('APP_URL') ?: 'http://localhost/');
define('APP_ENV', $app_env);
define('BASE_PATH', dirname(__DIR__));
define('PUBLIC_PATH', BASE_PATH . '/public');

// ... resto del código
```

---

## 2. REMEDIACIÓN ALTA PRIORIDAD (ESTA SEMANA)

### 2.1 Validación Mejorada de Subida de Archivos

**Crear nuevo archivo:** [includes/file_upload.php](includes/file_upload.php)

```php
<?php
// includes/file_upload.php

/**
 * Valida y procesa subida de archivos PDF de forma segura
 */
class FileUploadValidator {
    
    const MAX_FILE_SIZE = 10485760; // 10MB
    const ALLOWED_MIMES = ['application/pdf'];
    const PDF_HEADER = '%PDF';
    
    /**
     * Valida un archivo subido
     * @return array ['ok' => bool, 'message' => string, 'path' => string|null]
     */
    public static function validate_pdf($tmp_file, $original_name) {
        // 1. Validar que el archivo existe
        if (!is_uploaded_file($tmp_file)) {
            return ['ok' => false, 'message' => 'Archivo no válido.'];
        }
        
        // 2. Validar tamaño
        $size = filesize($tmp_file);
        if ($size === false || $size > self::MAX_FILE_SIZE) {
            return ['ok' => false, 'message' => 'Archivo muy grande (máx: 10MB).'];
        }
        
        if ($size < 100) {
            return ['ok' => false, 'message' => 'Archivo muy pequeño (probablemente no es PDF).'];
        }
        
        // 3. Validar MIME type (usando fileinfo)
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        if (!$finfo) {
            return ['ok' => false, 'message' => 'No se pudo validar el archivo.'];
        }
        
        $mime = finfo_file($finfo, $tmp_file);
        finfo_close($finfo);
        
        if (!in_array($mime, self::ALLOWED_MIMES, true)) {
            return ['ok' => false, 'message' => "Tipo MIME no permitido: {$mime}"];
        }
        
        // 4. Validar magic bytes (PDF signature)
        $fp = fopen($tmp_file, 'rb');
        if (!$fp) {
            return ['ok' => false, 'message' => 'No se pudo leer el archivo.'];
        }
        
        $header = fread($fp, 4);
        fclose($fp);
        
        if ($header !== self::PDF_HEADER) {
            return ['ok' => false, 'message' => 'Archivo no es un PDF válido.'];
        }
        
        // 5. Generar nombre seguro
        $safe_name = self::generate_safe_filename($original_name);
        
        return [
            'ok' => true,
            'message' => 'Archivo válido.',
            'filename' => $safe_name
        ];
    }
    
    /**
     * Genera un nombre de archivo seguro
     */
    private static function generate_safe_filename($original_name) {
        // Obtener extensión
        $ext = strtolower(pathinfo($original_name, PATHINFO_EXTENSION));
        
        // Generar nombre único con timestamp y hash
        $unique = 'doc_' . time() . '_' . bin2hex(random_bytes(8));
        
        return $unique . '.' . preg_replace('/[^a-z0-9]/', '', $ext);
    }
    
    /**
     * Almacena el archivo de forma segura
     */
    public static function store_secure($tmp_file, $filename, $empresa_id) {
        // Crear directorio si no existe
        $storage_base = realpath(__DIR__ . '/../storage');
        if ($storage_base === false) {
            throw new Exception('Directorio storage no existe.');
        }
        
        $dir = $storage_base . '/documentos/empresa_' . (int)$empresa_id;
        
        if (!is_dir($dir)) {
            if (!@mkdir($dir, 0755, true)) {
                throw new Exception('No se pudo crear directorio para documentos.');
            }
        }
        
        $destination = $dir . '/' . $filename;
        
        // Validar que no existe ya
        if (file_exists($destination)) {
            throw new Exception('El archivo ya existe.');
        }
        
        // Mover archivo
        if (!move_uploaded_file($tmp_file, $destination)) {
            throw new Exception('No se pudo guardar el archivo.');
        }
        
        // ✅ Cambiar permisos para mayor seguridad
        @chmod($destination, 0600);
        
        // Retornar ruta relativa para guardar en BD
        return 'documentos/empresa_' . (int)$empresa_id . '/' . $filename;
    }
}
```

**Archivo actualizado:** [public/admin_documentos.php](public/admin_documentos.php)

```php
<?php
// CAMBIOS EN admin_documentos.php

require_once __DIR__ . '/../includes/file_upload.php';

// ... en la sección de upload ...

if ($action === 'crear') {
    $titulo = isset($_POST['titulo']) ? trim((string)$_POST['titulo']) : '';
    // ... otras validaciones ...
    
    $archivo_path = null;
    if (!empty($_FILES['archivo']['tmp_name'])) {
        $tmp = $_FILES['archivo']['tmp_name'];
        $name = $_FILES['archivo']['name'];
        
        // ✅ Usar nueva validación
        $validation = FileUploadValidator::validate_pdf($tmp, $name);
        
        if (!$validation['ok']) {
            throw new Exception($validation['message']);
        }
        
        // ✅ Almacenar de forma segura
        $archivo_path = FileUploadValidator::store_secure(
            $tmp,
            $validation['filename'],
            $empresa_id
        );
    }
    
    // ... resto del código ...
}
```

---

### 2.2 Implementar Rate Limiting en Login

**Crear nuevo archivo:** [includes/rate_limit.php](includes/rate_limit.php)

```php
<?php
// includes/rate_limit.php

class RateLimiter {
    
    const TABLE_NAME = 'login_attempts';
    const MAX_ATTEMPTS = 5;
    const WINDOW_MINUTES = 15;
    
    /**
     * Inicializa la tabla de intentos si no existe
     */
    public static function init_table($pdo) {
        $sql = "CREATE TABLE IF NOT EXISTS " . self::TABLE_NAME . " (
            id INT AUTO_INCREMENT PRIMARY KEY,
            ip VARCHAR(45) NOT NULL,
            usuario_intento VARCHAR(20),
            intentado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            INDEX idx_ip_time (ip, intentado_en),
            INDEX idx_usuario (usuario_intento)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
        
        $pdo->exec($sql);
    }
    
    /**
     * Verifica si un IP ha excedido los intentos permitidos
     */
    public static function is_limited($pdo, $ip) {
        $window = date('Y-m-d H:i:s', strtotime('-' . self::WINDOW_MINUTES . ' minutes'));
        
        $stmt = $pdo->prepare(
            "SELECT COUNT(*) as intents FROM " . self::TABLE_NAME . "
             WHERE ip = ? AND intentado_en > ?"
        );
        $stmt->execute([$ip, $window]);
        $row = $stmt->fetch();
        
        return $row['intents'] >= self::MAX_ATTEMPTS;
    }
    
    /**
     * Registra un intento fallido
     */
    public static function record_failure($pdo, $ip, $usuario_intento = null) {
        $stmt = $pdo->prepare(
            "INSERT INTO " . self::TABLE_NAME . " (ip, usuario_intento, intentado_en)
             VALUES (?, ?, NOW())"
        );
        $stmt->execute([$ip, $usuario_intento]);
    }
    
    /**
     * Limpia intentos fallidos exitosos
     */
    public static function clear_on_success($pdo, $ip) {
        $stmt = $pdo->prepare(
            "DELETE FROM " . self::TABLE_NAME . " WHERE ip = ? AND intentado_en < DATE_SUB(NOW(), INTERVAL 1 HOUR)"
        );
        $stmt->execute([$ip]);
    }
    
    /**
     * Obtiene minutos restantes hasta siguiente intento
     */
    public static function get_lockout_minutes($pdo, $ip) {
        $window = date('Y-m-d H:i:s', strtotime('-' . self::WINDOW_MINUTES . ' minutes'));
        
        $stmt = $pdo->prepare(
            "SELECT MIN(intentado_en) as first_attempt FROM " . self::TABLE_NAME . "
             WHERE ip = ? AND intentado_en > ?"
        );
        $stmt->execute([$ip, $window]);
        $row = $stmt->fetch();
        
        if (!$row['first_attempt']) {
            return 0;
        }
        
        $first = strtotime($row['first_attempt']);
        $unlock = $first + (self::WINDOW_MINUTES * 60);
        $remaining = $unlock - time();
        
        return max(0, ceil($remaining / 60));
    }
}

// Inicializar tabla al cargar
require_once __DIR__ . '/conexion.php';
RateLimiter::init_table($pdo);
```

**Archivo actualizado:** [includes/auth.php](includes/auth.php)

```php
<?php
// CAMBIOS EN auth.php

require_once __DIR__ . '/rate_limit.php';

function login_intento($rfc_raw, $password) {
    global $pdo;
    
    $ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    
    // ✅ VERIFICAR RATE LIMIT
    if (RateLimiter::is_limited($pdo, $ip)) {
        $minutos = RateLimiter::get_lockout_minutes($pdo, $ip);
        return [false, "Demasiados intentos. Intenta en {$minutos} minuto(s)."];
    }
    
    $rfc_base = normaliza_rfc_base($rfc_raw);
    $password = (string)$password;

    if (strlen($rfc_base) !== 10 || $password === '') {
        // ✅ REGISTRAR INTENTO FALLIDO
        RateLimiter::record_failure($pdo, $ip, $rfc_base);
        return [false, 'Credenciales incorrectas.'];
    }

    // ... búsqueda de usuario ...
    
    if (!$u_match) {
        // ✅ REGISTRAR INTENTO FALLIDO
        RateLimiter::record_failure($pdo, $ip, $rfc_base);
        return [false, 'Credenciales incorrectas.'];
    }
    
    // ... resto del login ...
    
    // ✅ LIMPIAR INTENTOS FALLIDOS EXITOSOS
    RateLimiter::clear_on_success($pdo, $ip);

    return [true, 'OK'];
}
```

---

### 2.3 Agregar Headers de Seguridad

**Crear nuevo archivo:** [includes/security_headers.php](includes/security_headers.php)

```php
<?php
// includes/security_headers.php

function set_security_headers() {
    // Prevenir ataques de clickjacking
    header('X-Frame-Options: SAMEORIGIN');
    
    // Prevenir MIME-sniffing
    header('X-Content-Type-Options: nosniff');
    
    // Activar XSS filter del navegador
    header('X-XSS-Protection: 1; mode=block');
    
    // Política de referrer
    header('Referrer-Policy: strict-origin-when-cross-origin');
    
    // Permitir solo de mismo origen
    header('Access-Control-Allow-Origin: ' . (isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : 'null'));
    header('Access-Control-Allow-Credentials: true');
    
    // Content Security Policy (adaptado a tu aplicación)
    header("Content-Security-Policy: " .
        "default-src 'self'; " .
        "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net https://code.jquery.com; " .
        "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net; " .
        "img-src 'self' data: https:; " .
        "font-src 'self' https://fonts.gstatic.com; " .
        "connect-src 'self'; " .
        "frame-ancestors 'self'; " .
        "form-action 'self'; " .
        "upgrade-insecure-requests"
    );
    
    // HSTS (solo si HTTPS)
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
        header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
    }
}

// Llamar en config.php
set_security_headers();
```

**Archivo actualizado:** [includes/config.php](includes/config.php)

```php
<?php
// En config.php, agregar:
require_once __DIR__ . '/security_headers.php';
```

---

## 3. REMEDIACIÓN MEDIA PRIORIDAD (ESTE MES)

### 3.1 Validar Integridad de Sesión

**Archivo actualizado:** [includes/guard.php](includes/guard.php)

```php
<?php
// includes/guard.php

function validate_session_integrity() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    if (empty($_SESSION['usuario_id'])) {
        return; // No hay sesión activa
    }
    
    // Generar fingerprint de la sesión
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $current_fingerprint = hash('sha256', $user_agent);
    
    // Verificar en primer acceso
    if (empty($_SESSION['session_fingerprint'])) {
        $_SESSION['session_fingerprint'] = $current_fingerprint;
    } elseif ($_SESSION['session_fingerprint'] !== $current_fingerprint) {
        // Session hijacking detectado
        session_destroy();
        header('Location: login.php?hijack_detected=1');
        exit;
    }
    
    // Validar tiempo de sesión (máximo 8 horas)
    $max_lifetime = 8 * 60 * 60;
    if (time() - ($_SESSION['login_time'] ?? time()) > $max_lifetime) {
        session_destroy();
        header('Location: login.php?session_expired=1');
        exit;
    }
    
    // Renovar session ID cada 30 minutos
    if ((time() - ($_SESSION['last_regenerate'] ?? 0)) > 30 * 60) {
        session_regenerate_id(true);
        $_SESSION['last_regenerate'] = time();
    }
}

// Integrar en require_login()
function require_login() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    validate_session_integrity();
    
    if (empty($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit;
    }
}
```

---

### 3.2 Prevención de Path Traversal en Descargas

**Crear nuevo archivo:** [includes/file_download.php](includes/file_download.php)

```php
<?php
// includes/file_download.php

class SecureFileDownload {
    
    /**
     * Descarga un archivo de forma segura, validando path traversal
     */
    public static function download($file_path, $empresa_id, $documento_id = null) {
        // Resolver rutas absolutas y verificar que está en el directorio permitido
        $storage_base = realpath(__DIR__ . '/../storage');
        $requested_file = realpath($storage_base . '/' . $file_path);
        
        // Validaciones de seguridad
        if ($requested_file === false) {
            http_response_code(404);
            exit('Archivo no encontrado.');
        }
        
        // Verificar que el archivo está dentro de storage/
        if (strpos($requested_file, $storage_base) !== 0) {
            http_response_code(403);
            exit('Acceso denegado: Path traversal detected');
        }
        
        // Verificar que el archivo existe y es legible
        if (!file_exists($requested_file) || !is_readable($requested_file)) {
            http_response_code(404);
            exit('Archivo no encontrado.');
        }
        
        // Verificar que está en la carpeta de la empresa correcta
        $expected_dir = $storage_base . '/documentos/empresa_' . (int)$empresa_id;
        if (strpos($requested_file, $expected_dir) !== 0) {
            http_response_code(403);
            exit('Acceso denegado: No tienes permiso para este archivo.');
        }
        
        // Si hay documento_id, validar en BD que pertenece a la empresa
        if ($documento_id) {
            global $pdo;
            $stmt = $pdo->prepare(
                "SELECT 1 FROM documentos 
                 WHERE documento_id = ? AND empresa_id = ? LIMIT 1"
            );
            $stmt->execute([$documento_id, $empresa_id]);
            if (!$stmt->fetch()) {
                http_response_code(403);
                exit('Acceso denegado: Documento no encontrado.');
            }
        }
        
        // Descarga segura
        $filename = basename($requested_file);
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . 
               addslashes($filename) . '"');
        header('Content-Length: ' . filesize($requested_file));
        header('Cache-Control: no-cache, must-revalidate');
        header('Pragma: no-cache');
        
        // Enviar archivo
        readfile($requested_file);
        exit;
    }
}
```

---

### 3.3 Reemplazar `addslashes()` con JSON Encoding

**Archivo actualizado:** [public/clima_resultados_mi_unidad.php](public/clima_resultados_mi_unidad.php)

```php
<?php
// ANTES (vulnerable):
// labelsSuper.push('<?php echo addslashes($superdim); ?>');

// DESPUÉS (seguro):
labelsSuper.push(<?php echo json_encode($superdim, JSON_UNESCAPED_UNICODE); ?>);
```

---

## 4. CHECKLIST FINAL

### Antes de Producción:

- [ ] Cambiar credenciales de BD (root → sgrh_app)
- [ ] Cambiar contraseña SMTP
- [ ] Crear `.env.example` sin secretos
- [ ] Establecer `APP_ENV=prod`
- [ ] Desactivar `display_errors`
- [ ] Implementar validación MIME en archivos
- [ ] Implementar Rate Limiting
- [ ] Agregar headers de seguridad
- [ ] Validar integridad de sesión
- [ ] Prevenir Path Traversal
- [ ] Usar JSON encoding en JavaScript
- [ ] Establecer HTTPS/SSL
- [ ] Configurar logging de errores
- [ ] Realizar backup automático
- [ ] Documentar procedimiento de seguridad
- [ ] Realizar test de penetración (al menos básico)

### Mensual:

- [ ] Revisar logs de errores y accesos
- [ ] Verificar intentos de acceso no autorizados
- [ ] Actualizar dependencias PHP
- [ ] Auditar cambios de usuarios admin

### Trimestral:

- [ ] Pentest profesional
- [ ] Auditoría de seguridad externa
- [ ] Revisión de políticas de contraseñas
- [ ] Test de recuperación ante desastres

---

**Generado:** 26 de Enero, 2026
