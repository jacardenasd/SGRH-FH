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
 * Strings for component 'report_modulecompletion', language 'es_mx', version '4.4'.
 *
 * @package     report_modulecompletion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_filter'] = 'Añadir un nuevo filtro';
$string['backtofilters'] = 'Regresar a filtros';
$string['categoryname'] = 'Reportes del módulo';
$string['cohort_label'] = 'Escribir un nombre de cohorte';
$string['cohort_placeholder'] = 'Nombre';
$string['cohorts'] = 'Cohortes';
$string['collapse'] = 'Colapsar';
$string['completed_header'] = 'Completado en';
$string['completed_modules'] = 'módulos logrados';
$string['configmodulecompletion'] = 'Monitoreo de finalización de módulo';
$string['confirm_filter_deletion'] = '¿Está seguro de querer eliminar este filtro?';
$string['copy_filter_title'] = 'Duplicar este filtro';
$string['course_completed_header'] = 'Módulos de curso completados';
$string['course_completed_percent_header'] = 'Módulos en porcentaje';
$string['course_header'] = 'Nombre del curso';
$string['course_label'] = 'Escribir un nombre del curso';
$string['course_placeholder'] = 'Nombre';
$string['delete_filter_title'] = 'Eliminar este filtro';
$string['edit_filter_title'] = 'Editar este filtro';
$string['expand'] = 'Expander';
$string['export_type_required'] = 'Párametro requerido de tipo de exportación (CSV o XLSX)';
$string['filter_id_required'] = 'Párametro de ID de filtro requerido';
$string['filter_not_found'] = 'Este no es el filtro que usted está buscando...';
$string['form_cohort_not_found'] = 'La cohorte solicitada no existe';
$string['form_course_not_found'] = 'El curso solicitado no existe';
$string['form_ending_date'] = 'Fecha de fin';
$string['form_filter_name'] = 'Nombre del filtro';
$string['form_filter_name_placeholder'] = 'Nombre';
$string['form_missing_ending_date'] = 'La fecha del fin debe estar dada y correctamente formateada';
$string['form_missing_starting_date'] = 'La fecha del inicio debe estar dada y correctamente formateada';
$string['form_name_required'] = 'Usted debe darle un nombre a su filtro';
$string['form_only_cohorts_courses'] = 'Solamente cursos de cohorte';
$string['form_only_cohorts_courses_help'] = 'Solamente buscar cursos y módulos para los cuales las cohortes seleccionadas están inscritas';
$string['form_order_by_asc'] = 'Ascendiente';
$string['form_order_by_column'] = 'Ordenados por';
$string['form_order_by_completion'] = 'Finalización';
$string['form_order_by_desc'] = 'Descendiente';
$string['form_order_by_last_completed'] = 'Fecha de última finalización';
$string['form_order_by_student'] = 'Estudiante';
$string['form_order_by_type'] = 'Dirección';
$string['form_quickfilter_name'] = 'Filtro rápido';
$string['form_quickfilter_submit'] = 'Filtrar';
$string['form_save_filter'] = 'Guardar filtro';
$string['form_starting_date'] = 'Fecha de inicio';
$string['form_starting_date_must_be_anterior'] = 'La fecha de inicio debe ser anterior a la fecha de terminación';
$string['form_user_not_found'] = 'Usuario solicitado no existe';
$string['full_date_format'] = 'A-m-d';
$string['has_restrictions'] = 'Este curso contiene sección(es) o módulo(s) con restricción(es). estos módulos serán incluidos en el número total de módulos de curso aunque el estudiante no tenga acceso a ellos.';
$string['hide_all'] = 'Ocultar todo';
$string['last_completion_date'] = 'Fecha de finalización del último módulo';
$string['load_filter_title'] = 'Cargar este filtro';
$string['max_achievement_percentage'] = 'Porcentaje máximo logrado por un estudiante';
$string['meta_settings'] = 'configuraciones de metadatos';
$string['metadata_list_description'] = 'Seleccionar metadatos que necesitan ser mostrados en reportes';
$string['metadata_list_label'] = 'Elegir metadatos';
$string['module_header'] = 'Nombre del módulo';
$string['module_type_header'] = 'Tipo de módulo';
$string['modulecompletion:view'] = 'Acceder al monitor de finalización de módulo';
$string['modules_list_description'] = 'Seleccionar cuáles módulos necesitan ser usados para monitorear finalización de módulos de estudiantes';
$string['modules_list_label'] = 'Lista de módulos';
$string['month_date_format'] = 'A-m';
$string['month_header'] = 'Mes';
$string['no_reports'] = 'No se encontraron resultados';
$string['no_template'] = 'El plugin usa plantillas definidas en el tema Boost; su tema debería de heredar Boost.';
$string['numeric_metadata_conversion'] = 'Conversión de metadatos';
$string['numeric_metadata_conversion_description'] = '<p>Elegir cómo convertir metadatos numéricos. escriba una fórmula aplicada al valor.<br><strong>Ejemplo:</strong> para convertir  metadatos de <strong>minutos</strong> a horas, usted solamente necesita dividir entre 60. Simplemente introduzca  <strong>/60</strong><br><em>Nota : Operadores aceptados : <strong>+</strong>, <strong>-</strong>, <strong>*</strong>, <strong>/</strong>, <strong>%</strong>. El uso de paréntesis es altamente experimental y podría funcionar de forma inesperada</em>.</p><p>Entonces seleccione una etiqueta para el valor convertido, por ejemplo <strong>hora(s)</strong>.</p>';
$string['numeric_metadata_formula'] = '(Fórmula)';
$string['numeric_metadata_formula_description'] = 'Si la formula fuera incorrecta, será ignorada.';
$string['numeric_metadata_label'] = '(Etiqueta)';
$string['numeric_metadata_list_description'] = 'Seleccionar metadatos que se suponen sean considerados como información numérica. Un total será calculado para cada curso y un total para cada estudiante.';
$string['numeric_metadata_list_label'] = 'Elegir metadatos numéricos';
$string['pluginname'] = 'Monitor de finalización de módulo';
$string['privacy:metadata:filter'] = 'El plugin de ModuleCompletion (FinalizacióndeMódulo) almacena información acerca de filtros creados por usuarios para que ellos puedan monitorear los logros de los estudiantes.';
$string['privacy:metadata:filter:cohorts'] = 'La ID de cohortes para las cuales deberían monitorearse los logros.';
$string['privacy:metadata:filter:courses'] = 'La ID de cohortes para las cuales deberían monitorearse los logros.';
$string['privacy:metadata:filter:ending_date'] = 'La fecha de término para el período que el usuario desea monitorear.';
$string['privacy:metadata:filter:name'] = 'El nombre del filtro...';
$string['privacy:metadata:filter:only_cohorts_courses'] = 'Si es que los curso y módulos buscados deberían o no estar asociados con cohortes seleccionadas.';
$string['privacy:metadata:filter:order_by_column'] = 'El criterio para ordenar los resultados';
$string['privacy:metadata:filter:order_by_type'] = 'El orden de ordenamiento para los resultados.';
$string['privacy:metadata:filter:starting_date'] = 'La fecha de inicio para el período que el usuario desea monitorear.';
$string['privacy:metadata:filter:userid'] = 'La ID del usuario que creó el filtro.';
$string['privacy:metadata:filter:users'] = 'La ID de usuarios para quienes deberían monitorearse sus logros.';
$string['quick_filter'] = 'Filtro rápido';
$string['reportcreated'] = 'Reporte creado';
$string['reportdeleted'] = 'Reporte eliminado';
$string['reports_count'] = 'Número de resultados';
$string['reportupdated'] = 'Reporte actualizado';
$string['reportviewed'] = 'Reporte visto';
$string['section_header'] = 'Nombre de sección';
$string['show_all'] = 'Mostrar todo';
$string['total_completed_header'] = 'Total de módulos completados';
$string['total_completed_percent_header'] = 'Total en porcentaje';
$string['use_metadata_description'] = 'Si el plugin de metadatos está instalado en su Moodle, usted puede usarlo con este otro plugin y mostrar metadatos de módulos';
$string['use_metadata_label'] = 'Plugin para usar metadatos';
$string['user_email_header'] = 'Emal del estudiante';
$string['user_header'] = 'Nombre del estudiante';
$string['user_label'] = 'Escribir un nombre de estudiante';
$string['user_placeholder'] = 'Nombre';
$string['your_filters'] = 'Sus filtros';
