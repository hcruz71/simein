 <?php 
    session_start();
    require 'conexion.php'; 
    if ( !isset($pdo) ) {
      $pdo = connect(); 
    }   

    if (isset($_POST['id_historial'])) {


        $id=$_POST['id_historial'];
        $id_doctor=$_SESSION['id_usuario'];
        $id_pac_get=$_SESSION['id_pac_get'];
        $padecimiento=$_POST['padecimiento'];
        $exploracion=$_POST['exploracion'];
        $gabinete=$_POST['gabinete'];
        $receta=$_POST['receta'];
        $peso=$_POST['peso'];
        $talla=$_POST['talla'];
        $imc=$_POST['imc'];
        $fur=$_POST['fur'];
        $fr=$_POST['fr'];
        $fc=$_POST['fc'];
        $semanas=$_POST['semanas'];
        $diagnostico=$_POST['txt_diagnosticos'];
        $temperatura=$_POST['temperatura'];
        $fecha=date('y-m-d');
        $formato_p=$_POST['formato_p'];

            $sql = "SELECT * FROM pacientes where id_doctor=$id_doctor and id_Paciente=$id_pac_get";
            $query = $pdo->prepare($sql);
            $query->execute();
            $list = $query->fetchAll();
        	foreach ($list as $row_pac) 
            {

                $fh_Nacimiento=$row_pac['fh_Nacimiento'];
                $tiempo = strtotime($fh_Nacimiento); 
                $ahora = time(); 
                $edad = ($ahora-$tiempo)/(60*60*24*30.3); 
                $meses = $edad; 
                $meses = $meses;
                    
            }

        if($_POST['id_historial']==""){

        $sql="INSERT INTO historial_clinico(id_doctor, id_paciente, fecha, padecimiento, exploracion, peso, talla, temperatura, imc, fc, fr, fur, semanas, diagnostico, gabinete, receta, activo, edad) values ('$id_doctor', '$id_pac_get', '$fecha', '$padecimiento', '$exploracion', '$peso', '$talla', '$temperatura', '$imc', '$fc', '$fr', '$fur', '$semanas', '$diagnostico', '$gabinete', '$receta', '1', '$meses')";
        $query = $pdo->prepare($sql);
        $query->execute();
        

        }else{

        $sql="update historial_clinico set padecimiento='$padecimiento', exploracion='$exploracion', gabinete='$gabinete', receta='$receta', peso='$peso', talla='$talla', imc='$imc', fur='$fur', fc='$fc', semanas='$semanas', fr='$fr', diagnostico='$diagnostico', temperatura='$temperatura' WHERE id='$id'";
        $query = $pdo->prepare($sql);
        $query->execute();
        
            
        }
    }


 ?>