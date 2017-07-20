<?php
class Servicios extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/servicios_model');
    }

    public function index(){
        $data['servicios'] = $this->servicios_model->get_servicios();
        $data['title'] = 'Listado de Servicios';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Servicios/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view($nombre = NULL){
        $data['servicios'] = $this->servicios_model->get_servicios($nombre);
        
        if (empty($data['servicios'])){
            show_404();
        }

        $data['title'] = $data['servicios']['nombre'];

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Servicios/view', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }
    
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Crear nuevo servicio';

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
        $this->form_validation->set_rules('costo', 'Costo', 'required');


        if ($this->form_validation->run() === FALSE){

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Servicios/create', $data);
            $this->load->view('Administrador/Layout_admin/footer');            

        }else{
            $this->servicios_model->set_servicios();
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Servicios/success');
            $this->load->view('Administrador/Layout_admin/footer');            
        }
    }
    
    public function edit(){
        $id_servicios = $this->uri->segment(4);
        
        if (empty($id_servicios)){
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Editar servicio';        
        $data['servicios'] = $this->servicios_model->get_servicios_by_id($id_servicios);
        
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
        $this->form_validation->set_rules('costo', 'Costo', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Servicios/edit', $data);
            $this->load->view('Administrador/Layout_admin/footer');
        }else{
            $this->servicios_model->set_servicios($id_servicios);
            //$this->load->view('news/success');
            redirect( base_url() . 'Administrador/Servicios');
        }
    }
    
    public function delete(){
        $id_servicios = $this->uri->segment(4);
        
        if (empty($id_servicios)){
            show_404();
        }

        $news_item = $this->servicios_model->get_servicios_by_id($id_servicios);
        
        $this->servicios_model->delete_servicios($id_servicios);        
        redirect( base_url() . 'Administrador/Servicios');
    }
}
