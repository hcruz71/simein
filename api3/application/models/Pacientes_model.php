<?php
 
class Pacientes_model extends CI_Model
{
    public function consulta_pacientes_post($id_doctor, $id_paciente){
        
        $query = $this->db->select('pacientes.id_doctor, pacientes.id_Paciente, pacientes.nb_Paciente, pacientes.fh_Nacimiento')->from('pacientes')
                 ->where('pacientes.id_doctor', $id_doctor)
                 ->where('pacientes.id_Paciente', $id_paciente)
                 ->get();

       if($query->num_rows() > 0){
            return $query->result();
        }
    }
}