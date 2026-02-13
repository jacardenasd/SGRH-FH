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
 * Strings for component 'qtype_formulas', language 'es_mx', version '4.4'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Error absoluto';
$string['addmorepartsblanks'] = 'Espacios vacíos para {no} partes más';
$string['algebraic_formula'] = 'Fórmula algebraica';
$string['allfieldsempty'] = 'Todos los campos de entradas están vacíos.';
$string['answer'] = 'Respuesta*';
$string['answer_help'] = '**Requerido**.
Debe ser un número, una lista de números, o una lista de cadenas de caracteres, dependiendo del tipo de respuesta elegido. Por favor tenga en cuenta que el número de elementos en la lista define el número de campos de respuesta para esta parte.

<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answercombinedunitmulti'] = 'Respuesta y unidad para la parte {$a->part}';
$string['answercombinedunitsingle'] = 'Respuesta y unidad';
$string['answercoordinatemulti'] = 'Campo de respuesta {$a->numanswer} para parte {$a->part}';
$string['answercoordinatesingle'] = 'Campo de respuesta {$a->numanswer}';
$string['answermark'] = 'Puntuación de parte*';
$string['answermark_help'] = '**Requerido**.
El puntaje para la respuesta de esta parte, que debería ser un número mayor de 0.
La puntuación predeterminada de la pregunta completa es la suma de las puntuaciones de sus partes.

Nota: Si se deja vacío este campo de puntaje, y no hubiera respuesta, se eliminará la parte cuando se guarde la pregunta.';
$string['answermulti'] = 'Respuesta para parte {$a->part}';
$string['answerno'] = 'Parte {$a}';
$string['answernotacceptable'] = 'Esta respuesta no es válida para el tipo de respuesta dada: {$a}.';
$string['answernotunique'] = 'Hay otras respuestas correctas.';
$string['answernotunique_help'] = 'Si esta opción está activada, el estudiante verá "Una respuesta correcta es: ..." enlugar de "La respuesta correcta es: ,,," cuando revise su intento.';
$string['answersingle'] = 'Respuesta';
$string['answertype'] = 'Tipo de respuesta';
$string['answertype_help'] = 'Hay cuatro tipos de respuestas.

Las respuestas de número, numérica y fórmula numérica requieren un número o una lista de números como respuesta.

Las respuestas de fórmula algebraica requieren una cadena de caracteres o una lista de cadenas como respuesta.

Los diferentes tipos de respuestas impondrán diferentes restricciones al escribir las respuestas, por lo que los estudiantes necesitarán saber cómo escribirlas. La revisión del formato en el código de la pregunta también les dirá cuando escriban si es que algo está equivocado. Por favor, lea la documentación para los detalles.';
$string['answertype_link'] = 'https://dynamiccourseware.org/';
$string['answerunitmulti'] = 'Unidad para parte {$a->part}';
$string['answerunitsingle'] = 'Unidad';
$string['caretwarning'] = 'Tenga en cuenta que ^ significa XOR en respuestas modelo, excepto para fórmulas algebraicas. Para exponenciación use en su lugar ** .';
$string['checkvarshdr'] = 'Revisar inicialización de variables';
$string['choiceno'] = 'No';
$string['choiceyes'] = 'Si';
$string['commonsiunit'] = 'Unidades comunes del Sistema Internacional de Unidades';
$string['correctansweris'] = 'Una respuesta correcta posible es: {$a}';
$string['correctfeedback'] = 'Para cualquier respuesta correcta';
$string['correctfeedback_help'] = 'Esta retroalimentación será mostrada a estudiantes que obtengan la puntuación máxima en esta parte. Puede incluir variables  globales y locales que serán remplazadas por sus valores';
$string['correctness'] = 'Criterio para calificar*';
$string['correctness_help'] = '**Requerida**. Usted puede elegir entre error relativo o error absoluto con rango del error. No puede usarse error relativo para el tipo de respuesta algebraica.

Para la definición precisa del error relativo y del error absoluto cuando hay más de un campo de respuesta; vea la documentación.';
$string['correctness_link'] = 'https://dynamiccourseware.org/';
$string['correctnessexpert'] = 'Experto';
$string['correctnesssimple'] = 'Modo simplificado';
$string['defaultanswermark'] = 'Puntuación de parte por defecto';
$string['defaultanswermark_desc'] = 'Puntuación de parte por defecto para nuevas partes de pregunta';
$string['defaultanswertype'] = 'Tipo de respuesta por defecto';
$string['defaultanswertype_desc'] = 'Tipo de respuesta por defecto para nuevas partes de pregunta';
$string['defaultcorrectness'] = 'Criterio para calificar por defecto';
$string['defaultcorrectness_desc'] = 'Criterio para calificar por defecto para nuevas partes de pregunta';
$string['defaultunitpenalty'] = 'Penalización unitaria por defecto';
$string['defaultunitpenalty_desc'] = 'Penalización por defecto para unidad equivocada (0-1)';
$string['defaultwidth_algebraic_formula'] = 'Tipo de respuesta "Fórmula algebraica"';
$string['defaultwidth_algebraic_formula_desc'] = 'Ancho predeterminado del campo de entrada para el tipo de respuesta "Fórmula algebraica"';
$string['defaultwidth_number'] = 'Tipo de respuesta "Número"';
$string['defaultwidth_number_desc'] = 'Ancho predeterminado del campo de entrada para el tipo de respuesta "Número"';
$string['defaultwidth_number_unit'] = 'Campo combinado "Número"';
$string['defaultwidth_number_unit_desc'] = 'Ancho predeterminado del campo de entrada combinado para el tipo de respuesta "Número"';
$string['defaultwidth_numeric'] = 'Tipo de respuesta "Numérica"';
$string['defaultwidth_numeric_desc'] = 'Ancho predeterminado del campo de entrada para el tipo de respuesta "Numérica"';
$string['defaultwidth_numeric_unit'] = 'CAmpo combinado "Numérico"';
$string['defaultwidth_numeric_unit_desc'] = 'Ancho predeterminado del campo de entrada combinado para el tipo de respuesta "Numérica"';
$string['defaultwidth_numerical_formula'] = 'Tipo de respuesta "Fórmula numérica"';
$string['defaultwidth_numerical_formula_desc'] = 'Ancho predeterminado del campo de entrada para el tipo de respuesta "Fórmula numérica"';
$string['defaultwidth_numerical_formula_unit'] = 'Campo combinado "Fórmula numérica"';
$string['defaultwidth_numerical_formula_unit_desc'] = 'Ancho predeterminado del campo de entrada combinado para el tipo de respuesta "Fórmula numérica"';
$string['defaultwidth_unit'] = 'Campo de unidad separada';
$string['defaultwidth_unit_desc'] = 'Ancho predeterminado del campo de unidad separada';
$string['defaultwidthunit'] = 'Unidad de longitud';
$string['defaultwidthunit_desc'] = 'Unidad de longitud usada para las configuraciones iferiores de ancho predeterminado.Las unidades "em" o "rem" corresponden aproximadamente al ancho de un dígito.';
$string['error_algebraic_relerr'] = 'El error relativo (_relerr) no se puede utilizar con un tipo de respuesta de fórmula algebraica.';
$string['error_algebraic_var'] = 'Error de sintaxis de variable algebraica.';
$string['error_algvar_numbers'] = 'Las variables algebraicas solo pueden ser inicializadas con una lista de números.';
$string['error_answer_missing'] = 'No se ha definido respuesta alguna';
$string['error_answer_missing_in_part'] = 'No se ha definido una respuesta para la parte {$a}.';
$string['error_answerbox_duplicate'] = 'Cada sustituible (placeholder) de la caja dede ser único; se encontró una segunda instancia de {$a}.';
$string['error_answertype_mistmatch'] = 'Discrepancia de tipo de respuesta: Una respuesta de tipo numérica requiere número y un tipo de respuesta algebraica requiere cadena de caracteres';
$string['error_bitshift_integer'] = 'El operador de desplazamiento de bits sólo debe utilizarse con números enteros.';
$string['error_bitshift_negative'] = 'No se permite el desplazamiento de bits por un número negativo {$a}.';
$string['error_bitwand_integer'] = 'El operador bit a bit AND solo debe utilizarse con números enteros.';
$string['error_bitwor_integer'] = 'El operador bit a bit OR solo debe utilizarse con números enteros.';
$string['error_bitwxor_integer'] = 'El operador bit a bit XOR solo debe utilizarse con números enteros.';
$string['error_cannotusealgebraic'] = 'La variable algebraica \'{$a}\' no puede ser usada en este contexto.';
$string['error_criterion'] = 'El criterio de caplificación debe ser evaluado a un único número.';
$string['error_criterion_empty'] = 'El criterio de calificación no puede estar vacío.';
$string['error_damaged_question'] = 'Datos no válidos. Es posible que la pregunta "Fórmulas" se haya dañado, por ejemplo, durante un proceso de importación o restauración fallido.';
$string['error_db_delete'] = 'No se pudo eliminar registro de la base de datos, tabla {$a}.';
$string['error_db_missing_options'] = 'A la pregunta de fórmulas con ID {$a} le faltaba un registro de opciones. Se usa el valor predeterminado.';
$string['error_db_read'] = 'No se pudo leer de la base de datos, tabla {$a}.';
$string['error_db_write'] = 'No se pudo escribir a la base de datos, tabla {$a}.';
$string['error_diff_binary_function_needslist'] = 'Al utilizar map() con la función binaria \'{$a}\', al menos un argumento debe ser una lista.';
$string['error_diff_binary_function_two'] = 'Cuando se utiliza map() con la función binaria \'{$a}\', se esperan dos argumentos.';
$string['error_diff_binary_operator_needslist'] = 'Al utilizar map() con el operador binario \'{$a}\', al menos un argumento debe ser una lista.';
$string['error_diff_binary_operator_two'] = 'Cuando se utiliza map() con el operador binario \'{$a}\', se esperan dos argumentos.';
$string['error_diff_binary_samesize'] = 'Al utilizar map() con dos listas, ambas deben tener el mismo tamaño.';
$string['error_diff_first'] = 'El primer argumento de diff() debe ser una lista.';
$string['error_diff_first_invalid'] = '\'{$a}\' no es un primer argumento legal para la función map() .';
$string['error_diff_firstlist_content'] = 'Al utilizar diff(), la primera lista debe contener solo números o solo cadenas de caracteres.';
$string['error_diff_firstlist_mismatch'] = 'diff(): desajuste de tipos para el elemento #{$a} (indexado en cero) de la primera lista.';
$string['error_diff_function_more_args'] = 'La función \'{$a}\' no se puede utilizar con map(), porque espera más de dos argumentos.';
$string['error_diff_function_no_args'] = 'La función \'{$a}\' no se puede utilizar con map(), porque no acepta argumentos.';
$string['error_diff_samesize'] = 'diff() espera dos listas del mismo tamaño.';
$string['error_diff_second'] = 'El segundo argumento de diff() debe ser una lista.';
$string['error_diff_secondlist_mismatch'] = 'diff(): desajuste de tipos para el elemento #{$a} (indexado en cero) de la segunda lista.';
$string['error_diff_third'] = 'El tercer argumento de diff() solo se puede utilizar cuando se trabaja con listas de cadenas de caracteres.';
$string['error_diff_unary_function'] = 'Al usar map() con la función unaria \'{$a}\', solo se acepta una lista.';
$string['error_diff_unary_needslist'] = 'Al usar map() con \'{$a}\', el argumento debe ser una lista.';
$string['error_diff_unary_operator'] = 'Al usar map() con el operador unario \'{$a}\', solo se acepta una lista.';
$string['error_distribution_outcomes'] = '{$a} espera que el número de resultados exitosos sea un entero no negativo.';
$string['error_distribution_tries'] = '{$a} espera que el número de intentos sea un entero no negativo.';
$string['error_divzero'] = 'La división entre cero no está definida.';
$string['error_emptyrange'] = 'Error de evaluación: el rango de {$a->start} a {$a->end} con el paso {$a->step} estará vacío.';
$string['error_emptystack'] = 'Error de evaluación: pila vacía: ¿pasó suficientes argumentos para la función o el operador?';
$string['error_eval_numerical'] = 'Algunas expresiones no pueden evaluarse numéricamente.';
$string['error_evaluate_invocation'] = 'Mala invocación de {$a}.';
$string['error_evaluation_unknown_nan_inf'] = 'Error desconocido al aplicar el operador {$a}, el resultado fue infinito (positivo o negativo) o no un número (NAN).';
$string['error_expectbraceorstatement'] = 'Error de sintaxis: se esperaba { o declaración.';
$string['error_expectbracketorvarname'] = 'Error de sintaxis: se esperaba [ o nombre de variable.';
$string['error_expectclosingparen'] = 'Error de sintaxis: se esperaba )';
$string['error_expected_intindex'] = 'Error de evaluación: el índice debe ser un entero, se encontró \'{$a}\'.';
$string['error_expected_number'] = 'Se esperaba número';
$string['error_expected_number_found'] = 'Se esperaba número; se encontró {$a->found}.';
$string['error_expected_number_found_algebraicvar'] = 'Se esperaba número; se encontró variable algebraica.';
$string['error_expected_number_found_list'] = 'Se esperaba número; se encontró lista.';
$string['error_expected_scalar'] = 'Se esperaba valor escalar.';
$string['error_expected_scalar_found'] = 'Se esperaba valor escalar; se encontró {$a->found}.';
$string['error_expected_scalar_found_algebraicvar'] = 'Se esperaba valor escalar; se encontró variable algebraica.';
$string['error_expected_scalar_found_list'] = 'Se esperaba valor escalar; se encontró lista.';
$string['error_expects_number'] = '{$a->who} espera un número.';
$string['error_expects_number_found'] = '{$a->who} espera un número; se encontró {$a->found}.';
$string['error_expects_scalar'] = '{$a->who} espera un valor escalar.';
$string['error_expects_scalar_found'] = '{$a->who} espera un valor escalar; se encontró {$a->found}.';
$string['error_fact_toolarge'] = '¡No se puede computar {$a}! en esta plataforma, el resultado es mayor que PHP_MAX_INT.';
$string['error_fixed_range'] = 'Error de sintaxis de un rango fijo.';
$string['error_for_expectcolon'] = 'Error de sintaxis: se esperaba :';
$string['error_for_expectidentifier'] = 'Error de sintaxis: se esperaba identificador.';
$string['error_for_expectparen'] = 'Error de sintaxis: se esperaba ( después de for.';
$string['error_forbid_char'] = 'La fórmula o expresión contiene operadores o caracteres prohibidos.';
$string['error_forgotoperator'] = 'Error de sintaxis: ¿se le olvidó poner un operador?';
$string['error_forloop'] = 'Error de sintaxis del bucle para (for)';
$string['error_forloop_expression'] = 'La expresión del bucle para (for) debe ser una lista.';
$string['error_forloop_var'] = 'La variable del bucle para (for) tiene algunos errores.';
$string['error_func_all_lists'] = '{$a} espera que sus argumentos sean listas.';
$string['error_func_argcount'] = 'Número no válido de argumentos para la función \'{$a->function}\': se proporcionó {$a->count}.';
$string['error_func_first_int'] = '{$a} espera que su primer argumento sea un entero.';
$string['error_func_first_list'] = '{$a} espera que su primer argumento sea una lista.';
$string['error_func_first_nnegint'] = '{$a} espera que su primer argumento sea un entero no-negativo.';
$string['error_func_first_number'] = '{$a} espera que su primer argumento sea un número.';
$string['error_func_first_nzeroint'] = '{$a} espera que su primer argumento sea un entero no-cero.';
$string['error_func_first_posint'] = '{$a} espera que su primer argumento sea un entero positivo.';
$string['error_func_nan'] = 'El resultado de la función \'{$a}\' no era un número.';
$string['error_func_nnegint'] = '{$a} espera que su argumento sea un entero no negativo.';
$string['error_func_param'] = 'Número equivocado o tipo equivocado de parámetros para la función {$a}()';
$string['error_func_paren'] = 'Error de sintaxis: la función debe ir seguida de un paréntesis de apertura.';
$string['error_func_positive'] = '{$a} espera que su argumento sea un número positivo.';
$string['error_func_second_int'] = '{$a} espera que su segundo argumento sea un entero.';
$string['error_func_second_nnegint'] = '{$a} espera que su segundo argumento sea un entero no negativo.';
$string['error_func_second_nzeronum'] = '{$a} espera que su segundo argumento sea un número distinto de cero.';
$string['error_func_second_posint'] = '{$a} espera que su segundo argumento sea un entero positivo.';
$string['error_func_third_posint'] = '{$a} espera que su tercer argumento sea un entero positivo.';
$string['error_grading_error'] = '¡Error al calificar! Probablemente resultado de archivo importado incorrecto o corrupción de la base de datos.';
$string['error_grading_not_one'] = 'El criterio de calificación debe ser 1 para las respuestas correctas. Se encontró {$a} en su lugar.';
$string['error_grading_single_expression'] = 'El criterio de calificación debería ser una sola expresión. Se encontraron {$a} declaraciones en su lugar.';
$string['error_import_missing_field'] = 'Campo faltante: {$a}';
$string['error_import_missing_parts'] = 'La pregunta "{$a}" no contiene ninguna parte.';
$string['error_in_answer'] = 'Error en la respuesta #{$a->answerno}: {$a->message}';
$string['error_indexoutofrange'] = 'Error de evaluación: índice {$a} fuera de rango.';
$string['error_inv_consec'] = 'Al utilizar inv(), los números de la lista deben ser consecutivos.';
$string['error_inv_integers'] = 'inv() espera que todos los elementos de la lista sean números enteros; los flotantes se truncarán.';
$string['error_inv_list'] = 'inv() espera una lista.';
$string['error_inv_nodup'] = 'Al utilizar in(), la lista no debe contener el mismo número varias veces.';
$string['error_inv_smallest'] = 'Al utilizar inv(), el número más pequeño de la lista debe ser 0 o 1.';
$string['error_invalidalgebraic'] = '\'{$a}\' no es una expresión algebraica válida.';
$string['error_invalidargsep'] = 'Error de sintaxis: uso no válido del token separador \',\'.';
$string['error_invalidcodepoint'] = 'Secuencia de escape de punto de código UTF-8 no válida.';
$string['error_invalidcodepoint_toolarge'] = 'Secuencia de escape de punto de código UTF-8 no válida: punto de código mayor que 0x10FFFF.';
$string['error_invalidcontext'] = 'Contexto de variable no válido proporcionado, abortando importación.';
$string['error_invalidrandvardef'] = 'Definición no válida de una variable aleatoria: debe proporcionar una lista de valores posibles.';
$string['error_invalidrangesep'] = 'Error de sintaxis: uso no válido del separador de rango \':\'.';
$string['error_invalidunary'] = 'Uso no válido del operador unario: {$a}.';
$string['error_invalidvarname'] = 'Nombre de variable no válido: {$a}.';
$string['error_len_argument'] = 'len() espera una lista o una cadena de caracteres.';
$string['error_list_too_large'] = 'La lista no debe contener más de {$a} elementos.';
$string['error_map_unknown'] = 'Error de evaluación en map(): {$a}';
$string['error_mark'] = 'El puntaje para la respuesta debe tener un valor mayor a 0.';
$string['error_model_answer_no_content'] = 'Respuesta no válida: la respuesta modelo no contiene símbolos evaluables.';
$string['error_model_answer_prefix'] = 'Respuesta no válida: No utilice el operador de prefijo \\ en respuestas modelo con este tipo de respuesta.';
$string['error_no_answer'] = 'Se requiere al menos una respuesta.';
$string['error_notindexable'] = 'Error de evaluación: la indexación solo es posible con listas y cadenas.';
$string['error_number_for_numeric_answertypes'] = 'Formato de respuesta no válido: este tipo de respuesta espera un número o una lista de números.';
$string['error_onlyoneindex'] = 'Error de evaluación: solo se admite un índice al acceder a los elementos de la matriz.';
$string['error_parenmismatch'] = 'Paréntesis no coincidentes, \'{$a->closer}\' está cerrando \'{$a->opener}\' de la fila {$a->row} y la columna {$a->column}.';
$string['error_parennotclosed'] = 'Paréntesis desbalanceado, \'{$a}\' nunca se cierra.';
$string['error_pick_two'] = 'Cuando se llama con dos argumentos, pick() espera que el segundo parámetro sea una lista.';
$string['error_placeholder_format'] = 'Formato del sustituible (placeholder) equivocado o caracteres prohibidos.';
$string['error_placeholder_main_duplicate'] = 'Sustituible (placeholder) duplicado en el texto de la pregunta principal.';
$string['error_placeholder_missing'] = 'Falta el sustituible (placeholder) en el texto de la pregunta principal.';
$string['error_placeholder_sub_duplicate'] = 'El sustituible (placeholder) ya ha sido definido en alguna otra parte.';
$string['error_placeholder_too_long'] = 'La longitud del sustituible (placeholder) está limitada a 40 caracteres.';
$string['error_poly_one'] = 'Al llamar a poly() con un argumento, debe ser un número o una lista de números.';
$string['error_poly_string'] = 'Al llamar a poly() con una cadena de caracteres, el segundo argumento debe ser un número o una lista de números.';
$string['error_poly_stringlist'] = 'Al llamar a poly() con una lista de cadenas de caracteres, el segundo argumento debe ser una lista de números.';
$string['error_poly_two'] = 'Al llamar a poly() con dos argumentos, el primero debe ser una cadena de caracteres o una lista de cadenas de caracteres.';
$string['error_power_negbase_expfrac'] = 'La base no puede ser negativa con exponente fraccionario.';
$string['error_power_negbase_expzero'] = 'La división por cero no está definida, por lo que la base no puede ser cero para exponentes negativos.';
$string['error_power_zerozero'] = 'La potencia 0^0 no está definida.';
$string['error_prefix'] = 'Error de sintaxis: uso no válido del carácter de prefijo \\.';
$string['error_probability'] = '{$a} espera que la probabilidad sea al menos 0 y no más de 1.';
$string['error_question_damaged'] = 'Error: La pregunta está dañada, el número de fragmentos de texto y el número de partes de pregunta no son iguales.';
$string['error_randvars_set_size'] = 'El número de elementos generables en el conjunto debe de ser mayor a 1.';
$string['error_randvars_type'] = 'Todos los elementos en el conjunto deben de tener exactamente el mismo tipo y tamaño.';
$string['error_rangesyntax'] = 'Error de sintaxis en la definición del rango.';
$string['error_rangeusage'] = 'Error de sintaxis: los rangos solo se pueden usar en {} o [].';
$string['error_rule'] = 'Error de procesamiento de regla.';
$string['error_ruleid'] = 'No existe tal regla en el archivo con la ID / el nombre.';
$string['error_samestartend'] = 'Error de sintaxis: el inicio y el final del rango no deben ser iguales.';
$string['error_setindividual_algebraicvar'] = 'No se admite la configuración de elementos individuales para variables algebraicas.';
$string['error_setindividual_randvar'] = 'No se admite la configuración de elementos individuales para variables aleatorias.';
$string['error_setindividual_string'] = 'Los caracteres individuales de una cadena de caracteres no se pueden modificar.';
$string['error_setinlist'] = 'Error de sintaxis: no se pueden utilizar conjuntos dentro de una lista.';
$string['error_setnested'] = 'Error de sintaxis: los conjuntos no se pueden anidar.';
$string['error_sort_samesize'] = 'Al llamar a sort() con dos listas, deben tener el mismo tamaño.';
$string['error_sort_twolists'] = 'Al llamar a sort() con dos argumentos, ambos deben ser listas.';
$string['error_stacksize'] = 'La pila debe contener exactamente un elemento después de la evaluación: ¿olvidó un punto y coma en alguna parte?';
$string['error_stepzero'] = 'Error de sintaxis: el tamaño del paso de un rango no puede ser cero.';
$string['error_str_argument'] = 'str() espera un argumento escalar, por ejemplo un número.';
$string['error_strayparen'] = 'Paréntesis desbalanceado, se encontró \'{$a}\' extraviado.';
$string['error_string_for_algebraic_formula'] = 'Formato de respuesta no válido: el tipo de respuesta "fórmula algebraica" espera una sola cadena de caracteres entre comillas o una lista de cadenas de caracteres, cada una entre comillas.';
$string['error_subexpression_empty'] = 'Una sub-expresión está vacía.';
$string['error_sublist_indices'] = 'sublist() espera que los índices sean números enteros, encontrado \'{$a}\'.';
$string['error_sublist_lists'] = 'sublist() expects its arguments to be lists.';
$string['error_sublist_outofrange'] = 'Índice {$a} fuera de rango en la sublista().';
$string['error_sum_argument'] = 'sum() espera una lista de números.';
$string['error_syntax'] = 'Error de sintaxis.';
$string['error_ternary_incomplete'] = 'Error de sintaxis: operador ternario incompleto o \'?\' mal ubicado.';
$string['error_ternary_missmiddle'] = 'Error de sintaxis: falta la parte central del operador ternario.';
$string['error_ternary_notenough'] = 'Error de evaluación: no hay suficientes argumentos para el operador ternario.';
$string['error_tokenconversion'] = 'El valor dado \'{$a}\' tiene un tipo de datos no válido y no se puede convertir a un token.';
$string['error_undefinedconstant'] = 'Constante indefinida: \'{$a}\'';
$string['error_unexpectedend'] = 'Error de sintaxis: final inesperado de expresión después de \'{$a}\'.';
$string['error_unexpectedinput'] = 'Entrada inesperada: \'{$a}\'';
$string['error_unexpectedtoken'] = 'Token inesperado: {$a}';
$string['error_unit'] = 'Error al evaluar unidad';
$string['error_unitpenalty'] = 'La penalización debe ser un número entre 0 y 1.';
$string['error_unknownfunction'] = 'Función desconocida: \'{$a}\'';
$string['error_unknownvarname'] = 'Variable desconocida: {$a}';
$string['error_unterminatedstring'] = 'Cadena sin terminar, iniciada en la fila {$a->row}, columna {$a->column}.';
$string['error_validation_eval'] = 'Error al intentar evaluación';
$string['error_variablelhs'] = 'El lado izquierdo de la asignación debe ser una variable.';
$string['error_vars_array_index_nonnumeric'] = 'No puede usarse un valor no-numérico como índice de lista.';
$string['error_vars_array_index_out_of_range'] = 'Índice fuera de rango.';
$string['error_vars_array_size'] = 'El tamaño de la lista debe estar entre 1 y 1000.';
$string['error_vars_array_type'] = 'El elemento en la misma lista debe ser del mismo tipo, ya sea número o cadena de caracteres.';
$string['error_vars_array_unsubscriptable'] = 'La variable es no-subindizable.';
$string['error_vars_bracket_mismatch'] = 'Discrepancia de paréntesis.';
$string['error_vars_end_separator'] = 'Falta un separador de la tarea el final.';
$string['error_vars_name'] = 'La sintaxis del nombre de la variable es incorrecta.';
$string['error_vars_reserved'] = 'La functión {$a}() es reservada ay no puede usarse como variable.';
$string['error_vars_string'] = 'Error! Ya sea una cadena de caracteres sin comillas dobles de cierre o el uso de un caracter inaceptable, como por ejemplo  \'.';
$string['error_vars_undefined'] = 'La variable \'{$a}\' no ha sido definida.';
$string['error_wrapnumber'] = 'No se puede envolver un valor no numérico en un token NÚMERO.';
$string['error_wrapstring'] = 'No se puede envolver el valor dado en un token STRING.';
$string['feedback'] = 'Retroalimentación de parte general';
$string['feedback_help'] = 'La retroalimentación de esta parte se mostrará a todos los estudiantes. Puede incluir variables globales y locales, que serán remplazadas por sus valores.';
$string['functiontakesatleasttwo'] = 'La función {$a} debe tener al menos dos argumentos';
$string['functiontakesnoargs'] = 'La función {$a} no toma ningun argumento';
$string['functiontakesonearg'] = 'La función {$a} debe tener exactamente un argumento';
$string['functiontakesoneortwoargs'] = 'La función {$a} debe tener ya sea uno o dos argumentos';
$string['functiontakesthreeargs'] = 'La función {$a} debe tener exactamente tres argumentos';
$string['functiontakestwoargs'] = 'La función {$a} debe tener exactamente dos argumentos';
$string['globalvarshdr'] = 'Variables';
$string['illegalformulasyntax'] = 'Sintaxis ilegal de fórmula que comienza con \'{$a}\'';
$string['incorrectfeedback'] = 'Para cualquier respuesta incorrecta';
$string['incorrectfeedback_help'] = 'Esta retroalimentación será mostrada a estudiantes que no obtengan ninguna puntuación en esta parte. Puede incluir variables  globales y locales que serán remplazadas por sus valores';
$string['instantiate'] = 'Instanciar';
$string['mainq'] = 'Pregunta principal';
$string['modelanswer'] = 'Respuesta modelo';
$string['none'] = 'Ninguno/Nada';
$string['number'] = 'Número';
$string['number_unit'] = 'Número y unidad';
$string['numdataset'] = 'Numero de conjuntos-de-datos';
$string['numeric'] = 'Numérica';
$string['numeric_unit'] = 'Numérica y unidad';
$string['numerical_formula'] = 'Fórmula numérica';
$string['numerical_formula_unit'] = 'Fórmula numérica y unidad';
$string['otherrule'] = 'Otras reglas';
$string['otherrule_help'] = 'Aquí el autor de la pregunta puede definir reglas de conversión adicionales para otras unidades base aceptables. Vea la documentación para los usos avanzados.';
$string['partiallycorrectfeedback'] = 'Para cualquier respuesta parcialmente correcta';
$string['partiallycorrectfeedback_help'] = 'Esta retroalimentación será mostrada a estudiantes que no obtengan la puntuación máxima en esta parte. Puede incluir variables  globales y locales que serán remplazadas por sus valores';
$string['placeholder'] = 'Nombre del sustituible (placeholder)';
$string['placeholder_help'] = 'Un remplazable (placeholder) es usado para identificar la ubicación en el texto de la pregunta principal que será remplazada por el contenido de la parte. Es una cadena de caracteres alfanuméricos prefijada por \'**#**\', tal como en  #1, #2a, #2b y #A.

Si este  campo se deja vacío, la parte será añadida al final del texto principal de la pregunta.';
$string['pleaseputananswer'] = 'Por favor, escriba una respuesta en cada campo de respuesta.';
$string['pluginname'] = 'Fórmulas';
$string['pluginname_help'] = 'Para empezar a usar esta pregunta, por favor vaya a  <a href="https://dynamiccourseware.org/">dynamiccourseware.org</a>.

Para preguntas posibles, por favor vaya a <a href="https://dynamiccourseware.org/">dynamiccourseware.org</a>.

Para las opciones en el formato de edición inferior, por favor vaya a  <a href="https://dynamiccourseware.org/">dynamiccourseware.org</a>.

Para la documentación completa, por favor vaya a  <a href="https://dynamiccourseware.org/">dynamiccourseware.org</a>.';
$string['pluginname_link'] = 'question/type/formulas';
$string['pluginnameadding'] = 'Añadiendo una pregunta de Fórmulas';
$string['pluginnameediting'] = 'Editando una pregunta de Fórmulas';
$string['pluginnamesummary'] = 'Tipo de pregunta con valores aleatorios y respuestas múltiples.
Los campos de respuesta pueden colocarse en cualquier sitio, por lo que pueden crearse preguntas que involucren varias estructuras tales como vectores, polinomios y matrices.
También están integradas ajustadamente y son fáciles de usar otras características tales como revisión de unidades y preguntas con múltiples partes.';
$string['postunit'] = 'Unidad';
$string['postunit_help'] = 'Usted puede especificar aquí la unidad. Este tipo de pregunta está especialmente diseñado para El Sistema Internacional de Unidades, por lo que un espacio vacío representa el \'producto\' de diferentes \'unidad base\'  y <tt> ^ </tt> es usado para los exponentes. También, <tt> / </tt> puede usarse para exponente inverso. Cualquier permutación de la unidad base es tratada de igual forma.

Los estudiantes necesitan usar el mismo formato de ingreso de datos. Por ejemplo:

<pre class="prettyprint">1 m<br>0.1 m^2<br>20 m s^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['previewerror'] = 'No hay vista previa disponible. Revise su definición de las variables aleatorias, variables globales, variables locales de partes y respuestas. Mensaje del error original: {$a}';
$string['privacy:metadata'] = 'El plugin del tipo de pregunta Formulas no almacena ningún dato personal.';
$string['qtextpreview'] = 'Vista previa';
$string['questiontext'] = 'Texto de la pregunta';
$string['questiontext_help'] = 'Adicionalmente al texto normal de la pregunta, Usted puede usar aquí variables globales y remplazables (placeholders).

Las variables globales serán remplazadas por sus valores y los remplazables por sus partes.

Un ejemplo simple con variables <tt> A, B, C </tt> y remplazables <tt> #1, #2, #3 </tt> es:

<pre class="prettyprint">¿Cual es el resultado de  {A} + {B}?<br>{#1}<br>¿Cual es el resultado de {A} - {B}?<br>{#2}<br>¿Cual es el resultado de {C} / {B}?<br>{#3}</pre>';
$string['relerror'] = 'Error relativo';
$string['renew'] = 'Actualizar';
$string['response_right'] = 'Correcto';
$string['response_wrong'] = 'Incorrecto';
$string['response_wrong_unit'] = 'Valor correcto, unidad incorrecta';
$string['response_wrong_value'] = 'Valor incorrecto, unidad correcta';
$string['ruleid'] = 'Reglas básicas de conversión';
$string['ruleid_help'] = 'Este tipo de pregunta tiene interconstruido un sistema para conversión de unidades y tiene reglas básicas para conversión.

La regla básica son las reglas del \'Sistema Común de Unidades Internacionales\' , que covertirá unidades estándar tales como la unidad para longitud, digamos km, m, cm y mm. Esta opción no tiene efecto si no se ha usado una unidad.';
$string['settingallowdecimalcomma'] = 'Separador decimal localizado';
$string['settingallowdecimalcomma_desc'] = 'Permitir que todos los estudiantes utilicen la coma como separador decimal en las respuestas.<br>Si está activado, los números se mostrarán según la configuración regional.';
$string['settingdebouncedelay'] = 'Retraso antes de la validación sobre la marcha';
$string['settingdebouncedelay_desc'] = 'El lapso de tiempo entre la última modificación de un campo de respuesta y la validación sobre la marcha.';
$string['settinglenientimport'] = 'Verificación indulgente a la importación';
$string['settinglenientimport_desc'] = 'Al importar una pregunta, no verificar si las respuestas modelo proporcionadas recibirán la puntuación máxima. <br>Nota: Solo debe activar esta configuración temporalmente.';
$string['settings_heading_general'] = 'Preferencias generales';
$string['settings_heading_general_desc'] = '';
$string['settings_heading_width'] = 'Anchos predeterminados';
$string['settings_heading_width_desc'] = 'Ancho predeterminado de los campos de entrada para los distintos tipos de respuesta. En los campos vacíos, se utilizará la configuración del archivo de estilo del plugin. Utilice esta configuración con precaución. Si los campos son demasiado pequeños, puede resultar difícil que los estudiantes escriban su respuesta. Tenga en cuenta que el icono del signo de exclamación que se muestra para las respuestas no válidas ocupa aproximadamente 12 píxeles.';
$string['settingshownumbertooltip'] = 'Mostrar herramienta emergente "Número"';
$string['settingshownumbertooltip_desc'] = 'Si la herramienta emergente que indica "Número" debe mostrarse para ese tipo de respuesta. Podría ser conveniente no mostrarla, por ejemplo, al trabajar con niños de primaria. Esta configuración no afecta a las herramientas emergentes de otros tipos de respuesta ni a los campos combinados.';
$string['settingusepopup'] = 'Usar herramientas de ayuda (tooltips)';
$string['settingusepopup_desc'] = 'Mostrar respuesta correcta y retroalimentación en una herramienta de ayuda (tooltip)';
$string['subqoptions'] = 'Configuraciones de unidades';
$string['subqtext'] = 'Texto de la parte';
$string['subqtext_help'] = 'Aquí pueden especificarse campos con porción texto y porción respuesta. Los reemplazables que pueden usarse para especificar lugares con campos de respuesta son:

<pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</pre>

Los <tt> {_0}, {_1}, {_2} </tt> son los diferentes campos de escritura para valores y <tt> {_u} </tt> es el campo de escritura para unidad.

Todos los campos faltantes son anexados automáticamente al final del texto de la parte. Un caso especial es que si <tt> {_0}, {_u} </tt> son especificados consecutivamente sin espacio, y solamente hay un campo de respuesta y unidad, como por ejemplo <tt> {_0}{_u} </tt>, estos serán combinados en un único campo de respuesta de entrada larga para ambos respuesta y unidad.';
$string['uniquecorrectansweris'] = 'La respuesta correcta es: {$a}';
$string['unit'] = 'Unidad';
$string['unitpenalty'] = 'Deducción por unidad equivocada (0-1)*';
$string['unitpenalty_help'] = 'Esta opción especifica el puntaje con el que Usted desea penalizar al estudiante por una unidad equivocada.

Toma valores entre 0 y 1. Si fuera 1, tanto la unidad como la respuesta deben ser correctas al mismo tiempo para obtener puntaje; Esto es, la unidad y la respuesta son tratadas como una entidad. Por otra parte, si tuviera valor de 0, los estudiantes pueden obtener puntuación total con solamente la respuesta correcta, cualquier cadena de caracteres aleatorios puede ser escrita para la unidad y no tendría efecto sobre la calificación.

Por lo tanto, se recomienda usar el valor de 1 siempre que la respuesta no tenga una unidad asociada.';
$string['unsupportedformulafunction'] = 'La función {$a} no está soportada';
$string['vars1'] = 'Variables locales';
$string['vars1_help'] = 'Usted puede definir aquí variables en la misma forma en que se definen las variables globales al nivel de la pregunta. Las variables aquí definidas pueden usarse en la retroalimentación o en la respuesta de la parte y su espectro de visibilidad está limitado a la parte.';
$string['vars2'] = 'Calificando variables';
$string['vars2_help'] = 'Todas las variables locales y las respuestas del alumno pueden usarse aquí. Vea la documentación para usos avanzados.';
$string['vars2_link'] = 'https://dynamiccourseware.org/';
$string['varsdata'] = 'Conjuntos-de-datos instancializado';
$string['varsglobal'] = 'Variables globales';
$string['varsglobal_help'] = 'Pueden especificarse fórmulas para manipular las variables aleatorias instancializadas (todas las variables aleatorias están disponibles aquí). La lista completa de operadores y funciones matemáticas están dadas en la documentación.

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","one","two","three"][A];<br>distance = sqrt(a**2 + b**2);</pre>';
$string['varsglobal_link'] = 'https://dynamiccourseware.org/';
$string['varsrandom'] = 'Variables aleatorias';
$string['varsrandom_help'] = 'Se generan nuevos valores aleatorios para estas variables al inicio de cada intento. Puede hacerse al definir un conjunto de elementos entre los cuales elegir:

<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

Los elementos pueden ser números, cadenas de caracteres o listas de ellos. Al inicio de un intento, se sacará un elemento del conjunto y se asignará a la variable en la izquierda. También, para un conjunto de números, Usted puede usar la notación de rango como por ejemplo 10:100:10 (vea el ejemplo E superior.). </p>';
$string['varsrandom_link'] = 'https://dynamiccourseware.org/';
$string['varsstatistics'] = 'Estadísticas';
$string['yougotnright'] = 'Ha contestado correctamente {$a->num} parte(s) de esta pregunta.';
$string['yougotoneright'] = 'Ha respondido correctamente 1 parte de esta pregunta.';
