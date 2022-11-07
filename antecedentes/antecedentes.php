  <?php  
 //fetch.php  
  session_start();
		include '../../conexion_i.php';	        

			        $id_doctor=$_SESSION['id_usuario'];
			        $id_paciente=$_SESSION['id_pac_get'];

 if(isset($_POST["listado"]))  
 {  

  $query1 = "SELECT listado FROM listado WHERE id = '".$_POST["listado"]."'";  
      $result1 = mysqli_query($conexion, $query1);  
      $row = mysqli_fetch_array($result1);
      $listado=$row[0];

      $query = "INSERT INTO listado(id_doctor, id_paciente, listado, id_listado) values ('$id_doctor', '$id_paciente', '$listado', '1')";  
      $result = mysqli_query($conexion, $query);   
      echo 'insert';  
 } 

  if(isset($_POST["add_ant_hf"]))  
 { 
    $listado=$_POST["add_ant_hf"];
      $query = "INSERT INTO listado(id_doctor, id_paciente, listado, id_listado) values ('$id_doctor', '$id_paciente', '$listado', '1')";  
      $result = mysqli_query($conexion, $query);   
      echo $listado;  
 } 

  if(isset($_POST["add_ant_pp"]))  
 { 
    $listado=$_POST["add_ant_pp"];
      $query = "INSERT INTO listado(id_doctor, id_paciente, listado, id_listado) values ('$id_doctor', '$id_paciente', '$listado', '2')";  
      $result = mysqli_query($conexion, $query);   
      echo $listado;  
 } 


   if(isset($_POST["add_ant_np"]))  
 { 
    $listado=$_POST["add_ant_np"];
      $query = "INSERT INTO listado(id_doctor, id_paciente, listado, id_listado) values ('$id_doctor', '$id_paciente', '$listado', '3')";  
      $result = mysqli_query($conexion, $query);   
      echo $listado;  
 } 

   if(isset($_POST["add_ant_go"]))  
 { 
    $listado=$_POST["add_ant_go"];
      $query = "INSERT INTO listado(id_doctor, id_paciente, listado, id_listado) values ('$id_doctor', '$id_paciente', '$listado', '4')";  
      $result = mysqli_query($conexion, $query);   
      echo $listado;  
 } 

     if(isset($_POST["add_ant_alergicos"]))  
 { 
    $listado=$_POST["add_ant_alergicos"];
      $query = "INSERT INTO listado(id_doctor, listado, id_listado) values ('$id_doctor', '$listado', '5')";  
      $result = mysqli_query($conexion, $query);   
      echo $listado;  
 } 
 ?>