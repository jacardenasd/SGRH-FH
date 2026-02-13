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
 * Strings for component 'block_verify_certs', language 'es_mx', version '4.4'.
 *
 * @package     block_verify_certs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bypassverifyany'] = 'Permitir verificar cualquier certificado';
$string['bypassverifyany_help'] = 'Esta configuración habilita la verificación de cualquier certificado disponible al sobrepasar la lógica de la actividad de Certificado personalizado.<br/>Por favor tenga en cuenta: los registros archivados siempre están disponibles para verificación.';
$string['checkarchive'] = 'Comprobar registros archivados';
$string['checkarchive_help'] = 'Si se habilita, los registros archivados serán comprobados como parte del proceso de verificación.';
$string['checkarchive_info'] = 'Para "{$a}" registros archivados serán comprobados como parte del proceso de verificación. No hay manera de deshabiltar eso.';
$string['code'] = 'Código';
$string['displayinfo'] = 'Mostrar información extra';
$string['displayinfo_help'] = 'Esto habilita el mostrar información extra, tal como nombre completo del usuario, curso y fecha de emisión si fue verificado por un usuario que no posee un certificado. en caso contrario, mostrará solamente un hecho de verificación.';
$string['enabled'] = 'Habilitado';
$string['enabled_help'] = 'Si se habilita, este tipo de certificados estarán incluidos en el proceso de verificación. en caso contrario, este tipo de certificado será saltado.';
$string['expiredcertificate'] = 'Este certificado ha expirado';
$string['issueddate'] = 'Fecha de emisión';
$string['mod_certificate'] = 'Certificado (mod_certificate)';
$string['mod_coursecertificate'] = 'Certificado del curso (mod_coursecertificate)';
$string['mod_customcert'] = 'Certificado personalizado (mod_customcert)';
$string['pluginname'] = 'Verificar certificados';
$string['privacy:metadata'] = 'El bloque para verificar certificados solamente muestra datos almacenados en otros lugares.';
$string['recompletionmissing'] = 'El plugin de re-finalización del curso (local_recompletion) no está instalado. El archivar este tipo de certificado no está disponible..';
$string['validcertificate'] = 'Este certificado es válido';
$string['verify'] = 'Verificar';
$string['verify_certs:addinstance'] = 'Añadir un bloque para verificar certificados';
$string['verify_certs:myaddinstance'] = 'Añadir un bloque para verificar certificados al Tablero';
$string['verify_certs:view'] = 'Ver un bloque para verificar certificados';
$string['verifycertificates'] = 'Verificar certificados';
