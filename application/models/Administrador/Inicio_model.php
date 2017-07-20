<?php

class Inicio_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function get_clientes(){
		$query = $this->db->get('cliente');
		return $query->num_rows();
	}

	public function get_mascotas(){
		$query = $this->db->get('mascota');
		return $query->num_rows();
	}	

	public function get_empleados(){
		$query = $this->db->get('empleado');
		return $query->num_rows();
	}

	public function get_zootecnico(){
		$query = $this->db->get('zootecnico');
		return $query->num_rows();
	}
	
}