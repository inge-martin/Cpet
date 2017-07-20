<?php 

class ComboMascota extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Administrador/ComboMascota_model');
	}

	public function getHabitad(){
		$resultado = $this->ComboMascota_model->getHabitad();
		echo json_encode($resultado);
	}

	public function getEspecie(){
		$s = $this->input->post('id_habitad');
		$resultado = $this->ComboMascota_model->getEspecie($s);
		echo json_encode($resultado);
	}

	public function getRaza(){
		$s = $this->input->post('id_especie');
		$resultado = $this->ComboMascota_model->getRaza($s);
		echo json_encode($resultado);
	}

	//----------para adopcion---------------
	
	public function getEspecie_a(){
		$resultado = $this->ComboMascota_model->getEspecie_a();
		echo json_encode($resultado);
	}

	public function getRaza_a(){
		$s = $this->input->post('id_especie');
		$resultado = $this->ComboMascota_model->getRaza_a($s);
		echo json_encode($resultado);
	}

}
?>