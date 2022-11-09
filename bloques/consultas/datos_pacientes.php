<?php
//error_reporting(0); 
  $sentencia_pac="SELECT nb_Paciente, nu_Telefono, nu_Celular, de_Email, id_Sexo, fh_Nacimiento, fh_Ingreso, nu_Edad, id_Sangre,de_Religion, de_Ocupacion, nb_Emergencia, fh_Ingreso, nu_Emergencia, de_Estado_civil, de_Otros_datos  from pacientes WHERE id_doctor=$id_doctor and id_paciente=$id_paciente";


  $resultado_pac=mysql_query($sentencia_pac);
  while($filas_pac=mysql_fetch_assoc($resultado_pac))
  {
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
  }
?>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="datos_pac">
                                </div>
                                <div class="card">
                                    <h5 class="card-header">Datos del Paciente</h5>
                                    <div class="card-body">
                    <form id="form_agregar" enctype="multipart/form-data" method="post">
                      <div class="row">
                    
                      <div class="col-md-4">
                        
                        <label>Fotografía</label>
                        <?php 
                          $sentencia_file="SELECT * from pacientes WHERE id_doctor=$id_doctor and id_paciente=$id_paciente";
                          $resultado_file=mysql_query($sentencia_file);
                          while($filas_file=mysql_fetch_assoc($resultado_file))
                          {
                            $foto=$filas_file['fl_File'];
                            ?>
                            <?php if ($foto==""): ?>
                              <img src="assets/images/defect.jpg" class="img-responsive" style="width: 190px; border-radius: 50%">
                              <input type="file" name="file" class="col-md-12">
                              <?php else: ?>
                              <img src="assets/images/<?php echo($foto) ?>" class="img-responsive" style="width: 190px; border-radius: 50%">
                              <input type="file" name="file" class="col-md-12">
                            <?php endif ?>
                      <?php } ?>
                      </div>

                      <div class="col-md-4">
                        <div class="panel-body timeline-container">
                          <label for="nb_Paciente">Nombre(s):</label>
                          <input type="text" name="nb_Paciente" id="nb_Paciente" class="form-control" required="true" value="<?php echo($nombre) ?>">
                          <label>Fecha de Ingreso:</label>
                          <input type="text" name="fh_Ingreso" id="fh_Ingreso" class="form-control" value="<?php echo date('d-m-Y') ?>">
                          <label>Fecha de nac:</label>
                          <input type="date" name="fh_Nacimiento" id="fh_Nacimiento" class="form-control myTextInput" >
                          <label>Edad:</label>
                          <input type="text" name="nu_Edad" id="nu_Edad" class="form-control">
                        </div>
                      </div>

                      <div class=" col-md-4">
                        <div class="panel-body timeline-container">
                          <label for="id_Sexo">Sexo:</label>
                          <select name="id_Sexo" id="id_Sexo" class="form-control">
                            <option value="">Seleccionar...</option>
                            <option value="M">Masculíno</option>
                            <option value="F">Femenino</option>
                          </select>
                          <label>Ocupación:</label>
                          <input type="text" name="de_Ocupacion" id="de_Ocupacion" class="form-control">
                          <label>Celular:</label>
                          <input type="text" name="nu_Celular" id="nu_Celular" class="form-control">
                          <label>Email:</label>
                          <input type="text" name="de_Email" id="de_Email" class="form-control">
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
                                <div class="row">
                                              <h2><b>Datos Fiscales</b></h2>
                                  <div class="col-md-6">
                                    <div class="panel-body timeline-container">
                                      <label>Razón Social:</label>
                                      <input type="text" name="razon_social" id="razon_social" class="form-control" required="true">
                                      <label>RFC:</label>
                                      <input type="text" name="RFC" id="RFC" class="form-control">
                                      <label>domicilio:</label>
                                      <input type="text" name="domicilio" id="domicilio" class="form-control myTextInput" >
                                      <label>Colonia:</label>
                                      <input type="text" name="colonia" id="colonia" class="form-control">
                                    </div>
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
                    </form><!--end form-->
                                    </div>
                                </div>
                            </div>
