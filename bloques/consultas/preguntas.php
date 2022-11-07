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

$r2_1Si ='';
$r2_1No ='';
$r2_2Si ='';
$r2_2No ='';
$r2_3Si ='';
$r2_3No ='';
$r2_4Si ='';
$r2_4No ='';
$r2_5Si ='';
$r2_5No ='';
$r2_7Si ='';
$r2_7No ='';

$r3_1Si ='';
$r3_1No ='';
$r3_2Si ='';
$r3_2No ='';
$r3_3Si ='';
$r3_3No ='';
$r3_4Si ='';
$r3_4No ='';
$r3_5Si ='';
$r3_5No ='';
$r3_6Si ='';
$r3_6No ='';
$r3_7Si ='';
$r3_7No ='';
$r3_8Si ='';
$r3_8No ='';

$r4_5Si ='';
$r4_5No ='';

$extraccion_cuestionario = "SELECT tipoAntecedente, pregunta, preguntadesc, Respuesta, Detalle, fechaActualiza, fechaUltimaMod FROM antecedentes_c WHERE id_doctor=$id_doctor and id_Paciente= $id_paciente";
$resultado = $conexion->query($extraccion_cuestionario);
    while($res = $resultado->fetch_assoc()){

        if ($res['tipoAntecedente'] == 1){     
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

        }

        if ($res['tipoAntecedente'] == 2){     
            if ($res['pregunta'] == 1 ){
                
                if ($res['Respuesta'] == 1) {
                    $r2_1Si = 'checked';
                } else {
                    $r2_1No = 'checked';
                }
                $r2_1Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 2 ){
                
                if ($res['Respuesta'] == 1) {
                    $r2_2Si = 'checked';
                } else {
                    $r2_2No = 'checked';
                }
                $r2_2Detalle = $res ['Detalle'];
            }   

            if ($res['pregunta'] == 3 ){
                
                if ($res['Respuesta'] == 1) {
                    $r2_3Si = 'checked';
                } else {
                    $r2_3No = 'checked';
                }
                $r2_3Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 4 ){
                
                if ($res['Respuesta'] == 1) {
                    $r2_4Si = 'checked';
                } else {
                    $r2_4No = 'checked';
                }
                $r2_4Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 5 ){
                
                if ($res['Respuesta'] == 1) {
                    $r2_5Si = 'checked';
                } else {
                    $r2_5No = 'checked';
                }
                $r2_5Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 6 ){
        
                $r2_6Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 7 ){
                
                if ($res['Respuesta'] == 1) {
                    $r2_7Si = 'checked';
                } else {
                    $r2_7No = 'checked';
                }
                $r2_7Detalle = $res ['Detalle'];
            }   

        }

        if ($res['tipoAntecedente'] == 3){     
            if ($res['pregunta'] == 1 ){
                
                if ($res['Respuesta'] == 1) {
                    $r3_1Si = 'checked';
                } else {
                    $r3_1No = 'checked';
                }
                $r3_1Detalle = $res ['Detalle'];
            }   
        
            if ($res['pregunta'] == 2 ){
                    
                if ($res['Respuesta'] == 1) {
                    $r3_2Si = 'checked';
                } else {
                    $r3_2No = 'checked';
                }
                $r3_2Detalle = $res ['Detalle'];
            }
            if ($res['pregunta'] == 3 ){
                    
                if ($res['Respuesta'] == 1) {
                    $r3_3Si = 'checked';
                } else {
                    $r3_3No = 'checked';
                }
                $r3_3Detalle = $res ['Detalle'];
            }
            if ($res['pregunta'] == 4 ){
                    
                if ($res['Respuesta'] == 1) {
                    $r3_4Si = 'checked';
                } else {
                    $r3_4No = 'checked';
                }
                $r3_4Detalle = $res ['Detalle'];
            }

            if ($res['pregunta'] == 5 ){
                    
                if ($res['Respuesta'] == 1) {
                    $r3_5Si = 'checked';
                } else {
                    $r3_5No = 'checked';
                }
                $r3_5Detalle = $res ['Detalle'];
            }
            if ($res['pregunta'] == 6 ){
                    
                if ($res['Respuesta'] == 1) {
                    $r3_6Si = 'checked';
                } else {
                    $r3_6No = 'checked';
                }
                $r3_6Detalle = $res ['Detalle'];
            }

            if ($res['pregunta'] == 7 ){
                    
                if ($res['Respuesta'] == 1) {
                    $r3_7Si = 'checked';
                } else {
                    $r3_7No = 'checked';
                }
                $r3_7Detalle = $res ['Detalle'];
            }

            if ($res['pregunta'] == 8 ){
                    
                if ($res['Respuesta'] == 1) {
                    $r3_8Si = 'checked';
                } else {
                    $r3_8No = 'checked';
                }
                $r3_8Detalle = $res ['Detalle'];
            }
        }

        if ($res['tipoAntecedente'] == 4){     
            if ($res['pregunta'] == 1 ){ $r4_1Detalle = $res ['Detalle']; }
            if ($res['pregunta'] == 2 ){ $r4_2Detalle = $res ['Detalle']; }
            if ($res['pregunta'] == 3 ){ $r4_3Detalle = $res ['Detalle']; }
            if ($res['pregunta'] == 4 ){ $r4_4Detalle = $res ['Detalle']; }
            if ($res['pregunta'] == 5 ){
                
                if ($res['Respuesta'] == 1) {
                    $r4_5Si = 'checked';
                } else {
                    $r4_5No = 'checked';
                }
                $r4_5Detalle = $res ['Detalle'];
            }   
            if ($res['pregunta'] == 6 ){ $r4_6Detalle = $res ['Detalle']; }
        }   
    }  





?>

<div class="card">
<div class="card-header" id="headingOne">
    <h3 class="mb-0"> &nbsp;&nbsp;Antecedentes Heredo-familiares</h3>                         
</div>

<div class="col-md-12">
	<table style="width: 100%">
	<tr>
		<td></td>
		<td>SI</td>
		<td>NO</td>
		<td>¿QUIEN?</td>
	</tr>
	<tr>
    <td><label>DIABETES</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_1Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_1No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_1Detalle; ?>" class="form-control" readonly="readonly" > </td>	
	<tr>
		<td><label>HIPERTENSION ARTERIAL</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_2Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_2No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_2Detalle; ?>" class="form-control" readonly="readonly" > </td>	

	</tr>
	<tr>
		<td><label>NEUROPATIAS</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_3Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_3No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_3Detalle; ?>" class="form-control" readonly="readonly" > </td>	

	</tr>
	<tr>
		<td><label>CANCER</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_4Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_4No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_4Detalle; ?>" class="form-control" readonly="readonly" > </td>	

	</tr>
	<tr>
		<td><label>CARDIOPATIAS</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_5Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_5No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_5Detalle; ?>" class="form-control" readonly="readonly" > </td>	

	</tr>
	<tr>
		<td><label>MALFORMACIONES</label></td>
        <?php echo '<td><input type="checkbox" '. $r1_6Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r1_6No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r1_6Detalle; ?>" class="form-control" readonly="readonly" > </td>

	</tr>
	</table>
	
</div>
</div>

<div class="card">
<div class="col-md-12">

<div class="card-header" id="headingOne">
    <h3 class="mb-0"> &nbsp;&nbsp;Antecedentes Personales</h3>                         
</div>

<table style="width: 100%">
	<tr>
		<td></td>
		<td>SI</td>
		<td>NO</td>
		<td>ESPECIFIQUE</td>
	</tr>
	<tr>
		<td><label>TABAQUISMO</label></td>
		<?php echo '<td><input type="checkbox" '. $r2_1Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r2_1No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r2_1Detalle; ?>" class="form-control" readonly="readonly" > </td>	
	</tr>
	<tr>
		<td><label>ALCOHOL</label></td>
		<?php echo '<td><input type="checkbox" '. $r2_2Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r2_2No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r2_2Detalle; ?>" class="form-control" readonly="readonly" > </td>	

	</tr>
	<tr>
		<td><label>ALIMENTACIÓN ADECUADA</label></td>
		<?php echo '<td><input type="checkbox" '. $r2_3Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r2_3No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r2_3Detalle; ?>" class="form-control" readonly="readonly" > </td>	

	</tr>
	<tr>
		<td><label>USO DE DROGAS RECREATIVAS</label></td>
		<?php echo '<td><input type="checkbox" '. $r2_4Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r2_4No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r2_4Detalle; ?>" class="form-control" readonly="readonly" > </td>	

	</tr>
	<tr>
		<td><label>¿QUÉ MEDICAMENTOS UTILIZA COMUNMENTE?</label></td>
		<?php echo '<td><input type="checkbox" '. $r2_5Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r2_5No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r2_5Detalle; ?>" class="form-control" readonly="readonly" > </td>	

	</tr>
	<tr>
		<td><label>TIPO SANGUINEO</label></td>
		<td></td>
		<td></td>
		<td><input type="text" value = "<?php echo $r2_6Detalle; ?>" class="form-control" readonly="readonly" > </td>	
    </tr>
    <tr>
		<td><label>¿CÓMO A SIDO SU PESO EN LOS ULTIMOS 5 MESES?</label></td>
		<?php echo '<td><input type="checkbox" '. $r2_7Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r2_7No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r2_7Detalle; ?>" class="form-control" readonly="readonly" > </td>
</tr> 
	</table>
	
</div>
</div>

<div class="card">
<div class="card-header" id="headingOne">
    <h3 class="mb-0"> &nbsp;&nbsp;Antecedentes Personales Patológicos</h3>                         
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
		<td><label>DIABETES</label></td>
		<?php echo '<td><input type="checkbox" '. $r3_1Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r3_1No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r3_1Detalle; ?>" class="form-control" readonly="readonly" > </td>	
	</tr>
	<tr>
		<td><label>HIPERTENSION ARTERIAL</label></td>
		<?php echo '<td><input type="checkbox" '. $r3_2Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r3_2No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r3_2Detalle; ?>" class="form-control" readonly="readonly" > </td>	
	</tr>
	<tr>
		<td><label>PROBLEMA DE TIROIDES</label></td>
		<?php echo '<td><input type="checkbox" '. $r3_3Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r3_3No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r3_3Detalle; ?>" class="form-control" readonly="readonly" > </td>	
	</tr>
	<tr>
		<td><label>ALERGIAS</label></td>
		<?php echo '<td><input type="checkbox" '. $r3_4Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r3_4No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r3_4Detalle; ?>" class="form-control" readonly="readonly" > </td>	
	
	</tr>
	<tr>
		<td><label>CIRUGIAS PREVIAS</label></td>
		<?php echo '<td><input type="checkbox" '. $r3_5Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r3_5No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r3_5Detalle; ?>" class="form-control" readonly="readonly" > </td>	
	
	</tr>
	<tr>
		<td><label>HOSPITALIZACIONES PREVIAS</label></td>
		<?php echo '<td><input type="checkbox" '. $r3_6Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r3_6No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r3_6Detalle; ?>" class="form-control" readonly="readonly" > </td>	
	
	</tr>
	<tr>
		<td><label>FRACTURAS</label></td>
		<?php echo '<td><input type="checkbox" '. $r3_7Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r3_7No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r3_7Detalle; ?>" class="form-control" readonly="readonly" > </td>	
	
	</tr>
	<tr>
		<td><label>¿SUFRE USTED DE ALGUNA OTRA ENFERMEDAD?</label></td>
		<?php echo '<td><input type="checkbox" '. $r3_8Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r3_8No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td><input type="text" value = "<?php echo $r3_8Detalle; ?>" class="form-control" readonly="readonly" > </td>	
	
	</tr>
	</table>
	
</div>
</div>

<div class="card">
<div class="card-header" id="headingOne">
    <h3 class="mb-0"> &nbsp;&nbsp;Antecedentes Gineco-obstetrico</h3>                         
</div>

<div class="col-md-12">

	<table style="width: 100%">
	<tr>
		<td></td>
		<td>SI</td>
		<td>NO</td>
        <td>ESPECIFIQUE</td>
        <td></td>
	</tr>
	<tr>
		<td><label>EDAD DE PRIMERA MENSTRUACION</label></td>
		<td></td>
		<td></td>
        <td><input type="text" value = "<?php echo $r4_1Detalle; ?>" class="form-control" readonly="readonly" > </td>
        <td>AÑOS</td>
	</tr>
	<tr>
		<td><label>¿CADA CUANTO TIENE SU PERIODO?</label></td>
		<td></td>
		<td></td>
        <td><input type="text" value = "<?php echo $r4_2Detalle; ?>" class="form-control" readonly="readonly" > </td>
        <td>DIAS</td>
	</tr>
	<tr>
		<td><label>¿CUÁNTOS DIAS DURA SU PERIODO?</label></td>
		<td></td>
		<td></td>
        <td><input type="text" value = "<?php echo $r4_3Detalle; ?>" class="form-control" readonly="readonly" > </td>
        <td>DIAS</td>
	</tr>
	<tr>
		<td><label>¿QUÉ DIA INICIO SU ULTIMO PERIODO?</label></td>
		<td></td>
		<td></td>
		<td><input type="text" value = "<?php echo $r4_4Detalle; ?>" class="form-control" readonly="readonly" > </td>
	</tr>
	<tr>
		<td><label>¿UTILIZA ALGUN METODO ANTICONCEPTIVO?</label></td>
		<?php echo '<td><input type="checkbox" '. $r4_5Si . ' class="form-control" disabled="disabled" > </td>'; ?>
        <?php echo '<td><input type="checkbox" '. $r4_5No .' class="form-control" disabled="disabled" > </td>'; ?>
		<td>¿CUAL?<input type="text" value = "<?php echo $r4_5Detalle; ?>" class="form-control" readonly="readonly" > </td>	
	</tr>
	<tr>
		<td><label>FECHA DE SU ULTIMO PAPANICOLAO Y RESULTADO</label></td>
		<td></td>
		<td></td>
		<td><input type="text" value = "<?php echo $r4_6Detalle; ?>" class="form-control" readonly="readonly" > </td>
	</tr>
	</table>


</div>
</div>