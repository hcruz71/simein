    <?php 
        session_start();
        $id_doctor=$_SESSION['id_usuario'];
        require_once "../../../conexion_i.php";
        $query_doc = "SELECT * from templates_recetas where id_doctor=$id_doctor and activo=1";
        $resultado_doc = $conexion->query($query_doc);
        while($ver = $resultado_doc->fetch_assoc())
        {
          $id=$ver['id_template'];
          $descripcion=$ver['descripcion'];
          $nom_left=$ver['nom_left'];
          $nom_top=$ver['nom_top'];
          $fecha_right=$ver['fecha_right'];
          $fecha_top=$ver['fecha_top'];
          $img_rec=$ver['img_rec'];
          $rec_top=$ver['rec_top'];
          $rec_left=$ver['rec_left'];
          $font_size=$ver['font_size'];
    ?>



<div class="card-body" style="height: auto; border: 1px solid #ccc;">
                            <div class="row">
                              <br><br>
                                <div class="col-md-12" style="text-align: center;">
                                  <h1><?php echo $descripcion ?></h1>
                                </div>
                            </div>
                                <br>
                                 <div class="row">
                                   <div class="col-md-3">
                                      <div class="row">
                                        <label>Nombre Margen Arriba <br><b style="color:#000; font-size: 20px"><?php echo ($nom_top/46) ?>cm</b></label>
                                       </div>
                                       <br>
                                        <div class="row">
                                        <label>Nombre Margen Izquierdo <br ><b style="color:#000; font-size: 20px"><?php echo ($nom_left/46) ?>cm</b></label>
                                       </div>

                                       <br>
                                       <div class="row">
                                        <label>Fecha Margen Arriba <br><b style="color:#000; font-size: 20px"><?php echo ($fecha_top/46) ?>cm</b></label>
                                       </div>
                                       <br>
                                        <div class="row">
                                        <label>Fecha Margen Derecho <br><b style="color:#000; font-size: 20px"><?php echo ($fecha_right/46) ?>cm</b></label>
                                       </div>
                                       <br>
                                       <div class="row">
                                        <label>Receta Margen Arriba <br><b style="color:#000; font-size: 20px"><?php echo ($rec_top/46) ?>cm</b></label>
                                       </div>
                                       <br>
                                        <div class="row">
                                        <label>Receta Margen Derecho <br><b style="color:#000; font-size: 20px"><?php echo ($rec_left/46) ?>cm</b></label>
                                       </div>
                                       <br>
                                        <div class="row">
                                        <label>Tamaño de letra <br><b style="color:#000; font-size: 20px"><?php echo $font_size ?>px</b></label>
                                       </div>


                                   </div>
                                   <div class="col-md-9">
                                      <label>Fondo de la receta</label>
                                      <!--Append the base64 value from the above field-->
                                      
                                      <!--Used to Display Decode Image-->
                                      <div class="container">
                                          <img id="img_loader" src="<?php echo $img_rec ?>" class="img-responsive" style="width: 100%">
                                      </div>
                                   </div>
                                 </div>
                                 <br>
                                 <div class="row">
                                   <div class="col-sm-3">
                                     
                                   </div>
                                   <div class="col-sm-3">
                                      <label onclick="replace(<?php echo $id; ?>);" class="btn btn-info" style="width: 100%"><i class="fa fa-eye"></i>&nbsp;&nbsp;Vista Previa</label>
                                   </div>
                                   <div class="col-sm-3">
                                      <label onclick="edit_receta(<?php echo $id; ?>);" class="btn btn-primary" style="width: 100%"> <i class="fa fa-edit"></i>&nbsp;&nbsp;Editar</label>
                                   </div>
                                   <div class="col-sm-3">
                                      <label onclick="delete_receta(<?php echo $id; ?>);" class="btn btn-danger" style="width: 100%"> <i class="fa fa-trash"></i>&nbsp;&nbsp;Eliminar</label>
                                   </div>
                                 </div>
            </form><!--end form-->
        </div>

  <?php } ?>