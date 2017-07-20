<?php
class Valoracion extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/valoracion_model');
    }

    public function index(){
        $data['valoracion'] = $this->valoracion_model->get_valoracion();
        $data['title'] = 'Listado de Valoraciones';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Valoracion/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view($estrellas = NULL){
        $data['valoracion'] = $this->valoracion_model->get_valoracion($estrellas);
        
        if (empty($data['valoracion'])){
            show_404();
        }

        $data['title'] = $data['valoracion']['estrellas'];

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Valoracion/view', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }
    
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Crear nueva valoracion';

        $this->form_validation->set_rules('estrellas', 'estrellas', 'required');
        $this->form_validation->set_rules('id_zootecnico', 'id_zootecnico', 'required');


        if ($this->form_validation->run() === FALSE){

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Valoracion/create', $data);
            $this->load->view('Administrador/Layout_admin/footer');            

        }else{
            $this->valoracion_model->set_valoracion();
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Valoracion/success');
            $this->load->view('Administrador/Layout_admin/footer');            
        }
    }
    
    public function edit(){
        $id_valoracion = $this->uri->segment(4);
        
        if (empty($id_valoracion)){
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Editar valoracion';        
        $data['valoracion'] = $this->valoracion_model->get_valoracion_by_id($id_valoracion);
        
       
        $this->form_validation->set_rules('estrellas', 'estrellas', 'required');
        $this->form_validation->set_rules('id_zootecnico', 'id_zootecnico', 'required');


        if ($this->form_validation->run() === FALSE){
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Valoracion/edit', $data);
            $this->load->view('Administrador/Layout_admin/footer');
        }else{
            $this->valoracion_model->set_valoracion($id_valoracion);
            //$this->load->view('news/success');
            redirect( base_url() . 'Administrador/Valoracion');
        }
    }
    
    public function delete(){
        $id_valoracion = $this->uri->segment(4);
        
        if (empty($id_valoracion)){
            show_404();
        }

        $news_item = $this->valoracion_model->get_valoracion_by_id($id_valoracion);
        
        $this->valoracion_model->delete_valoracion($id_valoracion);        
        redirect( base_url() . 'Administrador/Valoracion');
    }
}
