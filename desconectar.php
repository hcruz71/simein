<?php 
session_start();
if($_SESSION['id_usuario']){	
	session_destroy();
	header("location: /login.php");
}
else{
	header("location: /login.php");
}
?>