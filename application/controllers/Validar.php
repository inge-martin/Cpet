<?php

class Validar extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Validar_model');
	}

	public function validarUser(){
		$s = $this->input->post('usuario');
		$resultado = $this->Validar_model->validar($s);
		// echo json_encode($resultado);

		if($resultado == 0){
			echo "<span style='color:green;'>El nombre de usuario esta disponible.</span>";
		}else{
			echo "<span style='color:red;'>El nombre de usuario ya existe.</span>";
		}
	}
}
?>