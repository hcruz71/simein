<!doctype html>
<html lang="en">
  
    <!-- head -->
    <?php include 'componentes/head.php'; ?>
    <!-- end head -->
    
<body>

   <p>Hector cruz Zazueta</p>
</body>
<!--<script type="text/javascript">
$(document).ready(function(){
          if ($('#c3chart_pie2').length) {
            var chart = c3.generate({
                bindto: "#c3chart_pie2",
                data: {
                    columns: [
                    <?php 
                        $id_paciente=$ver['id_Paciente'];
                          $sentencia="SELECT count(id_doctor) AS total from historial_clinico WHERE id_doctor=1";
                          $resultado=mysql_query($sentencia);
                          while($filas=mysql_fetch_assoc($resultado))
                          {
                        ?>

                        [<?php echo $filas['total']; ?>, <?php echo $filas['total']; ?>],

                    <?php } ?>
                    ],
                    type: 'pie',

                    colors: {
                         data1: '#5969ff'


                    }
                },
                pie: {
                    label: {
                        format: function(value, ratio, id) {
                            return d3.format('$')(value);
                        }
                    }
                }
            });
        }
      });
</script>-->

 
</html>