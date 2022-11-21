
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
<?php
//session_start();
//utf8_decode($row['municipio'];
$id_doctor=$_SESSION['id_usuario'];

    require 'conexion.php';


    $sql = "SELECT * FROM doctor where id_doctor=$id_doctor";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $row_doc) {
   
        $a=$row_doc['atencion'];
        $id=$row_doc['id_doctor'];
        $n=$row_doc['nombre'];
        $esp=$row_doc['especialidad'];
        $e=$row_doc['de_cEsp'];
        $p=$row_doc['de_cProf'];
        $d=$row_doc['direccion'];
        $t=$row_doc['telefono'];
        $c=$row_doc['celular'];
        $m=$row_doc['correo'];
        $id_especialidad=$row_doc['id_especialidad'];
        $id_alergicos=$row_doc['id_alergicos'];
        $id_hf=$row_doc['id_hf'];
        $id_pp=$row_doc['id_pp'];
        $id_np=$row_doc['id_np'];
        $id_go=$row_doc['id_go'];
        $id_padecimiento=$row_doc['id_padecimiento'];
        $id_exploracion=$row_doc['id_exploracion'];
        $id_signos_vitales=$row_doc['id_signos_vitales'];
        $id_diagnosticos=$row_doc['id_diagnosticos'];
        $id_gabinete=$row_doc['id_gabinete'];
        $id_honorarios=$row_doc['id_honorarios'];
        $id_receta=$row_doc['id_receta'];
        $logo=$row_doc['logo'];
        $perfil=$row_doc['perfil'];

    }

?>
        <!-- wrapper  -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader -->
                        <!-- ============================================================== -->
                        <div class="row" >
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header">
                                    <h2 class="pageheader-title"><i class="fas fa-fw fa-cogs"></i>Configuración </h2>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader -->
                        <!-- ============================================================== -->
<?php if ($_SESSION['rol']==1): ?>
                        <?php include 'bloques/configuracion/perfil.php'; ?>
<?php endif ?>
<?php if ($_SESSION['rol']==1): ?>
                        <?php include 'bloques/configuracion/logotipo.php'; ?>
<?php endif ?>
                     
                        <?php include 'bloques/configuracion/contrasenas.php'; ?>


<?php if ($_SESSION['rol']==1): ?>
                        <?php include 'bloques/configuracion/recepcionistas.php'; ?>
<?php endif ?>

<?php if ($_SESSION['rol']==1): ?>
                        <?php include 'bloques/configuracion/consultas.php'; ?>
<?php endif ?>

<?php if ($_SESSION['rol']==1): ?>
                        <?php include 'bloques/configuracion/recetas.php'; ?>
<?php endif ?>     
                 
                    </div>
                    <!-- ============================================================== -->
                    <!-- sidenavbar -->
                    <!-- ============================================================== -->
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">

                        <div class="sidebar-nav-fixed">
                        	<br><br><br>
                            <ul class="list-unstyled">
<?php if ($_SESSION['rol']==1): ?>
                                <li><a href="#perfil" class="active">Perfil</a></li>
                                <li><a href="#logotipo">Logotipo</a></li>
<?php endif ?>
                                <li><a href="#contrasena">Contraseñas</a></li>

<?php if ($_SESSION['rol']==1): ?>
                                <li><a href="#asistentes">Asistentes</a></li>
                                <li><a href="#consultas">Consultas</a></li>
                                <!--<li><a href="#recetas">Recetas</a></li>-->
<?php endif ?>

                            </ul>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- end sidenavbar -->
                    <!-- ============================================================== -->
                </div><!--/.row-->

            </div>

        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    
    <script>
        // Convert Base64 to Image
        function convert(){
            var filesSelected = document.getElementById("fileLogo").files;
                if (filesSelected.length > 0) {
                    var fileToLoad = filesSelected[0];
                    var fileReader = new FileReader();
                    fileReader.onload = function(fileLoadedEvent) {
                        var data = fileLoadedEvent.target.result;
                        $.ajax({
                            type:"POST",
                            url:"db/archivos.php",
                            data:{logo:data},
                            success:function(r){
                                if (r==1) {
                                document.getElementById('img_logo').setAttribute('src', data);
                                alertSuccess();
                                }else{
                                    alertDanger();
                                }
                                
                            }
                        });
                    };
                    fileReader.readAsDataURL(fileToLoad);
                }
                
               //myVar = setTimeout(load, 1700);  
            }
        

        // Convert Base64 Perfil del Médico
        function convert_perfil(){
            var filesSelected = document.getElementById("file_perfil").files;
                if (filesSelected.length > 0) {
                    var fileToLoad = filesSelected[0];
                    var fileReader = new FileReader();
                    fileReader.onload = function(fileLoadedEvent) {
                       var data = fileLoadedEvent.target.result;
                        $.ajax({
                            type:"POST",
                            url:"db/archivos.php",
                            data:{perfil:data},
                            success:function(r){
                                //alert('$("#response").val()');
                                if (r==1) {
                                    document.getElementById('img_perfil').setAttribute('src', data);
                                alertSuccess();
                            }else{
                                alertDanger();
                            }
                            }
                        });
                    };
                    fileReader.readAsDataURL(fileToLoad);
                }
                
               //myVar = setTimeout(load_perfil, 1700);  
            }


    </script>
<?php include 'componentes/footer.php' ?>
</body>
<script type="text/javascript" src="js/func_configuracion.js"></script>
 
</html>