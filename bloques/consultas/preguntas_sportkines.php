<?php
//Consulta para extraer datos del cuestionario
$id_paciente=$_SESSION['id_pac_get'];
$id_doctor=$_SESSION['id_usuario'];


$r1_1Si ='';
$r1_1No ='';
$r1_2Si ='';
$r1_2No ='';
$r1_3Si ='';
$r1_3No ='';
$r1_4Si ='';
$r1_4No ='';
$r1_5Si ='';
$r1_5No ='';
$r1_6Si ='';
$r1_6No ='';
$r1_7Si ='';
$r1_7No ='';
$r1_8Si ='';
$r1_8No ='';
$r1_9Si ='';
$r1_9No ='';
$r1_10Si ='';
$r1_10No ='';
$r1_11Si ='';
$r1_11No ='';
$r1_12Si ='';
$r1_12No ='';
$r1_13Si ='';
$r1_13No ='';

$extraccion_cuestionario = "SELECT tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod FROM antecedentes_c WHERE id_doctor=".$id_doctor." and id_Paciente=". $id_paciente;
$resultado = $conexion->query($extraccion_cuestionario);
    while($res = $resultado->fetch_assoc()){

         
            if ($res['pregunta'] == 1 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_1Si = 'checked';
                } else {
                    $r1_1No = 'checked';
                }
                $r1_1Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 2 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_2Si = 'checked';
                } else {
                    $r1_2No = 'checked';
                }
                $r1_2Detalle = $res ['Detalle'];
            }   

            if ($res['pregunta'] == 3 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_3Si = 'checked';
                } else {
                    $r1_3No = 'checked';
                }
                $r1_3Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 4 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_4Si = 'checked';
                } else {
                    $r1_4No = 'checked';
                }
                $r1_4Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 5 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_5Si = 'checked';
                } else {
                    $r1_5No = 'checked';
                }
                $r1_5Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 6 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_6Si = 'checked';
                } else {
                    $r1_6No = 'checked';
                }
                $r1_6Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 6 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_6Si = 'checked';
                } else {
                    $r1_6No = 'checked';
                }
                $r1_6Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 7 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_7Si = 'checked';
                } else {
                    $r1_7No = 'checked';
                }
                $r1_7Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 8 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_8Si = 'checked';
                } else {
                    $r1_8No = 'checked';
                }
                $r1_8Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 9 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_9Si = 'checked';
                } else {
                    $r1_9No = 'checked';
                }
                $r1_9Detalle = $res ['Detalle'];
            }   

            if ($res['pregunta'] == 9 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_9Si = 'checked';
                } else {
                    $r1_9No = 'checked';
                }
                $r1_9Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 10 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_10Si = 'checked';
                } else {
                    $r1_10No = 'checked';
                }
                $r1_10Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 11 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_11Si = 'checked';
                } else {
                    $r1_11No = 'checked';
                }
                $r1_11Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 12 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_12Si = 'checked';
                } else {
                    $r1_12No = 'checked';
                }
                $r1_12Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 13 ){
                
                if ($res['Respuesta'] == 1) {
                    $r1_13Si = 'checked';
                } else {
                    $r1_13No = 'checked';
                }
                $r1_13Detalle = $res ['Detalle'];
            }   
        }
        

?>

<div class="card">
    <div class="card-header" id="headingOne">
        <h3 class="mb-0"> &nbsp;&nbsp;Cuestionario</h3>                         
    </div>

<div class="col-md-12">
	<table style="width: 100%">
	<tr>
		<td></td>
		<td>SI</td>
		<td>NO</td>
		<td>ESPECIFIQUE</td>
	</tr>
	<tr>
    <td><label>¿CUENTA CON DIAGNOSTICO MEDICO?</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_1Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_1No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_1Detalle; ?>" class="form-control" readonly="readonly" > </td>	
	<tr>
		<td><label>¿TRAE ESTUDIOS COMPLEMENTARIOS (RX), RESONANCIA MAGNETICA, UTRASONIDO, OTRO?</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_2Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_2No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_2Detalle; ?>" class="form-control" readonly="readonly" > </td>	

	</tr>
	<tr>
		<td><label>¿COMO NOS CONOCIÓ? </label></td>
        <?php echo '<td><input type="checkbox" '. $r1_3Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_3No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_3Detalle; ?>" class="form-control" readonly="readonly" > </td>	

	</tr>
	<tr>
		<td><label>¿POSEE SEGURO DE GASTOS MÉDICOS MAYORES?</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_4Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_4No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_4Detalle; ?>" class="form-control" readonly="readonly" > </td>	

	</tr>
	<tr>
		<td><label>¿ACTUALMENTE TIENE DOLOR? CALIFIQUE 1-10 (10=MUCHO DOLOR, 1=POCO DOLOR)</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_5Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_5No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_5Detalle; ?>" class="form-control" readonly="readonly" > </td>	

	</tr>
	<tr>
		<td><label>¿CUANTO TIEMPO TIENE CON EL PADECIMIENTO ACTUAL?</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_6Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_6No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_6Detalle; ?>" class="form-control" readonly="readonly" > </td>

	</tr>
    <tr>
		<td><label>¿LE INCAPACITA PARA ACTIVIDAD LABORAL?</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_7Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_7No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_7Detalle; ?>" class="form-control" readonly="readonly" > </td>

	</tr>
    <tr>
		<td><label>¿PRACTICA ALGUN DEPORTE? </label></td>
        <?php echo '<td><input type="checkbox" '. $r1_8Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_8No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_8Detalle; ?>" class="form-control" readonly="readonly" > </td>

	</tr>
    <tr>
		<td><label>¿TUVO CIRUGÍA PREVIA? DIGA EN QUE PARTE:</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_9Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_9No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_9Detalle; ?>" class="form-control" readonly="readonly" > </td>

    </tr>
    
    <tr>
		<td><label>PARTICULAR</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_10Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_10No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_10Detalle; ?>" class="form-control" readonly="readonly" > </td>

    </tr>
    <tr>
		<td><label>MEDICO</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_11Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_11No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_11Detalle; ?>" class="form-control" readonly="readonly" > </td>

    </tr>
    <tr>
		<td><label>ASEGURADORA</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_12Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_12No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_12Detalle; ?>" class="form-control" readonly="readonly" > </td>

    </tr>
    <tr>
		<td><label>CORTESÍA</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_13Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_13No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_13Detalle; ?>" class="form-control" readonly="readonly" > </td>

	</tr>
	</table>
	
</div>
</div>



