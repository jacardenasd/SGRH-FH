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
 * Strings for component 'wordcloud', language 'es_mx', version '4.4'.
 *
 * @package     wordcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclose'] = 'Fecha esperada';
$string['activityclose_help'] = 'Si se habilita, los estudiantes no podrán enviar palabras después de esta fecha. Si se deshabilita, es posible enviar en cualquier momento.';
$string['activityopen'] = 'Permitir envíos a partir de';
$string['activityopen_help'] = 'Si se habilita, los estudiantes no podrán enviar palabras antes de esta fecha. Si se deshabilita, es posible enviar de inmediato..';
$string['appearance'] = 'Apariencia';
$string['close'] = 'Cierra:';
$string['closebeforeopen'] = 'No se pudo actualizar la nubedepalabras. Usted ha especificado una fecha de cierre anterior a la de apertura.';
$string['cloud'] = 'Nubedepalabras';
$string['cloudvisibility'] = 'Visibilidad de palabras enviadas';
$string['cloudvisibility_help'] = 'Aquí puede usted definir cómo deberían ser mostradas las palabras de la nube de palabras para los participantes: * En cualquier momento.- Las palabras son visibles en cualquier momento y sin restricciones. * Solamente después del envío propio.- Las palabras solamente son visibles después que el participante ha enviado al menos 1 palabra. * Solamente después de la fecha esperada.- Las palabras solamente son visibles cuando la fecha esperada ha pasado.';
$string['color_custom'] = 'Personalizado';
$string['completiondetail:submits'] = 'Enviar palabras: {$a}';
$string['completionsubmits'] = 'El estudiante debe enviar al menos el siguiente número de palabras.';
$string['completionsubmits_help'] = '';
$string['completionsubmitsgroup'] = 'Requerir envío';
$string['count'] = 'Número';
$string['editentry'] = 'Editar palabras';
$string['errormonocolorhex'] = '¡El valor no es una representación hexadecimal de un color!';
$string['errortoomanywords'] = '¡Se alcanzó el número máximo de palabras!';
$string['errorupdateentries'] = 'Las palabras siguientes no pudieron ser actualizadas';
$string['errorwordoverflow'] = '¡La entrada nueva es demasiado larga!';
$string['export'] = 'Exportar como ...';
$string['exportcsv'] = 'Exportar CSV';
$string['exportdefault'] = 'Exportar';
$string['exportpng'] = 'Exportar PNG';
$string['fontcolor'] = 'Textcolor {$a}';
$string['fontcolordesc'] = 'Configurar el textcolor {$a}. Defina los valores de color como código hexadecimal. Las palabras solamente serán coloreadas cuando todos los textcolors estén configurados.';
$string['fullscreen'] = 'Pantalla Completa';
$string['list'] = 'Lista';
$string['modulename'] = 'Wordcloud (NubedePalabras)';
$string['modulename_help'] = 'Este módulo le permite a los profesores visualizar una lista de marcas como una nube de palabras. La importancia de una marca es mostrada con el tamaño de las letras, de acuerdo al número de menciones.';
$string['modulenameplural'] = 'Wordclouds';
$string['monocolor'] = 'Color base';
$string['monocolor_help'] = 'Elegir uno de los colores definidos en las configuraciones de administración para el esquema de colores mono-coloreado.';
$string['monocolor_hex'] = 'Color personalizado';
$string['monocolor_hex_help'] = 'Por favor escriba un calor  hexadecimal de seis dígitos del monocolor en el formato  "aabb11" (sin el "#").';
$string['monocolordesc'] = 'Configurar un color para las palabras en nubedepalabras. El sistema entonces calcula 6 colores con diferentes valores de claridad. Defina los valores de colores como código hexadecimal sin el #.';
$string['notification'] = 'Por favor seleccione un grupo para enviar una palabra';
$string['open'] = 'Abre:';
$string['pagetitle'] = 'Moodle Wordcloud';
$string['pluginadministration'] = 'Administración de Wordcloud';
$string['pluginname'] = 'Wordcloud (NubedePalabras)';
$string['privacy:metadata'] = 'El plugin Wordcloud no almacena ningún dato personal.';
$string['refreshtext'] = 'Refrescar la página para obtener la versión más reciente de contenido de nubedepalabras';
$string['refreshtime'] = 'Tiempo de refreco';
$string['refreshtimedesc'] = 'Configurar el tiempo del intervalo de auto refrescar en segundos';
$string['removewordcheck'] = '¿Seguro que quiere quitar la palabra\'{$a}\' de esta actividad de nubedepalabras?';
$string['saved'] = 'Guardado';
$string['submitbtn'] = 'Enviar';
$string['submittedwords'] = 'Palabra enviada:';
$string['textbox'] = 'Añada aquí una palabra...';
$string['timing'] = 'Disponibilidad';
$string['usemonocolor'] = 'Esquema de color';
$string['usemonocolor_help'] = 'Usar un esquema de un color para esta nubedepalabras. Todas las palabras tendrán el mismo color; las palabras con un diferente número de ocurrencias tendrán una luminosidad más clara o más oscura.';
$string['usemonocolor_random'] = 'coloreado aleatorio';
$string['usemonocolor_sequential'] = 'paleta de tonos secuenciales';
$string['userinfosubmit'] = '¡Las palabras son mostradas solamente después del envío!';
$string['userinfotime'] = '¡Las palabras son mostradas solamente después de la fecha limite del envío!';
$string['visibilityalways'] = 'En cualquier momento';
$string['visibilitysubmit'] = 'Solamente después del envío propio';
$string['visibilitytime'] = 'Solamente después de la fecha esperada';
$string['visibilitytimeerror'] = 'Esta opción solamente puede ser usada con una fecha esperada definida.';
$string['warning'] = 'Advertencia';
$string['warningdoubleentries'] = 'Se encontraron entradas idénticas en la lista. Si usted continúa, estas serán juntadas y los números sumados.<br /><br />LAs entradas siguientes NO son únicas:';
$string['word'] = 'Palabra';
$string['wordcloud:addinstance'] = 'Crear actividad Wordcloud';
$string['wordcloud:editentry'] = 'Editar palabras';
$string['wordcloud:submit'] = 'Enviar nuevas palabras';
$string['wordcloud:view'] = 'Ver la Wordcloud';
$string['wordcloudname'] = 'Nombre de actividad Wordcloud';
$string['wordlist'] = 'Listadepalabras';
