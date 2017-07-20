<?php
class Valoracion extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Zootecnico/valoracion_model');
    }

    public function index(){
        $data['valoracion'] = $this->valoracion_model->get_valoracion();
        $data['title'] = 'Mis Valoraciones';

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Valoracion/index', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }
}
