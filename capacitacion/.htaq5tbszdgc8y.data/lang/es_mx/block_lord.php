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
 * Strings for component 'block_lord', language 'es_mx', version '4.4'.
 *
 * @package     block_lord
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['calculatedmodules'] = 'Hay {$a->calculated} de {$a->total} ({$a->percent}%) medidas de similitud calculadas entre objetos de aprendizaje con {$a->errors} error(es).';
$string['canonical'] = '¿Usar método canónico?';
$string['compare'] = 'Comparar objetos de aprendizaje';
$string['comparisonerror'] = 'Ocurrió un error durante la comparación';
$string['complete'] = 'Conexiones analizadas';
$string['docs:howto'] = 'Cómo usar el plugin LORD.';
$string['docs:issues'] = 'Reportar un problema';
$string['docs:publications'] = 'Publicaciones relacionadas';
$string['docs:settings'] = 'Cómo configurar el plugin LORD.';
$string['documentation'] = 'Documentación';
$string['error'] = '*** ERROR ***';
$string['errors'] = 'Errores';
$string['formerror'] = 'El valor debe ser un entero positivo';
$string['formerror2'] = 'El valor debe ser un número con uno, dos o tres dígitos (1, 2.5, 12, 1.75).';
$string['formerror3'] = 'El valor solamente debe contener caracteres alfabéticos, sin números ni símbolos.';
$string['generalheader'] = 'Opciones generales';
$string['graphsaved'] = 'Gráfica guardada';
$string['intro'] = 'Introducción';
$string['introweight'] = 'La ponderación a usar para comparaciones introductorias.';
$string['launch'] = 'Ver gráfica';
$string['learningactivities'] = 'Actividades de aprendizaje';
$string['maxdistance'] = 'Distancia máxima';
$string['mindistance'] = 'Distancia mínima';
$string['moduleid'] = 'ID del módulo';
$string['name'] = 'Nombre';
$string['names'] = 'Nombres';
$string['nameweight'] = 'La ponderación a usar para comparaciones de nombre.';
$string['notcalculated'] = 'Estas actividades aun no han sido comparadas.';
$string['numparas'] = 'El número máximo de párrafos a comparar.';
$string['numsentence'] = 'El número máximo de oraciones a comparar.';
$string['numwords'] = 'El número máximo de palabras a permitir en una oración.';
$string['optimalassign'] = 'Tarea óptima';
$string['percent'] = 'Completado';
$string['privacy:metadata:block_lord:canonical'] = 'Si es que se usa o no el método canónico.';
$string['privacy:metadata:block_lord:content'] = 'El contenido de texto del párrafo.';
$string['privacy:metadata:block_lord:courseid'] = 'Valor de ID del curso.';
$string['privacy:metadata:block_lord:distscale'] = 'Cantidad por la que el valor de similitud es multiplicado para obtener un valor de distancia.';
$string['privacy:metadata:block_lord:intro'] = 'La introducción para el módulo.';
$string['privacy:metadata:block_lord:language'] = 'Cuál idioma usar.';
$string['privacy:metadata:block_lord:matrix'] = 'La matriz de similitud para esta comparación.';
$string['privacy:metadata:block_lord:maxdist'] = 'Valor de distancia máxima usado en generación de gráfica.';
$string['privacy:metadata:block_lord:maxlength'] = 'Número máximo de palabras a permitir en una oración.';
$string['privacy:metadata:block_lord:maxparas'] = 'Número máximo de párrafos a comparar.';
$string['privacy:metadata:block_lord:maxsentence'] = 'Número máximo de oraciones a comparar.';
$string['privacy:metadata:block_lord:mindist'] = 'Valor de distancia mínima usado en generación de gráfica.';
$string['privacy:metadata:block_lord:module'] = 'El valor de ID del módulo.';
$string['privacy:metadata:block_lord:moduleid'] = 'El valor de ID del módulo.';
$string['privacy:metadata:block_lord:name'] = 'El nombre del módulo';
$string['privacy:metadata:block_lord:paragraph'] = 'El valor ID del párrafo.';
$string['privacy:metadata:block_lord:scale'] = 'El valor de escala de la gráfica.';
$string['privacy:metadata:block_lord:status'] = 'El estado de la palabra.';
$string['privacy:metadata:block_lord:value'] = 'El valor de similitud entre objetos de aprendizaje.';
$string['privacy:metadata:block_lord:weight'] = 'El valor de similitud entre dos actividades de aprendizaje.';
$string['privacy:metadata:block_lord:word'] = 'La palabra.';
$string['privacy:metadata:block_lord:xcoord'] = 'El valor de coordenada-x';
$string['privacy:metadata:block_lord:ycoord'] = 'El valor de coordenada-y';
$string['privacy:metadata:block_lord_links'] = 'Tabla para almacenar las ponderaciones de enlace entre nodos.';
$string['privacy:metadata:block_lord_scales'] = 'Tabla para almacenar datos de escalado de gráfica.';
$string['progresstitle'] = 'Similitud de actividad de aprendizaje';
$string['resetbutton'] = 'Re-generar gráfica';
$string['resetcomparisons'] = 'Re-iniciar todas las comparaciones. ADVERTENCIA: ¡¡Esto no puede deshacerse!!';
$string['reseterrors'] = '¿Re-iniciar errores de comparación?';
$string['resetheader2'] = 'Re-iniciar opciones';
$string['runphysics'] = '¿Permitir cambios?';
$string['scalingfactor'] = 'Factor de escala';
$string['section'] = 'Sección';
$string['sentenceweight'] = 'La ponderación a usar para comparaciones de párrafos.';
$string['sentscost'] = 'Matriz de costo de oraciones';
$string['settingspage'] = 'Configuraciones';
$string['showblockdesc'] = '¿Mostrar el bloque Learning Object Relation Discovery (LORD) block a profesores?';
$string['showblocklabel'] = '¿Mostrar el bloque LORD?';
$string['similaritystr'] = 'Similitud:';
$string['stopwordsheader'] = 'Añadir o quitar palabras de paro (no usado en comparación de similitud)';
$string['systembutton'] = 'Generada por el usuario';
$string['systemgraph'] = 'Gráfica generada por el sistema';
$string['usergraph'] = 'Gráfica generada por el usuario';
