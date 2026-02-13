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
 * Strings for component 'tiny_multilang2', language 'es_mx', version '4.4'.
 *
 * @package     tiny_multilang2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlanguage'] = 'Añadir idioma manualmente';
$string['addlanguage_desc'] = 'Si elige esta opción, usted puede añadir manualmente idiomas al escribir el código ISO del idioma en el área de texto debajo. en caso contrario, usted debe instalar al menos dos idiomas en los Paquetes de Idioma.';
$string['helplinktext'] = 'Contenido Multi-Idioma (v2)';
$string['highlight'] = 'Resaltar delimitadores';
$string['highlight_desc'] = 'Resaltar visualmente los delimitadores de contenido multi-idioma (por ejem., {mlang XX} y {mlang}) en el editor WYSIWYG';
$string['highlightcss'] = 'CSS para marca de idioma';
$string['highlightcss_desc'] = 'CSS usado para resaltar los delimitadores de contenido multi-idioma.

Si usted quiere mostrar el idioma para los bloques multiidioma, usted puede usar algo como lo siguiente (este ejemplo es para el idioma Vasco, los colores probablemente no sean los mejores):

<pre>
.multilang-begin:lang(eu):before {
    content: "eu";
    position: relative;
    top: -0.5em;
    font-weight: bold;
    background-color: #e05e5e;
    color: #ffffff;
}
</pre>';
$string['language_options_desc'] = 'Seleccionar opción para el menú desplegable del botón de Idioma.
                             <br>La lista completa está disponible en  <small><a href=\'https://www.w3schools.com/tags/ref_language_codes.asp\'>
                             <u>https://www.w3schools.com/tags/ref_language_codes.asp</u></a></small>';
$string['language_setting'] = 'Configuraciones del botón de Idioma';
$string['languageoptions'] = 'Idioma';
$string['multilang2:desc'] = 'Añadir marcas (tags) multiidioma para contenido.';
$string['multilang2:langTagsInSelection'] = 'El texto seleccionado contiene marcas (tags) de idioma. Haga clic en una marca para seleccionarla.';
$string['multilang2:language'] = 'Idioma';
$string['multilang2:multiBlockElements'] = 'El texto seleccionado abarca varios párrafos o elementos de bloque. Por favor seleccione solo uno.';
$string['multilang2:other'] = 'Otro';
$string['multilang2:removetag'] = 'Quitar marca de idioma';
$string['multilang2:use'] = 'Usar menú desplegable de idioma en TinyMCE';
$string['multilang2:viewlanguagemenu'] = 'Ver menú desplegable de idioma en editor TinyMCE';
$string['pluginname'] = 'Contenido Multi-Idioma (v2)';
$string['privacy:metadata'] = 'El plugin de Contenido Multi-Idioma no almacena ningún dato personal.';
$string['removealltags'] = 'Quitar todas las marcas de idioma';
$string['requiremultilang2'] = 'Requerir filtro de Contenido Multi-Idioma';
$string['requiremultilang2_desc'] = 'Si se habilita, el menú desplegable de idioma es visible solamente cuando está habilitado el filtro de Contenido Multi-Idioma (v2).';
$string['showalllangs'] = 'Mostrar todos los idiomas';
$string['showalllangs_desc'] = 'Si se habilita, el menú desplegable de idioma contendrá todos los idiomas que Moodle soporta. En caso contrario, solamente serán mostrados los idiomas instalados y habilitados.';
$string['showfallbackother'] = 'Mostrar opción alternativa (otra)';
$string['showfallbackother_desc'] = 'Con el plugin de filtro de contenido multilingüe v2, existe una opción alternativa (otra) al definir un bloque de idioma que debe coincidir con cualquier idioma instalado y no hay ninguna sección definida para el idioma actual. Al deshabilitar esta opción, no se mostrará.';
