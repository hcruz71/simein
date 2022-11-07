<?php
$id_doctor=$_POST['id_doctor'];
$telefono=$_POST['telefono'];

include_once ('../../class/APILogin.php');

// Creamos la instancia del cliente ApiREST
$objAPI = new Capirestlogin();

// Creamos los parametros para el método que vamos a consumir
$arrData = array('cell' => $telefono, 'id_doctor' => $id_doctor);
//$arrData = array('nb_usuario' => 'simein', 'pw_usuario' => '123');


// Llamamos al método
$resultAPI = $objAPI->loginAPI('count_accesos', $arrData);
// Procesamos la informacion devuelta


if($resultAPI)
{
                $resultAPI = json_decode($resultAPI,true);

                if ($resultAPI['estatus'] == 0)
                {
                    
                    echo json_encode(array('resp' => 1));
                  
                }
                else
                {
                    echo json_encode(array('resp' => 0));
                }
}
else
{
    echo json_encode(array('resp' => 2));
        
                
}