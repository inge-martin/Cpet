<?php
class Vacunacion extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Empleado/Vacunacion_model');
    }

    public function index(){
        $data['vacunas'] = $this->Vacunacion_model->get_vacunacion();
        $data['title'] = 'Listado de Carnets';

        $this->load->view('Empleado/Layout_emp/header');
        $this->load->view('Empleado/Layout_emp/menu');
        $this->load->view('Empleado/Vacunacion/index', $data);
        $this->load->view('Empleado/Layout_emp/footer');
    }

    public function view($id_mascota){
        $data['vacunas'] = $this->Vacunacion_model->get_detalle_vacunacion($id_mascota);
        
        if (empty($data['vacunas'])){
            show_404();
        }

        $this->load->view('Empleado/Layout_emp/header');
        $this->load->view('Empleado/Layout_emp/menu');
        $this->load->view('Empleado/Vacunacion/view', $data);
        $this->load->view('Empleado/Layout_emp/footer');
    }

    public function newVacuna(){
        $data['error'] = ' ';
        $data['mascota'] = $this->Vacunacion_model->get_mascota();
        $data['vacunas'] = $this->Vacunacion_model->get_vacunas();
        $this->load->view('Empleado/Layout_emp/header');
        $this->load->view('Empleado/Layout_emp/menu');
        $this->load->view('Empleado/Vacunacion/create', $data);
        $this->load->view('Empleado/Layout_emp/footer');         
    }

    public function create(){ 
        // Recibes datos de extravio
        $param['id_mascota']            = $this->input->post('id_mascota');
        $param['id_vacuna']             = $this->input->post('id_vacuna');
        $param['fecha_aplicacion']      = $this->input->post('fecha_aplicacion');
        $param['siguiente_aplicacion']  = $this->input->post('siguiente_aplicacion');

        $this->Vacunacion_model->insert_vacunacion($param);

        $this->load->view('Empleado/Layout_emp/header');
        $this->load->view('Empleado/Layout_emp/menu');
        $this->load->view('Empleado/Vacunacion/success');
        $this->load->view('Empleado/Layout_emp/footer');
    }

    public function descargar($id_mascota){

        $timezone = "America/Mexico_City";
        date_default_timezone_set($timezone);

        $hora = date("H:i:s");
        $fecha = date("d-m-Y");

        $data['carnet'] = $this->Vacunacion_model->get_detalle_carnet($id_mascota);
        $data['title'] = "Carnet de Vacunación";

        $html = $this->load->view('Empleado/Vacunacion/imprimir', $data, true);

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
