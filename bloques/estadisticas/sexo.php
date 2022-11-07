

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
   	<div class="accrodion-regular">
        <div id="accordion2">
            <div class="card">
                <div class="card-header" id="headingOne">
                    
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseHonorarios" aria-expanded="false" aria-controls="collapseHonorarios">
                    <h3 class="mb-0"><i class="fa fa-file"></i>&nbsp;&nbsp;Estad&iacutestica por Sexo</h3>
                    </button>
                </div>
                <div id="collapseHonorarios" class="collapse" aria-labelledby="headingOne" data-parent="#accordion2">
                    <div class="card-body">
                    	<div class="col-md-12">
                    		<h2>Total de Pacientes Masculinos Registrados: <span style="color: #3396ff"><?php echo $M; ?></span>  </h2>
                    	</div>
                    	<div class="col-md-12">
                    		<h2>Total de Pacientes Femeninos Registrados: <span style="color: #ff32e0"><?php echo $F; ?></span> </h2>
                    	</div>
	                        <canvas id="chartjs_bar"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
