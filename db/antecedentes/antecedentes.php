  <?php  
 //fetch.php  
  session_start();
		include '../../conexion.php';	        

		$id_doctor=$_SESSION['id_usuario'];
		$id_paciente=$_SESSION['id_pac_get'];

 if(isset($_POST["listado"]))  
 {  

    $sql = "SELECT listado FROM listado WHERE id = '".$_POST["listado"]."'";  
    $query = $pdo->prepare($sql);
    $query->execute();
    $row = $query->fetchAll();
    $listado=$row[0];

    $sql = "INSERT INTO listado(id_doctor, id_paciente, listado, id_listado) values ('$id_doctor', '$id_paciente', '$listado', '1')";  
    $query = $pdo->prepare($sql);
    $query->execute(); 
    echo 'insert';  
 } 

  if(isset($_POST["add_ant_hf"]))  
 { 
    $listado=$_POST["add_ant_hf"];
    $sql = "INSERT INTO listado(id_doctor, id_paciente, listado, id_listado) values ('$id_doctor', '$id_paciente', '$listado', '1')";  
    $query = $pdo->prepare($sql);
    $query->execute();  
    echo $listado;  
 } 

  if(isset($_POST["add_ant_pp"]))  
 { 
    $listado=$_POST["add_ant_pp"];
    $sql = "INSERT INTO listado(id_doctor, id_paciente, listado, id_listado) values ('$id_doctor', '$id_paciente', '$listado', '2')";  
    $query = $pdo->prepare($sql);
    $query->execute();   
    echo $listado;  
 } 


   if(isset($_POST["add_ant_np"]))  
 { 
    $listado=$_POST["add_ant_np"];
    $query = "INSERT INTO listado(id_doctor, id_paciente, listado, id_listado) values ('$id_doctor', '$id_paciente', '$listado', '3')";  
    $query = $pdo->prepare($sql);
    $query->execute();   
    echo $listado;  
 } 

   if(isset($_POST["add_ant_go"]))  
 { 
    $listado=$_POST["add_ant_go"];
    $sql = "INSERT INTO listado(id_doctor, id_paciente, listado, id_listado) values ('$id_doctor', '$id_paciente', '$listado', '4')";  
    $query = $pdo->prepare($sql);
    $query->execute(); 
      echo $listado;  
 } 

     if(isset($_POST["add_ant_alergicos"]))  
 { 
    $listado=$_POST["add_ant_alergicos"];
    $sql = "INSERT INTO listado(id_doctor, listado, id_listado) values ('$id_doctor', '$listado', '5')";  
    $query = $pdo->prepare($sql);
    $query->execute();  
      echo $listado;  
 } 
 ?>