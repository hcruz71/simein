 <?php 
 session_start();
 if ($_SESSION['rol']==3 || $_SESSION['rol']==4) {
      header("Location:agenda2.php");
  } ?>
  <!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agenda</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link href='assets/vendor/full-calendar/css/fullcalendar.css' rel='stylesheet' />
    <link href='assets/vendor/full-calendar/css/fullcalendar.print.css' rel='stylesheet' media='print' />
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->

        <!-- navbar -->
        <?php include 'componentes/nav.php' ?>
        <!-- end navbar -->

        <!-- left sidebar -->
        <?php include 'componentes/nav-left.php' ?>
        <!-- end left sidebar -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Agenda </h2>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- simple calendar -->
                <!-- ============================================================== -->
                <div class="row" style="background: #fff">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <br>
                        <div class="col-md-12">
                            <div id='calendar1' style="-webkit-overflow-scrolling: touch;"></div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end simple calendar -->
                <!-- ============================================================== -->

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: center">
                        &copy; Copyright <strong>SIMEIN</strong>. Todos los derechos son recervados
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->


    <script src="assets/vendor/jquery/jquery-3.6.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src='assets/vendor/full-calendar/js/moment.min.js'></script>
    <script src='assets/vendor/full-calendar/js/fullcalendar.js'></script>
    <script src='assets/vendor/full-calendar/js/jquery-ui.min.js'></script>
    <script src='assets/vendor/full-calendar/js/jquery.ui.touch-punch.min.js'></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="componentes/functions.js"></script>
      <script type="text/javascript" src="js/func_agenda.js"></script>
    <?php include 'bloques/agenda/calendar.php'; ?>

    <?php
            include 'conexion.php';
                if(isset($_POST['agregar_cita']))
                {
                    
                    if ($_POST['id_pac']==""){
                    $doc=$_SESSION['id_usuario'];
                    $id_pac=$_POST['id_pac'];
                    $busqueda=$_POST['busqueda'];
                    $agendar_start=$_POST['agendar_fecha'].' '.$_POST['agendar_hora'];
                    $descripcion=$_POST['descripcion'];
                    $cel=$_POST['nu_Celular'];
                    $fh_Nacimiento=$_POST['fh_Nacimiento'];
                    $nu_Edad=$_POST['nu_Edad'];
                    $id_Sexo=$_POST['id_Sexo'];
                    $de_Ocupacion=$_POST['de_Ocupacion'];
                    $de_Email=$_POST['de_Email'];
                    $foto_pac=$_POST['foto_pac'];

                    
                    $resent_max="SELECT id_Paciente FROM pacientes WHERE id_doctor=$doc and id_Paciente=(SELECT MAX(id_Paciente) FROM pacientes WHERE id_doctor=$doc)";
                    $resent=mysqli_query($conexion,$resent_max);
                    while ($row=mysqli_fetch_row ($resent)){
                        $row1=$row[0]+1;
                    }

                    $conexion->query("INSERT INTO agenda(descripcion, color, txtColor, start, id_doctor, id_paciente, status) VALUES ('$descripcion','#3ca3d6','#ffffff','$agendar_start','$doc', '$row1', 'Por Definir')");

                    $conexion->query("INSERT INTO pacientes (id_doctor, id_Paciente, nb_Paciente, nu_Celular, sn_Activo, fh_Nacimiento, nu_Edad, id_Sexo, de_Ocupacion, de_Email, fl_File) VALUES ('$doc','$row1','$busqueda','$cel', '1','$fh_Nacimiento','$nu_Edad','$id_Sexo','$de_Ocupacion','$de_Email','$foto_pac')");

                    $conexion->query("INSERT INTO antecedentes (id_doctor, id_paciente) VALUES ('$doc','$row1')");

                     echo "<script> location.href='agenda.php'; </script>";


                    }else{
                    $doc=$_SESSION['id_usuario'];
                    $id_pac=$_POST['id_pac'];
                    $busqueda=$_POST['busqueda'];
                    $agendar_start=$_POST['agendar_fecha'].' '.$_POST['agendar_hora'];
                    $descripcion=$_POST['descripcion'];
                    $fh_Nacimiento=$_POST['fh_Nacimiento'];
                    $nu_Edad=$_POST['nu_Edad'];
                    $id_Sexo=$_POST['id_Sexo'];
                    $de_Ocupacion=$_POST['de_Ocupacion'];
                    $de_Email=$_POST['de_Email'];
                    $cel=$_POST['nu_Celular'];
                    $foto_pac=$_POST['foto_pac'];

                    $conexion->query("INSERT INTO agenda (descripcion, start, id_doctor, id_paciente, status) VALUES ('$descripcion','$agendar_start','$doc', '$id_pac', 'Por Definir')");
                    $conexion->query("update pacientes set nb_Paciente='$busqueda', nu_Celular='$cel', fh_Nacimiento='$fh_Nacimiento', nu_Edad='$nu_Edad', id_Sexo='$id_Sexo', de_Ocupacion='$de_Ocupacion', de_Email='$de_Email', fl_File='$foto_pac' WHERE id_doctor=$doc and id_Paciente=$id_pac");
                     echo "<script> location.href='agenda.php'; </script>";

                    }

                }

                if(isset($_POST['btn_actualizar']))
                {
                    
                    $doc=$_SESSION['id_usuario'];
                    $id_cita=$_POST['id_cita'];
                    $id_pacU=$_POST['id_pacU'];
                    $busquedaU=$_POST['busquedaU'];
                    $startU=$_POST['startU'].' '.$_POST['starthoraU'];
                    $descripcionU=$_POST['descripcionU'];
                    $status_detalles=$_POST['status_detalles'];
                    $nu_CelularU=$_POST['nu_CelularU'];
                    $foto_pacU=$_POST['foto_pacU'];

                    if ($status_detalles=='Por Definir') {
                        $color='#3ca3d6';
                    }
                    if ($status_detalles=='Cancelado') {
                        $color='#cc3816';
                    }
                    if ($status_detalles=='Reagendado') {
                        $color='#cfc620';
                    }
                    if ($status_detalles=='Confirmado') {
                        $color='#79c975';
                    }
                    if ($status_detalles=='En Sala de Espera') {
                        $color='#10d4cd';
                    }
                    if ($status_detalles=='Cirugia') {
                        $color='#d48bff';
                    }

                    $conexion->query("update pacientes set nb_Paciente='$busquedaU', nu_Celular='$nu_CelularU', fl_File='$foto_pacU' WHERE id_doctor=$doc and id_Paciente=$id_pacU");

                    $conexion->query("update agenda set start='$startU', descripcion='$descripcionU', color='$color', status='$status_detalles' WHERE id=$id_cita");

                    echo "<script> location.href='agenda.php'; </script>";
                }

                if(isset($_POST['btn_eliminar']))
                {
                    
                    include("db/abrir_conexion.php");
                    $id=$_POST['id_cita'];

                    $conexion->query("DELETE FROM agenda WHERE id=$id");

                    echo "<script> location.href='agenda.php'; </script>";

                    include("db/cerrar_conexion.php");
                }
            ?>
</body>

</html>