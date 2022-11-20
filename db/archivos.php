<?php 
    session_start();

    if (isset($_POST['archivo'])) {

        $archivo=$_POST['archivo'];


        include '../conexion.php';
        $sql="INSERT INTO archivos(id_doctor, id_paciente, archivo, id_tipo) values ('11', '12', '$archivo', '1')";
        $query = $pdo->prepare($sql);
        $query->execute();
        
        echo $query;
    }

    if (isset($_POST['logo'])) {
        $id_doctor=$_SESSION['id_usuario'];
        $archivo=$_POST['logo'];
        include '../conexion.php';
        $sql="update doctor set logo='".$archivo."' WHERE id_doctor='$id_doctor'";
        $query = $pdo->prepare($sql);
        $query->execute();
        
        echo $query;
    }


    if (isset($_POST['perfil'])) {
        $id_doctor=$_SESSION['id_usuario'];
        $archivo=$_POST['perfil'];

        include '../conexion.php';
        $sql="update doctor set perfil='".$archivo."' WHERE id_doctor='$id_doctor'";
        $query = $pdo->prepare($sql);
        $query->execute();
        
        echo $query;
    }

    if (isset($_POST['datos'])) {
        $id_doctor=$_SESSION['id_usuario'];
        $id_pac_get=$_SESSION['id_pac_get'];
        $archivo=$_POST['datos'];
        $fecha=date('Y-m-d');

        $sql="INSERT INTO archivos(id_doctor, id_paciente, archivo, id_tipo, activo, fecha) values ('$id_doctor', '$id_pac_get', '$archivo', '1', '1', '$fecha')";
        $query = $pdo->prepare($sql);
        $query->execute();

        echo "imagen";
        echo "<br>";
        echo $query;
    }

    if (isset($_POST['documentos'])) {
        $id_doctor=$_SESSION['id_usuario'];
        $id_pac_get=$_SESSION['id_pac_get'];
        $archivo=$_POST['documentos'];
        $fecha=date('Y-m-d');

        $sql="INSERT INTO archivos(id_doctor, id_paciente, archivo, id_tipo, activo, fecha) values ('$id_doctor', '$id_pac_get', '$archivo', '2', '1', '$fecha')";
        $query = $pdo->prepare($sql);
        $query->execute();
        
        echo "documentos";
        echo "<br>";
        echo $query;
    }

    if (isset($_POST['update_foto_pac'])) {
        echo $_POST['update_foto_pac'];
    }

    if (isset($_POST['foto_pac'])) {
        echo $_POST['foto_pac'];
    }

 ?>