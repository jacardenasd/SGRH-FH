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
 * Strings for component 'plagiarism_compilatio', language 'es_mx', version '4.4'.
 *
 * @package     plagiarism_compilatio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_report'] = 'Reporte de accesos';
$string['account_expire_soon_title'] = 'Su cuenta de Compilatio caduca pronto';
$string['activate_compilatio'] = 'Habilitar Compilatio';
$string['activate_submissiondraft'] = 'Para permitir que los alumnos analicen sus borradores, usted debe habilitar la opción  <b>{$a}</b> en la sección';
$string['activated'] = 'Permitir detección de textos sospechosos con Compilatios';
$string['activities_statistics'] = 'Estadísticas por actividad';
$string['activity'] = 'Actividad';
$string['admin_account_expire_content'] = 'Su suscripción actual terminará a finales del mes actual. Si su contrato no expira al fin del mes, una nueva suscripción se configurará automáticamente por nuestros servicios. Cuando esto esté hecho, este mensaje desaparecerá. Para más información, puede ponerse en contacto con nuestro departamento de ventas o soporte en support@compilatio.net.';
$string['admin_disabled_reports'] = 'El administrador no les permite a los profesores que muestren los reportes de análisis a los estudiantes.';
$string['admin_goto_helpcenter'] = 'cceder al Compilatio Support Centre para ver artículos relacionados con la administración del plugin para Moodle.';
$string['ai_included_in_subscription'] = 'detección de texto generado por IA</li></ul>';
$string['ai_not_included_in_subscription'] = 'Su suscripción NO incluye detección de texto escrito por IA.';
$string['ai_score_not_included'] = 'NO incluido en su suscripción';
$string['aiscore'] = 'Texto generado por IA';
$string['aiscore_percentage'] = 'Porcentaje de texto potencialmente generado por IA';
$string['allow_analyses_auto'] = 'Posibilidad de iniciar los análisis directamente';
$string['allow_analyses_auto_help'] = 'Esta opción le permitirá a los profesores activar el análisis automático de documentos en una actividad (por ejemplo, inmediatamente después que los hayan enviado)).<br>
Tenga en cuenta que en este caso:
<ul>
    <li>El número de escaneos realizado por su institución puede ser significativamente mayor.</li>
    <li>Los documentos de los primeros que enviaron NO son comparados con los documentos de los últimos en enviar.</li>
</ul>
Para poder comparar todos los documentos de una Tarea, es necesario usar el análisis "agendado", al elegir una fecha después de la fecha límite del envío.';
$string['allow_search_tab'] = 'Herramienta de búsqueda para identificar al autor del documento.';
$string['allow_search_tab_help'] = 'La herramienta de búsqueda le permite buscar un estudiante por su nombre y apellidos basados en un identificador de documento visible en los reportes de análisis entre los documentos presentes en su plataforma.';
$string['allow_student_analyses'] = 'Posibilidad de permitirle al estudiante análisis en borradores.';
$string['allow_student_analyses_help'] = 'Esta opción le permitirá a profesores activar en una actividad el análisis por estudiantes de sus documentos enviados en modo de borrador con Compilatio Magister, antes del envío final al profesor.';
$string['allow_teachers_to_show_reports'] = 'Posibilidad de mostrar reportes de similitud a estudiantes';
$string['analysed_docs'] = '{$a} documento(s) analizado(s)';
$string['analyses_restarted'] = '{$a} análisis reiniciados exitosamente.';
$string['analysing'] = 'Analizando documento';
$string['analysing_docs'] = '{$a} documento(s) siendo analizado(s)';
$string['analysis'] = 'Inicio del Análisis';
$string['analysis_auto'] = 'Inicio del Análisis';
$string['analysis_auto_help'] = '<p>Usted tiene tres opciones:
    <ul>
        <li><strong>Manual:</strong> El análisis de documentos debe ser disparado manualmente con el botón para  “Analizar” de cada documento o con el botón de  “Analizar todos los documentos”.</li>
        <li><strong>Agendado: </strong> Todos los documentos son analizados en la fecha/hora seleccionada.</li>
        <li><strong>Directo: </strong> Cada documento es analizado tan pronto como el estudiante lo envía. Los documentos en la actividad no serán comparados entre ellos.</li>
    </ul>
    Para tener a todos los documentos comparados entre ellos durante el análisis, espere hasta que todos los trabajos sean enviados por los estudiantes y después dispare los análisis.</p>';
$string['analysis_completed'] = 'Análisis completado: {$a} % de textos sospechosos.';
$string['analysis_date'] = 'Fecha del Análisis (Análisis agendados solamente)';
$string['analysis_help'] = '<p>Usted tiene dos opciones:
    <ul>
        <li><strong>Manual:</strong> El análisis de documentos debe ser disparado manualmente con el botón para  “Analizar” de cada documento o con el botón de  “Analizar todos los documentos”.</li>
        <li><strong>Agendado: </strong> Todos los documentos son analizados en la fecha/hora seleccionada.</li>
    </ul>
    Para tener a todos los documentos comparados entre ellos durante el análisis, espere hasta que todos los trabajos sean enviados por los estudiantes y después dispare los análisis.</p>';
$string['analysis_started'] = '{$a} análisis han sido solicitados.';
$string['analysistype'] = 'Inicio del Análisis';
$string['analysistype_auto'] = 'Directo';
$string['analysistype_auto_help'] = '<p>Usted tiene tres opciones:
    <ul>
        <li><strong>Manual:</strong> Análisis de documentos debe ser disparado manualmente con el botón para  “Analizar” de cada documento, o con el botón para “Analizar todos los documentos”.</li>
        <li><strong>Agendada: </strong> Todos los documerntos son analizados en la fecha/hora seleccionada.</li>
        <li><strong>Directo: </strong> Cada documento es analizado tan pronto como el estudiante lo envía. Los documentos en la actividad NO serán comparados entre ellos.</li>
    </ul>
    Para tener a todos los documentos comparados entre ellos durante los análisis, espere hasta que todos los trabajos hayan sido enviados por estudiantes y después dispare los análisis.</p>';
$string['analysistype_help'] = '<p>Usted tiene dos opciones:
    <ul>
        <li><strong>Manual:</strong> Análisis de documentos debe ser disparado manualmente con el botón para  “Analizar” de cada documento, o con el botón para “Analizar todos los documentos”.</li>
        <li><strong>Agendada: </strong> Todos los documentos son analizados en la fecha/hora seleccionada.</li>
    </ul>
    Para tener a todos los documentos comparados entre ellos durante los análisis, espere hasta que todos los trabajos hayan sido enviados por estudiantes y después dispare los análisis.</p>';
$string['analysistype_manual'] = 'Manual';
$string['analysistype_prog'] = 'Agendado';
$string['analyze'] = 'Analizar';
$string['analyzing'] = 'Analizando';
$string['api_key_not_tested'] = 'Su clave API NO ha sido verificada porque ha fallado la conexión a Compilatio.';
$string['api_key_not_valid'] = 'Su clave API no es válida. Es específica para la plataforma usada. Usted puede obtener una al ponerse en contacto (ent@compilatio.net).';
$string['api_key_valid'] = 'Su clave API es válida';
$string['apiconfiguration'] = 'Configuración API';
$string['apikey'] = 'Clave API';
$string['apikey_help'] = 'Código personal proporcionado por compilatio para acceder a la API';
$string['assign_statistics'] = 'Estadísticas sobre Tareas';
$string['auto_diagnosis_title'] = 'Auto-diagnóstico';
$string['average'] = 'Tasa promedio';
$string['average_similarities'] = 'En esta tarea, la tasa de textos sospechosos promedio es {$a}%.';
$string['badqualityanalysis'] = 'Se encontraron problemas mientras se analizaban los documentos. Es posible que ciertos orígenes no hayan sido identificados, o el resultado podría estar incompleto.';
$string['btn_analysing'] = 'Análisis en progreso';
$string['btn_error_analysis_failed'] = 'Análisis falló';
$string['btn_error_extraction_failed'] = 'Falló la extracción';
$string['btn_error_not_found'] = 'Documento NO encontrado';
$string['btn_error_sending_failed'] = 'Falló el envío';
$string['btn_error_too_large'] = 'Archivo demasiado grande';
$string['btn_error_too_long'] = 'Documento demasiado grande';
$string['btn_error_too_short'] = 'Documento demasiado corto';
$string['btn_error_unsupported'] = 'Archivo NO soportado';
$string['btn_planned'] = 'Análisis planeado';
$string['btn_queue'] = 'En la cola';
$string['btn_sent'] = 'Analizar';
$string['btn_unsent'] = 'Enviar';
$string['certificate'] = 'Certificado del análisis';
$string['compi_student_analyses'] = 'Permitirle a estudiantes analizar sus documentos';
$string['compi_student_analyses_help'] = 'Esto le permite a estudiantes el analizar sus archivos de borradores con Compilatio Magister, antes del envío final al profesor.';
$string['compilatio'] = 'Plugin de plagio compilatio';
$string['compilatio:enable'] = 'Permitirle al profesor habilitar/deshabilitar Compilatio dentro de una actividad';
$string['compilatio:resetfile'] = 'Permitirle al profesor re-enviar el archivo a Compilatio después de un error';
$string['compilatio:triggeranalysis'] = 'Permitirle al profesor disparar manualmente análisis.';
$string['compilatio:viewreport'] = 'Permitirle al profesor ver el reporte completo de Compilatio';
$string['compilatio_author'] = 'El documento {$a->idcourt} en la actividad <b>{$a->modulename}</b> pertenece a <b>{$a->lastname} {$a->firstname}</b>.';
$string['compilatio_depositor'] = 'El documento en la actividad <b>{$a->modulename}</b> fue enviado por el usuario Moodle  <b>{$a->lastname} {$a->firstname}</b>.';
$string['compilatio_display_student_report'] = 'Mostrar reporte de similitud al estudiante';
$string['compilatio_display_student_report_help'] = 'El reporte de similitud da un desglose de cuales partes del envío fueron plagiadas y la ubicación de las fuentes detectadas.';
$string['compilatio_display_student_score'] = 'Mostrar puntaje de similitud al estudiante';
$string['compilatio_display_student_score_help'] = 'El puntaje de similitud es el porcentaje del envío que ha sido concordado con otro contenido.';
$string['compilatio_help_assign'] = 'Mostrar ayuda acerca del plugin Compilatio';
$string['compilatio_iddocument'] = 'Identificador del documento';
$string['compilatio_maintenance_content'] = 'Los servicios de Compilatio se encuentran en mantenimiento programado.
Esta interrupción debería ser de corta duración.<br>
Suscríbete a nuestra página
<a href="https://support.compilatio.net/hc/{$a}/articles/13326036778769-Compilatio-Etat-des-services" target="_blank"
style="text-decoration: none;">
<strong>estado del servicio</strong>
</a>
para recibir información cuando la aplicación vuelva a la normalidad.';
$string['compilatio_maintenance_title'] = 'Aplicación Compilatio en mantenimiento';
$string['compilatio_search'] = 'Buscar';
$string['compilatio_search_help'] = 'Usted puede encontrar a un depositario de un documento al conseguir el identificador del documento de entre los orígenes del reporte del análisis.';
$string['compilatio_search_notfound'] = 'NO se encontró ningún documento para este identificador entre los documentos cargados en su plataforma Moodle.';
$string['compilatio_search_tab'] = 'Encontrar al depositante de un documento';
$string['compilatio_studentemail'] = 'Mandar E-mail al estudiante';
$string['compilatio_studentemail_help'] = 'Esto le mandará un correo electónico al estudiante cuando un archivo haya sido procesado, para que sepa que está disponible un reporte.';
$string['compilatioapi'] = 'Dirección del ApI de Compilatio';
$string['compilatioapi_help'] = 'Esta es la dirección del API de Compilatio';
$string['compilatiodate'] = 'Fecha de activación';
$string['compilatiodate_help'] = 'Haga clic en  \\"Habilitar\\" si desea que esta configuración de API sea activada automáticamente en una fecha deseada. Deje vacía la fecha si quiere activarla de inmediato.';
$string['compilatiodefaults'] = 'Valores por defecto de Compilatio';
$string['compilatioenableplugin'] = 'Habilitar Compilatio para {$a}';
$string['compilatioexplain'] = 'Para más información sobre este plugin, vea:a href=\\"http://www.compilatio.net/en/\\" target=\\"_blank\\">compilatio.net</a>';
$string['compilatiopassword'] = 'Clave API';
$string['compilatiopassword_help'] = 'Código personal proporcionado por Compilatio para acceder al API';
$string['context'] = 'Contexto';
$string['cron_check'] = 'Los trabajos agendados del plugin get_scores han sido ejecutados en {$a} por última vez.';
$string['cron_check_never_called'] = 'Los trabajos agendados de get_scores nunca han sido ejecutados desde la activación del plugin. Podrían estar mal configurados en su servidor.';
$string['cron_check_not_ok'] = 'Los trabajos agendados del plugin get_scores  NO han sido ejecutados en la última hora.';
$string['cron_frequency'] = 'Al parecer corre cada {$a} minutos.';
$string['cron_recommandation'] = 'Recomendamos usar una demora menor de 15 minutos entre cada ejecución para los trabajos agendados del plugin Compilatio.';
$string['defaultindexing'] = 'Añadir documento a la Base de Datos de Documentos';
$string['defaultindexing_help'] = 'SI: Añadir documentos en la Base de Datos de documentos. estos documentos serán usados como material para comparación para análisis futuros.
NO: Los documentos NO son añadidos en la Base de Datos de documentos y NO serán usados para comparaciones.';
$string['defaults_desc'] = 'Las configuraciones siguientes son los ajustes por defecto al habilitar Compilatio dentro de un Módulo de Actividad';
$string['defaultupdated'] = 'Valores por defecto actualizados';
$string['detailed'] = 'Reporte detallado';
$string['detailed_error_analysis_failed'] = 'El análisis de estos documentos NO funcionó correctamente. Usted puede reiniciar estos documentos.';
$string['detailed_error_extraction_failed'] = 'La extracción de estos documentos no funcionó correctamente. Puede reiniciar estos documentos..';
$string['detailed_error_not_found'] = 'estos documentos NO fueron encontrados. Por favor póngase en contacto con su administrador de Moodle. Error : documento No encontrado para esta clave API.';
$string['detailed_error_sending_failed'] = 'Estos documentos NO pudieron ser enviados a Compilatio. Usted puede re-enviar estos documentos.';
$string['detailed_error_too_large'] = 'Estos documentos NO pudieron ser analizados por compilatio porque son demasiado grandes (Tamaño máximo: {$a} MB).';
$string['detailed_error_too_long'] = 'Estos documentos no pudieron ser analizados por Compilatio porque contenían demasiadas palabras (Tamaño máximo: {$a} palabras).';
$string['detailed_error_too_short'] = 'Estos documentos no pudieron ser analizados por Compilatio porque no contenían suficientes palabras (Tamaño mínimo: {$a} palabras).';
$string['detailed_error_unsupported'] = 'Estos documentos no pudieron ser analizados por Compilatio porque su formato no está soportado.';
$string['disable_ssl_verification'] = 'Ignorar verificación de certificado SSL.';
$string['disable_ssl_verification_help'] = 'Habilite esta opción si tiene problemas verificando certificados SSL o en caso de que usted experimente errores al enviar archivos a Compilatio';
$string['disabled_in_maintenance'] = 'Deshabilitado durante el mantenimiento';
$string['disclaimer_data'] = 'Al habilitar Compilatio, Usted acepta el hecho de que los datos acerca de su configuración de Moodle serán colectados para mejorar el soporte y mantenimiento de este servicio.';
$string['display_notifications'] = 'Mostrar notificaciones';
$string['display_settings_frame'] = 'Mostrar configuraciones para puntajes';
$string['display_stats'] = 'Mostrar estadísticas acerca de esta actividad';
$string['display_stats_per_student'] = 'Mostrar estadísticas por estudiante acerca de esta actividad';
$string['document_deleting'] = 'Eliminación de documentos';
$string['document_reset_failures'] = '{$a} fallas de reinicio de documento';
$string['document_sent'] = '{$a} documentos enviados exitosamente.';
$string['documents_analyzed'] = '{$a->countAnalyzed} documento(s) de un total de {$a->documentsCount} han sido enviados y analizados.';
$string['documents_analyzed_between_thresholds'] = '{$a->documentsBetweenThresholds} documento(s) entre {$a->greenThreshold}% y {$a->redThreshold}%.';
$string['documents_analyzed_higher_red'] = '{$a->documentsAboveRedThreshold} documento(s) mayores de {$a->redThreshold}%.';
$string['documents_analyzed_lower_green'] = '{$a->documentsUnderGreenThreshold} documento(s) menores de {$a->greenThreshold}%.';
$string['documents_analyzing'] = '{$a} documento(s) está(n) siendo analizado(s).';
$string['documents_failed'] = '{$a} documento(s) cuyo análisis no funcionó correctamente.';
$string['documents_in_queue'] = '{$a} documento(s) está(n) en la cola para ser analizado(s).';
$string['documents_notfound'] = '{$a} documento(s) no fue(ron) encontrado(s).';
$string['documents_number'] = 'Documentos analizados';
$string['download_compilatio_database_button'] = 'Descargar tablas de Compilatio';
$string['download_compilatio_database_content'] = 'Exportar tablas de bases de datos de Compilatio a un archivo ZIP:';
$string['download_compilatio_database_title'] = 'Descargar tablas de bases de datos de Compilatio';
$string['download_report_failed'] = 'Ocurrió un error al descargar el reporte del análisis.';
$string['element_included_in_subscription'] = 'Su suscripción incluye: <ul><li>detección de similitud</li><li>detección de textos alterados';
$string['enable_activities_title'] = 'Habilitar Compilatio para actividades';
$string['enable_analyses_auto'] = 'Posibilidad de iniciar los análisis directamente';
$string['enable_analyses_auto_help'] = 'Esta opción le permitirá a los profesores el activar la invocación automática del análisis de documentos en una actividad (por ejemplo, después de que hayan sido enviados).<br>
Tenga en cuenta que en este caso :
<ul>
    <li>El número de revisiones realizadas por su institución puede ser significativamente mayor.</li>
    <li>Los documentos de l  primeros que enviaron no son comparados contra los documentos de los últimos depositarios.</li>
</ul>
Para poder comparar todos los documentos en una tarea, es necesario usar el análisis "agendado", al elegir una fecha posterior a la fecha límite para enviar.';
$string['enable_javascript'] = 'Por favor, habilite Javacript para poder tener una mejor experiencia con el plugin Compilatio.<br/>
Aquí están las   <a href=\\"http://www.enable-javascript.com/\\" target=\\"_blank\\"> instrucciones acerca de como habilitar JavaScript en su navegador web</a>.';
$string['enable_mod_assign'] = 'Tareas';
$string['enable_mod_forum'] = 'Foros';
$string['enable_mod_quiz'] = 'Examen';
$string['enable_mod_workshop'] = 'Talleres';
$string['enable_search_tab'] = 'Herramienta de búsqueda para identificar al autor de un documento.';
$string['enable_search_tab_help'] = 'La herramienta de búsqueda le permite buscar por el nombre y apellido(s) de un estudiante basados en un identificador del documento visible en los reportes de análisis entre todos los documentos presentes en su plataforma.';
$string['enable_show_reports'] = 'Posibilidad de mostrar reportes de análisis a estudiantes';
$string['enable_student_analyses'] = 'Posibilidad de habilitar análisis de borradores de estudiante.';
$string['enable_student_analyses_help'] = 'Esta opción le permite a los profesores activar en una actividad el análisis por estudiantes de sus documentos enviados en modo de borrador con Compilatio Magister, antes del envío final al profesor.';
$string['enabledandworking'] = 'El plugin de Compilatio está habilitado y funcionando.';
$string['error'] = 'Error';
$string['errors'] = 'Errores';
$string['excluded_from_score'] = 'Excluir del puntaje:';
$string['export_csv'] = 'Exportar datos acerca de esta tarea en un archivo CSV';
$string['export_csv_per_student'] = 'Exportar los resultados de este estudiante en un archivo CSV';
$string['export_global_csv'] = 'Hacer clic aquí para exportar estos datos en formato CSV';
$string['export_raw_csv'] = 'Hacer clic aquí para exportar datos crudos en formato CSV';
$string['extraction_in_progress'] = 'extracción del documento en progreso; por favor inténtelo nuevamente más tarde';
$string['failed'] = 'El análisis de este documento no funcionó correctamente.';
$string['failedanalysis'] = 'Compilatio no pudo analizar su documento:';
$string['failedanalysis_files'] = 'El análisis de los siguientes documentos no funcionó correctamente. Usted puede reiniciar estos documentos y re-lanzar sus análisis.';
$string['file'] = 'Archivo';
$string['filename'] = 'Nombredearchivo';
$string['filereset'] = 'Un archivo ha sido reiniciado para re-envío a Compilatio';
$string['firstname'] = 'Nombre(s)';
$string['formapikey'] = 'Clave API';
$string['formcheck'] = 'Comprobar';
$string['formdelete'] = 'Eliminar';
$string['formenabled'] = 'Habilitado';
$string['formstartdate'] = 'Fecha de activación';
$string['formurl'] = 'URL de API';
$string['get_scores'] = 'Obtener puntajes de plagio desde Compilatio';
$string['global_statistics'] = 'Estadísticas Globales';
$string['global_statistics_description'] = 'Todos los datos de los documentos enviados a Compilatio.';
$string['globalscore'] = 'Total';
$string['goto_compilatio_service_status'] = 'Ver estado de servicios de Compilatio.';
$string['goto_helpcenter'] = 'Hacer clic en el signo de interrogación para abrir una nueva ventana y conectarse con el Compilatio Help Centre.';
$string['green_threshold'] = 'Verde hasta';
$string['help_compilatio_format_content'] = 'Compilatio maneja la mayoría de los formatos usados en procesadores de texto y en Internet. Los formatos siguientes están soportados :';
$string['helpcenter'] = 'Acceder al Centro de Ayuda de Compilatio para el uso del plugin Compilatio en Moodle.';
$string['helpcenter_error'] = 'Usted NO puede conectarse automáticamente al centro de ayuda. Por favor inténtelo de nuevo después o vaya allí directamente usando el enlace siguiente :';
$string['hide_area'] = 'Ocultar Informaciones de Compilatio';
$string['immediately'] = 'Inmediatamente';
$string['include_percentage_in_suspect_text'] = 'Incluir en el porcentaje de textos sospechosos mostrados :';
$string['indexed_document'] = 'Documento añadido a la base de datos de documentos de su institución. Su contenido podrá utilizarse para detectar similitudes con otros documentos.';
$string['indexing_state'] = 'Añadir documentos a la Base de Datos de Documentos';
$string['indexing_state_help'] = 'Si: Añadir documentos en la base de datos de documentos. Estos documentos serán usados como material de comparación para análisis futuros.
No: Los documentos no son añadidos en la base de datos de documentos y no serán usados para comparaciones.';
$string['info_cm_activated'] = 'Documentos enviados en esta actividad son subidos a la cuenta Compilatio {$a}.<br>Todos los profesores inscritos en este curso pueden usar Compilatio en esta actividad.';
$string['info_cm_activation'] = 'Al activar Compilatio en esta actividad, los documentos enviados serán subidos a su cuenta Compilatio {$a}.<br>Todos los profesores inscritos en este curso podrán usar Compilatio en esta actividad.';
$string['information_settings'] = 'Informaciones';
$string['keep_docs_indexed'] = 'Conservar documentos en biblioteca de referencia';
$string['keep_docs_indexed_help'] = 'Cuando se elimina un curso, se reinicia un curso, o al eliminar una actividad, usted puede elegir eliminar permanentemente los documentos enviados a Compilatio o conservarlos en la biblioteca de referencia (solamente el texto será conservado y será usado como material de comparación en sus siguientes análisis.';
$string['lastname'] = 'Apellido(s)';
$string['loading'] = 'Cargando, por favor espere...';
$string['manual_analysis'] = 'El análisis de este documento debe ser disparado manualmente.';
$string['manual_send_confirmation'] = '{$a} archivo(s) ha(n) sido enviado(s) a Compilatio.';
$string['max_attempts_reach_files'] = 'El análisis ha sido interrumpido para los archivos siguientes. Los análisis fueron enviados demasiadas veces, Usted ya NO puede reiniciarlos más :';
$string['max_file_size'] = 'Los archivos no deben exceder de <strong>{$a} MB</strong>';
$string['max_file_size_allowed'] = 'Tamaño máximo de documento : <strong>{$a->Mo} MB</strong>';
$string['maximum'] = 'Tasa máxima';
$string['migration_apikey'] = 'Ingresar la nueva clave API v5';
$string['migration_btn'] = 'Iniciar la actualización de los datos almacenados en Moodle';
$string['migration_completed'] = 'Actualización completada:';
$string['migration_failed_doc'] = 'documento no pudo ser actualizado; puede intentar más tarde actualizar estos documentos al final de la actualización';
$string['migration_form_title'] = 'Lanzar la actualización de los datos almacenados en Moodle, para completar la migración de v4 a v5.';
$string['migration_info'] = 'Compilatio está implementando una nueva plataforma técnica v5 para todos sus clientes.<br>
    Cuando se lo pida el equipo técnico, usted necesitará realizar una acción para completar esta migración..';
$string['migration_inprogress'] = 'Actualización ne progreso. Puede tomar varias horas <small>(usted puede salir de esta página durante la actualización)</small>';
$string['migration_np'] = 'Usted puede usar el plugin Compilatio aunque la migración no haya terminado.';
$string['migration_restart'] = 'Re-intentar';
$string['migration_success_doc'] = 'documentos han sido actualizados';
$string['migration_task'] = 'Actualizar documentos de v4 a v5';
$string['migration_title'] = 'Migración v4 a v5';
$string['migration_toupdate_doc'] = 'documentos a actualizar';
$string['minimum'] = 'Tasa mínima';
$string['news_analysis_perturbated'] = 'Compilatio - Análisis perturbado';
$string['news_incident'] = 'Incidente en Compilatio';
$string['news_maintenance'] = 'Mantenimiento de Compilatio';
$string['news_update'] = 'Actualización en Compilatio';
$string['next_student'] = 'Siguiente estudiante';
$string['no_document_analysed'] = 'Sin documentos analizados';
$string['no_document_available_for_analysis'] = 'No había documentos disponibles para análisis';
$string['no_document_to_display'] = 'Sin documentos para mostrar';
$string['no_documents_available'] = 'No hay documentos disponibles para análisis en esta actividad.';
$string['no_documents_to_reset'] = 'Sin documentos para reiniciar';
$string['no_notification'] = 'Sin notificación';
$string['no_statistics_yet'] = 'Aun no se ha analizado ningún documento.';
$string['no_students_finished_quiz'] = 'Ningún estudiante terminó el examen';
$string['not_analysed'] = 'NO analizado';
$string['not_analyzed'] = 'Los documentos siguientes no pueden ser analizados :';
$string['not_analyzed_extracting'] = 'Los documentos siguientes NO pueden ser analizados porque están siendo extraídos; por favor inténtelo de nuevo más tarde.';
$string['not_analyzed_toolong'] = '{$a} documentos no han sido analizados porque contiene demasiadas palabras.';
$string['not_analyzed_tooshort'] = '{$a} documentos no han sido analizados porque no contiene suficientes palabras.';
$string['not_analyzed_unextractable'] = '{$a} documento(s) no han sido analizados porque no pudieron ser cargados a Compilatio.';
$string['not_analyzed_unsupported'] = '{$a} documento(s) no han sido analizados porque sus formatos no están soportados.';
$string['not_indexed_document'] = 'Documento no añadido a la base de datos de documentos de su institución. Su contenido no será utilizado para detectar similitudes con otros documentos.';
$string['not_sent'] = 'Los siguientes documentos NO pudieron ser enviados:';
$string['notfound'] = 'Este documento NO fue encontrado. Por favor póngase en contacto con su administrador Moodle.
Error: documento no encontrado para esta clave API.';
$string['notifications'] = 'Notificaciones';
$string['numeric_threshold'] = 'El umbral debe ser un número.';
$string['open'] = 'Abrir';
$string['orange_threshold'] = 'Naranja hasta';
$string['other_analysis_options'] = 'Otras opciones de análisis';
$string['owner_file'] = 'GDPR y propiedad del documento';
$string['owner_file_school'] = 'La escuela es propietaria del documento';
$string['owner_file_school_details'] = 'Cuando un estudiante solicita eliminar todos sus datos, sus documentos y reportes serán almacenados y estarán disponibles para comparaciones futuras con otros documentos. Al final del contrato con Compilatio, todos los datos personales de su escuela, incluyendo los documentos analizados, son eliminados dentro de las fechas límites del contrato.';
$string['owner_file_student'] = 'El estudiante es el único propietario del documento';
$string['owner_file_student_details'] = 'Cuando un estudiante solicita eliminar todos sus datos, sus documentos y reportes serán eliminados de Moodle y de la Base de Datos de documentos de Compilatio. Los documentos ya no estarán disponibles para comparación con otros documentos.';
$string['pending'] = 'Este archivo está pendiente de enviar a Compilatio';
$string['pending_status'] = 'Pendiente';
$string['planned'] = 'Planeado';
$string['plugin_disabled'] = 'Este plugin no está habilitado en la plataforma Moodle';
$string['plugin_disabled_assign'] = 'El plugin no está habilitado para Tareas.';
$string['plugin_disabled_forum'] = 'El plugin no está habilitado para Foros.';
$string['plugin_disabled_quiz'] = 'El plugin NO está habilitado para examen.';
$string['plugin_disabled_workshop'] = 'El plugin no está habilitado para Talleres.';
$string['plugin_enabled'] = 'Este plugin está habilitado en la plataforma Moodle';
$string['plugin_enabled_assign'] = 'El plugin está habilitado para Tareas.';
$string['plugin_enabled_forum'] = 'El plugin está habilitado para Foros.';
$string['plugin_enabled_quiz'] = 'El plugin está habilitado para examen.';
$string['plugin_enabled_workshop'] = 'El plugin está habilitado para Talleres.';
$string['pluginname'] = 'Plugin de detección de plagio Compilatio';
$string['previous_student'] = 'Estudiante anterior';
$string['previouslysubmitted'] = 'Previamente enviado como';
$string['privacy:metadata:core_files'] = 'Archivos anexos a envíos o creados desde envíos de texto en línea';
$string['privacy:metadata:core_plagiarism'] = 'Este plugin es llamado por el subsistema de plagio de Moodle';
$string['privacy:metadata:external_compilatio_document'] = 'Información y contenido de los documentos en la Base de Datos de Compilatio';
$string['privacy:metadata:external_compilatio_document:authors'] = 'Nombre, apellido(s) y Email del usuario Moodle (o miembros del grupo) que envió el archivo';
$string['privacy:metadata:external_compilatio_document:depositor'] = 'Nombre, apellido(s) y Email del usuario Moodle que envió el archivo';
$string['privacy:metadata:external_compilatio_document:filename'] = 'El nombre del archivo enviado o nombre generado para texto en lìnea';
$string['privacy:metadata:external_compilatio_user'] = 'Información acerca del profesor que creó un módulo de curso con Compilatio';
$string['privacy:metadata:external_compilatio_user:email'] = 'Email del profesor';
$string['privacy:metadata:external_compilatio_user:firstname'] = 'Nombre del profesor';
$string['privacy:metadata:external_compilatio_user:lastname'] = 'Apellido(s) del profesor';
$string['privacy:metadata:external_compilatio_user:username'] = 'Email del profesor';
$string['privacy:metadata:plagiarism_compilatio_cm_cfg'] = 'Archivos de información acerca de configuración';
$string['privacy:metadata:plagiarism_compilatio_cm_cfg:cmid'] = 'ID compilatio del módulo';
$string['privacy:metadata:plagiarism_compilatio_cm_cfg:userid'] = 'La ID Moodle del profesor';
$string['privacy:metadata:plagiarism_compilatio_files'] = 'Información acerca de archivos enviados a Compilatio';
$string['privacy:metadata:plagiarism_compilatio_files:filename'] = 'Nombre de archivo enviado o nombre generado para texto en lìnea';
$string['privacy:metadata:plagiarism_compilatio_files:userid'] = 'La ID del usuario Moodle que hizo el envío';
$string['privacy:metadata:plagiarism_compilatio_user'] = 'Información acerca del profesor que creó un módulo de curso con Compilatio';
$string['privacy:metadata:plagiarism_compilatio_user:compilatioid'] = 'La ID Compilatio del profesor';
$string['privacy:metadata:plagiarism_compilatio_user:userid'] = 'La ID Moodle del profesor';
$string['processing_doc'] = 'Compilatio está analizando este archivo.';
$string['programmed_analysis_future'] = 'Los documentos serán analizados por Compilatio en {$a}.';
$string['programmed_analysis_past'] = 'Documentos han sido enviados para análisis a Compilatio en {$a}.';
$string['progress'] = 'Progreso';
$string['queue'] = 'Cola';
$string['queued'] = 'Este documento ahora está en cola y va a ser analizado pronto por Compilatio';
$string['queuing_docs'] = '{$a} documento(s) esperando análisis';
$string['quiz_help'] = 'Solamente preguntas de ensayo cuya respuesta contenga al menos {$a} palabras serán analizadas.';
$string['read_only_apikey'] = 'Su clave API de solo-lectura no permite la subida ni el análisis de documentos.';
$string['read_only_apikey_error'] = 'Su clave API de solo-lectura no permite actualizar o analizar documentos.';
$string['read_only_apikey_title'] = 'Clave de solo-lectura.';
$string['red_threshold'] = 'rojo en caso contrario';
$string['redirect_report_failed'] = 'Ocurrió un error al recuperar el reporte de análisis. Por favor inténtelo nuevamente más tarde o póngase en contacto con soporte (support@compilatio.net) si el problema persiste.';
$string['report'] = 'reporte';
$string['reporttype'] = 'Reporte disponible para estudiantes';
$string['reporttype_help'] = '<p>Hay 2 opciones posibles :</p>
<ul>
    <li><strong> Certificado del análisis :</strong> El estudiante tendrá acceso al certificado del análisis de su documento.</li>
    <li><strong> Reporte detallado :</strong> El estudiante tendrá acceso a la versión PDF del reporte.</li>
</ul>';
$string['resend_document_in_error'] = 'Re-enviar documetos en error';
$string['reset'] = 'Reiniciar';
$string['reset_docs_in_error'] = 'Reiniciar documentos en error';
$string['reset_docs_in_error_in_progress'] = 'Reinicio de documentos en error en progreso';
$string['reset_documents_in_error'] = 'Reiniciar documentos en error';
$string['reset_failed_document'] = 'Reiniciar documento en error';
$string['reset_failed_document_in_progress'] = 'Reiniciar documento en error en progreso';
$string['reset_failed_document_title'] = 'Reiniciar documento en error:';
$string['response_type'] = 'Tipo de respuesta';
$string['restart_failed_analyses'] = 'Reiniciar análisis fallidos';
$string['results'] = 'Resultados';
$string['results_by_student'] = 'Resultados por estudiante';
$string['saved_config_failed'] = '<strong>La combinación clave API - dirección ingresada es inválida. Compilatio está deshabilitado; por favor inténtelo nuevamente.<br/>
La página de <a href=\\"autodiagnosis.php\\">auto-diagnosis</a> puede ayudarle para configurar este plugin.</strong><br/>
Error :';
$string['savedconfigsuccess'] = 'Configuraciones de Plagio Guardadas';
$string['score'] = 'Puntaje';
$string['score_settings_info'] = 'Actualizar puntajes afectará a todos los documentos analizados en la tarea,<br>  incluyendo aquellos modificados individualmente.';
$string['see_all_notifications'] = 'Ver todas las notificaciones';
$string['select_a_student'] = 'Seleccionar un estudiante';
$string['send_all_documents'] = 'Enviar todos los documentos';
$string['send_documents_in_progress'] = 'Envío de documentos en progreso';
$string['send_files'] = 'Subir archivos a Compilatio para detección de plagio';
$string['sending_failed'] = 'Falló la subida de archivo a Compilatio {$a}';
$string['short_error_analysis_failed'] = 'análisis fallidos.';
$string['short_error_extraction_failed'] = 'falló la extracción de documentos';
$string['short_error_not_found'] = 'documentos NO encontrados.';
$string['short_error_sending_failed'] = 'envío falló.';
$string['short_error_too_large'] = 'documentos demasiado grandes.';
$string['short_error_too_long'] = 'documentos demasiado largos.';
$string['short_error_too_short'] = 'documentos demasiado cortos.';
$string['short_error_unsupported'] = 'documentos no soportados.';
$string['show_area'] = 'Mostrar informaciones de Compilatio';
$string['showstudentreport'] = 'Mostrar reporte de análisis al estudiante';
$string['showstudentreport_help'] = 'El reporte de análisis da un desglose de cuales partes del envío fueron plagiadas y la localización de los orígenes detectados.';
$string['showstudentscore'] = 'Mostrar puntaje de textos sospechosos al estudiante';
$string['showstudentscore_help'] = 'El puntaje de textos sospechoso es el porcentaje del envío que potencialmente podría ser no auténtico.';
$string['showwhenclosed'] = 'Cuando se cierre la Actividad';
$string['similarities'] = 'Textos sospechosos';
$string['similarities_disclaimer'] = 'Usted puede analizar textos sospechosos en los documentos de esta actividad con <a href=\'http://www.compilatio.net/en/\' target=\'_blank\'>Compilatio</a>.<br/> Sea cuidadoso: llos textos sospechosos medidos durante el análisis no necesariamente significan que hubo plagio. El reporte del análisis le ayuda a identificar si los textos sospechosos coinciden con citaciones apropiadas o con plagio.';
$string['similarity_percent'] = '% of textos sospechosos';
$string['simscore'] = 'Similitudes';
$string['simscore_percentage'] = 'Porcentaje de similitudes';
$string['start_all_analysis'] = 'Analizar todos los documentos';
$string['start_analysis_in_progress'] = 'Invocación de los análisis en progreso';
$string['start_analysis_title'] = 'Análisis inicia';
$string['start_selected_files_analysis'] = 'Analizar documentos seleccionados';
$string['start_selected_questions_analysis'] = 'Analizar preguntas seleccionadas';
$string['startallcompilatioanalysis'] = 'Analizar todos los documentos';
$string['startanalysis'] = 'Iniciar análisis';
$string['statistics_title'] = 'Estadísticas';
$string['stats_avg'] = 'Promedio';
$string['stats_error_unknown'] = 'errores desconocidos';
$string['stats_errors'] = 'Errores';
$string['stats_failed'] = 'Análisis fallaron';
$string['stats_max'] = 'Máximo';
$string['stats_min'] = 'Mínimo';
$string['stats_notfound'] = 'Archivo no encontrado';
$string['stats_score'] = 'Porcentaje de textos sospechosos';
$string['stats_threshold'] = 'Número de documentos por unbral';
$string['stats_toolong'] = 'Archivo contiene demasiadas palabras';
$string['stats_tooshort'] = 'Archivo no contiene suficientes palabras';
$string['stats_unextractable'] = 'El archivo no pudo se subido a Compilatio';
$string['stats_unsupported'] = 'Formato de archivo No soportado';
$string['student'] = 'Estudiante';
$string['student_analyse'] = 'El análisis puede ser iniciado por el estudiante';
$string['student_analyze'] = 'Análisis del estudiante';
$string['student_help'] = 'Usted puede analizar su borrador con Compilatio Magister, para medir similitudes en el texto de sus archivos.<br/>
    Los contenidos de su borrador NO serán usados por Compilatio como material de comparación para análisis futuros.<br/>
    Sin embargo, su profesor si tendrá acceso a este reporte del análisis.';
$string['student_start_analyze'] = 'El análisis puede ser iniciado por el estudiante';
$string['studentanalyses'] = 'Permitirle al estudiante analizar sus documentos';
$string['studentanalyses_help'] = 'Esto les permite a los estudiantes analizar sus borradores con Compilatio Magister, antes del envío final al profesor.';
$string['studentdisclosuredefault'] = 'Todos los archivos subidos aquí serán enviados al servicio para detección de textos sospechosos Compilatio';
$string['studentemailcontent'] = 'El archivo que Usted envió a {$a->modulename} en {$a->coursename}  ha sido ya procesado por la herramienta para detección de plagio Compilatio. {$a->modulelink}';
$string['studentemailsubject'] = 'Archivo procesado por Compilatio';
$string['students_disclosure'] = 'Declaratoria del estudiante';
$string['students_disclosure_help'] = 'Este texto será mostrado a todos los estudiantes en la página de subida de archivo.';
$string['subscription'] = '<b>Información acerca de su suscripción:</b>';
$string['subscription_analysis_count'] = 'Documentos analizados: {$a->usage} of {$a->value}';
$string['subscription_analysis_page_count'] = 'Páginas analizadas: {$a->usage} of {$a->value}';
$string['subscription_end'] = 'Fecha de término incluida:';
$string['subscription_start'] = 'Fecha de inicio:';
$string['subscription_will_expire'] = 'Su suscripción de Compilatio expirará al final de';
$string['suspect_words/total_words'] = 'palabras sospechosas / palabras totales';
$string['suspect_words_quiz_on_total'] = 'palabras sospechosas / <br>palabras totales';
$string['tabs_title_help'] = 'Ayuda';
$string['tabs_title_notifications'] = 'Notificaciones';
$string['tabs_title_stats'] = 'Estadísticas';
$string['tabs_title_technical_tools'] = 'Herramientas técnicas';
$string['teacher'] = 'Profesor';
$string['teacher_features_title'] = 'Características habilitadas para profesores';
$string['terms_of_service_info'] = '<a href=\'{$a}\'>Términos del Servicio</a> de Compilatio';
$string['text'] = 'Texto';
$string['thresholds_description'] = 'Indique el umbral que desea usar, para facilitar el hallazgo del reporte del análisis (% de textos sospechosos)';
$string['thresholds_settings'] = 'Límites :';
$string['timesubmitted'] = 'Enviado a Compilatio en';
$string['title_analysing'] = 'Compilatio está analizando este archivo.';
$string['title_error_analysis_failed'] = 'El análisis de este documento no funcionó correctamente.';
$string['title_error_extraction_failed'] = 'La extracción de este documento no funcionó correctamente.';
$string['title_error_not_found'] = 'Este documento NO fue encontrado. Por favor póngase en contacto con su administrador Moodle. Error : documento no encontrado para esta clave API.';
$string['title_error_sending_failed'] = 'Ocurrió un error al tratar de enviar este archivo a Compilatio';
$string['title_error_too_large'] = 'Este archivo es demasiado grande para que lo procese Compilatio . Tamaño máximo : {$a} MB';
$string['title_error_too_long'] = 'Este documento contiene demasiadas palabras a ser analizadas. Tamaño máximo : {$a} palabras';
$string['title_error_too_short'] = 'Este documento NO contiene suficientes palabras para que lo procese Compilatio. Tamaño mínimo : {$a} palabras';
$string['title_error_unsupported'] = 'Este tipo de archivo NO está soportado por Compilatio';
$string['title_planned'] = 'Este archivo será procesado en {$a}';
$string['title_queue'] = 'Este documento ahora está en cola y va a ser analizado pronto por Compilatio.';
$string['title_score'] = 'Análisis completado: {$a}% de textos sospechosos.';
$string['title_score_teacher'] = 'Si usted ha ignorado algún origen en el reporte, haga clic aquí para actualizar el puntaje.';
$string['title_sent'] = 'Iniciar análisis';
$string['title_unsent'] = 'Enviar el documento a Compilatio';
$string['toolarge'] = 'Este archivo es demasiado grande para que lo procese Compilatio. Tamaño máximo : {$a->Mo} MB';
$string['toolong'] = 'Este documento contiene demasiadas palabras para ser analizado. Tamaño máximo : {$a} palabras';
$string['toolong_files'] = 'Los siguientes archivos no pueden ser analizado por Compilatio porque contienen demasiadas palabras (Tamaño máximo : {$a} palabras) :';
$string['tooltip_detailed_scores'] = '% de textos sospechoso, incluyendo:';
$string['tooshort'] = 'Este documento no contiene suficientes palabras para que Compilatio lo procese. Tamaño mínimo : {$a} palabras';
$string['tooshort_files'] = 'Los siguientes campos no pueden ser analizados por Compilatio porque  no contiene suficientes palabras. Tamaño mínimo : {$a} palabras :';
$string['total'] = 'Total';
$string['trigger_analyses'] = 'Disparar análisis Compilatio';
$string['unextractable'] = 'Este documento no pudo ser cargado a Compilatio';
$string['unextractable_files'] = 'Los archivos siguientes no pudieron ser analizados por Compilatio, porque no pudieron ser cargados a Compilatio :';
$string['unextractablefile'] = 'Este documento no pudo ser cargado en Compilatio.';
$string['unknownlang'] = 'Precaución: el idioma de algunos pasajes en este documento no fue reconocido.';
$string['unknownwarning'] = 'Ocurrió un error al tratar de enviar este archivo a Compilatio';
$string['unmeasured'] = 'no medido';
$string['unsent_docs'] = 'Esta actividad contiene documentos NO enviados a Compilatio.';
$string['unsent_documents'] = 'Documento(s) no enviado(s)';
$string['unsent_documents_content'] = 'Esta actividad contiene documento(s) no enviado(s) a Compilatio.';
$string['unsupported'] = 'Documento no soportado';
$string['unsupported_files'] = 'Los archivos siguientes no pudieron ser analizados por Compilatio porque su formato no está soportado :';
$string['unsupportedfiletype'] = 'Este tipo de archivo no es soportado por Compilatio';
$string['update_in_progress'] = 'Actualizando información';
$string['update_meta'] = 'Realizar operaciones agendadas de Compilatio';
$string['updatecompilatioresults'] = 'Refrescar las informaciones';
$string['updated_analysis'] = 'Los resultados del análisis Compilatio han sido actualizados.';
$string['use_compilatio'] = 'Permitir detección de similitud con Compilatio';
$string['utlscore'] = 'Idioma no reconocido';
$string['utlscore_percentage'] = 'Porcentaje de tipos de idiomas no reconocidos';
$string['waitingforanalysis'] = 'Este archivo será procesado en {$a}';
$string['webservice_not_ok'] = 'El servidor no pudo conectarse al servidor web. Su firewall podría estar bloqueando la conexión.';
$string['webservice_ok'] = 'El servidor se puede conectar con el servidor web.';
$string['webservice_unreachable'] = 'Actualmente Compilatio no está disponible. Le pedimos disculpas por el inconveniente.';
$string['webservice_unreachable_content'] = 'Actualmente no está disponible Compilatio. Nos disculpamos por el inconveniente.';
$string['webservice_unreachable_title'] = 'Compilatio no está disponible.';
$string['word'] = 'palabras';
$string['word_limits'] = 'Para poder ser analizado, un texto debe tener entre {$a->min} y {$a->max} palabras';
$string['wrong_apikey_type'] = 'La clave API ingresada NO es válida; si usted ha actualizado recientemente la versión de su plugin de Compilatio póngase en contacto con soporte (support@compilatio.net) para obtener una clave nueva';
