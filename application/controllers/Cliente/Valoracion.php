<?php
class Valoracion extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Cliente/valoracion_model');
    }

    public function index(){
        $result = $this->valoracion_model->validar();
        if(empty($result)){
            $data['valoracion'] = $this->valoracion_model->get_valoracion();
            $this->load->view('Cliente/Layout_cli/header');
            $this->load->view('Cliente/Layout_cli/menu');
            $this->load->view('Cliente/Valoracion/create', $data);
            $this->load->view('Cliente/Layout_cli/footer');
        }else{

            $data['valoracion'] = $this->valoracion_model->get_valoracion();
            $data['title'] = 'Valoración de mi Zootécnico';

            $this->load->view('Cliente/Layout_cli/header');
            $this->load->view('Cliente/Layout_cli/menu');
            $this->load->view('Cliente/Valoracion/index', $data);
            $this->load->view('Cliente/Layout_cli/footer');
        }
    }

    public function guardar_valoracion(){
        $id_zoo = $this->input->post('id_zootecnico');
        $id_cli = $this->input->post('id_cliente');
        $valora = $this->input->post('valoracion');
        $this->valoracion_model->guarda_valoracion($id_zoo, $id_cli, $valora);

        redirect( base_url() . 'Cliente/Valoracion');
    }
    
}
