<div class="table-responsive">
	<table class="table"style="width: 100%;">
		<thead class="">
			<tr>
				<th style=" color: #000" style="width: 70%">Imagen</th>
				<th style=" color: #000" style="width: 10%">descargar</th>
				<th style=" color: #000" style="width: 10%">Eliminar</th>
			</tr>
		</thead>
		<tbody >
			<?php
			include	'../../../conexion.php';
			session_start();
			$id_doctor=$_SESSION['id_usuario'];
			$id_pac_get=$_SESSION['id_pac_get'];
            $sql="SELECT * FROM archivos where id_doctor=$id_doctor and id_paciente=$id_pac_get and id_tipo=1";
			$query = $pdo->prepare($sql);
			$query->execute();
			$list = $query->fetchAll();
			foreach ($list as $res) {      
            ?>
                                
			<tr class="btn-gris">
				<td style="color: #000;"><img src="assets/images/<?php echo $res['archivo']; ?>" class="img-responsive" style="width: 190px; border-radius: 5px;"></td>
				<td ><a href="#" class=" btn-outline-secundary btn-xs"><i class="fa fa-file-alt" style="font-size: 30px"></i></a></td>
				<td ><a href="#" class=" btn-outline-secundary btn-xs"><i class="fa fa-download" style="font-size: 30px"></i></a></td>

				<td ><a href="#" class=" btn-outline-secundary btn-xs"><i class="fa fa-trash" style="font-size: 30px"></i></a></td>
			</tr>

			<?php
	            }
	        ?>
		</tbody>
	</table>
</div>