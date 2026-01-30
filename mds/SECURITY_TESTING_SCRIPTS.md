# SCRIPTS DE VALIDACIÓN Y TESTING

## 1. Script de Validación Automática (validate_security.php)

```php
<?php
/**
 * Security Validation Script for SGRH
 * Detecta automáticamente problemas de seguridad comunes
 * 
 * Uso: php validate_security.php
 */

class SecurityValidator {
    private $findings = [];
    private $checks_passed = 0;
    private $checks_failed = 0;
    
    public function run() {
        echo "\n╔════════════════════════════════════════════╗\n";
        echo "║  SGRH - SECURITY VALIDATION SCANNER       ║\n";
        echo "║  Security Audit Automated Checks           ║\n";
        echo "╚════════════════════════════════════════════╝\n\n";
        
        // Verificaciones
        $this->check_credentials_in_files();
        $this->check_csrf_tokens();
        $this->check_htaccess();
        $this->check_env_file();
        $this->check_permissions();
        $this->check_session_config();
        $this->check_error_display();
        $this->check_headers();
        
        // Reporte
        $this->print_report();
    }
    
    private function check_credentials_in_files() {
        echo "Checking for credentials in code...";
        
        $files_to_check = [
            'includes/conexion.php',
            'includes/mail_config.php',
            'public/login.php'
        ];
        
        $credentials_found = false;
        
        foreach ($files_to_check as $file) {
            if (!file_exists($file)) continue;
            
            $content = file_get_contents($file);
            
            // Buscar credenciales hardcoded
            if (preg_match("/password\s*=\s*['\"]([^'\"]+)['\"]/i", $content) ||
                preg_match("/pass\s*=\s*['\"]([^'\"]+)['\"]/i", $content) ||
                preg_match("/define\(['\"]SMTP_PASSWORD['\"]/", $content)) {
                
                $this->add_finding("CRITICAL", "Credenciales encontradas en $file");
                $credentials_found = true;
            }
        }
        
        if (!$credentials_found) {
            echo " ✓ PASS\n";
            $this->checks_passed++;
        } else {
            echo " ✗ FAIL\n";
            $this->checks_failed++;
        }
    }
    
    private function check_csrf_tokens() {
        echo "Checking CSRF token implementation...";
        
        $forms_critical = [
            'public/login.php',
            'public/cambiar_password.php',
            'public/recuperar_contrasena.php',
            'public/mi_perfil.php'
        ];
        
        $missing_csrf = [];
        
        foreach ($forms_critical as $file) {
            if (!file_exists($file)) continue;
            
            $content = file_get_contents($file);
            
            // Detectar POST sin CSRF
            if (preg_match('/\$_SERVER\[.REQUEST_METHOD.\]\s*===\s*["\']POST["\']/i', $content)) {
                if (!preg_match('/csrf_token/', $content)) {
                    $missing_csrf[] = $file;
                }
            }
        }
        
        if (empty($missing_csrf)) {
            echo " ✓ PASS\n";
            $this->checks_passed++;
        } else {
            foreach ($missing_csrf as $file) {
                $this->add_finding("CRITICAL", "CSRF token missing in $file");
            }
            echo " ✗ FAIL\n";
            $this->checks_failed++;
        }
    }
    
    private function check_htaccess() {
        echo "Checking .htaccess protection for /storage...";
        
        $storage_protected = false;
        $htaccess_path = 'storage/.htaccess';
        
        if (file_exists($htaccess_path)) {
            $content = file_get_contents($htaccess_path);
            if (preg_match('/Deny\s+from\s+all/', $content)) {
                $storage_protected = true;
            }
        }
        
        if ($storage_protected) {
            echo " ✓ PASS\n";
            $this->checks_passed++;
        } else {
            $this->add_finding("CRITICAL", "No .htaccess found in /storage directory");
            echo " ✗ FAIL\n";
            $this->checks_failed++;
        }
    }
    
    private function check_env_file() {
        echo "Checking .env configuration file...";
        
        if (file_exists('.env.local')) {
            echo " ✓ PASS\n";
            $this->checks_passed++;
        } else {
            $this->add_finding("CRITICAL", ".env.local file not found - use environment variables");
            echo " ✗ FAIL (but may be OK in development)\n";
            $this->checks_failed++;
        }
    }
    
    private function check_permissions() {
        echo "Checking file permissions...";
        
        $permissions_ok = true;
        
        if (is_dir('storage')) {
            $perms = fileperms('storage');
            // Verificar que no es world-readable (debería ser 0750 o similar)
            if (($perms & 0x0004) || ($perms & 0x0002)) {
                $this->add_finding("HIGH", "storage/ has world-readable permissions");
                $permissions_ok = false;
            }
        }
        
        if ($permissions_ok) {
            echo " ✓ PASS\n";
            $this->checks_passed++;
        } else {
            echo " ✗ FAIL\n";
            $this->checks_failed++;
        }
    }
    
    private function check_session_config() {
        echo "Checking session security configuration...";
        
        // Verificar en config.php
        if (file_exists('includes/config.php')) {
            $content = file_get_contents('includes/config.php');
            
            $checks = [
                'httponly' => preg_match('/httponly.*true|httponly.*=.*1/i', $content),
                'samesite' => preg_match('/samesite|SameSite/i', $content),
                'secure' => preg_match('/secure|HTTPS/i', $content)
            ];
            
            if ($checks['httponly'] && ($checks['samesite'] || $checks['secure'])) {
                echo " ✓ PASS\n";
                $this->checks_passed++;
            } else {
                $missing = array_filter($checks, fn($v) => !$v);
                $this->add_finding("HIGH", "Session security missing: " . implode(', ', array_keys($missing)));
                echo " ✗ FAIL\n";
                $this->checks_failed++;
            }
        }
    }
    
    private function check_error_display() {
        echo "Checking error display configuration...";
        
        if (file_exists('includes/config.php')) {
            $content = file_get_contents('includes/config.php');
            
            if (preg_match('/display_errors.*0|display_errors.*false|production/i', $content)) {
                echo " ✓ PASS\n";
                $this->checks_passed++;
            } else {
                $this->add_finding("MEDIUM", "Error display may be enabled in production");
                echo " ✗ FAIL\n";
                $this->checks_failed++;
            }
        }
    }
    
    private function check_headers() {
        echo "Checking security headers...";
        
        $public_files = glob('public/*.php');
        $has_headers = false;
        
        foreach ($public_files as $file) {
            $content = file_get_contents($file);
            if (preg_match('/X-Frame-Options|X-Content-Type-Options|Strict-Transport-Security/i', $content)) {
                $has_headers = true;
                break;
            }
        }
        
        if ($has_headers) {
            echo " ✓ PASS\n";
            $this->checks_passed++;
        } else {
            $this->add_finding("MEDIUM", "Security headers not found in public files");
            echo " ✗ FAIL\n";
            $this->checks_failed++;
        }
    }
    
    private function add_finding($severity, $message) {
        $this->findings[] = [
            'severity' => $severity,
            'message' => $message
        ];
    }
    
    private function print_report() {
        echo "\n╔════════════════════════════════════════════╗\n";
        echo "║              VALIDATION REPORT             ║\n";
        echo "╚════════════════════════════════════════════╝\n\n";
        
        if (!empty($this->findings)) {
            echo "FINDINGS:\n";
            echo "─────────────────────────────────────────\n";
            
            foreach ($this->findings as $finding) {
                $icon = match($finding['severity']) {
                    'CRITICAL' => '🔴',
                    'HIGH' => '🟠',
                    'MEDIUM' => '🟡',
                    default => '🔵'
                };
                
                printf("%s [%s] %s\n", $icon, $finding['severity'], $finding['message']);
            }
            echo "\n";
        }
        
        $total = $this->checks_passed + $this->checks_failed;
        $percentage = $total > 0 ? round(($this->checks_passed / $total) * 100) : 0;
        
        echo "SUMMARY:\n";
        echo "─────────────────────────────────────────\n";
        printf("✓ Checks Passed:  %d\n", $this->checks_passed);
        printf("✗ Checks Failed:  %d\n", $this->checks_failed);
        printf("  Score:          %d%%\n\n", $percentage);
        
        if ($this->checks_failed === 0) {
            echo "✓ All checks passed!\n";
        } else {
            echo "✗ Please address the findings above.\n";
        }
    }
}

// Ejecutar
if (php_sapi_name() === 'cli') {
    $validator = new SecurityValidator();
    $validator->run();
} else {
    echo "Este script debe ejecutarse desde línea de comandos\n";
}
```

---

## 2. Script de Testing de Seguridad

```php
<?php
/**
 * Security Test Suite
 * Pruebas automáticas para verificar vulnerabilidades
 */

class SecurityTester {
    private $pdo;
    private $base_url;
    private $results = [];
    
    public function __construct($pdo, $base_url = 'http://localhost/sgrh') {
        $this->pdo = $pdo;
        $this->base_url = $base_url;
    }
    
    /**
     * Test: Verificar que login rechaza CSRF
     */
    public function test_csrf_protection() {
        echo "Testing CSRF Protection...";
        
        // Attempt POST sin token CSRF
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $this->base_url . '/public/login.php',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [
                'rfc' => 'TEST1234AA',
                'password' => 'password123'
                // Sin csrf_token
            ]
        ]);
        
        $response = curl_exec($ch);
        curl_close($ch);
        
        // Si CSRF está implementado, debería rechazar o al menos no procesar
        if (strpos($response, 'csrf') !== false || strpos($response, 'token') !== false) {
            echo " ✓ PASS\n";
            return true;
        } else {
            echo " ✗ FAIL - POST sin CSRF fue procesado\n";
            return false;
        }
    }
    
    /**
     * Test: Verificar que /storage no es accesible
     */
    public function test_storage_access() {
        echo "Testing /storage directory access...";
        
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $this->base_url . '/storage/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_NOBODY => true
        ]);
        
        curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($http_code === 403 || $http_code === 404) {
            echo " ✓ PASS (HTTP $http_code)\n";
            return true;
        } else {
            echo " ✗ FAIL (HTTP $http_code - directorio accesible)\n";
            return false;
        }
    }
    
    /**
     * Test: Verificar que las credenciales no se loguean
     */
    public function test_no_credential_logging() {
        echo "Testing credential logging...";
        
        // Verificar que login_attempts no guarda passwords
        $stmt = $this->pdo->query("
            DESCRIBE login_attempts
        ");
        
        $columns = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $columns[] = $row['Field'];
        }
        
        if (!in_array('password', $columns) && !in_array('hash', $columns)) {
            echo " ✓ PASS\n";
            return true;
        } else {
            echo " ✗ FAIL - Passwords being logged\n";
            return false;
        }
    }
    
    /**
     * Test: Verificar que los headers de seguridad existen
     */
    public function test_security_headers() {
        echo "Testing security headers...";
        
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $this->base_url . '/public/login.php',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => true,
            CURLOPT_NOBODY => true
        ]);
        
        curl_exec($ch);
        $headers = curl_getinfo($ch);
        curl_close($ch);
        
        // Verificar headers
        $headers_json = curl_getinfo($ch);
        
        echo " ⚠ Manual check needed\n";
        return null;
    }
    
    /**
     * Test: Path traversal en PDF download
     */
    public function test_path_traversal() {
        echo "Testing path traversal protection...";
        
        // Intentar acceder a archivo fuera de storage
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $this->base_url . '/public/contratos_descargar_pdf.php?id=../../../etc/passwd',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_NOBODY => true
        ]);
        
        curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        // Debería rechazar con 403 o 404
        if ($http_code === 403 || $http_code === 404) {
            echo " ✓ PASS (HTTP $http_code)\n";
            return true;
        } else {
            echo " ✗ FAIL (HTTP $http_code - potencial path traversal)\n";
            return false;
        }
    }
    
    public function run_all() {
        echo "\n╔════════════════════════════════════════════╗\n";
        echo "║        SECURITY TEST SUITE                 ║\n";
        echo "╚════════════════════════════════════════════╝\n\n";
        
        $this->test_csrf_protection();
        $this->test_storage_access();
        $this->test_no_credential_logging();
        $this->test_security_headers();
        $this->test_path_traversal();
        
        echo "\n✓ Tests completed\n";
    }
}

// Uso
if (php_sapi_name() === 'cli' && isset($pdo)) {
    $tester = new SecurityTester($pdo);
    $tester->run_all();
}
```

---

## 3. Script de Auditoría de Base de Datos

```sql
-- audit_database.sql
-- Verificar configuración de seguridad en BD

-- 1. Verificar usuarios de BD
SELECT user, host FROM mysql.user WHERE user NOT IN ('mysql.sys', 'mysql.session');

-- 2. Verificar privilegios de usuarios aplicación
SHOW GRANTS FOR 'sgrh_app'@'localhost';

-- 3. Verificar que no hay acceso remoto
SELECT user, host FROM mysql.user WHERE host != 'localhost' AND host != '127.0.0.1';

-- 4. Contar intentos fallidos de login
SELECT DATE(attempted_at) as fecha, COUNT(*) as intentos 
FROM login_attempts 
GROUP BY DATE(attempted_at) 
ORDER BY fecha DESC 
LIMIT 7;

-- 5. Detectar cambios recientes en contraseñas
SELECT usuario_id, updated_at, pass_cambiada 
FROM usuarios 
WHERE updated_at > DATE_SUB(NOW(), INTERVAL 7 DAY) 
ORDER BY updated_at DESC;

-- 6. Auditoría de permisos de admin
SELECT u.usuario_id, u.no_emp, ue.es_admin, ue.empresa_id 
FROM usuarios u 
JOIN usuario_empresas ue ON ue.usuario_id = u.usuario_id 
WHERE ue.es_admin = 1;

-- 7. Usuarios inactivos por más de 30 días
SELECT usuario_id, no_emp, last_login, estatus 
FROM usuarios 
WHERE last_login < DATE_SUB(NOW(), INTERVAL 30 DAY) 
AND estatus = 'activo';

-- 8. Operaciones sospechosas (muchos cambios en corto tiempo)
SELECT usuario_id, COUNT(*) as cambios 
FROM bitacora 
WHERE created_at > DATE_SUB(NOW(), INTERVAL 1 HOUR) 
GROUP BY usuario_id 
HAVING COUNT(*) > 50;
```

---

## 4. Checklist de Verificación Pre-Producción

```
SEGURIDAD PRE-PRODUCCIÓN CHECKLIST
═══════════════════════════════════════════════════

CREDENCIALES
☐ .env.local creado y en .gitignore
☐ Credenciales NO en código fuente
☐ Variables de entorno cargadas correctamente
☐ Usuario BD con permisos limitados (no root)
☐ SMTP sin autenticación o credenciales en .env

CSRF Y SESSIONS
☐ CSRF tokens en todos los formularios POST
☐ Validación CSRF en todos los handlers POST
☐ Session cookies con httponly=true
☐ Session cookies con secure=true (HTTPS)
☐ Session cookies con samesite=Strict
☐ Session ID regeneration en login

ALMACENAMIENTO
☐ /storage no es accesible por web
☐ .htaccess en /storage con "Deny from all"
☐ Path traversal validado en descargas
☐ Permisos de archivo 0644, directorios 0755

VALIDACIÓN Y SANITIZACIÓN
☐ Prepared statements en todas las queries
☐ htmlspecialchars() en outputs
☐ Validación de entrada en formularios
☐ Rate limiting en login
☐ Rate limiting en APIs

HEADERS Y RESPUESTAS
☐ X-Content-Type-Options: nosniff
☐ X-Frame-Options: DENY
☐ Strict-Transport-Security (HTTPS)
☐ Content-Security-Policy configurado
☐ No expone información del servidor

ERRORES Y LOGS
☐ display_errors = Off en producción
☐ Errores loguean a archivo, no pantalla
☐ Logs no contienen información sensible
☐ Bitácora de auditoría funcional
☐ Login attempts registrados

AUTENTICACIÓN
☐ Passwords hasheadas con password_hash()
☐ Validación fuerte de contraseñas
☐ Sin credenciales por defecto
☐ Cambio de contraseña en primer login
☐ Recovery de contraseña seguro

TESTING
☐ Pruebas de penetración básicas completadas
☐ OWASP ZAP escaneo ejecutado
☐ SQL injection tests passed
☐ XSS tests passed
☐ CSRF tests passed

DOCUMENTACIÓN
☐ Documentación de seguridad completada
☐ Runbook de incidentes creado
☐ Procedimiento de backup documentado
☐ Plan de respuesta a incidentes
☐ Contactos de seguridad definidos

PRODUCCIÓN
☐ HTTPS obligatorio configurado
☐ Certificado SSL válido
☐ Backups automatizados en lugar seguro
☐ Monitoreo y alertas activos
☐ WAF considerado/instalado
☐ Actualizaciones de seguridad programadas
```

---

## 5. Comando de Validación Rápida

```bash
#!/bin/bash
# quick_security_check.sh

echo "🔐 SGRH Security Quick Check"
echo "════════════════════════════════════════"

# 1. Credenciales en archivos
echo -n "Checking for hardcoded credentials... "
if grep -r "password.*=" includes/ public/ | grep -v ".env" | grep -q "="; then
    echo "❌ FAIL"
else
    echo "✓ PASS"
fi

# 2. .env.local existe
echo -n "Checking .env.local... "
if [ -f ".env.local" ]; then
    echo "✓ PASS"
else
    echo "⚠️  WARNING - Not found"
fi

# 3. Permisos de /storage
echo -n "Checking storage permissions... "
if [ -d "storage" ]; then
    PERMS=$(stat -c "%a" storage)
    if [ "$PERMS" != "755" ] && [ "$PERMS" != "750" ]; then
        echo "⚠️  WARNING - Permissions: $PERMS"
    else
        echo "✓ PASS"
    fi
fi

# 4. .htaccess en /storage
echo -n "Checking /storage/.htaccess... "
if [ -f "storage/.htaccess" ]; then
    echo "✓ PASS"
else
    echo "❌ FAIL"
fi

# 5. CSRF en formularios principales
echo -n "Checking CSRF in login.php... "
if grep -q "csrf_token" public/login.php; then
    echo "✓ PASS"
else
    echo "❌ FAIL - Missing CSRF"
fi

echo ""
echo "✓ Quick check completed"
```

---

## Cómo Usar Estos Scripts

### 1. Validación Automática
```bash
# En directorio raíz del proyecto
php validate_security.php
```

### 2. Tests de Seguridad
```bash
# Requiere $pdo disponible
php security_test_suite.php
```

### 3. Auditoría de BD
```bash
# Conectarse a MySQL
mysql -u root -p sgrh < audit_database.sql
```

### 4. Verificación Rápida
```bash
chmod +x quick_security_check.sh
./quick_security_check.sh
```

