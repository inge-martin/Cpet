<?php

class Validar_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function validar($usuario){
		$s = $this->db->get_where('sesiones', array('usuario' => $usuario));

		if ($s->num_rows() == 0) {
			return 0;
		}else{
			return 1;
		}
	}

}
?>