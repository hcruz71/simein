
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
                                   
                                    <?php   include 'bloques/consultas/preguntas_sportkines.php'; ?>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   
