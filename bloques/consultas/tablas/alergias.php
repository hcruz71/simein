<div class="col-md-12 alert alert-danger">

  <table>
	<?php 
	include	'../../../conexion.php';
	session_start();
	$id_doctor=$_SESSION['id_usuario'];
	$id_pac_get=$_SESSION['id_pac_get'];
  	$sentencia="SELECT * from listado where id_doctor=$id_doctor and id_paciente=$id_pac_get and id_listado=5 and activo=1";
  	$resultado=mysql_query($sentencia);
  	while($filas=mysql_fetch_assoc($resultado))
  	{
      $id=$filas['id'];
  	?>


<?php if (isset($filas['id'])){ ?>
      <tr>
      <td><i class="fa fa-check color-blue"></i></td>
      <td class="col-md-10"><b><?php echo $filas['listado'] ?></b></td>
      <td class="col-md-1"><i class="fa fa-trash color-red" onclick="borrar_alergicos(<?php echo $filas['id'] ?>)"></td>
     </tr>
  <?php
      } 
  ?>

<?php } ?>

	  	</div>
    </table>  