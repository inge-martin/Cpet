<?php
class Raza extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/raza_model');
    }

    public function index(){
        $data['raza'] = $this->raza_model->get_raza();
        $data['title'] = 'Listado de Razas';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Raza/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view($id_raza = 0){
        $data['raza'] = $this->raza_model->get_raza($id_raza);

        if (empty($data['raza'])){
            show_404();
        }

        // $data['title'] = $data['raza']['nombre'];

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Raza/view', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function create(){      
        //llena el combo
        $data['especie'] = $this->raza_model->get_especie();
        $data['title'] = 'Crear nueva raza';

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Text', 'required');
        $this->form_validation->set_rules('descripcion', 'Text', 'required');

        if ($this->form_validation->run() === FALSE){

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Raza/create', $data);
            $this->load->view('Administrador/Layout_admin/footer');            

        }else{
            $this->raza_model->set_raza();
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Raza/success');
            $this->load->view('Administrador/Layout_admin/footer');            
        }        
    }    

    public function edit(){
        $id_raza = $this->uri->segment(4);

        if (empty($id_raza)){
            show_404();
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Editar raza';        
        $data['raza'] = $this->raza_model->get_raza_by_id($id_raza);

        $this->form_validation->set_rules('nombre', 'Text', 'required');
        $this->form_validation->set_rules('descripcion', 'Text', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Raza/edit', $data);
            $this->load->view('Administrador/Layout_admin/footer');
        }else{
            $this->raza_model->set_raza($id_raza);
            //$this->load->view('news/success');
            redirect( base_url() . 'Administrador/Raza');
        }
    }

    public function delete(){
        $id_raza = $this->uri->segment(4);

        if (empty($id_raza)){
            show_404();
        }

        $news_item = $this->raza_model->get_raza_by_id($id_raza);

        $this->raza_model->delete_raza($id_raza);        
        redirect( base_url() . 'Administrador/Raza');
    }
}

?>