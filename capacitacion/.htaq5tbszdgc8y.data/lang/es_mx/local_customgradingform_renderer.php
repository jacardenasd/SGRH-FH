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
 * Strings for component 'local_customgradingform_renderer', language 'es_mx', version '4.4'.
 *
 * @package     local_customgradingform_renderer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choosecsvfile'] = 'Elegir archivo CSV';
$string['csvinvalidcharsfound'] = 'Los campos requieren valores separados por comas sin caracteres no válidos. No incluya comillas dobles ("), comas adicionales (,) ni punto y coma (;) dentro de los campos.';
$string['csvinvalidcharslist_simple'] = 'Líneas con problemas:';
$string['csvlineonly'] = 'Línea {$a}';
$string['csvmissingcolumns'] = 'El archivo CSV debe contener columnas: criterio, nivel, descripción del nivel y puntaje.';
$string['csvrequired'] = 'Debe seleccionar un archivo CSV válido.';
$string['customgradingform_renderer:import'] = 'Permite al usuario importar rúbricas de calificación desde un archivo CSV a una actividad.';
$string['enablemaxlevelscore'] = 'Habilitar la validación de puntaje máximo.';
$string['enablemaxlevelscore_desc'] = 'Si está habilitado, el sistema validará que ningún nivel exceda el valor máximo configurado.';
$string['enableminlevelscore'] = 'Habilitar la validación de puntaje mínimo.';
$string['enableminlevelscore_desc'] = 'Si está habilitado, el sistema validará que al menos un nivel tenga el puntaje mínimo configurado.';
$string['errormaxexceeded'] = '⚠️ Error: El puntaje {$a->score} en el criterio {$a->criterion} excede el máximo permitido de {$a->max}.';
$string['errorminmissing'] = '⚠️ Error: La suma de los niveles más altos es {$a->sum}, pero la calificación máxima de la actividad es {$a->grademax}.';
$string['errormismatchtotal'] = '⚠️ Error: La suma de los niveles más altos es {$a->sum}, pero la calificación máxima de la actividad es {$a->grademax}.';
$string['errorrepeatedscores'] = '⚠️ Error: El criterio {$a} tiene puntuaciones de nivel repetidas. Cada nivel debe tener una puntuación única.';
$string['errorrubricexists'] = '⚠️ Ya hay una rúbrica definida para esta actividad. No puede importar otra.';
$string['fileopenerror'] = 'No se pudo abrir el archivo CSV';
$string['importedrubricname'] = 'Rúbrica Importada ({$a})';
$string['importerror'] = 'Ocurrió un error al importar la rúbrica.';
$string['importfromcsv'] = 'Importar rúbrica desde CSV';
$string['importsuccess'] = 'Rúbrica importada exitosamente';
$string['invalidcsvformat'] = 'Formato CSV no válido. Solo se permiten archivos .csv de texto.';
$string['maxlevelscore'] = 'Máximo puntaje por nivel';
$string['maxlevelscore_desc'] = 'Define el puntaje máximo permitido para cada nivel de evaluación dentro de un criterio. Si algún nivel del archivo CSV supera este valor, se mostrará un error durante la importación.';
$string['minlevelscore'] = 'Máximo puntaje por nivel';
$string['minlevelscore_desc'] = 'Puntaje mínimo permitido para un nivel. Normalmente es 0.';
$string['pluginname'] = 'Núcleo delImportador de Rúbrica';
$string['privacy:metadata'] = 'este plugin no almacena ningún dato personal del usuario.';
$string['rubricalreadydefined'] = '⚠️ Ya se ha definido una rúbrica para esta actividad. No se permite importar una nueva.';
$string['submitcsv'] = 'Importar rúbrica';
