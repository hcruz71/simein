
<div class="row" id="consultas">
    
    <!-- ============================================================== -->
    <!-- accrodions style one -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="accrodion-regular">
            <div id="accordion2">
                <div class="card">
                
                <form id="form_conf_consultas">
                                
                    <div class="card-header" id="headingOne">
                        
                           <button class="btn btn-link" data-toggle="collapse" data-target="#logotipocollapse" aria-expanded="true" aria-controls="logotipocollapse">
                           <h3 class="mb-0">Consultas Médicas</h3>
                           </button>
                           <input type="text" name="id_medico" style="visibility: hidden;" value="<?php echo($id) ?>">
                    </div>
                    <div id="logotipocollapse" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                        <div class="card-body">

                            
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <h3>Antecedentes</h3>
                                                </div>
                                                <div class="col-md-3">
                                                    <button type="button" class="btn btn-default" data-toggle="popover" title="" data-content="Solo desmarque para deshabilitar campos, en caso contrario solo marque para activar el campo, esta configuracion tiene la funcion de quitar campos que no requiera su Consultas Mèdicas" data-original-title="Activar-Desactivar"><i class="fa fa-info-circle" style="float: right;"></i></button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">
                                            <label class="checkbox-inline" onclick="guardarConfConsultas()">
                                            <input type="checkbox" name="id_alergicos" id="id_alergicos"  <?php if(strpos($id_alergicos, "1")!== false) echo 'checked'; ?>> Alergicos
                                            </label></p>

                                            <p class="card-text">
                                            <label class="checkbox-inline" onclick="guardarConfConsultas()">
                                            <input type="checkbox" name="id_hf" id="id_hf"  <?php if(strpos($id_hf, "1")!== false) echo 'checked'; ?>> Heredo-Familiares
                                            </label></p>

                                            <p class="card-text">
                                            <label class="checkbox-inline" onclick="guardarConfConsultas()">
                                            <input type="checkbox" name="id_pp" id="id_pp" <?php if(strpos($id_pp, "1")!== false) echo 'checked'; ?>> Personales Patológicos
                                            </label></p>

                                            <p class="card-text">
                                            <label class="checkbox-inline" onclick="guardarConfConsultas()">
                                            <input type="checkbox" name="id_np" id="id_np"  <?php if(strpos($id_np, "1")!== false) echo 'checked'; ?>> Personales NO Patológicos
                                            </label></p>

                                            <p class="card-text">
                                            <label class="checkbox-inline" onclick="guardarConfConsultas()">
                                            <input type="checkbox" name="id_go" id="id_go" <?php if(strpos($id_go, "1")!== false) echo 'checked'; ?>> Gineco-obstetricos
                                            </label></p>

                                        
                                        </div>
                                    </div>
                                            
                                </div>


                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <h3>Consultas</h3>
                                                </div>
                                                <div class="col-md-3">
                                                    <button type="button" class="btn btn-default" data-toggle="popover" title="" data-content="Solo desmarque para deshabilitar campos, en caso contrario solo marque para activar el campo" data-original-title="Activar-Desactivar"><i class="fa fa-info-circle" style="float: right;"></i></button>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="card-body">
                                           <p class="card-text">
                                            <label class="checkbox-inline" onclick="guardarConfConsultas()">
                                            <input type="checkbox" name="id_exploracion" id="id_exploracion" <?php if(strpos($id_exploracion, "1")!== false) echo 'checked'; ?>> Exploración
                                            </label></p>

                                            <p class="card-text">
                                            <label class="checkbox-inline" onclick="guardarConfConsultas()">
                                            <input type="checkbox" name="id_signos_vitales" id="id_signos_vitales" <?php if(strpos($id_signos_vitales, "1")!== false) echo 'checked'; ?>> Signos Vitales
                                            </label></p>

                                            <p class="card-text">
                                            <label class="checkbox-inline" onclick="guardarConfConsultas()">
                                            <input type="checkbox" name="id_diagnosticos" id="id_diagnosticos" <?php if(strpos($id_diagnosticos, "1")!== false) echo 'checked'; ?>> Diagnósticos
                                            </label></p>

                                            <p class="card-text">
                                            <label class="checkbox-inline" onclick="guardarConfConsultas()">
                                            <input type="checkbox" name="id_gabinete" id="id_gabinete" <?php if(strpos($id_gabinete, "1")!== false) echo 'checked'; ?>> Gabinete
                                            </label></p>

                                            <p class="card-text">
                                            <label class="checkbox-inline" onclick="guardarConfConsultas()">
                                            <input type="checkbox" name="id_honorarios" id="id_honorarios" <?php if(strpos($id_honorarios, "1")!== false) echo 'checked'; ?>> Honorarios
                                            </label></p>


                                        </div>
                                    </div>
                                            
                                </div>
                                    
                                </div>
	        </form><!--end form-->
        </div>
    </div>
</div></div></div></div></div>

<script type="text/javascript">
</script>
