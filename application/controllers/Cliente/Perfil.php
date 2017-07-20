<?php
class Perfil extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Cliente/Perfil_model');
    }

    public function index(){
        $id_cliente = $this->session->userdata('s_id_cliente');
        $data['cliente'] = $this->Perfil_model->get_perfil($id_cliente);
        $data['mascota'] = $this->Perfil_model->get_mascota($id_cliente);

        $this->load->view('Cliente/Layout_cli/header');
        $this->load->view('Cliente/Layout_cli/menu');
        $this->load->view('Cliente/Perfil/index', $data);
        $this->load->view('Cliente/Layout_cli/footer');
    }

    public function editDir(){
        $id_domicilio = $this->session->userdata('s_id_domicilio');
        $data['domicilio'] = $this->Perfil_model->get_direccion($id_domicilio);

        $this->load->view('Cliente/Layout_cli/header');
        $this->load->view('Cliente/Layout_cli/menu');
        $this->load->view('Cliente/Perfil/editDom', $data);
        $this->load->view('Cliente/Layout_cli/footer');
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
        redirect( base_url() . 'Cliente/Perfil');
    }

    public function editPerfil(){
        $id_cliente = $this->session->userdata('s_id_cliente');
        $data['cliente'] = $this->Perfil_model->get_cli($id_cliente);
        
        $this->load->view('Cliente/Layout_cli/header');
        $this->load->view('Cliente/Layout_cli/menu');
        $this->load->view('Cliente/Perfil/editPerf', $data);
        $this->load->view('Cliente/Layout_cli/footer');
    }

    public function editar_cli(){
        $paramCli['id_cliente']        = $this->session->userdata('s_id_cliente');
        $paramCli['nombre']            = $this->input->post('txtNombre');
        $paramCli['ap_paterno']        = $this->input->post('txtApPaterno');
        $paramCli['ap_materno']        = $this->input->post('txtApMaterno');
        $paramCli['telefono_local']    = $this->input->post('txtTelCasa');
        $paramCli['telefono_celular']  = $this->input->post('txtTelCel');
        $paramCli['sexo']              = $this->input->post('txtSexo');
        $paramCli['email']             = $this->input->post('txtEmail');
        $paramCli['fecha_nacimiento']  = $this->input->post('txtFechaNaci');

        $this->Perfil_model->edit_cli($paramCli);
        redirect( base_url() . 'Cliente/Perfil');
    }

    public function editPass(){
        $data['mensaje'] = "";
        $this->load->view('Cliente/Layout_cli/header');
        $this->load->view('Cliente/Layout_cli/menu');
        $this->load->view('Cliente/Perfil/editPass', $data);
        $this->load->view('Cliente/Layout_cli/footer');
    }

    public function editar_pass(){
        $id_sesiones       = $this->session->userdata('s_id_sesiones');
        $old_contrasena    = md5($this->input->post('old_contrasena'));//actual
        $contrasena        = md5($this->input->post('contrasena'));//nueva

        $resultado = $this->Perfil_model->get_pass($id_sesiones, $old_contrasena);

        if($resultado == 0){
            $data['mensaje'] = "Tu contraseña actual no coincide"; 
            $this->load->view('Cliente/Layout_cli/header');
            $this->load->view('Cliente/Layout_cli/menu');
            $this->load->view('Cliente/Perfil/editPass', $data);
            $this->load->view('Cliente/Layout_cli/footer');
        }else{
            $this->Perfil_model->edit_pass($id_sesiones, $contrasena);
            $this->load->view('Cliente/Layout_cli/header');
            $this->load->view('Cliente/Layout_cli/menu');
            $this->load->view('Cliente/Perfil/success');
            $this->load->view('Cliente/Layout_cli/footer');  
        }
    }      

}