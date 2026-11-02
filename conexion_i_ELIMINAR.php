<?php
// Conexion mysqli (no se incluye en ningun archivo; candidata a eliminarse).
// Credenciales en variables de entorno (Heroku config vars del add-on Stackhero).
$host = getenv('STACKHERO_MYSQL_HOST');
$port = (int) getenv('STACKHERO_MYSQL_PORT');
$basededatos = getenv('DB_NAME') ?: 'simeindb';
$usuario = getenv('DB_USER') ?: 'root';
$contraseña = getenv('STACKHERO_MYSQL_ROOT_PASSWORD');
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