<?php
      //DESCOMETAR PARA DEBUGEAR  echo json_encode(array('result' => $_POST["Nombre"]));

 /* $Nombre = $_POST["Nombre"];
  $Fuente = $_POST["Fuente"];
  $Sexo = $_POST ["Sexo"];
  $TipoPercentil = $_POST ["TipoPercentil"];
  $Arreglo = $_POST ["Arreglo"];
*/
 session_start();

  $_SESSION['percentiles']['Nombre'] = $_POST["Nombre"];
  $_SESSION['percentiles']['Fuente'] = $_POST["Fuente"];
  $_SESSION['percentiles']['FechaConsulta'] = $_POST["FechaConsulta"];
  $_SESSION['percentiles']['Sexo'] = $_POST ["Sexo"];
  $_SESSION['percentiles']['Peso'] = $_POST ["Peso"];
  $_SESSION['percentiles']['Talla'] = $_POST ["Talla"];
  $_SESSION['percentiles']['Edad'] = $_POST ["Edad"];
  $_SESSION['percentiles']['TipoPercentil'] = $_POST ["TipoPercentil"];
  $_SESSION['percentiles']['Arreglo'] = $_POST ["Arreglo"];

  
  //DESCOMETAR PARA DEBUGEAR  echo json_encode(array('arreglo' => $Arreglo[1]));
  echo json_encode(array('nombre' => $_POST['Nombre']));

  
?>