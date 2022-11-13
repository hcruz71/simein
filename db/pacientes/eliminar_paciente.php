<?php
//Eliminar paciente
  session_start();

  $registro = $_POST['value']; 
  $doctor = $_SESSION['id_usuario'];
  
    
 	  include '../../conexion_i.php';
      $query = "DELETE FROM pacientes WHERE id_doctor = '$doctor' AND  id_Paciente ='$registro'";  
      $result = mysqli_query($conexion, $query);  
      //$row = mysqli_festch_array($result);  
      echo json_encode(array('result' => $result  ));  
?>