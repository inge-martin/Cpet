<?php 

class Tratamientos extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Cliente/Tratamiento_model');
	}

	public function index(){
		$data['tratamiento'] = $this->Tratamiento_model->get_tratamiento();
		$data['title'] = 'Listado de Tratamientos';

		$this->load->view('Cliente/Layout_cli/header');
		$this->load->view('Cliente/Layout_cli/menu');
		$this->load->view('Cliente/Tratamiento/index', $data);
		$this->load->view('Cliente/Layout_cli/footer');
	}
} 
?>