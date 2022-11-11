<?php
/*
$host = '3573lf.stackhero-network.com';
$basededatos = 'simeindb';
$usuario = 'root';
$contraseña = 'kx3QtnkJ2Boz1zPiFc4CCEV2QheQ2oYq';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
  die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}*/

//Nueva conexion PHP 8.1.14
function connect() {
/*    $host = '3573lf.stackhero-network.com';
    $basededatos = 'simeindb';
    $user = 'root';
    $password = 'kx3QtnkJ2Boz1zPiFc4CCEV2QheQ2oYq';
    $options = array(
      PDO::MYSQL_ATTR_SSL_CA=>'isrgrootx1.pem',
      PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
     );

  return new PDO('mysql:host='.$host.';dbname='.$basededatos, $user, $password, $options;
*/
$hostname = 'localhost';
	$name = 'petsdb';
	$user = 'app_pet';
	$password = 'yC2)[[6M6HHe58eB';
    return new PDO('mysql:host='.$hostname.';dbname='.$name, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));



}

?>