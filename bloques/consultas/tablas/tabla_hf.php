<br><div class="col-md-12">
	<?php 
	include	'../../../conexion.php';
	session_start();
	$id_doctor=$_SESSION['id_usuario'];
	$id_pac_get=$_SESSION['id_pac_get'];
  	$sentencia="SELECT * from listado where id_doctor=$id_doctor and id_paciente=$id_pac_get";
  	$resultado=mysql_query($sentencia);
  	while($filas=mysql_fetch_assoc($resultado))
  	{
  	?>
  	
  		<div class="col-md-11">
  			<i class="fa fa-check color-blue"></i>
  			<label><?php echo $filas['listado'] ?></label>
  		</div>
  		<div class="col-md-1">
  			<i class="fa fa-trash color-red" onclick="borrar_hf(<?php echo $filas['id'] ?>)"></i>
  		</div>

  		
	<?php
	  	}
	?>
	  	</div>