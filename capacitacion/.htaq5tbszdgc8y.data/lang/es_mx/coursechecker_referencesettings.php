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
 * Strings for component 'coursechecker_referencesettings', language 'es_mx', version '4.4'.
 *
 * @package     coursechecker_referencesettings
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Revisión de configuraciones de referencia';
$string['pluginname_help'] = 'Este plugin compara las configuraciones generales del curso (como categoría, formato, idioma, filtros y opciones de formato) del curso actual con las de un curso de referencia.';
$string['privacy:metadata'] = 'La revisión de configuraciones de referencia no almacena datos personales. Los resultados de la revisión se guardan en el plugin course checker.';
$string['referencefilter_comparison'] = '(Curso de referencia: "{$a->filtervaluereference}" | Curso actual: "{$a->filtervaluecurrent}")';
$string['referencefilter_enabled'] = 'Revisión de filtros de configuraciones de referencia habilitada';
$string['referencefilter_enabled_help'] = 'Habilite esto para comparar todos los filtros del curso con el curso de referencia.';
$string['referencefilter_failing'] = 'El filtro "{$a->filterkey}" no es correcto {$a->comparison}';
$string['referencefilter_filternotsetincurrentcourse'] = 'El filtro "{$a->filterkey}" está ausente en el curso actual.';
$string['referencefilter_success'] = 'Todos los filtros están configurados correctamente en el curso actual';
$string['referenceformatoptions_enabled'] = 'Revisión de opciones de formato de configuraciones de referencia habilitada';
$string['referenceformatoptions_enabled_help'] = 'Habilite esto para comparar todas las opciones de formato del curso con el curso de referencia.';
$string['referenceformatoptions_failing'] = 'La opción de formato "{$a->optionkey}" no es correcta {$a->comparison}';
$string['referenceformatoptions_success'] = 'Todas las opciones de formato están configuradas correctamente en el curso actual';
$string['referencesettings_checklist'] = 'Lista de cotejo de configuraciones del curso de referencia';
$string['referencesettings_checklist_help'] = 'Por favor seleccione una o varias configuraciones para comparar con el curso de referencia.';
$string['referencesettings_comparison'] = '(Curso de referencia: "{$a->settingvaluereference}" | Curso actual: "{$a->settingvaluecurrent}")';
$string['referencesettings_failing'] = 'La configuración "{$a->setting}" no es correcta {$a->comparison}';
$string['referencesettings_settingismissing'] = 'La configuración "{$a->setting}" no es una configuración de curso.';
$string['referencesettings_success'] = 'La configuración "{$a->setting}" es correcta';
