<?php 

class Tratamientos extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Zootecnico/Tratamiento_model');
	}

	public function index(){
		$data['tratamiento'] = $this->Tratamiento_model->get_tratamiento();
		$data['title'] = 'Listado de Tratamientos';

		$this->load->view('Zootecnico/Layout_zoo/header');
		$this->load->view('Zootecnico/Layout_zoo/menu');
		$this->load->view('Zootecnico/Tratamiento/index', $data);
		$this->load->view('Zootecnico/Layout_zoo/footer');
	}
} 
?>