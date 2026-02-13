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
 * Strings for component 'filter_multilang2', language 'es_mx', version '4.4'.
 *
 * @package     filter_multilang2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filtername'] = 'Contenido Multi-Idioma (v2)';
$string['parentlangalwaysen'] = 'Siempre usar idioma paterno, incluyendo \'en\'.';
$string['parentlangbehaviour'] = 'Comportamiento del idioma paterno';
$string['parentlangbehaviour_desc'] = '<p>
El filtro determina si se debe mostrar un bloque de idioma
en función de los idiomas especificados en el bloque y el idioma actual
que utiliza el usuario ("el idioma actual del usuario"). Este proceso de coincidencia puede seguir tres enfoques diferentes, conocidos como "<em>comportamiento de los idiomas paternos</em>":
</p>
<ol>
<li>
<b>Utilizar siempre los idiomas paternos, excluyendo "en".</b>
<ul>
<li>
Esta es la configuración predeterminada. El filtro tiene en cuenta los idiomas que aparecen en la etiqueta <code>{mlang
...}</code> del bloque de idioma y todos sus idiomas paternos (hasta el idioma raíz <code>en</code>, pero sin incluirlo).
</li>
<li>
Ejemplo: si un bloque de idioma especifica <code>{mlang
en_us_k12}</code>, solo se mostrará si el
idioma actual del usuario es <code>en_us_k12</code>
o <code>en_us</code> pero no <code>en</code>.
</li>
<li>
Nota: el inglés aún se puede usar explícitamente en el bloque de idioma.
Por ejemplo, <code>{mlang en}Este texto se mostrará
cuando el idioma actual del usuario sea \'en\'.{mlang}</code>
mostrará el contenido cuando el idioma actual del usuario
sea <code>en</code>.
</li>
</ul>
</li>
<li>
<b>Utilice siempre los idiomas paternos, incluido \'en\'.</b>
<ul>
<li>
Esta configuración funciona como la anterior, pero incluye la raíz <code>en</code> como un idioma paterno válido.
</li>
<li>
Ejemplo: si un bloque de idioma especifica <code>{mlang
en}</code>, se mostrará si el idioma actual del
usuario es <code>en_us_k12</code>,
<code>en_us</code> o <code>en</code>.
</li>
</ul>
</li>
<li>
<b>Nunca utilizar idiomas paternos.</b>
<ul>
<li>
Como sugiere el nombre, no se utilizan idiomas paternos. El
filtro solo coincide con los idiomas enumerados explícitamente en el
bloque de idioma, sin considerar ningún idioma paterno.
</li>
<li>
Ejemplo: si un bloque de idioma especifica <code>{mlang
en_us_k12}</code>, solo se mostrará si el
idioma actual del usuario es <code>en_us_k12</code>,
no <code>en_us</code>
o <code>en</code>.
</li>
</ul>
</li>
</ol>';
$string['parentlangdefault'] = 'Utilizar siempre los idiomas paternos, excluyendo \'en\' (comportamiento tradicional).';
$string['parentlangnever'] = 'Nunca usar idiomas paternos.';
$string['pluginname'] = 'Filtro Contenido Multi-Idioma (v2)';
$string['privacy:metadata'] = 'El plugin del filtro de Contenido Multi-idioma (v2) no almacena ningún dato personal.';
