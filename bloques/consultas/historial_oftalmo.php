 <?php
//error_reporting(0);
session_start();
extract($_GET);
$id_doctor=$_SESSION['id_usuario'];
$id_pac_get=$_SESSION['id_pac_get'];

	# conectare la base de datos
include '../../conexion.php';
if ( !isset($pdo) ) {
    $pdo = connect(); 
}

$id_doctor=$_SESSION['id_usuario'];


    $sql = "SELECT * FROM doctor where id_doctor=$id_doctor";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $row_doc) 
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

    $sql = "SELECT * FROM especialidades where id_especialidad=$id_especialidad";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $row_esp) 
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
		$sql   = "SELECT count(*) AS numrows FROM historial_clinico where id_doctor=$id_doctor and id_paciente=$id_pac_get and activo=1 ORDER BY id DESC";
        $query = $pdo->prepare($sql);
        $query->execute();
        $row= $query->rowCount();
        $list = $query->fetchAll();
		if ($row > 0)
        {
            $numrows = $list[0]['numrows'];
        }
		$total_pages = ceil($numrows/$per_page);
		$reload = 'index.php';
		//consulta principal para recuperar los datos
		$sql = "SELECT * FROM historial_clinico where id_doctor=$id_doctor and id_paciente=$id_pac_get and activo=1 ORDER BY id DESC LIMIT $offset,$per_page ";
        $query->execute();
        $row= $query->rowCount();
		if ($numrows > 0)
        {
		
			?>
<div class="">
	<?php
	$list = $query->fetchAll();
	foreach ($list as $row) 
    {
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

                                            <h3>Ant. Oftalmologico</h3>
                                            <textarea class="form-control" name="exploracion" id="txt_exploracion" rows="5"><?php echo $row['exploracion'];?></textarea><br>

                                        <?php endif ?> 

                                        <?php if ($id_signos_vitales==1): ?> 
                                                                                       <div class="table-responsive">
                                              <table class="table">
                                                <table class="table">
                                                  <thead>
                                                    <tr class="btn-info">
                                                      <td></td>
                                                      <td>AV SC</td>
                                                      <td>(.)</td>
                                                      <td>AV CC</td>
                                                      <td>TIO</td>
                                                      <td>Exc. NO</td>
                                                      <td>Esfera</td>
                                                      <td>Cilindro</td>
                                                      <td>Grados</td>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                      <td>OD</td>
                                      <td>
                                        <select id="od1" name="od1" class="form-control">
                                          <option value="<?php echo $row['od1'];?>">﻿<?php echo $row['od1'];?></option>
                                          <option value="20/20">20/20</option>
                                          <option value="20/25">20/25</option>
                                          <option value="20/30">20/30</option>
                                          <option value="20/40">20/40</option>
                                          <option value="20/50">20/50</option>
                                          <option value="20/70">20/70</option>
                                          <option value="20/100">20/100</option>
                                          <option value="20/150">20/150</option>
                                          <option value="20/200">20/200</option>
                                          <option value="20/400">20/400</option>
                                          <option value="cd a 1 mts">cd a 1 mts</option>
                                          <option value="cd a 2 mts">cd a 2 mts</option>
                                          <option value="cd a 3 mts">cd a 3 mts</option>
                                          <option value="PL">PL</option>
                                          <option value="PLDC">PLDC</option>
                                          <option value="NPL">NPL</option>
                                      </select></td>

                                      <td><select id="od2" name="od2" class="form-control">
                                          <option value="<?php echo $row['od2'];?>">﻿<?php echo $row['od2'];?></option>
                                          <option value="20/20">20/20</option>
                                          <option value="20/25">20/25</option>
                                          <option value="20/30">20/30</option>
                                          <option value="20/40">20/40</option>
                                          <option value="20/50">20/50</option>
                                          <option value="20/70">20/70</option>
                                          <option value="20/100">20/100</option>
                                          <option value="20/150">20/150</option>
                                          <option value="20/200">20/200</option>
                                          <option value="20/400">20/400</option>
                                          <option value="cd a 1 mts">cd a 1 mts</option>
                                          <option value="cd a 2 mts">cd a 2 mts</option>
                                          <option value="cd a 3 mts">cd a 3 mts</option>
                                          <option value="PL">PL</option>
                                          <option value="PLDC">PLDC</option>
                                          <option value="NPL">NPL</option>
                                      </select></td>

                                      <td><select name="od3" class="form-control" id="od3">
                                          <option value="<?php echo $row['od3'];?>">﻿<?php echo $row['od3'];?></option>
                                          <option value="20/20">20/20</option>
                                          <option value="20/25">20/25</option>
                                          <option value="20/30">20/30</option>
                                          <option value="20/40">20/40</option>
                                          <option value="20/50">20/50</option>
                                          <option value="20/70">20/70</option>
                                          <option value="20/100">20/100</option>
                                          <option value="20/150">20/150</option>
                                          <option value="20/200">20/200</option>
                                          <option value="20/400">20/400</option>
                                          <option value="cd a 1 mts">cd a 1 mts</option>
                                          <option value="cd a 2 mts">cd a 2 mts</option>
                                          <option value="cd a 3 mts">cd a 3 mts</option>
                                          <option value="PL">PL</option>
                                          <option value="PLDC">PLDC</option>
                                          <option value="NPL">NPL</option>
                                      </select></td>

                                      <td><select id="od4" name="od4" class="form-control">
                                            <option value="<?php echo $row['od4'];?>">﻿<?php echo $row['od4'];?></option>
                                            <option value="0">0</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="35">35</option>
                                            <option value="40">40</option>
                                            <option value="45">45</option>
                                            <option value="50">50</option>
                                            <option value="50">50</option>
                                            <option value="55">55</option>
                                            <option value="60">60</option>
                                            <option value="65">65</option>
                                            <option value="70">70</option>
                                            <option value="75">75</option>
                                            
                                        </select></td>


                                      <td>
                                        <select id="od5" name="od5" class="form-control">
                                            <option value="<?php echo $row['od5'];?>">﻿<?php echo $row['od5'];?></option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="100">100</option>
                                            
                                        </select>
                                      </td>

                                      <td><select id="od6" name="od6" class="form-control">
                                            <option value="<?php echo $row['od6'];?>">﻿<?php echo $row['od6'];?></option>
                                            <option value="-5.00">-5.00</option>
                                            <option value="-4.75">-4.75</option>
                                            <option value="-4.50">-4.50</option>
                                            <option value="-4.25">-4.25</option>
                                            <option value="-4.OO">-4.OO</option>
                                            <option value="-3.75">-3.75</option>
                                            <option value="-3.50">-3.50</option>
                                            <option value="-3.25">-3.25</option>
                                            <option value="-3.00">-3.00</option>
                                            <option value="-2.75">-2.75</option>
                                            <option value="-2.50">-2.50</option>
                                            <option value="-2.25">-2.25</option>
                                            <option value="-2.00">-2.00</option>
                                            <option value="-1.75">-1.75</option>
                                            <option value="-1.50">-1.50</option>
                                            <option value="-1.25">-1.25</option>
                                            <option value="-1.00">-1.00</option>
                                            
                                        </select>
                                    </td>

                                    <td><select id="od7" name="od7" class="form-control">
                                            <option value="<?php echo $row['od7'];?>">﻿<?php echo $row['od7'];?></option>
                                            <option value="-0.25">-0.25</option>
                                            <option value="-0.50">-0.50</option>
                                            <option value="-0.75">-0.75</option>
                                            <option value="-1.00">-1.00</option>
                                            <option value="-1.25">-1.25</option>
                                            <option value="-1.50">-1.50</option>
                                            <option value="-1.75">-1.75</option>
                                            <option value="-2.00">-2.00</option>
                                            <option value="-2.25">-2.25</option>
                                            <option value="-2.50">-2.50</option>
                                            <option value="-2.75">-2.75</option>
                                            <option value="-3.00">-3.00</option>
                                            <option value="-3.25">-3.25</option>
                                            <option value="-3.50">-3.50</option>
                                            <option value="-3.75">-3.75</option>
                                            <option value="-4.00">-4.00</option>
                                            
                                        </select>
                                      </td>

                                    <td>
                                      <select id="od8" name="od8" class="form-control">
                                          <option value="<?php echo $row['od8'];?>">﻿<?php echo $row['od8'];?></option>
                                          <option value="0">0</option>
                                          <option value="5">5</option>
                                          <option value="10">10</option>
                                          <option value="15">15</option>
                                          <option value="20">20</option>
                                          <option value="25">25</option>
                                          <option value="30">30</option>
                                          <option value="35">35</option>
                                          <option value="40">40</option>
                                          <option value="45">45</option>
                                          <option value="50">50</option>
                                          <option value="50">50</option>
                                          <option value="55">55</option>
                                          <option value="60">60</option>
                                          <option value="65">65</option>
                                          <option value="70">70</option>
                                          <option value="75">75</option>
                                          
                                      </select>

                                    </td>

                                    </tr>


                                    <tr>
                                      <td>OI</td>
                                      <td><select id="oi1" name="oi1" class="form-control">
                                          <option value="<?php echo $row['oi1'];?>">﻿<?php echo $row['oi1'];?></option>
                                          <option value="20/20">20/20</option>
                                          <option value="20/25">20/25</option>
                                          <option value="20/30">20/30</option>
                                          <option value="20/40">20/40</option>
                                          <option value="20/50">20/50</option>
                                          <option value="20/70">20/70</option>
                                          <option value="20/100">20/100</option>
                                          <option value="20/150">20/150</option>
                                          <option value="20/200">20/200</option>
                                          <option value="20/400">20/400</option>
                                          <option value="cd a 1 mts">cd a 1 mts</option>
                                          <option value="cd a 2 mts">cd a 2 mts</option>
                                          <option value="cd a 3 mts">cd a 3 mts</option>
                                          <option value="PL">PL</option>
                                          <option value="PLDC">PLDC</option>
                                          <option value="NPL">NPL</option>
                                      </select>
                                      </td>

                                      <td><select id="oi2" name="oi2" class="form-control">
                                          <option value="<?php echo $row['oi2'];?>">﻿<?php echo $row['oi2'];?></option>
                                          <option value="20/20">20/20</option>
                                          <option value="20/25">20/25</option>
                                          <option value="20/30">20/30</option>
                                          <option value="20/40">20/40</option>
                                          <option value="20/50">20/50</option>
                                          <option value="20/70">20/70</option>
                                          <option value="20/100">20/100</option>
                                          <option value="20/150">20/150</option>
                                          <option value="20/200">20/200</option>
                                          <option value="20/400">20/400</option>
                                          <option value="cd a 1 mts">cd a 1 mts</option>
                                          <option value="cd a 2 mts">cd a 2 mts</option>
                                          <option value="cd a 3 mts">cd a 3 mts</option>
                                          <option value="PL">PL</option>
                                          <option value="PLDC">PLDC</option>
                                          <option value="NPL">NPL</option>
                                      </select></td>

                                      <td><select name="oi3" class="form-control" id="oi3">
                                          <option value="<?php echo $row['oi3'];?>">﻿<?php echo $row['oi3'];?></option>
                                          <option value="20/20">20/20</option>
                                          <option value="20/25">20/25</option>
                                          <option value="20/30">20/30</option>
                                          <option value="20/40">20/40</option>
                                          <option value="20/50">20/50</option>
                                          <option value="20/70">20/70</option>
                                          <option value="20/100">20/100</option>
                                          <option value="20/150">20/150</option>
                                          <option value="20/200">20/200</option>
                                          <option value="20/400">20/400</option>
                                          <option value="cd a 1 mts">cd a 1 mts</option>
                                          <option value="cd a 2 mts">cd a 2 mts</option>
                                          <option value="cd a 3 mts">cd a 3 mts</option>
                                          <option value="PL">PL</option>
                                          <option value="PLDC">PLDC</option>
                                          <option value="NPL">NPL</option>
                                      </select></td>

                                      <td><select id="oi4" name="oi4" class="form-control">
                                            <option value="<?php echo $row['oi4'];?>">﻿<?php echo $row['oi4'];?></option>
                                            <option value="0">0</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="35">35</option>
                                            <option value="40">40</option>
                                            <option value="45">45</option>
                                            <option value="50">50</option>
                                            <option value="50">50</option>
                                            <option value="55">55</option>
                                            <option value="60">60</option>
                                            <option value="65">65</option>
                                            <option value="70">70</option>
                                            <option value="75">75</option>
                                            
                                        </select></td>


                                      <td><select id="oi5" name="oi5" class="form-control">
                                            <option value="<?php echo $row['oi5'];?>">﻿<?php echo $row['oi5'];?></option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="100">100</option>
                                            
                                        </select>
                                    </td>

                                    <td><select id="oi6" name="oi6" class="form-control">
                                            <option value="<?php echo $row['oi6'];?>">﻿<?php echo $row['oi6'];?></option>
                                            <option value="-5.00">-5.00</option>
                                            <option value="-4.75">-4.75</option>
                                            <option value="-4.50">-4.50</option>
                                            <option value="-4.25">-4.25</option>
                                            <option value="-4.OO">-4.OO</option>
                                            <option value="-3.75">-3.75</option>
                                            <option value="-3.50">-3.50</option>
                                            <option value="-3.25">-3.25</option>
                                            <option value="-3.00">-3.00</option>
                                            <option value="-2.75">-2.75</option>
                                            <option value="-2.50">-2.50</option>
                                            <option value="-2.25">-2.25</option>
                                            <option value="-2.00">-2.00</option>
                                            <option value="-1.75">-1.75</option>
                                            <option value="-1.50">-1.50</option>
                                            <option value="-1.25">-1.25</option>
                                            <option value="-1.00">-1.00</option>
                                            
                                        </select>
                                    </td>

                                    <td><select id="oi7" name="oi7" class="form-control">
                                            <option value="<?php echo $row['oi7'];?>">﻿<?php echo $row['oi7'];?></option>
                                            <option value="-0.25">-0.25</option>
                                            <option value="-0.50">-0.50</option>
                                            <option value="-0.75">-0.75</option>
                                            <option value="-1.00">-1.00</option>
                                            <option value="-1.25">-1.25</option>
                                            <option value="-1.50">-1.50</option>
                                            <option value="-1.75">-1.75</option>
                                            <option value="-2.00">-2.00</option>
                                            <option value="-2.25">-2.25</option>
                                            <option value="-2.50">-2.50</option>
                                            <option value="-2.75">-2.75</option>
                                            <option value="-3.00">-3.00</option>
                                            <option value="-3.25">-3.25</option>
                                            <option value="-3.50">-3.50</option>
                                            <option value="-3.75">-3.75</option>
                                            <option value="-4.00">-4.00</option>
                                            
                                        </select>
                                      </td>

                                    <td>
                                      <select id="oi8" name="oi8" class="form-control">
                                          <option value="<?php echo $row['oi8'];?>">﻿<?php echo $row['oi8'];?></option>
                                          <option value="0">0</option>
                                          <option value="5">5</option>
                                          <option value="10">10</option>
                                          <option value="15">15</option>
                                          <option value="20">20</option>
                                          <option value="25">25</option>
                                          <option value="30">30</option>
                                          <option value="35">35</option>
                                          <option value="40">40</option>
                                          <option value="45">45</option>
                                          <option value="50">50</option>
                                          <option value="50">50</option>
                                          <option value="55">55</option>
                                          <option value="60">60</option>
                                          <option value="65">65</option>
                                          <option value="70">70</option>
                                          <option value="75">75</option>
                                          
                                      </select>

                                    </td>

                                                    
                                                  </tbody>
                                                </table>
                                              </table>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"> 
                                                <label>OD</label>         
                                                    <textarea class="form-control" name="od" id="od" rows="5"> <?php echo $row['od']; ?></textarea>
                                                </div>
                                                <div class="col-md-6"> 
                                                <label>OI</label>         
                                                    <textarea class="form-control" name="oi" id="oi" rows="5"> <?php echo $row['oi']; ?></textarea>
                                                </div>
                                            </div>
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
                                            <a href="javascript:guardarHistorial();" class="btn btn-success" id="btn_guardar_h" style="float: right; cursor: pointer;">Guardar Consulta</a>
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
                        $sql="SELECT * FROM historial_clinico where id_doctor=$id_doctor and id_paciente=$id_paciente and activo=1";
                        $query = $pdo->prepare($sql);
                        $query->execute();
                        $list = $query->fetchAll();
                        foreach ($list as $res_fecha) {
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
            <h3>Ant. Oftalmologico</h3>
            <textarea class="form-control" name="exploracion" id="txt_exploracion" rows="5"></textarea><br>
<?php endif ?> 

<?php if ($id_signos_vitales==1): ?> 

                                                    <div class="table-responsive">
                                              <table class="table">
                                                <table class="table">
                                                  <caption>List of users</caption>
                                                  <thead>
                                                    <tr class="btn-info">
                                                      <td></td>
                                                      <td>AV SC</td>
                                                      <td>(.)</td>
                                                      <td>AV CC</td>
                                                      <td>TIO</td>
                                                      <td>Exc. NO</td>
                                                      <td>Esfera</td>
                                                      <td>Cilindro</td>
                                                      <td>Grados</td>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                      <td>OD</td>
                                      <td>
                                        <select id="od1" name="od1" class="form-control">
                                          <option value="">﻿</option>
                                          <option value="20/20">20/20</option>
                                          <option value="20/25">20/25</option>
                                          <option value="20/30">20/30</option>
                                          <option value="20/40">20/40</option>
                                          <option value="20/50">20/50</option>
                                          <option value="20/70">20/70</option>
                                          <option value="20/100">20/100</option>
                                          <option value="20/150">20/150</option>
                                          <option value="20/200">20/200</option>
                                          <option value="20/400">20/400</option>
                                          <option value="cd a 1 mts">cd a 1 mts</option>
                                          <option value="cd a 2 mts">cd a 2 mts</option>
                                          <option value="cd a 3 mts">cd a 3 mts</option>
                                          <option value="PL">PL</option>
                                          <option value="PLDC">PLDC</option>
                                          <option value="NPL">NPL</option>
                                      </select></td>

                                      <td><select id="od2" name="od2" class="form-control">
                                          <option value="">﻿</option>
                                          <option value="20/20">20/20</option>
                                          <option value="20/25">20/25</option>
                                          <option value="20/30">20/30</option>
                                          <option value="20/40">20/40</option>
                                          <option value="20/50">20/50</option>
                                          <option value="20/70">20/70</option>
                                          <option value="20/100">20/100</option>
                                          <option value="20/150">20/150</option>
                                          <option value="20/200">20/200</option>
                                          <option value="20/400">20/400</option>
                                          <option value="cd a 1 mts">cd a 1 mts</option>
                                          <option value="cd a 2 mts">cd a 2 mts</option>
                                          <option value="cd a 3 mts">cd a 3 mts</option>
                                          <option value="PL">PL</option>
                                          <option value="PLDC">PLDC</option>
                                          <option value="NPL">NPL</option>
                                      </select></td>

                                      <td><select name="od3" class="form-control" id="od3">
                                          <option value="">﻿</option>
                                          <option value="20/20">20/20</option>
                                          <option value="20/25">20/25</option>
                                          <option value="20/30">20/30</option>
                                          <option value="20/40">20/40</option>
                                          <option value="20/50">20/50</option>
                                          <option value="20/70">20/70</option>
                                          <option value="20/100">20/100</option>
                                          <option value="20/150">20/150</option>
                                          <option value="20/200">20/200</option>
                                          <option value="20/400">20/400</option>
                                          <option value="cd a 1 mts">cd a 1 mts</option>
                                          <option value="cd a 2 mts">cd a 2 mts</option>
                                          <option value="cd a 3 mts">cd a 3 mts</option>
                                          <option value="PL">PL</option>
                                          <option value="PLDC">PLDC</option>
                                          <option value="NPL">NPL</option>
                                      </select></td>

                                      <td><select id="txt_od4" name="od4" class="form-control">
                                            <option value="">﻿</option>
                                            <option value="0">0</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="35">35</option>
                                            <option value="40">40</option>
                                            <option value="45">45</option>
                                            <option value="50">50</option>
                                            <option value="50">50</option>
                                            <option value="55">55</option>
                                            <option value="60">60</option>
                                            <option value="65">65</option>
                                            <option value="70">70</option>
                                            <option value="75">75</option>
                                            
                                        </select></td>


                                      <td>
                                        <select id="od5" name="od5" class="form-control">
                                            <option value="">﻿</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="100">100</option>
                                            
                                        </select>
                                      </td>

                                      <td><select id="od6" name="od6" class="form-control">
                                            <option value="">﻿</option>
                                            <option value="-5.00">-5.00</option>
                                            <option value="-4.75">-4.75</option>
                                            <option value="-4.50">-4.50</option>
                                            <option value="-4.25">-4.25</option>
                                            <option value="-4.OO">-4.OO</option>
                                            <option value="-3.75">-3.75</option>
                                            <option value="-3.50">-3.50</option>
                                            <option value="-3.25">-3.25</option>
                                            <option value="-3.00">-3.00</option>
                                            <option value="-2.75">-2.75</option>
                                            <option value="-2.50">-2.50</option>
                                            <option value="-2.25">-2.25</option>
                                            <option value="-2.00">-2.00</option>
                                            <option value="-1.75">-1.75</option>
                                            <option value="-1.50">-1.50</option>
                                            <option value="-1.25">-1.25</option>
                                            <option value="-1.00">-1.00</option>
                                            
                                        </select>
                                    </td>

                                    <td><select id="od7" name="od7" class="form-control">
                                            <option value="">﻿</option>
                                            <option value="-0.25">-0.25</option>
                                            <option value="-0.50">-0.50</option>
                                            <option value="-0.75">-0.75</option>
                                            <option value="-1.00">-1.00</option>
                                            <option value="-1.25">-1.25</option>
                                            <option value="-1.50">-1.50</option>
                                            <option value="-1.75">-1.75</option>
                                            <option value="-2.00">-2.00</option>
                                            <option value="-2.25">-2.25</option>
                                            <option value="-2.50">-2.50</option>
                                            <option value="-2.75">-2.75</option>
                                            <option value="-3.00">-3.00</option>
                                            <option value="-3.25">-3.25</option>
                                            <option value="-3.50">-3.50</option>
                                            <option value="-3.75">-3.75</option>
                                            <option value="-4.00">-4.00</option>
                                            
                                        </select>
                                      </td>

                                    <td>
                                      <select id="od8" name="od8" class="form-control">
                                          <option value="">﻿</option>
                                          <option value="0">0</option>
                                          <option value="5">5</option>
                                          <option value="10">10</option>
                                          <option value="15">15</option>
                                          <option value="20">20</option>
                                          <option value="25">25</option>
                                          <option value="30">30</option>
                                          <option value="35">35</option>
                                          <option value="40">40</option>
                                          <option value="45">45</option>
                                          <option value="50">50</option>
                                          <option value="50">50</option>
                                          <option value="55">55</option>
                                          <option value="60">60</option>
                                          <option value="65">65</option>
                                          <option value="70">70</option>
                                          <option value="75">75</option>
                                          
                                      </select>

                                    </td>

                                    </tr>


                                    <tr>
                                      <td>OI</td>
                                      <td><select id="oi1" name="oi1" class="form-control">
                                          <option value="">﻿</option>
                                          <option value="20/20">20/20</option>
                                          <option value="20/25">20/25</option>
                                          <option value="20/30">20/30</option>
                                          <option value="20/40">20/40</option>
                                          <option value="20/50">20/50</option>
                                          <option value="20/70">20/70</option>
                                          <option value="20/100">20/100</option>
                                          <option value="20/150">20/150</option>
                                          <option value="20/200">20/200</option>
                                          <option value="20/400">20/400</option>
                                          <option value="cd a 1 mts">cd a 1 mts</option>
                                          <option value="cd a 2 mts">cd a 2 mts</option>
                                          <option value="cd a 3 mts">cd a 3 mts</option>
                                          <option value="PL">PL</option>
                                          <option value="PLDC">PLDC</option>
                                          <option value="NPL">NPL</option>
                                      </select>
                                      </td>

                                      <td><select id="oi2" name="oi2" class="form-control">
                                          <option value="">﻿</option>
                                          <option value="20/20">20/20</option>
                                          <option value="20/25">20/25</option>
                                          <option value="20/30">20/30</option>
                                          <option value="20/40">20/40</option>
                                          <option value="20/50">20/50</option>
                                          <option value="20/70">20/70</option>
                                          <option value="20/100">20/100</option>
                                          <option value="20/150">20/150</option>
                                          <option value="20/200">20/200</option>
                                          <option value="20/400">20/400</option>
                                          <option value="cd a 1 mts">cd a 1 mts</option>
                                          <option value="cd a 2 mts">cd a 2 mts</option>
                                          <option value="cd a 3 mts">cd a 3 mts</option>
                                          <option value="PL">PL</option>
                                          <option value="PLDC">PLDC</option>
                                          <option value="NPL">NPL</option>
                                      </select></td>

                                      <td><select name="oi3" class="form-control" id="oi3">
                                          <option value="">﻿</option>
                                          <option value="20/20">20/20</option>
                                          <option value="20/25">20/25</option>
                                          <option value="20/30">20/30</option>
                                          <option value="20/40">20/40</option>
                                          <option value="20/50">20/50</option>
                                          <option value="20/70">20/70</option>
                                          <option value="20/100">20/100</option>
                                          <option value="20/150">20/150</option>
                                          <option value="20/200">20/200</option>
                                          <option value="20/400">20/400</option>
                                          <option value="cd a 1 mts">cd a 1 mts</option>
                                          <option value="cd a 2 mts">cd a 2 mts</option>
                                          <option value="cd a 3 mts">cd a 3 mts</option>
                                          <option value="PL">PL</option>
                                          <option value="PLDC">PLDC</option>
                                          <option value="NPL">NPL</option>
                                      </select></td>

                                      <td><select id="oi4" name="oi4" class="form-control">
                                            <option value="">﻿</option>
                                            <option value="0">0</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="35">35</option>
                                            <option value="40">40</option>
                                            <option value="45">45</option>
                                            <option value="50">50</option>
                                            <option value="50">50</option>
                                            <option value="55">55</option>
                                            <option value="60">60</option>
                                            <option value="65">65</option>
                                            <option value="70">70</option>
                                            <option value="75">75</option>
                                            
                                        </select></td>


                                      <td><select id="oi5" name="oi5" class="form-control">
                                            <option value="">﻿</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="100">100</option>
                                            
                                        </select>
                                    </td>

                                    <td><select id="oi6" name="oi6" class="form-control">
                                            <option value="">﻿</option>
                                            <option value="-5.00">-5.00</option>
                                            <option value="-4.75">-4.75</option>
                                            <option value="-4.50">-4.50</option>
                                            <option value="-4.25">-4.25</option>
                                            <option value="-4.OO">-4.OO</option>
                                            <option value="-3.75">-3.75</option>
                                            <option value="-3.50">-3.50</option>
                                            <option value="-3.25">-3.25</option>
                                            <option value="-3.00">-3.00</option>
                                            <option value="-2.75">-2.75</option>
                                            <option value="-2.50">-2.50</option>
                                            <option value="-2.25">-2.25</option>
                                            <option value="-2.00">-2.00</option>
                                            <option value="-1.75">-1.75</option>
                                            <option value="-1.50">-1.50</option>
                                            <option value="-1.25">-1.25</option>
                                            <option value="-1.00">-1.00</option>
                                            
                                        </select>
                                    </td>

                                    <td><select id="oi7" name="oi7" class="form-control">
                                            <option value="">﻿</option>
                                            <option value="-0.25">-0.25</option>
                                            <option value="-0.50">-0.50</option>
                                            <option value="-0.75">-0.75</option>
                                            <option value="-1.00">-1.00</option>
                                            <option value="-1.25">-1.25</option>
                                            <option value="-1.50">-1.50</option>
                                            <option value="-1.75">-1.75</option>
                                            <option value="-2.00">-2.00</option>
                                            <option value="-2.25">-2.25</option>
                                            <option value="-2.50">-2.50</option>
                                            <option value="-2.75">-2.75</option>
                                            <option value="-3.00">-3.00</option>
                                            <option value="-3.25">-3.25</option>
                                            <option value="-3.50">-3.50</option>
                                            <option value="-3.75">-3.75</option>
                                            <option value="-4.00">-4.00</option>
                                            
                                        </select>
                                      </td>

                                    <td>
                                      <select id="oi8" name="oi8" class="form-control">
                                          <option value="">﻿</option>
                                          <option value="0">0</option>
                                          <option value="5">5</option>
                                          <option value="10">10</option>
                                          <option value="15">15</option>
                                          <option value="20">20</option>
                                          <option value="25">25</option>
                                          <option value="30">30</option>
                                          <option value="35">35</option>
                                          <option value="40">40</option>
                                          <option value="45">45</option>
                                          <option value="50">50</option>
                                          <option value="50">50</option>
                                          <option value="55">55</option>
                                          <option value="60">60</option>
                                          <option value="65">65</option>
                                          <option value="70">70</option>
                                           <option value="75">75</option>
                                          
                                      </select>

                                    </td>

                                                    
                                                  </tbody>
                                                </table>
                                              </table>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"> 
                                                <label>OD</label>         
                                                    <textarea class="form-control" name="od" rows="5"> <?php echo $row['od']; ?></textarea>
                                                </div>
                                                <div class="col-md-6"> 
                                                <label>OI</label>         
                                                    <textarea class="form-control" name="oi" rows="5"> <?php echo $row['oi']; ?></textarea>
                                                </div>
                                            </div>
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
                <a href="javascript:guardarHistorial();" class="btn btn-success" id="btn_guardar_h" style="float: right; cursor: pointer;">Guardar Consulta</a>
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
                    /*
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
                    $('#txt_recetas').val(r.receta);*/

                    console.log("VALORES:", r);
                    document.getElementById("id_historial").value = r.id;
                    document.getElementById("txt_padecimiento").value = r.padecimiento;
                    if (document.getElementById("txt_exploracion") ){
                        document.getElementById("txt_exploracion").value = r.exploracion;
                    }
                    if (document.getElementById("txt_gabinete")) {
                        document.getElementById("txt_gabinete").value = r.gabinete;
                    } 
                    document.getElementById("fecha").value = r.fecha;
                    document.getElementById("temperatura").value = r.temperatura;
                    document.getElementById("peso").value = r.peso;
                    document.getElementById("talla").value = r.talla;
                    document.getElementById("fc").value = r.fc;
                    document.getElementById("fr").value = r.fr;
                    document.getElementById("imc").value = r.imc;
                    document.getElementById("fur").value = r.fur;
                    document.getElementById("semanas").value = r.semanas;
                    if (document.getElementById("receta")) {
                        document.getElementById("receta").value = r.receta;
                    }
                    document.getElementById("txt_diagnosticos").value = r.diagnostico;
                    document.getElementById("txt_recetas").value = r.receta;
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
