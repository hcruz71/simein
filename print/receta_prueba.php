<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script type='text/javascript' src='../assets/vendor/jquery/jquery-3.3.1.min.js'></script>
<?php
session_start();
//utf8_decode($row['municipio'];
 header("Content-type: text/html; charset=utf8");
$id_doctor=$_SESSION['id_usuario'];

    require '../conexion_i.php';


    $query_doc = "SELECT * FROM templates_recetas where id_doctor='".$id_doctor."' and id_template='".$_POST['id_template']."'";
    $resultado_doc = $conexion->query($query_doc);
    while($row_doc = $resultado_doc->fetch_assoc())
    {
        $img_rec=$row_doc['img_rec'];
        $nom_left=$row_doc['nom_left'];
        $nom_top=$row_doc['nom_top'];
        $fecha_right=$row_doc['fecha_right'];
        $fecha_top=$row_doc['fecha_top'];
        $rec_left=$row_doc['rec_left'];
        $rec_top=$row_doc['rec_top'];
        $font_size=$row_doc['font_size'];
    }
    
?>
<div id="serialice">
    <img  src="<?php echo $img_rec ?>" style="width:1050px" >
    <div style="position:absolute;font-size:<?php echo $font_size ?>px;right:<?php echo $fecha_right ?>px;top:<?php echo $fecha_top ?>px;">_FECHA</div>
    <div style="position:absolute;font-size:<?php echo $font_size ?>px;left:<?php echo $nom_left ?>px;top:<?php echo $nom_top ?>px;">_PACIENTE </div>
    <div style="position:absolute;font-size:<?php echo $font_size ?>px;left:<?php echo $rec_left ?>px;top:<?php echo $rec_top ?>px;">_RECETA</div>
</div>

