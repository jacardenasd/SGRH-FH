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
 * Strings for component 'tool_courserating', language 'es_mx', version '4.4'.
 *
 * @package     tool_courserating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrating'] = 'Deje una valoración';
$string['barwithrating'] = '{$a->rating} estrella(s) representa(n) {$a->percent} de valoración';
$string['cannotrate'] = 'Usted no tiene permiso para dejar valoración en este curso';
$string['cannotview'] = 'Usted no tiene permiso para ver valoraciones para este curso';
$string['cfielddescription'] = 'No editar; el contenido será poblado automáticamente cada vez que alguien deje una valoración para este curso.';
$string['colorrating'] = 'Color de la valoración';
$string['colorratingconfig'] = 'Usualmente esto es ligeramente más oscuro que el color de la estrella para el mejor efecto visual.';
$string['colorstar'] = 'Color de las estrellas';
$string['courserating:delete'] = 'Eliminar valoraciones y revisiones de curso, ver revisiones marcadas con bandera';
$string['courserating:rate'] = 'Dejar una valoración para el curso';
$string['courserating:reports'] = 'Ver reportes de evaluaciones de curso';
$string['coursereviews'] = 'Revisiones del curso';
$string['datasource_courseratings'] = 'Evaluacines de curso';
$string['deleterating'] = 'Eliminar permanentemente';
$string['deletereason'] = 'Razón para eliminación';
$string['displayempty'] = 'Mostrar no valorados con estrellas grises';
$string['displayemptyconfig'] = 'Para cursos donde la valoración está habilitada pero donde no haya valoraciones, mostrar estrellas grises. Si no se selecciona, esos cursos no tendrán valoraciones mostradas en absoluto.';
$string['editrating'] = 'Editar su valoración';
$string['entity_rating'] = 'Evaluación de curso por usuario';
$string['entity_summary'] = 'Resumen de evaluación de curso';
$string['event:flag_created'] = 'Valoración de curso marcada con bandera';
$string['event:flag_deleted'] = 'Bandera de valoración de curso revocada';
$string['event:rating_created'] = 'Valoración de curso creada';
$string['event:rating_deleted'] = 'Valoración de curso eliminada';
$string['event:rating_updated'] = 'Valoración de curso actualizada';
$string['flagrating'] = 'Bandera';
$string['parentcss'] = 'Selector CSS para elementos paternos';
$string['parentcssconfig'] = 'La valoración del curso será mostrada en la página del curso como el último hijo del elemento DOM que coincide con este selector. Usted podría necesita anularlo si el sitio usa un tema personalizado y usted quisiera especificar un tema paterno. Si se deja vacío, el valor predeterminado será usado. Para Moodle 4.0 el predeterminado es "#page-header", para Moodle 3.11 el predeterminado es "#page-header .card-body, #page-header #course-header, #page-header".';
$string['percourseoverride'] = 'Anulaciones del curso';
$string['percourseoverrideconfig'] = 'si se habilita, un campo personalizado del curso será creado, el que permitirá configurar cuando puede ser valorado cada curso individualmente. el valor de la configuración "Cuando pueden ser valorados los curso" será tratando como predeterminado.';
$string['pluginname'] = 'Valoraciones del curso';
$string['privacy:metadata:tool_courserating:reason'] = 'Razón';
$string['privacy:metadata:tool_courserating:reasoncode'] = 'Código de razón';
$string['privacy:metadata:tool_courserating:timecreated'] = 'Hora de creación';
$string['privacy:metadata:tool_courserating:timemodified'] = 'Hora de modificación';
$string['privacy:metadata:tool_courserating_flag'] = 'Valoraciones marcadas con bandera';
$string['privacy:metadata:tool_courserating_flag:id'] = 'ID';
$string['privacy:metadata:tool_courserating_flag:ratingid'] = 'ID de valoración';
$string['privacy:metadata:tool_courserating_flag:userid'] = 'ID del usuario';
$string['privacy:metadata:tool_courserating_rating'] = 'Valoraciones de curso';
$string['privacy:metadata:tool_courserating_rating:cohortid'] = 'ID del curso';
$string['privacy:metadata:tool_courserating_rating:hasreview'] = 'Tiene revisión';
$string['privacy:metadata:tool_courserating_rating:id'] = 'ID';
$string['privacy:metadata:tool_courserating_rating:rating'] = 'Valoración';
$string['privacy:metadata:tool_courserating_rating:review'] = 'Revisión';
$string['privacy:metadata:tool_courserating_rating:timecreated'] = 'Hora de creación';
$string['privacy:metadata:tool_courserating_rating:timemodified'] = 'Hora de modificación';
$string['privacy:metadata:tool_courserating_rating:userid'] = 'Usuario';
$string['ratebyanybody'] = 'Los estudiantes pueden valorar este curso en cualquier momento';
$string['ratebycompleted'] = 'Los estudiantes pueden valorar solamente después de completar el curso';
$string['ratebydefault'] = 'Valor predeterminado es: "{$a}"';
$string['ratebynoone'] = 'Las valoraciones de curso están deshabilitadas';
$string['ratedcategory'] = 'Categoría donde las valoraciones del curso están permitidas';
$string['rating'] = 'Valoración';
$string['rating_actions'] = 'Acciones';
$string['rating_hasreview'] = 'Tiene revisión';
$string['rating_nofflags'] = 'Número de señalizaciones';
$string['rating_rating'] = 'Valoración del curso';
$string['rating_review'] = 'Revisión';
$string['rating_timecreated'] = 'Hora de creación';
$string['rating_timemodified'] = 'Hora de modificación';
$string['ratingasstars'] = 'Valoración de curso como estrellas';
$string['ratingdeleted'] = 'Valoración eliminada';
$string['ratinglabel'] = 'Valoración de curso';
$string['ratingmode'] = 'Cuando pueden ser valorados los cursos';
$string['ratingmodeconfig'] = 'Adicionalmente la capacidad para valorar cursos está activada';
$string['reindextask'] = 'Re-indizar valoraciones de curso';
$string['review'] = 'Revisión (opcional)';
$string['revokeratingflag'] = 'Revocar';
$string['settingsdescription'] = 'Cambiar algunas de las configuraciones podría requerir re-indizado de todos los cursos y valoraciones de cursos. esto sucederá automáticamente en la siguiente ejecución de Cron.';
$string['showallratings'] = 'Mostrar todo';
$string['showmorereviews'] = 'Mostrar más';
$string['summary_avgrating'] = 'Valoración del curso';
$string['summary_cnt01'] = 'Proporción de valoraciones de 1-estrella';
$string['summary_cnt02'] = 'Proporción de valoraciones de 2-estrellas';
$string['summary_cnt03'] = 'Proporción de valoraciones de 3-estrellas';
$string['summary_cnt04'] = 'Proporción de valoraciones de 4-estrellas';
$string['summary_cnt05'] = 'Proporción de valoraciones de 5-estrellas';
$string['summary_cntall'] = 'Número de valoraciones';
$string['summary_cntreviews'] = 'Número de revisiones';
$string['summary_ratingmode'] = 'Modo de valorar curso';
$string['summary_sumrating'] = 'Total de todas las valoraciones';
$string['usehtml'] = 'Usar editor de texto enriquecido para revisiones';
$string['usehtmlconfig'] = 'Permitirle a estudiantes usar editor de texto enriquecido para las revisiones, incluir enlaces y anexar archivos.';
$string['usersflagged'] = '{$a} usuario(s) ha(n) marcado esta revisión como inapropiada / ofensiva.';
$string['viewallreviews'] = 'Ver todas las revisiones';
$string['youflagged'] = 'Usted ha marcado esta revisión como inapropiada / ofensiva.';
