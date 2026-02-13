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
 * Strings for component 'qtype_guessit', language 'es_mx', version '4.4'.
 *
 * @package     qtype_guessit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['editquestiontext'] = 'Editar texto de pregunta';
$string['gap_plural'] = 'palabras';
$string['gap_singular'] = 'palabra';
$string['guessit'] = 'adivinanza.';
$string['guessitgaps'] = 'Palabra(s) de Adivinanza';
$string['guessitgaps_help'] = 'Escribir aquí las palabras a ser adivinadas ( o una palabra si seleccionó la opción WORDLE)';
$string['instructions'] = 'Instrucciones';
$string['instructions_help'] = 'Utilice este campo para explicar al estudiante cómo funciona el juego Guessit o para darle una pista que le ayude a adivinar la(s) palabra(s). Este campo es opcional.';
$string['letter_plural'] = 'letras colocadas correctamente';
$string['letter_singular'] = 'letra colocada correctamente';
$string['misplacedletter_plural'] = 'letras mal colocadas';
$string['misplacedletter_singular'] = 'letra mal colocada';
$string['moretries'] = '¡La ayuda estará disponible después de {$a} intentos más!';
$string['moretry'] = '¡La ayuda estará disponible después de un intento más!';
$string['nbmaxtrieswordle'] = 'Número máximo de intentos';
$string['nbmaxtrieswordle_help'] = 'Número máximo de intentos permitidos para adivinar la palabra. Al alcanzar el número máximo de intentos, se muestra la palabra a adivinar y se finaliza el intento de respuesta.';
$string['nbtriesbeforehelp'] = '¿Cuántos intentos antes de dar ayuda?';
$string['nbtriesbeforehelp_help'] = 'Seleccione el número de intentos necesarios para que la opción Ayuda esté disponible. "Nunca" significa que la Ayuda nunca estará disponible.';
$string['nbtriesleft_plural'] = '{$a} intentos restantes';
$string['nbtriesleft_singular'] = '1 intento restante';
$string['never'] = 'Nunca';
$string['pleaseenterananswer'] = 'Por favor escriba una respuesta en TODOS los huecos';
$string['pluginname'] = 'Adivinanza';
$string['pluginname_help'] = 'Pídale al estudiante que adivine una oración corta o una palabra única.';
$string['pluginname_link'] = 'question/type/guessit';
$string['pluginnameadding'] = 'Añadir una pregunta de Adivinanza';
$string['pluginnameediting'] = 'Editando Adivinanza';
$string['pluginnamesummary'] = 'Un tipo de pregunta que se parece más a un juego en el que el jugador tiene que adivinar una oración corta o una palabra única (como Wordle).';
$string['privacy:null_reason'] = 'El tipo de pregunta Adivinanza no afecta ni almacena ningún dato por si mismo.';
$string['wordfoundintries'] = 'Palabra encontrada en {$a} intentos:';
$string['wordfoundintry'] = 'Palabra encontrada en 1 intento:';
$string['wordle'] = 'Wordle: Adivinar una palabra';
$string['wordle_help'] = 'Marque esta opción si desea que el jugador tenga que adivinar palabras individuales en lugar de oraciones. Use solo letras mayúsculas (A-Z), sin acentos y con un máximo de 8 letras.';
$string['wordlecapitalsonly'] = '¡ERROR! En la opción Wordle, debe escribir una sola palabra y usar solo LETRAS MAYÚSCULAS (A-Z) y sin acentos.';
$string['wordletoolong'] = '¡Demasiado largo! ¡ERROR! En la opción Wordle, las palabras están limitadas a 8 caracteres.';
$string['wordsfoundintries'] = 'Todas las palabras encontradas en {$a} intentos.';
$string['wordsfoundintry'] = '¡Todas las palabras se encontraron en un solo intento! ¡Bien hecho!';
$string['wordssmissing'] = '!Usted no ha incluido ninguna palabra para ser encontrada en su juego de Adivinanza!';
$string['yougotnlettersrightcount'] = 'Tuvo {$a->num} {$a->letterorletters} y {$a->nbmisplacedletters} {$a->misplacedletterorletters}.';
$string['yougotnrightcount'] = 'Encontró {$a->num} {$a->gaporgaps} de entre un total de {$a->outof}.';
