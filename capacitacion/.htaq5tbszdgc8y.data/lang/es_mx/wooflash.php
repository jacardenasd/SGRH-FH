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
 * Strings for component 'wooflash', language 'es_mx', version '4.4'.
 *
 * @package     wooflash
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesskeyid'] = 'ID de plataforma (accessKeyId)';
$string['accesskeyid-description'] = 'ID de clave de acceso para comunicarse con Wooflash. Debería comenzar con \'ak.\'.';
$string['baseurl'] = 'URL base';
$string['baseurl-description'] = 'Esto es solo para propósitos de depuración o pruebas. Cambie este valor solamente a solicitud del equipo de soporte de Wooflash.';
$string['consent-screen:agree'] = 'Estoy de acuerdo';
$string['consent-screen:description'] = '<b>Wooflash</b> hace que los estudiantes jueguen un rol activo en su experiencia educativa.';
$string['consent-screen:disagree'] = 'No estoy de acuerdo';
$string['consent-screen:explanation'] = 'Para que funcionen varias caracteríticas, Wooflash le pide su dirección de Email. Elija "Estoy de acuerdo" para compartir su dirección de Email con Wooflash, o elija "No estoy de acuerdo para continuar sin las características extendidas.';
$string['customcompletion'] = 'Estado de finalización actualizado solo por Wooflash';
$string['customcompletiongroup'] = 'Finalización personalizada Wooflash';
$string['error-auth-nosession'] = 'Sesión faltante en autenticación';
$string['error-callback-is-not-url'] = 'Parámetro de retrollamada no es una URL válida';
$string['error-couldnotauth'] = 'No se pudo obtener usuario o curso durante la autenticación';
$string['error-couldnotloadevents'] = 'No se pudo cargar cursos Wooflash del usuario';
$string['error-couldnotperformv3upgradestep1'] = 'No se pudo realizar el paso 1 de la actualización a la versión 3. Asegúrese de que el ID de la clave de acceso, la URL base y la clave de acceso secreta estén configurados en la configuración del plugin.';
$string['error-couldnotperformv3upgradestep2'] = 'No se pudo realizar el Paso 2 de la actualización a V3';
$string['error-couldnotredirect'] = 'No se pudo redirigir';
$string['error-couldnotupdatereport'] = 'No se pudo actualizar el reporte';
$string['error-invalid-callback-url'] = 'La URL de devolución de llamada proporcionada no coincide con el nombre de dominio baseurl definido en la configuración.';
$string['error-invalidjoinurl'] = 'URL para unirse inválida';
$string['error-invalidtoken'] = 'Token inválido';
$string['error-missingparameters'] = 'Parámetros faltantes';
$string['error-noeventid'] = 'No se pudo determinar ID del curso';
$string['error-reportdeprecated'] = 'report_wooflash.php está deprecada. Use report_wooflash_v3.php en su lugar.';
$string['modulename'] = 'Wooflash';
$string['modulename_help'] = 'Este módulo proporciona una integración de plataforma interactiva Wooflash a Moodle';
$string['modulenameplural'] = 'Wooflash';
$string['modulenamepluralformatted'] = 'Lista de actividades Wooflash';
$string['nowooflash'] = 'No hay instancias Wooflash';
$string['pingNOTOK'] = 'No se pudo establecer conexión con Wooflash. Por favor compruebe sus configuraciones.';
$string['pingOK'] = 'Conexión establecida con Wooflash';
$string['pluginadministration'] = 'Administración de Wooflash';
$string['pluginname'] = 'Wooflash';
$string['privacy:metadata:wooflash_server'] = 'Para poder integrarse con Wooflash, datos del usuario necesitan ser intercambiados.';
$string['privacy:metadata:wooflash_server:userid'] = 'La ID del usuario es enviada desde Moodle para permitirle acceder a sus datos en Wooflash.';
$string['quiz'] = 'Importar un examen Moodle';
$string['secretaccesskey'] = 'Clave API (Clave secreta de acceso)';
$string['secretaccesskey-description'] = 'La clave secreta de acceso usada para comunicarse con Wooflash. Debería comenzar con \'sk.\'.';
$string['showconsentscreen'] = '¿Mostrar pantalla de consentimiento?';
$string['showconsentscreen-description'] = 'Si se activa, Wooflash les pedirá su consentimiento a los participantes antes de recolectar su dirección Email.';
$string['testconnection'] = 'Probar conexión';
$string['warn-missing-config-during-upgrade-to-v3'] = 'Para ejecutar la migración, el ID de la clave de acceso, la URL base y la clave de acceso secreta deben configurarse en la configuración. Si se omite la migración por ahora: puede ejecutarla más tarde mediante el script cli/v3_upgrade.php. Nota: Si desea usar el plugin, esta migración es necesaria.';
$string['wooflash:addinstance'] = 'Añadir una actividad Wooflash a un curso';
$string['wooflash:view'] = 'Acceder a una actividad Wooflash';
$string['wooflasheventid'] = 'Duplicar un curso Wooflash';
$string['wooflashintro'] = 'Descripción';
$string['wooflashname'] = 'Nombre';
$string['wooflashredirect'] = 'Usted será re-direccionado a Wooflash. Si esto no sucede automáticamente, haga clic en este enlace para continuar.';
$string['wooflashsettings'] = 'Configuraciones';
