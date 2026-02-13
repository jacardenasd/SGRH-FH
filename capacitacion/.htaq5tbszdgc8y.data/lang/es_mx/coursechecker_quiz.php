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
 * Strings for component 'coursechecker_quiz', language 'es_mx', version '4.4'.
 *
 * @package     coursechecker_quiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Revisión de cuestionarios';
$string['pluginname_help'] = 'Este plugin verifica si la “Calificación máxima” de cada cuestionario coincide con el “Total de puntaje” asignado a sus preguntas. Ayuda a prevenir inconsistencias en la calificación y garantiza que los cuestionarios estén configurados correctamente.';
$string['privacy:metadata'] = 'La revisión de cuestionarios no almacena datos personales. Los resultados de la revisión se guardan en el plugin course checker.';
$string['quiz_activity'] = 'Actividad: {$a->name} ({$a->modname})';
$string['quiz_grade_sum_error'] = 'La calificación máxima ({$a->grade}) y el total de puntaje ({$a->sumgrades}) deberían ser el mismo número en este cuestionario';
$string['quiz_grade_sum_success'] = 'Este cuestionario está configurado correctamente';
