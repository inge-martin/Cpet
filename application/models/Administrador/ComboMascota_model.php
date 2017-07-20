<?php 

class ComboMascota_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}			

	public function getHabitad(){
		$s = $this->db->get('habitad');
		return $s->result();
	}

	public function getEspecie($s){
		$s = $this->db->get_where('especie', array('id_habitad' => $s));
		return $s->result();
	}

	public function getRaza($s){
		$s = $this->db->get_where('raza', array('id_especie' => $s));
		return $s->result();
	}

	//--------para el combo de adopcion
	public function getEspecie_a(){
		$s = $this->db->get('especie');
		return $s->result();
	}

	public function getRaza_a($s){    
		$s = $this->db->get_where('raza', array('id_especie' => $s));
		return $s->result();
	}
}
?>