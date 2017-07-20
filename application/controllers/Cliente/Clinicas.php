<?php
class Clinicas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Cliente/Clinica_model');
    }

    public function index(){
        $data['clinica'] = $this->Clinica_model->get_clinica();
        $data['title'] = 'Listado de Clínicas';

        $this->load->view('Cliente/Layout_cli/header');
        $this->load->view('Cliente/Layout_cli/menu');
        $this->load->view('Cliente/Clinica/index', $data);
        $this->load->view('Cliente/Layout_cli/footer');
    }

    public function view($id_clinica){
        $data['clinica'] = $this->Clinica_model->get_detalle_clinica($id_clinica);
        
        if (empty($data['clinica'])){
            show_404();
        }

        $this->load->view('Cliente/Layout_cli/header');
        $this->load->view('Cliente/Layout_cli/menu');
        $this->load->view('Cliente/Clinica/view', $data);
        $this->load->view('Cliente/Layout_cli/footer');
    }
}
