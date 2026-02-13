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
 * Strings for component 'local_alternative_file_system', language 'es_mx', version '4.4'.
 *
 * @package     local_alternative_file_system
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bytescalcfailed'] = 'Error al calcular los bytes (modo fast=0). Motivo: {$a}';
$string['bytesline'] = 'Bytes: <strong>{$a->migrated}</strong> / <strong>{$a->total}</strong> &amp;nbsp;|&amp;nbsp; Velocidad (10m): <strong>{$a->rate}/min</strong> &amp;nbsp;|&amp;nbsp; ETA (bytes): <strong>{$a->eta}</strong>';
$string['eta'] = 'Tiempo estimado (ETA): <strong>{$a}</strong>';
$string['instruction_install'] = '<p><strong>Agrega la siguiente línea al archivo <code>config.php</code> de Moodle:</strong></p><pre><code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code></pre><p><strong>Importante:</strong> Inserta esta línea <strong>antes</strong> de la siguiente línea, si existe en tu archivo:</p><pre><code>require_once(__DIR__ . "/lib/setup.php");</code></pre>';
$string['instruction_title'] = 'Instrucciones de instalación';
$string['lasttransfer'] = 'Última transferencia: <strong>{$a}</strong>';
$string['migrate_link'] = '<p><a class="btn btn-success" href="?execute=1">Ejecutar ahora (puede tardar mucho tiempo)</a></p>';
$string['migrate_title'] = 'Migrar almacenamiento local a remoto';
$string['migrate_total'] = '<p>Tiene archivos locales <strong>{$a->missing}</strong> en espera de migración, mientras que los archivos <strong>{$a->sending}</strong> ya se han migrado al entorno remoto.</p>';
$string['migratedfiles'] = 'Migrados: <strong>{$a}</strong>';
$string['nostoragefound'] = 'No se encontró almacenamiento para generar el reporte. Verifica si la tabla local_alternativefilesystemf tiene registros.';
$string['pluginname'] = 'Sistema de archivos alternativo';
$string['privacy:no_data_reason'] = 'El plugin Sistema de archivos alternativo no almacena ningún dato personal.';
$string['rate'] = 'Velocidad: <strong>{$a->r1}</strong> archivo/min (1m) &amp;nbsp;|&amp;nbsp; <strong>{$a->r10}</strong> archivo/min (10m) &amp;nbsp;|&amp;nbsp; <strong>{$a->r60}</strong> archivo/min (60m)';
$string['remainingfiles'] = 'Restantes: <strong>{$a}</strong>';
$string['reporttitle_status'] = 'Estado';
$string['settings_bucketname'] = '{$a->local} Nombre del depósito';
$string['settings_bucketnamedesc'] = 'El nombre único asignado al depósito en {$a->local}.';
$string['settings_destino'] = 'Destino de almacenamiento';
$string['settings_destinodesc'] = 'Seleccione el destino de almacenamiento y guarde para cargar datos relacionados con el almacenamiento.';
$string['settings_gcs_keyfile'] = 'Contenido de Google-storage.json';
$string['settings_gcs_keyfiledesc'] = 'Pegue aquí el contenido del archivo "google-storage.json".';
$string['settings_local'] = 'Archivos locales en Moodle';
$string['settings_migrate'] = 'Utilice el servicio <a target="_blank" href="{$a->url}">move-to-external.php</a> para migrar datos locales a {$a->local}.';
$string['settings_objectfs_notice'] = '<p><strong>Sistema Alternativo de Archivos actual:</strong> <code>{$a->currentclass}</code></p>

<p>Este sitio está utilizando actualmente <strong>tool_objectfs</strong> como el sistema alternativo de archivos de Moodle. Mientras esto esté habilitado, la tarea programada
<strong>"Migrar objetos de tool_objectfs al Sistema Alternativo de Archivos"</strong> copiará cada objeto desde el DigitalOcean Spaces actual
(ObjectFS) hacia el destino configurado en este plugin (S3/Spaces/GCS).</p>

<p><strong>Cómo funciona la transferencia</strong></p>
<ul>
  <li>Moodle continúa leyendo/escribiendo usando <strong>tool_objectfs</strong>.</li>
  <li>CRON copia los objetos en segundo plano al destino configurado en <strong>local_alternative_file_system</strong>.</li>
  <li>Puedes monitorear el progreso en {$a->reportlink}.</li>
</ul>

<p><strong>Cuando el reporte muestre que la migración ha finalizado</strong> (sin elementos faltantes / 100% completado), actualiza el archivo <code>config.php</code> de Moodle y cambia la clase del sistema alternativo de archivos a:</p>

<pre><code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code></pre>

<p><strong>Importante:</strong> después de realizar el cambio, continúa monitoreando {$a->reportlink} por un tiempo para asegurarte de que no haya un nuevo acumulado.</p>';
$string['settings_path'] = 'Ruta del objeto {$a->local}';
$string['settings_pathdesc'] = 'La ruta dentro del contenedor donde se almacenarán los objetos. Solo se aceptan letras y números.';
$string['settings_s3_credentials_key'] = 'Clave de acceso {$a->local}';
$string['settings_s3_credentials_keydesc'] = 'La clave de acceso utilizada para autenticarse con el servicio {$a->local}.';
$string['settings_s3_credentials_secret'] = 'Clave secreta {$a->local}';
$string['settings_s3_credentials_secretdesc'] = 'La clave secreta utilizada para autenticarse con el servicio {$a->local}.';
$string['settings_s3_region'] = 'Región {$a->local}';
$string['settings_s3_regiondesc'] = 'La región donde se encuentra el depósito {$a->local}, por ejemplo, "{$a->ex_region}".';
$string['settings_success'] = '<h2>Los datos son correctos.</h2>Tenga cuidado al modificar la configuración, ya que cualquier cambio incorrecto puede provocar la inaccesibilidad de los archivos almacenados.';
$string['task_movefromobjectfs'] = 'Migrar objetos de tool_objectfs al Sistema Alternativo de Archivos';
$string['totalfiles'] = 'Total de archivos en MDL_FILES: <strong>{$a}</strong>';
