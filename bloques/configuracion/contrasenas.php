<?php
//utf8_decode($row['municipio'];
$id=$_SESSION['id'];
$id_doctor=$_SESSION['id_usuario'];

    include 'conexion.php';
    try {
        if ( !isset($pdo) ) {
            $pdo = connect(); 
        }                       
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
        die();
    }


    $sql = "SELECT * FROM usuarios where id_usuario=$id_doctor";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $row_doc) 
    {  
        $id_pass=$row_doc['id'];
    }
?>
<div class="row" id="contrasena">
    <!-- ============================================================== -->
    <!-- accrodions style one -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="accrodion-regular">
            <div id="accordionpass">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapsePass" aria-expanded="true" aria-controls="collapsePass"><h3 class="mb-0">Cambiar Contraseña</h3></button>
                    </div>
                    <div id="collapsePass" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionpass">
                        <div class="card-body">

                        <form id="form_pass">
        	               <div class="row">
                                    <div class="col-md-12">
                                        <label>Contraseña Actual</label>
                                        <input type="password" name="id_pass" id="id_pass" value="<?php echo($id) ?>" hidden="false">
                                        <input type="password" id="pass_actual" name="pass_actual" class="form-control" placeholder="*********">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Nueva Contraseña</label>
                                        <input type="password" id="pass" name="pass" class="form-control" placeholder="*********">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Confirmar Contraseña</label>
                                        <input type="password" id="re_pass" name="re_pass" class="form-control" placeholder="*********">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-success" id="btn_pass" style="float: right; margin-top: 10px">Guardar Contraseña</button>
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
