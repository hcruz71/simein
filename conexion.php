<?php
// Conexion PDO. Servidor y credenciales salen de db_config.php (variables de entorno).
// sql_mode no estricto por sesion: el codigo inserta '' y omite columnas NOT NULL
// (agenda.id_clinica, fechas vacias), como lo aceptaba el servidor anterior.
require_once __DIR__.'/db_config.php';
if (!function_exists('connect')) {
function connect() {
    $db = simein_db_config();
    $host = $db['host'];
    $port = $db['port'];
    $basededatos = $db['database'];
    $userr = $db['user'];
    $password = $db['password'];
    $options = array(
      PDO::MYSQL_ATTR_SSL_CA=>__DIR__.'/isrgrootx1.pem',
      PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8, SESSION sql_mode='NO_ENGINE_SUBSTITUTION'"
     );

  return new PDO('mysql:host='.$host.';port='.$port.';dbname='.$basededatos, $userr, $password, $options);

}
}
?>