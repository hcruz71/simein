<?php
 
//debemos colocar esta línea para extender de REST_Controller
require(APPPATH.'/libraries/REST_Controller.php');
class Pacientes extends REST_Controller    //For Apointments
{
    //con esto limitamos las consultas y los permisos a la api
    protected $methods = array(

        'consulta_pacientes_post' => array('level' => 0),//se necesita level 0, no hay limite de peticiones
        'agendas_get' => array('level' => 0),//se necesita level 0, no hay limite de peticiones
    );
 
    //obtener datos de un usuario
    //http://intelligentagenda.com/MO_API_REST/log/user/pw/hacz572771/pw2/hcruz7@hotmail.com/X-API-KEY/RpoXa1m5s59vDMOIDmI5uJCdWP2pgnaM6RudhRtv
    public function consulta_pacientes_post()
    {
        if($this->post("id_doctor") && $this->post("id_Paciente")){
        $this->load->model("Pacientes_model");
        
        $consulta = $this->Pacientes_model->consulta_pacientes_post($this->post("id_doctor"),$this->post("id_Paciente"));
        if($consulta){
            $this->response(array("estatus" => "1", "registros" => $consulta));

        }else{
            $this->response(NULL, 400);
        } 
      }
    }

}