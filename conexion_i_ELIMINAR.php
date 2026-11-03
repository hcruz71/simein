<?php
// Conexion mysqli (no se incluye en ningun archivo; candidata a eliminarse).
// Servidor y credenciales salen de db_config.php (variables de entorno).
require_once __DIR__.'/db_config.php';
$db = simein_db_config();
$host = $db['host'];
$port = (int) $db['port'];
$basededatos = $db['database'];
$usuario = $db['user'];
$contraseña = $db['password'];
$flags = MYSQLI_CLIENT_SSL;

$conexion  = mysqli_init();
mysqli_ssl_set($conexion, null, null, __DIR__.'/isrgrootx1.pem', null, null);
mysqli_real_connect($conexion, $host, $usuario, $contraseña, $basededatos, $port, null, $flags);

mysqli_set_charset($conexion,"utf8");

if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}
?>