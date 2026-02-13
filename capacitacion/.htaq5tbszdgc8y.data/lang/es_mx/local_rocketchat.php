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
 * Strings for component 'local_rocketchat', language 'es_mx', version '4.4'.
 *
 * @package     local_rocketchat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowexternalconnection'] = 'Conexión externa';
$string['auth_failure'] = 'Integración Rocket.Chat - falla de autenticación';
$string['button_sync'] = 'Sincronización manual';
$string['channel_creation'] = 'Integración Rocket.Chat - creación de canal';
$string['connection_failure'] = 'No se pudo establecer una conexión cliente con el servidor Rocket.Chat';
$string['courseeventbasedsyncresult'] = 'La ID del curso es - {$a->courseid}  / La eventbasedsync es {$a->eventbasedsync}';
$string['courseinfo_3'] = 'Pasar el ratón encima de los tres puntos mostrará cualquier error.';
$string['courseinfo_4'] = 'La ejecución de la sincronización manual se hará inmediatamente';
$string['coursesyncparam_courseid'] = 'La ID del curso';
$string['coursesyncparam_enentbasedsync'] = 'Resalta si un curso tiene activa la sincronización basada en evento';
$string['coursesyncparam_pendingsync'] = 'Resalta si un curso tiene pendiente la sincronización';
$string['coursesyncparam_requiresync'] = 'Resalta si un curso está requiriendo sincronización';
$string['coursesyncparam_roleid'] = 'La ID del rol';
$string['coursesyncresult'] = 'El courseid es - {$a->courseid}  / El pendingsync es {$a->pendingsync}';
$string['coursetable_column_1'] = 'Curso';
$string['coursetable_column_2'] = 'Sincronización basada en evento';
$string['coursetable_column_3'] = 'Sincronización pendiente';
$string['coursetable_column_4'] = 'Fecha de última sincronización';
$string['coursetriggeryncresult'] = 'Éxito: El courseid es - {$a->courseid}';
$string['heading_api'] = 'API conexión';
$string['heading_course'] = 'Integración del curso';
$string['heading_role'] = 'Integración del rol';
$string['heading_sync'] = 'Configuración de Sincronización';
$string['hostname_desc'] = 'Por favor especfiique el nombre del dominio completamente calificado hacia la instancia de Rocket.Chat.';
$string['linkaccount'] = 'Preferencias de Rocket.Chat';
$string['linkaccount_connected'] = 'La cuenta Rocket.Chat está conectada';
$string['linkaccount_disconnected'] = 'La cuenta Rocket.Chat está desconectada';
$string['linkaccount_unexpectedmessage'] = '<br/><br/>Rocket.Chat regresó el error: "{$a}"';
$string['linkaccount_unexpectedresult'] = 'Hubo un problema para conectarse a su cuenta Rocket.Chat. Por favor compruebe las credenciales e inténtelo de nuevo.';
$string['password'] = 'Contraseña';
$string['password_desc'] = 'Contraseña especificada para el usuario dado.';
$string['pluginname'] = 'Rocket.Chat';
$string['port'] = 'Puerto';
$string['port_desc'] = 'Por favor especifique el puerto en caso que no fuera el predeterminado (3000).';
$string['privacy:metadata:local_rocketchat'] = 'Credenciales de API y usuario enviadas a host externo Rocket.Chat.';
$string['privacy:metadata:local_rocketchat_api:password'] = 'La contraseña asociada con la API de cuenta Rocket.Chat.';
$string['privacy:metadata:local_rocketchat_api:username'] = 'El usuario asociado con la API de cuenta Rocket.Chat.';
$string['privacy:metadata:local_rocketchat_user:password'] = 'La contraseña asociada con la API de cuenta del usuario de Rocket.Chat.';
$string['privacy:metadata:local_rocketchat_user:username'] = 'El Email asociado con la API de cuenta del usuario de Rocket.Chat.';
$string['privacy:metadata:preference:local_rocketchat_external_token'] = 'El token externo regresado del enlace con la cuenta del usuario de Rocket.Chat.';
$string['privacy:metadata:preference:local_rocketchat_external_user'] = 'El Email asociado con la cuenta del usuario de Rocket.Chat.';
$string['protocol'] = 'Protocolo';
$string['protocol_desc'] = 'Por favor especifique el protocolo en caso que no fuera el predeterminado (HTTPS),';
$string['rocketchat:linkaccount'] = 'Gestione su propia cuenta enlazada Rocket.Chat';
$string['rocketchat:manage'] = 'Gestione las configuraciones globales de Rocket.Chat';
$string['rocketchat:view'] = 'Gestione las configuraciones globales del curso y de la integración del rol de Rocket.Chat';
$string['roleinfo_1'] = 'Los roles seleccionados serán incluidos en la sincronización. Quitar un rol no eliminará alos usuarios que ya estaban cargados a rocket.Chat.';
$string['roletable_column_1'] = 'Curso';
$string['roletable_column_2'] = 'Requiere sincronización';
$string['scheduledtaskname'] = 'Sincronizar estudiantes a Rocket.Chat';
$string['subscription_creation'] = 'Integración Rocket.Chat - creación de suscripción';
$string['sync_returns'] = 'Si es que la actualización fue o no exitosa.';
$string['user_creation'] = 'Integración Rocket.Chat - creación de usuario';
$string['username'] = 'Usuario';
$string['username_desc'] = 'Usuario para acceder a la API. Por favor cree un usuario Rocket.Chat Moodle para este propósito.';
