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
 * Strings for component 'block_behaviour', language 'es_mx', version '4.4'.
 *
 * @package     block_behaviour
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminheader'] = 'Otorgar o revocar rol de investigador a usuario por curso';
$string['adminheadershownames'] = 'Mostrar nombres o números consecutivos para estudiantes';
$string['adminheaderstudyid'] = 'Ocultar o mostrar la ID de estudio de estudiante';
$string['adminheaderuselord'] = 'Integrar con plugin LORD';
$string['adminuselorddesc'] = 'Esto le dará a los profesores la opción de tomar la gráfica de objeto de aprendizaje del plugin del bloque Learning Object Relation Discovery (LORD)';
$string['adminuselordlabel'] = '¿Permitir uso de la gráfica de LORD?';
$string['alreadyexists'] = 'El archivo {$a} ya existe, por favor elija otro nombre de archivo.';
$string['badfile'] = 'Campos de archivo desconocidos. ¿Tiene los correctos?';
$string['behaviour'] = 'Analítica del Comportamiento';
$string['behaviour:addinstance'] = 'Añadir un nuevo bloque de Analítica del Comportamiento';
$string['behaviour:export'] = 'Exportar';
$string['behaviour:myaddinstance'] = 'Añadir un nuevo bloque de Analítica del Comportamiento ala página de Mi Moodle';
$string['behaviour:view'] = 'Ver Analítica del Comportamiento';
$string['close'] = 'Cerrar';
$string['cluster'] = 'Racimo';
$string['clusteringname'] = 'Nombrar a este análisis';
$string['clusteringnamebutton'] = 'Guardar';
$string['convergence'] = 'Convergencia';
$string['copy'] = 'Copiar';
$string['decomposed'] = 'Centroides descompuestos';
$string['delbutton'] = 'Eliminar datos seleccionados';
$string['delcluster'] = 'Eliminar datos del racimo';
$string['delclusterdesc'] = 'Elimina todos los racimos, racimos manuales, membresía de racimos, y datos de comentario de centroide de todos los usuarios en este curso.';
$string['delconfirm'] = '¿Está seguro de querer eliminar los datos del racimo seleccionado? Esta acción no puede deshacerse.';
$string['deldata'] = 'Eliminar datos';
$string['deleteall'] = 'Eliminar racimo, configuración de gráfica y/o datos de estudiantes seleccionados';
$string['delgraph'] = 'Eliminar datos de gráfica';
$string['delgraphdesc'] = 'Eliminar todos los datos de configuración de gráfica para todos los usuarios en este curso.';
$string['deluser'] = 'Eliminar datos de estudiante';
$string['deluserdesc'] = 'Elimina todos los datos de bitácora de estudiante para este curso. Estas bitácoras son un duplicado de las bitácoras de Moodle que extrae Analítica del Comportamiento. Ningún dato es eliminado de las bitácoras de Moodle.';
$string['disttocluster'] = 'Distancia al racimo';
$string['docsanchor'] = 'Documentación';
$string['docshowconfig'] = 'Cómo configurar los nodos de recurso.';
$string['docshowdelete'] = 'Cómo eliminar datos';
$string['docshowimport'] = 'Cómo importar y exportar datos.';
$string['docshowlord'] = 'Cómo integrar con el plugin Learning Object Relation Discovery (LORD).';
$string['docshowreplay'] = 'Como volver a reproducir los resultados del racimo.';
$string['docshowset'] = 'Cómo cambiar configuraciones globales.';
$string['docshowtask'] = 'Cómo usar trabajos agendados.';
$string['docshowview'] = 'Cómo ver la gráfica del comportamiento de estudiante y reproducir racimo.';
$string['docsissues'] = 'Reportar un problema';
$string['docswhatis'] = '¿Qué es la Analítica del Comportamiento?';
$string['eventbehaviourexported'] = 'Archivo de bitácora de Analítica del Comportamiento exportada';
$string['eventbehaviourimported'] = 'Archivo de bitácora de Analítica del Comportamiento importada';
$string['eventbehaviourviewed'] = 'Analítica del Comportamiento vista';
$string['exportbutlabel'] = 'Exportar';
$string['exportcliout'] = 'Exportando bitácoras a {$a}';
$string['exportcliusage'] = 'Uso: ./export-cli.php courseid past(0|1) current(0|1) [filename]';
$string['exportcurlabel'] = 'Actual';
$string['exportdata'] = 'Exportar todos los datos (anonimizados)';
$string['exportdatafn'] = '{$a}_completo';
$string['exported'] = 'El usuario con id \'{$a->uid}\' exportó un archivo de bitácora para el curso con id \'{$a->cid}\'.';
$string['exportlogs'] = 'Exportar bitácoras de estudiante';
$string['exportpastlabel'] = 'Pasado';
$string['f1'] = 'F1';
$string['f2'] = 'F2';
$string['fhalf'] = 'F0.5';
$string['geometrics'] = 'Centroides geométricos';
$string['goodfile'] = 'Importación de archivo exitosa.';
$string['graph'] = 'Gráfica';
$string['hide'] = 'Ocultar';
$string['importbutlabel'] = 'Importar';
$string['imported'] = 'El usuario con id \'{$a->uid}\' importó un archivo de bitácora para el curso con id \'{$a->cid}\'.';
$string['importlogs'] = 'Importar bitácoras de estudiante';
$string['invalidcourse'] = 'Número ID de curso {$a} no es válido. No existe el curso.';
$string['iteration'] = 'Iteración';
$string['launchconfiguration'] = 'Configurar nodos de recurso';
$string['launchplugin'] = 'Ver comportamiento de estudiante';
$string['linksweight'] = 'Ponderación de enlaces';
$string['manualcluster'] = 'Racimos manuales';
$string['members'] = 'miembros';
$string['nofile'] = 'No se seleccionó un archivo. Por favor elija un archivo.';
$string['nogroup'] = 'Sin grupo';
$string['nonodes'] = 'Importación falló: Se necesita configurar primeramente nodos de recurso.';
$string['nullexport'] = 'Nada para exportar';
$string['numofclusters'] = 'Número de racimos';
$string['numstudents'] = 'Número de estudiantes';
$string['pluginname'] = 'Analítica del Comportamiento';
$string['precision'] = 'Precisión';
$string['print'] = 'Imprimir';
$string['privacy:metadata:block_behaviour:centroidx'] = 'El valor de coordenada-x del centroide.';
$string['privacy:metadata:block_behaviour:centroidy'] = 'El valor de coordenada-y del centroide.';
$string['privacy:metadata:block_behaviour:changed'] = 'La última vez que se movió este nodo de gráfica.';
$string['privacy:metadata:block_behaviour:clusterid'] = 'Identificador único para ejecuciones de racimos.';
$string['privacy:metadata:block_behaviour:clusternum'] = 'Identificador para diferentes racimos.';
$string['privacy:metadata:block_behaviour:commentid'] = 'Identificador único para el comentario.';
$string['privacy:metadata:block_behaviour:coordsid'] = 'Identificador único para nodo de gráfica que coordina configuraciones.';
$string['privacy:metadata:block_behaviour:courseid'] = 'Número de identificador único del curso al cual pertenece este registro.';
$string['privacy:metadata:block_behaviour:iteration'] = 'El número de iteración del racimo.';
$string['privacy:metadata:block_behaviour:moduleid'] = 'Identificador único para módulos de curso.';
$string['privacy:metadata:block_behaviour:numnodes'] = 'El número de accesos a recursos.';
$string['privacy:metadata:block_behaviour:remark'] = 'El texto del comentario.';
$string['privacy:metadata:block_behaviour:scale'] = 'El valor de escala para des-normalizar los nodos de gráfica.';
$string['privacy:metadata:block_behaviour:studentid'] = 'Identificador único para estudiantes.';
$string['privacy:metadata:block_behaviour:studyid'] = 'Un identificador anonimizado único para estudiantes.';
$string['privacy:metadata:block_behaviour:totalx'] = 'Valor acumulado de coordenada-x';
$string['privacy:metadata:block_behaviour:totaly'] = 'Valor acumulado de coordenada-y';
$string['privacy:metadata:block_behaviour:userid'] = 'Número de identificador único del estudiante que dej´´o este registro.';
$string['privacy:metadata:block_behaviour:visible'] = 'Si es que es visible o no el nodo de gráfica.';
$string['privacy:metadata:block_behaviour:xcoord'] = 'El valor de coordenada-x del nodo de gráfica.';
$string['privacy:metadata:block_behaviour:ycoord'] = 'El valor de coordenada-y del nodo de gráfica.';
$string['privacy:metadata:block_behaviour_centres'] = 'Valores de centroide de estudiante descompuesto';
$string['privacy:metadata:block_behaviour_centroids'] = 'Tabla para almacenar información de centroide acumulada-';
$string['privacy:metadata:block_behaviour_clusters'] = 'Tabla para almacenar datos de racimo.';
$string['privacy:metadata:block_behaviour_comments'] = 'Datos de comentario que los investigadores han ingresado para racimos y miembros de racimos.';
$string['privacy:metadata:block_behaviour_coords'] = 'Coordenadas para los nodos de cada módulo de curso en la gráfica.';
$string['privacy:metadata:block_behaviour_lord_options'] = 'Guardar las opciones de integración con plugin LORD.';
$string['privacy:metadata:block_behaviour_members'] = 'Tabla para almacenar datos de membresía del racimo.';
$string['privacy:metadata:block_behaviour_scales'] = 'Escalando datos para las configuraciones de gráfica.';
$string['privacy:metadata:block_behaviour_studyids'] = 'Un mapeo de IDs de curso y estudiante a sus respectivas IDs de estudio.';
$string['randcentroids'] = 'Centroides aleatorios';
$string['removegraph'] = 'Quitar gráfica';
$string['researchrole'] = 'Otorgar rol de investigador a {$a->username} para {$a->coursename}';
$string['reset'] = 'Reiniciar';
$string['save'] = 'Guardar';
$string['section'] = 'Sección';
$string['settings'] = 'Opciones de integración con LORD';
$string['showcentroids'] = 'Mostrar centroides';
$string['shownamesdesc'] = 'Esto mostrará el Nombre y Apellido(s) o IDs secuenciales para estudiantes.';
$string['shownameslabel'] = '¿Mostrar nombres de estudiantes?';
$string['studyid'] = 'Su ID de estudio: {$a}';
$string['studyiddesc'] = 'Esto mostrará la ID de estudio del estudiante en todos los cursos.';
$string['studyidlabel'] = '¿Permitirle a estudiantes ver su ID de estudio?';
$string['title'] = 'Analítica del Comportamiento';
$string['totalmeasures'] = 'Medidas totales';
$string['update'] = 'Actualizar Analítica del Comportamiento';
$string['uselordcustomdesc'] = 'Esto usará la gráfica de LORD que ha sido manipulada. En caso contrario, la gráfica generada por el sistema será usada.';
$string['uselordcustomlabel'] = '¿Usar la gráfica manipulada de LORD?';
$string['uselorddesc'] = 'Esto tomará la gráfica del objeto de aprendizaje del plugin del bloque Learning Object Relation Discovery (LORD).';
$string['uselordlabel'] = '¿Usar la gráfica de LORD?';
$string['viewed'] = 'El usuario con id \'{$a->uid}\' vió Analítica del Comportamiento para el curso con id \'{$a->cid}\'.';
$string['wrongfile'] = 'Nombre del curso no está en nombre del archivo. ¿Tiene el correcto?';
