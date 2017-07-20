<?php

class Inicio_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function get_clinicas(){
		$query = $this->db->get('clinica');
		return $query->num_rows();
	}

	public function get_tratamientos(){
		$query = $this->db->get('tratamiento');
		return $query->num_rows();
	}	

	public function get_servicios(){
		$query = $this->db->get('servicios');
		return $query->num_rows();
	}

	public function get_zootecnico(){
		$query = $this->db->get('zootecnico');
		return $query->num_rows();
	}
	
}