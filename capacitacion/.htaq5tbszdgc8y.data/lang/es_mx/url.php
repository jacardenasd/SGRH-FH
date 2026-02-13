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
 * Strings for component 'url', language 'es_mx', version '4.4'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowvariables'] = 'Permitir variables URL';
$string['allowvariables_desc'] = 'Permitir que variables sean añadidas a URL. Las variables le permiten a usted pasar información interna, como por ejemplo el nombre del usuario, como parte del URL. Tenga presente los posibles riesgos de privacidad cuando se usa esta característica.';
$string['chooseavariable'] = 'Escoja una variable...';
$string['clicktoopen'] = 'Haga clic en {$a} para abrir el recurso.';
$string['configdisplayoptions'] = 'Seleccione todas las opciones que deben estar disponibles; los valores existentes no se modifican. Mantenga pulsada la tecla CTRL para seleccionar varios campos.';
$string['configframesize'] = 'Cuando una página web o un archivo subido se muestra dentro de un marco, este valor es la altura (en píxeles) del marco superior (el que contiene la barra de navegación).';
$string['configrolesinparams'] = 'Si es que los nombres de rol personalizados (de las configuraciones del curso) deberían de estar disponibles como variables para parámetros URL?';
$string['configsecretphrase'] = 'Esta frase secreta se utiliza para producir código cifrado válido que pueda ser enviado a algunos servidores como parámetro. El código de cifrado se produce por un valor md5 de la dirección IP del usuario actual concatenada con su frase secreta. Es decir, el código = md5 (IP.frase_secreta). Por favor tenga en cuenta que que esto no es fiable porque la dirección IP puede cambiar y a menudo es compartida por diferentes equipos.';
$string['contentheader'] = 'Contenido';
$string['createurl'] = 'Crear una URL';
$string['displayoptions'] = 'Opciones de visualización disponibles';
$string['displayselect'] = 'Mostrar';
$string['displayselect_help'] = 'Este parámetro, junto con el tipo de URL, y siempre que el navegador permita incorporar código, determina cómo se muestra la dirección URL. Las opciones pueden incluir:

 * Automático - Se selecciona de forma automática la mejor opción para visualizar la dirección URL

 * Incrustar - La URL se muestra dentro de la página debajo de la barra de navegación junto con la descripción y cualquier otro bloque

 * Abrir - Sólo se muestra la dirección en la ventana del navegador

 * En ventana emergente - La URL se muestra en una ventana nueva del navegador sin menús y sin barra de direcciones

 * En marco - La URL se muestra dentro de un marco debajo de la barra de navegación y la descripción de URL

 * Nueva ventana - La URL se muestra en una nueva ventana del navegador con menús y una barra de dirección';
$string['displayselectexplain'] = 'Elija el modo de visualización; por desgracia no todos los modos son adecuados para todas las direcciones URL.';
$string['externalurl'] = 'URL externa';
$string['framesize'] = 'Altura del marco';
$string['indicator:cognitivedepth'] = 'URL cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en un recurso URL.';
$string['indicator:cognitivedepthdef'] = 'LTI cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecidos por los recursos URL durante este intervalo de análisis (Niveles = Sin ver, Ver)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'URL social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en un recurso URL.';
$string['indicator:socialbreadthdef'] = 'URL social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por los recursos de URL durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'No puede mostrarse este recurso, la URL no es válida';
$string['invalidurl'] = 'La URL introducida no es válida';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'El módulo URL le permite al profesor proporcionar un enlace de internet para un recurso del curso. Cualquier cosa libremente disponible en línea, como documentos o imágenes, puede enlazarse a un URL y la URL de una página web en particular no requiere ser forzosamente la página principal del sitio web. Se puede copiar y pegar el URL de una página web en particular o un profesor podría emplear el selector de archivos de Moodle y elegir un enlace de un repositorio como Flickr, YouTube o Wikimedia (dependiendo de cuales repositorios están habilitados en el sitio).

Existen varias opciones de visualización para el URL, como incrustado, abrir en ventana nueva emergente y opciones avanzadas para pasar información, como el nombre del estudiante, si la URL lo necesitara.

Observe que las URLs también pueden añadirse a cualquier otro recurso o actividad mediante el editor de texto.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URLs';
$string['name'] = 'Nombre';
$string['name_help'] = 'Esto  servirá como el texto del enlace para la URL.

Escriba un texto sensato que describa en forma  concisa el propósito de la URL.

Evite usar la  palabra "enlace". Esto  ayudará a los usuarios de lectores de pantalla porque los lectores de pantalla anuncian  los enlaces  (por ejemplo. "Moodle.org, enlace") por lo que no hay necesidad de incluir la palabra "enlace" en el campo del nombre.';
$string['page-mod-url-x'] = 'Cualquier página del módulo URL';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'Variables de URL';
$string['parametersheader_help'] = 'Esta sección le permite pasar información interna como parte de la URL. Esto es útil si la URL es una página web interactiva que toma parámetros, y Usted quiere pasar algo, como por ejemplo el nombre del usuario actual. Escriba el nombre del parámetro de la URL en la caja de texto y después seleccione la variable del sitio correspondiente.';
$string['pluginadministration'] = 'Administración del módulo URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Altura de la ventanta emergente (en pixeles)';
$string['popupheightexplain'] = 'Especifica la altura por defecto de las ventanas emergentes.';
$string['popupwidth'] = 'Ancho de la ventana emergente (en pixeles)';
$string['popupwidthexplain'] = 'Especifica la anchura por defecto de las ventanas emergentes.';
$string['printintro'] = 'Mostrar la descripción de la URL';
$string['printintroexplain'] = '¿Mostrar la descripción URL debajo del contenido? Algunos tipos de visualización pueden no mostrar la descripción incluso aunque esté activada esa opción.';
$string['privacy:metadata'] = 'El plugin de Recurso URL no almacena ningún dato personal.';
$string['rolesinparams'] = 'Nombres de rol como variables de URL';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL del servidor';
$string['url:addinstance'] = 'Añadir un nuevo recurso URL';
$string['url:view'] = 'Mostrar URL';
