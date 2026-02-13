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
 * Strings for component 'factor_grace', language 'es_mx', version '4.4'.
 *
 * @package     factor_grace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Permite ingresar sin otro factor por un período de tiempo especificado.';
$string['pluginname'] = 'Período de gracia';
$string['preferences'] = 'Preferencias del usuario';
$string['privacy:metadata'] = 'El plugin del factor de Período de gracia no almacena ningún dato personal';
$string['redirectsetup'] = 'Usted debe completar la configuración para Autenticación por Factores Múltiples antes de que usted pueda proceder.';
$string['revokeexpiredfactors'] = 'Revocar factores expirados de período de Gracia';
$string['settings:customwarning'] = 'Contenido de banner de advertencia';
$string['settings:customwarning_help'] = 'Añadir contenido aquí para reemplazar la notificación de advertencia de gracia con contenidos HTML personalizados. Al añadir {timeremaining} en el texto se reemplazara con la duración de gracia actual para el usuario, y {setuplink} se reemplazará con la URL de la página de configuración para el usuario.';
$string['settings:forcesetup'] = 'Forzar configuración de factor';
$string['settings:forcesetup_help'] = 'Forzar a un usuario a la página de preferencias para configurar autenticación multi-factor cuando expire el período de gracia. Si no se activa, los usuarios no podrán autenticarse cuando expire el período de gracia.';
$string['settings:graceperiod'] = 'Período de Gracia';
$string['settings:graceperiod_help'] = 'Período de tiempo de cuando los usuarios pueden acceder al sitio sin factores configurados y habilitados.';
$string['settings:ignorelist'] = 'Factores ignorados';
$string['settings:ignorelist_help'] = 'El período de gracia no dará puntos si hay otros factores que los usuarios pueden usar para autenticarse con autenticación multi-factor. Cualquier factor aquí NO será contado por el período de gracia cuando se decida si es que se dan puntos. Esto puede permitirle al período de gracia el permitir la autenticación si otros factores, como E-mail, tuvieran problemas de configuración o del sistema.';
$string['setupfactors'] = 'Usted actualmente está en el período de gracia, y podría no tener suficientes factores configurados para ingresar una vez que expire el período de gracia. Vaya a {$a->url} para comprobar su estado de autenticación y configure más factores de autenticación. Su período de gracia expira en {$a->time}.';
$string['summarycondition'] = 'está dentro del período de gracia';
