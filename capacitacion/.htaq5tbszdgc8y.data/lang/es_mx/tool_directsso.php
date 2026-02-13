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
 * Strings for component 'tool_directsso', language 'es_mx', version '4.4'.
 *
 * @package     tool_directsso
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Punto de entrada SSO directo';
$string['privacy:metadata'] = 'El plugin Direct SSO Entrypoint no almacena ningún dato personal.';
$string['setting_allowedauths'] = 'Plugins de autenticaciónpermitidos';
$string['setting_allowedauths_desc'] = 'Con esta configuración, puede controlar si se puede usar un método de autenticación con el punto de entrada SSO directo. Tenga en cuenta que no todos los métodos de autenticación instalados y habilitados están disponibles aquí; solo están disponibles algunos métodos de autenticación compatibles con este plugin.';
$string['setting_allowedwantspages'] = 'Destinos permitidos de páginas deseadas';
$string['setting_allowedwantspages_desc'] = 'Con esta configuración, usted controla adónde puede ser redirigido el usuario mediante el punto de entrada SSO directo. Ten en cuenta que solo se puede redirigir al usuario a páginas seleccionadas y no a URLs arbitrarias dentro de Moodle.';
$string['setting_configurationheading'] = 'Configuración';
$string['setting_explanationstatic_desc'] = 'Esta herramienta de administración proporciona un punto de entrada que puede usarse como URL persistente donde los sitios web externos pueden redirigir a los usuarios directamente a los mecanismos SSO de Moodle sin tener que mostrarles nunca la página de inicio de sesión y, especialmente, sin la necesidad de que el usuario haga clic en un botón SSO en la página de inicio de sesión.';
$string['setting_introductionheading'] = 'Introducción';
$string['setting_usableurls_none'] = 'Ninguno';
$string['setting_usableurlsheading'] = 'URLs utilizables';
$string['setting_usableurlsintro_desc'] = '<p>Las URL de los puntos de entrada se componen de varios elementos:</p><ul><li>El dominio del sitio Moodle</li><li>La ruta al script PHP de punto de entrada</li><li>El parámetro auth que indica el método de autenticación solicitado</li><li>El parámetro wantspage que indica a qué página se debe redirigir al usuario después del inicio de sesión SSO</li><li>Si el método de autenticación solicitado permite configurar varios backends de autenticación: El parámetro id que indica el ID del backend de autenticación configurado.</li><li>Si seleccionó un curso como destino de la página de deseos: El parámetro courseid que indica el ID del curso específico al que se debe redirigir al usuario.</li></ul>';
$string['setting_usableurlslist_desc'] = 'Según la configuración almacenada anteriormente, las siguientes URL de puntos de entrada se pueden utilizar actualmente:';
