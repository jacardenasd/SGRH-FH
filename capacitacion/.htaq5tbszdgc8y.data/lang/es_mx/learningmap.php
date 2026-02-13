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
 * Strings for component 'learningmap', language 'es_mx', version '4.4'.
 *
 * @package     learningmap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsettings'] = 'Configuraciones avanzadas';
$string['allowedfilters'] = 'Filtros permitidos para usar con mod_learningmap';
$string['allowedfilters_desc'] = 'Lista separada por comas sin filter_ prefix';
$string['backgroundfile'] = 'Imagen de fondo';
$string['backgroundfile_help'] = 'Este archivo será usado como fondo para el mapa.';
$string['backlink'] = 'Para "{$a->name}"';
$string['backlinkallowed'] = 'Permitir retro-enlaces automáticos';
$string['backlinkallowed_desc'] = 'Si esta configuración está habilitada, los usuarios pueden elegir configurar automáticamente retro-enlaces al mapa de aprendizaje desde las páginas de módulo de las actividades usadas en el mapa de aprendizaje.';
$string['cachedef_backlinks'] = 'Este caché almacena información acerca de si hay o no un retroenlace (backlink) al mapa de aprendizaje para mostrar en una página de módulo de curso.';
$string['completion_with_all_places'] = 'Es necesario llegar a todos los lugares para finalización';
$string['completion_with_all_targets'] = 'Es necesario llegar a todos los lugares de destino para finalización';
$string['completion_with_one_target'] = 'Es necesario llegar a un lugar de destino para finalización';
$string['completiondetail:all_places'] = 'Llegar a todos los lugares';
$string['completiondetail:all_targets'] = 'Llegar a todos los lugares de destino';
$string['completiondetail:one_target'] = 'Llegar a un lugar de destino';
$string['completiondisabled'] = 'El seguimiento de finalización está deshabilitado en las configuraciones del curso. Sin seguimiento de finalizaci{on este plugin no funcionará.';
$string['completiontype'] = 'Tipo de finalización';
$string['editorhelp'] = 'Como usar el editor';
$string['editplace'] = 'Editar lugar';
$string['fill_backlink_cache_task'] = 'Llenar caché de retro-enlace de mapa de aprendizaje';
$string['freetype_required'] = 'La extensión FreeType a GD es necesaria para ejecutar mod_learningmap';
$string['groupmode'] = 'Modo de grupo';
$string['groupmode_help'] = 'Cuando está activo el modo de grupo, es suficiente con que un miembro del grupo haya completado una actividad para poder tener los lugares conectados disponibles.';
$string['hiddenactivitywarning'] = 'Esta actividad está oculta y no puede ser accesada por estudiantes';
$string['hidepaths'] = 'Ocultar rutas';
$string['hidepaths_help'] = 'Esta opción oculta las rutas en la vista del estudiante mientras permanece funcional para construir dependencias entre las actividades.';
$string['hidestroke'] = 'Ocultar trazo para lugares';
$string['hidestroke_help'] = 'Esta opción oculta el trazo para los lugares.';
$string['hover'] = 'Animación al pasar ratón encima para lugares';
$string['hover_help'] = 'Esta opción añade una animación al los lugares  cuando el ratón les pasa encima con el cursor.';
$string['intro'] = 'Mapa de aprendizaje';
$string['intro_help'] = '<ul><li><b>Añadir un nuevo lugar:</b> Doble clic en el fondo</li>
<li><b>Añadir una ruta:</b> Un clic en dos lugares</li>
<li><b>Quitar un lugar / una ruta:</b> Doble clic allí</li>
<li><b>Cambiar propiedades de un lugar:</b> Clic derecho en él</li></ul>';
$string['learningmap'] = 'Mapa de aprendizaje';
$string['learningmap:addinstance'] = 'Añadir un nuevo Mapa de aprendizaje';
$string['learningmap:view'] = 'Ver Mapa de aprendizaje';
$string['loading'] = 'Learningmap está cargando...';
$string['modulename'] = 'Mapa de aprendizaje';
$string['modulename_help'] = 'El módulo de mapa de aprendizaje le permite estructurar actividades en un curso como lugares en un mapa, conectados por rutas. Algunos lugares son sitios de inicio y son mostrados desde el principio. Otros lugares y rutas son mostrados cuando las actividades de los lugares conectados están completadas.';
$string['modulenameplural'] = 'Mapas de aprendizaje';
$string['name'] = 'Nombre del Mapa de aprendizaje';
$string['name_help'] = 'El nombre del mapa de aprendizaje solamente es mostrado si  "Mostrar mapa en página del curso" no está seleccionado.';
$string['nocompletion'] = 'Sin finalización con elementos del mapa';
$string['nocompletionenabled'] = 'No disponible porque la finalización no está habilitada';
$string['ownprogress'] = 'Mi propio progreso';
$string['paths'] = 'Rutas';
$string['places'] = 'Lugares';
$string['pluginadministration'] = 'Administración de Mapa de aprendizaje';
$string['pluginname'] = 'Mapa de aprendizaje';
$string['privacy:metadata'] = '';
$string['pulse'] = 'Pulsar animación para lugares no visitados';
$string['pulse_help'] = 'Esta opción añade una animación a lugares no visitados para resaltarlos.';
$string['showall'] = 'Mostrar todas las rutas y lugares';
$string['showall_help'] = 'Esta opción muestra todas las rutas y lugares del mapa desde el principio. Los lugares y rutas que aun no son alcanzables están atenuados.';
$string['showbacklink'] = 'Mostrar retroenlaces (backlinks) en páginas de módulo de curso';
$string['showbacklink_help'] = 'Esta opción muestra un enlace "Regresar a mapa de aprendizaje" en todas las páginas de módulo de curso que pertenecen al mapa.';
$string['showmaponcoursepage'] = 'Mostrar mapa en página de curso';
$string['showmaponcoursepage_help'] = 'Si se activa, el mapa de aprendizaje será mostrado en la página del curso (como una etiqueta). En caso contrario habrá un enlace y el mapa será mostrado en una página separada.';
$string['showtext'] = 'Mostrar nombres de actividades';
$string['showtext_help'] = 'Esta opción muestra los nombres de las actividades como un texto junto a los lugares. El texto puede ser arrastrado y movido y es actualizado automáticamente cuando cambia el nombre de la actividad.';
$string['showwaygone'] = 'Resaltar camino';
$string['showwaygone_help'] = 'Esta opción resalta el camino que tomó el participante a través del mapa (en el orden de tiempos de finalización).';
$string['slicemode'] = 'Revelar mapa con lugares';
$string['slicemode_help'] = 'Esta opción revela subsecuentemente el mapa cuando los nuevos lugares se vuelven alcanzables. Las partes ocultas del mapa están cubiertas con niebla. La niebla de levantará completamente tan pronto como todos los lugares se vuelvan alcanzables.';
$string['startingplace'] = 'Lugar de inicio';
$string['svgcode'] = 'Código SVG';
$string['targetplace'] = 'Lugar de destino';
$string['usecasehelp'] = 'Como usar Mapas de aprendizaje';
$string['usecaselink'] = 'Enlace hacia una página que explica el uso del Mapa de aprendizaje';
$string['usecheckmark'] = 'Palomita para lugares visitados';
$string['usecheckmark_help'] = 'Eta opción muestra adicionalmente una palomita en lugares visitados.';
$string['visited'] = 'Visitado';
