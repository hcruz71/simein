<!doctype html>
<html lang="en">
  
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

                <?php if ($rol==3): ?>
                        <?php include 'admin/inicio/reportes_detalles.php'; ?>
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
<?php include 'componentes/footer.php' ?>
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