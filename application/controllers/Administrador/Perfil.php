<?php
class Perfil extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Perfil_model');
    }

    public function index(){
        $id_admin = $this->session->userdata('s_id_admin');
        $data['administrador'] = $this->Perfil_model->get_perfil($id_admin);

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Perfil/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function editDir(){
        $id_domicilio = $this->session->userdata('s_id_domicilio');
        $data['domicilio'] = $this->Perfil_model->get_direccion($id_domicilio);

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Perfil/editDom', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function editar_direccion(){
        $paramDir['id_domicilio'] = $this->session->userdata('s_id_domicilio');
        $paramDir['estado']     = $this->input->post('estado');
        $paramDir['municipio']  = $this->input->post('municipio');
        $paramDir['localidad']  = $this->input->post('localidad');
        $paramDir['cp']         = $this->input->post('cp');
        $paramDir['calle']      = $this->input->post('calle');
        $paramDir['numero']     = $this->input->post('numero');
        $paramDir['numero_int'] = $this->input->post('numero_int');
        $paramDir['colonia']    = $this->input->post('colonia');
        $paramDir['manzana']    = $this->input->post('manzana');
        $paramDir['lote']       = $this->input->post('lote');

        $this->Perfil_model->edit_direccion($paramDir);
        redirect( base_url() . 'Administrador/Perfil/');
    }

    public function editPerfil(){
        $id_admin = $this->session->userdata('s_id_admin');
        $data['admin'] = $this->Perfil_model->get_admin($id_admin);
        
        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Perfil/editPerf', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function editar_admin(){
        $paramAdmin['id_admin']          = $this->session->userdata('s_id_admin');
        $paramAdmin['nombre']            = $this->input->post('txtNombre');
        $paramAdmin['ap_paterno']        = $this->input->post('txtApPaterno');
        $paramAdmin['ap_materno']        = $this->input->post('txtApMaterno');
        $paramAdmin['telefono_local']    = $this->input->post('txtTelCasa');
        $paramAdmin['telefono_celular']  = $this->input->post('txtTelCel');
        $paramAdmin['sexo']              = $this->input->post('txtSexo');
        $paramAdmin['email']             = $this->input->post('txtEmail');
        $paramAdmin['fecha_nacimiento']  = $this->input->post('txtFechaNaci');

        $this->Perfil_model->edit_admin($paramAdmin);
        redirect( base_url() . 'Administrador/Perfil/');
    }

    public function editPass(){
        $data['mensaje'] = "";
        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Perfil/editPass', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function editar_pass(){
        $id_sesiones       = $this->session->userdata('s_id_sesiones');
        $old_contrasena    = md5($this->input->post('old_contrasena'));//actual
        $contrasena   = md5($this->input->post('contrasena'));//nueva

        $resultado = $this->Perfil_model->get_pass($id_sesiones, $old_contrasena);

        if($resultado == 0){
            $data['mensaje'] = "Tu contraseña actual no coincide"; 
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Perfil/editPass', $data);
            $this->load->view('Administrador/Layout_admin/footer');
        }else{
            $this->Perfil_model->edit_pass($id_sesiones, $contrasena);
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Perfil/success');
            $this->load->view('Administrador/Layout_admin/footer');  
        }
    }

}