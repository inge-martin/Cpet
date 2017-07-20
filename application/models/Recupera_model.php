<?php

class Recupera_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	//llena el combo pregunta
	public function get_pregunta(){
		$data = array();
		$query = $this->db->get('pregunta');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function validar($usuario, $id_pregunta, $respuesta){

		// $this->db->select('*');
		$this->db->from('sesiones');
		$this->db->where('usuario', $usuario);
		$this->db->where('id_pregunta', $id_pregunta);
		$this->db->where('respuesta', $respuesta);
		$query = $this->db->get();

		//si retorna cero no hay nada
		if ($query->num_rows() == 0) {
			//no hay usuario con esas claves
			return 0;
		}else{
			$r = $query->row();
			return $r->id_sesiones;			 	
		}
	}

	public function cambiar($id_sesiones, $contrasena){
		
		$this->db->set('contrasena', $contrasena);
		$this->db->where('id_sesiones', $id_sesiones);
		$this->db->update('sesiones');
		//$this->db->where('status = 1');
		// $query = $this->db->get();			 	
	}	

}
?>