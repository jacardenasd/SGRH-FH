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
 * Strings for component 'tool_health', language 'es_mx', version '4.4'.
 *
 * @package     tool_health
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['category_loop_parents'] = 'Las siguientes categorías forman un bucle de padres:';
$string['category_missing_parents'] = 'Las siguientes categorías carecen de sus padres:';
$string['healthnoproblemsfound'] = '¡No se encontraron problemas de salud!';
$string['healthproblemsdetected'] = '¡Se detectaron problemas de salud!';
$string['healthproblemsolution'] = 'Solución al problema de salud';
$string['healthreturntomain'] = 'Continuar';
$string['healthsolution'] = 'Solución';
$string['pluginname'] = 'Centro de salud';
$string['privacy:metadata'] = 'El plugin del Centro de Salud no almacena ningún dato personal.';
$string['problem_000002_description'] = 'El archivo de configuración de Moodle, config.php, u otro archivo de biblioteca, contiene caracteres después de la etiqueta PHP de cierre (?>). Esto provoca que Moodle presente diversos problemas (como archivos descargados dañados) y debe solucionarse.';
$string['problem_000002_solution'] = 'Debe editar {$a}/config.php y eliminar todos los caracteres (incluyendo espacios y retornos) después de la etiqueta final ?>. Estos dos caracteres deben ser los últimos en ese archivo. El espacio adicional al final también puede estar presente en otros archivos PHP incluidos en lib/setup.php.';
$string['problem_000002_title'] = 'Caracteres adicionales al final de config.php u otra función de la biblioteca';
$string['problem_000003_description'] = 'Su archivo config.php indica que su directorio raíz de datos es {$a}. Sin embargo, este directorio no existe o Moodle no puede escribir en él. Esto significa que se presentarán diversos problemas, como que los usuarios no puedan iniciar sesión ni subir archivos. Es fundamental que solucione este problema para que Moodle funcione correctamente.';
$string['problem_000003_solution'] = 'En primer lugar, asegúrese de que el directorio {$a} exista. Si existe, debe asegurarse de que Moodle pueda escribir en él. Contacte al administrador de su servidor web y solicítele que otorgue permisos de escritura en ese directorio al usuario con el que se ejecuta el proceso del servidor web.';
$string['problem_000003_title'] = '$CFG->dataroot no existe o no tiene permisos de escritura';
$string['problem_000004_description'] = 'El script de mantenimiento cron.php no se ha ejecutado en el intervalo esperado. Este intervalo se puede definir en $CFG->expectedcronfrequency. Esto probablemente significa que su servidor no está configurado para ejecutar este script automáticamente en intervalos regulares. En este caso, Moodle funcionará normalmente, pero algunas operaciones (como el envío de correos electrónicos a los usuarios) no se realizarán.';
$string['problem_000004_link_cron'] = 'Cron - MoodleDocs';
$string['problem_000004_solution'] = 'Para obtener instrucciones detalladas sobre cómo habilitar cron, consulte los enlaces a continuación.';
$string['problem_000004_title'] = 'cron.php no está configurado para ejecutarse automáticamente';
$string['problem_000005_description'] = 'Su configuración de PHP incluye una opción habilitada, session.auto_start, que debe deshabilitarse para que Moodle funcione correctamente. Entre los síntomas más comunes derivados de esta configuración incorrecta se incluyen errores fatales o páginas en blanco al intentar iniciar sesión.';
$string['problem_000005_solution'] = 'Hay dos formas de resolver este problema:';
$string['problem_000005_solution_step_one'] = 'Si tiene acceso a su archivo php.ini principal, busque la línea "session.auto_start = 1" y cámbiela a "session.auto_start = 0". Luego, reinicie su servidor web. Tenga en cuenta que esto, como cualquier otro cambio en la configuración de PHP, podría afectar a otras aplicaciones web que se ejecuten en el servidor.';
$string['problem_000005_solution_step_two'] = 'Finalmente, es posible que pueda cambiar esta configuración solo para su sitio creando o editando el archivo {$a}/.htaccess para que contenga esta línea: "php_value session.auto_start 0"';
$string['problem_000005_title'] = 'PHP: session.auto_start está habilitado';
$string['problem_000007_description'] = 'Su configuración de PHP incluye una opción deshabilitada, file_uploads, que debe habilitarse para que Moodle ofrezca toda su funcionalidad. Hasta que esta opción esté habilitada, no será posible subir archivos a Moodle. Esto incluye, por ejemplo, el contenido del curso y las imágenes de los usuarios.';
$string['problem_000007_solution'] = 'Hay dos formas de resolver este problema:';
$string['problem_000007_solution_step_one'] = 'Si tiene acceso a su archivo php.ini principal, busque la línea "file_uploads = Off" y cámbiela a "file_uploads = On". Luego, reinicie su servidor web. Tenga en cuenta que esto, como cualquier otro cambio en la configuración de PHP, podría afectar a otras aplicaciones web que se ejecuten en el servidor.';
$string['problem_000007_solution_step_two'] = 'Finalmente, es posible que pueda cambiar esta configuración solo para su sitio creando o editando el archivo {$a}/.htaccess para que contenga esta línea: "php_value file_uploads On".';
$string['problem_000007_title'] = 'PHP: file_uploads está deshabilitado';
$string['problem_000008_description'] = 'La configuración de PHP en su servidor no permite que un script solicite más memoria durante su ejecución. Esto significa que existe un límite estricto de {$a} para cada script. Es posible que ciertas operaciones en Moodle requieran más memoria para completarse correctamente, especialmente si se procesan muchos datos.';
$string['problem_000008_solution'] = 'Se recomienda que se comunique con el administrador de su servidor web para solucionar este problema.';
$string['problem_000008_title'] = 'PHP: memory_limit no puede ser controlado por Moodle';
$string['problem_000009_description'] = 'La cuenta de usuario con la que se conecta al servidor de la base de datos no tiene contraseña. Esto supone un riesgo de seguridad muy importante y solo se reduce si su base de datos está configurada para no aceptar conexiones de ningún host que no sea el servidor donde se ejecuta Moodle. A menos que utilice una contraseña segura para conectarse a la base de datos, se arriesga a que sus datos sean accedidos y manipulados sin autorización.';
$string['problem_000009_description_root'] = '¡Esto es especialmente alarmante porque dicho acceso a la base de datos sería por parte del superusuario (root)!';
$string['problem_000009_solution'] = '¡Debe cambiar la contraseña del usuario {$a} tanto en su base de datos como en su config.php de Moodle inmediatamente!';
$string['problem_000009_solution_root'] = 'También sería una buena idea cambiar la cuenta de usuario de root a otra, porque esto reduciría el impacto en caso de que su base de datos se vea comprometida de todos modos.';
$string['problem_000009_title'] = 'SQL: usando cuenta sin contraseña';
$string['problem_000012_description'] = 'Para preguntas aleatorias, question.parent debe ser igual a question.id. Hay algunas preguntas en su base de datos para las que esto no es así. Una posible explicación es que esto haya ocurrido en preguntas aleatorias restauradas desde una copia de seguridad antes de que se corrigiera el error MDL-5482.';
$string['problem_000012_solution'] = 'Actualice a Moodle 1.9.1 o posterior, o ejecute manualmente el SQL';
$string['problem_000012_title'] = 'Consistencia de datos de preguntas aleatorias';
$string['problem_000014_description'] = 'Tiene preguntas que violan esto en su base de datos. Deberá investigar para determinar cómo sucedió.';
$string['problem_000014_link_cron'] = 'Foro de examen';
$string['problem_000014_solution'] = 'Es imposible dar una solución sin saber más sobre la causa del problema. Quizás pueda obtener ayuda en el foro sobre exámenes.';
$string['problem_000014_title'] = 'Solo las preguntas de respuestas múltiples y aleatorias deben ser padre de otra pregunta';
$string['problem_000016_description'] = 'Cuando una categoría de pregunta es la principal de otra, ambas deben pertenecer al mismo contexto. Esto no sucede en las siguientes categorías:';
$string['problem_000016_description_child'] = 'Categoría hija';
$string['problem_000016_description_context'] = 'ID del contexto';
$string['problem_000016_description_id'] = 'ID';
$string['problem_000016_description_name'] = 'Nombre';
$string['problem_000016_description_parent'] = 'Categoría padre';
$string['problem_000016_link_cron'] = 'Foro sobre exámenes';
$string['problem_000016_solution'] = 'Una solución automatizada es difícil. Depende de si la categoría principal o secundaria está en el lugar incorrecto. Las personas en el foro sobre exámenes podría ayudar.';
$string['problem_000016_title'] = 'Las categorías de preguntas deben pertenecer al mismo contexto que su padre.';
$string['problem_000017_description'] = 'Las categorías de preguntas deben organizarse en estructuras de árbol según el campo question_categories.parent. A veces, esta estructura de árbol se desordena.';
$string['problem_000017_solution'] = 'Considere ejecutar las siguientes consultas SQL. Estas solucionan el problema moviendo algunas categorías al nivel superior.';
$string['problem_000017_title'] = 'Estructura del árbol de categorías de preguntas';
$string['problem_000018_description'] = 'Las categorías de los cursos deben organizarse en estructuras de árbol según el campo course_categories.parent. A veces, esta estructura de árbol se desordena.';
$string['problem_000018_solution'] = 'Considere ejecutar las siguientes consultas SQL. Estas solucionan el problema moviendo algunas categorías al nivel superior.';
$string['problem_000018_title'] = 'Estructura del árbol de categorías de cursos';
