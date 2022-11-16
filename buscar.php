<?php 
session_start();
$id_doctor=$_SESSION['id_usuario'];
include '../conexion.php';
if ( !isset($pdo) ) {
	$pdo = connect(); 
}

//BUSCAR PACIENTES AGENDA
	if(isset($_POST['busqueda']))
	{
		$tabla="";
		$sql="SELECT * FROM pacientes WHERE id_doctor=$id_doctor ORDER BY id_Paciente desc LIMIT 10";
		if(isset($_POST['busqueda']))
		{
			$q=$_POST['busqueda'];
			$sql="SELECT * FROM pacientes WHERE id_doctor=$id_doctor and
				nb_Paciente LIKE '%".$q."%' ORDER BY nb_Paciente ASC LIMIT 10";
		}

		$query = $pdo->prepare($sql);
     	$query->execute();

		$buscar= $query->rowCount();
		if ($buscar > 0)
		{
			$tabla.='<div>';

			$list = $query->fetchAll();
        	foreach ($list as $fila) 
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
		$sql="SELECT * FROM listado where id_listado=5 GROUP BY listado";
		if(isset($_POST['add_alergias']))
		{
			
			$q=$_POST['add_alergias'];
			$sql="SELECT * FROM listado WHERE id_doctor=$id_doctor and id_listado=5 and
				listado LIKE '%".$q."%' GROUP BY listado";
		}

		$query = $pdo->prepare($sql);
     	$query->execute();

		$buscar= $query->rowCount();
		if ($buscar > 0)
		{
			$tabla.='<div>';

			$list = $query->fetchAll();
        	foreach ($list as $fila) 
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
		$sql="SELECT * FROM listado where id_listado=0 GROUP BY listado";
		if(isset($_POST['add_listado']))
		{
			
			$q=$_POST['add_listado'];
			$sql="SELECT * FROM listado WHERE id_doctor=$id_doctor and id_listado=1 and
				listado LIKE '%".$q."%' GROUP BY listado";
		}

		$query = $pdo->prepare($sql);
     	$query->execute();

		$buscar= $query->rowCount();
		if ($buscar > 0)
		{
			$tabla.='<div>';

			$list = $query->fetchAll();
        	foreach ($list as $fila) 
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
		$sql="SELECT * FROM listado where id_listado=0 GROUP BY listado";
		if(isset($_POST['add_ant_pp']))
		{
			
			$q=$_POST['add_ant_pp'];
			$sql="SELECT * FROM listado WHERE id_doctor=$id_doctor and id_listado=2 and
				listado LIKE '%".$q."%'";
		}

		$query = $pdo->prepare($sql);
     	$query->execute();

		$buscar= $query->rowCount();
		if ($buscar > 0)
		{
			$tabla.='<div>';

			$list = $query->fetchAll();
        	foreach ($list as $fila) 
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
		$sql="SELECT * FROM listado where id_listado=0 GROUP BY listado";
		if(isset($_POST['add_ant_np']))
		{
			
			$q=$_POST['add_ant_np'];
			$sql="SELECT * FROM listado WHERE id_doctor=$id_doctor and id_listado=3 and
				listado LIKE '%".$q."%'";
		}

		$query = $pdo->prepare($sql);
     	$query->execute();

		$buscar= $query->rowCount();
		if ($buscar > 0)
		{
			$tabla.='<div>';

			$list = $query->fetchAll();
        	foreach ($list as $fila) 
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
		$sql="SELECT * FROM listado where id_listado=0 GROUP BY listado";
		if(isset($_POST['add_ant_go']))
		{
			
			$q=$_POST['add_ant_go'];
			$sql="SELECT * FROM listado WHERE id_doctor=$id_doctor and id_listado=4 and
				listado LIKE '%".$q."%'";
		}

		$query = $pdo->prepare($sql);
     	$query->execute();

		$buscar= $query->rowCount();
		if ($buscar > 0)
		{
			$tabla.='<div>';

			$list = $query->fetchAll();
        	foreach ($list as $fila) 
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
		$sql="SELECT * FROM cie10_4 LIMIT 10";
		if(isset($_POST['dx']))
		{
			
			$q=$_POST['dx'];
			$sql="SELECT * FROM cie10_4 WHERE literal LIKE '%".$q."%' LIMIT 10";
		}
		$query = $pdo->prepare($sql);
		$query->execute();

	   $buscar= $query->rowCount();
	   if ($buscar > 0)
		{
			$tabla.='<div>';

			$list = $query->fetchAll();
        	foreach ($list as $fila) 
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
		$sql="SELECT * FROM cat_laboratorio LIMIT 10";
		if(isset($_POST['gab']))
		{
			
			$q=$_POST['gab'];
			$sql="SELECT * FROM cat_laboratorio WHERE laboratorio LIKE '%".$q."%' LIMIT 10";
		}

		$query = $pdo->prepare($sql);
		$query->execute();

	   $buscar= $query->rowCount();
	   if ($buscar > 0)
		{
			$tabla.='<div>';

			$list = $query->fetchAll();
        	foreach ($list as $fila) 
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
		$sql="SELECT * FROM cat_med LIMIT 10";
		if(isset($_POST['med']))
		{
			
			$q=$_POST['med'];
			$sql="SELECT * FROM cat_med WHERE nombrecomercial LIKE '%".$q."%' OR presentacion LIKE '%".$q."%' OR envoltura LIKE '%".$q."%' OR ingrediente LIKE '%".$q."%' LIMIT 10";
		}

		$query = $pdo->prepare($sql);
		$query->execute();

	   $buscar= $query->rowCount();
	   if ($buscar > 0)
		{
			$tabla.='<div>';

			$list = $query->fetchAll();
        	foreach ($list as $fila) 
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
		$sql="SELECT * FROM cat_med LIMIT 10";
		if(isset($_POST['nombre_med']))
		{
			
			$q=$_POST['nombre_med'];
			$sql="SELECT * FROM cat_med WHERE nombrecomercial LIKE '%".$q."%' OR presentacion LIKE '%".$q."%' OR envoltura LIKE '%".$q."%' OR ingrediente LIKE '%".$q."%' LIMIT 10";
		}

		$query = $pdo->prepare($sql);
		$query->execute();

	   $buscar= $query->rowCount();
	   if ($buscar > 0)
		{
			$tabla.='<div>';

			$list = $query->fetchAll();
        	foreach ($list as $fila) 
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
		$sql="SELECT * FROM cat_honorarios where id_doctor=$id_doctor and activo=1 LIMIT 10";
		if(isset($_POST['concept']))
		{
			
			$q=$_POST['concept'];
			$sql="SELECT * FROM cat_honorarios WHERE concepto LIKE '%".$q."%' and activo=1 and id_doctor=$id_doctor LIMIT 10";
		}

		$query = $pdo->prepare($sql);
		$query->execute();

	   $buscar= $query->rowCount();
	   if ($buscar > 0)
		{
			$tabla.='<div>';

			$list = $query->fetchAll();
        	foreach ($list as $fila) 
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
		$sql="SELECT * FROM pacientes WHERE id_doctor=$id_doctor ORDER BY id_Paciente desc LIMIT 10";
		if(isset($_POST['busqueda2']))
		{
			
			$q=$_POST['busqueda2'];
			$sql="SELECT * FROM pacientes WHERE id_doctor=$id_doctor and
				nb_Paciente LIKE '%".$q."%' ORDER BY nb_Paciente ASC LIMIT 10";
		}

		$query = $pdo->prepare($sql);
		$query->execute();

	   $buscar= $query->rowCount();
	   if ($buscar > 0)
		{
			$tabla.='<div>';

			$list = $query->fetchAll();
        	foreach ($list as $fila) 
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

