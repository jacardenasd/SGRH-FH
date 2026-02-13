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
 * Strings for component 'local_course_checker', language 'es_mx', version '4.4'.
 *
 * @package     local_course_checker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['activity'] = 'Actividad';
$string['admin_setting_coursesregex'] = 'Filtro regex para nombre completo del curso';
$string['admin_setting_coursesregex_help'] = 'Defina la expresión regular para ejecutar este revisor solamente cuando coincida con el nombre completo del curso.';
$string['admin_setting_coursesregex_skip_course'] = 'La revisión omitió este curso';
$string['admin_setting_coursesregex_skip_course_desc'] = 'La expresión regular no coincidió con el nombre completo del curso.';
$string['admin_setting_regex_invalidregex'] = 'La expresión regular proporcionada no es válida. Por favor revise la sintaxis.';
$string['admin_setting_restrictedint_max'] = 'El valor máximo es {$a}';
$string['admin_setting_restrictedint_min'] = 'El valor mínimo es {$a}';
$string['changes_last_check'] = 'Cambios desde la última revisión: {$a}';
$string['check_course'] = 'Revisar este curso';
$string['check_course_in_progress'] = 'Revisión en progreso...';
$string['checker_last_run'] = 'Última ejecución: {$a}';
$string['checker_links_activity'] = 'Actividad: {$a->name} ({$a->modname})';
$string['checker_never_run'] = 'Nunca';
$string['course'] = 'Curso';
$string['course_checker:runcheck'] = 'Puede ejecutar el Revisor de Curso';
$string['course_checker:view'] = 'Ver el Revisor de Curso';
$string['course_checker:view_navigation'] = 'Mostrar Revisor de Curso en el menú de navegación';
$string['course_checker:view_notification'] = 'Ver las notificaciones del Revisor de Curso';
$string['course_section'] = 'Sección';
$string['created'] = 'Creado';
$string['deleted'] = 'Eliminado';
$string['details'] = 'Detalles';
$string['error_checks'] = 'Error';
$string['failed_checks'] = 'Fallidas';
$string['groups_activity'] = 'Actividad "{$a->name}"';
$string['last_modified_activity'] = 'Actividades modificadas desde la última revisión';
$string['messageprovider:checker_completed'] = 'La revisión del curso está completada';
$string['messageprovider:checker_failed'] = 'Revisión del curso fallida';
$string['messageprovider_completed'] = 'Las revisiones han sido completadas.';
$string['messageprovider_failed_notification_html'] = 'Hola {$a->firstname},<br><br>
Lamentablemente, el revisor de curso para <strong>{$a->coursename}</strong> no pudo completarse.<br><br>
Por favor contacte al administrador.';
$string['messageprovider_failed_notification_small'] = 'La revisión del curso no pudo completarse.';
$string['messageprovider_following_checks_completed'] = 'Se completaron las siguientes revisiones:';
$string['messageprovider_greeting'] = 'Hola';
$string['messageprovider_result_label'] = 'Resultados';
$string['messageprovider_singlechecks_completed'] = 'La revisión {$a->checkername} está completada.';
$string['messageprovider_singlechecks_subject'] = 'La revisión {$a->checkername} fue completada en el curso {$a->coursename}';
$string['messageprovider_subject'] = 'Revisiones completadas en el curso {$a}';
$string['messageprovider_subject_failed'] = 'Ocurrió un error durante la revisión del curso.';
$string['plugin_disabled'] = '{$a} deshabilitado.';
$string['plugin_enabled'] = '{$a} habilitado.';
$string['pluginname'] = 'Revisor de Curso';
$string['privacy:metadata:action'] = 'La acción realizada (por ejemplo: creado, actualizado, eliminado).';
$string['privacy:metadata:checker_id'] = 'El ID de la ejecución del revisor.';
$string['privacy:metadata:local_course_checker_event'] = 'Almacena eventos y registros de actividad del revisor de curso.';
$string['privacy:metadata:objectid'] = 'El ID del objeto afectado.';
$string['privacy:metadata:other'] = 'Datos adicionales del evento en formato JSON.';
$string['privacy:metadata:relateduserid'] = 'Usuario relacionado afectado por el evento.';
$string['privacy:metadata:target'] = 'El objeto objetivo (p. ej., course_module).';
$string['privacy:metadata:timecreated'] = 'Hora en que el evento fue creado.';
$string['privacy:metadata:userid'] = 'El ID del usuario que generó el evento.';
$string['queue_check_task'] = 'Poner revisión en cola';
$string['run_checker_task'] = 'Ejecutar revisión';
$string['save_results'] = 'Guardar resultados';
$string['send_notification_task'] = 'Enviar notificación';
$string['settings_general'] = '<p>Recargue la página si habilita o deshabilita un plugin.</p>';
$string['settings_name'] = 'Configuraciones generales del Revisor de Curso';
$string['settings_referencecourseid'] = 'ID del curso de referencia';
$string['subplugintype_coursechecker'] = 'Revisor de Curso';
$string['subplugintype_coursechecker_plural'] = 'Revisores de Curso';
$string['successful_checks'] = 'Exitosas';
$string['timestamp'] = 'Marca de tiempo';
$string['unknown'] = 'Desconocido';
$string['updated'] = 'Actualizado';
$string['user'] = 'Usuario';
$string['warning_checks'] = 'Advertencia';
