# TABLA DE HALLAZGOS - REFERENCIA RÁPIDA

## Resumen de 17 Vulnerabilidades Identificadas

| ID | Categoría | Vulnerabilidad | Severidad | Archivo | Línea | Tiempo | Prioridad | Status |
|----|-----------|---|---|---|---|---|---|---|
| 1.1 | Credenciales | SMTP en texto plano | 🔴 CRÍTICA | mail_config.php | 7-8 | 30m | INMEDIATA | ❌ NO |
| 1.2 | Credenciales | BD en texto plano | 🔴 CRÍTICA | conexion.php | 3-7 | 45m | INMEDIATA | ❌ NO |
| 1.3 | CSRF | Sin protección CSRF | 🔴 CRÍTICA | Multiple | - | 4h | INMEDIATA | ❌ NO |
| 1.4 | Almacenamiento | /storage accesible | 🔴 CRÍTICA | /storage | - | 1h | INMEDIATA | ❌ NO |
| 1.5 | Path Traversal | PDF sin validación | 🔴 CRÍTICA | contratos_*.php | 14-20 | 1h | INMEDIATA | ❌ NO |
| 2.1 | Errores | Info sensible | 🟠 ALTA | conexion.php | 17-20 | 2h | ESTA SEMANA | ❌ NO |
| 2.2 | Uploads | Validación incompleta | 🟠 ALTA | mi_perfil.php | 180-210 | 3h | ESTA SEMANA | ❌ NO |
| 2.3 | Sesiones | Cookies inseguras | 🟠 ALTA | config.php | 1-10 | 2h | ESTA SEMANA | ❌ NO |
| 2.4 | Autenticación | Sin rate limiting | 🟠 ALTA | auth.php | 40-50 | 6h | ESTA SEMANA | ❌ NO |
| 2.5 | API | Sin rate limiting | 🟠 ALTA | clima_*.php | - | 4h | ESTA SEMANA | ❌ NO |
| 3.1 | Headers | Headers faltantes | 🟡 MEDIA | All files | - | 1.5h | 2 SEMANAS | ❌ NO |
| 3.2 | Validación | Entrada débil | 🟡 MEDIA | recuperar_*.php | 8-15 | 2h | 2 SEMANAS | ❌ NO |
| 3.3 | XSS | $_SERVER sin escape | 🟡 MEDIA | diagnostico_*.php | 329 | 1h | 2 SEMANAS | ❌ NO |
| 3.4 | Contraseñas | Validación débil | 🟡 MEDIA | auth.php | 132-140 | 2h | 2 SEMANAS | ❌ NO |
| 3.5 | Operaciones | Sin confirmación | 🟡 MEDIA | admin_usuarios.php | 190-210 | 3h | 2 SEMANAS | ❌ NO |
| 4.1 | Control Acceso | Validación débil | 🟡 BAJA | ver_foto_*.php | 20-35 | 1h | OPCIONAL | ❌ NO |
| 4.2 | Información | Info innecesaria | 🟡 BAJA | login.php | 47 | 1h | OPCIONAL | ❌ NO |

---

## Estadísticas por Fase

### FASE 1 - CRÍTICAS (2.5 horas)
- Vulnerabilidades: 5
- Riesgo actual: 106 pts
- Riesgo post-remediación: 65 pts
- Mejora: 61% (-41 pts)
- Impacto en puntuación: 64 → 73

### FASE 2 - ALTAS (12 horas)
- Vulnerabilidades: 5
- Riesgo actual: 61 pts
- Riesgo post-remediación: 35 pts
- Mejora: 57% (-26 pts)
- Impacto en puntuación: 73 → 80

### FASE 3 - MEDIAS (9.5 horas)
- Vulnerabilidades: 5
- Riesgo actual: 39 pts
- Riesgo post-remediación: 8 pts
- Mejora: 79% (-31 pts)
- Impacto en puntuación: 80 → 87

### FASE 4 - BAJAS (2 horas) [Opcional]
- Vulnerabilidades: 2
- Riesgo actual: 8 pts
- Riesgo post-remediación: 2 pts
- Mejora: 75% (-6 pts)
- Impacto en puntuación: 87 → 89

---

## Desglose de Esfuerzo

| Categoría | Horas | % | Acumulative |
|-----------|-------|---|-------------|
| Credenciales | 1.25 | 5% | 1.25h |
| CSRF | 4 | 16% | 5.25h |
| Almacenamiento | 2 | 8% | 7.25h |
| Rate Limiting | 10 | 40% | 17.25h |
| Sesiones | 2 | 8% | 19.25h |
| Validación | 3 | 12% | 22.25h |
| Headers | 1.5 | 6% | 23.75h |
| Otros | 1 | 4% | 24.75h |

---

## Matriz de Riesgo - Ordenada por Criticidad

### Ranking de Riesgo (de mayor a menor)

1. **🔴 1.2 - Credenciales BD** (Riesgo: 25)
   - Impacto: Acceso total a datos
   - Esfuerzo: 45 min
   - Ratio: 0.03 (muy bajo esfuerzo)

2. **🔴 1.1 - Credenciales SMTP** (Riesgo: 25)
   - Impacto: Compromiso de correo
   - Esfuerzo: 30 min
   - Ratio: 0.02 (muy bajo esfuerzo)

3. **🔴 1.4 - /storage Accesible** (Riesgo: 20)
   - Impacto: Fuga de documentos
   - Esfuerzo: 60 min
   - Ratio: 0.05 (bajo esfuerzo)

4. **🔴 1.3 - CSRF Desprotegido** (Riesgo: 20)
   - Impacto: Secuestro de sesión
   - Esfuerzo: 4 horas
   - Ratio: 0.20 (esfuerzo moderado)

5. **🔴 1.5 - Path Traversal** (Riesgo: 16)
   - Impacto: Lectura de archivos
   - Esfuerzo: 1 hora
   - Ratio: 0.06 (bajo esfuerzo)

---

## Checklist de Implementación Detallado

### ✓ FASE 1 - CRÍTICA (24-48 horas)

```
CREDENCIALES - 75 minutos
├─ [ ] Crear .env.local en raíz del proyecto
├─ [ ] Copiar configuración de mail_config.php a .env
├─ [ ] Copiar configuración de conexion.php a .env
├─ [ ] Actualizar includes/conexion.php para leer .env
├─ [ ] Actualizar includes/mail_config.php para leer .env
├─ [ ] Agregar .env.local a .gitignore
├─ [ ] Actualizar documento deployment con .env
└─ [ ] Verificar que config NO tiene credenciales

CSRF - 4 horas
├─ [ ] Crear includes/csrf.php con funciones CSRF
├─ [ ] Actualizar public/login.php con token
├─ [ ] Actualizar public/cambiar_password.php con token
├─ [ ] Actualizar public/recuperar_contrasena.php con token
├─ [ ] Actualizar public/mi_perfil.php con token
├─ [ ] Revisar admin_usuarios.php token (ya existe)
├─ [ ] Actualizar otros formularios POST
├─ [ ] Testing: Rechaza POST sin token
└─ [ ] Testing: Acepta POST con token válido

ALMACENAMIENTO - 1 hora
├─ [ ] Crear /storage/.htaccess
├─ [ ] Crear /storage/documentos/.htaccess
├─ [ ] Crear /storage/empleados_fotos/.htaccess
├─ [ ] Crear /storage/contratos/.htaccess
├─ [ ] Actualizar reglas en archivos existentes
├─ [ ] Verificar permisos (750, 644)
├─ [ ] Testing: /storage no accesible
└─ [ ] Testing: Descarga a través de PHP OK

PATH TRAVERSAL - 1 hora
├─ [ ] Actualizar contratos_descargar_pdf.php
├─ [ ] Usar realpath() + strpos() para validar
├─ [ ] Testing: ../../../etc/passwd rechazado
├─ [ ] Testing: PDF válido descargable
└─ [ ] Aplicar mismo patrón a ver_foto_empleado.php

POST-FASE 1
├─ [ ] Testing manual completo
├─ [ ] Deploy a staging
├─ [ ] Pruebas de regresión
├─ [ ] Commit a repositorio
└─ [ ] Documentar cambios
```

### ✓ FASE 2 - ALTA (3-5 días)

```
SESIONES SEGURAS - 2 horas
├─ [ ] Actualizar includes/config.php
├─ [ ] session_set_cookie_params() con opciones
├─ [ ] httponly = true
├─ [ ] secure = true (si HTTPS)
├─ [ ] samesite = Strict
├─ [ ] Usar SESSION_STRICT_MODE
├─ [ ] Testing: Cookie segura en response
└─ [ ] Testing: No accesible desde JavaScript

RATE LIMITING - 6 horas
├─ [ ] Crear tabla login_attempts en BD
├─ [ ] Crear tabla rate_limits en BD
├─ [ ] Crear includes/rate_limit.php
├─ [ ] Actualizar public/login.php
├─ [ ] Implementar bloqueo temporal
├─ [ ] Limpieza automática de registros viejos
├─ [ ] Testing: Rechaza intentos 6+
├─ [ ] Testing: Desbloquea después de ventana
└─ [ ] Aplicar a APIs (clima_guardar_respuesta.php)

AUTENTICACIÓN - 6 horas
├─ [ ] Crear tabla login_attempts (si no existe)
├─ [ ] Registrar intentos fallidos en auth.php
├─ [ ] Registrar login exitosos en bitácora
├─ [ ] Limpiar intentos en login exitoso
├─ [ ] Testing: Intentos registrados
└─ [ ] Testing: Rate limit activo

POST-FASE 2
├─ [ ] Testing de seguridad básico
├─ [ ] Escaneo con curl/postman
├─ [ ] Deploy a staging
└─ [ ] Documentación actualizada
```

### ✓ FASE 3 - MEDIA (1-2 semanas)

```
HEADERS DE SEGURIDAD - 1.5 horas
├─ [ ] X-Content-Type-Options: nosniff
├─ [ ] X-Frame-Options: DENY
├─ [ ] X-XSS-Protection: 1; mode=block
├─ [ ] Strict-Transport-Security (HTTPS)
├─ [ ] Content-Security-Policy
├─ [ ] Referrer-Policy
├─ [ ] Permissions-Policy
├─ [ ] Testing: Headers presentes en response
└─ [ ] Testing: Navegador respeta headers

VALIDACIÓN ROBUSTA - 2 horas
├─ [ ] Crear helpers de validación
├─ [ ] Validar RFC (10 caracteres, formato)
├─ [ ] Validar número de empleado (numérico)
├─ [ ] Validar email (filter_var FILTER_VALIDATE_EMAIL)
├─ [ ] Aplicar en formularios
├─ [ ] Testing: Rechaza datos inválidos
└─ [ ] Testing: Acepta datos válidos

CONTRASEÑAS ROBUSTAS - 2 horas
├─ [ ] Crear includes/password.php
├─ [ ] Requiere 12+ caracteres
├─ [ ] Requiere mayúsculas, minúsculas, números, símbolos
├─ [ ] Bloquear contraseñas comunes
├─ [ ] Actualizar validador en auth.php
├─ [ ] Testing: Rechaza débiles
└─ [ ] Testing: Acepta fuertes

XSS Y ESCAPING - 1 hora
├─ [ ] Revisar diagnóstico_correos.php
├─ [ ] htmlspecialchars($_SERVER['SERVER_SOFTWARE'])
├─ [ ] Consistencia en todos los outputs
├─ [ ] Testing: XSS payloads rechazados
└─ [ ] Verificar con ZAP

CONFIRMACIÓN DOBLE - 3 horas
├─ [ ] Identificar operaciones críticas
├─ [ ] Reset password requiere confirmación
├─ [ ] Cambio de admin requiere confirmación
├─ [ ] Notificación al usuario
├─ [ ] Audit completo de cambios
├─ [ ] Testing: Operación rechazada sin confirmación
└─ [ ] Testing: Operación aceptada con confirmación

POST-FASE 3
├─ [ ] OWASP ZAP escaneo completo
├─ [ ] Validación con scripts de seguridad
├─ [ ] Penetration testing básico
├─ [ ] Deploy a staging final
├─ [ ] Deploy a producción
├─ [ ] Monitoreo post-deployment
└─ [ ] Documentación final
```

---

## Quick Reference - Comandos de Validación

```bash
# 1. Buscar credenciales en código
grep -r "password.*=" includes/ public/ | grep -v ".env"

# 2. Verificar .env.local
test -f ".env.local" && echo "✓ .env.local exists" || echo "✗ .env.local missing"

# 3. Verificar .htaccess en storage
test -f "storage/.htaccess" && echo "✓ .htaccess exists" || echo "✗ .htaccess missing"

# 4. Verificar CSRF en login
grep -q "csrf_token" public/login.php && echo "✓ CSRF present" || echo "✗ CSRF missing"

# 5. Validar permiso de storage
stat -c "%a" storage | grep -E "^7[05]0$" && echo "✓ Permissions OK" || echo "✗ Bad permissions"
```

---

## Puntos de Control Críticos

### Antes de hacer cualquier cambio:
- [ ] Backup completo de BD
- [ ] Backup completo de código
- [ ] Crear rama de desarrollo
- [ ] Notificar al equipo

### Después de cada fase:
- [ ] Pruebas de regresión
- [ ] Testing de seguridad
- [ ] Código review
- [ ] Documentación actualizada

### Antes de producción:
- [ ] Pruebas E2E completas
- [ ] Load testing
- [ ] Security scanning completo
- [ ] Rollback plan documentado

---

**Tabla compilada:** 26 de Enero, 2026
**Uso:** Referencia rápida durante implementación
**Actualizar:** Tras completar cada fase

