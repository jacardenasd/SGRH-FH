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
 * Strings for component 'fileconverter_flasksoffice', language 'es_mx', version '4.4'.
 *
 * @package     fileconverter_flasksoffice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['disabled'] = 'Deshabilitado';
$string['event:document_conversion'] = 'Conversión de documento';
$string['preparesubmissionsforannotation'] = 'Preparar envíos para anotación';
$string['privacy:metadata:fileconverter_flasksoffice:externalpurpose'] = 'La información es enviada al servidor rest Flask para ser convertida a un formato alternativo. El archivo es conservado temporalmente en el servidor rest Flask y es eliminado después que se haga la conversión.';
$string['privacy:metadata:fileconverter_flasksoffice:filecontent'] = 'El contenido del archivo.';
$string['privacy:metadata:fileconverter_flasksoffice:filemimetype'] = 'El tipo MIME del archivo.';
$string['privacy:metadata:fileconverter_flasksoffice:params'] = 'Los parámetros de la consulta pasados al servidor rest Flask.';
$string['settings:flasksofficeurl'] = 'URL del Servidor de Documento';
$string['settings:flasksofficeurl_help'] = 'Especificar la URL adonde este servidor de documento puede ser alcanzado *por Moodle*. La URL nunca es resuelta en el navegador, solamente en solicitudes CURL por Moodle, por lo que se resolverá solamente dentro de la red local.';
$string['test_conversion'] = 'Probar conversión de documento';
$string['test_conversionnotready'] = 'Este convertidor de documento NO está configurado apropiadamente.';
$string['test_conversionready'] = 'Este convertidor de documento si está configurado apropiadamente.';
$string['test_converter'] = 'Probar si este convertidor está trabajando apropiadamente.';
