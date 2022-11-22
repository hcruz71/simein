
<?php
session_start(); 
    $file=$_POST['foto_pac'];
    $nb_Paciente=$_POST['nb_Paciente'];
    $date = new DateTime("now", new DateTimeZone('America/Mazatlan') );
    $fh_Ingreso = $date->format('Y-m-d');
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


    $razon_social=$_POST['razon_social'];
    $RFC=$_POST['RFC'];
    $domicilio=$_POST['domicilio'];
    $colonia=$_POST['colonia'];
    $estado=$_POST['estado'];
    $municipio=$_POST['municipio'];
    $correo=$_POST['correo'];



	include '../../conexion.php';
    if ( !isset($pdo) ) {
        $pdo = connect(); 
    }
	$sql="SELECT id_Paciente FROM pacientes WHERE id_doctor=$id_doctor and id_Paciente=(SELECT MAX(id_Paciente) FROM pacientes WHERE id_doctor=$id_doctor)";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $row) {
		$row1=$row[0]+1;
	}

	$sql="INSERT INTO pacientes(id_doctor, id_Paciente, fl_File, nb_Paciente, fh_Ingreso, fh_Nacimiento, nu_Edad, id_Sexo,de_Ocupacion, nu_Celular, de_Email, de_Otros_datos, de_Estado_civil, id_Sangre,de_Religion, nb_Emergencia, nu_Emergencia, de_Domicilio,id_Aseguradora,sn_Activo) VALUES ('$id_doctor','$row1','$file','$nb_Paciente', '$fh_Ingreso', '$fh_Nacimiento', '$nu_Edad', '$id_Sexo','$de_Ocupacion', '$nu_Celular', '$de_Email', '$de_Otros_datos', '$de_Estado_civil', '$id_Sangre','$de_Religion', '$nb_Emergencia', '$nu_Emergencia', '$de_Domicilio', '$id_Aseguradora', '1')";
    $query = $pdo->prepare($sql);
    $query->execute();

	$sql="INSERT INTO antecedentes(id_doctor, id_paciente) VALUES ('$id_doctor','$row1')";
    $query = $pdo->prepare($sql);
    $query->execute();

	$sql="INSERT INTO datos_fiscales(id_doctor, id_paciente, razon_social, RFC, domicilio, colonia, estado, municipio, correo) VALUES ('$id_doctor','$row1','$razon_social','$RFC','$domicilio', '$colonia', '$estado', '$municipio', '$correo')";
    $query = $pdo->prepare($sql);
    $query->execute();
    
if (isset($_POST['agregar_consultar'])) {
    header("Location: ../../consultas_2.php?id_Paciente=$row1");
}

if (isset($_POST['solo_agregar'])) {
    header("Location: ../../pacientes.php");
}
	
?>