 <?php 
    session_start();

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
        include '../conexion_i.php';

            $query_pac = "SELECT * FROM pacientes where id_doctor=$id_doctor and id_Paciente=$id_pac_get";
            $resultado_pac = $conexion->query($query_pac);
            while($row_pac = $resultado_pac->fetch_assoc())
            {

                $fh_Nacimiento=$row_pac['fh_Nacimiento'];
                $tiempo = strtotime($fh_Nacimiento); 
                $ahora = time(); 
                $edad = ($ahora-$tiempo)/(60*60*24*30.3); 
                $meses = $edad; 
                $meses = $meses;
                    
            }

        if($_POST['id_historial']==""){

        $sentencia="INSERT INTO historial_clinico(id_doctor, id_paciente, fecha, padecimiento, exploracion, peso, talla, temperatura, imc, fc, fr, fur, semanas, diagnostico, gabinete, receta, activo, edad) values ('$id_doctor', '$id_pac_get', '$fecha', '$padecimiento', '$exploracion', '$peso', '$talla', '$temperatura', '$imc', '$fc', '$fr', '$fur', '$semanas', '$diagnostico', '$gabinete', '$receta', '1', '$meses')";
        $resent=mysqli_query($conexion,$sentencia);
        var_dump($resent);

        }else{

        $sentencia="update historial_clinico set padecimiento='$padecimiento', exploracion='$exploracion', gabinete='$gabinete', receta='$receta', peso='$peso', talla='$talla', imc='$imc', fur='$fur', fc='$fc', semanas='$semanas', fr='$fr', diagnostico='$diagnostico', temperatura='$temperatura' WHERE id='$id'";
        $resent=mysqli_query($conexion,$sentencia);
         var_dump($resent);
            
        }
    }


 ?>