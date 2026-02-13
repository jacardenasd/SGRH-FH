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
 * Strings for component 'qtype_regexmatch', language 'es_mx', version '4.4'.
 *
 * @package     qtype_regexmatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['default_options'] = 'Opciones predeterminadas';
$string['default_options_help'] = 'Estas opciones están habilitadas de forma predeterminada y se pueden deshabilitar especificando la letra correspondiente.

**S: Espacio infinito**<br> Todos los espacios se reemplazarán con `([ \\t]+)`. De esta forma, coincidirán con uno o más espacios en blanco.

**T: Eliminar espacios**<br> Todas las líneas vacías iniciales y finales de la respuesta, así como todos los espacios iniciales y finales de cada línea, se ignorarán. Las líneas vacías finales siempre se ignorarán, incluso si esta opción está deshabilitada.';
$string['dollarroofmustbeescaped'] = 'Los anclajes de expresiones regulares "$" y "^" no se pueden usar. En el caso que deban coincidir como literales, se pueden escapar: "\\$", "\\^"';
$string['error_unparsable'] = '"No se pudo analizar la expresión regular debido a un error desconocido. Por favor, edite la pregunta."';
$string['fborgradewithoutregex'] = 'Si se establece una retroalimentación o una calificación, se debe introducir una expresión regular.';
$string['notenoughregexes'] = 'Se requiere al menos una expresión regular.';
$string['options'] = 'Opciones';
$string['options_help'] = 'Se pueden configurar algunas opciones. Estas deben colocarse al final de la expresión regular. Además, deben comenzar y terminar con una barra diagonal (`/`). Por ejemplo: `/PI/`. Cada opción se activa o desactiva con una sola letra. Las opciones se describen a continuación.

**I: Ignorar mayúsculas/minúsculas**<br>
La expresión regular ignorará las mayúsculas y minúsculas.

**D: Punto en todo**<br>
Todos los puntos (`.`) en la expresión regular también coincidirán con saltos de línea.

**P: Barras verticales y punto y coma**<br>
Esta es una opción específica del shell. Todos los puntos y comas `;` y las barras verticales escapadas `\\|` se reemplazarán con `([ \\t]*[;\\n][ \\t]*)`

y `([ \\t]*\\|[ \\t]*)`, respectivamente. Por lo tanto, se permiten espacios ilimitados alrededor de estos caracteres y el punto y coma también coincidirá con un salto de línea. Nota: Los espacios antes y después de la barra vertical dentro de la expresión regular también deben estar presentes en la respuesta.

**R: Redirecciones**<br> Esta es una opción específica del shell. Todas las redirecciones (`<`,`>`,`<<`,`>>`) se reemplazarán, por ejemplo, con `([ \\t]*<[ \\t]*)`.  Si está habilitada, las redirecciones no se pueden usar en otras funciones de expresiones regulares (p. ej., lookbehind `(?<=...)`). Nota: Los espacios antes y después de la redirección dentro de la expresión regular también deben estar presentes en la respuesta.

**O: Coincidir en cualquier orden**<br>
La expresión regular debe constar de varias expresiones regulares (`[[regex1]] [[regex2]]`). Las respuestas (separadas por el valor de la clave `separator=`. Nueva línea por defecto) deben coincidir con cualquiera de las expresiones regulares, pero el orden no importa. Cada expresión regular solo puede coincidir con una única respuesta. El cálculo de puntos se puede encontrar [aquí](https://github.com/lni-dev/moodle-qtype_regexmatch/blob/master/usage-examples.md#evaluation).';
$string['pleaseenterananswer'] = 'Por favor, introduzca una respuesta.';
$string['pluginname'] = 'RegEx Matcher (Coincidencia de expresiones regulares)';
$string['pluginname_help'] = 'Crea una pregunta de tipo "coincidencia de expresión regular", que permite comprobar la respuesta utilizando una expresión regular.';
$string['pluginname_link'] = 'question/type/regexmatch';
$string['pluginnameadding'] = 'Agregar una pregunta de coincidencia de expresiones regulares';
$string['pluginnameediting'] = 'Editando una pregunta de coincidencia de expresiones regulares';
$string['pluginnamesummary'] = 'Un tipo de pregunta que permite comprobar las respuestas a las preguntas mediante expresiones regulares.';
$string['privacy:metadata'] = 'El plugin de tipo pregunta Regexmatch no almacena ningún dato personal.';
$string['regex'] = 'Expresión Regular';
$string['regex-number'] = 'Expresión Regular {$a}';
$string['regex_help'] = 'Debe respetarse la siguiente sintaxis:
```
[[regex]] /OPCIONES/
separador=,
comentario=texto
```
El siguiente ejemplo coincide con `ls -la` y no tiene opciones adicionales habilitadas (solo están habilitadas las opciones predeterminadas):
```
[[ls -la]]//
```
Puede encontrar una descripción más detallada (con ejemplos) [aquí](https://github.com/lni-dev/moodle-qtype_regexmatch/blob/master/usage-examples.md).

Las claves `separador` y `comentario` son opcionales. `separador` se describe en el campo de ayuda de las opciones.
`comentario` es un campo de texto visible únicamente en el formulario de edición de la pregunta.

`/OPCIONES/` se describen en el campo de ayuda de las opciones a continuación. Si no se habilita ni se deshabilita ninguna opción, debe aparecer una barra `//` vacía.

`regex` es una expresión regular en la [sintaxis PCRE](https://www.php.net/manual/en/reference.pcre.pattern.syntax.php).

La expresión regular debe ir entre corchetes dobles (\\[\\[\\]\\]). Breve descripción de las características más importantes de las expresiones regulares:

| | Estructuras |
|:------:|:-------------------------------------------------:|
| abc | Coincide con "abc" |
| [abc] | Coincide con cualquiera de los caracteres dentro de los corchetes |
| [^abc] | Coincide con cualquier carácter que NO esté dentro de los corchetes |
| ab\\|cd | Coincide con "ab" o "cd" |
| (abc) | Coincide con el subpatrón "abc" |
| \\ | Carácter de escape para .^$*+-?()[]{}\\\\| |

| | Cuantificadores |
|:------:|:-------------------------:|
| a* | Cero o más "a" |
| a+ | Una o más "a" |
| a? | Cero o una "a" |
| a{n} | Exactamente n veces "a" |
| a{n,} | n o más "a" |
| a{,m} | m o menos "a" |
| a{n,m} | Entre n y m veces "a" |

| | Caracteres y límites |
|:--:|:---------------------------------:|
| \\w | Cualquier carácter alfanumérico (a-z 0-9 _) |
| \\W | Cualquier carácter no alfanumérico |
| \\s | Espacio en blanco (espacio, tabulación, salto de línea) |
| \\S | Cualquier carácter que no sea un espacio en blanco |
| \\d | Dígitos (0-9) |
| \\D | Cualquier carácter que no sea un dígito |
| . | Cualquier carácter excepto salto de línea |
| \\b | Límite de palabra |
| \\B | No es un límite de palabra |

Los anclajes de expresiones regulares "$" y "^" no se pueden usar. En el caso que deban coincidir como literales, se pueden escapar: "\\$", "\\^".';
$string['valerror_illegalkeyorder'] = 'Orden de claves no válido. Orden requerido: {$a}.';
$string['valerror_illegaloption'] = 'Opción ilegal "{$a}".';
$string['valerror_illegalsyntax'] = 'Sintaxis ilegal.';
$string['valerror_unkownkey'] = 'Clave desconocida "{$a}".';
