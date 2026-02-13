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
 * Strings for component 'tool_coursearchiver', language 'es_mx', version '4.4'.
 *
 * @package     tool_coursearchiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessafter'] = 'Último accesado después de';
$string['accessbefore'] = 'Último accesado antes de';
$string['accessbeforeafter'] = 'Accesado  Antes de / Después de';
$string['anycategory'] = 'Cualquier Categoría';
$string['archive'] = 'Archivar Cursos';
$string['archivedeletesetting'] = 'Retraso de eliminación de archivo';
$string['archivedeletesetting_help'] = 'Cuantos días se retrasará la eliminación de archivo.';
$string['archiveemail'] = 'Mandar Emails "Cursos a ser Archivados"';
$string['archivelimit'] = 'Limitador de búsqueda de archivo';
$string['archivelimit_help'] = 'Cantidad Máxima de resultados a mostrar en pantalla';
$string['archivelimitstring'] = 'Máximo Mostrado';
$string['archivelist'] = 'Archivos del Curso';
$string['archivelocation'] = 'Subdirectorio de archivo de curso';
$string['archiverecoverform'] = 'Eliminación pendiente';
$string['archivewarningemailsetting'] = 'Advertencia por defecto del Email para Archivar Curso';
$string['archivewarningemailsetting_help'] = 'Estos son los contenidos de un Email que será enviado a todos los profesores de un curso que sea seleccionado para ser archivado.';
$string['archivewarningemailsettingdefault'] = '%to

Le queremos informar que los siguientes cursos Moodle que Usted ha enseñado pronto serán archivados.
Esto significa que el curso será respaldado en su estado actual y después será removido de Moodle. Si Usted quisiera salirse de este proceso para alguno de los cursos siguientes, por favor haga clic sobre el enlace que está a un lado del curso.

%courses

Gracias.';
$string['archivewarningsubject'] = 'Aviso: Cursos serán archivados pronto.';
$string['attemptdeletingcourse'] = 'Eliminando Curso: ({$a->id}) {$a->fullname}.';
$string['back'] = 'Comenzar de nuevo';
$string['backup'] = 'Respaldar Cursos';
$string['cannotdeletecoursenotexist'] = 'No puede eliminarse un curso que no existe';
$string['category'] = 'Categoría';
$string['cli_cannot_continue'] = 'DETENIDO: No hay datos suficientes para continuar.\\n';
$string['cli_question_archive'] = '¿Archivar y eliminar estos {$a} cursos?';
$string['cli_question_archiveemail'] = 'Mandar a estos {$a} usuarios  un Email de "Curso a ser archivado"?';
$string['cli_question_delete'] = '¿Eliminar estos {$a} cursos?';
$string['cli_question_deleteemail'] = '¿Enviar a estos {$a} usuarios un correo electrónico que diga "Curso a eliminar"?';
$string['cli_question_hide'] = '¿Ocultar estos {$a} cursos?';
$string['cli_question_hideemail'] = 'Mandar a estos {$a} usuarios un Email de "Curso a ser ocultado"?';
$string['confirm'] = 'Continuar';
$string['confirmdelete'] = '¿Está seguro de querer eliminarlo?';
$string['confirmmessage'] = '¿Está Usted seguro de que quiere {$a}';
$string['confirmmessagearchive'] = 'archivar y quitar estos {$a} cursos?';
$string['confirmmessagearchiveemail'] = 'mandarles un Email a estos  {$a} propietarios de curso?';
$string['confirmmessagebackup'] = '¿respaldar estos {$a} cursos?';
$string['confirmmessagedelete'] = '¿quitar completamente estos {$a} cursos?';
$string['confirmmessagedeleteemail'] = '¿Enviar una notificación por correo electrónico sobre la eliminación pendiente del curso a estos {$a} propietarios de cursos?';
$string['confirmmessagehide'] = 'ocultar estos {$a} cursos?';
$string['confirmmessagehideemail'] = 'mandarles un Email a estos {$a} propietarios de cursos?';
$string['confirmmessageoptout'] = '¿ salida a estos {$a} cursos?';
$string['confirmrestore'] = '¿Restaurar eliminación de archivo pendiente =';
$string['course_readded'] = '{$a->fullname} ha sido quitado de la lista de Optar_por_no. Gracias.';
$string['course_skipped'] = '{$a->fullname} será saltado por los próximos  {$a->optoutmonths}  mes(es). Gracias.';
$string['coursearchiver'] = 'Archivador de Cursos';
$string['coursearchiver:use'] = 'Utilice la herramienta Archivador de cursos';
$string['coursearchiver_help'] = 'Buscar cursos usando los siguientes criterios: coincidir nombre-corto, nombre-completo, idnumber, courseid, última fecha de acceso al curso, o *cursos vacíos.\\n
Los cursos son mostrados en-gris si ya estaban previamente ocultos. El nombre-completo del curso estará rayado (tachado) si el curso fuera un *curso vacío.\\n\\n
NOTA: LA búsqueda por último acceso solamente regresará cursos que fueron creados antes de la fecha proporcionada.\\n
Nota: La cantifdad de direcciones Email encontradas puede diferir de las Emails enviadas. Esto tiene 2 causas. \\n
1. A un curso que ya esté oculto no se le mandará un Email para notificarle al propietario si el curso estuviera seleccionado para ocultarse.\\n
2. A una sola dirección que se muestre para varios cursos se le juntarán en un solo Email.\\n\\n
*los cursos vacíos están definidos como  de 0 tareas, 0 recursos, 0 categorías en el Libro de calificaciones y 0 ítems de calificación en el Libro de calificaciones.';
$string['coursearchiver_settings'] = 'Configuraciones del Archivador de Cursos';
$string['coursearchiverpath'] = 'Ruta a la carpeta para cursos archivados';
$string['coursearchiverpath_help'] = 'Esta ruta es relativa al Moodle $CFG->dataroot';
$string['coursearchiverpreview'] = 'Vista previa de subir cursos';
$string['coursearchiverresult'] = 'Resultados de subir cursos';
$string['coursearchiverrootpath'] = 'Ruta del sistema en donde están colocadas las carpetas del archivador';
$string['coursearchiverrootpath_help'] = 'Usar como predeterminado CFG->dataroot';
$string['coursedeleted'] = 'Curso eliminado';
$string['coursedeletionnotallowed'] = 'No está permitida la eliminación del curso';
$string['coursefullname'] = 'Nombre completo del curso';
$string['courseid'] = 'ID del curso';
$string['courseidnum'] = 'idnumber del curso';
$string['courseselector'] = 'Resultados de búsqueda de curso';
$string['courseshortname'] = 'Nombre corto del curso';
$string['courseteacher'] = 'Propietario del Curso';
$string['createdafter'] = 'Creado después de';
$string['createdbefore'] = 'Creada anteriormente';
$string['createdbeforeafter'] = 'Creado Antes de / Después de';
$string['crontask'] = 'Trabajo de eliminación de archivo del curso';
$string['delete'] = 'Eliminar Cursos';
$string['deletedarchiveemails'] = 'Email del Propietario del Curso';
$string['deleteemail'] = 'Enviar correos electrónicos de "Curso a eliminar"';
$string['deletewarningemailsetting'] = 'Advertencia por correo electrónico predeterminada para la eliminación de un curso';
$string['deletewarningemailsetting_help'] = 'Este es el contenido de un correo electrónico que se enviará a todos los propietarios de un curso que se haya seleccionado para eliminar.';
$string['deletewarningemailsettingdefault'] = '%to

Nos gustaría informarle que los siguientes cursos de Moodle que ha impartido se eliminarán pronto.
Esto significa que el curso se eliminará de Moodle. Si desea optar por no participar en este proceso para uno de los siguientes cursos, haga clic en el enlace que se encuentra junto al curso.

%courses

Gracias.';
$string['deletewarningsubject'] = 'Aviso: Los cursos se eliminarán pronto.';
$string['deselectall'] = 'Des-seleccionar Todo';
$string['email'] = 'Enviar Email';
$string['emailselector'] = 'Usuarios seleccionados para recibir Emails.';
$string['empty'] = 'vacío';
$string['emptycourse'] = 'Curso Vacío';
$string['emptyonly'] = 'Regresar solamente cursos vacíos';
$string['endafter'] = 'Termina después de';
$string['endbefore'] = 'Termina antes de';
$string['error_key'] = 'La clave de seguridad es incorrecta';
$string['error_nocourseid'] = 'El registro del curso no contiene una ID';
$string['error_savepointid'] = 'Punto de guardar no encontrado';
$string['errorarchivefile'] = 'No existe el archivo de curso archivado.';
$string['errorarchivepath'] = 'No pudo crearse la ruta para archivar.';
$string['errorarchivingcourse'] = 'El curso: ({$a->id}) {$a->fullname}  no pudo ser archivado ni archivado.';
$string['errorbackup'] = 'Fallo al Respaldar.';
$string['errordeletingcourse'] = 'Curso: ({$a->id}) {$a->fullname} no pudo ser eliminado.';
$string['erroremptysearch'] = 'No se dió criterio para búsqueda.';
$string['errorhidingcourse'] = 'El curso: ({$a->id}) {$a->fullname} no pudo ocultarse.';
$string['errorinsufficientdata'] = 'No hay suficiente información para realizar esta acción';
$string['errormissingcourses'] = 'Falta la variable %courses en la plantilla del Email. Esta es una lista de los cursos.';
$string['errormissingto'] = 'Falta la variable %toen la plantilla del Email. Este es el nombre del destinatario.';
$string['errornoform'] = 'Formato no dado.';
$string['errornonnumericid'] = 'La ID del curso debe ser numérica';
$string['errornonnumerictimestamp'] = 'El sello de tiempo debe ser numérico (sello de tiempo UNIX)';
$string['erroroptoutcourse'] = 'Curso ({$a->id}) {$a->fullname} no pudo ser excluido.';
$string['errors'] = 'Errores';
$string['errors_count'] = 'Errores: {$a}';
$string['errorsendingemail'] = 'Falló Email para {$a->firstname} {$a->lastname} ({$a->email}).';
$string['errorvalidarchive'] = 'No es un archivo de respaldo válido.';
$string['hidden'] = 'oculto';
$string['hide'] = 'Ocultar cursos';
$string['hideemail'] = 'Mandar Emails "Curso a ser Ocultado"';
$string['hidewarningemailsetting'] = 'Advertencia por defecto del Email para Ocultar Cursos';
$string['hidewarningemailsetting_help'] = 'Este es el contenido de un Email que será enviado a todos los profesores de un curso que es seleccionado para ser ocultado.';
$string['hidewarningemailsettingdefault'] = '%to

Quisiéramos informarle que los siguientes cursos Moodle que Usted ha enseñado pronto serán ocultados.
Esto significa que los estudiantes que todavía estén inscritos en el curso ya no tendrán acceso a los cursos. Si Usted quisiera evitar este proceso para alguno de los cursos siguientes, por favor haga clic en el enlace junto al curso.

%courses

Gracias.';
$string['hidewarningsubject'] = 'Aviso: Pronto se ocultarán cursos.';
$string['ignoreadmins'] = 'Ignorar Accesos de Admin';
$string['ignoresiteroles'] = 'Ignorar Acccesos de Rol del Sitio';
$string['includesubcat'] = 'Incluir cursos en subcategorías';
$string['invalidmode'] = 'No se dió un modo válido para la herramiento.';
$string['messageprovider:courseowner'] = 'Notificaciones de la herramienta para archivar/ocultar curso.';
$string['never'] = 'Nunca';
$string['nocoursesfound'] = 'La búsqueda resultó en 0 curtsos encontrados.';
$string['nocoursesselected'] = 'Para realizar esta acción Usted necesita tener al menos 1 curso seleccionado.';
$string['noticecoursehidden'] = 'El curso: ({$a->id}) {$a->fullname} ya estaba oculto.';
$string['notices'] = 'Avisos';
$string['notices_count'] = 'Avisos: {$a}';
$string['nousersfound'] = 'No hay propietarios de cursos a quienes notificar';
$string['nousersselected'] = 'Para realizar esta acción Usted necesita tener al menos 1 usuario seleccionado.';
$string['optout'] = 'Salida Cursos';
$string['optoutarchive'] = 'No archivar este curso';
$string['optoutby'] = 'Solicitado Por';
$string['optoutbyemaildisabled'] = 'La opción de cancelación de suscripción por correo electrónico está deshabilitada';
$string['optoutbyemailsetting'] = 'Permitir la cancelación de suscripción por correo electrónico';
$string['optoutbyemailsetting_help'] = 'Los correos electrónicos a los propietarios de los cursos incluirán un enlace para cancelar la suscripción.';
$string['optoutdelete'] = 'No eliminar este curso';
$string['optouthide'] = 'No ocultar este curso';
$string['optoutleft'] = '{$a} días restantes';
$string['optoutlist'] = 'Gestionar lista de Optar_por_no';
$string['optoutmonthssetting'] = 'Persistencia de Optar_por_no del curso';
$string['optoutmonthssetting_help'] = 'Por cuantos meses aplicará el Optar_por_no para cada curso.';
$string['optouttime'] = 'Tiempo restante';
$string['outaccess'] = 'Último acceso';
$string['outemail'] = 'Email';
$string['outfirstname'] = 'Nombre';
$string['outfullname'] = 'Nombre completo';
$string['outid'] = 'ID';
$string['outidnumber'] = 'idnumber';
$string['outlastname'] = 'Apellido(s)';
$string['outowners'] = 'Propietarios de Cursos';
$string['outselected'] = 'Seleccionado';
$string['outshortname'] = 'Nombre corto';
$string['outuse'] = 'Último Uso';
$string['ownerroleid'] = 'Rol considerado como propietario del curso';
$string['ownerroleid_help'] = 'Las búsquedas de E-mails de salida y de propietarios buscarán este rol en cada curso. Si ninguno estuviera seleccionado, el predeterminado será el rol de profesor editor.';
$string['pluginname'] = 'Archivador de Cursos';
$string['privacy:metadata'] = 'El plugin no contiene datos del usuario.';
$string['privacy:metadata:tool_coursearchiver'] = 'Datos relacionados con los usuarios que optan por no participar.';
$string['privacy:metadata:tool_coursearchiver_optout:userid'] = 'Identificación del usuario que optó por no participar.';
$string['privacy:metadata:tool_coursearchiver_optout_user'] = 'Datos relacionados con los usuarios que optaron por no participar.';
$string['processarchiving'] = 'Archivando los cursos seleccionados';
$string['processbackup'] = 'Respaldando cursos seleccionados';
$string['processcomplete'] = 'Proceso Completado';
$string['processdeleting'] = 'Eliminando cursos seleccionados';
$string['processemailing'] = 'Enviando Emails';
$string['processhiding'] = 'Ocultando cursos seleccionados';
$string['processoptout'] = 'Salida cursos seleccionados';
$string['processstarted'] = 'El proceso ya ha iniciado';
$string['recover'] = 'Recuperar cursos';
$string['results'] = 'Resultados';
$string['results_archive'] = 'Cursos archivados: {$a}';
$string['results_archiveemail'] = 'Emails de advertencia de archivar curso enviados: {$a}';
$string['results_backup'] = 'Respaldar Cursos: {$a}';
$string['results_courselist'] = 'Cursos enlistados: {$a}';
$string['results_delete'] = 'Cursos seleccionadoss: {$a}';
$string['results_deleteemail'] = 'Se enviaron correos electrónicos de advertencia de eliminación de curso: {$a}';
$string['results_getemails'] = 'Direcciones Email recolectadas: {$a}';
$string['results_hide'] = 'Cursos ocultados: {$a}';
$string['results_hideemail'] = 'Emails de advertencias de curso ocultado enviados: {$a}';
$string['results_optout'] = 'Salida de cursos: {$a}';
$string['resume'] = 'Resumen';
$string['resumenone'] = 'No se encontraron guardados';
$string['resumeselect'] = 'Elegir un punto para guardar';
$string['save'] = 'Crear Punto para Guardar';
$string['saved'] = 'Se ha hecho un Punto para guardar';
$string['saveddate'] = 'Fecha de creado';
$string['savelimitsetting'] = 'Limitar puntosguardados en lista seleccionada.';
$string['savelimitsetting_help'] = 'Cuantos puntosguardados se mostrarán adentro de la lista desplegable.';
$string['savepoint_removed'] = 'El punto de guardar ha sido quitado';
$string['savestatelist'] = 'Gestionar Lista de Guardar Punto';
$string['search'] = 'Buscar cursos';
$string['selectall'] = 'Seleccionar todo';
$string['startafter'] = 'Inicia después de';
$string['startbefore'] = 'Inicia antes de';
$string['startend'] = 'Fechas de Inicio / Fin';
$string['status'] = 'Estatus';
$string['step2savetitle'] = '{$a} lista de curso guardar';
$string['step3savetitle'] = '{$a} lista de Email guardar';
$string['unknownerror'] = 'El proceso ha resultado en un error que requiere un re-inicio del proceso.';
$string['visible'] = 'visible';
