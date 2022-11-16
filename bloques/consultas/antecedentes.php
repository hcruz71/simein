<?php
  //error_reporting(0);

	$sql = "SELECT id, ant_hf, ant_pp, ant_np, ant_go, ant_otros, alergicos FROM antecedentes where id_doctor=$id_doctor and id_Paciente=$id_paciente";
	$query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $res_ant_echo) {
	//while($res_ant_echo = $resultado_doc->fetch_assoc()){
		$id=$res_ant_echo['id'];
		$ant_hf=$res_ant_echo['ant_hf'];
		$ant_pp=$res_ant_echo['ant_pp'];
		$ant_np=$res_ant_echo['ant_np'];
		$ant_go=$res_ant_echo['ant_go'];
		$ant_otros=$res_ant_echo['ant_otros'];
		$alergicos=$res_ant_echo['alergicos'];
	}      
?>

   		<div class="card">
            <div class="card-header" id="headingTwo">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseAntecedentes" aria-expanded="false" aria-controls="collapseHonorarios">
                    <h3 class="mb-0"><i class="fa fa-file"></i>&nbsp;&nbsp;Antecedentes</h3>
                </button>
            </div>
			<div id="collapseAntecedentes" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				<div class="card-body">
					<form id="form_ant">
						<div class="">
						<div class="">
								<input type="text" name="id_ant" class="id" style="visibility: hidden;" value="<?php echo $id; ?>">
						</div>
						<div class="panel-body">
								<?php if ($id_alergicos==1): ?>
								<!-- ALERGIAS-->
									<div class="col-md-12">
										<br>
										<h3 >Alergias</h3>
										<div>
											<form id="form_add_ant_alergias" >
												<div class="input-group">
													<div class="input-group">
														<input type="text" class="form-control" id="add_ant_alergicos" name="add_ant_alergicos" placeholder="Escribe antecedentes aquí..."/>
														<a href="javascript:agregarALERGICOS();" class="input-group-addon btn btn-primary">
															<i class="fa fa-upload"></i>
														</a>
													</div>
												</div>
											</form>
										</div>
											<div id="tabla_res_alergias" class="col-md-11" style="position: absolute ; z-index: 1000; font-size: 18px;"></div><br>
											<textarea class="form-control" id="ant_alergicos" name="ant_alergicos" rows="5" onkeyup="guardarAnt()" placeholder="Alergias"><?php echo $alergicos; ?></textarea> 
											
									</div><!--//ALERGIAS-->
								<?php endif ?>

								<?php if ($id_hf==1): ?>
									<!-- ANT HEREDO-FAM-->
									<div class="col-md-12">
										<br>
										<h3 >Heredo-familiares</h3>
										<div>
											<form id="form_add_ant_hf" onkeypress="return event.keyCode != 13">
												<div class="input-group">
													<input type="text" class="form-control" id="add_listado" name="add_ant_hf" placeholder="Escribe antecedentes aquí..." >
													<a href="javascript:agregarHF();" class="input-group-addon btn btn-primary">
														<i class="fa fa-upload"></i>
													</a>
												</div>
											</form>
											<div id="tabla_res_hf" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div><br>
										</div>
										<textarea class="form-control" id="ant_hf" name="ant_hf" rows="5" onkeyup="guardarAnt()"placeholder="Heredo-familiares"><?php echo $ant_hf; ?></textarea>
									</div><!-- //ANT HEREDO-FAM-->	
								<?php endif ?>

								<?php if ($id_pp==1): ?>
									<!-- ANT PERSONAL PAT-->
									<div class="col-md-12">
										<br>
										<h3 ></em>Personales Patológicos</h3>
										<div>
											<form id="form_add_ant_pp" onkeypress="return event.keyCode != 13">
												<div class="input-group">
													<input type="text" class="form-control" id="add_ant_pp" name="add_ant_pp" placeholder="Escribe antecedentes aquí..." onclick="editarAntecedentes()">
													<a href="javascript:agregarPP();" class="input-group-addon btn btn-primary">
														<i class="fa fa-upload"></i>
													</a>
												</div>
											</form>
											<div id="tabla_res_ant_pp" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div><br>
										</div>
										<textarea class="form-control" id="ant_pp" name="ant_pp" rows="5" onkeyup="guardarAnt()" placeholder="Personales Patológicos"><?php echo $ant_pp; ?></textarea>
									</div><!-- //ANT PERSONAL PAT-->
								<?php endif ?>

								<?php if ($id_np==1): ?>
								<!-- ANT NO PAT-->
								<div class="col-md-12">
									<br>
									<h3 >Personales no Patológicos</h3>
									<div >
										<form id="form_add_ant_np" onkeypress="return event.keyCode != 13">
											<div class="input-group">
												<input type="text" class="form-control" id="add_ant_np" name="add_ant_np" placeholder="Escribe antecedentes aquí...">
													<a href="javascript:agregarNP();" class="input-group-addon btn btn-primary">
														<i class="fa fa-upload"></i>
													</a>
											</div>
										</form>
										<div id="tabla_res_ant_np" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div><br>
										</div>
										<textarea class="form-control " id="ant_np" name="ant_np" rows="5" onkeyup="guardarAnt()" placeholder="Personales no Patológicos"><?php echo $ant_np; ?></textarea>
									</div><!-- //ANT NO PAT-->
								<?php endif ?>
								<?php if ($id_go==1): ?>
									<!-- ANT GINECO OBS-->
									<div class="col-md-12">
										<br>
										<h3>Ginecoobstetrico</h3>
										<div>
											<form id="form_add_ant_go" onkeypress="return event.keyCode != 13">
												<div class="input-group">
													<input type="text" class="form-control" id="add_ant_go" name="add_ant_go" placeholder="Escribe antecedentes aquí..." >
													<a href="javascript:agregarGO();" class="input-group-addon btn btn-primary">
														<i class="fa fa-upload"></i>
													</a>
												</div>
											</form>
											<div id="tabla_res_ant_go" class="col-md-11" style="position: absolute; z-index: 1000; font-size: 18px;"></div><br>
										</div>
										<textarea class="form-control " id="ant_go" name="ant_go" rows="5" onkeyup="guardarAnt()" placeholder="Gineco-osbtetrico"><?php echo $ant_go; ?></textarea>
									</div><!-- //ANT GINECO OBS-->
								<?php endif ?>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

<script type="text/javascript">
   function agregarALERGICOS(){
	var add_ant_alergicos=$('#add_ant_alergicos').val();
	$.ajax({
	    type:"POST",
	    url:"db/antecedentes/antecedentes.php",
	    data:{add_ant_alergicos:add_ant_alergicos},
	    success:function(r){
            $('#ant_alergicos').val($('#ant_alergicos').val() + r+ ('\n'));
            guardarAnt();
            $('#add_ant_alergicos').val("");
            $('#add_ant_alergicos').focus();
            $('#tabla_res_alergias').html("");
	    }
	});

	return false;
	}

   function agregarHF(){
	var datos=$('#form_add_ant_hf').serialize();

	$.ajax({
	    type:"POST",
	    url:"db/antecedentes/antecedentes.php",
	    data:datos,
	    success:function(r){
            $('#ant_hf').val($('#ant_hf').val() + r+ ('\n'));
            guardarAnt();
            $('#add_listado').val("");
            $('#add_listado').focus();
            $('#tabla_res_hf').html("");
	    }
	});

	return false;
	}

   function agregarPP(){
	var datos=$('#form_add_ant_pp').serialize();
	$.ajax({
	    type:"POST",
	    url:"db/antecedentes/antecedentes.php",
	    data:datos,
	    success:function(r){
            $('#ant_pp').val($('#ant_pp').val() + r+ ('\n'));
            guardarAnt();
            $('#add_ant_pp').val("");
            $('#add_ant_pp').focus();
            $('#tabla_res_ant_pp').html("");
	    }
	});

	return false;
	}

   function agregarNP(){
	var datos=$('#form_add_ant_np').serialize();
	$.ajax({
	    type:"POST",
	    url:"db/antecedentes/antecedentes.php",
	    data:datos,
	    success:function(r){
            $('#ant_np').val($('#ant_np').val()+ r+ ('\n') );
            guardarAnt();
		    $('#add_ant_np').val("");
		    $('#add_ant_np').focus();
		    $('#tabla_res_ant_np').html("");
            alertSuccess();
	    }
	});

	return false;
	}

   function agregarGO(){
	var datos=$('#form_add_ant_go').serialize();
	$.ajax({
	    type:"POST",
	    url:"db/antecedentes/antecedentes.php",
	    data:datos,
	    success:function(r){
            $('#ant_go').val($('#ant_go').val() + r+ ('\n'));
            guardarAnt();
		    $('#add_ant_go').val("");
		    $('#add_ant_go').focus();
		    $('#tabla_res_ant_go').html("");
            alertSuccess();
	    }
	});

	return false;
	}
</script>