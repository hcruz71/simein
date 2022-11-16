<?php 
 //error_reporting(0);




function calcular_edad($fecha){
  $fecha_nac = new DateTime(date('Y/m/d',strtotime($fecha)));
  $fecha_hoy =  new DateTime(date('Y/m/d',time())); 
  $edad = date_diff($fecha_hoy,$fecha_nac); 
  return $edad;
}

  $sql = "SELECT fl_File, nb_Paciente, nu_Telefono, nu_Celular, de_Email, id_Sexo, fh_Nacimiento, fh_Ingreso, nu_Edad, id_Sangre, de_Religion,  de_Ocupacion, nb_Emergencia, fh_Ingreso, nu_Emergencia, de_Estado_civil, de_Otros_datos   from pacientes WHERE id_doctor=$id_doctor and id_paciente=$id_paciente";

  $query = $pdo->prepare($sql);
  $query->execute();
  $list = $query->fetchAll();
	foreach ($list as $filas_pac) 
  {

  /*  $resultado_doc = $conexion->query($query1);
    while($filas_pac = $resultado_doc->fetch_assoc())
  {*/
    $file=$filas_pac['fl_File'];
    $nombre=$filas_pac['nb_Paciente'];
    $nu_Telefono=$filas_pac['nu_Telefono'];
    $nu_Celular=$filas_pac['nu_Celular'];
    $de_Email=$filas_pac['de_Email'];
    $id_Sexo=$filas_pac['id_Sexo'];
    $fh_Nacimiento=$filas_pac['fh_Nacimiento'];
    $fh_Ingreso=$filas_pac['fh_Ingreso'];
    $nu_Edad=$filas_pac['nu_Edad'];
    $id_Sangre=$filas_pac['id_Sangre'];
    $de_Religion=$filas_pac['de_Religion'];
    $de_Ocupacion=$filas_pac['de_Ocupacion'];
    $nb_Emergencia=$filas_pac['nb_Emergencia'];
    $fh_Ingreso=$filas_pac['fh_Ingreso'];
    $nu_Emergencia=$filas_pac['nu_Emergencia'];
    $de_Estado_civil=$filas_pac['de_Estado_civil'];
    $de_Otros_datos=$filas_pac['de_Otros_datos'];
  }


    
    $sql = "SELECT id_especialidad FROM doctor where id_doctor = $id_doctor";

    $query = $pdo->prepare($sql);
    $query->execute();

    $buscar= $query->rowCount();
		if ($buscar > 0)
		{

    //if ($rowAntecedente = mysqli_fetch_array($query2))
    //{
        $list = $query->fetchAll();
				foreach ($list as $rowAntecedente) {
        $esp =  $rowAntecedente['id_especialidad'] ;
        }
    } else{
        
        echo $rowAntecedente;
    }


    $edad = calcular_edad($fh_Nacimiento);

?>

        <div class="nav-left-sidebar" style="width: 20%">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg" style="position: fixed; z-index: 1000; background-color: #fff; width: 20%">
                    <div class="collapse navbar-collapse" id="navbarNav" style="background-color: #fff">
                        <ul class="navbar-nav flex-column">
                            <a href="pacientes.php" style="font-size: 20px; color: #4d86cc"><i class="fa fa-backward"></i>&nbsp;Terminar Consulta</a>
                            <label>Fotografía</label>
                              <img src="<?php echo($file) ?>" class="img-responsive" style="width: 190px; border-radius: 50%">

                        <label for="nb_Paciente">Nombre(s):</label>
                        <h3><?php echo $nombre ?></h3>
                        <label>Fecha de nac:</label>
                        <h3><?php echo date("d-m-Y",strtotime($fh_Nacimiento)) ?></h3>
                        
                        <label>Edad:</label>
                        <h3><?php     
                        if ($esp==1 || $esp ==2){
                          echo "{$edad->format('%Y')} años";
                        }  else
                             echo "{$edad->format('%Y')} años-{$edad->format('%m')} meses-{$edad->format('%d')} días"
                        ?> </h3>
                      
                        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#editar_pac"><i class="fa fa-edit"></i>&nbsp;Editar Datos</button>

                        <br>

                        <?php
                         $id_doctor=$_SESSION['id_usuario'];
                        if ($id_doctor == 130 OR $id_doctor == 131 OR $id_doctor == 132 OR $id_doctor == 133){
                            echo '<div ><img width="250" src="assets/images/cte/tarjeta_sportk.png"  ></div>';
                            echo '<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#visitas_sk"><i class="fa fa-edit"></i>&nbsp;Tarjeta de paciente</button>';
                            
                        }
                        ?>
                
                        </div>

                        </ul>
                        
                       
                        
                    </div>
                </nav>
            </div>
        </div>


