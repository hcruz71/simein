<?php
// Conexion PDO. Credenciales en variables de entorno (Heroku config vars del add-on Stackhero).
// sql_mode no estricto por sesion: el codigo inserta '' y omite columnas NOT NULL
// (agenda.id_clinica, fechas vacias), como lo aceptaba el servidor anterior.
if (!function_exists('connect')) {
function connect() {
    $host = getenv('STACKHERO_MYSQL_HOST');
    $port = getenv('STACKHERO_MYSQL_PORT');
    $basededatos = getenv('DB_NAME') ?: 'simeindb';
    $userr = getenv('DB_USER') ?: 'root';
    $password = getenv('STACKHERO_MYSQL_ROOT_PASSWORD');
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