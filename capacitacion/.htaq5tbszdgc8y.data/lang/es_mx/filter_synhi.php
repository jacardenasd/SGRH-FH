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
 * Strings for component 'filter_synhi', language 'es_mx', version '4.4'.
 *
 * @package     filter_synhi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['brokenmarkup'] = 'El marcado está roto; el resaltado estará incorrecto.';
$string['codeexample'] = 'Código';
$string['codeexampledesc'] = 'Código a usar en el ejemplo. Nota: Guardar para usar en el ejemplo.';
$string['engine'] = 'Motor';
$string['enginedesc'] = 'Motor a usar.  Ya sea \'<a href="https://github.com/EnlighterJS/EnlighterJS" target="_blank">EnlighterJS</a> - Mozilla Public License 2.0 (MPL-2.0)\' or \'<a href="https://github.com/syntaxhighlighter/syntaxhighlighter" target="_blank">SyntaxHighlighter</a> - MIT licensed\'.';
$string['enlighterinformation'] = 'Rodear su código con la etiqueta \'code\' para código en línea, y luego, para código multilínea, enciérralo dentro de una etiqueta \'pre\'. Enlighter intentará averiguar el lenguaje, pero usted puede especificarlo agregando el atributo \'data-enlighter-language\' a la etiqueta \'code\' con el valor del lenguaje, como \'data-enlighter-language="java"\'. Entonces, el texto deseado entre paréntesis para:<br><ul><li>ABAP (abap)</li><li>Apache HTTPD (apache)</li><li>Assembly (assembly, asm)</li><li>AVR Assembly (avrassembly, avrasm)</li><li>Windows Batch/Bat (bat,batch,cmd)</li><li>C/C++ (c,cpp)</li><li>C # (csharp)</li><li>CSS(css)</li><li>Cython (cython)</li><li>CordPro (cordpro)</li><li>diff (diff)</li><li>Dockerfile (docker, dockerfile)</li><li>Genérico (genérico, estándar): esquema de resaltado predeterminado</li><li>Groovy (groovy)</li><li>Go (go, golang)</li><li>HTML (html)</li><li>Ini (ini, conf)</li><li>Java (java)</li><li>Javascript (js, javascript, jquery, mootools, ext.js)</li><li>JSON (json)</li><li>JSX (jsx)</li><li>Kotlin (kotlin)</li><li>LATEX (látex)</li><li>MENOS ( less)</li><li>lighttpd (lighttpd)</li><li>LUA (lua)</li><li>MariaDB (mariadb)</li><li>Markdown (gfm, md, markdown)</li><li>Matlab/Octave (octave, matlab)</li><li>MSSQL (mssql)</li><li>NGINX (nginx)</li><li>NSIS (nsis)</li><li>Base de datos Oracle (oracledb)</li><li>PHP (php)</li><li>Powerhsell (powershell)</li><li>Prolog (prólogo)</li><li>Python (py, python)</li><li>PureBasic (purebasic, pb)</li><li>QML (qml)</li><li>R (r)</li><li>RAW (raw): código sin resaltar con estilos de contenedor EnlighterJS.</li>< li>RouterOS/SwitchOS (routeros)</li><li>Ruby (ruby)</li><li>Rust (rust)</li><li>Scala (scala)</li><li>SCSS (scss, sass)</li><li>Shellscript (shell, bash)</li><li>SQL genérico (sql)</li><li>Squirrel (squirrel)</li><li>Swift (swift)</li><li> Texto mecanografiado (mecanografiado)</li><li>VHDL (vhdl)</li><li>VisualBasic (visualbasic,vb)</li><li>Verilog (verilog)</li><li>XML (xml, html)</li><li>YAML (yaml)</li></ul>';
$string['enlighterjs'] = 'EnlighterJS';
$string['enlighterjsstyle'] = 'Estilo EnlighterJS';
$string['filtername'] = 'SynHi';
$string['generalinformation'] = 'Se ha eliminado el uso de la etiqueta \'pre\' solo para resaltar código. Utilice la etiqueta \'code\' en su lugar y rodéela con una etiqueta \'pre\' para el código de varias líneas. Los símbolos \'<\' y \'>\' parecen ser problemáticos dentro de una etiqueta \'code\' cuando se parecen a una etiqueta. Cámbielos a \'<i>(amphersand)</i>lt;\' y \'<i>(amphersand)</i>gt;\' respectivamente para su código. Aquí, <i>(amphersand)</i> significa \'&\'.';
$string['information'] = 'Información';
$string['informationchanges'] = 'Cambios';
$string['informationheading'] = 'Información';
$string['informationheadingdesc'] = 'Información acerca del filtro';
$string['informationsettings'] = 'Configuraciones de información';
$string['informationsettingsdesc'] = 'Información de filtro SynHi';
$string['love'] = 'amor';
$string['pluginname'] = 'SynHi';
$string['privacy:nop'] = 'El filtro SynHi almacena los ajustes que pertenecen a su configuración. Ninguno de los ajustes está relacionado con un usuario específico. Es su responsabilidad asegurarse de que no se ingresen datos de usuario en ningún campo de texto libre. Al establecer un ajuste, esa acción se registrará en el sistema de bitácoras central de Moodle contra el usuario que la modificó. Esto está fuera del control de los filtros. Consulte el sistema de bitácoras central para conocer el cumplimiento de la privacidad. Examine el código cuidadosamente para asegurarse de que cumple con su interpretación de las leyes de privacidad. No soy abogado y mi análisis se basa en mi interpretación. Si tiene alguna duda, elimine el filtro de inmediato.';
$string['settings'] = 'Configuraciones';
$string['settingssettings'] = 'Configuraciones de configuraciones';
$string['settingssettingsdesc'] = 'Configuraciones de filtro SynHi';
$string['styledesc'] = 'Elegir el estilo que desea usar.';
$string['syntaxhighlighter'] = 'ResaltadordeSintaxis';
$string['syntaxhighlighterexample'] = 'Ejemplo';
$string['syntaxhighlighterexampledesc'] = 'De la configuración de \'codeexample\' ...';
$string['syntaxhighlighterinformation'] = 'Para SyntaxHighlighter, rodee su código con una etiqueta \'código\' y agregue class="brush: alias" donde \'alias\' (entre paréntesis) es uno de los siguientes:<br><ul><li>ActionScript3 (as3, actionscript3 )</li><li>Bash/shell (bash, shell)</li><li>ColdFusion (cf, coldfusion)</li><li>C# (c-sharp, csharp)</li><li >C++ (cpp, c)</li><li>CSS (css)</li><li>Delphi (delphi, pas, pascal)</li><li>Diff (diff, parche)</li> <li>Erlang (erl, erlang)</li><li>Groovy (maravilloso)</li><li>JavaScript (js, jscript, javascript)</li><li>Java (java)</li> <li>JavaFX (jfx, javafx)</li><li>Perl (perl, pl)</li><li>PHP (php)</li><li>Texto sin formato (sin formato, texto)</li ><li>PowerShell (ps, powershell)</li><li>Python (py, python)</li><li>Ruby (rails, ror, ruby)</li><li>Scala (scala)< /li><li>SQL (sql)</li><li>Visual Basic (vb, vbnet)</li><li>XML (xml, xhtml, xslt, html, xhtml)</li></ul >';
$string['syntaxhighlighterstyle'] = 'Estilo de ResaltadordeSintaxis';
$string['versionalpha'] = 'Versión Alfa - Casi seguramente contiene fallas. Esta es una versión de desarrollo para desarrolladores ¡solamente! ¡Ni de chiste piense en instalarla en un servidor de producción!';
$string['versionbeta'] = 'Versión Beta - Probablemente contiene fallas. Listo para probarse por administradores SOLAMENTE en un servidor de pruebas.';
$string['versioninfo'] = 'Liberación {$a->release}, versión {$a->version} en Moodle {$a->moodle}.  Hecho con {$a->love} en Gran Bretaña.';
$string['versionrc'] = 'Versión candidato a liberación - Podría tener fallas. Comprobar completamente en un servidor de pruebas ANTES de considerarlo para un servidor de producción.';
$string['versionstable'] = 'Versión estable. Podría contener fallas. Comprobar en un servidor de pruebas ANTES de considerarlo para un servidor de producción.';
