<?php 

/*$host = 'mysql5011.site4now.net';
$basededatos = 'db_a43baf_simein';
$usuario = 'a43baf_simein';
$contraseña = 'Sim572771.';*/

$host = '3573lf.stackhero-network.com';
$basededatos = 'simeindb';
$usuario = 'root';
$contraseña = 'kx3QtnkJ2Boz1zPiFc4CCEV2QheQ2oYq';
$flags = MYSQLI_CLIENT_SSL;

$conexion  = mysqli_init();
mysqli_ssl_set($conexion, null, 'isrgrootx1.pem', null, null, null);
mysqli_real_connect($conexion, $host, $usuario, $contraseña, null, null, null, $flags);


/*
$host = '192.168.65.2';
$basededatos = 'db_main_simein';
$usuario = 'simeindbuser';
$contraseña = 'Hacz572771.';*/




//$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);

/*$conexion = mysqli_init();
$conexion->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
$conexion->ssl_set(NULL, NULL, "isrgrootx1.pem", NULL, NULL);
$conexion->real_connect('hostname', 'user', 'password', 'database');
*/


mysqli_set_charset($conexion,"utf8");

if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}
?>