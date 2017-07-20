<?php
class Clinicas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Empleado/Clinica_model');
    }

    public function index(){
        $data['clinica'] = $this->Clinica_model->get_clinica();
        $data['title'] = 'Listado de Clínicas';

        $this->load->view('Empleado/Layout_emp/header');
        $this->load->view('Empleado/Layout_emp/menu');
        $this->load->view('Empleado/Clinica/index', $data);
        $this->load->view('Empleado/Layout_emp/footer');
    }

    public function view($id_clinica){
        $data['clinica'] = $this->Clinica_model->get_detalle_clinica($id_clinica);
        
        if (empty($data['clinica'])){
            show_404();
        }

        $this->load->view('Empleado/Layout_emp/header');
        $this->load->view('Empleado/Layout_emp/menu');
        $this->load->view('Empleado/Clinica/view', $data);
        $this->load->view('Empleado/Layout_emp/footer');
    }
}
