<?php
class Adopcion extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Adopcion_model');
    }

    public function index(){
        $data['adopcion'] = $this->Adopcion_model->get_adopcion();
        $data['title'] = 'Listado de Mascotas';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Adopcion/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view($id_adopcion){
        $data['adopcion'] = $this->Adopcion_model->get_detalle_adopcion($id_adopcion);
        
        if (empty($data['adopcion'])){
            show_404();
        }

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Adopcion/view', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }
    
}
