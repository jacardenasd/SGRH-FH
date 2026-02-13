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
 * Strings for component 'tool_securityquestions', language 'es_mx', version '4.4'.
 *
 * @package     tool_securityquestions
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerquestionspagestring'] = 'Verificación de pregunta de seguridad requerida';
$string['badconfigload'] = 'No se puede cargar archivo de configuración de plantilla. Comprobar que las variables sean correctas, y que la plantilla esté adentro de la carpeta de plantillas. -';
$string['configloc'] = 'en el sitio:';
$string['configpath'] = '/config_policies/{$a}.php';
$string['forcedconfig'] = 'Las configuraciones son de solo lectura. La configuración está forzada en el archivo de plantilla.';
$string['formaddquestion'] = 'Añadir pregunta';
$string['formalreadyanswered'] = 'Conjunto de preguntas con respuestas';
$string['formanswerfailed'] = 'Esta respuesta es potencialmente incorrecta.';
$string['formanswerfailedbanner'] = 'Una o más de sus respuestas a preguntas de seguridad son incorrectas.';
$string['formanswerquestion'] = 'Ingresar una respuesta a pregunta {$a}:';
$string['formclearresponses'] = 'Borrar respuestas del usuario:';
$string['formclearresponsesdesc'] = 'Ingrese un usuario o Email para borrar respuestas para usuario.';
$string['formclearresponsestable'] = 'Borrar respuestas';
$string['formcurrentquestions'] = 'Preguntas actualess: {$a}';
$string['formdeleteresponse'] = 'Borrar respuesta';
$string['formdeprecate'] = 'Deprecar pregunta';
$string['formdeprecateentry'] = 'Ingresar una ID de pregunta a deprecar:';
$string['formdeprecatenotfound'] = 'La pregunta no existe';
$string['formduplicateresponse'] = 'Usted no puede contestar la misma pregunta dos veces.';
$string['formgraceperiodtimerem'] = 'Actualmente usted está dentro de un período de gracia para preguntas de seguridad. En este tiempo, usted puede elegir no contestar preguntas de seguridad, y se le recordará al siguiente ingreso al sitio. Después que termine el período de gracia, usted deberá contestar preguntas de seguridad antes de acceder al resto del sistema. LA duración restante del período de gracia es : {$a}';
$string['formlockedout'] = 'La cuenta tiene bloqueado el reiniciar contraseña. Por favor póngase en contacto con los Administradores del Sistema para más asistencia.';
$string['formlockedouttimer'] = 'La cuenta tiene bloqueado el reiniciar contraseña. Por favor inténtelo nuevamente en {$a}.';
$string['formlockedoutusers'] = 'Usuarios bloqueados';
$string['formlockouttier'] = 'Nivel de bloqueo';
$string['formnewquestion'] = 'Nueva pregunta:';
$string['formnolockedusers'] = 'No se encontraron usuarios bloqueados';
$string['formnoquestions'] = 'Sin preguntas configuradas';
$string['formquestionadded'] = 'Pregunta añadida exitosamente: {$a}';
$string['formquestiondeleted'] = 'Pregunta con ID {$a} eliminada exitosamente.';
$string['formquestiondeprecated'] = 'Pregunta con ID {$a} deprecada exitosamente.';
$string['formquestionentry'] = 'Ingrese una pregunta para añadir al lote de preguntas:';
$string['formquestioninfo'] = 'Para mayor seguridad, usted no puede ver las respuestas guardadas. Usted solo puede guardar nuevas respuestas a las preguntas, o eliminar la respuesta.';
$string['formquestionnotdeleted'] = 'No se puede eliminar pregunta {$a}.';
$string['formquestionnotdeprecated'] = 'No se puede deprecar pregunta {$a}.';
$string['formquestionnumtext'] = 'Pregunta: {$a}';
$string['formquestionresponsesreq'] = 'Se necesita que usted conteste un mínimo de {$a} preguntas de seguridad.';
$string['formrecordnewresponse'] = 'Grabar una nueva respuesta para pregunta:';
$string['formremindme'] = 'Recordarme al siguiente ingreso al sitio';
$string['formresetbutton'] = 'Borrar respuestas';
$string['formresetid'] = 'Ingresar ID de cuenta a se des-bloqueada:';
$string['formresetlockout'] = 'Reiniciar bloqueo';
$string['formresetnotfound'] = 'Usuario no existe';
$string['formresetnotnumber'] = 'ID debe ser un número';
$string['formresponsedeleted'] = 'Respuesta eliminada exitosamente.';
$string['formresponseempty'] = 'La respuesta no puede estar vacía.';
$string['formresponseentrybox'] = 'Escribir respuesta a la pregunta seleccionada:';
$string['formresponsenotdeleted'] = 'No se puede eliminar respuesta. Añada más respuestas primero, o grabe una nueva respuesta para la pregunta.';
$string['formresponsenotrecorded'] = 'Hubo un error al configurar respuesta(s). Por favor inténtelo nuevamente.';
$string['formresponserecorded'] = 'Respuesta(s) grabada(s) exitosamente.';
$string['formresponseselectbox'] = 'Seleccionar pregunta a responder:';
$string['formresponsesremaining'] = '{$a} respuestas adicionales requeridas.';
$string['formsaveresponse'] = 'Guardar respuesta(s)';
$string['formselectquestion'] = 'Seleccionar una pregunta';
$string['formstatusactive'] = 'Activo - {$a} preguntas adicionales requeridas.';
$string['formstatusnotactive'] = 'NO activo - {$a} preguntas adicionales requeridas.';
$string['formtablecount'] = 'Número de usos';
$string['formtabledeprecate'] = 'Deprecado';
$string['formtablequestion'] = 'Pregunta';
$string['formusernameplaceholder'] = 'Usuario o Email';
$string['formuserresponsescleared'] = 'Repuestas del usuario borradas exitosamente';
$string['formuserunlocked'] = 'Usuario des-bloqueado exitosamente.';
$string['injectedquestiontitle'] = 'Pregunta de Seguridad {$a->num}: {$a->content}';
$string['lockoutexpiredeventname'] = 'Bloqueo de usuario expirado.';
$string['minimumquestions'] = 'Al menos 2 preguntas deben ser contestadas';
$string['pluginname'] = 'Preguntas de Seguridad';
$string['privacy:metadata:preference:tool_securityquestions_logintime'] = 'El momento en que un usuario inició sesión para ingresar al sitio por primera vez y activó el período de gracia para las respuestas a las preguntas de seguridad.';
$string['privacy:metadata:tool_securityquestions'] = 'Datos de preguntas de seguridad';
$string['privacy:metadata:tool_securityquestions_ans'] = 'Esta tabla almacena información sobre qué preguntas aleatorias se eligieron para presentarlas a un usuario y cuándo fue la última selección aleatoria.';
$string['privacy:metadata:tool_securityquestions_ans:qid'] = 'La ID de pregunta de una pregunta que fue elegida para un usuario.';
$string['privacy:metadata:tool_securityquestions_ans:timecreated'] = 'La hora de cuando una pregunta que fue elegida para un usuario.';
$string['privacy:metadata:tool_securityquestions_ans:userid'] = 'La ID del usuario para mantener seguimiento de preguntas a ser contestadas.';
$string['privacy:metadata:tool_securityquestions_loc'] = 'Esta tabla almacena información sobre si un usuario está bloqueado y no puede restablecer su contraseña, así como la cantidad de intentos fallidos de ingresar preguntas de seguridad.';
$string['privacy:metadata:tool_securityquestions_loc:counter'] = 'La cantidad de veces que un usuario falló la validación de la pregunta de seguridad desde el último restablecimiento de contraseña.';
$string['privacy:metadata:tool_securityquestions_loc:tier'] = 'El nivel de bloqueo de un usuario.';
$string['privacy:metadata:tool_securityquestions_loc:timefailed'] = 'El sello de tiempo del último aumento de nivel de bloqueo activado.';
$string['privacy:metadata:tool_securityquestions_loc:userid'] = 'La ID del usuario que monitoreó el estado de bloqueo.';
$string['privacy:metadata:tool_securityquestions_res'] = 'Esta tabla almacena información sobre las respuestas de los usuarios a las preguntas de seguridad, incluidas las respuestas en formato \'hash\', y qué preguntas han sido respondidas.';
$string['privacy:metadata:tool_securityquestions_res:qid'] = 'La ID de pregunta a la que corresponde una respuesta.';
$string['privacy:metadata:tool_securityquestions_res:response'] = 'La respuesta en formato \'hash\' seguro que un usuario ha ingresado como respuesta a una pregunta.';
$string['privacy:metadata:tool_securityquestions_res:userid'] = 'La ID del usuario con esta respuesta.';
$string['questionaddedeventname'] = 'Administrador añadió pregunta de seguridad.';
$string['questiondeletedeventname'] = 'Administrador eliminó pregunta de seguridad.';
$string['questiondeprecatedeventname'] = 'Administrador deprecó pregunta de seguridad.';
$string['resetuserpagename'] = 'Reiniciar bloqueos de pregunta de seguridad';
$string['securityquestions:questionsaccess'] = 'Interacción de preguntas de seguridad';
$string['securityquestionssettings'] = 'Configuraciones de preguntas de seguridad';
$string['setquestionspagename'] = 'Modificar preguntas de seguridad';
$string['setresponsespagestring'] = 'Configurar respuestas a preguntas de seguridad';
$string['setresponsessettingsmenu'] = 'Respuestas a preguntas de seguridad';
$string['setsecurityquestionspagestring'] = 'Modificar preguntas de seguridad';
$string['settingsanswerquestions'] = 'Preguntas requeridas para verificación';
$string['settingsanswerquestionsdesc'] = 'El número de preguntas requeridas para que los usuarios se verifiquen ellos mismos para realizar acciones de seguridad en cuenta.';
$string['settingsenabledesc'] = 'Activar para habilitar validación de pregunta de seguridad';
$string['settingsenablename'] = 'Habilitar plugin';
$string['settingsgraceperiod'] = 'Período de gracia de respuesta';
$string['settingsgraceperioddesc'] = 'Un período de tiempo durante el cual un usuario puede elegir no configurar respuestas a preguntas, incluso cuando las preguntas obligatorias están habilitadas. Después de este período, los usuarios que no hayan configurado respuestas se verán obligados a configurarlas. Establezca este control en 0 para deshabilitar el período de gracia.';
$string['settingsinjectchangepw'] = 'Cambiar formato de contraseña.';
$string['settingsinjectpoints'] = 'Puntos de inyección para preguntas de seguridad';
$string['settingsinjectpointsdesc'] = 'Seleccionar todos los formatos adonde deberían ser inyectadas las preguntas de seguridad.';
$string['settingsinjectsetpw'] = 'Configurar formato de contraseña.';
$string['settingslockoutexpiryduration'] = 'Hora de reinicio de reinicio de bloqueo';
$string['settingslockoutexpirydurationdesc'] = 'Lapso de tiempo sin intentos fallidos antes de que el bloqueo sea limpiado automáticamente. Configurar a 0 para mantener las cuentas bloqueadas hasta que el administrador las reinicie.';
$string['settingslockoutnum'] = 'Intentos de respuesta antes del bloqueo';
$string['settingslockoutnumdesc'] = 'Número de intentos que se permiten al usuario para responder preguntas antes de que se le bloquee el restablecimiento de contraseña. Establezca este control en 0 para desactivar el bloqueo.';
$string['settingsmandatoryquestions'] = 'Preguntas obligatorias de seguridad';
$string['settingsmandatoryquestionsdesc'] = 'Habilitar este control para que las preguntas de seguridad sean obligatorias. Si está deshabilitado, se les seguirá solicitando a los usuarios que respondan preguntas al iniciar sesión, pero podrán saltárselas. La próxima vez que inicien sesión para ingresar al sitio, se les volverá a solicitar que respondan.';
$string['settingsminquestions'] = 'Número mínimo de preguntas de seguridad activas';
$string['settingsminquestionsdesc'] = 'Introducir el número mínimo de preguntas de seguridad que pueden estar activas al mismo tiempo. Se deben agregar más preguntas para que otras puedan quedar deprecadas.';
$string['settingsminuserquestions'] = 'Número mínimo de preguntas contestadas por usuario';
$string['settingsminuserquestionsdesc'] = 'Introducir la cantidad mínima de preguntas de seguridad activas que un usuario debe responder antes de que ya no se le soliciten más.';
$string['settingsquestionduration'] = 'Duración de pregunta';
$string['settingsquestiondurationdesc'] = 'El tiempo que las preguntas están activas cuando se seleccionan en una página de alta seguridad. Después de este período, se seleccionarán nuevas preguntas.';
$string['settingstierheader'] = 'Configuración de niveles de bloqueo';
$string['settingstierheaderdesc'] = 'Estas configuraciones le permiten agregar niveles de bloqueo a las preguntas de seguridad. Deje estas configuraciones en 0 para deshabilitar los niveles de bloqueo.
Si se configuran estas configuraciones, cuando un usuario activa un bloqueo, se le permitirá volver a intentar responder las preguntas de seguridad después de la duración especificada para el nivel.
Cuando un usuario activa un bloqueo, subirá un nivel de bloqueo. Los bloqueos se eliminarán automáticamente después de la duración especificada en el control lockoutexpiryduration, si no está configurado en 0.';
$string['settingstieroneduration'] = 'Duración del bloqueo de nivel uno';
$string['settingstieronedurationdesc'] = 'Período de tiempo durante un bloqueo de nivel uno durante el cual un usuario no puede volver a intentar responder preguntas de seguridad.';
$string['settingstiertwoduration'] = 'Duración del bloqueo de nivel dos';
$string['settingstiertwodurationdesc'] = 'Período de tiempo durante un bloqueo de nivel dos durante el cual un usuario no puede volver a intentar responder preguntas de seguridad.';
$string['taskcleantables'] = 'Limpiar usuarios eliminados de base de datos del plugin';
$string['templateforced-on'] = 'Esta plantilla aplica la configuración predeterminada para los controles de seguridad y garantiza que los usuarios siempre tendrán suficientes preguntas para responder y suficientes respuestas para usar en la validación.';
$string['userlockedeventname'] = 'Usuario bloqueado de reiniciar contraseña debido a intentos fallidos de pregunta.';
$string['userunlockedeventname'] = 'Usuario desbloqueado de reinicio de contraseña por un Administrador.';
