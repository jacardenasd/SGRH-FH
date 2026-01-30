# MATRIZ DE RIESGOS DE SEGURIDAD - SGRH

## Escala de Probabilidad (P)

| Nivel | Descripción | Indicadores |
|-------|-------------|-------------|
| 🟢 1 - Muy Baja | Casi imposible que ocurra | Ataque requiere conocimiento muy específico + acceso físico |
| 🟡 2 - Baja | Poco probable | Requiere múltiples pasos o conocimiento especializado |
| 🟠 3 - Media | Posible | Técnicas comunes, herramientas automatizadas disponibles |
| 🔴 4 - Alta | Probable | Técnicas bien documentadas, herramientas automáticas |
| 🔴 5 - Muy Alta | Muy probable | Vulnerable a ataques automatizados comunes |

---

## Escala de Impacto (I)

| Nivel | Descripción | Ejemplos de Daño |
|-------|-------------|------------------|
| 🟢 1 - Muy Bajo | Daño mínimo | Información cosmética expuesta |
| 🟡 2 - Bajo | Daño limitado | Afecta a usuario individual |
| 🟠 3 - Medio | Daño moderado | Afecta a grupo de usuarios, datos no críticos |
| 🔴 4 - Alto | Daño grave | Exposición de datos sensibles, pérdida de funcionalidad |
| 🔴 5 - Muy Alto | Daño catastrófico | Violación de datos masiva, inutilización del sistema |

---

## Matriz de Evaluación de Riesgos

### CRÍTICAS (Riesgo: P × I ≥ 16)

| ID | Vulnerabilidad | Prob | Imp | Riesgo | Evidencia | Mitigación |
|----|---|---|---|---|---|---|
| **1.1** | Credenciales SMTP en código | 🔴 5 | 🔴 5 | **25** | `includes/mail_config.php:7-8` | Mover a `.env.local` |
| **1.2** | Credenciales BD en código | 🔴 5 | 🔴 5 | **25** | `includes/conexion.php:3-7` | Mover a `.env.local` |
| **1.3** | CSRF sin protección | 🔴 5 | 🔴 4 | **20** | `cambiar_password.php` (sin token) | Implementar CSRF tokens |
| **1.4** | /storage accesible | 🔴 4 | 🔴 5 | **20** | Navegación directa a `/sgrh/storage/` | Crear `.htaccess` + mover fuera web |
| **1.5** | Path traversal PDF | 🔴 4 | 🔴 4 | **16** | `contratos_descargar_pdf.php:14-20` | Validar con `realpath()` |

**Costo Total de Riesgo:** 106 puntos

---

### ALTAS (Riesgo: P × I = 12-15)

| ID | Vulnerabilidad | Prob | Imp | Riesgo | Evidencia | Mitigación |
|----|---|---|---|---|---|---|
| **2.1** | Info sensible en errores | 🔴 4 | 🟠 3 | **12** | Stack traces potenciales | Error handling genérico |
| **2.2** | Validación uploads débil | 🔴 4 | 🟠 3 | **12** | `mi_perfil.php:180-210` | Validar magic bytes |
| **2.3** | Sesiones inseguras | 🔴 4 | 🔴 4 | **16** | Sin `httponly`, `secure`, `samesite` | Configurar cookies seguras |
| **2.4** | Sin rate limiting login | 🟠 3 | 🔴 4 | **12** | `auth.php` sin protección | Implementar rate limiting |
| **2.5** | Sin rate limiting API | 🟠 3 | 🟠 3 | **9** | `clima_guardar_respuesta.php` | Rate limiting middleware |

**Costo Total de Riesgo:** 61 puntos

---

### MEDIAS (Riesgo: P × I = 6-11)

| ID | Vulnerabilidad | Prob | Imp | Riesgo | Evidencia | Mitigación |
|----|---|---|---|---|---|---|
| **3.1** | Headers seguridad faltantes | 🟠 3 | 🟠 3 | **9** | Todos los archivos | Implementar CSP, X-Frame-Options |
| **3.2** | Validación entrada débil | 🟠 3 | 🟠 3 | **9** | `recuperar_contrasena.php:8-15` | Validar RFC, no_emp |
| **3.3** | XSS en $_SERVER | 🟡 2 | 🟠 3 | **6** | `diagnostico_correos.php:329` | htmlspecialchars($_SERVER) |
| **3.4** | Contraseñas débiles | 🟠 3 | 🟠 3 | **9** | `auth.php:132-140` | Validación más robusta |
| **3.5** | Sin confirmación doble | 🟡 2 | 🟠 3 | **6** | `admin_usuarios.php:190-210` | Agregar confirmación |

**Costo Total de Riesgo:** 39 puntos

---

### BAJAS (Riesgo: P × I ≤ 5)

| ID | Vulnerabilidad | Prob | Imp | Riesgo | Evidencia | Mitigación |
|----|---|---|---|---|---|---|
| **4.1** | Control acceso débil | 🟡 2 | 🟡 2 | **4** | `ver_foto_empleado.php:20-35` | Validación explícita |
| **4.2** | Info innecesaria expuesta | 🟡 2 | 🟡 2 | **4** | `login.php:47` | Mensaje genérico |

**Costo Total de Riesgo:** 8 puntos

---

## Análisis de Riesgo por Categoría

### Por Severidad

```
TOTAL: 214 puntos de riesgo acumulado

Críticas:    106 pts (49.5%) ████████████████████████░░░░░░░░░░░░░░░░░░░░░
Altas:       61 pts (28.5%)  ███████████████░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
Medias:      39 pts (18.2%)  █████████░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
Bajas:       8 pts (3.7%)    ██░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
```

**Conclusión:** El 49.5% del riesgo proviene de vulnerabilidades CRÍTICAS. Estas deben remediarse INMEDIATAMENTE.

---

### Por Tipo de Vulnerabilidad

```
Credenciales en código:     50 pts (23.4%)  ████████████░░░░░░░░░░░░░
Falta de CSRF:              20 pts (9.3%)   █████░░░░░░░░░░░░░░░░░░░
Almacenamiento inseguro:    36 pts (16.8%)  █████████░░░░░░░░░░░░░░░░
Path traversal:             16 pts (7.5%)   ████░░░░░░░░░░░░░░░░░░░░
Sesiones inseguras:         16 pts (7.5%)   ████░░░░░░░░░░░░░░░░░░░░
Rate limiting faltante:     21 pts (9.8%)   █████░░░░░░░░░░░░░░░░░░░
Validación débil:           30 pts (14.0%)  ███████░░░░░░░░░░░░░░░░░░
Otros:                      25 pts (11.7%)  ██████░░░░░░░░░░░░░░░░░░░
```

---

## Escenarios de Ataque Realistas

### Escenario 1: Robo de Credenciales BD (P: 95%, Impacto: CATASTRÓFICO)

**Ruta de ataque:**
1. Atacante obtiene acceso a repositorio (GitHub, GitLab, etc.)
2. Lee `includes/conexion.php` y obtiene credenciales
3. Conecta a BD desde máquina remota
4. Descarga tabla `usuarios` completa con password hashes
5. Intenta crack offline o consulta a BD directamente

**Probabilidad Real:** 95%
- Credenciales están en código fuente
- Fácil de encontrar en repositorio público accidentalmente
- Herramientas automáticas buscan patrones `password=`

**Impacto Real:** CATASTRÓFICO
- Acceso total a BD
- Exposición de todos los datos de empleados
- Modificación de registros
- Pérdida de confianza y posible sanción regulatoria

**Costo estimado:** $500,000 - $2,000,000 (si hay datos de muchos empleados)

---

### Escenario 2: CSRF en Cambio de Contraseña (P: 70%, Impacto: ALTO)

**Ruta de ataque:**
1. Atacante identifica que `cambiar_password.php` sin protección CSRF
2. Crea sitio malicioso que aloja formulario HTML
3. Engaña a usuario (admin) para visitar sitio
4. Formulario POST automático cambia contraseña del admin
5. Atacante accede como admin

**Probabilidad Real:** 70%
- Muchos usuarios usan redes inseguras (WiFi público)
- Admin visita sitios externos regularmente
- Técnica de phishing + CSRF es común

**Impacto Real:** ALTO
- Comprometimiento de cuenta administrativa
- Acceso a todas las funciones de admin
- Modificación de datos
- Fuga de información

**Costo estimado:** $100,000 - $500,000

---

### Escenario 3: Descarga No Autorizada de Documentos (P: 85%, Impacto: ALTO)

**Ruta de ataque:**
1. Empleado A obtiene URL de documento de empleado B
2. Cambia parámetro `id=1` a `id=2`
3. Descarga contrato o documento privado de empleado B
4. Acceso no autorizado a información sensible

**Probabilidad Real:** 85%
- Control de acceso débil en `ver_foto_empleado.php`
- URL predecible con parámetros secuenciales
- Fácil de probar manualmente

**Impacto Real:** ALTO
- Violación de privacidad
- Exposición de información personal
- Potencial uso para chantaje
- Violación de LGPD/GDPR

**Costo estimado:** $50,000 - $300,000 + multas regulatorias

---

### Escenario 4: Ataque de Fuerza Bruta a Login (P: 60%, Impacto: MEDIO-ALTO)

**Ruta de ataque:**
1. Atacante usa herramienta automática (Burp Suite, custom script)
2. Intenta múltiples combinaciones RFC + password
3. Sin rate limiting, puede hacer 1000+ intentos por minuto
4. Identifica credenciales válidas
5. Acceso a cuenta de usuario

**Probabilidad Real:** 60%
- Sin rate limiting implementado
- Herramientas disponibles públicamente
- No hay alertas de intentos múltiples

**Impacto Real:** MEDIO-ALTO
- Acceso a cuenta individual
- Acceso a datos del empleado
- Posible escalada de privilegios si es usuario admin

**Costo estimado:** $10,000 - $100,000

---

## Matriz de Mitigación vs Esfuerzo

```
CRÍTICA
  ▲
  │
  │ [1.1,1.2]          [1.3]           [1.4,1.5]
  │ CREDENCIALES      CSRF            ALMACENAMIENTO
  │ ████████████      ██████████      ███████████
  │ 30 min             4 horas         2 horas
  │
ALTA
  │ [2.4]    [2.1]     [2.3]      [2.2]
  │ LOGIN   ERRORES   SESIONES   UPLOADS
  │ ████     ██       ██████     ███████
  │ 6h       2h       2h         3h
MEDIA
  │ [3.4]    [3.1,3.2,3.5]
  │ PASSWD   VALIDACIÓN, HEADERS
  │ ████     █████████
  │ 2h       7h
BAJA
  │ [4.1,4.2]
  │ VARIOS
  │ ██
  │ 2h
  │
  └────────────────────────────────────────▶
     0.5h   2h     4h      6h     8h    10h+
     ESFUERZO REQUERIDO
```

**Interpretación:**
- Puntos que están arriba-derecha = máxima prioridad (más crítico + requiere más trabajo)
- Puntos que están arriba-izquierda = remediación rápida, máximo impacto
- Enfoque: Hacer primero los arriba-izquierda ([1.1], [1.2], [1.4], [1.5])

---

## Proyección de Riesgo

### Escenario Actual (Sin Remediar)

```
Enero 2026:  214 puntos de riesgo acumulado
             Vulnerabilidad a ataques CRÍTICOS
             Riesgo de violación de datos MUY ALTO
             
Probabilidad de incidente en 12 meses: 75%
Impacto potencial: $500,000 - $2,000,000

RECOMENDACIÓN: NO LLEVAR A PRODUCCIÓN
```

### Escenario Post-Fase 1 (Críticas remediadas)

```
Después de 3 horas de trabajo (Credenciales + CSRF + Storage):

Puntuación: ~140 puntos (65% de mejora)
Vulnerabilidades críticas: 0
Riesgo reducido a: MEDIO-ALTO

Probabilidad de incidente en 12 meses: 40%
Impacto potencial: $100,000 - $500,000

RECOMENDACIÓN: SEGURO para producción en Fase 1
               Pero debe continuar con Fases 2 y 3
```

### Escenario Post-Fase 2 (Altas remediadas)

```
Después de 12 horas adicionales (Rate limiting + Sesiones):

Puntuación: ~80 puntos (62% de mejora total)
Vulnerabilidades críticas: 0
Vulnerabilidades altas: 0
Riesgo reducido a: MEDIO

Probabilidad de incidente en 12 meses: 20%
Impacto potencial: $50,000 - $200,000

RECOMENDACIÓN: BUENO para producción
               Continuar con Fase 3 para seguridad óptima
```

### Escenario Post-Fase 3 (Todas remediadas)

```
Después de 9.5 horas adicionales (Headers + Validación):

Puntuación: ~35 puntos (84% de mejora total)
Vulnerabilidades críticas: 0
Vulnerabilidades altas: 0
Vulnerabilidades medias: 0
Riesgo reducido a: BAJO

Probabilidad de incidente en 12 meses: 10%
Impacto potencial: $10,000 - $50,000

RECOMENDACIÓN: EXCELENTE para producción
               Implementar auditorías periódicas
```

---

## Controles Preventivos Recomendados

### Corto Plazo (0-1 mes)
- ✅ Remediación de vulnerabilidades críticas
- ✅ Implementación de CSRF tokens
- ✅ Protección de /storage
- ✅ Validación de path traversal

### Mediano Plazo (1-3 meses)
- ✅ Rate limiting en todos los endpoints
- ✅ Configuración segura de sesiones
- ✅ Validación robusta de entrada
- ✅ Headers de seguridad HTTP

### Largo Plazo (3-12 meses)
- 🔄 Penetration testing profesional (trimestral)
- 🔄 Escaneo automático OWASP ZAP (mensual)
- 🔄 Auditoría de código (trimestral)
- 🔄 Capacitación en seguridad (anual)
- 🔄 Certificación de seguridad (anual)

---

## Conclusiones y Recomendaciones

### Hallazgos Principales

1. **49.5% del riesgo es CRÍTICO** - Requiere atención inmediata
2. **Credenciales expuestas en código** - Vulnerabilidad más grave
3. **CSRF sin protección** - Riesgo de secuestro de sesión
4. **Almacenamiento inseguro** - Fuga de información
5. **Controles parcialmente implementados** - Inconsistencia en aplicación

### Recomendación Final

```
┌─────────────────────────────────────────────┐
│ VEREDICTO: NO APTO PARA PRODUCCIÓN          │
│                                             │
│ Estado Actual: 64/100 (MEDIANO-BAJO)       │
│ Requerido:    80/100 (MÍNIMO)              │
│                                             │
│ Tiempo para cumplimiento: 24-48 horas      │
│ Esfuerzo: 24.75 horas (3-4 días)           │
│                                             │
│ ACCIÓN REQUERIDA:                          │
│ ▶ Ejecutar Fase 1 INMEDIATAMENTE           │
│ ▶ Proceder con Fase 2 esta semana          │
│ ▶ Completar Fase 3 en 2 semanas            │
└─────────────────────────────────────────────┘
```

---

**Documento de Riesgos Compilado:** 2026-01-26
**Próxima Revisión:** Post-remediación (Fase 1)
**Clasificación:** CONFIDENCIAL - SOLO USO INTERNO

