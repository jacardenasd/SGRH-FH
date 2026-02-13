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
 * Strings for component 'filter_translations', language 'es_mx', version '4.4'.
 *
 * @package     filter_translations
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkdeleteconfirmation'] = '¿Está absolutamente seguro de querer eliminar estas traducciones?';
$string['cachedef_translatedtext_1'] = 'Texto traducido (Nivel Solicitud)';
$string['cachedef_translatedtext_2'] = 'Texto traducido (Nivel Sesión)';
$string['cachedef_translatedtext_4'] = 'Texto traducido (Nivel Aplicación)';
$string['cachingmode'] = 'Modo cacheando';
$string['cachingmode_desc'] = 'Para sitios con un número relativamente pequeño de cursos y un gran volumen de usuarios nosotros recomendamos nivel Aplicación, para un alto volumen de cursos recomendamos Sesión, para minimizar cacheo recomendamos Solicitud.';
$string['cannottranslatelang'] = 'Las traducciones en el idioma seleccionado están deshabilitadas.';
$string['cannottranslatepage'] = 'Esta página no puede ser traducida.';
$string['cleanuptranslationissues'] = 'Limpiar registros viejos de problemas de traducción';
$string['clihelptext_copytranslations'] = 'Esta herramienta copiará las traducciones que coincidan con el hash de un contenido y las guardará bajo el hash encontrado del contenido para cada tabla o campo especificado. UTILICE CON EXTREMO CUIDADO.
Para ejecutar la tarea, ejecute este comando nuevamente especificando un modo, por ejemplo:
php cli/copy_translations.php --mode=listcolumns

Los modos válidos son:
process - Hacerlo realmente...
dryrun - Ver cuántos registros se verán afectados. No escribe ningún cambio en la base de datos.
listcolumns - Enumerar las tablas y columnas que se verán afectadas

El uso sugerido es enumerar las columnas que se podrían modificar:
php filter/translations/cli/copy_translations.php --mode=listcolumns > /Users/moodleadmin/cols.json

Edite el archivo usando un editor de texto para eliminar cualquier cosa que deba ignorarse.
Luego, ejecute para procesar esas columnas:

php filter/translations/cli/copy_translations.php --mode=process --file=/Users/moodleadmin/cols.json

Puede realizar una prueba para verificar cuántos registros se verán afectados cuando se ejecute este proceso.
php filter/translations/cli/copy_translations.php --mode=dryrun --file=/Users/moodleadmin/cols.json';
$string['clihelptext_insertspans'] = 'Esta herramienta agregará hashes de traducción a todos los campos de texto enriquecido que se encuentren en la base de datos. UTILICE CON EXTREMO CUIDADO.
Para ejecutar la tarea, ejecute este comando nuevamente especificando un modo, por ejemplo:
php cli/insert_spans.php --mode=listcolumns

Los modos válidos son:
process - Hacerlo realmente...
listcolumns - Enumerar las tablas y columnas que se verán afectadas

El uso sugerido es enumerar las columnas que se podrían modificar:
php filter/translations/cli/insert_spans.php --mode=listcolumns > /Users/moodleadmin/cols.json

Edite el archivo con un editor de texto para eliminar cualquier columna que deba ignorarse.
Luego, ejecute para procesar esas columnas:

php filter/translations/cli/insert_spans.php --mode=process --file=/Users/moodleadmin/cols.json';
$string['clihelptext_migrate_filter_fulltranslate'] = 'Esta herramienta copiará las traducciones del plugin filter_fulltranslate al plugin filter_translations.
Se duplicarán todas las entradas copiadas previamente con esta herramienta.
Para ejecutar la tarea, ejecute este comando nuevamente especificando --confirm, por ejemplo:
php cli/migrate_filter_fulltranslate.php --confirm';
$string['clihelptext_removeduplicatehashes'] = 'Esta herramienta encontrará y eliminará los hashes de traducción duplicados que se encuentren en cada tabla o campo especificado. UTILICE CON EXTREMO CUIDADO.
Para ejecutar la tarea, ejecute este comando nuevamente especificando un modo, por ejemplo:
php cli/remove_duplicate_hashes.php --mode=listcolumns

Los modos válidos son:
process - Hacerlo realmente...
dryrun - Ver cuántos registros se verán afectados. No escribe ningún cambio en la base de datos.
listcolumns - Enumerar las tablas y columnas que se verán afectadas

El uso sugerido es enumerar las columnas que se podrían modificar:
php filter/translations/cli/remove_duplicate_hashes.php --mode=listcolumns > /Users/moodleadmin/cols.json

Edite el archivo con un editor de texto para eliminar cualquier dato que deba ignorarse.
Luego, ejecute para procesar esas columnas:

php filter/translations/cli/remove_duplicate_hashes.php --mode=process --file=/Users/moodleadmin/cols.json

Puede realizar una prueba para verificar cuántos registros se verán afectados cuando se ejecute este proceso.
php filter/translations/cli/remove_duplicate_hashes.php --mode=dryrun --file=/Users/moodleadmin/cols.json';
$string['columndefinition'] = 'Tablas/columnas a comprobar';
$string['columndefinition_desc'] = 'Las tareas programadas se utilizan para realizar el mantenimiento periódico y la sincronización de las traducciones.<br>
Ingrese las tablas/columnas que desea verificar en formato JSON, por ejemplo:
{
"label": [
"intro"
]
}<br>
Puede obtener la lista de tablas/columnas ejecutando:<br>
<pre>php filter/translations/cli/remove_duplicate_hashes.php --mode=listcolumns</pre>
Las tareas programadas para este plugin están deshabilitadas de manera predeterminada. Puede habilitarlas desde la página <a href="tool/task/scheduledtasks.php">Tareas programadas</a>.';
$string['columndefinitionfileerror'] = 'Archivo de columna de definición faltante o inválido';
$string['columndefinitionjsonerror'] = 'Definición de columna json no válida';
$string['context'] = 'Contexto';
$string['copytranslations'] = 'Copiar traducciones';
$string['createtranslation'] = 'Crear traducción';
$string['current'] = 'Actual';
$string['deleteissuesconfirmation'] = '¿Está absolutamente seguro de querer eliminar completamente estas entradas?';
$string['deleteselected'] = 'Eliminar traducciones seleccionadas';
$string['deleteselectedentries'] = 'Eliminar entradas seleccionadas';
$string['diff'] = 'Diferencia';
$string['edittranslation'] = 'Editar traducción';
$string['edittranslationsbutton'] = 'Editar traducción';
$string['errorselectcourse'] = 'Por favor seleccione un curso.';
$string['excludelang'] = 'Idiomas a excluir de traducción';
$string['excludelang_desc'] = 'Lista de idioma a excluir completamente de traducción.';
$string['export'] = 'Exportar';
$string['exportdescription'] = '<p>Exportar un archivo CSV con las traducciones faltantes del curso seleccionado.</p>
<p>Luego usted puede traducir el contenido usando herramientas de traducción automática como matecat.com, antes de importar las traducciones nuevamente al curso.</p>
<p>Notas importantes:</p>
<ul>
<li>Solo se exportarán las traducciones faltantes.</li>
<li>Actualmente no se admite la importación de este archivo a un sitio Moodle diferente.</li>
</ul>';
$string['exporttranslations'] = 'Exportar traducciones';
$string['fieldrequired'] = 'El campo "{$a}" no está permitido. Los campos permitidos son: "md5key, rawtext, substitutetext, targetlanguage, contextid".';
$string['fieldsmismatch'] = 'Por favor compruee los campos en el archivo CSV. Los campos necesarios son: "md5key, rawtext, substitutetext, targetlanguage, contextid"';
$string['fieldwrongorder'] = 'El campo "{$a}" está en un orden incorrecto. el orden de los campo es: "md5key, rawtext, substitutetext, targetlanguage, contextid".';
$string['filetoimport'] = 'Archivo a importar';
$string['filetoimport_help'] = 'Buscar y seleccionar el archivo CSV en su computadora que contiene las traducciones a importar.';
$string['filtername'] = 'Traducciones del contenido';
$string['filteroptions'] = 'Opciones de filtro';
$string['foundhash'] = 'Hash encontrado';
$string['generatedhash'] = 'Hash (contenido) generado';
$string['google_apiendpoint'] = 'Endpoints API';
$string['google_apikey'] = 'Clave API';
$string['google_backoffonerror'] = 'Aléjese de la API con errores';
$string['google_enable'] = 'Usar API Google Translate';
$string['googletranslate'] = 'Traductor Google';
$string['hash'] = 'Hash';
$string['importdescription'] = '<p>Importar un archivo CSV con las traducciones faltantes de un curso.</p>
<p>Notas importantes:</p>
<ul>
<li>Solo se cargarán las traducciones faltantes.</li>
<li>Actualmente no se admite la importación de traducciones desde otros sitios Moodle.</li>
</ul>';
$string['importsummary'] = 'Resumen de importación';
$string['importtranslations'] = 'Importar traducciones';
$string['insertspans'] = 'Insertar etiquetas de intervalos de traducción';
$string['issue'] = 'Estado';
$string['issue_10'] = 'Rancio';
$string['issue_20'] = 'Faltantes';
$string['languagestringreverse'] = 'Búsqueda reversa de cadena de caracteres de idioma';
$string['languagestringreverse_enable'] = 'Habilitar búsqueda reversa de cadenas de caracteres de idioma';
$string['linenumber'] = 'Número de línea';
$string['logdebounce'] = 'Duración del registro de rebote';
$string['logexcludelang'] = 'Idiomas a excluir de bitácora';
$string['logexcludelang_desc'] = 'Lista de idioma a saltarse de grabar en bitácora en tabla de traducciones faltantes.';
$string['logging'] = 'Guardando en bitácora';
$string['loghistory'] = 'Conservar historia de traducción';
$string['logmissing'] = 'Guardar en bitácora traducciones faltantes';
$string['logstale'] = 'Guardar en bitácora traducciones rancias';
$string['managetranslationissues'] = 'Gestionar traducciones pendientes';
$string['managetranslations'] = 'Gestionar traducciones';
$string['md5key'] = 'Clave hash de traducción';
$string['nohash'] = 'No se encontró clave hash de traducción';
$string['notranslation'] = 'No se encontró traducción';
$string['old'] = 'Contenido antiguo';
$string['pluginname'] = 'Traducciones del contenido';
$string['privacy:metadata'] = 'El plugin de traducciones de contenido no almacena ningún dato personal.';
$string['processedcount'] = 'Líneas en archivo: {$a}';
$string['rawhtml'] = 'HTML original';
$string['rawtext'] = 'Contenido original';
$string['reason'] = 'Razón';
$string['reasonimportskipped1'] = 'Idioma no disponible en el sitio.';
$string['reasonimportskipped2'] = 'El registro de traducción para este hash ya existe.';
$string['reasonimportskipped3'] = 'Los datos de traducción son incompletos.';
$string['replaceduplicatehashes'] = 'Reemplazar hashes duplicados';
$string['sameasrawcontent'] = 'El texto traducido es el mismo que el contenido original';
$string['sameasrawcontentmessage'] = 'Por favor confirme que el texto traducido se supone que es el mismo que el contenido original, al activar la casilla de arriba.';
$string['scheduledtasksheading'] = 'Trabajos agendados de mantenimiento';
$string['selectcourse'] = 'Seleccionar un curso...';
$string['showperfdata'] = 'Mostrar datos de desempeño en pie de página';
$string['skippedcount'] = 'Líneas saltadas: {$a}';
$string['staletranslation'] = 'La traducción fue creada basada en texto original diferente. Por favor actualice la traducción.';
$string['startinlinetranslation'] = 'Iniciar traducción en línea';
$string['stopinlinetranslation'] = 'Detener traducción en línea';
$string['substitutetext'] = 'Contenido de traducción';
$string['targetlanguage'] = 'Idioma de traducción';
$string['translate_good'] = 'Traducción - la traducción está actualizada';
$string['translate_none'] = 'Traducción - no existe traducción';
$string['translate_stale'] = 'Traducir - traducción necesita actualizarse';
$string['translatedby'] = 'Traducido por';
$string['translation'] = 'Traducción';
$string['translationalreadyexists'] = 'La traducción no puede ser guardada. Ya existe una traducción para el idioma "{$a}".';
$string['translationcreated'] = 'Traducción de contenido creada';
$string['translationdeleted'] = 'Traducción de contenido eliminada';
$string['translationdetails'] = 'Detalles de traducción';
$string['translationid'] = 'ID de traducción';
$string['translationissues'] = 'Problemas con traducción';
$string['translationissuesincoursemissing'] = 'Faltantes en este curso';
$string['translationissuesincoursestale'] = 'Rancios en este curso';
$string['translationissuesinpagemissing'] = 'Faltantes en esta página';
$string['translationissuesinpagemissingall'] = 'Todas las traducciones faltantes';
$string['translationissuesinpagestale'] = 'Rancios en esta página';
$string['translationissuesinpagestaleall'] = 'Todas las traducciones rancias';
$string['translations'] = 'Traducciones';
$string['translations:bulkdeletetranslations'] = 'Eliminar traducciones masivamente';
$string['translations:bulkimporttranslations'] = 'Importar traducciones masivamente';
$string['translations:deletetranslations'] = 'Eliminar traducciones';
$string['translations:editsitedefaulttranslations'] = 'Editar traducciones del idioma predeterminado del sitio';
$string['translations:edittranslationhashkeys'] = 'Editar claves hash';
$string['translations:edittranslations'] = 'Editar traducciones';
$string['translations:exporttranslations'] = 'Exportar traducciones';
$string['translationupdated'] = 'Traducción de contenido actualizada';
$string['unknowncolumn'] = 'Columna o tabla desconocida';
$string['unknownformtype'] = 'Tipo de formato desconocido';
$string['untranslatedpages'] = 'Páginas a dejar sin traducir';
$string['untranslatedpages_desc'] = 'Una por línea.';
$string['url'] = 'Página';
$string['userid'] = 'ID del usuario';
