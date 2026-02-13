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
 * Strings for component 'repository_opencast', language 'es_mx', version '4.4'.
 *
 * @package     repository_opencast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configplugin'] = 'Configuraciones de Opencast';
$string['opencast:view'] = 'Ver repositorio Opencast';
$string['opencastauthor'] = 'Autor predeterminado de Opencast';
$string['opencastchannelid'] = 'ID de canal de Opencast';
$string['opencastchannelid_help'] = 'Configurar la ID del canal de publicación para buscar recuperar la URL del video y de la miniatura.';
$string['opencastinstance'] = 'Instancia de Opencast';
$string['opencastplayerurl'] = 'Incrustar URL al reproductor en lugar de hacerlo al archivo del medio.';
$string['opencastplayerurl_help'] = 'Si se selecciona, se usará la URL del reproductor Opencast. en caso contrario, el repositorio selecciona la URL a un archivo de video del evento Opencast.';
$string['opencastthumbnailflavor'] = 'Sabor preferido para obtener la imagen miniatura';
$string['opencastthumbnailflavorfallback'] = 'Estilo de respaldo para obtener la imagen miniatura';
$string['opencastthumbnailflavorfallback_help'] = 'Configura la variante que se debe usar si no hay ningún archivo adjunto con la variante preferida.
Si deja en blanco la búsqueda de miniaturas, el plugin intentará encontrar automáticamente la URL de la miniatura.';
$string['opencastvideoflavor'] = 'Variante para obtener video';
$string['opencastvideoflavor_help'] = 'Una publicación puede tener varios archivos adjuntos con diferentes estilos. Configure el estilo que se usará para obtener la URL del video.
Si deja este campo en blanco, se usará la primera URL de video disponible que se encuentre en los archivos adjuntos.';
$string['pluginname'] = 'Videos Opencast';
$string['privacy:metadata'] = 'El repositorio Opencast solo muestra vídeos de Opencast, pero no afecta ni almacena ningún dato personal.';
