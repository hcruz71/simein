<!doctype html>
<html lang="en">
    <!-- head -->
    <?php include 'componentes/head.php'; ?>
    <!-- end head -->
<body>

    <!-- main wrapper -->
    <div class="dashboard-main-wrapper">


        <!-- navbar -->
        <?php include 'componentes/nav.php'; ?>
        <!-- end navbar -->

        <!-- left sidebar -->
        <?php include 'componentes/nav-left.php'; ?>
        <!-- end left sidebar -->

        <!-- wrapper  -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                <?php if ($rol==4): ?>
                        <?php include 'admin/inicio/coordinacion.php'; ?>
                <?php endif ?>
                <?php if ($rol==3): ?>
                        <?php include 'admin/inicio/coordinacion.php'; ?>
                <?php endif ?>
                <?php if ($rol==1 || $rol==2): ?>
                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title" style="font-size: 30px">Bienvenido 
                                <?php

                                /*
                                ANTES
                                $sql=mysql_query("SELECT id_honorarios, atencion, nombre FROM doctor where id_doctor='".$id_doctor."'");
                                    while($res=mysql_fetch_assoc($sql)){ 
                                AHORA        
                                $query1 = "SELECT id_honorarios, atencion, nombre FROM doctor where id_doctor='".$id_doctor."'";
                                $resultado_doc = $conexion->query($query1);
                                while($res = $resultado_doc->fetch_assoc()){
                                
                                */
                                $query1 = "SELECT id_honorarios, atencion, nombre FROM doctor where id_doctor='" . $id_doctor. "'" ;
                                $resultado_doc = $conexion->query($query1);
                                while($res = $resultado_doc->fetch_assoc()){
                                    $id_honorarios= $res['id_honorarios'];


                                    ?>
                        
                                    <?php echo $res['atencion'].' '.$res['nombre']; ?> 

                                <?php
                                }
                                ?></h2>

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
                    <!--Create a form -->
                    <?php include 'bloques/inicio/listado_citas.php'; ?>

                    <?php if ($id_honorarios==1): ?>
                        <?php include 'bloques/inicio/listado_honorarios.php'; ?>
                    <?php endif ?>  
    
<?php endif ?>     

<?php if ($rol==3): ?>
    
<?php endif ?>

                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
<?php include 'componentes/footer.php'; ?>
<script src="admin/functions.js"></script>
</body>
<!--<script type="text/javascript">
$(document).ready(function(){
          if ($('#c3chart_pie2').length) {
            var chart = c3.generate({
                bindto: "#c3chart_pie2",
                data: {
                    columns: [
                    <?php 
                        $id_paciente=$ver['id_Paciente'];
                          $sentencia="SELECT count(id_doctor) AS total from historial_clinico WHERE id_doctor=1";
                          $resultado=mysql_query($sentencia);
                          while($filas=mysql_fetch_assoc($resultado))
                          {
                        ?>

                        [<?php echo $filas['total']; ?>, <?php echo $filas['total']; ?>],

                    <?php } ?>
                    ],
                    type: 'pie',

                    colors: {
                         data1: '#5969ff'


                    }
                },
                pie: {
                    label: {
                        format: function(value, ratio, id) {
                            return d3.format('$')(value);
                        }
                    }
                }
            });
        }
      });
</script>-->

 
</html>
