<?php

  $conexion = mysql_connect("mysql5011.site4now.net","a43baf_simein","Sim572771.");
  mysql_select_db("db_a43baf_simein",$conexion);
  
  mysql_query("SET NAMES 'utf8'");

$host = '192.168.65.2';
$basededatos = 'db_main_simein';
$usuario = 'simeindbuser';
$contraseña = 'Hacz572771.';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
  die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}
  
  //date_default_timezone_set("America/Mexico");
  /*
  	'hostname' => '192.168.65.2',
	'username' => 'simeindbuser',
	'password' => 'Hacz572771.',
	'database' => 'db_main_simein',
	'dbdriver' => 'mysqli',
  function limpiar($tags){
    $tags = strip_tags($tags);
    $tags = stripslashes($tags);
    $tags = htmlentities($tags);
    $tags = mysql_real_escape_string($tags);
    return $tags;
  }
  */
?>