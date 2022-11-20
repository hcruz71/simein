  <?php  
 //fetch.php  
  session_start();
  extract($_POST);
  extract($_GET); 
              
 include '../conexion.php';
 if ( !isset($pdo) ) {
     $pdo = connect(); 
 }

 if(isset($_POST["id"]))  
 {  
     $sql = "SELECT * FROM listado WHERE id = '".$_POST["id"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row = $query->fetchAll();
      echo json_encode($row);  
 } 

  if(isset($_POST["select"]))  
 {  
     $sql = "SELECT * FROM historial_clinico WHERE id = '".$_POST["select"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }

   if(isset($_POST["id_pac_cita"]))  
 {  
  $id_doctor=$_SESSION['id_usuario'];
     $sql = "SELECT * FROM pacientes WHERE id_doctor=$id_doctor and id_Paciente = '".$_POST["id_pac_cita"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }

    if(isset($_POST["id_asistente"]))  
 {  
  $id_doctor=$_SESSION['id_usuario'];
     $sql = "SELECT * FROM usuarios WHERE id = '".$_POST["id_asistente"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }

     if(isset($_POST["id_delete"]))  
 {  
  $id_doctor=$_SESSION['id_usuario'];
     $sql = "UPDATE usuarios set sn_activo=0 WHERE id = '".$_POST["id_delete"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
      echo $_POST["id_delete"];  
 }

if(isset($_POST["id_delete_doc"]))  
 {  
  $id_doctor=$_SESSION['id_usuario'];
     $sql = "UPDATE archivos set activo=0 WHERE id = '".$_POST["id_delete_doc"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
      echo $_POST["id_delete_doc"];  
 }


if(isset($_POST["id_delete_img"]))  
 {  
  $id_doctor=$_SESSION['id_usuario'];
     $sql = "UPDATE archivos set activo=0 WHERE id = '".$_POST["id_delete_img"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
      echo $_POST["id_delete_img"];  
 }

    if(isset($_POST["id_dx"]))  
 {  
     $sql = "SELECT * FROM cie10_4 WHERE id = '".$_POST["id_dx"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }

     if(isset($_POST["id_gab"]))  
 {  
     $sql = "SELECT * FROM cat_laboratorio WHERE id = '".$_POST["id_gab"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }

     if(isset($_POST["id_med"]))  
 {  
     $sql = "SELECT * FROM cat_med WHERE id = '".$_POST["id_med"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }


if(isset($_POST["delete_consulta"]))  
 {  
     $sql = "UPDATE historial_clinico set activo=0 WHERE id = '".$_POST["delete_consulta"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo $_POST["delete_consulta"];  
 }

  if(isset($_POST["id_consulta"]))  
 {  
     $sql = "SELECT * FROM historial_clinico WHERE id = '".$_POST["id_consulta"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }

   if(isset($_POST["delete_concepto"]))  
 {  
     $sql = "UPDATE cat_honorarios set activo=0 WHERE id = '".$_POST["delete_concepto"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }

   if(isset($_POST["delete_concepto_pac"]))  
 {  
     $sql = "UPDATE honorarios set activo=0 WHERE id = '".$_POST["delete_concepto_pac"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }

    if(isset($_POST["id_carga_conceptos"]))  
 {  
     $sql = "SELECT * FROM cat_honorarios WHERE id = '".$_POST["id_carga_conceptos"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }

    if(isset($_POST["id_template"]))  
 {  
     $sql = "SELECT * FROM templates_recetas WHERE id_template = '".$_POST["id_template"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }

    if(isset($_POST["id_arc_img"]))  
 {  
     $sql = "SELECT * FROM archivos WHERE id = '".$_POST["id_arc_img"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }

    if(isset($_POST["id_delete_receta"]))  
 {  
     $sql = "UPDATE templates_recetas set activo=0 WHERE id_template = '".$_POST["id_delete_receta"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo $row_hc;  
 }

      if(isset($_POST["id_cita"]))  
 {  
     $sql = "SELECT fl_File FROM pacientes WHERE id_Paciente = '".$_POST["id_cita"]."'";  
     $query = $pdo->prepare($sql);
     $query->execute();
     $row_hc = $query->fetchAll();
      echo json_encode($row_hc);  
 }
 ?>