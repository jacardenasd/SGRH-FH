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
 * Strings for component 'cachestore_redis', language 'es_mx', version '4.4'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'Ruta hacia archivo AutoridaddeCertificado';
$string['ca_file_help'] = 'Localización de archivo de Autoridad de Certificado en filesystem local';
$string['clustermode'] = 'Modo Cluster';
$string['clustermode_help'] = 'Habilitar el modo cluster ejecutará la función Cluster de Redis, que le permite a su servidor el servir a múltiples servidores para manejar solicitudes concurrentes simultáneamente.';
$string['clustermodeunavailable'] = 'Redis Cluster actualmente NO está disponible. Por favor asegúrese que la extensión PHP Redis soporte la funcionalidad Redis Cluster.';
$string['compressor_none'] = 'Sin compresión.';
$string['compressor_php_gzip'] = 'Usar compresión gzip.';
$string['compressor_php_zstd'] = 'Usar compresión Zstandard.';
$string['connectiontimeout'] = 'Tiempo de espera de conexión';
$string['connectiontimeout_help'] = 'Esto establece el tiempo de espera cuando se intenta conectarse al servidor Redis.';
$string['encrypt_connection'] = 'Usar encriptación TLS';
$string['encrypt_connection_help'] = 'Usar TLS para conectar a Redis. No usar \'tls://\' en el hostname para Redis, usar mejor  esta opción.';
$string['password'] = 'Contraseña';
$string['password_help'] = 'Esto configura la contraseña del servidor Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Prefijo de Clave';
$string['prefix_help'] = 'El prefijo es usado para todos los nombres de claves en el servidor Redis.
* Si Usted solamente tiene una instancia de Moodle usando este servidor, puede dejar el valor por defecto.
* Debido a restricciones en la longitud de la clave, se permite un máximo de 5 caracteres.';
$string['prefixinvalid'] = 'Prefijo inválido. Usted solamente puede usa a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'El plugin de caché del almacén de caché Redis almacena datos por corto tiempo como parte de su funcionalidad de cachear. Estos datos son almacenados en un servidor Redis en donde los datos son eliminados regularmente.';
$string['privacy:metadata:redis:data'] = 'Los diversos datos almacenados en la caché';
$string['serializer_igbinary'] = 'Serializador igbinary.';
$string['serializer_php'] = 'Serializador PHP predeterminado';
$string['server'] = 'Servidor(es)';
$string['server_help'] = 'Servidor Redis a usar para pruebas.

Algunos valores de ejemplo:

* testredis.abc.com - Para conectar a un servidor Redis por hostname (Puerto 6379 de forma predeterminada).
* testredis.abc.com:1234 - Para conectar a un servidor Redis por hostname con un puerto específico.
* 1.2.3.4 - Para conectar a un servidor Redis por dirección IP (Puerto 6379 de forma predeterminada).
* 1.2.3.4:1234 - Para conectar a un servidor Redis con un puerto específico.
* /var/redis.sock - Para conectar a un servidor Redis usando un socket Unix. (formato alterno).

* Si está habilitado el modo cluster, por favor especifique los servidores separados por una nueva línea:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>
  Refiérase a los ejemplos de arriba para escribir un servidor.

Para más información, vea a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Accepting Client Connections</a> and <a href="https://redis.io/resources/clients/#php">Redis PHP clients</a>.';
$string['task_ttl'] = 'Liberar memoria usada por entrads expiradas en cachés Redis';
$string['test_clustermode'] = 'Modo Cluster';
$string['test_clustermode_desc'] = 'Habilitar Prueba en modo Redis Cluster';
$string['test_password'] = 'Proobar contraseñ del servidor';
$string['test_password_desc'] = 'Contraseña de prueba de servidor Redis.';
$string['test_serializer'] = 'Serializador';
$string['test_serializer_desc'] = 'Serializador a usar para pruebas.';
$string['test_server'] = 'Servidor de prueba';
$string['test_server_desc'] = 'Servidor Redis a usar para pruebas.

Algunos valores de ejemplo:

* testredis.abc.com - Para conectar a un servidor Redis por hostname (Puerto 6379 de forma predeterminada).
* testredis.abc.com:1234 - Para conectar a un servidor Redis por hostname con un puerto específico.
* 1.2.3.4 - Para conectar a un servidor Redis por dirección IP (Puerto 6379 de forma predeterminada).
* 1.2.3.4:1234 - Para conectar a un servidor Redis con un purto específico.
* unix:///var/redis.sock - Para conectar a un servidor Redis usando un socket Unix.
* /var/redis.sock - Para conectar a un servidor Redis usando un socket Unix. (formato alterno).

Si está habilitado el modo cluster, por favor especifique los servidores separados por una nueva línea:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>


Para más información, vea <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Accepting Client Connections</a> and <a href="https://redis.io/resources/clients/#php">Redis PHP clients</a>.';
$string['test_ttl'] = 'Probando TTL';
$string['test_ttl_desc'] = 'Ejecutar la prueba de desempeño usando un caché que requiere TTL (conjuntos más lentos).';
$string['usecompressor'] = 'Usar compresor';
$string['usecompressor_help'] = 'Especifica el compresor a usar después de serializar. Se hace a nivel de la API de Caché Moodle, no es a nivel de php-redis.';
$string['useserializer'] = 'Usar serializador';
$string['useserializer_help'] = 'Especifica el serializador a usar para seializar.
Los serializadore válidos son Redis::SERIALIZER_PHP o Redis::SERIALIZER_IGBINARY.
El último está soportado solamente cuando phpredis está configurado con la opción  --enable-redis-igbinary y está cargada la extensión igbinary.';
