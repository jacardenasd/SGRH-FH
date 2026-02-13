<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'i10850735_xyw11';
$CFG->dbuser    = 'i10850735_xyw11';
$CFG->dbpass    = 'E.tAkc1kEIeuoTOFOWW24';
$CFG->prefix    = 'k910_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '0',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://rhfarma.mx/capacitacion';
$CFG->dataroot  = '/home/mjfddin6v6ni/public_html/capacitacion/.htaq5tbszdgc8y.data/';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
