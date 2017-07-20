<?php 
/*
class Citas extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Empleado/Citas_model');
	}

	public function generarClave($length = 8) { 
		$clave =  substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
		return $clave;
	} 
	
	public function index(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$data['citas'] = $this->Citas_model->get_citas($id_zootecnico);
		$data['title'] = "Listado de Citas";
		$this->load->view('Empleado/Layout_emp/header');
		$this->load->view('Empleado/Layout_emp/menu');
		$this->load->view('Empleado/Citas/index', $data);
		$this->load->view('Empleado/Layout_emp/footer');
	}

	public function newCita(){
		$data['title'] = "Nueva cita";
		$this->load->view('Empleado/Layout_emp/header');
		$this->load->view('Empleado/Layout_emp/menu');
		$this->load->view('Empleado/Citas/create', $data);
		$this->load->view('Empleado/Layout_emp/footer');
	}
	
	public function nuevaCita(){
		$generada = $this->generarClave();
		$data['clave'] = $generada;
		$paramCita['id_zootecnico'] 	= $this->session->userdata('s_id_zootecnico');
		$paramCita['id_cliente'] 		= $this->input->post('id_cliente');
		$paramCita['id_mascota'] 		= $this->input->post('id_mascota');
		$paramCita['motivo'] 			= $this->input->post('motivo');
		$paramCita['fecha'] 			= $this->input->post('fecha');
		$paramCita['turno'] 			= $this->input->post('turno');
		$paramCita['status'] 			= $this->input->post('status');
		$paramCita['clave'] 			= $generada;

		$this->Citas_model->insert_cita($paramCita);

		$this->load->view('Empleado/Layout_emp/header');
		$this->load->view('Empleado/Layout_emp/menu');
		$this->load->view('Empleado/Citas/success', $data);
		$this->load->view('Empleado/Layout_emp/footer');
	}

	//----------para el combo cliente/mascota---------------
	
	public function getCliente(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$resultado = $this->Citas_model->getCliente($id_zootecnico);
		echo json_encode($resultado);
	}

	public function getMascota(){
		$s = $this->input->post('id_cliente');
		$resultado = $this->Citas_model->getMascota($s);
		echo json_encode($resultado);
	}

	public function editar_cita(){
		$param['id_citas']        = $this->input->post('id_citas');
		$param['status']        = $this->input->post('status');


		$this->Citas_model->edit_cita($param);
		redirect( base_url() . 'Empleado/Citas/');
	} 

	public function edit(){
		$id_citas = $this->uri->segment(4);

		if (empty($id_citas)){
			show_404();
		}

		$data['error'] = ' ';
		$data['title'] = 'Editar status de la cita';
		$data['citas'] = $this->Citas_model->get_detalle_cita($id_citas);
        //llena el combo
		$this->load->view('Empleado/Layout_emp/header');
		$this->load->view('Empleado/Layout_emp/menu');
		$this->load->view('Empleado/Citas/edit', $data);
		$this->load->view('Empleado/Layout_emp/footer');
	}
} 
*/
?>

<?php 

class Citas extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Empleado/Citas_model');
	}

	public function generarClave($length = 8) { 
		$clave =  substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
		return $clave;
	} 
	
	public function index(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$data['citas'] = $this->Citas_model->get_citas($id_zootecnico);
		$data['title'] = "Listado de Citas";
		$this->load->view('Empleado/Layout_emp/header');
		$this->load->view('Empleado/Layout_emp/menu');
		$this->load->view('Empleado/Citas/index', $data);
		$this->load->view('Empleado/Layout_emp/footer');
	}

	public function newCita(){
		$data['title'] = "Nueva cita";
		$this->load->view('Empleado/Layout_emp/header');
		$this->load->view('Empleado/Layout_emp/menu');
		$this->load->view('Empleado/Citas/create', $data);
		$this->load->view('Empleado/Layout_emp/footer');
	}
	
	public function nuevaCita1(){
		$generada = $this->generarClave();
		$data['clave'] = $generada;
		$paramCita['id_zootecnico'] 	= $this->session->userdata('s_id_zootecnico');
		$paramCita['id_cliente'] 		= $this->input->post('id_cliente');
		$paramCita['id_mascota'] 		= $this->input->post('id_mascota');
		$paramCita['motivo'] 			= $this->input->post('motivo');
		$paramCita['fecha'] 			= $this->input->post('fecha');
		$paramCita['turno'] 			= $this->input->post('turno');
		$paramCita['status'] 			= $this->input->post('status');
		$paramCita['clave'] 			= $generada;

		$data['id_citas'] = $this->Citas_model->insert_cita($paramCita);

		$this->load->view('Empleado/Layout_emp/header');
		$this->load->view('Empleado/Layout_emp/menu');
		$this->load->view('Empleado/Citas/success', $data);
		$this->load->view('Empleado/Layout_emp/footer');
	}

	public function nuevaCita(){

		if($this->input->post('turno') == "Mañana"){
			$generada = $this->generarClave();
			$data['clave'] = $generada;

			$a = $this->input->post('fecha');
			$b = $this->input->post('fecha');
			$paramCita['start'] = $a. " 09:00:00"; 
			$paramCita['end'] = $b. " 14:00:00"; 
			$paramCita['id_zootecnico'] 	= $this->session->userdata('s_id_zootecnico');
			$paramCita['id_cliente'] 		= $this->input->post('id_cliente');
			$paramCita['id_mascota'] 		= $this->input->post('id_mascota');
			$paramCita['motivo'] 			= $this->input->post('motivo');
			$paramCita['turno'] 			= $this->input->post('turno');
			$paramCita['status'] 			= $this->input->post('status');
			$paramCita['clave'] 			= $generada;
			$paramCita['backgroundColor'] 	= "#0073b7";
			$paramCita['borderColor'] 		= "#0073b7";

			$data['id_citas'] = $this->Citas_model->insert_cita($paramCita);

		}elseif ($this->input->post('turno') == "Tarde") {
			$generada = $this->generarClave();
			$data['clave'] = $generada;

			$a = $this->input->post('fecha');
			$b = $this->input->post('fecha');
			$paramCita['start'] = $a. " 15:00:00"; 
			$paramCita['end'] = $b. " 20:00:00"; 
			$paramCita['id_zootecnico'] 	= $this->session->userdata('s_id_zootecnico');
			$paramCita['id_cliente'] 		= $this->input->post('id_cliente');
			$paramCita['id_mascota'] 		= $this->input->post('id_mascota');
			$paramCita['motivo'] 			= $this->input->post('motivo');
			$paramCita['turno'] 			= $this->input->post('turno');
			$paramCita['status'] 			= $this->input->post('status');
			$paramCita['clave'] 			= $generada;
			$paramCita['backgroundColor'] 	= "#00a65a";
			$paramCita['borderColor'] 		= "#00a65a";

			$data['id_citas'] = $this->Citas_model->insert_cita($paramCita);
		}

		$this->load->view('Empleado/Layout_emp/header');
		$this->load->view('Empleado/Layout_emp/menu');
		$this->load->view('Empleado/Citas/success', $data);
		$this->load->view('Empleado/Layout_emp/footer');
	}

	//----------para el combo cliente/mascota---------------
	
	public function getCliente(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$resultado = $this->Citas_model->getCliente($id_zootecnico);
		echo json_encode($resultado);
	}

	public function getMascota(){
		$s = $this->input->post('id_cliente');
		$resultado = $this->Citas_model->getMascota($s);
		echo json_encode($resultado);
	}

	public function editar_cita(){
		$param['id_citas']        = $this->input->post('id_citas');
		$param['status']        = $this->input->post('status');


		$this->Citas_model->edit_cita($param);
		redirect( base_url() . 'Empleado/Citas/');
	} 

	public function edit(){
		$id_citas = $this->uri->segment(4);

		if (empty($id_citas)){
			show_404();
		}

		$data['error'] = ' ';
		$data['title'] = 'Editar status de la cita';
		$data['citas'] = $this->Citas_model->get_detalle_cita($id_citas);
        //llena el combo
		$this->load->view('Empleado/Layout_emp/header');
		$this->load->view('Empleado/Layout_emp/menu');
		$this->load->view('Empleado/Citas/edit', $data);
		$this->load->view('Empleado/Layout_emp/footer');
	}


	public function generar($id_citas){

		$timezone = "America/Mexico_City";
		date_default_timezone_set($timezone);

		$hora = date("H:i:s");
		$fecha = date("d-m-Y");

		$data['citas']   = $this->Citas_model->get_detalle_cita($id_citas);

		$html = $this->load->view('Empleado/Citas/imprimir', $data, true);

        //this the the PDF filename that user will get to download
		$pdfFilePath = "Clinic-pet-Cita-".$fecha."_".$hora.".pdf";

        //load mPDF library
		$this->load->library('M_pdf');

       //generate the PDF from the given html
		$this->m_pdf->pdf->WriteHTML($html);

        //download it.
		$this->m_pdf->pdf->Output($pdfFilePath, "D"); 
	}
} 
?>