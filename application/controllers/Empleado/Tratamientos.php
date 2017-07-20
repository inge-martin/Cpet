<?php 

class Tratamientos extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Empleado/Tratamiento_model');
	}

	public function index(){
		$data['tratamiento'] = $this->Tratamiento_model->get_tratamiento();
		$data['title'] = 'Listado de Tratamientos';

		$this->load->view('Empleado/Layout_emp/header');
		$this->load->view('Empleado/Layout_emp/menu');
		$this->load->view('Empleado/Tratamiento/index', $data);
		$this->load->view('Empleado/Layout_emp/footer');
	}
} 
?>