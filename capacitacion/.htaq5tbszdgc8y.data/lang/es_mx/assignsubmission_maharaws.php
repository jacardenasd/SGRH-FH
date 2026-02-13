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
 * Strings for component 'assignsubmission_maharaws', language 'es_mx', version '4.4'.
 *
 * @package     assignsubmission_maharaws
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archiveonrelease'] = 'Archivar cuando sea calificada';
$string['archiveonrelease_help'] = 'Luego de otorgar una calificación, se tomará una instantánea del portafolio.';
$string['assign_submission_maharaws_description'] = 'Funciones de Mahara utilizadas en el plugin de envío de tareas de Mahara.<br />Publicar este servicio en un sitio Moodle no tiene ningún efecto. Suscríbase a este servicio si desea poder usar tareas con {$a}.<br />';
$string['assign_submission_maharaws_name'] = 'Envío de tareas de Mahara (servicios web)';
$string['collectionsby'] = 'Conexiones por {$a}';
$string['currentsubmitted'] = 'Actual enviada {$a}';
$string['debug'] = 'Depurar OAuth';
$string['debug_help'] = 'Opción de depuración para interrumpir el salto de inicio de sesión SSO de OAuth para que se puedan inspeccionar los parámetros';
$string['defaultlockpages'] = 'Predeterminado "{$a}"';
$string['defaultlockpages_help'] = 'Configuración predeterminada que se utilizará para la configuración "{$a}" en las nuevas asignaciones de Mahara.';
$string['defaulton'] = 'Habilitado de forma predeterminada';
$string['defaulton_help'] = 'Si se configura, este método de envío se habilitará de forma predeterminada para todas las tareas nuevas.';
$string['defaultsite'] = 'Predeterminado "{$a}"';
$string['defaultsite_help'] = 'Configuración predeterminada que se utilizará para la configuración "{$a}" en las nuevas asignaciones de Mahara.';
$string['emptysubmission'] = 'No ha elegido un portafolio para enviar.';
$string['enabled'] = 'Mahara';
$string['enabled_help'] = 'Si se habilita, los estudiantes podrán enviar páginas y colecciones de Mahara para evaluación en este sitio en este curso.';
$string['errorinvalidapistring'] = 'La instancia de mahara ha devuelto una cadena de API con un formato inesperado.';
$string['errorinvalidhost'] = 'ID de host no válido seleccionado';
$string['errorinvalidstatus'] = 'Error del desarrollador: Estado de envío no válido enviado a assignment_submission_mahara::set_mahara_submission_status()';
$string['errorinvalidurl'] = 'Error al conectarse a los servicios web de Mahara. {$a}';
$string['errorrequest'] = 'El intento de enviar una solicitud OAuth generó un error: {$a}';
$string['errorvieworcollectionalreadysubmitted'] = 'No se pudo enviar la página o colección seleccionada. Elija otra.';
$string['errorwsrequest'] = 'El intento de enviar una solicitud a Mahara resultó en un error: {$a}';
$string['eventassessableuploaded'] = 'Una página o una colección ha sido enviada.';
$string['forceglobalcredentials'] = 'Forzar credenciales globales';
$string['forceglobalcredentials_help'] = 'Usar siempre estas credenciales para conectarse a Mahara';
$string['forceglobalcredentialserror'] = 'La URL y las credenciales de Mahara se han forzado, pero no están configuradas a nivel del sitio: solicite a su administrador que configure correctamente el plugin de envío de Mahara.';
$string['forceglobalcredentialswarning'] = 'La URL y las credenciales de Mahara se han establecido globalmente.';
$string['gclabel'] = 'Credenciales globales';
$string['invalidurlhelp'] = 'Comprobar que la URL y las credenciales de OAuth sean correctas y que exista un certificado SSL válido si se utiliza HTTPS. Compruebe también que se hayan asignado las funciones correctas al acceso de OAuth.';
$string['key'] = 'Clave OAuth de servicios web de Mahara';
$string['key_help'] = 'Ingresar la clave OAuth de servicios web del sitio del socio Mahara.';
$string['legacy_ext_username'] = 'Utilice el formato heredado ext_user_username';
$string['legacy_ext_username_help'] = 'Habilitar esta opción hace que el formato del campo ext_usr_username siga la siguiente configuración "Nombre de campo: valor". No se recomienda que habilite esta configuración a menos que tenga un motivo específico para hacerlo.';
$string['lockpages'] = 'Bloquear portafolios enviados';
$string['lockpages_help'] = 'Si se selecciona "Sí, mantener bloqueado", las páginas y colecciones de Mahara entregadas no se podrán editar en Mahara y permanecerán bloqueadas después de la calificación. Si se selecciona "Sí, pero desbloquear después de la calificación", la página o colección se desbloqueará después de la calificación del envío o, si se ha utilizado el flujo de trabajo de calificación, se desbloqueará cuando se publiquen las calificaciones del estudiante.';
$string['mahara'] = 'Mahara';
$string['maharaws:configure'] = 'Configurar envío Mahara';
$string['nomaharahostsfound'] = 'No se encontraron hosts Mahara.';
$string['noneselected'] = 'Ninguno seleccionado';
$string['noviewscreated'] = 'No tiene páginas ni colecciones disponibles. Visite "{$a->name}" y <a href="{$a->jumpurl}" target="_blank" rel="noopener noreferrer">crea una nueva</a>.';
$string['option_collections'] = 'Colecciones';
$string['option_views'] = 'Páginas';
$string['outputforlog'] = '{$a->remotehostname}: {$a->viewtitle} (id de vista: {$a->viewid})';
$string['outputforlognew'] = 'Nuevo envío {$a}.';
$string['pluginname'] = 'Envíos Mahara';
$string['previousattemptsnotvisible'] = 'Los intentos anteriores con el plugin de envío Mahara no son visibles.';
$string['privacy:metadata:assignment'] = 'La ID de la tarea';
$string['privacy:metadata:assignmentsubmission_maharaws:coursefullname'] = 'El nombre completo del curso se envía para permitir que el sistema remoto permita una mejor experiencia del usuario.';
$string['privacy:metadata:assignmentsubmission_maharaws:courseid'] = 'El ID del curso se envía desde Moodle para permitir que el sistema remoto envíe su portafolio al curso correcto';
$string['privacy:metadata:assignmentsubmission_maharaws:courseshortname'] = 'El nombre corto del curso se envía al sistema remoto para permitir una mejor experiencia del usuario.';
$string['privacy:metadata:assignmentsubmission_maharaws:email'] = 'Su correo electrónico se envía al sistema remoto para permitir una mejor experiencia de usuario y para la gestión de la cuenta.';
$string['privacy:metadata:assignmentsubmission_maharaws:firstname'] = 'Su nombre se envía al sistema remoto para permitir una mejor experiencia del usuario.';
$string['privacy:metadata:assignmentsubmission_maharaws:fullname'] = 'Su nombre completo se envía al sistema remoto para permitir una mejor experiencia del usuario.';
$string['privacy:metadata:assignmentsubmission_maharaws:idnumber'] = 'Su número de identificación se envía desde Moodle para permitirle acceder a sus datos en el sistema remoto.';
$string['privacy:metadata:assignmentsubmission_maharaws:lastname'] = 'Su apellido se envía al sistema remoto para permitir una mejor experiencia de usuario.';
$string['privacy:metadata:assignmentsubmission_maharaws:userid'] = 'El ID de usuario se envía desde Moodle para permitirle acceder a sus datos en el sistema remoto.';
$string['privacy:metadata:assignmentsubmission_maharaws:username'] = 'Su nombre de usuario es enviado desde Moodle para permitir acceder a sus datos en el sistema remoto';
$string['privacy:metadata:assignsubmission_maharaws'] = 'Almacena  información acerca de páginas y colecciones Mahara enviadas a tareas.';
$string['privacy:metadata:iscollection'] = '¿Este envío es una página o una colección?';
$string['privacy:metadata:submission'] = 'La ID del envío';
$string['privacy:metadata:viewid'] = 'La UID de la página o colección Mahara';
$string['privacy:metadata:viewstatus'] = 'El estadode la página o colección Mahara';
$string['privacy:metadata:viewtitle'] = 'El título de la página o colección Mahara';
$string['privacy:metadata:viewurl'] = 'La URL de la página o colección Mahara';
$string['privacy:path'] = 'Páginas y colecciones Mahara';
$string['remoteuser'] = 'Usar usuarioremoto';
$string['secret'] = 'Secreto OAuth de servicios web de Mahara';
$string['secret_help'] = 'Ingresar el secreto de OAuth de servicios web del sitio socio  Mahara.';
$string['selectmaharaview'] = 'Seleccione una de sus páginas de portafolio o colecciones disponibles de la lista a continuación o visite "{$a->name}" y <a href="{$a->jumpurl}" target="_blank" rel="noopener noreferrer">cree una nueva</a>.';
$string['token'] = 'Token de servicios web de Mahara';
$string['token_help'] = 'Ingresar el token de autenticación de servicios web del sitio del socio Mahara.';
$string['url'] = 'URL para el sitio Mahara';
$string['url_help'] = 'Esta configuración le permite definir desde qué sitio de Mahara sus estudiantes deben enviar sus portafolios. Ingrese la URL del sitio de Mahara, por ejemplo, https://mahara.some.edu/.';
$string['viewsby'] = 'Páginas po{$a}';
$string['yeskeeplocked'] = 'Si, conservar bloqueados';
$string['yesunlock'] = 'Si, pero desbloquear después de calificarlos';
