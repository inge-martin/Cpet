<?php
class Citas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Citas_model');
    }

    public function index(){
        $data['citas'] = $this->Citas_model->get_citas();
        $data['title'] = "Listado de Citas";
        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Citas/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }
}
