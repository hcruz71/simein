<?php

 $conexion = mysql_connect("mysql5011.site4now.net","a43baf_simein","Sim572771.");
  mysql_select_db("db_a43baf_simein",$conexion);

  
  mysql_query("SET NAMES 'utf8'");
/*
$host = 'localhost';
$basededatos = 'u313491158_sdroffice';
$usuario = 'u313491158_sdroffice';
$contraseña = 'Sim572771.';
*/



/*
$host = 'mysql5011.site4now.net';
$basededatos = 'db_a43baf_simein';
$usuario = 'a43baf_simein';
$contraseña = 'Sim572771.';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
  die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}*/
  
  //date_default_timezone_set("America/Mexico");
  /*
  function limpiar($tags){
    $tags = strip_tags($tags);
    $tags = stripslashes($tags);
    $tags = htmlentities($tags);
    $tags = mysql_real_escape_string($tags);
    return $tags;
  }
  */
?>