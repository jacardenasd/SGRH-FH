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
 * Strings for component 'qformat_gift_guessit', language 'es_mx', version '4.4'.
 *
 * @package     qformat_gift_guessit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['braceerror'] = 'No se pudo encontrar un par de {...} alrededor de la(s) palabra(s) a adivinar -> {$a}';
$string['bracketserror'] = 'Corchetes cuadrados incorrectamente coincidentes en esta pregunta -> {$a}';
$string['giftnovalidquestion'] = 'eHay un error en el formato de su pregunta de Guessit. Consulta la documentación.';
$string['nbtrieserror'] = 'Número de intentos {$a->nbtries} no está en el rango correcto: 6, 8, 10, 12, 14 -> {$a->line}';
$string['nodescriptionprovided'] = 'No se proporcionó ninguna descripción para la pregunta n°{$a->questionnumber} -> {$a->questionname}';
$string['noguessitgaps'] = 'No se pudieron encontrar las palabras para adivinar en la pregunta -> {$a}';
$string['noname'] = 'No se proporcionó ningún nombre o los dos puntos están mal formateados para esta pregunta -> {$a}';
$string['pluginname'] = 'Formato GIFT a guessit';
$string['pluginname_help'] = 'El Formato GIFT a guessit permite que las preguntas guessit sean importadas desde un archivo de texto.';
$string['pluginname_link'] = 'qformat/gift_guessit';
$string['privacy:metadata'] = 'El plugin del formato GIFT a guessit no almacena ningún dato personal.';
$string['wordlecapitalsonly'] = '¡ERROR! En la opción Wordle, debe escribir una sola palabra y usar solo MAYÚSCULAS (A-Z) y sin acentos -> {$a}';
$string['wordletoolong'] = '¡Demasiado largo! ¡ERROR! En la opción Wordle, el límite de palabras es de 8 caracteres. -> {$a}';
