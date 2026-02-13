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
 * Strings for component 'block_quickmail', language 'es_mx', version '4.4'.
 *
 * @package     block_quickmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['additional_emails'] = 'Emails adicionales';
$string['additional_emails_help'] = 'Otras direcciones de Email que a Usted le gustaría que se enviara el mensaje, en una lista separada por comas o punto_y_comas. Por ejemplo:

email1@ejemplo.com, email2@ejemplo.com';
$string['additionalemail'] = 'Permitir correos electrónicos a direcciones de correo electrónico externas';
$string['additionalemail_desc'] = 'Si esta opción está habilitada, el remitente tendrá la capacidad de enviar mensajes a correos electrónicos adicionales fuera de Moodle';
$string['all_in_course'] = 'Todos en el curso';
$string['allow_mentor_copy'] = 'Permitir que los remitentes envíen mensajes automáticamente a los mentores de un destinatario al enviar';
$string['allow_mentor_copy_help'] = 'En caso negativo, esta opción no será visible para los remitentes y los mentores nunca serán copiados. En caso afirmativo, el remitente tendrá la opción de elegir por mensaje. Si se fuerza, esta opción se forzará sin opción para anular la selección.';
$string['allowstudents'] = 'Permitirles a los estudiantes usar Quickmail';
$string['allowstudents_desc'] = 'Permitir que los estudiantes utilicen Quickmail. Si elige "Nunca", el bloque no se puede configurar para permitir el acceso de los estudiantes a nivel del curso.';
$string['alternate'] = 'Email alterno';
$string['alternate_activated'] = '¡Ahora puede ser usado el Email alterno {$a}!';
$string['alternate_already_confirmed'] = 'Ese Email ya ha sido confirmado.';
$string['alternate_availability'] = '¿Quién puede enviar desde este Email?';
$string['alternate_availability_course'] = 'Todos los roles permitidos en {$a->courseshortname}';
$string['alternate_availability_only'] = 'Solo yo, en {$a->courseshortname} solamente';
$string['alternate_availability_user'] = 'Solo yo, en cualquier curso';
$string['alternate_body'] = '<p>
{$a->fullname} añadido {$a->address} como una dirección de envío alterna para {$a->course}.
</p>

<p>
El propósito de este Email era para verificar que esta dirección existe, y que el propietario de esta dirección tiene los permisos apropiados en Moodle.
</p>.

<p>
Si Usted desea completar el proceso de verificación; por favor, continúe re-dirigiendo su navegador de Internet a la URL siguiente: {$a->url}.
</p>

<p>
Si la descripción de este Email no tiene sentido para Usted, entonces puede que Usted haya recibido este Email por error. Simplemente descarte este mensaje.
</p>

Gracias..';
$string['alternate_confirmation_email_resent'] = '¡El Email de confirmación ha sido re-enciado!';
$string['alternate_confirmed'] = 'Confirmado';
$string['alternate_created'] = '¡El correo electrónico de envío alternativo se creó correctamente!';
$string['alternate_delete'] = 'Eliminar Dirección Alterna';
$string['alternate_delete_confirm'] = 'Esto eliminará permanentemente su Email alterno. ¿Está seguro?';
$string['alternate_deleted'] = 'Su correo electrónico de envío alternativo ha sido eliminado.';
$string['alternate_email_not_found'] = 'No se pudo encontrar ese correo electrónico alternativo.';
$string['alternate_invalid_token'] = 'Token de confirmación inválido';
$string['alternate_new'] = 'Añadir Dirección Alterna';
$string['alternate_owner_must_confirm'] = 'Debe ser el propietario del Email para confirmar.';
$string['alternate_owner_must_delete'] = 'Debe ser el propietario del Email para eliminar.';
$string['alternate_resend_confirmation'] = 'Re-enviar Email para confirmar';
$string['alternate_subject'] = 'Verificación de Dirección de Email Alterna';
$string['alternate_waiting'] = 'Esperando';
$string['altsendfrom'] = 'Permitir correos electrónicos alternativos';
$string['altsendfrom_desc'] = 'Permitir correos electrónicos alternativos (necesita un cambio fundamental para esto).';
$string['attached_files'] = 'Archivos Anexos ({$a})';
$string['attachments'] = 'Anexos';
$string['back_to_course'] = 'Regresar al curso';
$string['back_to_mypage'] = 'Regresar a Mi página';
$string['backup_block_configuration'] = 'Respaldar ajustes de configuraciones de Nivel de Bloque de Quickmail  (Como por ejemplo [Allow Students to use Quickmail])';
$string['backup_history'] = 'Incluir Historia Quickmail';
$string['block_quickmail_context_freezing_readonly_access_title'] = 'Opciones para Congelamiento de Contexto';
$string['body'] = 'Cuerpo';
$string['broadcast'] = 'Redactar mensaje de administrador';
$string['cachedef_qm_controller_store'] = 'Almacén de caché para instancias de controlador.';
$string['cachedef_qm_event_notif_last_fired_at'] = 'Almacén en caché para las marcas de tiempo de la última vez que se activó la notificación del evento.';
$string['cachedef_qm_msg_addl_email_count'] = 'Recuentos de correo electrónico adicionales de mensajes en caché.';
$string['cachedef_qm_msg_attach_count'] = 'Recuentos de archivos adjuntos de mensajes en caché.';
$string['cachedef_qm_msg_deliv_count'] = 'Recuentos de mensajes entregados en caché.';
$string['cachedef_qm_msg_recip_count'] = 'Recuento de destinatarios de mensaje en caché.';
$string['compose'] = 'Redactar mensaje del curso';
$string['condition_grade_greater_than'] = 'Calificación mayor de';
$string['condition_grade_less_than'] = 'Calificación menor de';
$string['condition_summary_reminder_course_grade_range'] = 'Todos los que tengan una calificación entre {$a->grade_greater_than} y {$a->grade_less_than}';
$string['condition_summary_reminder_course_non_participation'] = 'Todos los que no han accedido al curso en {$a->time_amount} {$a->time_unit}';
$string['could_not_duplicate'] = 'No se pudo duplicar este borrador. Inténtelo de nuevo.';
$string['course_required'] = 'Se requiere un curso.';
$string['coursealternate_not_allowed'] = 'No puede compartir este correo electrónico alternativo en este curso.';
$string['courseferpa'] = 'Respetar Modo del Curso';
$string['courseneveraccessed'] = 'Nunca accesado';
$string['create_new'] = 'Crear Nuevo';
$string['create_notification'] = 'Crear Notificación';
$string['create_notification_message'] = 'Crear Mensaje de Notificación {$a->model} {$a->type}.';
$string['create_notification_message_description'] = 'Ahora cree el mensaje que desea que se le envíe cuando se envíe esta notificación.';
$string['created'] = 'Creado';
$string['critical_error'] = 'Error crítico';
$string['default_message_type'] = 'Método preferido para enviar mensaje';
$string['default_message_type_configuration'] = 'Esta configuración será el método de envío predeterminado para cualquiera que redacte un mensaje en este curso. El remitente podrá anular la redacción del mensaje.';
$string['default_message_type_configuration_help'] = 'Esta configuración será el método de envío predeterminado para cualquiera que redacte un mensaje en este curso. El remitente podrá anular la redacción del mensaje.';
$string['default_message_type_desc'] = 'Envíe sus mensajes como Mensajes Moodle o correo electrónico tradicional.';
$string['delete_draft_confirm_message'] = 'Esto eliminará permanentemente su borrador de mensaje, ¿está seguro?';
$string['delete_draft_modal_title'] = 'Eliminar borrador del mensaje';
$string['delete_signature'] = 'Eliminar Firma';
$string['delete_signature_confirm_message'] = 'Esto eliminará permanentemente su firma, ¿está seguro?';
$string['delete_signature_modal_title'] = 'Eliminar Firma';
$string['deleted'] = 'Eliminado';
$string['download_file_content'] = 'Descargar Contenido de archivo';
$string['downloads'] = 'Requerir ingresar para anexos';
$string['downloads_desc'] = 'Esta configuración determina si los anexos están disponibles solamente para usuarios ingresados a Moodle';
$string['draft_no_record'] = 'No se pudo encontrar ese borrador del mensaje.';
$string['drafted'] = 'Redactado';
$string['drafts'] = 'Borradores';
$string['duplicate'] = 'Duplicar';
$string['duplicate_draft_confirm_message'] = 'Esto hará una copia del borrador. ¿Está usted seguro?';
$string['duplicate_draft_modal_title'] = 'Duplicar Borrador del Mensaje';
$string['edit'] = 'Editar';
$string['edit_conditions'] = 'Editar Condiciones';
$string['edit_event_details'] = 'Editar Detalles del Evento';
$string['edit_message'] = 'Editar Mensaje';
$string['edit_messages'] = 'Editar Mensajes';
$string['edit_notification'] = 'Editar Notificaciones';
$string['edit_schedule'] = 'Editar Agenda';
$string['email_profile_fields'] = 'Campos de perfil de correo electrónico';
$string['email_profile_fields_desc'] = 'Estos campos de perfil se enviarán automáticamente por correo electrónico si están configurados para el usuario destinatario.';
$string['enable_notification'] = 'Habilitar Notificación';
$string['eventalternateemailadded'] = 'Email alternativo añadido';
$string['eventalternateemailadded_desc'] = 'El usuario con ID {$a->user_id} ha agregado un correo electrónico alternativo: {$a->email}';
$string['excluded_ids_label'] = 'Excluir';
$string['excluded_recipients_desc'] = '¿Quienes NO deberían recibir este mensaje?';
$string['failed_recipients'] = 'Destinatarios fallidos o pendientes';
$string['failed_recipients_promise'] = 'Continuaremos intentando enviar a estos destinatarios hasta que el mensaje se haya enviado correctamente.';
$string['ferpa'] = 'Modo FERPA (Family Educational Rights and Privacy Act)';
$string['ferpa_desc'] = 'Le permite al sistema comportarse, ya sea de acuerdo a la configuración del curso para modo_de_grupo, ignorando la configuración para modo_de_grupo, o ignorando por completo los grupos.';
$string['found_filtered_users'] = 'Se encontró a {$a} usuario(s)';
$string['from'] = 'De';
$string['from_email'] = 'Dirección Email del remitente';
$string['from_email_help'] = 'La dirección de correo electrónico desde la que se enviará este mensaje. Puede agregar direcciones alternativas adicionales a través del menú de bloqueo en la página del curso.';
$string['frozen_readonly_pages'] = 'Acceso de Página para Roles';
$string['frozen_readonly_pages_desc'] = 'Cuando el contexto esté congelado, estas páginas tendrán acceso de solo lectura desde los roles de arriba.';
$string['here'] = 'aquí';
$string['included_ids_label'] = 'Para';
$string['included_recipients_desc'] = '¿Quién debería recibir este mensaje?';
$string['invalid_additional_email'] = 'El correo electrónico adicional "{$a}" introducido no es válido';
$string['invalid_additional_emails_validation'] = 'Algunos de los correos electrónicos adicionales que ingresó no eran válidos.';
$string['invalid_availability'] = 'Valor de disponibilidad inválido.';
$string['invalid_condition_grade_greater_than'] = 'Valor de calificación mayor de inválido';
$string['invalid_condition_grade_less_than'] = 'Valor de calificación menor de inválido';
$string['invalid_condition_time_amount'] = 'Cantidad inválida de condición de cantidad de tiempo.';
$string['invalid_condition_time_unit'] = 'Unidad inválida para condición de tiempo.';
$string['invalid_custom_data_delimiters'] = 'Los códigos de sustitución del cuerpo del mensaje no están formateados correctamente.';
$string['invalid_custom_data_key'] = 'Clave personalizada de datos "{$a}" no está permitida.';
$string['invalid_custom_data_not_allowed'] = 'No se permiten códigos de sustitución personalizados para este mensaje.';
$string['invalid_email'] = 'Dirección Email inválida';
$string['invalid_notification_model'] = 'Selección de modelo de notificación no válida.';
$string['invalid_notification_type'] = 'El tipo de notificación debe ser "Recordatorio" o "Evento".';
$string['invalid_schedule_time_amount'] = 'Cantidad de tiempo no válida para la programación.';
$string['invalid_schedule_time_unit'] = 'Unidad de tiempo no válida para la programación.';
$string['invalid_send_method'] = 'Ese método de envío no está permitido.';
$string['invalid_time_amount'] = 'Cantidad de tiempo inválida.';
$string['invalid_time_relation'] = 'Debe ser "antes de" o "después de".';
$string['invalid_time_unit'] = 'Unidad de tiempo inválida.';
$string['is_enabled'] = 'Habilitado';
$string['last_run_at'] = 'Última ejecución';
$string['last_updated'] = 'Última actualización';
$string['manage_alternates'] = 'Emails alternos';
$string['manage_drafts'] = 'Ver borradores';
$string['manage_signatures'] = 'Mis Firmas';
$string['mentor_copy'] = '¿Enviar copias a los mentores de los destinatarios?';
$string['mentor_copy_help'] = 'Si es seleccionado, cualquier mentor de sus destinatarios recibirá una copia del mensaje.';
$string['mentor_copy_message_prefix'] = '<p><strong>Estás recibiendo este mensaje porque estás asignado como mentor de</strong>: {$a}. La siguiente es una copia del mensaje que también se envió a su aprendiz.</p>';
$string['mentor_copy_subject_prefix'] = '[Copia del mentor]';
$string['mentors_copied'] = 'Enviar copias a mentores';
$string['message_deleted'] = 'Mensaje eliminado';
$string['message_details'] = 'Detalles del Mensaje';
$string['message_no_record'] = 'No se pudo encontrar ese mensaje';
$string['message_not_found'] = 'No se pudo encontrar ese mensaje';
$string['message_preview'] = 'Vista previa del Mensaje';
$string['message_queued'] = 'Mensaje agenddo para ser enviado';
$string['message_sent_asap'] = 'El mensaje será enviado pronto';
$string['message_sent_now'] = 'Mensaje enviado';
$string['message_type'] = 'Enviar mensajes Quickmail como';
$string['message_type_available_all'] = 'Sin restricciones, preferencia del remitente';
$string['message_type_available_email'] = 'Restringir a solo Email tradicional';
$string['message_type_available_message'] = 'Restringir a solo mensajes Moodle';
$string['message_type_desc'] = 'Permite enviar mensajes de Quickmail como mensaje de Moodle, correo electrónico tradicional o preferencia del remitente.';
$string['message_type_email'] = 'Email';
$string['message_type_message'] = 'Mensaje Moodle';
$string['message_types_available'] = 'Restricciones de tipo de mensaje';
$string['message_types_available_desc'] = 'Restrinja los mensajes de Quickmail para que se envíen como mensajes de Moodle, correos electrónicos tradicionales o preferencias del remitente.';
$string['message_unqueued'] = 'Mensaje NO agendado';
$string['messageprovider:quickmessage'] = 'Mensaje Quickmail';
$string['migrate'] = 'Migrar Datos';
$string['migrate_legacy_data_task'] = 'Migrar datos históricos de Quickmail v1 a v2';
$string['migration_chunk_size'] = 'Tamaño del fragmento de migración';
$string['migration_chunk_size_desc'] = 'Número de registros que debe procesar la tarea de migración de datos heredados cada vez que se ejecuta, si está habilitada.';
$string['missing_body'] = 'Cuerpo del mensaje faltante.';
$string['missing_email'] = 'Dirección Email faltante';
$string['missing_firstname'] = 'Nombre faltante.';
$string['missing_lastname'] = 'Apellido(s) faltante';
$string['missing_notification_name'] = 'Nombre de notificación faltante';
$string['missing_subject'] = 'Línea de asunto faltante.';
$string['ms_alternate'] = 'Emails alternos';
$string['ms_compose'] = 'Componer';
$string['ms_config'] = 'Configurar';
$string['ms_create_notification'] = 'Crear Notificación';
$string['ms_drafts'] = 'Borradores';
$string['ms_notifications'] = 'Notificaciones';
$string['ms_queued'] = 'Agendado';
$string['ms_sent'] = 'Enviar Emails';
$string['ms_signatures'] = 'Mis Firmas';
$string['must_be_draft_to_duplicate'] = 'El mensaje debe ser borrador para duplicarlo.';
$string['must_be_owner_to_duplicate'] = 'Lo sentimos, ese borrador no le pertenece y no se puede duplicar.';
$string['mute_time_summary'] = 'Tiempo de silencio';
$string['mute_time_unit'] = 'Tiempo de silencio';
$string['mute_time_unit_help'] = 'Una cantidad de tiempo opcional que debe transcurrir entre el envío automático de esta notificación.';
$string['never'] = 'Nunca';
$string['next_run_at'] = 'Siguiente ejecución';
$string['no_alternates'] = 'Usted no tiene Emails alternos. ¡Cree uno ahorita mismo!';
$string['no_drafts'] = 'Usted no tiene borradores de mensaje.';
$string['no_excluded_recipients'] = 'Sin destinatarios excluidos';
$string['no_included_recipients'] = 'Sin destinatarios incluidos';
$string['no_included_recipients_validation'] = 'Usted debe seleccionar al menos un destinatario.';
$string['no_notifications'] = 'Usted no ha creado notificaciones.';
$string['no_queued'] = 'Usted no tiene mensajes agendados.';
$string['no_sents'] = 'Usted no tiene historia de mensajes enviados.';
$string['no_signatures_create'] = 'Usted no tiene firmas. {$a}.';
$string['noferpa'] = 'Sin Respeto a Grupo';
$string['notification_already_sent'] = 'Esta notificación ya había sido enviada al menos una vez.';
$string['notification_conditions'] = 'Condiciones';
$string['notification_conditions_description'] = 'Especifique las condiciones de estas notificaciones. Se notificará a todos los destinatarios que cumplan estas condiciones.';
$string['notification_created'] = 'Notificación creada.';
$string['notification_deleted'] = 'Notificación eliminada.';
$string['notification_is_enabled'] = 'Notificación Habilitada';
$string['notification_is_enabled_help'] = 'Si está habilitada, esta notificación estará activa; de lo contrario, la notificación estará deshabilitada hasta que la habilite.';
$string['notification_model'] = 'Modelo de Notificación';
$string['notification_model_event_course_entered'] = 'Curso Ingresado';
$string['notification_model_event_course_entered_description'] = 'Notificar a un participante del curso cuando acceda al curso por primera vez.';
$string['notification_model_reminder_course_grade_range'] = 'Rango de Calificación del Curso';
$string['notification_model_reminder_course_grade_range_condition_description'] = 'Especifique el rango de calificaciones. Si un participante del curso se encuentra actualmente dentro de este rango, se le notificará.';
$string['notification_model_reminder_course_grade_range_description'] = 'Notificar a los participantes del curso que actualmente tienen una calificación dentro del rango dado.';
$string['notification_model_reminder_course_non_participation'] = 'NO-Participación en el Curso';
$string['notification_model_reminder_course_non_participation_condition_description'] = 'Especifique la cantidad de tiempo desde el último acceso al curso. Si un participante del curso no ha accedido al curso en este período de tiempo, se le notificará.';
$string['notification_model_reminder_course_non_participation_description'] = 'Notificar a los participantes que no hayan accedido al curso en una cantidad dada de tiempo.';
$string['notification_name'] = 'Título';
$string['notification_name_help'] = 'Una breve descripción de esta notificación para ayudarle a identificarla fácilmente entre otras notificaciones que usted haya configurado.';
$string['notification_name_too_long'] = 'El nombre de la notificación debe tener 40 caracteres o menos.';
$string['notification_not_found'] = 'No se pudo encontrar esa notificación.';
$string['notification_not_updated'] = 'Notificación actualizada.';
$string['notification_review'] = 'Revisar Su Notificación';
$string['notification_schedule'] = 'Agenda';
$string['notification_type'] = 'Tipo de Notificación';
$string['notification_type_event'] = 'Evento';
$string['notification_type_event_description'] = 'Un mensaje automatizado que se envía como reacción a un evento específico. Los eventos se pueden utilizar para alertar a los destinatarios de que se han completado actividades, se han enviado o calificado tareas y más.';
$string['notification_type_reminder'] = 'Recordatorio';
$string['notification_type_reminder_description'] = 'Un mensaje recurrente que se enviará automáticamente de forma programada. Los recordatorios se pueden utilizar para alertar a los destinatarios sobre las próximas actividades, fechas de entrega, participación en clases y más.';
$string['notification_updated'] = 'Notificación actualizada.';
$string['notifications'] = 'Notificaciones';
$string['notifications_enabled'] = 'Habilitar notificaciones de Quickmail';
$string['notifications_enabled_desc'] = 'Permita que los cursos creen notificaciones automáticas, incluidos recordatorios y respuestas a eventos.';
$string['notified_by'] = 'Notificado Por';
$string['open'] = 'Abrir';
$string['open_broadcast'] = 'Componer Mensaje';
$string['open_compose'] = 'Componer Mensaje';
$string['overwrite_history'] = 'Sobrescribir Historia de Quickmail';
$string['pending_recipients'] = 'Destinatarios pendientes';
$string['pending_recipients_promise'] = 'Estos destinatarios están recibiendo mensajes en este momento, vuelva más tarde para ver los fallos.';
$string['picker_style_autocomplete'] = 'Autocompletar';
$string['picker_style_multiselect'] = 'Multiselección';
$string['picker_style_option_title'] = 'Mi Estilo Preferido para Selector de Destinatario';
$string['picker_style_option_title_help'] = 'Su interfaz personal preferida para seleccionar destinatarios al redactar un mensaje.';
$string['pluginname'] = 'Quickmail (correo rápido)';
$string['prepend_class'] = 'Insertar el nombre del curso.';
$string['prepend_class_configuration'] = 'Añada la información de identificación del curso al asunto del mensaje.';
$string['prepend_class_configuration_help'] = 'Añada la información de identificación del curso al asunto del mensaje.';
$string['prepend_class_desc'] = 'Inserte el nombre corto del curso dentro del asunto del Email.';
$string['preview_no_body'] = '(sin contenido)';
$string['preview_no_subject'] = '(sin asunto)';
$string['profile_mentor_copy_message_prefix'] = '<p><strong>Está recibiendo este mensaje porque está asignado como {$a} del destinatario previsto</strong>. La siguiente es una copia de lo que se envió al destinatario.</p>';
$string['queue_scheduled_notifications_task'] = 'Ponga en cola cualquier notificación de Quickmail programada para enviarse';
$string['queued'] = 'Agendado';
$string['queued_no_record'] = 'No se pudo encontrar a ese mensaje en la cola.';
$string['quickmail:addinstance'] = 'Añadir un nuevo bloque Quickmail a una página de curso';
$string['quickmail:allowalternate'] = 'Permitirles a los usuarios añadir un Email alterno para los cursos.';
$string['quickmail:allowcoursealternate'] = 'Cree direcciones de correo electrónico alternativas para compartir con otros instructores del curso';
$string['quickmail:canconfig'] = 'Permitirle a los usuarios configurar instancia de Quickmail.';
$string['quickmail:cansend'] = 'Permitirle a los usuarios enviar Email por Quickmail';
$string['quickmail:createnotifications'] = 'Crear notificaciones automáticas en Quickmail';
$string['quickmail:myaddinstance'] = 'Añadir un nuevo bloque de Quickmail a /mi página';
$string['quickmail:viewgroupusers'] = 'Ver a todos los usuarios en todos los grupos';
$string['receipt'] = 'Recibir un reporte del envío';
$string['receipt_configuration'] = 'Enviar un correo electrónico de confirmación al remitente del mensaje cuando éste haya sido enviado. Esta configuración será la preferencia por defecto para el remitente.';
$string['receipt_configuration_help'] = 'Enviar un correo electrónico de confirmación al remitente del mensaje cuando éste haya sido enviado. Esta configuración será la preferencia por defecto para el remitente.';
$string['receipt_email_body'] = '<p>¡Su mensaje ha sido enviado! Puede ver más detalles de este mensaje enviado {$a->sent_message_link}.</p> <p> <strong>Resumen de detalles del mensaje:</strong><br><br> <strong>Curso:</strong> {$a->curse_name}<br><br> <strong>Asunto del mensaje:</strong> {$a->subject}<br><br> <strong>Destinatarios:</strong> {$a-> recipent_count}<br><br> <strong>Correos electrónicos de destinatarios adicionales:</strong> {$a->addition_emails_string}<br><br> <strong>Enviados a mentores:</strong> {$a->sent_to_mentors} <br><br> <strong>Recuento de archivos adjuntos:</strong> {$a->attachment_count}<br><br> <strong>Cuerpo del mensaje:</strong> </p> {$a->message_body }';
$string['receipt_help'] = 'Recibir una copia del Email enviado';
$string['recipients'] = 'Destinatarios';
$string['redirect_back_from_message_detail_message_deleted'] = 'El mensaje que usted está intentando ver ha sido eliminado.';
$string['redirect_back_from_message_detail_no_access'] = 'Usted no tiene permitido ver este mensaje.';
$string['redirect_back_to_course_from_message_after_duplicate'] = 'Su mensaje ha sido duplicado exitosamente.';
$string['redirect_back_to_course_from_message_after_save'] = 'Su borrador ha sido guardado.';
$string['redirect_back_to_course_from_notifications_not_enabled'] = 'Las notificaciones de Quickmail están desactivadas para su sitio.';
$string['reset_success_message'] = 'Se ha restablecido la configuración predeterminada de Quickmail.';
$string['restore_default_confirm_message'] = 'Esto restablecerá la configuración predeterminada de Quickmail de este curso, ¿está seguro?';
$string['restore_default_modal_title'] = 'Restaurar Configuración Predeterminada';
$string['restore_history'] = 'Restaurar Historia Quickmail';
$string['save'] = 'Guardar';
$string['save_draft'] = 'Guardar Borrador';
$string['save_signature'] = 'Guardar Firma';
$string['schedule_begin_at'] = 'Fecha de inicio';
$string['schedule_end_at'] = 'Fecha de Fin';
$string['scheduled_time'] = 'Hora Agendada';
$string['select_allowed_user_fields'] = 'Campos de datos de usuario admitidos';
$string['select_allowed_user_fields_desc'] = 'Los remitentes podrán hacer referencia a los campos seleccionados para que el contenido del mensaje sea dinámico y específico para el destinatario. Ej: "[:firstname:]"';
$string['select_message_type'] = 'Enviar mensaje como';
$string['select_notification_model'] = 'Seleccionar Modelo de Notificación {$a}';
$string['select_signature_for_edit'] = 'Seleccionar Firma a Editar';
$string['selectable_roles'] = 'Roles seleccionables';
$string['selectable_roles_configuration'] = 'Estos roles estarán disponibles para su selección al redactar un mensaje.';
$string['selectable_roles_configuration_help'] = 'Estos roles estarán disponibles para su selección al redactar un mensaje.';
$string['selectable_roles_desc'] = 'Estos roles estarán disponibles para su selección al redactar un mensaje. Este ajuste se puede anular mediante la configuración del curso.';
$string['selectable_roles_readonly'] = 'Roles de solo lectura para Congelamiento de Contexto';
$string['selectable_roles_readonly_desc'] = '¿Qué roles aún pueden ver los correos electrónicos enviados después de que se haya congelado el curso?';
$string['send_all_ready_messages_task'] = 'Enviar todos los mensajes Quickmail programados';
$string['send_as_tasks'] = 'enviar todos los mensajes como trabajos en segundo plano.';
$string['send_as_tasks_help'] = 'Si se selecciona, enviará todos los mensajes de forma asíncrona como tareas cron. En caso contrario, se enviarán inmediatamente.';
$string['send_at'] = 'Enviar en';
$string['send_message'] = 'Enviar Mensaje';
$string['send_now'] = 'Enviar Ahora';
$string['send_now_scheduled_confirm_message'] = 'Esto olvidará el horario y enviará el mensaje ahora, ¿está seguro?';
$string['send_now_scheduled_modal_title'] = 'Enviar Mensaje Ahorita Mismo';
$string['send_now_threshold'] = 'Umbral para Enviar ahorita';
$string['send_now_threshold_desc'] = 'Fuerce el envío inmediato de un mensaje no programado si el número de destinatarios es este número o menos, incluso si el bloque está configurado para enviar mensajes como tareas en segundo plano. La configuración de 0 ignorará esta configuración.';
$string['send_receipt_subject_addendage'] = 'Mensaje enviado';
$string['send_schedule'] = 'Agenda de Envío';
$string['sending'] = 'Enviando';
$string['sent'] = 'Enviado';
$string['sent_at'] = 'Enviado En';
$string['sent_messages'] = 'Historia del Mensaje enviada';
$string['set_event_details'] = 'Configurar Detalles de Notificación del Evento {$a->model}';
$string['set_event_details_description'] = 'Especificar opciones adicionales acerca del evento.';
$string['set_notification_conditions'] = 'Configurar Condiciones de Notificaciones {$a->model} {$a->type}';
$string['set_notification_schedule'] = 'Configurar Agenda de Notificaciones {$a->model} {$a->type}';
$string['set_notification_schedule_description'] = 'Especifique con qué frecuencia se debe enviar esta notificación, cuándo debe comenzar y cuándo debe finalizar. Si no se especifica una fecha de finalización, esta notificación continuará enviándose hasta que se deshabilite o se elimine.';
$string['signature'] = 'Firma';
$string['signature_signature_required'] = 'Se requiere una firma.';
$string['signature_title_must_be_unique'] = 'El título de firma debe ser único.';
$string['signature_title_required'] = 'Se requiere un título de firma.';
$string['signatures'] = 'Firmas';
$string['status'] = 'Estado';
$string['strictferpa'] = 'Siempre Separar Grupos';
$string['subject'] = 'Asunto';
$string['success_recipients_promise'] = 'Estos destinatarios fueron mensajeados exitosamente por el sistema.';
$string['time_amount'] = 'Cantidad de tiempo';
$string['time_beginning'] = 'Comenzando en';
$string['time_delay_summary'] = 'Retraso de Tiempo';
$string['time_delay_unit'] = 'Retraso de Tiempo';
$string['time_delay_unit_help'] = 'Una cantidad opcional de tiempo a esperar antes de que sea enviada la notificación.';
$string['time_ending'] = 'Terminando';
$string['time_every'] = 'Cada';
$string['time_once_a'] = 'Una vez cada';
$string['time_relation'] = 'Antes de o después de';
$string['time_unit'] = 'Unidad de tiempo';
$string['time_unit_day'] = 'Día';
$string['time_unit_days'] = 'Días';
$string['time_unit_month'] = 'Mes';
$string['time_unit_months'] = 'Meses';
$string['time_unit_week'] = 'Semana';
$string['time_unit_weeks'] = 'Semanas';
$string['title'] = 'Título';
$string['unqueue'] = 'Salir de la cola';
$string['unqueue_scheduled_confirm_message'] = 'Esto cancelará la programación del envío de este mensaje y lo guardará como borrador, ¿está seguro?';
$string['unqueue_scheduled_modal_title'] = 'Mensaje programado fuera de cola';
$string['user_signature_deleted'] = 'Su firma ha sido eliminada.';
$string['validation_exception_message'] = '¡Excepción de validación!';
$string['view'] = 'Ver';
$string['view_message_detail'] = 'Ver Detalles de Mensaje';
$string['view_queued'] = 'Ver Agendados';
$string['view_sent'] = 'Ver Mensajes Enviados';
