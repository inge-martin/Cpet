<?php 

class Consulta extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Empleado/Consultas_model');
	}

	public function index(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$data['consultas'] = $this->Consultas_model->get_consultas($id_zootecnico);
		$data['title'] = "Listado de Consultas";
		$this->load->view('Empleado/Layout_emp/header');
		$this->load->view('Empleado/Layout_emp/menu');
		$this->load->view('Empleado/Consulta/index', $data);
		$this->load->view('Empleado/Layout_emp/footer');
	}
} 
?>