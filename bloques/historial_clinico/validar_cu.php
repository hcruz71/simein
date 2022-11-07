
<?php


$username=$_POST['nb_usuario'];
$pass=$_POST['pw_usuario'];

include_once ('class/APILogin.php');

// Creamos la instancia del cliente ApiREST
$objAPI = new Capirestlogin();

// Creamos los parametros para el método que vamos a consumir
$arrData = array('nb_usuario' => $username, 'pw_usuario' => $pass);
//$arrData = array('nb_usuario' => 'simein', 'pw_usuario' => '123');


// Llamamos al método
$resultAPI = $objAPI->loginAPI('login_usuarios', $arrData);
// Procesamos la informacion devuelta


if($resultAPI)
{
                $resultAPI = json_decode($resultAPI,true);

                if ($resultAPI['estatus'] == 1)
                {
                     session_start();
                     $_SESSION['id_usuario']= $resultAPI['registros'][0]['id_usuario'];
                     $_SESSION['rol']=$resultAPI['registros'][0]['rol'];
                     $_SESSION['id']=$resultAPI['registros'][0]['id'];
                     echo json_encode(array('resp' => 0));
                    /* echo $resultAPI['registros'][0]['id_usuario'];
                     echo $resultAPI['registros'][0]['rol'];
                     echo $resultAPI['registros'][0]['id'];*/
                }
                else
                {
                    echo json_encode(array('resp' => 1));
                }
}
else
{
    echo json_encode(array('resp' => 2));
        
                
}