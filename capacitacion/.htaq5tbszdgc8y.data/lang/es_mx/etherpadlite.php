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
 * Strings for component 'etherpadlite', language 'es_mx', version '4.4'.
 *
 * @package     etherpadlite
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclose'] = 'Permitir editar hasta';
$string['activityopen'] = 'Permitir editar desde';
$string['activityopenclose'] = 'Permitir editar desde/hasta';
$string['activityopenclose_help'] = 'Si se activa, los estudiantes pueden editar el etherpad solamente en el período especificado.';
$string['adminguests'] = '¿Se les permite escribir a los invitados?';
$string['adminguestsdesc'] = 'Con esta configuración, los usuarios que tienen permitido configurar un módulo específico de etherpadlite pueden  permitirles a los invitados escribir en este módulo etherpadlite específico';
$string['apikey'] = 'Clave API';
$string['apikeydesc'] = 'Esta es la clave API que necesita este módulo para comunicarse con su servidor etherpadlite. Esta clave API es guardada en su servidor etherpadlite y puede copiarse desde allí.';
$string['apiversion'] = 'Versión de API';
$string['apiversiondesc'] = 'La versión predeterminada es "1.2". ¡ Usted debería usar la versión  "1.1" solamente si usted usa una versión muy antigua del servidor etherpad lite !';
$string['checkssl'] = 'Verificar certificado HTTPS';
$string['checkssldesc'] = 'Con esto configurado, el certificado HTTPS del servidor etherpadlite será revisado, para prevenir ataques de \'hombre-de-enmedio\' (man-in-the-middle)';
$string['connecttimeout'] = 'Timeout de conexión';
$string['cookiedomain'] = 'Dominio de Cookie';
$string['cookiedomaindesc'] = 'Aquí puede Usted escribir el dominio, que debería de  almacenarse en la \'\'cookie\'\' de la sesión, para que la reconozca el servidor etherpadlite. Cuando Moodle corre en el dominio moodle.ejemplo.com y su servidor etherpadlite en etherpadlite.ejemplo.com, entonces su dominio de la \'\'cookie\'\' debería ser .ejemplo.com';
$string['cookietime'] = 'Tiempo de sesión transcurrido';
$string['cookietimedesc'] = 'Aquí tiene Usted que poner el tiempo (en segundos) hasta que la sesión de etherpadlite sea válida';
$string['copylink'] = 'Copiar enlace del pad';
$string['copylinkdesc'] = 'Añadir un botón a las configuraciones de navegación del módulo, que les permite a los profesores y mánagers obtener fácilmente el enlace completo para el pad actual.';
$string['deletein24hours'] = '24 horas';
$string['deleteinonehour'] = '1 hora';
$string['deleteintwelvehours'] = '12 horas';
$string['deletemgroupads'] = 'Eliminar pads de grupos Moodle en';
$string['deletemgroupadsdesc'] = 'Eliminar todos los pads de grupos en asociación con el modo de grupo de Moodle';
$string['deletenow'] = 'Inmediatamente';
$string['donotdelete'] = 'No eliminar';
$string['error_config_has_no_api_key'] = '¡La clave API aun no está configurada! ¡Por favor revise su configuración!';
$string['error_config_has_no_valid_baseurl'] = '¡La URL del servidor configurado no es válida! ¡Por favor revise su configuración!';
$string['error_could_not_get_api_version'] = '¡El servidor Moodle no pudo obtener la versión API! Su servidor Moodle podría no poder conectarse al servidor Etherpad. ¡Por favor revise su configuración!';
$string['error_invalid_api_key'] = '¡La clave API no es válida! ¡Por favor revise su configuración!';
$string['error_wrong_api_version'] = '¡La versión API no es compatible! ¡Por favor compruebe la versión de su servidor Etherpad!';
$string['etherpadlite'] = 'Etherpad Lite';
$string['etherpadlite:addinstance'] = 'Añadir nueva pad';
$string['etherpadlite_link_copied_to_clipboard'] = 'El enlace al etherpad fue copiado a su portapapeles.';
$string['etherpadliteintro'] = 'Introducción a Etherpadlite';
$string['etherpadlitename'] = 'Nombre de Etherpadlite';
$string['fullscreen'] = 'Pantalla completa';
$string['guestsallowed'] = '¿Se les permite escribir a los invitados?';
$string['guestsallowed_help'] = 'Esto determina si es que a los invitados se les permite escribir en este pad. En caso contrario, solamente podrán leer el contenido del pad.';
$string['ignoresecurity'] = 'Ignorar seguridad';
$string['ignoresecuritydesc'] = 'Si usted activa esto, la URL será permitida a pesar de la configuración para "lista de hosts cURL bloqueados" (vea: curlsecurityblockedhosts).';
$string['link_copied'] = '¡Enlace copiado!';
$string['minwidth'] = 'Ancho mínimo';
$string['minwidthdesc'] = 'Si no quiere un etherpad muy pequeño en dispositivos pequeños como teléfonos celulares, Usted puede configurar un ancho mínimo que conservará el pad.';
$string['modulename'] = 'Etherpad Lite';
$string['modulename_help'] = 'El módulo de Etherpad Lite le permite a  los estudiantes y a los profesores escribir texto en una forma colaborativa. El texto es automáticamente sincronizado confome se escribe.

(El servidor etherpad lite, que está detrás de este módulo, todavía está en etapa beta. Por esto podrían ocurrir problemas en raras circunstancias, pero no se les espera)';
$string['modulenameplural'] = 'Etherpad Lites';
$string['padname'] = 'Padname para todas las instancias';
$string['padnamedesc'] = 'Un padname general puede ser útil, si Usted quiere encontrar todas las pads de esta instalación Moodle en su servidor etherpadlite. Los grupos pads son generados automáticamente.';
$string['pluginadministration'] = 'Administración de Etherpad Lite';
$string['pluginname'] = 'Etherpad Lite';
$string['privacy:metadata'] = 'El plugin Etherpadlite no almacena ningún dato personal.';
$string['resetting_data'] = 'Reiniciar datos de Etherpad Lite';
$string['restorewindowsize'] = 'Restaurar tamaño de pantalla';
$string['ssl'] = 'Redirección HTTPS';
$string['ssldesc'] = 'Con esta configuración, su sitio se redireccionará a sí mismo hacia HTTPS si se abre un etherpadlite (atractivo visual para el usuario)';
$string['summaryguest'] = 'Usted está ingresado como invitado. Por esto Usted solamente puede ver la versión de solo-lectura de este Pad. Re-cargue la página para ver cambios nuevos.';
$string['timeout'] = 'Timeout';
$string['url'] = 'URL del servidor';
$string['urldesc'] = 'Esta es la URL de su servidor Etherpadlite en el formato:http[s]://host[:port]/[subDir/]';
$string['urlisblocked'] = 'El host actual "{$a}" está bloqueado';
$string['urlisblocked_but_ignored'] = 'El host actual "{$a}" está bloqueado, pero "ignoresecurity" está activado.';
$string['urlnotset'] = 'La URL del servidor etherpad no está configurada pára este sitio';
