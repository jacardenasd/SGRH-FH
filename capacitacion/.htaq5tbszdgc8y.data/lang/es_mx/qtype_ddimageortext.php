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
 * Strings for component 'qtype_ddimageortext', language 'es_mx', version '4.4'.
 *
 * @package     qtype_ddimageortext
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoredropzones'] = 'Espacios vacíos para  {no} más zonas para soltar';
$string['addmoreimages'] = 'Espacios vacíos para  {no} más elementos arrastrables';
$string['answer'] = 'Respuesta';
$string['bgimage'] = 'Imagen de fondo';
$string['blank'] = 'vacío';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['deletedchoice'] = '[opción eliminada]';
$string['draggableimage'] = 'Imagen arrastrable';
$string['draggableitem'] = 'Elemento arrastrable';
$string['draggableitemheader'] = 'Elemento arrastrable {$a}';
$string['draggableitems'] = 'Elementos arrastrables';
$string['draggableitemtype'] = 'Tipo';
$string['draggableword'] = 'Texto arrastrable';
$string['dropbackground'] = 'Imagen de fondo hacia adonde arrastrar marcadores';
$string['dropzone'] = 'Zona para soltar {$a}';
$string['dropzoneheader'] = 'Zonas para soltar';
$string['formerror_disallowedtags'] = 'Solamente marcas "{$a}" están permitidas dentro en este texto arrastrable.';
$string['formerror_dragrequired'] = 'Usted debe añadir al menos un elemento arrastrable a esta pregunta.';
$string['formerror_droprequired'] = 'Usted debe definir al menos una zona para soltar para esta pregunta.';
$string['formerror_multipledraginstance'] = 'Usted ha seleccionado esta imagen {$a} más de una vez como la opción correcta para una zona para soltar, pero no está marcada como un elemento arrastrable ilimitado.';
$string['formerror_multipledraginstance2'] = 'Usted ha seleccionado esta imagen más de una vez como la opción correcta para una zona para soltar, pero no está marcada como un elemento arrastrable ilimitado.';
$string['formerror_noallowedtags'] = 'No están permitidas marcas (tags) HTML en este texto que es el texto alterno para una imagen arrastrable.';
$string['formerror_nobgimage'] = 'Usted necesita seleccionar una imagen para usarla como el fondo para el área de arrastrar y soltar.';
$string['formerror_nofile'] = 'Usted necesita subir o seleccionar aquí un archivo a usar.';
$string['formerror_nofile3'] = 'Usted necesita seleccionar aquí un archivo de imagen, o eliminar la etiqueta asociada y desactivar la casilla de ilimitada.';
$string['formerror_noimageselected'] = 'Usted necesita seleccionar un elemento arrastrable que sea la opción correcta para esta zona para soltar.';
$string['formerror_notintxleft'] = 'La coordenada x debe ser un número entero.';
$string['formerror_notintytop'] = 'La coordenada y debe ser un número entero.';
$string['formerror_noxleft'] = 'Usted debe proporcionar un valor para la coordenada x para la esquina superior izquierda de esta área de soltar. Usted puede arrastrar y soltar el área de soltar superior para configurar las coordenadas, o puede escribirlas manualmente aquí.';
$string['formerror_noytop'] = 'Usted debe proporcionar un valor para la coordenada y para la esquina superior izquierda de esta área de soltar. Usted puede arrastrar y soltar el área de soltar superior para configurar las coordenadas, o puede escribirlas manualmente aquí.';
$string['infinite'] = 'Ilimitado/a';
$string['label'] = 'Texto';
$string['nolabel'] = 'Sin texto de etiqueta';
$string['pleasedraganimagetoeachdropregion'] = 'Su respuesta no está completa; por favor, arrastre un elemento hacia cada zona para soltar.';
$string['pluginname'] = 'Arrastrar y soltar sobre imagen';
$string['pluginname_help'] = 'Las preguntas de arrastrar y soltar en imagen requieren que el usuario arrastre imágenes o etiquetas de texto y las suelte dentro de zonas para soltar definidas sobre de una imagen de fondo. Los elementos arrastrables pueden agruparse de forma tal que todos los elementos en un grupo particular estén coloreados igualmente que las zonas para soltarlos. Los elementos arrastrables marcados como ilimitados pueden soltarse adentro de más de una zona.';
$string['pluginname_link'] = 'question/type/ddimageortext';
$string['pluginnameadding'] = 'Añadiendo arrastrar y soltar sobre imagen';
$string['pluginnameediting'] = 'Editando arrastrar y soltar sobre imagen';
$string['pluginnamesummary'] = 'Las imágenes o etiquetas de texto son arrastradas y soltadas dentro de zonas para soltar sobre una imagen de fondo.

Nota: Este tipo de pregunta no es accesible para usuarios con discapacidad visual.';
$string['previewareaheader'] = 'Vista previa';
$string['previewareamessage'] = 'Seleccione una imagen de fondo, especifique elementos arrastrables y defina las zonas para soltar sobre de la imagen de fondo adonde deben ser arrastrados.';
$string['privacy:metadata'] = 'El plugin de tipo de pregunta Arrastrar y soltar en imagen les permite a los autores de pregunta configurar las opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:defaultmark'] = 'El puntaje predeterminado configurado para una pregunta dada.';
$string['privacy:preference:penalty'] = 'La penalización para cada intento incorrecto cuando las preguntas son empleadas usando el comportamiento de \'Interactivo con intentos múltiples\' o el \'Modo adaptativo\'.';
$string['privacy:preference:shuffleanswers'] = 'Si es que las respuestas deberían o no ser barajadas automáticamente.';
$string['refresh'] = 'Refrescar vista previa';
$string['shuffleimages'] = 'Barajar elementos arrastrables cada vez que se intente la pregunta';
$string['summarisechoice'] = '{$a->no}. {$a->text}';
$string['summarisechoiceno'] = 'Ítem {$a}';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Zona para soltar {$a}';
$string['xleft'] = 'Izquierda';
$string['ytop'] = 'Superior';
