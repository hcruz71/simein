 <?php
 
//debemos colocar esta línea para extender de REST_Controller
require(APPPATH.'/libraries/REST_Controller.php');
class Honorarios extends REST_Controller    //For Apointments
{
    //con esto limitamos las consultas y los permisos a la api
    protected $methods = array(

        'consulta_honorarios_post' => array('level' => 0),
    );
 
    //obtener datos de un usuario
    //http://intelligentagenda.com/MO_API_REST/log/user/pw/hacz572771/pw2/hcruz7@hotmail.com/X-API-KEY/RpoXa1m5s59vDMOIDmI5uJCdWP2pgnaM6RudhRtv
    public function consulta_honorarios_post()
    {
        if($this->post("id_doctor") && $this->post("id_paciente")){
        $this->load->model("Honorarios_model");
        $consulta = $this->Honorarios_model->consulta_honorarios_post($this->post("id_doctor"),$this->post("id_paciente"));
        if($consulta){
            $this->response(array("estatus" => "1", "registros" => $consulta));
        }else{
            $this->response(NULL, 400);
        } 
      }
    }

}