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
 * Strings for component 'local_csp', language 'es_mx', version '4.4'.
 *
 * @package     local_csp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['areyousuretodeleteallrecords'] = '¿Está Usted seguro de querer eliminar todos los registros de reporte CSP?';
$string['areyousuretodeleteonerecord'] = '¿Está Usted seguro de querer eliminar este registro de reporte CSP?';
$string['blockeddomain'] = 'Dominio';
$string['blockeduri'] = 'URI bloqueada';
$string['blockedurlpaths'] = 'Rutas bloqueadas';
$string['configurecspheader'] = 'Configurar encabezado CSP';
$string['csp:seenotifications'] = 'Ver notificaciones relacionadas con CSP';
$string['cspdirectives'] = 'Directivas CSP';
$string['cspdirectivesinfo'] = '<p>Ejemplo de directivas CSP (por favor refiérase al enlace superior para la sintaxis exacta):<br /><span style="color:#00acdf">script-src https:; style-src cdn.example.com; default-src \'self\';</span></p>';
$string['cspheaderdefault'] = 'default-src https:;\\nscript-src \'self\' \'unsafe-inline\' \'unsafe-eval\';\\nfont-src https: datos:;\\nstyle-src https: \'unsafe-inline\';\\nimg-src https: datos:;';
$string['cspheaderenable'] = 'Habilitar encabezado CSP';
$string['cspheaderenabledescription'] = 'Activar esta casilla para habilitar encabezados CSP';
$string['cspheaderenforce'] = 'Política-de-Seguridad-del-Contenido';
$string['cspheaderenforcing'] = 'Política-de-Seguridad-del-Contenido';
$string['cspheaderenforcinghelp'] = 'Forzar a  los navegadores a que sigan directivas CSP; por ejemplo, bloquear la carga de contenido inseguro';
$string['cspheaderreporting'] = 'Política-de-Seguridad-del-Contenido-Solamente-Reporte';
$string['cspheaderreportinghelp'] = 'Monitorear y reportar violaciones CSP';
$string['csphttpresponseheader'] = 'Encabezado de respuesta CSP HTTP';
$string['cspreports'] = 'Reportes de violación CSP';
$string['cspsettings'] = 'Configuraciones de política de seguridad del contenido';
$string['cspsettingsinfo'] = '<p>CSP (Política de Seguridad del Contenido) funciona al añadirle un encabezado de respuesta a cada página de Moodle. Los navegadores modernos, cuando ven este encabezado, pueden realizar ciertas acciones, como por ejemplo  bloquear contenido inseguro en dichas páginas. Por favor, lea más al respecto de CSP <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP">aquí</a>.</p><p>Si Usted deja vacía alguna de estas configuraciones, no se usarán encabezados CSP.</p>';
$string['documenturi'] = 'Violación en';
$string['enablefeaturepolicy'] = 'Habilitar encabezado de Política-Característica';
$string['enablefeaturepolicydescription'] = 'enviar un encabezado de política de característica como parte de los encabezados enviados del plugin. Este encabezado controla cuales características del navegador están permitidas que sean accesadas por elementos DOM.';
$string['failcounter'] = '#';
$string['featurepolicydescription'] = 'Escriba la política de característica a ser enviada. Añada una entrada por línea, terminando con un punto y coma. Por ejemplo <pre> microphone \'none\'; </pre>';
$string['highestviolaters'] = 'Orígenes Superiores de Violación';
$string['invalidblockeduri'] = 'URI Bloqueada Inválida: {$a}';
$string['loaddata'] = 'Cargar datos';
$string['loadexternaljavascript'] = 'Cargar JavaScript externo desde {$a}';
$string['loadingmixedcontentdescription'] = 'Al acceder a sitios web Moodle via HTTPS, el navegador prohibe el mostrar los recursos debajo porque se originan desde HTTP.<br />Usted debería de poder verlo en su consola JavaScript de su navegador.';
$string['loadinsecurecss'] = 'Cargar CSS inseguro desde {$a}';
$string['loadinsecureiframe'] = 'Cargar iframe inseguro con HTML desde {$a}';
$string['loadinsecureimage'] = 'Cargar imagen insegura desde {$a}';
$string['loadinsecurejavascript'] = 'Cargar JavaScript inseguro desde {$a}';
$string['localcspheadingdirectives'] = 'Configurar directivas CSP';
$string['localcspheadinghttpresponseheader'] = 'Elegir encabezado de respuesta CSP HTTP';
$string['merge_duplicate_records_task'] = 'Trabajo de juntar registros local_csp duplicados';
$string['mixedcontentexamples'] = 'Ejemplos de contenido mixto';
$string['nonduplicaterecords'] = 'Los registros no duplicados no pueden ser juntados';
$string['norecordsfound'] = 'No se encontraron registros';
$string['notificationenforcedheader'] = '¡Contenido inseguro bloqueado!';
$string['notificationenforcedsources'] = 'El contenido de los orígenes siguientes ha sido bloqueado automáticamente:';
$string['notificationenforcedstart'] = 'Esta página contiene contenido incrstado que violaba la política de seguridad.';
$string['notificationreportedheader'] = '¡Contenido potencialmente inseguro reportado!';
$string['notificationreportedsources'] = 'Contenido de los orígenes siguientes fue reportado a los administradores:';
$string['notificationreportedstart'] = 'Esta página contiene contnido incrustado que los administradores consideran potencialmente inseguro.';
$string['notificationsenableenforced'] = 'Notificar al aplicarse';
$string['notificationsenableenforceddescription'] = 'Mostrar una notificación al usuario, cundo el CSP es aplicado en la página visitada, enlistando todas las URIs en esa página.';
$string['notificationsenablereported'] = 'Notificar al reportarlo';
$string['notificationsenablereporteddescription'] = 'Mostrar una notificación al usuario, cuando el CSP-Solamente-Reporte es disparado en la página visitada, enlistando las URIs en cuestión.';
$string['pluginname'] = 'Política de Seguridad del Contenido';
$string['privacy:metadata'] = 'El plugin CSP no contiene datos específicos del usuario.';
$string['reset'] = 'Re-iniciar';
$string['resetallcspstatistics'] = 'Re-iniciar todas las estadísticas';
$string['scspheadernone'] = 'No usado';
$string['timeupdated'] = 'Último';
$string['violateddirective'] = 'Política';
