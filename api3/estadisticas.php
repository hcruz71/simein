
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
<?php
//utf8_decode($row['municipio'];
$id_doctor=$_SESSION['id_usuario'];

    require 'conexion_i.php';


    $query_doc = "SELECT count(id_doctor) AS F FROM pacientes where id_doctor=$id_doctor and id_Sexo='Femenino'";
    $resultado_doc = $conexion->query($query_doc);
    while($row_doc = $resultado_doc->fetch_assoc())
    {
        $F=$row_doc['F'];

    }

    $query_m = "SELECT count(id_doctor) AS M FROM pacientes where id_doctor=$id_doctor and id_Sexo='Masculino'";
    $resultado_m = $conexion->query($query_m);
    while($row_m = $resultado_m->fetch_assoc())
    {
        $M=$row_m['M'];

    }

?>

        <!-- wrapper  -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><i class="fas fa-fw fa-chart-area"></i>&nbsp;Estadisticas</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        
                        <?php include 'bloques/estadisticas/sexo.php'; ?>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    
					<br>
				    	
				    </div>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>

<?php include 'componentes/footer.php' ?>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->

</body>

<script type="text/javascript">

if ($('#chartjs_bar').length) {
                var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Sexo"],
                        datasets: [{
                            label: 'Masculino',
                            data: [<?php echo $M; ?>, 19, 3, 17, 28, 24, 7],
                           backgroundColor: "rgba(89, 105, 255,0.5)",
                                    borderColor: "rgba(89, 105, 255,0.7)",
                            borderWidth: 2
                        }, {
                            label: 'Fememnino',
                            data: [<?php echo $F; ?>, 29, 5, 5, 20, 3, 10],
                           backgroundColor: "rgba(255, 64, 123,0.5)",
                                    borderColor: "rgba(255, 64, 123,0.7)",
                            borderWidth: 2
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{

                            }]
                        },
                             legend: {
                        display: true,
                        position: 'bottom',

                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },

                    scales: {
                        xAxes: [{
                            ticks: {
                                fontSize: 14,
                                fontFamily: 'Circular Std Book',
                                fontColor: '#71748d',
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                fontSize: 14,
                                fontFamily: 'Circular Std Book',
                                fontColor: '#71748d',
                            }
                        }]
                    }
                }

                    
                });
            }
</script>
 
</html>