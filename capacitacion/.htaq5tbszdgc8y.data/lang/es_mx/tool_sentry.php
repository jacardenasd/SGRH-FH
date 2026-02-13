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
 * Strings for component 'tool_sentry', language 'es_mx', version '4.4'.
 *
 * @package     tool_sentry
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate'] = 'Activar plugin Centinela';
$string['activate_desc'] = 'Activar Centinela para enviar información al DNS configurado';
$string['always'] = 'El SDK siempre capturará el cuerpo de la solicitud siempre que Centinela pueda entenderlo.';
$string['attach_stacktrace'] = 'Añadir seguimiento de la pila';
$string['attach_stacktrace_desc'] = 'Cuando está habilitado, los seguimientos de la pila se adjuntan automáticamente a todos los mensajes registrados. Los seguimientos de pila siempre se adjuntan a las excepciones; sin embargo, cuando se establece esta opción, los seguimientos de la pila también se envían con los mensajes. Esta opción, por ejemplo, significa que los seguimientos de la pila aparecen junto a todos los mensajes de registro.';
$string['dsn'] = 'DNS de Servidor Sentinela';
$string['dsn_desc'] = 'Dirección del servidor Sentinela con token de autenticación. P.ej. https://USERCODE@CLIENTCODE.ingest.sentry.io/CLIENTCODE';
$string['enable_tracing'] = 'Habilitar seguimiento';
$string['enable_tracing_desc'] = 'Un valor booleano; si es verdadero, se generarán y capturarán transacciones y datos de seguimiento. Esto establecerá traces-sample-rate en el valor predeterminado recomendado de 1,0 si traces-sample-rate no está definido. Tenga en cuenta que traces-sample-rate y traces-sampler tienen prioridad sobre esta opción.';
$string['environment'] = 'Entorno de Sentinela';
$string['environment_desc'] = 'Establece el entorno. Esta cadena tiene formato libre y está configurada en producción de forma predeterminada. Una versión se puede asociar con más de un entorno para separarlos en la interfaz de usuario (piense en puesta en escena frente a producción o similar).';
$string['error_types'] = 'Tipos de Errores';
$string['error_types_desc'] = 'Establece qué errores se informan. Toma los mismos valores que el parámetro de configuración error_reporting de PHP. De forma predeterminada se informan todos los tipos de errores (equivalente a E_ALL).';
$string['ignore_exceptions'] = 'Ignorar Excepciones';
$string['ignore_exceptions_desc'] = 'Una lista de nombres de clases que coinciden con excepciones que no deben enviarse a Sentinela. Comprueba si el nombre de clase proporcionado es de un tipo o subtipo determinado.';
$string['ignore_transactions'] = 'Ignorar Transacciones';
$string['ignore_transactions_desc'] = 'Una lista de cadenas de caracteres que coinciden con nombres de transacciones que NO deben enviarse a Sentinela.';
$string['in_app_exclude'] = 'Excluir En App';
$string['in_app_exclude_desc'] = 'Una lista de prefijos de cadenas de nombres de módulos que no pertenecen a la App, sino a paquetes de terceros. Los módulos que no se consideran parte de la App se ocultarán de los seguimientos de la pila de forma predeterminada.';
$string['in_app_include'] = 'Incluir En App';
$string['in_app_include_desc'] = 'Una lista de prefijos de cadenas de nombres de módulos que pertenecen a la App. Esta opción tiene prioridad sobre la exclusión en la App.';
$string['javascriptloader'] = 'Cargador de JavaScript';
$string['javascriptloader_desc'] = 'Ingrese solo la URL src de la etiqueta de secuencia de comandos que se encuentra en Configuración > Proyectos > (seleccione proyecto) > Claves de cliente (DSN) > Configurar > Cargador de JavaScript. Ejemplo: https://js.sentry-cdn.com/USERCODE.min.js';
$string['max_breadcrumbs'] = 'Máx Rutas de Navegación';
$string['max_breadcrumbs_desc'] = 'Esta variable controla la cantidad total de rutas de navegación que deben capturarse. El valor predeterminado es 100, pero puede configurarlo en cualquier número. Sin embargo, debe tener en cuenta que Sentinela tiene un tamaño de carga útil máximo y cualquier evento que exceda ese tamaño de carga útil se descartará.';
$string['max_request_body_size'] = 'Tamaño del Cuerpo de Solicitud Méxima';
$string['max_request_body_size_desc'] = 'Este parámetro controla si las integraciones deben capturar cuerpos de solicitud HTTP. Tenga en cuenta que el servidor Sentinela limita el tamaño del cuerpo de la solicitud HTTP. El servidor siempre impone su límite de tamaño, independientemente de cómo configure esta opción.';
$string['max_value_length'] = 'Longitud de Valor Méximo';
$string['max_value_length_desc'] = 'El número de caracteres después de los cuales se truncarán los valores que contienen texto en la carga útil del evento (el valor predeterminado es 1024).';
$string['medium'] = 'Se capturarán solicitudes medianas y pequeñas (normalmente 10 KB)';
$string['never'] = 'Los cuerpos de la solicitud nunca se envían.';
$string['options'] = 'Opciones';
$string['options_desc'] = 'Estas se necesitan para que funcione';
$string['pluginname'] = 'Herramienta de Reporte de Sentinela';
$string['pluginsettings'] = 'Configuración de sentinela';
$string['privacy:metadata'] = 'El plugin no almacena ningún dato personal. Sin embargo, envía la IP de un usuario que tuvo un error al servidor Sentinela configurado.';
$string['profiles_sample_rate'] = 'Tasa de Muestreo del Perfil';
$string['profiles_sample_rate_desc'] = 'Para que la creación de perfiles funcione, primero debe habilitar el rastreo de Sentinela a través de traces_sample_rate (como en el ejemplo anterior). Lea nuestra documentación de configuración de seguimiento para aprender cómo configurar el muestreo. Si establece su tasa de muestreo en 1,0, se capturarán todas las transacciones.';
$string['release'] = 'Versión de Sentinela';
$string['release_desc'] = 'Establece la versión. Si no está configurado, el SDK intentará configurar automáticamente una versión lista para usar, pero es mejor configurarlo manualmente para garantizar que la versión esté sincronizada con sus integraciones de implementación.';
$string['sample_rate'] = 'Tasa de Muestreo';
$string['sample_rate_desc'] = 'Configura la frecuencia de muestreo para eventos de error, en el rango de 0,0 a 1,0. El valor predeterminado es 1.0, lo que significa que se enviará el 100% de los eventos de error. Si se establece en 0,1, solo se enviará el 10 % de los eventos de error. Los eventos se eligen al azar.';
$string['send_default_pii'] = 'Enviar PII Predeterminada';
$string['send_default_pii_desc'] = 'Si esta bandera está habilitada, las integraciones activas agregan cierta información de identificación personal (PII). De forma predeterminada, no se envían dichos datos.';
$string['sentry_options'] = 'Opciones de Sentinela';
$string['sentry_options_desc'] = 'Cambiar como las opciones son enviadas a Sentinela';
$string['server_name'] = 'Nombre del Servidor';
$string['server_name_desc'] = 'Esta opción se puede utilizar para proporcionar un "nombre de servidor". Cuando se proporciona, el nombre del servidor se envía y persiste en el evento. Para muchas integraciones, el nombre del servidor corresponde en realidad al nombre de host del dispositivo, incluso en situaciones en las que la máquina no es realmente un servidor.';
$string['small'] = 'Solo serán capturados cuerpos de solicitudes pequeños (típicamente 4KB)';
$string['test_conn'] = 'Probar conxiones';
$string['test_exception'] = 'enviar Excepción';
$string['traces_sample_rate'] = 'Tasa de Muestreo de Seguimiento';
$string['traces_sample_rate_desc'] = 'Un número entre 0 y 1, que controla el porcentaje de probabilidad de que una transacción determinada se envíe a Sentinela . (0 representa 0% mientras que 1 representa 100%). Se aplica por igual a todas las transacciones creadas en la aplicación. Se debe definir esto o traces_sampler para habilitar el seguimiento.';
