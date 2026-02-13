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
 * Strings for component 'local_kopere_status', language 'es_mx', version '4.4'.
 *
 * @package     local_kopere_status
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['day'] = '1 día';
$string['days'] = '{$a} días';
$string['down'] = 'Caído';
$string['intervalminutes'] = 'Intervalo de verificación (minutos)';
$string['intervalminutes_desc'] = 'Tiempo mínimo entre ciclos de verificación. La tarea programada se autorregulará según este valor.';
$string['lastcheck'] = 'Última verificación';
$string['minute'] = '1 minuto';
$string['minutes'] = '{$a} minutos';
$string['modules'] = 'Módulos';
$string['modules_desc'] = 'Ingresa un módulo por línea. Cada línea se replicará para los diferentes estados. Por ejemplo, si ingresas "Inscripción" y "Soporte" (uno por línea), los estados se mostrarán solo para "Inscripción" y para "Soporte".';
$string['nodata'] = 'Aún no hay datos';
$string['overall_down'] = 'Sistema no disponible';
$string['overall_operational'] = 'Todos los sistemas operativos';
$string['pluginname'] = 'Estado del sistema';
$string['privacy:metadata'] = 'El plugin Kopere Status no almacena ningún dato personal.';
$string['publiclink'] = 'Página pública de estado';
$string['publictitle'] = 'Título público';
$string['publictitle_desc'] = 'Título que se muestra en la página pública de estado.';
$string['retentiondays'] = 'Retención (días)';
$string['retentiondays_desc'] = 'Eliminar filas de acumulación por hora con una antigüedad mayor a este número de días. Los registros sin procesar también se depuran después de cada acumulación (se conserva solo la hora actual para la siguiente agregación).';
$string['statuspagedays'] = 'Días de la página de estado';
$string['statuspagedays_desc'] = 'Número de días que se mostrarán en la página de estado (elige de 1 a 7).';
$string['task_hourly_rollup'] = 'Acumulación horaria y limpieza de StatusBoard';
$string['up'] = 'Activo';
