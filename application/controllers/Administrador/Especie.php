<?php
class Especie extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/especie_model');
    }

    public function index(){
        $data['especie'] = $this->especie_model->get_especie();
        $data['title'] = 'Listado de Especies';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Especie/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view($id_especie = 0){
        $data['especie'] = $this->especie_model->get_especie($id_especie);

        if (empty($data['especie'])){
            show_404();
        }

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Especie/view', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function create(){      
        //llena el combo
        $data['habitad'] = $this->especie_model->get_habitad();
        $data['title'] = 'Crear nueva especie';

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Text', 'required');
        $this->form_validation->set_rules('descripcion', 'Text', 'required');

        if ($this->form_validation->run() === FALSE){

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Especie/create', $data);
            $this->load->view('Administrador/Layout_admin/footer');            

        }else{
            $this->especie_model->set_especie();
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Especie/success');
            $this->load->view('Administrador/Layout_admin/footer');            
        }        
    }    

    public function edit(){
        $id_especie = $this->uri->segment(4);

        if (empty($id_especie)){
            show_404();
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Editar especie';        
        $data['especie'] = $this->especie_model->get_especie_by_id($id_especie);

        $this->form_validation->set_rules('nombre', 'Text', 'required');
        $this->form_validation->set_rules('descripcion', 'Text', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Especie/edit', $data);
            $this->load->view('Administrador/Layout_admin/footer');
        }else{
            $this->especie_model->set_especie($id_especie);
            //$this->load->view('news/success');
            redirect( base_url() . 'Administrador/Especie');
        }
    }

    public function delete(){
        $id_especie = $this->uri->segment(4);

        if (empty($id_especie)){
            show_404();
        }

        $news_item = $this->especie_model->get_especie_by_id($id_especie);

        $this->especie_model->delete_especie($id_especie);        
        redirect( base_url() . 'Administrador/Especie');
    }
}

?>