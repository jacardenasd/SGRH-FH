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
 * Strings for component 'mumie', language 'es_mx', version '4.4'.
 *
 * @package     mumie
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completionpass'] = 'Requerir calificación aprobatoria';
$string['completionpass_help'] = 'Si está habilitada, esta actividad se considera completada cuando el estudiante obtiene una calificación aprobatoria, la cual se establece en el libro de calificaciones.
<br><br><b>Nota:</b><br>
Las calificaciones de las tareas de MUMIE solo se actualizan al abrir el libro de calificaciones. Si desea conocer el estado de finalización actual de todos los estudiantes, recuerde abrir primero la página de resumen del libro de calificaciones.';
$string['dnd_addmessage'] = 'Añadir trabajo MUMIE aquí';
$string['dnd_addmessage_multiple'] = 'Añade tareas de MUMIE aquí';
$string['dndupload_message'] = 'Añadir un nuevo trabajo MUMIE';
$string['gradetopassmustbeset'] = '<i>Calificación aprobatoria</i> no puede ser cero, ya que esta actividad tiene su método de finalización configurado para requerir calificación aprobatoria. Por favor, configure un valor diferente de cero.';
$string['gradetopassnotset'] = 'Este trabajo MUMIE no tiene una <i>calificación aprobatoria</i> configurada, por lo que usted no puede usar esta opción. Por favor use en su  lugar la opción de requerir calificación.';
$string['modulename'] = 'Trabajo MUMIE';
$string['modulename_help'] = 'Este módulo de actividades permite el uso del contenido de la plataforma de aprendizaje electrónico MUMIE y la sincronización automática de calificaciones. Una tarea MUMIE representa un problema individual calificado de un curso MUMIE.

¿Qué es MUMIE?

MUMIE es una plataforma de aprendizaje electrónico para el aprendizaje y la enseñanza de matemáticas e informática. Surgió de las necesidades de la enseñanza práctica en la intersección entre la educación secundaria/bachillerato y la universidad. MUMIE es altamente flexible y se integra con otros sistemas de aprendizaje y gestión de contenido. Sus cursos y material de alta calidad se adaptan fácilmente a cualquier escenario pedagógico. Incorpora entornos de aprendizaje y formación con redes sociales específicas de tipo wiki para tutoriales virtuales y aprendizaje autoorganizado que mejoran las habilidades cognitivas y metacognitivas. Potentes herramientas de creación facilitan la producción de nuevo contenido. Esto abre la puerta a nuevos escenarios pedagógicos, desafiantes y más eficientes.<br /><br /> Para más información, visite nuestro <a href="https://www.integral-learning.de" target="_blank" rel="nofollow noreferrer noopener">sitio web</a>.</p>
<p><strong>Características clave de MUMIE Task</strong></p>
<ul>
<li><strong>Usa MUMIE Tasks en Moodle</strong><br /> Agrega cualquier cantidad de MUMIE Tasks a tu curso Moodle con un formulario fácil de usar.</li>
<li><strong>Obtén el contenido más reciente</strong><br /> En cuanto haya nuevo contenido disponible en un servidor MUMIE, podrás usarlo inmediatamente en tus cursos Moodle. ¡No se requieren actualizaciones!</li>
<li><strong>Varios idiomas</strong><br /> La mayoría del contenido en los servidores MUMIE está disponible en varios idiomas. Puedes cambiar el idioma en el que se muestra una tarea de MUMIE para todos los estudiantes con solo un clic.</li>
<li><strong>Sincronización automática de calificaciones</strong><br /> Todas las tareas de MUMIE se califican y sus resultados se agregan automáticamente al libro de calificaciones de Moodle.</li>
<li><strong>Inicio de sesión único y cierre de sesión automático</strong><br /> Los estudiantes no necesitan crear una cuenta nueva ni iniciar sesión en los servidores de MUMIE. El proceso se realiza automáticamente en cuanto comienzan una tarea de MUMIE. Para proteger sus datos, también se cierra la sesión automáticamente en todos los servidores de MUMIE al cerrar sesión en Moodle.</li>
</ul>';
$string['modulenameplural'] = 'Trabajos MUMIE';
$string['mumie:addinstance'] = 'Añadir un nuevo trabajo MUMIE';
$string['mumie:grantduedateextension'] = 'Conceder una prórroga de la fecha de vencimiento a estudiantes individuales';
$string['mumie:overridegrades'] = 'Sobrescribir la calificación de Moodle de un usuario seleccionando un envío de todas las respuestas que ha enviado para esta tarea de MUMIE';
$string['mumie:revokeduedateextension'] = 'Revocar una extensión de fecha de vencimiento concedida previamente para estudiantes individuales';
$string['mumie:viewgrades'] = 'Ver todas las calificaciones de un trabajo MUMIE del curso';
$string['mumie_calendar_duedate_desc'] = 'Los envíos posteriores a esta fecha límite no se utilizarán para la calificación.';
$string['mumie_calendar_duedate_extension'] = 'Fecha de vencimiento extendida: {$a}';
$string['mumie_calendar_duedate_name'] = 'Fecha de vencimiento: {$a}';
$string['mumie_due_date'] = 'Fecha límite';
$string['mumie_due_date_help'] = 'Las calificaciones obtenidas después de la fecha seleccionada no se sincronizarán con Moodle.';
$string['mumie_duedate_extension'] = 'Prórroga de la fecha de vencimiento';
$string['mumie_duedate_form'] = 'Conceder una prórroga de la fecha de vencimiento';
$string['mumie_duedate_not_set'] = '¡No hay una fecha límite general establecida para esta tarea de MUMIE!';
$string['mumie_duration_selector'] = 'Periodo de trabajo';
$string['mumie_duration_selector_help'] = 'Si el período de trabajo es limitado, las calificaciones solo se sincronizan con Moodle después de que finaliza el período.';
$string['mumie_form_activity_container'] = 'Invocar contenedor';
$string['mumie_form_activity_container_embedded'] = 'incrustado';
$string['mumie_form_activity_container_help'] = 'Seleccione si la actividad debe abrirse en una nueva pestaña del navegador o integrarse en Moodle.<br><br>Tenga en cuenta que las tareas de MUMIE incrustadas no se pueden abrir con Safari debido a limitaciones técnicas. Esta tarea de MUMIE se abrirá en una pestaña para los usuarios de Safari.';
$string['mumie_form_activity_container_window'] = 'Nueva ventana';
$string['mumie_form_activity_course'] = 'Curso MUMIE';
$string['mumie_form_activity_header'] = 'General';
$string['mumie_form_activity_language'] = 'Idioma';
$string['mumie_form_activity_language_help'] = 'Por favor seleccione el idioma en el cual debería ser mostrado el trabajo.';
$string['mumie_form_activity_name'] = 'Nombre';
$string['mumie_form_activity_problem'] = 'Problema MUMIE';
$string['mumie_form_activity_problem_help'] = 'Un problema MUMIE es un solo ejercicio calificado en MUMIE. <br><br><b>Nota:</b><br>Al cambiar el problema de un trabajo MUMIE existente se reiniciará el libro de calificaciones.';
$string['mumie_form_activity_server'] = 'Servidor MUMIE';
$string['mumie_form_activity_server_help'] = 'Por favor seleccione un servidor MUMIE para obtener una lista actualizada de cursos y trabajos disponibles.';
$string['mumie_form_add_server_button'] = 'Añadir servidor MUMIE';
$string['mumie_form_already_existing_config'] = 'Ya existe una configuración para este prefijo URL';
$string['mumie_form_already_existing_name'] = 'Ya existe una configuración para este nombre';
$string['mumie_form_cant_change_isgraded'] = 'No puedes cambiar de problemas calificados a no calificados. Por favor cree una nueva tarea MUMIE en su lugar.';
$string['mumie_form_complete_course'] = 'Enlazar todo el curso';
$string['mumie_form_complete_course_help'] = 'El usuario solamente será ingresado y redireccionado a la página de vista general del curso. Las calificaciones <b>no serán</b> be sincronizadas para este trabajo MUMIE.';
$string['mumie_form_coursefile'] = 'Ruta hacia archivo de meta curso MUMIE';
$string['mumie_form_deadline_prohibited_for_worksheet_without_trigger_after_deadline'] = 'La hoja de trabajo seleccionada no puede tener un período de trabajo limitado.<br><br>Si desea limitar el período de trabajo, seleccione una hoja de trabajo con una configuración adecuada.';
$string['mumie_form_deadline_required_for_trigger_after_deadline'] = 'La hoja de trabajo seleccionada requiere un período de trabajo limitado.';
$string['mumie_form_due_date_must_be_future'] = '¡Usted debe seleccionar una fecha en el futuro!';
$string['mumie_form_filter'] = 'Filtrar problemas MUMIE';
$string['mumie_form_grade_pool'] = 'Compartir calificación con otros cursos';
$string['mumie_form_grade_pool_help'] = 'Elegir si desea compartir las calificaciones con otros cursos MOODLE.
<br>Si la opción de compartir está activada, los puntos obtenidos por los problemas de MUMIE en otros cursos se sincronizarán automáticamente con el libro de calificaciones de este curso.
<br>De lo contrario, este curso no podrá importar ni exportar calificaciones.';
$string['mumie_form_grade_pool_note'] = '<b>Nota:</b><br> Esta decisión fue <b>final</b> y afecta a todos los otros trabajos MUMIE en este curso';
$string['mumie_form_grade_pool_warning'] = '<b style="color:red">Advertencia:</b><br> Esta decisión es <b>final</b> y afecta a todos los otros trabajos MUMIE en este curso';
$string['mumie_form_launchcontainer_info'] = 'Las tareas de MUMIE incrustadas tienden a causar problemas en algunos navegadores y sistemas operativos, por lo que recomendamos utilizar el modo Nueva ventana.';
$string['mumie_form_missing_server'] = 'No se pudo encontrar una configuración para el servidor MUMIE que se utiliza en esta tarea.<br><br>
Las propiedades <i>Servidor MUMIE</i>, <i>Curso MUMIE</i>, <i>Problema MUMIE</i> e <i>Idioma</i> están bloqueadas para su edición hasta que se agregue un nuevo servidor MUMIE para el siguiente prefijo de URL:<br><br>';
$string['mumie_form_multi_prb_selector_btn'] = 'Selector de problemas múltiples';
$string['mumie_form_no_course_on_server'] = 'El servidor MUMIE <b>{$a}</b> no está disponible. Se eliminó temporalmente de la selección.';
$string['mumie_form_no_server_conf'] = 'No se encontró ninguna configuración del servidor MUMIE';
$string['mumie_form_points'] = 'Puntos máximos';
$string['mumie_form_points_help'] = 'Por favor ingrese la cantidad máxima de puntos que un estudiante puede obtener por completar la actividad.<br> Las calificaciones son calificadas y actualizadas automáticamente.';
$string['mumie_form_prb_selector_btn'] = 'Selector de problema';
$string['mumie_form_properties'] = 'Propiedades';
$string['mumie_form_required'] = 'necesario';
$string['mumie_form_server_added'] = 'Servidor MUMIE fue añadido';
$string['mumie_form_server_btn_cancel'] = 'Cancelar';
$string['mumie_form_server_btn_submit'] = 'Enviar';
$string['mumie_form_server_config'] = 'Configuración de servidor MUMIE';
$string['mumie_form_server_not_existing'] = 'No hay un servidor MUMIE para esta URL';
$string['mumie_form_task_properties_selection_info'] = 'Seleccione las propiedades de la tarea MUMIE actual para aplicarlas a otras tareas MUMIE.';
$string['mumie_form_tasks_edit'] = 'Aplicarlas a otras tareas MUMIE';
$string['mumie_form_tasks_edit_info'] = 'También puede aplicar algunas de las configuraciones seleccionadas anteriormente de forma automática a otras tareas MUMIE de este curso.';
$string['mumie_form_tasks_selection_info'] = 'Seleccionar las tareas de MUMIE a las que desea aplicar los cambios seleccionados.';
$string['mumie_form_title'] = 'Configurar servidor MUMIE';
$string['mumie_form_topic'] = 'Tópico: {$a}';
$string['mumie_form_updated_selection'] = 'Problema seleccionado correctamente';
$string['mumie_form_wiki_link'] = 'Para obtener ayuda y funciones avanzadas, visita nuestra <a target="_blank" href="https://wiki.mumie.net/wiki/MUMIE-Moodle-integration-for-teachers">Wiki</a>.';
$string['mumie_general_duedate'] = 'Fecha de vencimiento general:';
$string['mumie_general_timelimit'] = 'Límite de tiempo:';
$string['mumie_grade_invalid'] = '¡La calificación es inválida!';
$string['mumie_grade_overridden'] = '¡Se actualizó exitosamente la calificación!';
$string['mumie_grade_percentage'] = 'Calificación en %';
$string['mumie_grading_settings'] = 'Configuraciones de calificación individuales';
$string['mumie_multi_problem_selector'] = 'Alternativamente, también puedes crear varias tareas MUMIE a la vez simplemente mediante el Selector de Problemas Múltiples, arrastrándolas a su curso. <br><br>Para obtener información sobre cómo usar esto, consulta nuestra <a target="_blank" href="{$a}">wiki</a>';
$string['mumie_no_other_task_found'] = 'No se encontraron otras tareas de MUMIE en el curso';
$string['mumie_no_submissions'] = 'Sin respuestas enviadas';
$string['mumie_open_task'] = 'Abrir tarea MUMIE';
$string['mumie_override_gradebook'] = 'Usar en Libro de calificaciones';
$string['mumie_server_name'] = 'Nombre del servidor';
$string['mumie_server_name_help'] = 'Por favor ingrese un nombre único para esta configuración.';
$string['mumie_submission_date'] = 'Enviada en';
$string['mumie_submissions'] = 'Envíos';
$string['mumie_submissions_by'] = 'Envíos por {$a}';
$string['mumie_submissions_info'] = 'Las calificaciones se actualizan automáticamente en el libro de calificaciones de Moodle con la última respuesta enviada dentro de la fecha límite. Si desea usar una entrega diferente, puede hacer clic en el botón correspondiente para sobrescribir la calificación actual.<br><br>
Esta calificación no se reemplazará con nuevos envíos ni se ajustará automáticamente si modifica la puntuación máxima de la tarea MUMIE.';
$string['mumie_tag_disabled'] = 'Deshabilitado';
$string['mumie_tag_disabled_help'] = 'Esta actividad está deshabilitada porque la configuración no está completada. Por favor abra las configuraciones de este trabajo MUMIE.';
$string['mumie_task_updated'] = 'Se ha actualizado una tarea MUMIE adicional';
$string['mumie_tasks_updated'] = 'Se han actualizado {$a} tareas adicionales de MUMIE';
$string['mumie_timelimit'] = 'Límite de tiempo';
$string['mumie_timelimit_help'] = 'La calificación de cada estudiante solo se sincroniza con Moodle una vez vencida su fecha límite. El límite de tiempo comienza a correr en el momento en que el estudiante abre por primera vez una tarea de MUMIE.';
$string['mumie_unlimited'] = 'Ilimitado';
$string['mumie_unlimited_help'] = 'Las calificaciones se pueden sincronizar con Moodle en cualquier momento.';
$string['mumie_url_prefix'] = 'Prefijo URL MUMIE';
$string['mumie_url_prefix_help'] = 'Especificar el prefijo URL MUMIE  <br><br> como por ejemplo <b>https://www.ombplus.de/ombplus</b> <br><br> Solamente puede haber una configuración para cualquier prefijo URL.';
$string['mumieintro'] = 'Descripción de actividad';
$string['name'] = 'Nombre';
$string['nomumieinstance'] = 'No hay instancias MUMIE en este curso';
$string['parameter_missing'] = '¡El archivo subido es incompatible!';
$string['pluginadministration'] = 'Administración MUMIE';
$string['pluginname'] = 'Trabajo MUMIE';
$string['privacy:metadata:mod_mumie_duedate_extensions:duedate'] = 'Marca de tiempo de la extensión de la fecha de vencimiento';
$string['privacy:metadata:mod_mumie_duedate_extensions:mumie'] = 'ID de la tarea MUMIE para la que es la extensión';
$string['privacy:metadata:mod_mumie_duedate_extensions:tableexplanation'] = 'Extensiones de fecha esperada';
$string['privacy:metadata:mod_mumie_duedate_extensions:userid'] = 'ID de usuario al que se concede la extensión';
$string['server_config_missing'] = '<br><br>No se encontró una configuración para el servidor MUMIE que se utiliza en esta tarea. Solicite a su administrador que agregue una configuración de servidor MUMIE para el siguiente prefijo de URL:<br><br><b>{$a}</b>';
