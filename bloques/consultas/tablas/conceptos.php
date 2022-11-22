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
  if ( !isset($pdo) ) {
    $pdo = connect(); 
  }
	session_start();
	$id_doctor=$_SESSION['id_usuario'];
  	$sql="SELECT * from cat_honorarios where id_doctor=$id_doctor and activo=1";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $filas) 
  	{
  	?>
      <tr>
      <td class="col-md-10"><b><?php echo $filas['concepto'] ?></b></td>
      <td class="col-md-10"><b><?php echo $filas['total'] ?></b></td>
      <td class="col-md-1"><i class="fa fa-trash color-red" onclick="borrar_concepto(<?php echo $filas['id'] ?>)"></td>
     </tr>

<?php } ?>
                        </tbody>
                    </table>
                </div> 