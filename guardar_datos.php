 <?php 
    session_start();
    require 'conexion.php'; 
    if ( !isset($pdo) ) {
      $pdo = connect(); 
    }   


    if (isset($_POST['id_ant'])) {

        $id=$_POST['id_ant'];
        $ant_hf=$_POST['ant_hf'];
        $ant_pp=$_POST['ant_pp'];
        $ant_np=$_POST['ant_np'];
        $ant_go=$_POST['ant_go'];
        $ant_alergicos=$_POST['ant_alergicos'];
        $sql="update antecedentes set ant_hf='$ant_hf', ant_pp='$ant_pp', ant_np='$ant_np', ant_go='$ant_go', alergicos='$ant_alergicos' WHERE id='$id'";
        $query = $pdo->prepare($sql);
        $query->execute();
        echo "update";
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
        $oi=$_POST['oi'];
        $od=$_POST['od'];
        $od1=$_POST['od1'];
        $od2=$_POST['od2'];
        $od3=$_POST['od3'];
        $od4=$_POST['od4'];
        $od5=$_POST['od5'];
        $od6=$_POST['od6'];
        $od7=$_POST['od7'];
        $od8=$_POST['od8'];
        $oi1=$_POST['oi1'];
        $oi2=$_POST['oi2'];
        $oi3=$_POST['oi3'];
        $oi4=$_POST['oi4'];
        $oi5=$_POST['oi5'];
        $oi6=$_POST['oi6'];
        $oi7=$_POST['oi7'];
        $oi8=$_POST['oi8'];
      

        if($_POST['id_historial']==""){

        $sql="INSERT INTO historial_clinico(id_doctor, id_paciente, fecha, padecimiento, exploracion, peso, talla, temperatura, imc, fc, fr, fur, semanas, diagnostico, gabinete, receta, activo, od, oi, od1, od2, od3, od4, od5, od6, od7, od8, oi1, oi2, oi3, oi4, oi5, oi6, oi7, oi8) values ('$id_doctor', '$id_pac_get', '$fecha', '$padecimiento', '$exploracion', '$peso', '$talla', '$temperatura', '$imc', '$fc', '$fr', '$fur', '$semanas', '$diagnostico', '$gabinete', '$receta', '1', '$od', '$oi', '$od1', '$od2', '$od3', '$od4', '$od5', '$od6', '$od7', '$od8', '$oi1', '$oi2', '$oi3', '$oi4', '$oi5', '$oi6', '$oi7', '$oi8')";
        $query = $pdo->prepare($sql);
        $query->execute();

        }else{

        $sql="update historial_clinico set padecimiento='$padecimiento', exploracion='$exploracion', gabinete='$gabinete', receta='$receta', peso='$peso', talla='$talla', imc='$imc', fur='$fur', fc='$fc', semanas='$semanas', fr='$fr', diagnostico='$diagnostico', temperatura='$temperatura', od='$od', oi='$oi', od1='$od1', od2='$od2', od3='$od3', od4='$od4', oi8='$oi8', od5='$od5', od6='$od6', od7='$od7', od8='$od8', oi1='$oi1', oi2='$oi2', oi3='$oi3', oi4='$oi4', oi5='$oi5', oi6='$oi6', oi7='$oi7' WHERE id='$id'";
        $query = $pdo->prepare($sql);
        $query->execute();
            
        }
    }

    if (isset($_POST['id_medico'])) {

        $id=$_POST['id_medico'];
        $id_alergicos=$_POST['id_alergicos'];
        $id_hf=$_POST['id_hf'];
        $id_pp=$_POST['id_pp'];
        $id_np=$_POST['id_np'];
        $id_go=$_POST['id_go'];
        $id_exploracion=$_POST['id_exploracion'];
        $id_signos_vitales=$_POST['id_signos_vitales'];
        $id_diagnosticos=$_POST['id_diagnosticos'];
        $id_gabinete=$_POST['id_gabinete'];
        $id_honorarios=$_POST['id_honorarios'];
        $id_doctor=$_SESSION['id_usuario'];

        $sql="update doctor set id_alergicos='$id_alergicos', id_hf='$id_hf', id_pp='$id_pp', id_np='$id_np', id_go='$id_go', id_exploracion='$id_exploracion', id_signos_vitales='$id_signos_vitales', id_diagnosticos='$id_diagnosticos', id_gabinete='$id_gabinete', id_honorarios='$id_honorarios' WHERE id_doctor='$id_doctor'";
        $query = $pdo->prepare($sql);
        $query->execute();
        echo "consulta";
        echo $id_alergicos;
    }

    if (isset($_POST['id_asistente'])) {
        $id_doctor=$_SESSION['id_usuario'];
        $id=$_POST['id_asistente'];
        $nombre_asistente=$_POST['nombre_asistente'];
        $correo_asistente=$_POST['correo_asistente'];
        $pass_asistente=$_POST['pass_asistente'];
        $id_antecedente_asistente=$_POST['id_antecedente_asistente'];
        $id_historial_asistente=$_POST['id_historial_asistente'];
        $fecha=date('y-m-d');

        if ($_POST['id_asistente']=="") {

            $sql="INSERT INTO usuarios(id_usuario, usuario, nb_usuario, pw_usuario, fecha_ing, id_antecedentes, id_historial, rol, sn_activo) values ('$id_doctor', '$nombre_asistente', '$correo_asistente', '$pass_asistente', '$fecha', '$id_antecedente_asistente', '$id_historial_asistente', '2', '1')";
            $query = $pdo->prepare($sql);
            $query->execute();
            echo "Insert Asistente";
        }else{

            $sql="update usuarios set usuario='$nombre_asistente', nb_usuario='$correo_asistente', pw_usuario='$pass_asistente', id_antecedentes='$id_antecedente_asistente', id_historial='$id_historial_asistente' WHERE id='$id'";
            $query = $pdo->prepare($sql);
            $query->execute();
            echo "Update Asistentes";
        }
    } 

    if (isset($_POST['pass_actual'])) {

        $id_pass=$_POST['id_pass'];
        $pass_actual=$_POST['pass_actual'];
        $pass_actual=$_POST['pass_actual'];
        $pass=$_POST['pass'];
        $re_pass=$_POST['re_pass'];

        $sql="SELECT pw_usuario from usuarios where pw_usuario='$pass_actual' and id=$id_pass";
        $query = $pdo->prepare($sql);
        $query->execute();
        $buscar= $query->rowCount();
	    if ($buscar > 0)
        {
            if ($pass>0) {
                if ($pass==$re_pass) {
                    $sentencia="update usuarios set pw_usuario='$re_pass' WHERE id='$id_pass'";
                    $resent=mysqli_query($conexion,$sentencia);
                    echo $resent;
                }else{
                    echo "no coincide";
                }
            }else{
                echo "no lleno pass";
            }
        }else{
            echo "no exixte";
        }
        
    }
    if (isset($_POST['id_concepto'])) {
        $id_doctor=$_SESSION['id_usuario'];
        $id=$_POST['id_concepto'];
        $concepto=$_POST['concepto'];
        $total=$_POST['total'];

        if ($_POST['id_concepto']=="") {

            $sql="INSERT INTO cat_honorarios(id_doctor, concepto, total, activo) values ('$id_doctor', '$concepto', '$total', '1')";
            $query = $pdo->prepare($sql);
		    $query->execute();
            echo "Insert Concepto";
        }else{

            $sql="update cat_honorarios set concepto='$concepto', total='$total' WHERE id='$id'";
            $query = $pdo->prepare($sql);
		    $query->execute();
            echo "Update Concepto";
        }
    }

    if (isset($_POST['concept'])) {
        $id_doctor=$_SESSION['id_usuario'];
        $concepto=$_POST['concept'];
        $total=$_POST['total_concept'];
        $id_pac_get=$_SESSION['id_pac_get'];
        $fecha=date('Y-m-d');

        $sql="INSERT INTO honorarios(id_doctor, id_paciente, fecha, concepto, total, activo) values ('$id_doctor', '$id_pac_get', '$fecha', '$concepto', '$total', '1')";
        $query = $pdo->prepare($sql);
		$query->execute();
        
        echo "Insert Concepto PAC";
    }

    if (isset($_POST['prefijo'])) {
        $id_doctor=$_SESSION['id_usuario'];
        $prefijo=$_POST['prefijo'];
        $nombre=$_POST['nombre'];
        $celular=$_POST['celular'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $de_cEsp=$_POST['de_cEsp'];
        $de_cProf=$_POST['de_cProf'];
        $direccion=$_POST['direccion'];

        $sql="update doctor set atencion='$prefijo', celular='$celular', telefono='$telefono', telefono='$telefono', direccion='$direccion', correo='$correo' where id_doctor='$id_doctor'";
        $query = $pdo->prepare($sql);
		$query->execute();
        echo "update doctor";
    }

    if (isset($_POST['load_receta'])) {
        $img_rec=$_POST['load_receta'];
        $id=$_POST['id'];
        $sql="update templates_recetas set img_rec='". $img_rec. "' where id_template=13";
        $query = $pdo->prepare($sql);
		$query->execute();
        echo($img_rec);

    }

    if (isset($_POST['id_template_modal'])) {
        $img_rec=$_POST['file_update_receta_text'];
        $id=$_POST['id_template_modal'];
        $nom_top=$_POST['nom_top'];
        $nom_left=$_POST['nom_left'];
        $fecha_right=$_POST['fecha_right'];
        $fecha_top=$_POST['fecha_top'];
        $font_size=$_POST['font_size'];
        $rec_top=$_POST['rec_top'];
        $rec_left=$_POST['rec_left'];
        $descripcion=$_POST['descripcion_text'];
        $id_doctor=$_SESSION['id_usuario'];
        if ($id=="") {

            $sql="INSERT INTO templates_recetas(id_doctor, descripcion, nom_left, nom_top, fecha_right, fecha_top, rec_left, rec_top, img_rec, font_size, activo) values ('$id_doctor', '$descripcion', '$nom_left', '$nom_top', '$fecha_right', '$fecha_top', '$rec_left', '$rec_top', '$img_rec', '$font_size', '1')";
            $query = $pdo->prepare($sql);
		    $query->execute();
            echo $resent;

        }else{

            $sql="update templates_recetas set img_rec='". $img_rec. "', nom_top='". $nom_top. "', nom_left='". $nom_left. "', fecha_top='". $fecha_top. "', fecha_right='". $fecha_right. "', font_size='". $font_size. "', rec_top='". $rec_top. "', rec_left='". $rec_left. "', descripcion='". $descripcion. "' where id_template=$id";
            $query = $pdo->prepare($sql);
		    $query->execute();
            echo $resent;

        }
        

    }
 ?>