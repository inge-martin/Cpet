<?php
class Servicios extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Cliente/Servicios_model');
    }

    public function index(){
        $data['servicios'] = $this->Servicios_model->get_servicios();
        $data['title'] = 'Listado de Servicios';

        $this->load->view('Cliente/Layout_cli/header');
        $this->load->view('Cliente/Layout_cli/menu');
        $this->load->view('Cliente/Servicios/index', $data);
        $this->load->view('Cliente/Layout_cli/footer');
    }

}
