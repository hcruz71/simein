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
  $fecha=date('y-m-d');

    if ($id_doctor_add=="") {
      $resent_max="SELECT MAX(id_usuario) FROM usuarios";
      $resent=mysqli_query($conexion,$resent_max);
      while ($row=mysqli_fetch_row ($resent)){
          $row1=$row[0]+1;
      }
      $sentencia="INSERT INTO usuarios(id_usuario, usuario, nb_usuario, pw_usuario, rol, fecha_ing, id_asesor, sn_activo, id_antecedentes, id_historial) VALUES ('$row1', '$nombre_doctor', '$correo_doctor', '123', '1', '$fecha', '$id_coordinador', '1', '1', '1')";

      //$sentencia="INSERT INTO usuarios(id_usuario, usuario, nb_usuario, pw_usuario, id_asesor, fecha_ing, id_asesor, sn_activo) VALUES ('$row1', '$nombre_repre', '$correo_repre', '123', '4', '$fecha', '$id_coordinador', '1')";
      $resent22=mysqli_query($conexion,$sentencia); 

      $sentencia_doc="INSERT INTO doctor(id_doctor, nombre, id_asesor, correo, celular, direccion, rol, id_especialidad, id_alergicos, id_hf, id_pp, id_np, id_go, id_padecimiento, id_signos_vitales, id_diagnosticos, id_archivos, id_gabinete, id_honorarios, de_cProf, de_cEsp) VALUES ('$row1', '$nombre_doctor', '$id_coordinador', '$correo_doctor', '$celular_doctor', '$domicilio_doctor', '1', '$id_especialidad', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '$nu_cProf', '$nu_cEsp')";
      $resent_doc=mysqli_query($conexion,$sentencia_doc);

      $sentencia_pac="INSERT INTO pacientes(id_doctor, id_Paciente, sn_Activo) VALUES ('$row1', '0', '0')";
      $resent_pac=mysqli_query($conexion,$sentencia_pac);

      $sentencia_vta="INSERT INTO venta_expediente(id_doctor, id_coordinador, fecha_venta, total, metodo, status, activo) VALUES ('$row1', '$id_coordinador', '$fecha', '6750', '$metodo', '1', '1')";
      $resent_vta=mysqli_query($conexion,$sentencia_vta); 

      echo $resent22; 

    }else{
      $sentencia_doc_up="UPDATE doctor set nombre='$nombre_doctor', atencion='$atencion', de_cEsp='$nu_cEsp', de_cProf='$nu_cProf', correo='$correo_doctor', celular='$celular_doctor', direccion='$domicilio_doctor', id_especialidad='$id_especialidad' WHERE id_doctor=$id_doctor_add";
      $resent_doc_up=mysqli_query($conexion,$sentencia_doc_up);
      echo $resent_doc_up; 
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

  $resent_max="SELECT MAX(id) FROM cat_med";
  $resent=mysqli_query($conexion,$resent_max);
  while ($row=mysqli_fetch_row ($resent)){
      $row1=$row[0]+1;
  }

    $sentencia="INSERT INTO cat_med(id, nombrecomercial, presentacion, envoltura, ingrediente, concentracion, unidad) VALUES ('$row1', '$nombre_med', '$presentacion_med', '$envoltura', '$ingrediente','$concentracion', '$unidad')";
    $resent=mysqli_query($conexion,$sentencia);
     
        echo $resent;
  }else{

    $sentencia="UPDATE cat_med set nombrecomercial='$nombre_med', presentacion='$presentacion_med', envoltura='$envoltura', ingrediente='$ingrediente', concentracion='$concentracion', unidad='$unidad' WHERE id='$id_med'";
    $resent=mysqli_query($conexion,$sentencia);
     
        echo $resent;
  }
 
 }
 ?>