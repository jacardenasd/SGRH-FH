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
 * Strings for component 'format_redirected', language 'es_mx', version '4.4'.
 *
 * @package     format_redirected
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['course_redirected_from'] = 'Este curso ha sido redirigido desde: {$a}';
$string['excludepattern'] = 'Excluir patrón para idnumber';
$string['excludepattern_desc'] = 'Patrón de expresión regular para excluir cursos de la lista de cursos a redirigir. Es aplicado al campo de idnumber.';
$string['format_redirected_defaultnoticeforstudents'] = 'El profesor ha fusionado varios cursos Moodle en otros cursos compartidos. Debajo están los cursos donde tiene lugar la enseñanza realmente.';
$string['format_redirected_defaultnoticeforteachers'] = 'Si usted cambia el formato del curso sus estudiantes podrán ingresar a este curso y también a su curso fusionado. Ambos espacios son diferentes y están separados. Esto podría causar confusión.';
$string['format_redirected_noticeforstudents'] = 'Mensaje para el público en general';
$string['format_redirected_noticeforstudents_desc'] = 'Texto a ser mostrado a todos los usuarios en la página de redirección. Está diseñado para decir la razón de la redirección.';
$string['format_redirected_noticeforteachers'] = 'Mensaje para profesores';
$string['format_redirected_noticeforteachers_desc'] = 'Texto a ser mostrado a profesores en la página de redirección';
$string['metalinked'] = 'El curso esta metaenlazado por los cursos siguientes:';
$string['metalinktext'] = '<div>Fusionado a {$a->creationtime}</div>';
$string['notredirected_error'] = 'Este curso está configurado como "Redirigido" pero no es posible una redirección. Esto necesita de la intervención de un profesor o administrador.';
$string['pluginname'] = 'Formato para redirigido';
$string['privacy:metadata'] = 'El plugin del formato de Redirigido a METAs  no almacena ningún dato personal.';
$string['redirectedcourse'] = 'Este curso está configurado como "Redirigido".';
$string['redirectedhelp'] = 'El formato de este curso redirecciona a los estudiantes a uno o más cursos. Si hubiera solamente un curso destino la redirección es hecha de forma silenciosa. En caso diferente, se muestra una lista de enlaces a los cursos destino.';
