        <div class="nav-left-sidebar" style="width: 20%">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg" style="position: fixed; z-index: 1000; background-color: #fff; width: 20%">
                    <div class="collapse navbar-collapse" id="navbarNav" style="background-color: #fff">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                <p class="lead">menu</p>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="index.php" style="font-size: 15px"><i class="fa fa-fw fa-dot-circle"></i>INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="agenda.php" style="font-size: 15px"><i class="fa fa-fw fa-calendar"></i>AGENDA</a>
                            </li>
                        <?php if ($_SESSION['rol']==1 || $_SESSION['rol']==2 ): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="pacientes.php" style="font-size: 15px"><i class="fas fa-fw fa-users"></i>PACIENTES</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_SESSION['rol']==0 || $_SESSION['rol']==3 || $_SESSION['rol']==4 ): ?>
                            <!--<li class="nav-item">
                                <a class="nav-link" href="doctores.php" style="font-size: 15px"><i class="fas fa-fw fa-user-md"></i>DOCTORES</a>
                            </li>-->
                        <?php endif ?>

                        <?php if ($_SESSION['rol']==1): ?>
                            <li class="nav-item ">
                                <a class="nav-link" href="estadisticas.php"><i class="fas fa-fw fa-chart-area"></i>ESTADISTICAS</a>
                            </li>
                        <?php endif ?>
                            <li class="nav-item">
                                <a class="nav-link" href="configuracion.php"><i class="fas fa-fw fa-cogs"></i>CONFIGURACIÓN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="desconectar.php"><i class="fas fa-power-off"></i>&nbsp;&nbsp;CERRAR SESIÓN</a>
                            </li>
                        <?php if ($_SESSION['id_usuario']==1): ?>
                            <li class="nav-item">
                                <iframe src="inicio/carrussel.php" frameborder="0" width="100%" height="400px"></iframe>
                            </li>
                        <?php endif ?>
                        
                 

                        </ul>
                    </div>
                </nav>
            </div>
        </div>