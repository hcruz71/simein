<?php 
    session_start();

    if (isset($_POST['archivo'])) {

        $archivo=$_POST['archivo'];


        include '../conexion_i.php';
        $sentencia="INSERT INTO archivos(id_doctor, id_paciente, archivo, id_tipo) values ('11', '12', '$archivo', '1')";
        //$sentencia="update doctor set id_alergicos='$id_alergicos', id_hf='$id_hf', id_pp='$id_pp', id_np='$id_np', id_go='$id_go', id_exploracion='$id_exploracion', id_signos_vitales='$id_signos_vitales', id_diagnosticos='$id_diagnosticos', id_gabinete='$id_gabinete', id_honorarios='$id_honorarios' WHERE id_doctor='$id'";
        $resent=mysqli_query($conexion,$sentencia);
        echo $archivo;
    }

    if (isset($_POST['logo'])) {
        $id_doctor=$_SESSION['id_usuario'];
        $archivo=$_POST['logo'];
        include '../conexion_i.php';
        $sentencia="update doctor set logo='".$archivo."' WHERE id_doctor='$id_doctor'";
        $resent=mysqli_query($conexion,$sentencia);
        echo $resent;
    }


    if (isset($_POST['perfil'])) {
        $id_doctor=$_SESSION['id_usuario'];
        $archivo=$_POST['perfil'];


        include '../conexion_i.php';
        $sentencia="update doctor set perfil='".$archivo."' WHERE id_doctor='$id_doctor'";
        $resent=mysqli_query($conexion,$sentencia);
        echo $resent;
    }

    if (isset($_POST['datos'])) {
        $id_doctor=$_SESSION['id_usuario'];
        $id_pac_get=$_SESSION['id_pac_get'];
        $archivo=$_POST['datos'];
        $fecha=date('y-m-d');

        include '../conexion_i.php';
        $sentencia="INSERT INTO archivos(id_doctor, id_paciente, archivo, id_tipo, activo, fecha) values ('$id_doctor', '$id_pac_get', '$archivo', '1', '1', '$fecha')";
        $resent=mysqli_query($conexion,$sentencia);
        echo "imagen";
        echo "<br>";
        echo $archivo;
    }

    if (isset($_POST['documentos'])) {
        $id_doctor=$_SESSION['id_usuario'];
        $id_pac_get=$_SESSION['id_pac_get'];
        $archivo=$_POST['documentos'];
        $fecha=date('y-m-d');

        include '../conexion_i.php';
        $sentencia="INSERT INTO archivos(id_doctor, id_paciente, archivo, id_tipo, activo, fecha) values ('$id_doctor', '$id_pac_get', '$archivo', '2', '1', '$fecha')";
        $resent=mysqli_query($conexion,$sentencia);
        echo "documentos";
        echo "<br>";
        echo $archivo;
    }

    if (isset($_POST['update_foto_pac'])) {
        echo $_POST['update_foto_pac'];
    }

    if (isset($_POST['foto_pac'])) {
        echo $_POST['foto_pac'];
    }

 ?>