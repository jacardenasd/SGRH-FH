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
 * Strings for component 'datafield_regex', language 'es_mx', version '4.4'.
 *
 * @package     datafield_regex
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['casesensitive'] = 'MAYÚSCULAS/minúsculas si importan';
$string['casesensitive_note'] = 'Compruebe si es que quiere que MAYÚSCULAS/minúsculas si importen. Lo predeterminado para todos los casos es que SI importen.';
$string['custom_err'] = 'Mensaje de error personalizado';
$string['custom_err_note'] = 'Mostrar este mensaje de error personalizado en lugar de uno genérico, cuando lo ingresado no coincida con la expresión regular. Esto puede ser una pista para explicar brevemente el ingreso que se espera. Aquí se pueden usar marcas (tags) de idioma.';
$string['err_input'] = 'Lo que usted ingresó no coincide con el patrón esperado.';
$string['fieldtypelabel'] = 'Expresión regular';
$string['partialmatch'] = 'Solamente concordancia parcial';
$string['partialmatch_note'] = 'De forma predeterminada la entrada completa debe coincidir con la expresión regular. Las anclas de línea  ^ y $ son usadas para hacer coincidir desde el principio hasta el fin. Al activar esto, la coincidencia sería solamente parcial, sin las anclas de línea.';
$string['pluginname'] = 'Regex';
$string['privacy:metadata'] = 'El plugin datafield regex no almacena ningún dato personal; usa tablas definidas en mod_data.';
$string['regex_empty'] = 'Expresión regular está vacía';
$string['regex_invalid'] = 'Expresión regular es inválida';
$string['regex_note'] = 'Por favor ingrese el regex sin ningún caracter delimitado (como /) al principio y al final de la expresión.';
