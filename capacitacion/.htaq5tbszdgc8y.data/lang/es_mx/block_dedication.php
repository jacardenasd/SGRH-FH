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
 * Strings for component 'block_dedication', language 'es_mx', version '4.4'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid'] = 'Nombre del Curso';
$string['admin_filter_courseid_help'] = 'Filtrar el reporte pro nombre del curso';
$string['admin_filter_form'] = 'Configuración de Dedicación del curso';
$string['admin_filter_form_help'] = 'El tiempo es estimado basado en el concepto de Sesión y Duración de la sesión aplicado a entradas de bitácora.

<strong>Clic:</strong> Cada vez que un usuario accede a una página en Moodle una entrada de bitácora es almacenada.

<strong>Sesión:</strong> conjunto de dos o más clics consecutivos enlos cuales el tiempo transcurrido entre cada par de clics consecutivos no sobrepasa un tiempo estimado máximo.

<strong>Duración de sesión:</strong> tiempo transcurrido entre el primer y el último clic de la sesión.

<strong>Tiempo de dedicación:</strong> la suma de todas las duraciones de sesiones para un usuario.';
$string['admin_filter_form_text'] = 'Seleccionar el rango de fechas y el máximo de tiempo entre clics de la misma sesión.';
$string['admin_filter_maxtime'] = 'Final del período';
$string['admin_filter_maxtime_help'] = 'Considerar solamente entradas de bitácora que terminan antes de esta fecha';
$string['admin_filter_mintime'] = 'Inicio del período';
$string['admin_filter_mintime_help'] = 'Considerar solamente entradas de bitácora después  de esta fecha';
$string['admin_filter_submit'] = 'Calcular';
$string['allloglifetime'] = 'Conservar historia de sesión por';
$string['averagetimespent'] = '<strong>Tiempo promedio empleado en curso:</strong> {$a}';
$string['cleanuptask'] = 'Trabajo de limpieza de historia de sesión';
$string['collect_dedication'] = 'Recolectar datos para bloque de dedicación';
$string['configallloglifetime'] = 'Esto especifica el tiempo que quiere conservar los datos acerca de la duración de la sesión. Las sesiones que sean más antiguas que esta edad son eliminadas automáticamente.';
$string['connectionratiorow'] = 'Conexiones diarias';
$string['dedication:addinstance'] = 'Permitir añadir bloque de dedicación';
$string['dedication:myaddinstance'] = 'Permitir añadir bloque de dedicación ala página del Tablero';
$string['dedication:viewreports'] = 'Permitir ver reportes de dedicación';
$string['dedicationall'] = 'Dedicación de todos los miembros de curso. Elija a cualquier nombre para ver una dedicación al curso detallada.';
$string['dedicationrow'] = 'Tiempo empleado en curso';
$string['enrolmententity'] = 'Inscripción';
$string['enrolmentmethod'] = 'Método de inscripción';
$string['entity_dedication'] = 'Dedicación';
$string['excludesessionslessthan'] = 'Excluir sesiones menores de {$a}';
$string['group'] = 'Grupo';
$string['groupentity'] = 'Grupo';
$string['ignore_sessions_limit'] = 'Ignorar límite de sesión';
$string['ignore_sessions_limit_desc'] = 'Quitar sesiones más cortas, cualquiera menor de este valor (en minutos) será ignorada en el reporte de dedicación';
$string['lastupdated'] = 'Última actualización: {$a}';
$string['period'] = 'Período desde <em>{$a->mintime}</em> hasta <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Tiempo transcurrido:</strong> {$a}';
$string['pluginname'] = 'Dedicación';
$string['privacy:metadata'] = 'El plugin del bloque de dedicación almacena tiempos que los usuarios hayan dedicado a cursos.';
$string['privacy:metadata:block_dedication:courseid'] = 'ID del curso para la dedicación del usuario';
$string['privacy:metadata:block_dedication:timespent'] = 'Tiempo empleado en el curso';
$string['privacy:metadata:block_dedication:timestart'] = 'La hora de inicio de los datos recolectados';
$string['privacy:metadata:block_dedication:userid'] = 'ID del usuario de la dedicación del usuario';
$string['report_dedication'] = 'Reporte de Dedicación Total';
$string['report_timespent'] = 'Reporte Tiempoempleado';
$string['session_limit'] = 'Límite de sesión';
$string['session_limit_desc'] = 'Límite de sesión para los filtros de la página del reporte';
$string['sessionduration'] = 'Duración de sesión';
$string['sessiondurationsum'] = 'Duración de sesión (suma)';
$string['sessionstart'] = 'Inicio de sesión';
$string['showestimatedtime'] = 'Mostrar tiempo empleado estimado a usuarios';
$string['showestimatedtime_help'] = 'Esta configuración le permite a los usuarios ver sus tiempos estimados empleados en el bloque.';
$string['timespent_estimation'] = 'Su tiempo estimado empleado en curso es:';
$string['timespentincourse'] = 'Tiempo empleado en curso';
$string['timespentreport'] = 'Reporte completo';
$string['timespenttasknotrunning'] = 'El trabajo de cálculo del tiempo empleado aun no se ha ejecutado.';
$string['totaltimespent'] = '<strong>Total de todo el tiempo empleado en el curso:</strong> {$a}';
$string['user_dedication_datasource'] = 'Dedicación de Usuarios';
$string['userdedication'] = 'Dedicación detallada al curso de <em>{$a}</em>.';
$string['viewsessiondurationreport'] = 'Ver reporte de duración de sesión';
