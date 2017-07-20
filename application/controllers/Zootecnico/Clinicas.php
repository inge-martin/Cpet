<?php
class Clinicas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Zootecnico/Clinica_model');
    }

    public function index(){
        $data['clinica'] = $this->Clinica_model->get_clinica();
        $data['title'] = 'Listado de Clínicas';

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Clinica/index', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }

    public function view($id_clinica){
        $data['clinica'] = $this->Clinica_model->get_detalle_clinica($id_clinica);
        
        if (empty($data['clinica'])){
            show_404();
        }

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Clinica/view', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }
}
