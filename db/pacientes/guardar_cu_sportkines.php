<?php
  if(!isset($_SESSION)) {
    session_start();
}


    $fechaObj = new DateTime();
    $fecha = $fechaObj->format('Y-m-d H:i:s');

    //DATOS GENERALES
    $file=$_POST['foto_pac'];
    $nb_Paciente=$_POST['nb_Paciente'];
    $fh_Ingreso=date('Y-m-d');
    $fh_Nacimiento=$_POST['fh_Nacimiento'];
    $nu_Edad=$_POST['nu_Edad'];
    $id_Sexo=$_POST['id_Sexo'];
    $de_Ocupacion=$_POST['de_Ocupacion'];
    $nu_Celular=$_POST['nu_Celular'];
    $de_Email=$_POST['de_Email'];
    $de_Otros_datos=$_POST['de_Otros_datos'];
    $de_Estado_civil=$_POST['de_Estado_civil'];
    $id_Sangre=$_POST['id_Sangre'];
    $de_Religion=$_POST['de_Religion'];
    $nb_Emergencia=$_POST['nb_Emergencia'];
    $nu_Emergencia=$_POST['nu_Emergencia'];
    $de_Domicilio=$_POST['de_Domicilio'];
    $id_Aseguradora=$_POST['id_Aseguradora'];
	$id_doctor=$_SESSION['id_usuario'];


    //DATOS FISCALES
    $razon_social=$_POST['razon_social'];
    $RFC=$_POST['RFC'];
    $domicilio=$_POST['domicilio'];
    $colonia=$_POST['colonia'];
    $estado=$_POST['estado'];
    $municipio=$_POST['municipio'];
    $correo=$_POST['correo'];

    //CUESTIONARIO SPORTKINES: ANTECEDENTES
    if (isset($_POST['sportkines1_1Si'])){ $sportkines1_1Si = $_POST['sportkines1_1Si'];} else {$sportkines1_1Si='';}
    if (isset($_POST['sportkines1_1No'])){ $sportkines1_1No = $_POST['sportkines1_1No'];} else {$sportkines1_1No='';}
    if (isset($_POST['sportkines1_1Detalle'])){ $sportkines1_1Detalle = $_POST['sportkines1_1Detalle'];} else {$sportkines1_1Detalle='';}

    if (isset($_POST['sportkines1_2Si'])){ $sportkines1_2Si = $_POST['sportkines1_2Si'];} else {$sportkines1_2Si='';}
    if (isset($_POST['sportkines1_2No'])){ $sportkines1_2No = $_POST['sportkines1_2No'];} else {$sportkines1_2No='';}
    if (isset($_POST['sportkines1_2Detalle'])){ $sportkines1_2Detalle = $_POST['sportkines1_2Detalle'];} else {$sportkines1_2Detalle='';}

    if (isset($_POST['sportkines1_3Si'])){ $sportkines1_3Si = $_POST['sportkines1_3Si'];} else {$sportkines1_3Si='';}
    if (isset($_POST['sportkines1_3No'])){ $sportkines1_3No = $_POST['sportkines1_3No'];} else {$sportkines1_3No='';}
    if (isset($_POST['sportkines1_3Detalle'])){ $sportkines1_3Detalle = $_POST['sportkines1_3Detalle'];} else {$sportkines1_3Detalle='';}

    if (isset($_POST['sportkines1_4Si'])){ $sportkines1_4Si = $_POST['sportkines1_4Si'];} else {$sportkines1_4Si='';}
    if (isset($_POST['sportkines1_4No'])){ $sportkines1_4No = $_POST['sportkines1_4No'];} else {$sportkines1_4No='';}
    if (isset($_POST['sportkines1_4Detalle'])){ $sportkines1_4Detalle = $_POST['sportkines1_4Detalle'];} else {$sportkines1_4Detalle='';}

    if (isset($_POST['sportkines1_5Si'])){ $sportkines1_5Si = $_POST['sportkines1_5Si'];} else {$sportkines1_5Si='';}
    if (isset($_POST['sportkines1_5No'])){ $sportkines1_5No = $_POST['sportkines1_5No'];} else {$sportkines1_5No='';}
    if (isset($_POST['sportkines1_5Detalle'])){ $sportkines1_5Detalle = $_POST['sportkines1_5Detalle'];} else {$sportkines1_5Detalle='';}

    if (isset($_POST['sportkines1_6Si'])){ $sportkines1_6Si = $_POST['sportkines1_6Si'];} else {$sportkines1_6Si='';}
    if (isset($_POST['sportkines1_6No'])){ $sportkines1_6No = $_POST['sportkines1_6No'];} else {$sportkines1_6No='';}
    if (isset($_POST['sportkines1_6Detalle'])){ $sportkines1_6Detalle = $_POST['sportkines1_6Detalle'];} else {$sportkines1_6Detalle='';}

    if (isset($_POST['sportkines1_7Si'])){ $sportkines1_7Si = $_POST['sportkines1_7Si'];} else {$sportkines1_7Si='';}
    if (isset($_POST['sportkines1_7No'])){ $sportkines1_7No = $_POST['sportkines1_7No'];} else {$sportkines1_7No='';}
    if (isset($_POST['sportkines1_7Detalle'])){ $sportkines1_7Detalle = $_POST['sportkines1_7Detalle'];} else {$sportkines1_7Detalle='';}

    if (isset($_POST['sportkines1_8Si'])){ $sportkines1_8Si = $_POST['sportkines1_8Si'];} else {$sportkines1_8Si='';}
    if (isset($_POST['sportkines1_8No'])){ $sportkines1_8No = $_POST['sportkines1_8No'];} else {$sportkines1_8No='';}
    if (isset($_POST['sportkines1_8Detalle'])){ $sportkines1_8Detalle = $_POST['sportkines1_8Detalle'];} else {$sportkines1_8Detalle='';}

    if (isset($_POST['sportkines1_9Si'])){ $sportkines1_9Si = $_POST['sportkines1_9Si'];} else {$sportkines1_9Si='';}
    if (isset($_POST['sportkines1_9No'])){ $sportkines1_9No = $_POST['sportkines1_9No'];} else {$sportkines1_9No='';}
    if (isset($_POST['sportkines1_9Detalle'])){ $sportkines1_9Detalle = $_POST['sportkines1_9Detalle'];} else {$sportkines1_9Detalle='';}

    if (isset($_POST['sportkines1_10Si'])){ $sportkines1_10Si = $_POST['sportkines1_10Si'];} else {$sportkines1_10Si='';}
    if (isset($_POST['sportkines1_10No'])){ $sportkines1_10No = $_POST['sportkines1_10No'];} else {$sportkines1_10No='';}
    if (isset($_POST['sportkines1_10Detalle'])){ $sportkines1_10Detalle = $_POST['sportkines1_10Detalle'];} else {$sportkines1_10Detalle='';}

    if (isset($_POST['sportkines1_11Si'])){ $sportkines1_11Si = $_POST['sportkines1_11Si'];} else {$sportkines1_11Si='';}
    if (isset($_POST['sportkines1_11No'])){ $sportkines1_11No = $_POST['sportkines1_11No'];} else {$sportkines1_11No='';}
    if (isset($_POST['sportkines1_11Detalle'])){ $sportkines1_11Detalle = $_POST['sportkines1_11Detalle'];} else {$sportkines1_11Detalle='';}

    if (isset($_POST['sportkines1_12Si'])){ $sportkines1_12Si = $_POST['sportkines1_12Si'];} else {$sportkines1_12Si='';}
    if (isset($_POST['sportkines1_12No'])){ $sportkines1_12No = $_POST['sportkines1_12No'];} else {$sportkines1_12No='';}
    if (isset($_POST['sportkines1_12Detalle'])){ $sportkines1_12Detalle = $_POST['sportkines1_12Detalle'];} else {$sportkines1_12Detalle='';}

    if (isset($_POST['sportkines1_13Si'])){ $sportkines1_13Si = $_POST['sportkines1_13Si'];} else {$sportkines1_13Si='';}
    if (isset($_POST['sportkines1_13No'])){ $sportkines1_13No = $_POST['sportkines1_13No'];} else {$sportkines1_13No='';}
    if (isset($_POST['sportkines1_13Detalle'])){ $sportkines1_13Detalle = $_POST['sportkines1_13Detalle'];} else {$sportkines1_13Detalle='';}

    include '../../conexion_i.php';


    $result = mysqli_query($conexion,"SELECT id_Paciente FROM pacientes WHERE id_doctor=$id_doctor and id_Paciente=(SELECT MAX(id_Paciente) FROM pacientes WHERE id_doctor=$id_doctor)");
    $row = mysqli_fetch_array($result);
    $row1 =  $row['id_Paciente'] + 1;


	$add="INSERT INTO pacientes(id_doctor, id_Paciente, fl_File, nb_Paciente, fh_Ingreso, fh_Nacimiento, nu_Edad, id_Sexo,de_Ocupacion, nu_Celular, de_Email, de_Otros_datos, de_Estado_civil, id_Sangre,de_Religion, nb_Emergencia, nu_Emergencia, de_Domicilio,id_Aseguradora,sn_Activo) VALUES ('$id_doctor','$row1','$file','$nb_Paciente', '$fh_Ingreso', '$fh_Nacimiento', '$nu_Edad', '$id_Sexo','$de_Ocupacion', '$nu_Celular', '$de_Email', '$de_Otros_datos', '$de_Estado_civil', '$id_Sangre','$de_Religion', '$nb_Emergencia', '$nu_Emergencia', '$de_Domicilio', '$id_Aseguradora', '1')";
	$resent=mysqli_query($conexion, $add);

	$add_antecedentes="INSERT INTO antecedentes(id_doctor, id_paciente) VALUES ('$id_doctor','$row1')";
	$ejecutar_recetas=mysqli_query($conexion, $add_antecedentes);

	$add_datos_fiscales="INSERT INTO datos_fiscales(id_doctor, id_paciente, razon_social, RFC, domicilio, colonia, estado, municipio, correo) VALUES ('$id_doctor','$row1','$razon_social','$RFC','$domicilio', '$colonia', '$estado', '$municipio', '$correo')";
	$ejecutar_datos_fiscales=mysqli_query($conexion, $add_datos_fiscales);
    
    //MAX DE ANTECEDENTES DEL QUESTIONARIO
    $result = mysqli_query($conexion,"SELECT id FROM antecedentes_c WHERE id_doctor=$id_doctor and id_Paciente= $row1");
    if ($rowAntecedente = mysqli_fetch_array($result))
    {
        $max =  $rowAntecedente['id'] + 1;
    } else{
        $max = 1;
    }
   
    //PREGUNTA 1.1: ¿CUENTA CON DIAGNOSTICO MEDICO?
    $val = 0; if  ($sportkines1_1Si == "on"){ $val = 1; } else { $val = 0; }

    $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
    VALUES ($max, $id_doctor, $row1, 1, 1 , '¿CUENTA CON DIAGNOSTICO MEDICO?',  $val, '" . strtoupper($sportkines1_1Detalle) . "', '".$fecha ."' , '". $fecha . "')";

	if ($resent=mysqli_query($conexion, $pregunta)){
        echo "Pregunta1.1: Guardado correctamente";
    } else{
        printf("Errormessage: %s\n", mysqli_error($conexion));
    }

     //PREGUNTA 1.2: ¿TRAE ESTUDIOS COMPLEMENTARIOS (RX)?
    $max = $max + 1;
     $val = 0; if  ($sportkines1_2Si == "on"){ $val = 1; } else { $val = 0; }

     $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 2 , '¿TRAE ESTUDIOS COMPLEMENTARIOS (RX)?',  $val, '" . strtoupper($sportkines1_1Detalle) . "', '".$fecha ."' , '". $fecha . "')";
 
     if ($resent=mysqli_query($conexion, $pregunta)){
         echo "Pregunta1.2: Guardado correctamente";
     } else{
         printf("Errormessage: %s\n", mysqli_error($conexion));
     }

     //PREGUNTA 1.3 ¿COMO NOS CONOCIÓ?
     $max = $max + 1;

     $val = 0; if  ($sportkines1_3Si == "on"){ $val = 1; } else { $val = 0; }

     $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 3 , '¿COMO NOS CONOCIÓ?',  $val, '" . strtoupper($sportkines1_3Detalle) . "', '".$fecha ."' , '". $fecha . "')";
 
     if ($resent=mysqli_query($conexion, $pregunta)){
         echo "Pregunta1.3: Guardado correctamente";
     } else{
         printf("Errormessage: %s\n", mysqli_error($conexion));
     }

     //PREGUNTA 1.4 ¿POSEE SEGURO DE GASTOS MÉDICOS MAYORES??
     $max = $max + 1;

     $val = 0; if  ($sportkines1_4Si == "on"){ $val = 1; } else { $val = 0; }

     $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 4 , '¿POSEE SEGURO DE GASTOS MÉDICOS MAYORES?',  $val, '" . strtoupper($sportkines1_4Detalle) . "', '".$fecha ."' , '". $fecha . "')";
 
     if ($resent=mysqli_query($conexion, $pregunta)){
         echo "Pregunta1.4: Guardado correctamente";
     } else{
         printf("Errormessage: %s\n", mysqli_error($conexion));
     }

     //PREGUNTA 1.5: ¿ACTUALMENTE TIENE DOLOR?
     $max = $max + 1;

     $val = 0; if  ($sportkines1_5Si == "on"){ $val = 1; } else { $val = 0; }

     $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 5 , '¿ACTUALMENTE TIENE DOLOR?',  $val, '" . strtoupper($sportkines1_5Detalle) . "', '".$fecha ."' , '". $fecha . "')";
 
     if ($resent=mysqli_query($conexion, $pregunta)){
         echo "Pregunta1.5: Guardado correctamente";
     } else{
         printf("Errormessage: %s\n", mysqli_error($conexion));
     }
     
     //PREGUNTA 1.6: ¿CUANTO TIEMPO TIENE CON EL PADECIMIENTO ACTUAL?
     $max = $max + 1;

     $val = 0; if  ($sportkines1_6Si == "on"){ $val = 1; } else { $val = 0; }

     $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 6 , '¿CUANTO TIEMPO TIENE CON EL PADECIMIENTO ACTUAL?',  $val, '" . strtoupper($sportkines1_6Detalle) . "', '".$fecha ."' , '". $fecha . "')";
 
     if ($resent=mysqli_query($conexion, $pregunta)){
         echo "Pregunta1.6: Guardado correctamente";
     } else{
         printf("Errormessage: %s\n", mysqli_error($conexion));
     }


     //PREGUNTA 1.7: ¿LE INCAPACITA PARA ACTIVIDAD LABORAL?
     $max = $max + 1;

     $val = 0; if  ($sportkines1_7Si == "on"){ $val = 1; } else { $val = 0; }

     $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 7 , '¿LE INCAPACITA PARA ACTIVIDAD LABORAL?',  $val, '" . strtoupper($sportkines1_7Detalle) . "', '".$fecha ."' , '". $fecha . "')";
 
     if ($resent=mysqli_query($conexion, $pregunta)){
         echo "Pregunta1.7: Guardado correctamente";
     } else{
         printf("Errormessage: %s\n", mysqli_error($conexion));
     }

     
     //PREGUNTA 1.8: ¿PRACTICA ALGUN DEPORTE?
     $max = $max + 1;

     $val = 0; if  ( $sportkines1_8Si == "on"){ $val = 1; } else { $val = 0; }

     $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 8 , '¿PRACTICA ALGUN DEPORTE?',  $val, '" . strtoupper($sportkines1_8Detalle) . "', '".$fecha ."' , '". $fecha . "')";
 
     if ($resent=mysqli_query($conexion, $pregunta)){
         echo "Pregunta1.8: Guardado correctamente";
     } else{
         printf("Errormessage: %s\n", mysqli_error($conexion));
     }
     
     //PREGUNTA 1.9: ¿TUVO CIRUGÍA PREVIA?
     $max = $max + 1;

     $val = 0; if  ( $sportkines1_9Si == "on"){ $val = 1; } else { $val = 0; }

     $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 9 , '¿TUVO CIRUGÍA PREVIA?',  $val, '" . strtoupper($sportkines1_9Detalle) . "', '".$fecha ."' , '". $fecha . "')";
                                                                                              
     if ($resent=mysqli_query($conexion, $pregunta)){
         echo "Pregunta1.9: Guardado correctamente";
     } else{
         printf("Errormessage: %s\n", mysqli_error($conexion));
     }
    
     if (isset($_POST['enviar_formulario'])) {
        header("Location: ../../graciasform.php");
     }
     
     //PREGUNTA 1.10: PARTICULAR
     $max = $max + 1;

     $val = 0; if  ( $sportkines1_10Si == "on"){ $val = 1; } else { $val = 0; }

     $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 10 , 'PARTICULAR',  $val, '" . strtoupper($sportkines1_10Detalle) . "', '".$fecha ."' , '". $fecha . "')";
                                                                                              
     if ($resent=mysqli_query($conexion, $pregunta)){
         echo "Pregunta1.10: Guardado correctamente";
     } else{
         printf("Errormessage: %s\n", mysqli_error($conexion));
     }
    
     if (isset($_POST['enviar_formulario'])) {
        header("Location: ../../graciasform.php");
     }

     //PREGUNTA 1.11: MEDICO
     $max = $max + 1;

     $val = 0; if  ( $sportkines1_11Si == "on"){ $val = 1; } else { $val = 0; }

     $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 11 , 'MEDICO',  $val, '" . strtoupper($sportkines1_11Detalle) . "', '".$fecha ."' , '". $fecha . "')";
                                                                                              
     if ($resent=mysqli_query($conexion, $pregunta)){
         echo "Pregunta1.11: Guardado correctamente";
     } else{
         printf("Errormessage: %s\n", mysqli_error($conexion));
     }
    
     if (isset($_POST['enviar_formulario'])) {
        header("Location: ../../graciasform.php");
     }

     //PREGUNTA 1.12: ASEGURADORA
     $max = $max + 1;

     $val = 0; if  ( $sportkines1_12Si == "on"){ $val = 1; } else { $val = 0; }

     $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 12 , 'ASEGURADORA',  $val, '" . strtoupper($sportkines1_12Detalle) . "', '".$fecha ."' , '". $fecha . "')";
                                                                                              
     if ($resent=mysqli_query($conexion, $pregunta)){
         echo "Pregunta1.12: Guardado correctamente";
     } else{
         printf("Errormessage: %s\n", mysqli_error($conexion));
     }
    
     if (isset($_POST['enviar_formulario'])) {
        header("Location: ../../graciasform.php");
     }

     //PREGUNTA 1.13: CORTESÍA
     $max = $max + 1;

     $val = 0; if  ( $sportkines1_13Si == "on"){ $val = 1; } else { $val = 0; }

     $pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 13 , 'CORTESIA',  $val, '" . strtoupper($sportkines1_13Detalle) . "', '".$fecha ."' , '". $fecha . "')";
                                                                                              
     if ($resent=mysqli_query($conexion, $pregunta)){
         echo "Pregunta1.13: Guardado correctamente";
     } else{
         printf("Errormessage: %s\n", mysqli_error($conexion));
     }
    
     if (isset($_POST['enviar_formulario'])) {
        header("Location: ../../graciasform.php");
     }
?>