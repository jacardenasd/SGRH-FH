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
 * Strings for component 'qbank_statistics', language 'es_mx', version '4.4'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = '¿Necesita revisarse?';
$string['discrimination_index_help'] = 'Una pregunta está indicada como que es probable que necesite comprobarse basándose en las estadísticas de la pregunta. Por ejemplo, si los estudiantes obtienen un puntaje bajo en la pregunta pero un puntaje alto en el examen completo, entonces podría haber un problema con la pregunta, como por ejemplo que esté señalada como correcta una respuesta incorrecta. Aunque las estadísticas no son infalibles, esto es meramente una pista de que la pregunta debería de comprobarse.';
$string['discriminative_efficiency'] = 'Eficiencia discriminativa';
$string['discriminative_efficiency_help'] = 'La eficiencia discriminativa es un estimado estadístico sobre que tan bien la pregunta valora a los estudiantes, donde un valor mayor es mejor. Un resultado particularmente bajo puede indicar un problema con la pregunta. Una pregunta muy difícil o muy fácil (con un índice de facilidad cercano a 0% o 100%) también puede conducir a un valor bajo.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Índice de facilidad';
$string['facility_index_help'] = 'El índice de facilidad da la calificación promedio (como un porcentaje) obtenida en la pregunta (todas las versiones) en todos los exámenes en donde la pregunta hubiera sido intentada. Un valor más alto normalmente indica un pregunta más fácil.';
$string['likely'] = 'Probablemente';
$string['na'] = 'N/D';
$string['pluginname'] = 'Estadísticas de pregunta';
$string['privacy:metadata'] = 'El plugin de Estadísticas de preguntas del banco de preguntas no almacena ningún dato personal.';
$string['unlikely'] = 'Improbablemente';
$string['verylikely'] = 'Muy probablemente';
