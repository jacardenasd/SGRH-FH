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
 * Strings for component 'local_eportfolio', language 'es_mx', version '4.4'.
 *
 * @package     local_eportfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions:header'] = 'Realizar acción';
$string['contenteditor'] = 'Editor de Contenido';
$string['create:error'] = 'Hubo un problema al crear el nuevo Contenido H5P.';
$string['create:header'] = 'ePortfolio - Crear nuevo Archivo H5P';
$string['create:library'] = 'Seleccionar Biblioteca';
$string['create:success'] = 'El Contenido H5P ha sido creado exitosamente.';
$string['customfield:description'] = 'Compartir este curso para ePortfolios';
$string['customfield:name'] = 'ePortfolio';
$string['delete:checkconfirm'] = '¿Realmente desea eliminar los ePortafolios seleccionados?';
$string['delete:confirm'] = 'Confirmar';
$string['delete:error'] = '¡Hubo un error al eliminar el archivo! ¡Por favor inténtelo de nuevo!';
$string['delete:header'] = 'Eliminar archivo';
$string['delete:nocourses'] = 'No compartido en ningún curso.';
$string['delete:success'] = '¡El archivo seleccionado fue eliminado exitosamente!';
$string['download:error'] = '¡No se encontraron archivos!';
$string['edit:error'] = '¡Se produjo un error al guardar los cambios!';
$string['edit:header'] = 'ePortfolio - editar';
$string['edit:success'] = 'El contenido H5P ha sido actualizado exitosamente.';
$string['eportfolio:view_eport'] = 'Ver ePortfolio';
$string['error:missingcapability'] = '¡No tiene la capacidad necesaria para acceder al plugin “eportfolio”!';
$string['error:missingconfig'] = 'Por favor póngase en contacto con su administrador de Moodle.';
$string['error:missingconfig:description'] = 'El ePortfolio aún no está completamente configurado.<br>Por favor siga las instrucciones de instalación del plugin.';
$string['error:missingconfig:gradingteacher'] = 'Rol para calificar no configurado.';
$string['error:missingconfig:h5pcapability'] = 'Capacidad para H5P no configurada.';
$string['error:missingconfig:studentroles'] = 'Rol para estudiantes no configurado.';
$string['error:noguestaccess'] = 'Usted ha iniciado sesión como invitado. ¡El acceso de invitado no está permitido para este plugin!';
$string['event:eportfolio:created'] = 'El usuario con el id \'{$a->userid}\' creó un nuevo ePortfolio {$a->filename} (fileid: \'{$a->fileid}\')';
$string['event:eportfolio:created:name'] = 'ePortfolio creado';
$string['event:eportfolio:deleted'] = 'El usuario con el id \'{$a->userid}\' eliminó el ePortfolio {$a->filename} (fileid: \'{$a->fileid}\')';
$string['event:eportfolio:deleted:name'] = 'ePortfolio eliminado';
$string['event:eportfolio:edited'] = 'El usuario con el id \'{$a->userid}\' editó el ePortfolio {$a->filename} (fileid: \'{$a->fileid}\')';
$string['event:eportfolio:edited:name'] = 'ePortfolio editado';
$string['event:eportfolio:shared:grade'] = 'El usuario con el id \'{$a->userid}\' compartió el ePortfolio {$a->filename} para calificación (fileid: \'{$a->fileid}\')';
$string['event:eportfolio:shared:name'] = 'ePortfolio compartiendo';
$string['event:eportfolio:shared:share'] = 'El usuario con el id \'{$a->userid}\' compartió el ePortfolio {$a->filename} (fileid: \'{$a->fileid}\')';
$string['event:eportfolio:shared:template'] = 'El usuario con el id \'{$a->userid}\' compartió el ePortfolio {$a->filename} como plantilla (fileid: \'{$a->fileid}\')';
$string['event:eportfolio:undo'] = 'El usuario con el id \'{$a->userid}\' retiró la compartición del ePortfolio {$a->filename} (fileid: \'{$a->fileid}\')';
$string['event:eportfolio:viewed'] = 'El usuario con el id \'{$a->userid}\' vio el ePortfolio {$a->filename} (fileid: \'{$a->fileid}\')';
$string['event:eportfolio:viewed:name'] = 'ePortfolio visto';
$string['form:cancelled'] = '¡La operación ha sido cancelada!';
$string['form:field:required'] = '¡Por favor llene este campo!';
$string['h5plibraries'] = 'Bibliotecas H5P';
$string['message:contexturlname'] = 'Ver ePortfolio compartido';
$string['message:emailmessage'] = '<p>Nuevo ePortfolio compartido con usted. Tipo: {$a->shareoption}<br>Compartido por {$a->userfrom}<br>
ePortfolio: {$a->filename}<br>URL: <a href="{$a->viewurl}">{$a->viewurl}</a></p>';
$string['message:smallmessage'] = '<p>Nuevo ePortfolio compartido con usted . Tipo: {$a->shareoption}<br>Compartido por{$a->userfrom}<br>
ePortfolio: {$a->filename}<br>URL: <a href="{$a->viewurl}">{$a->viewurl}</a></p>';
$string['message:subject'] = 'Mensaje sobre un ePortfolio compartido';
$string['messageprovider:sharing'] = 'Mensaje sobre un ePortfolio compartido';
$string['navbar'] = 'ePortfolio';
$string['navbar:tab:myeportfolios'] = 'Mis ePortfolios';
$string['navbar:tab:mysharedeportfolios'] = 'Mis ePortfolios compartidos';
$string['navbar:tab:mysharedeportfoliosgrade'] = 'Mis ePortfolios compartidos para calificar';
$string['navbar:tab:sharedeportfolios'] = 'ePortfolios compartidos conmigo';
$string['navbar:tab:sharedeportfoliosgrade'] = 'ePortfolios compartidos para calificar';
$string['navbar:tab:sharedtemplates'] = 'plantillas de ePortfolio';
$string['overview:eportfolio:createnewfile'] = 'Crear archivo H5P';
$string['overview:eportfolio:downloadfiles'] = 'Descargar ePortfolios seleccionados';
$string['overview:eportfolio:fileselect'] = 'Selección de archivo';
$string['overview:eportfolio:nofiles:grade'] = 'Aún no se ha compartido ningún ePortfolio con usted para calificar.';
$string['overview:eportfolio:nofiles:my'] = 'Usted aún no ha creado ni cargado ningún archivo a su ePortfolio.';
$string['overview:eportfolio:nofiles:mygrade'] = 'Usted aún no ha compartido ningún archivo de su ePortfolio para calificar.';
$string['overview:eportfolio:nofiles:myshared'] = 'Aún no ha compartido ningún archivo de su ePortfolio para su visualización.';
$string['overview:eportfolio:nofiles:shared'] = 'Aún no se ha compartido ningún ePortfolio con usted para que lo vea.';
$string['overview:eportfolio:nofiles:template'] = 'Aún no se han compartido plantillas con usted';
$string['overview:eportfolio:uploadnewfile'] = 'Subir archivo H5P';
$string['overview:header'] = 'ePortfolio - Resumen';
$string['overview:helpfaq:title'] = 'Ayuda y FAQ';
$string['overview:shareoption:grade'] = 'Calificar';
$string['overview:shareoption:share'] = 'Compartido';
$string['overview:shareoption:template'] = 'Plantilla';
$string['overview:table:actions'] = 'Acciones';
$string['overview:table:actions:delete'] = 'Eliminar archivo';
$string['overview:table:actions:edit'] = 'Editar archivo';
$string['overview:table:actions:share'] = 'Compartir ePortfolio';
$string['overview:table:actions:template'] = 'Usar plantilla';
$string['overview:table:actions:undo'] = 'Deshacer compartir';
$string['overview:table:actions:undo:template'] = 'Deshacer el uso compartido de archivos como plantilla';
$string['overview:table:actions:view'] = 'Ver archivo';
$string['overview:table:actions:viewgradeform'] = 'Ver formato para calificar';
$string['overview:table:coursefullname'] = 'Compartido en curso';
$string['overview:table:filedeleted'] = 'Uste dha eliminado el ePortfolio de su resumen personal.
 El archivo compartido para calificación debe eliminarse permanentemente del curso.';
$string['overview:table:filename'] = 'Nombre del archivo';
$string['overview:table:filesize'] = 'Tamaño del archivo';
$string['overview:table:filetimecreated'] = 'Creado/Subido';
$string['overview:table:filetimemodified'] = 'Última modificación';
$string['overview:table:graded'] = '¿Calificado?';
$string['overview:table:graded:done'] = 'Calificado con:';
$string['overview:table:graded:pending'] = 'Pendiente';
$string['overview:table:grading'] = 'Calificación';
$string['overview:table:instancename'] = 'Módulo de curso';
$string['overview:table:istemplate'] = 'Este archivo fue cargado o compartido como plantilla para otros usuarios.';
$string['overview:table:participants'] = 'Compartido con';
$string['overview:table:selection'] = 'Seleccionar';
$string['overview:table:sharedby'] = 'Compartido por';
$string['overview:table:shareend'] = 'Compartido hasta';
$string['overview:table:sharestart'] = 'Compartido en';
$string['overview:table:viewcourse'] = 'Ver curso';
$string['overview:table:viewfile'] = 'Ver archivo';
$string['overview:table:viewgradeform'] = 'Ver formato para calificar';
$string['pluginname'] = 'ePortfolio';
$string['privacy:metadata:local_eportfolio'] = 'Datos compartidos por el plugin ePortfolio';
$string['privacy:metadata:local_eportfolio:timecreated'] = 'Fecha en la que se creó el ePortfolio';
$string['privacy:metadata:local_eportfolio:timemodified'] = 'Fecha en la que se editó por última vez el ePortfolio';
$string['privacy:metadata:local_eportfolio:title'] = 'Nombre del archivo/título del ePortfolio';
$string['privacy:metadata:local_eportfolio:usermodified'] = 'El ID del usuario que creó/compartió los datos del ePortfolio';
$string['privacy:metadata:local_eportfolio_share'] = 'Información sobre ePortfolios compartidos';
$string['privacy:metadata:local_eportfolio_share:courseid'] = 'Curso en el que se compartió el ePortfolio';
$string['privacy:metadata:local_eportfolio_share:enddate'] = 'Opcional: Fecha de finalización hasta la cual el uso compartido está activo';
$string['privacy:metadata:local_eportfolio_share:shareoption'] = 'Tipo de compartición';
$string['privacy:metadata:local_eportfolio_share:timecreated'] = 'Fecha en la que se compartió el ePortfolio';
$string['privacy:metadata:local_eportfolio_share:timemodified'] = 'Fecha en la que se editó por última vez el ePortfolio compartido';
$string['privacy:metadata:local_eportfolio_share:title'] = 'Nombre del archivo/título del ePortfolio';
$string['privacy:metadata:local_eportfolio_share:usermodified'] = 'ID de usuario que creó/compartió los datos del ePortfolio';
$string['privacy:metadata:myeportfolios'] = 'Mi ePortfolios';
$string['privacy:metadata:mysharedeportfolios'] = 'Mi ePortfolios compartidos';
$string['settings:general'] = 'Configuraciones';
$string['settings:globalnavbar:enable'] = 'Entrada principal en Navegación';
$string['settings:globalnavbar:enable:desc'] = 'En la navegación principal se muestra una entrada para el ePortfolio.';
$string['settings:gradingteacher'] = 'Roles para evaluadores';
$string['settings:gradingteacher:desc'] = 'Seleccione los roles que tienen permitido calificar de forma compartida
 ePortfolios en la actividad “ePortfolio”.';
$string['settings:helpandfaq'] = 'URL de ayuda y preguntas frecuentes';
$string['settings:helpandfaq:desc'] = 'Puede introducir una URL diferente para la página de Ayuda y preguntas frecuentes, por ejemplo, para hacer referencia a su propia página de ayuda.';
$string['settings:studentroles'] = 'Roles para estudiantes';
$string['settings:studentroles:desc'] = 'Por favor seleccione los roles en los que se encuentran sus estudiantes
inscritos en el curso.';
$string['sharing:alreadyshared:course'] = 'Curso';
$string['sharing:alreadyshared:info'] = 'El ePortfolio ya ha sido compartido en los siguientes cursos:';
$string['sharing:alreadyshared:shareoption'] = 'Tipo de compartición';
$string['sharing:form:courseselection'] = 'Seleccionar un curso para compartir';
$string['sharing:form:courseselection:desc'] = 'Seleccione un curso en el que desea compartir su ePortfolio.<br>
Sólo puede seleccionar cursos que hayan sido marcados como cursos ePortfolio y en los que usted está inscrito.';
$string['sharing:form:enddate:enable'] = 'Establecer fecha de finalización';
$string['sharing:form:enddate:label'] = 'Activar selección de fecha';
$string['sharing:form:enddate:select'] = 'Disponible hasta';
$string['sharing:form:enrolledusers'] = 'Participantes con quienes compartir';
$string['sharing:form:enrolledusers_help'] = 'Sólo los participantes seleccionados pueden ver/calificar el ePortfolio';
$string['sharing:form:fullcourse'] = 'Compartir ePortfolio con';
$string['sharing:form:groups'] = 'Grupos de cursos con los cuales compartir';
$string['sharing:form:groups_help'] = 'Sólo los miembros del grupo pueden ver/calificar el ePortfolio';
$string['sharing:form:roles'] = 'roles con los cuales compartir';
$string['sharing:form:roles_help'] = 'Solo los participantes con esta asignación de roles pueden ver/calificar el ePortfolio';
$string['sharing:form:select:allcourses'] = 'Todos los cursos';
$string['sharing:form:select:fullcourse'] = 'Compartir con curso completo';
$string['sharing:form:select:grade'] = 'Calificación';
$string['sharing:form:select:hint'] = 'Por favor seleccione un curso';
$string['sharing:form:select:pleaseselect'] = 'Por favor seleccione';
$string['sharing:form:select:share'] = 'Compartir';
$string['sharing:form:select:singlecourse'] = 'Selecionar curso';
$string['sharing:form:select:targetgroup'] = 'Compartir con participantes seleccionados';
$string['sharing:form:select:template'] = 'Plantilla';
$string['sharing:form:sharedcourses'] = 'Curso actualmente seleccionado';
$string['sharing:form:sharedcourses_help'] = 'Sólo puede seleccionar los cursos en los que usted está inscrito.';
$string['sharing:form:sharedusers'] = 'Compartir ePortfolio con todo el curso o solo con participantes seleccionados';
$string['sharing:form:sharedusers:desc'] = 'Seleccione si desea compartir su ePortfolio con todo el curso o con participantes seleccionados.
Usted puede compartir su ePortfolio con todos los participantes inscritos en el curso o solo con determinados roles, participantes o grupos del curso.';
$string['sharing:form:shareoption'] = 'Tipo de compartición';
$string['sharing:form:shareoptionselection'] = 'Seleccionar un tipo de uso compartido';
$string['sharing:form:shareoptionselection:desc'] = 'Seleccione cómo desea compartir el ePortfolio.<br><br>
<b>Compartir:</b>
Los participantes del curso sólo podrán ver este ePortfolio.<br>
<b>Calificar:</b>
Los profesores podrán calificar su ePortfolio.<br>
<b>Plantilla:</b>
Los participantes pueden reutilizar su ePortfolio como plantilla.<br><br>
Opcionalmente, también puede seleccionar una fecha durante la cual el ePortfolio debe estar disponible.';
$string['sharing:form:step:confirm'] = 'Compartir ePortfolio';
$string['sharing:form:step:courseselection'] = 'Seleccionar curso';
$string['sharing:form:step:nocourseselection'] = 'Actualmente no hay ningún curso disponible para compartir su ePortfolio.';
$string['sharing:form:step:shareoptionselection'] = 'Seleccionar opción para compartir';
$string['sharing:form:step:userselection'] = 'Seleccionar participantes';
$string['sharing:header'] = 'Compartir ePortfolio';
$string['sharing:share:alreadyexists'] = '¡El ePortfolio ya ha sido compartido bajo las mismas condiciones!';
$string['sharing:share:inserterror'] = 'Se produjo un error al compartir el ePortfolio. ¡Por favor inténtalo de nuevo!';
$string['sharing:share:successful'] = '¡Usted ha compartido su ePortfolio con éxito!';
$string['undo:checkconfirm'] = '¿Realmente desea deshacer el ePortfolio compartido?';
$string['undo:confirm'] = 'Confirmar';
$string['undo:error'] = '¡Hubo un error al deshacer el uso compartido de este archivo! ¡Por favor inténtalo de nuevo!';
$string['undo:header'] = 'Deshacer ePortfolio compartido';
$string['undo:success'] = '¡Deshacer exitoso!';
$string['uploadform:cancelled'] = '¡La operación ha sido cancelada!';
$string['uploadform:description'] = 'Descripción';
$string['uploadform:error'] = '¡Se produjo un error al cargar el archivo! ¡Por favor inténtalo de nuevo!';
$string['uploadform:file'] = 'Seleccionar un archivo';
$string['uploadform:header'] = 'Subir archivo H5P';
$string['uploadform:save'] = 'Subir archivo';
$string['uploadform:successful'] = 'El archivo se ha cargado correctamente.';
$string['uploadform:template:check'] = 'Este es un archivo de plantilla';
$string['uploadform:template:check_help'] = 'Si comparte el portafolio como plantilla, otros usuarios podrán copiarlo y usarlo.';
$string['uploadform:template:checklabel'] = 'Subir como plantilla';
$string['uploadform:template:header'] = 'Comparte este archivo como plantilla';
$string['uploadform:title'] = 'Título/Nombre';
$string['use:template:checkconfirm'] = '¿Quiere utilizar la plantilla ePortfolio seleccionada?';
$string['use:template:confirm'] = 'Confirmar';
$string['use:template:error'] = '¡Hubo un error al copiar el archivo de plantilla! ¡¡¡Por favor inténtalo de nuevo!!!';
$string['use:template:header'] = 'Usar la plantilla ePortfolio';
$string['use:template:success'] = '¡La plantilla fue copiada exitosamente a su ePortfolio para uso posterior!';
$string['view:eportfolio:button:backtocourse'] = 'Regresar al curso';
$string['view:eportfolio:button:backtoeportfolio'] = 'regresar al resumen';
$string['view:eportfolio:button:edit'] = 'Editar archivo H5P';
$string['view:eportfolio:sharedby'] = 'Compartido por';
$string['view:eportfolio:timecreated'] = 'Creado en';
$string['view:eportfolio:timemodified'] = 'Última modificación';
$string['view:header'] = 'Ver ePortfolio';
