<?php 
    if(!isset($_SESSION)) {
        session_start();
   }

    if (@!$_SESSION['id_usuario']) {
        header("Location:inicio/");
  
    }else{
        //include 'conexion_i.php';
        $id_doctor=$_SESSION['id_usuario'];
        $rol=$_SESSION['rol'];
    }



    header("Content-type: text/html; charset=utf8");
?>
<div class="dashboard-header" >
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #477db3;">
        <a class="navbar-brand" href="" style="color: #fff"><img src="assets/images/logo_nav.png" alt="" class="user-avatar-md rounded-circle">&nbsp;Simein</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
           
        </div>

        <a class="d-xl-none d-lg-none" href="#"></a>
        <button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-fw fa-th" style="color: #fff"></span>
        </button>
    </nav>
</div>