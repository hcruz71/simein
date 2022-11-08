<?php
 class Login_model extends CI_Model
{

    public function login_usuarios_post($id_usuario, $id_passwd){
        
	$this->db->select('usuarios.usuarios_id, usuarios.clinica_id, usuarios.perfil_id, usuarios.usuarios_nbr, 
					usuarios.usuarios_usr, usuarios.usuarios_usr2, usuarios.usuarios_fechanac, perfil.perfil_nbr, 
					perfil.perfil_des, perfil.perfil_permisos, perfil.perfil_opciones ')->from('usuarios')		
				->group_start()
					->where('usuarios.usuarios_usr', $id_usuario)
					->or_group_start()
						->where('usuarios.usuarios_usr2', $id_usuario)
					->group_end()
				->group_end()
				->where('usuarios.usuarios_pwd', $id_passwd);  
				
				$this->db->join('perfil', 'perfil.perfil_id = usuarios.perfil_id');

				$query =  $this->db->get();

				
       
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
