<?php include '../../conexion.php';  ?>

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Celular</th>
                <th>Fecha/Hora</th>
                <th>Detalles</th>
            </tr>
        </thead>
        <tbody style="width: 100%;">
            <?php 

            $id_doctor=$_POST['id_doctor'];
            $status=$_POST['status'];
            $sql="SELECT * FROM agenda AS A INNER JOIN pacientes AS P ON (A.id_doctor = P.id_doctor) AND (A.id_Paciente = P.id_Paciente) WHERE A.id_doctor=$id_doctor and status='$status'";
            $query = $pdo->prepare($sql);
            $query->execute();
            $list = $query->fetchAll();
            foreach ($list as $ver) {

             ?>
             <?php 
             $status_detalles=$ver['status'];
                if ($status_detalles=='Por Definir') {
                    $color='#7dc76e';
                }
                if ($status_detalles=='Rotundo NO') {
                    $color='#cc3816';
                }
                if ($status_detalles=='Por falta de $') {
                    $color='#cfc620';
                }
                if ($status_detalles=='Demo') {
                    $color='#3ca3d6';
                }
                if ($status_detalles=='Venta') {
                    $color='#10d4cd';
                }
                if ($status_detalles=='Indeciso') {
                    $color='#ae63c9';
                }
                 ?>
                 <tr class="btn-gris" style="background-color: <?php echo $color; ?>">

                      <td ><label style="color: #fff; font-size: 20px"><?php echo $ver['nb_Paciente'] ?></label></td>

                      <td ><label style="color: #fff; font-size: 20px"><?php echo $ver['nu_Celular'] ?></label></td>

                      <td ><label style="color: #fff; font-size: 20px"><?php echo date("d-m-Y H:i a",strtotime($ver['start'])) ?></label></td>

                      <td><a style="color: #fff; font-size: 20px" href="javascript:res_status(<?php echo $ver['id_doctor'] ?>,'<?php echo $ver['status'] ?>');"><i class="fa fa-ellipsis-h"></i></a></td>
                  </tr>
   

            <?php } ?>
        </tbody>
    </table>
</div>