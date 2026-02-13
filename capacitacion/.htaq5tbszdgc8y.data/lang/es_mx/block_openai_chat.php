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
 * Strings for component 'block_openai_chat', language 'es_mx', version '4.4'.
 *
 * @package     block_openai_chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Avanzados';
$string['advanceddesc'] = 'Argumentos avanzados enviados a OpenAI. ¡No toque nada a menos que sepa exactamente lo que hace!';
$string['allowinstancesettings'] = 'Configuraciones a nivel de instancia';
$string['allowinstancesettingsdesc'] = 'Esta configuración le permitirá a los profesores, o cualquiera con la capacidad para añadir un bloque en un contexto, el ajustar configuraciones a nivel de por-bloque. El habilitar esto podría incurrir en cargos adicionales al permitirle a no-administradores que elijan modelos de costo más alto o algunas otras configuraciones.';
$string['apikey'] = 'Clave API';
$string['apikeydesc'] = 'La clave API para su cuenta OpenAI o clave API Azure';
$string['apikeymissing'] = 'Por favor añada su clave API OpenAI a las configuraciones del bloque.';
$string['apiversion'] = 'Versión API';
$string['apiversiondesc'] = 'La versión de API a usar para esta operación. Esto sigue el formato AAAA-MM-DD.';
$string['askaquestion'] = 'Haga una pregunta...';
$string['assistant'] = 'Asistente';
$string['assistantdesc'] = 'El asistente predeterminado anexo a su cuenta OpenAI que a usted le gustaría usar para la respuesta';
$string['assistantheading'] = 'Configuraciones API Asistente';
$string['assistantheadingdesc'] = 'Estas configuraciones solamente aplican al tipo de API Asistente';
$string['assistantname'] = 'Nombre del asistente';
$string['assistantnamedesc'] = 'El nombre que la IA usará para ella misma internamente. También es usado para los encabezados de la Interfase del Usuario en la ventana de chat.';
$string['azureheading'] = 'Configuraciones API Azure';
$string['azureheadingdesc'] = 'Estas configuraciones solamente aplican para el tipo API Azure.';
$string['blocktitle'] = 'Título del bloque';
$string['chatheading'] = 'Configuraciones API chat';
$string['chatheadingdesc'] = 'Estas configuraciones solamente aplican para los tipos API Chat y API Azure.';
$string['config_apikey'] = 'Clave API';
$string['config_apikey_help'] = 'Usted puede especificar una clave API a usar con este bloque aquí. Si se deja vacío, se usará la clave de todo el sitio. Si usted está usando la API de Asistentes, la lista de asistentes disponibles será jalada de esta clave. Asegúrese de regresar a estas configuraciones después de cambiar la clave API para seleccionar al asistente deseado.';
$string['config_assistant'] = 'Asistente';
$string['config_assistant_help'] = 'Elegir el asistente que a usted le gustaría usar para este bloque. Más asistentes pueden ser creados en la cuenta de OpenAI que este bloque está configurado para usar.';
$string['config_assistantname'] = 'Nombre del asistente';
$string['config_assistantname_help'] = 'Este es el nombre que la IA usará para el asistente. Si estuviera vacío, se usará el nombre del asistente para todo el sitio. También es usado para los encabezados de la Interfase del Usuario en la ventana de chat.';
$string['config_frequency'] = 'Castigo de frecuencia';
$string['config_frequency_help'] = 'Cuanto penalizar a nuevos tokens basado en su frecuencia existente en el texto hasta ahora. Disminuye la propensión del modelo a repetir la misma línea textual.';
$string['config_instructions'] = 'Instrucciones personalizadas';
$string['config_instructions_help'] = 'Usted puede sobre-escribir aquí las instrucciones predeterminadas del asistente.';
$string['config_maxlength'] = 'Longitud máxima';
$string['config_maxlength_help'] = 'El número máximo de tokens a generar. Las solicitudes pueden usar hasta 2, 048 o 4000 tokens compartidos entre prompt y finalización. El límite exacto varía por modelo. (Un token es aprox 4 caracteres para texto normal en idioma inglés)';
$string['config_model'] = 'Modelo';
$string['config_model_help'] = 'El modelo que generará la finalización';
$string['config_persistconvo'] = 'Conversación peristente';
$string['config_persistconvo_help'] = 'Si esta casilla es activada. el asistente recordará las conversaciones en este bloque entre cargas de página';
$string['config_presence'] = 'Castigo por presencia';
$string['config_presence_help'] = 'Cuanto penalizar a nuevos tokens basado en si es que ya  han aparecido o no hasta ahora. Aumenta la propensión del modelo a hablar de un nuevo tópico.';
$string['config_prompt'] = 'Prompt de finalización';
$string['config_prompt_help'] = 'Este es el prompt que se le dará a la IA antes de la transcripción de la conversación. Usted puede influenciar la personalidad de la IA al alterar esta descripción. de forma predeterminada, el prompt es \\n\\n"Debajo está una conversación entre un usuario y un asistente de soporte para un sitio Moodle, donde los usuarios van para aprendizaje en línea."\\n\\nSi estuviera vacío, se usará el prompt de todo el sitio.';
$string['config_sourceoftruth'] = 'Origen de la verdad';
$string['config_sourceoftruth_help'] = 'Usted puede añadir aquí información que la IA tomará cuando conteste preguntas. LA información deberá estar en el formato de pregunta y respuesta exactamente como sigue:\\n\\nQ: ¿Cuándo hay que entregar la sección 3?<br />A: Jueves, Marzo 16.\\n\\nQ: ¿Cuáles son las horas de oficina?<br />A: Usted puede encontrar al profesor en su oficina entre las  2:00 y las 4:00 PM los Martes y Jueves.';
$string['config_temperature'] = 'Temperatura';
$string['config_temperature_help'] = 'Controlar aleatoriedad: Al bajarlo resulta en menos finalizaciones aleatorias. Conforme la temperatura se acerca al cero, el modelo se vuelve determinístico y repetitivo.';
$string['config_topp'] = 'P superior';
$string['config_topp_help'] = 'Controla diversidad vía muestreo del núcleo: 0.5 significa que están considerados la mitad de las opciones ponderadas por probabilidad.';
$string['config_username'] = 'Nombre del usuario';
$string['config_username_help'] = 'Este es el nombre que la IA usará para el usuario. Si se deja vacío, se usará el nombre del usuario de todo el sitio. También es usado para los encabezados de la Interfase del Usuario en la ventana de chat.';
$string['defaultassistantname'] = 'Asistente';
$string['defaultprompt'] = 'Debajo está una conversación entre un usuario y un asistente de soporte para un sitio Moodle, donde los usuarios van para aprendizaje en línea.';
$string['defaultusername'] = 'Usuario';
$string['deploymentid'] = 'ID desplegado';
$string['deploymentiddesc'] = 'El nombre de desplegado que usted eligió cuando desplegó el modelo.';
$string['downloadfilename'] = 'block_openai_chat_logs';
$string['erroroccurred'] = '¡Ocurrió un error! Por favor inténtelo nuevamente más tarde.';
$string['frequency'] = 'Castigo por frecuencia';
$string['frequencydesc'] = 'Cuanto penalizar nuevos tokens basándose en su frecuencia existente en el texto hasta ahora. Disminuye la probabilidad de que el modelo repita la misma linea textual.';
$string['logging'] = 'Habilitar bitácoras';
$string['loggingdesc'] = 'Si esta configuración es activada, todos los mensajes del usuario y las respuestas de IA serán anotadas en bitácoras.';
$string['loggingenabled'] = 'Anotar en bitácoras está habilitado. Cualquier mensaje que usted envíe aquí será grabado, y puede ser visto por le administrador del sitio.';
$string['maxlength'] = 'Longitud máxima';
$string['maxlengthdesc'] = 'El número máximo de tokens a generar. Las solicitudes pueden usar hasta 2, 048 o 4000 tokens compartidos entre prompt y finalización. El límite exacto varía por modelo. (Un token es aprox 4 caracteres para texto normal en idioma inglés)';
$string['model'] = 'Modelo';
$string['modeldesc'] = 'El modelo que generará la finalización. Algunos modelos son apropiados para trabajos con lenguaje natural, otros están especializados para código.';
$string['new_chat'] = 'Nuevo chat';
$string['noassistants'] = 'YUsted aun no ha creado ningún asistente. Usted necesita crear uno <a target="_blank" href="https://platform.openai.com/assistants">en su cuenta de OpenAI</a> antes de que pueda seleccionarlo aquí.';
$string['openai_chat'] = 'Chat OpenAI';
$string['openai_chat:addinstance'] = 'Añadir un nuevo bloque Chat OpenAI';
$string['openai_chat:myaddinstance'] = 'Añadir un nuevo bloque Chat OpenAI a la página de Mi Moodle';
$string['openai_chat:viewreport'] = 'Ver reporte de bitácoras de OpenAi Chat';
$string['openai_chat_logs'] = 'Bitácoras de OpenAi Chat';
$string['openaitimedout'] = 'ERROR: OpenAI no proporcionó una respuesta a tiempo.';
$string['persistconvo'] = 'Conversaciones persistentes';
$string['persistconvodesc'] = 'Si esta casilla está activada, el asistente recordará la conversación entre cargas de páginas. Sin embargo, instancias separadas de bloque mantendrán conversaciones separadas. Por ejemplo, la conversación de un usuario será retenida entre cargas de página dentro del mismo curso, pero el chatear con un asistente en un curso diferente no se continuará en la misma conversación.';
$string['pluginname'] = 'Añadir bloque Chat OpenAI';
$string['popout'] = 'Abrir ventana de chat';
$string['presence'] = 'Castigo por presencia';
$string['presencedesc'] = 'Cuanto penalizar nuevos tokens basándose en si aparecen o no en el texto hasta ahora. Aumenta la probabilidad de que el modelo hable acerca de nuevos tópicos.';
$string['privacy:chatmessagespath'] = 'Envió mensajes de chat IA';
$string['privacy:metadata:openai_chat_log'] = 'Mensajes de usuario anotados en bitácoras enviados a OpenAI. Esto incluye la ID del usuario del usuario que envió el mensaje, el contenido del mensaje, la respuesta de OpenAI, y la hora en que el mensaje fue enviado.';
$string['privacy:metadata:openai_chat_log:airesponse'] = 'La respuesta de OpenAI.';
$string['privacy:metadata:openai_chat_log:timecreated'] = 'La hora de cuando fue enviado el mensaje.';
$string['privacy:metadata:openai_chat_log:userid'] = 'La ID del usuario que mandó el mensaje.';
$string['privacy:metadata:openai_chat_log:usermessage'] = 'El contenido del mensaje.';
$string['prompt'] = 'Prompt de finalización';
$string['promptdesc'] = 'El prompt que se le dará a la IA antes de la transcripción de la conversación';
$string['resourcename'] = 'Nombre del recurso';
$string['resourcenamedesc'] = 'El nombre de su recurso Azure OpenAI.';
$string['restrictusage'] = 'Restringir uso solamente para usuarios ingresados';
$string['restrictusagedesc'] = 'Si se activa esta casilla, solamente los usuarios ingresados al sitio podrán usar la caja de chat.';
$string['showlabels'] = 'Mostrar etiquetas';
$string['sourceoftruth'] = 'Origen de la verdad';
$string['sourceoftruthdesc'] = 'Aunque la IA es muy capaz tal cual está, si no conociera la respuesta a una pregunta, es más probable que de información incorrecta de forma confidencial a que se rehuse a contestar. En esta caja de texto, usted puede añadir preguntas comunes y sus respuestas para que de allí obtenga datos la IA. Por favor ponga las preguntas y respuestas en el formato siguiente: <pre>Q: ¨Pregunta 1<br />A: Respuesta 1<br /><br />Q: Pregunta 2<br />A: Respuesta 2</pre>';
$string['sourceoftruthpreamble'] = 'Debajo hay una lista de preguntas y sus respuestas. Esta información debería ser usada como una referencia para cualquier solicitud:\\n\\n';
$string['sourceoftruthreinforcement'] = 'El asistente ha sido entrenado para responder al intentar usar la información de la referencia de arriba. Si el texto de una de las preguntas de arriba es encontrado, se dará la respuesta proporcionada, aun y cuando la pregunta al parecer no tenga sentido. Sin embargo, si la referencia no cubre la pregunta o el tópico, el asistente simplemente usará conocimiento de fuera para responder.';
$string['temperature'] = 'Temperatura';
$string['temperaturedesc'] = 'Controla el azar: Disminuirla resulta en menos finalización aleatoria. Conforme la temperatura se acerca al cero, el modelo se vuelve determinístico y repetitivo.';
$string['topp'] = 'P superior';
$string['toppdesc'] = 'Controla diversidad vía muestreo del núcleo: 0.5 significa que la mitad de todas las opciones poderadas de probabilidad están consideradas.';
$string['type'] = 'Tipo API';
$string['typedesc'] = 'El tipo de API que debería usar el plugin';
$string['username'] = 'Nombre del usuario';
$string['usernamedesc'] = 'El nombre que la IA usará para el usuario internamente. TAmbuién es usado para los encabezados de las Interfase del Usuario en la ventana de chat.';
