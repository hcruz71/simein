
<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Receta</title>
    <link rel="shortcut icon" href="../images/logo.png">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script type='text/javascript' src='../js/jquery.min.js'></script>
<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
</head>
<body style="font-family: Helvetica">

    <?php 
session_start();
//if ($_POST['fecha_receta']==null) {
    $fecha= date("d-m-Y");
//}else{
//    $fecha= ''.$_POST['fecha_receta'];
//}
//$fecha_split=split("-", $fecha);

//$fecha_split_dia=$fecha_split[0];
//$fecha_split_mes=$fecha_split[1];
//$fecha_split_ano=$fecha_split[2];


//$fecha2= str_split($fecha, 4);
//$fecha3= str_split($fecha, 4);

//$fecha4= str_split($fecha, 8);
//$fecha_mes=$fecha3[1];
//$fecha_dia=$fecha4[1];

//$fecha_receta=$fecha_dia.''.$fecha_mes.''.$fecha_ano;

    $id_doctor=$_SESSION['id_usuario'];
    //$formato=$_POST['formato'];
    $receta= nl2br($_POST['receta_print']);
    $id_paciente=$_POST['id_paciente_receta'];
    $left_nom=150;

    require '../conexion.php';
    if ( !isset($pdo) ) {
        $pdo = connect(); 
    }
    $sql="SELECT * FROM pacientes where id_doctor=$id_doctor and id_Paciente=$id_paciente";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
	foreach ($list as $row_pac) 
        {
                $nom_paciente=$row_pac['nb_Paciente'];
        }

    $sql="SELECT * FROM doctor where id_doctor=$id_doctor";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
	foreach ($list as $row_doc) 
        {
                $nom_doc=$row_doc['atencion'].' '.$row_doc['nombre'];
                $especialidad=$row_doc['especialidad'];
                $de_cProf=$row_doc['de_cProf'];
                $de_cEsp=$row_doc['de_cEsp'];
                $direccion=$row_doc['direccion'];
                $telefono=$row_doc['telefono'];
                $celular=$row_doc['celular'];
                $correo=$row_doc['correo'];
                $logo=$row_doc['logo'];
        }


        //$sql3="SELECT * FROM templates_recetas where id_template=$formato";
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        //$result=mysqli_query($mysqli,$sql3);
       // while ($row2=mysqli_fetch_assoc($result))
       // {
               // $descripcion=$row2['descripcion'];
               // $nom_left=$row2['nom_left'];
               // $nom_top=$row2['nom_top'];
               // $fecha_right=$row2['fecha_right'];
               // $fecha_top=$row2['fecha_top'];
               // $rec_left=$row2['rec_left'];
               // $rec_top=$row2['rec_top'];
               // $img_rec=$row2['img_rec'];
           // }
?>
<button onclick="printContent('div_rec')">Reimprimir</button>
<div id="div_rec" style="border: none;">
    <div class="row">
        <div class="col-md-1">
            
        </div>
        <div class="col-md-2">
            <img src="<?php echo $logo ?>" class="img-responsive" style="max-width: 150px">
        </div>
        <div class="col-md-8" style="text-align: right;">
            <h1 style="color: #28defa;"><?php echo $nom_doc ?></h1>
            <h3 style="color: #aaadad;"><?php echo $especialidad ?></h3>
            <label><b>Ced. Prof.</b> <?php echo $de_cProf ?></label><br>
            <label><b>Ced. Esp</b> <?php echo $de_cEsp ?></label>

        </div>
        <div class="col-md-1">
            
        </div>
    </div>
    <div class="row" style="font-size: 20px">
        <div class="col-md-1">
            
        </div>
        <div class="col-md-10" style="border: 3px solid #28defa; border-radius: 15px; height: 500px">
            <div style="height: 30px;"></div>
            <div class="row">
                <div class="col-md-6">
                    <b>Nombre:</b>&nbsp; <?php echo $nom_paciente ?>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <b>Fecha:</b>&nbsp; <?php echo $fecha ?>
                </div>
            </div>
            <div style="height: 20px; font-size: 16px"></div>
            <div class="col-md-1"></div>
            <div class="col-md-11"><b>Rx</b><div style="border: none;"><?php echo $receta ?></div></div>
         </div>
    </div>
         <div class="row" style="font-size: 18px">
            <div class="col-md-1"></div>
            <div class="col-md-7"><b>Direccion:</b>&nbsp;<?php echo $direccion ?><br><b>Correo:</b>&nbsp;<?php echo $correo ?></div>
            <div class="col-md-3" style="text-align: right;"><b>Telefono:</b><?php echo $telefono ?>&nbsp;<br><b>Celular:</b>&nbsp;<?php echo $celular ?>  </div>
            <div class="col-md-1"></div>
         </div>
</body>
<script>
    $(document).ready(function(){
        printContent('div_rec');
    });
    
</script>

</html>


