<?php 

class Inicio extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Administrador/Inicio_model');
	}

	public function index(){
		$data['clientes'] 	= $this->Inicio_model->get_clientes();
		$data['empleados'] 	= $this->Inicio_model->get_empleados();
		$data['zootecnico'] = $this->Inicio_model->get_zootecnico();
		$data['mascotas'] 	= $this->Inicio_model->get_mascotas();
		$this->load->view('Administrador/Layout_admin/header');
		$this->load->view('Administrador/Layout_admin/menu');
		$this->load->view('Administrador/vInicio', $data);
		$this->load->view('Administrador/Layout_admin/footer');
	}
}



?>