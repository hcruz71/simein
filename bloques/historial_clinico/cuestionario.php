<?php
  //error_reporting(0);
    /*
    ANTES
   $sql_ant_echo=mysql_query("SELECT id, ant_hf, ant_pp, ant_np, ant_go, ant_otros, alergicos FROM antecedentes where id_doctor=$id_doctor and id_Paciente=$id_paciente");
	while($res_ant_echo=mysql_fetch_assoc($sql_ant_echo)){ 

    CAMBIO
        $query1 = "SELECT id, ant_hf, ant_pp, ant_np, ant_go, ant_otros, alergicos FROM antecedentes where id_doctor=$id_doctor and id_Paciente=$id_paciente");
        $resultado_doc = $conexion->query($query1);
        while($res_ant_echo = $resultado_doc->fetch_assoc()){
     
    */
 if ($id_doctor==1) {
	$sql = "SELECT id, ant_hf, ant_pp, ant_np, ant_go, ant_otros, alergicos FROM antecedentes where id_doctor=$id_doctor and id_Paciente=$id_paciente";
	$query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
	foreach ($list as $res_ant_echo) {
		$id=$res_ant_echo['id'];
		$ant_hf=$res_ant_echo['ant_hf'];
		$ant_pp=$res_ant_echo['ant_pp'];
		$ant_np=$res_ant_echo['ant_np'];
		$ant_go=$res_ant_echo['ant_go'];
		$ant_otros=$res_ant_echo['ant_otros'];
		$alergicos=$res_ant_echo['alergicos'];
	}      
?>


<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
   	<div class="accrodion-regular">
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseCuestionario" aria-expanded="false" aria-controls="collapseHonorarios">
                        <h3 class="mb-0"><i class="fa fa-file"></i>&nbsp;&nbsp;Cuestionario</h3>
                    </button>
                </div>
                <div id="collapseCuestionario" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <form id="form_ant">
                            <div class="">
                                <div class="">
                                    <input type="text" name="id_ant" class="id" style="visibility: hidden;" value="<?php echo $id; ?>">
                                </div>
	                            <div class="panel-body">
                                   

                                    <?php    include 'bloques/consultas/preguntas.php'; ?>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
<script type="text/javascript">
   function agregarALERGICOS(){
	var add_ant_alergicos=$('#add_ant_alergicos').val();
	$.ajax({
	    type:"POST",
	    url:"db/antecedentes/antecedentes.php",
	    data:{add_ant_alergicos:add_ant_alergicos},
	    success:function(r){
			console.log("CUEST:",r);
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