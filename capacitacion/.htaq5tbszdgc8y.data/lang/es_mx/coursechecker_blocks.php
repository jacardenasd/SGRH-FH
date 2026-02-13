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
 * Strings for component 'coursechecker_blocks', language 'es_mx', version '4.4'.
 *
 * @package     coursechecker_blocks
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blocks_activity'] = 'Bloque "{$a->name}"';
$string['blocks_comparison'] = '(Curso de referencia: "{$a->valuereference}" | Curso actual: "{$a->valuecurrent}")';
$string['blocks_error'] = 'El bloque está presente por error o falta en el curso actual.';
$string['blocks_setting'] = 'Bloques habilitados';
$string['blocks_setting_help'] = 'Defina los bloques permitidos (deben estar habilitados en <a href="{$a}" target="_blank">Gestionar bloques</a>) para ser revisados.';
$string['blocks_success'] = 'El bloque está insertado correctamente en el curso actual.';
$string['pluginname'] = 'Revisión de bloques';
$string['pluginname_help'] = 'Este plugin compara los bloques habilitados en un curso con los de un curso de referencia para garantizar un diseño de bloques consistente. Verifica bloques faltantes o incorrectos y ayuda a mantener una estructura de curso estandarizada en toda la plataforma.';
$string['privacy:metadata'] = 'La revisión de bloques no almacena datos personales. Los resultados de la revisión se guardan en el plugin course checker.';
