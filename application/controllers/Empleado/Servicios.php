<?php
class Servicios extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Empleado/Servicios_model');
    }

    public function index(){
        $data['servicios'] = $this->Servicios_model->get_servicios();
        $data['title'] = 'Listado de Servicios';

        $this->load->view('Empleado/Layout_emp/header');
        $this->load->view('Empleado/Layout_emp/menu');
        $this->load->view('Empleado/Servicios/index', $data);
        $this->load->view('Empleado/Layout_emp/footer');
    }

}
