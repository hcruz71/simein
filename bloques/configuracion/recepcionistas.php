
<div class="row" id="asistentes">
    <!-- ============================================================== -->
    <!-- accrodions style one -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="accrodion-regular">
            <div id="accordionasistentes">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseAsistentes" aria-expanded="true" aria-controls="collapseAsistentes"><h3 class="mb-0">Asistentes</h3>
                        </button>

                    </div>
                    <div id="collapseAsistentes" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionasistentes">
                        <div class="card-body">
                    <form id="form_asistentes">
                         <div class="row">
                            <div class="col-md-12">
                                
                            <button class="btn btn-info" style="float: right;"><i class="fa fa-plus"></i></button>
                            </div>
                            <div class="col-md-12">
                              <label>Nombre de la Asistente</label>
                                <input type="number" name="id_asistente" id="id_asistente" hidden="false">
                                    <input type="text" id="nombre_asistente" name="nombre_asistente" class="form-control" placeholder="Nombre de la Asistente" required="true">
                            </div>
                                <div class="col-md-12">
                                    <label>Correo electronico</label>
                                    <input type="text" id="correo_asistente" name="correo_asistente" class="form-control" placeholder="hcruz7@gmail.com" required="true">
                                </div>
                                <div class="col-md-12">
                                    <label>Contraseña</label>
                                    <input type="password" id="pass_asistente" name="pass_asistente" class="form-control" placeholder="*********" required="true">
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <h3>Permisos</h3>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="id_antecedente_asistente" id="id_antecedente_asistente" value="1"> Antecedentes
                                            </label>
                                            &nbsp;&nbsp;
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="id_historial_asistente" id="id_historial_asistente" value="1"> Consultas Médicas
                                            </label>
                                </div>
                                <div class="col-md-12">

                                    <button class="btn btn-success" id="btn_asistentes" style="float: right; margin-top: 10px">Guardar Asistente</button>
                                </div>
                                <div class="col-md-12">
                                  <br><div id="tabla_asistentes"></div>
                                </div>
                         </div>
                    </form>
                     </div>
                    </div>
              </form><!--end form-->
            </div>
        </div>
    </div>
</div></div>


