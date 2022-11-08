<?php
 
class Doctores_model extends CI_Model
{
    public function consulta_doctores_post($id_doctor){
        
        $query = $this->db->select('doctor.id_doctor, doctor.nombre, doctor.id_especialidad')->from('doctor')
                 ->where('doctor.id_doctor', $id_doctor)
                 ->get();

       if($query->num_rows() > 0){
            return $query->result();
            //$this->response($result);
            //$this->response(array("status" => "Todo Bien"));
        }
    }
}