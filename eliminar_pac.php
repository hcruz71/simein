<?php
session_start();
extract($_GET);
        $doctor=$_SESSION['id_usuario'];
        $paciente=$_GET['id_Paciente'];
        
include 'conexion.php';	
  
    try {
        if ( !isset($pdo) ) {
            $pdo = connect(); 
        }                       
    } catch (PDOException $e) {
         echo 'Falló la conexión: ' . $e->getMessage();
         die();
    }    

        $sql="update pacientes set sn_Activo=0 WHERE id_doctor=$doctor and id_Paciente=$paciente";
        $query = $pdo->prepare($sql);
        $query->execute(); 
        
        echo "eliminado con exito";
        echo $doctor;
        echo $paciente;
       echo "<script> location.href='pacientes.php'; </script>";
                                           
?>
