<?php 
//error_reporting(0);

if(!isset($_SESSION)) {
	session_start();
}
$id_doctor=$_SESSION['id_usuario'];
include '../conexion_i.php';
header("Content-type: text/html; charset=utf8");
 //BUSCAR PACIENTES
	if($_POST['buscar_pac']=="")
	{
		$tabla="";
		$query="SELECT nb_Paciente, id_doctor, nu_Celular, nu_Edad, id_Paciente FROM pacientes WHERE id_doctor=$id_doctor and sn_Activo=1 ORDER BY id_Paciente desc ";
		if(isset($_POST['buscar_pac']))
		{
			$q=$conexion->real_escape_string($_POST['buscar_pac']);
			$query="SELECT nb_Paciente, id_doctor, nu_Celular, nu_Edad, id_Paciente FROM pacientes WHERE id_doctor=$id_doctor and
				nb_Paciente LIKE '%".$q."%' ORDER BY nb_Paciente ASC ";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div class="table-responsive">
						<table class="table table-hover">
							<thead class="btn-info">
								<tr>
									<th style="color: #fff"></th>
									<th style=" color: #fff">Nombre</th>
									<th style=" color: #fff">Celular</th>
									<th style=" color: #fff">Edad</th>
									<th style=" color: #fff">Editar</th>
									<th style=" color: #fff">Borrar</th>
									
								</tr>
							</thead>
							<tbody style="width: 100%;">';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=
				'<tr class="btn-gris">
					<td><img src="" class="img-responsive" style="width: 40px; border-radius: 10%"></td>

					<td ><a href="consultas_2.php?id_Paciente='.$fila['id_Paciente'].'">'.$fila['nb_Paciente'].'</a></td>

					<td><a href="consultas_2.php?id_Paciente='.$fila['id_Paciente'].'">'.$fila['nu_Celular'].'</a></td>

					<td><a href="consultas_2.php?id_Paciente='.$fila['id_Paciente'].'">'.$fila['nu_Edad'].'</a></td>

					<td ><a href="consultas_2.php?id_Paciente='.$fila['id_Paciente'].'" class=" btn-outline-info btn-xs"><i class="fa fa-edit"></i></a></td>

					<td ><a class=" btn-outline-info btn-xs" onclick="javascript:borra_registro('.$fila['id_Paciente'].')"><i class="fas fa-trash-alt" style="color:red"></i></a></td>

					
					</tr>';

			}

			$tabla.='</tbody>
			</table>';
		} else
			{
				$tabla="<h3>No existe este nombre entre sus pacientes agregados</h3>";
			}

		echo $tabla;
		}
	if(isset($_POST['buscar_pac']))
	{
		$tabla="";
		$query="SELECT nb_Paciente, id_doctor, nu_Celular, nu_Edad, id_Paciente FROM pacientes WHERE id_doctor=$id_doctor and sn_Activo=1 ORDER BY id_Paciente desc ";
		if(isset($_POST['buscar_pac']))
		{
			$q=$conexion->real_escape_string($_POST['buscar_pac']);
			$query="SELECT nb_Paciente, id_doctor, nu_Celular, nu_Edad, id_Paciente FROM pacientes WHERE id_doctor=$id_doctor and sn_Activo=1 and
				nb_Paciente LIKE '%".$q."%' ORDER BY nb_Paciente ASC ";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div class="table-responsive">
						<table class="table table-hover">
							<thead class="btn-info">
								<tr>
									<th style="color: #fff"></th>
									<th style=" color: #fff">Nombre</th>
									<th style=" color: #fff">Celular</th>
									<th style=" color: #fff">Edad</th>
									<th style=" color: #fff"></th>
									<th style=" color: #fff"></th>
								</tr>
							</thead>
							<tbody style="width: 100%;">';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=
				'<tr class="btn-gris">
					<td><img src="" class="img-responsive" style="width: 40px; border-radius: 5%"></td>

					<td ><a href="consultas_2.php?id_Paciente='.$fila['id_Paciente'].'">'.$fila['nb_Paciente'].'</a></td>

					<td><a href="consultas_2.php?id_Paciente='.$fila['id_Paciente'].'">'.$fila['nu_Celular'].'</a></td>

					<td "><a href="consultas_2.php?id_Paciente='.$fila['id_Paciente'].'">'.$fila['nu_Edad'].'</a></td>

					<td ><a href="consultas_2.php?id_Paciente='.$fila['id_Paciente'].'" class=" btn-outline-info btn-xs"><i class="fa fa-edit"></i></a></td>

					<td ></td>
				</tr>';
			}

			$tabla.='</tbody>
			</table>';
		} else
			{
				$tabla="<h3>No existe este nombre entre sus pacientes agregados</h3>";
			}

		echo $tabla;
	}
//BUSCAR PACIENTES