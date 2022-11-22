
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- accrodions style one -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="accrodion-regular">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                               <h3 class="mb-0"> <i class="fa fa-calendar"></i>&nbsp;&nbsp;Citas para Hoy</h3>
                                               </button>
                                              
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                            <?php 
                                        
                                            $date = new DateTime("now", new DateTimeZone('America/Mazatlan') );
                                            $fecha = $date->format('Y-m-d');
                              
                                            $sql="SELECT * FROM agenda AS A INNER JOIN pacientes AS P ON (A.id_doctor = P.id_doctor) AND (A.id_Paciente = P.id_Paciente) WHERE A.id_doctor=$id_doctor and A.START LIKE '%".$fecha."%' ORDER BY A.start ASC";
                                            $query = $pdo->prepare($sql);
                                            $query->execute();
                                            $list = $query->fetchAll();
                                            foreach ($list as $ver) {
                                         ?>
                                         
                                           <div style="border: 1px solid #ccc; border-radius: 1em">
                                                  <div style="padding: 10px; padding-left: 30px;">
                                                    <label class="lead"><i class="fa fa-user"></i>&nbsp;<?php echo utf8_decode($ver['nb_Paciente']) ?></label><br>
                                                    <label class="lead"><i class="fa fa-phone"></i> &nbsp;<?php echo $ver['nu_Celular'] ?></label><br>
                                                    <label class="lead"><i class="fa fa-book"></i> &nbsp;<?php echo utf8_encode($ver['descripcion']) ?></label><br>
                                                    <p class="lead"><i class="fa fa-clock"></i> &nbsp;<?php echo date("h:i a",strtotime($ver['start'])); ?></p>
                                                    <p class="lead"><i class="fa fa-certificate" style="color: <?php echo $ver['color']; ?>;"></i>&nbsp;<?php echo $ver['status']; ?></p>
                                                    

                                                    <?php 
                                                        $id_paciente=$ver['id_Paciente'];
                                                          $sql="SELECT count(id_doctor) AS total from historial_clinico WHERE id_doctor=$id_doctor and id_paciente=$id_paciente";
                                                          $query = $pdo->prepare($sql);
                                                          $query->execute();
                                                          $list = $query->fetchAll();
                                                          foreach ($list as $filas) 
                                                          {
                                                            if ($filas['total']==0) {
                                                                echo "Nota: Este paciente es de primera vez";
                                                            }else{
                                                                echo 'Nota: Veces consultado <label>'.$filas['total'].'</label>,';
                                                            }
                                                          }
                                                        ?>

                                                        <?php 
                                                          $sql="SELECT max(fecha) AS fecha from historial_clinico WHERE id_doctor=$id_doctor and id_paciente=$id_paciente";
                                                          $query = $pdo->prepare($sql);
                                                          $query->execute();
                                                          $list = $query->fetchAll();
                                                          foreach ($list as $filas) {
                                                          {
                                                            if ($filas['fecha']==0) {
                                                                echo "";
                                                            }else{
                                                                echo ' Fecha de Última consulta <label>'.date("d-m-Y",strtotime($filas['fecha'])).'</label> ';
                                                            }
                                                          }
                                                        ?>
                                                    <div class="col-md-12">
                                                    <a href="consultas_2.php?id_Paciente=<?php echo($ver['id_Paciente']) ?>" class="btn btn-success" style="float: right; margin-top: -40px"> <i class="fa fa-edit"></i>CONSULTAR</a>
                                                        
                                                    </div>

                                                    </div>
                                                </div><br>

                                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                              </div>

                                            <?php } ?>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                        <!--<div class="card">
                            <h5 class="card-header">Pie Chart </h5>
                            <div class="card-body">
                                <div id="c3chart_pie2"></div>
                            </div>
                        </div>
                         ============================================================== -->
                        <!-- end accrodions style one -->
                        <!-- ============================================================== -->

