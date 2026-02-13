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
 * Strings for component 'block', language 'es_mx', version '4.4'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = 'Añadir bloque {$a}';
$string['anypagematchingtheabove'] = 'Cualquier página que coincida con lo de arriba';
$string['appearsinsubcontexts'] = 'Aparece en sub-contextos';
$string['assignrolesinblock'] = 'Asignar roles en el bloque {$a}';
$string['blocksdrawertoggle'] = 'Ocultar/mostrar cajón de bloques';
$string['blocksettings'] = 'Configuraciones del bloque';
$string['bracketfirst'] = '{$a} (primero)';
$string['bracketlast'] = '{$a} (último)';
$string['configureblock'] = 'Configurar bloque {$a}';
$string['contexts'] = 'Contextos de página';
$string['contexts_help'] = 'Los contextos son tipos de páginas más específicas, donde este bloque puede mostrarse dentro de la ubicación original del bloque. Usted tendrá diferentes opciones aquí, dependiendo de la ubicación original del bloque y su ubicación actual de Usted. Por ejemplo, Usted puede restringir un bloque para que solamente aparezca en páginas del foro en un curso al añadir el bloque al curso (haciéndolo aparecer en todas las sub-páginas), y después yendo a un foro y editando las configuraciones del bloque de nuevo, para restringir la visualización a solamente páginas de foro.';
$string['createdat'] = 'Ubicación original del bloque';
$string['createdat_help'] = 'La ubicación original donde fue creado el bloque. Las configuraciones del bloque pueden ocasionar que este bloque aparezca en otras ubicaciones (contextos) dentro de la ubicación original. Por ejemplo: un bloque creado dentro de una página de un curso podría ser mostrado en las actividades dentro de ese curso. Un bloque creado en la página de inicio del sitio puede ser mostrado en todo el sitio.';
$string['defaultregion'] = 'Región por defecto';
$string['defaultregion_help'] = 'Los temas pueden definir una o más regiones de bloques nombrados en donde se desplieguen los bloques. Estas configuraciones definen en cuales de estas regiones quiere Usted que aparezca por defecto este bloque. La región puede ser anulada en páginas específicas si se requiere.';
$string['defaultweight'] = 'Ponderación por defecto';
$string['defaultweight_help'] = 'La ponderación por defecto le permite elegir aproximadamente donde quiere que se muestre el bloque dentro de la región elegida, sea arriba o abajo. El lugar final se calcula de todos los bloques en esa región (por ejemplo: solamente un bloque puede estar realmente hasta arriba). Este valor puede anularse en páginas específicas si se requiere.';
$string['deleteblock'] = 'Eliminar bloque {$a}';
$string['deleteblockcheck'] = 'Esto eliminará el bloque {$a}.';
$string['deleteblockinprogress'] = 'El bloque {$a} está actualmente en proceso de ser removido...';
$string['deleteblockwarning'] = '<p>Usted está a punto de eliminar un bloque que aparece en otro lado.</p><p>Ubicación original del bloque: {$a->location}<br />Mostrar en tipos de páginas: {$a->pagetype}</p><p>¿Está seguro de querer continuar?</p>';
$string['deletecheck'] = '¿Eliminar bloque {$a} ?';
$string['deletecheck_modal'] = '¿Eliminar bloque?';
$string['hideblock'] = 'Ocultar bloque {$a}';
$string['hidepanel'] = 'Ocultar panel';
$string['moveblock'] = 'Mover bloque {$a}';
$string['moveblockafter'] = 'Mover bloque después del bloque {$a}';
$string['moveblockbefore'] = 'Mover bloque antes del bloque {$a}';
$string['moveblockinregion'] = 'Mover bloque a la región {$a}';
$string['movingthisblockcancel'] = 'Moviendo este bloque ({$a})';
$string['myblocks'] = 'Mis bloques';
$string['onthispage'] = 'En esta página';
$string['pagetypes'] = 'Tipos de página';
$string['pagetypewarning'] = 'El tipo de página previamente especificado ya no es elegible. Por favor elija el tipo de página más apropiado debajo.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Registros de cuando un usuario apartó un bloque';
$string['privacy:metadata:userpref:hiddenblock'] = 'Registros de cuando un usuario colapsó/ocultó un bloque';
$string['privacy:request:blockisdocked'] = 'Indica si es que el bloque se apartó';
$string['privacy:request:blockishidden'] = 'Indica si es que el bloque fue ocultado/colapsado';
$string['region'] = 'Región';
$string['restrictpagetypes'] = 'Mostrar en tipos de página';
$string['showblock'] = 'Mostrar bloque {$a}';
$string['showoncontextandsubs'] = 'Mostrar en \'{$a}\' y las páginas en su interior';
$string['showoncontextonly'] = 'Mostrar en \'{$a}\' solamente';
$string['showonentiresite'] = 'Mostrar en todo el sitio';
$string['showonfrontpageandsubs'] = 'Mostrar en la página de inicio del sitio y en cualquier página agregada a la página de inicio del sitio.';
$string['showonfrontpageonly'] = 'Mostrar sólo en la página de inicio del sitio';
$string['subpages'] = 'Páginas seleccionadas';
$string['thisspecificpage'] = 'Esta página específica';
$string['visible'] = 'Visible';
$string['weight'] = 'Ponderación';
$string['wherethisblockappears'] = 'Donde aparece el bloque';
