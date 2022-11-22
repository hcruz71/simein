  <?php  
 //fetch.php  
  session_start();
	include '../../conexion.php';	        
  $id_doctor=$_SESSION['id_usuario'];
  
  //Obtiene el indice maximo
  $sql="SELECT MAX(id_usuario) FROM usuarios";
  $query = $pdo->prepare($sql);

  $query->execute();
  $list = $query->fetchAll();
  foreach ($list as $row) {
    $row1=$row[0]+1;
  }

  if(isset($_POST["nombre_repre"]))  
  {  

    $id_coordinador=$_SESSION['id_usuario'];
    $foto_repre=$_POST['foto_repre'];
    $nombre_repre=$_POST['nombre_repre'];
    $celular_repre=$_POST['celular_repre'];
    $correo_repre=$_POST['correo_repre'];
    $domicilio_repre=$_POST['domicilio_repre'];
    $date = new DateTime("now", new DateTimeZone('America/Mazatlan') );
    $fecha = $date->format('Y-m-d');

    //Insert a usuarios
    try {
      $sql="INSERT INTO usuarios(id_usuario, usuario, nb_usuario, pw_usuario, rol, fecha_ing, id_asesor, sn_activo) VALUES ('$row1', '$nombre_repre', '$correo_repre', '123', '4', '$fecha', '$id_coordinador', '1')";
      //$sql="INSERT INTO usuarios(id_usuario, usuario, nb_usuario, pw_usuario, rol, fecha_ing, id_asesor, sn_activo) VALUES ('$row1', '$nombre_repre', '$correo_repre', '123', '4', '".$fecha."', '$id_coordinador', '1')";
      $query = $pdo->prepare($sql);

      /*$query->bindParam(':row1', $row1, PDO::PARAM_STR);
	    $query->bindParam(':nombre_repre', $nombre_repre, PDO::PARAM_STR);
	    $query->bindParam(':correo_repreo', $correo_repre, PDO::PARAM_STR);
      $query->bindParam(':id_coordinador', $id_coordinador, PDO::PARAM_STR);*/
  
      $query->execute();
    } catch (PDOException $e) {
      echo 'PDOException : '.  $e->getMessage();
    }
    
  
    //Inserta Doctor
    try{
      $sql="INSERT INTO doctor(id_doctor, nombre, id_asesor, correo, celular, direccion, rol, id_especialidad) VALUES ('$row1', '$nombre_repre', '$id_coordinador', '$correo_repre', '$celular_repre', '$domicilio_repre', '4', '1')";
      $query = $pdo->prepare($sql);
      $query->execute();
    } catch (PDOException $e) {
      echo 'PDOException : '.  $e->getMessage();
    }
    
 } 


 if(isset($_POST["nombre_doctor"]))  
 {  

  $id_coordinador=$_SESSION['id_usuario'];
  $atencion=$_POST['atencion'];
  $nombre_doctor=$_POST['nombre_doctor'];
  $celular_doctor=$_POST['celular_doctor'];
  $correo_doctor=$_POST['correo_doctor'];
  $domicilio_doctor=$_POST['domicilio_doctor'];
  $metodo=$_POST['metodo'];
  $id_especialidad=$_POST['id_especialidad'];
  $nu_cEsp=$_POST['nu_cEsp'];
  $nu_cProf=$_POST['nu_cProf'];
  $id_doctor_add=$_POST['id_doctor_add'];
  $date = new DateTime("now", new DateTimeZone('America/Mazatlan') );
  $fecha = $date->format('Y-m-d');

  $sql="INSERT INTO usuarios(id_usuario, usuario, nb_usuario, pw_usuario, rol, fecha_ing, id_asesor, sn_activo, id_antecedentes, id_historial) VALUES ('$row1', '$nombre_doctor', '$correo_doctor', '123', '1', '$fecha', '$id_coordinador', '1', '1', '1')";
  try{
     $query = $pdo->prepare($sql);
     $query->execute();
  } catch (PDOException $e) {
    echo 'PDOException : '.  $e->getMessage();
  }

  $sql="INSERT INTO doctor(id_doctor, nombre, id_asesor, correo, celular, direccion, rol, id_especialidad, id_alergicos, id_hf, id_pp, id_np, id_go, id_padecimiento, id_signos_vitales, id_diagnosticos, id_archivos, id_gabinete, id_honorarios, de_cProf, de_cEsp) VALUES ('$row1', '$nombre_doctor', '$id_coordinador', '$correo_doctor', '$celular_doctor', '$domicilio_doctor', '1', '$id_especialidad', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '$nu_cProf', '$nu_cEsp')";
  try{
    $query = $pdo->prepare($sql);
    $query->execute();
  } catch (PDOException $e) {
    echo 'PDOException : '.  $e->getMessage();
  }

  $sql="INSERT INTO pacientes(id_doctor, id_Paciente, sn_Activo) VALUES ('$row1', '0', '0')";
  try{
    $query = $pdo->prepare($sql);
    $query->execute();
  } catch (PDOException $e) {
    echo 'PDOException : '.  $e->getMessage();
  }

  $sentencia_vta="INSERT INTO venta_expediente(id_doctor, id_coordinador, fecha_venta, total, metodo, status, activo) VALUES ('$row1', '$id_coordinador', '$fecha', '6750', '$metodo', '1', '1')";
  try{
    $query = $pdo->prepare($sql);
    $query->execute();
  } catch (PDOException $e) {
    echo 'PDOException : '.  $e->getMessage();
  }

  }
  else{
      $sentencia_doc_up="UPDATE doctor set nombre='$nombre_doctor', atencion='$atencion', de_cEsp='$nu_cEsp', de_cProf='$nu_cProf', correo='$correo_doctor', celular='$celular_doctor', direccion='$domicilio_doctor', id_especialidad='$id_especialidad' WHERE id_doctor=$id_doctor_add";
      try{
        $query = $pdo->prepare($sql);
        $query->execute();
      } catch (PDOException $e) {
        echo 'PDOException : '.  $e->getMessage();
      }
 }

  if(isset($_POST["nombre_med"]))  
 {  
  $id_med=$_POST['id_med'];
  $nombre_med=$_POST['nombre_med'];
  $presentacion_med=$_POST['presentacion_med'];
  $envoltura=$_POST['envoltura'];
  $ingrediente=$_POST['ingrediente'];
  $concentracion=$_POST['concentracion'];
  $unidad=$_POST['unidad'];
  if ($id_med=="") {

  //Maximo indice de cat_med  
  $sql="SELECT MAX(id) FROM cat_med";
  try{
    $query = $pdo->prepare($sql);
    $query->execute();
  } catch (PDOException $e) {
    echo 'PDOException : '.  $e->getMessage();
  }
  $list = $query->fetchAll();
  foreach ($list as $row) {
      $row1=$row[0]+1;
  }

  $sql="INSERT INTO cat_med(id, nombrecomercial, presentacion, envoltura, ingrediente, concentracion, unidad) VALUES ('$row1', '$nombre_med', '$presentacion_med', '$envoltura', '$ingrediente','$concentracion', '$unidad')";
  try{
    $query = $pdo->prepare($sql);
    $query->execute();
  } catch (PDOException $e) {
    echo 'PDOException : '.  $e->getMessage();
  }
  
  }else{

    $sentencia="UPDATE cat_med set nombrecomercial='$nombre_med', presentacion='$presentacion_med', envoltura='$envoltura', ingrediente='$ingrediente', concentracion='$concentracion', unidad='$unidad' WHERE id='$id_med'";
    try{
      $query = $pdo->prepare($sql);
      $query->execute();
    } catch (PDOException $e) {
      echo 'PDOException : '.  $e->getMessage();
    }
    
  }
 
 }
 ?>