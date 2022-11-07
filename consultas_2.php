
<!doctype html>
<html lang="en">
  <?php 
   if(!isset($_SESSION)) {
    session_start();
}
  $_SESSION['id_pac_get']=$_GET['id_Paciente'];
$id_paciente=$_GET['id_Paciente'];
 ?>
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
        <?php include 'bloques/consultas/datos_pacientes_left.php' ?>
        <!-- end left sidebar -->
<?php

if(!isset($_SESSION)) {
    session_start();
}
//utf8_decode($row['municipio'];

$id_doctor=$_SESSION['id_usuario'];
$id_usu=$_SESSION['id'];

    require 'conexion_i.php';
/*
    ANTES
    $query_doc = "SELECT atencion, id_doctor, nombre, especialidad, de_cEsp, de_cProf, direccion, telefono, celular, correo, id_especialidad, id_alergicos, id_hf, id_pp, id_np, id_go, id_padecimiento, id_exploracion, id_signos_vitales, id_diagnosticos, id_gabinete, id_honorarios, id_receta FROM doctor where id_doctor=$id_doctor";
    $resultado_doc = $conexion->query($query_doc);
    while($row_doc = $resultado_doc->fetch_assoc())

    CAMBIO
        $query1 = "SELECT atencion, id_doctor, nombre, especialidad, de_cEsp, de_cProf, direccion, telefono, celular, correo, id_especialidad, id_alergicos, id_hf, id_pp, id_np, id_go, id_padecimiento, id_exploracion, id_signos_vitales, id_diagnosticos, id_gabinete, id_honorarios, id_receta FROM doctor where id_doctor=$id_doctor";
        $resultado_doc = $conexion->query($query1);
        while($row_doc = $resultado_doc->fetch_assoc()){
     
    */
    
    $query_doc = "SELECT atencion, id_doctor, nombre, especialidad, de_cEsp, de_cProf, direccion, telefono, celular, correo, id_especialidad, id_alergicos, id_hf, id_pp, id_np, id_go, id_padecimiento, id_exploracion, id_signos_vitales, id_diagnosticos, id_gabinete, id_honorarios, id_receta FROM doctor where id_doctor=$id_doctor";
    $resultado_doc = $conexion->query($query_doc);
    while($row_doc = $resultado_doc->fetch_assoc()){

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

    }
/*
    ANTES
    $query_esp = "SELECT de_especialidad FROM especialidades where id_especialidad=$id_especialidad";
    $resultado_esp = $conexion->query($query_esp);
    while($row_esp = $resultado_esp->fetch_assoc())

    CAMBIO
        $query_esp = "SELECT de_especialidad FROM especialidades where id_especialidad=$id_especialidad";
    $resultado_esp = $conexion->query($query_esp);
    while($row_esp = $resultado_esp->fetch_assoc()){
     
    */
    $query1 = "SELECT de_especialidad FROM especialidades where id_especialidad=$id_especialidad";
    $resultado_doc = $conexion->query($query1);
    while($row_esp = $resultado_doc->fetch_assoc())
    {
        $id_esp=$row_esp['de_especialidad'];

    }
    //utf8_decode($row['municipio'];
    $id=$_SESSION['id'];
    $id_doctor=$_SESSION['id_usuario'];

/*
    ANTES
   $query_doc = "SELECT id_antecedentes, id_historial  FROM usuarios where id=$id_usu";
    $resultado_doc = $conexion->query($query_doc);
    while($row_doc = $resultado_doc->fetch_assoc())

    CAMBIO
        $query1 = "SELECT id_antecedentes, id_historial  FROM usuarios where id=$id_usu";
        $resultado_doc = $conexion->query($query1);
        while($row_doc = $resultado_doc->fetch_assoc()){
     
    */
    $query_doc = "SELECT id_antecedentes, id_historial  FROM usuarios where id=$id_usu";
    $resultado_doc = $conexion->query($query_doc);
    while($row_doc = $resultado_doc->fetch_assoc())
    {   
        $id_antecedentes=$row_doc['id_antecedentes'];
        $id_historial=$row_doc['id_historial'];
    }
?>
        <!-- wrapper  -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content">
                    

                <?php 
                        if ($id_doctor== 108){ 
                            include 'bloques/consultas/cuestionario.php'; 
                        }

                        if ($id_doctor == 130 OR $id_doctor == 131 OR $id_doctor == 132 OR $id_doctor == 133 OR $id_doctor == 134){
                            include 'bloques/consultas/sportkines_cu.php'; 
                        }
                ?>
                
                <?php if ($id_antecedentes==1): ?>
                <?php include 'bloques/consultas/antecedentes.php'; ?>
                <?php endif ?>

                
                    
<?php if ($id_historial==1): ?>
                    
     
                    <div id="loader" class="text-center">
                        <div class="col-md-offset-4">
                            <img src="loader.gif" style="width: 100px"></div>
                        </div>

                        <!-- PEDIATRIA -->
                        <?php if ($id_especialidad==1): ?>
                            <div class="outer_div"></div>
                        <?php endif ?>
                        <!-- //PEDIATRIA -->

                        <!-- OFTALMOLOGIA -->
                        <?php if ($id_especialidad==2): ?>
                            <div class="h_ofta"></div>
                        <?php endif ?>
                        <!-- //OFTALMOLOGIA -->

                        <!-- PEDIATRIA -->
                        <?php if ($id_especialidad==3): ?>
                            <div class="h_ped"></div>
                        <?php endif ?>
                        <!-- //PEDIATRIA -->

                     </div>
 <?php endif ?>  


 
 <?php if ($id_antecedentes==0): ?>
               <div class="alert alert-danger alert-dismissable col-md-12">
                    <h4> No tienes Acceso a Antecedentes</h4>
                </div>
 <?php endif ?>

 <?php if ($id_historial==0): ?>
    <br>
    <div class="h_enf"></div>
    
 <?php endif ?>
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
<!-- Modal -->
<div id="editar_pac" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3><i class="fa fa-edit"></i>&nbsp;Datos del Paciente</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <?php include 'bloques/pacientes/editar.php'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btn_editar_pac" >Guardar Cambios</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
    </form><!--end form-->

  </div>
</div>

<!-- Modal Tarjeta de Paciente-->
<div id="visitas_sk" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3><i class="fa fa-edit"></i>&nbsp;Visitas del Paciente</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
          
      </div>
 
    </div>
    </form><!--end form-->

  </div>
</div>
<?php include 'componentes/footer.php' ?>
<script type="text/javascript" src="js/func_consultas.js"></script>
<script type="text/javascript" src="js/func_pacientes.js"></script>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
</body>
</html>