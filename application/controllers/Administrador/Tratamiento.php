<?php
class Tratamiento extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/tratamiento_model');
    }

    public function index(){
        $data['tratamiento'] = $this->tratamiento_model->get_tratamiento();
        $data['title'] = 'Listado de Tratamientos';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Tratamiento/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view($nombre = NULL){
        $data['tratamiento'] = $this->tratamiento_model->get_tratamiento($nombre);
        
        if (empty($data['tratamiento'])){
            show_404();
        }

        $data['title'] = $data['tratamiento']['nombre'];

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Tratamiento/view', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }
    
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Crear nuevo tratamiento';

        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('descripcion', 'descripcion', 'required');
        $this->form_validation->set_rules('costo', 'costo', 'required');



        if ($this->form_validation->run() === FALSE){

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Tratamiento/create', $data);
            $this->load->view('Administrador/Layout_admin/footer');            

        }else{
            $this->tratamiento_model->set_tratamiento();
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Tratamiento/success');
            $this->load->view('Administrador/Layout_admin/footer');            
        }
    }
    
    public function edit(){
        $id_tratamiento = $this->uri->segment(4);
        
        if (empty($id_tratamiento)){
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Editar tratamiento';        
        $data['tratamiento'] = $this->tratamiento_model->get_tratamiento_by_id($id_tratamiento);
        
       
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('descripcion', 'descripcion', 'required');
        $this->form_validation->set_rules('costo', 'costo', 'required');



        if ($this->form_validation->run() === FALSE){
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Tratamiento/edit', $data);
            $this->load->view('Administrador/Layout_admin/footer');
        }else{
            $this->tratamiento_model->set_tratamiento($id_tratamiento);
            //$this->load->view('news/success');
            redirect( base_url() . 'Administrador/Tratamiento');
        }
    }
    
    public function delete(){
        $id_tratamiento = $this->uri->segment(4);
        
        if (empty($id_tratamiento)){
            show_404();
        }

        $news_item = $this->tratamiento_model->get_tratamiento_by_id($id_tratamiento);
        
        $this->tratamiento_model->delete_tratamiento($id_tratamiento);        
        redirect( base_url() . 'Administrador/Tratamiento');
    }
}
