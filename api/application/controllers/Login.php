<?php
error_reporting(0);
 
//debemos colocar esta línea para extender de REST_Controller
require(APPPATH.'/libraries/REST_Controller.php');
class Login extends REST_Controller    //For Apointments
{
    //con esto limitamos las consultas y los permisos a la api
    protected $methods = array(

		'login_usuarios_post' => array('level' => 0),
		'count_accesos_post' => array('level' => 0),
    );
 
    //obtener datos de un usuario
    //http://intelligentagenda.com/MO_API_REST/log/user/pw/hacz572771/pw2/hcruz7@hotmail.com/X-API-KEY/RpoXa1m5s59vDMOIDmI5uJCdWP2pgnaM6RudhRtv
    

    public function login_usuarios_post()
    {
        if($this->post("nb_usuario")){
        $this->load->model("Login_model");
        $consulta = $this->Login_model->login_usuarios_post($this->post("nb_usuario"), $this->post("pw_usuario"));
        if($consulta){
            $this->response(array("estatus" => "1", "registros" => $consulta));
        }else{
            $this->response($consulta);
        } 
      }
	}
	
	public function count_accesos_post()
    {
        if($this->post("cell")){
        $this->load->model("Login_model");
        $consulta = $this->Login_model->count_accesos_post($this->post("cell"), $this->post("id_doctor"));
        if($consulta){
            $this->response(array("estatus" => "1", "registros" => $consulta));
        }else{
            $this->response(array("estatus" => "0", "registros" => $consulta));
        } 
      }
	}

}
