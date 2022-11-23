 
<?php
session_start(); 
    $fl_File=$_POST['file_pacEdit'];
    $id_paciente=$_POST['id_pac_edit'];
    $nb_Paciente=$_POST['nb_Paciente'];
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
	$sql="update pacientes set fl_File='". $fl_File ."', nb_Paciente='$nb_Paciente', fh_Nacimiento='$fh_Nacimiento', nu_Edad='$nu_Edad', id_Sexo='$id_Sexo', de_Ocupacion='$de_Ocupacion', nu_Celular='$nu_Celular', de_Email='$de_Email', de_Otros_datos='$de_Otros_datos', de_Estado_civil='$de_Estado_civil', id_Sangre='$id_Sangre', de_Religion='$de_Religion', nb_Emergencia='$nb_Emergencia', nu_Emergencia='$nu_Emergencia', de_Domicilio='$de_Domicilio', id_Aseguradora='$id_Aseguradora' WHERE id_doctor='$id_doctor' and id_Paciente='$id_paciente'";
    $query = $pdo->prepare($sql);
    $query->execute();

	$sql="update datos_fiscales set razon_social='$razon_social', RFC='$RFC', domicilio='$domicilio', colonia='$colonia', estado='$estado', municipio='$municipio', correo='$correo' WHERE id_doctor='$id_doctor' and id_Paciente='$id_paciente'";
    $query = $pdo->prepare($sql);
    $query->execute();

    echo ($id_paciente);


?>