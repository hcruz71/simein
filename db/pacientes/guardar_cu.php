
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

    //CUESTIONARIO 1: ANTECEDENTES HEREDO-FAMILIARES
    if (isset($_POST['1_1diabetesDetalle'])){ $diabetesDetalle1_1 = $_POST['1_1diabetesDetalle'];} else {$diabetesDetalle1_1='';}
    if (isset($_POST['1_1diabetesNo'])){ $diabetesNo1_1 = $_POST['1_1diabetesNo'];} else {$diabetesNo1_1='';}
    if (isset($_POST['1_1diabetesSi'])){ $diabetesSi1_1 = $_POST['1_1diabetesSi'];} else {$diabetesSi1_1='';}
    if (isset($_POST['1_2haDetalle'])){ $haDetalle1_2 = $_POST['1_2haDetalle'];} else {$haDetalle1_2='';}
    if (isset($_POST['1_2haNo'])){ $haNo1_2 = $_POST['1_2haNo'];} else {$haNo1_2='';}
    if (isset($_POST['1_2haSi'])){ $haSi1_2 = $_POST['1_2haSi'];} else {$haSi1_2='';}
    if (isset($_POST['1_3neuroDetalle'])){ $neuroDetalle1_3 = $_POST['1_3neuroDetalle'];} else {$neuroDetalle1_3='';}
    if (isset($_POST['1_3neuroNo'])){ $neuroNo1_3 = $_POST['1_3neuroNo'];} else {$neuroNo1_3='';}
    if (isset($_POST['1_3neuroSi'])){ $neuroSi1_3 = $_POST['1_3neuroSi'];} else {$neuroSi1_3='';}
    if (isset($_POST['1_4cancerDetalle'])){ $cancerDetalle1_4 = $_POST['1_4cancerDetalle'];} else {$cancerDetalle1_4='';}
    if (isset($_POST['1_4cancerNo'])){ $cancerNo1_4 = $_POST['1_4cancerNo'];} else {$cancerNo1_4='';}
    if (isset($_POST['1_4cancerSi'])){ $cancerSi1_4 = $_POST['1_4cancerSi'];} else {$cancerSi1_4='';}
    if (isset($_POST['1_5cardiopatiasDetalle'])){ $cardiopatiasDetalle1_5 = $_POST['1_5cardiopatiasDetalle'];} else {$cardiopatiasDetalle1_5='';}
    if (isset($_POST['1_5cardiopatiasNo'])){ $cardiopatiasNo1_5 = $_POST['1_5cardiopatiasNo'];} else {$cardiopatiasNo1_5='';}
    if (isset($_POST['1_5cardiopatiasSi'])){ $cardiopatiasSi1_5 = $_POST['1_5cardiopatiasSi'];} else {$cardiopatiasSi1_5='';}
    if (isset($_POST['1_6malformDetalle'])){ $malformDetalle1_6 = $_POST['1_6malformDetalle'];} else {$malformDetalle1_6='';}
    if (isset($_POST['1_6malformNo'])){ $malformNo1_6 = $_POST['1_6malformNo'];} else {$malformNo1_6='';}
    if (isset($_POST['1_6malformSi'])){ $malformSi1_6 = $_POST['1_6malformSi'];} else {$malformSi1_6='';}

    //CUESTIONARIO 2: PERSONALES
    if (isset($_POST['2_1tabaquismoDetalle'])){ $tabaquismoDetalle2_1 = $_POST['2_1tabaquismoDetalle'];} else {$tabaquismoDetalle2_1='';}
    if (isset($_POST['2_1tabaquismoNo'])){ $tabaquismoNo2_1 = $_POST['2_1tabaquismoNo'];} else {$tabaquismoNo2_1='';}
    if (isset($_POST['2_1tabaquismoSi'])){ $tabaquismoSi2_1 = $_POST['2_1tabaquismoSi'];} else {$tabaquismoSi2_1='';}
    if (isset($_POST['2_2alcoholDetalle'])){ $alcoholDetalle2_2 = $_POST['2_2alcoholDetalle'];} else {$alcoholDetalle2_2='';}
    if (isset($_POST['2_2alcoholNo'])){ $alcoholNo2_2 = $_POST['2_2alcoholNo'];} else {$alcoholNo2_2='';}
    if (isset($_POST['2_2alcoholSi'])){ $alcoholSi2_2 = $_POST['2_2alcoholSi'];} else {$alcoholSi2_2='';}
    if (isset($_POST['2_3alimenDetalle'])){ $alimenDetalle2_3 = $_POST['2_3alimenDetalle'];} else {$alimenDetalle2_3='';}
    if (isset($_POST['2_3alimenNo'])){ $alimenNo2_3 = $_POST['2_3alimenNo'];} else {$alimenNo2_3='';}
    if (isset($_POST['2_3alimenSi'])){ $alimenSi2_3 = $_POST['2_3alimenSi'];} else {$alimenSi2_3='';}
    if (isset($_POST['2_4drogasDetalle'])){ $drogasDetalle2_4 = $_POST['2_4drogasDetalle'];} else {$drogasDetalle2_4='';}
    if (isset($_POST['2_4drogasNo'])){ $drogasNo2_4 = $_POST['2_4drogasNo'];} else {$drogasNo2_4='';}
    if (isset($_POST['2_4drogasSi'])){ $drogasSi2_4 = $_POST['2_4drogasSi'];} else {$drogasSi2_4='';}
    if (isset($_POST['2_5medicaDetalle'])){ $medicaDetalle2_5 = $_POST['2_5medicaDetalle'];} else {$medicaDetalle2_5='';}
    if (isset($_POST['2_5medicaNo'])){ $medicaNo2_5 = $_POST['2_5medicaNo'];} else {$medicaNo2_5='';}
    if (isset($_POST['2_5medicaSi'])){ $medicaSi2_5 = $_POST['2_5medicaSi'];} else {$medicaSi2_5='';}
    if (isset($_POST['2_6tipoSangre'])){ $tipoSangre2_6 = $_POST['2_6tipoSangre'];} else {$tipoSangre2_6='';}
    if (isset($_POST['2_7pesoSi'])){ $pesoSubido2_7 = $_POST['2_7pesoSi'];} else {$pesoSubido2_7='';}
    if (isset($_POST['2_7pesoNo'])){ $pesoBajado2_7 = $_POST['2_7pesoNo'];} else {$pesoBajado2_7='';}
    if (isset($_POST['2_7pesoDetalle'])){ $pesoMantenido2_7 = $_POST['2_7pesoDetalle'];} else {$pesoMantenido2_7='';}

    //CUESTIONARIO 3: PERSONALES PATOLOGICOS
    if (isset($_POST['3_1diabetesDetalle'])){ $diabetesDetalle3_1 = $_POST['3_1diabetesDetalle'];} else {$diabetesDetalle3_1='';}
    if (isset($_POST['3_1diabetesNo'])){ $diabetesNo3_1 = $_POST['3_1diabetesNo'];} else {$diabetesNo3_1='';}
    if (isset($_POST['3_1diabetesSi'])){ $diabetesSi3_1 = $_POST['3_1diabetesSi'];} else {$diabetesSi3_1='';}
    if (isset($_POST['3_2haDetalle'])){ $haDetalle3_2 = $_POST['3_2haDetalle'];} else {$haDetalle3_2='';}
    if (isset($_POST['3_2haNo'])){ $haNo3_2 = $_POST['3_2haNo'];} else {$haNo3_2='';}
    if (isset($_POST['3_2haSi'])){ $haSi3_2 = $_POST['3_2haSi'];} else {$haSi3_2='';}
    if (isset($_POST['3_3tiroidesDetalle'])){ $tiroidesDetalle3_3 = $_POST['3_3tiroidesDetalle'];} else {$tiroidesDetalle3_3='';}
    if (isset($_POST['3_3tiroidesNo'])){ $tiroidesNo3_3 = $_POST['3_3tiroidesNo'];} else {$tiroidesNo3_3='';}
    if (isset($_POST['3_3tiroidesSi'])){ $tiroidesSi3_3 = $_POST['3_3tiroidesSi'];} else {$tiroidesSi3_3='';}
    if (isset($_POST['3_4alergiasDetalle'])){ $alergiasDetalle3_4 = $_POST['3_4alergiasDetalle'];} else {$alergiasDetalle3_4='';}
    if (isset($_POST['3_4alergiasNo'])){ $alergiasNo3_4 = $_POST['3_4alergiasNo'];} else {$alergiasNo3_4='';}
    if (isset($_POST['3_4alergiasSi'])){ $alergiasSi3_4 = $_POST['3_4alergiasSi'];} else {$alergiasSi3_4='';}
    if (isset($_POST['3_5cpDetalle'])){ $cpDetalle3_5 = $_POST['3_5cpDetalle'];} else {$cpDetalle3_5='';}
    if (isset($_POST['3_5cpNo'])){ $cpNo3_5 = $_POST['3_5cpNo'];} else {$cpNo3_5='';}
    if (isset($_POST['3_5cpSi'])){ $cpSi3_5 = $_POST['3_5cpSi'];} else {$cpSi3_5='';}
    if (isset($_POST['3_6hpDetalle'])){ $hpDetalle3_6 = $_POST['3_6hpDetalle'];} else {$hpDetalle3_6='';}
    if (isset($_POST['3_6hpNo'])){ $hpNo3_6 = $_POST['3_6hpNo'];} else {$hpNo3_6='';}
    if (isset($_POST['3_6hpSi'])){ $hpSi3_6 = $_POST['3_6hpSi'];} else {$hpSi3_6='';}
    if (isset($_POST['3_7fracturasDetalle'])){ $fracturasDetalle3_7 = $_POST['3_7fracturasDetalle'];} else {$fracturasDetalle3_7='';}
    if (isset($_POST['3_7fracturasNo'])){ $fracturasNo3_7 = $_POST['3_7fracturasNo'];} else {$fracturasNo3_7='';}
    if (isset($_POST['3_7fracturasSi'])){ $fracturasSi3_7 = $_POST['3_7fracturasSi'];} else {$fracturasSi3_7='';}
    if (isset($_POST['3_8otraDetalle'])){ $otraDetalle3_8 = $_POST['3_8otraDetalle'];} else {$otraDetalle3_8='';}
    if (isset($_POST['3_8otraNo'])){ $otraNo3_8 = $_POST['3_8otraNo'];} else {$otraNo3_8='';}
    if (isset($_POST['3_8otraSi'])){ $otraSi3_8 = $_POST['3_8otraSi'];} else {$otraSi3_8='';}
   
    //CUESTIONARIO 4: GINECO-OBSTETRICO

    if (isset($_POST['4_1menstruacion'])){ $menstruacion4_1 = $_POST['4_1menstruacion'];} else {$menstruacion4_1='';}
    if (isset($_POST['4_2cadaCuanto'])){ $cadaCuanto4_2 = $_POST['4_2cadaCuanto'];} else {$cadaCuanto4_2='';}
    if (isset($_POST['4_3duraPeriodo'])){ $duraPeriodo4_3 = $_POST['4_3duraPeriodo'];} else {$duraPeriodo4_3='';}
    if (isset($_POST['4_4inicioUltimo'])){ $inicioUltimo4_4 = $_POST['4_4inicioUltimo'];} else {$inicioUltimo4_4='';}
    if (isset($_POST['4_5metodoDetalle'])){ $metodoDetalle4_5 = $_POST['4_5metodoDetalle'];} else {$metodoDetalle4_5='';}
    if (isset($_POST['4_5metodoNo'])){ $metodoNo4_5 = $_POST['4_5metodoNo'];} else {$metodoNo4_5='';}
    if (isset($_POST['4_5metodoSi'])){ $metodoSi4_5 = $_POST['4_5metodoSi'];} else {$metodoSi4_5='';}
    if (isset($_POST['4_6papanicolao'])){ $papanicolao4_6 = $_POST['4_6papanicolao'];} else {$papanicolao4_6='';}

    include '../../conexion.php';
    if ( !isset($pdo) ) {
        $pdo = connect(); 
    }


    $sql = "SELECT id_Paciente FROM pacientes WHERE id_doctor=$id_doctor and id_Paciente=(SELECT MAX(id_Paciente) FROM pacientes WHERE id_doctor=$id_doctor)";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $row) {
        $row1 =  $row['id_Paciente'] + 1;
    }

	$sql="INSERT INTO pacientes(id_doctor, id_Paciente, fl_File, nb_Paciente, fh_Ingreso, fh_Nacimiento, nu_Edad, id_Sexo,de_Ocupacion, nu_Celular, de_Email, de_Otros_datos, de_Estado_civil, id_Sangre,de_Religion, nb_Emergencia, nu_Emergencia, de_Domicilio,id_Aseguradora,sn_Activo) VALUES ('$id_doctor','$row1','$file','$nb_Paciente', '$fh_Ingreso', '$fh_Nacimiento', '$nu_Edad', '$id_Sexo','$de_Ocupacion', '$nu_Celular', '$de_Email', '$de_Otros_datos', '$de_Estado_civil', '$id_Sangre','$de_Religion', '$nb_Emergencia', '$nu_Emergencia', '$de_Domicilio', '$id_Aseguradora', '1')";
    $query = $pdo->prepare($sql);
    $resent=$query->execute();

	$sql="INSERT INTO antecedentes(id_doctor, id_paciente) VALUES ('$id_doctor','$row1')";
    $query = $pdo->prepare($sql);
    $ejecutar_recetas=$query->execute();

	$sql="INSERT INTO datos_fiscales(id_doctor, id_paciente, razon_social, RFC, domicilio, colonia, estado, municipio, correo) VALUES ('$id_doctor','$row1','$razon_social','$RFC','$domicilio', '$colonia', '$estado', '$municipio', '$correo')";
    $query = $pdo->prepare($sql);
    $ejecutar_datos_fiscales=$query->execute();
    
    //MAX DE ANTECEDENTES DEL QUESTIONARIO
    //$sql = "SELECT id FROM antecedentes_c WHERE id_doctor=$id_doctor and id_Paciente= $row1";
    $sql = "SELECT id FROM antecedentes_c ORDER BY id DESC LIMIT 0, 1";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $row) {
            $max=$row['id']+1;        
    } 

   
    //PREGUNTA 1.1: DIABETES
    $val = 0; if  ($diabetesSi1_1 == "on"){ $val = 1; } else { $val = 0; }

    $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
    VALUES ($max, $id_doctor, $row1, 1, 1 , 'DIABETES',  $val, '" . strtoupper($diabetesDetalle1_1) . "', '".$fecha ."' , '". $fecha . "')";

    $query = $pdo->prepare($sql);
    $resent=$query->execute();


     //PREGUNTA 1.2: HIPERTENSION ARTERIAL
    $max = $max + 1;
     $val = 0; if  ($haSi1_2 == "on"){ $val = 1; } else { $val = 0; }

     $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 2 , 'HIPERTENSION ARTERIAL',  $val, '" . strtoupper($haDetalle1_2) . "', '".$fecha ."' , '". $fecha . "')";

    $query = $pdo->prepare($sql);
    $resent=$query->execute();
 
     

     //PREGUNTA 1.3 NEUROPATIAS
     $max = $max + 1;

     $val = 0; if  ($neuroSi1_3 == "on"){ $val = 1; } else { $val = 0; }

     $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 3 , 'NEUROPATIAS',  $val, '" . strtoupper($neuroDetalle1_3) . "', '".$fecha ."' , '". $fecha . "')";
     $query = $pdo->prepare($sql);
     $resent=$query->execute();

     //PREGUNTA 1.4 CANCER
     $max = $max + 1;

     $val = 0; if  ($cancerSi1_4 == "on"){ $val = 1; } else { $val = 0; }

     $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 4 , 'CANCER',  $val, '" . strtoupper($cancerDetalle1_4) . "', '".$fecha ."' , '". $fecha . "')";
     $query = $pdo->prepare($sql);
     $resent=$query->execute();
 

     //PREGUNTA 1.5: CARDIOPATIAS
     $max = $max + 1;

     $val = 0; if  ($cardiopatiasSi1_5 == "on"){ $val = 1; } else { $val = 0; }

     $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 5 , 'CARDIOPATIAS',  $val, '" . strtoupper($cardiopatiasDetalle1_5) . "', '".$fecha ."' , '". $fecha . "')";

    $query = $pdo->prepare($sql);
    $resent=$query->execute();
 
     
     //PREGUNTA 1.6: MALFORMACIONES
     $max = $max + 1;

     $val = 0; if  ($malformSi1_6 == "on"){ $val = 1; } else { $val = 0; }

     $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 1, 6 , 'MALFORMACIONES',  $val, '" . strtoupper($malformDetalle1_6) . "', '".$fecha ."' , '". $fecha . "')";
    
    $query = $pdo->prepare($sql);
    $resent=$query->execute();


     //PREGUNTA 2.1: TABAQUISMO
     $max = $max + 1;

     $val = 0; if  ($tabaquismoSi2_1 == "on"){ $val = 1; } else { $val = 0; }

     $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 2, 1 , 'TABAQUISMO',  $val, '" . strtoupper($tabaquismoDetalle2_1) . "', '".$fecha ."' , '". $fecha . "')";

    $query = $pdo->prepare($sql);
    $resent=$query->execute();

     
     //PREGUNTA 2.2: ALCOHOL
     $max = $max + 1;

     $val = 0; if  ( $alcoholSi2_2 == "on"){ $val = 1; } else { $val = 0; }

     $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 2, 2 , 'ALCOHOL',  $val, '" . strtoupper($alcoholDetalle2_2) . "', '".$fecha ."' , '". $fecha . "')";
     $query = $pdo->prepare($sql);
     $resent=$query->execute();
     
     //PREGUNTA 2.3: ALIMENTACIÓN ADECUADA
     $max = $max + 1;

     $val = 0; if  ( $alimenSi2_3 == "on"){ $val = 1; } else { $val = 0; }

     $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 2, 3 , 'ALIMENTACIÓN ADECUADA',  $val, '" . strtoupper($alimenDetalle2_3) . "', '".$fecha ."' , '". $fecha . "')";
     $query = $pdo->prepare($sql);
     $resent=$query->execute();

     //PREGUNTA 2.4: USO DE DROGAS RECREATIVAS
     $max = $max + 1;

     $val = 0; if  ( $drogasSi2_4 == "on"){ $val = 1; } else { $val = 0; }

     $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 2, 4 , 'USO DE DROGAS RECREATIVAS',  $val, '" . strtoupper($drogasDetalle2_4) . "', '".$fecha ."' , '". $fecha . "')";
     $query = $pdo->prepare($sql);
     $resent=$query->execute();
    
   
     //PREGUNTA 2.5: ¿QUÉ MEDICAMENTOS UTILIZA COMUNMENTE?
     $max = $max + 1;

     $val = 0; if  ( $medicaSi2_5 == "on"){ $val = 1; } else { $val = 0; }

     $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 2, 5 , '¿QUÉ MEDICAMENTOS UTILIZA COMUNMENTE?',  $val, '" . strtoupper($medicaDetalle2_5) . "', '".$fecha ."' , '". $fecha . "')";
     $query = $pdo->prepare($sql);
     $resent=$query->execute();

     //PREGUNTA 2.6 TIPO DE SANGUINIO
     $max = $max + 1;
 
     $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 2, 6 , 'TIPO DE SANGUINIO',  0, '" . strtoupper($tipoSangre2_6) . "', '".$fecha ."' , '". $fecha . "')";
     $query = $pdo->prepare($sql);
     $resent=$query->execute();
     
     //PREGUNTA 2.7 PESO
     $max = $max + 1;
     $descripcion = '';
     $val = 0; 
     if  ( $pesoSubido == "on"){ 
          $val = 1; 
          $descripcion = 'HE SUBIDO';
        } else { 
            if  ( $pesoBajado == "on") {
                $val = 2;
                $descripcion = 'HE BAJADO';
            } else {
                if  ( $pesoMantenido == "on") {
                    $val = 3;
                    $descripcion = 'ME HE MANTENIDO';
                }
            }
        
        }

     $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
     VALUES ($max, $id_doctor, $row1, 2, 7 , 'PESO',  $val, '" . $descripcion . "', '".$fecha ."' , '". $fecha . "')";
     $query = $pdo->prepare($sql);
     $resent=$query->execute();
  
    //PREGUNTA 3.1: DIABETES
    $max = $max + 1;

    $val = 0; if  ( $diabetesSi3_1 == "on"){ $val = 1; } else { $val = 0; }

    $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
    VALUES ($max, $id_doctor, $row1, 3, 1 , 'DIABETES',  $val, '" . strtoupper($diabetesDetalle3_1) . "', '".$fecha ."' , '". $fecha . "')";
    $query = $pdo->prepare($sql);
    $resent=$query->execute();

    //PREGUNTA 3.2:  HIPERTENSION ARTERIAL
    $max = $max + 1;

    $val = 0; if  ( $haSi3_2 == "on"){ $val = 1; } else { $val = 0; }

    $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
    VALUES ($max, $id_doctor, $row1, 3, 2 , 'HIPERTENSION ARTERIAL',  $val, '" . strtoupper($haDetalle3_2) . "', '".$fecha ."' , '". $fecha . "')";
    $query = $pdo->prepare($sql);
    $resent=$query->execute();


    //PREGUNTA 3.3: PROBLEMA DE TIROIDES   
    $max = $max + 1;

    $val = 0; if  ( $tiroidesSi3_3 == "on"){ $val = 1; } else { $val = 0; }

    $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
    VALUES ($max, $id_doctor, $row1, 3, 3 , 'PROBLEMA DE TIROIDES',  $val, '" . strtoupper($tiroidesDetalle3_3) . "', '".$fecha ."' , '". $fecha . "')";
    $query = $pdo->prepare($sql);
    $resent=$query->execute();


    //PREGUNTA 3.4: ALERGIAS   
    $max = $max + 1;

    $val = 0; if  ( $alergiasSi3_4 == "on"){ $val = 1; } else { $val = 0; }

    $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
    VALUES ($max, $id_doctor, $row1, 3, 4 , 'ALERGIAS',  $val, '" . strtoupper($alergiasDetalle3_4) . "', '".$fecha ."' , '". $fecha . "')";
    $query = $pdo->prepare($sql);
    $resent=$query->execute();
    

    //PREGUNTA 3.5: CIRUGIAS PREVIAS   
    $max = $max + 1;

    $val = 0; if  ( $cpSi3_5 == "on"){ $val = 1; } else { $val = 0; }
    
    $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
    VALUES ($max, $id_doctor, $row1, 3, 5 , 'CIRUGIAS PREVIAS',  $val, '" . strtoupper($cpDetalle3_5) . "', '".$fecha ."' , '". $fecha . "')";
    $query = $pdo->prepare($sql);
    $resent=$query->execute();
        
    
   //PREGUNTA 3.6: HOSPITALIZACIONES PREVIAS   
   $max = $max + 1;

   $val = 0; if  ( $hpSi3_6 == "on"){ $val = 1; } else { $val = 0; }
    
   $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
   VALUES ($max, $id_doctor, $row1, 3, 6 , 'HOSPITALIZACIONES PREVIAS',  $val, '" . strtoupper($hpDetalle3_6) . "', '".$fecha ."' , '". $fecha . "')";
   $query = $pdo->prepare($sql);
   $resent=$query->execute();
   
      
   //PREGUNTA 3.7: FRACTURAS  
   $max = $max + 1;

   $val = 0; if  ( $fracturasSi3_7 == "on"){ $val = 1; } else { $val = 0; }
    
   $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
   VALUES ($max, $id_doctor, $row1, 3, 7 , 'FACTURAS',  $val, '" . strtoupper($fracturasDetalle3_7) . "', '".$fecha ."' , '". $fecha . "')";
   $query = $pdo->prepare($sql);
   $resent=$query->execute();

   //PREGUNTA 3.8: ¿SUFRE USTED DE ALGUNA OTRA ENFERMEDAD?  
   $max = $max + 1;

   $val = 0; if  ( $otraSi3_8 == "on"){ $val = 1; } else { $val = 0; }
    
   $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
   VALUES ($max, $id_doctor, $row1, 3, 8 , '¿SUFRE USTED DE ALGUNA OTRA ENFERMEDAD?',  $val, '" . strtoupper($otraDetalle3_8) . "', '".$fecha ."' , '". $fecha . "')";
   $query = $pdo->prepare($sql);
   $resent=$query->execute();


   //PREGUNTA 4.1: EDAD DE PRIMERA MENSTRUACION 
   $max = $max + 1;

   $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
   VALUES ($max, $id_doctor, $row1, 4, 1 , 'EDAD DE PRIMERA MENSTRUACION',  0, '" . strtoupper($menstruacion4_1) . "', '".$fecha ."' , '". $fecha . "')";
   $query = $pdo->prepare($sql);
   $resent=$query->execute();

  //PREGUNTA 4.2: ¿CADA CUANTO TIENE SU PERIODO?
  $max = $max + 1;

  $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
  VALUES ($max, $id_doctor, $row1, 4, 2 , '¿CADA CUANTO TIENE SU PERIODO?',  0, '" . strtoupper($cadaCuanto4_2) . "', '".$fecha ."' , '". $fecha . "')";
  $query = $pdo->prepare($sql);
  $resent=$query->execute();

  //PREGUNTA 4.3: ¿CUÁNTOS DIAS DURA SU PERIODO?
  $max = $max + 1;

  $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
  VALUES ($max, $id_doctor, $row1, 4, 3 , '¿CUÁNTOS DIAS DURA SU PERIODO?',  0, '" . strtoupper($duraPeriodo4_3) . "', '".$fecha ."' , '". $fecha . "')";
  $query = $pdo->prepare($sql);
  $resent=$query->execute();
  
    //PREGUNTA 4.4: ¿QUÉ DIA INICIO SU ULTIMO PERIODO?
    $max = $max + 1;

    $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
    VALUES ($max, $id_doctor, $row1, 4, 4 , '¿QUÉ DIA INICIO SU ULTIMO PERIODO?',  0, '" . strtoupper($inicioUltimo4_4) . "', '".$fecha ."' , '". $fecha . "')";
    $query = $pdo->prepare($sql);
    $resent=$query->execute();

    //PREGUNTA 4.5: ¿UTILIZA ALGUN METODO ANTICONCEPTIVO?
   $max = $max + 1;

    $val = 0; if  ( $metodoSi4_5 == "on"){ $val = 1; } else { $val = 0; }
   
    $sql="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
    VALUES ($max, $id_doctor, $row1, 4, 5 , '¿UTILIZA ALGUN METODO ANTICONCEPTIVO?',  $val, '" . strtoupper($metodoDetalle4_5) . "', '".$fecha ."' , '". $fecha . "')";
    $query = $pdo->prepare($sql);
    $resent=$query->execute();

//PREGUNTA 4.6: FECHA DE SU ULTIMO PAPANICOLAO
   $max = $max + 1;

$pregunta="INSERT INTO antecedentes_c (id, id_doctor, id_paciente, tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod) 
VALUES ($max, $id_doctor, $row1, 4, 6 , 'FECHA DE SU ULTIMO PAPANICOLAO',  0, '" . strtoupper($papanicolao4_6) . "', '".$fecha ."' , '". $fecha . "')";
$query = $pdo->prepare($sql);
$resent=$query->execute();



    if (isset($_POST['enviar_formulario'])) {
       header("Location: ../../graciasform.php");
    }
	
?>