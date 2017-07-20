<?php 

class Consulta extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Cliente/Consultas_model');
	}

	public function index(){
		$id_cliente = $this->session->userdata('s_id_cliente');
		$data['consultas'] = $this->Consultas_model->get_consultas($id_cliente);
		$data['title'] = "Listado de Consultas";
		$this->load->view('Cliente/Layout_cli/header');
		$this->load->view('Cliente/Layout_cli/menu');
		$this->load->view('Cliente/Consulta/index', $data);
		$this->load->view('Cliente/Layout_cli/footer');
	}
} 
?>