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
 * Strings for component 'qtype_geogebra', language 'es_mx', version '4.4'.
 *
 * @package     qtype_geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconstraints'] = 'Añadir restricciones (condiciones) a las variables.';
$string['addmorevarblanks'] = 'Espacios vacíos para {no} variables más';
$string['answerinvalid'] = 'La cadena_de_texto de respuesta es inválida. Esto no debería de pasar.';
$string['answermissing'] = 'Falta la respuesta. Probablemente JavaScript no está activado en el navegador, o tal vez ocurrió un error desconocido.';
$string['answervar'] = 'Variables para calificación automática';
$string['answervar_help'] = 'Para calificación automática: Nombre de un objeto booleano en GeoGebra que es verdadero si el estudiante resolvió la pregunta (parcialmente). Suma todas las calificaciones para todas las variables booleanas. La pregunta es correcta si alguna combinación supera el 100 %, pero debe haber al menos una combinación que sume exactamente el 100 %. Déjelo en blanco para calificación manual.';
$string['applet_advanced_settings'] = 'Configuraciones Avanzadas...';
$string['constraints'] = 'Restricciones (condiciones)';
$string['constraints_help'] = '¿Existen restricciones para las variables, como a < b, que no se pudieron declarar utilizando las opciones del control deslizante? separadas por comas. Las relaciones admitidas son: <, <=, >, >=. Si usted necesita una igualdad, debe utilizar la misma variable al crear la hoja de cálculo de GeoGebra. No se admiten los rangos dinámicos, es decir, el uso de variables para los valores mínimo y máximo del control deslizante.';
$string['constraintswrongortoohard'] = '{$a->inequalities} están equivocadas o demasiado difíciles de cumplir, intentamos (fuerza bruta) {$a->tries} veces en {$a->time} segundos. Tal vez usaremos un mejor  método en el futuro...';
$string['dragndrop'] = 'Arrastrar y soltar un archivo GeoGebra en cualquier parte en la sección de Applet GeoGebra';
$string['enable_label_drags'] = 'Habilitar Arrastre de Etiquetas';
$string['enable_right_click'] = 'Habilitar Clic Derecho y Edición del Teclado';
$string['enable_shift_drag_zoom'] = 'Habilitar Shift-Arrastrar y Zoom';
$string['feedback'] = 'Retroalimentación cuando la variable es cierta';
$string['feedback_help'] = 'La retroalimentación es tomada automáticamente del subtítulo de la variable en el archivo Geogebra.';
$string['forcedimensions'] = 'Forzar dimensiones applet';
$string['forcedimensions_help'] = 'De forma predeterminada la applet Geogebra es escalada automáticamente dentro del diseño del examen. Habilitar esta opción le permitirá a usted especificar altura y ancho del plugin manualmente y deshabilitar el cambio de escala automático.';
$string['forcedimensionsenable'] = 'Especificar alto y ancho manualmente';
$string['geogebraapplet'] = 'Applet Geogebra';
$string['getvars'] = 'Obtener variables que son aleatorizadas desde la applet';
$string['ggbfilemissing'] = 'Falta la cadena-base64 en la respuesta. Probablemente JavaScript no está habilitado en el navegador, o tal vez ocurrió un error desconocido';
$string['ggbturl'] = 'URL o ID de Hoja_de_Trabajo (\'\'worksheet\'\') de GeoGebra';
$string['ggbturl_help'] = 'Puede utilizar el botón para compartir de GeoGebra y copiar y pegar el enlace, o bien utilizar el repositorio de GeoGebra. El subprograma y los parámetros se almacenan en la base de datos; el subprograma no se volverá a cargar desde GeoGebra a menos que se lo solicite. También es posible proporcionar simplemente el ID o la clave de uso compartido del subprograma.';
$string['ggbxmlmissing'] = 'Falta la Cadena-XML en la respuesta. Probablemente no esté activado JavaScript en el navegador, o tal vez ocurrió un error desconocido';
$string['height'] = 'Altura';
$string['height_help'] = 'De manera predeterminada, la aplicación GeoGebra se ajustará su escala automáticamente para adaptarse al diseño del examen. Si por alguna razón esto no se ajusta a sus necesidades, usted puede especificar el ancho y la altura manualmente. Si los valores son demasiado altos, los estudiantes verán una barra de desplazamiento en las pantallas pequeñas para mostrar la aplicación completa.';
$string['heightnotzero'] = 'Tiene que especificar un valor mayor de cero para la altura';
$string['invalidinequality'] = '{$a} es inválida';
$string['isexercise'] = 'Usar GeoGebra-Exercise para revisar la pregunta';
$string['isexercise_help'] = 'El applet contiene herramientas definidas_por_el_usuario que pueden emplearse para revisión automática del ejercicio. \\n Precaución: ¡Todas las respuestas inferiores no son aplicables en este caso!';
$string['israndomized'] = '¿Hay variables que deberían de ser aleatorizadas?';
$string['loadapplet'] = '(Re)Cargar y mostrar Applet';
$string['loadapplet_help'] = '(Re)Cargar la Applet desde GeoGebra y almacenar la nueva versión de GeoGebra en la BasedeDatos';
$string['mineqmax'] = 'Los valores mínimo y máximo de aleatorización no se han especificado correctamente para la variable {$a}, ya sea que no haya especificado los valores mínimo y máximo del control deslizante o que el elemento no sea un control deslizante en absoluto. Probablemente deba corregir esto en su archivo GeoGebra.';
$string['minplusstepgtmax'] = 'El incremento positivo para Min es mayor que Max para la variable {$a}, Usted probablemente tiene que corregir esto en su archivo GeoGebra.';
$string['noappletloaded'] = '¡No hay Applet cargada! Revise si la URL es correcta y si Usted ve un Applet después de elegir un enlace o (re)cargar el Applet.';
$string['nofractionsumeq1'] = 'Al menos una combinación de calificaciones debe de sumar 100%';
$string['pluginname'] = 'GeoGebra';
$string['pluginname_help'] = 'Preguntas en donde el estudiante puede resolver la pregunta usando GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';
$string['pluginnameadding'] = 'Añadiendo una pregunta GeoGebra';
$string['pluginnameediting'] = 'Editando una pregunta GeoGebra';
$string['pluginnamesummary'] = 'Una versión de preguntas calculadas que usa GeoGebra para mostrar la pregunta y verificar la respuesta cuando se realiza el examen.';
$string['privacy:metadata'] = 'El plugin del tipo de pregunta Geogebra no almacena ningún dato personal.';
$string['randomizedbutnovars'] = 'Usted ha seleccionado que la pregunta deba aleatorizarse, pero Usted no especificó variables para ser aleatorizadas.';
$string['randomizedvar'] = 'Variables a aleatorizar';
$string['randomizedvar_help'] = 'Variables que deberían aleatorizarse (separadas por comas). Use las opciones para deslizable (\'\'slider\'\') en GeoGebra para declarar Min, Max e Incremento. Estas variables pueden usarse también en el texto de la pregunta al rodearlas entre paréntesis ondulados, por ejemplo;  {a}.';
$string['show_algebra_input'] = 'Mostrar Barra de Escritura';
$string['show_menu_bar'] = 'Mostrar Menú';
$string['show_reset_icon'] = 'Mostrar ícono para Reiniciar Construcción';
$string['show_tool_bar'] = 'Mostrar Bara_de_herramientas';
$string['stepzero'] = 'El incremento es 0, para la variable {$a}, ya sea porque Usted no haya especificado los incrementos deslizables o el elemento no es un deslizable en absoluto. Usted probablemente tiene que corregir esto en su archivo GeoGebra.';
$string['useafile'] = 'o usar un archivo ggb';
$string['valuecheckedfor'] = 'Objeto Booleano en GeoGebra que es usado para revisar la rectitud.';
$string['variablenamewrong'] = 'No se pudo encontrar una variable con ese nombre en el archivo GeoGebra.';
$string['variableno'] = 'Variable {$a}';
$string['variables'] = 'Variables';
$string['width'] = 'Ancho';
$string['width_help'] = 'De manera predeterminada, la aplicación GeoGebra se ajustará su escala automáticamente para adaptarse al diseño del examen. Si por alguna razón esto no se ajusta a sus necesidades, usted puede especificar el ancho y la altura manualmente. Si los valores son demasiado altos, los estudiantes verán una barra de desplazamiento en las pantallas pequeñas para mostrar la aplicación completa.';
$string['widthnotzero'] = 'Tiene que especificar un valor mayor de cero para el ancho.';
$string['willbereadfromfile'] = 'Se leerá de GeoGebra ... (vea botón de ayuda)';
