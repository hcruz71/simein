<?php 
session_start();
if($_SESSION['id_usuario']){	
	session_destroy();
	header("location:https://simein.herokuapp.com/login.php");
}
else{
	header("location:https://simein.herokuapp.com/login.php");
}
?>