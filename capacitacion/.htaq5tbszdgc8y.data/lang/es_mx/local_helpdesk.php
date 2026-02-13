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
 * Strings for component 'local_helpdesk', language 'es_mx', version '4.4'.
 *
 * @package     local_helpdesk
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Agregar nueva categoría';
$string['addticket'] = 'Añadir ticket';
$string['attachment'] = 'Anexos';
$string['avg_closing_time'] = 'Hora promedio de cierre';
$string['avg_first_response_time'] = 'Hora  promedio de primera respuesta';
$string['cancel'] = 'Cancelar';
$string['categories'] = 'Categorías de ticket';
$string['categorieslist'] = 'Lista de Categorías';
$string['category'] = 'Categoría';
$string['category_role_description'] = 'Rol específico para controlar el acceso de los usuarios a la gestión de Tickets.';
$string['category_users_all'] = 'Todos los usuarios Moodle';
$string['category_users_info'] = 'Primero, guardar la categoría antes de editar los usuarios.';
$string['category_users_responses'] = 'Usuarios que responden a esta categoría';
$string['category_users_title'] = 'Define los usuarios con permiso para responder y quiénes recibirán un correo electrónico sobre nuevos tickets';
$string['categoryadded'] = 'Categoría añadida exitosamente';
$string['categorycreated'] = 'Categoría creada exitosamente';
$string['categorydeleted'] = 'Categoría eliminada exitosamente';
$string['categorydescription'] = 'Descripción de Categoría';
$string['categoryname'] = 'Nombre de Categoría';
$string['categorynotfound'] = 'Categoría no encontrada';
$string['categoryupdated'] = 'Categoría actualizada exitosamente';
$string['comments'] = 'Comentarios';
$string['confirmdelete'] = '¿Está seguro que desea eliminar esta categoría?';
$string['confirmdeletecategory'] = '¿Está seguro que desea eliminar esta categoría?';
$string['createcategory'] = 'Crear Categoría';
$string['createcategoryfirst'] = 'Primero, crear una categoría';
$string['createticket'] = 'Crear Ticket';
$string['deletecategory'] = 'Eliminar Categoría';
$string['deletecategoryusedata'] = 'Esta categoría tiene datos';
$string['deletesuccesscategory'] = 'Categoría eliminada exitosamente';
$string['description'] = 'Descripción';
$string['editcategory'] = 'Editar categoría';
$string['editticket'] = 'Editar Ticket';
$string['error:emptyname'] = 'El nombre d ela categoría no puede estar vacío';
$string['erroraddcategory'] = 'Error al añadir categoría';
$string['errordeletecategory'] = 'Error al eliminar categoría';
$string['errorinsertingcategory'] = 'Error al añadir categoría';
$string['errorinsertingticket'] = 'Error al insertar ticket';
$string['errorupdatecategory'] = 'Error al actualizar categoría';
$string['errorupdatingcategory'] = 'Error al actualizar categoría';
$string['errorupdatingticket'] = 'Error al actualizar ticket';
$string['findcourse'] = 'Seleccionar un Curso';
$string['findticket'] = 'Buscar en asunto y en texto';
$string['finduser'] = 'Seleccionar un Usuario';
$string['geniai_btn_knowledgebase_create'] = 'Crea una base de conocimientos con IA';
$string['geniai_btn_response_create'] = 'Crea una respuesta con IA';
$string['geniai_create_knowledgebase_desc'] = 'Describe detalladamente el contenido que quiere generar. GeniAI utilizará esta información para crear un texto preciso y relevante para su base de conocimientos.';
$string['geniai_create_knowledgebase_message'] = 'Crear un mensaje basado en el texto anterior.';
$string['geniai_create_response_desc'] = 'Describir lo que quiere generar. GeniAI usará todas las conversaciones como base para crear una respuesta, pero usted debe definir qué datos quiere escribir.';
$string['geniai_create_response_message'] = 'Crea un mensaje basado en el texto anterior.';
$string['geniai_knowledgebase_prompt'] = 'Eres un chatbot especializado en la creación de bases de conocimiento para Moodle. Tu objetivo es generar contenido claro, bien estructurado y atractivo con un tono profesional y persuasivo en primera persona. Cada respuesta debe ser detallada y exhaustiva, garantizando que cualquier usuario pueda comprender fácilmente la información proporcionada.

Ahora, crea un artículo de base de conocimiento sobre:
Nombre de Moodle: "{$a->site_fullname}"
URL de Moodle: "{$a->site_url}"
"{$a->message}"

Devuelve solo en el idioma "{$a->userlang}", sin títulos y solo en formato MARKDOWN.';
$string['geniai_like_message'] = '¿Le gustó el mensaje? Haga clic aquí para cerrarlo y enviarlo al editor.';
$string['geniai_missing'] = 'Instalr y configurar el plugin <a href="{$a}" target="_blank">GenIA</a> para habilitar respuestas impulsadas por IA.';
$string['geniai_ticket_prompt_1'] = 'Eres un chatbot que sugiere respuestas a tickets de Moodle para resolver problemas de cursos o Moodle de forma amena, dinámica y directa.
Te encanta responder con mensajes inspiradores, evitando listas y ofreciendo explicaciones detalladas, prestando mucha atención a los detalles.

Pregunta del usuario {$a->userfullname}: "{$a->userticket}"

Ahora, crea una respuesta que explique cómo resolver el siguiente problema siguiendo las instrucciones proporcionadas por Soporte:
"{$a->message}"

Devuelve solo en el idioma "{$a->userlang}" y en formato MARKDOWN.';
$string['geniai_ticket_prompt_2'] = 'Eres un chatbot que sugiere respuestas a tickets de Moodle para resolver problemas de cursos o Moodle de forma amena, dinámica y directa.
Te encanta responder con mensajes inspiradores, evitar listas y ofrecer explicaciones detalladas, prestando mucha atención a los detalles.

Ahora, crea una respuesta que explique cómo resolver el siguiente problema:

Pregunta del usuario {$a->userfullname}: "{$a->userticket}"';
$string['geniai_ticket_prompt_3'] = 'Eres un chatbot que sugiere respuestas a tickets de Moodle para resolver problemas de cursos o Moodle de forma amena, dinámica y directa.
Te encanta responder con mensajes inspiradores, evitando listas y ofreciendo explicaciones detalladas, prestando mucha atención a los detalles.

Ahora, basándose en este historial, crea una respuesta siguiendo las instrucciones de Soporte:
"{$a->message}"

Devuelve solo en el idioma "{$a->userlang}" y en solo en formato MARKDOWN.';
$string['geniai_ticket_prompt_4'] = 'Eres un chatbot que sugiere respuestas a tickets de Moodle para resolver problemas de cursos o Moodle de forma amena, dinámica y directa.
Te encanta responder con mensajes inspiradores, evitar listas y ofrecer explicaciones detalladas, prestando mucha atención a los detalles.

Ahora, basándote en este historial, crea una respuesta y devuélvala solo en el idioma "{$a->userlang}" y solo en formato MARKDOWN.';
$string['geniai_title'] = 'Inteligencia Artificial';
$string['helpdesk:categorydelete'] = 'Permite eliminar categorías.';
$string['helpdesk:categorymanage'] = 'Permite gestionar las categorías del Helpdesk';
$string['helpdesk:knowledgebase_delete'] = 'Eliminar artículos en la base de conocimientos';
$string['helpdesk:knowledgebase_manage'] = 'Gestionar artículos en la base de conocimientos';
$string['helpdesk:knowledgebase_view'] = 'Ver artículos en la base de conocimientos';
$string['helpdesk:ticketmanage'] = 'Permite administrar ela mesa de Ayuda, incluyendo responder y cerrar tickets.';
$string['helpdesk:view'] = 'Permite visualizar los tickets de la mesa de ayuda y crearlos por uno mismo.';
$string['helpdesk_manage_users'] = 'Ver usuarios con permiso para administrar esta categoría de rol';
$string['index_top_all_open_tickets'] = 'Todos los Tickets Abiertos';
$string['index_top_completed_tickets'] = 'Tickets Completados';
$string['index_top_unanswered_tickets'] = 'Tickets Sin Contestar';
$string['index_top_urgent_tickets'] = 'Tickets Urgentes';
$string['integracaoroot'] = 'Integración';
$string['invalidpriority'] = 'Prioridad seleccionada no válida.';
$string['knowledgebase_addnew'] = 'Añadir nueva base de conocimiento';
$string['knowledgebase_articlenotfound'] = 'Base de conocimiento no encontrada';
$string['knowledgebase_category'] = 'Categoría';
$string['knowledgebase_create'] = 'Crear base de categoría';
$string['knowledgebase_delete'] = 'Eliminar base de conocimiento';
$string['knowledgebase_delete_confirm'] = '¿Está seguro de que desea eliminar la base de conocimientos <strong>{$a}</strong>?';
$string['knowledgebase_delete_success'] = 'Base de conocimientos eliminada correctamente';
$string['knowledgebase_description'] = 'Contenido de conocimiento';
$string['knowledgebase_edit'] = 'Editar base de conocimiento';
$string['knowledgebase_name'] = 'Base de conocimiento';
$string['knowledgebase_prompt_short'] = 'Prompt demasiado corto';
$string['knowledgebase_title'] = 'Título de conocimiento';
$string['knowledgebase_update'] = 'Actualizar';
$string['lognewcategory'] = '¡Categoría cambiada a <strong>{$a}</strong>!';
$string['lognewpriority'] = '¡Prioridad cambiada a <strong>{$a}</strong>!';
$string['lognewstatus'] = '¡Estado cambiado a <strong>{$a}</strong>!';
$string['lognowupdate'] = '¡No se hicieron cambios!';
$string['mailticket_create_message'] = '<p><strong>{[moodle.fullname]}</strong> >> <strong>{[event.helpdesk]}</strong> >> <strong>{[event.categorylink]}</strong> >> <strong>{[event.subjectlink]}</strong> - Ticket <strong>#{[event.tiketidlink]}</strong></p>
<p>Estimado/a {[to.fullname]}:</p>
<p>{[from.fullname]} ha creado el ticket #{[event.tiketidlink]}:</p>
<blockquote style="border-left: 4px solid #9E9E9E;padding-left: 7px;">
{[event.text]}
{[event.attachment]}
</blockquote>
<p>Atentamente,<br>
Equipo de Soporte</p>';
$string['mailticket_subject'] = '{[event.subjectname]} - Ticket: #{[event.tiketidname]}';
$string['mailticket_update_message'] = '<p><strong>{[moodle.fullname]}</strong> >> <strong>{[event.helpdesk]}</strong> >> <strong>{[event.categorylink]}</strong> >> <strong>{[event.subjectlink]}</strong> - Ticket <strong>#{[event.tiketidlink]}</strong></p>
<p>Estimado/a {[to.fullname]}:</p>
<p>Nuestro equipo ha revisado su caso y ha añadido nueva información:</p>
<blockquote style="border-left: 4px solid #9E9E9E;padding-left: 7px;">
{[event.text]}
{[event.attachment]}
</blockquote>
<p>Acceda al ticket n.° {[event.tiketidlink]} para ver la actualización y proporcionar información adicional si es necesario. Estamos disponibles para seguir ayudándole y resolver su solicitud lo antes posible. Atentamente,<br>
Equipo de Soporte</p>';
$string['mailticket_user_message'] = '<p><strong>{[moodle.fullname]}</strong> >> <strong>{[event.tiketidlink]}</strong> >> <strong>{[event.categorylink]}</strong> >> <strong>{[event.subjectlink]}</strong> - Ticket <strong>#{[event.tiketidlink]}</strong></p>
<p>Estimado/a {[to.fullname]}:</p>
<p>Hemos recibido su solicitud:</p>
<blockquote style="border-left: 4px solid #9E9E9E;padding-left: 7px;">
{[event.text]}
{[event.attachment]}
</blockquote>
<p>Si aún no lo ha hecho, puede agregar más detalles a su ticket #{[event.tiketidlink]}, como registros, mensajes de error, capturas de pantalla, descripciones paso a paso o pasos de replicación que Puede ayudar al agente de soporte a brindarle una asistencia más eficaz.</p>
<p>Nuestro equipo está analizando su problema y le dará seguimiento según sea necesario. Agradecemos su paciencia y comprensión.</p>
<p>Atentamente,<br>
Equipo de Soporte</p>';
$string['markticketasclosed'] = 'Marcar ticket como Cerrado';
$string['markticketasresolved'] = 'Marcar ticket como Resuelto';
$string['pluginname'] = 'Helpdesk (Mesa de Ayuda)';
$string['priority'] = 'Prioridad';
$string['priority_high'] = 'Alta';
$string['priority_low'] = 'Baja';
$string['priority_medium'] = 'Media';
$string['priority_urgent'] = 'Urgente';
$string['privacy:metadata:category_user_userid'] = 'Identificador único del usuario asignado a una categoría específica dentro del sistema de tickets de soporte.';
$string['privacy:metadata:local_helpdesk_category_user'] = 'Información sobre los usuarios asignados a categorías de tickets para fines organizativos y de gestión.';
$string['privacy:metadata:local_helpdesk_response'] = 'Información sobre las respuestas proporcionadas a los tickets, incluido el contenido de la respuesta y el usuario responsable de la misma.';
$string['privacy:metadata:local_helpdesk_ticket'] = 'Información sobre los tickets creados en el sistema, incluidos datos del usuario, categoría, estado e historial de respuestas.';
$string['privacy:metadata:response_userid'] = 'Identificador único del usuario que proporcionó una respuesta a un ticket dentro del sistema de mesa de ayuda.';
$string['privacy:metadata:ticket_userid'] = 'Identificador único del usuario que creó o gestionó un ticket en el sistema de soporte técnico';
$string['replytoticket'] = 'Responder al ticket';
$string['report_assignment_reports_page_description'] = 'Reporte sobre la distribución de tickets y el desempeño de los agentes asignados.';
$string['report_assignment_reports_page_title'] = 'Reportes de Tareas';
$string['report_assignment_reports_tickets_by_agent_cat_title'] = 'Tickets por Agente';
$string['report_category_reports_most_demanded_categories_cat_title'] = 'Categorías más demandadas';
$string['report_category_reports_page_description'] = 'Informe sobre categorías de tickets, ayudando a identificar las áreas de soporte más frecuentes y los problemas comunes.';
$string['report_category_reports_page_title'] = 'Reportes por Categoría';
$string['report_general_reports_avg_resolution_time_avg_resolution_time_hours'] = 'Tiempo promedio de respuesta';
$string['report_general_reports_avg_resolution_time_total_tickets'] = 'Total de tickets';
$string['report_general_reports_page_title'] = 'Reportes Generales';
$string['report_general_reports_tickets_created_by_period_cat_title'] = 'Tickets Creados por Período';
$string['report_general_reports_tickets_created_by_period_data_criacao'] = 'Fecha de creación';
$string['report_general_reports_tickets_created_by_period_total_tickets'] = 'Total de tickets';
$string['report_general_reports_tickets_resolved_by_period_cat_title'] = 'Tickets resueltos por Período';
$string['report_general_reports_tickets_resolved_by_period_period'] = 'Período';
$string['report_general_reports_tickets_resolved_by_period_total_resolved'] = 'Total de ticket resueltos';
$string['report_response_reports_avg_responses_per_ticket_media_respostas_por_ticket'] = 'Respuestas promedio';
$string['report_response_reports_page_description'] = 'Informe sobre las respuestas proporcionadas a los tickets, incluido el tiempo de respuesta y las interacciones del agente.';
$string['report_response_reports_page_title'] = 'Reportes de Respuesta';
$string['report_status_priority_reports_page_description'] = 'Reporte sobre el estado y la prioridad de los tickets, incluidos datos sobre tickets abiertos, en progreso, resueltos y cerrados.';
$string['report_status_priority_reports_page_title'] = 'Reportes de estado y prioridad';
$string['report_status_priority_reports_priority_distribution_cat_title'] = 'Distribución por Prioridad';
$string['report_status_priority_reports_tickets_by_status_cat_title'] = 'Tickets por Estado';
$string['report_tickets_reports_page_description'] = 'El informe de tickets muestra los tickets abiertos y cerrados, ofreciendo una visión general del rendimiento del sistema de atención al cliente.';
$string['report_tickets_reports_page_title'] = 'Tickets';
$string['report_user_reports_avg_response_time_by_user_userid'] = 'ID del usuario';
$string['report_user_reports_page_description'] = 'Informe sobre los usuarios que crearon más tickets, incluidos datos sobre la cantidad de tickets y el tiempo de respuesta asociado.';
$string['report_user_reports_page_title'] = 'Reported de Usuarios';
$string['report_user_reports_users_with_most_tickets_open_cat_title'] = 'Usuarios con más tickets abiertos';
$string['savecategory'] = 'Guardar Categoría';
$string['savechanges'] = 'Guardar Cambios';
$string['setting_course'] = 'Mostrar solo adentro de cursos';
$string['setting_knowledgebase_menu_description'] = 'Habilitar esta opción para mostrar el enlace de la base de conocimientos en el menú de navegación.';
$string['setting_knowledgebase_menu_title'] = 'Mostrar la Base de Conocimientos en el menú';
$string['setting_menu_description'] = 'Seleccione si desea o no mostrar el menú HelpDesk en el menú del sistema en la parte superior de Moodle.';
$string['setting_menu_title'] = 'Mostrar en menú';
$string['setting_none'] = 'No mostrar';
$string['setting_system'] = 'Mostrar en todo el sistema';
$string['status'] = 'Estado';
$string['status_all'] = 'Todos los Tickets';
$string['status_closed'] = 'Cerrado';
$string['status_open'] = 'Abierto';
$string['status_progress'] = 'En Progreso';
$string['status_resolved'] = 'Resuelto';
$string['subject'] = 'Asunto';
$string['ticketcategory'] = 'Categoría del Ticket';
$string['ticketcategoryshort'] = 'Categoría';
$string['ticketclosed'] = 'El ticket está cerrado.';
$string['ticketcreated'] = 'Ticket creado exitosamente';
$string['ticketcreatedat'] = 'Creado en';
$string['ticketdescription'] = 'Descripción detallada del Ticket';
$string['ticketid'] = 'Ticket';
$string['ticketmessage'] = 'Mensaje';
$string['ticketnotfound'] = 'Ticket no encontrado';
$string['ticketpriority'] = 'Prioridad del Ticket';
$string['ticketpriorityhigh'] = 'Alta';
$string['ticketprioritylow'] = 'Baja';
$string['ticketprioritymedium'] = 'Media';
$string['ticketpriorityshort'] = 'Prioridad';
$string['ticketpriorityurgent'] = 'Urgente';
$string['ticketresponse'] = 'Responder al ticket';
$string['ticketresponseandclose'] = 'Responder al ticket y hacerlo Cerrado';
$string['ticketresponseandresolved'] = 'Responder al ticket y hacerlo Resuelto';
$string['tickets'] = 'Todos los Tickets';
$string['ticketslist'] = 'Lista de Tickets';
$string['ticketstatus'] = 'Estado del Ticket';
$string['ticketstatusclosed'] = 'Cerrado';
$string['ticketstatusinprogress'] = 'En Progreso';
$string['ticketstatusnotclosed'] = 'Todos excepto Cerrados';
$string['ticketstatusopen'] = 'Abierto';
$string['ticketstatusresolved'] = 'Resuelto';
$string['ticketstatusshort'] = 'Estado';
$string['ticketsubject'] = 'Asunto del Ticket';
$string['ticketupdated'] = 'Ticket actualizado exitosamente';
$string['updatecategory'] = 'Actualizar Categoría';
$string['userid'] = 'ID del usuario';
$string['viewticket'] = 'Ver Ticket';
