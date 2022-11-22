 <?php 
  $sql="SELECT * from pacientes WHERE id_doctor=$id_doctor and id_paciente=$id_paciente";
  $query = $pdo->prepare($sql);
  $query->execute();
  $list = $query->fetchAll();
  foreach ($list as $filas_pac) 
      
  //while($filas_pac=mysql_fetch_assoc($resultado_pac))
  {
    $file=$filas_pac['fl_File'];
    $nombre=$filas_pac['nb_Paciente'];
    $nu_Telefono=$filas_pac['nu_Telefono'];
    $nu_Celular=$filas_pac['nu_Celular'];
    $de_Email=$filas_pac['de_Email'];
    $id_Sexo=$filas_pac['id_Sexo'];
    $fh_Nacimiento=$filas_pac['fh_Nacimiento'];
    $fh_Ingreso=$filas_pac['fh_Ingreso'];
    $nu_Edad=$filas_pac['nu_Edad'];
    $id_Sangre=$filas_pac['id_Sangre'];
    $de_Religion=$filas_pac['de_Religion'];
    $de_Ocupacion=$filas_pac['de_Ocupacion'];
    $nb_Emergencia=$filas_pac['nb_Emergencia'];
    $fh_Ingreso=$filas_pac['fh_Ingreso'];
    $nu_Emergencia=$filas_pac['nu_Emergencia'];
    $de_Estado_civil=$filas_pac['de_Estado_civil'];
    $de_Otros_datos=$filas_pac['de_Otros_datos'];
    $de_Domicilio=$filas_pac['de_Domicilio'];
    $id_Aseguradora=$filas_pac['id_Aseguradora'];
  }

  $sql="SELECT * from datos_fiscales WHERE id_doctor=$id_doctor and id_paciente=$id_paciente";
  $query = $pdo->prepare($sql);
  $query->execute();
  $list = $query->fetchAll();
  $buscar= $query->rowCount();
	if ($buscar > 0)
    {
		foreach ($list as $filas_fisco) 
		{
			$rfc=$filas_fisco['RFC'];
			$razon_social=$filas_fisco['razon_social'];
			$domicilio=$filas_fisco['domicilio'];
			$colonia=$filas_fisco['colonia'];
			$estado=$filas_fisco['estado'];
			$municipio=$filas_fisco['municipio'];
			$cp=$filas_fisco['cp'];
			$correo=$filas_fisco['correo'];
  		}
	} else {
		$rfc="";
		$razon_social="";
		$domicilio="";
		$colonia="";
		$estado="";
		$municipio="";
		$cp="";
		$correo="";
	}
  
?> 
<div class="col-md-12">
	<form id="form_editar_pac">
        <div class="row">
        	<div class="col-md-4">
	           <div class="row">
	           	<input type="text" name="id_pac_edit" value="<?php echo $id_paciente ?>" hidden="true">
	               <div class="col-md-12 text-center">
    	               <img id="img_foto_pacEdit" src="<?php echo $file ?>" class="img-responsive" style="max-width: 100%; border-radius: 5%">
                       <div class="form-group has-feedback">
                            <br>
                            <div class="input-group mb-3">
                                <input type="file" id="filePacEdit" class="form-control" multiple="multiple" accept="image/gif, image/jpg, image/jpeg, image/png, image/bmp" onchange="fotoEdit()">
                            </div>
                        </div>
	               </div>
                </div>
	        	<textarea type="text" id="foto_pacEdit" name="file_pacEdit" class="form-control" value="" hidden="true"><?php echo $file ?></textarea>
          	</div>

          	<div class="col-md-8">
            	<div class="row">
            		<div class="col-sm-12 col-md-12">
            			<label for="nb_Paciente">Nombre Completo:</label>
              			<input type="text" name="nb_Paciente" id="nb_Paciente" class="form-control" value="<?php echo $nombre ?>">
            		</div>
            	</div>

	            <div class="row">
	            	<div class="col-sm-6 col-md-6">
	            		<label>Fecha de nac:</label>
	              		<input type="date" name="fh_Nacimiento" id="fh_Nacimiento" class="form-control" onchange="calcularEdad();" value="<?php echo $fh_Nacimiento ?>">
	            	</div>
	            	<div class="col-sm-6 col-md-6">
	              		<label>Edad:</label>
	              		<input type="text" name="nu_Edad" id="nu_Edad" class="form-control" value="<?php echo $nu_Edad ?>">
	            	</div>
	            </div>

	          	<div class="row">
	            	<div class="col-sm-6 col-md-6">
		              <label for="id_Sexo">Sexo:</label>
		              <select name="id_Sexo" id="id_Sexo" class="form-control" value="<?php echo $id_Sexo ?>">
		                <option value="<?php echo $id_Sexo ?>"><?php echo $id_Sexo ?></option>
		                <option value="Masculino">Masculino</option>
		                <option value="Femenino">Femenino</option>
		              </select>
	            	</div>
	            	<div class="col-sm-6 col-md-6">
	            		<label>Ocupación:</label>
	              		<input type="text" name="de_Ocupacion" id="de_Ocupacion" class="form-control" value="<?php echo $de_Ocupacion ?>">
	            	</div>
	            </div>

	            <div class="row">
	            	<div class="col-sm-6 col-md-6">
	            		<label>Celular:</label>
	              		<input type="text" name="nu_Celular" id="nu_Celular" class="form-control" value="<?php echo $nu_Celular ?>">
	            	</div>
	            	<div class="col-sm-6 col-md-6">
	            		<label>Email:</label>
	              		<input type="text" name="de_Email" id="de_Email" class="form-control" value="<?php echo $de_Email ?>">
	            	</div>
	            </div>
          	</div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <label>Otros Datos</label>
              <input type="text" name="de_Otros_datos" id="de_Otros_datos" class="form-control" value="<?php echo $de_Otros_datos ?>">
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
			                          	<select name="de_Estado_civil" id="de_Estado_civil" class="form-control" style="height:45px" value="">
				                            <option value="<?php echo $de_Estado_civil ?>"><?php echo $de_Estado_civil ?></option>
				                            <option value="Soltero(a)">Soltero(a)</option>
				                            <option value="Casado(a)">Casado(a)</option>
				                            <option value="Viudo(a)">Viudo(a)</option>
				                            <option value="divorciado(a)">divorciado(a)</option>
				                            <option value="Union Libre">Union Libre</option>
			                          	</select>

				                        <label>Tipo de Sangre:</label>
				                        <select name="id_Sangre" id="id_Sangre" class="form-control" style="height:45px" value="">
				                            <option value="<?php echo $id_Sangre ?>"><?php echo $id_Sangre ?></option>
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
			                          	<input type="text" name="de_Religion" id="de_Religion" class="form-control myTextInput" value="<?php echo $de_Religion ?>">
			                        </div>
			                    </div>

			                    <div class=" col-md-6">
			                        <div class="panel-body timeline-container">
				                        <label>Persona de Emergencia:</label>
				                        <input type="text" name="nb_Emergencia" id="nb_Emergencia" class="form-control" value="<?php echo $nb_Emergencia ?>">
				                        <label>Teléfono de Emergencia:</label>
				                        <input type="text" name="nu_Emergencia" id="nu_Emergencia" class="form-control" value="<?php echo $nu_Emergencia ?>">
				                        <label>Aseguradora:</label>
				                        <select name="id_Aseguradora" id="id_Aseguradora" class="form-control" style="height:45px" value="">
				                            <option value="<?php echo $id_Aseguradora ?>"><?php echo $id_Aseguradora ?></option>
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
			                        <input type="text" name="de_Domicilio" id="de_Domicilio" class="form-control" value="<?php echo $de_Domicilio ?>">
			                    </div>
			                </div>
			                    <h3>Datos Fiscales</h3>
		                    <div class="row">
			                    <div class="col-md-6">
			                        <label>Razón Social:</label>
			                        <input type="text" name="razon_social" id="razon_social" class="form-control" value="<?php echo $razon_social ?>">
			                        <label>RFC:</label>
			                        <input type="text" name="RFC" id="RFC" class="form-control" value="<?php echo $rfc ?>">
			                        <label>domicilio:</label>
			                        <input type="text" name="domicilio" id="domicilio" class="form-control myTextInput" value="<?php echo $domicilio ?>">
			                        <label>Colonia:</label>
			                        <input type="text" name="colonia" id="colonia" class="form-control">
			                    </div>

			                    <div class=" col-md-6">
			                        <div class="panel-body timeline-container">
			                          	<label>Estado:</label>
			                          	<input type="text" name="estado" id="estado" class="form-control" value="<?php echo $estado ?>">
			                          	<label>Municipio:</label>
			                          	<input type="text" name="municipio" id="municipio" class="form-control" value="<?php echo $municipio ?>">
			                          	<label>Código Postal:</label>
			                          	<input type="text" name="cp" id="cp" class="form-control" value="<?php echo $cp ?>">
			                          	<label>Correo Fiscal:</label>
			                          	<input type="text" name="correo" id="correo" class="form-control" value="<?php echo $correo ?>">
			                        </div>
			                    </div>
                    		</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
