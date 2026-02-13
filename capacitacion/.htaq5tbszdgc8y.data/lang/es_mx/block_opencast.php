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
 * Strings for component 'block_opencast', language 'es_mx', version '4.4'.
 *
 * @package     block_opencast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesspolicies'] = 'Políticas de Acceso';
$string['aclgroupdeleted'] = 'Acceso eliminado para video: {$a->title}';
$string['aclnothingtobesaved'] = 'No se han hecho cambios a la visibilidad';
$string['aclownerrole'] = 'Función de rol propietario de ACL';
$string['aclrolesadded'] = 'El cambio en visibilidad ha sido disparado para permitirles a todos los estudiantes del curso el acceso al video: {$a->title}<br />Por favor, refresque el sitio después de un tiempo para ver el estado actual de la visibilidad.';
$string['aclrolesaddedgroup'] = 'El cambio en visibilidad ha sido disparado para permitirles a los estudiantes de grupos seleccionados el acceso al video: {$a->title}<br />Por favor, refresque el sitio después de un tiempo para ver el estado actual de la visibilidad.';
$string['aclroleschangeerror'] = 'Error durante el cambio de visibilidad del video: {$a->title}<br />Algunos cambios podrían no haberse guardado. Si esto ocurre repetidamente, por favor póngase en contacto con su equipo de soporte.';
$string['aclrolesdeleted'] = 'El cambio en visibilidad ha sido disparado para impedirles a todos los estudiantes del curso el acceso al video: {$a->title}<br />Por favor, refresque el sitio después de un tiempo para ver el estado actual de la visibilidad.';
$string['aclrolesname'] = 'Roles';
$string['aclrolesnamedesc'] = 'Usted puede usar el reemplazable [COURSEID] en el nombre del rol que es automáticamente reemplazado.';
$string['actions'] = 'Lista de acciones separadas por coma';
$string['addlti_defaulttitle'] = 'Vídeos Opencast';
$string['addrole'] = 'Añadir un nuevo rol';
$string['addvideo'] = 'Añadir video';
$string['adhocfiledeletion'] = 'Eliminar videoarchivo de Moodle';
$string['adhocfiledeletiondesc'] = 'Si se activa, el plugin intenta eliminar el videoarchivo del sistema de archivo de Moodle inmediatamente después de haber subido al servidor opencast.
   Por favor tenga en cuenta que el archivo seguirá permaneciendo en el sistema de archivo, si es usado en otros lugares en Moodle.';
$string['adminchoice_noworkflow'] = '-- Sin flujograma --';
$string['allowdownloadtranscriptionsetting'] = 'Permitir la descarga de transcripciones';
$string['allowunassign'] = 'Permitir des-asignar del curso';
$string['allowunassigndesc'] = 'Eliminar la asignación de una serie de curso para controlar visibilidad en el selector de archivos y listas de curso. Esta característica solamente está disponible cuando es posible tener eventos sin series en opencast. Por favor pregúntele al administrador del sistema opencast antes de activar esto.';
$string['backupopencastvideos'] = 'Incluir vídeos de la instancia Opencast {$a} en este curso';
$string['blocksettings'] = 'Configuraciones para una instancia de bloque';
$string['cachevalidtime'] = 'Tiempo de validez de la caché';
$string['changeowner'] = 'Cambiar propietario';
$string['changevisibility'] = 'Alterar visibilidad';
$string['changevisibility_group'] = 'El video es visible para todos los estudiantes que pertenecen a los grupos seleccionados. Hacer clic para alterar visibilidad.';
$string['changevisibility_header'] = 'Cambiar visibilidad para {$a->title}';
$string['changevisibility_hidden'] = 'El video (no) está visible para ningún estudiante. Hacer clic para alterar visibilidad';
$string['changevisibility_mixed'] = 'La visibilidad del video está en un estado inválido. Hacer clic para elegir la visibilidad correcta.';
$string['changevisibility_visible'] = 'El video es visible para todos los estudiantes del curso. Hacer clic para alterar visibilidad.';
$string['contributor'] = 'Colaborador(es)';
$string['coursefullnameunknown'] = 'Nombredecurso desconocido';
$string['created'] = 'Creado en';
$string['createdby'] = 'Subido por';
$string['createseriesforcourse'] = 'Crear nueva serie';
$string['creator'] = 'Presentador(es)';
$string['cronsettings'] = 'Configuraciones para trabajos de subida';
$string['date'] = 'Fecha de inicio';
$string['default'] = 'Predeterminado';
$string['delete_confirm_metadata'] = '¿Está seguro de que desea eliminar este campo de metadatos?';
$string['delete_confirm_role'] = '¿Está seguro de que desea eliminar este rol?';
$string['delete_metadata'] = 'Borrar campo de metadatos';
$string['delete_role'] = 'Borrar rol';
$string['deleteaclgroup'] = 'Eliminar video de esta lista';
$string['deletedraft'] = 'Borrar un vídeo antes de transferirlo a Opencast';
$string['deleteevent'] = 'Eliminar un evento en Opencast';
$string['deleteeventdesc'] = 'Usted está a punto de eliminar este video permanentemente e irreversiblemente de Opencast.<br />Todos los enlaces incrustados a él se volverán inválidos. Por favor no continúe a menos de que esté absolutamente seguro.';
$string['deletegroupacldesc'] = 'Usted está a punto de eliminar el acceso a este video desde este curso.<br />Si el acceso es eliminado, el video no es mostrado en el selector de archivos ni en la lista de videos disponibles. Esto no afecta a los videos que ya estén incrustados.<br />El video no será eliminado en Opencast.';
$string['deleteworkflow'] = 'Flujograma a iniciar antes de que el evento sea eliminado';
$string['deleteworkflowdesc'] = 'Antes de eliminar un video, un flujograma puede ser definido, el cual es llamado para retirar el evento de todos los canales de publicación.';
$string['deleting'] = 'Va a ser eliminado';
$string['description'] = 'Descripción';
$string['directaccess_copy_no_link'] = 'Enlace de acceso directo inválido';
$string['dodeleteaclgroup'] = 'Eliminar acceso a videos de este curso';
$string['dodeleteevent'] = 'Eliminar video permanentemente';
$string['downloadvideo'] = 'Descargar video';
$string['duplicateworkflow'] = 'Flujograma para eventos duplicados';
$string['duration'] = 'Duración';
$string['editorbaseurl'] = 'URL base del editor Opencast';
$string['editorendpointurl'] = 'Endpoint del editor de Opencast';
$string['editseries'] = 'Editar series';
$string['enablechunkupload'] = 'Habilitar Chunkupload';
$string['enableopencasteditorlink'] = 'Mostrar el enlace al Editor Opencast en el menú de acciones';
$string['enableopencaststudiolink'] = 'Mostrar el enlace a Opencast studio';
$string['enableopencaststudioreturnbtn'] = 'Mostrar un botón de redirección hacia atrás en Studio';
$string['enableschedulingchangevisibility'] = 'Programar un cambio de visibilidad';
$string['engageurl'] = 'URL del servidor Opencast Engage';
$string['error_seriesid_missing_course'] = 'El curso {$a->coursefullname} (ID: {$a->courseid}) no tiene series de cursos. El evento ({$a->eventid}) no se ha podido restaurar.';
$string['error_seriesid_missing_opencast'] = 'Las series del curso {$a->coursefullname} (ID: {$a->courseid}) no se pueden encontrar en el sistema opencast. El evento ({$a->eventid}) no se ha podido restaurar.';
$string['error_seriesid_not_matching'] = 'El curso {$a->coursefullname} (ID: {$a->courseid}) tiene unas series de curso que no coinciden con el seriesid de la tarea. El evento ({$a->eventid}) no se ha podido restaurar.';
$string['error_workflow_not_exists'] = 'El flujo de trabajo {$a->duplicateworkflow} no se encuentra en el sistema opencast. El evento ({$a->eventid}) no se ha podido restaurar para el curso {$a->coursefullname} (ID: {$a->courseid}).';
$string['error_workflow_not_started'] = 'No se ha podido iniciar el flujo de trabajo para copiar el vídeo ({$a->eventid}) asignado al curso {$a->coursefullname} (ID: {$a->courseid}).';
$string['erroremailbody'] = '{$a->errorstr} Detalles: {$a->message}.';
$string['erroremailsubj'] = 'Error al ejecutar la tarea duplicada del proceso opencast';
$string['errorgetblockvideos'] = 'La lista no puede ser cargada (Error: {$a})';
$string['errorrestoremissingevents_subj'] = 'Error de opencast durante proceso de restauración';
$string['errorrestoremissingseries_subj'] = 'Error de opencast durante proceso de restauración';
$string['eventdeleted'] = 'El video ha sido eliminado';
$string['eventdeletedfailed'] = 'No se pudo eliminar el evento';
$string['eventdeletionstarted'] = 'El video será eliminado pronto.';
$string['eventuploadfailed'] = 'Falló la subida';
$string['eventuploadsucceeded'] = 'Subida exitosa';
$string['filetypes'] = 'Tipos de archivo aceptados';
$string['form_seriesid'] = 'ID de la serie';
$string['form_seriestitle'] = 'Título de la serie';
$string['general_settings'] = 'Ajustes generales';
$string['gotooverview'] = 'Ir a vista general ...';
$string['group_name_empty'] = 'El nombre del grupo no debe estar vacío si un grupo debería de ser creado.';
$string['groupcreation'] = 'Crear un grupo';
$string['groupcreationdesc'] = 'Si se activa, se creará un grupo durante la subida.';
$string['groupname'] = 'Nombre del grupo';
$string['groupnamedesc'] = 'Grupo al cual el video es añadido. Importante: La longitud del nombre del grupo está restringida a 128 bytes. Usted puede usar los reemplazables  [COURSEID] y [COURSENAME] que son automáticamente reemplazados.';
$string['groupseries_header'] = 'Grupo y Serie';
$string['heading_actions'] = 'Acciones';
$string['heading_datatype'] = 'Tipo de campo';
$string['heading_defaultable'] = 'Predeterminado';
$string['heading_delete'] = 'Eliminar';
$string['heading_description'] = 'Descripción del campo';
$string['heading_name'] = 'Nombre del Campo';
$string['heading_params'] = 'Parámetros (JSON)';
$string['heading_permanent'] = 'Permanente';
$string['heading_readonly'] = 'Sólo lectura';
$string['heading_required'] = 'Requerido';
$string['heading_role'] = 'Rol';
$string['hend_date'] = 'Fecha de Término';
$string['hlocation'] = 'Lugar';
$string['hpublished'] = 'Publicado';
$string['hstart_date'] = 'Fecha de Inicio';
$string['htitle'] = 'Título';
$string['hvisibility'] = 'Visibilidad';
$string['hworkflow_state'] = 'Estado';
$string['identifier'] = 'Identificador';
$string['importmode'] = 'Modo de importación';
$string['importseries'] = 'Importar series';
$string['ingest_endpoint_notfound'] = 'El punto final ingets no está disponible, esto tiene que ser arreglado por el administrador del sistema.';
$string['ingestupload'] = 'Cargando datos';
$string['initialvisibilitystatus'] = 'Visibilidad inicial del video';
$string['invalidacldata'] = 'Datos ACL inválidos';
$string['invalidmetadatafield'] = 'Se ha encontrado un campo de metadatos no válido: {$a}';
$string['language'] = 'Idioma';
$string['license'] = 'Licencia';
$string['limituploadjobs'] = 'Limitar trabajo de subida por cron';
$string['limituploadjobsdesc'] = 'Limitar el número de uploadjobs (trabajos_de_subida) hechos por un cronjob (trabajo_de_cron). El cronjob puede ser agendado aquí: {$a}';
$string['limitvideos'] = 'Número de videos';
$string['limitvideosdesc'] = 'Máximo número de videos a mostrar en bloque';
$string['loading'] = 'Cargando ...';
$string['location'] = 'Ubicación';
$string['managedefaultsforuser'] = 'Gestionar los valores predeterminados';
$string['manageseriesforcourse'] = 'Gestionar series';
$string['maxseries'] = 'Número máximo de series';
$string['mediatype'] = 'Medios de comunicación';
$string['metadata'] = 'Metadatos de eventos';
$string['metadataseries'] = 'Metadatos de la serie';
$string['missingevent'] = 'Falló creación de evento';
$string['missinggroup'] = 'Grupo faltante en opencast';
$string['missingseries'] = 'Serie faltante en opencast';
$string['missingseriesassignment'] = 'Asignación de serie faltante';
$string['morethanonedefaultserieserror'] = 'Este curso tiene más de una serie predeterminada. Póngase en contacto con el administrador del sistema.';
$string['morevideos'] = 'Más videos ...';
$string['mstatecreatingevent'] = 'Subiendo ...';
$string['mstatecreatinggroup'] = 'Creando Grupo Opencast ...';
$string['mstatecreatingseries'] = 'Creando Serie Opencast ...';
$string['mstatereadytoupload'] = 'Listo para transferirse';
$string['mstatetransferred'] = 'Transferido';
$string['mstateunknown'] = 'Estado desconocido';
$string['mstateuploaded'] = 'Procesando trabajos post-subida';
$string['noseriesid'] = 'La ID de la serie aun no está definida.';
$string['nothingtodisplay'] = 'Sin videos disponibles';
$string['notificationeventstatus'] = 'Permitir la notificación del estado del proceso del evento';
$string['notificationeventstatusdeletion'] = 'Trabajos de notificación de limpieza después de (Días)';
$string['notificationeventstatusteachers'] = 'Notificar a todos los profesores del curso el estado del proceso del evento';
$string['notpublished'] = 'No publicado';
$string['novideosavailable'] = 'Sin videos disponibles';
$string['ocstatecapturing'] = 'Capturando';
$string['ocstatefailed'] = 'Falló';
$string['ocstateneedscutting'] = 'Necesita cortarse';
$string['ocstateprocessing'] = 'Procesando';
$string['ocstatesucceeded'] = 'Exitoso';
$string['offerchunkuploadalternative'] = 'Ofrecer filepicker como alternativa';
$string['opencast:addinstance'] = 'Añadir un nuevo bloque de subida opencast';
$string['opencast:addvideo'] = 'Añadir un nuevo video al bloque de subida opencast';
$string['opencast:createseriesforcourse'] = 'Crear una nueva serie en opencast para un curso Moodle';
$string['opencast:deleteevent'] = 'Finalmente eliminar un video (evento) en opencast';
$string['opencast:downloadvideo'] = 'Descargar videos procesados';
$string['opencast:importseriesintocourse'] = 'Importar una serie opencast existente a un curso moodle';
$string['opencast:myaddinstance'] = 'Añadir un nuevo bloque de subida de Opencast al Tablero';
$string['opencast:sharedirectaccessvideolink'] = 'Comparte el enlace de acceso directo al video';
$string['opencast:startworkflow'] = 'Iniciar manualmente flujos de trabajo para vídeos';
$string['opencast:unassignevent'] = 'Des-asignar un video del curso, donde el video fue subido.';
$string['opencast:viewunpublishedvideos'] = 'Ver todos los videos del servidor opencast, aunque no estén publicados';
$string['opencaststudiobaseurl'] = 'URL base de Opencast Studio';
$string['opencaststudiocustomsettingsfilename'] = 'Nombre de archivo de configuración personalizada de Studio';
$string['opencaststudionewtab'] = 'Redirigir a Studio en una pestaña nueva';
$string['opencaststudioreturnbtnlabel'] = 'Etiqueta para el botón de retorno de Studio';
$string['opencaststudioreturnurl'] = 'URL de retorno de Studio personalizada';
$string['overview'] = 'Vista General';
$string['owner'] = 'Propietario';
$string['planned'] = 'Planeado';
$string['pluginname'] = 'Videos Opencast';
$string['presentation'] = 'Vídeo de presentación';
$string['presenter'] = 'Vídeo del presentador';
$string['privacy:metadata:block_opencast_uploadjob'] = 'Información acerca de subidas de videos.';
$string['privacy:metadata:block_opencast_uploadjob:courseid'] = 'ID del curso en donde el video es subido';
$string['privacy:metadata:block_opencast_uploadjob:fileid'] = 'ID del archivo/video que es subido';
$string['privacy:metadata:block_opencast_uploadjob:opencasteventid'] = 'ID del evento opencast que fue creado durante la subida';
$string['privacy:metadata:block_opencast_uploadjob:status'] = 'Estado del proceso de subida';
$string['privacy:metadata:block_opencast_uploadjob:timecreated'] = 'La fecha de cuando fue creado el trabajo de subida.';
$string['privacy:metadata:block_opencast_uploadjob:timemodified'] = 'La fecha de cuando fue modificado por última vez el trabajo de subida.';
$string['privacy:metadata:block_opencast_uploadjob:userid'] = 'La ID del usuario que subió el video';
$string['privacy:metadata:core_files'] = 'El bloque opencast almacena archivos (videos) que han sido subidos por el usuario.';
$string['privacy:metadata:opencast'] = 'El bloque interactua con una instancia opencast y por eso los datos necesitan ser intercambiados.';
$string['privacy:metadata:opencast:file'] = 'El archivo que es seleccionado es subido a opencast.';
$string['processdelete'] = 'Procesar trabajos de eliminación para Opencast';
$string['processupload'] = 'Procesar subida';
$string['publisher'] = 'Editor';
$string['publishtoengage'] = 'Publicar para Motivar';
$string['publishtoengagedesc'] = 'Seleccionar esta opción para publicar el video después de subir para motivar al jugador. La configuración de opencast debe soportar esto.';
$string['readonly_disabled_tooltip_text'] = 'No se puede establecer la opción de sólo lectura cuando es obligatoria.';
$string['recordvideo'] = 'Grabar video';
$string['restoreopencastvideos'] = 'Restaurar videos opencast';
$string['reuseexistingupload'] = 'Re-utilizar subidas existentes';
$string['reuseexistinguploaddesc'] = 'Si se activa, múltiples videos con el mismo \'hash\' del contenido son subidos a opencast solamente una vez.
Esto ahorra almacenamiento y potencia de procesamiento, pero podría causar problemas cuando Usted usa políticas de acceso específicas basadas en series opencast.';
$string['rightsHolder'] = 'Derechos';
$string['rolename'] = 'Nombre del rol';
$string['scheduledvisibilitystatus'] = 'Cambiar la visibilidad del vídeo a';
$string['scheduledvisibilitytime'] = 'Cambiar la visibilidad del vídeo en';
$string['series'] = 'Series';
$string['series_already_exists'] = 'El curso ya está asignado a una serie.';
$string['series_does_not_exist'] = 'La serie asignada a este curso no es válida, ¡Por favor póngase en contacto con su administrador!';
$string['series_does_not_exist_admin'] = 'La serie con el identificador \'{$a}\' no pudo ser recuperada desde Opencast.';
$string['series_name_empty'] = 'El nombre de la serie no puede estar vacío.';
$string['seriescreated'] = 'La serie fue creada.';
$string['seriesidnotvalid'] = 'La serie no existe.';
$string['seriesidsaved'] = 'La ID de la serie fue guardada.';
$string['seriesidunset'] = 'La ID de la serie fue  removida.';
$string['seriesname'] = 'Nombre de la serie';
$string['seriesnamedesc'] = 'Series a las cuales el video es añadido. Usted puede usar los reemplazables [COURSEID] y [COURSENAME] los cuales son automáticamente reemplazados.';
$string['seriesnotcreated'] = 'La serie no pudo ser creada.';
$string['seriesoverview'] = 'Visión general de las series';
$string['seriesoverviewof'] = 'Vista general de las series de {$a} instancia';
$string['setting_permanent'] = 'Es permanente';
$string['settings'] = 'Videos Opencast';
$string['source'] = 'Fuente';
$string['startDate'] = 'Fecha';
$string['startTime'] = 'Hora';
$string['startworkflow'] = 'Comenzar flujo de trabajo';
$string['subjects'] = 'Temas';
$string['submit'] = 'Guardar cambios';
$string['termsofuse'] = 'Condiciones de uso';
$string['title'] = 'Título';
$string['tool_requirement_not_fulfilled'] = 'La versión necesaria de tool_opencast no está instalada.';
$string['transcriptionfileextensions'] = 'Extensiones de archivo de transcripción permitidas';
$string['transcriptionworkflow'] = 'Flujo de trabajo para la transcripción (voz a texto)';
$string['type'] = 'Tipo de soporte';
$string['updatemetadata'] = 'Actualizar metadatos para este evento';
$string['upload'] = 'Carga de archivos';
$string['uploadfileextensions'] = 'Extensiones de archivo permitidas';
$string['uploadfilelimit'] = 'Límite de tamaño del vídeo';
$string['uploadingeventfailed'] = 'Falló creación del evento';
$string['uploadjobssaved'] = 'Subida exitosa de video.<br />El video está agendado para ser transferido a Opencast ahora. Usted no necesita esperar en esta página para que termine la transferencia.';
$string['uploadqueuetoopencast'] = 'Videos agendados para ser transferidos a Opencast';
$string['uploadtimeout'] = 'Tiempo de carga de Moodle a Opencast';
$string['uploadworkflow'] = 'Flujograma a iniciar después de subida';
$string['uploadworkflowdesc'] = 'Configurar el nombre corto único del flujograma, que debería de ser iniciado después de subir exitosamente un archivo de video a opencast.
   Si se deja vacío, el flujograma estándar (ng-schedule-and-upload) será usado. Solicitar flujogramas adicionales que podrían haber sido creados por el administrador de opencast.';
$string['video'] = 'Video';
$string['video_already_uploaded'] = 'Video ya subido';
$string['videonotfound'] = 'Video no encontrado';
$string['videosavailable'] = 'Videos disponibles en este curso';
$string['videostoupload'] = 'Videos a subir a opencast';
$string['visibility'] = 'Visibilidad del video.';
$string['visibility_group'] = 'Permitirles a todos los estudiantes que pertenezcan a grupos seleccionados el que accedan al video';
$string['visibility_hide'] = 'Impedirle a todos los estudiantes acceder al video';
$string['visibility_show'] = 'Permitirle a todos los estudiantes del curso acceder al video';
$string['workflow_not_existing'] = 'Este flujograma no existe.';
$string['workflownotdefined'] = 'El flujograma para actualizar metadatos no está definido.';
$string['workflowrolesdesc'] = 'El flujograma es disparado cuando las reglas no-permanentes ACL son eliminadas o añadidas. Si no se configura, no será posible cambiar la visibilidad de los video subidos mediante el bloque.';
$string['workflowrolesname'] = 'Flujograma para cambiar las reglas ACL';
$string['worklowisrunning'] = 'Un flujograma está corriendo. Usted no puede cambiar la visibilidad en este momento.';
$string['wrongmimetypedetected'] = 'Se usó un mimetype inválido al subir el video {$a->filename} del curso {$a->coursename}.
   ¡Solamente están permitidos archivos de video!';
