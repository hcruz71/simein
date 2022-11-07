<!doctype html>
<html lang="en">
  <meta charset="utf-8">
    <!-- head -->
    <?php include 'componentes/head.php' ?>
    <!-- end head -->
<body>


    <!-- main wrapper -->
    <div class="dashboard-main-wrapper">

        <!-- navbar -->
        <?php include 'componentes/nav.php' ?>
        <!-- end navbar -->

        <!-- left sidebar -->
        <?php include 'componentes/nav-left.php' ?>
        <!-- end left sidebar -->

        <!-- wrapper  -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><i class="fa fa-users"></i>&nbsp;Pacientes</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
						<div class="col-sm-6">
					     	<input type="text" name="" id="buscar_pac" class="form-control" placeholder="Buscar pacientes aquí...">
					    </div>
					    <div class="col-sm-3">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nuevo_pac"><em class="fa fa-user-plus"></em>&nbsp;Nuevo Paciente</button>
                        </div>
                    <?php if ($_SESSION['id_usuario']==1): ?>
                        <div class="col-sm-3">
                            <a href="historial_clinico.php" class="btn btn-info"><em class="fa fa-user-plus"></em>&nbsp;Paciente Primera Vez</a>
                        </div>
                    <?php endif ?>
                        
					</div>
					<br>
					
						<div id="res_pacientes"></div>
				    	
				    </div>
            </div>

        </div>
        <!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="nuevo_pac" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h3><i class="fa fa-user-plus"></i>&nbsp;Agregar Nuevo Paciente</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
      	<?php include 'bloques/pacientes/nuevo.php'; ?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="agregar_consultar">Agregar y Consultar</button>
        <button type="submit" class="btn btn-primary" name="solo_agregar">Solo Agregar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
    </form><!--end form-->

  </div>
</div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>

<?php include 'componentes/footer.php' ?>
    <script type="text/javascript" src="js/func_pacientes.js"></script>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->

</body>


 
</html>