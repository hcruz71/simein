<br><br>
            <div class="row">
                <!-- ============================================================== -->
                <!-- accrodions style one -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="accrodion-regular">
                        <div id="accordion2">
                            <div class="card">
                                <div class="card-header" id="headingOne">    
                                       <button class="btn btn-link" data-toggle="collapse" data-target="#collapseHonorarios" aria-expanded="true" aria-controls="collapseHonorarios">
                                       <h3 class="mb-0"><i class="fa fa-dollar-sign"></i>&nbsp;&nbsp;Honorarios</h3>
                                       </button>
                                </div>
                                <div id="collapseHonorarios" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                                    <div class="card-body">
                                    	<div class="table-responsive">
											<table class="table table-hover">
												<thead>
													<tr>
														<th></th>
														<th >Nombre</th>
														<th >Celular</th>
														<th >Concepto</th>
														<th >Total</th>
													</tr>
												</thead>
												<tbody style="width: 100%;">
		                                            <?php 
                                                    $date = new DateTime("now", new DateTimeZone('America/Mazatlan') );
                                                    $fecha = $date->format('Y-m-d');
                                                    
                                                    $sql= "SELECT * FROM honorarios AS A INNER JOIN pacientes AS P ON (A.id_doctor = P.id_doctor) AND (A.id_Paciente = P.id_Paciente) WHERE A.id_doctor=$id_doctor and A.activo=1 and A.fecha LIKE '%".$fecha."%' ORDER BY A.fecha ASC";
                                                    $query = $pdo->prepare($sql);
                                                    try {
                                                        $query->execute();
                                                      }catch (PDOException $e) {
                                                        echo 'Falló la conexión: ' . $e->getMessage();
                                                        die();
                                                    }
                                                      
                                                      $list = $query->fetchAll();
                                                      foreach ($list as $ver) {

		                                            //$sql="SELECT * FROM honorarios AS A INNER JOIN pacientes AS P ON (A.id_doctor = P.id_doctor) AND (A.id_Paciente = P.id_Paciente) WHERE A.id_doctor=$id_doctor and A.activo=1 and A.fecha LIKE '%".$fecha."%' ORDER BY A.fecha ASC";
			                                        //$result=mysql_query($sql);
			                                        //  while($ver=mysql_fetch_assoc($result)){
			                                         ?>
                                                     <?php if (isset($ver['concepto'])): ?>
                                                         <tr class="btn-gris">
                                                <td><img src="<?php echo $ver['fl_File'] ?>" class="img-responsive" style="width: 50px; border-radius: 50%"></td>

                                                <td ><label><?php echo $ver['nb_Paciente'] ?></label></td>

                                                <td><label><?php echo $ver['nu_Celular'] ?></label></</td>

                                                <td ><label><?php echo $ver['concepto'] ?></label></</td>

                                                <td ><label><?php echo $ver['total'] ?></label></</td>

                                                
                                            </tr>
                                                     <?php endif ?>
                                           

                                            <?php } ?>
                                		</tbody>
									</table>
                                    <?php 
                                                    
                                                    $date = new DateTime("now", new DateTimeZone('America/Mazatlan') );
                                                    $fecha = $date->format('Y-m-d');

                                                    $sql="SELECT SUM(total) AS total FROM honorarios WHERE id_doctor=$id_doctor and activo=1 and fecha LIKE '%".$fecha."%'";
                                                    $query = $pdo->prepare($sql);
                                                    $query->execute();
                                                    $list = $query->fetchAll();
                                                    foreach ($list as $ver2) {
                                                        ?>
                                                        <br>
                                                        <h1><label>Total de honorarios recibidos el dia de hoy:</label>&nbsp;&nbsp;<i class="fa fa-dollar-sign"></i><?php echo($ver2['total']); ?><label>.oo</label></h1>
                                                        
                                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <!-- ============================================================== -->
                        <!-- end accrodions style one -->
                        <!-- ============================================================== -->