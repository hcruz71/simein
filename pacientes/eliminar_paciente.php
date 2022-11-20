<?php
//Eliminar paciente
  session_start();


  $registro = $_POST['value']; 
  $doctor = $_SESSION['id_usuario'];
  
    
 	  include '../../conexion.php';
     if ( !isset($pdo) ) {
      $pdo = connect(); 
  }
      $sql = "DELETE FROM pacientes WHERE id_doctor = '$doctor' AND  id_Paciente ='$registro'";  
      $query = $pdo->prepare($sql);
      $result = $query->execute();
      //$row = mysqli_festch_array($result);  
      echo json_encode(array('result' => $result  ));  
?>