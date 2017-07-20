<?php
class Extravio extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Zootecnico/Extravio_model');
    }

    public function index(){
        $data['extravio'] = $this->Extravio_model->get_extravio();
        $data['title'] = 'Listado de Extravios';

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Extravio/index', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }

    public function view($id_extravio){
        $data['extravio'] = $this->Extravio_model->get_detalle_extravio($id_extravio);
        
        if (empty($data['extravio'])){
            show_404();
        }

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Extravio/view', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }

    public function newEx(){
        $data['error'] = ' ';
        $data['mascota'] = $this->Extravio_model->get_mascota();
        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Extravio/create', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');         
    }

    public function create(){ 
        // Recibes datos de extravio
        $paramEX['id_mascota']         = $this->input->post('id_mascota');
        $paramEX['fecha_extravio']     = $this->input->post('fecha_extravio');
        $paramEX['senas_particulares'] = $this->input->post('senas_particulares');
        $paramEX['ubicacion']          = $this->input->post('ubicacion');
        $this->Extravio_model->insert_extravio($paramEX);

        //Actualiza el status de la mascota
        $id_mascota = $this->input->post('id_mascota');
        $status = 'Perdido';
        $this->Extravio_model->actualiza_status($id_mascota, $status);

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Extravio/success');
        $this->load->view('Zootecnico/Layout_zoo/footer');
    } 

    public function edit(){
        $id_extravio = $this->uri->segment(4);

        if (empty($id_extravio)){
            show_404();
        }

        $data['extravio'] = $this->Extravio_model->get_detalle_extravio($id_extravio);

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Extravio/edit', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }

    public function editar_extravio(){
        // Recibes datos de extravio
        $paramEX['id_extravio']        = $this->input->post('id_extravio');
        $paramEX['id_mascota']         = $this->input->post('id_mascota');
        $paramEX['fecha_extravio']     = $this->input->post('fecha_extravio');
        $paramEX['senas_particulares'] = $this->input->post('senas_particulares');
        $paramEX['ubicacion']          = $this->input->post('ubicacion');
        $this->Extravio_model->edit_extravio($paramEX);

        //Actualiza el status de la mascota
        $id_mascota = $this->input->post('id_mascota');
        $status     = $this->input->post('status');
        $this->Extravio_model->actualiza_status($id_mascota, $status);

        redirect( base_url() . 'Zootecnico/Extravio');
    }

    public function delete(){
        $id_extravio = $this->uri->segment(4);

        if (empty($id_extravio)){
            show_404();
        }

        $this->Extravio_model->delete_extravio($id_extravio);        
        redirect( base_url() . 'Zootecnico/Extravio');
    }
}
