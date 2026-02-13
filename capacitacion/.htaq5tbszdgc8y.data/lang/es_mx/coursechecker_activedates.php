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
 * Strings for component 'coursechecker_activedates', language 'es_mx', version '4.4'.
 *
 * @package     coursechecker_activedates
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activedates_noactivedates'] = 'No debería haber fechas habilitadas en la sección de "finalización de actividad".';
$string['activedates_noactivedatesinactivity'] = 'No debería haber fechas habilitadas en la actividad {$a->modtype}, busque los siguientes campos: {$a->adateissetin}.';
$string['activedates_setting_modules'] = 'Módulos habilitados';
$string['activedates_setting_modules_help'] = 'Defina los módulos permitidos (deben estar habilitados en <a href="{$a}" target="_blank">Gestionar actividades</a>) para ser revisados en cuanto a fechas activas.';
$string['activedates_success'] = 'La actividad {$a} está configurada correctamente.';
$string['pluginname'] = 'Revisión de fechas activas';
$string['pluginname_help'] = 'Este plugin verifica si un curso tiene definidas tanto una fecha de inicio como una fecha de finalización. Está pensado para formar parte de un flujo de aseguramiento de calidad del curso, garantizando que todos los cursos tengan claramente establecidos sus límites temporales.';
$string['privacy:metadata'] = 'La revisión de fechas activas no almacena datos personales. Los resultados de la revisión se guardan en el plugin course checker.';
