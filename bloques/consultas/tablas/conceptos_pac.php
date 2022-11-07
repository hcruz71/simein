<br><div class="table-responsive">
    <table class="table">
      <thead>
          <tr>
            <th scope="col">Concepto</th>
            <th>Total</th>
            <th></th>
          </tr>
        	<?php 
        	include	'../../../conexion.php';
        	session_start();
        	$id_doctor=$_SESSION['id_usuario'];
          $id_pac_get=$_SESSION['id_pac_get'];
        	$sentencia="SELECT * from honorarios where id_doctor=$id_doctor and id_paciente=$id_pac_get and activo=1";
        	$resultado=mysql_query($sentencia);
        	while($filas=mysql_fetch_assoc($resultado))
        	{
        	?>
            <tr>
            <td class="col-md-10"><b><?php echo $filas['concepto'] ?></b></td>
            <td class="col-md-10"><b><?php echo $filas['total'] ?></b></td>
            <td class="col-md-1"><i class="fa fa-trash color-red" onclick="borrar_concepto_pac(<?php echo $filas['id'] ?>)"></td>
           </tr>

<?php } ?>
        </tbody>
    </table>
</div> 