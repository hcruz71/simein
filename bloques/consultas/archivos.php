        <div class="border-top" id="archivos">
            <h3>Archivos</h3>
                        <div class="col-md-12">
                            <div class="tab-outline">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab-outline-one" data-toggle="tab" href="#outline-one" role="tab" aria-controls="home" aria-selected="true">Imagenes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-outline-two" data-toggle="tab" href="#outline-two" role="tab" aria-controls="profile" aria-selected="false">Documentos</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="outline-one" role="tabpanel" aria-labelledby="tab-outline-one">
                                        <label>subir Imagenes</label>
                                        <div class="row">
                                            <form id="form_imagenes" enctype="multipart/form-data">
                                                <div class="col-md-12 text-center">
                                                   <div class="form-group has-feedback">
                                                        <br>
                                                        <div class="input-group mb-3">
                                                            <input type="file" id="file_imagenes" class="form-control" accept="image/gif, image/jpg, image/jpeg, image/png, image/bmp" onchange="subirImagenes()">
                                                        </div>
                                                    </div>
                                               </div>
                                            </form>
                                        </div>
                                              <div id="tabla_imagenes" class="row" style="z-index: 1000"></div>
                                    </div>
                                    <div class="tab-pane fade" id="outline-two" role="tabpanel">
                                        <label>subir documentos</label>
                                        <form action="multi.php" method="post" enctype="multipart/form-data">
                                                <div class="input-group mb-3">
                                                    <input type="file" name="file_documentos" id="file_documentos" class="form-control" accept="application/pdf" onchange="subirDocumentos()">
                                                </div>
                                              </form>
                                              <div id="tabla_documentos" class="row"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>