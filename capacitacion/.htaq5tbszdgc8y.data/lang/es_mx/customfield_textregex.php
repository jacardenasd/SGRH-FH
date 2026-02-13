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
 * Strings for component 'customfield_textregex', language 'es_mx', version '4.4'.
 *
 * @package     customfield_textregex
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['displaysize'] = 'Tamaño del formato para ingresar';
$string['errorconfigdefault'] = 'El valor predeterminado proporcionado no coincide con la expresión regular.';
$string['errorconfigdisplaysize'] = 'El Tamaño del formato para ingresar debe ser de entre 1 y 200 caracteres.';
$string['errorconfiglinkplaceholder'] = 'El enlace debe contener un reemplazable $$.';
$string['errorconfiglinksyntax'] = 'El enlace debe ser una URL válida que comience con http:// o https://.';
$string['errorconfigregex'] = 'El regex proporcionado no es un regex válido.';
$string['errorregex'] = 'El valor ingresado no coincide con el regex: {$a}';
$string['islink'] = 'Campo de enlace';
$string['islink_help'] = 'Para transformar el texto en un enlace, ingrese una URL que contenga $$ como reemplazable, donde $$ se reemplazará con el texto. Por ejemplo, para transformar una ID de Twitter en un enlace, ingrese https://twitter.com/$$.';
$string['linktarget'] = 'Destino del enlace';
$string['newwindow'] = 'Nueva ventana';
$string['none'] = 'Ninguno';
$string['pluginname'] = 'Texto breve con validación regex';
$string['privacy:metadata'] = 'El plugin del tipo de campo de texto breve con validación no almacena ningún dato personal; usa tablas definidas en el núcleo de Moodle.';
$string['regex'] = 'Expresión regular';
$string['regex_help'] = 'Expresión regular de estilo Perl para probar el valor del campo. La expresión regular debe alinearse con la configuración "requerida". Si no es obligatoria, la expresión regular también debe permitir un campo vacío. Y también eche un vistazo a la <a href="/admin/search.php?query=strictformsrequired">Configuración de rigurosidad</a>. Incluya también los delimitadores. Por ejemplo: \\"/^TEST[0-9A-F]{3}\\/\\$_postfix/\\".';
$string['sameframe'] = 'Mismo marco';
$string['samewindow'] = 'Misma ventana';
$string['specificsettings'] = 'Configuraciones del campo de texto breve con validación';
