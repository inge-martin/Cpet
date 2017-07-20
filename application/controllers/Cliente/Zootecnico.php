<?php
class Zootecnico extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Cliente/Zootecnico_model');
    }

    public function index(){
        $data['zootecnico'] = $this->Zootecnico_model->get_detalle_zoo();

        $this->load->view('Cliente/Layout_cli/header');
        $this->load->view('Cliente/Layout_cli/menu');
        $this->load->view('Cliente/Zootecnico/view', $data);
        $this->load->view('Cliente/Layout_cli/footer');
    }

}
