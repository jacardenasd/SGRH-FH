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
 * Strings for component 'local_deepler', language 'es_mx', version '4.4'.
 *
 * @package     local_deepler
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikeytitle'] = 'Clave API para DeepL Translate';
$string['apikeytitle_desc'] = 'Copiar su clave API de DeepL para usar traducción de máquina.';
$string['badsettings'] = 'La configuración de DeepL parece estar incompleta; probablemente falte la clave API. Consulta con tu administrador de Moodle.';
$string['canttranslate'] = 'No se puede traducir \'{$a}\' a \'{$a}\', por favor seleccione un idioma destino diferente';
$string['canttranslatesame'] = 'Ambos idiomas son iguales:';
$string['contextdeepl'] = 'Contexto del curso';
$string['contextdeepl_placeholder'] = 'Contarle al traductor (Deepl) sobre el contexto, para ayudarlo a traducir de una manera más contextual... (experimental)';
$string['deeplapidoc'] = 'ver detalle en la documentación de deepl';
$string['deeplapidoctitle'] = 'Configuraciones de API de Deepl';
$string['deeplapiexception'] = 'LA API de Deep regresó un error';
$string['deepler:edittranslations'] = 'Editar traducciones de curso en el Traductor Deepl (capacidad para)';
$string['deeplprotitle'] = '¿Usar DeepL Pro?';
$string['deeplprotitle_desc'] = 'Habilitar esto para usar DeepL Pro en lugar de la versión gratuita de DeepL.';
$string['doselecttarget'] = 'Por favor seleccione un idioma destino';
$string['editbutton'] = 'Editar origen en su lugar';
$string['errordbpartial'] = '{$a} de los campos NO se uerdó en la base de datos. Compruebe manualmente en el ugar';
$string['errordbtitle'] = 'Error de base de datos';
$string['errortoolong'] = '(podría ser que el texto es demasiado largo para el campo... Comprobarlo manualmente en el lugar)';
$string['filters'] = 'Filtros';
$string['formality'] = 'Formalidad';
$string['formalitydefault'] = 'predeterminado';
$string['formalityless'] = 'menos';
$string['formalitymore'] = 'más';
$string['formalitypreferless'] = 'preferir menos';
$string['formalityprefermore'] = 'preferir más';
$string['hideiframes'] = 'Renderizar iframes incrustadas en texto fuente.';
$string['hideiframesadmin'] = 'Seleccionar esto si quiere renderizar iframes incrustadas a¿como lo predeterminado.';
$string['hideiframesadmin_desc'] = 'A veces las iframes pueden traslapar la interfaz del usuario, o alterar el desempeño del navegador.';
$string['ignoretags'] = 'Marcas (tags) a ignorar';
$string['keepselected'] = 'Conservar seleccionadas';
$string['latexeascape'] = 'Escapar LaTeX (no enviar $$LaTeXFormulas$$ a traducción)';
$string['latexescapeadmin'] = 'Valor predeterminado Escapar LaTeX
("Configuraciones avanzadas" en la página para traducir cursos)';
$string['latexescapeadmin_desc'] = 'Si se establece en verdadero, se marcará la casilla "Escape de fórmulas LaTeX" en el formato de traducción del curso.
Esto tendrá el efecto de habilitar de forma predeterminada la opción \'No traducción de fórmulas LaTeX\' en el curso (cuando se establece aquí en verdadero).
Si su organización rara vez utiliza fórmulas LaTeX en los cursos, desmárquela para mejorar levemente el rendimiento de Deepler.';
$string['modeltpreferqualityoptimized'] = 'preferir optimizado en calidad';
$string['modeltype'] = 'Modelo';
$string['modeltypelatencyoptimized'] = 'optimizado en latencia';
$string['modeltypequalityoptimized'] = 'Optimizado en calidad';
$string['needsupdate'] = 'Necesita actualización';
$string['neverrephrased'] = 'Este texto nunca fue mejorado';
$string['nevertranslated'] = 'Aun no hay traducción a \'{$a}\'';
$string['nodeeplpapi'] = ':-( No se puede conectar a  Deepl API. <br/>Compruebe con su administrador. Al parecer hay un problema con la red.';
$string['nonsplittingtags'] = 'Marcas no divisorias';
$string['notsupportedsource'] = 'El idioma fuente que usted tiene no está soportado por DeepL.';
$string['onomatopoeia'] = '¡¡¡Ouch !!!';
$string['othersettingstitle'] = 'Otras configuraciones';
$string['outlinedetection'] = 'Detección de contorno XML';
$string['pluginname'] = 'Traductor DeepL';
$string['pluginversion'] = 'Versión actual';
$string['preescape'] = 'Escapar tag HTML PRE';
$string['preescapeadmin'] = 'Escapar tag HTML PRE';
$string['preescapeadmin_desc'] = 'Si está habilitado, el contenido &lt;pre&gt;...&lt;/pre&gt; no se enviará a traducción';
$string['preserveformatting'] = 'Preervar formato';
$string['privacy:metadata'] = 'El plugin DeepL no almacena ningún dato personal.';
$string['rephraseinfos'] = 'La mejora del texto está en beta y actualmente soportada para los siguientes idiomas destino: <strong>{$a}</strong>.';
$string['rephraseoptionsinfos'] = 'Las opciones de tono o estilo de escritura solo son compatibles con <strong>de</strong>, <strong>en-GB</strong> y <strong>en-US</strong>. Usar "predeterminado" como valor equivale a no enviar ni un tono ni un estilo de escritura.';
$string['rephrasetitle'] = '{$a} Refrasear configuraciones';
$string['saveall'] = 'Guardar&nbsp;todo';
$string['saveallexplain'] = 'Guardar masivamente a base de datos todas las traducciones seleccionadas.';
$string['saveallmodalbody'] = '<div class="spinner-border text-primary" role="status"><span class="sr-only">Guardando...</span>\\n</div>
<p>Por favor espere...<br/>Cuando todos los campos estén guardados en la base de datos,<br/>cerraré automáticamente</p>
<p>Si está impaciente y desea cerrar esta ventana,
<br/>asegúrese de que todos los estados de las traducciones seleccionadas sean <i class="fa fa-database" aria-hidden="true"></i></p>';
$string['saveallmodaltitle'] = 'Guardando traducciones a la base de datos';
$string['scannedfieldsize'] = 'Tamaño mínimo de campo de texto';
$string['scannedfieldsize_desc'] = 'Los campos de texto pequeños suelen estar limitados en la base de datos. El contenido de texto crece bastante rápido (más las etiquetas mlang) en cada paso de traducción.
Después de la traducción, si el texto es demasiado grande, la base de datos emitirá un error. Cambie el tamaño aquí en función de las propiedades de su idioma principal y de la cantidad de idiomas que soporta su Moodle';
$string['seesetting'] = 'Configuraciones avanzadas';
$string['selectall'] = 'Todo';
$string['selecttargetlanguage'] = 'Idioma destino<em>{mlang {$a}}</em>';
$string['showhiddenforstudents'] = 'Mostrar "{$a}"';
$string['sourcelang'] = 'Idioma fuente <em>{mlang other}</em>';
$string['specialsourcetext'] = 'Usar un origen difrente a "{$a}"';
$string['splitsentences'] = '¿Dividir oraciones?';
$string['splitsentences0'] = 'sin divisiones para nada';
$string['splitsentences1'] = 'divisiones en puntuación y nuevas líneas';
$string['splitsentencesnonewlines'] = 'divisiones solo en puntuación, ignorando nuevas líneas';
$string['splittingtags'] = 'Marcas divisorias';
$string['statusfailed'] = 'Falló';
$string['statussaved'] = 'Guardado';
$string['statussuccess'] = 'Éxito';
$string['statustosave'] = 'Guardar esto';
$string['statustotranslate'] = 'Listo para traducir';
$string['statuswait'] = 'No seleccionado';
$string['taghandling'] = 'Manejar marcas como:';
$string['tagsplaceholder'] = 'enlistar todas las marcas (separar marcas con coma &quot;,&quot;)';
$string['targetcompatibleexplain'] = 'Elegir un idioma destino para guardar en el {mlang xx}.';
$string['toneconfident'] = 'Tono confiado';
$string['tonediplomatic'] = 'Tono diplomático';
$string['toneenthusiastic'] = 'Tono entusiasta';
$string['tonefriendly'] = 'Tono amistoso';
$string['toneorstyle'] = 'Cambia el tono o estilo de escritura de sus mejoras.';
$string['tour_advancedsettings00'] = 'Haga clic aquí para ver cómo puede ajustar el comportamiento de Deepl.<br/><br/>Haga clic ahora para obtener una visita guiada de las funciones.';
$string['tour_advancedsettings00title'] = 'Configuraciones avanzadas de DeepL';
$string['tour_advancedsettings01formality'] = '<p>Establece si el texto traducido debe adoptar un tono más formal o informal.
Actualmente, esta función solo funciona para los idiomas de destino <em>DE</em> (<strong>Alemán</strong>), <em>FR</em> (<strong>Francés</strong>), <em>IT</em>
(<strong>Italiano</strong>), <em>ES</em> (Español), <em>NL</em> (Holandés), <em>PL</em> (Polaco), <em>PT-BR</em> y <em>PT-PT</em> (Portugués),
<em>JA</em> (Japonés) y <em>RU</em> (Ruso).
Obtenga más información sobre la función de lenguaje sencillo y educado para japonés <a
href="https://support.deepl.com/hc/en-us/articles/6306700061852-About-the-plain-polite-feature-in-japanese">aquí</a>.
La configuración de este parámetro con un idioma de destino que no admita la formalidad fallará, a menos que se utilice una de las opciones <em>prefer_...</em>. Las opciones posibles son:</p>
<ul><li><em>default</em> (predeterminado)</li>
<li><em>more</em>: para un idioma más formal</li>
<li><em>less</em>: para un idioma más informal</li>
<li><em>prefer more</em>: para un idioma más formal si está disponible; de lo contrario, se recurre a la formalidad predeterminada</li>
<li><em>prefer less</em>: para un idioma más informal si está disponible; de lo contrario, se recurre a la formalidad predeterminada</li></ul>';
$string['tour_advancedsettings01formalitytitle'] = 'Gestión de formalidad';
$string['tour_advancedsettings02split'] = '<p>Establece si el motor de traducción debe dividir primero la entrada en oraciones.
Para traducciones de texto donde <em>checked (comprobado)</em>, significa que el motor divide en puntuación y en nuevas líneas.</p>
<p>Para traducciones de texto donde <em>nonewlines</em>, lo que significa que el motor divide solo en puntuación, ignorando las nuevas líneas.</p>';
$string['tour_advancedsettings02splittitle'] = 'Gestionar cómo son divididas por línea las oraciones';
$string['tour_advancedsettings03formating'] = '<p>Establece si el motor de traducción debe respetar el formato original,
aunque normalmente corrija algunos aspectos.</p>
<p>Los aspectos de formato afectados por esta configuración incluyen:</p>
<ul><li>Puntuación al principio y al final de la oración</li><li>MAYÚSCULAS/minúsculas al principio de la oración</li></ul>';
$string['tour_advancedsettings03formatingtitle'] = 'Gestionar formato';
$string['tour_advancedsettings04glossary'] = '<p>Especifique el glosario que se utilizará para la traducción.</p>
<p><em>(Los glosarios se deben cargar a través de la API de Deepl. Esto aún no está disponible con este plugin. Consulte con su departamento de TI).</em></p>';
$string['tour_advancedsettings04glossarytitle'] = 'Glosario';
$string['tour_advancedsettings05context'] = '<p>Este contexto adicional puede mejorar potencialmente la calidad de la traducción cuando se traducen textos fuente breves y con poco contexto.</p><p>El parámetro <em>context</em> es una <strong>función alfa</strong>.</p>
<p>Por lo tanto, intente agregar algo de contexto si cree que los resultados traducidos podrían mejorarse, pero no debe confiar en ello.</p>';
$string['tour_advancedsettings05contexttitle'] = 'Información contextual que puede influenciar una traducción pero no está traducida ella.';
$string['tour_advancedsettings06tag'] = '<p>Establece qué tipo de etiquetas (tags) se deben manejar.</p>
<p>De manera predeterminada, el motor de traducción no tiene en cuenta las etiquetas (tags).</p>
<p>Al configurar el parámetro <em>manejo de etiquetas</em> en <em>xml</em> o <em>html</em>,
la API procesará la entrada de marcado extrayendo el texto de la estructura, dividiéndolo en oraciones individuales,
traduciéndolas y colocándolas nuevamente en la estructura de marcado respectiva.</p>';
$string['tour_advancedsettings06tagtitle'] = 'Manejo de marcas';
$string['tour_advancedsettings07outline'] = '<p>La detección automática de la estructura XML no dará los mejores resultados en todos los archivos XML.
Puede desactivar este mecanismo automático por completo configurando el parámetro <em>detección de contorno</em> como <em>desactivado</em>
y seleccionando las etiquetas que deben considerarse etiquetas de estructura. Esto dividirá las oraciones utilizando el parámetro <em>etiquetas de división</em>.</p>';
$string['tour_advancedsettings07outlinetitle'] = 'Cómo se detecta el contorno en XML';
$string['tour_advancedsettings08skiptag'] = '<p>Lista separada por comas de etiquetas XML o HTML que indican que el texto no se debe traducir.</p>
<p>Para garantizar que los elementos del texto original no se alteren en la traducción (por ejemplo, marcas comerciales o nombres de productos).</p>
<p>Exp: agregar "x" a la lista:</p><p>Solicitud:<em> Abra la página &lt;x&gt;Configuración&lt;/x&gt; para configurar su sistema.</em></p>
<p>Respuesta:<em>Abra brevemente la página &lt;x&gt;Configuración&lt;/x&gt; para configurar su sistema.</em></p>
<p>En HTML también puede utilizar el atributo <code><strong>translate="no"</strong></code>:</p>
<p><code> &lt;body&gt;</code><br /><code> &lt;h1&gt;Mi primer encabezado&lt;/h1&gt;</code><br /><code> &lt;p
<strong>translate="no"</strong>&gt;Esto no se traducirá.&lt;/p&gt;</code><br /><code> &lt;/body&gt;</code></p>
<p></p>';
$string['tour_advancedsettings08skiptagtitle'] = 'Saltar traducir cierto contenido de marcas (tags)';
$string['tour_advancedsettings09splittag'] = '<p>Lista separada por comas de marcas XML o HTML quenunca dividen oraciones.</p>';
$string['tour_advancedsettings09splittagtitle'] = 'Marcas que no debería considerarse que separen las oraciones.';
$string['tour_advancedsettings101other'] = '<p>Aquí le indica al plugin que evite traducir cadenas LaTeX ($$...$$) y/o etiquetas PRE HTML.</p>';
$string['tour_advancedsettings101othertitle'] = 'Habilitar el escape de etiquetas LaTeX y/o PRE';
$string['tour_advancedsettings10splittag'] = '<p>Lista separada por comas de marcas XML que siempre causan divisiones.</p>';
$string['tour_advancedsettings10splittagtitle'] = 'Marca que separará el texto en oraciones.';
$string['tour_advancedsettings11sourcelang'] = '<p>El idioma fuente es el idioma en el cual fue escrito el curso. Es una buena práctica el conservar el mismo idioma en todo el curso.</p>';
$string['tour_advancedsettings11sourcelangtitle'] = 'Idioma fuente';
$string['tour_advancedsettings12targetlang'] = '<p>El idioma destino es el que usted le pide a Deepl que le entregue.</p>
<p>Obviamente, si usted selecciona el mismo idioma que el orígen el botón de traducción es desactivado.</p>';
$string['tour_advancedsettings12targetlangtitle'] = 'Idioma destino';
$string['tour_advancedsettings13filters'] = '<p>Estos filtros muestran/ocultan el contenido textual encontrado en el curso.</p>
<p><strong>Actualizado:<br /></strong></p>
<p>Estos son los contenidos que ya están traducidos y que no se han realizado cambios en el texto fuente.</p>
<p>Aparecerán con el indicador <span class="badge badge-pill badge-success"> </span>. </p>
<p><strong>Necesita actualización:<br /></strong></p>
<p>Estos son los contenidos textuales que nunca se tradujeron o que se modificaron después de ser traducidos.</p>
<p>Aparecen con el indicador <span class="badge badge-pill badge-danger"> </span> cuando nunca se tradujeron. </p>
<p>Aparecen con el indicador <span class="badge badge-pill badge-warning"> </span>
cuando ya se tradujeron pero el texto fuente cambió desde entonces.</p>';
$string['tour_advancedsettings13filterstitle'] = 'Filtros de estado de traducción';
$string['tour_advancedsettings14filters'] = '<p>Al hacer clic aquí se selecciona todo el contenido visible para ser enviado para traducción.</p>';
$string['tour_advancedsettings14filterstitle'] = 'Seleccionar todo';
$string['tour_advancedsettings15filters'] = '<p>Estado en tiempo real del consumo planeado y real del servicio Deepl (para el mes actual).</p>';
$string['tour_advancedsettings15filterstitle'] = 'Estado de consumo de API DeepL';
$string['tour_advancedsettings16sendtodeepl'] = '<p>Al hacer clic en este botón se enviarán todos los textos seleccionados a Deepl y se incluirán en los editores.</p>
<p>Se necesita al menos una selección para activarlo.</p>';
$string['tour_advancedsettings16sendtodeepltitle'] = 'Mandar a DeepL';
$string['tour_advancedsettings17statusbullet'] = '<p>Esto indica el estado de la traducción con un código de 3 colores.</p>
<p><span class="badge badge-pill badge-danger"> </span> Este texto nunca fue traducido.</p>
<p><span class="badge badge-pill badge-warning"> </span> Este texto fue traducido, pero se realizó un cambio en la base de datos desde entonces.</p>
<p><span class="badge badge-pill badge-success"> </span> Este texto ya fue traducido y está actualizado.</p>
<p><span class="badge badge-pill badge-dark"> </span> No se puede obtener el estado de la traducción porque los idiomas de origen y de destino son los mismos.</p>';
$string['tour_advancedsettings17statusbullettitle'] = 'Ícono de viñeta de estado de traducción';
$string['tour_advancedsettings18selection'] = '<p>Para enviar un contenido a DeepL a ser traducido, usted necesita activar esa casilla.</p>';
$string['tour_advancedsettings18selectiontitle'] = 'Casilla de selección';
$string['tour_advancedsettings19editsource'] = '<p><span class="p-1 btn btn-sm btn-outline-info"><i class="fa fa-pencil"> </i>
</span> Al hacer clic en el lápiz, accederá al editor de cursos en el curso de Moodle.</p>
<p>Para el caso de que  tenga revisiones de la fuente o deseara realizar algún cambio, ya que no puede cambiar la fuente desde aquí.</p>';
$string['tour_advancedsettings19editsourcetitle'] = 'Editar origen en su lugar.';
$string['tour_advancedsettings20togglemultilang'] = '<p>Cuando hay etiquetas de traducción {mlang}, aparece este botón.</p>
<p><i class="fa fa-language"></i></p>
<p>Haga clic en él para alternar el contenido y ver lo que ya se tradujo. Si el idioma de origen seleccionado actualmente se encuentra en las etiquetas MLANG, esto se muestra en rojo para alertarlo de que la etiqueta se anulará.</p>';
$string['tour_advancedsettings20togglemultilangtitle'] = 'Alternar contenido multi-idioma.';
$string['tour_advancedsettings21secondsource'] = 'Puede elegir una fuente secundaria para contenido específico. <br/>Si aún no hay una etiqueta OTHER lang, guardará la fuente en su idioma además de OTHER.';
$string['tour_advancedsettings21secondsourcetitle'] = 'Idioma destino secundario.';
$string['tour_advancedsettings22process'] = '<p>Cuando no se selecciona un contenido de texto y no se solicita traducción, se muestra <i class="fa fa-ellipsis-h"></i>.</p>
<p><i class="fa fa-hourglass-start"></i> se muestra cuando lo seleccionó y está esperando que usted presione el botón "Traducir" para enviarlo a Deepl.</p>
<p><i class="fa fa-floppy-o"></i> se mostrará después de que el texto se haya devuelto al editor de texto adyacente.<br />
Usted puede revisar el contenido traducido, realizar algunos cambios y luego presionar el ícono para guardarlo en la base de datos. <br /><br />
<em>Tenga en cuenta</em> que también puede guardarlo en la base de datos en lotes haciendo clic en el botón flotante \'Guardar todo\' que se encuentra debajo. <br />
Si desea guardar todo el texto traducido, pero dejar algo para revisar más tarde, puede desmarcar la casilla a la izquierda para que se omita al guardar todo.</p>
<p>Una vez que se guarda un texto, este ícono mostrará <i class="fa-solid fa-database"></i></p>';
$string['tour_advancedsettings22processtitle'] = 'Indicador de proceso de traducción (extremo derecho)';
$string['tour_advancedsettings23saveall'] = '<p>Cuando se recuperan traducciones de Deepl, no se guardan automáticamente en la base de datos.</p>
<p>Esto es para garantizar los principios básicos de la traducción; es decir, que se realice una revisión antes de almacenarlas y enviarlas automáticamente al público.</p>
<p>De modo que puede guardarlas una por una o haciendo clic en el botón Guardar todo.</p>
<p>Si hay algunas traducciones que no desea guardar en el lote, simplemente desmárquelas antes de hacer clic en "Guardar todo".</p>';
$string['tour_advancedsettings23savealltitle'] = 'Guardar todas las traducciones en base de datos';
$string['translatebutton'] = 'Traducir y rarr; {$a}';
$string['translateexplain'] = 'Traducir todas las filas seleccionadas a {$a}';
$string['translationdisabled'] = 'La traducción está deshabilitada porque se utiliza como enlace en la base de datos.';
$string['uptodate'] = 'Actualizado';
$string['viewsource'] = 'Comprobar contenido multi-idioma.';
$string['viewsourcedisabled'] = 'Aun no hay contenido multi-idioma.';
$string['warningsource'] = '¡Mucho cuidado ! El idioma de fuente actual &quot;{$a}&quot; ya está como una marca multi-idioma junto con la marca de repuesto tag &quot;OTHER&quot;. Tenga en cuenta que ambos serán juntados como la marca multi-idioma  &quot;OTHER&quot; .';
$string['wordcountsentence'] = 'Total <span id="local_deepler__wc">0</span> palabras, <span id="local_deepler__wosc">0</span> caracteres (<span id="local_deepler__wsc">0</span> caracteres incluyendo espacios) Uso de Deepl= <span id="local_deepler__used">0</span>/<span id="local_deepler__max">0</span>';
$string['writingstyleacademic'] = 'Estilo de escritura académico';
$string['writingstylebusiness'] = 'Estilo de escritura comercial';
$string['writingstylecasual'] = 'Estilo de escritura casual';
$string['writingstylesimple'] = 'Estilo de escritura simple';
