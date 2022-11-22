

<div class="row">
    <div class="col-md-12">
        <?php if ($_SESSION['rol']==3): ?>
        <h1>Supervisor</h1>
            
        <?php endif ?>
        <?php if ($_SESSION['rol']==4): ?>
        <h1>Representante</h1>
            
        <?php endif ?>
    </div>
    <div class="col-md-3">
        <div class="page-header">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4 class="mb-0">VV del Mes</h4>
                    </div>
                    <div class="card-body" style="text-align: center;">
                      <?php 
                      $fecha = new DateTime();
                      $fecha->modify('first day of this month');
                      $primerdia= $fecha->format('Y/m/d');
                      $fecha->modify('last day of this month');
                      $ultimodia= $fecha->format('Y/m/d');

                      $sql="SELECT SUM(total) AS total FROM venta_expediente where id_coordinador=$id_doctor and metodo=2 and fecha_venta Between '$primerdia' and '$ultimodia'";
                      $query = $pdo->prepare($sql);
                          $query->execute();
                          $list = $query->fetchAll();
                          foreach ($list as $res) { 
                       ?>
                        <h2><i class="fa fa-dollar-sign"></i><?php 
                        echo number_format ( $res['total'] );?><label>.00</label></h2>
                    <?php } ?>
                        <p class="card-text">Volumen De Ventas</p>
                        <a class="btn btn-outline-info btn-xs" href="#">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="page-header">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4 class="mb-0">EV del Mes</h4>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <?php 
                      $fecha = new DateTime();
                      $fecha->modify('first day of this month');
                      $primerdia= $fecha->format('Y/m/d');
                      $fecha->modify('last day of this month');
                      $ultimodia= $fecha->format('Y/m/d');

                      $sql="SELECT count(id_coordinador) AS total FROM venta_expediente where id_coordinador=$id_doctor and metodo=2 and fecha_venta Between '$primerdia' and '$ultimodia'";
                      $query = $pdo->prepare($sql);
                          $query->execute();
                          $list = $query->fetchAll();
                          foreach ($list as $res) {
                       ?>
                        <h1><?php 
                        echo $res['total'];?><label></label></h1>
                    <?php } ?>
                        <p class="card-text">Expedientes Vendidos</p>
                        <a class="btn btn-outline-info btn-xs" href="#">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php if ($_SESSION['rol']==3): ?>
        
    <div class="col-md-3">
        <div class="page-header">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4 class="mb-0">Representantes</h4>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <?php
                        $sql="SELECT count(id_usuario) AS total FROM usuarios where id_asesor=$id_doctor and rol=4";
                        $query = $pdo->prepare($sql);
                          $query->execute();
                          $list = $query->fetchAll();
                          foreach ($list as $res) {
                        
                       ?>
                        <h1><?php echo $res['total']; ?></h1>
                    <?php } ?>
                        <p class="card-text">Total</p>
                        <a class="btn btn-outline-info btn-xs" href="#">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif ?>
    <div class="col-md-3">
        <div class="page-header">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4 class="mb-0">ED del mes</h4>
                    </div>
                    <div class="card-body" style="text-align: center;">
                    <?php 
                      $fecha = new DateTime();
                      $fecha->modify('first day of this month');
                      $primerdia= $fecha->format('Y/m/d');
                      $fecha->modify('last day of this month');
                      $ultimodia= $fecha->format('Y/m/d');

                      $sql="SELECT count(id_coordinador) AS total FROM venta_expediente where id_coordinador=$id_doctor and metodo=1";
                      $query = $pdo->prepare($sql);
                          $query->execute();
                          $list = $query->fetchAll();
                          foreach ($list as $res) {
                       ?>
                        <h1><?php 
                        echo $res['total'];?><label></label></h1>
                    <?php } ?>
                        <p class="card-text">Exedientes Demo</p>
                        <a class="btn btn-outline-info btn-xs" href="#">Ver Detalles.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<br><br>
<?php if ($_SESSION['rol']==3): ?>

<div class="row">
    <!-- ============================================================== -->
    <!-- accrodions style one -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="accrodion-regular">
            <div id="accordion2">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        
                           <button class="btn btn-link" data-toggle="collapse" data-target="#collapseHonorarios" aria-expanded="true" aria-controls="collapseHonorarios">
                           <h3 class="mb-0">&nbsp;&nbsp;Representantes</h3>
                           </button>
                    </div>
                    <div id="collapseHonorarios" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-9">
                                </div>
                                <div class="col-sm-3">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nuevo_repre"style="width: 100%"><em class="fa fa-user-plus" ></em>&nbsp; Representante</button>
                                    <br>
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th >Nombre</th>
                                            <th >Celular</th>
                                            <th >Correo</th>
                                            <th >Detalles</th>
                                        </tr>
                                    </thead>
                                    <tbody style="width: 100%;">
                                        <?php 
                                        $date = new DateTime("now", new DateTimeZone('America/Mazatlan') );
                                        $fecha = $date->format('Y-m-d');
                                        $id_coordinador=$_SESSION['id_usuario'];
                                        $sql="SELECT * FROM doctor where id_asesor=$id_coordinador and rol=4 ";
                                        $query = $pdo->prepare($sql);
                                        $query->execute();
                                        $list = $query->fetchAll();
                                        foreach ($list as $ver) {
                                         ?>
                                             <tr class="btn-gris">
                                    <td><img src="<?php echo $ver['prefil'] ?>" class="img-responsive" style="width: 50px; border-radius: 50%"></td>

                                    <td ><label><?php echo $ver['nombre'] ?></label></td>

                                    <td><label><?php echo $ver['celular'] ?></label></</td>

                                    <td ><label><?php echo $ver['correo'] ?></label></</td>

                                    <td "><a href="reportes_detalles.php?id_Representante=<?php echo $ver['id_doctor'] ?>" target="_blank">...</a></td>

                                    
                                </tr>
                               

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br>
    
<?php endif ?>
<div class="row">
     <div class="col-12">
        <div class="accrodion-regular">
            <div id="accordion2">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        
                           <button class="btn btn-link" data-toggle="collapse" data-target="#collapseHonorarios" aria-expanded="true" aria-controls="collapseHonorarios">
                           <h3 class="mb-0">&nbsp;&nbsp;Doctores</h3>
                           </button>
                    </div>
                    <div id="collapseHonorarios" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-9">
                                </div>
                                <div class="col-sm-3">
                                    <a href="javascript:limpiar_modal_doc();" class="btn btn-success" style="width: 100%;"><em class="fa fa-user-plus" ></em>&nbsp;Doctor</a>
                                    <br>
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th >Nombre</th>
                                            <th >Celular</th>
                                            <th >Correo</th>
                                            <th >Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody style="width: 100%;">
                                        <?php 
                                        
                                        $date = new DateTime("now", new DateTimeZone('America/Mazatlan') );
                                        $fecha = $date->format('Y-m-d');
                                        $id_coordinador=$_SESSION['id_usuario'];
                                        $sql="SELECT * FROM doctor where id_asesor=$id_coordinador and rol=1";
                                        $query = $pdo->prepare($sql);
                                        $query->execute();
                                        $list = $query->fetchAll();
                                        foreach ($list as $ver) {
                                         ?>
                                             <tr class="btn-gris">
                                                  <td><img src="<?php echo $ver['prefil'] ?>" class="img-responsive" style="width: 50px; border-radius: 50%"></td>

                                                  <td ><label><?php echo $ver['nombre'] ?></label></td>

                                                  <td><label><?php echo $ver['celular'] ?></label></</td>

                                                  <td ><label><?php echo $ver['correo'] ?></label></</td>

                                                  <td><a href="javascript:load_doctor(<?php echo $ver['id_doctor'] ?>);"><i class="fa fa-edit"></i></a></td>

                                                  
                                              </tr>
                               

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<div class="row">
     <div class="col-12">
        <div class="accrodion-regular">
            <div id="accordion2">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        
                           <button class="btn btn-link" data-toggle="collapse" data-target="#collapseHonorarios" aria-expanded="true" aria-controls="collapseHonorarios">
                           <h3 class="mb-0">&nbsp;&nbsp;Medicamentos</h3>
                           </button>
                    </div>
                    <div id="collapseHonorarios" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                        <div class="card-body">
                          <div class="input-group" style="position: relative;">
                            <input type="text" class="form-control" name="buscar_med" id="buscar_med" placeholder="Buscar Medicamento" >
                          
                          </div>
                          <div id="tabla_res_add_med" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div>
                          <br>
                          <form id="form_medicamentos">
                              <input type="text" name="id_med" id="id_med" hidden="false">
                              <a href="javascript:limpiar_med();" class="btn btn-info"> <i class="fa fa-plus"></i>Nuevo</a>
                            <div class="row">
                              <div class="col-md-4">
                                <label>Nombre del Medicamento</label>
                                <input type="text" name="nombre_med" id="nombre_med" class="form-control" placeholder="Nombre del Medicamento">
                              </div>

                              <div class="col-md-4">
                                <label>Presentación</label>
                                <input type="text" name="presentacion_med" id="presentacion_med" class="form-control" placeholder="Presentación">
                              </div>
                              <div class="col-md-4">
                                <label>Envoltura</label>
                                <input type="text" name="envoltura" id="envoltura" class="form-control" placeholder="Envoltura">
                              </div>

                              <div class="col-md-4">
                                <label>Ingrediente</label>
                                <input type="text" name="ingrediente" id="ingrediente" class="form-control" placeholder="Ingrediente">
                              </div>
                              <div class="col-md-4">
                                <label>Concentración</label>
                                <input type="text" name="concentracion" id="concentracion" class="form-control" placeholder="Concentración">
                              </div>

                              <div class="col-md-4">
                                <label>Unidad</label>
                                <input type="text" name="unidad" id="unidad" class="form-control" placeholder="Unidad">
                              </div>
                              <div class="col-md-2">
                                <br>
                                <a href="javascript:add_med();" class="btn btn-success" style="width: 100%;"><i class="fa fa-save" ></i>&nbsp;Guardar</a>
                              </div>
                            </div>
                          </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                        <!-- ============================================================== -->
                        <!-- end accrodions style one -->
                        <!-- ============================================================== -->
<div id="nuevo_repre" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3><i class="fa fa-user-plus"></i>&nbsp;Agregar Nuevo Representante</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form id="form_repres">
            
           <div class="row">
            
              <div class="col-md-4">
                <!--form load logo base 64-->
                   <div class="row">
                    <label>Fotografía</label>
                       <div class="col-md-12 text-center">
                           <img id="img_perfil" src="" class="img-responsive" style="max-width: 190px; border-radius: 5%">
                           <div class="form-group has-feedback">
                                <div class="input-group mb-3">
                                    <input type="file" id="file_perfil" class="form-control" multiple="multiple" accept="image/gif, image/jpg, image/jpeg, image/png, image/bmp" onchange="convert_perfil()">
                                </div>
                            </div>
                            <div class="form-group has-feedback" hidden="false">
                                <input type="text" id="foto_repre" name="foto_repre" class="form-control" value="assets/images/defect.jpg" placeholder="Base-64 value" / hidden="false">
                            </div>
                       </div>
                    </div>
                </form><!--//form load logo base 64-->
              </div>

              <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <label for="nb_Paciente">Nombre Completo:</label>
                        <input type="text" id="nombre_repre" name="nombre_repre" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <label for="especialidad">Celular: </label>
                        <input type="text" id="celular_repre" name="celular_repre" class="form-control">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label for="nu_cEsp">Correo: </label>
                        <input type="text" id="correo_repre" name="correo_repre" class="form-control">
                    </div>
                </div>

              <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label for="nu_cProf">domicilio: </label>
                        <input type="text" id="domicilio_repre" name="domicilio_repre" class="form-control">
                    </div>
                </div>
              </div>
            </div>

        </form>

      </div>
      <div class="modal-footer">
        <button class="btn btn-success" id="btn_agregar_repre" onclick="agregarRepre()">Agregar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>


<div id="nuevo_doctor" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3><i class="fa fa-user-plus"></i>&nbsp;Agregar Nuevo Doctor</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form id="form_doctor">
            <input type="text" name="id_doctor_add" id="id_doctor_add" hidden="false">
           <div class="row">

              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <label for="nb_Paciente">Prefijo:</label>
                      <select name="atencion" id="atencion" class="form-control">
                        <option value="Dr.">Dr.</option>
                        <option value="Dra.">Dra.</option>
                        <option value="Lic.">Lic.</option>
                      </select>
                    </div>
                    <div class="col-md-8">
                        <label for="nb_Paciente">Nombre Completo:</label>
                        <input type="text" name="nombre_doctor" id="nombre_doctor" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <label for="especialidad">Ced. Prof.: </label>
                        <input type="text" name="nu_cProf" id="nu_cProf" class="form-control">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label for="nu_cEsp">Ced. Esp.: </label>
                        <input type="text" name="nu_cEsp" id="nu_cEsp" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <label for="especialidad">Celular: </label>
                        <input type="text" name="celular_doctor" id="celular_doctor" class="form-control">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label for="nu_cEsp">Correo: </label>
                        <input type="text" name="correo_doctor" id="correo_doctor" class="form-control">
                    </div>
                </div>

              <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label for="nu_cProf">domicilio: </label>
                        <input type="text" name="domicilio_doctor" id="domicilio_doctor" class="form-control">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                      <label for="">Especialidad:</label>
                      <select name="id_especialidad" id="id_especialidad" class="form-control">
                        <?php 
                        
                        $date = new DateTime("now", new DateTimeZone('America/Mazatlan') );
                        $fecha = $date->format('Y-m-d');
                        $id_coordinador=$_SESSION['id_usuario'];
                        $sql="SELECT * FROM especialidades where sn_activo=1";
                        $query = $pdo->prepare($sql);

                          $query->execute();
                          $list = $query->fetchAll();
                          foreach ($list as $ver1) {
                            ?>

                          <option value="<?php echo $ver1['id_especialidad']; ?>"><?php echo $ver1['de_especialidad']; ?></option>
                         <?php } ?>
                      </select>
                    </div>

                    <div class="col-md-6">
                        <label>Metodo</label>
                        <select class="form-control" name="metodo" id="metodo">
                            <option value="1">Demo</option>
                            <option value="3">Pendiente</option>
                            <option value="4">Obsequio</option>
                            <option value="2">Efectivo</option>
                            <option value="2">Tranferencia</option>
                            <option value="2">Cheque</option>
                        </select>
                    </div>
                  
                  
                </div>
                <br><br>
                <div class="row">
                  <div class="col-md-4">
                    <a href="https://www.mercadopago.com/mlm/checkout/start?pref_id=395270279-bf038fa9-943c-4bae-a013-f8d421ad421b" class="btn btn-outline-info" style="width: 100%" target="_blank">Pago Completo</a>
                  </div>

                  <div class="col-md-4">
                    <a href="https://www.mercadopago.com/mlm/checkout/start?pref_id=395270279-7e1b7618-1541-4cc2-9023-883fd29821e1" class="btn btn-outline-success" style="width: 100%" target="_blank">Pago 1</a>
                  </div>

                  <div class="col-md-4">
                    <a href="https://www.mercadopago.com/mlm/checkout/start?pref_id=395270279-80a420ff-6a5d-4975-b556-d10d10acae10" class="btn btn-outline-primary" style="width: 100%" target="_blank">Pago 2</a>
                  </div>
                </div>
                <br>
                <div class="row"> 
                  <div class="col-md-4">
                    <a href="https://www.mercadopago.com/mlm/checkout/start?pref_id=395270279-1eecbe18-16c8-44c7-83dd-cea48729abb8" class="btn btn-outline-success" style="width: 100%" target="_blank">Pago 3</a>
                  </div>

                  <div class="col-md-4">
                    <a href="https://www.mercadopago.com/mlm/checkout/start?pref_id=395270279-0dd525bf-34f2-4e65-828e-410822dbe482" class="btn btn-outline-primary" style="width: 100%" target="_blank">Pago 4</a>
                  </div>
                </div>
              </div>
            </div>

        </form>

      </div>
      <div class="modal-footer">
        <button class="btn btn-success" onclick="agregarDoctor()">Agregar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function limpiar_med() {
    $('#id_med').val("");
    $('#nombre_med').val("");
    $('#presentacion_med').val("");
    $('#envoltura').val("");
    $('#ingrediente').val("");
    $('#concentracion').val("");
    $('#unidad').val("");
  }

</script>