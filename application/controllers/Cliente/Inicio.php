<?php 

class Inicio extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Cliente/Inicio_model');
	}

	public function index(){
		$data['clinicas'] 	= $this->Inicio_model->get_clinicas();
		$data['tratamientos'] 	= $this->Inicio_model->get_tratamientos();
		$data['servicios'] 	= $this->Inicio_model->get_servicios();
		$data['zootecnicos'] = $this->Inicio_model->get_zootecnico();
		$this->load->view('Cliente/Layout_cli/header');
		$this->load->view('Cliente/Layout_cli/menu');
		$this->load->view('Cliente/vInicio', $data);
		$this->load->view('Cliente/Layout_cli/footer');
	}
}



?>