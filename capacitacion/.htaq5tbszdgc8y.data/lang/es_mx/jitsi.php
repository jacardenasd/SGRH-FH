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
 * Strings for component 'jitsi', language 'es_mx', version '4.4'.
 *
 * @package     jitsi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Acceder';
$string['accessto'] = 'Acceder a {$a}. Ingrese el nombre a ser mostrado.';
$string['accesstotitle'] = 'Acceder a {$a}';
$string['accesstowithlogin'] = 'Acceder a {$a}.';
$string['account'] = 'Cuenta';
$string['accountconnected'] = 'Cuenta conectada exitosamente y puesta  <b>en uso</b>.';
$string['accountinsufficientprivileges'] = 'La cuenta para streaming configurada no tiene suficientes privilegios. Por favor póngase en contacto con su administrador.';
$string['accounts'] = 'Cuenta para Streaming/Grabación';
$string['action'] = 'Acción';
$string['actions'] = 'Acciones';
$string['activatetooltip'] = 'Clic para poner en uso';
$string['addaccount'] = 'Añadir cuenta';
$string['addedtoqueue'] = 'Añadido a la cola';
$string['addnewserver'] = 'Añadir nuevo servidor';
$string['addtoqueue'] = 'Añadir a la cola';
$string['adminaccountex'] = 'Se requiere al menos una cuenta para transmitir/grabar sesiones con el método de transmisión "Integrado a Moodle".
  </br>Sólo puede estar "<b>en uso</b>" una cuenta y se usará para retransmitir/grabar todas las sesiones de su maestro.
  </br>Al agregar nuevas cuentas, se recomienda <b>nombrarlas con nombres de cuenta reales</b> porque en el futuro se le podría solicitar que vuelva a iniciar sesión para volver a autorizar la cuenta.
  </br>Sólo se pueden eliminar aquí usando el icono de la papelera las cuentas sin grabaciones relacionadas con las actividades de Jitsi del profesor y sin grabaciones pendientes de eliminar de los servidores de transmisión.
  </br>Pueden aparecer nuevas cuentas sin credenciales aquí cuando las copias de seguridad de actividades de Jitsi de otro servidor se restauran en este con cuentas que no estaban presentes aquí.
 </br></br>NOVEDAD desde v3.3.3: una nueva columna llamada "En cola" permite usar todas sus grabaciones por turnos. Puede añadir grabaciones a la cola clicando en "<b>+</b>" y puede sacarlas de la cola clicando en "<b>-</b>". Cuando una grabación se ha usado porque estaba "<b>en uso</b>" (o era la siguiente a usar), le saldrá la banderita "En uso" a la siguiente en la cola. Esta característica le permite usar muchas grabaciones para evitar límites de cuota de YouTube como las retransmisiones en directo permitidas por día.';
$string['alertacceswithlogin'] = 'Usted está accediendo mediante un enlace externo y usted está ingresado al sitio; por favor acceda desde adentro del curso.';
$string['alias'] = 'Alias';
$string['allow'] = 'Inicio de videoconferencia';
$string['allowbreakoutrooms'] = 'Permitir salas de descanso';
$string['allowbreakoutroomsex'] = 'Permitir crear salas de descanso. El servidor necesita ser configurado para permitir salas de descanso.';
$string['apikeyid8x8'] = 'ID de Clave API';
$string['apikeyid8x8ex'] = 'ID de Clave API a usar con servidor 8x8. Usted puede obtenerla de la administración del servidor 8x8. (https://jaas.8x8.com/)';
$string['appaccessinfo'] = 'Si desea unirse a la reunión usando un dispositivo móvil, usted necesitará la aplicación Jitsi Meet Mobile.';
$string['appid'] = 'App_ID';
$string['appidex'] = 'ID de App para configuración del token';
$string['appinstalledtext'] = 'Si usted ya tiene la App:';
$string['appnotinstalledtext'] = 'Si usted aun no tiene la App:';
$string['attendeesreport'] = 'Reporte de asistentes';
$string['authq'] = '¿Ingresar con esta cuenta para obtener credenciales y poner "en uso"?';
$string['avg_recordings_per_day'] = 'Media de grabaciones por Día';
$string['avg_recordings_per_week'] = 'Media de grabaciones por Semana';
$string['backtosettings'] = 'Regresar a configuraciones';
$string['blurbutton'] = 'Mostrar opciones para fondo';
$string['blurbuttonex'] = 'Mostrar la opción de "Seleccionar fondo" a todos los usuarios. Esta característica esta \'padre\', pero requiere computadoras poderosas. Tal vez debería desactivarla.';
$string['buttondownloadapp'] = 'Descargar aplicación';
$string['buttonopeninbrowser'] = 'Abrir en navegador';
$string['buttonopenwithapp'] = 'Unirse a esta reunión usando la App';
$string['calendarstart'] = 'La videoconferencia \'{$a}\' inicia';
$string['click'] = 'Clic';
$string['close'] = 'Fin de la videoconferencia';
$string['closebeforeopen'] = 'No se pudo actualizar la sesión. Usted ha especificado una fecha de cierre anterior a la fecha de apertura.';
$string['completiondetail:minutes'] = 'Asistir {$a} minutos';
$string['completionminutes'] = 'Estudiante debe asistir';
$string['completionminutes_help'] = 'Número de minutos que el estudiante debe asistir para dar la actividad como completada';
$string['completionminutesex'] = 'Minutos a asistir';
$string['config'] = 'Configuración';
$string['confignewexpirationtime'] = 'Configurar nueva fecha de expiración en configuraciones';
$string['confirmdelete'] = '¿Está seguro de querer eliminar este servidor "{$a}"?';
$string['confirmdeleterecordinactivity'] = 'Confirme que quiere eliminar esta grabación. Esta operación no puede deshacerse.';
$string['connectedattendeesnow'] = 'Asistentes conectados ahorita mismo';
$string['copied'] = 'Copiado al portapapeles';
$string['crontaskdelete'] = 'Eliminar grabaciones';
$string['deeplink'] = 'Enlace Profundo';
$string['deeplinkex'] = 'Cuando esté en la App Moodle, transferir sesiones Jitsi a la aplicación jitsi.';
$string['deleteq'] = '¿Eliminar y desconectar esta cuenta?';
$string['deleterecord'] = 'Eliminar registro';
$string['deletesourceq'] = '¿Está seguro? La grabación seré eliminada permanentemente del servidor de videos y no puede ser recuperada.';
$string['deletesources'] = 'Grabaciones disponibles para eliminarlas';
$string['deletetooltip'] = 'Eliminar';
$string['deprecated'] = 'Deprecado';
$string['deprecatedex'] = 'Parámetros deprecados que probablemente NO funcionarán porque Jitsi Meet cambió su implementación';
$string['desktopaccessinfo'] = 'Si desea unirse a la reunión, haga clic en el botón inferior para abrir Jitsi en su navegador.';
$string['domain'] = 'Dominio';
$string['domainex'] = 'Dominio de servidor Jitsi a utilizar. El servidor por defecto (<b>meet.jit.si</b>) tiene un límite de 5 minutos por videoconferencia.
 Usted puede usar un buscador para encontrar servidores Jitsi públicos alternativos que puedan estar más cerca de sus usuarios y con menos latencia.
Si usted tiene su servidor Jitsi privado, infórmenos aquí sin "https://".
El servidor profesional 8x8 usa (<b>8x8.vc</b>) y requiere que configure sus credenciales en la sección "Configuración de token" que hay más abajo.';
$string['editrecordname'] = 'Editar nombre grabación';
$string['editserver'] = 'Editar servidor';
$string['entersession'] = 'Ingresar a la sesión';
$string['error'] = 'Error';
$string['errordeleting'] = 'Error al borrar';
$string['exitsession'] = 'Salir de la sesión';
$string['experimental'] = 'Experimental';
$string['experimentalex'] = 'Aquí hay opciones con las que estamos experimentando y que podrían desaparecer en versiones futuras.';
$string['externalinvitations'] = 'Invitaciones externas';
$string['externaltoken'] = 'Token externo';
$string['externaltoken_help'] = 'Use este enlace para invitados que no tienen un usuario Moodle con el cual acceder.';
$string['finish'] = 'La sesión ha terminado.';
$string['finishandreturn'] = 'Terminar y Regresar';
$string['finishandreturnex'] = 'Regresar al curso al terminar la sesión. Al usar usuarios Jitsi públicos regresa al curso cuando cierra el anuncio.';
$string['finishinvitation'] = 'El enlace de invitación espirará en';
$string['forkids'] = 'Para niños';
$string['forkidsex'] = 'Se considerará que las grabaciones han sido creadas para niños.';
$string['from'] = 'De';
$string['guestform'] = 'Formato para ingresar invitado';
$string['hasentered'] = 'ha entrado a su sesión Jitsi privada';
$string['help'] = 'Ayuda';
$string['helpex'] = 'Este texto de ayuda personaliza el texto de la pestaña de ayuda en actividades Jitsi. Es un buen lugar para reglas de uso (netiquette) o instrucciones de ayuda al usuario.';
$string['here'] = 'aquí';
$string['identification'] = 'ID del  Usuario';
$string['identificationex'] = 'ID a mostrar en la sesión';
$string['inqueue'] = 'en cola de espera';
$string['instruction'] = 'Elegir el botón para acceder';
$string['integrated'] = 'Integrado a Moodle';
$string['internalerror'] = 'Error interno. Póngase en contacto con el administrador.';
$string['inuse'] = '<b>(en uso)</b>';
$string['invitations'] = 'Invitaciones';
$string['invitationsnotactivated'] = 'Las invitaciones NO están activadas';
$string['invitebutton'] = 'Opciones para Invitar';
$string['invitebuttonex'] = 'Permitir a los usuarios con el permiso mod/jitsi:createlink crear enlaces de invitación para usuarios no matriculados en el curso.';
$string['iscalling'] = 'Lo está llamando a usted para entrar a su Jitsi privado';
$string['jitsi'] = 'Jitsi';
$string['jitsi:addinstance'] = 'Añadir un nuevo Jitsi';
$string['jitsi:createlink'] = 'Ver y copiar enlaces de invitación para usuarios invitados';
$string['jitsi:deleterecord'] = 'Eliminar registro';
$string['jitsi:editrecordname'] = 'Editar nombre de registro';
$string['jitsi:hide'] = 'Ocultar grabaciones';
$string['jitsi:moderation'] = 'Moderación de Jitsi';
$string['jitsi:record'] = 'Grabar sesión';
$string['jitsi:sharedesktop'] = 'Compartir Escritorio';
$string['jitsi:view'] = 'Ver Jitsi';
$string['jitsi:viewexternallink'] = 'Ver enlace externo';
$string['jitsi:viewrecords'] = 'Ver grabaciones';
$string['jitsi:viewusersonsession'] = 'Acceso a los reportes de asistentes';
$string['jitsi_recording_statistics'] = 'Estadísticas de grabación de Jitsi';
$string['jitsiinterface'] = 'Interfaz Jitsi';
$string['jitsiname'] = 'Nombre de sesión';
$string['joinmeeting'] = 'Unirse a la reunión';
$string['latency'] = 'Latencia';
$string['latencyex'] = 'Seleccionar nivel de latencia para streaming.';
$string['link'] = 'enlace';
$string['linkexpiredon'] = 'Este enlace expiró en {$a}';
$string['livesessionsnow'] = 'Grabación al aire';
$string['loadattendees'] = 'Cargar asistentes';
$string['loadingvideo'] = 'Cargando vídeo... Por favor, espere';
$string['loginq'] = '¡Quiere poner en uso esta cuenta?';
$string['logintooltip'] = 'Se requieren credenciales para esta cuenta';
$string['messageprovider:callprivatesession'] = 'Llamar a Jitsi privado';
$string['messageprovider:onprivatesession'] = 'Usuario en sesión privada';
$string['minpretime'] = 'Minutos para acceder';
$string['minpretime_help'] = 'Usuarios con permisos de moderación podrán acceder con estos minutos antes del inicio';
$string['minutesconnected'] = 'Usted ha estado conectado por{$a} minutos';
$string['minutesday'] = 'Minutos día';
$string['minutestoday'] = 'Minutos hoy';
$string['modulename'] = 'Jitsi';
$string['modulename_help'] = 'Utilice el módulo Jitsi para videoconferencia. Estas videoconferencias utilizarán su nombre de usuario de Moodle mostrando su nombre de usuario y avatar en las videoconferencias.

Jitsi-meet es una solución de videoconferencia de código abierto que le permite crear e implementar fácilmente soluciones de videoconferencia seguras.';
$string['modulenameplural'] = 'Jitsis';
$string['myprivatesession'] = 'Mi sesión privada';
$string['nameandsurname'] = 'Nombre + Apellido(s)';
$string['newvaluefor'] = 'Nuevo valor para';
$string['noinviteaccess'] = 'Acceso de invitado no está permitida actualmente.';
$string['nojitsis'] = 'No se encontraron actividades Jitsi';
$string['norecording'] = 'No hay grabación. El vídeo aparecerá automáticamente';
$string['norecords'] = 'No hay grabaciones disponibles';
$string['nostart'] = 'La sesión no ha comenzado. Puede acceder {$a}';
$string['notloggedin'] = 'Credenciales de cuenta requeridas';
$string['noviewpermission'] = 'Usted no tiene permisos para ver esta sesión Jitsi';
$string['number_of_recordings'] = 'Número de grabaciones';
$string['numbervideosdeleted'] = 'Número de videos a eliminar';
$string['numbervideosdeletedex'] = 'Número de videos a eliminar en cada ejecución del trabajo de CRON';
$string['oauthid'] = 'ID OAuth2';
$string['oauthidex'] = 'Cuenta de Google ID Oauth2  con YouTube Data API v3 habilitada y esta redirección URIs <b>\'{$a}\'</b> en la consola Google api.';
$string['oauthsecret'] = 'Secreto OAuth2';
$string['oauthsecretex'] = 'Cuenta Google secreto OAuth2';
$string['participantspane'] = 'Panel de participantes';
$string['participantspaneex'] = 'Mostrar el panel de participantes a todos los usuarios. Cuando se desmarca, solo los usuarios con capacidad de moderación de Jitsi (mod/jitsi:moderation), generalmente profesores, pueden ver el panel.';
$string['participatingsession'] = 'Participando en sesión';
$string['password'] = 'Contraseña';
$string['passwordex'] = 'Contraseña para asegurar sus sesiones. Recomendada si usa servidor público';
$string['pluginadministration'] = 'Administración Jitsi';
$string['pluginname'] = 'Jitsi';
$string['preparing'] = 'Preparando.. Espere por favor...';
$string['presscambutton'] = 'Presione botón de cam';
$string['pressdesktopbutton'] = 'Presione botón de escritorio';
$string['pressendbutton'] = 'Presione botón de fin';
$string['pressmicrophonebutton'] = 'Presione botón de micrófono';
$string['pressrecordbutton'] = 'Presione botón de grabar';
$string['privacy:metadata:jitsi'] = 'Para poder integrar con una sesión Jitsi, los datos del usuario necesitan ser intercambiados con ese servicio.';
$string['privacy:metadata:jitsi:avatar'] = 'El avatar es enviado desde Moodle para mostrarlo a los otros usuarios de la sesión Jitsi';
$string['privacy:metadata:jitsi:username'] = 'El nombre_de_usuario es enviado desde Moodle para mostrarlo a los otros usuarios de la sesión Jitsi';
$string['privatekey'] = 'Clave privada';
$string['privatekeyex'] = 'Clave privada para firmar el token con el servidor 8x8. Puede obtenerla desde la adminitración del servidor 8x8 (https://jaas.8x8.com/).
Descargue el archivo con la clave privada y copie su contenido aquí.
</br><b>IMPORTANTE</b>: recuerde actualizar el ajuste "Dominio" a algo así como <b>8x8.vc</b>';
$string['privatesession'] = '{$a} sesión privada';
$string['privatesessiondisabled'] = 'Las sesiones privadas están deshabilitadas';
$string['privatesessions'] = 'Sesiones privadas';
$string['privatesessionsex'] = 'Añadir sesiones privadas a perfiles de usuario';
$string['raisehand'] = 'Botón para Levantar mano';
$string['raisehandex'] = 'Mostrar el botón para levantar la mano a todos los usuarios. Cuando los usuarios levantan la mano, ellos pueden acceder al panel de participantes. Si usted oculta los paneles de participantes tal vez usted debería ocultar este botón.';
$string['reactions'] = 'Reacciones';
$string['reactionsex'] = 'Mostrar emoticones de aplauso, sorpresa, etc... Se requiere "Botón para levantar la mano".';
$string['record'] = 'Grabación';
$string['recorders'] = 'Grabadoras';
$string['recordex'] = 'Habilitar opción de grabación nativa de Jitsi (dropbox) a usuarios con el permiso mod/jitsi:record habilitado (normalmente, profesores). Si ajusta la "Configuración de retransmisión" con el método "Integrado en Moodle" probablemente querrá deshabilitar esto.';
$string['recordingbloquedby'] = 'La grabación está bloqueada por';
$string['recordingwasbloquedby'] = 'El usuario que inició esta grabación ya no está participando en la sesión. ¿Desea detener la grabación? Fue iniciada por';
$string['records'] = 'Grabaciones';
$string['recordsonair'] = 'Grabaciones al aire';
$string['recordtitle'] = 'Grabar';
$string['removedfromqueue'] = 'Quitado de la cola';
$string['removefromqueue'] = 'Quitar de la cola';
$string['search'] = 'Buscar';
$string['searchrecords'] = 'Buscar grabaciones';
$string['secret'] = 'Secreto';
$string['secretex'] = 'Secreto para configuración del token';
$string['securitybutton'] = 'Botón de Seguridad';
$string['securitybuttonex'] = 'Muestra el botón nativo de Jitsi "Opciones de seguridad" y el "Modo sala de espera". Probablemente usted debería desactivar esta opción si ha puesto una contraseña arriba porque la contraseña le aparecerá a los usuarios. Con la configuración de token puede experimentar con esta opción.';
$string['selectdate'] = 'Seleccionar fecha';
$string['separator'] = 'separador';
$string['separatorex'] = 'definir el campo separador para el nombre de la sesión';
$string['server'] = 'Servidor Jitsi';
$string['serveradded'] = 'Servidor creado exitosamente.';
$string['serverdeleted'] = 'Servidor "{$a}" eliminado exitosamente.';
$string['serverdesc'] = 'Elegir cual servidor jitsi será usado.';
$string['servermanagement'] = 'Servidores Jitsi';
$string['servermanagementdesc'] = 'HAcer clic aquí para administrar servidores Jitsi';
$string['serverupdated'] = 'Servidor "{$a}" actualizado exitosamente.';
$string['sessiondeleted'] = 'Sesión compartida eliminada';
$string['sessionisbeingrecorded'] = 'La sesión está siendo grabada';
$string['sessionisbeingrecordingby'] = 'La sesión está siendo grabada por {$a}';
$string['sessionnamefields'] = 'Campos del nombre de sesión';
$string['sessionnamefieldsex'] = 'Campos que definen el nombre se sesión';
$string['sessionshared'] = 'Sesión compartida con curso \'{$a}\'';
$string['sharedsessionwithtoken'] = 'Sesión compartida con token. Seleccione esto para ingresar el token del otro curso.';
$string['sharestream'] = 'Compartir streaming con usuarios externos a Moodle (función experimental)';
$string['sharestreamex'] = 'Active esta característica para ofrecer la posibilidad de compartir streaming en vivo de una sesión con usuarios externos a Moodle.';
$string['sharetoinvite'] = 'Compartir este enlace para invitar a alguien a la sesión';
$string['showavatars'] = 'Mostrar avatar en Jitsi';
$string['showavatarsex'] = 'Muestra el avatar del usuario en Jitsi. Si el usuario no tiene una imagen de perfil, se cargará la imagen de perfil predeterminada de Moodle en lugar de las iniciales que mostrará Jitsi cuando no se establezca ninguna imagen.';
$string['simultaneouscameras'] = 'Cámaras simultáneas';
$string['simultaneouscamerasex'] = 'Número máximo de cámaras simultáneas que pueden ver los usuarios. Esto puede ser cambiado a un valor inferior por su servidor Jitsi. Permitir un montón de cámaras podría sobrecargar sus navegadores.';
$string['startwithaudiomuted'] = 'Iniciar con audio enmudecido';
$string['startwithaudiomutedex'] = 'Cuando el usuario se conecte a la sesión, el audio estará mudo';
$string['startwithvideomuted'] = 'Iniciar con video enmudecido';
$string['startwithvideomutedex'] = 'Cuando el usuario se conecte a la sesión, el video estará mudo';
$string['staticinvitationlink'] = 'Opción de invitaciones';
$string['staticinvitationlinkcapabilityex'] = 'Use esta opción para usuarios que no tengan un usuario de Moodle para acceder. Usted sólo puede crear o modificar el enlace de invitación si tiene el permiso mod/jitsi:createlink.';
$string['staticinvitationlinkex'] = 'Usar esta opción para invitados que no tiene una cuenta de usuario de Moodle para acceder. Usted puede ver y copiar el enlace en la pestaña de invitación.';
$string['staticinvitationlinkexview'] = 'Compartir este enlace para invitados que no tiene una cuenta de usuario de Moodle para acceder.';
$string['streamingandrecording'] = 'Transmisión y Grabación';
$string['streamingbutton'] = 'Transmisión en Vivo';
$string['streamingbuttonex'] = 'Habilite las funciones de transmisión en vivo para los usuarios con la función mod/jitsi:record habilitada (maestros). Si está habilitado, probablemente querrá deshabilitar la opción "grabar" anterior.';
$string['streamingconfig'] = 'Configuración de transmisión';
$string['streamingconfigex'] = 'La configuración de retransmisión por defecto funciona de forma diferente y los usuarios pueden retransmitir/grabar sus sesiones con sus propias cuentas de retransmisión en servicios de retransmisión (Peertube, Youtube...) pero el profesor es responsable de publicar sus enlaces para los estudiantes del curso. </br></br>Para una mejor experiencia puede activar el método "Integrado en Moodle" para grabar y una cuenta de retransmisión corporativa y las grabaciones estarán automáticamente disponibles para los estudiantes.';
$string['streamingisstarting'] = 'La transmisión está iniciando. Espere por favor...';
$string['streamingoption'] = 'Método de Transmisión en Vivo';
$string['streamingoptionex'] = 'La <b>interfaz Jitsi (jitsi interface)</b> permite "Comenzar retransmisión en directo" en la interfaz Jitsi y los usuarios pueden usar sus propias cuentas de retransmisión.
</br><b>Integrado en Moodle</b> es la opción más sencilla para los usuarios. Los profesores pueden empezar una "Retransmisión y grabación" inmediatamente y no se les pedirán credenciales de cuenta. Las retransmisiones/grabaciones se guardan en una cuenta corporativa y estarán inmediatamente disponibles para los estudiantes. Usted debe configurar credenciales OAuth2 y una cuenta de transmisión a continuación.';
$string['tablelistjitsis'] = 'Lista todos los vídeos en sus cuentas de proveedores de retransmisión/grabación que están disponibles para ser eliminados porque ya no están vinculados en las actividades de Jitsi en esta instancia de Moodle. Puede eliminarlos de forma segura para liberar espacio en el servidor de retransmisión. La lista podría incluir vídeos que ahora están en la \'Papelera de reciclaje\' de algún curso. Se recomienda eliminar sólo las grabaciones antiguas que sepa que no serán necesarias. </br></br> <b>¡¡¡ATENCIÓN!!! </b>Si tiene instancias de copia de seguridad de Moodle, NO debe eliminar estos videos si están vinculados en otras instancias.';
$string['timeopen'] = 'Hora de apertura de la sesión';
$string['to'] = 'A';
$string['toenter'] = 'para entrar';
$string['token'] = 'Compartir este token en el otro curso';
$string['tokenconfiguration8x8ex'] = 'Si usa servidores 8x8 usted necesita configurar los siguientes parámetros.';
$string['tokenconfigurationex'] = 'Si está usando un servidor Jitsi configurado en "modo token", por ejemplo en su propio servidor o en un servidor 8x8, rellene los siguientes parámetros según el tipo de servidor que esté usando. Requerido para dar a sus usuarios el permiso (mod/jitsi:moderation) como moderadores nativos de Jitsi.';
$string['tokeninterno'] = 'Token de sesión principal';
$string['tokeninternocompartir'] = 'Token a compartir';
$string['tokeninternocompartir_help'] = 'Usar este token para compartir la sesión con otros cursos. Ingrese este token en esta sección del otro curso.';
$string['tokeninvitacion'] = 'Ingresar aquí el token de la sesión a la cual desea unirse';
$string['tokeninvitacion_help'] = 'Ingresar aquí el token de la sesión a la cual desea unirse. Obtenga este token en el otro curso.';
$string['tokeninvitadovalidation'] = 'Token no válido';
$string['tokeninvitationnotvalid'] = 'La invitación no puede expirar antes de ahorita mismo';
$string['tokeninvitationvalidation'] = 'Token NO válido. NO hay sesión con este token';
$string['tokennconfig'] = 'Configuración del token';
$string['tokennconfig8x8'] = 'Configuración de servidor 8x8';
$string['top_10_teachers'] = 'Profesores en los primeros 10 puestos';
$string['toplimit'] = 'Límite superior';
$string['total_participants'] = 'Total de participantes';
$string['total_recordings'] = 'Total de grabaciones';
$string['totalminutes'] = 'Total minutos';
$string['type'] = 'Tipo';
$string['unknowntype'] = 'Tipo desconocido';
$string['updated'] = 'Actualizado';
$string['urlerror'] = 'La URL no es válida';
$string['urlinvitacion'] = 'URL de invitación';
$string['urlinvitacionrecord'] = 'URL de invitación a streaming';
$string['usercall'] = '{$a} lo llama para un Jitsi privado';
$string['userenter'] = '{$a} está en su sala privada de  Jitsi';
$string['username'] = 'Nombre_de_usuario';
$string['validitytimevalidation'] = 'La invitación no puede expirar antes de la fecha de inicio de la sesión ni después de la fecha de fin de la sesión.';
$string['videoexpiry'] = 'Periodo de retención';
$string['videoexpiryex'] = 'Tiempo en que estará disponible un vídeo borrado en el servidor de streaming. Tras este tiempo el vídeo se borrará del servidor de streaming.';
$string['warningprivate'] = 'Si usted accede, {$a} será advertido mediante una notificación.';
$string['watermarklink'] = 'Enlace a SelloDeAgua';
$string['watermarklinkex'] = 'Enlace de la marca de agua';
$string['whiteboard'] = 'Pizarrón';
$string['whiteboardex'] = 'Mostrar el botón del pizarrón a todos los usuarios. De hecho el Pizarrón NO está disponible en servidores Jaas.';
$string['youtubebutton'] = 'Opción para compartir en YouTube';
$string['youtubebuttonex'] = 'Opción para transmisión compartir videos YouTube en streaming';
