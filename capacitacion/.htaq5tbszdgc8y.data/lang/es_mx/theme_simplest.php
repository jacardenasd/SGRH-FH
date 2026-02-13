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
 * Strings for component 'theme_simplest', language 'es_mx', version '4.4'.
 *
 * @package     theme_simplest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backgroundimage'] = 'Imagen del fondo';
$string['backgroundimage_desc'] = 'La imagen a mostrar como un fondo del sitio. La imagen del fondo que usted suba aquí anulará la imagen del fondo en sus archivos de preconfiguración del tema.';
$string['brandcolor'] = 'Color de la marca';
$string['brandcolor_desc'] = 'Color del acento';
$string['change_style'] = 'Cambiar estilo del tema';
$string['choosereadme'] = 'El tema MásSimple  es un tema hijo del Clásico.';
$string['configtitle'] = 'MásSimple';
$string['disableinspirationalquotes'] = 'Deshabilitar el bloque de citas';
$string['disableinspirationalquotesdesc'] = 'Activar esta casilla deshabilitará el bloque de citas';
$string['enddate'] = 'Fecha final';
$string['enddate_desc'] = 'Fecha de cuando el estilo será deshabilitado.';
$string['errordate'] = 'fecha incorrecta. Usted tiene que escribir la fecha en el formato  AAAA-MM-DD como por ejemplo 2022-03-17.';
$string['errormonth'] = 'Número incorrecto de días. Este mes del año {$a->year} solamente tiene {$a->days} días.';
$string['generalsettings'] = 'Configuraciones generales';
$string['inspirationalquotes'] = 'Citas inspiracionales';
$string['inspirationalquotesdef'] = 'Una computadora merecería llamarse inteligente si pudiera engañar a un humano haciéndole creer que es un humano|es|Alan Turing
Una falta de voluntad para admitir la posibilidad de que la humanidad pueda tener rivales en potencia intelectual. Esto ocurre tanto entre los intelectuales como entre otros: tienen más que perder.
El razonamiento matemático puede considerarse de forma bastante esquemática como el ejercicio de una combinación de dos facilidades, que podemos llamar intuición e ingenio.
Un joven, en matemáticas, no entiende muchas cosas. Ellos simplemente se acostumbras a ellas|es|John von neumann
La idea que hay detrás de las computadors digitales puede explicarse diciendo que estas máquinas están pensadas para realizar cualquier operación que podría hacer un ordenador humano.|es|Alan Turing
Yo no temo tanto a la inteligencia artificial como a la estupidez natural.
los ordenadores serán capaces de leer a nivel humano en 2029 y también empezarán a tener características humanas diferentes,|es|Raymond Kurzweil
la inteligencia artificial es mucho más peligrosa que las armas nucleares.
Las computadoras superarán a los humanos con la IA en algún momento dentro de los próximos 100 años.
El éxito en la creación de la IA sería el mayor acontecimiento de la historia de la humanidad. Por desgracia, también podría ser el último, a menos que aprendamos a evitar los riesgos.
Yo imagino un mundo en el que la IA nos hará trabajar de forma más productiva, vivir más tiempo y tener una energía más limpia.';
$string['inspirationalquotesdesc'] = 'Cada frase debe estar en una nueva línea.<br>
¡Intente tener frases que no sean demasiado largas!
<br>Adicionalmente, usted puede añadir después del signo de barra vertical "<strong>|</strong>" marcas (tags) que extienden la cita a ser mostrada en un idioma específico y autor de la frase.
<br> Ejemplo:
<br><div style="border:solid 1px #DEDEDE;background:#f8f9fa;color:#222222;padding:4px;"><pre>
<br>Primera frase.<strong>|</strong>en<strong>|</strong>Joel de Rosnay
<br>Primera frase en polaco.<strong>|</strong>pl<strong>|</strong>Joel de Rosnay
<br>Segunda frase, sin autor.<strong>|</strong>en
<br>Frase para todos los idiomas.<strong>||</strong>Joel de Rosnay</pre></div>
<br> Su plataforma soporta los idiomas: <strong> {$a} </strong>';
$string['inspirationalquotesduration'] = 'Duración de citas';
$string['inspirationalquotesdurationdesc'] = 'Duración de citas visibles';
$string['inspirationalquotessettings'] = 'Configuraciones de citas inspiracionales';
$string['limitedbydate'] = 'Habilitar estilo limitado por fecha';
$string['limitedbydate_desc'] = 'Habilita el estilo dado en la fecha especificada. Después de este tiempo, revierte al estilo predeterminado.';
$string['madeby'] = 'Hecha por';
$string['navbardark'] = 'Usar una Barra de Navegación de estilo oscuro';
$string['navbardark_desc'] = 'Intercambia colores de texto y fondo para la barra de navegación en la parte superior de la página entre oscuro y claro.';
$string['othersettings'] = 'Otras configuraciones';
$string['pluginname'] = 'MásSimple';
$string['preset'] = 'Preconfiguración del tema';
$string['preset:christmas'] = 'Navidad';
$string['preset:default'] = 'Predeterminado';
$string['preset:easter'] = 'Pascua';
$string['preset:mourning'] = 'Duelo';
$string['preset:spring'] = 'Primavera';
$string['preset:valentinesday'] = 'Día de san Valentín';
$string['preset_desc'] = 'elegir una preconfiguración para cambiar ampliamente el aspecto del tema.';
$string['presettemporary'] = 'Estilo temporal';
$string['presettemporary_desc'] = 'Seleccionar el estilo que será configurado en el período de tiempo dado.';
$string['privacy:metadata'] = 'El tema MásSimple no almacena ningún dato personal.';
$string['rawscss'] = 'SCSS crudo';
$string['rawscss_desc'] = 'Use este campo para proporcionar código CSSo SCSS que será inyectado al final de la hoja de estilo.';
$string['rawscsspre'] = 'SCSS crudo inicial';
$string['rawscsspre_desc'] = 'En este campo usted puede proporcionar código inicializador SCSS, el cual será inyectado';
$string['redir'] = 'Redireccionar a curso';
$string['redir_desc'] = 'Redireccionar inmediatamente al curso si el usuario está inscrito en alguno.';
$string['region-side-post'] = 'Derecha';
$string['region-side-pre'] = 'Izquierda';
$string['reportbug'] = '¿Has encontrado un error en el tema? ¡Notifícalo!';
$string['settingsother'] = 'Otras configuraciones';
$string['settingspresettemporary'] = 'Configuraciones temporales de preconfiguración:';
$string['simpleusermenu'] = 'Simplificación del menú del usuario';
$string['simpleusermenu_desc'] = 'Oculta enlace a perfil y Tablero. Añade un enlace para cambiar la contraseña.';
$string['startdate'] = 'Fecha de inicio';
$string['startdate_desc'] = 'Fecha de cuando el estilo será habilitado.';
