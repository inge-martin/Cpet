<?php 

class Consulta extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Zootecnico/Consultas_model');
	}

	public function index(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$data['consultas'] = $this->Consultas_model->get_consultas($id_zootecnico);
		$data['title'] = "Listado de Consultas";
		$this->load->view('Zootecnico/Layout_zoo/header');
		$this->load->view('Zootecnico/Layout_zoo/menu');
		$this->load->view('Zootecnico/Consulta/index', $data);
		$this->load->view('Zootecnico/Layout_zoo/footer');
	}

	public function newConsulta(){
		$data['title'] = "Nueva consulta";
		$data['mascota'] = $this->Consultas_model->get_mascota();
		$data['tratamiento'] = $this->Consultas_model->get_tratamiento();
		$data['servicios'] = $this->Consultas_model->get_servicios();
		$this->load->view('Zootecnico/Layout_zoo/header');
		$this->load->view('Zootecnico/Layout_zoo/menu');
		$this->load->view('Zootecnico/Consulta/create', $data);
		$this->load->view('Zootecnico/Layout_zoo/footer');
	}

	public function nuevaConsulta(){

		$paramConsulta['id_zootecnico'] 		= $this->session->userdata('s_id_zootecnico');
		$paramConsulta['detalle_revision'] 		= $this->input->post('detalle_revision');
		$paramConsulta['fecha_consulta'] 		= $this->input->post('fecha_consulta');
		$paramConsulta['id_tratamiento'] 		= $this->input->post('id_tratamiento');
		$paramConsulta['id_servicios'] 			= $this->input->post('id_servicios');

		$id_consulta = $this->Consultas_model->insert_consulta($paramConsulta);

		$paramConsulta_m['id_consulta'] = $id_consulta;
		$paramConsulta_m['id_mascota'] 	= $this->input->post('id_mascota');

		$this->Consultas_model->insert_consulta_m($paramConsulta_m);

		$this->load->view('Zootecnico/Layout_zoo/header');
		$this->load->view('Zootecnico/Layout_zoo/menu');
		$this->load->view('Zootecnico/Consulta/success');
		$this->load->view('Zootecnico/Layout_zoo/footer');
	}

	public function newConsulta_ex(){
		$data['title'] = "Nueva consulta externa";
		$data['mascota'] = $this->Consultas_model->get_mascota_ex();
		$data['tratamiento'] = $this->Consultas_model->get_tratamiento();
		$data['servicios'] = $this->Consultas_model->get_servicios();
		$this->load->view('Zootecnico/Layout_zoo/header');
		$this->load->view('Zootecnico/Layout_zoo/menu');
		$this->load->view('Zootecnico/Consulta/create_ex', $data);
		$this->load->view('Zootecnico/Layout_zoo/footer');
	}

	public function nuevaConsulta_ex(){

		$paramConsulta['id_zootecnico'] 		= $this->session->userdata('s_id_zootecnico');
		$paramConsulta['detalle_revision'] 		= $this->input->post('detalle_revision');
		$paramConsulta['fecha_consulta'] 		= $this->input->post('fecha_consulta');
		$paramConsulta['id_tratamiento'] 		= $this->input->post('id_tratamiento');
		$paramConsulta['id_servicios'] 			= $this->input->post('id_servicios');

		$id_consulta = $this->Consultas_model->insert_consulta($paramConsulta);

		$paramConsulta_m['id_consulta'] = $id_consulta;
		$paramConsulta_m['id_mascota'] 	= $this->input->post('id_mascota');

		$this->Consultas_model->insert_consulta_m($paramConsulta_m);

		$this->load->view('Zootecnico/Layout_zoo/header');
		$this->load->view('Zootecnico/Layout_zoo/menu');
		$this->load->view('Zootecnico/Consulta/success');
		$this->load->view('Zootecnico/Layout_zoo/footer');
	}
} 
?>