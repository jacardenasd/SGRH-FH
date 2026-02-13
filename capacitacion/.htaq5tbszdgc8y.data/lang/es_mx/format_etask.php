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
 * Strings for component 'format_etask', language 'es_mx', version '4.4'.
 *
 * @package     format_etask
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose'] = 'Elegir ...';
$string['currentsection'] = 'Sección actual';
$string['failedlabel'] = 'Etiqueta fallida';
$string['failedlabel_help'] = 'Esta configuración sobre-escribe el texto predeterminado de la etiqueta Fallida.';
$string['gradeitemcompleted'] = 'Completado';
$string['gradeitemfailed'] = 'Fallido';
$string['gradeitempassed'] = 'Aprobado';
$string['gradeitemprogressbars'] = 'Barras de progreso de elemento de calificación';
$string['gradeitemprogressbars_help'] = 'Esta configuración determina si el estudiante debe ver las barras de progreso de los elementos de calificación en la tabla de calificaciones o no.';
$string['gradeitemprogressbars_no'] = 'Ocultar las barras de progreso de los elementos de calificación del estudiante en la tabla de calificaciones';
$string['gradeitemprogressbars_yes'] = 'Mostrar las barras de progreso de los elementos de calificación del estudiante en la tabla de calificaciones';
$string['gradeitemssorting'] = 'Ordenamiento de elementos de calificación';
$string['gradeitemssorting_help'] = 'Esta configuración determina si los elementos de calificación en la tabla de calificación se ordenan por más reciente, más antiguo o según estén en el curso.';
$string['gradeitemssorting_inherit'] = 'Ordenar los elementos de calificación en la tabla de calificación tal como están en el curso';
$string['gradeitemssorting_latest'] = 'Ordenar los elementos de calificación en la tabla de calificaciónpor más reciente primero';
$string['gradeitemssorting_oldest'] = 'Ordenar los elementos de calificación en la tabla de calificaciónpor más antiguo primero';
$string['gradepasschanged'] = 'La calificación para aprobar el elemento de calificación <strong>{$a->itemname}</strong> se ha cambiado exitosamente a <strong>{$a->gradepass}</strong>.';
$string['gradepasserrdatabase'] = 'No se puede cambiar la calificación a aprobada para el elemento de calificación <strong>{$a}</strong>. Inténtelo nuevamente más tarde o comuníquese con el desarrollador del plugin.';
$string['gradepasserrgrademax'] = 'La calificación para aprobar el elemento de calificación <strong>{$a->itemname}</strong> no se puede cambiar a <strong>{$a->gradepass}</strong>. El valor es mayor que la calificación máxima.';
$string['gradepasserrgrademin'] = 'La calificación para aprobar el elemento de calificación <strong>{$a->itemname}</strong> no se puede cambiar a <strong>{$a->gradepass}</strong>. El valor es inferior a la calificación mínima.';
$string['gradepasserrnumeric'] = 'La calificación para aprobar el elemento de calificación <strong>{$a->itemname}</strong> no se puede cambiar a <strong>{$a->gradepass}</strong>. Debe ingresar un número aquí.';
$string['gradepassremoved'] = 'La calificación para aprobar el elemento de calificación <strong>{$a}</strong> se ha eliminado exitosamente.';
$string['helpabout'] = 'El formato de tópics de eTask amplía el formato y ofrece la forma más rápida de gestionar las actividades y su calificación cómoda. Además de su claridad, crea un entorno motivador y competitivo que favorece una experiencia educativa positiva.';
$string['helpimprovebody'] = '¡Ayúdanos a mejorar este plugin! Escribe tus comentarios, informa sobre problemas o completa los cuestionarios disponibles en la <a href="https://moodle.org/plugins/format_etask" target="_blank">página del plugin</a>.';
$string['helpimprovehead'] = 'Mejoras al plugin';
$string['hidefromothers'] = 'Ocultar';
$string['indentation'] = 'Permitir sangría en la página del curso';
$string['indentation_help'] = 'Permitir que los profesores y otros usuarios con la capacidad de administrar actividades sangren elementos en la página del curso.';
$string['legacysectionname'] = 'Tópico';
$string['max'] = 'máx.';
$string['newsection'] = 'Nueva sección';
$string['nogradeitemsfound'] = 'No se encontraron elementos de calificación';
$string['nostudentsfound'] = 'No se encontraron estudiantes para calificar';
$string['page-course-view-topics'] = 'Cualquier página principal de curso en formato eTask.';
$string['page-course-view-topics-x'] = 'Cualquier página de curso en formato eTask';
$string['passedlabel'] = 'Etiqueta aprobado';
$string['passedlabel_help'] = 'Esta configuración sobreescribe el texto predeterminado de la etiqueta Aprobado.';
$string['placement'] = 'Colocación';
$string['placement_above'] = 'Colocar la tabla de calificación arriba de las secciones del curso';
$string['placement_below'] = 'Colocar la tabla de calificación debajo de las secciones del curso';
$string['placement_help'] = 'Esta configuración determina la colocación de la tabla de calificación arriba o debajo de las secciones del curso.';
$string['plugin_description'] = 'Tabla de calificaciones como parte del curso dividida en secciones personalizables.';
$string['pluginname'] = 'Formato eTask';
$string['privacy:metadata'] = 'El plugin de Formato eTask no almacena ningún dato personal.';
$string['progresspercentage'] = '{$a} % <span class="text-black-50">de todos los estudiantes</span>';
$string['registeredduedatemodules'] = 'Registrar módulos de fecha esperada';
$string['registeredduedatemodules_help'] = 'Especifica en cual campo de la base de datos de módulos es almacenado el valor de fecha esperada.';
$string['section0name'] = 'General';
$string['section_highlight_feedback'] = 'Sección {$a->name} resaltada.';
$string['section_unhighlight_feedback'] = 'Resaltado eliminado de la sección {$a->name}.';
$string['sectionname'] = 'Sección';
$string['showfromothers'] = 'Mostrar';
$string['showmore'] = 'Mostrar más ...';
$string['studentprivacy'] = 'Privacidad del estudiante';
$string['studentprivacy_help'] = 'Esta configuración determina si el estudiante puede ver las calificaciones de los demás en la tabla de calificaciones o no.';
$string['studentprivacy_no'] = 'El estudiante puede ver las calificaciones de los demás en la tabla de calificaciones.';
$string['studentprivacy_yes'] = 'El estudiante sólo puede ver sus propias calificaciones en la tabla de calificaciones.';
$string['studentsperpage'] = 'Estudiantes por página';
$string['studentsperpage_help'] = 'Esta configuración anula el valor predeterminado de 10 estudiantes por página en la tabla de calificación.';
$string['timemodified'] = 'Última modificación en {$a}';
