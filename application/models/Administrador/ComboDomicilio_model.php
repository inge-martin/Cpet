<?php 

class ComboDomicilio_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}			

	public function getEstados(){
		$s = $this->db->get('estados');
		return $s->result();
	}

	public function getMunicipios($s){
		$s = $this->db->get_where('municipios', array('id_estado' => $s));
		return $s->result();
	}

	public function getLocalidades($s){
		$s = $this->db->get_where('localidades', array('id_municipio' => $s));
		return $s->result();
	}

}
?>