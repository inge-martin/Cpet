<?php 

class Inicio extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Empleado/Inicio_model');
	}
	public function index(){
		$data['clientes'] 	= $this->Inicio_model->get_clientes();
		$data['adopcion'] 	= $this->Inicio_model->get_adopciones();
		$data['citas'] 		= $this->Inicio_model->get_citas();
		$data['citas_hoy'] 	= $this->Inicio_model->get_citas_hoy();
		$data['mascotas'] 	= $this->Inicio_model->get_mascotas();
		$data['mascotas_5'] = $this->Inicio_model->get_ultimas_mascotas();

		$this->load->view('Empleado/Layout_emp/header');
		$this->load->view('Empleado/Layout_emp/menu');
		$this->load->view('Empleado/vInicio', $data);
		$this->load->view('Empleado/Layout_emp/footer');
	}
}



?>