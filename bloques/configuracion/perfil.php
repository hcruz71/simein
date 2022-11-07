
<div class="row" id="perfil">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="accrodion-regular">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <h3 class="mb-0">Mi Perfil</h3>
                        </button>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body"> 
                	        <div class="row">
                	        
                	            <div class="col-md-4">
                	          	<!--form load logo base 64-->
                    		        <form id="form_perfil" enctype="multipart/form-data" method="post">
                    	               <div class="row">
                    				    <label>Fotografía</label>
                    	                   <div class="col-md-12 text-center">
                        	                   <img id="img_perfil" src="<?php echo($perfil) ?>" class="img-responsive" style="max-width: 190px; border-radius: 5%">
                                                <div class="form-group has-feedback">
                                                    <div class="input-group mb-3">
                                                        <input type="file" id="file_perfil" class="form-control" multiple="multiple" accept="image/gif, image/jpg, image/jpeg, image/png, image/bmp" onchange="convert_perfil()">
                                                    </div>
                                                </div>
                                                <div class="form-group has-feedback" hidden="false">
                                                    <input type="text" id="response_perfil" name="perfil" class="form-control" value="" placeholder="Base-64 value" />
                                                </div>
                    	                   </div>
                                        </div>
                    	            </form><!--//form load logo base 64-->
                	            </div>

                	            <div class="col-md-8">
                                <form id="form_doctor">
                	               <div class="row">
                	            	  <div class="col-md-6">
                			              <label for="prefijo">Prefijo:</label>
                			              <select name="prefijo" id="prefijo" class="form-control">
                			                <option value="<?php echo $a; ?>"><?php echo $a; ?></option>
                			                <option value="Dr.">Dr.</option>
                			                <option value="Dra.">Dra.</option>
                			                <option value="Lic.">Lic.</option>
                			              </select>
                	            	  </div>
                	            	  <div class="col-md-6">
                	            		<label>Nombre Completo:</label>
                                        <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $n ?>">
                	            	  </div>
                	               </div>

                    	            <div class="row">
                    	            	<div class="col-sm-6 col-md-6">
                                            <label for="especialidad">Especialidad: </label>
                                            <input type="text" id="especialidad" name="especialidad" class="form-control" value="<?php $especialidad ?>">
                    	            	</div>
                    	            	<div class="col-sm-6 col-md-6">
                                            <label for="nu_cEsp">Ced. Esp.: </label>
                                            <input type="text" id="de_cEsp" name="de_cEsp" class="form-control" value="<?php echo $e ?>">
                    	            	</div>
                    	            </div>

                    	            <div class="row">
                    	            	<div class="col-sm-6 col-md-6">
                                            <label for="nu_cProf">Ced. Prof.: </label>
                                            <input type="text" id="de_cProf" name="de_cProf" class="form-control" value="<?php echo $p ?>">
                    	            	</div>
                    	            	<div class="col-sm-6 col-md-6">
                                            <label for="telefono">Teléfono: </label>
                                            <input type="text" id="telefono" name="telefono" class="form-control" value="<?php echo $t ?>">
                    	            	</div>
                    	            </div>

                    	            <div class="row">
                    	            	<div class="col-sm-6 col-md-6">
                                            <label for="celular">Celular: </label>
                                            <input type="text" id="celular" name="celular" class="form-control" value="<?php echo $c ?>">
                    	            	</div>
                    	            	<div class="col-sm-6 col-md-6">
                                            <label for="correo">Correo Electrónoico: </label>
                                            <input type="text" id="correo" name="correo" class="form-control" value="<?php echo $m ?>">
                    	            	</div>
                    	            </div>
                                    <div class="row">
                                <div class="col-md-12">
                                    <label for="direccion">Direccion: </label>
                                    <input type="text" id="direccion" name="direccion" class="form-control" value="<?php echo $d ?>">
                                </div>
                            </div>
                	            </div>
                            </form>
                	        </div>
                	        
                	       </form><!--end form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
