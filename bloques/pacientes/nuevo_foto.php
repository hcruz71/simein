<div class="col-md-12">
	<form action="db/pacientes/guardar_cu.php" method="POST">
        <div class="row">
        	<div class="col-xs-12 col-md-4">
	           <div class="row">
	               <div class="col-md-12 text-center">
    	               <img id="img_foto_pac" src="assets/images/defect.jpg" class="img-responsive" style="max-width: 100%; border-radius: 5%">
                       <div class="form-group has-feedback">
                            <br>
                            <div class="input-group mb-3">
                                <input type="file" id="filePac" class="form-control" multiple="multiple" accept="image/gif, image/jpg, image/jpeg, image/png, image/bmp" onchange="preFotoPac()">
                            </div>
                        </div>
	               </div>
                </div>
	        	<textarea type="text" id="foto_pac" name="foto_pac" class="form-control" hidden="false">assets/images/defect.jpg</textarea>
          	</div>

          	<div class="col-md-8">
            	<div class="row">
            		<div class="col-sm-12 col-md-12">
            			<label for="nb_Paciente">Nombre Completo:</label><input type="text" name="id_paciente" hidden="false">
              			<input type="text" name="nb_Paciente" id="nb_Paciente" class="form-control" required="true">
            		</div>
            	</div>

	            <div class="row">
	            	<div class="col-sm-6 col-md-6">
	            		<label>Fecha de nac:</label>
	              		<input type="date" name="fh_Nacimiento" id="fh_Nacimiento" class="form-control" onchange="calcularEdad();">
	            	</div>
	            	<div class="col-sm-6 col-md-6">
	              		<label>Edad:</label>
	              		<input type="text" name="nu_Edad" id="nu_Edad" class="form-control">
	            	</div>
	            </div>

	          	<div class="row">
	            	<div class="col-sm-6 col-md-6">
		              <label for="id_Sexo">Sexo:</label>
		              <select name="id_Sexo" id="id_Sexo" class="form-control">
		                <option value="">Seleccionar...</option>
		                <option value="Masculino">Masculino</option>
		                <option value="Femenino">Femenino</option>
		              </select>
	            	</div>
	            	<div class="col-sm-6 col-md-6">
	            		<label>Ocupación:</label>
	              		<input type="text" name="de_Ocupacion" id="de_Ocupacion" class="form-control">
	            	</div>
	            </div>

	            <div class="row">
	            	<div class="col-sm-6 col-md-6">
	            		<label>Celular:</label>
	              		<input type="text" name="nu_Celular" id="nu_Celular" class="form-control">
	            	</div>
	            	<div class="col-sm-6 col-md-6">
	            		<label>Email:</label>
	              		<input type="text" name="de_Email" id="de_Email" class="form-control">
	            	</div>
	            </div>
          	</div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <label>Otros Datos</label>
              <input type="text" name="de_Otros_datos" id="de_Otros_datos" class="form-control">
            </div>
        </div>
        <div class="col-xs-12">
            <div class="panel-group" id="accordion_settings" role="tablist" aria-multiselectable="true">
                <div class="panel panel-info">
                    <div class="panel-heading" role="tab" id="headingAccount">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_settings" href="#collapseAccount" aria-expanded="true" aria-controls="collapseAccount">
                                Más Datos...
                            </a>
                        </h3>
                    </div>
                    <div id="collapseAccount" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAccount">
                        <div class="panel-body">
                          	<div class="row">
		                      	<div class="col-md-6">
			                        <div class="panel-body timeline-container">
			                          	<label>Estado Civil:</label>
			                          	<select name="de_Estado_civil" id="de_Estado_civil" class="form-control" style="height:45px">
				                            <option value="">Seleccionar...</option>
				                            <option value="Soltero(a)">Soltero(a)</option>
				                            <option value="Casado(a)">Casado(a)</option>
				                            <option value="Viudo(a)">Viudo(a)</option>
				                            <option value="divorciado(a)">divorciado(a)</option>
				                            <option value="Union Libre">Union Libre</option>
			                          	</select>

				                        <label>Tipo de Sangre:</label>
				                        <select name="id_Sangre" id="id_Sangre" class="form-control" style="height:45px">
				                            <option value="">Seleccionar...</option>
				                            <option value="AB+">AB+</option>
				                            <option value="AB-">AB-</option>
				                            <option value="A+">A+</option>
				                            <option value="A-">A-</option>
				                            <option value="B+">B+</option>
				                            <option value="B-">B-</option>
				                            <option value="O+">O+</option>
				                            <option value="O-">O-</option>
				                        </select>

			                          	<label>Religion:</label>
			                          	<input type="text" name="de_Religion" id="de_Religion" class="form-control myTextInput" >
			                        </div>
			                    </div>

			                    <div class=" col-md-6">
			                        <div class="panel-body timeline-container">
				                        <label>Persona de Emergencia:</label>
				                        <input type="text" name="nb_Emergencia" id="nb_Emergencia" class="form-control">
				                        <label>Teléfono de Emergencia:</label>
				                        <input type="text" name="nu_Emergencia" id="nu_Emergencia" class="form-control">
				                        <label>Aseguradora:</label>
				                        <select name="id_Aseguradora" id="id_Aseguradora" class="form-control" style="height:45px">
				                            <option value="">Seleccionar...</option>
				                            <option value="AXA">AXA</option>
				                            <option value="MEDLIFE">MEDLIFE</option>
				                            <option value="BANAMEX">BANAMEX</option>
				                            <option value="BANORTE">BANORTE</option>
				                            <option value="BANCOMER">BANCOMER</option>
				                            <option value="SCOTIABANK">SCOTIABANK</option>
				                            <option value="SANTANDER">SANTANDER</option>
				                            <option value="MAPFRE">MAPFRE</option>
				                            <option value="VITAMEDICA">VITAMEDICA</option>
				                        </select>
				                    </div>
			                    </div>
			                    <div class="col-md-12">
			                        <label>Domicilio</label>
			                        <input type="text" name="de_Domicilio" id="de_Domicilio" class="form-control">
			                    </div>
			                </div>
			                    <h3>Datos Fiscales</h3>
		                    <div class="row">
			                    <div class="col-md-6">
			                        <label>Razón Social:</label>
			                        <input type="text" name="razon_social" id="razon_social" class="form-control">
			                        <label>RFC:</label>
			                        <input type="text" name="RFC" id="RFC" class="form-control">
			                        <label>domicilio:</label>
			                        <input type="text" name="domicilio" id="domicilio" class="form-control myTextInput" >
			                        <label>Colonia:</label>
			                        <input type="text" name="colonia" id="colonia" class="form-control">
			                    </div>

			                    <div class=" col-md-6">
			                        <div class="panel-body timeline-container">
			                          	<label>Estado:</label>
			                          	<input type="text" name="estado" id="estado" class="form-control">
			                          	<label>Municipio:</label>
			                          	<input type="text" name="municipio" id="municipio" class="form-control">
			                          	<label>Código Postal:</label>
			                          	<input type="text" name="cp" id="cp" class="form-control">
			                          	<label>Correo Fiscal:</label>
			                          	<input type="text" name="correo" id="correo" class="form-control">
			                        </div>
			                    </div>
                    		</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
