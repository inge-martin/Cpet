<?php
class Habitad extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/habitad_model');
    }

    public function index(){
        $data['habitad'] = $this->habitad_model->get_habitad();
        $data['title'] = 'Listado de Habitats';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Habitad/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }
    
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Crear nueva habitat';

        $this->form_validation->set_rules('nombre', 'Text', 'required');
        $this->form_validation->set_rules('descripcion', 'Text', 'required');

        if ($this->form_validation->run() === FALSE){

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Habitad/create', $data);
            $this->load->view('Administrador/Layout_admin/footer');            

        }else{
            $this->habitad_model->set_habitad();
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Habitad/success');
            $this->load->view('Administrador/Layout_admin/footer');            
        }
    }
    
    public function edit(){
        $id_habitad = $this->uri->segment(4);
        
        if (empty($id_habitad)){
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Editar habitat';        
        $data['habitad'] = $this->habitad_model->get_habitad_by_id($id_habitad);
        
        $this->form_validation->set_rules('nombre', 'Text', 'required');
        $this->form_validation->set_rules('descripcion', 'Text', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Habitad/edit', $data);
            $this->load->view('Administrador/Layout_admin/footer');
        }else{
            $this->habitad_model->set_habitad($id_habitad);
            //$this->load->view('news/success');
            redirect( base_url() . 'Administrador/Habitad');
        }
    }
    
    public function delete(){
        $id_habitad = $this->uri->segment(4);
        
        if (empty($id_habitad)){
            show_404();
        }

        $news_item = $this->habitad_model->get_habitad_by_id($id_habitad);
        
        $this->habitad_model->delete_habitad($id_habitad);        
        redirect( base_url() . 'Administrador/Habitad');
    }
}
