<?php 
session_start();
        extract($_POST);
        extract($_GET);
        $id_doctor=$_SESSION['id_usuario'];
        require_once "../../../conexion_i.php";
    ?>


    <table class="table">
        <tr class="bg-primary">
            <td>Nombre</td>
            <td>Correo</td>
            <td style="width: 10%;">Editar</td>
            <td style="width: 10%;">Eliminar</td>
        </tr>

    <?php 

    $query_doc = "SELECT * from usuarios where id_usuario=$id_doctor and rol=2 and sn_activo=1";
    $resultado_doc = $conexion->query($query_doc);
    while($ver = $resultado_doc->fetch_assoc())
    {
     ?>

    <tr>
      <td><h3><?php echo $ver['usuario'] ?></h3></td>
      <td><h3><?php echo $ver['nb_usuario'] ?></h3></td>
     <td>
        <label class="btn btn-info" name="label" onclick="editarAsistente('<?php echo $ver['id'] ?>')"> <i class="fa fa-edit"></i></label>
      </td>
      <td>
        <label class="btn btn-danger" onclick="deleteAsistente('<?php echo $ver['id'] ?>')"> <i class="fa fa-trash"></i></label>
      </td>
    </tr>
    <?php 
  }
     ?>
  </table>