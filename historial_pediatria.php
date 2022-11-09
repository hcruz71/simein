 <?php
//error_reporting(0);
session_start();
extract($_GET);
$id_doctor=$_SESSION['id_usuario'];
$id_pac_get=$_SESSION['id_pac_get'];

    # conectare la base de datos
include '../../conexion_i.php';

$id_doctor=$_SESSION['id_usuario'];
    $query_pac = "SELECT * FROM pacientes where id_doctor=$id_doctor and id_Paciente=$id_pac_get";
    $resultado_pac = $conexion->query($query_pac);
    while($row_pac = $resultado_pac->fetch_assoc())
    {
        $nb_Paciente=$row_pac['nb_Paciente'];
        $fecha=date('d-m-Y');
        $nu_Edad=$row_pac['nu_Edad'];
        $id_sexo=$row_pac['id_Sexo'];
        $fh_Nacimiento=$row_pac['fh_Nacimiento'];
        if ($id_sexo=="Masculino") {
            $id_sexo=1;
        }else{
            $id_sexo=2;
        }

        if ($nu_Edad<=2) {
            $formato=1;
        }else{
            $formato=2;
        }

            $tiempo = strtotime($fh_Nacimiento); 
            $ahora = time(); 
            $edad = ($ahora-$tiempo)/(60*60*24*30.3); 
            $meses = floor($edad);
            $meses = $meses-1; 
            
    }
            
    $query_doc = "SELECT * FROM doctor where id_doctor=$id_doctor";
    $resultado_doc = $conexion->query($query_doc);
    while($row_doc = $resultado_doc->fetch_assoc())
    {
        $a=$row_doc['atencion'];
        $id=$row_doc['id_doctor'];
        $n=$row_doc['nombre'];
        $esp=$row_doc['especialidad'];
        $e=$row_doc['de_cEsp'];
        $p=$row_doc['de_cProf'];
        $d=$row_doc['direccion'];
        $t=$row_doc['telefono'];
        $c=$row_doc['celular'];
        $m=$row_doc['correo'];
        $id_especialidad=$row_doc['id_especialidad'];
        $id_alergicos=$row_doc['id_alergicos'];
        $id_hf=$row_doc['id_hf'];
        $id_pp=$row_doc['id_pp'];
        $id_np=$row_doc['id_np'];
        $id_go=$row_doc['id_go'];
        $id_padecimiento=$row_doc['id_padecimiento'];
        $id_exploracion=$row_doc['id_exploracion'];
        $id_signos_vitales=$row_doc['id_signos_vitales'];
        $id_diagnosticos=$row_doc['id_diagnosticos'];
        $id_gabinete=$row_doc['id_gabinete'];
        $id_honorarios=$row_doc['id_honorarios'];
        $id_receta=$row_doc['id_receta'];
        $id_archivos=$row_doc['id_archivos'];

    }

     $query_esp = "SELECT * FROM especialidades where id_especialidad=$id_especialidad";
    $resultado_esp = $conexion->query($query_esp);
    while($row_esp = $resultado_esp->fetch_assoc())
    {
        $id_esp=$row_esp['de_especialidad'];

    }

    $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
    if($action == 'ajax'){
        include 'paginacion.php'; //incluir el archivo de paginación
        //las variables de paginación
        $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
        $per_page = 1; //la cantidad de registros que desea mostrar
        $adjacents  = 4; //brecha entre páginas después de varios adyacentes
        $offset = ($page - 1) * $per_page;
        //Cuenta el número total de filas de la tabla*/
        $count_query   = mysqli_query($conexion,"SELECT count(*) AS numrows FROM historial_clinico where id_doctor=$id_doctor and id_paciente=$id_pac_get and activo=1 ORDER BY id DESC");
        if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
        $total_pages = ceil($numrows/$per_page);
        $reload = 'index.php';
        //consulta principal para recuperar los datos
        $query = mysqli_query($conexion,"SELECT * FROM historial_clinico where id_doctor=$id_doctor and id_paciente=$id_pac_get and activo=1 ORDER BY id DESC LIMIT $offset,$per_page ");
        
        if ($numrows>0){
            ?>
<div class="">
    <?php
    while($row = mysqli_fetch_array($query)){
        ?>
    <div class="row" style="margin-top: 40px"></div>
    <div class="row">
        <!-- inicio consultas -->
        <div class="col-md-10">
            <div class="accrodion-regular">
                <div id="accordion3">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseHonorarios" aria-expanded="true" aria-controls="collapseHonorarios">
                            <h3 class="mb-0">Consultas Médicas</h3>
                            </button>
                        </div>
                        <div id="collapseHonorarios" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion3">
                            <div class="card-body">
                                <form id="form_historial">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-4" style="float: right;">
                                                <h3 id="fecha">Fecha: <?php echo date("d-m-Y",strtotime($row['fecha'])) ;?></h3>
                                            </div>
                                            <div class="col-md-2" style="float: right;">
                                                <input type="text" name="id_historial" class="form-group" id="id_historial" style="" value="<?php echo $row['id'];?>" hidden="false">
                                            </div>
                                            <div class="col-md-3" style="float: right;">
                                                <label class="btn btn-outline-info btn-xs btn-block" onclick="limpiarConsultas()"><i class="fa fa-plus"></i>&nbsp;&nbsp;Nueva</label>
                                            </div>
                                            <div class="col-md-3" style="float: right;">
                                                <label class="btn btn-outline-danger btn-xs btn-block" onclick="eliminarConsulta(<?php echo $row['id'];?>)"><i class="fa fa-trash"></i>&nbsp;&nbsp;Eliminar</label>
                                            </div>

                                        </div>

                                        <h3>Padecimiento Actual</h3>
                                        <textarea class="form-control" name="padecimiento" id="txt_padecimiento" rows="5"><?php echo $row['padecimiento'];?></textarea><br>

                                        <?php if ($id_exploracion==1): ?>

                                            <h3>Exploración Física</h3>
                                            <textarea class="form-control" name="exploracion" id="txt_exploracion" rows="5"><?php echo $row['exploracion'];?></textarea><br>

                                        <?php endif ?> 

                                        <?php if ($id_signos_vitales==1): ?> 
                                            <h3 >percentiles</h3>
                                            <div class="border-top">
                                                <div class="row" id="signos_vitales">
                                                    <div class="col-md-3">
                                                            <label>Temperatura</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" name="temperatura" id="temperatura" placeholder="Temperatura" value="<?php echo $row['temperatura'];?>">
                                                            <div class="input-group-append"><span class="input-group-text">°C</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                            <label>Peso</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" name="peso" id="peso" placeholder=" Peso" value="<?php echo $row['peso'];?>">
                                                            <div class="input-group-append"><span class="input-group-text">Kg</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                            <label>Talla</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" name="talla" id="talla" placeholder="Talla" value="<?php echo $row['talla'];?>">
                                                            <div class="input-group-append"><span class="input-group-text">Cm</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                            <label>IMC</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" name="imc" id="imc" placeholder="Peso (kg) / Altura (cm)" value="<?php echo $row['imc'];?>">
                                                            <div class="input-group-append" onclick="imc();"><span class="input-group-text fa fa-calculator"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                            <label>F.C.</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" placeholder="FC." name="fc" id="fc" value="<?php echo $row['fc'];?>">
                                                            <div class="input-group-append"><span class="input-group-text"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                            <label>F.R.</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" name="fr" id="fr" placeholder=" FR." value="<?php echo $row['fr'];?>">
                                                            <div class="input-group-append"><span class="input-group-text"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" hidden="false">
                                                        <div class="input-group">
                                                            <input type="date" class="form-control" name="fur" id="fur" value="<?php echo $row['fur'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                            <label>P.C.</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" name="semanas" id="semanas" placeholder="" value="<?php echo $row['semanas'];?>">
                                                            <div class="input-group-append"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php 
                                                $_SESSION['percentiles']['Nombre'] = $nb_Paciente;
                                                $_SESSION['percentiles']['Fuente'] = $formato;
                                                $_SESSION['percentiles']['FechaConsulta'] = $fecha;
                                                $_SESSION['percentiles']['Sexo'] = $id_sexo;
                                                $_SESSION['percentiles']['Edad'] = $meses;
                                              ?>
                                              <a href="percentiles/percentiles_talla.php" onclick="guardarHistorialPed();" class="btn btn-primary" target="_blank">Percentila Talla/Edad</a>
                                                <a href="percentiles/percentiles.php" onclick="guardarHistorialPed();" class="btn btn-info" target="_blank">Percentila Peso/Edad</a>
                                        <?php endif ?> 

                                        <?php if ($id_diagnosticos==1): ?> 
                                            <br>
                                            <div class=" border-top" id="diagnosticos">
                                                <h3>&nbsp;&nbsp;Diagnóstico</h3>
                                                <!-- Diagnostico-->                
                                                    <div class="input-group" style="position: relative;">
                                                        <input type="text" class="form-control" name="dx" id="dx" placeholder="Buscar Diagnósticos" >
                                                        
                                                    </div>
                                                    <div id="tabla_res_dx" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div>
                                                    <br>
                                                    <textarea class="form-control" name="txt_diagnosticos" id="txt_diagnosticos" ><?php echo $row['diagnostico'];?></textarea>
                                                <!-- //Diagnostico-->
                                            </div>
                                        <?php endif ?>

                                        <?php if ($id_archivos==1): ?> 
                                        <!-- Archivos-->
                                        <br>        
                                        <?php include 'archivos.php' ?>
                                        <!-- //Archivos-->

                                        <?php endif ?>

                                        <?php if ($id_gabinete==1): ?> 
                                            <div id="gabinete">
                                            <br>
                                                        <h3>&nbsp;&nbsp;Estudios de Gabinete</h3>
                                                    <!-- gabinete-->
                                                    <div class="input-group" style="position: relative;">
                                                            <input type="text" class="form-control" name="gab" id="gab" placeholder="Buscar Estudios" >
                                                            
                                                        </div>
                                                        <div id="tabla_res_gabinete" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div>

                                                            <form action="print/gabinete.php" method="POST" target="_blank">
                                                                <div style="float: right;" >
                                                                    <input type="text" name="id_paciente_receta" value="<?php echo $id_pac_get ?>" hidden="false">
                                                                    <textarea name="gabinete_print" id="gabinete_print" rows="1" hidden="false"><?php echo $row['gabinete'];?></textarea>
                                                                    <button type="submit" name="btn_receta_1" class="btn btn-default"><i class="fa fa-print" ></i>&nbsp;Imprimir</button>
                                                                </div>
                                                            </form>

                                                        <textarea name="gabinete" class="form-control" id="txt_gabinete" rows="5" ><?php echo $row['gabinete'];?></textarea>
                                                        <!-- //gabinete-->
                                                
                                            </div>
                                        <?php endif ?>
                                        <div class="" id="recetas">
                                            <br>
                                            <h3>&nbsp;&nbsp;Recetas</h3>
                                                   <!-- <input type="submit" name="">
                                                    <input type="text" name="id_pac_receta" value="1">-->
                                                    <div class="input-group" style="position: relative;">
                                                    <input type="text" class="form-control" name="med" id="med" placeholder="Buscar Medicamento" >
                                                    
                                                    </div>
                                                    <div id="tabla_res_med" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div>

                                                    <form action="print/receta_1.php" method="POST" target="_blank">
                                                        <div style="float: right;" >
                                                            <input type="text" name="id_paciente_receta" value="<?php echo $id_pac_get ?>" hidden="false">
                                                            <textarea name="receta_print" id="receta_print" rows="1" hidden="false"><?php echo $row['receta'];?></textarea>
                                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_med_mdedicamento"><i class="fa fa-file" ></i>&nbsp;Agregar Medicamentos.</button>
                                                            <button type="submit" name="btn_receta_1" class="btn btn-default"><i class="fa fa-print" ></i>&nbsp;Imprimir</button>
                                                        </div>
                                                    </form>

                                                    <textarea class="form-control" name="receta" id="txt_recetas" rows="5" onf><?php echo $row['receta'];?></textarea>
                                                    <!-- //receta-->
                                        </div>
                                        <?php if ($id_honorarios==1): ?> 
                                                <div class="" id="honorarios">
                                                    <br>
                                                    
                                                    <!-- honorarios-->
                                                    <div style="float: right;" >
                                                        <button type="button" data-toggle="modal" data-target="#catHonorarios"class="btn btn-default"><i class="fa fa-edit" ></i>&nbsp;Catalogo Honorarios</button>
                                                    </div>
                                                    <h3>&nbsp;&nbsp;Honorarios</h3>

                                                    <div class="input-group" style="position: relative;">
                                                        
                                                    <form id="form_concepto_pac">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                               <input type="text" class="form-control" name="concept" id="concept" placeholder="Buscar un Concepto" > 
                                                            </div>

                                                            <div class="col-md-4">
                                                               <input type="text" class="form-control" name="total_concept" id="total_concept" placeholder="Total"> 
                                                            </div>

                                                            <div class="col-md-2">
                                                               <a href="javascript:guardarConceptoPac();" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar</a> 
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                                                        
                                                    
                                                    </div>
                                                    <div id="tabla_res_conceptos" class="col-md-6" style="position: absolute; z-index: 1000; font-size: 18px;"></div>
                                                    <div id="conceptos_pac"></div>
                                                    <!-- //honorarios-->
                                        <?php endif ?>            
                                        <div class="col-md-12" >
                                            <br>
                                            <a href="javascript:guardarHistorialPed();" class="btn btn-success" id="btn_guardar_h" style="float: right; cursor: pointer;">Guardar Consulta</a>
                                            <br>
                                            <!-- Trigger the modal with a button -->

                                        </div>
                                    </div><br>          
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end consultas -->
                   
    <div class="col-md-2" style="background: #fff;">

        <div class="sidebar-nav-fixed">
            <div class="row" >
                <div class="col-md-12">
                    &nbsp;&nbsp;<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">Fecha Consulta</th>
                          <th></th>
                        </tr>

                        <?php 
                        include '../../conexion.php';
                        $id_paciente=$_SESSION['id_pac_get'];
                            $id_doctor=$_SESSION['id_usuario'];
                        $sql_fecha=mysql_query("SELECT * FROM historial_clinico where id_doctor=$id_doctor and id_paciente=$id_paciente and activo=1");
                        while($res_fecha=mysql_fetch_assoc($sql_fecha)){
                        ?>

                        <tr>
                            <th scope="row">
                                <a href="javascript:cargafecha(<?php echo $res_fecha['id']; ?>);"><?php echo $res_fecha['fecha']; ?></a>
                            </th>
                            <th>
                                <a href="javascript:cargafecha(<?php echo $res_fecha['id']; ?>);"><i class="fa fa-edit"></i></a>
                            </th>
                        </tr>

                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
        
        
            <?php
            
        } else {
            ?>
              <!-- ============================================================== -->
                <!-- nuevo registro -->
                <!-- ============================================================== -->
<div class="">
                

                <div class="row" style="margin-top: 40px">
                    
                </div>

            <div class="row">
              
                <div class="col-md-12">
                    <div class="accrodion-regular">
                        <div id="accordion3">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    
                                       <button class="btn btn-link" data-toggle="collapse" data-target="#collapseHonorarios" aria-expanded="true" aria-controls="collapseHonorarios">
                                       <h3 class="mb-0"><i class="fa fa-folder"></i>&nbsp;&nbsp;Consultas Médicas</h3>
                                       </button>
                                </div>
                                <div id="collapseHonorarios" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion3">
                                    <div class="card-body">

                                    <form id="form_historial">
        <div class="">
            <div class="row">
                <h3 id="fecha">Fecha: <?php echo date("d-m-Y") ;?></h3>

                <input type="text" name="id_historial" class="form-group" id="id_historial" style="" value="" hidden="false">

                <input type="text" name="" class="form-group" id="" style="visibility: hidden;" value="">

            </div>
            <!--<div class="col-md-12">
                <div class="col-md-2" style="float: right;">
                        &nbsp;&nbsp;<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
                </div>
                
            </div>-->
            <h3>Padecimiento Actual</h3>
            <textarea class="form-control" name="padecimiento" id="txt_padecimiento" rows="5"></textarea><br>

<?php if ($id_exploracion==1): ?>
            <h3>Exploración Física</h3>
            <textarea class="form-control" name="exploracion" id="txt_exploracion" rows="5"></textarea><br>
<?php endif ?> 

<?php if ($id_signos_vitales==1): ?> 

        <h3 >Signos Vitales</h3>
        <div class="border-top">
            <div class="row" id="signos_vitales">
                <div class="col-md-3">
                        <label>Temperatura</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="temperatura" id="temperatura">
                        <div class="input-group-append"><span class="input-group-text">°C</span></div>
                    </div>
                </div>
                <div class="col-md-3">
                        <label>Peso</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="peso" id="peso" placeholder="Peso" value="<?php echo $row['peso'];?>">
                        <div class="input-group-append"><span class="input-group-text">Kg</span></div>
                    </div>
                </div>
                <div class="col-md-3">
                        <label>Talla</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="talla" id="talla" placeholder=" Talla" value="<?php echo $row['talla'];?>">
                        <div class="input-group-append"><span class="input-group-text">Cm</span></div>
                    </div>
                </div>
                <div class="col-md-3">
                        <label>IMC</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="imc" id="imc" placeholder="Peso (kg) / Altura (cm)">
                        <div class="input-group-append" onclick="imc();" ><span class="input-group-text fa fa-calculator"></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                        <label>FC.</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="fc" id="fc" placeholder="FC.">
                        <div class="input-group-append"><span class="input-group-text"></span></div>
                    </div>
                </div>
                <div class="col-md-3">
                        <label>FR.</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="fr" id="fr" placeholder="FR.">
                        <div class="input-group-append"><span class="input-group-text"></span></div>
                    </div>
                </div>
                <div class="col-md-3">
                        <label>FUR</label>
                    <div class="input-group">
                        <input type="date" class="form-control" name="fur" id="fur">
                    </div>
                </div>
                <div class="col-md-3">
                        <label>semanas</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="semanas" id="semanas" placeholder="">
                        <div class="input-group-append"><span class="input-group-text fa fa-calculator"></span></div>
                    </div>
                </div>
            </div>
        </div>
             <?php 
                $_SESSION['percentiles']['Nombre'] = $nb_Paciente;
                $_SESSION['percentiles']['Fuente'] = $formato;
                $_SESSION['percentiles']['FechaConsulta'] = $fecha;
                $_SESSION['percentiles']['Sexo'] = $id_sexo;
                $_SESSION['percentiles']['Edad'] = $meses;
              ?>
              <a href="percentiles/percentiles_talla.php" onclick="guardarHistorialPed();" class="btn btn-primary" target="_blank">Percentila Talla/Edad</a>
            <a href="percentiles/percentiles.php" onclick="guardarHistorialPed();" class="btn btn-info" target="_blank">Percentila Peso/Edad</a>
        
<?php endif ?> 

<?php if ($id_diagnosticos==1): ?> 
    <br>
        <div class=" border-top" id="diagnosticos">
            <h3>&nbsp;&nbsp;Diagnóstico</h3>
            <!-- Diagnostico-->                
                <div class="input-group" style="position: relative;">
                    <input type="text" class="form-control" name="dx" id="dx" placeholder="Buscar Diagnósticos" >
                    
                </div>
                <div id="tabla_res_dx" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div>
                <br>
                <textarea class="form-control" name="txt_diagnosticos" id="txt_diagnosticos" ></textarea>
            <!-- //Diagnostico-->
            
            
        </div>
<?php endif ?>

<?php if ($id_archivos==1): ?> 
<!-- Archivos-->
<br>        
        <?php include 'archivos.php' ?>
<!-- //Archivos-->

<?php endif ?>

<?php if ($id_gabinete==1): ?> 
    <div id="gabinete">
    <br>
                <h3>&nbsp;&nbsp;Estudios de Gabinete</h3>
            <!-- gabinete-->
            <div class="input-group" style="position: relative;">
                    <input type="text" class="form-control" name="gab" id="gab" placeholder="Buscar Estudios" >
                    
                </div>
                <div id="tabla_res_gabinete" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div>

                    <form action="print/gabinete.php" method="POST" target="_blank">
                        <div style="float: right;" >
                            <input type="text" name="id_paciente_receta" value="<?php echo $id_pac_get ?>" hidden="false">
                            <textarea name="gabinete_print" id="gabinete_print" rows="1" hidden="false">></textarea>
                            <button type="submit" name="btn_receta_1" class="btn btn-default"><i class="fa fa-print" ></i>&nbsp;Imprimir</button>
                        </div>
                    </form>

                <textarea name="gabinete" class="form-control" id="txt_gabinete" rows="5" ></textarea>
                <!-- //gabinete-->
        
    </div>
<?php endif ?>
        <div class="" id="recetas">
            <br>
            <h3>&nbsp;&nbsp;Recetas</h3>
                   <!-- <input type="submit" name="">
                    <input type="text" name="id_pac_receta" value="1">-->
                    <div class="input-group" style="position: relative;">
                    <input type="text" class="form-control" name="med" id="med" placeholder="Buscar Medicamento" >
                    
                    </div>
                    <div id="tabla_res_med" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div>

                    <form action="print/receta_1.php" method="POST" target="_blank">
                        <div style="float: right;" >
                            <input type="text" name="id_paciente_receta" value="<?php echo $id_pac_get ?>" hidden="false">
                            <textarea name="receta_print" id="receta_print" rows="1" hidden="false"></textarea>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_med_mdedicamento"><i class="fa fa-file" ></i>&nbsp;Agregar Medicamentos</button>
                            
                            <button type="submit" name="btn_receta_1" class="btn btn-default"><i class="fa fa-print" ></i>&nbsp;Imprimir</button>
                            
                        </div>
                    </form>

                    <textarea class="form-control" name="receta" id="txt_recetas" rows="5"></textarea>
                    <!-- //receta-->
        </div>
<?php if ($id_honorarios==1): ?> 
                                                <div class="" id="honorarios">
                                                    <br>
                                                    
                                                    <!-- honorarios-->
                                                    <div style="float: right;" >
                                                        <button type="button" data-toggle="modal" data-target="#catHonorarios"class="btn btn-default"><i class="fa fa-edit" ></i>&nbsp;Catalogo Honorarios</button>
                                                    </div>
                                                    <h3>&nbsp;&nbsp;Honorarios</h3>

                                                    <div class="input-group" style="position: relative;">
                                                        
                                                    <form id="form_concepto_pac">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                               <input type="text" class="form-control" name="concept" id="concept" placeholder="Buscar un Concepto" > 
                                                            </div>

                                                            <div class="col-md-4">
                                                               <input type="text" class="form-control" name="total_concept" id="total_concept" placeholder="Total"> 
                                                            </div>

                                                            <div class="col-md-2">
                                                               <a href="javascript:guardarConceptoPac();" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar</a> 
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                                                        
                                                    
                                                    </div>
                                                    <div id="tabla_res_conceptos" class="col-md-6" style="position: absolute; z-index: 1000; font-size: 18px;"></div>
                                                    <div id="conceptos_pac"></div>
                                                    <!-- //honorarios-->
                                        <?php endif ?>          
            <div class="col-md-12" >
                <br>
                <a href="javascript:guardarHistorialPed();" class="btn btn-success" id="btn_guardar_h" style="float: right; cursor: pointer;">Guardar Consulta</a>
                <br>
            </div>
            <br>

        </div>          
</form> 
    </div>
</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- ============================================================== -->
                        <!-- end accrodions style one -->
                        <!-- ============================================================== -->


        </div>
        
            <?php
        }
    }
?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla_imagenes').load('bloques/consultas/tablas/imagenes.php');
        $('#tabla_documentos').load('bloques/consultas/tablas/documentos.php');
        $('#tabla_conceptos').load('bloques/consultas/tablas/conceptos.php');
        $('#conceptos_pac').load('bloques/consultas/tablas/conceptos_pac.php');
        
    });

    function receta_print(){
    location.reload();
    }

    $("#txt_recetas").focusout(function(){
      $('#receta_print').val($('#txt_recetas').val());
    });

    $("#med").focusout(function(){
      $('#receta_print').val($('#txt_recetas').val());
    });

    $("#txt_gabinete").focusout(function(){
      $('#gabinete_print').val($('#txt_gabinete').val());
    });

    $("#gab").focusout(function(){
      $('#gabinete_print').val($('#txt_gabinete').val());
    });

    function cargafecha(id_consulta){
        var id_consulta=id_consulta;
        $.ajax({
                type:"POST",
                data:'id_consulta=' + id_consulta,
                url:'db/fetch.php',
                dataType:"json",
                success:function(r){
                    $('#id_historial').val(r.id);
                    $('#txt_padecimiento').val(r.padecimiento);
                    $('#txt_exploracion').val(r.exploracion);
                    $('#txt_gabinete').val(r.gabinete);
                    $('#fecha').text('Fecha: '+r.fecha);
                    $('#peso').val(r.peso);
                    $('#talla').val(r.talla);
                    $('#fc').val(r.fc);
                    $('#fr').val(r.fr);
                    $('#imc').val(r.imc);
                    $('#fur').val(r.fur);
                    $('#semanas').val(r.semanas);
                    $('#receta').val(r.receta);
                    $('#txt_diagnosticos').val(r.diagnostico);
                    $('#txt_recetas').val(r.receta);
                }
            })
    }

    function guardarConceptos(){ 
        var datos=$('#form_catHonorarios').serialize();
        $.ajax({
            type:"POST",
            url:"db/guardar_datos.php",
            data:datos,
            success:function(r){
                if(r==1){
                        alert('algo salio mal');
                    }else{
                    $('#tabla_conceptos').load('bloques/consultas/tablas/conceptos.php');
                    $('#id_concepto').val("");
                    $('#concepto').val("");
                    $('#total').val("");
                    }
            }
       });
        return false;
    }

    function guardarConceptoPac(){ 
        var datos=$('#form_concepto_pac').serialize();
        $.ajax({
            type:"POST",
            url:"db/guardar_datos.php",
            data:datos,
            success:function(r){
                if(r==1){
                        alert('algo salio mal');
                    }else{
                    $('#conceptos_pac').load('bloques/consultas/tablas/conceptos_pac.php');
                    $('#concept').val("");
                    $('#total_concept').val("");
                    }
            }
       });
        return false;
    }

        function borrar_concepto(delete_concepto){ 
        $.ajax({
            type:"POST",
            url:"db/fetch.php",
            data:{delete_concepto:delete_concepto},
            success:function(r){
                if(r==1){
                        alert('algo salio mal');
                    }else{
                    $('#tabla_conceptos').load('bloques/consultas/tablas/conceptos.php');
                    $('#id_concepto').val("");
                    $('#concepto').val("");
                    $('#total').val("");
                    }
            }
       });
        return false;
    }

        function borrar_concepto_pac(delete_concepto_pac){ 
        $.ajax({
            type:"POST",
            url:"db/fetch.php",
            data:{delete_concepto_pac:delete_concepto_pac},
            success:function(r){
                if(r==1){
                        alert('algo salio mal');
                    }else{
                    $('#conceptos_pac').load('bloques/consultas/tablas/conceptos_pac.php');
                    $('#concept').val("");
                    $('#total_concept').val("");
                    }
            }
       });
        return false;
    }
    function modal1(){
        $('#add_med_mdedicamento').modal();
            }

            function add_med(){ 
        var datos=$('#form_medicamentos').serialize();
        $.ajax({
            type:"POST",
            url:"db/admin/guardar_datos.php",
            data:datos,
            success:function(r){
                if(r==1){
                        limpiar_med();
                        $('#add_med_mdedicamento').modal('hide');
                    }else{
                    
                    }
            }
       });
        return false;
    }

    function limpiar_med(){
        $('#id_med').val("");
        $('#nombre_med').val("");
    $('#presentacion_med').val("");
    $('#envoltura').val("");
    $('#ingrediente').val("");
    $('#concentracion').val("");
    $('#unidad').val("");
        $('#tabla_res_add_med').html('');
    }

// BUSCADOR MED
    $(res_add_med());

    function res_add_med(nombre_med)
    {
        $.ajax({
            url : 'db/buscar.php',
            type : 'POST',
            dataType : 'html',
            data : { nombre_med: nombre_med },
            })

        .done(function(resultado){
            $("#tabla_res_add_med").html(resultado);
        })
    }

    $(document).on('keyup', '#buscar_med', function()
    {
        var valorBusqueda=$(this).val();
        if (valorBusqueda!="")
        {
            res_add_med(valorBusqueda);
        }
        else
            {
                res_add_med();
            }
    });

        function cargar_add_med(id_med){ 
        var id_med = id_med;
        $.ajax({  
                url:"db/fetch.php",  
                method:"POST",  
                data:{id_med:id_med},  
                dataType:"json",  
                success:function(data){  
                    $('#id_med').val(data.id);
                    $('#nombre_med').val(data.nombrecomercial);
                    $('#presentacion_med').val(data.presentacion);
                    $('#envoltura').val(data.envoltura);
                    $('#ingrediente').val(data.ingrediente);
                    $('#concentracion').val(data.concentracion);
                    $('#unidad').val(data.unidad);
                    $('#tabla_res_add_med').html('');

           }
       });
        return false;
    }
// BUSCADOR MED
function imc(){
  
    var peso=parseInt($('#peso').val());
    var talla=parseInt($('#talla').val());
    var tallac=(talla*talla)/10000;
    var imc=peso/tallac;
    $('#imc').val(imc);

}
</script>

<!-- Modal -->
<div id="catHonorarios" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Catalogo de Honorarios</h4><br>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form id="form_catHonorarios">
            <div class="row">
                <input type="text" name="id_concepto" hidden="false">
                <div class="col-md-8">
                    <label>Concepto</label>
                    <input type="text" name="concepto" id="concepto" class="form-control" placeholder="Esciba un concepto">
                </div>
                <div class="col-md-4">
                    <label>Total</label>
                    <input type="text" name="total" id="total" class="form-control" placeholder="Escriba el total">
                    <br>
                    <a href="javascript:guardarConceptos();" class="btn btn-success" style="float: left;">Gurdar Concepto</a>
                </div>                
            </div>
                    <div >
                        
                        
                    </div>

            <div id="tabla_conceptos"></div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div id="add_med_mdedicamento" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregar Medicamentos</h4><br>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

        <div class="input-group" style="position: relative;">
            <input type="text" class="form-control" name="buscar_med" id="buscar_med" placeholder="Buscar Medicamento" >
          
          </div>
          <div id="tabla_res_add_med" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div>
          <br>
          <form id="form_medicamentos">
              <input type="text" name="id_med" id="id_med" hidden="false">
              <a href="javascript:limpiar_med();" class="btn btn-info"> <i class="fa fa-plus"></i>Nuevo</a>
              <div class="row">
                <div class="col-md-4 col-xs-12">
                  <label>Nombre</label>
                  <input type="text" name="nombre_med" id="nombre_med" class="form-control" placeholder="Nombre del Medicamento">
                </div>

                <div class="col-md-4 col-xs-12">
                  <label>Presentación</label>
                  <input type="text" name="presentacion_med" id="presentacion_med" class="form-control" placeholder="Presentación">
                </div>

                <div class="col-md-4  col-xs-12">
                    <label>Envoltura</label>
                    <input type="text" name="envoltura" id="envoltura" class="form-control" placeholder="Envoltura">
                  </div>

                  <div class="col-md-4  col-xs-12">
                    <label>Ingrediente</label>
                    <input type="text" name="ingrediente" id="ingrediente" class="form-control" placeholder="Ingrediente">
                  </div>
                  <div class="col-md-4 col-xs-12">
                    <label>Concentración</label>
                    <input type="text" name="concentracion" id="concentracion" class="form-control" placeholder="Concentración">
                  </div>

                  <div class="col-md-4 col-xs-12">
                    <label>Unidad</label>
                    <input type="text" name="unidad" id="unidad" class="form-control" placeholder="Unidad">
                  </div>
                <div class="col-md-4 col-xs-12">
                  <br>
                  <a href="javascript:add_med();" class="btn btn-success" style="width: 100%;"><i class="fa fa-save" ></i>&nbsp;Guardar</a>
                </div>
              </div>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>


            





