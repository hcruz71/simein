<?php 
    if(!isset($_SESSION)) {
        session_start();
    }

    if (@!$_SESSION['id_usuario']) {
        header("Location:inicio/");
       /* include 'conexion.php';
        $id_doctor=$_SESSION['id_usuario'];
        $rol=$_SESSION['rol'];*/
    }else{
        include 'conexion.php';
        $id_doctor=$_SESSION['id_usuario'];
        $rol=$_SESSION['rol'];
    }


    header("Content-type: text/html; charset=utf8");
?>
<div class="dashboard-header" >
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #477db3;">
        <a class="navbar-brand" href="index.php" style="color: #fff"><img src="assets/images/logo_nav.png" alt="" class="user-avatar-md rounded-circle">&nbsp;Simein</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
            <ul class="navbar-nav ml-auto navbar-right-top">
                    <?php if ($_SESSION['rol']==1): ?>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title">  Pagos diponibles</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="https://www.mercadopago.com/mlm/checkout/start?pref_id=395270279-bf038fa9-943c-4bae-a013-f8d421ad421b" class="list-group-item list-group-item-action active" target="_blank">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><i class="fa fa-dollar"></i></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Pago Completo</span>Puedes adquirir completamente tu expediente clinico aqui, acompleta el pago.
                                                        <div class="notification-date">Estas en Tiempo Limitado</div>
                                                    </div>
                                                </div>
                                            </a>


                                            <a href="https://www.mercadopago.com/mlm/checkout/start?pref_id=395270279-7e1b7618-1541-4cc2-9023-883fd29821e1" class="list-group-item list-group-item-action" target="_blank">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">
                                                    Pagos diferidos</span>puedes a 4 pagos diferidos semanales.
                                                        <div class="notification-date">Pago 1</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    <?php endif ?>
                        
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff"><?php
                       
                        $sql=mysql_query("SELECT id_doctor, atencion, nombre FROM doctor where id_doctor=$id_doctor");
                        
                        while($res=mysql_fetch_assoc($sql)){       
                        ?>
                        <img src="<?php echo $res['perfil']; ?>" alt="" class="user-avatar-md rounded-circle">&nbsp;&nbsp;
                        <?php echo $res['atencion'].' '.$res['nombre']; ?> 

                    <?php
                    }
                    ?></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">

                     <?php if ($_SESSION['rol']==1): ?>                       
                        <a class="dropdown-item" href="configuracion.php"><i class="fas fa-cogs"></i>&nbsp;&nbsp;Configuración</a>
                    <?php endif ?>
                        <a class="dropdown-item" href="desconectar.php"><i class="fas fa-power-off"></i>&nbsp;&nbsp;Cerrar Sesión</a>
                    </div>
                </li>
            </ul>
        </div>

        <a class="d-xl-none d-lg-none" href="#"></a>
        <button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-fw fa-th" style="color: #fff"></span>
        </button>
    </nav>
</div>