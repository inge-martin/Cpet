<?php 

class Inicio extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Zootecnico/Inicio_model');
	}
	public function index(){
		$data['clientes'] 	= $this->Inicio_model->get_clientes();
		$data['empleados'] 	= $this->Inicio_model->get_empleados();
		$data['citas'] 		= $this->Inicio_model->get_citas();
		$data['mascotas'] 	= $this->Inicio_model->get_mascotas();
		
		$data['mascotas_5'] = $this->Inicio_model->get_ultimas_mascotas();

		$this->load->view('Zootecnico/Layout_zoo/header');
		$this->load->view('Zootecnico/Layout_zoo/menu');
		$this->load->view('Zootecnico/vInicio', $data);
		$this->load->view('Zootecnico/Layout_zoo/footer');
	}

	public function getCalendar(){
		$r = $this->Inicio_model->getCalendario();
		echo json_encode($r);
	}
}



?>