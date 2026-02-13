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
 * Strings for component 'local_geniai', language 'es_mx', version '4.4'.
 *
 * @package     local_geniai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['agentphoto'] = 'Foto de agente de IA';
$string['agentphoto_desc'] = 'Imagen mostrada como avatar del agente de IA durante las conversaciones de chat.';
$string['apikey'] = 'Clave API OpenAI';
$string['apikey_desc'] = 'La clave API de su cuenta AOpenAI';
$string['case'] = 'Casos de Uso';
$string['caseuse_balanced'] = 'Respuestas Balanceadas => Temperatura 0.5 - 0.7, Top_p 0.7';
$string['caseuse_chatbot'] = 'Chatbot => Temperatura 0.2 - 0.6, Top_p 0.8';
$string['caseuse_creative'] = 'Generación Creativa => Temperatura 0.7 - 1.0, Top_p 0.8';
$string['caseuse_exploration'] = 'Exploración de Opciones => Temperatura 0.8 - 1.0, Top_p 0.9';
$string['caseuse_formal'] = 'Tono Formal => Temperatura 0.3 - 0.5, Top_p 0.6';
$string['caseuse_informal'] = 'Tono Informal => Temperatura 0.7 - 0.9, Top_p 0.8';
$string['caseuse_precise'] = 'Respuestas Precisos => Temperatura 0.0 - 0.3, Top_p 1.0';
$string['clear_history_title'] = 'Borrar toda la historia';
$string['close_title'] = 'Cerrar Chat';
$string['frequency_penalty'] = 'Penalización por Frecuencia';
$string['frequency_penalty_desc'] = 'Este parámetro se utiliza para evitar que el modelo repita las mismas palabras o frases con demasiada frecuencia en el texto generado. Es un valor que se suma a la probabilidad logarítmica de un token cada vez que aparece en el texto generado. Una penalización de frecuencia más alta hará que el modelo sea más conservador en cuanto al uso de tokens repetidos.';
$string['geniai:manage'] = 'Gestionar GeniAI';
$string['geniai:view'] = 'Ver GeniAI';
$string['geniainame'] = 'Nombre del asistente';
$string['geniainame_desc'] = 'Defia el nombre de su asistente';
$string['h5p-accordion-desc'] = 'Crea un Glosario que permita a los estudiantes acceder rápidamente a respuestas sin sentirse abrumados por un exceso de texto.';
$string['h5p-accordion-title'] = 'Glosario';
$string['h5p-advancedtext-desc'] = 'Crea un libro digital a partir de tu contenido, organizándolo en capítulos de manera lógica y atractiva para garantizar una división del material coherente y cautivadora.';
$string['h5p-advancedtext-title'] = 'Libro Digital';
$string['h5p-block-title'] = 'Título del Bloque';
$string['h5p-create'] = 'Crear H5P con GeniAI';
$string['h5p-create-new'] = 'Crear un nuevo H5P con GeniAI';
$string['h5p-create-this'] = 'Crear con este recurso';
$string['h5p-create-title'] = 'Título del H5P';
$string['h5p-create-title-desc'] = 'Define el título principal del contenido H5P que se mostrará a los usuarios en la interfaz.';
$string['h5p-createpage-title'] = 'Crear nuevo {$a}';
$string['h5p-crossword-desc'] = 'Cree un juego de crucigramas interactivo para involucrar a los estudiantes, utilizando palabras clave de su contenido para promover un aprendizaje divertido y dinámico.';
$string['h5p-crossword-title'] = 'Crucigrama';
$string['h5p-delete-success'] = '¡H5P eliminado exitosamente!';
$string['h5p-dialogcards-desc'] = 'Crea tarjetas didácticas (flashcards) que actúen como ejercicios interactivos para ayudar a los estudiantes a memorizar palabras, frases o conceptos clave de los textos. En el frente de cada tarjeta hay una pista o pista y, al voltearla, el estudiante revela la información correspondiente. Estas tarjetas se pueden usar para aprender idiomas, resolver problemas de matemáticas o ayudar a los estudiantes a memorizar datos importantes como eventos históricos, fórmulas o nombres.';
$string['h5p-dialogcards-title'] = 'Tarjetas didácticas (flashcards)';
$string['h5p-dragtext-desc'] = 'Crear un juego de arrastrar palabras en el que el alumno debe arrastrar la parte faltante del texto hasta su lugar correcto, formando una expresión completa. Este juego puede utilizarse para evaluar si el alumno recuerda el contenido leído o comprende lo tratado. Además, ayuda al alumno a reflexionar más profundamente sobre el texto, promoviendo una mejor asimilación del contenido.';
$string['h5p-dragtext-title'] = 'Juego de Arrastrar las Palabras';
$string['h5p-example'] = 'Ver ejemplo';
$string['h5p-findthewords-desc'] = 'Crear un juego de búsqueda de palabras en el que los estudiantes deben encontrar y seleccionar palabras en una cuadrícula según una lista proporcionada.';
$string['h5p-findthewords-title'] = 'Juego de Búsqueda de Palabras';
$string['h5p-interactivebook-desc'] = 'Cree un libro interactivo que combine diversos contenidos interactivos, como videos interactivos, glosarios, exámenes, actividades de arrastrar y soltar, crucigramas, búsquedas de palabras y más, organizados en varias páginas. Agregue un resumen al final que muestre el puntaje total que obtuvo el estudiante a lo largo del libro.';
$string['h5p-interactivebook-title'] = 'Libro Interactivo';
$string['h5p-interactivevideo-desc'] = 'Crear un video interactivo con capítulos y un glosario que destaque los puntos clave del contenido. Al final, agrega un resumen interactivo para reforzar el aprendizaje y repasar los temas tratados.';
$string['h5p-interactivevideo-title'] = 'Video Interactivo';
$string['h5p-manager'] = 'Gestionar H5P con GeniAI';
$string['h5p-manager-scorm'] = 'Gestionar SCORM con GeniAI';
$string['h5p-next-step'] = 'Próximo paso';
$string['h5p-no-apikey'] = '<p>La configuración de la clave API de ChatGPT es necesaria para que el sistema de creación de cuentas funcione correctamente. Esto permitirá que el sistema se comunique con ChatGPT para realizar las operaciones necesarias durante el proceso de creación de cuentas.<p><p><a href="{$a}">Haga clic aquí para configurar la clave API de ChatGPT.</a></p>';
$string['h5p-page-title'] = 'Crear un H5P con GeniAI';
$string['h5p-questionset-desc'] = 'Cree un conjunto de preguntas que permita a los estudiantes resolver una secuencia de preguntas diversas, incluidos tipos como opción múltiple y verdadero/falso, ofreciendo una experiencia interactiva y desafiante.';
$string['h5p-questionset-title'] = 'Exámenes';
$string['h5p-readmore'] = '...más';
$string['h5p-return'] = 'Regresar al Banco de Contenidos';
$string['h5p-title'] = 'Administrar el banco de contenidos GeniAI';
$string['max_tokens'] = 'Máximo de Palabras en Respuesta';
$string['max_tokens_desc'] = 'Número máximo de palabras que se pueden generar en cada solicitud.';
$string['message_01'] = '¡Hola, {$a}! 🌟';
$string['message_02'] = '¡Bienvenido/a al curso {$a->coursename} en Moodle {$a->moodlename}!

Soy {$a->geniainame} y estoy aquí para que tu experiencia de aprendizaje sea lo más increíble posible.

¿En qué puedo ayudarte hoy? 🌟📚';
$string['mode'] = 'Modo de Uso';
$string['mode_desc'] = 'Define qué modo de uso desea para el globo';
$string['mode_name_geniai'] = 'Tutor de GeniIA';
$string['mode_name_none'] = 'Sin globo de chat';
$string['model'] = 'El Modelo API';
$string['model_desc'] = 'El modelo de API a ejecutarse en OpenAI. Los valores disponibles están en el <a href="https://platform.openai.com/docs/models/overview" target="_blank">sitio web de OpenAI</a><br>
* <strong>gpt-4</strong>: Mucho más poderoso, ligeramente más caro, tarda un poco más en responder y requiere un <a href="https://help.openai.com/en/articles/7102672-how-can-i-access-gpt-4" target="_blank">prepago de $1</a> para probar.<br>
* <strong>gpt-4o-mini</strong>: Menos poderoso que gpt-4, pero más rápido y económico. No se requiere prepago.';
$string['modulename'] = 'GeniAI';
$string['modules'] = 'Módulos a ocultar de {$a}';
$string['modules_desc'] = 'Esta lista contiene los módulos que no deben ponerse a disposición de los estudiantes, garantizando que no se utilicen en ejercicios.';
$string['online'] = 'En línea';
$string['pluginname'] = 'GeniAI';
$string['presence_penalty'] = 'Penalización por Presencia';
$string['presence_penalty_desc'] = 'Este parámetro se utiliza para alentar al modelo a incluir una variedad de tokens en el texto generado. Es un valor que se resta de la probabilidad logarítmica de un token cada vez que se genera. Un valor de penalización de presencia más alto hará que el modelo tenga más probabilidades de generar tokens que aún no están incluidos en el texto generado.';
$string['privacy:metadata'] = 'El complemento GeniAI almacena el historial de conversaciones y transmite solo el nombre completo, el nombre del curso y la URL a OpenAI, sin compartir ningún otro dato personal.';
$string['report_completion_tokens'] = 'Número de Tokens recibidos';
$string['report_datecreated'] = 'Día';
$string['report_filename'] = 'Reporte de Uso de Asistente GPT';
$string['report_info'] = '<p>En el reporte presentado, solo están disponibles las primeras 100 líneas. Para acceder a todos los registros, descargue el documento completo.</p><p>En cuanto a los tokens, una regla general es que un token corresponde aproximadamente a unos 4 caracteres de un texto en inglés común. Esto equivale aproximadamente a ¾ de una palabra (es decir, 100 tokens ~= 75 palabras). Obtenga más información en la página <a href="https://platform.openai.com/tokenizer" target="_blank">Tokenización del modelo de lenguaje</a>.</p>';
$string['report_model'] = 'Modelo ChatGPT';
$string['report_prompt_tokens'] = 'Número de Tokens Enviados';
$string['report_title'] = 'Reporte';
$string['send_message'] = 'Enviar Mensaje';
$string['settings'] = 'Configurar GeniAI';
$string['settings_casedesc'] = 'Los parámetros de temperatura y Top_p definidos para cada escenario, como generación de texto y código, escritura creativa, chatbot, generación de comentarios textuales, análisis de datos y escritura exploratoria. Cada configuración afecta la creatividad y la coherencia del modelo en la generación de contenido.<br><br>Consulte la siguiente tabla para obtener orientación sobre el uso de Temperatura y Top_p:<br>';
$string['settings_casedesc_balancedresp'] = 'Respuestas Balanceadas';
$string['settings_casedesc_balancedresp_desc'] = 'Respuestas balanceadas entre precisión y creatividad. Ideal para conversaciones naturales y amigables.';
$string['settings_casedesc_caseuse'] = 'Caso de Uso';
$string['settings_casedesc_chatbot'] = 'Chatbot';
$string['settings_casedesc_chatbot_desc'] = 'Respuestas rápidas, consistentes y contextuales para interacción en tiempo real con los estudiantes.';
$string['settings_casedesc_creativegen'] = 'Generación Creativa';
$string['settings_casedesc_creativegen_desc'] = 'Genera respuestas más creativas, originales o exploratorias. Útil para lluvia de ideas o narración de historias.';
$string['settings_casedesc_description'] = 'Descripción';
$string['settings_casedesc_formaltones'] = 'Tonos Formales';
$string['settings_casedesc_formaltones_desc'] = 'Crea textos más formales o técnicos con menos variación creativa.';
$string['settings_casedesc_optionexplore'] = 'Exploración de Opciones';
$string['settings_casedesc_optionexplore_desc'] = 'Genera múltiples respuestas alternativas para considerar diferentes enfoques a una pregunta.';
$string['settings_casedesc_preciseresp'] = 'Respuestas Precisos';
$string['settings_casedesc_preciseresp_desc'] = 'Máxima precisión y predictibilidad. Recomendado para tareas técnicas o informativas.';
$string['settings_casedesc_relaxedtones'] = 'Tonos Relajados';
$string['settings_casedesc_relaxedtones_desc'] = 'Genera textos más ligeros e informales con un enfoque creativo y amigable.';
$string['settings_casedesc_temperature'] = 'Temperatura';
$string['settings_casedesc_top_p'] = 'Top_p';
$string['talk_geniai'] = 'Habla con {$a} aquí';
$string['write_message'] = 'Escriba un mensaje...';
