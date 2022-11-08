<?php
session_start();
extract($_GET);
        $doctor=$_SESSION['id_usuario'];
        $paciente=$_GET['id_Paciente'];
        

include 'conexion_i.php';

        $sql="update pacientes set sn_Activo=0 WHERE id_doctor=$doctor and id_Paciente=$paciente";
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $ressql=mysqli_query($conexion,$sql);

        echo "eliminado con exito";
        echo $doctor;
        echo $paciente;
       echo "<script> location.href='pacientes.php'; </script>";
                                           
?>
