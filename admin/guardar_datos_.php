  <?php  
 //fetch.php  
  session_start();
		include '../../conexion_i.php';	        

			        $id_doctor=$_SESSION['id_usuario'];

 if(isset($_POST["nombre_repre"]))  
 {  

  $id_coordinador=$_SESSION['id_usuario'];
  $foto_repre=$_POST['foto_repre'];
  $nombre_repre=$_POST['nombre_repre'];
  $celular_repre=$_POST['celular_repre'];
  $correo_repre=$_POST['correo_repre'];
  $domicilio_repre=$_POST['domicilio_repre'];
  $fecha=date('y-m-d');

  
  $resent_max="SELECT MAX(id_usuario) FROM usuarios";
  $resent=mysqli_query($conexion,$resent_max);
  while ($row=mysqli_fetch_row ($resent)){
      $row1=$row[0]+1;
  }
  $sentencia="INSERT INTO usuarios(id_usuario, usuario, nb_usuario, pw_usuario, rol, fecha_ing, id_asesor, sn_activo) VALUES ('$row1', '$nombre_repre', '$correo_repre', '123', '4', '$fecha', '$id_coordinador', '1')";

  //$sentencia="INSERT INTO usuarios(id_usuario, usuario, nb_usuario, pw_usuario, id_asesor, fecha_ing, id_asesor, sn_activo) VALUES ('$row1', '$nombre_repre', '$correo_repre', '123', '4', '$fecha', '$id_coordinador', '1')";
  $resent22=mysqli_query($conexion,$sentencia); 

  $sentencia_doc="INSERT INTO doctor(id_doctor, nombre, id_asesor, correo, celular, direccion, rol, id_especialidad) VALUES ('$row1', '$nombre_repre', '$id_coordinador', '$correo_repre', '$celular_repre', '$domicilio_repre', '4', '1')";
  $resent_doc=mysqli_query($conexion,$sentencia_doc); 

   
      echo $resent22;  
 } 


 if(isset($_POST["nombre_doctor"]))  
 {  

  $id_coordinador=$_SESSION['id_usuario'];
  $foto_doctor=$_POST['foto_doctor'];
  $nombre_doctor=$_POST['nombre_doctor'];
  $celular_doctor=$_POST['celular_doctor'];
  $correo_doctor=$_POST['correo_doctor'];
  $domicilio_doctor=$_POST['domicilio_doctor'];
  $metodo=$_POST['metodo'];
  $fecha=date('y-m-d');

  
  $resent_max="SELECT MAX(id_usuario) FROM usuarios";
  $resent=mysqli_query($conexion,$resent_max);
  while ($row=mysqli_fetch_row ($resent)){
      $row1=$row[0]+1;
  }
  $sentencia="INSERT INTO usuarios(id_usuario, usuario, nb_usuario, pw_usuario, rol, fecha_ing, id_asesor, sn_activo, id_antecedentes, id_historial) VALUES ('$row1', '$nombre_doctor', '$correo_doctor', '123', '1', '$fecha', '$id_coordinador', '1', '1', '1')";

  //$sentencia="INSERT INTO usuarios(id_usuario, usuario, nb_usuario, pw_usuario, id_asesor, fecha_ing, id_asesor, sn_activo) VALUES ('$row1', '$nombre_repre', '$correo_repre', '123', '4', '$fecha', '$id_coordinador', '1')";
  $resent22=mysqli_query($conexion,$sentencia); 

  $sentencia_doc="INSERT INTO doctor(id_doctor, nombre, id_asesor, correo, celular, direccion, rol, id_especialidad, id_alergicos, id_hf, id_pp, id_np, id_go, id_padecimiento, id_signos_vitales, id_diagnosticos, id_archivos) VALUES ('$row1', '$nombre_doctor', '$id_coordinador', '$correo_doctor', '$celular_doctor', '$domicilio_doctor', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1')";
  $resent_doc=mysqli_query($conexion,$sentencia_doc);

  $sentencia_vta="INSERT INTO venta_expediente(id_doctor, id_coordinador, fecha_venta, total, metodo, status, activo) VALUES ('$row1', '$id_coordinador', '$fecha', '6750', '$metodo', '1', '1')";
  $resent_vta=mysqli_query($conexion,$sentencia_vta); 

   
      echo $resent22; 
 }

  if(isset($_POST["nombre_med"]))  
 {  
  $id_med=$_POST['id_med'];
  $nombre_med=$_POST['nombre_med'];
  $presentacion_med=$_POST['presentacion_med'];
  if ($id_med=="") {
    $sentencia="INSERT INTO cat_medicamentos(nombre, presentacion) VALUES ('$nombre_med', '$presentacion_med')";
    $resent=mysqli_query($conexion,$sentencia);
     
        echo $resent;
  }else{

    $sentencia="UPDATE cat_medicamentos set nombre='$nombre_med', presentacion='$presentacion_med' WHERE id='$id_med'";
    $resent=mysqli_query($conexion,$sentencia);
     
        echo $resent;
  }
 
 }
 ?>