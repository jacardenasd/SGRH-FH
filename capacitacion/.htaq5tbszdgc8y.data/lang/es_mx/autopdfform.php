<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'autopdfform', language 'es_mx', version '4.4'.
 *
 * @package     autopdfform
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autopdfform:addinstance'] = 'Añadir un nuevo formato de PDF auto-llenado';
$string['autopdfform:view'] = 'Ver formato de PDF auto-llenado';
$string['intro'] = 'Descripción';
$string['modulename'] = 'Formato de PDF auto-llenado';
$string['modulename_help'] = 'Esta actividad permite a los estudiantes descargar un formato PDF personalizado, precargado con sus propios datos.

El profesor debe cargar un formato PDF rellenable creado con Adobe Acrobat (o un editor de PDF compatible).

Para garantizar que el formato se pueda guardar después de rellenarlo, active la función "Guardar datos del formato" en Adobe Acrobat:
Archivo → Guardar como otro → PDF extendido de Reader → Activar más herramientas (incluye rellenar y guardar el formato).

Los siguientes nombres de campo de marcador de posición se reemplazarán automáticamente:
- full_name → nombre completo del estudiante
- student_id → número de identificación del estudiante
- email_address → dirección de correo electrónico del estudiante
- n_date → fecha actual (DD.MM.AAAA)

Estos marcadores de posición deben coincidir exactamente con los nombres de campo utilizados en el PDF para que el reemplazo funcione correctamente.';
$string['modulenameplural'] = 'Formatos de PDF auto-llenado';
$string['noautopdfforms'] = 'No hay actividades de  formato de PDF auto-llenado en este curso.';
$string['noinstances'] = 'No hay actividades de  formato de PDF auto-llenado en este curso.';
$string['pluginadministration'] = 'Administración de formato de PDF auto-llenado';
$string['pluginname'] = 'Formato de PDF auto-llenado';
$string['privacy:metadata'] = 'La actividad de Formato de PDF auto-llenado no almacena ningún dato personal.';
$string['templatefile'] = 'Plantilla para subir PDF auto-llenado (max 1 MB)';
$string['templatefile_help'] = 'Subir un formato de PDF auto-llenable (formato AcroForm). Los datos del estudiante serán insertados dentro d elos campos apropiados';
