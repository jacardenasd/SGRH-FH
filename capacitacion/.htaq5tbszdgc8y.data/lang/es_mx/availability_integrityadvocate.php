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
 * Strings for component 'availability_integrityadvocate', language 'es_mx', version '4.4'.
 *
 * @package     availability_integrityadvocate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_perrequest'] = 'Recordar valores durante una única solicitud';
$string['description'] = 'Requerir la finalización del proceso de supervisión de Integrity Advocate';
$string['error_ia_status_request'] = 'No se pudo obtener el estado del Defensor de integridad remoto. Las actividades restringidas afectadas se ven obligadas a pasar a "No disponible".';
$string['error_selectcmid'] = 'Debe seleccionar un módulo para la condición de finalización.';
$string['label_cm'] = 'Módulo';
$string['label_completion'] = 'Estado de validación de IA requerido';
$string['label_validation_status'] = 'Estado de validación de IA requerido';
$string['missing'] = '(Módulo faltante)';
$string['option_invalid'] = 'debe tener estado IA no válido';
$string['option_valid'] = 'debe tener estado IA válido';
$string['pluginname'] = 'Restricción por Integrity Advocate';
$string['privacy:metadata'] = 'Este plugin no almacena datos en Moodle. Para poder integrarlo con un servicio remoto, es necesario intercambiar datos de usuario con ese servicio. Consulta <a href="https://integrityadvocate.com/Home/Privacy?lang=es">Integrity Advocate Privacy</a> para obtener más información.';
$string['privacy:metadata:availability_integrityadvocate'] = 'Este plugin no almacena datos en Moodle. Para poder integrarlo con un servicio remoto, es necesario intercambiar datos de usuario con ese servicio. Consulta <a href="https://integrityadvocate.com/Home/Privacy?lang=es">Integrity Advocate Privacy</a> para obtener más información.';
$string['privacy:metadata:availability_integrityadvocate:cmid'] = 'Número ID del módulo del curso';
$string['privacy:metadata:availability_integrityadvocate:tableexplanation'] = 'La información de Integrity Advocate es almacenada aquí';
$string['privacy:metadata:availability_integrityadvocate:userid'] = 'El número ID del usuario en la base de datos.';
$string['requires_invalid'] = 'El resultado de IA para el módulo <strong>{$a}</strong> está marcado como no válido';
$string['requires_valid'] = 'El resultado de IA para el módulo <strong>{$a}</strong> es válido';
$string['title'] = 'Integrity Advocate (Defensor de la Integridad)';
