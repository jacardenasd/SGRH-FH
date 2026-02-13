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
 * Strings for component 'block_openai_questions', language 'es_mx', version '4.4'.
 *
 * @package     block_openai_questions
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoqbank'] = 'Añadir al Banco de preguntas';
$string['apikey'] = 'Clave API OpenAI';
$string['apikeylabel'] = 'La clave API proporcionada por OpenAI';
$string['cancel'] = 'Cancelar';
$string['editquestions'] = 'Editar preguntas';
$string['error_capability'] = 'Lo siento, usted no tiene permiso para generar preguntas en este curso.';
$string['error_gpt_format'] = 'GPT no pudo regresar preguntas en el formato correcto. Lo siento, no hay nada que usted pueda hacer acerca de esto, excepto intentar generar nuevamente las preguntas. Usted puede refrescar la página para re-intentar la generación de pregunta.';
$string['generatequestions'] = 'Generar preguntas';
$string['herestheresponse'] = '\\n\\nAquí está la respuesta recibida de GPT:\\n\\';
$string['manage'] = 'Configuraciones del Generador de Pregunta OpenAI';
$string['markascorrect'] = 'Marcar como correcta';
$string['model'] = 'Modelo';
$string['modellabel'] = 'El modelo a usar para generar preguntas';
$string['notanumber'] = 'El valor debe ser un número entre 1 y 10';
$string['numbermismatch'] = 'El número de preguntas generadas por GPT no coincide con el número que usted solicitó. Esto podría ser porque el número de preguntas que usted solicitó era demasiado grande, especialmente si el texto de pregunta que usted envió era muy grande. Si esto sigue sucediendo, usted podría querer intentar usar un modelo diferente (solamente un administrador puede cambiar el modelo usado).';
$string['numquestions'] = 'Número de preguntas a generar';
$string['numquestions_help'] = 'A GPT se le pedirá que genere este número de preguntas, pero solo es una solicitud. Una entrada de texto más grande o tipos de preguntas más complejas limitarán la habilidad de GPT para cumplir con el número solicitado.';
$string['openai_questions'] = 'Generador de Pregunta';
$string['openai_questions:addinstance'] = 'Añadir un nuevo bloque Generador de Pregunta';
$string['pluginname'] = 'Generador de Pregunta de OpenAI';
$string['privacy:metadata'] = 'El bloque de Preguntas OpenAI, de forma predeterminada, ni almacena datos personales del usuario ni los envía a OpenAI. Sin embargo, el texto enviado por profesores para generar preguntas es enviado por completo a OpenAI, y entonces está sujeto a la política de privacidad de OpenAI  (https://openai.com/api/policies/privacy/), la cual puede almacenar mensajes par mejorar la API. De forma adicional, este texto es entonces usado para generar preguntas que pueden ser guardadas en el sitio.';
$string['qtype'] = 'Tipo de pregunta';
$string['qtype_help'] = 'Los tipos de pregunta están ordenados por su complejidad. Los tipos ma´s complejos de preguntas reducirán la habilidad de GPT para seguir instrucciones o generar preguntas coherentes.';
$string['sourcetext'] = 'Texto origen';
$string['sourcetextcharlength'] = 'El número de caracteres debe estar entre 100 y 64,000';
