<?php
class Adopciones extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Cliente/Adopcion_model');
    }

    public function index(){
        $data['adopcion'] = $this->Adopcion_model->get_adopcion();
        $data['title'] = 'Listado de Mascotas';

        $this->load->view('Cliente/Layout_cli/header');
        $this->load->view('Cliente/Layout_cli/menu');
        $this->load->view('Cliente/Adopcion/index', $data);
        $this->load->view('Cliente/Layout_cli/footer');
    }

    public function view($id_adopcion){
        $data['adopcion'] = $this->Adopcion_model->get_detalle_adopcion($id_adopcion);
        
        if (empty($data['adopcion'])){
            show_404();
        }

        $this->load->view('Cliente/Layout_cli/header');
        $this->load->view('Cliente/Layout_cli/menu');
        $this->load->view('Cliente/Adopcion/view', $data);
        $this->load->view('Cliente/Layout_cli/footer');
    }
    
}
