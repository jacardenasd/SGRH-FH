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
 * Strings for component 'block_terusrag', language 'es_mx', version '4.4'.
 *
 * @package     block_terusrag
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aiprovider'] = 'Proveedor de IA';
$string['aiprovider_desc'] = 'Seleccione el proveedor de IA que se utilizará para generar respuestas';
$string['askbutton'] = 'Preguntar';
$string['blocktitle'] = 'Título del bloque';
$string['blocktitle_help'] = 'El título que aparece en la parte superior del bloque Terus RAG';
$string['datainitializer'] = 'Inicializador de datos';
$string['gemini_api_key'] = 'Clave API Gemini';
$string['gemini_api_key_desc'] = 'Ingresar su Clave API Gemini de Google AI Studio';
$string['gemini_endpoint'] = 'Punto final de la API de Gemini';
$string['gemini_endpoint_desc'] = 'La URL base para las solicitudes de API de Gemini';
$string['gemini_model_chat'] = 'Modelo de Chat';
$string['gemini_model_chat_desc'] = 'Seleccione el modelo Gemini que se utilizará para las interacciones de chat';
$string['gemini_model_embedding'] = 'Modelo de incrustación';
$string['gemini_model_embedding_desc'] = 'Seleccione el modelo que se utilizará para generar incrustaciones';
$string['geminisettings'] = 'Configuraciones de API de Gemini';
$string['geminisettings_desc'] = 'Configurar los ajustes para la integración de la API de Google Gemini';
$string['noresultsfound'] = 'No se encontraron resultados';
$string['notokeninformation'] = 'No hay información disponible del token';
$string['ollama_api_key'] = 'Clave API de Ollama';
$string['ollama_api_key_desc'] = 'Ingresar su Clave API de Ollama';
$string['ollama_endpoint'] = 'Punto final de la API de Ollama';
$string['ollama_endpoint_desc'] = 'La URL base para las solicitudes de la API de Ollama';
$string['ollama_model_chat'] = 'Modelo de Chat';
$string['ollama_model_chat_desc'] = 'Seleccione el modelo de Ollama que se utilizará para las interacciones de chat';
$string['ollama_model_embedding'] = 'Modelo de Incrustación';
$string['ollama_model_embedding_desc'] = 'Seleccione el modelo que se utilizará para generar incrustaciones';
$string['ollamasettings'] = 'Configuraciones de Ollama';
$string['ollamasettings_desc'] = 'Configurar los ajustes para integración de Ollama';
$string['openai_api_key'] = 'Clave API de OpenAI';
$string['openai_api_key_desc'] = 'Ingresar su Clave API de OpenAI';
$string['openai_endpoint'] = 'Punto final de la API de OpenAI';
$string['openai_endpoint_desc'] = 'La URL base para las solicitudes de API de OpenAI';
$string['openai_model_chat'] = 'Modelo de Chat';
$string['openai_model_chat_desc'] = 'Seleccione el modelo OpenAI que se utilizará para las interacciones de chat';
$string['openai_model_embedding'] = 'Modelo de Incrustación';
$string['openai_model_embedding_desc'] = 'Seleccione el modelo que se utilizará para generar incrustaciones';
$string['openaisettings'] = 'Configuraciones de OpenAI';
$string['openaisettings_desc'] = 'Configurar los ajustes para la integración de OpenAI';
$string['optimizeprompt'] = 'Optimización del Prompt';
$string['optimizeprompt_desc'] = 'Optimizar el prompt del sistema para mejores respuestas de IA';
$string['pluginname'] = 'Terus RAG';
$string['promptsettings'] = 'Configuraciones del prompt';
$string['promptsettings_desc'] = 'Configurar prompts del sistema';
$string['queryplaceholder'] = 'Escribir aquí su información';
$string['responseplaceholder'] = 'Formule una prgunta para iniciar';
$string['stopwords_not_found'] = 'No se encontró el archivo de palabras para detener';
$string['system_prompt'] = 'Prompt del Sistema';
$string['system_prompt_default'] = 'Eres un asistente de Moodle especializado en responder consultas sobre materiales. Basándote únicamente en el contexto dado para formular tu respuesta, las respuestas deben seguir el siguiente formato:

[índice] el contexto

Si desconoces la información, simplemente indica "no sé".';
$string['system_prompt_desc'] = 'Prompt base del sistema para respuestas RAG';
$string['terusrag:addinstance'] = 'Añadir un nuevo bloque Terus RAG';
$string['terusrag:managesettings'] = 'Gestionar configuraciones de Terus RAG';
$string['terusrag:myaddinstance'] = 'Añadir un nuevo bloque Terus RAG a la página de Mi Moodle';
$string['token_usage'] = 'Uso del token: Prompt: {$a->prompt}, Respuesta: {$a->response}, Total: {$a->total}';
$string['unknowncourse'] = 'Curso desconocido';
$string['vector_database'] = 'Tipo de Base de Datos de Vector';
$string['vector_database_desc'] = 'Elegir cual Base de Datos de vector usar para almacenar las incrustaciones';
$string['vectordb_chromadb'] = 'ChromaDB';
$string['vectordb_flatfile'] = 'Moodle DB (Simple)';
$string['vectordb_host'] = 'Host de la Base de Datos';
$string['vectordb_host_desc'] = 'El nombre de host donde se ejecuta su base de datos vectorial';
$string['vectordb_password'] = 'Contraseña de la Base de Datos';
$string['vectordb_password_desc'] = 'Contraseña para autenticación con la Base de Datos de Vector';
$string['vectordb_port'] = 'Puerto de la Base de Datos';
$string['vectordb_port_desc'] = 'El número del puerto para conectarse con la Base de Datos de vector';
$string['vectordb_supabase'] = 'Supabase';
$string['vectordb_username'] = 'Usuario de la Base de Datos';
$string['vectordb_username_desc'] = 'Nombre del usuario para autenticación con la Base de Datos del vector';
$string['vectordbsettings'] = 'Configuraciones de la Base de Datos de vector';
$string['vectordbsettings_desc'] = 'Configurar el backend de la Base de Datos de vector';
