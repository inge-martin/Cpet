<?php 

class ComboDomicilio extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Administrador/ComboDomicilio_model');
	}

	public function getEstados(){
		$resultado = $this->ComboDomicilio_model->getEstados();
		echo json_encode($resultado);
	}

	public function getMunicipios(){
		$s = $this->input->post('id_estado');
		$resultado = $this->ComboDomicilio_model->getMunicipios($s);
		echo json_encode($resultado);
	}

	public function getLocalidades(){
		$s = $this->input->post('id_municipio');
		$resultado = $this->ComboDomicilio_model->getLocalidades($s);
		echo json_encode($resultado);
	}
}
?>