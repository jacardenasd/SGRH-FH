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
 * Strings for component 'coursechecker_links', language 'es_mx', version '4.4'.
 *
 * @package     coursechecker_links
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['book_chapter'] = 'Capítulo de libro: {$a->title}';
$string['connect_timeout_setting'] = 'Tiempo de espera de conexión cURL';
$string['connect_timeout_setting_desc'] = 'Tiempo para conectarse al servidor.';
$string['course_summary'] = 'Resumen del curso';
$string['domain_is_whitelisted'] = 'El dominio {$a->host} está en lista blanca para {$a->url}';
$string['domain_whitelist_setting'] = 'Lista blanca de dominios';
$string['domain_whitelist_setting_desc'] = 'Esta lista habilita todo el dominio. Añada una URL por línea, por ejemplo: <code>https://moodle.org</code>';
$string['error_code'] = 'Error HTTP {$a->http_code} en {$a->url}';
$string['error_curl'] = 'Error cURL {$a->curl_errno} {$a->curl_error} en {$a->url}';
$string['error_httpsecurity'] = 'El dominio {$a} está en lista negra al verificar su dirección y número de puerto contra las listas blanca y negra en la seguridad HTTP de Moodle.';
$string['error_undefined'] = 'Ocurrió un error indefinido con el enlace';
$string['pluginname'] = 'Revisión de enlaces';
$string['pluginname_help'] = 'Este plugin analiza el contenido del curso —incluyendo resúmenes, módulos, libros, wikis y URLs— para detectar hipervínculos y verificar su validez.';
$string['privacy:metadata'] = 'La revisión de enlaces no almacena datos personales. Los resultados de la revisión se guardan en el plugin course checker.';
$string['timeout_setting'] = 'Tiempo de espera cURL';
$string['timeout_setting_desc'] = 'Tiempo para conectarse al servidor e intercambiar datos.';
$string['url_code_valid'] = '{$a->url} es válida (Código {$a->http_code})';
$string['url_is_whitelisted'] = 'La URL {$a->url} está en lista blanca';
$string['url_whitelist_setting'] = 'Lista blanca de URLs';
$string['url_whitelist_setting_desc'] = 'Esta lista habilita únicamente la URL. Añada una URL por línea, por ejemplo: <code>https://moodle.org</code>';
$string['useragent_setting'] = 'Agente de usuario';
$string['useragent_setting_desc'] = 'El agente de usuario indica al sitio web qué navegador se está utilizando.';
$string['wiki_page'] = 'Página Wiki: {$a->title}';
