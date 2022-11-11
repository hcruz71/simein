
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
                                              <div class="table-responsive">
                                                  <table class="table">
                                                    <table class="table">
                                                      <thead>
                                                        <tr>
                                                          <th>Hora</th>
                                                          <th>Nombre</th>
                                                          <th>Celular</th>
                                                          <th>Descripción</th>
                                                          <th>Status</th>
                                                          <th>Consultar</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                      <p>Incia Listado detalle citas</p>
                                            <?php 
                                            $fecha= date("y-m-d");
                                            echo("Antes de Conexion");
                                            //include 'conexion.php';
                                            echo("Conexion Include");
                                           // try {
                                                echo("Inicia PDO Connexion");
                                           //     $pdo = connect(); 
                                                echo("Fin PDO Connexion");
                                           // } catch (PDOException $e) {
                                           //     echo 'Falló la conexión: ' . $e->getMessage();
                                           // }
                                           echo("Inicia Select");
                                            $sql= "SELECT * FROM agenda AS A INNER JOIN pacientes AS P ON (A.id_doctor = P.id_doctor) AND (A.id_Paciente = P.id_Paciente) WHERE A.id_doctor=:id_Doctor and A.START LIKE '%:fecha%' ORDER BY A.start ASC";
                                            $query = $pdo->prepare($sql);
                                            $query->bindParam(':idDoctor', $id_doctor, PDO::PARAM_STR);
                                            $query->bindParam(':fecha', $fecha, PDO::PARAM_STR);
                                            echo("Antes execute Select");
                                            $query->execute();
                                            echo("Fin execute Select");
                                            $list = $query->fetchAll();
                                            echo("Lista execute Select");
                                            foreach ($list as $ver) {

                                           /* $sql="SELECT * FROM agenda AS A INNER JOIN pacientes AS P ON (A.id_doctor = P.id_doctor) AND (A.id_Paciente = P.id_Paciente) WHERE A.id_doctor=$id_doctor and A.START LIKE '%".$fecha."%' ORDER BY A.start ASC";
                                         

                                          $result=mysql_query($sql);
                                          while($ver=mysql_fetch_assoc($result)){*/
                                         ?>
                                           
                                                        <tr>
                                                          <td>
                                                            <a href="consultas_2.php?id_Paciente=<?php echo($ver['id_Paciente']) ?>" ><i class="fa fa-clock">&nbsp;</i><?php echo date("h:i a",strtotime($ver['start'])); ?></a>
                                                          </td>

                                                          <td>
                                                            <a href="consultas_2.php?id_Paciente=<?php echo($ver['id_Paciente']) ?>" ><?php echo $ver['nb_Paciente'] ?></a>
                                                          </td>

                                                          <td> 
                                                            <a href="consultas_2.php?id_Paciente=<?php echo($ver['id_Paciente']) ?>" >&nbsp;<?php echo $ver['nu_Celular'] ?></a>
                                                          </td>

                                                          <td>
                                                            <a href="consultas_2.php?id_Paciente=<?php echo($ver['id_Paciente']) ?>" > &nbsp;<?php echo $ver['descripcion'] ?></a>
                                                          </td>

                                                          <td> <a href="consultas_2.php?id_Paciente=<?php echo($ver['id_Paciente']) ?>" ><i class="fa fa-certificate" style="color: <?php echo $ver['color']; ?>;"></i>&nbsp;<?php echo $ver['status'] ?></a></td>
                                                          <td><a href="consultas_2.php?id_Paciente=<?php echo($ver['id_Paciente']) ?>" > <i class="fa fa-edit"></i>CONSULTAR</a></td>
                                                        </tr>
                                                      

                                            <?php }  ?>
                                                      </tbody>
                                                    </table>
                                                  </table>
                                                </div>
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

