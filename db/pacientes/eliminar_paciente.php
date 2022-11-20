<?php
//Eliminar paciente
  session_start();

  $registro = $_POST['value']; 
  $doctor = $_SESSION['id_usuario'];
  
    
 	  include '../../conexion.php';
     try {
      if ( !isset($pdo) ) {
          $pdo = connect(); 
      }                       
     } catch (PDOException $e) {
      echo 'Falló la conexión: ' . $e->getMessage();
      die();
    }

      $sql = "DELETE FROM pacientes WHERE id_doctor = '$doctor' AND  id_Paciente ='$registro'";  
      $query = $pdo->prepare($sql);
      $query->execute();
      $result = $query->fetchAll();
      //$row = mysqli_festch_array($result);  
      echo json_encode(array('result' => $result  ));  
?>