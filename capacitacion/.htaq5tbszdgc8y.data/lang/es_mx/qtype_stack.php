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
 * Strings for component 'qtype_stack', language 'es_mx', version '4.4'.
 *
 * @package     qtype_stack
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ATAlgEquiv_SA_not_equation'] = 'Su respuesta debería ser una ecuación, pero no la es.';
$string['ATAlgEquiv_SA_not_expression'] = 'Su respuesta debería ser una expresión, y no una ecuación, desigualdad, lista, conjunto o matriz.';
$string['ATAlgEquiv_SA_not_function'] = 'Su respuesta debería ser una función, definida usando el operador  <tt>:=</tt>, pero no es así.';
$string['ATAlgEquiv_SA_not_inequality'] = 'Su respuesta debería ser una desigualdad, pero no es así.';
$string['ATAlgEquiv_SA_not_list'] = 'Su respuesta debería ser una lista, pero no es así. Tenga en cuenta que la sintaxis para escribir una lista es incluir los valores separados por coma dentro de corchetes [paréntesis cuadrados].';
$string['ATAlgEquiv_SA_not_logic'] = 'Su respuesta debería ser una ecuación, desigualdad, o una combinación lógica de varias de éstas, pero no es así.';
$string['ATAlgEquiv_SA_not_matrix'] = 'Su respuesta debería ser una matriz, pero no es así..';
$string['ATAlgEquiv_SA_not_realset'] = 'Su respuesta debería ser un subconjunto de los números reales. Esto podría ser un conjunto de números, o una colección de intervalos.';
$string['ATAlgEquiv_SA_not_set'] = 'Su respuesta debería ser un conjunto, pero no es así. Tenga en cuenta que la sintaxis para escribir un conjunto es incluir los valores separados por coma dentro de corchetes ondulados {}.';
$string['ATAlgEquiv_SA_not_string'] = 'Su respuesta debería ser una cadena de caracteres (string) pero no es así.';
$string['ATAlgEquiv_TA_not_equation'] = 'Ha escrito una ecuación, pero una ecuación no es lo que se esperaba aquí. Usted pudo haber escrito algo parecido a  "y=2*x+1" cuando solamente necesitaba escribir "2*x+1".';
$string['ATCompSquare_SA_not_depend_var'] = '¡Su respuesta debería depender de la variable {$a->m0} pero no lo hace!';
$string['ATCompSquare_false'] = '';
$string['ATCompSquare_false_no_summands'] = 'El cuadrado completo es de la forma \\( a(\\cdots\\cdots)^2 + b\\)  donde \\(a\\) y \\(b\\)  no dependen de su variable. Al parecer más de uno de sus sumandos depende de la variable en su respuesta.';
$string['ATCompSquare_not_AlgEquiv'] = 'Su respuesta parece estar en la forma correcta, pero no es equivalente a la respuesta correcta.';
$string['ATCompSquare_true'] = '';
$string['ATDiff_error_list'] = 'La prueba de respuesta falló. Por favor póngase en contacto con su administrador de sistemas';
$string['ATDiff_int'] = '¡Parece que ha integrado en lugar de hacer lo que se le pidió!';
$string['ATEqualComAssRules_Opt_Incompatible'] = 'La opción a esta prueba de respuesta contiene reglas incompatibles. Esto es un error. Por favor póngase en contacto con su profesor.';
$string['ATEqualComAssRules_Opt_List'] = 'La opción a esta prueba de respuesta debe ser una lista no-vacía de reglas soportadas. Esto es un error. Por favor póngase en contacto con su profesor.';
$string['ATEquivFirst_SA_not_list'] = 'El primer argumento de larespuesta a la prueba  Equiv debería de ser una lista, pero la prueba falló. Por favor póngase en contacto con su profesor.';
$string['ATEquivFirst_SA_wrong_end'] = 'Su respuesta final no está en el formato correcto.';
$string['ATEquivFirst_SA_wrong_start'] = 'La primera línea de su argumento debe de ser "{$a->m0}".';
$string['ATEquivFirst_SB_not_list'] = 'El segundo argumento de la prueba de respuesta Equiv debería de ser una lista, pero la prueba falló. Por favor póngase en contacto con su profesor.';
$string['ATEquiv_SA_not_list'] = 'El primer argumento de la prueba de respuesta Equiv debería de ser una lista, pero la prueba falló. Por favor póngase en contacto con su profesor.';
$string['ATEquiv_SB_not_list'] = 'El segundo argumento de la prueba de respuesta Equiv debería de ser una lista, pero la prueba falló. Por favor póngase en contacto con su profesor.';
$string['ATFacForm_error_list'] = 'La prueba de respuesta falló. Por favor póngase en contacto con su administrador de sistemas';
$string['ATFacForm_isfactored'] = 'Su respuesta está factorizada, bien hecho.';
$string['ATFacForm_notalgequiv'] = 'Observe que su respuesta no es algebraicamente equivalente a la respuesta correcta. Usted debe haber hecho algo mal.';
$string['ATFacForm_notfactored'] = 'Su respuesta no está factorizada';
$string['ATFacForm_notpoly'] = 'El término se espera que sea un polinomio, pero no lo es.';
$string['ATInequality_backwards'] = 'Su desigualdad parece estar al revés.';
$string['ATInequality_nonstrict'] = '¡ Su desigualdad debería ser estricta, pero no es así !';
$string['ATInequality_strict'] = '¡Su desigualdad no debería ser estricta!';
$string['ATInt_EqFormalDiff'] = 'La derivada formal de su respuesta es igual a la expresión que se le pidió que integrara. Sin embargo, su respuesta difiere de la respuesta correcta en una forma significativa, no trivial; por ejemplo: una constante de integración. Por favor, pregunte a su profesor a este respecto.';
$string['ATInt_STACKERROR_OptList'] = 'La prueba de respuesta falló y no se ejecutó correctamente. Por favor avise a su profesor. Cuando la opción para ATInt es una lista, debe tener exactamente dos elementos, pero no los tiene.';
$string['ATInt_const'] = 'Usted necesita añadir una constante de integración; por lo demás, esto parecería estar correcto. Bien hecho.';
$string['ATInt_const_int'] = 'Usted necesita añadir una constante de integración. Esta debería ser una constante arbitraria, no un número.';
$string['ATInt_diff'] = '¡ Parece que Usted ha diferenciado en lugar de hacer lo que se le pidió !';
$string['ATInt_error_list'] = 'La prueba de respuesta falló. Por favor póngase en contacto con su administrador de sistemas';
$string['ATInt_generic'] = 'La derivada de su respuesta debería de ser igual a la expresión que se le pidió que integrara, que era: {$a->m0} De hecho, la derivada de su respuesta, con respecto a {$a->m1} es: {$a->m2} por lo que ¡ Usted debe de haber hecho algo mal!';
$string['ATInt_logabs'] = 'Su profesor esperaría que usted use el resultado \\(\\int\\frac{1}{x} dx = \\log(|x|)+c\\), en lugar de \\(\\int\\frac{1}{x} dx = \\log(x)+c\\).  PPor favor pregúntele a su profesor al respcto.';
$string['ATInt_logabs_inconsistent'] = 'Al parecer hay inconsistencias extrañas entre su uso de \\(\\log(...)\\) y \\(\\log(|...|)\\). . Por favor, pregúntele a su profesor al respecto.';
$string['ATInt_weirdconst'] = 'La derivada formal de su respuesta no es igual a la expresión que se le pidió integrar. Sin embargo, Usted tiene una constante de integración extraña . Por favor, pregunte a su profesor a este respecto.';
$string['ATLevenshtein_SA_not_string'] = 'El primer argumento de la prueba de respuesta Levenshtein debe ser una cadena de caracteres. La prueba falló. Por favor póngase en contacto con su profesor.';
$string['ATLevenshtein_SB_malformed'] = 'El segundo argumento de la prueba de respuesta Levenshtein debe ser en la forma [allow, deny] donde cada elemento es una lista de cadenas de caracteres. este argumento está mal formado por lo que la prueba falló. Por favor póngase en contacto con su profesor.';
$string['ATLevenshtein_match'] = 'La coincidencia más cercana fue "{$a->m0}".';
$string['ATLevenshtein_tol_not_number'] = 'La tolerancia en la prueba de respuesta Levenshtein debe ser un número, pero no lo es. La prueba falló. Por favor póngase en contacto con su profesor.';
$string['ATLevenshtein_upper_not_boolean'] = 'La opción de MAYÚSCULAS/minúsculas importan en la prueba de respuesta Levenshtein debe ser un booleano, pero no lo es. La prueba falló. Por favor póngase en contacto con su profesor.';
$string['ATList_wrongentries'] = 'Las entradas subrayadas en rojo son aquellas que están incorrectas. {$a->m0}';
$string['ATList_wronglen'] = 'Su lista debería de tener {$a->m0} elementos, pero en realidad tiene {$a->m1}.';
$string['ATLowestTerms_entries'] = 'Los siguientes términos en su respuesta no están en su mínima expresión. {$a->m0} Por favor, intentelo de nuevo.';
$string['ATLowestTerms_not_rat'] = 'Usted debe eliminar lo siguiente del denominador de su fracción: {$a->m0}';
$string['ATLowestTerms_wrong'] = 'Usted necesita cancelar fracciones dentro de su respuesta.';
$string['ATMatrix_wrongentries'] = 'Las entradas subrayadas en rojo son aquellas que están incorrectas. {$a->m0}';
$string['ATMatrix_wrongsz'] = 'Su matriz debería ser {$a->m0} por {$a->m1}, pero en realidad es {$a->m2} por {$a->m3}.';
$string['ATNumDecPlacesWrong_OptNotInt'] = 'Para ATNumDecPlacesWrong la opción para prueba debe ser un número entero positivo, pero, de hecho "{$a->m0}" fue recibido.';
$string['ATNumDecPlaces_Float'] = 'Su respuesta debería ser un número de punto flotante, pero no lo es.';
$string['ATNumDecPlaces_NoDP'] = 'Su respuesta debe ser un número decimal, incluyendo un punto decimal.';
$string['ATNumDecPlaces_OptNotInt'] = 'Para ATNumDecPlaces la opción de prueba debe ser un número entero positivo, pero de hecho  "{$a->m0}" fue recibido.';
$string['ATNumDecPlaces_Wrong_DPs'] = 'Su respuesta ha sido dada al número equivocado de decimales.';
$string['ATNumSigFigs_Inaccurate'] = 'La precisión de su respuesta no es correcta. Puede ser que Usted no haya redondeado correctamente, o puede que haya redondeado una respuesta intermedia que propaga un error.';
$string['ATNumSigFigs_NotDecimal'] = '¡ Su respuesta debería ser un número decimal, pero no es así !';
$string['ATNumSigFigs_WrongDigits'] = 'Su respuesta contiene un número equivocado de dígitos significativos.';
$string['ATNumSigFigs_WrongSign'] = 'Su respuesta tiene el signo algebraico equivocado.';
$string['ATNumSigFigs_error_list'] = 'La prueba de respuesta falló. Por favor póngase en contacto con su administrador de sistemas';
$string['ATNum_OutofRange'] = 'Una expresión numérica está fuera del rango soportado. Por favor, póngase en contacto con su profesor.';
$string['ATNumerical_FAILED'] = 'Su respuesta debería ser un número de punto flotante, o una lista o conjunto de números, y no es así.';
$string['ATNumerical_SA_not_list'] = 'Su respuesta debería de ser una lista, pero no es así. Tenga en cuenta que la sintaxis para escribir una lista es incluir los valores separados por coma dentro de corchetes [paréntesis cuadrados].';
$string['ATNumerical_SA_not_number'] = 'Su respuesta debería de ser un número de punto flotante, pero no es así.';
$string['ATNumerical_SA_not_set'] = 'Su respuesta debería de ser un conjunto, pero no es así. Tenga en cuenta que la sintaxis para escribir un conjunto es incluir los valores separados por coma dentro de paréntesis ondulados {}.';
$string['ATNumerical_SB_not_number'] = 'El valor proporcionado por la respuesta del profesor debería ser un número de punto flotante, pero no lo es. Esto es un error interno con la prueba. Por favor póngase en contacto con su profesor.';
$string['ATNumerical_STACKERROR_tol'] = 'La tolerancia numérica para ATNumerical debería de ser un número de punto flotante, pero no lo es. Este es un error interno con la prueba. Por favor, dígale esto a su profesor.';
$string['ATPartFrac_denom_ret'] = 'Si su respuesta está escrita como una fracción única, entonces el denominador sería {$a->m0}. De hecho, debería ser {$a->m1}.';
$string['ATPartFrac_diff_variables'] = 'Las variables en su respuesta son diferentes de las de la pregunta, por favor revíselas.';
$string['ATPartFrac_error_list'] = 'La prueba de respuesta falló. Por favor póngase en contacto con su administrador de sistemas';
$string['ATPartFrac_ret_expression'] = 'Su respuesta como una fracción única es {$a->m0}';
$string['ATPartFrac_true'] = '';
$string['ATSRegExp_SA_not_string'] = 'El primer argumento de la prueba de respuesta SRegExp debe ser una cadena de texto. La prueba falló. Por favor póngase en contacto con su profesor.';
$string['ATSRegExp_SB_not_string'] = 'El segundo argumento de la prueba de respuesta SRegExp debe ser una cadena de texto. La prueba falló. Por favor póngase en contacto con su profesor.';
$string['ATSet_wrongentries'] = 'Las siguientes entradas son incorrectas, aunque estas pueden aparecer en una forma simplificada respecto a las que usted originalmente ingresó. {$a->m0}';
$string['ATSet_wrongsz'] = 'Su conjunto debería de tener {$a->m0} diferentes elementos, pero en realidad tiene {$a->m1}.';
$string['ATSets_SA_not_set'] = 'Su respuesta debería de ser un conjunto, pero no es así. Tenga en cuenta que la sintaxis para introducir un conjunto es rodear los valores separados por comas con corchetes {}.';
$string['ATSets_SB_not_set'] = 'La prueba de respuesta de Conjuntos "Sets" espera que su segundo argumento sea un conjunto. Este es un error. Por favor póngase en contacto con su profesor.';
$string['ATSets_duplicates'] = '¡Al parecer su conjunto contiene entradas duplicadas!';
$string['ATSets_missingentries'] = 'Los siguientes están faltando en su conjunto. {$a->m0}';
$string['ATSets_wrongentries'] = 'Estas entradas no deberían de ser elementos de su conjunto. {$a->m0}';
$string['ATSingleFrac_div'] = 'Su respuesta contiene fracciones dentro de fracciones. Usted necesita resolver estas y escribir su respuesta como una fracción única.';
$string['ATSingleFrac_error_list'] = 'La prueba de respuesta falló. Por favor póngase en contacto con su administrador de sistemas';
$string['ATSingleFrac_part'] = 'Su respuesta necesita ser una fracción única en la forma \\( {a}\\sobre{b} \\).';
$string['ATSingleFrac_ret_exp'] = 'Su respuesta no es algebraicamente equivalente a la respuesta correcta. Usted debe haber hecho algo mal.';
$string['ATSingleFrac_true'] = '';
$string['ATSingleFrac_var'] = 'Las variables en su respuesta son diferentes a las de la pregunta, por favor revíselas';
$string['ATString_SA_not_string'] = 'Su respuesta debería ser una cadena de caracteres, pero no lo es.';
$string['ATString_SB_not_string'] = 'La respuesta del profesor debería ser una cadena de caracteres, pero no lo es.';
$string['ATSubstEquiv_Opt_List'] = 'La opción para esta prueba de respuesta debe ser una lista. Esto es un error. Por favor póngase en contacto con su profesor.';
$string['ATSysEquiv_SA_extra_variables'] = '¡ Su respuesta incluye demasiadas variables !';
$string['ATSysEquiv_SA_missing_variables'] = '¡ A su respuesta le faltan una o más variables !';
$string['ATSysEquiv_SA_not_eq_list'] = '¡ Su respuesta debería ser una lista de ecuaciones, pero no es así !';
$string['ATSysEquiv_SA_not_list'] = '¡ Su respuesta debería ser una lista, pero no es así !';
$string['ATSysEquiv_SA_not_poly_eq_list'] = '¡ Una o más de sus ecuaciones no es un polinomio !';
$string['ATSysEquiv_SA_system_overdetermined'] = 'Las entradas inferiores subrayadas en rojo son aquellas que están incorrectas. {$a->m0}';
$string['ATSysEquiv_SA_system_underdetermined'] = 'Las ecuaciones en su sistema parecen estar correctas, pero usted necesita además otras.';
$string['ATSysEquiv_SA_wrong_variables'] = '¡Su respuesta usa las variables equivocadas!';
$string['ATSysEquiv_SB_not_eq_list'] = 'La respuesta del profesor no es una lista de ecuaciones, aunque si debería de serlo.';
$string['ATSysEquiv_SB_not_list'] = 'La respuesta del profesor no es una lista, Por favor póngase en contacto con su profesor.';
$string['ATSysEquiv_SB_not_poly_eq_list'] = 'La respuesta del profesor debería ser una lista de ecuaciones polinomiales, pero no es así. Por favor póngase en contacto con su profesor.';
$string['ATUnits_SA_bad_units'] = 'Su respuesta debe de tener unidades, y Usted debe de usar multiplicación para anexarle las unidades a un valor; por ejemplo <code>3.2*m/s</code>.';
$string['ATUnits_SA_errorbounds_invalid'] = 'Su respuesta tiene límites de error. En este caso no indique límites de error; en su lugar use solamente cantidad y unidades.';
$string['ATUnits_SA_excess_units'] = 'Su respuesta ha usado unidades (o variables), pero no debería de ser así.';
$string['ATUnits_SA_no_units'] = 'Su respuesta debe tener unidades.';
$string['ATUnits_SA_not_expression'] = 'Su respuesta necesita ser un número junto con unidades. No use conjuntos, listas, ecuaciones o matrices.';
$string['ATUnits_SA_only_units'] = 'Su respuesta necesita ser un número junto con unidades. Su respuesta únicamente tiene unidades.';
$string['ATUnits_SO_wrong_units'] = 'Las unidades especificadas para la tolerancia numérica deben coincidir con las unidades usadas para la respuesta del profesor. Este es un error interno con la prueba. Por favor pregúntele a su profesor acerca de esto.';
$string['ATUnits_compatible_units'] = 'Sus unidades son diferentes de las usadas por el profesor, pero son compatibles con ellas. Los valores numéricos están siendo convertidos a unidades en base al Sistema Internacional de Unidades para comparación.';
$string['ATUnits_correct_numerical'] = 'Por favor revise cuidadosamente sus unidades.';
$string['ATUnits_incompatible_units'] = 'Sus unidades son incompatibles con las unidades usadas por el profesor.';
$string['ATValidator_STACKERROR_ev'] = 'El validador arrojó un error durante la evaluación. Esto es un error en la prueba; por favor póngase en contacto con su profesor.';
$string['ATValidator_not_fun'] = 'El validador no pudo evaluar. ¿Proporcionó el nombre correcto a la función de validación? Esto es un error en la prueba; por favor póngase en contacto con su profesor.';
$string['ATValidator_res_not_string'] = 'El resultado de su validador debe ser una cadena, pero no lo es. Esto es un error en la prueba; por favor póngase en contacto con su profesor.';
$string['AT_EmptySA'] = 'Se intentó ejecutar una prueba de respuesta con una respuesta del estudiante vacía, probablemente sea un problema de validación CAS al escribir la pregunta.';
$string['AT_EmptyTA'] = 'Se intentó ejecutar una prueba de respuesta con una respuesta del profesor vacía, probablemente sea un problema de validación CAS al escribir la pregunta.';
$string['AT_InvalidOptions'] = 'El campo opción es inválido. {$a->errors}';
$string['AT_MissingOptions'] = 'Opción faltante al ejecutar la prueba.';
$string['AT_raw_sans_needed'] = 'Algunas pruebas de respuesta dependen de la entrada cruda del estudiante, por lo que el campo "SAns" del nodo debería ser el nombre de una entrada de pregunta. Por favor compruebe el siguiente (prt.node) que parece ser un valor calculado : {$a->prt}';
$string['Bad_assignment'] = 'Al enlistar los valores de una variable, Usted debería de hacerlo de  la siguiente manera: {$a->m0}. Por favor modifique su entrada.';
$string['CommaError'] = 'Su respuesta contiene comas que no son parte de una lista, conjunto o matriz. <ul><li>Si Usted quería ingresar una lista, por favor use <tt>{...}</tt>,</li><li>Si Usted quería ingresar un conjunto, por favor use <tt>{...}</tt>.</li></ul>';
$string['Equiv_Illegal_list'] = 'Las listas no están permitidas al razonar por equivalencia.';
$string['Equiv_Illegal_matrix'] = 'Las matrices no están permitidas al razonar por equivalencia.';
$string['Equiv_Illegal_set'] = 'Los conjuntos no están permitidas al razonar por equivalencia.';
$string['FacForm_UnPick_morework'] = 'Usted todavía podría trabajar más el término {$a->m0}.';
$string['Illegal_control_flow'] = 'Su respuesta contiene oraciones de control-del-flujo como el condicional <code>if</code>-o el bucle <code>do</code>-, los cuales están prohibidos aquí; Usted probablemente debería de proporcionar el resultado de estas oraciones como la respuesta.';
$string['Illegal_extraevaluation'] = 'El operador de evaluación adicional de Maxima <code>\'\'</code> no es compatible con STACK.';
$string['Illegal_floats'] = 'Su respuesta contiene números de punto flotante, lo que no está permitido aquí. Usted necesita escribir los números como fracciones. Por ejemplo, Usted debería de escribir 1/3 en lugar de 0.3333, lo que, después de todo, es solamente una aproximación a un tercio.';
$string['Illegal_groupping'] = 'Su respuesta contiene paréntesis usados para agrupar operaciones; estas están  prohibidas aquí. Usted probablemente debería manipular la expresión para eliminarlas.';
$string['Illegal_groups'] = 'Su respuesta contiene grupos de evaluación "(a,b,c)"  los cuales no están permitidos aquí.';
$string['Illegal_identifiers_in_units'] = 'La entrada contiene un nombre de variable, cuando so';
$string['Illegal_illegal_operation_in_units'] = 'El operadorr <code>{$a}</code> no está permitido en esta entrada.';
$string['Illegal_illegal_power_of_ten_in_units'] = 'El valor no puede contener potencias de diez que no sean enteros.';
$string['Illegal_input_form_units'] = 'Esta entrada espera un valor numérico seguido por, o multiplicado por, una expresión definiendo una unidad, como por ejemplo. <code>1.23*W/m^2</code>. Tenga en cuenta que la unidad aquí requerida podría ser algo más.';
$string['Illegal_lists'] = 'Su respuesta contiene listas "{a,b,c}" las cuales no están permitidas aquí.';
$string['Illegal_sets'] = 'Su respuesta contiene conjuntos "{a,b,c}" los cuales no están permitidos aquí.';
$string['Illegal_singleton_floats'] = 'Esta entrada no acepta números decimales en la forma dada. Esta entrada requiere un valor numérico presentado en alguna de las formas siguientes: <code>{$a->forms}</code>';
$string['Illegal_singleton_integer'] = 'Esta entrada no acepta valores enteros. Esta entrada requiere un valor numérico presentado en alguna de las formas siguientes: <code>{$a->forms}</code>';
$string['Illegal_singleton_power'] = 'Esta entrada requiere de un valor numérico presentado en una de las formas siguientes: <code>{$a->forms}</code>';
$string['Illegal_strings'] = 'Su respuesta contiene "cadenas de caracteres alfanuméricos (strings)" las cuales no están permitidas aquí.';
$string['Illegal_x10'] = 'Su respuesta al parecer usa el caracter "x" como un signo de multiplicación. Por favor use <code>*</code> para multiplicación.';
$string['Interval_backwards'] = 'Al construir un intervalo real los puntos terminales deben estar ordenados. {$a->m0} debería ser {$a->m1}.';
$string['Interval_illegal_entries'] = 'Lo siguiente no debería aparecer durante la construcción de conjuntos reales: {$a->m0}';
$string['Interval_notinterval'] = 'Se esperaba un intervalo, pero en su lugar tenemos {$a->m0}.';
$string['Interval_wrongnumargs'] = 'La construcción del intervalo debe tener exactamente dos argumentos, por lo que esto debe ser un error: {$a->m0}.';
$string['Lowest_Terms'] = 'Su respuesta contiene fracciones que no están escritas en su mínima expresión. Por favor cancele factores e inténtelo de nuevo.';
$string['Maxima_Args'] = 'args: el argumento debe ser una expresión no-atómica.';
$string['Maxima_DivisionZero'] = 'División por cero';
$string['Subst'] = 'Su respuesta sería correcta si Usted usara la siguiente sustitución de variables. {$a->m0}';
$string['TEST_FAILED'] = 'La prueba de respuesta no se ejecutó correctamente: Por favor alerte a su profesor. {$a->errors}';
$string['TEST_FAILED_Q'] = 'La prueba de respuesta no pudo ejecutarse correctamente: por favor, alerte a su profesor.';
$string['ValidateVarsMissing'] = 'Faltan estas variables: {$a->m0}.';
$string['ValidateVarsSpurious'] = 'Estas variables no son necesarias: {$a->m0}.';
$string['Variable_function'] = 'Lo que sigue aparece en su expresión tanto como una variable y como una función: {$a->m0}. Por favor, clarifique su ingreso. Ya sea que inserte símbolos de <code>*</code> para quitar funciones, o haga todas las ocurrencias funciones.';
$string['addanothernode'] = 'Añadir otro nodo';
$string['addanothertestcase'] = 'Añadir otro caso de prueba...';
$string['addatestcase'] = 'Añadir un caso de prueba...';
$string['addingatestcase'] = 'Añadir un caso de prueba a la pregunta {$a}';
$string['alg_indices_fact'] = 'Las siguientes leyes gobiernan la manipulación de exponentes:
\\[a^ma^n = a^{m+n}\\]
\\[\\frac{a^m}{a^n} = a^{m-n}\\]
\\[(a^m)^n = a^{mn}\\]
\\[a^0 = 1\\]
\\[a^{-m} = \\frac{1}{a^m}\\]
\\[a^{\\frac{1}{n}} = \\sqrt[n]{a}\\]
\\[a^{\\frac{m}{n}} = \\left(\\sqrt[n]{a}\\right)^m\\]';
$string['alg_indices_name'] = 'Las Leyes de los Exponentes';
$string['alg_inequalities_fact'] = '\\[a>b \\hbox{ significa que } a \\hbox{ es mayor que } b.\\]
\\[ a < b \\hbox{ significa que } a \\hbox{ es menor que } b.\\]
\\[a\\geq b \\hbox{ significa que} a \\hbox{ es mayor o igual que } b.\\]
\\[a\\leq b \\hbox{ significa que} a \\hbox{ es menor o igual que } b.\\]';
$string['alg_inequalities_name'] = 'Desigualdades';
$string['alg_logarithms_fact'] = 'Para cualquier base \\(c>0\\) con \\(c \\neq 1\\):
\\[\\log_c(a) = b \\mbox{, significa que } a = c^b\\]
\\[\\log_c(a) + \\log_c(b) = \\log_c(ab)\\]
\\[\\log_c(a) - \\log_c(b) = \\log_c\\left(\\frac{a}{c}\\right)\\]
\\[n\\log_c(a) = \\log_c\\left(a^n\\right)\\]
\\[\\log_c(1) = 0\\]
\\[\\log_c(b) = 1\\]
La fórmula para un cambio de base es:
\\[\\log_a(x) = \\frac{\\log_b(x)}{\\log_b(a)}\\]
Los logaritmos en base  \\(e\\), escritos como \\(\\log_e\\)  o alternativamente \\(\\ln\\)  se llaman logaritmos naturales o neperianos. La letra  \\(e\\)  (número de Euler) representa una constante  con un valor aproximado de  \\(2.718\\).';
$string['alg_logarithms_name'] = 'Las Leyes de Logaritmos';
$string['alg_partial_fractions_fact'] = 'Las fracciones propias ocurren con  \\[{\\frac{P(x)}{Q(x)}}\\]
cuando \\(P\\) y  \\(Q\\) son polinomios y el grado de \\(P\\) es menor que el grado de \\(Q\\). Con este caso,  procedemos como sigue:
escribir \\(Q(x)\\) en forma factorizada,

* un <em>factor lineal</em> \\(ax+b\\) en el denominador produce una fracción parcial de la forma \\[{\\frac{A}{ax+b}}.\\]
* un <em>factor lineal repetido</em> \\((ax+b)^2\\) en el denominador
produce fracciones parciales de la forma  \\[{A\\over ax+b}+{B\\over (ax+b)^2}.\\]
* un <em>factor cuadrático</em> \\(ax^2+bx+c\\)
en el denominador produce una fracción parcial de la forma \\[{Ax+B\\over ax^2+bx+c}\\]
* Fracciones impropias}</em> requieren un término adicional que es un polinomio de grado \\(n-d\\), donde \\(n\\) es
el grado del numerador (p. ej. \\(P(x)\\)) y \\(d\\) es el grado del denominador (p. ej.  \\(Q(x)\\)).';
$string['alg_partial_fractions_name'] = 'Fracciones Parciales';
$string['alg_quadratic_formula_fact'] = 'Si tenemos una ecuación cuadrática de la forma:
\\[ax^2 + bx + c = 0,\\]
entonces las soluciónes para esa ecuación dadas por la fórmula cuadrática son:
\\[x = \\frac{-b \\pm \\sqrt{b^2 - 4ac}}{2a}.\\]';
$string['alg_quadratic_formula_name'] = 'La Fórmula Cuadrática';
$string['all'] = 'Todos/as';
$string['allnodefeedbackmustusethesameformat'] = 'Toda la retroalimentación para todos los nodos en un Árbol de Respuesta Potencial deben usar el mismo formato de texto.';
$string['allowwords'] = 'Palabras permitidas';
$string['allowwords_help'] = 'Por defecto, los nombres de funciones o variables de más de dos caracteres de longitud no están permitidas. Esta es una lista de nombres de funciones o variables, separada por comas, que están permitidos en una respuesta del estudiante.';
$string['alreadydeployed'] = 'Una variante que coincide con la nota de esta Pregunta ya está desplegada.';
$string['alttextmissing'] = 'A una o más imágenes al parecer les falta o tienen vacía una marca (tag) \'alt\' en "{$a->field}" ({$a->num}).';
$string['ansnotemismatch'] = '[Discrepancia en NotadeRespuesta]';
$string['answernote'] = 'Nota de Respuesta';
$string['answernote_err'] = 'Las notas de respuesta no pueden contener el caracter |. Este caracter es insertado por STACK y después es usado para dividir automáticamente las notas de respuesta.';
$string['answernote_err2'] = 'Las notas de respuesta no pueden contener caracteres ; ni caracteres : tampoco.  Estos caracteres son usados para dividir cadenas de texto de resumen de intento en las herramientas de reporte fuera de línea.';
$string['answernote_help'] = 'Esta es una marca (tag) o etiqueta que es clave para propósitos de reporte. Está diseñada para grabar la ruta única a través del árbol, y la resultante de cada prueba de respuesta. Esta es generada automáticamente, pero puede cambiarse por algo que tenga sentido.';
$string['answernotedefaultfalse'] = '{$a->prtname}-{$a->nodename}-F';
$string['answernotedefaulttrue'] = '{$a->prtname}-{$a->nodename}-T';
$string['answernoterequired'] = 'La nota de respuesta no debe estar vacía';
$string['answernoteunique'] = 'Detectadas notas de respuesta duplicadas en este árbol de respuesta potencial.';
$string['answertest'] = 'Prueba de respuesta';
$string['answertest_ab'] = 'Prueba';
$string['answertest_help'] = 'Una prueba de respuesta se usa para comparar dos expresiones, para establecer si satisfacen algunos criterios matemáticos.';
$string['api_choose_file'] = 'Por favor seleccione un archivo de preguntas';
$string['api_choose_folder'] = 'Elija una carpeta STACK';
$string['api_choose_q'] = 'Choose a STACK sample file';
$string['api_correct'] = 'Respuestas correctas';
$string['api_display'] = 'Mostrar Pregunta';
$string['api_errors'] = 'Errores';
$string['api_failures'] = 'fallas';
$string['api_general_errors'] = 'Errores generales, como por ejemplo XML roto';
$string['api_local_file'] = 'O seleccione un archivo suyo';
$string['api_marks_sub'] = 'Puntos para este envío';
$string['api_no_deployed_variants'] = 'El XML de la pregunta no contiene variantes implementadas';
$string['api_out_of'] = 'de entre';
$string['api_passes'] = 'pases';
$string['api_q_select'] = 'Seleccionar una pregunta';
$string['api_q_xml'] = 'XML de Pregunta';
$string['api_read_only'] = 'Solo lectura';
$string['api_response'] = 'Resumen de respuesta';
$string['api_seed_not_in_variants'] = 'La semilla especificada no pertenece a ninguna variante implementada';
$string['api_submit'] = 'Enviar Respuestas';
$string['api_valid_all_parts'] = 'Por favor introduzca respuestas válidas para todas las partes de la pregunta.';
$string['api_which_typed'] = 'que se puede escribir de la siguiente manera';
$string['assumepositive'] = 'Asumir positivo';
$string['assumepositive_help'] = 'Esta opción configura el valor de la variable assume_pos de Maxima.';
$string['assumereal'] = 'Asumir real';
$string['assumereal_help'] = 'Esta opción configura la variable assume_real';
$string['autosimplify'] = 'Auto-simplificar';
$string['autosimplify_help'] = 'Configura la variable "simp" dentro de Maxima para esta pregunta. Por ejemplo, variables de pregunta, texto de pregunta, etc. El conjunto de valores en cada árbol de respuesta potencial anulará esto para cualesquieras expresiones subsecuentes definidas dentro del árbol.';
$string['autosimplifyprt'] = 'Auto-simplificar';
$string['autosimplifyprt_help'] = 'Configura la variable "simp" dentro de Maxima para las variables de retroalimentación definidas en este árbol de respuesta potencial. Tenga en cuenta que el hecho de que las expresiones dentro de las notas del Árbol de Respuesta Potencial sean simplificadas antes de usarse depende de la prueba de respuesta. Por ejemplo, argumento para AlgEquiv son simplificados, mientras que los argumentos para EqualComAss no lo son.';
$string['autotestcase'] = 'Caso de prueba asumiendo que la entrada del profesor obtenga puntaje completo.';
$string['basicquestionreport'] = '<i class="fa fa-bar-chart"></i> Analizar respuestas';
$string['basicquestionreport_help'] = 'Genera un reporte muy básico sobre intentos de esta pregunta en el servidor. Es útil para decidir cual prueba PRT puede ser añadida para mejorar la retroalimentación a la luz de lo que el estudiante de hecho hace. (La mayoría de las preguntas son usadas solamente en un lugar)';
$string['basicreportinputsummary'] = 'Entradas crudas, sin importar de cual variante fue usada.';
$string['basicreportnotes'] = 'Frecuencia de notas de respuesta, para cada PRT, sin importar cual variante fue usada.';
$string['basicreportnotessplit'] = 'Frecuencia de notas de respuesta, para cada PRT, dividida por |, sin importar cual variante fue usada.';
$string['basicreportraw'] = 'Datos crudos';
$string['basicreportvariants'] = 'Datos crudos y notas de respuesta PRT por variante';
$string['booleangotunrecognisedvalue'] = 'Entrada inválida';
$string['boxsize'] = 'Tamaño de la caja de entrada';
$string['boxsize_help'] = 'Ancho del campo_de_forma HTML';
$string['branchfeedback'] = 'Retroalimentación de la rama del nodo';
$string['branchfeedback_help'] = 'Esto es CASText (texto CAS) que puede depender de cualquiera de las variables de la pregunta, elementos de entrada o las variables de retroalimentación. Esto es evaluado y mostrado al estudiante si pasan por esta rama.';
$string['bulktestallincontext'] = 'Probar todo';
$string['bulktestcontinuefromhere'] = 'Correr nuevamente, comenzando desde aquí';
$string['bulktestindexintro'] = 'Al hacer clic sobre cualquiera de los enlaces correrá todas las pruebas de preguntas en todas las preguntas STACK en ese contexto.';
$string['bulktestindexintro_desc'] = 'La <a href="{$a->link}">secuencia de comandos de prueba masiva</a> le permite ejecutar fácilmente todas las pruebas de preguntas STACK en un contexto determinado. Esto no sólo pone a prueba las preguntas. También es una buena forma de volver a rellenar el caché CAS después de haberlo borrado.';
$string['bulktestindextitle'] = 'Correr las pruebas de preguntas en lote';
$string['bulktestnodeployedseeds'] = 'Esta pregunta si tiene variantes aleatorias, pero no tiene semillas desplegadas.';
$string['bulktestnogeneralfeedback'] = 'Esta pregunta no tiene ninguna retroalimentación general.';
$string['bulktestnotests'] = 'Esta pregunta no tiene ninguna prueba.';
$string['bulktestrun'] = 'Correr todas las pruebas de pregunta para todas las preguntas en el sistema (lento, solamente administradores)';
$string['bulktesttitle'] = 'Corriendo todas las pruebas de pregunta en {$a}';
$string['cachedef_librarycache'] = 'Representaciones y estructura de archivos de la biblioteca de preguntas STACK';
$string['cachedef_parsercache'] = 'Expresiones Maxima analizadas por STACK';
$string['calc_chain_rule_fact'] = 'La regla siguiente le permite a uno encontrar la derivada de una composición de dos funciones.
Asuma que tenemos una función \\(f(g(x))\\), then defining \\(u=g(x)\\),  la derivada con respecto a \\(x\\) está dada por:
\\[\\frac{df(g(x))}{dx} = \\frac{dg(x)}{dx}\\cdot\\frac{df(u)}{du}.\\]
Alternativamente, nosotros podemos escribir,:
\\[\\frac{df(x)}{dx} = f\'(g(x))\\cdot g\'(x).\\]';
$string['calc_chain_rule_name'] = 'La Regla de Cadena';
$string['calc_diff_linearity_rule_fact'] = '\\[{{\\rm d}\\,\\sobre {\\rm d}x}\\big(af(x)+bg(x)\\big)=a{{\\rm d}f(x)\\sobre {\\rm d}x}+b{{\\rm d}g(x)\\sobre {\\rm d}x}\\quad a,b {\\rm\\ constante.}\\]';
$string['calc_diff_linearity_rule_name'] = 'La regla de Linealidad para la Diferenciación';
$string['calc_diff_standard_derivatives_fact'] = 'La siguiente tabla muestra las derivadas de algunas funciones estándar. Es útil aprenderse estas derivadas estándar, porque son frecuentemente usadas en cálculo.

|\\(f(x)\\)|\\(f\'(x)\\)|
|--- |--- |
|\\(k\\), constant|\\(0\\)|
|\\(x^n\\), any constant \\(n\\)|\\(nx^{n-1}\\)|
|\\(e^x\\)|\\(e^x\\)|
|\\(\\ln(x)=\\log_{\\rm e}(x)\\)|\\(\\frac{1}{x}\\)|
|\\(\\sin(x)\\)|\\(\\cos(x)\\)|
|\\(\\cos(x)\\)|\\(-\\sin(x)\\)|
|\\(\\tan(x) = \\frac{\\sin(x)}{\\cos(x)}\\)|\\(\\sec^2(x)\\)|
|\\(cosec(x)=\\frac{1}{\\sin(x)}\\)|\\(-cosec(x)\\cot(x)\\)|
|\\(\\sec(x)=\\frac{1}{\\cos(x)}\\)|\\(\\sec(x)\\tan(x)\\)|
|\\(\\cot(x)=\\frac{\\cos(x)}{\\sin(x)}\\)|\\(-cosec^2(x)\\)|
|\\(\\cosh(x)\\)|\\(\\sinh(x)\\)|
|\\(\\sinh(x)\\)|\\(\\cosh(x)\\)|
|\\(\\tanh(x)\\)|\\(sech^2(x)\\)|
|\\(sech(x)\\)|\\(-sech(x)\\tanh(x)\\)|
|\\(cosech(x)\\)|\\(-cosech(x)\\coth(x)\\)|
|\\(coth(x)\\)|\\(-cosech^2(x)\\)|

 \\[ \\frac{d}{dx}\\left(\\sin^{-1}(x)\\right) =  \\frac{1}{\\sqrt{1-x^2}}\\]
 \\[ \\frac{d}{dx}\\left(\\cos^{-1}(x)\\right) =  \\frac{-1}{\\sqrt{1-x^2}}\\]
 \\[ \\frac{d}{dx}\\left(\\tan^{-1}(x)\\right) =  \\frac{1}{1+x^2}\\]
 \\[ \\frac{d}{dx}\\left(\\cosh^{-1}(x)\\right) =  \\frac{1}{\\sqrt{x^2-1}}\\]
 \\[ \\frac{d}{dx}\\left(\\sinh^{-1}(x)\\right) =  \\frac{1}{\\sqrt{x^2+1}}\\]
 \\[ \\frac{d}{dx}\\left(\\tanh^{-1}(x)\\right) =  \\frac{1}{1-x^2}\\]';
$string['calc_diff_standard_derivatives_name'] = 'Derivadas Estándar';
$string['calc_int_linearity_rule_fact'] = '\\[\\int \\left(af(x)+bg(x)\\right){\\rm d}x = a\\int\\!\\!f(x)\\,{\\rm d}x
\\,+\\,b\\int \\!\\!g(x)\\,{\\rm d}x, \\quad (a,b \\, \\, {\\rm constant.})
\\]';
$string['calc_int_linearity_rule_name'] = 'La Regla de Linealidad para Integración';
$string['calc_int_methods_parts_fact'] = '\\[
\\int_a^b u{{\\rm d}v\\over {\\rm d}x}{\\rm d}x=\\left[uv\\right]_a^b-
\\int_a^b{{\\rm d}u\\over {\\rm d}x}v\\,{\\rm d}x\\]
or alternatively: \\[\\int_a^bf(x)g(x)\\,{\\rm d}x=\\left[f(x)\\,\\int
g(x){\\rm d}x\\right]_a^b -\\int_a^b{{\\rm d}f\\over {\\rm
d}x}\\left\\{\\int g(x){\\rm d}x\\right\\}{\\rm d}x.\\]';
$string['calc_int_methods_parts_indefinite_fact'] = '\\[
\\int u{{\\rm d}v\\over {\\rm d}x}{\\rm d}x=uv- \\int{{\\rm d}u\\over {\\rm d}x}v\\,{\\rm d}x\\]
o de forma alterna: \\[\\int f(x)g(x)\\,{\\rm d}x=f(x)\\,\\int
g(x){\\rm d}x -\\int {{\\rm d}f\\over {\\rm d}x}\\left\\{\\int g(x){\\rm d}x\\right\\}{\\rm d}x.\\]';
$string['calc_int_methods_parts_indefinite_name'] = 'Integración por Partes';
$string['calc_int_methods_parts_name'] = 'Integración por Partes';
$string['calc_int_methods_substitution_fact'] = '\\[
\\int f(u){{\\rm d}u\\over {\\rm d}x}{\\rm d}x=\\int f(u){\\rm d}u
\\quad\\hbox{and}\\quad \\int_a^bf(u){{\\rm d}u\\over {\\rm d}x}\\,{\\rm
d}x = \\int_{u(a)}^{u(b)}f(u){\\rm d}u.
\\]';
$string['calc_int_methods_substitution_name'] = 'Integración por Sustitución';
$string['calc_int_standard_integrals_fact'] = '\\[\\int k\\ dx = kx +c, \\mbox{ donde k es constante.}\\]
\\[\\int x^n\\ dx  = \\frac{x^{n+1}}{n+1}+c, \\quad (n\\ne -1)\\]
\\[\\int x^{-1}\\ dx = \\int {\\frac{1}{x}}\\ dx = \\ln(|x|)+c = \\ln(k|x|) = \\left\\{\\matrix{\\ln(x)+c & x>0\\cr
\\ln(-x)+c & x<0\\cr}\\right.\\]


|\\(f(x)\\)|\\(\\int f(x)\\ dx\\)||
|--- |--- |--- |
|\\(e^x\\)|\\(e^x+c\\)||
|\\(\\cos(x)\\)|\\(\\sin(x)+c\\)||
|\\(\\sin(x)\\)|\\(-\\cos(x)+c\\)||
|\\(\\tan(x)\\)|\\(\\ln(\\sec(x))+c\\)|\\(-\\frac{\\pi}{2} < x < \\frac{\\pi}{2}\\)|
|\\(\\sec x\\)|\\(\\ln (\\sec(x)+\\tan(x))+c\\)|\\( -{\\pi\\over 2}< x < {\\frac{\\pi}{2}}\\)|
|\\(\\mbox{cosec}(x)\\)|\\(\\ln (\\mbox{cose}c(x)-\\cot(x))+c\\quad\\)   |\\(0 < x < \\pi\\)|
|cot\\(\\,x\\)|\\(\\ln(\\sin(x))+c\\)|\\(0< x< \\pi\\)|
|\\(\\cosh(x)\\)|\\(\\sinh(x)+c\\)||
|\\(\\sinh(x)\\)|\\(\\cosh(x) + c\\)||
|\\(\\tanh(x)\\)|\\(\\ln(\\cosh(x))+c\\)||
|\\(\\mbox{coth}(x)\\)|\\(\\ln(\\sinh(x))+c \\)|\\(x>0\\)|
|\\({1\\over x^2+a^2}\\)|\\({1\\over a}\\tan^{-1}{x\\over a}+c\\)|\\(a>0\\)|
|\\({1\\over x^2-a^2}\\)|\\({1\\over 2a}\\ln{x-a\\over x+a}+c\\)|\\(|x|>a>0\\)|
|\\({1\\over a^2-x^2}\\)|\\({1\\over 2a}\\ln{a+x\\over a-x}+c\\)|\\(|x|\\)|
|\\(\\frac{1}{\\sqrt{x^2+a^2}}\\)|\\(\\sinh^{-1}\\left(\\frac{x}{a}\\right) + c\\)|\\(a>0\\)|
|\\({1\\over \\sqrt{x^2-a^2}}\\)|\\(\\cosh^{-1}\\left(\\frac{x}{a}\\right) + c\\)|\\(x\\geq a > 0\\)|
|\\({1\\over \\sqrt{x^2+k}}\\)|\\(\\ln (x+\\sqrt{x^2+k})+c\\)||
|\\({1\\over \\sqrt{a^2-x^2}}\\)|\\(\\sin^{-1}\\left(\\frac{x}{a}\\right)+c\\)|\\(-a\\leq x\\leq a\\)|';
$string['calc_int_standard_integrals_name'] = 'Integrales Estándar';
$string['calc_product_rule_fact'] = 'La regla siguiente le permite a uno diferenciar funciones que son multiplicadas juntas. Asuma que deseamos diferenciar \\(f(x)g(x)\\)  con respecto a \\(x\\).
\\[ \\frac{\\mathrm{d}}{\\mathrm{d}{x}} \\big(f(x)g(x)\\big) = f(x) \\cdot \\frac{\\mathrm{d} g(x)}{\\mathrm{d}{x}} + g(x)\\cdot \\frac{\\mathrm{d} f(x)}{\\mathrm{d}{x}},\\] o, usando notación alternativa, \\[ (f(x)g(x))\' = f\'(x)g(x)+f(x)g\'(x). \\]';
$string['calc_product_rule_name'] = 'La Regla del Producto';
$string['calc_quotient_rule_fact'] = 'La regla del cociente para diferenciación indica que para dos funciones diferenciables cualquiera  \\(f(x)\\) y \\(g(x)\\),
\\[\\frac{d}{dx}\\left(\\frac{f(x)}{g(x)}\\right)=\\frac{g(x)\\cdot\\frac{df(x)}{dx}\\ \\ - \\ \\ f(x)\\cdot \\frac{dg(x)}{dx}}{g(x)^2}. \\]';
$string['calc_quotient_rule_name'] = 'La Regla del Cociente';
$string['calc_rules_fact'] = '<b>La Regla del Producto</b><br />La regla siguiente le permite a uno diferenciar funciones que son multiplicadas juntas. Asuma que deseamos diferenciar (f(x)g(x)) con respecto a (x).
[ frac{mathrm{d}}{mathrm{d}{x}} big(f(x)g(x)big) = f(x) cdot frac{mathrm{d} g(x)}{mathrm{d}{x}} + g(x)cdot frac{mathrm{d} f(x)}{mathrm{d}{x}},] o, usando notación alternativa, [ (f(x)g(x))\' = f\'(x)g(x)+f(x)g\'(x). ]
<b>La Regla del Cociente</b><br />La regla del Cociente para diferenciación dice que para dos funciones diferenciables cualquiera (f(x)) y (g(x)),
[frac{d}{dx}left(frac{f(x)}{g(x)}right)=frac{g(x)cdotfrac{df(x)}{dx} - f(x)cdot frac{dg(x)}{dx}}{g(x)^2}. ]
<b>La Regla de Cadena</b><br />La regla siguiente le permite a uno encontrar la derivada de una composición de dos funciones.
Asuma que tenemos una función (f(g(x))), entonces definiendo (u=g(x)), la derivada con respecto a (x) está dada por:
[frac{df(g(x))}{dx} = frac{dg(x)}{dx}cdotfrac{df(u)}{du}.]
Alternativamente, podemos escribir:
[frac{df(x)}{dx} = f\'(g(x))cdot g\'(x).]';
$string['calc_rules_name'] = 'Reglas para Cálculo';
$string['casdisplay'] = 'Visualización CAS';
$string['cassuitecolerrors'] = 'Errores CAS';
$string['castext'] = 'Texto CAS';
$string['castext_debug_header_disp_no_simp'] = 'Valor mostrado';
$string['castext_debug_header_disp_simp'] = 'Valor simplificado mostrado';
$string['castext_debug_header_key'] = 'Nombre de variable';
$string['castext_debug_header_value_no_simp'] = 'Valor';
$string['castext_debug_header_value_simp'] = 'Valor simplificado';
$string['castext_debug_no_vars'] = '¡La pregunta no tiene variables de pregunta para depurar!';
$string['castext_error_header'] = 'El renderizado del contenido de texto falló.';
$string['castext_error_unevaluated'] = 'Este contenido de texto nunca fue evaluado.';
$string['casvalid'] = 'V2';
$string['casvalidatemismatch'] = '[Discrepancia al validar CAS]';
$string['casvalue'] = 'Valor CAS';
$string['chat'] = 'Mandar al CAS';
$string['chat_desc'] = 'El  <a href="{$a->link}">CAS chat script</a> le permite probar la conexión al CAS y probar la sintaxis de Maxima.';
$string['chatintro'] = 'Ésta página habilita que el texto CAS sea evaluado directamente. Es un script simple que es un ejemplo mínimo útil, y una forma conveniente para revisar que el CAS está funcionando, y para probar varias entradas. La primera caja de texto habilita que se definan las variables, la segunda es para el texto CAS mismo.';
$string['chattitle'] = 'Probar la conexión al CAS';
$string['checkanswertype'] = 'Revisar el tipo de la respuesta';
$string['checkanswertype_help'] = 'En caso de SI, las respuestas que sean de un "tipo" diferente (ejemplos: expresión, ecuación, matríz, lista, conjunto) son rechazadas como inválidas.';
$string['clearedthecache'] = 'CAS cacheado ha sido borrado.';
$string['clearingcachefiles'] = 'Borrando archivos de ploteo STACK cacheados {$a->done}/{$a->total}';
$string['clearthecache'] = 'Limpiar el caché';
$string['completetestcase'] = 'LLenar el resto del formato para hacer un caso-de-prueba que apruebe';
$string['complexno'] = 'Significado y visualización de sqrt(-1)';
$string['complexno_help'] = 'Controla el significado y visualización del símbolo i y de sqrt(-1)';
$string['confirmthistestcase'] = 'Confirmar comportamiento de prueba actual.';
$string['createtestcase'] = 'Crear caso de prueba';
$string['currentlyselectedvariant'] = 'Esta es la variante mostrada debajo';
$string['ddl_badanswer'] = 'El campo de respuesta modelo para este ingreso está malformado: <code>{$a}</code>.';
$string['ddl_duplicates'] = 'Se han encontrado valores duplicados al generar las opciones para ingresar.';
$string['ddl_empty'] = 'No se proporcionaron opciones para este menú desplegable.';
$string['ddl_nocorrectanswersupplied'] = 'El profesor no indicó al menos una respuesta correcta.';
$string['ddl_runtime'] = 'El ingreso ha generado el siguiente error de corrida que le impide a Usted contestar. Por favor, póngase en contacto con su profesor.';
$string['ddl_unknown'] = 'STACK recibió <code>{$a}</code> pero esto no está enlistado por el profesor como una opción.';
$string['debuginfo'] = 'Información para depuración (debug)';
$string['decimals'] = 'Separador decimal';
$string['decimals_help'] = 'Elegir el símbolo y las opciones para el separador decimal.';
$string['defaultmarkzeroifnoprts'] = 'La calificación por defecto debe ser 0 si esta pregunta no tiene Árboles de Respuesta Potencial .';
$string['defaultprtcorrectfeedback'] = 'Respuesta correcta, bien hecho.';
$string['defaultprtincorrectfeedback'] = 'Respuesta incorrecta.';
$string['defaultprtpartiallycorrectfeedback'] = 'Su respuesta es parcialmente correcta.';
$string['defaulttestfail'] = 'La prueba predeterminada que utiliza respuestas modelo no devuelve un puntaje de 1.';
$string['defaulttestpass'] = 'La prueba predeterminada que utiliza respuestas del modelo devuelve un puntaje de 1.';
$string['deletetestcase'] = 'Eliminar caso de prueba  {$a->no} para pregunta {$a->question}';
$string['deletetestcaseareyousure'] = '¿Está seguro de querer eliminar el caso de prueba {$a->no} para la pregunta {$a->question}?';
$string['deletethistestcase'] = 'Eliminar este caso de prueba.';
$string['dependenciesintro_desc'] = 'El verificador de <a href="{$a->link}">dependencias</a> encuentra problemas con dependencias como JSXGraph o la inclusión de código maxima externo.';
$string['deploy'] = 'Desplegar variante única';
$string['deployduplicateerror'] = 'Notas de pregunta duplicada detectada en las variantes desplegadas . Nosotros recomendamos encarecidamente que cada nota de pregunta solamente sea desplegada una vez; en caso contrario usted tendrá dificultades para recolectar estadísticas que tengan sentido cuando agrupe por variante. Por favor considere eliminar algunas variantes con notas duplicadas.';
$string['deployedprogress'] = 'Desplegando variantes';
$string['deployedvariants'] = 'Variantes desplegadas';
$string['deployedvariantsn'] = 'Variantes desplegadas ({$a})';
$string['deployfromlist'] = 'Lista de semillas de números enteros positivos, uno en cada línea.';
$string['deployfromlistbtn'] = 'Quitar variantes y re-desplegar desde la lista';
$string['deployfromlisterror'] = 'Fue detectado un error en su lista de números enteros, y por eso no se hicieron cambios a la lista de variantes implementadas.';
$string['deployfromlistexisting'] = 'Semillas actuales:';
$string['deploymanybtn'] = 'Desplegar # de variantes:';
$string['deploymanyerror'] = 'Error en la entrada del usuario: no pueden desplegarse "{$a->err}" variantes.';
$string['deploymanynonew'] = 'Se generaron demasiadas notas de preguntas existentes repetidas.';
$string['deploymanynotes'] = 'Intento de desplegar automáticamente un número de variantes. STACK se dará por vencido si hubiera 10 intentos fallidos para generar una nueva nota de pregunta, o cuando falle una prueba de pregunta.';
$string['deploymanysuccess'] = 'Número de nuevas variantes exitosamente creadas, probadas y desplegadas: {$a->no}.';
$string['deployoutoftime'] = 'Límite de tiempo excedido al usar aprox {$a->time} segundos. Por favor intente nuevamente para desplegar más.';
$string['deployremoveall'] = 'Des-desplegar todas las variantes';
$string['deploysystematicbtn'] = 'Implementar semillas del 1 al:';
$string['deploysystematicfrombtn'] = 'Implementar semillas desde:';
$string['deploysystematicto'] = 'hasta:';
$string['deploytestall'] = 'Ejecutar todas las pruebas en todas las variantes desplegadas (lento)';
$string['deploytoomanyerror'] = 'STACK tratará de desplegar hasta un máximo de 100 variantes nuevas en una solicitud cualquiera. No se desplegaron variantes nuevas.';
$string['description'] = 'Descripción';
$string['description_err'] = 'La descripción del nodo es más larga de 255 caracteres.';
$string['displaymismatch'] = '[Discrepancia LaTeX]';
$string['dropdowngotunrecognisedvalue'] = 'Entrada inválida';
$string['editingtestcase'] = 'Editando el caso de prueba {$a->no} para la pregunta {$a->question}';
$string['editquestioninthequestionbank'] = '<i class="fa fa-pencil"></i> Editar pregunta';
$string['editthistestcase'] = 'Editar este caso de prueba.';
$string['equiv_AND'] = 'y';
$string['equiv_ANDOR'] = '¡ confusión y/o (AND/OR) !';
$string['equiv_ASSUMEPOSREALVARS'] = 'Asumir +ve real vars';
$string['equiv_ASSUMEPOSVARS'] = 'Asumir +ve vars';
$string['equiv_IMPLIES'] = 'implica';
$string['equiv_LET'] = 'Sea';
$string['equiv_MISSINGVAR'] = 'Faltan tareas';
$string['equiv_NAND'] = 'nand';
$string['equiv_NOR'] = 'nor';
$string['equiv_NOT'] = 'no';
$string['equiv_OR'] = 'o';
$string['equiv_SAMEROOTS'] = '(Mismas raíces)';
$string['equiv_XNOR'] = 'xnor';
$string['equiv_XOR'] = 'xor';
$string['equivfirstline'] = '¡ Usted ha usado la primera línea equivocada en su argumento !';
$string['equivnocomments'] = 'Usted no tiene permitido usar comentarios en este tipo de entrada. Por favor trabaje simplemente línea por línea.';
$string['errors'] = 'Errores';
$string['exceptionmessage'] = '{$a}';
$string['expand'] = 'Expander';
$string['expandtitle'] = 'Mostrar categorías de preguntas';
$string['expectedanswernote'] = 'Nota de respuesta esperada';
$string['expectedoutcomes'] = 'Resultados de Árbol de Respuesta Potencial esperados: [entradas usadas]';
$string['expectedpenalty'] = 'Castigo esperado';
$string['expectedscore'] = 'Puntaje esperada';
$string['exportthisquestion'] = '<i class="fa fa-download"></i> Exportar como Moodle XML';
$string['exportthisquestion_help'] = 'Esto creará un archivo de exportación Moodle XML conteniendo solamente ésta pregunta. Un ejemplo de cuando ésto es útil es si Usted piensa que ésta pregunta demuestra un error (bug) en STACK que Usted quisiera reportarle a los desarrolladores.';
$string['fact_sheet_preamble'] = '# Pistas

STACK contiene una  "hoja de fórmula (formula sheet)" de fragmentos útiles que un profesor podría desear incluir en una forma consistene. esto se logra mediante el sistema de "pistas".

Las pistas pueden ser incluidas en cualquier   [CASText](../../Authoring/CASText.md).

Para incluir una pista, use la sintaxis

    [[facts:tag]]

El "tag" (la "etiqueta" en español) es elegido de la lista inferior.

## Todas las hojas de hechos soportadas';
$string['false'] = 'Falso';
$string['falsebranch'] = 'Rama falsa';
$string['falsebranch_help'] = 'Estos campos controlan lo que sucede cuando la prueba de respuesta no pasa
### Mod y puntaje
Cómo se ajusta el puntaje. = significa que se ajuste el puntaje a un valor particular, +/- significa añadir o restar el puntaje dado del total actual.

### Castigo
En modo adaptativo o interactivo, acumular esa cantidad de castigo.

### Siguiente
Si es que se va a otro nodo, y si así fuera, a cual, o detenerse.

### Nota de respuesta
Esta es una marca (tag) o etiqueta, que es una clave para propósitos de reporte. Está diseñada para  grabar la ruta única a traves del árbol, y el resultante de cada prueba de respuesta. Esto es generado automáticamente, pero puede cambiarse a algo que tenga sentido.';
$string['feedbackfromprtx'] = '[ Retroalimentación desde {$a}. ]';
$string['feedbackstyle'] = 'Estilo de retroalimentación PRT';
$string['feedbackstyle0'] = 'Formativo';
$string['feedbackstyle1'] = 'Estándar';
$string['feedbackstyle2'] = 'Compacto';
$string['feedbackstyle3'] = 'Símbolos solamente';
$string['feedbackstyle_help'] = 'Controla como es mostrada la retroalimentación PRT';
$string['feedbackvariables'] = 'Variables de retroalimentación';
$string['feedbackvariables_help'] = 'Las variables de retroalimentación le permiten manipular cialquiera de las entradas, junto con las variables de las preguntas, antes de recorrer la rama. Las variables definidas aquí pueden ser usadas en cualquier otro lado de este árbol.';
$string['fieldshouldnotcontainplaceholder'] = '{$a->field} no debería de contener ningún remplazable (placeholder) [[{$a->type}:...]].';
$string['fixdollars'] = 'Corregir dólares';
$string['fixdollars_help'] = 'Esta opción es útil si Usted está copiando y pegando (o escribiendo) TeX con delimitadores <code>$...$</code> y <code>$$...$$</code> . Estos delimitadores serán remplazados por los delimitadores recomendados durante el proceso de guardado.';
$string['fixdollarslabel'] = 'Remplazar <code>$...$</code> con <code>\\(...\\)</code>, <code>$$...$$</code> con <code>\\[...\\]</code> y <code>@...@</code> con <code>{@...@}</code> al guardar.';
$string['forbiddendoubledollars'] = 'Por favor use los delimitadores <code>\\(...\\)</code> para matemáticas en-línea y <code>\\[...\\]</code> para visualizar matemáticas. <code>$...$</code> y <code>$$...$$</code> no están permitidos. Existe una opción al final del formato para corregir esto automáticamente.';
$string['forbidfloat'] = 'Prohibir flotantes';
$string['forbidfloat_help'] = 'Si se configura a SI, entonces cualquier respuesta del estudiante que tuviera un número de punto flotante será rechazada como inválida';
$string['forbidwords'] = 'Palabras prohibidas';
$string['forbidwords_help'] = 'Esta es una lista de palabras separadas por comas de cadenas de texto que están prohibidas en una respuesta del estudiante.';
$string['generalerrors'] = 'Hay errores en su pregunta. Por favor revise cuidadosamente a continuación.';
$string['generalfeedback'] = 'Retroalimentación general';
$string['generalfeedback_help'] = 'La retroalimentación general es CASText (texto CAS). La retroalimentación general, también conocida como "solución trabajada", se muestra al estudiante después de que el estudiante ha intentado responder la pregunta. A diferencia de la retroalimentación, que depende de la respuesta que dio el estudiante, en la retroalimentación general se mostrará el mismo texto a todos los estudiantes. Puede depender de las variables usadas en la variante de la pregunta.';
$string['greek_alphabet_fact'] = '||||
|--- |--- |--- |
|MAYÚSCULAS, \\(\\quad\\)|minúsculas, \\(\\quad\\)|name|
|\\(A\\)|\\(\\alpha\\)|alpha|
|\\(B\\)|\\(\\beta\\)|beta|
|\\(\\Gamma\\)|\\(\\gamma\\)|gamma|
|\\(\\Delta\\)|\\(\\delta\\)|delta|
|\\(E\\)|\\(\\epsilon\\)|epsilon|
|\\(Z\\)|\\(\\zeta\\)|zeta|
|\\(H\\)|\\(\\eta\\)|eta|
|\\(\\Theta\\)|\\(\\theta\\)|theta|
|\\(K\\)|\\(\\kappa\\)|kappa|
|\\(M\\)|\\(\\mu\\)|mu|
|\\(N\\)|\\( u\\)|nu|
|\\(\\Xi\\)|\\(\\xi\\)|xi|
|\\(O\\)|\\(o\\)|omicron|
|\\(\\Pi\\)|\\(\\pi\\)|pi|
|\\(I\\)|\\(\\iota\\)|iota|
|\\(P\\)|\\(\\rho\\)|rho|
|\\(\\Sigma\\)|\\(\\sigma\\)|sigma|
|\\(\\Lambda\\)|\\(\\lambda\\)|lambda|
|\\(T\\)|\\(\\tau\\)|tau|
|\\(\\Upsilon\\)|\\(\\upsilon\\)|upsilon|
|\\(\\Phi\\)|\\(\\phi\\)|phi|
|\\(X\\)|\\(\\chi\\)|chi|
|\\(\\Psi\\)|\\(\\psi\\)|psi|
|\\(\\Omega\\)|\\(\\omega\\)|omega|';
$string['greek_alphabet_name'] = 'El Alfabeto Griego';
$string['healthautomaxopt'] = 'Crear automáticamente una imagen Maxima optimizada';
$string['healthautomaxopt_failed'] = 'FALLÓ al crear Imagen Optimizada Maxima : [{$a->errmsg}]';
$string['healthautomaxopt_nolisp'] = 'No es posible determinar la versión de LISP, por lo que no se creó automáticamente la imagen de Maxima.';
$string['healthautomaxopt_nolisprun'] = 'No se pudo localizar lisp.run. Intente "sudo updatedb" desde la línea de comandos y refiérase a los documentos sobre optimización.';
$string['healthautomaxopt_notok'] = 'No se creó automáticamente la imagen de Maxima.';
$string['healthautomaxopt_ok'] = 'Imagen de Maxima creada en: <tt>{$a->command}</tt>';
$string['healthautomaxopt_succeeded'] = 'ÉXITO al crear Imagen Optimizada Maxima';
$string['healthautomaxoptintro'] = 'Para un mejor desempeño, necesitamos optimizar Maxima en una máquina Linux. Use el plugin de la página "healthcheck" y vea la documentación acerca de este asunto.';
$string['healthcheck'] = 'Revisión de salud de STACK';
$string['healthcheck_desc'] = 'El script de salud <a href="{$a->link}">healthcheck script</a> le ayuda a verificar que todos los aspectos de STACK están funcionando correctamente.';
$string['healthcheckcache_db'] = 'Los resultados CAS están siendo cachados en la base de datos.';
$string['healthcheckcache_none'] = 'Los resultados CAS no están siendo cachados.';
$string['healthcheckcache_otherdb'] = 'Los resultados CAS están siendo cacheados en otra BasedeDatos.';
$string['healthcheckcachestatus'] = 'El caché actualmente contiene {$a} entradas.';
$string['healthcheckconnect'] = 'Tratando de conectarse al CAS';
$string['healthcheckconnectintro'] = 'Estamos tratando de evaluar el siguiente texto CAS:';
$string['healthcheckconnectunicode'] = 'Intentando enviar unicode al CAS';
$string['healthcheckcreateimage'] = 'Crear imagen Maxima';
$string['healthcheckfail'] = 'El control sanitario detectó problemas graves. Lea la información de diagnóstico a continuación para obtener más detalles.';
$string['healthcheckfaildocs'] = 'Se proporcionan notas detalladas y consejos para la solución de problemas en la documentación en <a href="{$a->link}">Instalación > Prueba de instalación</a>.';
$string['healthcheckfilters'] = 'Por favor asegúrese de que el filtro {$a->filter}esté habilitado en la página de (Gestionar filtros) <a href="{$a->url}">Manage filters</a>.';
$string['healthcheckgeogebra'] = 'Bloque GeoGebra';
$string['healthcheckgeogebraintro'] = 'Debería haber un gráfico de GeoGebra y una entrada debajo. La interacción con el gráfico debería afectar la entrada.';
$string['healthcheckjsxgraph'] = 'Vinculación de JSXGraph y MathJax';
$string['healthcheckjsxgraphintro'] = 'Debería haber un gráfico y una entrada debajo. La interacción con el gráfico debería afectar la entrada y viceversa. De lo contrario, hay problemas con las bibliotecas de JavaScript o su ejecución. El gráfico también debe tener visible una fórmula LaTeX renderizada por MathJax. De lo contrario, es posible que esté bloqueando el acceso a ciertas cosas y necesite ajustar firewalls, servidores proxy, etc. Si está ejecutando una instalación cerrada, intente ajustar las direcciones remotas en <code>vle_specific.php</code>. El gráfico (si funciona) se basa en <a href="https://jsxgraph.org/share/example/differential-equations">este ejemplo</a>.';
$string['healthchecklatex'] = 'Revisar que LaTeX esté siendo convertido correctamente';
$string['healthchecklatexintro'] = 'STACK genera LaTeX al instante, y le permite a los profesores escribir LaTeX en preguntas. Se asume que LaTeX será convertido por un filtro Moodle. Debajo hay muestras de expresiones mostradas y en línea en LaTeX, que deberían de aparecer correctamente en su navegador. Los problemas aquí indican una configuración de filtros de Moodle incorrecta; no son problemas de STACK mismo. STACK mismo solamente usa la notación sencilla (única) y de doble dólar, pero algunos autores de preguntas pueden depender de los otros formatos.';
$string['healthchecklatexmathjax'] = 'STACK depende del filtro Moodle MathJax.  Una alternativa es añadir código javascript al HTML adicional de Moodle.  Vea la documentación para la instalación de STACK para más detalles sobre esta opción.';
$string['healthcheckmathsdisplaymethod'] = 'Método de visualización matemático usado: {$a}.';
$string['healthcheckmaximaavailable'] = 'Versiones de Maxima disponibles en este servidor';
$string['healthcheckmaximalocal'] = 'Contenido del archivo maximalocal';
$string['healthchecknombstring'] = 'STACK v4.3 y más recientes necesitan del módulo PHP mbstring, el cual falta. Por favor lea los documentos de instalación.';
$string['healthcheckparsons'] = 'Bloque de prueba de arrastrar y soltar de Parson';
$string['healthcheckparsonsintro'] = 'Debería haber un bloque de prueba de Parson de arrastrar y soltar debajo vinculado a un bloque de entrada. El cuadro de entrada debe estar vacío para comenzar y se completará con un JSON correspondiente al estado de las listas de arrastrar y soltar de Parson a medida que uno comienza a mover los elementos.';
$string['healthcheckpass'] = 'El control de salud pasó sin detectar ningún problema. Sin embargo, lea atentamente los detalles a continuación. No todos los problemas pueden detectarse automáticamente.';
$string['healthcheckplots'] = 'Ploteo de Gráfica';
$string['healthcheckplotsintro'] = 'Debería de haber dos gráficas diferentes. Si se ven dos gráficas idénticas, entonces hay un error en el nombre de los archivos de las gráficas. Si no se regresan errores, pero no se muestra gráfica, entonces puede ayudar una de las siguientes:
(i) revise permisos de lectura de los dos subdirectorios temporales.
(ii) cambie las opciones usadas por GNUplot para crear la gráfica (\'\'plot\'\'). Actualmente no hay interfaz web para esto.';
$string['healthcheckproxysettings'] = '<strong>Advertencia:</strong> Moodle está configurado para usar un servidor proxy, pero las llamadas a maxima lo pasan por alto. Cambie la plataforma de "servidor" a "servidor (a través de proxy)" para enrutar llamadas a través del servidor proxy o agregue el servidor maxima a $CFG->proxybypass para hacer explícita la derivación. STACK debería seguir funcionando por ahora incluso si no realiza ningún cambio, pero la configuración del proxy de Moodle se aplicará en una versión posterior.';
$string['healthchecksamplecas'] = 'La derivada de {@ x^4/(1+x^4) @} is \\[ \\frac{d}{dx} \\frac{x^4}{1+x^4} = {@ diff(x^4/(1+x^4),x) @}. \\]';
$string['healthchecksamplecasunicode'] = 'Confirme si se admite Unicode: \\(\\forall\\) debe mostrarse {@unicode(8704)@}.';
$string['healthchecksampledisplaytex'] = '\\[\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}.\\]';
$string['healthchecksampleinlinetex'] = '\\(\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}\\).';
$string['healthchecksampleplots'] = 'Dos gráficas (plot) de ejemplo debajo. {@plot([x^4/(1+x^4),diff(x^4/(1+x^4),x)],[x,-3,3])@} {@plot([sin(x),x,x^2,x^3],[x,-3,3],[y,-3,3],grid2d)@} Una tercera gráfica, más pequeña, puede mostrarse aquí con ejes tradicionales. (Solamente para versiones más nuevas de Maxima.) {@plot([sin(x),x,x^2,x^3],[x,-3,3],[y,-3,3],[box, false],[yx_ratio, 1],[axes, solid],[xtics, -3, 1, 3],[ytics, -3, 1, 3],[size,250,250])@}';
$string['healthchecksstacklibrariesworking'] = 'Bibliotecas opcionales de Maxima';
$string['healthchecksstacklibrariesworkingfailed'] = 'Las siguientes bibliotecas maxima opcionales parecen no cargarse: {$a->err}. Intente recrear su imagen de Maxima.';
$string['healthchecksstacklibrariesworkingok'] = 'Las bibliotecas opcionales de Maxima parecen cargarse correctamente.';
$string['healthchecksstacklibrariesworkingsession'] = 'Al comprobar las bibliotecas maxima opcionales se produjo el siguiente error: {$a->err}';
$string['healthchecksstackmaximanotupdated'] = 'Al parecer STACK no ha sido actualizado apropiadamente. Por favor visite  la  <a href="{$a}">Administración del sistema -> Página de Notificaciones</a>.';
$string['healthchecksstackmaximatooold'] = '¡Tan antigua que la versión es desconocida!';
$string['healthchecksstackmaximaversion'] = 'Versión de Maxima';
$string['healthchecksstackmaximaversionfixoptimised'] = 'Por favor  <a href="{$a->url}"> reconstruya su ejecutable optimizado Maxima </a>.';
$string['healthchecksstackmaximaversionfixserver'] = 'Por favor reconstruya el código de Maxima en su servidor MaximaPool.';
$string['healthchecksstackmaximaversionfixunknown'] = 'Realmente no está claro como fue que esto sucedió. Usted mismo tendrá que depurar este problema. Comience por limpiar la caché CAS.';
$string['healthchecksstackmaximaversionmismatch'] = 'La versión de las bibliotecas  STACK-Maxima que se usan ({$a->usedversion}) no coincide con lo esperado ({$a->expectedversion}) por esta versión del tipo de pregunta STACK. {$a->fix}';
$string['healthchecksstackmaximaversionok'] = 'Se está usando la versión correcta y esperada de la biblioteca de STACK-Maxima ({$a->usedversion}).';
$string['healthunabletolistavail'] = 'El tipo de plataforma no está configurado actualmente como "linux", no tiene caché de base de datos, por lo que no se pueden enumerar las versiones disponibles de Maxima.';
$string['healthuncached'] = 'Lamada a CAS no cacheada';
$string['healthuncachedintro'] = 'Esta sección siempre manda una llamada genuina al CAS, sin importar las configuraciones actuales del caché. Esto es necesario para asegurar que la conexión al CAS realmente está trabajando.';
$string['healthuncachedstack_CAS_calculation'] = 'Cálculo CAS esperado: {$a->expected}. Cálculo CAS actual: {$a->actual}.';
$string['healthuncachedstack_CAS_not'] = 'CAS regresó algunos datos como se esperaba, pero hubo errores.';
$string['healthuncachedstack_CAS_ok'] = 'CAS regresó datos como se esperaba. Usted tiene una conexión viva al CAS.';
$string['healthuncachedstack_CAS_trigsimp'] = 'La función "trigsimp" no funciona. ¿Quizás también necesite instalar el paquete maxima-share en su sistema?';
$string['healthuncachedstack_CAS_version'] = 'Versión de Maxima esperada: "{$a->expected}". Versión de Maxima actual: {$a->actual}.';
$string['healthuncachedstack_CAS_versionnotchecked'] = 'Usted ha elegido la versión "default" (por defecto) de Maxima, por lo que no se hace revisión de la versión de Maxima. Su conexión cruda actualmente usa la versión {$a->actual}.';
$string['hyp_functions_fact'] = 'Las funciones hiperbólicas tienen propiedades similares a las funciones trigonométricas, pero pueden ser representadas en forma exponencial como sigue:
 \\[ \\cosh(x) = \\frac{e^x+e^{-x}}{2}, \\qquad \\sinh(x)=\\frac{e^x-e^{-x}}{2} \\]
\\[ \\tanh(x) = \\frac{\\sinh(x)}{\\cosh(x)} = \\frac{{e^x-e^{-x}}}{e^x+e^{-x}} \\]
\\[ {\\rm sech}(x) ={1\\over \\cosh(x)}={2\\over {\\rm e}^x+{\\rm e}^{-x}}, \\qquad {\\rm cosech}(x)= {1\\over \\sinh(x)}={2\\over {\\rm e}^x-{\\rm e}^{-x}} \\]
\\[ {\\rm coth}(x) ={\\cosh(x)\\over \\sinh(x)} = {1\\over {\\rm tanh}(x)} ={{\\rm e}^x+{\\rm e}^{-x}\\over {\\rm e}^x-{\\rm e}^{-x}}\\]';
$string['hyp_functions_name'] = 'Funciones Hiperbólicas';
$string['hyp_identities_fact'] = 'La similitud entre la manera en que se comportan las funciones hiperbólicas y trigonométricas es aparente al observar algunas identidades hiperbólicas básicas:
\\[{\\rm e}^x=\\cosh(x)+\\sinh(x), \\quad {\\rm e}^{-x}=\\cosh(x)-\\sinh(x)\\]
\\[\\cosh^2(x) -\\sinh^2(x) = 1\\]
\\[1-{\\rm tanh}^2(x)={\\rm sech}^2(x)\\]
\\[{\\rm coth}^2(x)-1={\\rm cosech}^2(x)\\]
\\[\\sinh(x\\pm y)=\\sinh(x)\\ \\cosh(y)\\ \\pm\\ \\cosh(x)\\ \\sinh(y)\\]
\\[\\cosh(x\\pm y)=\\cosh(x)\\ \\cosh(y)\\ \\pm\\ \\sinh(x)\\ \\sinh(y)\\]
\\[\\sinh(2x)=2\\,\\sinh(x)\\cosh(x)\\]
\\[\\cosh(2x)=\\cosh^2(x)+\\sinh^2(x)\\]
\\[\\cosh^2(x)={\\cosh(2x)+1\\over 2}\\]
\\[\\sinh^2(x)={\\cosh(2x)-1\\over 2}\\]';
$string['hyp_identities_name'] = 'Identidades Hiperbólicas';
$string['hyp_inverse_functions_fact'] = '\\[\\cosh^{-1}(x)=\\ln\\left(x+\\sqrt{x^2-1}\\right) \\quad \\mbox{ for } x\\geq 1\\]
\\[\\sinh^{-1}(x)=\\ln\\left(x+\\sqrt{x^2+1}\\right)\\]
\\[\\tanh^{-1}(x) = \\frac{1}{2}\\ln\\left({1+x\\over 1-x}\\right) \\quad \\mbox{ for } -1< x < 1\\]';
$string['hyp_inverse_functions_name'] = 'Funciones Hiperbólicas Inversas';
$string['illegalcaschars'] = 'Los caracteres @ y  \\  no están permitidos en la entrada CAS.';
$string['inputdisplayed'] = 'Mostrada como';
$string['inputentered'] = 'Valor introducido';
$string['inputexpression'] = 'Entradas de Prueba';
$string['inputextraoptions'] = 'Opciones extra';
$string['inputextraoptions_help'] = 'Algunos tipos de entradas requieren de opciones extra para que funcionen. Usted puede escribirlas aquí. Este valor es una expresión CAS.';
$string['inputheading'] = 'Entrada: {$a}';
$string['inputinvalidparamater'] = 'Parámetro inválido';
$string['inputlanguageproblems'] = 'Hay inconsistencias en las marcas de entrada y las marcas de validación entre lenguajes.';
$string['inputmonospace'] = 'Font monoespaciada';
$string['inputmonospace_help'] = 'Seleccione los tipos de entrada para usar como fuente monoespaciada de manera predeterminada. Esto afecta a todas las preguntas, no sólo a las nuevas. Estos valores predeterminados se pueden anular para una entrada particular con las configuraciones de opciones adicionales \'monospace\' y \'monospace:false\'.';
$string['inputname'] = 'Nombre de la entrada';
$string['inputnameform'] = 'Los nombres ingresados deben ser solamente letras seguidas (opcionalmente) por números. \'{$a}\' es ilegal.';
$string['inputnamelength'] = 'Los nombres de entrada no pueden ser más largos de 18 caracteres. \'{$a}\' es demasiado largo.';
$string['inputopterr'] = 'El valor de la opción <code>{$a->opt}</code> no puede ser dado como <code>{$a->val}</code>.';
$string['inputoptionunknown'] = 'Esta entrada no soporta la opción \'{$a}\'.';
$string['inputremovedconfirm'] = 'Yo confirmo que yo quiero quitar esta entrada de esta pregunta.';
$string['inputremovedconfirmbelow'] = 'La entrada \'{$a}\' ha sido removida. Por favor confirme ésto debajo.';
$string['inputs'] = 'Entradas';
$string['inputstatus'] = 'Estado';
$string['inputstatusname'] = 'Vacío';
$string['inputstatusnameinvalid'] = 'Inválido';
$string['inputstatusnamescore'] = 'Puntaje';
$string['inputstatusnamevalid'] = 'Válido';
$string['inputtest'] = 'Prueba de entrada';
$string['inputtype'] = 'Tipo de entrada';
$string['inputtype_help'] = 'Esto determina el tipo del elemento a ingresar; por ejemplo, campo de forma, falso/verdadero, área de texto.';
$string['inputtypealgebraic'] = 'Entrada algebraica';
$string['inputtypeboolean'] = 'Falso/Verdadero';
$string['inputtypecheckbox'] = 'Casilla de selección';
$string['inputtypedropdown'] = 'Menú de lista desplegable';
$string['inputtypeequiv'] = 'Reazonamiento por equivalencia';
$string['inputtypegeogebra'] = 'GeoGebra';
$string['inputtypematrix'] = 'Matriz';
$string['inputtypenotes'] = 'Notas';
$string['inputtypenumerical'] = 'Numérico';
$string['inputtypeparsons'] = 'Parsons';
$string['inputtyperadio'] = 'Radio';
$string['inputtypesinglechar'] = 'Caracter único';
$string['inputtypestring'] = 'Cadena_de_caracteres (string)';
$string['inputtypetextarea'] = 'Área de texto';
$string['inputtypeunits'] = 'Unidades';
$string['inputtypevarmatrix'] = 'Matriz de tamaño variable';
$string['inputvalidatorerr'] = 'El nombre de una función validadora debe ser un identificador de maxima válido en el formato de letras a-zA-Z opcionalmente seguidas por dígitos.';
$string['inputvalidatorerrcouldnot'] = 'El validador opcional arrojó errores internos de maxima.';
$string['inputvalidatorerrors'] = 'El validador opcional regresó errores  {$a->err}.';
$string['inputwillberemoved'] = 'Esta entrada ya no está referida en el texto de la pregunta. Si Usted guardara ahora la pregunta, los datos acerca de esta entrada se perderán. Por favor confirme que quiere hacer esto. Alternativamente, edite el texto de la pregunta para poner de vuelta los remplazables \'[[input:{$a}]]\' y \'[[validation:{$a}]]\'.';
$string['insertspaces'] = 'Insertar asteriscos para espacios solamente';
$string['insertspacesfunctions'] = 'Insertar asteriscos para multiplicación implícita, espacios y sin funciones de usuario';
$string['insertspacesfunctionssingle'] = 'Insertar asteriscos para multiplicación implícita, espacios, sin funciones de usuario y asumiendo una variable de un solo carácter.';
$string['insertstars'] = 'Insertar asteriscos';
$string['insertstars_help'] = 'Si se configura a FALSO entonces no se insertarán asteriscos. Si se configura a SI, entonces el sistema insertará automáticamente asteriscos( * ) adentro de los patrones identificados por Sintaxis Estricta. Si se configura a "variables de un solo caracter" entonces nosotros asumimos que la respuesta tiene nombres de variables que consisten solamente de nombres de variables de una sola letra. Otros nombres de variables tendrán asteriscos insertados entre las letras, por ejemplo ab->a*b';
$string['insertstarsassumesinglechar'] = 'Inserte asteriscos asumiendo nombres de variables de un solo caracter';
$string['insertstarsno'] = 'No insertar asteriscos';
$string['insertstarsspaces'] = 'Insertar asteriscos para multiplicación implícita y para espacios';
$string['insertstarsspacessinglechar'] = 'Insertar asteriscos que asumen variables de un solo caracter, implícitos y para espacios';
$string['insertstarsyes'] = 'Insertar asteriscos para multiplicación implícita solamente';
$string['inversetrig'] = 'Funciones trigonométricas inversas';
$string['inversetrig_help'] = 'Controla cómo se mostrarán las funciones trigonométricas inversas en la salida CAS.';
$string['irred_Q_commonint'] = 'Usted necesita extraer un factor común.';
$string['irred_Q_optional_fac'] = 'Usted podría trabajar más, dado que {$a->m0} puede ser más factorizado. Sin embargo, no necesita hacerlo.';
$string['languageproblemsexist'] = 'Hay problemas potenciales de lenguaje en su pregunta.';
$string['languageproblemsextra'] = 'El campo {$a->field} tiene los siguientes lenguajes que no están en el texto de la pregunta: {$a->langs}.';
$string['languageproblemsmissing'] = 'La marca (tag) de lenguaje {$a->lang} está faltante del siguiente: {$a->missing}.';
$string['logicsymbol'] = 'Símbolos lógicos';
$string['logicsymbol_help'] = 'Controla como los símbolos lógicos deberían ser mostrados en la salida CAS.';
$string['logicsymbollang'] = 'Idioma/lenguaje';
$string['logicsymbolsymbol'] = 'Simbólico';
$string['matrixparens'] = 'Forma por defecto de los paréntesis de matrices';
$string['matrixparens_help'] = 'Controla la forma por defecto de los paréntesis de matrices al mostrarse en salida CAS.';
$string['mbstringrequired'] = 'La instalación de la biblioteca MBSTRING es necesaria para STACK.';
$string['multcross'] = 'Cruz';
$string['multdot'] = 'Punto';
$string['multiplicationsign'] = 'Signo de multiplicación';
$string['multiplicationsign_help'] = 'Controla como son mostrados los signos de multiplicación.';
$string['multonlynumbers'] = 'Solamente números';
$string['mustverify'] = 'Estudiante debe verificar';
$string['mustverify_help'] = 'Especifica si es que lo escrito por el estudiante se presenta de regreso a él como un proceso forzado de dos pasos antes de que este ingreso esté disponible para el mecanismo de calificar. Los errores de sintaxis siempre son reportados.';
$string['mustverifyshowvalidation'] = 'Usted no puede elegir el requerir validación en dos pasos pero no mostrarle los resultados de validación al estudiante después del primer paso. Ésto pone al estudiante en una posición imposible.';
$string['namealreadyused'] = 'Usted ya ha usado antes este nombre.';
$string['newnameforx'] = 'Nuevo nombre para  \'{$a}\'';
$string['next'] = 'Siguiente';
$string['nodehelp'] = 'Nodo de árbol de respuesta';
$string['nodehelp_help'] = '### Prueba de respuesta (Answer test)
Se usa una prueba de respuesta para comparar dos expresiones para establecer si es que satisfacen algunos criterios matemáticos.

### SAns
Este es el primer argumento para la función de prueba de respuesta. En pruebas asimétricas esto se considera que es la "respuesta del estudiante" aunque podría ser cualquier expresión CAS válida, y podría depender de las variables de la pregunta o de las variables de la retroalimentación.

### TAns
Este es el segundo argumento para la función de prueba de la respuesta. En pruebas asimétricas esto se considera que es la "respuesta del profesor" aunque podría ser cualquier expresión CAS válida, y podría depender de las variables de la pregunta o de las variables de la retroalimentación.

### Opciones de la prueba (Test options)
Este campo habilita que las pruebas de respuesta acepten una opción; por ejemplo, una variable o una precisión numérica.

### Quiet (Silencioso)
Cuando se configura a Sí, cualquier retroalimentación generada automáticamente por las pruebas de respuesta es suprimida  y no es mostrada a los estudiantes. Los campos de retroalimentación en las ramas no son afectados por esta opción.';
$string['nodeloopdetected'] = 'Este enlace crea un ciclo en este Árbol de Respuesta Potencial';
$string['nodenotused'] = 'No hay otros nodos en este Árbol de Respuesta Potencial que enlacen hacia este nodo.';
$string['nodex'] = 'Nodo {$a}';
$string['nodexdelete'] = 'Eliminar nodo {$a}';
$string['nodexfalsefeedback'] = 'Nodo {$a} retroalimentación falsa';
$string['nodextruefeedback'] = 'Nodo {$a} retroalimentación verdadera';
$string['nodexwhenfalse'] = 'Nodo {$a} cuando falso';
$string['nodexwhentrue'] = 'Nodo {$a} cuando verdadero';
$string['nonempty'] = 'Esto no debe estar vacío.';
$string['noprtsifnoinputs'] = 'Una pregunta sin entradas no puede tener ningún Árbol de Respuesta Potencial.';
$string['nosemicolon'] = 'Usted no debe terminar expresiones Maxima con un punto y coma aquí.';
$string['notanswered'] = '(Borrar mi opción)';
$string['notavalidname'] = 'No es un nombre válido';
$string['notestcasesyet'] = 'Aún no se han añadido casos de prueba.';
$string['numericalinputdp'] = 'Usted debe proporcionar exactamente \\( {$a} \\) decimales.';
$string['numericalinputmaxdp'] = 'Usted debe proporcionar como máximo \\( {$a} \\) decimales.';
$string['numericalinputmaxsf'] = 'Usted debe proporcionar como máximo \\( {$a} \\) números significativos.';
$string['numericalinputmindp'] = 'Usted debe proporcionar al menos \\( {$a} \\) decimales.';
$string['numericalinputminmaxerr'] = '¡El número mínimo requerido de dígitos excede el número máximo de digitos!';
$string['numericalinputminsf'] = 'Usted debe proporcionar al menos \\( {$a} \\) dígitos significativos.';
$string['numericalinputminsfmaxdperr'] = 'No especificar requisitos ni para lugares decimales ni para dígitos significativos en el mismo ingreso.';
$string['numericalinputmustfloat'] = 'Este ingreso espera un número de punto flotante.';
$string['numericalinputmustint'] = 'Esta entrada espera un número entero explícito.';
$string['numericalinputmustnumber'] = 'Esta entrada espera un número.';
$string['numericalinputmustrational'] = 'Este ingreso espera una fracción o un número racional.';
$string['numericalinputoptboolerr'] = 'El valor de la opción <code>{$a->opt}</code> debería de ser booleano, pero de hecho es <code>{$a->val}</code>.';
$string['numericalinputoptinterr'] = 'El valor de la opción <code>{$a->opt}</code> debería de ser un número entero, pero de hecho es <code>{$a->val}</code>.';
$string['numericalinputsf'] = 'Usted debe proporcionar exactamente \\( {$a} \\) dígitos significativos.';
$string['numericalinputvarsforbidden'] = 'Este ingreso espera un número, por lo que no puede contener variables.';
$string['options'] = 'Opciones';
$string['options_short'] = 'Opt';
$string['overallresult'] = 'Resultado general';
$string['penalty'] = 'Castigo';
$string['penalty_help'] = 'El esquema de castigos deduce este valor del resultado de cada Árbol de Respuesta Potencial para cada intento diferente y válido que no esté completamente correcto.';
$string['penaltyerror'] = 'El castigo debe ser un valor numérico entre 0 y 1 o una variable (la cual no es comprobado).';
$string['penaltyerror2'] = 'El castigo debe estar vacío, o ser un valor numérico entre 0 y 1.';
$string['phpcasstring'] = 'Salida PHP';
$string['phpsuitecolerror'] = 'Errores PHP';
$string['phpvalid'] = 'V1';
$string['phpvalidatemismatch'] = '[Discrepancia en validación PHP]';
$string['pleaseananswerallparts'] = 'Por favor conteste todas las partes de la pregunta.';
$string['pleasecheckyourinputs'] = 'Por favor verifique que lo que haya escrito fue interpretado como se esperaba.';
$string['pluginname'] = 'STACK';
$string['pluginname_help'] = 'STACK es un sistema de evaluación para matemáticas.';
$string['pluginnameadding'] = 'Añadiendo una pregunta STACK';
$string['pluginnameediting'] = 'Editando una pregunta STACK';
$string['pluginnamesummary'] = 'STACK proporciona preguntas matemáticas para el exámen de Moodle. Estas preguntas usan un sistema de álgebra de computadora para establecer las propiedades matemáticas de las respuestas de los estudiantes.';
$string['privacy:metadata'] = 'El plugin de tipo de pregunta STACK no almacena ningún dato personal.';
$string['prtcorrectfeedback'] = 'Retroalimentación estándar para correcto';
$string['prtheading'] = 'Árbol de respuesta potencial: {$a}';
$string['prtincorrectfeedback'] = 'Retroalimentación estándar para incorrecto';
$string['prtmustbesetup'] = 'Este Árbol de Respuesta Potencial debe configurarse antes de que pueda guardarse la pregunta.';
$string['prtname'] = 'Nombre del Árbol de Respuesta Potencial';
$string['prtnamelength'] = 'Los nombres de Árbol de Respuesta Potencial no pueden ser más largos de 18 caracteres. \'{$a}\' es demasiado largo.';
$string['prtnodesheading'] = 'Nodos de Árbol de Respuesta Potencial ({$a})';
$string['prtpartiallycorrectfeedback'] = 'Retroalimentación estándar para parcialmente correcto';
$string['prtremovedconfirm'] = 'Yo confirmo que yo quiero quitar éste Árbol de Respuesta Potencial de esta pregunta.';
$string['prtremovedconfirmbelow'] = 'El  Árbol de Respuesta Potencial  \'{$a}\' ha sido quitado. Por favor confirme ésto debajo.';
$string['prtruntimeerror'] = '{$a->prt} generó el siguiente error de corrida: {$a->error}';
$string['prtruntimepenalty'] = 'La penalización no fue evaluada completamente a un valor numérico (verifique los nombres de las variables).';
$string['prtruntimescore'] = 'El puntaje no se evaluó completamente como un valor numérico (verifique los nombres de las variables).';
$string['prts'] = 'Árboles de Respuesta Potencial';
$string['prtwillbecomeactivewhen'] = 'Éste Árbol de Respuesta Potencial se volverá activo cuando el estudiante haya contestado: {$a}';
$string['prtwillberemoved'] = 'Este Árbol de Respuesta Potencial ya no está referido en el texto de la pregunta o en la retroalimentación específica. Si Usted guarda ahora la pregunta, los datos acerca de este Árbol de Respuesta Potencial se perderán. Por favor confirme que desea hacer esto. Alternativamente, edite el texto de la pregunta o la retroalimentación específica para poner de vuelta el remplazable \'[[feedback:{$a}]]\'.';
$string['pslash'] = 'Proteger las barras dentro de las variables de cadena de Maxima:';
$string['qm_error'] = 'Su respuesta contiene signos de interrogación ? , los que no están permitidos en las respuestas. Usted debería de remplazarlos con un valor específico.';
$string['questiondescription'] = 'Descripción de la pregunta';
$string['questiondescription_help'] = 'La descripción de la pregunta es CASText. El propósito de una descripción de pregunta es proporcionar un lugar apropiado para discutir la pregunta. Esto no está disponible para los estudiantes.';
$string['questiondoesnotuserandomisation'] = 'Esta pregunta no usa aleatorización';
$string['questionnotdeployedyet'] = 'No se han desplegado variantes de esta pregunta aún.';
$string['questionnote'] = 'Nota de pregunta';
$string['questionnote_help'] = 'La nota de la pregunta es CASText. El propósito de una nota de pregunta es distinguir entre variantes aleatorias de una pregunta. Dos variantes de la pregunta son iguales si y solo si las notas de la pregunta son iguales. En un análisis posterior es muy útil dejar una nota de pregunta significativa. (Evite las imágenes y los archivos: estos no se mostrarán en la mayoría de los resultados).';
$string['questionnote_missing'] = 'La nota de pregunta está vacía. Por favor añada una nota de pregunta que tenga sentido (resumen).';
$string['questionnotempty'] = 'La nota de pregunta no puede estar vacía cuando rand() aparece en las variables de la pregunta. La nota de pregunta es usada para distinguir entre diferentes versiones aleatorias de la pregunta.';
$string['questionpreview'] = 'Vista previa de pregunta';
$string['questionsimplify'] = 'Simplificar a nivel-de-pregunta';
$string['questionsimplify_help'] = 'Configura la variable global "simp" dentro de Maxima para la pregunta completa.';
$string['questiontestempty'] = '¡Las pruebas vacías de pregunta no están permitidas!';
$string['questiontests'] = 'Pruebas de preguntas';
$string['questiontestsdefault'] = '(Predeterminado)';
$string['questiontestsfor'] = 'Pruebas de pregunta para semilla {$a}';
$string['questiontestspass'] = 'Todas las pruebas de preguntas pasaron.';
$string['questiontext'] = 'Texto de pregunta';
$string['questiontext_help'] = 'El texto de la pregunta es CASText. Esta es la "pregunta" que el estudiante realmente ve. Usted debe poner elementos de entrada, y las cadenas de validación, en este campo, y solamente en este campo. Por ejemplo, usando `[[input:ans1]] [[validation:ans1]]`.';
$string['questiontextfeedbacklanguageproblems'] = 'Hay inconsistencias en las marcas de retroalimentación entre lenguajes.';
$string['questiontextfeedbackonlycontain'] = 'El texto de la pregunta combinado con la retroalimentación específica solamente debería de contener el token \'{$a}\' una vez..';
$string['questiontextlanguages'] = 'Las marcas (tags) de lenguaje encontradas en su pregunta son: {$a}.';
$string['questiontextmustcontain'] = 'El texto de la pregunta debe contener el token \'{$a}\'.';
$string['questiontextnonempty'] = 'El texto de la pregunta no debe estar vacío.';
$string['questiontextonlycontain'] = 'El texto de la pregunta solamente debe contener el token)\'{$a}\' una vez.';
$string['questiontextplaceholderswhitespace'] = 'Los remplazables (\'\'placeholders\'\') no pueden contener espacios blancos (\'\'whitespace\'\'). Este aparenta hacerlo: \'{$a}\'.';
$string['questionvalue'] = 'Valor de la pregunta';
$string['questionvaluepostive'] = 'El valor de la pregunta debe ser no-negativo.';
$string['questionvariables'] = 'Variables de la pregunta';
$string['questionvariables_help'] = 'Éste campo le permite a Usted definir y manipular las variables CAS, por ejemplo, parar crear versiones aleatorias. Éstas están disponibles para otras partes de la pregunta.';
$string['questionvariablevalues'] = 'Valores de variables de pregunta';
$string['questionwarnings'] = 'Advertencias de preguntas';
$string['questionwarnings_help'] = 'Las Advertencias de preguntas son problemas que usted podría querer contemplar, pero que no son errores garrafales.';
$string['quiet'] = 'Silencioso';
$string['quiet_help'] = 'Cuando se configura a SI, cualquier retroalimentación generada automáticamente por las pruebas de respuesta es suprimida, y no se muestra al estudiante. Los campos de retroalimentación en las ramas no son afectados por esta opción.';
$string['quiet_icon_false'] = '<span title ="Des-silenciar" alt="Ícono de des-Silenciar micrófono" "style="font-size: 1.25em; color:blue;"><i class="fa fa-commenting-o"></i></span>';
$string['quiet_icon_true'] = '<span title ="Silenciar" alt="Ícono de silenciar micrófono" style="font-size: 1.25em; color:red;"><i class="fa fa-microphone-slash" aria-hidden="true"></i></span>';
$string['rawdata'] = 'Datos crudos';
$string['renamequestionparts'] = 'Renombrar partes de la pregunta';
$string['replacedollarscount'] = 'Ésta categoría contiene {$a} preguntas STACK.';
$string['replacedollarsin'] = 'Delimitadores matemáticos fijos en el campo {$a}';
$string['replacedollarsindex'] = 'Contextos con preguntas STACK';
$string['replacedollarsindexintro'] = 'El elegir cualquiera de los enlaces lo llevará a una página en donde puede revisar las preguntas para ver si usan delimitadores de matemáticas de estilo antiguo, y arreglarlos automáticamente. Si Usted tiene demasiadas preguntas (miles) en un contexto, la cantidad de salida probablemente saturará a su navegador web, en cuyo caso puede añadir un parámetro preview=0 a la URL e intentarlo nuevamente.';
$string['replacedollarsindextitle'] = 'Remplazar $s en textos de pregunta';
$string['replacedollarsnoproblems'] = 'No se encontraron problemas por delimitadores.';
$string['replacedollarstitle'] = 'Remplazar $s en textos de pregunta en {$a}';
$string['requirelowestterms'] = 'Requerir términos más bajos';
$string['requirelowestterms_help'] = 'Cuando esta opción se configura a si, cualquier coeficiente u otro número racional en una expresión, debe estar escrito en su mínima expresión. De otra forma la respuesta se rechaza como inválida.';
$string['runquestiontests'] = 'Tablero de pregunta STACK';
$string['runquestiontests_alert'] = 'A la pregunta le faltan pruebas o variantes.';
$string['runquestiontests_auto'] = 'Añadiendo automáticamente un caso de prueba asumiendo que la entrada del profesor obtenga puntuación completa. Por favor compruebe la nota de respuesta cuidadosamente.';
$string['runquestiontests_autoprompt'] = 'Añadir un caso de prueba asumiendo que la entrada del profesor obtenga puntuación completa.';
$string['runquestiontests_example'] = 'ejemplo';
$string['runquestiontests_explanation'] = 'Si agrega la prueba, su salida se verá así:';
$string['runquestiontests_help'] = 'El Tablero ejecuta pruebas de pregunta que preguntan por unidad las preguntas para asegurar que el comportamiento  coincida con   las expectativas expresadas por el profesor, y despliega variantes para asegurar que las versiones aleatorias vistas por los estudiantes estén pre-probadas contra las pruebas de pregunta. Estas son herramientas para ayudarle a crear y probar preguntas confiables y deberían de usarse en todos los casos donde una  pregunta será usada por estudiantes. El  tablero también tiene muchas otras funciones específicas de STACK.';
$string['runtimeerror'] = 'Esta pregunta generó un error interno desconocido. Por favor busque consejo; por ejemplo, de un profesor.';
$string['runtimefielderr'] = 'El campo ""{$a->field}"" generó el error siguiente: {$a->err}';
$string['sans'] = 'SAns (Respuesta del Estudiante)';
$string['sans_help'] = 'Éste es el primer argumento para la función de prueba de respuesta. En pruebas asimétricas ésto es considerado como la "respuesta del estudiante", aunque puede ser cualquier expresión CAS válida, y puede depender de las variables de preguntas o las variables de retroalimentación.';
$string['sansrequired'] = 'SAns (Respuesta del Estudiante) no debe estar vacía.';
$string['savechat'] = 'Guardar de nuevo en la pregunta';
$string['savechatmsg'] = 'Variables de preguntas y retroalimentación general guardadas dentro de la  pregunta.';
$string['scientificnotation'] = 'Notación científica';
$string['scientificnotation_help'] = 'Elija el formato de notación científica.';
$string['score'] = 'Puntaje';
$string['scoreerror'] = 'El puntaje debe ser un valor numérico entre 0 y 1 o una variable (lo que no es comprobado).';
$string['scoremode'] = 'Mod';
$string['seedx'] = 'Semilla {$a}';
$string['seethisquestioninthequestionbank'] = '<i class="fa fa-list-alt"></i> Mostrar en banco de preguntas';
$string['seetodolist'] = '<i class="fa fa-exclamation-triangle"></i> Encontrar <tt>[[todo]]</tt> bloques';
$string['seetodolist_desc'] = 'El propósito de esta página es encontrar todas las preguntas que contengan bloques <tt>[[todo]]</tt> y agruparlas por cualquier etiqueta.';
$string['seetodolist_help'] = 'Al hacer clic en el nombre de la pregunta se accederá al panel de control. También puede obtener una vista previa de la pregunta.';
$string['selectquiz'] = 'Seleccione el examen para analizar los resultados';
$string['sendgeneralfeedback'] = '<i class="fa fa-file-text"></i> Enviar retroalimentación general al CAS';
$string['settingajaxvalidation'] = 'Validación instantánea';
$string['settingajaxvalidation_desc'] = 'Cuando esta configuración se activa, la entrada actual de los estudiantes será validada siempre que se pausen al escribir. Esto proporciona una mejor experiencia para el usuario, pero es probable que aumente la carga del servidor.';
$string['settingcasdebugging'] = 'Depuración (debugging) de CAS';
$string['settingcasdebugging_desc'] = 'Si es que se almacena o no información para depuración acerca de la conexión CAS.';
$string['settingcasmaximaversion'] = 'Versión de Maxima';
$string['settingcasmaximaversion_desc'] = 'La versión de Maxima que se usa.';
$string['settingcaspreparse'] = 'Pre-interpretar todo el código antes de enviarlo a Maxima.';
$string['settingcaspreparse_desc'] = 'Recomendamos que todo el código en cuestión, variables, etc., incluso de profesores confiables, esté previamente analizado para detectar patrones potencialmente maliciosos. Esto es especialmente importante cuando se aceptan preguntas de fuentes desconocidas. Sin embargo, es posible que este análisis previo caduque y sería necesario deshabilitar esta verificación (temporalmente) para salir de un posible callejón sin salida. Este código aún está en pruebas y desarrollo y esta configuración se eliminará en futuras versiones para garantizar que este análisis previo siempre se aplique.';
$string['settingcaspreparse_false'] = 'No pre-interpretar (no recomendable)';
$string['settingcaspreparse_true'] = 'Siempre pre-interpretar';
$string['settingcasresultscache'] = 'Cachar resultados CAS';
$string['settingcasresultscache_db'] = 'Caché en la base de datos';
$string['settingcasresultscache_desc'] = 'Esta configuración determina si es que son cacheadas las llamadas a CAS. Esta configuración debería de activarse a menos que Usted estuviera haciendo desarrollos que involucren cambios al código de Maxima. El estado actual del caché se muestra en la página del estado-de-salud. Si Usted cambia su configuración (por  ejemplo, el comando gnuplot), Usted necesitará purgar el caché antes de que pueda ver los efectos de estos cambios.';
$string['settingcasresultscache_none'] = 'No cachar';
$string['settingcastimeout'] = 'Se agotó el tiempo para conexión CAS';
$string['settingcastimeout_desc'] = 'El tiempo a agotarse para usar al tratar de conectarse a Maxima.';
$string['settingdefaultinputoptions'] = 'Opciones de entrada por defecto';
$string['settingdefaultinputoptions_desc'] = 'Usadas al crear una nueva pregunta, o añadir una nueva entrada a una pregunta existente.';
$string['settingdefaultquestionoptions'] = 'Opciones de entrada por defecto';
$string['settingdefaultquestionoptions_desc'] = 'Usadas al crear una nueva pregunta.';
$string['settingmathsdisplay'] = 'Filtro de Matemáticas';
$string['settingmathsdisplay_desc'] = 'El método usado para mostrar matemáticas. Si Usted elige MathJax, entonces necesitará seguir las instrucciones en la página de Healthcheck (Revisión_de_Salud) para configurarlo. Si Usted selecciona un filtro, entonces debe de asegurarse de que el filtro esté habilitado en la página de configuración para Gestión de filtros.';
$string['settingmathsdisplay_mathjax'] = 'MathJax';
$string['settingmathsdisplay_maths'] = 'Antiguo filtro de Matemáticas de OU';
$string['settingmathsdisplay_oumaths'] = 'Nuevo filtro de matemáticas de OU';
$string['settingmathsdisplay_tex'] = 'Filtro de texto Moodle';
$string['settingmaximalibraries'] = 'Cargar bibliotecas Maxima opcionales:';
$string['settingmaximalibraries_desc'] = 'Esta es una lista separada por comas de nombres de bibliotecas de Maxima que se cargarán automáticamente en Maxima. Sólo se pueden utilizar nombres de bibliotecas compatibles: "stats, distrib, descriptive, simplex". Cuando cambie las bibliotecas enumeradas, deberá reconstruir la imagen optimizada de Maxima.';
$string['settingmaximalibraries_error'] = 'Edite la configuración del complemento STACK <tt>qtype_stack | bibliotecasmaximales</tt>. El siguiente paquete no es compatible: {$a}';
$string['settingmaximalibraries_failed'] = 'Parece que algunos de los paquetes de Maxima que has solicitado no se pudieron cargar.';
$string['settingparsercacheinputlength'] = 'Cachear expresiones analizadas más largas de';
$string['settingparsercacheinputlength_desc'] = 'El evaluador de expresiones se vuelve bastante lento en expresiones largas (por ejemplo variables de preguntas complicadas). Por lo tanto, nosotros cacheamos el resultado de las evaluaciones de expresiones por un tiempo mayor que este límite. Idealmente, esta configuración debería estar configurada a un valor tal que hacer la búsqueda en el caché tomara aproximadamente el mismo tiempo que hacer la evaluación. 50 caracteres es un buen cálculo al ojo para esto. Si se configura a 0, el caché es deshabilitado.';
$string['settingplatformmaximacommand'] = 'Comando de Maxima';
$string['settingplatformmaximacommand_desc'] = 'Si este campo está en blanco, STACK hará una suposición fundamentada sobre dónde encontrar a Maxima. Si esto falla, se debe configurar la ruta completa del ejecutable maxima o maxima-optimizado. Úselo únicamente para desarrollo y depuración. No lo use en un sistema de producción: utilice la opción optimizada o, mejor aún, la Maxima Pool.';
$string['settingplatformmaximacommandopt'] = 'Comando Maxima Optimizado';
$string['settingplatformmaximacommandopt_desc'] = 'Esto debería ser la ruta completa a el ejecutable optimizado-maxima.  Considere usar el comando de fin de tiempo (timeout) en sistemas basados en Linux. Por ejemplo timeout --kill-after=10s 10s maxima';
$string['settingplatformmaximacommandserver'] = 'URL del Maxima Pool';
$string['settingplatformmaximacommandserver_desc'] = 'Para tipo de Plataforma: Serviddr, esto debe ser configurado a la URL del servidorcito Maxima Pool.';
$string['settingplatformplotcommand'] = 'Comando Plot';
$string['settingplatformplotcommand_desc'] = 'Normalmente esto puede dejarse vacío, pero si no está trabajando la graficación, Usted podría necesitar escribir aquí la ruta completa al comando gnuplot.';
$string['settingplatformtype'] = 'Tipo de plataforma';
$string['settingplatformtype_desc'] = 'STACK necesita conocer en que tipo de sistema operativo está corriendo. La opción "Servidor" da el mejor desempeño, pero con el costo de tener que configurar un servidor adicional. La opción "Linux (optimizado)"  está explicada en la página de Maxima en la documentación.';
$string['settingplatformtypelinux'] = 'Linux';
$string['settingplatformtypelinuxoptimised'] = 'Linux (optimizado)';
$string['settingplatformtypeserver'] = 'Servidor';
$string['settingplatformtypeserverproxy'] = 'Servidor (a través de proxy)';
$string['settingreplacedollars'] = 'Remplazar <code>$</code> y <code>$$</code>';
$string['settingreplacedollars_desc'] = 'Replazar los delimitadores <code>$...$</code> y <code>$$...$$</code> en el texto de la pregunta, además de <code>\\\\[...\\\\]</code> y <code>\\\\(...\\\\)</code>. Una mejor opción es usar el \'\'script\'\' para \'Fix maths delimiters\', el cual se referencía abajo.';
$string['settingserveruserpass'] = 'Nombre_de_usuario:contraseña del usuario';
$string['settingserveruserpass_desc'] = 'Si Usted está usando Tipo de plataforma: Servidor, y si Usted ha configurado su servidor \'\'pool\'\' Maxima con autenticación HTTP, entonces Usted puede poner aquí el nombre_de_usuario y la contraseña. Esto es ligeramente más seguro que ponerlos en la URL. El formato es nombre_de_usuario:contraseña.';
$string['settingsmathsdisplayheading'] = 'Opciones de visualización matemáticas';
$string['settingsmaximasettings'] = 'Conectando a Maxima';
$string['settingusefullinks'] = 'Enlaces útiles';
$string['showingundeployedvariant'] = 'Mostrando variante no-desplegada: {$a}';
$string['showvalidation'] = 'Mostrar la validación';
$string['showvalidation_help'] = 'Mostrar cualquier retroalimentación de validación desde esta entrada, incluyendo hacer eco sus expresiones en la notación tradicional de dos dimensiones. Los errores de sintaxis siempre son reportados.';
$string['showvalidationcompact'] = 'Si, Compacto';
$string['showvalidationno'] = 'No';
$string['showvalidationyes'] = 'Si, con lista de variables';
$string['showvalidationyesnovars'] = 'Si, sin lista de variables';
$string['singlechargotmorethanone'] = 'Usted solamente puede escribir un único caracter aquí.';
$string['specificfeedback'] = 'Retroalimentación específica';
$string['specificfeedback_help'] = 'Por defecto, la retroalimentación para cada Árbol de Respuesta Potencial se mostrará en este bloque. Puede moverse al texto de la pregunta, en cuyo caso Moodle tendrá menos control acerca de cuando es mostrado por varios comportamientos.';
$string['splitsummary'] = 'Dividir resumen';
$string['sqrtsign'] = '\'\'Surd\'\'  (raíz irracional no resuelta) para raíz cuadrada';
$string['sqrtsign_help'] = 'Controla cómo se muestran los \'\'surds\'\' (raíz irracional no resueltas).';
$string['stack:usediagnostictools'] = 'Usar las herramientas STACK';
$string['stackBlock_elif_after_else'] = '"elif" después de un "else" dentro de un bloque "if".';
$string['stackBlock_elif_out_of_an_if'] = '"elif" no puede existir afuera de un bloque "if".';
$string['stackBlock_else_out_of_an_if'] = '"else" no puede existir afuera de un bloque "if".';
$string['stackBlock_escapeNeedsValue'] = 'El bloque de escape necesita un atributo de valor.';
$string['stackBlock_geogebra_heading'] = 'Materiales de Geogebra';
$string['stackBlock_geogebra_height'] = 'La altura de un subprograma de GeoGebra debe utilizar una unidad de longitud CSS conocida.';
$string['stackBlock_geogebra_height_num'] = 'La parte numérica de la altura de un subprograma de GeoGebra debe ser un número sin formato y no debe contener caracteres adicionales.';
$string['stackBlock_geogebra_link'] = 'Enlace al material de GeoGebra referenciado';
$string['stackBlock_geogebra_link_help'] = '¿Quiere editar este material? Si este es su propio material de GeoGebra en geogebra.org, puede editarlo. Si este no es su material de GeoGebra, primero debe copiar el material en geogebra.org. Luego debe publicar el material y editar el valor material_id a continuación en el texto de la pregunta.';
$string['stackBlock_geogebra_overdefined_dimension'] = 'Al definir la relación de aspecto para el subprograma GeoGebra, solo se debe definir el ancho o la altura, no ambos.';
$string['stackBlock_geogebra_param'] = 'El bloque geogebra sólo admite estos parámetros en este contexto: {$a->param}.';
$string['stackBlock_geogebra_ref'] = 'El bloque geogebra solo admite la referencia de entradas presentes en la misma sección CASText. \'{$a->var}\' no existe aquí.';
$string['stackBlock_geogebra_settingdefaultoptions'] = 'Opciones para GeoGebra en STACK';
$string['stackBlock_geogebra_settingdefaultoptions_desc'] = 'La documentación para usar GeoGebra con STACK se encuentra en Specialist_tools/GeoGebra/';
$string['stackBlock_geogebra_underdefined_dimension'] = 'Al definir la relación de aspecto para el subprograma GeoGebra, se debe definir el ancho o la altura del gráfico.';
$string['stackBlock_geogebra_width'] = 'El ancho de un subprograma de GeoGebra debe utilizar una unidad de longitud CSS conocida.';
$string['stackBlock_geogebra_width_num'] = 'La parte numérica del ancho de un subprograma de GeoGebra debe ser un número sin formato y no debe contener caracteres adicionales.';
$string['stackBlock_geogebrabaseurl'] = 'Link to GeoGebra hosting (optional)';
$string['stackBlock_geogebrabaseurl_help'] = 'Aquí puede agregar un enlace personalizado, si aloja scripts de GeoGebra en su propio servidor. Si solo desea utilizar una versión específica de GeoGebra, utilice: https://www.geogebra.org/apps/5.0.498.0/web3d (por ejemplo, para la versión 5.0.498.0)';
$string['stackBlock_ifNeedsCondition'] = 'El bloque \'if\' necesita un atributo de prueba.';
$string['stackBlock_incorrect_available_header_type'] = 'El encabezado de la lista disponible debe pasarse como una cadena de caracteres o una lista de longitud uno.';
$string['stackBlock_incorrect_header_length'] = 'La lista de encabezados debe tener la misma longitud que el número de columnas pasadas al encabezado del bloque.';
$string['stackBlock_incorrect_header_type'] = 'Los encabezados deben ser una matriz que contenga cadenas de caracteres.';
$string['stackBlock_incorrect_index_length'] = 'La longitud del índice debe ser uno más que el número de filas pasadas al encabezado del bloque. Un elemento en la esquina superior izquierda siempre debe ir en el índice.';
$string['stackBlock_incorrect_index_type'] = 'El índice debe ser una matriz que contenga cadenas de caracteres.';
$string['stackBlock_jsxgraph_height'] = 'La altura de una gráfica  JSXGraph debe usar una unidad conocida de CSS-length.';
$string['stackBlock_jsxgraph_height_num'] = 'La porción numérica de la altura de una gráfica JSXGraph debe ser un número bruto y no debe contener ningún caracter extraño.';
$string['stackBlock_jsxgraph_overdefined_dimension'] = 'Al definir la proporción de aspecto para el JSXGraph uno debería definir solamente el ancho o la altura pero no ambos.';
$string['stackBlock_jsxgraph_param'] = 'El jsxgraph-block solamente soporta estos parámetros en este contexto: {$a->param}.';
$string['stackBlock_jsxgraph_ref'] = 'El jsxgraph-block solamente soporta el referenciar entradas presentes en la misma sección CASText \'{$a->var}\' no existe aquí.';
$string['stackBlock_jsxgraph_underdefined_dimension'] = 'Al definir la proporción de aspecto para el JSXGraph uno debe o definir el ancho o la altura de la gráfica.';
$string['stackBlock_jsxgraph_width'] = 'el ancho de una JSXGraph debe usar una unidad conocida de  CSS-length.';
$string['stackBlock_jsxgraph_width_num'] = 'La porción numérica del ancho de un JSXGraph debe ser un número crudo y no debe contener ningún caracter extraño.';
$string['stackBlock_missmatch'] = 'no tiene coincidencia.';
$string['stackBlock_multiple_else'] = 'Múltiples ramificaciones \'else\' en un bloque \'if\'.';
$string['stackBlock_overwritten_sortable_option'] = 'Se encontraron opciones ordenables inmutables, se ignoran las siguientes:';
$string['stackBlock_parsons_available_header'] = 'Arrastrar desde aquí:';
$string['stackBlock_parsons_contents'] = 'El contenido de un bloque de Parson debe ser un JSON con el formato {#stackjson_stringify(steps)#}, donde \'steps\' es la matriz bidimensional de Maxima que contiene pares clave-valor de elementos, o con el formato {\'steps \' : {#stackjson_stringify(steps)#}, \'options\' : {JSON que contiene opciones ordenables}, \'header\' : [Lista de encabezados], \'available_header\' : \'cadena que contiene el encabezado de la lista disponible\', \'index\' : [ Lista que contiene el índice]}, donde las claves \'options\', \'header\', \'available_header\' e \'index\' son opcionales. Alternativamente, el contenido del bloque Parsons puede contener equivalentes JSON sin procesar. Si se utiliza JSON sin formato dentro del bloque Parsons, no se admiten claves numéricas debido a problemas con el reordenamiento; Por favor, utilice etiquetas descriptivas. Tenga en cuenta que todos los pasos deben ser cadenas de caracteres. Consulte https://docs.stack-assessment.org/en/Authoring/Parsons/ para obtener más detalles.';
$string['stackBlock_parsons_height'] = 'La altura de un bloque de Parson debe utilizar una unidad de longitud CSS conocida.';
$string['stackBlock_parsons_height_num'] = 'La parte numérica de la altura de un bloque de Parson debe ser un número sin formato y no debe contener caracteres adicionales.';
$string['stackBlock_parsons_invalid_columns_value'] = 'El valor de \'columnas\' en el encabezado del bloque de Parson debe ser una cadena que contenga un entero positivo.';
$string['stackBlock_parsons_invalid_item-height_value'] = 'El valor de \'item-height\' en el encabezado del bloque de Parson debe ser una cadena de caracteres que contenga un entero positivo.';
$string['stackBlock_parsons_invalid_item-width_value'] = 'El valor de \'item-width\' en el encabezado del bloque de Parson debe ser una cadena de caracteres que contenga un entero positivo.';
$string['stackBlock_parsons_invalid_rows_value'] = 'El valor de \'filas\' en el encabezado del bloque de Parson debe ser una cadena de caracteres que contenga un entero positivo.';
$string['stackBlock_parsons_length_num'] = 'El valor numérico de longitud debe ser un entero positivo y no debe contener caracteres adicionales ni tipos numéricos.';
$string['stackBlock_parsons_overdefined_dimension'] = 'Al definir la relación de aspecto de un bloque de Parson, solo se debe definir el ancho o la altura, no ambos.';
$string['stackBlock_parsons_param'] = 'El bloque de Parson solo admite estos parámetros en este contexto: \'{$a->param}\'.';
$string['stackBlock_parsons_ref'] = 'El bloque de Parson solo admite la referencia a entradas presentes en la misma sección CASText. \'{$a->var}\' no existe aquí.';
$string['stackBlock_parsons_underdefined_dimension'] = 'Al definir la relación de aspecto de un bloque de Parson, se debe definir el ancho o la altura de las listas.';
$string['stackBlock_parsons_underdefined_grid'] = 'Al definir \'filas\' para un bloque de Parson también se deben definir \'columnas\'.';
$string['stackBlock_parsons_unknown_mathjax_version'] = 'El bloque de Parson solo admite versiones de MathJax {$a->mjversion} para el parámetro mathjax.';
$string['stackBlock_parsons_unknown_named_version'] = 'El bloque Parson solo admite versiones llamadas: {$a->version}.';
$string['stackBlock_parsons_unknown_transpose_value'] = 'La transposición debe ser \'verdadera\' o \'falsa\'.';
$string['stackBlock_parsons_used_header'] = 'Construya su solución aquí:';
$string['stackBlock_parsons_width'] = 'El ancho de un bloque de Parson debe utilizar una unidad de longitud CSS conocida.';
$string['stackBlock_parsons_width_num'] = 'La parte numérica del ancho de un bloque de Parson debe ser un número sin formato y no debe contener caracteres adicionales.';
$string['stackBlock_proof_incorrect_header_length'] = 'Los encabezados deben ser una matriz que contenga un solo encabezado; Utilice \'available_header\' para actualizar el encabezado de la lista disponible.';
$string['stackBlock_proof_mode_index'] = 'No se admite el uso de \'índice\' cuando se utiliza el bloque de Parson para la evaluación de pruebas.';
$string['stackBlock_unknownBlock'] = 'El siguiente bloque es desconocido:';
$string['stackBlock_unknown_sortable_option'] = 'Se encontraron opciones de clasificación desconocidas; se ignoran las siguientes:';
$string['stackCas_CASError'] = 'El CAS regresó el/los error(es) siguiente(s):';
$string['stackCas_CASErrorCaused'] = 'causó el siguiente error:';
$string['stackCas_MissingAt'] = 'A Usted le falta un signo de <code>@</code>.';
$string['stackCas_MissingCloseDisplay'] = 'Falta  <code>\\]</code>.';
$string['stackCas_MissingCloseHTML'] = 'Falta etiqueta de cierre HTML';
$string['stackCas_MissingCloseInline'] = 'Falta  <code>\\)</code>.';
$string['stackCas_MissingClosingRawCAS'] = 'Falta <code>#}</code>.';
$string['stackCas_MissingClosingTeXCAS'] = 'Falta <code>#}</code>.';
$string['stackCas_MissingDollar'] = 'A Usted le falta un signo de  <code>$</code>';
$string['stackCas_MissingOpenDisplay'] = 'Falta <code>\\[</code>.';
$string['stackCas_MissingOpenHTML'] = 'Falta etiqueta de apertura HTML';
$string['stackCas_MissingOpenInline'] = 'Falta <code>\\(</code>.';
$string['stackCas_MissingOpenRawCAS'] = 'Falta <code>{#</code>.';
$string['stackCas_MissingOpenTeXCAS'] = 'Falta <code>{@</code>.';
$string['stackCas_MissingStars'] = 'Al parecer le faltan caracteres * . A lo mejor Usted quiso escribir {$a->cmd}.';
$string['stackCas_MissingString'] = 'Le falta un signo de comillas <code>"</code>.';
$string['stackCas_StringOperation'] = 'Una cadena_de_caracteres parece estar en el lugar equivocado. Este es el problemilla: <code>{$a->issue}</code>.';
$string['stackCas_allFailed'] = 'CAS no regresó ninguna expresión evaluada. Por favor revise su conexión con el CAS.';
$string['stackCas_apostrophe'] = 'No sepermiten apóstrofes en las respuestas.';
$string['stackCas_applyfunmakestring'] = 'El nombre de la función no puede ser  una cadena de caracteres en <code>{$a->type}</code>.';
$string['stackCas_applyingnonobviousfunction'] = 'Esta llamada a función {$a->problem} al parecer no tiene un nombre de función fácilmente visible. Por razones de seguridad Usted tendría que simplificar la llamada para que el validador pueda ver el nombre de la función.';
$string['stackCas_backward_inequalities'] = 'Las desigualdades no-estrictas como.  \\( \\leq \\) or \\( \\geq \\) deben escribirse como  <= o >=. Usted tiene  {$a->cmd} en su expresión, lo que está al-revesado.';
$string['stackCas_badLogIn'] = 'Usted ha escrito la expresióm <tt>In</tt>. El logaitmo natural se escribe como <tt>ln</tt> en minúsculas. ("Lima Noviembre" no "India Noviembre")';
$string['stackCas_baddotdot'] = 'Usando la multiplicación de matrices "." Está prohibido usar flotantes escalares, utilice la multiplicación normal "*" en su lugar para obtener el mismo resultado.';
$string['stackCas_badpostfixop'] = 'Usted tiene un operador "postfix" malo en su expresión.';
$string['stackCas_bracketsdontmatch'] = 'Los paréntesis están anidados incorrectamente en la expresión: {$a->cmd}.';
$string['stackCas_callingasfunction'] = 'El llamar al resultado de un llamado de función está prohibido {$a->problem}, lambdas todavía están permitidas.';
$string['stackCas_chained_inequalities'] = 'Parece que Usted tiene "desigualdades encadenadas" como por ejemplo;   \\(a < b < c\\). Usted necesita conectar las desigualdades individuales con operaciones lógicas tales como  \\(and\\)  o  \\(or\\).';
$string['stackCas_decimal_usedcomma'] = '¡Ha utilizado el punto <code>.</code>, pero debe utilizar la coma <code>,</code> como separador decimal!.';
$string['stackCas_decimal_usedthreesep'] = 'Ha utilizado el punto <code>.</code>, la coma <code>,</code> y el punto y coma <code>;</code> en su expresión. Sea coherente con la posición decimal (<code>.</code> o <code>,</code>) y los separadores de elementos de la lista (<code>,</code> o <code>;</code>) . ¡Su respuesta es ambigua!';
$string['stackCas_errorpos'] = 'Alrededor de la línea {$a->line} caracter {$a->col}.';
$string['stackCas_failedReturn'] = 'CAS no pudo regresar ningún dato.';
$string['stackCas_failedReturnOne'] = 'CAS no pudo regresar algunos datos.';
$string['stackCas_failedValidation'] = 'Falló la validación del CASText';
$string['stackCas_failedtimeout'] = 'CAS no pudo devolver ningún dato debido a que se agotó el tiempo de espera.';
$string['stackCas_finalChar'] = '\'{$a->char}\' es un caracter final inválido en {$a->cmd}';
$string['stackCas_forbiddenChar'] = 'Los comandos (órdenes) CAS no pueden contener los siguientes caracteres:  {$a->char}.';
$string['stackCas_forbiddenFunction'] = 'Función prohibida: {$a->forbid}.';
$string['stackCas_forbiddenOperator'] = 'Operador prohibido: {$a->forbid}.';
$string['stackCas_forbiddenVariable'] = 'Variable o constante prohibida: {$a->forbid}.';
$string['stackCas_forbiddenWord'] = 'La expresión {$a->forbid} está prohibida';
$string['stackCas_forbiddenntuple'] = 'Las coordenadas no están permitidas en esta entrada.';
$string['stackCas_functionNameSubstitutionToForbiddenOne'] = 'La función de nombre "{$a->name}" está potencialmente mapeada, usando sustituciones, a "{$a->trg}" la cual es una prohibida.';
$string['stackCas_inputsdefined'] = 'Usted no puede usar nombres de ingreso como variables. Usted ha intentado definir <code>{$a}</code>';
$string['stackCas_invalidCommand'] = 'Comandos CAS no válidos.';
$string['stackCas_missingLeftBracket'] = 'Te falta un paréntesis izquierdo <span class="stacksyntaxexample">{$a->bracket}</span> en la expresión: {$a->cmd}.';
$string['stackCas_missingRightBracket'] = 'Te falta un paréntesis derecho <span class="stacksyntaxexample">{$a->bracket}</span> en la expresión: {$a->cmd}.';
$string['stackCas_nested_function_declaration'] = 'Ahora está prohibida la definición de una función adentro de otra función; use renombrado de la función si es que necesita cambiar definiciones de función desde dentro de otra función.';
$string['stackCas_newline'] = 'No se permiten caracteres de línea nueva (newline) en las respuestas';
$string['stackCas_noFunction'] = 'El uso de la función {$a->forbid} en el término {$a->term} no está permitido en este contexto.';
$string['stackCas_operatorAsVariable'] = 'Operador {$a->op} interpretado como variable, revisar sintaxis.';
$string['stackCas_overlyComplexSubstitutionGraphOrRandomisation'] = 'El código de la pregunta tiene sustituciones muy complejas de aleatorización de construcciones en un forma incremental y difícil de validar; la validación ha caducado para responder a esto y simplificar la lógica; compruebe la documentación para guía.';
$string['stackCas_overrecursivesignatures'] = 'El código de la pregunta incluye demasiadas funciones definidas mediante mapeo.';
$string['stackCas_percent'] = '% encontrado en expresión {$a->expr}.';
$string['stackCas_qmarkoperators'] = 'Los signos de interrogación no están permitidos en las respuestas.';
$string['stackCas_redefine_built_in'] = 'Redefinir una función incorporada "{$a->name}" está prohibido.';
$string['stackCas_redefinitionOfConstant'] = 'La redefinición de constantes clave está prohibida: {$a->constant}.';
$string['stackCas_reserved_function'] = 'La función de nombre "{$a->name}" no está permitida en esta pregunta. Por favor póngase en contacto con su profesor.';
$string['stackCas_spaces'] = 'Se encontraron espacios ilegales en la expresión {$a->expr}.';
$string['stackCas_spuriousop'] = 'Operador desconocido: {$a->cmd}.';
$string['stackCas_studentInputAsFunction'] = 'Usar lo escrito por un estudiante como el nombre de una función no está permitido.';
$string['stackCas_trigexp'] = 'Usted no puede obtener la potencia de una función trig al escribir {$a->forbid}. El cuadrado del valor de  \\(\\{$a->identifier}(x)\\) se escribe como <tt>{$a->identifier}(x)^2</tt>.  La inversa de \\(\\{$a->identifier}(x)\\) se escribe <tt>a{$a->identifier}(x)</tt> y no \\(\\{$a->identifier}^{-1}(x)\\) .';
$string['stackCas_triginv'] = 'Las funciones trigonométricas inversas se escriben como {$a->goodinv} no {$a->badinv}.';
$string['stackCas_trigop'] = 'Usted debe de aplicarle {$a->trig} a un argumento. Usted parece tener {$a->forbid}, lo que pareciera indicar que Usted intentó usar {$a->trig} como un nombre de variable.';
$string['stackCas_trigparens'] = 'Cuando Usted aplica una función trigonométrica a su argumento, Usted debe de usar paréntesis redondos, no corchetes [paréntesis cuadrados]. Por ejemplo: {$a->forbid}.';
$string['stackCas_trigspace'] = 'Para aplicar una función trigonométrica a sus argumentos Usted debe de emplear paréntesis, no espacios. Por ejemplo use {$a->trig} en su lugar.';
$string['stackCas_underscores'] = 'El siguiente uso de caracteres de guión_bajo no está permitido: {$a}.';
$string['stackCas_unencpsulated_comma'] = 'Una coma aparece de forma extraña en su expresión. Las comas se usan para separar ítems dentro de las listas, conjuntos, etc. Usted necesita usar un PUNTO DECIMAL, no una coma, en los números de punto flotante.';
$string['stackCas_unencpsulated_semicolon'] = 'Un punto y coma (;) en su expresión aparece de una manera extraña. Los puntos y comas se utilizan para separar elementos en listas, conjuntos, etc.';
$string['stackCas_unitssynonym'] = 'Aparentemente Usted tiene unidades {$a->forbid}. ¿Acaso quería usar unidades {$a->unit}?';
$string['stackCas_unknownFunction'] = 'Función desconocida: {$a->forbid} en el término {$a->term}.';
$string['stackCas_unknownFunctionCase'] = 'La entrada es sensible a minúsculas/MAYÚSCULAS: {$a->forbid} es una función desconocida. ¿Habrá Usted querido poner {$a->lower}?';
$string['stackCas_unknownSubstitutionPotenttiallyMaskingAFunctionName'] = 'La función de nombre "{$a->name}" está potencialmente redefinida en sustituciones no claras.';
$string['stackCas_unknownUnitsCase'] = 'La escritura de unidades es sensible a MAYÚSCULAS/minúsculas: {$a->forbid} es una unidad desconocida.¿Acaso Usted quería una unidad de entre la lista siguiente {$a->unit}?';
$string['stackCas_unknownVariableCase'] = 'La entrada es sensible a minúsculas/MAYÜSCULAS: {$a->forbid} es una variable desconocida. ¿Acaso quiso Usted poner {$a->lower}?';
$string['stackCas_useinsteadChar'] = 'Por favor remplace <span class="stacksyntaxexample">{$a->bad}</span> con \'<span class="stacksyntaxexample">{$a->char}</span>\'.';
$string['stackDoc_404'] = 'Error 404';
$string['stackDoc_404message'] = 'Archivo no encontrado.';
$string['stackDoc_AnswerTestResults'] = 'Resultados de prueba de respuesta

Esta página expone los resultados de ejecutar pruebas de respuesta en casos de prueba de STACK. Esta página es generada automáticamente desde las pruebas de unidad de STACK y está diseñada para mostrar a los autores de preguntas cuales pruebas de respuesta de hecho lo hacen. Esto incluye casos en donde las pruebas de respuesta actualmente fallan, lo que da una calificación esperada negativa. Los comentarios y más casos de prueba serán muy bien recibidos.';
$string['stackDoc_directoryStructure'] = 'Estructura del directorio';
$string['stackDoc_docs'] = 'Documentación de STACK';
$string['stackDoc_docs_desc'] = 'La <a href="{$a->link}">documentación de STACK</a>: una wiki estática local que documenta el código que realmente tienes ejecutándose en tu servidor.';
$string['stackDoc_home'] = 'Hogar de documentación';
$string['stackDoc_index'] = 'Índice de categoría';
$string['stackDoc_licence'] = 'La documentación de STACK está licenciada bajo una <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Licencia Internacional Creative Commons Attribution-ShareAlike 4.0</a>.';
$string['stackDoc_licence_alt'] = 'Licencia Creative Commons';
$string['stackDoc_siteMap'] = 'Mapa del sitio';
$string['stackDoc_siteMap_en'] = 'Mapa del sitio en Inglés';
$string['stackDoc_version'] = 'Su sitio está corriendo STACK versión {$a}.';
$string['stackInstall_input_intro'] = 'Esta página le permite probar como es que el STACK interpreta varias entradas hechas por un estudiante. Actualmente esto solamente revisa con las configuraciones más liberales, tratando de adoptar una sintaxis informal y de insertar estrellas. <br />Las columnas \'V\' registran validez juzgada por PHP y el CAS. V1 = PHP válido, V2 = CAS válido.';
$string['stackInstall_input_title'] = 'Una suite de pruebas para validación de la respuesta del estudiante';
$string['stackInstall_input_title_desc'] = 'El <a href="{$a->link}">input-tests script</a> proporciona casos de prueba acerca de como es que STACK interpreta expresiones matemáticas. También son útiles para aprender por ejemplo.';
$string['stackInstall_replace_dollars_desc'] = 'El <a href="{$a->link}">fix maths delimiters script</a> (script para corregir delimitadores matemáticos) puede usarse para remplazar delimitadores de estilo antiguo, como<code>@...@</code>, <code>$...$</code> y <code>$$...$$</code> en sus preguntas, con las nuevas recomendaciones  <code>{@...@}</code>, <code>\\(...\\)</code> y <code>\\[...\\]</code>.';
$string['stackInstall_testsuite_choose'] = 'Por favor, elija una prueba de respuesta.';
$string['stackInstall_testsuite_errors'] = 'Esta pregunta generó los errores siguientes al momento de la ejecución.';
$string['stackInstall_testsuite_fail'] = '¡ No pasaron todas las pruebas!';
$string['stackInstall_testsuite_failingtests'] = 'Pruebas que fallaron';
$string['stackInstall_testsuite_failingupgrades'] = 'Preguntas que fallaron en la actualización.';
$string['stackInstall_testsuite_intro'] = 'Ésta página le permite ver ejemplos de pruebas de respuesta, y probar si es que las pruebas de respuesta de STACK están funcionando correctamente. Tenga en cuenta que las pruebas de respuesta solamente pueden comprobarse mediante interfaz web. Si la calificación es negativa esto indica una falla esperada, con -1 siendo una falla debida a un error interno esperado.';
$string['stackInstall_testsuite_nodeployedseeds'] = 'Preguntas con variantes aleatorias, pero sin semillas implementadas';
$string['stackInstall_testsuite_nogeneralfeedback'] = 'Preguntas que no tienen retroalimentación general: ¡a los estudiantes realmente les interesan las soluciones trabajadas!';
$string['stackInstall_testsuite_notests'] = 'Preguntas sin pruebas: ¡por favor añada algunas!';
$string['stackInstall_testsuite_pass'] = '¡ Pasaron todas las pruebas!';
$string['stackInstall_testsuite_title'] = 'Una suite de prueba para las pruebas de Respuesta de STACK';
$string['stackInstall_testsuite_title_desc'] = 'El <a href="{$a->link}">answer-tests script</a> verifica que las pruebas de las respuestas se estén desempeñando correctamente. Estas pruebas son útiles  también para aprender mediante ejemplo como puede usarse cada prueba-de-respuesta.';
$string['stackOptions_AnsTest_values_AlgEquiv'] = 'EquivalenteAlgebraico';
$string['stackOptions_AnsTest_values_AlgEquivNouns'] = 'NombresEquivalenteAlgebraico';
$string['stackOptions_AnsTest_values_CasEqual'] = 'CASIgual';
$string['stackOptions_AnsTest_values_CompSquare'] = 'CuadradoCompletado';
$string['stackOptions_AnsTest_values_Diff'] = 'Difer';
$string['stackOptions_AnsTest_values_EqualComAss'] = 'IgualdadConmAso';
$string['stackOptions_AnsTest_values_Equiv'] = 'EquivalenteRazonando';
$string['stackOptions_AnsTest_values_EquivFirst'] = 'EquivalentePrimero';
$string['stackOptions_AnsTest_values_Expanded'] = 'Expandida';
$string['stackOptions_AnsTest_values_FacForm'] = 'FacForm';
$string['stackOptions_AnsTest_values_GT'] = 'Núm-MayorQue';
$string['stackOptions_AnsTest_values_GTE'] = 'Núm-MayorIgualA';
$string['stackOptions_AnsTest_values_Int'] = 'Int';
$string['stackOptions_AnsTest_values_LowestTerms'] = 'TérminosMenores';
$string['stackOptions_AnsTest_values_NumAbsolute'] = 'NúmAbsoluto';
$string['stackOptions_AnsTest_values_NumDecPlaces'] = 'NúmDecimales';
$string['stackOptions_AnsTest_values_NumDecPlacesWrong'] = 'NumDecPlacesWrong';
$string['stackOptions_AnsTest_values_NumRelative'] = 'NúmRelativo';
$string['stackOptions_AnsTest_values_NumSigFigs'] = 'NúmDigiSig';
$string['stackOptions_AnsTest_values_PartFrac'] = 'PartFrac';
$string['stackOptions_AnsTest_values_PropLogic'] = 'LogicaProposicional';
$string['stackOptions_AnsTest_values_SRegExp'] = 'SRegExp';
$string['stackOptions_AnsTest_values_SameType'] = 'MismoTipo';
$string['stackOptions_AnsTest_values_Sets'] = 'Conjuntos';
$string['stackOptions_AnsTest_values_SigFigsStrict'] = 'DigSignifEstrict';
$string['stackOptions_AnsTest_values_SingleFrac'] = 'ÚnicaFrac';
$string['stackOptions_AnsTest_values_String'] = 'Cadena';
$string['stackOptions_AnsTest_values_StringSloppy'] = 'CadenaPocoRigurosa';
$string['stackOptions_AnsTest_values_SubstEquiv'] = 'SubstEquiv';
$string['stackOptions_AnsTest_values_SysEquiv'] = 'SisEquiv';
$string['stackOptions_AnsTest_values_UnitsAbsolute'] = 'UnidadesAbsolutas';
$string['stackOptions_AnsTest_values_UnitsRelative'] = 'UnidadesRelativas';
$string['stackOptions_AnsTest_values_UnitsSigFigs'] = 'UnidadesDigitSig';
$string['stackOptions_AnsTest_values_UnitsStrictAbsolute'] = 'UnidadesEstrictoAbsolut';
$string['stackOptions_AnsTest_values_UnitsStrictRelative'] = 'UnidadesEstrictoRelativ';
$string['stackOptions_AnsTest_values_UnitsStrictSigFigs'] = 'UnidadesEstricDigitSig';
$string['stackOptions_AnsTest_values_Validator'] = 'Validador';
$string['stack_library'] = 'Biblioteca de preguntas STACK';
$string['stack_library_destination'] = 'Las preguntas se importarán dentro de la siguiente categoría:';
$string['stack_library_error'] = 'Algo salió mal. Actualice la página e inténtelo nuevamente.';
$string['stack_library_help'] = 'En lugar de crear su propia pregunta, siga este enlace para ir a la biblioteca de preguntas STACK. La biblioteca de preguntas STACK contiene muchas preguntas STACK prediseñadas listas para que las importes a Moodle. Luego usted puede usarlos tal como están o editarlos para adaptarlos a sus necesidades.';
$string['stack_library_import'] = 'Importar';
$string['stack_library_importlist'] = 'Preguntas importadas:';
$string['stack_library_instructions_one'] = 'Seleccione una pregunta de la lista a continuación para verla aquí.';
$string['stack_library_instructions_three'] = 'Utilice la lista desplegable para cambiar la categoría.';
$string['stack_library_instructions_two'] = 'Haga clic en “Importar” para importar la pregunta dentro de la categoría de preguntas actual.';
$string['stack_library_not_stack'] = 'Esta no es una pregunta de STACK y, por lo tanto, no se puede representar completamente aquí, pero usted aún puede importarla.';
$string['stack_library_qb_return'] = 'Regresar al banco de preguntas';
$string['stack_library_quiz_return'] = 'Regresar al examen';
$string['stack_library_selected'] = 'Pregunta mostrada:';
$string['stack_library_success'] = 'Importación exitosa de:';
$string['stackfilesizeerror'] = 'Uno o más archivos (por ejemplo, imágenes) tienen un tamaño superior a 1 MB.';
$string['stackfileuseerror'] = 'Uno o más archivos (por ejemplo, imágenes) están asociados internamente con el/la {$a}, pero ninguno aparece que sea usado en el texto mismo actual.';
$string['stackversioncomment'] = 'Esta pregunta parece utilizar comentarios de estilo /*...*/ en {$a->qfield}, que ya no son compatibles.';
$string['stackversionedited'] = 'Esta pregunta fue escrita con STACK versión {$a}.';
$string['stackversionerror'] = 'Esta pregunta usa {$a->pat} en el/la {$a->qfield}, que cambió en la versión  {$a->ver} de STACK y ya no está soportado.';
$string['stackversionerroralt'] = 'Una alternativa es {$a}.';
$string['stackversionmulerror'] = 'Esta pregunta tiene una entrada que usa la opción "mul", la cual no está soportada después de STACK versión 4.2. Por favor, edite esta pregunta.';
$string['stackversionnone'] = 'Esta pregunta no ha sido editada desde que se introdujo la numeración de variante de pregunta en STACK 4.2. Por favor revise cuidadosamente su pregunta.';
$string['stackversionnow'] = 'La versión actual de STACK es {$a}.';
$string['stackversionregexp'] = 'La prueba de respuesta RegExp no está soportada a partir de STACK versión 4.3.  Por favor use en su lugar la nueva SRegExp.';
$string['stop'] = '[detener]';
$string['strictsyntax'] = 'Sintaxis estricta';
$string['strictsyntax_help'] = 'Esta opción ya no es usada y será removida.';
$string['strlengtherror'] = 'La cadena no puede exceder de 255 caracteres de longitud.';
$string['studentValidation_invalidAnswer'] = 'Esta respuesta es inválida.';
$string['studentValidation_listofunits'] = 'Las unidades encontradas en su respuesta fueron: {$a}';
$string['studentValidation_listofvariables'] = 'Las variables encontradas en su respuesta fueron: {$a}';
$string['studentValidation_notes'] = '(Este ingreso no es evaluado automáticamente por STACK. )';
$string['studentValidation_yourLastAnswer'] = 'Su última respuesta fue interpretada como sigue: {$a}';
$string['studentanswer'] = 'Respuesta del estudiante';
$string['studentinputtoolong'] = 'Su entrada es más larga que la permitida por STACK.';
$string['switchtovariant'] = 'Cambiar a variante:';
$string['symbolicprtcorrectfeedback'] = '<span style="font-size: 1.5em; color:green;"><i class="fa fa-check"></i></span>';
$string['symbolicprtincorrectfeedback'] = '<span style="font-size: 1.5em; color:red;"><i class="fa fa-times"></i></span>';
$string['symbolicprtpartiallycorrectfeedback'] = '<span style="font-size: 1.5em; color:orange;"><i class="fa fa-adjust"></i></span>';
$string['syntaxattribute'] = 'Atributo de pista-sugerencia';
$string['syntaxattribute_help'] = 'La pista-sugerencia de sintaxis aparecerá como un *value* (*valor*) editable o un *placeholder* (*remplazable*) no-editable';
$string['syntaxattributeplaceholder'] = 'Remplazable';
$string['syntaxattributevalue'] = 'Valor';
$string['syntaxhint'] = 'Pista de sintaxis';
$string['syntaxhint_help'] = 'La pista de sintaxis aparecerá en la caja de respuesta siempre que esta sea dejada vacía por el estudiante.';
$string['tans'] = 'TAns (Respuesta del profesor)';
$string['tans_help'] = 'Éste es el segundo argumento para la función de prueba de respuesta. En pruebas  asimétricas, ésta se considera que es la "Respuesta del profesor", aunque podría ser cualquier expresión CAS válida, y puede depender de las variables de la pregunta o las variables de la restroalimentación.';
$string['tansrequired'] = 'TAns (Respuesta del profesor) no puede estar vacía';
$string['teacheranswer'] = 'Respuesta del profesor';
$string['teacheranswercase'] = 'Usar las respuestas del profesor como caso de prueba';
$string['teacheranswerempty'] = 'Esta entrada puede dejarse vacía.';
$string['teacheranswershow'] = 'La respuesta \\( {$a->display} \\), que se puede escribir como {$a->value}, sería correcta.';
$string['teacheranswershow_disp'] = 'La respuesta {$a->display} sería correcta.';
$string['teacheranswershow_mcq'] = 'Una respuesta correcta es: {$a->display}';
$string['teacheranswershownotes'] = 'No está proporcionada una respuesta correcta para esta entrada.';
$string['teachersanswer'] = 'Respuesta modelo';
$string['teachersanswer_help'] = 'El profesor debe especificar una respuesta modelo para cada entrada. Esta debe der una cadena Maxima válida, y puede estar formada a partir de las variables de la pregunta.';
$string['testallincategory'] = 'Probar todas las preguntas en esta categoría';
$string['testalltitle'] = 'Probar todas las preguntas en este contexto';
$string['testcasexresult'] = 'Caso de prueba {$a->no} {$a->result}';
$string['testingquestion'] = 'Probando la pregunta {$a}';
$string['testingquestionvariants'] = 'Probando variantes de pregunta';
$string['testinputs'] = 'Entradas de prueba';
$string['testinputsimpwarning'] = 'Por favor tenga en cuenta que las entradas de prueba están siempre  <em>sin_simplificar</em>, sin importar la configuración de la pregunta o de laconfiguración de la  opción del  Árbol de Respuesta Potencial. Por favor use <tt>ev(...,simp)</tt> para simplificar una parte o todas las expresiones de entrada de prueba.';
$string['testoptions'] = 'Opciones de prueba';
$string['testoptions_help'] = 'Este campo es para que el profesor grabe el propósito de la prueba.';
$string['testoptionsinvalid'] = 'Las opciones de prueba son inválidas: {$a}';
$string['testoptionsrequired'] = 'Las opciones de prueba son necesarias para esta prueba.';
$string['testpassesandfails'] = '{$a->passes} pasadas y {$a->fails} fallas.';
$string['testsuitecolerror'] = 'Errores CAS';
$string['testsuitecolmark'] = 'Calificación';
$string['testsuitecolpassed'] = '?';
$string['testsuitefail'] = '<span style="color:red;"><i class="fa fa-times"></i></span>';
$string['testsuitefeedback'] = 'Retroalimentación';
$string['testsuiteknownfail'] = '<span style="color:orange;"><i class="fa fa-adjust"></i></span>';
$string['testsuiteknownfailmaths'] = '<span style="color:orange;"><i class="fa fa-adjust"></i>!</span>';
$string['testsuitenotests'] = 'Número de pruebas: {$a->no}.';
$string['testsuitepass'] = '<span style="color:green;"><i class="fa fa-check"></i></span>';
$string['testsuiteteststook'] = 'Las pruebas se tardaron {$a->time} segundos.';
$string['testsuiteteststookeach'] = 'Promedio por prueba: {$a->time} segundos.';
$string['testthisvariant'] = 'Cambiar para probar esta variante';
$string['texdisplaystyle'] = 'Ecuación en estilo_de_visualización';
$string['texinlinestyle'] = 'Ecuación en estilo_en-línea';
$string['tidyquestion'] = '<i class="fa fa-sort-amount-asc"></i> Ingreso ordenado y PRTs';
$string['tidyquestionx'] = 'Renombrar las partes de pregunta {$a}';
$string['todo_desc'] = 'La página <a href="{$a->link}">"por hacer"</a> encuentra preguntas con bloques <tt>[[todo]]</tt>.';
$string['todowarning'] = 'Usted tiene bloques ara-hacer no-resueltos en "{$a->field}".';
$string['trig_degrees_radians_fact'] = '\\[
360^\\circ= 2\\pi \\hbox{ radians},\\quad
1^\\circ={2\\pi\\over 360}={\\pi\\over 180}\\hbox{ radians}
\\]
\\[
1 \\hbox{ radian} = {180\\over \\pi} \\hbox{ degrees}
\\approx 57.3^\\circ
\\]';
$string['trig_degrees_radians_name'] = 'Grados y Radianes';
$string['trig_standard_identities_fact'] = '\\[\\sin(a\\pm b)\\ = \\ \\sin(a)\\cos(b)\\ \\pm\\ \\cos(a)\\sin(b)\\]
\\[\\cos(a\\ \\pm\\ b)\\ = \\ \\cos(a)\\cos(b)\\ \\mp \\sin(a)\\sin(b)\\]
\\[\\tan (a\\ \\pm\\ b)\\ = \\ {\\tan (a)\\ \\pm\\ \\tan (b)\\over1\\ \\mp\\ \\tan (a)\\tan (b)}\\]
\\[ 2\\sin(a)\\cos(b)\\ = \\ \\sin(a+b)\\ +\\ \\sin(a-b)\\]
\\[ 2\\cos(a)\\cos(b)\\ = \\ \\cos(a-b)\\ +\\ \\cos(a+b)\\]
\\[ 2\\sin(a)\\sin(b) \\ = \\ \\cos(a-b)\\ -\\ \\cos(a+b)\\]
\\[ \\sin^2(a)+\\cos^2(a)\\ = \\ 1\\]
\\[ 1+{\\rm cot}^2(a)\\ = \\ {\\rm cosec}^2(a),\\quad \\tan^2(a) +1 \\ = \\ \\sec^2(a)\\]
\\[ \\cos(2a)\\ = \\ \\cos^2(a)-\\sin^2(a)\\ = \\ 2\\cos^2(a)-1\\ = \\ 1-2\\sin^2(a)\\]
\\[ \\sin(2a)\\ = \\ 2\\sin(a)\\cos(a)\\]
\\[ \\sin^2(a) \\ = \\ {1-\\cos (2a)\\over 2}, \\qquad \\cos^2(a)\\ = \\ {1+\\cos(2a)\\over 2}\\]';
$string['trig_standard_identities_name'] = 'Identidades Trigonométricas Estándar';
$string['trig_standard_values_fact'] = '\\[\\sin(45^\\circ)={1\\over \\sqrt{2}}, \\qquad \\cos(45^\\circ) = {1\\over \\sqrt{2}},\\qquad
\\tan( 45^\\circ)=1
\\]
\\[
\\sin (30^\\circ)={1\\over 2}, \\qquad \\cos (30^\\circ)={\\sqrt{3}\\over 2},\\qquad
\\tan (30^\\circ)={1\\over \\sqrt{3}}
\\]
\\[
\\sin (60^\\circ)={\\sqrt{3}\\over 2}, \\qquad \\cos (60^\\circ)={1\\over 2},\\qquad
\\tan (60^\\circ)={ \\sqrt{3}}
\\]';
$string['trig_standard_values_name'] = 'Valores Trigonométricas Estándar';
$string['true'] = 'Verdadero';
$string['truebranch'] = 'Rama verdadera';
$string['truebranch_help'] = 'Estos campos controlan lo que sucede cuando pasa el examen de respuesta

### Mod y puntaje
Cómo se ajusta el puntaje. = medias configura la puntuación a valores particulares, +/- medias añade o resta la puntuación dada del total actual.

### Castigo
En modo adaptativo o interactivo, acumula dicha cantidad de castigo.

### Siguiente
Si es que se va a otro nodo, y si así fuera a cual, o se detiene.

### Nota de respuesta
Esta es una etiqueta que es clave para fines de reporte. Está diseñada para grabar la ruta única a lo largo del árbol, y la resultante de cada prueba de respuesta. Esto es generado automáticamente, pero puede ser cambiado a algo que tenga significado.';
$string['unauthorisedbulktest'] = 'Usted no tiene acceso apropiado a ninguna pregunta STACK';
$string['undeploy'] = 'Des-desplegar';
$string['unknown_block'] = '¡Bloque desconocido de tipo {$a->type} solicitado!';
$string['unrecognisedfactstags'] = 'Las siguientes marcas de hechos (\'\'facts tags\'\') no son reconocidad: {$a->tags}.';
$string['usetextarea'] = 'Le recomendamos encarecidamente que utilice el editor "textarea" para las preguntas STACK. Otros editores pueden cambiar el contenido, y es probable que esto rompa las preguntas con Javascript y otro código cuando guarde su pregunta. Vaya a Preferencias -> Preferencias del editor y elija "Área de texto sin formato".';
$string['variant'] = 'Variante';
$string['variants'] = 'Variantes';
$string['variantsselectionseed'] = 'Grupo aleatorio';
$string['variantsselectionseed_help'] = 'Normalmente Usted puede dejar esta caja vacía. Sin embargo, si quiere que dos diferentes preguntas en un examen usen la misma semilla aleatoria, entonces escriba la misma cadena de texto en esta caja para ambas preguntas (y despliegue el mismo conjunto de semillas aleatorias, si Usted está usando las versiones desplegadas) y las semillas aleatorias para ambas preguntas serán sincronizadas.';
$string['verifyquestionandupdate'] = 'Verificar el texto de la pregunta y actualizar el formato';
$string['version'] = 'Versión';
$string['yamlrecommended'] = 'Está recomendada la instalación de la biblioteca YAML para Stack.';
$string['youmustconfirm'] = 'Usted debe de confirmar aquí.';
