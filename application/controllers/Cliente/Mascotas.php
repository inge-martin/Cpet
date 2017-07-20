<?php
class Mascotas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Cliente/Mascota_model');
    }

    public function index(){
        $data['mascota'] = $this->Mascota_model->get_mascota();
        $data['title'] = "Listado de Mascotas";
        $this->load->view('Cliente/Layout_cli/header');
        $this->load->view('Cliente/Layout_cli/menu');
        $this->load->view('Cliente/Mascota/index', $data);
        $this->load->view('Cliente/Layout_cli/footer');
    }

    public function view($id_mascota){
        $data['mascota'] = $this->Mascota_model->get_detalle_mascota($id_mascota);

        if (empty($data['mascota'])){
            show_404();
        }

        $this->load->view('Cliente/Layout_cli/header');
        $this->load->view('Cliente/Layout_cli/menu');
        $this->load->view('Cliente/Mascota/view', $data);
        $this->load->view('Cliente/Layout_cli/footer');
    }

}
