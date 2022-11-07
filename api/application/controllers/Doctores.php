<?php
 
//debemos colocar esta línea para extender de REST_Controller
require(APPPATH.'/libraries/REST_Controller.php');
class Doctores extends REST_Controller    //For Apointments
{
    //con esto limitamos las consultas y los permisos a la api
    protected $methods = array(

        'consulta_doctores_post' => array('level' => 0),
    );
 
    //obtener datos de un usuario
    //http://intelligentagenda.com/MO_API_REST/log/user/pw/hacz572771/pw2/hcruz7@hotmail.com/X-API-KEY/RpoXa1m5s59vDMOIDmI5uJCdWP2pgnaM6RudhRtv
    public function consulta_doctores_post()
    {
        if($this->post("id_doctor")){
        $this->load->model("Doctores_model");
        $consulta = $this->Doctores_model->consulta_doctores_post($this->post("id_doctor"));
        if($consulta){
            $this->response(array("estatus" => "1", "registros" => $consulta));
        }else{
            $this->response(NULL, 400);
        } 
      }
    }

}