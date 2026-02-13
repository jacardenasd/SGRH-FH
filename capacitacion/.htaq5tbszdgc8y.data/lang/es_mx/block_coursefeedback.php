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
 * Strings for component 'block_coursefeedback', language 'es_mx', version '4.4'.
 *
 * @package     block_coursefeedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpage_html_allowhidinga'] = 'Permitir ocultar';
$string['adminpage_html_allowhidingb'] = 'Si se habilita, los profesores pueden editar la visibilidad del bloque.';
$string['adminpage_html_defaultlanguagea'] = 'Idioma por defecto';
$string['adminpage_html_defaultlanguageb'] = 'Se mostrarán preguntas en el idioma por defecto, si falla la carga de otros idiomas (por ejemplo, si no están definidas preguntas en el idioma preferido del usuario). ¡ Esto significa que Usted debe definir al menos todas las preguntas en el idioma por defecto !';
$string['adminpage_html_enable_infobannera'] = 'Si está habilitado, el banner de información es mostrado.';
$string['adminpage_html_enable_infobannerb'] = 'Si está deshabilitado, el banner de información NO es mostrado.';
$string['adminpage_html_fbactiveforcoursesa'] = 'Máx tiempo transcurrido desde inicio del curso';
$string['adminpage_html_fbactiveforcoursesb'] = 'Determina el período de límite de tiempo desde el inicio del curso.';
$string['adminpage_html_globalenablea'] = 'Si está habilitado, el bloque aparecerá en todos los cursos';
$string['adminpage_html_globalenableb'] = 'Si está deshabilitado, el bloque será eliminado de todos los cursos';
$string['adminpage_html_headinggeneral'] = 'Configuración general';
$string['adminpage_html_headinginfobannera'] = 'Configuración del banner de información';
$string['adminpage_html_headinginfobannerb'] = 'El banner de información, si está habilitado, se mostrará a los capacitadores en los cursos en los que se realizará la encuesta. El banner de información solo se puede activar si el bloque está activo a través de la configuración "global_enable" y el inicio del curso es posterior a lo que indica "since_coursestart".';
$string['adminpage_html_infobannera'] = 'Infobanner';
$string['adminpage_html_infobannerb'] = 'Escriba su mensaje de información; puede usar el "filtro muti-idioma".';
$string['adminpage_html_notinstalled'] = '\'{$a}\' (no instalado)';
$string['adminpage_link_feedbackedit'] = 'editar/crear encuesta';
$string['categorypath'] = 'Ruta de categoría';
$string['caution'] = 'Advertencia';
$string['coursefeedback:addinstance'] = 'Añadir este bloque al curso del sitio';
$string['coursefeedback:download'] = 'Guardar los resultados de la retroalimentación del curso actual dentro de un archivo.';
$string['coursefeedback:evaluate'] = 'Evaluar retroalimentación del curso actual';
$string['coursefeedback:managefeedbacks'] = 'Editar configuraciones globales del bloque de retroalimentación del curso';
$string['coursefeedback:myaddinstance'] = 'Añadir este bloque a la página de "Mi hogar" (dado que allí es inútil, debería de estar prohibido para todos)';
$string['coursefeedback:viewanswers'] = 'Ver el análisis de la retroalimentación del curso actual';
$string['download_html_filename'] = 'Resultados';
$string['download_thead_questions'] = 'Pregunta';
$string['eventviewed'] = 'Resultados vistos';
$string['except_answer_exist'] = 'La respuesta para esta pregunta ya existe';
$string['except_block_duplicate'] = 'Más de un coursefeedbackblock en el curso';
$string['except_block_hidden'] = 'Bloque Coursefeedback en este curso está oculto';
$string['except_invalid_courseid'] = 'ID de curso inválida';
$string['except_invalid_questionid'] = 'ID de pregunta inválido';
$string['except_no_question'] = 'Retroalimentación o pregunta no existen';
$string['except_not_active'] = 'Retroalimentación dada inactiva al momento';
$string['except_wrong_questiontype'] = 'Tipo de pregunta recibido inválido';
$string['form_area_questiontext'] = 'Editar texto';
$string['form_button_downloadfb'] = 'Descargar rankings para la retroalimentación seleccionada';
$string['form_button_downloadqu'] = 'Descargar rankings para la pregunta seleccionada';
$string['form_copyof'] = 'Copiar';
$string['form_feedback_infotext'] = 'Texto de información de retroalimentación';
$string['form_feedback_infotext_help'] = 'Este texto es usado como información del usuario acerca de la retroalimentación. Debería contener un encabezado y toda la información necesaria en todos los idiomas necesarios.';
$string['form_header_addlang'] = 'Añadir un texto para otro idioma';
$string['form_header_confirm'] = 'Confirmación necesaria';
$string['form_header_deleteanswers'] = 'Eliminar respuestas del usuario';
$string['form_header_deletelang'] = 'Eliminar idioma(s)';
$string['form_header_editfeedback'] = 'Editar encuesta';
$string['form_header_editquestion'] = 'Editar pregunta';
$string['form_header_newfeedback'] = 'Nueva encuesta';
$string['form_header_newquestion'] = 'Nueva pregunta';
$string['form_header_question'] = 'Pregunta {$a}';
$string['form_header_ranking'] = 'ConfiguracionesRankings';
$string['form_html_currentlang'] = 'Usted está editando {$a}';
$string['form_html_deleteanswerstext'] = 'El cuestionario no puede editarse actualmente, porque ya existen respuestas de usuarios. Usted puede ahora eliminar todas las respuestas o copiar la retroalimentación.';
$string['form_html_deleteanswerswarning'] = 'Estos datos serán perdidos irreparablemente al eliminar las respuestas del usuario. <br/>Por favor, asegúrese de que ya no necesita más estos datos.';
$string['form_html_nolangimplemented'] = 'Esta retroalimentación no tiene idiomas implementados.';
$string['form_html_notextendable'] = 'Usted no puede extender esta pregunta, porque no hay idiomas adicionales disponibles.';
$string['form_notif_heading'] = 'Encabezado de notificación';
$string['form_option_choose'] = 'Por favor elija';
$string['form_select_changepos'] = 'Determinar nueva posición';
$string['form_select_confirmyesno'] = '¿Realmente quiere eliminar?';
$string['form_select_deleteanswers'] = '¿Eliminar respuestas del usuario?';
$string['form_select_feedback'] = 'Elija una retroalimentación';
$string['form_select_newlang'] = 'Idioma';
$string['form_select_question'] = 'Elija una pregunta';
$string['form_select_unwantedlang'] = 'Elegir idioma <br/><span style="font-size: x-small;">(es posible elegir varios)<span>';
$string['infopage_headline_feedbackinfo'] = 'Información de retroalimentación';
$string['infopage_html_coursestartcountd'] = 'La retroalimentación está activa si no han pasado más de {$a} días desde el inicio del curso.';
$string['infopage_link_feedbackinfo'] = 'Más información';
$string['notif_deactivate_howto'] = 'Usted puede desactivar la encuesta al ocultar el bloque "Retroalimentación del curso".';
$string['notif_emoji_bad'] = 'deficiente';
$string['notif_emoji_good'] = 'buena';
$string['notif_emoji_neutral'] = 'suficiente';
$string['notif_emoji_ok'] = 'satisfactoria';
$string['notif_emoji_super'] = 'muy buena';
$string['notif_emoji_superbad'] = 'insufuciente';
$string['notif_feedbackactive'] = 'Una encuesta de retroalimentación del usuario está actualmente activa en este curso.';
$string['notif_pleaseclick'] = 'Por favor elija uno de los emojis. Su respuesta es anónima.';
$string['notif_pleasewriteessay'] = 'Por favor escriba una respuesta en el campo de texto y haga clic en "Enviar". Su respuesta será almacenada de forma anónima.';
$string['notif_question'] = 'Pregunta';
$string['notif_submit'] = 'Enviar';
$string['notif_thankyou'] = 'Gracias por su retroalimentación 😊';
$string['page_headline_admin'] = 'Administración de retroalimentación del curso';
$string['page_headline_listoffeedbacks'] = 'Lista de encuestas';
$string['page_headline_listofquestions'] = 'Cuestionario de \'{$a}\'';
$string['page_html_activated'] = 'La retroalimentación del curso  ({$a}) ha sido registrada como la encuesta actual.';
$string['page_html_answersdeleted'] = 'Las respuestas del usuario han sido eliminadas.';
$string['page_html_courserating'] = 'Valoración del curso';
$string['page_html_editallquestions'] = 'Aplicar a todos los idiomas';
$string['page_html_intronotifications'] = 'La retroalimentación debe cumplir con la(s) siguiente(s) condición(es):';
$string['page_html_nofeedbackactive'] = 'Las encuestas han sido desactivadas.';
$string['page_html_noquestions'] = 'No hay preguntas disponibles.';
$string['page_html_norelations'] = 'Todas las preguntas tienen que estar definidas en por lo menos un idioma común.';
$string['page_html_saveerr'] = 'Ocurrió un error al guardar su evaluación.';
$string['page_html_servedefaultlang'] = 'Todas las preguntas tienen que estar definidas en el idioma común';
$string['page_html_totalanscountinfo'] = '{$a->anscount} respuestas no vacías en total; usted está en la página {$a->page} de {$a->totalpages}.';
$string['page_html_viewintro'] = 'Análisis de encuesta. Los resultados muestran el número de votos para cada calificación y el promedio.';
$string['page_html_viewnavbar'] = 'Análisis de la encuesta';
$string['page_html_wasactive'] = 'estaba activa antes';
$string['page_link_backtoconfig'] = 'Regresar a la administración del sitio web.';
$string['page_link_backtofeedbackview'] = 'Regresar a vista general';
$string['page_link_deletelanguage'] = 'Eliminar idioma(s)';
$string['page_link_download'] = 'Guardar resutados como  {$a}-file';
$string['page_link_newlanguage'] = 'Añadir idioma diferente';
$string['page_link_newquestion'] = 'Añadir nueva pregunta';
$string['page_link_newtemplate'] = 'Crear encuesta nueva';
$string['page_link_noquestion'] = 'No hay preguntas disponibles - crear una pregunta nueva.';
$string['page_link_rankings'] = 'Rankings';
$string['page_link_settings'] = 'Administración';
$string['page_link_showlistofquestions'] = 'Editar preguntas';
$string['page_link_use'] = 'Uso';
$string['page_link_viewresults'] = 'Preguntas y resultados';
$string['perm_header_editnotpermitted'] = 'La encuesta no puede cambiarse por las siguientes razones:';
$string['perm_html_answersexists'] = 'Esta retroalimentación ya ha sido completada por usuarios.';
$string['perm_html_danswerslink'] = 'Para crear una encuesta nueva con las mismas preguntas, Usted puede <a href="admin.php?fid={$a}&mode=feedback&action=new">copiar la retroalimentación</a> o <a href="admin.php?fid={$a}&mode=feedback&action=danswers">eliminar las respuestas del usuario</a>.';
$string['perm_html_duplicatelink'] = 'Para crear una encuesta nueva con las mismas preguntas, Usted puede <a href="admin.php?fid={$a}&mode=feedback&action=new">copiar la encuesta</a> o registrar otro cuestionario como la encuesta actual.';
$string['perm_html_erroractive'] = 'Usted no puede cambiar la encuesta actual.';
$string['perm_html_wasactive'] = 'LA retroalimentación estaba activa antes -> la reactivación NO es posible. Para re-utilizar esta retroalimentación usted necesita hacer una copia.';
$string['pluginname'] = 'Retroalimentación del curso';
$string['qtype_empty_essayans'] = 'Hay un total de {$a} respuestas vacías de ensayo.';
$string['questiontype'] = 'Tipo de pregunta';
$string['questiontype_essay'] = 'Ensayo';
$string['questiontype_schoolgrades'] = 'Años de escuela de uno a seis';
$string['resultspage_headline'] = 'Lista de todas las retroalimentaciones contestadas para este curso';
$string['resultspage_howto'] = 'Elija el nombre de la retroalimentación para mostrar preguntas y resultados.';
$string['resultspage_nav_extension'] = 'Resultados de Retroalimentación del curso';
$string['resultspage_title'] = 'resultadosRetroalimentacion';
$string['table_header_languages'] = 'Idiomas disponibles';
$string['table_header_questions'] = 'Preguntas';
$string['table_html_average'] = 'Promedio';
$string['table_html_nochoice'] = 'Abstenciones';
$string['table_html_nofeedback'] = 'Sin encuesta';
$string['table_html_showanswers'] = 'Mostrar respuestas';
$string['table_html_undefinedlang'] = 'Falta traducción. Idioma \'{$a}\' no disponible.';
$string['table_html_votes'] = 'Número de votos :';
$string['untitled'] = 'Intitulada';
