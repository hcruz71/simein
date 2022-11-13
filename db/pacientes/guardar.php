
<?php
session_start(); 
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


    $razon_social=$_POST['razon_social'];
    $RFC=$_POST['RFC'];
    $domicilio=$_POST['domicilio'];
    $colonia=$_POST['colonia'];
    $estado=$_POST['estado'];
    $municipio=$_POST['municipio'];
    $correo=$_POST['correo'];



	include '../../conexion.php';
	$resent_max="SELECT id_Paciente FROM pacientes WHERE id_doctor=$id_doctor and id_Paciente=(SELECT MAX(id_Paciente) FROM pacientes WHERE id_doctor=$id_doctor)";
	$resent=mysql_query($resent_max);
	while ($row=mysql_fetch_row ($resent)){
		$row1=$row[0]+1;
	}

	$add="INSERT INTO pacientes(id_doctor, id_Paciente, fl_File, nb_Paciente, fh_Ingreso, fh_Nacimiento, nu_Edad, id_Sexo,de_Ocupacion, nu_Celular, de_Email, de_Otros_datos, de_Estado_civil, id_Sangre,de_Religion, nb_Emergencia, nu_Emergencia, de_Domicilio,id_Aseguradora,sn_Activo) VALUES ('$id_doctor','$row1','$file','$nb_Paciente', '$fh_Ingreso', '$fh_Nacimiento', '$nu_Edad', '$id_Sexo','$de_Ocupacion', '$nu_Celular', '$de_Email', '$de_Otros_datos', '$de_Estado_civil', '$id_Sangre','$de_Religion', '$nb_Emergencia', '$nu_Emergencia', '$de_Domicilio', '$id_Aseguradora', '1')";
	$resent=mysql_query($add);

	$add_antecedentes="INSERT INTO antecedentes(id_doctor, id_paciente) VALUES ('$id_doctor','$row1')";
	$ejecutar_recetas=mysql_query($add_antecedentes);

	$add_datos_fiscales="INSERT INTO datos_fiscales(id_doctor, id_paciente, razon_social, RFC, domicilio, colonia, estado, municipio, correo) VALUES ('$id_doctor','$row1','$razon_social','$RFC','$domicilio', '$colonia', '$estado', '$municipio', '$correo')";
	$ejecutar_datos_fiscales=mysql_query($add_datos_fiscales);
    
if (isset($_POST['agregar_consultar'])) {
    header("Location: ../../consultas_2.php?id_Paciente=$row1");
}

if (isset($_POST['solo_agregar'])) {
    header("Location: ../../pacientes.php");
}
	
?>