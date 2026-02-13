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
 * Strings for component 'quizaccess_tcquiz', language 'es_mx', version '4.4'.
 *
 * @package     quizaccess_tcquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesserror'] = 'El acceso a este examen es controlado por el profesor.';
$string['availablesession'] = 'Sesión disponible';
$string['availablesessionsdesc'] = 'Haga clic en <b>Volver a unirse</b> para volver a conectarse a una sesión que ya está en curso. Esto está pensado principalmente para volver a conectarse si su sesión se bloquea durante la administración del cuestionario. Si hace clic en <b>Finalizar</b>, esto finalizará la sesión y finalizará todos los intentos de los estudiantes asociados con ella.';
$string['cantstartquiz'] = 'No puedes iniciar este examen';
$string['clicknext'] = 'Haga clic en "Siguiente" cuando todos estén listos.';
$string['configuredastcq'] = 'Este examen está configurado como TCQuiz';
$string['currentpage'] = 'Página actual';
$string['done'] = 'Hecho';
$string['end'] = 'Fin';
$string['endquestion'] = 'Terminar pregunta';
$string['endquiz'] = 'Terminar examen';
$string['entercode'] = 'Ingresar código dado por el profesor';
$string['enterjoincode'] = 'Escribir código de unión';
$string['errorclosingsession'] = 'Error al cerrar la sesión. Inténtelo de nuevo o inicie una nueva sesión.';
$string['errorrejoining'] = 'Error al volver a unirse a la sesión. La sesión no se está ejecutando.';
$string['finalresults'] = 'Resultados finales';
$string['invalidserverresponse'] = 'Respuesta del servidor no válida.';
$string['joincode'] = 'Código de unión';
$string['joincodeemptyerror'] = 'El código de unión no puede estar vacío.';
$string['joininstruct'] = 'Espera hasta que su profesor le dé el código.';
$string['joinquizasstudent'] = 'Únase al examen como estudiante';
$string['jointcquiz'] = 'Únase al examen';
$string['modulename'] = 'TCQuiz';
$string['modulenameplural'] = 'TCQuizzes';
$string['next'] = 'Siguiente >>';
$string['nextquestion'] = 'Siguiente pregunta';
$string['no'] = 'No';
$string['noanswers'] = 'No hay respuestas dadas';
$string['nosession'] = 'La sesión solicitada de TCQuiz no existe.';
$string['notallowedattempt'] = 'No está permitido realizar este examen.';
$string['notallowedtoattempttcquiz'] = 'Usted no tiene permitido intentar este TCQuiz.';
$string['notallowedtostarttcquiz'] = 'Usted no tiene permitido iniciar este TCQuiz.';
$string['notauthorised'] = 'No estás autorizado para controlar este examen';
$string['notcurrentpage'] = 'Intentó acceder a la página del examen que no es la página que actualmente muestra el profesor.';
$string['notrightquizstate'] = 'El examen se encuentra actualmente en un estado diferente.';
$string['nottcquiz'] = 'Este examen no está configurado como un TCQuiz.';
$string['notyoursession'] = 'No eres el profesor para esta sesión.';
$string['numanswers'] = 'Número de respuestas recibidas';
$string['numconnectedstudents'] = 'Numero de estudiantes conectados';
$string['pluginadministration'] = 'Administración de TCQuiz';
$string['pluginname'] = 'TCQuiz';
$string['question'] = 'Pregunta';
$string['questiondonewaitforresults'] = 'Pregunta hecha - esperando resultados.';
$string['questiontime'] = 'Tiempo predeterminado para pregunta';
$string['questiontime_help'] = 'El tiempo predeterminado (en segundos) para mostrar cada pregunta.';
$string['questiontimeretriveerror'] = 'No se pudo recuperar el tiempo de pregunta. Se está usando la opción predeterminada.';
$string['quiznotrunning'] = 'El examen no se está ejecutando en este momento - espere a que su profesor lo inicie';
$string['reconnectinstruct'] = 'El examen ya se está ejecutando - usted puede conectarse a esta sesión y tomar el control.';
$string['reconnectquiz'] = 'Reconectarse al examen';
$string['rejoin'] = 'Re-unirse';
$string['sessionexisterror'] = 'La sesión con el mismo nombre ya existe.';
$string['setting:pollinginterval'] = 'Frecuencia de sondeo';
$string['setting:pollinginterval_desc'] = 'Especifique la frecuencia (en ms) con la que se debe realizar el sondeo. Los valores más pequeños pueden afectar el rendimiento del servidor. Los valores más grandes pueden causar problemas de rendimiento en tcquiz.';
$string['startnewquiz'] = 'Iniciar nueva sesión de examen';
$string['startquiz'] = 'Iniciar examen';
$string['studentconnected'] = 'estudiante conectado';
$string['tcquizrequired'] = 'Administrar TCQuiz';
$string['tcquizrequired_help'] = 'Si está habilitado, el profesor tendrá el control de las preguntas que los estudiantes pueden responder en un momento determinado. Está pensado principalmente para las encuestas en clase.';
$string['tcquizsettings'] = 'Configuración de TCQuiz';
$string['teacherjoinquizinstruct'] = 'Utilice esto si desea probar un examen usted mismo (también deberá iniciar/reconectarse al examena en una ventana separada).';
$string['teacherstartinstruct'] = 'Utilice esto para iniciar un examen para que la realicen los estudiantes<br />Use el cuadro de texto para definir un nombre para esta sesión (para ayudar cuando revise los resultados en una fecha posterior).';
$string['teacherstartnewinstruct'] = 'Haga clic en el botón <b>Iniciar nueva sesión de examen</b> para iniciar una nueva sesión de examen. Debe proporcionar un código para la sesión que los estudiantes puedan usar para conectarse.';
$string['teacherwarning'] = 'Si hay una <b>Sesión disponible</b> visible a continuación, iniciar una nueva sesión cerrará esa sesión. Tenga mucho cuidado, ya que esto cerrará todos los intentos de estudiantes abiertos asociados con este examen. Si tiene dudas y si está disponible a continuación, intente volver a conectarse a la sesión existente.';
$string['timeleft'] = 'Tiempo restante para responder:';
$string['timestarted'] = 'Hora de iniciado';
$string['unknownserverresponse'] = 'Respuesta del servidor :';
$string['waitfirst'] = 'Esperando que se envíe la primera pregunta';
$string['waitstudent'] = 'Esperando a que los estudiantes se conecten';
$string['wrongjoincode'] = 'Código de ingreso incorrecto. Inténtelo nuevamente.';
$string['yes'] = 'Si';
$string['yourfinalscore'] = 'Su puntaje final';
$string['yourscorecanchange'] = 'Su puntaje será cambiado por su profesor en caso que no haya preguntado todas las preguntas en el examen.';
$string['yourscoreis'] = 'Su puntaje es';
