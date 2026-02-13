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
 * Strings for component 'gradingform_rubric_ranges', language 'es_mx', version '4.4'.
 *
 * @package     gradingform_rubric_ranges
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Añadir criterio';
$string['additionalfeedback'] = 'Retroalimentación adicional';
$string['alwaysshowdefinition'] = 'Permitirle a usuarios previsualizar rúbrica (en caso contrario solamente será mostrada después de calificar)';
$string['backtoediting'] = 'Regresar a  editar';
$string['confirmdeletecriterion'] = '¿Está seguro de querer eliminar este criterio?';
$string['confirmdeletelevel'] = '¿Está seguro de querer eliminar este nivel?';
$string['criteria'] = 'Criterio';
$string['criterion'] = 'Criterio {$a}';
$string['criterionaddlevel'] = 'Añadir nivel';
$string['criteriondelete'] = 'Eliminar criterio';
$string['criterionduplicate'] = 'Duplicar criterio';
$string['criterionempty'] = 'Clic para editar criterio';
$string['criterionmovedown'] = 'Mover abajo';
$string['criterionmoveup'] = 'Mover arriba';
$string['criterionremark'] = 'Comentario para criterio {$a->description}: {$a->remark}';
$string['definerubric'] = 'Definir rúbrica';
$string['description'] = 'Descripción';
$string['downloadpdf'] = 'Descargar PDF';
$string['enableremarks'] = 'Permitir al evaluador añadir comentarios en texto para cada criterio';
$string['err_duplicatescore'] = 'El número de puntos para cada nivel debe ser un número único';
$string['err_mintwolevels'] = 'Cada criterio debe tener al menos  dos niveles';
$string['err_nocriteria'] = 'La rúbrica debe contener al menos un criterio';
$string['err_nodefinition'] = 'La definición del  nivel no puede  estar vacía';
$string['err_nodescription'] = 'La descripción del  criterio no puede  estar vacía';
$string['err_novariations'] = 'Los niveles del  criterio no pueden todos valer el mismo número de  puntos';
$string['err_scoreformat'] = 'El número de puntos para cada nivel debe ser un número válido';
$string['err_totalscore'] = 'Número máximo de  puntos  posible al calificar por la rúbrica debe ser mayor de cero';
$string['gradingof'] = '{$a} calificando';
$string['level'] = 'Nivel {$a->definition}, {$a->score} puntos.';
$string['leveldefinition'] = 'Nivel {$a} definición';
$string['leveldelete'] = 'Eliminar nivel {$a}';
$string['levelempty'] = 'Clic para editar nivel';
$string['levelrange'] = '{$a->rangestart} a {$a->rangeend}';
$string['levelsgroup'] = 'Nivela grupo';
$string['lockzeropoints'] = 'Calcular calificación teniendo un puntaje mínimo de la calificación mínima  obtenible para la rúbrica';
$string['lockzeropoints_help'] = 'Esta configuración solamente aplica si la suma del número mínimo de puntos para cada criterio es mayor de 0. Si se activa, el  puntaje mínimo de la actividad será la mínima calificación obtenible para la rúbrica. Si está inactiva, el puntaje mínimo posible para la rúbrica será mapeado a la calificación mínima disponible para la actividad (la cual es 0 a menos que se use una escala).';
$string['name'] = 'Nombre';
$string['needregrademessage'] = 'La definición de rúbrica fue cambiada  después de  que este estudiante había sido calificado. El estudiante no puede ver esta rúbrica hasta que usted haya comprobado la rúbrica y actualizado la calificación.';
$string['notset'] = 'No configurado';
$string['pluginname'] = 'Rúbrica de rangos';
$string['points'] = 'Puntos';
$string['pointsvalue'] = '{$a} puntos';
$string['previewrubric'] = 'Previsualizar rúbrica';
$string['privacy:metadata:criterionid'] = 'Un identificador para un criterio específico siendo calificado.';
$string['privacy:metadata:fillingssummary'] = 'Almacena información acerca de la calificación del usuario creada por la rúbrica.';
$string['privacy:metadata:instanceid'] = 'Un identificador relacionado con una calificación en una  actividad.';
$string['privacy:metadata:levelid'] = 'El nivel obtenido en la rúbrica.';
$string['privacy:metadata:remark'] = 'Comentarios relacionados con el criterio de la  rúbrica que está siendo evaluada.';
$string['pts'] = 'pts';
$string['range'] = 'Rangueada';
$string['ratings'] = 'Valoraciones';
$string['regrademessage1'] = 'Usted está a punto de guardar cambios a una rúbrica que ya ha sido usada para calificar. Por favor indique si las calificaciones existentes necesitan ser revisadas. Si usted activa esto, entonces la rúbrica estará oculta para los estudiantes hasta que su elemento sea re-calificado.';
$string['regrademessage5'] = 'Usted está a punto de guardar cambios a una rúbrica que ya ha sido usada para calificar. El valor del Libro de calificaciones no cambiará,  pero la rúbrica estará oculta para los estudiantes hasta que su elemento sea re-calificado.';
$string['regradeoption0'] = 'No marcar para re-calificar';
$string['regradeoption1'] = 'Marcar para re-calificar';
$string['restoredfromdraft'] = 'NOTA: El  último intento para calificar a esta persona no  fue guardado apropiadamente por  lo que las calificaciones en borrador han sido   restauradas. Si desea cancelar estos cambios use el botón \'Cancelar\' inferior.';
$string['rubric'] = 'Rúbrica';
$string['rubricmapping'] = 'Reglas de mapeo de puntaje a calificación';
$string['rubricmappingexplained'] = 'El mínimo puntaje posible para esta rúbrica es <b>{$a->minscore} puntos</b>. Será convertido a la mínima calificación disponible para la actividad (la cual es 0 a menos que se use una escala). El puntaje máximo de  <b>{$a->maxscore} puntos</b> será convertido a la la calificación máxima. Los puntajes intermedios serán convertidos respectivamente.

Si se usara una escala para calificar, el puntaje será redondeado y convertido a los elementos de la escala como si fuesen números enteros consecutivos.

Este cálculo de calificación puede ser cambiado al editar el formato y activar la casilla \'Calcular calificación que tenga un puntaje mínimo de la calificación mínima obtenible para la rúbrica\'.';
$string['rubricnotcompleted'] = 'Por favor elija algo para cada criterio';
$string['rubricoptions'] = 'Opciones de rúbrica';
$string['rubricstatus'] = 'Estado actual de rúbrica';
$string['save'] = 'Guardar';
$string['saverubric'] = 'Guardar rúbrica y hacerla disponible';
$string['saverubricdraft'] = 'Guardar como borrador';
$string['scoreinputforlevel'] = 'Ingreso de puntaje para nivel {$a}';
$string['scorepostfix'] = '{$a} puntos';
$string['showdescriptionstudent'] = 'Mostrar descripción de rúbrica a  quienes  están siendo calificados';
$string['showdescriptionteacher'] = 'Mostrar descripción de rúbrica durante evaluzación';
$string['showremarksstudent'] = 'Mostrar comentarios a quienes están siendo calificados';
$string['showscorestudent'] = 'Mostrar puntos para cada nivel a quienes están siendo calificados';
$string['showscoreteacher'] = 'Mostrar puntos para cada nivel  durante evaluación';
$string['sortlevelsasc'] = 'Ordenamiento para niveles:';
$string['sortlevelsasc0'] = 'Descendiente por número de puntos';
$string['sortlevelsasc1'] = 'Ascendiente por número de puntos';
$string['zerolevelsabsent'] = 'Advertencia: El  mínimo puntaje posible para esta rúbrica NO es 0; esto  puede resultar en calificaciones inesperadas para la actividad. Para evitar esto, cada criterio debería tener un nivel con 0 puntos.<br> Esta advertencia puede ser ignorada si una  escala es usada para calificar, y los niveles   mínimos en la rúbrica corresponden al valor mínimo de la escala.';
