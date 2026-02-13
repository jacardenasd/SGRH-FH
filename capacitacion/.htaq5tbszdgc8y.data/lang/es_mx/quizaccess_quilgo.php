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
 * Strings for component 'quizaccess_quilgo', language 'es_mx', version '4.4'.
 *
 * @package     quizaccess_quilgo
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['config_api_token'] = 'API TOKEN';
$string['config_client_token'] = 'CLIENT TOKEN';
$string['config_failed_register'] = 'Hubo un problema al intentar registrar su sitio. Por favor, inténtelo de nuevo más tarde';
$string['config_register'] = 'Registrar mi sitio';
$string['config_success_register'] = 'Su sitio fue registrado exitosamente';
$string['config_title'] = 'Quilgo';
$string['config_warning_not_active_yet'] = 'Su plugin de Supervisión de Quilgo aún no está activo. Esto se debe a que su sitio no se registró correctamente en la Supervisión de Quilgo durante la instalación del plugin. Puede intentar el registro nuevamente haciendo clic en "Registrar mi sitio" a continuación.';
$string['confirm_email_ask_me_later'] = 'Pregúntame más tarde';
$string['confirm_email_button_text'] = 'Confirmar dirección email';
$string['confirm_email_default_failed_message'] = 'Algo salió mal al intentar confirmar su dirección email. Por favor inténtelo de nuevo más tarde y asegúrese de que usted usa la dirección Email válida.';
$string['confirm_email_finished'] = 'Gracias por confirmar su dirección de Email. ¡Disfrute usar Quilgo!';
$string['confirm_email_message'] = 'Por favor confirme su dirección Email actual pra asegurarse de recibir actualizaciones importantes de características y de seguridad.';
$string['confirm_email_short_desc'] = 'Quilgo es un plugin altamente escalable que monitorea cámaras, pantalla y actividad, y produce reportes de supervisión sobre la finalización del examen.';
$string['confirm_email_title'] = 'Gracias por elegir Quilgo';
$string['create_session_error_default_description'] = 'La configuración de supervisión ha fallado. Intente actualizar la página del cuestionario.';
$string['create_session_error_limit_reached_description'] = 'Tu profesor ha habilitado la supervisión automática para esta prueba, pero se ha alcanzado el límite. Intente nuevamente para comenzar la prueba en unos minutos.';
$string['general_continue'] = 'Continuar';
$string['general_yes'] = 'Sí';
$string['limit_info_contact_admin'] = 'Comuníquese con su administrador de Moodle para actualizar o contáctenos a <strong>hello@quilgo.com</strong> si necesita una prueba para una mayor cantidad de estudiantes.';
$string['limit_info_run_up'] = 'Quilgo Free permite ejecutar hasta <strong><span class="free-limitation">0</span> intentos de prueba supervisados simultáneamente</strong>. Este límite se comparte en todas las pruebas.';
$string['limit_info_upgrade'] = 'Haga clic {$a}<strong><span class="quilgo-upgrade-cta">aquí para actualizar</span></strong> o contáctenos en <strong>hello@quilgo.com</strong> si necesita una prueba para un mayor número de estudiantes.';
$string['manage_subscription_failed_info'] = 'Algo salió mal al intentar administrar la suscripción a Quilgo. Por favor, inténtelo de nuevo más tarde.';
$string['manage_subscription_title'] = 'Administrar mi suscripción Quilgo';
$string['plasm_camera'] = 'Monitorear cámara';
$string['plasm_camera_help'] = 'Asegúrese que el sustentante es quien debería ser y que no abandone su asiento hasta que termine el examen.';
$string['plasm_enabled'] = 'Habilitar supervisión';
$string['plasm_focus'] = 'Monitorear actividad (habilitada de forma predeterminada)';
$string['plasm_focus_help'] = 'Ver cuantas veces un examinado ha dejado el examen por otra pestaña o App.';
$string['plasm_force'] = 'Forzar monitoreo';
$string['plasm_force_help'] = 'Requerir métodos seleccionados de monitoreo para intentar el examen';
$string['plasm_screen'] = 'Monitorear pantalla';
$string['plasm_screen_help'] = 'Auto-grabar las pantallas del sustentante y actividad sospechosa en alta calidad para desalentar comportamiento inapropiado';
$string['pluginname'] = 'Proctorización de Quilgo';
$string['privacy:export:quizaccess_quilgo_reports'] = 'Informe de Supervisión de Quilgo';
$string['privacy:export:quizaccess_quilgo_settings'] = 'Configuración de supervisión de Quilgo';
$string['privacy:export:quizaccess_quilgo_settings:camera_disabled'] = 'Monitoreo de cámara deshabilitado';
$string['privacy:export:quizaccess_quilgo_settings:camera_enabled'] = 'Monitoreo de cámara habilitado';
$string['privacy:export:quizaccess_quilgo_settings:force_disabled'] = 'Forzar monitoreo deshabilitado';
$string['privacy:export:quizaccess_quilgo_settings:force_enabled'] = 'Forzar monitoreo habilitado';
$string['privacy:export:quizaccess_quilgo_settings:screen_disabled'] = 'Monitoreo de pantalla deshabilitado';
$string['privacy:export:quizaccess_quilgo_settings:screen_enabled'] = 'Monitoreo de pantalla habilitado';
$string['privacy:metadata:quizaccess_quilgo_proctoring'] = 'Este complemento envía datos externamente a Quilgo para el informe de supervisión.';
$string['privacy:metadata:quizaccess_quilgo_proctoring:focuses'] = 'Enfocar o desenfocar evento de ventana durante un intento de examen.';
$string['privacy:metadata:quizaccess_quilgo_proctoring:images'] = 'Imágenes capturadas de una cámara o pantalla durante un intento de examen.';
$string['privacy:metadata:quizaccess_quilgo_reports'] = 'Información sobre la sesión de supervisión del intento de prueba del usuario.';
$string['privacy:metadata:quizaccess_quilgo_reports:attemptid'] = 'El ID del intento de prueba del usuario.';
$string['privacy:metadata:quizaccess_quilgo_reports:camera_enabled'] = 'El estado de seguimiento de la cámara se habilita o deshabilita cuando un usuario intenta realizar una prueba.';
$string['privacy:metadata:quizaccess_quilgo_reports:error_reason'] = 'La descripción del error si hay un error durante la generación de un informe de supervisión cuando el usuario termina de intentar una prueba.';
$string['privacy:metadata:quizaccess_quilgo_reports:force_enabled'] = 'El estado de seguimiento forzado está habilitado o deshabilitado cuando un usuario intenta realizar una prueba.';
$string['privacy:metadata:quizaccess_quilgo_reports:plasmsessionid'] = 'El ID de la sesión de supervisión.';
$string['privacy:metadata:quizaccess_quilgo_reports:screen_enabled'] = 'El estado de seguimiento de la pantalla está habilitado o deshabilitado cuando un usuario intenta realizar una prueba.';
$string['privacy:metadata:quizaccess_quilgo_settings'] = 'Información sobre la configuración de supervisión del cuestionario.';
$string['privacy:metadata:quizaccess_quilgo_settings:camera_enabled'] = 'El monitoreo de cámara habilitado o deshabilitado.';
$string['privacy:metadata:quizaccess_quilgo_settings:force_enabled'] = 'El seguimiento de fuerza está habilitado o deshabilitado.';
$string['privacy:metadata:quizaccess_quilgo_settings:quizid'] = 'Un ID de un cuestionario que utiliza supervisión.';
$string['privacy:metadata:quizaccess_quilgo_settings:screen_enabled'] = 'El monitoreo de pantalla habilitado o deshabilitado.';
$string['proctoring_disabled_info'] = 'La supervisión automatizada está <i>deshabilitada</i>. Para habilitarlo, vaya a <a href="{$a}"><u>Configuración del cuestionario</u></a>, expanda "Restricciones adicionales en intentos", marque la casilla "Habilitar supervisión", elija el seguimiento. métodos, haga clic en "Guardar" y regrese a esta página.';
$string['proctoring_setup_failed_title'] = 'Error en la configuración de supervisión';
$string['refresh_quiz_page'] = 'Actualizar cuestionario';
$string['report_camera_tracking'] = 'Supervisión de la cámara:';
$string['report_detail_title'] = 'Informe de Supervisión';
$string['report_empty'] = 'La supervisión ahora está activada. Los resultados aparecerán aquí después de que se realice al menos un intento de cuestionario.';
$string['report_error'] = 'Algo salió mal al obtener el informe de supervisión. Por favor, intente de nuevo más tarde';
$string['report_expired'] = 'Las imágenes del informe han sido eliminadas del sistema ya que su validez ha expirado';
$string['report_expires_in'] = 'Las imágenes se eliminarán del sistema en {$a} días';
$string['report_face_presence'] = 'Presencia de cara:';
$string['report_focus_good'] = 'Bien';
$string['report_focus_not_good'] = 'Dejó el examen {$a} veces';
$string['report_focus_not_good_multiple'] = 'Abandonó el test {$a} veces';
$string['report_left_test'] = 'Actividad:';
$string['report_link_caption'] = 'Ver informe de supervisión | Quilgo<sup>®</sup>';
$string['report_notready'] = 'Su informe de supervisión aún no está disponible. Por favor, espere un poco más.';
$string['report_patterns_detected'] = 'Patrones detectados:';
$string['report_patterns_see_answer_below'] = 'ver respuestas a continuación';
$string['report_patterns_step_change_answer'] = 'Cambiar respuesta';
$string['report_patterns_step_copy_question'] = 'Copiar pregunta';
$string['report_patterns_step_leave_test'] = 'Dejar prueba';
$string['report_patterns_step_paste_answer'] = 'Pegar respuesta';
$string['report_patterns_step_return'] = 'Devolver';
$string['report_patterns_used_multiple_screens'] = 'Se utilizaron varias pantallas:';
$string['report_preview_faces_detected'] = '| Caras detectadas: {$a}';
$string['report_preview_info'] = 'Solo se rastreó el <strong>primer minuto</strong> de este intento ya que es un <strong>intento de vista previa</strong>. Su <strong>intento de estudiante</strong> será <strong>rastreado completamente</strong>';
$string['report_preview_page_unfocused'] = '| Página desenfocada';
$string['report_preview_time'] = 'Hora:';
$string['report_preview_title'] = 'Previsualizar';
$string['report_proctoring_methods'] = 'Métodos de supervisión:';
$string['report_screen_tracking'] = 'Monitoreo de pantalla:';
$string['report_setting_camera'] = 'Cámara';
$string['report_setting_focus'] = 'Actividad';
$string['report_setting_screen'] = 'Pantalla';
$string['report_settings_recommendation'] = 'Recomendamos habilitar el <strong>seguimiento de cámara y pantalla</strong> para una mejor supervisión. Vaya a <a href="{$a}" target="_blank"><u>configuración del cuestionario</u></a>, expanda la sección "Restricciones adicionales en intentos", marque los métodos de seguimiento y haga clic en "Guardar". para habilitar métodos de seguimiento adicionales.';
$string['report_suspicious_caption'] = '{$a} sospechoso';
$string['report_suspicious_screenshots'] = 'Pantallazos:';
$string['report_table_header_attempt'] = 'Intento #';
$string['report_table_header_attempt_results'] = 'Resultados del Intento';
$string['report_table_header_confidence_levels'] = 'Nivel de confianza de la supervisión';
$string['report_table_header_email'] = 'Correo electrónico';
$string['report_table_header_name'] = 'Nombre';
$string['report_table_header_proctoring_report'] = 'Informe de Supervisión';
$string['report_table_header_score'] = 'Puntaje';
$string['report_table_header_time_taken'] = 'Duración';
$string['report_table_header_timefinish'] = 'Enviado';
$string['report_table_row_confidence_level_high'] = 'Alta';
$string['report_table_row_confidence_level_low'] = 'Baja';
$string['report_table_row_confidence_level_moderate'] = 'Moderada';
$string['report_table_row_notyetgraded'] = 'Aun sin calificar';
$string['report_table_row_overdue'] = 'Retrasado: {$a}';
$string['report_table_row_stat_loading'] = 'Cargando...';
$string['report_table_row_stat_not_ready'] = 'Espere hasta un minuto.';
$string['report_table_row_stat_queued'] = 'Puesto en cola';
$string['report_table_row_view_report'] = 'Ver reporte';
$string['setting_group'] = '<strong>Proctorización de Quilgo<sup>®</sup></strong>';
$string['setup-additional-collector-description'] = 'Ahora por favor proporcine acceso a su pantalla';
$string['setup-additional-collector-title'] = 'Casi terminamos';
$string['setup_camera_error_desc'] = 'Para poder habilitar el monitoreo de cámara usted necesita permitir el acceso a su cámara. Por favor cambie las configuraciones de acceso para su cámara.';
$string['setup_camera_error_title'] = 'Falló el acceso a cámara';
$string['setup_camera_hint'] = 'cámara';
$string['setup_connection_hint'] = 'y';
$string['setup_consent_activity_tracking_enabled'] = 'Doy mi consentimiento para registrar, procesar y almacenar los datos de supervisión y compartirlos con mi maestro.';
$string['setup_consent_camera_and_screen_tracking_enabled'] = 'Doy mi consentimiento para registrar, procesar y almacenar los datos de supervisión, incluidas capturas de pantalla de mi pantalla y fotografías mías, y compartirlas con mi maestro.';
$string['setup_consent_camera_tracking_enabled'] = 'Doy mi consentimiento para registrar, procesar y almacenar los datos de supervisión, incluidas fotografías mías, y compartirlas con mi maestro.';
$string['setup_consent_provided_report'] = 'Un informe se mostrará a su profesor después de completar su intento de cuestionario';
$string['setup_consent_screen_tracking_enabled'] = 'Doy mi consentimiento para registrar, procesar y almacenar los datos de supervisión, incluidas capturas de pantalla de mi pantalla, y compartirlos con mi maestro.';
$string['setup_consent_snapshots_from'] = 'Instantáneas de';
$string['setup_consent_snapshots_will_taken'] = 'se tomarán durante su intento';
$string['setup_consent_to_start_quiz'] = 'Para comenzar, necesita dar acceso a';
$string['setup_disable_device_warning_attention'] = '¡Atención!';
$string['setup_disable_device_warning_check_camera_only'] = 'Entiendo que NO deshabilitaré el acceso a mi cámara durante mi prueba.';
$string['setup_disable_device_warning_check_camera_or_screen'] = 'Entiendo que NO deshabilitaré mi cámara ni el acceso a la pantalla durante mi prueba.';
$string['setup_disable_device_warning_check_screen_only'] = 'Entiendo que NO deshabilitaré el acceso a mi pantalla durante mi prueba.';
$string['setup_disable_device_warning_description_camera_only'] = 'NO desactive su cámara durante la prueba ya que esto puede afectar los resultados de la misma.';
$string['setup_disable_device_warning_description_camera_or_screen'] = 'NO desactive su cámara o pantalla durante la prueba ya que esto puede afectar los resultados.';
$string['setup_disable_device_warning_description_screen_only'] = 'NO desactive su pantalla durante la prueba ya que esto puede afectar los resultados.';
$string['setup_finish_tick_box'] = 'Active la casilla para proporcionar consentimiento:';
$string['setup_finish_title'] = '¿Usted ve';
$string['setup_finish_your_screen'] = 'su pantalla';
$string['setup_finish_yourself'] = 'a usted mismo';
$string['setup_not_supported_error_desc'] = 'Lo sentimos, su dispositivo no soporta la supervisión de cámara/pantalla. Por favor, elija otro dispositivo para realizar el cuestionario';
$string['setup_not_supported_error_title'] = 'Dispositivo no soportado';
$string['setup_provide_access_camera'] = 'Permitir acceso a cámara';
$string['setup_provide_access_screen'] = 'Permitir acceso a pantalla';
$string['setup_required_error'] = 'Usted debe terminar la configuración antes de poder iniciar el examen';
$string['setup_retry'] = 'Intentar de nuevo';
$string['setup_screen_area_error_desc'] = 'Por favor, intente de nuevo y asegúrese de seleccionar <strong>toda la pantalla</strong> para compartir.';
$string['setup_screen_area_error_title'] = 'Área de pantalla seleccionada incorrectamente';
$string['setup_screen_error_desc'] = 'Para activar la grabación de pantalla, necesita permitir acceso a su pantalla. Asegúrese también de no rechazar la grabación de pantalla en sus preferencias del sistema.';
$string['setup_screen_error_title'] = 'Error de acceso a la pantalla';
$string['setup_screen_hint'] = 'pantalla';
$string['setup_tracking_enabled_hint'] = 'supervisión activa';
$string['upgrade_failed_info'] = 'Algo salió mal al intentar actualizar Quilgo. Por favor, inténtelo de nuevo más tarde.';
