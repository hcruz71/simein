
<div class="row" id="logotipo">
    <!-- ============================================================== -->
    <!-- accrodions style one -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="accrodion-regular">
            <div id="accordion2">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        
                           <button class="btn btn-link" data-toggle="collapse" data-target="#logotipocollapse" aria-expanded="true" aria-controls="logotipocollapse">
                           <h3 class="mb-0">Logotipo</h3>
                           </button>
                    </div>
                    <div id="logotipocollapse" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                        <div class="card-body">
                            <!--form load logo base 64-->
                		    <form id="form_logo" enctype="multipart/form-data" method="post">
                	           <div class="row">
                	               <div class="col-md-12 text-center">
                    	               <img id="img_logo" src="<?php echo($logo) ?>" class="img-responsive" style="max-width: 400px;">
                                       <div class="form-group has-feedback">
                                            <br>
                                            <div class="input-group mb-3">
                                                <input type="file" id="fileLogo" class="form-control" multiple="multiple" accept="image/gif, image/jpg, image/jpeg, image/png, image/bmp" onchange="convert()">
                                            </div>
                                        </div>
                                        <div class="form-group has-feedback" hidden="false">
                                            <input type="text" id="response_logo" name="logo" class="form-control" value="<?php echo($logo) ?>" placeholder="Base-64 value" />
                                        </div>
                	               </div>
                                </div>
                	        </form><!--//form load logo base 64-->
        </div>
    </div>
</div></div></div></div></div>
