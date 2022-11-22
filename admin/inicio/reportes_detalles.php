

<div class="row">
    <div class="col-md-12">
        <?php if ($_SESSION['rol']==3): ?>

          <?php 
            $id_representante=$_GET['id_Representante'];
            $sql="SELECT usuario FROM usuarios where id_usuario=$id_representante";
            $query = $pdo->prepare($sql);
            $query->execute();
            $list = $query->fetchAll();
            foreach ($list as $res) {
             ?>
              <h3><?php 
              echo $res['usuario'];?></h3>
          <?php } ?>
            
        <?php endif ?>
        <?php if ($_SESSION['rol']==4): ?>

          <h1>Representante</h1>
            
        <?php endif ?>
    </div>

    <?php 
      $fecha = new DateTime();
      $fecha->modify('first day of this month');
      $primerdia= $fecha->format('Y/m/d');
      $fecha->modify('last day of this month');
      $ultimodia= $fecha->format('Y/m/d');
      $sql="SELECT SUM(total) AS total FROM venta_expediente where id_asesor=$id_representante and metodo=2 and fecha_venta Between '$primerdia' and '$ultimodia'";
      $query = $pdo->prepare($sql);
      $query->execute();
      $list = $query->fetchAll();
      foreach ($list as $res) {
    ?>

    <div class="col-md-3">
        <div class="page-header">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">

                        <h4 class="mb-0">VV</h4>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <h4 class="mb-0">

                          <?php 
                            if ($res['total']>=0 && $res['total']<=80999) {
                              $rango="Base";
                              $color="";
                              $porcentaje="";
                            }else if ($res['total']>=81000 && $res['total']<=114749) {
                              $rango="N1";
                              $color="#baffb5";
                              $porcentaje="al 10%";
                            }else if ($res['total']>=114750 && $res['total']<=148500) {
                              $rango="N2";
                              $color="#ffec98";
                              $porcentaje="al 15%";
                            }else{
                              $rango="N3";
                              $color="#ffbcf4";
                              $porcentaje="al 20%";
                            }
                              echo $rango.' '.$porcentaje;
                          ?>
                           
                         </h4>
                        
                    </div>
                    <div class="card-body" style="text-align: center; background-color: <?php echo $color; ?>">
                      
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
    <?php 
      $fecha = new DateTime();
      $fecha->modify('first day of this month');
      $primerdia= $fecha->format('Y/m/d');
      $fecha->modify('last day of this month');
      $ultimodia= $fecha->format('Y/m/d');

      $sql="SELECT count(id_coordinador) AS total FROM venta_expediente where id_asesor=$id_representante and metodo=2 and fecha_venta Between '$primerdia' and '$ultimodia'";
      $query = $pdo->prepare($sql);

      $query->execute();
      $list = $query->fetchAll();
      foreach ($list as $res) {
    ?>
    <div class="col-md-3">
        <div class="page-header">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4 class="mb-0">EV del Mes</h4>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        
                        <h1><?php 
                        echo $res['total'];?><label></label></h1>
                        <p class="card-text">Expedientes Vendidos</p>
                        <a class="btn btn-outline-info btn-xs" href="#">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="col-md-3">
        <div class="page-header">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4 class="mb-0">Demos/Mes</h4>
                    </div>
                    <div class="card-body" style="text-align: center;">
                    <?php 
                      $fecha = new DateTime();
                      $fecha->modify('first day of this month');
                      $primerdia= $fecha->format('Y/m/d');
                      $fecha->modify('last day of this month');
                      $ultimodia= $fecha->format('Y/m/d');

                      $sql="SELECT count(id_coordinador) AS total FROM venta_expediente where id_asesor=$id_representante and metodo=1";
                      $query = $pdo->prepare($sql);
                      $query->execute();
                      $list = $query->fetchAll();
                      foreach ($list as $res) {
                       ?>
                        <h1><?php 
                        echo $res['total'];?><label></label></h1>
                    <?php } ?>
                        <p class="card-text">Expedientes Demo</p>
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
                        <h4 class="mb-0">Total Doctores</h4>
                    </div>
                    <div class="card-body" style="text-align: center;">
                    <?php 
                      $fecha = new DateTime();
                      $fecha->modify('first day of this month');
                      $primerdia= $fecha->format('Y/m/d');
                      $fecha->modify('last day of this month');
                      $ultimodia= $fecha->format('Y/m/d');

                      $sql="SELECT count(id_coordinador) AS total FROM venta_expediente where id_asesor=$id_representante and metodo=2";
                      $query = $pdo->prepare($sql);
                      $query->execute();
                      $list = $query->fetchAll();
                      foreach ($list as $res) {
                       ?>
                        <h1><?php 
                        echo $res['total'];?><label></label></h1>
                    <?php } ?>
                        <p class="card-text">Expedientes Activos</p>
                        <a class="btn btn-outline-info btn-xs" href="#">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<br><br>
<?php if ($_SESSION['rol']==3): ?>


<div class="row">
     <div class="col-12">
        <div class="accrodion-regular">
            <div id="accordion2">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        
                           <button class="btn btn-link" data-toggle="collapse" data-target="#collapseHonorarios" aria-expanded="true" aria-controls="collapseHonorarios">
                           <h3 class="mb-0">&nbsp;&nbsp;Reporte de Actividades</h3>
                           </button>
                    </div>
                    <div id="collapseHonorarios" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                        <div class="card-body">
                            <!-- <div class="row">
                                <div class="col-sm-9">
                                </div>
                                <div class="col-sm-3">
                                   <a href="javascript:limpiar_modal_doc();" class="btn btn-success" style="width: 100%;"><em class="fa fa-user-plus" ></em>&nbsp;Doctor</a>
                                </div>
                            </div>
                            <br>-->
                            <div class="row">
                              <div class="col-md-4">

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th >Total</th>
                                                <th >Detalles</th>
                                            </tr>
                                        </thead>
                                        <tbody style="width: 100%;">
                                            <?php 
                                            $id_representante=$_GET['id_Representante'];
                                            $sql="SELECT * FROM agenda AS A INNER JOIN pacientes AS P ON (A.id_doctor = P.id_doctor) AND (A.id_Paciente = P.id_Paciente) WHERE A.id_doctor=$id_representante GROUP BY A.status ASC";
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

                                                      <td ><label style="color: #fff; font-size: 20px"><?php echo $ver['status'] ?></label></td>

                                                      <td ><label style="color: #fff; font-size: 20px">
                                                        <?php 
                                                          $id_representante=$_GET['id_Representante'];
                                                          $status=$ver['status'];
                                                          $sql="SELECT count(id) AS total FROM agenda WHERE status='$status' AND id_doctor=$id_representante GROUP BY status";
                                                          $query = $pdo->prepare($sql);

                                                          $query->execute();
                                                          $list = $query->fetchAll();
                                                          foreach ($list as $ver1) {

                                                          echo $ver1['total']; 
                                                        } 

                                                        ?></label></</td>

                                                      <td><a style="color: #fff; font-size: 20px;" href="javascript:res_status(<?php echo $ver['id_doctor'] ?>,'<?php echo $ver['status'] ?>');"><i class="fas fa-sign-out-alt"></i></a></td>
                                                  </tr>
                                   

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                              </div>

                              <div class="col-md-8">
                                <div id="res_status"></div>
                              </div>

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
                           <h3 class="mb-0">&nbsp;&nbsp;Doctores Agregados</h3>
                           </button>
                    </div>
                    <div id="collapseHonorarios" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                        <div class="card-body">
                            <!-- <div class="row">
                                <div class="col-sm-9">
                                </div>
                                <div class="col-sm-3">
                                   <a href="javascript:limpiar_modal_doc();" class="btn btn-success" style="width: 100%;"><em class="fa fa-user-plus" ></em>&nbsp;Doctor</a>
                                </div>
                            </div>
                            <br>-->
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
                                        $id_coordinador=$_SESSION['id_usuario'];
                                        $sql="SELECT * FROM doctor where id_asesor=$id_representante";
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
<?php endif ?>
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
                            <option value="2">Efectivo</option>
                            <option value="2">Tranferencia</option>
                            <option value="2">Cheque</option>
                        </select>
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
  }
function res_status(id_doctor, status)
    {
        $.ajax({
            url : 'db/admin/fetch.php',
            type : 'POST',
            dataType : 'html',
            data : { 
              id_doctor: id_doctor,
              status: status 
            },
            })

        .done(function(resultado){
            $("#res_status").html(resultado);
        })
        //alert(id_doc + status);
    }
</script>