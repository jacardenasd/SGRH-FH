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
 * Strings for component 'coursechecker_subheadings', language 'es_mx', version '4.4'.
 *
 * @package     coursechecker_subheadings
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Revisión de subtítulos en etiquetas';
$string['pluginname_help'] = 'El Revisor de Subtítulos verifica que todos los recursos de etiqueta en un curso sigan estándares de formato consistentes.';
$string['privacy:metadata'] = 'La revisión de subtítulos en etiquetas no almacena datos personales. Los resultados de la revisión se guardan en el plugin course checker.';
$string['subheadings_generalerror'] = 'Hubo un problema al ejecutar esta revisión';
$string['subheadings_iconmissing'] = 'Falta el ícono en la primera etiqueta HTML';
$string['subheadings_labelignored'] = 'Esta etiqueta es ignorada debido a la lista blanca en la configuración del plugin.';
$string['subheadings_setting_whitelist'] = 'Lista blanca de cadenas para el revisor de subtítulos';
$string['subheadings_setting_whitelist_help'] = 'Por favor añada una cadena por línea. Ejemplo: "Estimado(s) desarrollador(es) del módulo".';
$string['subheadings_success'] = 'Esta etiqueta tiene un buen subtítulo y un ícono';
$string['subheadings_wrongfirsthtmltag'] = 'La primera etiqueta HTML no es una {$a->htmltag}';
