<?php
 
class Login_model extends CI_Model
{
    //SELECT id_usuario, rol, id FROM usuarios where nb_usuario='$username' and pw_usuario='$pass' and sn_activo=1

    public function login_usuarios_post($id_usuario, $id_passwd){
        
        $query = $this->db->select('usuarios.id_usuario, usuarios.rol, usuarios.id')->from('usuarios')
                 ->where('usuarios.nb_usuario', $id_usuario)
                 ->where('usuarios.pw_usuario', $id_passwd)
                 ->where('usuarios.sn_activo', '1')
                 ->get();

       
       if($query->num_rows() > 0){
            return $query->result();
            //$this->response($result);
            
        }
	}
	
	public function count_accesos_post($cell, $id_doctor){
		
		date_default_timezone_set('America/Mazatlan');
        $date = date('m/d/Y h:i:s a', time());
		$nombre = '';
		$fecha = $date; 


		$data = array(
			'id_doctor'=>$id_doctor,
			'telefono'=>$cell,
			'nombre'=>$nombre,
			'fecha'=>$fecha
		);

     $this->db->insert('accesos_clinica',$data);
					
		   
	
		}
}
