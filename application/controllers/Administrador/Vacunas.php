<?php
class Vacunas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Vacuna_model');
    }

    public function index(){
        $data['vacunas'] = $this->Vacuna_model->get_vacunas();
        $data['title'] = 'Listado de Vacunas';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Vacunas/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view($id_vacuna){
        $data['vacunas'] = $this->Vacuna_model->get_vacunas($id_vacuna);
        
        if (empty($data['vacunas'])){
            show_404();
        }

        $data['title'] = "Detalle de vacuna";

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Vacunas/view', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }
    
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Crear nueva vacuna';

        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('descripcion', 'descripcion', 'required');
        $this->form_validation->set_rules('costo', 'costo', 'required');



        if ($this->form_validation->run() === FALSE){

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Vacunas/create', $data);
            $this->load->view('Administrador/Layout_admin/footer');            

        }else{
            $this->Vacuna_model->set_vacunas();
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Vacunas/success');
            $this->load->view('Administrador/Layout_admin/footer');            
        }
    }
    
    public function edit(){
        $id_vacuna = $this->uri->segment(4);
        
        if (empty($id_vacuna)){
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Editar vacuna';        
        $data['vacunas'] = $this->Vacuna_model->get_vacunas_by_id($id_vacuna);
        
       
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('descripcion', 'descripcion', 'required');
        $this->form_validation->set_rules('costo', 'costo', 'required');



        if ($this->form_validation->run() === FALSE){
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Vacunas/edit', $data);
            $this->load->view('Administrador/Layout_admin/footer');
        }else{
            $this->Vacuna_model->set_vacunas($id_vacuna);
            redirect( base_url() . 'Administrador/Vacunas');
        }
    }
    
    public function delete(){
        $id_vacuna = $this->uri->segment(4);
        
        if (empty($id_vacuna)){
            show_404();
        }

        $this->Vacuna_model->delete_vacunas($id_vacuna);        
        redirect( base_url() . 'Administrador/Vacunas');
    }
}
