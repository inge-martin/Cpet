<?php
class Expediente extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Expediente_model');
    }

    public function index(){
        $data['clinica']    = $this->Expediente_model->cbo_clinica();
        $data['zootecnico'] = $this->Expediente_model->cbo_zootecnico();
        $data['cliente']    = $this->Expediente_model->cbo_cliente();
        $data['mascota']    = $this->Expediente_model->cbo_mascota();

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Expediente/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view(){
        $id_clinica     = $this->input->post('id_clinica');
        $id_zootecnico  = $this->input->post('id_zootecnico');
        $id_cliente     = $this->input->post('id_cliente');
        $id_mascota     = $this->input->post('id_mascota');

        $data['clinica']    = $this->Expediente_model->get_clinica($id_clinica);
        $data['zootecnico'] = $this->Expediente_model->get_zootecnico($id_zootecnico);
        $data['cliente']    = $this->Expediente_model->get_cliente($id_cliente);
        $data['mascota']    = $this->Expediente_model->get_mascota($id_mascota);
        $data['vacuna']     = $this->Expediente_model->get_vacuna($id_mascota);
        $data['consulta']   = $this->Expediente_model->get_consulta($id_mascota);
        $this->load->view('Administrador/Expediente/imprimir', $data);
    }

    public function generar(){

        $timezone = "America/Mexico_City";
        date_default_timezone_set($timezone);

        $hora = date("H:i:s");
        $fecha = date("d-m-Y");

        $id_clinica     = $this->input->post('id_clinica');
        $id_zootecnico  = $this->input->post('id_zootecnico');
        $id_cliente     = $this->input->post('id_cliente');
        $id_mascota     = $this->input->post('id_mascota');

        $data['clinica']    = $this->Expediente_model->get_clinica($id_clinica);
        $data['zootecnico'] = $this->Expediente_model->get_zootecnico($id_zootecnico);
        $data['cliente']    = $this->Expediente_model->get_cliente($id_cliente);
        $data['mascota']    = $this->Expediente_model->get_mascota($id_mascota);
        $data['vacuna']     = $this->Expediente_model->get_vacuna($id_mascota);
        $data['consulta']   = $this->Expediente_model->get_consulta($id_mascota);

        $html = $this->load->view('Administrador/Expediente/imprimir', $data, true);

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
