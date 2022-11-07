
	       <div class="row">
	        
	          <div class="col-md-4">
	          	<!--form load logo base 64-->
    		    <form action="cordinador.php" method="post">
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
                        <input type="text" id="Correo_repre" name="Correo_repre" class="form-control">
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
