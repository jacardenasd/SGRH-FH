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
 * Strings for component 'qbehaviour_certaintywithstudentfbdeferred', language 'es_mx', version '4.4'.
 *
 * @package     qbehaviour_certaintywithstudentfbdeferred
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allegederror'] = 'Error presunto';
$string['allegederror_details'] = 'Error posible ({$a})';
$string['allegederrorplural'] = 'Errores presuntos';
$string['almostsure'] = 'Casi seguro';
$string['almostsure_details'] = 'usted estaba casi seguro';
$string['answer'] = 'su respuesta fue {$a}';
$string['answercategorydetails'] = '{$a->certainty} y {$a->youranswer}';
$string['behavioursummary'] = 'Resumen de certidumbre';
$string['correct'] = 'correcto';
$string['correctanswers'] = 'Respuestas correctas';
$string['declaredignorance'] = 'Respuesta aleatoria';
$string['declaredignorance_details'] = 'Respuesta aleatoria (usted contestó aleatoriamente; el que su respuesta fuese correcta o incorrecta no importa)';
$string['declaredignoranceplural'] = 'Respuestas aleatorias';
$string['expectedtrend'] = 'Tendencia esperada';
$string['expectedtrend_help'] = 'Esto describe la forma general que tendría el histograma con un comportamiento lúcido típico. Mientras más cercana esté la forma de su histograma a esta curva, más lúcido fue usted en sus respuestas y certeza.';
$string['incorrect'] = 'incorrecta';
$string['incorrectanswers'] = 'Respuestas incorrectas';
$string['ncorrectanswers'] = 'Respuestas correctas: {$a}';
$string['ndeclaredignorance'] = 'Respuestas aleatorias: {$a}';
$string['nincorrectanswers'] = 'Respuestas incorrectas: {$a}';
$string['numofanswers'] = 'Número de respuestas';
$string['pleaseselectcertainty'] = 'Por favor seleccione una.';
$string['pluginname'] = 'Certeza con retroalimentación del estudiante (diferida)';
$string['pluginsettings'] = 'Configuraciones de comportamiento de certeza del examen';
$string['privacy:behaviourpath'] = 'Comportamiento';
$string['privacy:metadata:attemptstepdata'] = 'Este plugin almacena algunos datos enviados durante intentos de examen.';
$string['privacy:metadata:name'] = 'Nombre de variable de datos en paso intentado, entre [certainty, studentfeedback, generalstudentfeedback].';
$string['privacy:metadata:value'] = 'Valor de variable de datos de paso de intento.
Para certeza, la certeza de que la respuesta enviada sería considerada correcta, para cada pregunta intentada usando este comportamiento.
Para studentfeedback, la retroalimentación enviada después de un intento a pregunta, para cada pregunta intentada usando este comportamiento.
Para generalstudentfeedback, la retroalimentación global enviada después de un intento al examen, para cada examen usando este comportamiento.';
$string['quitesure'] = 'Bastante seguro';
$string['quitesure_details'] = 'usted estuvo bastante seguro';
$string['quiteunsure'] = 'Bastante incierto';
$string['quiteunsure_details'] = 'usted estuvo bastante incierto';
$string['random'] = '50-50 o menos';
$string['random_alt'] = 'Yo contesté aleatoriamente';
$string['random_details'] = 'Usted contestó aleatoriamente';
$string['random_open'] = 'Yo creo que está incorrecto';
$string['settings:answercategorization'] = 'Categorización de repuesta';
$string['settings:answerclasses'] = 'Clases de respuesta';
$string['settings:answerclassesinfo'] = 'Para cada clase de respuesta, usted puede personalizar el color asociado.<br>
Usted puede personalizar las etiquetas de clase de respuesta mediante <a href="{$a}">Configuraciones de personalización del idioma</a>.';
$string['settings:certaintylevela'] = 'Nivel de certeza {$a}';
$string['settings:certaintylevels'] = 'Niveles de certeza';
$string['settings:certaintylevelsinfo'] = 'Para cada nivel de certeza, usted puede personalizar la etiqueta mostrada (si fuera relevante), el porcentaje mostrado y la manera en la que la respuesta será categorizada según sea correcta / incorrecta.<br>
Usted puede personalizar aun más las etiquetas de nivel de certeza mediante  <a href="{$a}">Configuraciones de personalización del idioma</a>.';
$string['settings:enablefbforclasses'] = 'Mostrar campo de retroalimentación del estudiante para clases de respuesta';
$string['settings:enablefbforclasses_help'] = 'El campo que le pide al estudiante una retroalimentación en texto solamente será mostrado para preguntas con una respuesta dentro de las clasificaciones seleccionadas.';
$string['settings:error:categoryorder'] = 'Por favor mantenga una continuidad en la caracterización de los niveles de certeza: el primer nivel opcional de Repuestas aleatorias, después niveles de Conocimiento incierto / Errores probables, y finalmente niveles de Conocimiento bien fundamentado / Errores inesperados.';
$string['settings:label'] = 'Etiqueta';
$string['settings:loadpresets'] = 'Cargar pre-configuración de escala';
$string['settings:percentage'] = 'Porcentaje';
$string['settings:preset:alternative'] = 'Alternativo (lineal)';
$string['settings:preset:default'] = 'Predeterminado (antiguo)';
$string['settings:preset:recommended'] = 'Recomendado (no-lineal)';
$string['settings:studentfeedback'] = 'Campo de retroalimentación del estudiante';
$string['settings:useopenlabel'] = 'etiqueta de certeza alternativa de preguntas abiertas';
$string['settings:useopenlabel_help'] = 'Para preguntas que son abierta (o sea, que NO son Falso/Verdadero ni Opción Múltiple). Esta etiqueta alternativa puede ser usada para describir este nivel de certeza.';
$string['settings:useopenlabela'] = 'Use "{$a}" para preguntas abiertas';
$string['settingsformerrors'] = 'NO se guardaron los cambios. Hubo algunos errores en los datos enviados. Por favor refiérase a los mensajes de error de abajo.';
$string['sure'] = 'Seguro';
$string['sure_details'] = 'usted estuvo seguro';
$string['sureknowledge'] = 'Conocimiento bien fundado';
$string['sureknowledge_details'] = 'Conocimiento bien fundado ({$a})';
$string['sureknowledgeplural'] = 'Conocimiento bien fundamentado';
$string['unexpectederror'] = 'Error inesperado';
$string['unexpectederror_details'] = 'Error inesperado ({$a})';
$string['unexpectederrorplural'] = 'Errores inesperados';
$string['unsure'] = 'Incierto';
$string['unsure_details'] = 'usted estuvo incierto';
$string['unsureknowledge'] = 'Conocimiento incierto';
$string['unsureknowledge_details'] = 'Conocimiento incierto ({$a})';
$string['unsureknowledgeplural'] = 'Conocimiento incierto';
$string['whatisyourcertaintylevel'] = '¿Cuál es el nivel de certeza asociado con su respuesta?';
