<div class="table-responsive">
	<table class="table"style="width: 100%;">
		<thead class="">
			<tr>
				<th style=" color: #000" style="width: 70%">Imagen</th>
        <th style=" color: #000" style="width: 10%">Fecha</th>
				<th style=" color: #000" style="width: 10%">Visualización</th>
				<th style=" color: #000" style="width: 10%">Eliminar</th>
			</tr>
		</thead>
		<tbody >
			<?php
			include	'../../../conexion.php';
      if ( !isset($pdo) ) {
        $pdo = connect(); 
    } 
			session_start();
			$id_doctor=$_SESSION['id_usuario'];
			$id_pac_get=$_SESSION['id_pac_get'];
            $sql="SELECT * FROM archivos where id_doctor=$id_doctor and id_paciente=$id_pac_get and id_tipo=1 and activo=1 ORDER BY id DESC";
            $query = $pdo->prepare($sql);
            $query->execute();
            $list = $query->fetchAll();
            foreach ($list as $res) {     
            ?>
                                
			<tr class="btn-gris">
				<td style="color: #000;"><img src="<?php echo $res['archivo']; ?>" class="img-responsive" style="max-width: 190px; border-radius: 5px;"></td>
        <td style="color: #000;"><?php echo $res['fecha']; ?></td>
				<td style="color: #000;"><a class="btn btn-info" data-toggle="modal" data-target="#a<?php echo $res['id']; ?>"><i class="fa fa-search"></i></a>
        </td>

				<td ><label class="btn btn-danger" onclick="deleteImagenes(<?php echo $res['id']; ?>)"><i class="fa fa-trash"></i></label></td>
			</tr>

			<?php
	            }
	        ?>
		</tbody>
	</table>
</div>

<?php
            $id_doctor=$_SESSION['id_usuario'];
            $id_pac_get=$_SESSION['id_pac_get'];
            $sql="SELECT * FROM archivos where id_doctor=$id_doctor and id_paciente=$id_pac_get and id_tipo=1 and activo=1 ORDER BY id DESC";
            $query = $pdo->prepare($sql);
            $query->execute();
            $list = $query->fetchAll();
            foreach ($list as $res) {      
            ?>
                 
                <!-- Modal -->
                <div id="a<?php echo $res['id']; ?>" class="modal fade" role="dialog" >
                  <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                      </div>
                      <div class="modal-body">
                        <img src="<?php echo $res['archivo']; ?>" class="img-responsive" style="width: 100%; border-radius: 5px;">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>

            <?php
                }
            ?>

<!-- Trigger the modal with a button -->


