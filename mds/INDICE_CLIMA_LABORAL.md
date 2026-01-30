# 📚 Índice Completo - Módulo Clima Laboral

## 🏠 Descripción General

El **Módulo de Clima Laboral** es un sistema completo para medir, analizar y mejorar el ambiente de trabajo en la organización.

- **12 Dimensiones** organizadas en **4 Superdimensiones**
- **48 Reactivos** (preguntas Likert 1-5)
- **Preguntas abiertas** cualitativas
- Resultados por **Empresa**, **Área** y **Superdimensión**
- Planes de acción para mejora continua
- **Modalidad papel y digital**

---

## 📍 Accesos Rápidos

### Panel Principal
```
url: /public/clima_admin.php
acceso: Clima Laboral (desde menú)
permisos: clima.admin
```

### Para Empleados
```
Contestar encuesta: /public/clima_contestar.php
Mis resultados: /public/clima_resultados_mi_unidad.php
```

### Para Coordinadores RH (NUEVO)
```
Encuesta imprimible: /public/clima_encuesta_impresion.php
Captura de respuestas: /public/clima_captura_respuestas.php
```

### Para Administradores
```
Configuración: /public/clima_dimensiones.php
Periodos: /public/clima_periodos.php
Elegibles: /public/clima_generar_elegibles.php
Participación: /public/clima_participacion.php
Resultados: /public/clima_resultados.php
Planes de acción: /public/clima_planes.php
```

---

## 📂 Archivos del Sistema

### Código PHP (Funcionales)
| Archivo | Propósito | Usuarios |
|---------|-----------|----------|
| `clima.php` | Menú principal | Todos |
| `clima_admin.php` | Panel de control | Admin |
| `clima_contestar.php` | Encuesta digital | Empleados |
| `clima_resultados_mi_unidad.php` | Mis resultados | Empleados |
| `clima_resultados.php` | Resultados ejecutivo | Admin |
| `clima_dimensiones.php` | Configurar preguntas | Admin |
| `clima_periodos.php` | Crear períodos | Admin |
| `clima_generar_elegibles.php` | Elegibilidad | Admin |
| `clima_participacion.php` | Monitoreo | Admin |
| `clima_planes.php` | Planes de acción | Admin |
| `clima_planes_mi_unidad.php` | Planes por área | Líderes |
| `clima_guardar_respuesta.php` | API respuestas | Sistema |
| `clima_guardar_abierta.php` | API preguntas abiertas | Sistema |
| `clima_finalizar.php` | Finalizar encuesta | Sistema |
| `clima_elegibles_detalle.php` | Detalle elegibles | Admin |
| **`clima_encuesta_impresion.php`** | **Impresión (NUEVO)** | **RH** |
| **`clima_captura_respuestas.php`** | **Captura papel (NUEVO)** | **RH** |

### Base de Datos
| Tabla | Campos Principales |
|-------|-------------------|
| `clima_periodos` | periodo_id, anio, empresa_id, estatus |
| `clima_dimensiones` | dimension_id, nombre, **superdimension** |
| `clima_reactivos` | reactivo_id, dimension_id, texto |
| `clima_elegibles` | periodo_id, empleado_id, elegible |
| `clima_respuestas` | periodo_id, empleado_id, reactivo_id, valor |
| `clima_preguntas_abiertas` | pregunta_id, texto, obligatorio |
| `clima_respuestas_abiertas` | periodo_id, empleado_id, pregunta_id, respuesta |
| `clima_planes` | plan_id, periodo_id, dimension_id, accion |
| `clima_publicacion` | periodo_id, empresa_id, unidad_id, habilitado |
| `clima_envios` | periodo_id, empleado_id, completado |

### Scripts SQL
| Archivo | Propósito |
|---------|-----------|
| `sgrh.sql` | Definición completa de tablas |
| `migrations/add_superdimension_clima.sql` | Agregar superdimensiones |

---

## 📖 Documentación

### Conceptual (Modelos)
| Archivo | Contenido |
|---------|-----------|
| `SUPERDIMENSIONES_CLIMA.md` | Modelo de 4 superdimensiones y 12 dimensiones |
| `RESULTADOS_CLIMA_EJEMPLO.md` | Ejemplos de resultados y visualización |

### Operativo (Guías de Uso)
| Archivo | Destinatarios | Contenido |
|---------|--------------|----------|
| `REFERENCIA_RAPIDA_PAPEL.md` | RH (rápido) | Resumen 1 página |
| `GUIA_IMPRESION_RAPIDA.md` | RH, Empleados | 📖 Cómo imprimir encuesta optimizada 2 páginas |
| `GUIA_CAPTURA_ANONIMA.md` | RH Coordinadores | 🔒 Cómo capturar encuestas anónimas (NEW) |
| `GUIA_ACTIVAR_CORREOS.md` | Admin | Configurar notificaciones |
| `GUIA_PERMISOS_ALCANCE.md` | Admin | Roles y permisos |
| `GUIA_ACCESO_USUARIOS.md` | Admin | Acceso y autenticación |

### Técnico (Implementación)
| Archivo | Destinatarios | Contenido |
|---------|--------------|----------|
| `IMPLEMENTACION_ENCUESTAS_PAPEL.md` | Desarrolladores | Arquitectura, BD, seguridad |
| `CHANGELOG_SUPERDIMENSIONES.md` | Técnico | Cambios realizados |
| `CLIMA_README.md` | Desarrolladores | Flujo completo del módulo |

### Resumen Ejecutivo
| Archivo | Público | Resumen |
|---------|---------|---------|
| `RESUMEN_ENCUESTAS_PAPEL.md` | Todos | Qué se implementó y cómo |

---

## 🎯 Las 4 Superdimensiones

### 1️⃣ Relación con el Jefe Inmediato (2 dimensiones, 8 reactivos)
- **Liderazgo inmediato**: Estilo de dirección y orientación
- **Reconocimiento**: Valoración del trabajo realizado

### 2️⃣ Relación con los Compañeros (3 dimensiones, 12 reactivos)
- **Colaboración entre áreas**: Trabajo conjunto interfuncional
- **Comunicación interna**: Flujo de información horizontal
- **Equidad y respeto**: Trato justo entre personas

### 3️⃣ Relación con la Empresa (4 dimensiones, 16 reactivos)
- **Propósito y alineación**: Conexión con misión/visión
- **Estructura y coordinación**: Claridad organizacional
- **Recursos y herramientas**: Disponibilidad de medios
- **Bienestar y balance**: Vida-trabajo equilibrada

### 4️⃣ Relación con el Trabajo (3 dimensiones, 12 reactivos)
- **Claridad de rol**: Definición clara de responsabilidades
- **Desarrollo y aprendizaje**: Oportunidades de crecimiento
- **Procesos y eficiencia**: Optimización del trabajo

---

## 🎬 Flujo Operativo Estándar

### Semana 1-2: Preparación
```
1. Admin crea período (Año 2026)
2. Admin genera lista de elegibles
3. RH imprime encuestas (clima_encuesta_impresion.php)
4. RH distribuye al personal
```

### Semana 2-3: Recopilación
```
1. Empleados contestan en línea (optional)
2. Empleados completan en papel
3. RH recopila encuestas físicas
```

### Semana 4: Captura
```
1. RH accede a clima_captura_respuestas.php
2. Para cada empleado:
   - Selecciona período y empleado
   - Ingresa respuestas 1-5
   - Copia respuestas abiertas
   - Guarda
```

### Semana 5: Análisis
```
1. Admin verifica participación >= 90%
2. Admin publica resultados
3. Empleados ven resultados en "Mis Resultados"
4. RH/Admin crean planes de acción
5. Monitorean progreso
```

---

## 👥 Usuarios y Permisos

### Administrador del Sistema
```
Permisos: organizacion.admin, clima.admin
Acceso:
  - Toda la configuración
  - Crear/editar períodos
  - Ver todos los resultados
  - Crear planes de acción
  - Publicar resultados
```

### Coordinador RH (NUEVO)
```
Permisos: clima.captura (o clima.admin)
Acceso:
  - Imprimir encuestas (clima_encuesta_impresion.php)
  - Capturar respuestas (clima_captura_respuestas.php)
  - Ver participación
  - NO: crear/editar encuesta
```

### Líder de Área
```
Permisos: clima.resultados
Acceso:
  - Ver resultados de su área
  - Crear planes de acción para su área
  - NO: ver otras áreas
```

### Empleado Regular
```
Permisos: clima.contestar (por defecto)
Acceso:
  - Contestar encuesta (si publicada)
  - Ver sus resultados (si publicados)
  - NO: ver resultados de otros
```

---

## 📊 Flujo de Datos

```
ENTRADA DE DATOS:
  Digital (clima_contestar.php) ─┐
                                 ├─> clima_respuestas (BD)
  Papel (clima_captura_respuestas.php) ┘
                                 └─> clima_respuestas_abiertas (BD)

PROCESAMIENTO:
  BD ─> Agregación por:
        - Superdimensión
        - Dimensión
        - Empresa
        - Área/Unidad
        └─> Cálculo de promedios (0-100%)

SALIDA:
  Reportes:
    - Participación (clima_participacion.php)
    - Resultados (clima_resultados.php)
    - Mis Resultados (clima_resultados_mi_unidad.php)
  
  Acción:
    - Planes (clima_planes.php)
    - Seguimiento (clima_planes_mi_unidad.php)
```

---

## 🔐 Seguridad

### Autenticación
- Requiere login (require_login)
- Valida sesión y empresa (require_empresa)

### Autorización
- Validación por permisos específicos
- Filtrado de datos por empresa_id
- Empleados solo ven su propia área

### Validación de Datos
- Rango Likert 1-5
- Empleado elegible para período
- Respuestas abiertas <= 500 caracteres

---

## 🚀 Mejoras Implementadas (Enero 2026)

### Superdimensiones
- ✅ Agregada columna `superdimension` a clima_dimensiones
- ✅ Mapeadas 12 dimensiones a 4 superdimensiones
- ✅ Actualizada visualización de resultados

### Encuestas en Papel
- ✅ Creado `clima_encuesta_impresion.php` (impresión)
- ✅ Creado `clima_captura_respuestas.php` (captura)
- ✅ Integrados en panel admin
- ✅ Documentación completa

### Mejoras Operativas (v2.1)
- ✅ **Encuesta compactada**: 14 páginas → 2 páginas A4
- ✅ **Datos demográficos**: Empresa, Unidad, Departamento (confidencial)
- ✅ **Captura anónima**: Nuevo modo para encuestas confidenciales
- ✅ **Selectores dinámicos**: Identificada (empleado) vs Anónima (unidad)
- ✅ Documentación: Guías de impresión y captura anónima

### Documentación
- ✅ Guía de uso para coordinadores
- ✅ Referencia rápida 1 página
- ✅ Documentación técnica
- ✅ Resumen ejecutivo
- ✅ **Guía de impresión optimizada**
- ✅ **Guía de captura anónima**
- ✅ **Changelog de mejoras**

---

## 📞 Soporte y Contacto

### Documentación Disponible
```
Rápida (5 min):       REFERENCIA_RAPIDA_PAPEL.md
Completa (30 min):    GUIA_ENCUESTAS_PAPEL.md
Técnica:              IMPLEMENTACION_ENCUESTAS_PAPEL.md
Teórica:              SUPERDIMENSIONES_CLIMA.md
```

### Canales
- **Técnico**: Administrador SGRH
- **Operativo**: Coordinador RH líder
- **Dudas conceptuales**: Revisar documentación

---

## 🎓 Capacitación Recomendada

### Administrador (2 horas)
1. Lectura: `SUPERDIMENSIONES_CLIMA.md` (30 min)
2. Práctica: Crear período y elegibles (30 min)
3. Revisión: Panel de resultados (30 min)
4. Validación: Publicar resultados (30 min)

### Coordinador RH (1 hora)
1. Lectura: `REFERENCIA_RAPIDA_PAPEL.md` (10 min)
2. Práctica: Imprimir encuesta (10 min)
3. Práctica: Capturar 3 empleados (20 min)
4. Validación: Verificar participación (20 min)

### Empleados (5 minutos)
- Solo: "Lee instrucciones en encuesta"
- Digital: Accede a clima_contestar.php
- Papel: Recibe encuesta impresa

---

## 📈 Métricas Clave

| Métrica | Objetivo | Frecuencia |
|---------|----------|-----------|
| Participación | >= 90% | Por período |
| Superdimensión crítica | < 50% | Acción inmediata |
| Dimensión crítica | < 40% | Plan de mejora |
| Tiempo captura | 3-5 min | Por empleado |
| Publicación | 5 días | Post-captura |

---

## 🗂️ Organización de Archivos

```
/sgrh
├── /public
│   ├── clima.php                          (menú)
│   ├── clima_admin.php                    (panel)
│   ├── clima_contestar.php                (encuesta digital)
│   ├── clima_encuesta_impresion.php       ⭐ NUEVO
│   ├── clima_captura_respuestas.php       ⭐ NUEVO
│   ├── clima_dimensiones.php              (config)
│   ├── clima_periodos.php                 (períodos)
│   ├── clima_generar_elegibles.php        (elegibles)
│   ├── clima_participacion.php            (monitoreo)
│   ├── clima_resultados.php               (ejecutivo)
│   ├── clima_resultados_mi_unidad.php     (empleado)
│   ├── clima_planes.php                   (admin planes)
│   └── clima_planes_mi_unidad.php         (líderes)
│
├── /migrations
│   └── add_superdimension_clima.sql       (BD)
│
├── SUPERDIMENSIONES_CLIMA.md              (teórico)
├── RESULTADOS_CLIMA_EJEMPLO.md            (ejemplos)
├── GUIA_ENCUESTAS_PAPEL.md                (operativa)
├── REFERENCIA_RAPIDA_PAPEL.md             (rápida)
├── IMPLEMENTACION_ENCUESTAS_PAPEL.md      (técnica)
├── RESUMEN_ENCUESTAS_PAPEL.md             (resumen)
└── INDICE_CLIMA_LABORAL.md                (este archivo)
```

---

## ✅ Checklist de Implementación

Antes de usar:
- [ ] BD migrada (add_superdimension_clima.sql)
- [ ] 12 dimensiones configuradas
- [ ] Período creado
- [ ] Elegibles generados
- [ ] Coordinadores de RH capacitados
- [ ] Permisos asignados
- [ ] Prueba de impresión realizada
- [ ] Prueba de captura realizada
- [ ] Documentación disponible

---

## 🎉 Estado del Módulo

```
✅ COMPLETAMENTE FUNCIONAL
├─ Encuesta digital: Listo
├─ Encuesta papel: ⭐ NUEVO - Listo
├─ Resultados: Listo
├─ Planes de acción: Listo
├─ Documentación: Completa
└─ Soporte: Disponible
```

---

**Versión**: 2.0 (con encuestas en papel)
**Última actualización**: 21 de enero de 2026
**Mantenedor**: Desarrollo SGRH
**Estado**: ✅ PRODUCCIÓN
