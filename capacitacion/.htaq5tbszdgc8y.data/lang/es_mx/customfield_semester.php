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
 * Strings for component 'customfield_semester', language 'es_mx', version '4.4'.
 *
 * @package     customfield_semester
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['beginofsemesters'] = 'El año en el que comienza la lista de semestres.';
$string['defaultmonthsintofuture'] = 'La opción predeterminada es el semestre en X meses.';
$string['internaltermrepresentation'] = 'Representación de períodods internos';
$string['internaltermrepresentation_desc'] = 'Con esta configuración, usted controla cómo el campo personalizado representa los términos internamente (en la base de datos de Moodle). Esto es relevante si desea integrar Moodle con sistemas externos de gestión de clases y rellenar el campo personalizado directamente con valores de un sistema externo.';
$string['internaltermrepresentationst0wt1'] = 'Representa el períodod de verano como período 0 y el período de invierno como período 1';
$string['internaltermrepresentationst1wt2'] = 'Representa el períodod de verano como período 1 y el período de invierno como período 2';
$string['internaltermrepresentationwarning'] = '<strong>Advertencia:</strong>  Cambiar esta configuración no actualizará los valores de los campos existentes en los cursos. Cámbiela solo si realmente lo necesita y si sabe que tendrá que volver a completar los campos de los cursos existentes.';
$string['pluginname'] = 'Campo de semestre';
$string['semesterindependent'] = 'Independiente-del período';
$string['showmonthsintofuture'] = 'Un semestre será elefgible,si empieza en menos de X meses.';
$string['specificsettings'] = 'Configuraciones del campo semestre';
$string['startmonthnote'] = 'Por favor tenga en cuenta: Los valores aceptables son números entre 1 y 12. Esta configuración asume que el trimestre de verano precede al de invierno. Si configura los trimestres al revés, el campo personalizado ignorará su configuración y usará los valores predeterminados.';
$string['summersemester'] = 'VERANO {$a}';
$string['summertermstartmonth'] = 'El mes cuando inicia el semestre de verano';
$string['summertermstartmonth_desc'] = 'Con esta configuración usted define en qué mes comienza el semestre de verano.';
$string['termpresentationasc'] = 'Los semestres más antiguos primero, entrada independiente-del-semestre al principio de la lista';
$string['termpresentationdesc'] = 'Los semestres más nuevos primero, la entrada independiente-del-semestre al final de la lista';
$string['termpresentationorder'] = 'Orden de presentación del semestre';
$string['termpresentationorder_desc'] = 'Con esta configuración, usted controla cómo se presenta la lista de semestre dentro de la configuración del curso y (si el campo se usa como filtro del curso) dentro del bloque de descripción general del curso del Tablero.';
$string['visibleincoursesettings'] = 'Visible en configuraciones del curso';
$string['visibleincoursesettings_desc'] = 'El campo del semestre es visible y editable en la configuración del curso.';
$string['wintersemester'] = 'INVIERNO {$a}';
$string['wintertermstartmonth'] = 'El mes cuando inicia el semestre de invierno';
$string['wintertermstartmonth_desc'] = 'Con esta configuración se define en qué mes comienza el semestre de invierno.';
