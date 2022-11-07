  <?php  
 //fetch.php  
  session_start();
  extract($_POST);
  extract($_GET); 
              
 include '../conexion_i.php';

 if(isset($_POST["id"]))  
 {  
      $query = "SELECT * FROM listado WHERE id = '".$_POST["id"]."'";  
      $result = mysqli_query($conexion, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 } 

  if(isset($_POST["select"]))  
 {  
      $query = "SELECT * FROM historial_clinico WHERE id = '".$_POST["select"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }

   if(isset($_POST["id_pac_cita"]))  
 {  
  $id_doctor=$_SESSION['id_usuario'];
      $query = "SELECT * FROM pacientes WHERE id_doctor=$id_doctor and id_Paciente = '".$_POST["id_pac_cita"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }

    if(isset($_POST["id_asistente"]))  
 {  
  $id_doctor=$_SESSION['id_usuario'];
      $query = "SELECT * FROM usuarios WHERE id = '".$_POST["id_asistente"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }

     if(isset($_POST["id_delete"]))  
 {  
  $id_doctor=$_SESSION['id_usuario'];
      $query = "UPDATE usuarios set sn_activo=0 WHERE id = '".$_POST["id_delete"]."'";  
      $result_hc = mysqli_query($conexion, $query);
      echo $_POST["id_delete"];  
 }

if(isset($_POST["id_delete_doc"]))  
 {  
  $id_doctor=$_SESSION['id_usuario'];
      $query = "UPDATE archivos set activo=0 WHERE id = '".$_POST["id_delete_doc"]."'";  
      $result_hc = mysqli_query($conexion, $query);
      echo $_POST["id_delete_doc"];  
 }


if(isset($_POST["id_delete_img"]))  
 {  
  $id_doctor=$_SESSION['id_usuario'];
      $query = "UPDATE archivos set activo=0 WHERE id = '".$_POST["id_delete_img"]."'";  
      $result_hc = mysqli_query($conexion, $query);
      echo $_POST["id_delete_img"];  
 }

    if(isset($_POST["id_dx"]))  
 {  
      $query = "SELECT * FROM cie10_4 WHERE id = '".$_POST["id_dx"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }

     if(isset($_POST["id_gab"]))  
 {  
      $query = "SELECT * FROM cat_laboratorio WHERE id = '".$_POST["id_gab"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }

     if(isset($_POST["id_med"]))  
 {  
      $query = "SELECT * FROM cat_med WHERE id = '".$_POST["id_med"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }


if(isset($_POST["delete_consulta"]))  
 {  
      $query = "UPDATE historial_clinico set activo=0 WHERE id = '".$_POST["delete_consulta"]."'";  
      $result_hc = mysqli_query($conexion, $query);
      echo $_POST["delete_consulta"];  
 }

  if(isset($_POST["id_consulta"]))  
 {  
      $query = "SELECT * FROM historial_clinico WHERE id = '".$_POST["id_consulta"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }

   if(isset($_POST["delete_concepto"]))  
 {  
      $query = "UPDATE cat_honorarios set activo=0 WHERE id = '".$_POST["delete_concepto"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }

   if(isset($_POST["delete_concepto_pac"]))  
 {  
      $query = "UPDATE honorarios set activo=0 WHERE id = '".$_POST["delete_concepto_pac"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }

    if(isset($_POST["id_carga_conceptos"]))  
 {  
      $query = "SELECT * FROM cat_honorarios WHERE id = '".$_POST["id_carga_conceptos"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }

    if(isset($_POST["id_template"]))  
 {  
      $query = "SELECT * FROM templates_recetas WHERE id_template = '".$_POST["id_template"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }

    if(isset($_POST["id_arc_img"]))  
 {  
      $query = "SELECT * FROM archivos WHERE id = '".$_POST["id_arc_img"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }

    if(isset($_POST["id_delete_receta"]))  
 {  
      $query = "UPDATE templates_recetas set activo=0 WHERE id_template = '".$_POST["id_delete_receta"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      echo $result_hc;  
 }

      if(isset($_POST["id_cita"]))  
 {  
  $id_doctor=$_SESSION['id_usuario'];
      $query = "SELECT fl_File FROM pacientes WHERE id_doctor='$id_doctor' and id_Paciente = '".$_POST["id_cita"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }

      if(isset($_POST["load_doc"]))  
 {  
      $query = "SELECT * FROM doctor WHERE id_doctor = '".$_POST["load_doc"]."'";  
      $result_hc = mysqli_query($conexion, $query);  
      $row_hc = mysqli_fetch_array($result_hc);  
      echo json_encode($row_hc);  
 }
 ?>