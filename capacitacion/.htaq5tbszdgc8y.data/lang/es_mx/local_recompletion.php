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
 * Strings for component 'local_recompletion', language 'es_mx', version '4.4'.
 *
 * @package     local_recompletion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'Abandonado';
$string['advancedrecompletiontitle'] = 'Avanzado';
$string['archive'] = 'Archivar intentos antiguos';
$string['archivecertificate'] = 'Archivar certificados emitidos (mod_certificate)';
$string['archivecertificate_help'] = '¿Deberían ser archivados los certificados emitidos?';
$string['archivechoice'] = 'Archivar intentos de elección antiguos';
$string['archivecompletiondata'] = 'Archivar datos de finalización';
$string['archivecompletiondata_help'] = 'Escribir datos de finalización del curso a las tablas local_recompletion_cc, local_recompletion_cc_cc y local_recompletion_cmc. Los datos de finalización serán eliminados permanentemente si esto no es seleccionado.';
$string['archivecoursecertificate'] = 'Archivar certificados emitidos (mod_coursecertificate)';
$string['archivecoursecertificate_help'] = '¿Deberían ser archivados los certificados emitidos? Los certificados archivados permanecerán en la tabla tool_certificate_issues, pero tendrán estado de archivado.';
$string['archivecustomcertcertificates'] = 'Archivar certificados personalizados emitidos (mod_customcert)';
$string['archivecustomcertcertificates_help'] = '¿Deberían de ser archivados los certificados personalizados emitidos?';
$string['archiveh5p'] = 'Archivar intentos antiguos H5P (mod_h5pactivity)';
$string['archivehotpot'] = 'Archivar intentos antiguos Hotpot';
$string['archivehvp'] = 'Archivar intentos antiguos H5P (mod_hvp)';
$string['archivelesson'] = 'Archivar intentos antiguos Lección';
$string['archivequestionnaire'] = 'Archivar intentos antiguos de questionnaire';
$string['archivequiz'] = 'Archivar intentos antiguos de examen';
$string['archivescorm'] = 'Archivar intentos antiguos de SCORM';
$string['assignattempts'] = 'Asignar intentos';
$string['assignattempts_help'] = 'Como manejar intentos de tarea dentro del curso. Si se usa la configuración \'Actualizar al cambiar calificaciones\', cuando un profesor actualice la calificación dentro de una actividad de Tarea y el usuario ya haya completado el curso, su fecha de finalización del curso será actualizada para usar la fecha del cambio de la calificación de la tarea.';
$string['assignevent'] = 'Actualizar finalización del curso al cambiar calificación';
$string['bulkchangedate'] = 'Cambiar fecha de finalización para usuarios seleccionados';
$string['bulkresetallcompletion'] = 'Reiniciar toda la finalización para usuarios seleccionados';
$string['certificate'] = 'Certificados (mod_certificate)';
$string['certificate_help'] = '¿Deberían ser eliminados los certificados emitidos?';
$string['certificateverifywarn'] = 'Atención: Eliminar los certificados emitidos sin archivarlos resultará en el hecho de que los certificados emitidos no puedan ser más verificados en Moodle. Por favor solo borre los certificados si esto es aceptable para usted.';
$string['choiceattempts'] = 'Intentos de elección';
$string['choiceattempts_help'] = 'Si deberían de ser eliminados los Intentos de elección - si se elige archivar, los intentos antiguos de Elección serán archivados en la tabla local_recompletion_cha.';
$string['completed'] = 'Completado';
$string['completionnotenabled'] = 'La finalización no está habilitada en este curso';
$string['completionreset'] = 'La finalización para los usuarios seleccionados en este curso ha sido reiniciada.';
$string['completionresetuser'] = 'Finalización para {$a} en este curso ha sido reiniciada.';
$string['completionupdated'] = 'Las fechas de finalización del curso han sido actualizadas';
$string['coursecertificate'] = 'Certificados (mod_coursecertificate)';
$string['coursecertificate_help'] = '¿Deberían ser eliminados os certificados emitidos?';
$string['coursecertificateverifywarn'] = 'Atención: Eliminar los certificados emitidos sin archivarlos resultará en el hecho de que los certificados emitidos no puedan ser más verificados en Moodle. Por favor solo borre los certificados si esto es aceptable para usted.';
$string['coursecompletiondate'] = 'Nueva fecha de finalización del curso';
$string['customcertcertificates'] = 'Certificados personalizados (mod_customcert)';
$string['customcertcertificates_help'] = '¿Deberían ser eliminados los certificados personalizados emitidos?';
$string['customcertresetcertificates'] = 'Eliminar certificados emitidos';
$string['customcertresetcertificatesverifywarn'] = 'Atención: Al eliminar los certificados emitidos, aunque los archive antes d ela eliminación, resultará en el hecho de que los certificados emitidos ya no pueden ser verificados más en Moodle. Por favor, solamente elimine los certificados si esto es aceptable para usted.';
$string['datasource:local_recompletion_cc'] = 'Archivo se finalizaciones de curso';
$string['datasource:local_recompletion_ccert_is'] = 'Archivo de certificados emitidos (mod_customcert)';
$string['datasource:local_recompletion_cert'] = 'Archivo de certificados emitidos (mod_customcert)';
$string['datasource:local_recompletion_cmc'] = 'Archivo se finalizaciones de actividad';
$string['datasource:local_recompletion_h5p'] = 'Archivo de intentos de H5P (mod_h5pactivity)';
$string['datasource:local_recompletion_hpa'] = 'Archivo de intentos de Hotpot';
$string['datasource:local_recompletion_lg'] = 'Archivo de calificaciones de Lección';
$string['datasource:local_recompletion_qa'] = 'Archivo de intentos de examen';
$string['datasource:local_recompletion_qg'] = 'Archivo de calificaciones de examen';
$string['defaultsettings'] = 'Configuraciones predeterminadas de re-finalización';
$string['delete'] = 'Eliminar intentos existentes';
$string['deletecertificate'] = 'Eliminar certificados emitidos';
$string['deletecoursecertificate'] = 'Eliminar certificados emitidos';
$string['deletegradedata'] = 'Eliminar todas las calificaciones para el usuario';
$string['deletegradedata_help'] = 'Eliminar datos de finalización de calificación actual de la tabla grade_grades. Los datos de re-finalización son eliminados permanentemente pero los datos son retenidos en la tabla de datos de Historia de la calificación.';
$string['donothing'] = 'No hacer nada';
$string['editcompletion'] = 'Editar fecha de finalización del curso';
$string['editcompletion_desc'] = 'Modificar la fecha de finalización del curso para los siguientes usuarios:';
$string['editrecompletion'] = 'Editar configuraciones de re-finalización del curso';
$string['emailrecompletiontitle'] = 'Ajustes de mensaje de re-finalización personalizado';
$string['endtime'] = 'Hora de término';
$string['entity:local_recompletion_cc'] = 'Archivo de finalizaciones de curso';
$string['entity:local_recompletion_ccert_is'] = 'Archivo de certificados emitidos (mod_customcert)';
$string['entity:local_recompletion_cert'] = 'Archivo de certificados emitidos (mod_customcert)';
$string['entity:local_recompletion_cmc'] = 'Archivo de finalizaciones de actividad';
$string['entity:local_recompletion_h5p'] = 'Archivo de intentos de H5P (mod_h5pactivity)';
$string['entity:local_recompletion_hpa'] = 'Archivo de intentos de Hotpot';
$string['entity:local_recompletion_lg'] = 'Archivo de calificaciones de lección';
$string['entity:local_recompletion_qa'] = 'Archivo de intentos de examen';
$string['entity:local_recompletion_qg'] = 'Archivo de calificaciones de examen';
$string['eventrecompletion'] = 'Re-finalización del curso';
$string['extraattempt'] = 'Darles intento(s) extra a estudiantes';
$string['forcearchivecompletiondata'] = 'Forzar archivar datos de finalización';
$string['forcearchivecompletiondata_help'] = 'Si se habilita, los datos de finalización serán forzados sobre todas las re-finalizaciones del curso. Esto puede evitar la pérdida accidental de datos.';
$string['h5pattempts'] = 'Intentos de H5P (mod_h5pactivity)';
$string['h5pattempts_help'] = 'Cómo manejar los intentos de H5P dentro del curso. Si se selecciona archivar, los intentos H5P antiguos serán archivados en las tablas  local_recompletion_h5p y local_recompletion_h5pr.';
$string['hotpotattempts'] = 'Intentos de Hotpot';
$string['hotpotattempts_help'] = 'Cómo manejar intentos de hotpot dentro del curso. Si se selecciona archivo, los intentos serán activados.';
$string['hvpattempts'] = 'Intentos de H5P (mod_hvp)';
$string['hvpattempts_help'] = 'Cómo manejar intentos de H5Pdentro del curso. Si se selecciona archivo, los intentos H5P antiguos serán archivados en la tabla local_recompletion_hvp.';
$string['inprogress'] = 'En progreso';
$string['invalidscheduledate'] = 'Fecha de agenda inválida introducida.';
$string['lessonattempts'] = 'Intentos de lección';
$string['lessonattempts_help'] = 'Cómo manejar intentos de Lección dentro del curso. Si se selecciona archivo, los intentos serán archivados.';
$string['modifycompletiondates'] = 'Modificar fechas de finalización del curso';
$string['noassigngradepermission'] = 'Su finalización fue reiniciada, pero este curso contien una tarea que no pudo ser reiniciada; por favor, pídale a su profesor que lo haga por Usted si fuera necesario.';
$string['nousersselected'] = 'No se seleccionaron usuarios';
$string['penalties'] = 'Penalizaciones';
$string['pluginname'] = 'Re-finalización del curso';
$string['pluginssettings'] = 'Configuraciones de plugin';
$string['privacy:metadata:attempt'] = 'El intento número';
$string['privacy:metadata:completionstate'] = 'Si la actividad ha sido completada';
$string['privacy:metadata:correct'] = '¿Respuesta correcta?';
$string['privacy:metadata:course'] = 'La ID del curso enlazado a esta tabla.';
$string['privacy:metadata:coursemoduleid'] = 'La ID de la actividad';
$string['privacy:metadata:coursesummary'] = 'Almacena los datos de finalización de curso para un usuario.';
$string['privacy:metadata:deadline'] = 'fecha límite';
$string['privacy:metadata:endtime'] = 'Hora de fin';
$string['privacy:metadata:flag'] = 'Bandera';
$string['privacy:metadata:grade'] = 'Calificación';
$string['privacy:metadata:gradefinal'] = 'Calificación final recibida por finalización del curso';
$string['privacy:metadata:lessontime'] = 'Duración de lección';
$string['privacy:metadata:local_recompletion_cc'] = 'Archivo de antiguas finalizaciones de curso.';
$string['privacy:metadata:local_recompletion_cc_cc'] = 'Archivo de los anteriores course_completion_crit_compl.';
$string['privacy:metadata:local_recompletion_ccert_is'] = 'Archivo de problemas de certificados personalizados de curso anterior.';
$string['privacy:metadata:local_recompletion_ccert_is:emailed'] = 'Si es que el customcert emitido fue enviada por Email';
$string['privacy:metadata:local_recompletion_ccert_is:timecreated'] = 'La hora de cuando el customcert emitido fue creado';
$string['privacy:metadata:local_recompletion_cert'] = 'Archivo de certificados emitidos anteriores.';
$string['privacy:metadata:local_recompletion_cert:timecreated'] = 'La hora de cuando fue creado el certificado emitido';
$string['privacy:metadata:local_recompletion_cha'] = 'Archivo de respuestas de elección';
$string['privacy:metadata:local_recompletion_cha:choiceid'] = 'LA ID de Opción del Archivo de respuestas de elección';
$string['privacy:metadata:local_recompletion_cha:optionid'] = 'La ID de Opción del Archivo de respuestas de elección';
$string['privacy:metadata:local_recompletion_cmc'] = 'Archivo de antiguas finalizaciones de módulo de curso.';
$string['privacy:metadata:local_recompletion_cmv'] = 'Archivo de vistas de módulos de cursos anteriores.';
$string['privacy:metadata:local_recompletion_h5p'] = 'Archivo para información de monitoreo del intento de H5P (mod_h5pactivity).';
$string['privacy:metadata:local_recompletion_h5pr'] = 'Archivo para información de monitoreo del resultado del intento de H5P (mod_h5pactivity).';
$string['privacy:metadata:local_recompletion_hpa'] = 'Archivo para intentos de hotpot.';
$string['privacy:metadata:local_recompletion_hvp'] = 'Archivo para datos del usuario de H5P (mod_hvp.';
$string['privacy:metadata:local_recompletion_hvp:data'] = 'Los datos actuales del usuario que fueron almacenados';
$string['privacy:metadata:local_recompletion_hvp:hvp_id'] = 'ID de contenido hvp';
$string['privacy:metadata:local_recompletion_la'] = 'Archivo para lesson_attempts';
$string['privacy:metadata:local_recompletion_lb'] = 'Archivo de lesson_branch';
$string['privacy:metadata:local_recompletion_lg'] = 'Archivo de lesson_grades';
$string['privacy:metadata:local_recompletion_lo'] = 'Archivo de lesson_overrides';
$string['privacy:metadata:local_recompletion_lt'] = 'Archivo de lesson_timer';
$string['privacy:metadata:local_recompletion_ltia'] = 'Datos de bitácoras de acceso y gradeback';
$string['privacy:metadata:local_recompletion_ltia:lastaccess'] = 'La hora de cuando el usuario accedió por última vez al curso.';
$string['privacy:metadata:local_recompletion_ltia:lastgrade'] = 'La última calificación que al usuario le fue grabado que tenía';
$string['privacy:metadata:local_recompletion_ltia:timecreated'] = 'La hora de cuando el usuario se inscribió';
$string['privacy:metadata:local_recompletion_ltia:toolid'] = 'La ID de la herramienta del método de inscripción LTI.';
$string['privacy:metadata:local_recompletion_ltia:userid'] = 'La ID del usuario';
$string['privacy:metadata:local_recompletion_qr'] = 'Tabla de respuesta de Re-finalización de Questionnaire';
$string['privacy:metadata:local_recompletion_qr:complete'] = 'completo';
$string['privacy:metadata:local_recompletion_qr:grade'] = 'Calificación';
$string['privacy:metadata:local_recompletion_qr:questionnaireid'] = 'ID del questionnario';
$string['privacy:metadata:local_recompletion_qr:submitted'] = 'Enviado';
$string['privacy:metadata:maxattempts'] = 'Número máximo de intentos';
$string['privacy:metadata:overrideby'] = 'La ID del usuario de la persona que anuló la finalización de actividad';
$string['privacy:metadata:quiz_attempts'] = 'Detalles archivados acerca de cada intento en un examen.';
$string['privacy:metadata:quiz_attempts:attempt'] = 'El número del intento.';
$string['privacy:metadata:quiz_attempts:currentpage'] = 'La página actual en donde está el usuario.';
$string['privacy:metadata:quiz_attempts:preview'] = 'Si es que esta es o no una previsualización de un examen.';
$string['privacy:metadata:quiz_attempts:state'] = 'El estado actual del intento.';
$string['privacy:metadata:quiz_attempts:sumgrades'] = 'La suma de calificaciones en el intento.';
$string['privacy:metadata:quiz_attempts:timecheckstate'] = 'La hora de cuando fue revisado el intento.';
$string['privacy:metadata:quiz_attempts:timefinish'] = 'La hora de cuando fue completado el intento.';
$string['privacy:metadata:quiz_attempts:timemodified'] = 'La hora de cuando se actualizó el intento.';
$string['privacy:metadata:quiz_attempts:timemodifiedoffline'] = 'La hora de cuando se actualizó el intento mediante una actualización fuera-de-línea.';
$string['privacy:metadata:quiz_attempts:timestart'] = 'La hora de cuando se inició el intento.';
$string['privacy:metadata:quiz_grades'] = 'Detalles archivados acerca de la calificación global para los intentos anteriores de examen.';
$string['privacy:metadata:quiz_grades:grade'] = 'La calificación general para este examen.';
$string['privacy:metadata:quiz_grades:quiz'] = 'El examen que fue calificado.';
$string['privacy:metadata:quiz_grades:timemodified'] = 'La hora de cuando fue modificada la calificación.';
$string['privacy:metadata:quiz_grades:userid'] = 'El usuario que fue calificado.';
$string['privacy:metadata:rawscore'] = 'El puntaje obtenido';
$string['privacy:metadata:reaggregate'] = 'Si es que la finalización del curso fue reagregada o no.';
$string['privacy:metadata:retake'] = 'Retomar';
$string['privacy:metadata:scoes_value:element'] = 'La ID del elemento a ser monitoreado';
$string['privacy:metadata:scoes_value:value'] = 'El valor del elemento dado';
$string['privacy:metadata:score'] = 'Puntaje';
$string['privacy:metadata:scorm_attempt'] = 'Archivo de intentos de SCORM anteriores.';
$string['privacy:metadata:scorm_scoes_value'] = 'Archivo de los datos monitoreados de los SCOes que pertenecen a la actividad';
$string['privacy:metadata:scormid'] = 'ID del SCORM';
$string['privacy:metadata:starttime'] = 'Hora de inicio';
$string['privacy:metadata:timecompleted'] = 'La hora cuando el curso fue completado.';
$string['privacy:metadata:timecreated'] = 'La hora de cuando fue creado el elemento monitoreado';
$string['privacy:metadata:timeenrolled'] = 'La hora de cuando el usuario fue inscrito en el curso';
$string['privacy:metadata:timemodified'] = 'La última hora de cuando el elemento fue monitoreado';
$string['privacy:metadata:timestarted'] = 'La hora cuando el curso fue iniciado.';
$string['privacy:metadata:unenroled'] = 'Si es que el usuario fue o no des-inscrito (dado de baja) del curso';
$string['privacy:metadata:useranswer'] = 'Respuesta';
$string['privacy:metadata:userid'] = 'La ID del usuario enlazado a esta tabla.';
$string['privacy:metadata:viewed'] = 'Si es que la actividad fue vista';
$string['pulsenotifications'] = 'Notificaciones de pulso';
$string['pulsenotifications_help'] = '¿Deberían de ser reiniciadas las Notificaciones de pulso que ya han sido enviadas?';
$string['pulseresetnotifications'] = 'Reiniciar notificaciones';
$string['questionnaireattempts'] = 'Intentos de questionnaire';
$string['questionnaireattempts_help'] = 'Qué hacer con los intentos de Questionnaire existentes. Si se selecciona eliminar y archivar, los intentos antiguos de Questionnaire serán archivados en las tablas de local_recompletion.';
$string['quizattempts'] = 'Intentos de examen';
$string['quizattempts_help'] = 'Que hacer con los intentos de Examen existentes. Si se selecciona eliminar y archivar, los intentos antiguos de examen serán archivados en las tablas local_recompletion.
Si se configura para dar intentos extra, esto añadirá una anulación de examen para permitir que el usuario tenga el número máximo configurado de intentos permitidos .';
$string['recompletion'] = 're-finalización';
$string['recompletion:bulkoperations'] = 'Operaciones masivas';
$string['recompletion:manage'] = 'Permitir que se cambien las configuraciones de re-finalización del curso';
$string['recompletion:resetmycompletion'] = 'Reiniciar mi propia finalización';
$string['recompletioncalculateddate'] = 'Fecha calculada: {$a}';
$string['recompletionemailbody'] = 'Cuerpo del mensaje de re-finalización';
$string['recompletionemailbody_help'] = 'Puede añadirse un asunto personalizado  en el Email de re-finalización como texto simple o como auto-formato Moodle, incluyendo marcas HTML y multi.-idioma

Pueden incluirse los siguientes remplazables en el mensaje:

* Nombre del curso {$a->coursename}
* Enlace al curso {$a->link}
* Enlace a la página del perfil del usuario {$a->profileurl}
* Email del usuario {$a->email}
* Nombre completo del usuario {$a->fullname}';
$string['recompletionemaildefaultbody'] = 'Hola; por favor re-finalice el curso {$a->coursename} {$a->link}';
$string['recompletionemaildefaultsubject'] = 'Curso {$a->coursename} re-finalización requerida';
$string['recompletionemailsubject'] = 'Asunto del mensaje de re-finalización';
$string['recompletionemailsubject_help'] = 'Puede añadirse un asunto personalizado  en el Email de re-finalización como texto simple

Pueden incluirse los siguientes remplazables en el mensaje:

* Nombre del curso {$a->coursename}
* Nombre completo del usuario {$a->fullname}';
$string['recompletionnotenabledincourse'] = 'Re-finalización no está habilitada en courseid: {$a}';
$string['recompletionrange'] = 'Período de re-finalización';
$string['recompletionrange_help'] = 'Configurar el período de tiempo antes de que sean reiniciados los resultados de re-finalización de un usuario.';
$string['recompletionschedule'] = 'Agenda de re-finalización';
$string['recompletionschedule_help'] = 'Configurar una fecha (por ejemplo 1 de enero) cuando los resultados de re-finalización son reiniciados. Esta fecha es calculada desde la última ejecución de una re-finalización. Esta re-finalización entonces ocurre a un intervalo. \'Ene 1\' resultará en una re-finalización anual, \'viernes\' resultará en que re-finalización se ejecute cada viernes.';
$string['recompletionsettingssaved'] = 'Configuraciones de re-finalización guardadas';
$string['recompletiontask'] = 'Revisar si hay usuarios que necesiten re-completar';
$string['recompletiontype'] = 'Tipo de re-finalización';
$string['recompletiontype:disabled'] = 'Deshabilitado';
$string['recompletiontype:ondemand'] = 'Bajo demanda';
$string['recompletiontype:period'] = 'Período';
$string['recompletiontype:schedule'] = 'Agenda';
$string['recompletiontype_help'] = 'Determina cómo serán reiniciados los resultados de finalización del usuario para nuevos cursos.

* Deshabilitado - deshabilita esta característica.
* Período - Permite un período de re-finalización (por ejemplo 60 días) basado en la fecha que los usuarios completaron el último curso
* Bajo demanda - Permite al profesor reiniciar manualmente usuarios individuales conforme lo requiera.
* Agenda - permite re-finalización en una fecha específica como por ejemplo el 1 de enero cada año..';
$string['recompletionunenrolenable'] = 'Reiniciar finalización en una des-inscripcion';
$string['recompletionunenrolenable_help'] = 'Habilitar el disparar reinicio de finalización en des-inscripción de usuario';
$string['resetallcompletion'] = 'Reiniciar toda la finalización';
$string['resetcompletionconfirm'] = '¿Está seguro de querer reiniciar todos los datos de finalización en este curso para {$a}?  Advertencia - esto podría eliminar permanentemente algunos contenidos enviados.';
$string['resetcompletionfor'] = 'Reiniciar la finalización para {$a}';
$string['resetlti'] = 'Reiniciar calificaciones LTI';
$string['resetltis'] = 'Calificaciones LTI';
$string['resetltis_help'] = 'Como manejar calificaciones LTI dentro del curso.
Si es usada la configuración de \'Reiniciar calificaciones LTI\', todas las calificaciones LTI serán reiniciadas a 0.
Cuando el usuario archivó nueva finalización en el curso, la calificación actualizada del curso será re-enviada al proveedor LTI.';
$string['resetmycompletion'] = 'Reiniciar mi finalización de actividad';
$string['resetquizoverride'] = 'Reiniciar anulaciones de usuario de examen';
$string['restricted'] = 'Reiniciar finalización para un usuario dado está restringido';
$string['restrictedbyenrol'] = 'Reiniciar finalización para un usuario dado está restringido por método de inscripción';
$string['restrictenrol'] = 'Método de inscripción';
$string['restrictenrol_help'] = 'Solamente usuarios inscritos con métodos de inscripción seleccionados estarán incluidos en los datos de reinicio de finalización. Si ninguno está seleccionado, esto significa que no hay restricciones en métodos de inscripción por usuarios.';
$string['restrictionsettings'] = 'Configuraciones de restricciones';
$string['restrictionsheader'] = 'Restricciones';
$string['score'] = 'Puntaje';
$string['scormattempts'] = 'Intentos SCORM';
$string['scormattempts_help'] = 'Si deberían de ser eliminados los intentos SCORM existentes - si se selecciona archivar los intentos SCORM antiguos serán archivados en la tabla local_recompletion_sst.';
$string['starttime'] = 'Hora de inicio';
$string['status'] = 'Estado de finalización';
$string['timecreated'] = 'Hora de creado';
$string['timedout'] = 'Tiempo agotado';
$string['timemodified'] = 'Hora de modificado';
$string['yearly'] = 'Anualmente';
