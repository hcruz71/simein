<?php
 
class Honorarios_model extends CI_Model
{
    public function consulta_honorarios_post($id_doctor, $id_paciente){
        
        $query = $this->db->select('honorarios.id_doctor, honorarios.id_paciente, honorarios.concepto, honorarios.total')->from('honorarios')
                 ->where('honorarios.id_doctor', $id_doctor)
                 ->where('honorarios.id_Paciente', $id_paciente)
                 ->get();

       if($query->num_rows() > 0){
            return $query->result();
        }
    }
}