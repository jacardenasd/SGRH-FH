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
 * Strings for component 'teamup', language 'es_mx', version '4.4'.
 *
 * @package     teamup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abc'] = 'Serie #';
$string['addanewquestion'] = 'Añadir una pregunta nueva';
$string['addnewcriterion'] = '+ Añadir criterio';
$string['addnewquestion'] = 'Añadir pregunta nueva';
$string['addnewsubcriterion'] = 'Añadir nuevo subcriterio';
$string['addtogrouping'] = 'Añadir al agrupamiento';
$string['afterdate'] = 'Usted no podrá modificar su cuestionario después de esta fecha.';
$string['aggFilter'] = 'Filtro activo';
$string['aggregate'] = 'Agregar';
$string['aggregatelabel'] = 'Agrupar individuos similares';
$string['all'] = 'todos';
$string['allstudents'] = 'Todos los estudiantes';
$string['analyzeaggregatewarning'] = '<br><span style="color:{color};"> Criterio {answer}: <b> {nbstudent} </b> => Ellos probablemente tendrán {nbgroup} grupos de {nbstudentgroup} estudiantes con {reste} estudiantes repartidos</span>';
$string['analyzeaggregatewarningOK'] = '<br><span style="color:{color};"> Criterio {answer}: <b> {nbstudent} </b> => Ellos probablemente tendrán {nbgroup} grupos de {nbstudentgroup} estudiantes</span>';
$string['analyzebalancewarning'] = '<span style=\\"color:red;\\">El resultado no es numérico; elija una pregunta apropiada, por favor.</span>';
$string['analyzeclustercriterion'] = 'El número de estudiantes que cumplen este criterio es <b> {nbstudent} </b> distribuidos en <b> {nbteam} </b> equipos';
$string['analyzeclustersuccess'] = '<br>Podría haber dos estudiantes en todos los grupos con estos criterios.';
$string['analyzeclusterwarning'] = '<br><span style="color:red;">Atención; no se pueden tener dos estudiantes en todos los grupos con estos criterios.</span>';
$string['analyzedistributecriterion'] = '<br> Criterio {answer} : <b>{nbstudent}</b>=> <b>{status}</b>';
$string['analyzedistributesuccess'] = 'Sin problemas para distribuirlos en <b> {nbteam} </b> equipos';
$string['analyzedistributewarning'] = '<span style=\\"color:red;\\">Atención; hay un problema para distribuirlos en   <b> {nbteam} </b> equipos</span>';
$string['and'] = 'Y';
$string['answers'] = 'Respuestas';
$string['answersSubmitted'] = 'Sus respuestas fueron enviadas';
$string['answertype'] = 'Tipo de respuesta';
$string['any'] = 'cualquiera';
$string['anyOption'] = 'Seleccionar cualquiera (o ninguno) de los siguientes:';
$string['assignrandomly'] = 'Asignar aleatoriamente';
$string['atleastoneOption'] = 'Seleccione <strong>al menos uno</strong> de los siguientes:';
$string['average'] = 'Promedio';
$string['averagesuccess'] = 'El promedio está muy cerca del promedio global';
$string['averagewarning'] = 'El promedio está demasiado alejado del promedio global';
$string['balance'] = 'Balance';
$string['balancelabel'] = 'Nivel de balance';
$string['bankQuestion'] = 'Banco de preguntas';
$string['bidon'] = 'falso';
$string['bornes'] = 'Límites';
$string['buildteams'] = 'Creación de grupo';
$string['cannotupdate'] = 'Usted no puede actualizar una instancia de Teamup una vez que se ha abierto.';
$string['closedate'] = 'Fecha de Cierre';
$string['cluster'] = 'Amontonar';
$string['clusterlabel'] = 'Evitar minorías';
$string['confirmgroupbuilding'] = '¿ Está seguro de querer crear sus grupos ahorita ?';
$string['creategroups'] = 'Crear grupos dentro de Moodle';
$string['createteams'] = 'Crear los grupos';
$string['criterionquestion'] = 'Al menos un estudiante que respondió {question}';
$string['deleteAllRed'] = 'Eliminar a todos los estudiantes sin respuesta';
$string['distribute'] = 'Distribuir';
$string['distributelabel'] = 'Dispersar individuos similares';
$string['distributionmode'] = 'Modo de distribución';
$string['dontassigngrouptogrouping'] = 'No asignar grupos a un Agrupamiento';
$string['equalize'] = 'Igualar';
$string['equalizeHelp'] = 'Forzar a igualar el número de estudiantes en cada grupo. A veces es necesario después de la optimización.';
$string['exportexcel'] = 'Descargar todas las respuestas en Excel';
$string['fiveOption'] = 'Seleccionar cinco de los siguientes:';
$string['fourOption'] = 'Seleccionar cuatro de los siguientes:';
$string['groupName'] = 'Nombres de grupos';
$string['groupNoOptimal'] = 'Grupos no-óptimos';
$string['groupSchemaName'] = 'Esquema para nombrar los grupos';
$string['groupTitle'] = 'Grupo';
$string['groupcreationsuccess'] = 'Los grupos fueron creados exitosamente.';
$string['helperror'] = 'Usted debe especificar una ID de instancia o ID de course_module';
$string['helpserie'] = '<p>
El módulo de creación de grupos permite crear series. <br>
Las series son grupos de estudiantes creados con el único criterio de orden alfabético. <br>
Estos grupos tienen como prefijo "Serie", p. ej.: "Serie 01". <br>
La utilidad de los grupos de series reside en que se utilizan como filtros en la lista de estudiantes. <br>
Por defecto, se crean grupos para todos los estudiantes de la clase. <br>
Las series permiten crearlas para un subgrupo de estudiantes específicos. <br>
Es útil, entre otros, para clases numerosas. <br>
Puede crear series usted mismo, independientemente del botón de serie. <br>
Al crear un grupo en Moodle, cuando se solicita el nombre del grupo, comience el nombre del grupo con "Serie". p. ej.: "Serie de clase real". <br>
Cella permite reducir el número de participantes en el curso, teniendo en cuenta a los asistentes o estudiantes que no están presentes. <br>
Una vez creada la serie, el botón de serie desaparece. Para que vuelva a aparecer si es necesario, debe eliminar todos los grupos de series.<br>
Sin embargo, aún es posible crearlos anteponiendo "Serie" al nombre del grupo.<br>
</p>';
$string['helpserie_help'] = 'Concepto de Serie';
$string['idincorrect'] = 'ID de Módulo de Curso era incorrecta o estaba mal configurada';
$string['import'] = 'Importar';
$string['importquestionsfrom'] = 'Importar preguntas desde';
$string['intro'] = 'Introducción';
$string['intro_help'] = 'La introducción a su instancia de Team up.';
$string['jserror01'] = 'Por favor ingrese al menos dos respuestas';
$string['jserror02'] = 'Por favor ingrese al menos cuatro respuestas';
$string['jserror03'] = 'Por favor ingrese al menos cinco respuestas';
$string['jserror04'] = 'Por favor ingrese al menos seis respuestas';
$string['keepAllRed'] = 'Conservar solamente a estudiantes sin respuesta';
$string['modulename'] = 'TeamUp';
$string['modulename_help'] = 'TeamUp es una herramienta para asignar estudiantes a grupos de Moodle según sus respuestas a una serie de preguntas que especifique.
La idea es escribir preguntas de opción múltiple con restricciones y usar las respuestas de los estudiantes para crear grupos con cuatro enfoques:
* Agregar: Agrupar a los estudiantes con algún atributo en los mismos grupos.
* Distribuir: Repartir a los estudiantes con algún atributo en todos los grupos para que cada grupo tenga aproximadamente el mismo número.
* Amontonar: Asegurar que los estudiantes con algún atributo no estén aislados en un grupo.
* Balancear: Asegurar la misma fuerza en los grupos según una puntuación numérica.

El algoritmo completa los grupos para que todos tengan el mismo número de miembros.

Team Up es una derivación del plugin de Moodle <a href="https://moodle.org/plugins/mod_teambuilder" target="_blank"> Team Builder </a>, que usamos como modelo para diseñar nuestra interfaz. El algoritmo de repartición de Team Up y sus opciones están inspirados en el proyecto de código abierto <a href=\\"https://www.groupeng.org/GroupENG\\" target=\\"_blank\\"> GroupEng </a>.';
$string['modulenameplural'] = 'TeamUp';
$string['name'] = 'Nombre';
$string['namingscheme_help'] = 'El símbolo de la arroba (@) puede usarse para crear grupos con nombres que contienen letras. Por ejemplo, Grupo @ generará grupos llamados Grupo A, Grupo B, Grupo C, ...

El símbolo del gato (#) puede usarse para crear grupos con nombres que contienen números. Por ejemplo Grupo # generará grupos llamados Grupo 1, Grupo 2, Grupo 3, ...

Si Usted usa algún criterio para agrupar individuos similares, Usted puede emplear la opción asociada en el nombre del grupo al usar el caracter de la estrella "*" , por ejemplo para el esquema de nombrar grupos recomendados: "Grupo # - *"
(Recuerde configurar opciones muy breves para este criterio para evitar nombres de grupos demasiado largos.)';
$string['nbGroupSuccess'] = 'Número de grupos completados exitosamente';
$string['nbStudent'] = 'Número de estudiantes';
$string['noanswer'] = 'Este estudiante no ha respondido.';
$string['noeditingafteropentime'] = 'Usted no puede editar el cuestionario si ya ha sido abierto.';
$string['none'] = 'ninguno';
$string['noneedtocomplete'] = 'Usted no necesita completar el cuestionario.';
$string['notopen'] = 'Este cuestionario no está abierto';
$string['numberofteams'] = 'Número de equipos';
$string['oneOption'] = 'Seleccionar <strong>uno</strong> de los siguientes:';
$string['opendate'] = 'Fecha de Apertura';
$string['or'] = 'O';
$string['pleaseatleastonequestion'] = 'Por favor ingrese al menos una pregunta';
$string['pleasenever'] = 'Por favor NUNCA refresque esta página con F5 ni con el botón del navegador para refrescar. En su lugar, haga clic en el nombre de la actividad en la ruta de navegación';
$string['pleasequestion'] = 'Por favor ingrese una pregunta';
$string['pleasewait'] = 'Gracias por su paciencia';
$string['pluginadministration'] = 'Adminsitración de TeamUp';
$string['pluginname'] = 'TeamUp';
$string['prefixteamnames'] = 'Prefijar nombres de grupos con Nombre de Agrupamiento';
$string['presentation'] = '<h3> Resumen del módulo </h3>
<p>
El propósito del módulo Team Up es permitir la creación de grupos, basándose en una encuesta con preguntas de respuesta múltiple, con posibles restricciones.

<p>
La primera pestaña, <b>Cuestionario</b>, permite crear las preguntas para los estudiantes.<br>
La segunda pestaña, <b>Vista previa de preguntas</b>, presenta el cuestionario para que los estudiantes respondan. <br>
La última pestaña, <b>Creación de grupos</b>, permite iniciar la creación de grupos.

</p>

<p>
La creación de grupos se realiza en dos pasos. El primero es una simulación.
Durante la simulación, es posible modificar los criterios para reordenarlos y mover manualmente a los estudiantes de un grupo a otro.
En el siguiente paso, los grupos se crean en Moodle. <br>
No olvide hacer clic en el botón <button type=\\"button\\" class=\\"creategroups\\" style=\\"font-size: 1.0em;\\" id=\\"\\">Crear grupos en Moodle</button> para finalizar la creación del grupo.<br>
</p>

<p>
Existen 4 operadores para crear grupos. <br>
Existen cuatro operadores básicos para crear los grupos. <br>
<table class="mod-teamup-table">
<tr><td>Agrupar individuos similares</td><td> = Formar grupos cuyos miembros sean similares según los criterios definidos. Creación de grupos homogéneos. Aplicado a valores discretos, sin ninguna obligación numérica.</td></tr>
<tr><td>Dispersar individuos similares</td><td> = Distribuir a los estudiantes que cumplen los requisitos entre los grupos. Se aplica a valores discretos, sin ninguna obligación numérica.

<tr><td>Evitar minorías</td><td> = Dividir a los estudiantes de modo que al menos dos que compartan un criterio estén en el mismo grupo (especialmente para minorías). Se aplica a valores discretos, sin ninguna obligación numérica.

<tr><td>Nivel de balance</td><td> = Crear grupos \\"correctos\\", cuyas fuerzas totales sean similares en todos los grupos (generalmente según los resultados académicos). Se aplica a valores numéricos (continuos y discretos).

</table>
</p>

<p>
Al previsualizar la distribución de un grupo, puede hacer clic en el bloque de un estudiante para ver su información y respuestas en una descripción emergente.

Si un estudiante no tiene que entrar en la distribución del grupo, puede hacer clic en la X junto a su nombre para eliminarlo de la vista previa del grupo. </p>

<u>Barra de acción:</u><br>
Número de equipos:<input id="nbteam" min="1" style="width:40px;height:21px;margin-top:5px;margin-right:5px;" value="31" type="number" disabled="">31 / 123(4)</span><button type=\\"button\\" id=\\"buildteams\\" class="">
<strong>Vista previa</strong></button><button type=\\"button\\" id=\\"resetteams\\" class=\\"\\">Restablecer</button><button type=\\"button\\" id=\\"prettify\\" style=\\"\\">Optimizar</button><button type=\\"button\\" id=\\"equalize\\" style=\\"\\">Ecualizar</button>
<ul>
<li>El número de equipos determina el número de estudiantes en cada grupo. Por ejemplo, 123 estudiantes en 31 grupos hacen 4 individuos en los grupos. </li>
<li>Vista previa: Este botón inicia la creación del grupo con los criterios seleccionados. </li>
<li>Restablecer: Este botón vacía todos los grupos y asigna a los estudiantes de la sección <b>no afectada a los grupos</b>.</li>
<li>Optimizar: Este botón realiza algunos cambios en la distribución de los estudiantes para mejorar los criterios. No se garantiza el éxito, pero puede repetir la optimización varias veces.</li>
<li>Igualar: Fuerza la igualación del número de estudiantes en cada grupo. A veces es necesario después de la optimización.</li>
</ul>
</p>';
$string['prettify'] = 'Optimizar';
$string['prettifyHelp'] = 'Este botón hace algunos cambios en la distribución de estudiantes para mejorar los criterios. No se garantiza el éxito, pero Usted puede repetir la optimización varias veces.';
$string['preview'] = 'Previsualizar';
$string['previewQuestion'] = 'Previsualizar preguntas';
$string['prioritize'] = 'Priorizar';
$string['prioritizeequal'] = 'número de grupos igual';
$string['prioritizemostcriteria'] = 'la mayoría de los criterios cumplidos';
$string['privacy:metadata:teamup_response'] = 'Información acerca de las respuestas del usuario en una actividad TeamUp dada';
$string['privacy:metadata:teamup_response:answerid'] = 'La respuesta que eligió el usuario.';
$string['privacy:metadata:teamup_response:userid'] = 'El usuario que hizo la respuesta.';
$string['question'] = 'Pregunta';
$string['questionnaire'] = 'Cuestionario';
$string['replay'] = 'Rehacer sin reiniciar';
$string['reportDetail'] = 'Reporte detallado';
$string['resetteams'] = 'Reiniciar';
$string['save'] = 'Guardar';
$string['saved'] = '¡Guardado!';
$string['savequestionnaire'] = 'Guardar Cuestionario';
$string['saving'] = 'Guardando...';
$string['selectany'] = 'Seleccionar una (o ninguna) opción';
$string['selectatleastone'] = 'Seleccionar una o más opciones';
$string['selectfive'] = 'Seleccionar cinco opciones';
$string['selectfour'] = 'Seleccionar cuatro opciones';
$string['selectone'] = 'Seleccionar una opción';
$string['selectthree'] = 'Seleccionar tres opciones';
$string['selecttwo'] = 'Seleccionar dos opciones';
$string['standarddeviation'] = 'Desviación estándar';
$string['summary'] = 'Resumen';
$string['teamup'] = 'Team Up';
$string['teamup:addinstance'] = 'Añadir un nuevo módulo Team Up';
$string['teamup:build'] = 'Construir grupos a partir de respuestas de encuesta';
$string['teamup:create'] = 'Crear encuesta';
$string['teamup:respond'] = 'Responder al Cuestionario';
$string['teamupsuccess'] = 'Distribución de grupos exitosa';
$string['teamupsuccessnbr'] = 'Número de grupos completados exitosamente';
$string['teamupwarning'] = 'Falló la distribución';
$string['threeOption'] = 'Seleccionar tres de los siguientes:';
$string['total'] = 'Total';
$string['twoOption'] = 'Seleccionar dos de los siguientes:';
$string['unassignedtoteams'] = 'No-asignado a grupos';
$string['updateanswer'] = 'Permitir actualización de respuestas';
$string['wrongcharansw'] = 'Caracteres no válidos en las respuestas';
$string['wrongcharquest'] = 'Caracteres no válidos en la pregunta';
