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
 * Strings for component 'booking', language 'es_mx', version '4.4'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutmodaloptiondateform'] = 'Crear fechas personalizadas
(por ejemplo, para eventos bloqueados o para fechas individuales que difieren de la serie de fechas).';
$string['accessdenied'] = 'Acceso denegado';
$string['activatemails'] = 'Activar correos electrónicos (confirmaciones, notificaciones y más)';
$string['active'] = 'Activo';
$string['activitycompletionsuccess'] = 'Todos los usuarios seleccionados han sido marcados para finalización de actividad';
$string['activitycompletiontext'] = 'Mensaje que se enviará al usuario cuando se complete la opción de reserva';
$string['activitycompletiontextmessage'] = 'Has completado la siguiente opción de reserva:

{$a->bookingdetails}

Ir al curso: {$a->courselink}
Ver todas las opciones de reserva: {$a->bookinglink}';
$string['activitycompletiontextsubject'] = 'Opción de reserva completada';
$string['addastemplate'] = 'Añadir como plantilla';
$string['addbookingrule'] = 'Añadir regla';
$string['addcategory'] = 'Editar categorías';
$string['addholiday'] = 'Añadir día(s) feriado(s)';
$string['additionalpricecategories'] = 'Añadir o editar categorías de precio';
$string['addmorebookings'] = 'Añadir más reservaciones';
$string['addnewcategory'] = 'Añadir nueva categoría';
$string['addnewreporttemplate'] = 'Añadir nueva plantilla de reporte';
$string['addnewtagtemplate'] = 'Añadir nueva plantilla de marcas';
$string['addoptiondate'] = 'Añadir fecha';
$string['addpricecategory'] = 'Añadir categoría de precio';
$string['address'] = 'Dirección';
$string['addsemester'] = 'Añadir semestre';
$string['addtocalendar'] = 'Añadir al calendario del curso';
$string['addtocalendardesc'] = 'Los eventos del calendario del curso son visibles para TODOS los usuarios dentro de un curso. Si no desea que se creen, puede desactivar esta configuración y bloquearla de forma predeterminada. No se preocupe: los eventos del calendario del usuario para las opciones reservadas se crearán de todos modos.';
$string['addtogroup'] = 'Inscribir automáticamente usuarios en grupo';
$string['addtogroup_help'] = 'Inscribir usuarios automáticamente al grupo - el grupo será creado automáticamente con el nombre de "Bookin name - Option name"';
$string['addusertogroup'] = 'Añadir usuario al grupo:';
$string['advancedoptions'] = 'Opciones avanzadas';
$string['aftercompletedtext'] = 'Despues de completada la actividad';
$string['aftercompletedtext_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{bookingdetails} - Resumen detallado de la opción de reserva (incluye sesiones y enlace a la opción de reserva)</li>
<li>{gotobookingoption} - Enlace a opción de reserva</li>
<li>{status} - Estado de reserva</li>
<li>{participant}</li>
<li>{email} - Email del usuario</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Nombre del primer profesor</li>
<li>{teachers} - Lista de todos los profesores</li>
<li>{teacherN} - Nombre de un profesor específico, ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre de usuario del usuario</li>
<li>{dates} - Horas de sesiones</li>
<li>{shorturl} - Opción de URL corta</li>
<li>{usercalendarurl} - Enlace para suscribirse al calendario del usuario (eventos personales)</li>
<li>{coursecalendarurl} - Enlace para suscribirse al calendario de cursos (eventos del curso)</li>
</ul>';
$string['alertrecalculate'] = '<b>¡Precaución!</b> Todos los precios serán recalculados y todos los precios anteriores serán sobrescritos.';
$string['allbookingoptions'] = 'Descargar usuarios para todas las opciones de reservaciones';
$string['allchangessaved'] = 'Se han guardado todos los cambios.';
$string['allcomments'] = 'Todos pueden comentar';
$string['allmailssend'] = '¡ Se han enviado exitosamente todos los Emails a usuarios !';
$string['allowupdate'] = 'Permitir que se actualicen reservaciones';
$string['allratings'] = 'Todos pueden valorar';
$string['allteachers'] = 'Todos los profesores';
$string['allusersbooked'] = 'Todos los {$a} usuarios seleccionados han sidoexitosamente asignados a esta opción de reservación.';
$string['alreadyonlist'] = 'Usted será notificado';
$string['alreadypassed'] = 'Ya pasado';
$string['answer'] = 'Respuesta';
$string['answered'] = 'Contestado';
$string['applyunitfactor'] = 'Aplicar factor unitario';
$string['applyunitfactor_desc'] = 'Si esta configuración está activa, se utilizará la duración de la unidad educativa (p. ej., 45 min) establecida anteriormente para calcular la cantidad de unidades educativas. Este número se utilizará como factor para la fórmula de precio.
Ejemplo: una opción de reserva tiene una serie de fechas como "lunes, 15:00 - 16:30". Por lo tanto, dura 2 unidades educativas (45 min cada una).
Por lo tanto, se aplicará un factor de unidad de 2 a la fórmula de precio.';
$string['asglobaltemplate'] = 'Usar como plantilla global';
$string['associatedcourse'] = 'Curso asociado';
$string['astemplate'] = 'Usar como plantilla en este curso';
$string['attachedfiles'] = 'Archivos anexos';
$string['autcrheader'] = 'Creación automática de opciones de reserva';
$string['autcrwhatitis'] = 'Si esta opción está habilitada, se crea automáticamente una nueva opción de reserva y se le asigna un usuario como administrador de reservas o profesor. Los usuarios se seleccionan en función de un valor de campo de perfil de usuario personalizado.';
$string['autoenrol'] = 'Inscribir usuarios automáticamente';
$string['autoenrol_help'] = 'Si se selecciona, los usuarios serán inscritos dentro del curso relevante tan pronto como hagan la reservación y serán des-inscritos del curso tan pronto como se cancele la reservación.';
$string['automaticcoursecreation'] = 'Creación automática de cursos Moodle (PRO)';
$string['availability'] = 'Todavía disponible';
$string['availabilityconditions'] = 'Condiciones de disponibilidad';
$string['available'] = 'Lugares disponibles';
$string['availableplaces'] = 'Lugares disponibles: {$a->available} de {$a->maxanswers}';
$string['backtoresponses'] = '<< Regresar a respuestas';
$string['banusernames'] = 'Prohibir nombres_de_usuarios';
$string['banusernames_help'] = 'Para limitar cuales nombres_de_usuarios no pueden participar, simplemente escríbalos en este campo, separados por comas. Para prohibir los nombres_de_usuarios que terminan en gmail.com y yahoo.com, simplemente escriba: gmail.com, yahoo.com';
$string['banusernameswarning'] = 'Su nombre_de_usuario está prhibido, por lo que Usted no puede reservar.';
$string['beforebookedtext'] = 'Antes reservada';
$string['beforebookedtext_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{bookingdetails} - Resumen detallado de la opción de reserva (incluye sesiones y enlace a la opción de reserva)</li>
<li>{gotobookingoption} - Enlace a la opción de reserva</li>
<li>{status} - Estado de la reserva</li>
<li>{participant}</li>
<li>{email} - Correo electrónico del usuario</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Nombre del primer profesor</li>
<li>{teachers} - Lista de todos los profesores</li>
<li>{teacherN} - Nombre de profesor específico; ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre de usuario del usuario</li>
<li>{dates} - Horarios de sesiones</li>
<li>{shorturl} - URl corta de opción</li>
<li>{usercalendarurl} - Enlace para suscribirse al calendario del usuario (eventos personales)</li>
<li>{coursecalendarurl} -Enlace para suscribirse al calendario de cursos (eventos del curso)</li>
</ul>';
$string['beforecompletedtext'] = 'después reservada';
$string['beforecompletedtext_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{bookingdetails} - Resumen detallado de la opción de reserva (incluye sesiones y enlace a la opción de reserva)</li>
<li>{gotobookingoption} - Enlace a la opción de reserva</li>
<li>{status} - Estado de la reserva</li>
<li>{participant}</li>
<li>{email} - Correo electrónico del usuario</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Nombre del primer profesor</li>
<li>{teachers} - Lista de todos los profesores</li>
<li>{teacherN} - Nombre de profesor específico; ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre de usuario del usuario</li>
<li>{dates} - Horarios de sesiones</li>
<li>{shorturl} - URl corta de opción</li>
<li>{usercalendarurl} - Enlace para suscribirse al calendario del usuario (eventos personales)</li>
<li>{coursecalendarurl} -Enlace para suscribirse al calendario de cursos (eventos del curso)</li>
</ul>';
$string['biggerthan'] = 'es mayor que (número)';
$string['booked'] = 'Reservado';
$string['bookedpast'] = 'Reservado (curso terminado)';
$string['bookedtext'] = 'Confirmación de reservación';
$string['bookedtextmessage'] = 'Su reservación ha sido registrada:

{$a->bookingdetails}
<p>############################################### #</p>
Estado de la reserva: {$a->status}
Participante: {$a->participant}

Para ver todos sus cursos reservados haga clic en el siguiente enlace: {$a->bookinglink}
El curso asociado se puede encontrar aquí: {$a->courselink}';
$string['bookedtextsubject'] = 'Confirmación de reserva para {$a->title}';
$string['bookedtextsubjectbookingmanager'] = 'Nueva reserva para {$a->title} por {$a->participant}';
$string['bookedusers'] = 'Usuarios que reservaron';
$string['booking'] = 'Reservaciones';
$string['booking:addeditownoption'] = 'Añadir opinión nueva y editar opiniones propias.';
$string['booking:addinstance'] = 'Añadir nueva reservación';
$string['booking:bookforothers'] = 'Reservar para otros';
$string['booking:canseeinvisibleoptions'] = 'Ver opciones invisibles.';
$string['booking:cansendmessages'] = 'Puede enviar mensajes';
$string['booking:changelockedcustomfields'] = 'Puede cambiar los campos de opciones de reserva personalizados bloqueados.';
$string['booking:choose'] = 'Reservar';
$string['booking:comment'] = 'Añadir comentarios';
$string['booking:communicate'] = 'Puede comunicarse';
$string['booking:deleteresponses'] = 'Eliminar respuestas';
$string['booking:downloadresponses'] = 'Descargar respuestas';
$string['booking:managecomments'] = 'Gestionar comentarios';
$string['booking:manageoptiontemplates'] = 'Administrar plantillas de opciones';
$string['booking:rate'] = 'Valorar opciones de reservación elegidas';
$string['booking:readallinstitutionusers'] = 'Mostrar todos los usuarios';
$string['booking:readresponses'] = 'Leer respuestas';
$string['booking:semesters'] = 'Reservas: Semestres';
$string['booking:sendpollurl'] = 'Enviar URL de encuesta';
$string['booking:sendpollurltoteachers'] = 'Mandar URL de encuesta a profesores';
$string['booking:subscribeusers'] = 'Hacer reservaciones para otros usuarios';
$string['booking:updatebooking'] = 'Gestionar opciones de reservación';
$string['booking:viewallratings'] = 'Ver todas las valoraciones crudas dadas por individuos';
$string['booking:viewanyrating'] = 'Ver todas las valoraciones que cualquiera recibió';
$string['booking:viewrating'] = 'Ver todas las valoraciones que Usted recibió';
$string['bookingaction'] = 'Acción';
$string['bookingattachment'] = 'Anexo';
$string['bookingcategory'] = 'Categoría';
$string['bookingchangedtext'] = 'Mensaje que se enviará cuando cambie una opción de reserva (sólo se enviará a los usuarios que ya hayan reservado). Utilice el reemplazable {changes} para mostrar los cambios. Introduzca 0 para desactivar las notificaciones de cambios.';
$string['bookingchangedtext_help'] = 'ntroduzca 0 para desactivar las notificaciones de cambios.

Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes reemplazables (placeholders) en el texto:
<ul>
<li>{changes} - ¿Qué ha cambiado?</li>
<li>{bookingdetails} - Resumen detallado de la opción de reserva (incluye sesiones y enlace a la opción de reserva)</li>
<li>{gotobookingoption} - enlace a opción de reserva</li>
<li>{status} - Estado de reserva</li>
<li>{participant}</li>
<li>{email} - Email del usuario</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Nombre del primer profesor</li>
<li>{teachers} - Lista de todos los profesores</li>
<li>{teacherN} - Nombre d eun profesor específico, como por ejemplo. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con Id del usuario</li>
<li>{qr_username} - IInsertar código QR con nombre de usuario del usuario</li>
<li>{dates} - Fechas de sesión</li>
<li>{shorturl} - URL corte de opción</li>
<li>{usercalendarurl} - Enlace para suscribirse al calendario del usuario (eventos personales)</li>
<li>{coursecalendarurl} - Enlace para suscribirse al calendario del curso (eventos del curso)</li>
</ul>';
$string['bookingchangedtextmessage'] = 'Su reserva "{$a->title}" ha cambiado.

Esto es lo nuevo:
{changes}

Para ver los cambios y todos los cursos reservados, haga clic en el siguiente enlace: {$a->bookinglink}';
$string['bookingchangedtextsubject'] = 'Notificación de cambio para {$a->title}';
$string['bookingclosingtime'] = 'Hasta';
$string['bookingcondition'] = 'Condición';
$string['bookingdeleted'] = 'Su reservación fue cancelada';
$string['bookingduration'] = 'Duración';
$string['bookingfull'] = 'No hay lugares disponibles';
$string['bookingfulldidntregister'] = 'La opción está llena, ¡por eso no transferí a todos los usuarios!';
$string['bookingimages'] = 'Cargue imágenes de encabezado para las opciones de reserva - deben tener exactamente el mismo nombre que el valor del campo personalizado seleccionado en cada opción de reserva.';
$string['bookingimagescustomfield'] = 'Campo personalizado de opción de reserva para que coincida con las imágenes del encabezado';
$string['bookinginstance'] = 'Instancia de reserva';
$string['bookinginstancetemplatename'] = 'Nombre de la plantilla de instancia de reserva';
$string['bookinginstancetemplatessettings'] = 'Plantillas de instancias de reserva';
$string['bookingmanagererror'] = 'El nombre_de_usuario escrito no es válido. Puede ser que no exista o que haya más de un usuario con este nombre_de_usuario (por ejemplo, si Usted tiene habilitadas autenticaciones por Mnet y locales)';
$string['bookingmeanwhilefull'] = 'Mientras tanto, alguien tomó el último lugar disponible';
$string['bookingname'] = 'Nombre de reservación';
$string['bookingnotopenyet'] = 'Su evento comienza en {$a} minutos. El enlace que utilizó lo redireccionará si hace clic en él nuevamente dentro de los 15 minutos anteriores.';
$string['bookingopen'] = 'Abierto';
$string['bookingopeningtime'] = 'Desde';
$string['bookingoptioncalendarentry'] = '<a href="{$a}" class="btn btn-primary">Reserve ahora...</a>';
$string['bookingoptiondefaults'] = 'Configuración predeterminada para las opciones de reserva';
$string['bookingoptiondefaultsdesc'] = 'Aquí puede establecer configuraciones predeterminadas para la creación de opciones de reserva y bloquearlas si es necesario.';
$string['bookingoptionimage'] = 'Subir una imagen';
$string['bookingoptionname'] = 'Nombre de opción de reservación';
$string['bookingoptionprice'] = 'Precio';
$string['bookingoptionsfromtemplatemenu'] = 'Nueva opción de reservación desde plantilla';
$string['bookingoptionsmenu'] = 'Opciones de reservacion';
$string['bookingoptiontitle'] = 'Título de opción de reservación';
$string['bookingorganizatorname'] = 'Nombre del organizador';
$string['bookingpassed'] = 'Su evento ha finalizado.';
$string['bookingplacesenoughmessage'] = 'Aún quedan suficientes lugares de reserva disponibles.';
$string['bookingplacesfullmessage'] = 'Ya no hay lugares de reserva disponibles.';
$string['bookingplacesinfotexts'] = 'Mostrar textos de información de disponibilidad para reservar lugares';
$string['bookingplaceslowmessage'] = 'Quedan pocos lugares de reserva.';
$string['bookingplaceslowpercentage'] = 'Mensaje de porcentaje de reserva de lugares bajo';
$string['bookingplaceslowpercentagedesc'] = 'Si los lugares de reserva disponibles alcanzan o quedan por debajo de este porcentaje, se mostrará un mensaje de lugares de reserva bajos.';
$string['bookingpoints'] = 'Puntos del curso';
$string['bookingpolicy'] = 'Política de reservaciones';
$string['bookingpollurl'] = 'URL de encuesta';
$string['bookingpollurlteachers'] = 'URL de encuesta de profesor';
$string['bookingpricecategory'] = 'Categoría de precio';
$string['bookingpricesettings'] = 'Configuraciones de precio';
$string['bookingpricesettings_desc'] = 'Aquí puede personalizar los precios de reserva.';
$string['bookingrule'] = 'Regla';
$string['bookingruleaction'] = 'Acción de la regla';
$string['bookingrulecondition'] = 'Condición de la regla';
$string['bookingrules'] = 'Reserva: Definir reglas globales (PRO)';
$string['bookingsaved'] = 'Su reservación fur guardada exitosamente. Usted puede ahora proceder a reservar otros cursos.';
$string['bookingsettings'] = 'Reserva: Configuraciones principales';
$string['bookingtags'] = 'Marcas';
$string['bookingtext'] = 'Texto de reservación';
$string['booknow'] = 'Reservar ahora';
$string['bookotherusers'] = 'Reservar para otros usuarios';
$string['bookotheruserslimit'] = 'Número máximo de usuarios que un profesor asignado a la opción puede reservar';
$string['booktootherbooking'] = 'Reservar usuarios a otra reservación';
$string['bookuserswithoutcompletedactivity'] = 'Reservar usuarios sin actividad completada';
$string['bstcourse'] = 'Curso';
$string['bstcoursestarttime'] = 'Fecha / Hora';
$string['bstinstitution'] = 'Institución';
$string['bstlink'] = 'Mostrar';
$string['bstlocation'] = 'Ubicación';
$string['bstmanageresponses'] = 'Gestionar respuestas';
$string['bstparticipants'] = 'Participantes';
$string['bstteacher'] = 'Profesor(es)';
$string['bsttext'] = 'Opción de reserva';
$string['bstwaitinglist'] = 'En lista de espera';
$string['btnbooknowname'] = 'Nombre del botón: "Reservar ahorita"';
$string['btncacname'] = 'Nombre del botón: "Confirmar finalización de actividad"';
$string['btncancelname'] = 'Nombre del botón: "Cancelar reservación"';
$string['btnviewavailable'] = 'Ver opciones disponibles';
$string['cachedef_bookingoptions'] = 'Opciones de reserva (caché)';
$string['cachedef_bookingoptionsanswers'] = 'Respuestas de opciones de reserva (caché)';
$string['cachedef_bookingoptionsettings'] = 'Configuraciones de opciones de reserva (caché)';
$string['cachedef_bookingoptionstable'] = 'Tablas de opciones de reserva con consultas SQL con hash (caché)';
$string['cachedef_cachedbookinginstances'] = 'Instancias de reserva (caché)';
$string['cachedef_cachedpricecategories'] = 'Categorías de precios de reserva (caché)';
$string['cachedef_cachedprices'] = 'Precios en reserva (caché)';
$string['cachedef_cachedsemesters'] = 'Semestres (caché)';
$string['caladdascourseevent'] = 'Agregar al calendario (visible solo para los participantes del curso)';
$string['caladdassiteevent'] = 'Agregar al calendario (visible para todos los usuarios)';
$string['caldonotadd'] = 'No agregar al calendario del curso';
$string['caleventtype'] = 'Visibilidad de evento del calendario';
$string['cancancelbookdays'] = 'No permitir que los usuarios cancelen su reserva n días antes del inicio. Minus (Menos) significa que los usuarios aún pueden cancelar n días DESPUÉS de que comience el curso.';
$string['cancancelbookdaysno'] = 'No limitar';
$string['cancel'] = 'Cancelar';
$string['cancelallusers'] = 'Cancelar reserva para todos los usuarios';
$string['cancelbooking'] = 'Cancelar reservación';
$string['canceloption'] = 'Opción de cancelación de reserva';
$string['canceloption_desc'] = 'Cancelar una opción de reserva significa que ya no se puede reservar, pero todavía se muestra en la lista.';
$string['cancelreason'] = 'Motivo de cancelación de esta opción de reserva';
$string['cancelthisbookingoption'] = 'Cancelar esta opción de reserva';
$string['cannotremovesubscriber'] = 'Usted tiene que quitar la finalización de actividad antes de cancelar la reservación. ¡ La reservación NO fue cancelada !';
$string['categories'] = 'Categorías';
$string['category'] = 'Categoría';
$string['categoryname'] = 'Nombre de categoría';
$string['cfgsignin'] = 'Configuración de Hoja para apuntarse';
$string['cfgsignin_desc'] = 'Configurar las configuraciones de la hoja para apuntarse';
$string['changeinfoadded'] = 'Se ha añadido:';
$string['changeinfocfadded'] = 'Se ha añadido un campo:';
$string['changeinfocfchanged'] = 'Un campo ha cambiado:';
$string['changeinfocfdeleted'] = 'Un campo ha sido eliminado:';
$string['changeinfochanged'] = 'ha cambiado';
$string['changeinfodeleted'] = 'ha sido eliminado:';
$string['changeinfosessionadded'] = 'Una sesión ha sido añadida:';
$string['changeinfosessiondeleted'] = 'Una sesión ha sido eliminada:';
$string['changenew'] = '[NUEVO]';
$string['changeold'] = '[ELIMINADO]';
$string['changesemester'] = 'Cambiar semestre';
$string['changesemester:warning'] = '<strong>Atención:</strong> Al hacer clic en "Guardar cambios", se eliminarán todas las fechas  y serán reemplazados por fechas del semestre elegido.';
$string['choose...'] = 'Elegir...';
$string['choosepdftitle'] = 'Seleccionar un título para la hoja para apuntarse';
$string['chooseperiod'] = 'Seleccionar el período de tiempo';
$string['chooseperiod_help'] = 'Seleccione un período de tiempo dentro del cual desea crear la serie de fechas.';
$string['choosesemester'] = 'Elegir semestre';
$string['choosesemester_help'] = 'Elegir el semestre para el cual se deben crear las vacaciones.';
$string['closed'] = 'Reservaciones cerradas';
$string['comments'] = 'Comentarios';
$string['completed'] = 'Completado';
$string['completedcomments'] = 'Solamente con actividad completada';
$string['completedratings'] = 'Solamente con actividad completada';
$string['completionmodule'] = 'Al completarse la actividad seleccionada del curso, habilitar eliminación masiva de reservaciones de usuario';
$string['completionmodule_help'] = 'Mostrar botón para eliminación masiva para respuestas de reservaciones, si otro módulo de curso ha sido completado. ¡Las reservaciones de los usuarios serán eliminadas con un click del botón en la página del reporte! Solamente actividades con finalizacion habilitada pueden ser seleccionadas de la lista.';
$string['confirmactivtyfrom'] = 'Confirmar actividad de usuarios desde';
$string['confirmationmessagesettings'] = 'Configuraciones de Email de confirmación';
$string['confirmbookingoffollowing'] = 'Por favor confirme la reservación para el siguiente curso';
$string['confirmcanceloption'] = 'Confirmar opción de cancelación de reserva';
$string['confirmcanceloptiontitle'] = 'Cambiar el estado de la opción de reserva';
$string['confirmdeletebookingoption'] = '¿Realmente desea eliminar esta opción de reservación?';
$string['confirmoptioncompletion'] = '(Des)confirmar estado de finalización';
$string['confirmpresence'] = 'Confrmar presencia';
$string['confirmusers'] = 'Confirmar actividad del usuario';
$string['confirmuserswith'] = 'Confirmar usuarios que completaron actividad o que recibieron insignia';
$string['contains'] = 'contiene (texto)';
$string['containsnot'] = 'NO contiene (texto)';
$string['copy'] = '- Copiar';
$string['copyonlythisbookingurl'] = 'Copiar esta URL de reservación';
$string['copypollurl'] = 'Copiar URL de encuesta';
$string['copytoclipboard'] = 'Copiar al portapapeles: Ctrl+C, Enter';
$string['copytotemplate'] = 'Guardar la opción de reserva como plantilla';
$string['copytotemplatesucesfull'] = 'La opción de reserva se guardó correctamente como plantilla.';
$string['coursedate'] = 'Fecha';
$string['courseendtime'] = 'Hora de fin del curso';
$string['coursepageshortinfo'] = 'Si desea reservar este curso, haga clic en "Ver opciones disponibles", elija una opción de reserva y luego haga clic en "Reservar ahora".';
$string['coursepageshortinfolbl'] = 'Información breve';
$string['coursepageshortinfolbl_help'] = 'Elija un texto informativo breve para mostrar en la página del curso.';
$string['coursestarttime'] = 'Hora de principio del curso';
$string['courseurl'] = 'URL del Curso';
$string['createdbywunderbyte'] = 'Módulo de reservas creado por Wunderbyte GmbH';
$string['createnewbookingoption'] = 'Nueva opción de reserva';
$string['createnewbookingoptionfromtemplate'] = 'Agregar una nueva opción de reserva desde la plantilla';
$string['csvfile'] = 'Archivo CSV';
$string['customdatesbtn'] = '<i class="fa fa-plus-square"></i> Fechas personalizadas...';
$string['customdownloadreport'] = 'Descargar reporte';
$string['customfield'] = 'Campo personalizado a ser configurado en las configuraciones de opción de reservación. Después será mostrado en la vista general de opción de reservación.';
$string['customfieldconfigure'] = 'Reserva: Campos personalizados de opciones de reserva';
$string['customfielddef'] = 'Campo personalizado de opción de reservación';
$string['customfielddesc'] = 'Después de añadir un campo personalizado, Usted puede definir el valor para el campo en las configuraciones de la opción de reservación. El valor será mostrado en la descripción de la opción de reservación.';
$string['customfieldname'] = 'Nombre del campo';
$string['customfieldname_help'] = 'Puede introducir cualquier nombre de campo que desee. Los nombres de campos especiales
                                    <ul>
                                        <li>TeamsMeeting</li>
                                        <li>ZoomMeeting</li>
                                        <li>BigBlueButtonMeeting</li>
                                     </ul> en combinación con un enlace en el campo de valor se mostrarán botones y enlaces
 que sólo son accesibles durante (y poco antes) de las reuniones reales.';
$string['customfieldoptions'] = 'Lista de valores posibles';
$string['customfields'] = 'Campos personalizados';
$string['customfieldtype'] = 'Tipo de campo';
$string['customfieldvalue'] = 'Valor';
$string['customfieldvalue_help'] = 'Puede introducir cualquier valor que desee (texto, número o HTML).<br>
                                     Si ha utilizado uno de los nombres de campo especiales
                                     <ul>
                                        <li>TeamsMeeting</li>
                                        <li>ZoomMeeting</li>
                                        <li>BigBlueButtonMeeting</li>
                                     </ul> luego ingrese el enlace completo a la sesión de la reunión comenzando con https:// o http://';
$string['customprofilefield'] = 'Campo de perfil personalizado para comprobar';
$string['customprofilefieldvalue'] = 'Valor del campo de perfil personalizado para comprobar';
$string['customreporttemplate'] = 'Plantilla de reporte personalizada';
$string['customreporttemplates'] = 'Plantillas de reportes personalizados';
$string['dateandtime'] = 'Fecha y hora';
$string['dateerror'] = 'Fecha equivocada en la línea {$a}:';
$string['datenotset'] = 'Fecha no configurada';
$string['dateparseformat'] = 'Formato para procesar fecha';
$string['dateparseformat_help'] = 'Por favor, use el formato de fecha especificado en el archivo CSV file. Ayuda con <a href="http://php.net/manual/en/function.date.php">este</a> reurso para opciones.';
$string['dates'] = 'Fechas';
$string['dayofweektime'] = 'Día y Hora';
$string['days'] = '{$a} días';
$string['daystonotify'] = 'Número de días de antelación al inicio del evento para notificar a los participantes';
$string['daystonotify2'] = 'Segunda notificación antes del inicio del evento para notificar a los participantes.';
$string['daystonotify_help'] = '¡Solamente funcionará si la opción de fecha de inicio y término está configur Use 0 para deshabilitad esta funcionalidad.ada!';
$string['daystonotifysession'] = 'Número de días de antelación al inicio de la sesión para notificar a los participantes';
$string['daystonotifysession_help'] = 'Introducir 0 para desactivar la notificación por correo electrónico para esta sesión.';
$string['daystonotifyteachers'] = 'Número de días de antelación al inicio del evento para avisar a los profesores (PRO)';
$string['defaultbookingoption'] = 'Opciones por defecto para reservaciones';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['defaultpricecategoryname'] = 'Nombre de categoría de precio predeterminado';
$string['defaultpriceformula'] = 'Fórmula dle precio';
$string['defaultpriceformuladesc'] = 'El objeto JSON permite configurar el cálculo automático de precio con una opción de reserva.';
$string['defaulttemplate'] = 'Plantilla predeterminada';
$string['defaulttemplatedesc'] = 'Plantilla de opción de reserva predeterminada al crear una nueva opción de reserva.';
$string['defaultvalue'] = 'Valor predeterminado de precio';
$string['defaultvalue_help'] = 'Introduzca un valor predeterminado para cada precio en esta categoría. Por supuesto, este valor se puede sobrescribir más tarde.';
$string['delcustfield'] = 'Eliminar este campo y todas las configuraciones asociadas al campo en las opciones de reservación';
$string['deletebooking'] = '¿Realmente desea des-inscribirse del curso siguiente <br /><br /> <b>{$a} </b>';
$string['deletebookingrule'] = 'Eliminar regla';
$string['deletecategory'] = 'Eliminar';
$string['deletecustomfield'] = '¿Eliminar campo personalizado?';
$string['deletecustomfield_help'] = 'Precaución: al activar esta casilla de verificación se eliminará el campo personalizado asociado al guardar.';
$string['deletedbookingusermessage'] = 'Hola {$a->participant},
Su reservación para {$a->title} ({$a->startdate} {$a->starttime}) ha sido cancelada.';
$string['deletedbookingusersubject'] = 'Reservación para {$a->title} cancelada';
$string['deletedrule'] = 'Regla eliminada.';
$string['deletedtext'] = 'Mensaje de reserva cancelada (ingrese 0 para desactivarlo)';
$string['deletedtextmessage'] = 'Se ha eliminado la opción de reserva: {$a->title}

Usuario: {$a->participant}
Título: {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Curso: {$a->courselink}
Enlace de reserva: {$a->bookinglink}';
$string['deletedtextsubject'] = 'Reserva eliminada: {$a->title} de {$a->participant}';
$string['deletedusers'] = 'Usuarios eliminados';
$string['deleteholiday'] = 'Eliminar vacaciones';
$string['deleteoptiondate'] = 'Eliminar fecha';
$string['deleteresponsesactivitycompletion'] = 'Eliminar a todos los usuarios con actividad completada: {$a}';
$string['deleterule'] = 'Eliminar';
$string['deletesemester'] = 'Eliminar semestre';
$string['deletesubcategory'] = '¡Por favor, primeramente elimine todas las sub-categorías de esta categoría!';
$string['deletethisbookingoption'] = 'Eliminar esta opción de reserva';
$string['deleteuserfrombooking'] = '¿Realmente desea eliminar los usuarios de la reservación?';
$string['delnotification'] = 'Usted ha elimninado exitosamente {$a->del} de {$a->all} usuarios. ¡Los usuarios que hayan completado actividad no pueden ser eliminados!';
$string['delnotificationactivitycompletion'] = 'Usted eleiminó a {$a->del} de {$a->all} usuarios. ¡Los usuarios que han completado actividad, no pueden ser eliminados!';
$string['description'] = 'Descripción';
$string['disablebookingusers'] = 'Deshabilitar reservaciones de usuarios - Ocultar botón para Reservar ahora.';
$string['disablepricecategory'] = 'Deshabilitar categoría de precio';
$string['disablepricecategory_help'] = 'Cuando deshabilita una categoría de precio, ya no podrá usarla.';
$string['dontaddpersonalevents'] = 'No agregue eventos de calendario personales';
$string['dontaddpersonaleventsdesc'] = 'Para cada opción reservada y para todas sus sesiones, se crean eventos personales en el calendario moodle. Suprimirlos mejora el rendimiento de los sitios con carga pesada.';
$string['download'] = 'Descargar';
$string['downloadallresponses'] = 'Descargar todas las respuestas para todas las opciones de reservaciones';
$string['downloadusersforthisoptionods'] = 'Descargar usuarios como archivo .ODS';
$string['downloadusersforthisoptionxls'] = 'Descargar usuarios como archivo .XLS';
$string['duplicatename'] = 'el nombre de la opción de reservación ya existe. Por favor elija otro.';
$string['duplicationrestore'] = 'Duplicación, copia de respaldo de seguridad y restauración';
$string['duplicationrestoredesc'] = 'Aquí puede configurar qué información desea incluir al duplicar o realizar copias de seguridad/restaurar instancias de reserva.';
$string['duplicationrestoreentities'] = 'Incluir entidades';
$string['duplicationrestoreprices'] = 'Incluir precios';
$string['duplicationrestoreteachers'] = 'Incluir profesores';
$string['duration:minutes'] = 'Duración (minutos)';
$string['duration:units'] = 'Unidades ({$a} min)';
$string['editbookingoption'] = 'Editar opción de reserva';
$string['editcategory'] = 'Editar';
$string['editingoptiondate'] = 'Usted está actualmente editando esta sesión';
$string['editinstitutions'] = 'Editar instituciones';
$string['editotherbooking'] = 'Otras reglas para reservar';
$string['editrule'] = 'Editar';
$string['edittag'] = 'Editar';
$string['editteachers'] = 'Editar';
$string['editteacherslink'] = 'Editar profesores';
$string['educationalunitinminutes'] = 'Duración de una unidad didáctica (minutos)';
$string['educationalunitinminutes_desc'] = 'Introduzca la duración de una unidad educativa en minutos. Se utilizará para calcular las unidades didácticas realizadas.';
$string['enable'] = 'Habilitar';
$string['endtimenotset'] = 'Fecha final no configurada';
$string['enrolledcomments'] = 'Solamente inscritos';
$string['enrolledinoptions'] = 'que ya reservaron en opciones de reservacion:';
$string['enrolledratings'] = 'Solamente inscritos';
$string['enrolmentstatus'] = 'Inscribir a los usuarios al inicio del curso (predeterminado: no marcado &rarr; inscribirlos inmediatamente).';
$string['enrolmentstatus_help'] = 'Aviso: Para que funcione la inscripción automática, debe cambiar la configuración de la instancia de reserva.
 "Inscribir usuarios automáticamente" a "Sí".';
$string['entervalidurl'] = '¡Por favor, escriba una URL válida !';
$string['equals'] = 'tiene exactamente este valor (texto o número)';
$string['equalsnot'] = 'NO tiene exactamente este valor (texto o número)';
$string['error:choosevalue'] = 'Debe elegir un valor aquí.';
$string['error:coursecategoryvaluemissing'] = 'Debe elegir un valor aquí, ya que es necesario como categoría del curso.
 para el curso Moodle creado automáticamente.';
$string['error:entervalue'] = 'Debe introducir un valor aquí.';
$string['error:failedtosendconfirmation'] = 'El siguiente usuario no recibió un correo electrónico de confirmación

Estado de la reserva: {$a->status}
Participante: {$a->participant}
Opción de reserva: {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Enlace: {$a->bookinglink}
Curso asociado: {$a->courselink}';
$string['error:identifierexists'] = 'Elegir otro identificador. Este ya existe.';
$string['error:invalidcmid'] = 'No se puede abrir el reporte porque no se proporcionó un ID de módulo de curso válido (cmid). ¡Debe ser el cmid de una instancia de reserva!';
$string['error:missingteacherid'] = 'Error: No se puede cargar el reporte debido a que falta el ID del profesor.';
$string['error:mustnotbeempty'] = 'No debe estar vacío.';
$string['error:newcoursecategorycfieldmissing'] = 'Necesita crear una <a href="{$a->bookingcustomfieldsurl}" target="_blank">campo personalizado de reserva</a> para las nuevas categorías de cursos primero. Después de haber creado uno, asegúrese de que esté seleccionado en la
 <a href="{$a->settingsurl}" target="_blank">Configuración del plugin de reserva</a>.';
$string['error:nofieldchosen'] = 'Tiene que elegir un campo.';
$string['error:reasonfornoteacher'] = 'Ingrese un motivo por el cual no hubo profesores presentes en esta fecha.';
$string['error:reasonforsubstituteteacher'] = 'Ingrese un motivo para el(los) maestro(s) sustituto(s).';
$string['error:reasontoolong'] = 'El motivo es demasiado largo, ingrese un texto más corto.';
$string['error:wrongteacherid'] = 'Error: No se pudo encontrar ningún usuario para el "teacherid" proporcionado.';
$string['errorduplicatepricecategoryidentifier'] = 'Los identificadores de categoría de precio deben ser únicos.';
$string['errorduplicatepricecategoryname'] = 'Los nombres de las categorías de precios deben ser únicos.';
$string['errorduplicatesemesteridentifier'] = 'Los identificadores del semestre deben ser únicos.';
$string['errorduplicatesemestername'] = 'Los nombres de los semestres deben ser únicos.';
$string['erroremptycustomfieldname'] = 'No se permite que el nombre del campo personalizado esté vacío.';
$string['erroremptycustomfieldvalue'] = 'No se permite que el valor del campo personalizado esté vacío.';
$string['erroremptypricecategoryidentifier'] = 'El identificador de categoría de precio no puede estar vacío.';
$string['erroremptypricecategoryname'] = 'El nombre de la categoría de precio no puede estar vacío.';
$string['erroremptysemesteridentifier'] = '¡Se necesita identificador de semestre!';
$string['erroremptysemestername'] = 'El nombre del semestre no puede estar vacío';
$string['errorholidayend'] = 'No se permite que las vacaciones finalicen antes de la fecha de inicio.';
$string['errorholidaystart'] = 'No se permite que las vacaciones comiencen después de la fecha de finalización.';
$string['erroroptiondateend'] = 'La fecha final debe ser posterior a la fecha de inicio.';
$string['erroroptiondatestart'] = 'La fecha de inicio debe ser anterior a la fecha de finalización.';
$string['errorpagination'] = 'Por favor ngrese un número mayor de 0';
$string['errorsemesterend'] = 'El final del semestre debe ser después del inicio del semestre.';
$string['errorsemesterstart'] = 'El inicio del semestre debe ser antes del final del semestre.';
$string['errortoomanydecimals'] = 'Sólo se permiten 2 decimales.';
$string['eventalreadyover'] = 'Este evento ya terminó.';
$string['eventduration'] = 'Duración del evento';
$string['eventpoints'] = 'Puntos';
$string['eventtype'] = 'Tipo de evento';
$string['eventtype_help'] = 'Puede ingresar el tipo de evento manualmente o elegirlo de una lista de tipos de eventos anteriores.
 Puede elegir solo un tipo de evento. Una vez que guarde, el tipo de evento se agregará a la lista.';
$string['excelfile'] = 'Archivo CSV con finalización de actividad';
$string['existingsubscribers'] = 'Suscriptores existentes';
$string['expired'] = 'Lo sentimos, esta actividad se cerró el {$a} y ya no está disponible';
$string['fillinatleastoneoption'] = 'Usted necesita proporcionar al menos dos posibles respuestas.';
$string['filterbtn'] = 'Filtro';
$string['filterenddate'] = 'Hasta';
$string['filterstartdate'] = 'Desde';
$string['forcourse'] = 'para el curso';
$string['friday'] = 'Viernes';
$string['full'] = 'LLeno';
$string['fullname'] = 'Nombre completo';
$string['fullybooked'] = 'Completamente reservado';
$string['generaterecnum'] = 'Generar números';
$string['generaterecnumareyousure'] = '¡Esto generará números nuevos y eliminará permanentemente al antiguo!';
$string['generaterecnumnotification'] = 'Números nuevos fueron generados.';
$string['globalactivitycompletiontext'] = 'Mensaje que se enviará al usuario cuando se complete la opción de reserva (plantilla global)';
$string['globalbookedtext'] = 'Confirmación de reserva (plantilla global)';
$string['globalbookingchangedtext'] = 'Mensaje que se enviará cuando cambie una opción de reserva (sólo se enviará a los usuarios que ya hayan reservado). Utilice el reemplazable {changes} para mostrar los cambios. Introduzca 0 para desactivar las notificaciones de cambios. (Plantilla global)';
$string['globalcurrency'] = 'Moneda (divisa)';
$string['globalcurrencydesc'] = 'Elija la moneda para ver los precios de las opciones de reserva';
$string['globaldeletedtext'] = 'Mensaje de reserva cancelada (plantilla global)';
$string['globalmailtemplates'] = 'Plantillas de correo global';
$string['globalmailtemplates_desc'] = 'Sólo disponible en la versión PRO. Después de la activación, puede ir a la configuración de una instancia de reserva y establecer la fuente de las plantillas de correo como global.';
$string['globalnotifyemail'] = 'Notificación a los participantes antes del inicio (plantilla global)';
$string['globalnotifyemailteachers'] = 'Notificación al profesor antes del inicio (plantilla global)';
$string['globalpollurlteacherstext'] = 'Mensaje para la URL de la encuesta enviada a los profesores (plantilla global)';
$string['globalpollurltext'] = 'Mensaje para enviar la URL de la encuesta a los usuarios registrados (plantilla global)';
$string['globalstatuschangetext'] = 'Mensaje de cambio de estado (plantilla global)';
$string['globaluserleave'] = 'El usuario ha cancelado su propia reserva (plantilla global)';
$string['globalwaitingtext'] = 'Confirmación de lista de espera (plantilla global)';
$string['gotobooking'] = '&lt;&lt; Reservas';
$string['gotobookingoption'] = 'Ir a la opción de reserva';
$string['gotomanageresponses'] = '&lt;&lt; Gestionar respuestas';
$string['groupdeleted'] = 'Esta instancia de reservación crea grupos automáticamente en el curso  destino; pero el grupo ha sido eliminado manualmente en el curso destino. Active la siguiente casilla para recrear el grupo.';
$string['groupexists'] = 'El grupo ya existe en el curso destino; por favor elija otro nombre para la opción de reservación';
$string['groupname'] = 'Nombre del grupo';
$string['helptext:placeholders'] = '<p>
<a data-toggle="collapse" href="#collapsePlaceholdersHelptext" role="botón" aria-expanded="false" aria-controls="collapsePlaceholdersHelptext">
 <i class="fa fa-question-circle" aria-hidden="true"></i><span>&nbsp;Puede utilizar los siguientesreemplazables (sí como están en idioma inglés)...</span>
</a>
</p>
<div class="collapse" id="collapsePlaceholdersHelptext">
  <div class="card card-body">
 <ul>
<li>{bookingdetails} - Resumen detallado de la opción de reserva (incluye sesiones y enlace a la opción de reserva)</li>
<li>{gotobookingoption} - Enlace a la opción de reserva</li>
<li>{status} - Estado de la reserva</li>
<li>{participant}</li>
<li>{email} - Correo electrónico del usuario</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Nombre del primer profesor</li>
<li>{teachers} - Lista de todos los profesores</li>
<li>{teacherN} - Nombre de profesor específico; ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre de usuario del usuario</li>
<li>{dates} - Horarios de sesiones</li>
<li>{shorturl} - URl corta de opción</li>
<li>{usercalendarurl} - Enlace para suscribirse al calendario del usuario (eventos personales)</li>
<li>{coursecalendarurl} -Enlace para suscribirse al calendario de cursos (eventos del curso)</li>
    </ul>
  </div>
</div>';
$string['hidedescription'] = 'Ocultar descripción';
$string['hidelistoncoursepage'] = 'Ocultar lista en la página del curso (predeterminado)';
$string['holiday'] = 'Vacaciones';
$string['holidayend'] = 'Final';
$string['holidayendactive'] = 'El final no es el mismo día';
$string['holidayname'] = 'Nombre de la fiesta vacacional (opcional)';
$string['holidays'] = 'Vacaciones';
$string['holidaystart'] = 'Vacaciones (inicio)';
$string['hours'] = '{$a} horas';
$string['howmanytimestorepeat'] = '¿Cuantas veces repetir?';
$string['howmanyusers'] = 'Número máximo de usuarios que puede reservar un profesor asignado a la opción';
$string['howoftentorepeat'] = '¿Con qué frecuencia repetir?';
$string['icalcancel'] = 'Incluir evento iCal cuando se cancela la reserva como evento cancelado';
$string['icalcanceldesc'] = 'Cuando un usuario cancela una reserva o es eliminado de la lista de usuarios reservados, adjunte un archivo adjunto de iCal como un evento cancelado.';
$string['icalcfg'] = 'Configuración de los anexos iCal';
$string['icalcfgdesc'] = 'Configure los archivos iCal.ics que se adjuntan a los mensajes de correo electrónico. Estos archivos permiten añadir las fechas de reserva al calendario personal.';
$string['icalfieldlocation'] = 'Texto a mostrar en la ubicación del campo iCal';
$string['icalfieldlocationdesc'] = 'Elegir de la lista desplegable cual texto debería de usarse para el campo "ubicación" del calendario';
$string['importcsvbookingoption'] = 'Importar CSV con opciones de reservación';
$string['importcsvtitle'] = 'Importar CSV';
$string['importexcelbutton'] = 'Importar finalización de actividad';
$string['importexceltitle'] = 'Importar finalización de actividad';
$string['importfinished'] = '¡Importación terminada!';
$string['importinfo'] = 'Información de la importación: Usted puede usar las columnas siguientes en la subida de CSV (Explicación entre paréntesis)';
$string['inarray'] = 'el usuario tiene uno de estos valores separados por comas';
$string['includeteachers'] = 'Incluir profesores en la hoja para apuntarse';
$string['info:teachersforoptiondates'] = 'Vaya al <a href="{$a}" target="_self">diario de enseñanza</a>, para administrar a los docentes para fechas específicas.';
$string['infoalreadybooked'] = '<div class="infoalreadybooked"><i>Ya tiene reservada esta opción.</i></div>';
$string['infonobookingoption'] = 'Para poder añadir una opción de reservación, por favor use el bloque de configuraciones o el ícono de configuraciones en la parte superior de la página.';
$string['infotext:prolicensenecessary'] = 'Necesita una licencia de Reserva PRO si desea utilizar esta función.
 <a href="https://wunderbyte.at/es/contacto" target="_blank">Póngase en contacto con Wunderbyte</a> si desea adquirir una licencia PRO.';
$string['infowaitinglist'] = '<div class="infowaitinglist"><i>Usted está en la lista de espera para esta opción.</i></div>';
$string['instancesuccessfullysaved'] = 'Esta instancia de reserva se guardó correctamente como plantilla.';
$string['instancetemplate'] = 'Plantilla de instancia';
$string['institution'] = 'Institución';
$string['institution_help'] = 'Puede ingresar el nombre de la institución manualmente o elegirlo de una lista de instituciones anteriores.
 Puede elegir sólo una institución. Una vez que guarde, la institución se agregará a la lista.';
$string['institutions'] = 'Instituciones';
$string['invisibleoption'] = 'Opción invisible de reserva';
$string['invisibleoption:notallowed'] = 'No tiene permitido ver esta opción de reserva.';
$string['isempty'] = 'el campo está vacío';
$string['isnotempty'] = 'el campo no está vacío';
$string['lblacceptingfrom'] = 'Nombre de la etiqueta: "Aceptando de"';
$string['lblbooking'] = 'Nombre de etiqueta: "Reservación"';
$string['lblbooktootherbooking'] = 'Nombre del botón: Reservar usuarios a otra opción de reservación';
$string['lblinstitution'] = 'Nombre de la etiqueta: "Institución"';
$string['lbllocation'] = 'Nombre de la etiqueta: "Lugar"';
$string['lblname'] = 'Nombre de la etiqueta: "Nombre"';
$string['lblnumofusers'] = 'Nombre de la etiqueta: "Núm. de usuarios"';
$string['lblsputtname'] = 'Nombre de etiqueta: Mandar URL de encuesta a profesores';
$string['lblsurname'] = 'Nombre de la etiqueta: "Apellido(s)"';
$string['lblteachname'] = 'Nombre de la etiqueta: "Profesores"';
$string['leftandrightdate'] = '{$a->leftdate} a {$a->righttdate}';
$string['licensekey'] = 'Clave de licencia PRO';
$string['licensekeycfg'] = 'Activar versión PRO';
$string['licensekeycfgdesc'] = 'Con una licencia PRO puedes crear tantas plantillas de reserva como desee y utilizar funciones PRO como plantillas de correo global, textos de información de lista de espera o notificaciones para profesores.';
$string['licensekeydesc'] = 'Cargue una clave de licencia válida para activar la versión PRO.';
$string['limit'] = 'Límite';
$string['limitanswers'] = 'Limitar el número de participantes';
$string['limitanswers_help'] = '¡Si Usted cambia esta opción y tenía personas reservadas, Usted puede quitarlas sin notificación!';
$string['linkgotobookingoption'] = 'Ir a la opción reservada: {$a}</a>';
$string['linknotavailableyet'] = 'El enlace para acceder a la reunión está disponible únicamente 15 minutos antes del inicio hasta el final de la sesión.';
$string['linknotvalid'] = 'Este enlace o reunión no es accesible.
Si se trata de una reunión que ha reservado, por favor verifique nuevamente, poco antes de comenzar.';
$string['linktoteachersinstancereport'] = '<p><a href="{$a}" target="_self">&gt;&gt; Ir al informe de profesores para instancia de reserva</a></p>';
$string['location'] = 'Sitio';
$string['location_help'] = 'Puede ingresar el nombre de la ubicación manualmente o elegirlo de una lista de ubicaciones anteriores.
 Puede elegir solo una ubicación. Una vez que guarde, la ubicación se agregará a la lista.';
$string['lowerthan'] = 'es menor que (número)';
$string['mailconfirmationsent'] = 'Pronto recibirá un correo de confirmación';
$string['mailtemplatesadvanced'] = 'Activar la configuración avanzada para las plantillas de correo electrónico';
$string['mailtemplatesglobal'] = 'Utilice plantillas de correo globales desde la configuración del plugin';
$string['mailtemplatesinstance'] = 'Usar plantillas de correo electrónico de esta instancia de reserva (predeterminado)';
$string['mailtemplatessource'] = 'Establecer la fuente de las plantillas de correo (PRO)';
$string['mailtemplatessource_help'] = '<b>Precaución:</b> Si elige plantillas de correo electrónico globales, no se utilizarán plantillas de correo específicas de la instancia. En su lugar, se utilizarán las plantillas de correo electrónico especificadas en la configuración del plugin de reserva. <br><br>
Asegúrese de que existan plantillas de correo electrónico en la configuración de reserva para cada tipo de correo electrónico.';
$string['managebooking'] = 'Gestionar';
$string['managebookinginstancetemplates'] = 'Administrar plantillas de instancias de reserva';
$string['managecustomreporttemplates'] = 'Administrar plantillas de informes personalizados';
$string['manageoptiontemplates'] = 'Gestionar plantillas de opción';
$string['manageresponses'] = 'Gestionar respuestas';
$string['maxoverbooking'] = 'Número máximo de lugares en lista de espera';
$string['maxparticipantsnumber'] = 'Número máximo de participantes';
$string['maxperuser'] = 'Reservaciones máximas por usuario';
$string['maxperuser_help'] = 'El número máximo de reservaciones que puede hacer un usuario individual el mismo tiempo. Después de que haya pasado el tiempo de terminación de un evento, ya no se contará este límite.';
$string['maxperuserwarning'] = 'Usted tiene actualmente {$a->count} de un total de {$a->limit} reservaciones máximas disponibles de ({$a->eventtype}) para su cuienta de usuario';
$string['messageprovider:bookingconfirmation'] = 'Confirmaciones de reservación';
$string['messagesend'] = 'Su mensaje fue enviado.';
$string['messagesubject'] = 'Asunto';
$string['messagetext'] = 'Mensaje';
$string['minanswers'] = 'Número mínimo de participantes';
$string['minutes'] = '{$a} minutos';
$string['missinghours'] = 'Horas faltantes';
$string['modaloptiondateformtitle'] = 'Fechas personalizadas';
$string['modulename'] = 'Reservación';
$string['modulenameplural'] = 'Reservaciones';
$string['monday'] = 'Lunes';
$string['moveoptionto'] = 'Mover opción de reservación hacia otra instancia de reservación';
$string['multiselect'] = 'Selección múltiple';
$string['mustchooseone'] = 'Usted debe elegir una opción antes de guardar. Nada se guardó.';
$string['mustfilloutuserinfobeforebooking'] = 'Antes de proceder al formato para reservación, por favor llene algunos datos personales';
$string['mybookingsbooking'] = 'Reservación (Curso)';
$string['mybookingsoption'] = 'Opción';
$string['newcourse'] = 'Nuevo curso';
$string['newcoursecategorycfield'] = 'Campo personalizado de opción de reserva para utilizar como categoría del curso';
$string['newcoursecategorycfielddesc'] = 'Elegir  un campo personalizado de opción de reserva que se utilizará como categoría de curso para la creación automática de cursos utilizando la entrada desplegable “Nuevo curso” en el formato para crear nuevas opciones de reserva.';
$string['newoptiondate'] = 'Crear una nueva sesión...';
$string['newtemplatesaved'] = 'LA nueva plantilla para opción de reservación fue guardada.';
$string['next'] = 'Siguiente';
$string['no'] = 'No';
$string['nobookingpossible'] = 'No es posible realizar reservas.';
$string['nobookingselected'] = 'No se seleccionó opción de reservación';
$string['nocancelreason'] = 'Debe proporcionar un motivo para cancelar esta opción de reserva.';
$string['nocfnameselected'] = 'Nada seleccionado Escriba el nuevo nombre o seleccione uno de la lista.';
$string['nocomments'] = 'Comentariosdeshabilitados';
$string['nocourse'] = 'Ningun curso seleccionado para esta opción de reservación';
$string['nofieldchosen'] = 'No se ha elegido ningún campo';
$string['nogrouporcohortselected'] = 'Debes seleccionar al menos un grupo o cohorte.';
$string['noguestchoose'] = 'Lo sentimos, los invitados no pueden introducir datos';
$string['nopermissiontoaccesspage'] = '<div class="alert alert-danger" role="alert">No tiene permiso para acceder a esta página.</div>';
$string['nopricecategoriesyet'] = 'Aún no se han creado categorías de precios.';
$string['nopricecategoryselected'] = 'Introduzca el nombre de una nueva categoría de precio';
$string['nopriceformulaset'] = 'No hay ninguna fórmula establecida en la página de configuración. <a href="{$a->url}" target="_blank">Configúrela aquí.</a>';
$string['noratings'] = 'Valoraciones deshabilitadas';
$string['noresultsviewable'] = 'Los resultados no están visibles actualmente.';
$string['norighttobook'] = 'No es posible reservar para su rol de usuario. Por favor póngase en contacto con el administrador del sitio para que le proporcione los permisos apropiados o entre al sitio.';
$string['nosubscribers'] = '¡No hay profesores asignados!';
$string['notallbooked'] = 'Los usuarios siguientes no pudieron ser reservados debido a que se alcanzó el número máximo de reservaciones por usuario o por falta de lugares disponibles para la opción de reservación: {$a}';
$string['notbooked'] = 'Aún no reservado';
$string['notconectedbooking'] = 'No conectado';
$string['noteacherfound'] = 'El usuario especificado como profesor en la línea {$a} no existe en la plataforma.';
$string['noteacherset'] = 'Sin profesor';
$string['notemplate'] = 'No usar como plantilla';
$string['notes'] = 'Notas de reservación';
$string['notificationlist'] = 'Lista de notificaciones';
$string['notificationlistdesc'] = 'Cuando ya no haya lugares disponibles, los usuarios pueden registrarse para recibir una notificación cuando haya una vacante.';
$string['notificationtext'] = 'Mensaje de notificación';
$string['notifyemail'] = 'Notificación a los participantes antes del inicio';
$string['notifyemailmessage'] = 'Su reserva comenzará pronto:

Estado de la reserva: {$a->status}
Participante: {$a->participant}
Opción de reserva: {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Para ver todos tus cursos reservados haz clic en el siguiente enlace: {$a->bookinglink}
El curso asociado se puede encontrar aquí: {$a->courselink}';
$string['notifyemailsubject'] = 'Su reserva comenzará pronto';
$string['notifyemailteachers'] = 'Notificación al profesor antes del inicio (PRO)';
$string['notifyemailteachersmessage'] = 'Su reserva comenzará pronto:

{$a->bookingdetails}

Tiene <b>{$a->numberparticipants} participantes reservados</b> y <b>{$a->numberwaitinglist} personas en la lista de espera</b>.

Para ver todos tus cursos reservados haga clic en el siguiente enlace: {$a->bookinglink}
El curso asociado se puede encontrar aquí: {$a->courselink}';
$string['notifyemailteacherssubject'] = 'Su reserva comenzará pronto';
$string['notifyme'] = 'Avisar cuando esté disponible';
$string['notinarray'] = 'El usuario no tiene ninguno de estos valores separados por comas';
$string['notopenyet'] = 'Lo sentimos, esta actividad no estará disponible hasta después de {$a}';
$string['notstarted'] = 'Aun no iniciado';
$string['nouserfound'] = 'No se encontró usuario:';
$string['nousers'] = '¡Sin usuarios!';
$string['numberrows'] = 'Numerar filas';
$string['numberrowsdesc'] = 'Numerar cada fila de la hoja para apuntarse. el número será mostrado a la izquierda del nombre en la misma columna';
$string['numgenerator'] = '¿Habilitar generación de número de registro?';
$string['numrec'] = 'Núm. registro';
$string['onlyusersfrominstitution'] = 'Sólo puede agregar usuarios de esta institución: {$a}';
$string['onwaitinglist'] = 'Usted está en la lista de espera';
$string['optionannotation'] = 'Anotación interna';
$string['optionannotation_help'] = 'Añade comentarios internos, anotaciones o lo que quiera. Sólo se mostrará en este formato y en ningún otro lugar.';
$string['optionbookablebody'] = '{$a->title} ya está disponible nuevamente. <a href="{$a->url}">Haga clic aquí</a> para ir directamente allí.<br><br>
(Usted recibió este correo porque hizo clic en el botón de notificación para esta opción).';
$string['optionbookabletitle'] = '{$a->title} está disponible nuevamente';
$string['optiondate'] = 'Fecha';
$string['optiondateend'] = 'Fin';
$string['optiondates'] = 'Sesión con Fechas Múltiples';
$string['optiondatesmanager'] = 'Administrar fechas de opciones';
$string['optiondatesmessage'] = 'Sesión {$a->number}: {$a->date} <br> Desde: {$a->starttime} <br> Hasta: {$a->endtime}';
$string['optiondatessuccessfullydelete'] = 'Se eliminó la hora de sesión.';
$string['optiondatessuccessfullysaved'] = 'Se guardó la hora de sesión.';
$string['optiondatestart'] = 'Comenzar';
$string['optiondatesteachersreport'] = 'Informe de enseñanza / Profesores sustitutos';
$string['optiondatesteachersreport_desc'] = 'Este reporte ofrece una descripción general de qué profesor estuvo presente en qué fecha específica.
De forma predeterminada, cada fecha se completará con el profesor de la opción. Puede sobrescribir fechas específicas con profesores sustitutos.';
$string['optiondatestime'] = 'Hora de sesión';
$string['optionformconfig'] = 'Reserva: Formato para configurar opciones de reserva';
$string['optionformconfig:nobooking'] = '¡Debes crear al menos una instancia de reserva antes de poder utilizar este formato!';
$string['optionformconfigsaved'] = 'Se ha guardado la configuración del formato de opción de reserva.';
$string['optionformconfigsubtitle'] = '<p>Desactive las funciones que no necesita para que el formato de opción de reserva sea más claro para sus administradores.</p>
<p><strong>TENGA CUIDADO:</strong> ¡Desactive los campos solo si está completamente seguro de que no los necesitará!</p>';
$string['optionid'] = 'ID de opción';
$string['optionidentifier'] = 'Unique identifier';
$string['optionidentifier_help'] = 'Agregue un identificador único para esta opción de reserva.';
$string['optioninvisible'] = 'Ocultar de los usuarios normales (visible solo para los usuarios autorizados)';
$string['optionmenu'] = 'Esta opción de reservación';
$string['optionsfields'] = 'Campos en la página de vista general de opciones de reservcación';
$string['optiontemplate'] = 'Plantilla de opción';
$string['optiontemplatename'] = 'Nombre de plantilla de opción';
$string['optiontemplatessettings'] = 'Plantillas de opción de reservación';
$string['optionvisibility'] = 'Visibilidad';
$string['optionvisibility_help'] = 'Aquí puede elegir si la opción debe ser visible para todos o si debe ocultarse para los usuarios normales y ser visible solo para los usuarios autorizados.';
$string['optionvisible'] = 'Visible para todos (predeterminado)';
$string['organizatorname'] = 'Nombre del organizador';
$string['organizatorname_help'] = 'Puede ingresar el nombre del organizador manualmente o elegirlo de una lista de organizadores anteriores.
 Puede elegir solo un organizador. Una vez que guarde, el organizador se agregará a la lista.';
$string['otherbookingaddrule'] = 'Añadir regla nueva';
$string['otherbookinglimit'] = 'Límite';
$string['otherbookinglimit_help'] = 'Cuantos usuarios aceptará Usted desde la opción. Si fuera 0 Usted podrá aceptar usuarios ilimitados.';
$string['otherbookingnumber'] = 'Número de usuarios';
$string['otherbookingoptions'] = 'Aceptando de';
$string['otherbookingsuccessfullysaved'] = '¡Regla guardada!';
$string['overridecondition'] = 'Condición';
$string['overrideconditioncheckbox'] = 'Tiene relación con otra condición';
$string['overrideoperator'] = 'Operador';
$string['overrideoperator:and'] = 'AND';
$string['overrideoperator:or'] = 'OR';
$string['paginationnum'] = 'N. de registros - paginación';
$string['pdflandscape'] = 'Paisaje';
$string['pdfportrait'] = 'Retrato';
$string['pluginadministration'] = 'Administración de reservaciones';
$string['pluginname'] = 'Reservación';
$string['pollstrftimedate'] = '%Y-%m-%d';
$string['pollurl'] = 'URL de encuesta';
$string['pollurlteachers'] = 'URL de encuesta a profesores';
$string['pollurlteacherstext'] = 'Mensaje para la URL para enviar encuesta a Profesores';
$string['pollurlteacherstextmessage'] = 'Por favor, conteste la encuesta

URL de la encuesta: <a href="{pollurlteachers}" target="_blank">{pollurlteachers}</a>';
$string['pollurlteacherstextsubject'] = 'Por favor, conteste la encuesta';
$string['pollurltext'] = 'Mensaje para la URL para enviar encuesta a usuarios reservados';
$string['pollurltextmessage'] = 'Por favor, conteste la encuesta

Survey URL: <a href="{pollurl}" target="_blank">{pollurl}</a>';
$string['pollurltextsubject'] = 'Por favor, conteste la encuesta';
$string['populatefromtemplate'] = 'Rellenar desde plantilla';
$string['potentialsubscribers'] = 'Suscriptores potenciales';
$string['presence'] = 'Presencia';
$string['previous'] = 'Anterior';
$string['price'] = 'Precio';
$string['pricecategories'] = 'Reserva: Categorías de precios';
$string['pricecategoriessaved'] = 'Se guardaron las categorías de precios';
$string['pricecategoriessubtitle'] = '<p>Aquí puedes definir diferentes categorías de precios, p. ej.
 Categorías de precios especiales para estudiantes, empleados o externos.
 <b>Tenga cuidado:</b> Una vez que haya agregado una categoría, no podrá eliminarla.
 Sólo deshabilítelo o cámbiele el nombre.</p>';
$string['pricecategory'] = 'Catgoría de precio';
$string['pricecategoryfield'] = 'Campo de perfil de usuario para categoría de precio';
$string['pricecategoryfielddesc'] = 'Seleccione el campo de perfil de usuario, el cual almacena el identificador de categoría de precio para cada usuario.';
$string['pricecategoryidentifier'] = 'Identificador de categoría de precio';
$string['pricecategoryidentifier_help'] = 'Introduzca un texto breve para identificar la categoría, por ejemplo, "estud" o "acad".';
$string['pricecategoryname'] = 'Nombre de la categoría de precio';
$string['pricecategoryname_help'] = 'Introduzca el nombre completo de la categoría de precio que se mostrará en las opciones de reserva, por ejemplo, "Precio de estudiante".';
$string['pricecatsortorder'] = 'Orden de clasificación (número)';
$string['pricecatsortorder_help'] = 'Introduzca un número entero. "1" significa que la categoría de precio se mostrará en primer lugar, "2" en segundo lugar, etc.';
$string['pricecurrency'] = 'Divisa (moneda)';
$string['priceformulaadd'] = 'Valor absoluto';
$string['priceformulaadd_help'] = 'Valor adicional para <strong>agregar</strong> al resultado.';
$string['priceformulainfo'] = '<a data-toggle="collapse" href="#priceformula" role="botón" aria-expanded="false" aria-controls="fórmuladeprecio">
<i class="fa fa-code"></i> Mostrar JSON para la fórmula de precio...
</a>
<div class="collapse" id="fórmuladeprecio">
<samp{$a->formula}</samp>
</div><br>
<a href="/admin/settings.php?section=modsettingbooking" target="_blank"><i class="fa fa-edit"></i>Editar fórmula...</a><br>< es>
A continuación, también puede agregar un factor manual (multiplicación) y un valor absoluto (suma) para agregarlos a la fórmula.';
$string['priceformulaisactive'] = 'Al guardar, calcular los precios con la fórmula de precios (esto sobrescribirá los precios actuales).';
$string['priceformulamultiply'] = 'Factor manual';
$string['priceformulamultiply_help'] = 'Valor adicional para <strong>multiplicar</strong> el resultado.';
$string['priceformulaoff'] = 'Evitar el recálculo de precios';
$string['priceformulaoff_help'] = 'Active esta opción para evitar que se ejecute la función "Calcular todos los precios de instancia con fórmula" de recálculo de los precios para esta opción de reserva.';
$string['problemsofcohortorgroupbooking'] = '<br><p>No todos los usuarios pudieron reservarse con reserva de cohorte:</p>
<ul>
<li>{$a->notenrolledusers} usuarios no están inscritos en el curso</li>
<li>{$a->notsubscribedusers} usuarios no reservados por otros motivos</li>
</ul>';
$string['progressbars'] = 'Barras de progreso del tiempo transcurrido (PRO)';
$string['progressbars_desc'] = 'Obtenga una representación visual del tiempo que ya ha transcurrido para una opción de reserva.';
$string['progressbarscollapsible'] = 'Hacer que las barras de progreso sean plegables';
$string['proversiononly'] = 'Actualice a Reserva PRO para utilizar esta función.';
$string['question'] = 'Pregunta';
$string['ratings'] = 'Valoraciones de Opcion_de_Reservación';
$string['ratingsuccessful'] = 'Las valoraciones se actualizaron correctamente';
$string['reason'] = 'Razón';
$string['recalculateall'] = 'Calcular todos los precios';
$string['recalculateprices'] = 'Calcular todos los precios de la instancia con la fórmula';
$string['recreategroup'] = 'Recrear grupos en el curso destino e inscribir usuarios en el grupo';
$string['recurringheader'] = 'Opciones recurrentes';
$string['removeafterminutes'] = 'Quitar finalización de actividad después de N minutos';
$string['removeresponses'] = 'Quitar todas las respuestas';
$string['removeuseronunenrol'] = '¿Quitar usuario de reservación, cuando lo des-inscriban del curso asociado?';
$string['reoccurringdatestring'] = 'Día de la semana, hora de inicio y hora de finalización (Día, HH:MM - HH:MM)';
$string['reoccurringdatestring_help'] = 'Introduzca un texto en el siguiente formato:
 "Día, HH:MM - HH:MM", p. ej. "Lunes, 10:00 - 11:00" o "Dom 09:00-10:00" o "bloquear" para eventos bloqueados.';
$string['reoccurringdatestringerror'] = 'Introduzca un texto en el siguiente formato:
 Día, HH:MM - HH:MM o "bloque" para eventos bloqueados.';
$string['repeatthisbooking'] = 'Repetir esta opción';
$string['reportfields'] = 'Campos de respuestas descargables (CSV,XLS-Descarga)';
$string['reportremindermessage'] = '{$a->bookingdetails}';
$string['reportremindersubject'] = 'Recordatorio: Su curso reservado';
$string['reservedusers'] = 'Usuarios con reservas de corta duración';
$string['reset'] = 'Reiniciar';
$string['responses'] = 'Respuestas';
$string['responsesfields'] = 'Campos en la página para gestionar respuestas';
$string['responsesto'] = 'Respuestas a {$a}';
$string['restrictanswerperiodclosing'] = 'La opción de reserva está disponible hasta una fecha determinada.';
$string['restrictanswerperiodopening'] = 'La opción de reserva está disponible solo después de una fecha determinada.';
$string['resultofcohortorgroupbooking'] = '<p>Este es el resultado de la reserva de su cohorte:</p>
<ul>
<li>{$a->sumcohortmembers} usuarios encontrados en las cohortes seleccionadas</li>
<li>{$a->sumgroupmembers} usuarios encontrados en los grupos seleccionados</li>
<li><b>{$a->subscribedusers} usuarios reservaron esta opción</b></li>
</ul>';
$string['rootcategory'] = 'Raíz';
$string['roundpricesafterformula'] = 'Redondear precios (fórmula de precios)';
$string['roundpricesafterformula_desc'] = 'Si está activo, los precios se redondearán a números completos (sin decimales) después de que se haya aplicado la <strong>fórmula de precios</strong>.';
$string['saturday'] = 'Sábado';
$string['saveinstanceastemplate'] = 'Añadir instancia de reservación a plantilla';
$string['savenewtagtemplate'] = 'Guardar';
$string['scgfbookgroupscohorts'] = 'Reservar cohorte(s) o grupo(s)';
$string['scgfcohortheader'] = 'Suscripción de cohorte';
$string['scgfgroupheader'] = 'Suscripción de grupo';
$string['scgfselectcohorts'] = 'Seleccionar chohorte(s)';
$string['scgfselectgroups'] = 'Seleccionar grupo(s)';
$string['search'] = 'Buscar...';
$string['searchdate'] = 'Fecha';
$string['searchname'] = 'Nombre(s)';
$string['searchsurname'] = 'Apellido(s)';
$string['searchtag'] = 'Buscar marcas';
$string['searchwaitinglist'] = 'En lista de espera';
$string['select'] = 'Selección';
$string['selectanoption'] = 'Por favor seleccione una opciónd e reservación';
$string['selectatleastoneuser'] = '¡Por favor, seleccione al menos un usuario!';
$string['selectcategory'] = 'Seleccionar categoría paterna';
$string['selectfield'] = 'Lista desplegable';
$string['selectoptionid'] = '¡Por favor, seleccione opción!';
$string['selectoptioninotherbooking'] = 'Opción';
$string['selectpresencestatus'] = 'Elegir estatus de presencia';
$string['semester'] = 'Semestre';
$string['semesterend'] = 'Último día del semestre';
$string['semesterend_help'] = 'El día que termina el semestre';
$string['semesteridentifier'] = 'Identificador';
$string['semesteridentifier_help'] = 'Texto corto para identificar el semestre, por ejemplo "ws22".';
$string['semestername'] = 'Nombre';
$string['semestername_help'] = 'Introduzca el nombre completo del semestre, por ejemplo, "Semestre de invierno 2021/22"';
$string['semesters'] = 'Semestres';
$string['semesterssaved'] = 'Semestres han sido guardados';
$string['semesterssubtitle'] = 'Aquí puedes agregar, cambiar o eliminar <strong>semestres y vacaciones</strong>.
 Después de guardar, las entradas se ordenarán por su <strong>fecha de inicio en orden descendente</strong>.';
$string['semesterstart'] = 'First day of semester';
$string['semesterstart_help'] = 'El día en que comienza el semestre.';
$string['sendmailtobooker'] = 'Página para Reservar para otros usuarios: Enviar Email al usuario que reserva en vez de mandárselos a los usuarios que son reservados.';
$string['sendmailtobooker_help'] = 'Active esta opción para mandar Emails de confirmación de reservación al usuario que reserva para otros usuarios en lugar de usuarios que han sido añadidos a una opción de reservación.
Esto solamente es relevante para reservaciones hechas en la página para "reservar para otros usuarios".';
$string['sendpollurltoteachers'] = 'Enviar URL de encuesta';
$string['sendreminderemail'] = 'Enviar Email recordatorio';
$string['sendreminderemailsuccess'] = '¡El Email de notificación fue enviado exitosamente!';
$string['sessionnotifications'] = 'Notificaciones por correo electrónico para cada sesión';
$string['sessionremindermailmessage'] = '<p>Tenga en cuenta: tiene reservada la siguiente sesión:</p>
<p>{$a->optiontimes}</p>
<p>############################################### #</p>
<p>{$a->sessiondescription}</p>
<p>############################################### #</p>
<p>Estado de la reserva: {$a->status}</p>
<p>Participante: {$a->participant}</p>';
$string['sessionremindermailsubject'] = 'Recordatorio: Tiene una sesión próxima';
$string['sessions'] = 'Sesión(es)';
$string['showcoursenameandbutton'] = 'Muestra el nombre del curso, información breve y un botón que redirecciona a las opciones de reserva disponibles';
$string['showcustomfields'] = 'Campos de opción de reservación personalizada';
$string['showcustomfields_desc'] = 'Seleccionar los campos de opciones de reserrvación personalizada a ser mostrados en la hoja para apuntarse';
$string['showdates'] = 'Mostrar fechas';
$string['showdescription'] = 'Mostrar descripción';
$string['showinapi'] = '¿Mostrar en API?';
$string['showlistoncoursepage'] = 'Mostrar lista en la página del curso';
$string['showmybookingsonly'] = 'Mis reservaciones';
$string['showprogressbars'] = 'Mostrar barras de progreso del tiempo transcurrido';
$string['showviews'] = 'Vistas a mostrar en el resumen de opciones de reservación';
$string['signature'] = 'Firma';
$string['signinadddatemanually'] = 'Añadir fecha manualmente';
$string['signinaddemptyrows'] = 'Añadir filas vacías';
$string['signincustfields'] = 'Campos personalizados del perfil';
$string['signincustfields_desc'] = 'Seleccionar los campos personalizados del perfil del usuario a mostrarse en la hoja para apuntarse';
$string['signinextracols'] = 'Columna adicional';
$string['signinextracols_desc'] = 'Usted puede imprimir hasta 3 columnas adicionales en la hoja para apuntarse. LLenen el título de la columna o déjelo vacío para no tener columnas adicionales';
$string['signinextrasessioncols'] = 'Añadir columnas extra para fechas';
$string['signinhidedate'] = 'Ocultar fecha';
$string['signinlogo'] = 'Logo a mostrar en la hoja para apuntarse';
$string['signinlogofooter'] = 'Logo en pie de página a mostrar en la hoja para apuntarse';
$string['signinlogoheader'] = 'Logo enencabezado a mostrar en la hoja para apuntarse';
$string['signinonesession'] = 'Mostrar fecha(s) en el encabezado';
$string['signinsheetaddress'] = 'Dirección:';
$string['signinsheetdate'] = 'Fecha(s):';
$string['signinsheetdatetofillin'] = 'Fecha:';
$string['signinsheetfields'] = 'Campos de hoja ara apuntarse (PDF)';
$string['signinsheetlocation'] = 'Ubicación:';
$string['spaceleft'] = 'espacio disponible';
$string['spacesleft'] = 'espacios disponibles';
$string['starttimenotset'] = 'No se configuró fecha de inicio';
$string['status'] = 'Estado';
$string['statuschangetext'] = 'Mensaje de cambio de estatus';
$string['statuschangetextmessage'] = '¡Hola {$a->participant}!

Su estado de reserva ha cambiado.

Estado de la reserva: {$a->status}

Participante: {$a->participant}
Opción de reserva: {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}

Vaya a la opción de reserva: {$a->gotobookingoption}';
$string['statuschangetextsubject'] = 'El estado de la reserva ha cambiado para {$a->title}';
$string['studentbooked'] = 'Usuarios que reservaron';
$string['studentdeleted'] = 'Usuarios que ya fueron eliminados';
$string['studentnotificationlist'] = 'Usuarios en la lista de notificaciones';
$string['studentwaitinglist'] = 'Usuarios en la lista de espera';
$string['submitandgoback'] = 'Guardar y regresar';
$string['subscribersto'] = 'Profesores para \'{$a}\'';
$string['subscribetocourse'] = 'Inscribir usuarios al curso';
$string['subscribeuser'] = '¿Realmente quiere inscribir a los usuarios en el curso siguiente?';
$string['substitutions'] = 'Sustitución(es)';
$string['successfulcalculation'] = '¡Cálculo de precio exitoso!';
$string['successfulldeleted'] = '¡La categoría fue eliminada!';
$string['sucesfullcompleted'] = 'La actividad fue completada exitosamente para usuarios.';
$string['sucesfullytransfered'] = 'Los usuarios fueron transferidos exitosamente.';
$string['sunday'] = 'Domingo';
$string['tagdeleted'] = '¡La plantilla de etiquetas fue eliminada!';
$string['tagsuccessfullysaved'] = 'La marca fue guardada.';
$string['tagtag'] = 'Marca';
$string['tagtemplates'] = 'Plantillas de marca';
$string['tagtext'] = 'Texto';
$string['taken'] = 'Tomado';
$string['teacher'] = 'Profesor';
$string['teacherroleid'] = 'Suscribir al profesor con ese rol al curso.';
$string['teachers'] = 'Profesores';
$string['teachersforoption'] = 'Profesores';
$string['teachersforoption_help'] = '<b>TENGA CUIDADO:</b>Al agregar profesores aquí, también se <b>agregarán a CADA fecha</b> en el informe de enseñanza.
Al eliminar profesores aquí, ¡serán <b>eliminados de CADA fecha</b> en el reporte de enseñanza!';
$string['teachersinstancereport:subtitle'] = '<strong>Sugerencia:</strong> El número de unidades de un curso (opción de reserva) se calcula por la duración de una unidad educativa que puede <a href="/admin/settings.php?section=modsettingbooking" target="_blank">establecer en la configuración de reserva</a> y la cadena de serie de fechas especificada (por ejemplo, "mar, 16:00-17 :30").
 Para eventos bloqueados u opciones de reserva que no tengan esta cadena, ¡no se puede calcular el número de unidades!';
$string['teachingreportforinstance'] = 'Informe general de enseñanza para';
$string['teachingreportfortrainer'] = 'Informe de unidades didácticas realizadas para formadores';
$string['teachingreportfortrainer:subtitle'] = '<strong>Sugerencia:</strong> Puede cambiar la duración de
una unidad educativa en la configuración del plugin (por ejemplo, 45 en lugar de 60 minutos).<br/>
<a href="/admin/settings.php?section=modsettingbooking" target="_blank">
&gt;&gt; Vaya a la configuración del plugin...
</a>';
$string['templatedeleted'] = '¡La plantilla fue eliminada!';
$string['templatefile'] = 'Archivo de plantilla';
$string['templatesuccessfullysaved'] = 'La plantilla fue guardada';
$string['terminated'] = 'Terminado';
$string['textfield'] = 'Ingreso de texto de línea única';
$string['thisinstance'] = 'Esta instancia de reserva';
$string['thursday'] = 'Jueves';
$string['timecreated'] = 'Hora de creación';
$string['timerestrict'] = 'Restringir respuestas a este lapso de tiempo. Esto está deprecado y será removido. Por favor use las configuraciones de "Restringir acceso" para hacer que la actividad de reservación esté disponible por un cierto período.';
$string['titleprefix'] = 'Prefijo';
$string['titleprefix_help'] = 'Agregue un prefijo que se mostrará antes del título de la opción, por ejemplo, "BB42".';
$string['to'] = 'a';
$string['toomuchusersbooked'] = 'El número máximo de usuarios que Usted puede reservar es : {$a}';
$string['topic'] = 'Tópico';
$string['transefusers'] = 'Transferir usuarios';
$string['transfer'] = 'Transferir';
$string['transferheading'] = 'Transferir usuarios seleccionados a la opción de reservación seleccionada';
$string['transferhelp'] = 'Transferir usuarios, que no hayan completado la actividad, de la opción seleccionada hacia {$a}.';
$string['transferoptionsuccess'] = 'La opción de reservación y los usuarios han sido transferidos exitosamente.';
$string['transferproblem'] = 'Lo siguiente no pudo ser transferido debido a limitación del usuario o limitación de opción de reservación: {$a}';
$string['transfersuccess'] = 'El usuario ha sido exitosamente transferido a la nueva opción de reservación';
$string['tuesday'] = 'Martes';
$string['undocancelreason'] = '¿Realmente desea deshacer la cancelación de esta opción de reserva?';
$string['undocancelthisbookingoption'] = 'Deshacer la cancelación de esta opción de reserva';
$string['units'] = 'Unidades';
$string['unlimitedplaces'] = 'Ilimitado';
$string['updatebooking'] = 'Editar esta opción de reservación';
$string['uploadheaderimages'] = 'Imágenes de encabezado para opciones de reserva';
$string['usedinbooking'] = '¡Usted no puede eliminar esta categoría, porque Usted está usándola al reservar!';
$string['usedinbookinginstances'] = 'La plantilla es utilizada en las siguientes instancias de reservación';
$string['usenotificationlist'] = 'Usar lista de notificaciones';
$string['useraffectedbyevent'] = 'Usuario afectado por el evento';
$string['usercalendarentry'] = 'Usted está reservado para <a href="{$a}">esta sesión</a>.';
$string['userdownload'] = 'Descargar usuarios';
$string['usergavereason'] = '{$a} dio el siguiente motivo de cancelación:';
$string['userid'] = 'UserID (ID del usuario)';
$string['userinfofieldoff'] = 'No se ha seleccionado ningún campo de perfil de usuario';
$string['userleave'] = 'El usuario ha cancelado su propia reserva (introduzca 0 para desactivarla)';
$string['userleavemessage'] = 'Hola {$a->participant},

Usted se ha dado de baja de {$a->title}.';
$string['userleavesubject'] = 'Usted se ha dado de baja exitosamente de {$a->title}';
$string['usernameofbookingmanager'] = 'Elegir un mánager de reservaciones';
$string['usernameofbookingmanager_help'] = 'Nombre_de_usuario del usuario que se mostrará en el campo "De" de las notificaciones de confirmación. Si está habilitada la opción para "Enviar Email de confirmación al Mánager de reservaciones", éste será el usuario quien recibe  una copia de las notificaciones de confirmación.';
$string['usersonlist'] = 'Usuario en lista';
$string['userssuccessfullenrolled'] = '¡Todos los usuarios han sido inscritos!';
$string['userssuccessfullybooked'] = 'Todos los usuarios han sido reservados en la otra opción de reservación.';
$string['userssuccessfullygetnewpresencestatus'] = 'Todos los usuarios tienen un nuevo estatus de presencia.';
$string['userssucesfullygetnewpresencestatus'] = 'Estatus de presencia para usaurios seleccionados exitosamente actualizados';
$string['userwhotriggeredevent'] = 'Usuario que desencadenó el evento';
$string['viewallresponses'] = 'Gestionar {$a} respuestas';
$string['waitinglist'] = 'Lista de espera';
$string['waitinglistenoughmessage'] = 'Todavía quedan suficientes lugares disponibles en la lista de espera.';
$string['waitinglistfullmessage'] = 'No hay lugares disponibles en la lista de espera.';
$string['waitinglistinfotexts'] = 'Mostrar textos de información de disponibilidad para lista de espera';
$string['waitinglistlowmessage'] = 'Quedan pocos lugares en la lista de espera.';
$string['waitinglistlowpercentage'] = 'Mensaje de porcentaje bajo de lista de espera';
$string['waitinglistlowpercentagedesc'] = 'Si los lugares disponibles en la lista de espera alcanzan o quedan por debajo de este porcentaje, se mostrará un mensaje de lista de espera baja.';
$string['waitinglisttaken'] = 'En la lista de espera';
$string['waitinglistusers'] = 'Usuarios en lista de espera';
$string['waitingplacesavailable'] = 'Lugares disponibles en lista de espera: {$a->overbookingavailable} of {$a->maxoverbooking}';
$string['waitingtext'] = 'Confirmación de lista de espera';
$string['waitingtextmessage'] = 'Ahora estás en la lista de espera de:

{$a->bookingdetails}
<p>############################################### #</p>
Estado de la reserva: {$a->status}
Participante: {$a->participant}

Para ver todos tus cursos reservados haz clic en el siguiente enlace: {$a->bookinglink}
El curso asociado se puede encontrar aquí: {$a->courselink}';
$string['waitingtextsubject'] = 'El estado de reserva de {$a->title} ha cambiado';
$string['waitingtextsubjectbookingmanager'] = 'El estado de reserva de {$a->title} ha cambiado';
$string['waitspaceavailable'] = 'Lugares en lista de espera disponibles';
$string['wednesday'] = 'Miércoles';
$string['week'] = 'Semana';
$string['whichview'] = 'Valor por defecto para opciones de reservación';
$string['whichviewerror'] = 'Usted tiene que incluir la vista predeterminada en: Vistas a mostrar en la vista general de opciones de reservación';
$string['withselected'] = 'Con usuarios seleccionados:';
$string['wrongdataallfields'] = '¡Por favor, llene todos los campos!';
$string['yes'] = 'Si';
$string['yourselection'] = 'Su selección';
