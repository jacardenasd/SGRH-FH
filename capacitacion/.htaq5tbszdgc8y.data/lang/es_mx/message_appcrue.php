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
 * Strings for component 'message_appcrue', language 'es_mx', version '4.4'.
 *
 * @package     message_appcrue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['api_key'] = 'Clave API para notificaciones de AppCrue';
$string['api_key_help'] = 'Clave API para notificaciones de AppCrue';
$string['app_id'] = 'AppId para la notificación de AppCrue';
$string['app_id_help'] = 'AppId para la notificación de AppCrue';
$string['bufferedmode'] = 'Modo asincrónico';
$string['bufferedmode_help'] = 'Los mensajes se almacenan en búfer y se envían en fragmentos en segundo plano. En "Modo de búfer", el plugin envía el mensaje a la API de TwinPush mediante una solicitud por cada 1000 usuarios. Esto significa que si envía un mensaje a 5000 usuarios, el plugin enviará 5 solicitudes a la API de TwinPush. El plugin esperará la respuesta de cada solicitud antes de enviar la siguiente. Esto se hace para evitar la sobrecarga de la API de TwinPush y el envío de demasiadas solicitudes en poco tiempo. Consulte el archivo README.md.';
$string['enable_push'] = 'Habilitar el servicio de mensajes push';
$string['group_name'] = 'Nombre del grupo para notificaciones de AppCrue';
$string['group_name_help'] = 'Nombre del grupo para notificaciones de AppCrue';
$string['match_user_by'] = 'Campo para hacer coincidir el usuario en Push API';
$string['match_user_by_help'] = 'Cada usuario está asociado a un nombre en la API push que puede no coincidir con el ID de usuario en Moodle.';
$string['only_news_forum'] = 'Filtrar notificaciones de foros.';
$string['only_news_forum_help'] = 'Filtra las notificaciones de los foros y envía únicamente mensajes del foro "Avisos".';
$string['pluginname'] = 'Notificaciones push para Appcrue';
$string['preserveundeliverable'] = 'Almacenar en búfer los mensajes no entregables';
$string['preserveundeliverable_help'] = 'Si TwinPush rechaza el mensaje (principalmente porque se desconoce el alias del dispositivo), se almacenará en la base de datos como fallido. Esto resulta útil para depurar problemas de entrega.';
$string['privacy:metadata'] = 'El plugin "Notificaciones push para AppCrue" no almacena ningún dato personal.';
$string['sendbufferedtask'] = 'Enviar mensajes almacenados en búfer';
$string['sendbufferedtaskerror'] = 'Algunos destinatarios no fueron contactados para los mensajes: {$a}';
$string['url_pattern'] = 'Patrón de URL para los enlaces del evento.';
$string['url_pattern_help'] = 'Patrón de URL para notificaciones push. Las siguientes variables están disponibles: {url}: URL del mensaje, {siteurl}: URL base del servidor. Ejemplo: {siteurl}/local/appcrue/autologin.php?urltogo={url}&fallback=continue&<bearer>';
