<?php
class Clinicas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/clinica_model');
    }

    public function index(){
        $data['clinica'] = $this->clinica_model->get_clinica();
        $data['title'] = 'Listado de Clínicas';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Clinica/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view($id_clinica){
        $data['clinica'] = $this->clinica_model->get_detalle_clinica($id_clinica);
        
        if (empty($data['clinica'])){
            show_404();
        }

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Clinica/view', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function newCli(){
        $data['error'] = ' ';
        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Clinica/create', $data);
        $this->load->view('Administrador/Layout_admin/footer');         
    }

    public function create(){ 
        // Recibes datos de domicilio
        $paramDom['id_estado']          = $this->input->post('txtEstado');
        $paramDom['id_municipio']       = $this->input->post('txtMunicipio');
        $paramDom['id_localidad']       = $this->input->post('txtLocalidad');
        $paramDom['cp']                 = $this->input->post('txtCp');
        $paramDom['colonia']            = $this->input->post('txtColonia');
        $paramDom['calle']              = $this->input->post('txtCalle');
        $paramDom['numero']             = $this->input->post('txtNumero');
        $paramDom['numero_int']         = $this->input->post('txtNumero_int');
        $paramDom['manzana']            = $this->input->post('txtManzana');
        $paramDom['lote']               = $this->input->post('txtLote');

        // Guardas Clinica 
        $paramClinica['nombre']         = $this->input->post('nombre');
        $paramClinica['telefono1']      = $this->input->post('telefono1');
        $paramClinica['telefono2']      = $this->input->post('telefono2');
        $paramClinica['email']          = $this->input->post('email');
        $paramClinica['dias']           = $this->input->post('dias');
        $paramClinica['horario']        = $this->input->post('horario');
        $paramClinica['sitioweb']       = $this->input->post('sitioweb');
        $paramClinica['fotografia']     = $this->input->post('txtFotografia');

        $config['upload_path']      = './assets/image/fotos/clinica';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = '5000';
        $config['max_width']        = '5000';
        $config['max_height']       = '5000';
        $config['encrypt_name']     = TRUE;
        $this->load->library('upload',$config);
        
        //si al subir imagen manda error 
        if (!$this->upload->do_upload("txtFotografia")) {
            $data['error'] = $this->upload->display_errors('<p>', '</p>');
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Clinica/create',$data);
            $this->load->view('Administrador/Layout_admin/footer');

        }else{
            $last_iDom = $this->clinica_model->insert_domicilio($paramDom);
            $file_info = $this->upload->data();
            $paramClinica['fotografia']   = $file_info['file_name'];
            $paramClinica['id_domicilio'] = $last_iDom;             
            $last_idCli  = $this->clinica_model->insert_clinica($paramClinica);

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Clinica/success');
            $this->load->view('Administrador/Layout_admin/footer');
        }
    }    

    public function editar_clinica(){
        //Datos de clinica
        $paramClinica['id_clinica']     = $this->input->post('id_clinica');
        $paramClinica['nombre']         = $this->input->post('nombre');
        $paramClinica['telefono1']      = $this->input->post('telefono1');
        $paramClinica['telefono2']      = $this->input->post('telefono2');
        $paramClinica['email']          = $this->input->post('email');
        $paramClinica['dias']           = $this->input->post('dias');
        $paramClinica['horario']        = $this->input->post('horario');
        $paramClinica['sitioweb']       = $this->input->post('sitioweb');
        $this->clinica_model->edit_clinica($paramClinica);

        //Domicilio de la clinica
        $paramDom['id_domicilio']   = $this->input->post('id_domicilio');
        $paramDom['cp']             = $this->input->post('cp');
        $paramDom['calle']          = $this->input->post('calle');
        $paramDom['numero']         = $this->input->post('numero');
        $paramDom['numero_int']     = $this->input->post('numero_int');
        $paramDom['manzana']        = $this->input->post('manzana');
        $paramDom['lote']           = $this->input->post('lote');
        $paramDom['colonia']        = $this->input->post('colonia');
        $this->clinica_model->edit_clinica_dom($paramDom);        

        redirect( base_url() . 'Administrador/Clinicas/view/'.$paramClinica['id_clinica']);
    }

    public function edit(){
        $id_clinica = $this->uri->segment(4);
        
        if (empty($id_clinica)){
            show_404();
        }
        
        $data['clinica'] = $this->clinica_model->get_detalle_clinica($id_clinica);

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Clinica/edit', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }
    
    public function delete(){
        $id_clinica = $this->uri->segment(4);
        
        if (empty($id_clinica)){
            show_404();
        }

        $this->clinica_model->delete_clinica($id_clinica);        
        redirect( base_url() . 'Administrador/Clinicas');
    }
}
