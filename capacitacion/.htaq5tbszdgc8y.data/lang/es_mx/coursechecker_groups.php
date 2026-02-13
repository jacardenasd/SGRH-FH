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
 * Strings for component 'coursechecker_groups', language 'es_mx', version '4.4'.
 *
 * @package     coursechecker_groups
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['groups_activity'] = 'Actividad "{$a->name}"';
$string['groups_deactivated'] = 'La configuración de envío grupal está desactivada';
$string['groups_idmissing'] = 'El envío grupal está activo, pero no se ha configurado ningún agrupamiento';
$string['groups_lessthantwogroups'] = 'Se han configurado menos de 2 grupos para el agrupamiento activo';
$string['groups_missing'] = 'El agrupamiento no ha sido configurado correctamente';
$string['groups_success'] = 'La configuración de envío grupal está bien definida';
$string['pluginname'] = 'Revisión de envío grupal';
$string['pluginname_help'] = 'Este plugin revisa las actividades de tarea en un curso para garantizar una configuración correcta del envío grupal. Verifica que el modo de grupo esté configurado adecuadamente, que exista un agrupamiento válido asignado y que dicho agrupamiento contenga al menos dos grupos.';
$string['privacy:metadata'] = 'La revisión de envío grupal no almacena datos personales. Los resultados de la revisión se guardan en el plugin course checker.';
