<?php 
session_start();
$id_doctor=$_SESSION['id_usuario'];
include '../conexion_i.php';

//BUSCAR PACIENTES AGENDA
	if(isset($_POST['busqueda']))
	{
		$tabla="";
		$query="SELECT * FROM pacientes WHERE id_doctor=$id_doctor ORDER BY id_Paciente desc LIMIT 10";
		if(isset($_POST['busqueda']))
		{
			$q=$conexion->real_escape_string($_POST['busqueda']);
			$query="SELECT * FROM pacientes WHERE id_doctor=$id_doctor and
				nb_Paciente LIKE '%".$q."%' ORDER BY nb_Paciente ASC LIMIT 10";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div>';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=
				'<div onclick="cargarcita('.$fila['id_Paciente'].')" class="btn-info col-md-12" style="text-align: left;">'.$fila['nb_Paciente'].'</div>';
			}

			$tabla.='</div>';
		} else
			{
				$tabla="";
			}

		echo $tabla;
		}

//BUSCAR PACIENTES AGENDA

//BUSCAR ALERGIAS
	if(isset($_POST['add_alergias']))
	{
		$tabla="";
		$query="SELECT * FROM listado where id_listado=5 GROUP BY listado";
		if(isset($_POST['add_alergias']))
		{
			$q=$conexion->real_escape_string($_POST['add_alergias']);
			$query="SELECT * FROM listado WHERE id_doctor=$id_doctor and id_listado=5 and
				listado LIKE '%".$q."%' GROUP BY listado";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div>';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=
				'<div onclick="enviaralergias('.$fila['id'].'), guardarAnt()" class="btn-info col-md-12" style="text-align: left;">'.$fila['listado'].'</div>';
			}

			$tabla.='</div>';
		} else
			{
				$tabla="";
			}

		echo $tabla;
		}

//BUSCAR ALERGIAS

//BUSCAR HEREDO FAMILIAR
	if(isset($_POST['add_listado']))
	{
		$tabla="";
		$query="SELECT * FROM listado where id_listado=0 GROUP BY listado";
		if(isset($_POST['add_listado']))
		{
			$q=$conexion->real_escape_string($_POST['add_listado']);
			$query="SELECT * FROM listado WHERE id_doctor=$id_doctor and id_listado=1 and
				listado LIKE '%".$q."%' GROUP BY listado";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div>';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=
				'<div onclick="enviarhf('.$fila['id'].'), guardarAnt()" class="btn-info col-md-12" style="text-align: left;">'.$fila['listado'].'</div>';
			}

			$tabla.='</div>';
		} else
			{
				$tabla="";
			}

		echo $tabla;
		}

//BUSCAR HEREDO FAMILIAR

//BUSCAR ANT PP
	if(isset($_POST['add_ant_pp']))
	{
		$tabla="";
		$query="SELECT * FROM listado where id_listado=0 GROUP BY listado";
		if(isset($_POST['add_ant_pp']))
		{
			$q=$conexion->real_escape_string($_POST['add_ant_pp']);
			$query="SELECT * FROM listado WHERE id_doctor=$id_doctor and id_listado=2 and
				listado LIKE '%".$q."%'";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div>';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=

				'<div onclick="enviarpp('.$fila['id'].'), guardarAnt()" class="btn-info col-md-12" style="text-align: left;">'.$fila['listado'].'</div>';
			}

			$tabla.='</div>';
		} else
			{
				$tabla="";
			}

		echo $tabla;
		}

//BUSCAR ANT PP

//BUSCAR ANT NP
	if(isset($_POST['add_ant_np']))
	{
		$tabla="";
		$query="SELECT * FROM listado where id_listado=0 GROUP BY listado";
		if(isset($_POST['add_ant_np']))
		{
			$q=$conexion->real_escape_string($_POST['add_ant_np']);
			$query="SELECT * FROM listado WHERE id_doctor=$id_doctor and id_listado=3 and
				listado LIKE '%".$q."%'";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div>';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=

				'<div onclick="enviarnp('.$fila['id'].'), guardarAnt()" class="btn-info col-md-12" style="text-align: left;">'.$fila['listado'].'</div>';
			}

			$tabla.='</div>';
		} else
			{
				$tabla="";
			}

		echo $tabla;
		}

//BUSCAR ANT NP

//BUSCAR ANT GO
	if(isset($_POST['add_ant_go']))
	{
		$tabla="";
		$query="SELECT * FROM listado where id_listado=0 GROUP BY listado";
		if(isset($_POST['add_ant_go']))
		{
			$q=$conexion->real_escape_string($_POST['add_ant_go']);
			$query="SELECT * FROM listado WHERE id_doctor=$id_doctor and id_listado=4 and
				listado LIKE '%".$q."%'";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div>';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=

				'<div onclick="enviargo('.$fila['id'].'), guardarAnt()" class="btn-info col-md-12" style="text-align: left;">'.$fila['listado'].'</div>';
			}

			$tabla.='</div>';
		} else
			{
				$tabla="";
			}

		echo $tabla;
		}

//BUSCAR ANT GO

//BUSCAR DIAGNOSTICOS
	if(isset($_POST['dx']))
	{
		$tabla="";
		$query="SELECT * FROM cie10_4 LIMIT 10";
		if(isset($_POST['dx']))
		{
			$q=$conexion->real_escape_string($_POST['dx']);
			$query="SELECT * FROM cie10_4 WHERE literal LIKE '%".$q."%' LIMIT 10";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div>';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=
				'<div onclick="cargardx('.$fila['id'].')" class="btn-info col-md-12" style="text-align: left;">'.$fila['literal'].'</div>';
			}

			$tabla.='</div>';
		} else
			{
				$tabla="";
			}

		echo $tabla;
		}

//BUSCAR DIAGNOSTICOS


//BUSCAR GABINETE
	if(isset($_POST['gab']))
	{
		$tabla="";
		$query="SELECT * FROM cat_laboratorio LIMIT 10";
		if(isset($_POST['gab']))
		{
			$q=$conexion->real_escape_string($_POST['gab']);
			$query="SELECT * FROM cat_laboratorio WHERE laboratorio LIKE '%".$q."%' LIMIT 10";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div>';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=
				'<div onclick="cargargab('.$fila['id'].')" class="btn-info col-md-12" style="text-align: left;">'.$fila['laboratorio'].'</div>';
			}

			$tabla.='</div>';
		} else
			{
				$tabla="";
			}

		echo $tabla;
		}

//BUSCAR GABINETE


//BUSCAR MEDICAMENTO
	if(isset($_POST['med']))
	{
		$tabla="";
		$query="SELECT * FROM cat_med LIMIT 10";
		if(isset($_POST['med']))
		{
			$q=$conexion->real_escape_string($_POST['med']);
			$query="SELECT * FROM cat_med WHERE nombrecomercial LIKE '%".$q."%' OR presentacion LIKE '%".$q."%' OR envoltura LIKE '%".$q."%' OR ingrediente LIKE '%".$q."%' LIMIT 10";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div>';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=
				'<div onclick="cargarmed('.$fila['id'].')" class="btn-info col-md-12" style="text-align: left;">'.$fila['nombrecomercial'].' '.$fila['presentacion'].' '.$fila['envoltura'].' '.$fila['ingrediente'].' '.$fila['concentracion'].' '.$fila['unidad'].'</div>';
			}

			$tabla.='</div>';
		} else
			{
				$tabla="";
			}

		echo $tabla;
		}

//BUSCAR MEDICAMENTO

//BUSCAR ADD MEDICAMENTO
	if(isset($_POST['nombre_med']))
	{
		$tabla="";
		$query="SELECT * FROM cat_med LIMIT 10";
		if(isset($_POST['nombre_med']))
		{
			$q=$conexion->real_escape_string($_POST['nombre_med']);
			$query="SELECT * FROM cat_med WHERE nombrecomercial LIKE '%".$q."%' OR presentacion LIKE '%".$q."%' OR envoltura LIKE '%".$q."%' OR ingrediente LIKE '%".$q."%' LIMIT 10";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div>';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=
				'<div onclick="cargar_add_med('.$fila['id'].')" class="btn-info col-md-12" style="text-align: left;">'.$fila['nombrecomercial'].' '.$fila['presentacion'].' '.$fila['envoltura'].' '.$fila['ingrediente'].' '.$fila['concentracion'].' '.$fila['unidad'].'</div>';
			}

			$tabla.='</div>';
		} else
			{
				$tabla="";
			}

		echo $tabla;
		}

//BUSCAR ADD MEDICAMENTO

//BUSCAR MEDICAMENTO
	if(isset($_POST['concept']))
	{
		$tabla="";
		$query="SELECT * FROM cat_honorarios where id_doctor=$id_doctor and activo=1 LIMIT 10";
		if(isset($_POST['concept']))
		{
			$q=$conexion->real_escape_string($_POST['concept']);
			$query="SELECT * FROM cat_honorarios WHERE concepto LIKE '%".$q."%' and activo=1 and id_doctor=$id_doctor LIMIT 10";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div>';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=
				'<div onclick="cargarconceptos('.$fila['id'].')" class="btn-info col-md-12" style="text-align: left;">'.$fila['concepto'].'</div>';
			}

			$tabla.='</div>';
		} else
			{
				$tabla="";
			}

		echo $tabla;
		}

//BUSCAR MEDICAMENTO

//BUSCAR DOC AGENDA
	if(isset($_POST['busqueda2']))
	{
		$tabla="";
		$query="SELECT * FROM pacientes WHERE id_doctor=$id_doctor ORDER BY id_Paciente desc LIMIT 10";
		if(isset($_POST['busqueda2']))
		{
			$q=$conexion->real_escape_string($_POST['busqueda2']);
			$query="SELECT * FROM pacientes WHERE id_doctor=$id_doctor and
				nb_Paciente LIKE '%".$q."%' ORDER BY nb_Paciente ASC LIMIT 10";
		}

		$buscar=$conexion->query($query);
		if ($buscar->num_rows > 0)
		{
			$tabla.='<div>';

			while($fila= $buscar->fetch_assoc())
			{
				$tabla.=
				'<div onclick="cargardoc('.$fila['id_Paciente'].')" class="btn-info col-md-12" style="text-align: left;">'.$fila['nb_Paciente'].'</div>';
			}

			$tabla.='</div>';
		} else
			{
				$tabla="";
			}

		echo $tabla;
		}

//BUSCAR DOC AGENDA

?>

