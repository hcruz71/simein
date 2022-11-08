

<!doctype html>
<html lang="en">
    <!-- head -->
    <?php include 'componentes/head.php' ?>
    <!-- end head -->
<body>
    <!-- main wrapper -->
    <div class="dashboard-main-wrapper">

        <!-- navbar -->
        <?php include 'componentes/nav_cu.php' ?>
        <!-- end navbar -->



<div class="container">
    <div class="row">
        
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                        <br><br>
                            <h2 class="pageheader-title"><i class="fas fa-archive"></i>&nbsp;&nbsp;Registro Primera vez </h2>
                        </div>
                    </div>
                </div>
    <br><br>

    <?php include 'bloques/pacientes/nuevo_foto.php'; ?>
<br><br>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="accrodion-regular">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <h3 class="mb-0"> <i class="fa fa-file"></i>&nbsp;&nbsp;Antecedentes Heredo-familiares</h3>
                               </button>
                              
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                              <?php include 'bloques/historial_clinico/antecedentes_hf.php' ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="accrodion-regular">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <h3 class="mb-0"> <i class="fa fa-file"></i>&nbsp;&nbsp;Antecedentes Personales</h3>
                               </button>
                              
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                            <?php include 'bloques/historial_clinico/antecedentes_p.php' ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="accrodion-regular">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <h3 class="mb-0"> <i class="fa fa-file"></i>&nbsp;&nbsp;Antecedentes Personales Patológicos</h3>
                               </button>
                              
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                            <?php include 'bloques/historial_clinico/antecedentes_pp.php' ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br><br>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="accrodion-regular">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <h3 class="mb-0"> <i class="fa fa-file"></i>&nbsp;&nbsp;Antecedentes Gineco-obstetrico</h3>
                               </button>
                              
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">

                            <?php include 'bloques/historial_clinico/antecedentes_go.php' ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <button type="submit" class="btn btn-success" name="enviar_formulario">Enviar Formulario</button>

</div>
<!--<div class="card">
    <h5 class="card-header">Pie Chart </h5>
    <div class="card-body">
        <div id="c3chart_pie2"></div>
    </div>
</div>
 ============================================================== -->
<!-- end accrodions style one -->
<!-- ============================================================== -->







<?php include 'componentes/footer.php' ?>
<script type="text/javascript" src="js/func_consultas.js"></script>
<script type="text/javascript" src="js/func_pacientes.js"></script>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
</body>
</html>