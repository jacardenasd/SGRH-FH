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
 * Strings for component 'tiny_medial', language 'es_mx', version '4.4'.
 *
 * @package     tiny_medial
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['embedopt'] = 'Habilitar opciones de incrustación';
$string['embedopt_desc'] = 'Habilite una selección de estilos de incrustación para videos (iframe incrustado, ventana emergente con miniatura, enlace emergente). Requiere que esté instalado el plugin de filtro.';
$string['helplinktext'] = 'Insertar vídeo MEDIAL';
$string['hideinsert'] = 'Hide the Insert button';
$string['iframe'] = 'Vídeo incrustado';
$string['inserttype'] = 'Insertar como';
$string['medial:visiblemodtype'] = 'El usuario puede agregar videos MEDIAL usando un editor de texto pequeño si el módulo está habilitado para este permiso en la configuración del plugin MEDIAL pequeño';
$string['menuitem_insertmedial'] = 'Insertar vídeo MEDIAL';
$string['menuitem_insertmediallib'] = 'Botón Insertar Biblioteca MEDIAL';
$string['modtypedesc'] = 'El plugin MEDIAL TinyMCE tiene un permiso alternativo tiny/medial:visiblemodtype que se puede usar para anular el permiso MEDIAL atto predeterminado, principalmente para que los estudiantes puedan tener acceso al botón MEDIAL en tipos de módulos seleccionados. De manera predeterminada, no hay módulos habilitados para este permiso, pero puede habilitarlos ingresando una lista de nombres de módulos en este cuadro. La lista debe tener un nombre de módulo en cada línea y debe usar el código Moodle subyacente para el módulo escrito en minúsculas, por ejemplo, para foros, ingrese forum. Todos los módulos incluidos aquí tendrán el video MEDIAL generado como un enlace en lugar de un iframe, ya que los iframes generalmente no funcionan para los usuarios estudiantes. Deje este campo en blanco si no desea habilitar esta función.';
$string['modtypetitle'] = 'Módulos que utilizan el permiso alternativo';
$string['placeholder'] = 'Usar URL de reemplazable (requiere filtro MEDIAL)';
$string['placeholder_desc'] = 'Utilice un reemplazable para la URL de inicio de MEDIAL en lugar de la URL real. Esto evita que se rompan los enlaces si la URL de su sitio cambia, pero <span style="font-weight:bold">requiere que el plugin de filtro MEDIAL esté instalado y activo</span> para funcionar. Activar esta configuración hará que se use un enlace en lugar de un iframe en todos los casos para compatibilidad con el modo de edición, por lo que se ignorará la configuración "Usar un enlace al recurso MEDIAL". Además, dado que el filtro no actúa en el editor en sí, los enlaces MEDIAL se romperán cuando se usen en el editor TinyMCE y solo funcionarán en la página final.';
$string['pluginname'] = 'MEDIAL';
$string['showlibrary'] = 'Mostrar Biblioteca MEDIAL';
$string['showvideo'] = 'Ver vídeo MEDIAL';
$string['uselinkdesc'] = 'Algunos tipos de módulos de actividad eliminarán el iframe MEDIAL creado por el plugin MEDIAL TinyMCE incluso para los usuarios que tienen permisos de profesor. Para solucionar esto, el plugin atto puede generar un enlace normal al recurso. Los módulos deben aparecer aquí de la misma manera que la función de permiso alternativo. Se sabe que las actividades de Taller y Foro hacen esto, por lo que se incluyen de forma predeterminada. Si desea que los enlaces se muestren como iframes incrustados de todos modos, instale el plugin de filtro MEDIAL. Si la opción de reemplazable anterior está activada, siempre se utilizará un enlace independientemente de los módulos especificados aquí.';
$string['uselinktitle'] = 'Utilice un enlace al recurso MEDIAL';
