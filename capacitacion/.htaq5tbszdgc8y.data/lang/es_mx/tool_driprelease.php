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
 * Strings for component 'tool_driprelease', language 'es_mx', version '4.4'.
 *
 * @package     tool_driprelease
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiespersession'] = 'Actividades por sesión';
$string['activitiespersession_help'] = '¿Cuántos elementos por sesión? Por ejemplo, si el número de actividades por sesión está configurado en 5 y la duración de la sesión en 7 días, los estudiantes verían 5 actividades por semana.';
$string['activitiespersession_text'] = 'Establece el número de actividades disponibles en cada sesión; por ejemplo, si una sesión dura una semana, 5 le darán una por día.';
$string['activitiespersessionerror'] = 'El número de actividades por sesión es {$a->activitiespersession}, pero el curso solo tiene {$a->modulecount} actividades.';
$string['activity'] = 'Actividad';
$string['activitytype'] = 'Tipo de actividad';
$string['assignment'] = 'Tarea';
$string['coursegroups'] = 'Grupos del curso';
$string['coursesettingnogroups'] = 'Este curso está configurado a SIN GRUPOS';
$string['courshasnogroups'] = 'Este curso no tiene grupos';
$string['displaydisabled'] = 'Visualización deshabilitada';
$string['displaydisabled_help'] = 'Los elementos no disponibles se muestran, pero los usuarios no pueden hacer clic en ellos.';
$string['driprelease:view'] = 'Ver driprelease (Liberación por goteo) para el curso';
$string['dripreleaseforcourse'] = 'Driprelease (Liberación por goteo)para el curso';
$string['from'] = 'Desde';
$string['hideunselected'] = 'Ocultar no seleccionados';
$string['hideunselected_help'] = 'Cualquier elemento no seleccionado se ocultará a los estudiantes, incluso en el libro de calificaciones.';
$string['hideunselected_text'] = 'Los módulos del curso no seleccionados se ocultarán.';
$string['nomodulesincourse'] = 'Sin módulos en el curso';
$string['noselections'] = 'Sin elementos seleccionados; no se actualizó disponibilidad';
$string['pluginname'] = 'Drip release (Liberación por goteo)';
$string['privacy:null_reason'] = 'La herramienta de administración de Dripelease (Liberación por goteo) no afecta ni almacena ningún dato por sí misma.';
$string['questioncount'] = 'Número de preguntas';
$string['refresh'] = 'Refrescar';
$string['resetunselected'] = 'Reiniciar no seleccionados';
$string['resetunselected_help'] = 'Borrar la configuración de disponibilidad para cualquier elemento no seleccionado.';
$string['schedulefinish'] = 'Terminar';
$string['schedulestart'] = 'Iniciar';
$string['schedulestart_help'] = 'Aquí se configuran los periodos/intervalos de tiempo en los que están disponibles las actividades. En primer lugar, en la sección «Inicio:», se indica el día, el mes y el año en que comenzará el ciclo de actividades. El calendario azul abrirá una ventana emergente para seleccionar las fechas.';
$string['session'] = 'Sesión';
$string['session_help'] = 'Decide la duración de los intervalos. Por ejemplo, un nuevo conjunto de actividades estará disponible cada 7 días y las actividades disponibles actualmente dejarán de estar disponibles.

Se puede configurar. Dependiendo de las fechas de inicio y finalización, la duración de estas sesiones se distribuirá automáticamente de forma uniforme.

Por ejemplo, si el número de semanas entre la fecha de inicio y la fecha de finalización es de 16 semanas, y el número de sesiones se establece en 8, entonces la duración de una sesión sería de 2 semanas (16 semanas / 8 sesiones). Sin embargo, si el número de sesiones se establece en 4, la duración sería de 4 semanas (16 semanas / 4 sesiones). Finalmente, si el número de sesiones es de 16, se completará un ciclo semanal.';
$string['sessionlength'] = 'Duración de la sesión (días)';
$string['sessionlength_text'] = 'Duración en días de cada sesión';
$string['sessionlengtherror'] = 'La duración de la sesión debe ser mayor que cero.';
$string['sessionlengthislonger'] = 'La duración de la sesión es mayor que el tiempo total (de inicio a fin). Acorte la sesión o establezca una hora de finalización posterior.';
$string['starttofinishmustbe'] = 'El tiempo de principio a fin debe ser de al menos un día.';
$string['stayavailable'] = 'Permanecer disponible después de que finalice la sesión.';
$string['stayavailable_help'] = 'Los elementos seguirán disponibles al finalizar la sesión. Esto equivale a no configurar el campo "Hasta" en la configuración de restricciones.';
$string['stayavailable_text'] = 'Permanecer disponible después de que finalice la sesión, sin establecer una fecha de finalización';
$string['to'] = 'Hasta';
$string['toggleselection'] = 'Alternar la selección de todos los elementos';
$string['updatedforcourse'] = 'actualizado driprelease para el curso';
