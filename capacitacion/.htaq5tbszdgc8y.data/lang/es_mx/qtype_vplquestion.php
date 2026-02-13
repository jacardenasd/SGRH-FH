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
 * Strings for component 'qtype_vplquestion', language 'es_mx', version '4.4'.
 *
 * @package     qtype_vplquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaloptions'] = 'Opciones adicionales';
$string['allornothing'] = 'Todo o nada';
$string['allowasynceval'] = 'Permitir evaluaciones asincrónicas';
$string['allowasynceval_desc'] = 'Si esta opción está habilitada, los profesores podrán configurar preguntas VPL para que se evalúen mediante tareas ad hoc.';
$string['answertemplate'] = 'Plantilla de respuesta';
$string['answertemplate_help'] = 'Escriba aquí qué código se rellenará previamente en la casilla de respuesta para el alumno.';
$string['cannotimportquestionvplnotfound'] = 'Advertencia de importación: el identificador del módulo VPL especificado en la pregunta VPL "{$a}" no es válido.';
$string['cannotimportquestionvplunreachable'] = 'Advertencia de importación: el VPL especificado en la pregunta VPL "{$a}" no se encuentra en este curso.';
$string['cfg:evaluationtries'] = 'Número de intentos internos para evaluzación';
$string['cfg:evaluationtries_help'] = 'Si se configura en más de 1, el servidor intentará varias veces evaluar la pregunta si la evaluación falla (ya que pueden ocurrir errores de evaluación).';
$string['choose'] = 'Elija...';
$string['closerecievednoretrieve'] = 'Operación cancelada por el servidor de ejecución. Es posible que se hayan excedido los límites de recursos de ejecución.
Motivo: {$a}';
$string['compilation'] = 'Compilación:';
$string['correction'] = 'Corrección';
$string['deletesubmissions'] = 'Eliminar envíos VPL';
$string['editorfontsize'] = 'Tamaño del font del editor:';
$string['editoroptions'] = 'Opciones del editor';
$string['editortheme'] = 'Tema del editor:';
$string['errorvplgrade'] = 'La calificación VPL no está configurada correctamente (debería estar configurada en "Punto").';
$string['evaluating'] = 'Esta pregunta está siendo calificada...';
$string['evaluatingsoon'] = 'Esta pregunta será calificada pronto...';
$string['evaluatingsoontime'] = 'v';
$string['evaluation'] = 'Evaluación:';
$string['evaluationdetails'] = 'Detalles de la evaluación:';
$string['evaluationerror'] = 'Error de evaluación:';
$string['eventquestionasyncevaluated'] = 'Pregunta VPL evaluada mediante una tarea ad hoc';
$string['eventquestionevaluationfailed'] = 'Evaluación de la pregunta VPL fallida';
$string['eventquestionevaluationqueued'] = 'Pregunta de evaluación de VPL en cola para evaluación';
$string['execerror'] = 'Error de ejecución:';
$string['execfiles'] = 'Archivos de ejecución';
$string['execfiles_help'] = 'Puede editar archivos de ejecución aquí. Estos solo se envían durante la evaluación (y la verificación previa para ver si los archivos son los mismos) y no durante la ejecución (excepto los archivos especificados como "para conservar durante la ejecución" en el VPL).<br>
Para agregar archivos, agréguelos en el VPL como archivos de ejecución.<br>
Los archivos marcados como "Heredar de VPL" no se guardan y utilizan el contenido del archivo de ejecución correspondiente de la actividad VPL.<br>
<em>Legado</em>: los archivos que comienzan con "UNUSED" heredarán efectivamente el contenido del archivo VPL. Considere utilizar la función "Heredar de VPL" para estos archivos.';
$string['execfilesevalsettings'] = 'Archivos de ejecución y parámetros de evaluación';
$string['execution'] = 'Error de ejecución:';
$string['flagifproblem'] = 'Si usted piensa que hay un problema con la pregunta, por favor márquela con una bandera y póngase en contacto con su profesor.';
$string['gradehaschangedreload'] = 'Es posible que la calificación simplemente haya cambiado. Puedes <a {$a->aattr}>recargar la página</a> para ver la nueva calificación.';
$string['gradetypeerror'] = 'Parece que la evaluación arrojó una calificación no numérica.';
$string['gradingmethod'] = 'Calificación';
$string['gradingmethod_help'] = 'Determina el método de calificación para esta pregunta.<ul><li> Si se selecciona "Todo o nada", el alumno obtendrá el 100% o el 0% de la nota de esta pregunta, dependiendo de si ha obtenido o no la calificación perfecta de VPL.</li> <li>Si se selecciona "Escala", la calificación del estudiante para esta pregunta se escalará con su calificación VPL.</li></ul>';
$string['informationtext'] = 'Pregunta VPL';
$string['inheritfromvpl'] = 'Heredar de VPL';
$string['lastservermessage'] = 'Último mensaje del servidor de ejecución recibido: {$a}';
$string['merge'] = 'Fusionar';
$string['nogradeerror'] = 'Ocurrió un error durante la calificación de la pregunta (no se obtuvo calificación).';
$string['nogradenoerror'] = 'No se produjo ningún error: la calificación bruta recibida es "{$a}".';
$string['noprecheck'] = 'Sin comprobación previa';
$string['noprevplrun'] = '¡Esta plantilla VPL no tiene archivo pre_vpl_run.sh!';
$string['noprevplrun_help'] = 'Las preguntas de VPL requieren que la plantilla VPL tenga un archivo de ejecución pre_vpl_run.sh con el contenido especificado en <a href="https://moodle.org/plugins/qtype_vplquestion" target="_blank">la documentación</a>.';
$string['noreqfile'] = '¡Esta plantilla VPL no tiene el archivo requerido!';
$string['noreqfile_help'] = 'Las preguntas de VPL requieren que la plantilla VPL tenga un archivo obligatorio. La pregunta no funcionará con el estado actual de esta plantilla.';
$string['overwrite'] = 'Sobrescribir';
$string['overwriteexecfile'] = 'Reemplazar';
$string['pleaseanswer'] = 'Por favor proporcione una respuesta.';
$string['pluginname'] = 'Pregunta VPL';
$string['pluginname_help'] = 'Las Preguntas VPL le permiten hacer ejercicios de codificación simple.<br> Funciona con un VPL, pero está diseñado para ser mucho más simple en el lado de los estudiantes.';
$string['pluginnameadding'] = 'Añadir una pregunta VPL';
$string['pluginnameediting'] = 'Editar una pregunta VPL';
$string['pluginnamesummary'] = 'Las Preguntas VPL le permiten hacer ejercicios de codificación simple.<br> Funciona con un VPL, pero está diseñado para ser mucho más simple en el lado de los estudiantes.';
$string['possiblesolution'] = 'Posible solución:';
$string['precheck'] = 'Comprobación previa';
$string['precheckexecfiles'] = 'Comprobación previa de los archivos de ejecución';
$string['precheckexecfiles_help'] = 'Aquí puede editar los archivos de ejecución que se utilizarán para la comprobación previa. Para más información, consulte la ayuda de "Archivos de ejecución".';
$string['precheckhasownfiles'] = 'La comprobación previa utiliza sus propios archivos de ejecución';
$string['precheckhassamefiles'] = 'La comprobación previa utiliza los mismos archivos de ejecución que Check (Comprobación)';
$string['precheckhelp'] = 'Evalúe su respuesta en un subconjunto de pruebas';
$string['precheckisdebug'] = 'La comprobación previa es la Depuración';
$string['precheckpreference'] = 'Preferencia de comprobación previa';
$string['precheckpreference_help'] = 'Determina si el alumno tendrá acceso a un botón de "Comprobación previa" durante el intento de la pregunta (con uso ilimitado).<ul><li>Si se selecciona "Sin comprobación previa", este botón no estará disponible.</li> <li>Si se selecciona "La comprobación previa es Depurar", el botón actuará como el botón "Depurar" de un VPL. Sin embargo, no ofrece la interfaz gráfica habitual.</li> <li>Si se selecciona "La comprobación previa utiliza los mismos archivos de ejecución que la comprobación", el botón evaluará la respuesta con los archivos de ejecución anteriores.</li> <li>Si se selecciona "La comprobación previa utiliza sus propios archivos de ejecución", podrá editar archivos de ejecución específicos y se utilizarán para la comprobación previa. Esta es la opción recomendada, ya que le permite especificar un subconjunto de pruebas a las que el alumno tiene acceso durante el intento.</li></ul>';
$string['privacy:preference:defaultmark'] = 'El puntaje predeterminado establecido para una pregunta determinada.';
$string['privacy:preference:deletesubmissions'] = 'Si los envíos de VPL deben descartarse en la evaluación de la pregunta.';
$string['privacy:preference:gradingmethod'] = 'Si la calificación debe escalar con la calificación VPL o ser todo o nada.';
$string['privacy:preference:penalty'] = 'La penalización por cada intento incorrecto cuando las preguntas se ejecutan utilizando el comportamiento \'Interactivo con múltiples intentos\' o \'Modo adaptativo\'.';
$string['privacy:preference:precheckpreference'] = 'El comportamiento del botón \'Comprobación previa\'.';
$string['privacy:preference:useasynceval'] = 'Si la pregunta debe evaluarse de forma asincrónica a través de una tarea ad hoc.';
$string['qvplbase'] = 'Plantilla de la pregunta VPL';
$string['reschedule_tasks_for_stranded_questions_task'] = 'Reprogramar tareas ad hoc para preguntas estancadas';
$string['run'] = 'Ejecutar';
$string['scaling'] = 'Escala';
$string['selectavpl'] = '<a href="{$a}">Seleccione una plantilla VPL</a> para editar los archivos de ejecución.';
$string['serverexecutionerrorstudentmessage'] = 'Esto podría ser causado por un factor externo. Por favor intente evaluar nuevamente o póngase en contacto con su profesor.';
$string['serverexecutionerrorteachermessage'] = 'Esto podría ser causado por un factor externo, lo que significa que esto no necesariamente es algo que usted hizo mal. Por favor intente evaluar de nuevo o póngase en contacto con el soporte.';
$string['servermessages'] = 'Mensajes del servidor:
{$a}';
$string['serverwassilent'] = 'El servidor de ejecución estaba en silencio - no se recibió ningún mensaje';
$string['switchbacktodefaultfile'] = 'Cambiando al modo Heredar';
$string['switchbacktodefaultfileprompt'] = 'Está a punto de cambiar el modo de archivo a "Heredar de VPL". Esto sobrescribirá el contenido actual del archivo de preguntas. ¿Proceder?';
$string['teachercorrection'] = 'Corrección del Profesor';
$string['teachercorrection_help'] = 'Escriba aquí su corrección para esta pregunta.';
$string['templatecontext'] = 'Editar plantilla';
$string['templatecontext_help'] = 'Puede editar aquí el código que se ejecutará (es decir, el contenido del archivo requerido).<br> La etiqueta "{{ANSWER}}" será reemplazada por la respuesta del estudiante. Puedes mover la etiqueta donde quieras, pero por favor, ¡no la quites!';
$string['templatevpl'] = 'Plantilla VPL';
$string['templatevpl_help'] = 'Seleccionar el VPL en el que se basará esta pregunta.<br>
<b>Nota:</b> Seleccione un VPL dedicado a este propósito, especialmente si "Eliminar envíos de VPL" está configurado en "Sí" a continuación.';
$string['templatevplchange'] = 'Modificación de la plantilla VPL';
$string['templatevplchange_help'] = 'Los archivos de código y ejecución de la plantilla VPL tienen actualmente contenido. Al cambiar la plantilla VPL se sobrescribirá este contenido, a menos que decida fusionar el contenido actual en el nuevo. <br> Por favor tenga en cuenta que la fusión sólo funcionará en archivos con el mismo nombre. Los archivos sin correspondencia de nombre se sobrescribirán.';
$string['templatevplchangeprompt'] = '¿Qué quiere hacer con el contenido actual de los archivos de plantilla y ejecución?';
$string['unexpectedendofws'] = 'fin inesperado de comunicación con el servidor de ejecución. Motivo: {$a}';
$string['unexpectederror'] = 'Ocurrió un error inesperado durante la evaluación.
{$a}';
$string['useasyncevaluation'] = 'Utilice la evaluación asincrónica';
$string['useasyncevaluation_help'] = 'Si se establece en "Sí", la evaluación de la pregunta se realizará a partir de tareas asincrónicas ad hoc. Esto permite que el examen sea más responsivo.';
$string['validateonsave'] = 'Validar';
$string['validateonsave_help'] = 'Si está marcada, el código proporcionado se probará con los casos de prueba proporcionados antes de guardar esta pregunta.';
$string['vplnotavailablewarning'] = '¡Atención! El VPL en la que se basa esta pregunta no está disponible. Es posible que la pregunta no funcione correctamente.';
$string['vplnotfounderror'] = '¡Error! No se ha podido instanciar el VPL en la que se basa esta pregunta:<br>{$a}';
$string['vplnotincoursewarning'] = '¡Atención! El VPL en la que se basa esta pregunta no se encuentra en este curso. Es posible que la pregunta no funcione correctamente.';
$string['wsconnectionerror'] = 'No se pudo conectar con el servidor.';
$string['wshandshakeerror'] = 'El protocolo de enlace de WebSocket con el servidor falló.';
$string['wsreaderror'] = 'No se pudo leer del websocket.';
