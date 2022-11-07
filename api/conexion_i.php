<?php 
/*
$host = 'localhost';
$basededatos = 'u313491158_sdroffice';
$usuario = 'u313491158_sdroffice';
$contraseña = 'Sim572771.';

  */
$host = 'mysql5011.site4now.net';
$basededatos = 'db_a43baf_simein';
$usuario = 'a43baf_simein';
$contraseña = 'Sim572771.';
/*
$host = '192.168.65.2';
$basededatos = 'db_main_simein';
$usuario = 'simeindbuser';
$contraseña = 'Hacz572771.';*/



$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);

mysqli_set_charset($conexion,"utf8");

if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}








 ?>