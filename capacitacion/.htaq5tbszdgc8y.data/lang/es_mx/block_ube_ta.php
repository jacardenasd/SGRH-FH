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
 * Strings for component 'block_ube_ta', language 'es_mx', version '4.4'.
 *
 * @package     block_ube_ta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_filter'] = 'Añadir Filtro';
$string['config_condenseprompt'] = 'Condensar \'prompt\'';
$string['config_condenseprompt_help'] = 'La plantilla del \'prompt\' usada para consolidar la historia del chat y pregunta en un solo \'prompt\'. Déjelo vacío para usar el \'prompt\' predeterminado.<p>
<i>Nota:  Esta característica solo funciona en cuentas con ingeniería de \'prompt\' habilitada.</i></p>';
$string['config_customcss'] = 'CSS personalizado';
$string['config_customcss_help'] = 'CSS personalizado a usar para este bloque. Esto debe ser CSS válido.';
$string['config_filters'] = 'Filtrado Avanzado';
$string['config_filters_help'] = 'Configurar los filtros a usar para este bloque.<p>
Ejemlo: {"Categoría": "Mate", "Calificación": "3", "archivo": "handout.pdf"}
</p>';
$string['config_opener'] = 'Abridor de Conversación';
$string['config_opener_help'] = 'El mensaje inicial "enviado por el bot" al usuario final, cuando el chat es abierto por primera vez.<p>
<i>Nota: De forma predeterminada, esta es una cadena de texto específica del idioma. Al cambiar lo predeterminado se anulará el soporte del idioma.</i></p>';
$string['config_questionprompt'] = '\'Prompt\' de Pregunta';
$string['config_questionprompt_help'] = 'La plantilla del prompt que se utilizó para hacer la pregunta. Déjela en blanco para utilizar el prompt predeterminado.<p>
<i>Nota: Esta función solo funciona en cuentas con ingeniería de mensajes habilitada.</i></p>';
$string['config_showsource'] = 'Mostrar Fuente';
$string['config_showsource_help'] = 'Si es que se muestra o no las fuentes empleadas al usuario final, en la bitácora del chat. Ya sea que las fuentes sean o no mostradas, las fuentes seguirán siendo empleadas y proporcionadas a la IA.';
$string['config_sourcecount'] = 'Número de Fuente';
$string['config_sourcecount_help'] = 'De cuantas fuentes sacar y proporcionar a la IA.Los valores soportados son de 0 a 5.';
$string['config_startopen'] = 'Iniciar Abierto';
$string['config_startopen_help'] = 'Si es que el chat inicia abierto, o cerrado.';
$string['config_temperature'] = 'Temperatura';
$string['config_temperature_help'] = 'Parámetro de temperatura de OpenAI GPT. Soporta valores de 0 a 1. Los valores cercanos al 0 resultarán en respuestas más predecibles, pero menos creativas. Los valores cercanos al 1 resultarán en respuestas más creativas, pero menos predecibles. Dejar vacío para usar el valor predeterminado.';
$string['css_url'] = 'URL CSS';
$string['css_url_help'] = 'La URL al archivo CSS a usar para este bloque. Esta debería ser una URL completamente calificada al archivo CSS.';
$string['data_filters'] = 'Filtros de Datos';
$string['field_name'] = 'Nombre';
$string['field_value'] = 'Valor';
$string['input_placeholder'] = 'Haga una pregunta...';
$string['metadata_filter'] = 'Filtros de Metadatos';
$string['opener'] = 'Hola. ¿Cómo puedo ayudarte?';
$string['oracle_apikey'] = 'Clave API';
$string['oracle_apikey_help'] = 'LA Clave API proporcionada a usted para acceder a la API de Oracle.';
$string['oracle_domain'] = 'Dominio Oracle';
$string['oracle_domain_help'] = 'El dominio de la API Oracle. Este debería ser el dominio y puerto de la API Oracle.';
$string['oracle_privatekey'] = 'Clave privada';
$string['oracle_privatekey_help'] = 'La clave privada proporcionada a usted para acceder a la API Oracle.';
$string['oracle_session'] = 'Largo de sesión';
$string['oracle_session_help'] = 'El lapso de tiempo en segundos a usar como una sesión. Esto idealmente debería ser espejo del largo de sesión del LMS.';
$string['pluginname'] = 'Bloque de Asistente Educativo';
$string['privacy:metadata'] = 'El bloque UBE TA no almacena ningún dato personal.';
$string['ube_ta:addinstance'] = 'Añadir un nuevo  bloque UBE TA';
$string['ube_ta:myaddinstance'] = 'Añadir un nuevo  bloque UBE TA a la página de Mi Moodle';
