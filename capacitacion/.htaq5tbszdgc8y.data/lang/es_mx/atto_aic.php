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
 * Strings for component 'atto_aic', language 'es_mx', version '4.4'.
 *
 * @package     atto_aic
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_to_editor'] = 'Añadir al editor';
$string['advanced'] = 'Avanzado';
$string['advanceddesc'] = 'Argumentos avanzados enviados a OpenAI. ¡NO LO TOQUE a menos que realmente sepa lo que está haciendo!';
$string['aic:use'] = 'Puede usar';
$string['allowed_admin'] = 'Permitir a administradores del sitio';
$string['allowed_admin_desc'] = '';
$string['allowed_role'] = 'Rol permitido';
$string['allowed_role_desc'] = 'Usuarios con rol a nivel del sistema, tendrán permitido usar esta característica';
$string['apikey'] = 'Clave API OpenAI';
$string['apikeydesc'] = 'La Clave API OpenAI para su cuenta de OpenAI';
$string['assistantname'] = 'Nombre del asistente';
$string['assistantnamedesc'] = 'El nombre que la IA usará para sí misma internamente';
$string['buttonname'] = 'Contenido Generado';
$string['choice'] = 'Número de borrador';
$string['choice_desc'] = 'Número de borrador a buscar';
$string['error'] = 'No pudimos generar contenido. ¡Puede intentarlo de nuevo!';
$string['frequency'] = 'Penalización por frecuencia';
$string['frequencydesc'] = 'Cuanto penalizar nuevos tokens basados en su frecuencia existente en el texto hasta ahorita. Disminuye la probabilidad de que el modelo repita la misma línea';
$string['header'] = 'Crear contenido mediante IA';
$string['help'] = 'Usted puede seleccionar del editor o escribir en el área de texto. Máximo 1000 caracteres y mínimo 3 caracteres';
$string['maxlength'] = 'Longitud máxima';
$string['maxlengthdesc'] = 'El número máximo de tokes a generar. Las solicitudes pueden usar hasta  2,048 o 4,000 tokens compartidos entre petición (prompt) y finalización. El límite exacto varía por modelo (Un token es aproximadamente 4 caracteres para texto normal en idioma inglés)';
$string['model'] = 'Modelo';
$string['modeldesc'] = 'El modelo que generará la finalización. Algunos modelos son apropiados para trabajos con lenguaje natural, otros se especializan en código.';
$string['placeholder'] = 'Escribir acerca de educación digital';
$string['pluginname'] = 'Generador de contenido por IA';
$string['presence'] = 'Penalización de presencia';
$string['presencedesc'] = 'Cuanto penalizar nuevos tokens basándose en si es que aparecen o no en el texto hasta ahorita. Aumenta la probabilidad de que el modelo hable acerca de nuevos tópicos.';
$string['prompt'] = 'Petición (prompt) de finalización';
$string['promptdesc'] = 'La petición(prompt) que será dado a la IA antes de la transcripción de la conversación';
$string['showlabels'] = 'Mostrar etiquetas';
$string['sourceoftruth'] = 'Fuente de la verdad';
$string['sourceoftruthdesc'] = 'Aunque la IA es muy capaz tal como está, si no conoce la respuesta a una pregunta, es más probable que de información incorrecta confidencialmente a que se rehúse a contestar. En esta caja de texto, usted puede añadir preguntas comunes y sus respuestas para que las tome la IA. Por favor ponga las preguntas y respuestas en el siguiente formato: <pre>P: Pregunta 1<br />R: Respuesta 1<br /><br />P: Pregunta2<br />R: Respuesta 2</pre>';
$string['temperature'] = 'Temperatura';
$string['temperaturedesc'] = 'Controla aleatoriedad: Disminuirla resulta en menos finalizaciones aleatorias. Conforme la temperatura se acerca al cero, el modelo se volverá determinístico y repetitivo.';
$string['textlength'] = 'Por favor escriba más de 3 caracteres y no más de 1000 caracteres';
$string['topp'] = 'P superior';
$string['toppdesc'] = 'Controla diversidad vía muestreo del núcleo: 0.5 significa la mitad de que sean consideradas todas las opciones ponderadas.';
$string['username'] = 'Nombre del usuario';
$string['usernamedesc'] = 'El nombre que la IA usará internamente para el usuario';
