<?php
class Servicios extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Zootecnico/Servicios_model');
    }

    public function index(){
        $data['servicios'] = $this->Servicios_model->get_servicios();
        $data['title'] = 'Listado de Servicios';

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Servicios/index', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }

}
