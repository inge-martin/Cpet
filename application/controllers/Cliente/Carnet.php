<?php 

class Carnet extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Cliente/Carnet_model');
	}

	public function index(){
		$data['carnet'] = $this->Carnet_model->get_carnet();
		$data['title'] = 'Listado de mis mascotas vacunadas';

		$this->load->view('Cliente/Layout_cli/header');
		$this->load->view('Cliente/Layout_cli/menu');
		$this->load->view('Cliente/Carnet/index', $data);
		$this->load->view('Cliente/Layout_cli/footer');
	}

	public function view($id_mascota){
		$data['carnet'] = $this->Carnet_model->get_detalle_vacunacion($id_mascota);

		if (empty($data['carnet'])){
			show_404();
		}

		$this->load->view('Cliente/Layout_cli/header');
		$this->load->view('Cliente/Layout_cli/menu');
		$this->load->view('Cliente/Carnet/view', $data);
		$this->load->view('Cliente/Layout_cli/footer');
	}

	public function descargar($id_mascota){

		$timezone = "America/Mexico_City";
		date_default_timezone_set($timezone);

		$hora = date("H:i:s");
		$fecha = date("d-m-Y");

		$data['carnet'] = $this->Carnet_model->get_detalle_carnet($id_mascota);
		$data['title'] = "Carnet de Vacunación";

		$html = $this->load->view('Cliente/Carnet/imprimir', $data, true);

        //this the the PDF filename that user will get to download
		$pdfFilePath = "Clinic-pet-Carnet-".$fecha."_".$hora.".pdf";

        //load mPDF library
		$this->load->library('M_pdf');

       //generate the PDF from the given html
		$this->m_pdf->pdf->WriteHTML($html);

        //download it.
		$this->m_pdf->pdf->Output($pdfFilePath, "D"); 
	}
} 
?>