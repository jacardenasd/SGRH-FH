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
 * Strings for component 'quizaccess_delayed', language 'es_mx', version '4.4'.
 *
 * @package     quizaccess_delayed
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptquiz'] = 'Realizar el examen ahora';
$string['delayedattemptlock'] = 'Entrada gradual al examen';
$string['delayedattemptlock_help'] = 'Si se activa, al acceder a la página antes del momento de apertura del examen se inhabilita transitoriamente el botón de comienzo.
Se activa un contador de tiempo con un plazo aleatorio para cada estudiante (hasta un tiempo configurado por su institución). Solo cuando ese plazo termina el estudiante puede usar el botón de comienzo del examen.';
$string['explaindelayedattempt'] = 'Establece una demora aleatoria para comenzar';
$string['flipdowncounter'] = 'Contador de tarjetas animado';
$string['noscriptwarning'] = 'Este examen necesita un navegador que soporte JavaScript. Si tiene un bloqueador de Javascript necesitará desactivarlo.';
$string['plaintextcounter'] = 'Contador de texto simple';
$string['pleasewait'] = 'Por favor, espere en esta página.';
$string['pluginname'] = 'Entrada con retardo aleatorio al examen.';
$string['pluginname_desc'] = 'Auto activa el botón de inicio de examen con un retardo aleatorio.';
$string['quizaccess_delayed_allowdisable'] = 'A los profesores se les permite desactivar la regla';
$string['quizaccess_delayed_countertype'] = 'Tipo de contador.';
$string['quizaccess_delayed_dangerousquiznotice'] = 'Mensaje institucional que se muestra cuando el examen podría ser problemático';
$string['quizaccess_delayed_dangerousquiznotice_desc'] = 'Este mensaje será mostrado a los profesores mientras configuran el examen si el plugin determina que los parámetros podrían ser problemáticos. Este es un buen lugar para enlazar manuales o instrucciones para diseñar exámenes menos problemáticos.';
$string['quizaccess_delayed_enabled'] = 'Entrada retardada a los examenes activada';
$string['quizaccess_delayed_enabledbydefault'] = 'Los nuevos exámenes usarán esta regla por defecto';
$string['quizaccess_delayed_maxdelay'] = 'Máximo retardo (minutos)';
$string['quizaccess_delayed_maxdelay_desc'] = 'Este es el retraso máximo que cualquier estudiante puede tener que esperar antes de poder comenzar el examen. El retraso real será un número aleatorio entre 0 y <b>COMO MÁXIMO</b> este valor.';
$string['quizaccess_delayed_notice'] = 'Aviso para los estudiantes';
$string['quizaccess_delayed_notice_desc'] = 'El texto es mostrado a todos los estudiantes adicionalmente al texto que el profesor usa como descripción de la actividad. Está diseñado para mostrar un mensaje institucional, usualmente relacionado con instrucciones acerca de cómo usar los exámenes.';
$string['quizaccess_delayed_showdangerousquiznotice'] = 'Mostrarle una advertencia al profesor si su examen usa muchos recursos del servidor';
$string['quizaccess_delayed_sitewidecount'] = 'Utilice el recuento de estudiantes de todo el sitio para el cálculo de la tarifa';
$string['quizaccess_delayed_sitewidecount_desc'] = 'Si está habilitado, la tasa de estudiantes que potencialmente comenzarán el examen se calculará utilizando todos los exámenes que comiencen a la misma hora en el sitio. Si está deshabilitado, solo se contabilizarán los estudiantes inscritos en el curso.';
$string['quizaccess_delayed_startrate'] = 'Tasa de entrada (alumnos por minuto)';
$string['quizaccess_delayed_startrate_desc'] = 'Este es el número promedio de estudiantes por minuto que sus servidores pueden gestionar para iniciar el examen. Un número bajo causará retrasos largos, pero reducirá la carga del servidor. Un número alto causará retrasos cortos, pero podría sobrecargar el servidor si muchos estudiantes intentan iniciarlo al mismo tiempo. Usted debe realizar una evaluación comparativa en su sitio.';
$string['quizaccess_delayed_teachernotice'] = 'Este examen aplicará un control de entrada gradual, que hará que los estudiantes entren aleatoriamente hasta con {$a} minutos de retardo.';
$string['quizaccess_delayed_teachernotice2'] = 'Mensaje para el profesor: Sus estudiantes verán el siguiente mensaje mientras esperan:';
$string['quizaccess_delayed_timelimitpercent'] = 'Máximo retardo como porcentaje del tiempo de realización';
$string['quizaccess_delayed_timelimitpercent_desc'] = 'Si el examen tiene un límite de tiempo, esta configuración se usará para calcular el retraso máximo como porcentaje del límite de tiempo. El retraso máximo real será el mínimo entre este valor y el valor establecido en "Retraso máximo (minutos)". Esto permite establecer un retraso máximo en relación con el límite de tiempo del examen. Por ejemplo, si se establece este valor en 10% y el examen tiene un límite de tiempo de 60 minutos, el retraso máximo será de 6 minutos. Si el examen no tiene límite de tiempo, esta configuración se ignora.';
$string['quizwillstartinabout'] = 'Su turno para hacer el examen comenzará en';
$string['quizwillstartinless'] = 'Su turno para hacer el examen comenzará en menos de un minuto';
$string['tooshortpagesadvice'] = 'El examen tiene {$a->pages} páginas que son demasiado cortas. Esto aumenta la carga sobre el servidor severamente. Considere asignar más tiempo a cada página, por ejemplo poniendo más preguntas en cada página.';
$string['tooshorttimeguardadvice'] = 'Un tiempo de disponibilidad de {$a->timespanstr} es demasiado ajustado. Tenga en cuenta que se aplicará a algunos estudiantes un retardo de espera de hasta {$a->maxdelaystr}, tiene {$a->timelimitstr} para realizar la prueba y conviene dejar un márgen de seguridad para otros retardos en el inicio del examen.';
