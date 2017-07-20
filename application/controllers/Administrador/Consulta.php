<?php
class Consulta extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Consulta_model');
    }

    public function index(){
        $data['consultas'] = $this->Consulta_model->get_consulta();
        $data['title'] = 'Listado de Consultas';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Consulta/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

}
