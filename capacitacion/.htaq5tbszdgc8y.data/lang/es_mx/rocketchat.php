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
 * Strings for component 'rocketchat', language 'es_mx', version '4.4'.
 *
 * @package     rocketchat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apitoken'] = 'Token API Rocket.Chat';
$string['apitoken_desc'] = 'Token asociado API Rocket.Chat';
$string['apiuser'] = 'Usuario API Rocket.Chat';
$string['apiuser_desc'] = 'Usuario API Rocket.Chat / modo Token : Rocket.Chat User Id';
$string['background_add_instance'] = 'Pasar las inscripciones de Rocket.Chat a la tarea en segundo plano mientras se crea una nueva instancia de módulo';
$string['background_add_instance_desc'] = 'Esto evitará que espere a la página de creación del módulo';
$string['background_enrolment_task'] = 'Pasar la inscripción y cancelación de inscripciones de usuarios a Rocket.Chat remoto como tareas en segundo plano.';
$string['background_enrolment_task_desc'] = 'Esto es para resolver el problema de rendimiento al inscribir grandes cantidades de usuarios. Esto evitará que el inscriptor espere en la página de inscripción del curso mientras inscribe o cancela la inscripción de una gran cantidad de usuarios. Se recomienda encarecidamente elegir la cohorte de inscripción y el archivo plano, si está habilitado.';
$string['background_restore'] = 'Pasar las inscripciones de Rocket.Chat a una tarea en segundo plano mientras se duplican los módulos de Rocket.Chat';
$string['background_restore_desc'] = 'Esto evitará que espere mientras se duplica un módulo Rocket.Chat';
$string['background_synchronize'] = 'Pasar las inscripciones de Rocket.Chat a una tarea en segundo plano mientras se sincronizan los inscritos.';
$string['background_synchronize_desc'] = 'Esto ocurre después de que un curso o módulo Rocket.Chat es restaurado desde la papelera de reciclaje.';
$string['background_user_update'] = 'Pasar las inscripciones de Rocket.Chat a una tarea en segundo plano mientras se actualiza la información del usuario, como activación/desactivación.';
$string['background_user_update_desc'] = 'Pasar las inscripciones de Rocket.Chat a una tarea en segundo plano mientras se actualiza la información del usuario, como activación/desactivación.';
$string['connection-success'] = 'Conexión establecida exitosamente';
$string['connectiontestresult'] = 'Resultado de prueba de conexión';
$string['create_user_account_if_not_exists'] = 'Crear cuenta de usuario Rocket.Chat';
$string['create_user_account_if_not_exists_desc'] = 'Al inscribir al usuario, crear la cuenta de usuario correspondiente de Rocket.Chat (nombre de usuario), si no existe';
$string['datastransmittedtorc'] = 'datos transmitidos a Rocketchat';
$string['days'] = 'días';
$string['defaultmoderatorroles'] = 'Moderadores Rocketchat';
$string['defaultmoderatorroles_desc'] = 'Roles de Moodle en el curso que serán moderadores de Rocket.Chat';
$string['defaultuserroles'] = 'Usuarios Rocket.Chat';
$string['defaultuserroles_desc'] = 'Roles de Moodle en el curso que serán usuarios de Rocket.Chat (con derechos de usuario normales)';
$string['description'] = 'Módulo que acopla Rocket.Chat y Moodle';
$string['details'] = 'Detalles';
$string['displaycurrent'] = 'Mostrar en ventana actual';
$string['displaynew'] = 'Mostrar en ventana nueva';
$string['displaypopup'] = 'Mostrar en ventana emergente';
$string['displaysection'] = 'Configuraciones de visualización';
$string['displaytype'] = 'Tipo de visualización';
$string['embedded_display_mode'] = 'Modo de visualización integrado de Rocket.Chat';
$string['embedded_display_mode_desc'] = 'Si se activa, eliminará el panel izquierdo de la interfaz web de Rocket.Chat (ocultando otros canales)';
$string['embedded_display_mode_setting'] = 'Modo de visualización Rocket.Chat incrustado';
$string['embedded_display_mode_setting_desc'] = 'Si se activa quitará el panel izquierdo en la interfaz de Rocket.Chat (ocultando otros canales)';
$string['error'] = '¡ Error !';
$string['errorintestwhilegconnection'] = 'Error al probar conexiones';
$string['excludepinned'] = 'excluir mensajes fijados';
$string['excludepinned_desc'] = 'Si se habilita, los mensajes fijados no son eliminados. Por ejemplo, si usted fijó unos cuantos mensajes con enlaces importantes, se conservan intactos.';
$string['filesonly'] = 'Solamente podar archivos, conservar mensajes';
$string['filesonly_desc'] = 'Si se habilita, los mensajes no serán eliminados, pero los archivos si; son reemplazados por un mensaje simple de archivo quitado por poda automática de mensaje. cuando se usa junto con Excluir mensajes fijados, solamente los mensajes no-fijados serán eliminados.';
$string['groupecreationerror'] = 'Error al crear grupo remoto Rocket.Chat';
$string['groupnametoformat'] = 'Nombre formateado del grupo';
$string['groupnametoformat_desc'] = 'El formato de cadena de caracteres {$a->parameter} es posible con los siguientes parámetros: moodleid, moodleshortname, moodlefullname, moduleid, modulemoodleid (único dentro de todos los moodle posibles), courseid, courseshortname, coursefullname';
$string['header_details'] = 'Detalles para módulo :';
$string['instanceurl'] = 'URL de instancia Rocket.Chat';
$string['instanceurl_desc'] = 'URL de la instancia de Rocket.Chat (p. ej.: https://rocketchat.univ.fr)';
$string['joinrocketchat'] = 'Unirse a sesión Rocket.Chat';
$string['limit_override'] = 'Tiempo de retención excedió la configuración máxima de {$a}';
$string['maxage'] = 'Valor del tiempo de retención (maxAge) para el grupo Rocket.Chat';
$string['maxage_desc'] = 'Si la retención está habilitada, el siguiente valor de retención anulará el valor global del servidor Rocket.Chat. ADVERTENCIA: 0 activará la eliminación regular de mensajes: valor de retención global de Rocket.Chat.';
$string['maxage_limit'] = 'Valor del tiempo de retención máxima (maxAge) para el grupo Rocket.Chat';
$string['maxage_limit_desc'] = 'Valor del tiempo de retención máxima (maxAge) para el grupo Rocket.Chat';
$string['mod/rocketchat:canactivateretentionpolicy'] = 'Puede activar política de retención local en grupo Rocket.Chat';
$string['mod/rocketchat:candefineadvancedretentionparamaters'] = 'Puede anular parámetros avanzados en política de retención local en grupo Rocket.Chat';
$string['moderatorroles'] = 'Roles Moodle en cursos que serán moderadores Rocket.Chat';
$string['modulename'] = 'Rocket.Chat';
$string['modulename_help'] = 'Añadir esta actividad a un curso Moodle creará un canal privado en Rocket.Chat y los usuarios de Moodle asociados a esta actividad se integrarán a este nuevo canal.

La lista de miembros se mantendrá actualizada.

Se podrá acceder a este canal de Rocket.Chat directamente desde Moodle o a través de cualquier cliente de Rocket.Chat.

Actualmente, no se aplican restricciones de disponibilidad a los módulos.';
$string['modulename_link'] = 'mod/rocketchat';
$string['modulenameplural'] = 'Instancias Rocket.Chat';
$string['name'] = 'Nombre de instancia (en el curso)';
$string['no'] = 'No';
$string['norocketchats'] = 'No hay instancias del módulo Rocket.Chat';
$string['pluginadministration'] = 'Administración de Rocket.Chat';
$string['pluginname'] = 'Rocket.Chat';
$string['pluginname_admin'] = 'Interfase administrativa de Rocketchat';
$string['popupheight'] = 'Altura de ventana emergente';
$string['popupwidth'] = 'Ancho de ventana emergente';
$string['privacy:metadata:mod_rocketchat:rocket_chat_server'] = 'Datos transmitidos a servidores Rocket.Chat remotos';
$string['privacy:metadata:mod_rocketchat:rocket_chat_server:email'] = 'Email del usuario';
$string['privacy:metadata:mod_rocketchat:rocket_chat_server:firstname'] = 'Nombre del usuario';
$string['privacy:metadata:mod_rocketchat:rocket_chat_server:lastname'] = 'Apellido(s) del usuario';
$string['privacy:metadata:mod_rocketchat:rocket_chat_server:rocketchatids'] = 'Identificadores de grupos privados remotos de Rocket.Chat en los que está inscrito el usuario';
$string['privacy:metadata:mod_rocketchat:rocket_chat_server:username'] = 'Nombre del usuario';
$string['rcgrouperror'] = 'No se puede recuperar el grupo remoto de Rocket.Chat. Póngase en contacto con el administrador del sistema. Código de error {$a}.';
$string['recyclebin_patch'] = '¿Está instalado el parche principal de Moodle de Recyclebin?';
$string['recyclebin_patch_desc'] = 'El parche de la papelera de reciclaje del mod rocketchat se encuentra en el archivo admin/tool/recyclebin/classes/course_bin.php y permite pasar el cmid y el id de instancia del módulo al evento de creación del elemento de la papelera de reciclaje. Permite la eliminación de grupos remotos de Rocket.Chat.';
$string['removeditem'] = 'se quitaron mensajes en {$a->rocketchatid}';
$string['removemessages'] = 'Quitar todos los mensajes';
$string['replacementgroupnamecharacters'] = 'Caracteres a ser reemplazados en nombre del grupo';
$string['replacementgroupnamecharacters_desc'] = 'Poner aquí los caracteres que NO quiera que cambien en el nombre del grupo, parejas de caracteres separadas por ";", una pareja por línea.';
$string['restapiroot'] = 'Raíz de la API REST de Rocket.Chat';
$string['restapiroot_desc'] = 'Raíz de la API REST de Rocket.Chat';
$string['retentionenabled'] = 'Retención de mensaje';
$string['retentionenabled_desc'] = 'Activar retención de mensaje';
$string['retentionfeature'] = 'Característica de retención';
$string['retentionfeature_desc'] = 'Activa la configuración de la función de retención. Advertencia: esta función de Rocket.Chat solo estará disponible a partir de la versión 3.10.3 del servidor.';
$string['retentionsection'] = 'Configuraciones de retención de mensaje';
$string['rocketchat:addinstance'] = 'Añadir una instancia de Rocket.Chat';
$string['rocketchat:canactivateretentionpolicy'] = 'Puede anular la activación de la política de retención en una instancia de Rocket.Chat';
$string['rocketchat:candefineadvancedretentionparamaters'] = 'Puede anular la configuración de anulación global en una instancia de Rocket.Chat';
$string['rocketchat:candefineroles'] = 'Anular la asignación de roles a través de la definición de instancia del módulo';
$string['rocketchat:change_embedded_display_mode'] = 'Puede cambiar el modo de visualización (incrustado) de cada instancia del módulo';
$string['rocketchat:view'] = 'Ver las instancias del módulo Rocket.Chat';
$string['rocketchat_nickname'] = '{$a->firstname} {$a->lastname}';
$string['rocketchat_synchronise_task'] = 'Sincronizar todas las salas RocketChat';
$string['rolessection'] = 'Configuraciones de definición de roles';
$string['settings'] = 'Configuraciones del plugin Rocket.Chat';
$string['testconnection'] = 'Probar conexión a Rocket.Chat';
$string['testconnectionfailure'] = 'La prueba de conexión requiere las siguientes configuraciones: instanceurl, restapiroot, apiuser y apitoken. Verifique que todas estén completas.';
$string['testerrorcode'] = 'Código de error : {$a}';
$string['testerrormessage'] = 'Mensaje de error :</br>{$a}';
$string['testtitle'] = 'Prueba de conexión Rocket.Chat';
$string['user_creation_adv_options_auth_methods'] = 'Métodos de autenticación afectados por opciones adicionales en la creación de usuarios.';
$string['user_creation_adv_options_auth_methods_desc'] = 'Métodos de autenticación relacionados con opciones adicionales como enviar correo y/o contraseña al crear un usuario en Rocket.Chat.';
$string['user_creation_adv_options_requirePasswordChange'] = 'Requerir cambio de contraseña después de creación de usuario';
$string['user_creation_adv_options_requirePasswordChange_desc'] = 'Requerir cambio de contraseña después de creación de usuario';
$string['user_creation_adv_options_sendWelcomeEmail'] = 'Enviar mensaje Email de bienvenida en creación de usuario';
$string['user_creation_adv_options_sendWelcomeEmail_desc'] = 'Configurar enviar mensaje Email de bienvenida en creación de usuario';
$string['user_creation_adv_options_setRandomPassword'] = 'Configurar contraseña aleatoria en creación de usuario';
$string['user_creation_adv_options_setRandomPassword_desc'] = 'Configurar contraseña aleatoria en creación de usuario';
$string['user_creation_adv_options_verify'] = 'Configurar verificación de email en creación de usuario';
$string['user_creation_adv_options_verify_desc'] = 'Establecer si la dirección de correo electrónico del usuario se verificará al crear el usuario';
$string['usernamehook'] = 'Activar hook (anzuelo) nombre_de_usuario.';
$string['usernamehook_desc'] = 'Al activar esta opción será posible cambiar el nombre de usuario de Moodle para que se ajuste al nombre de usuario de Rocket.Chat.</br>Cree un archivo hooklib.php en el directorio de instalación del módulo rocketchat.</br>codifique una función moodle_username_to_rocketchat que devolverá el nombre de usuario de Moodle transformado para que se ajuste al de Rocket.Chat.</br>hooklib-example.php se proporciona como ejemplo.';
$string['userroles'] = 'Roles de Moodle en el curso que serán usuarios de Rocket.Chat (con derechos de usuario normales)';
$string['validationgroupnameregex'] = 'Expresión regular del nombre de validación del grupo Rocket.Chat para eliminar caracteres no válidos';
$string['validationgroupnameregex_desc'] = 'Moodle reemplazará todos los caracteres no autorizados por _. Esta expresión regular es la negación exacta de la del servidor Rocket.Chat en cuanto a la validación del nombre del grupo.';
$string['warningapiauthchanges'] = 'Advertencia, el plugin Moodle de Rocket.Chat cambia en los métodos de autenticación. Ahora solo se tiene en cuenta la autenticación por token.\\nCambie la configuración del plugin Moodle de Rocket.Chat.';
$string['welcome_string'] = 'Interfase administrativa de Rocketchat';
$string['yes'] = 'Si';
