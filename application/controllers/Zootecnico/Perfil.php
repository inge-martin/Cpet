<?php
class Perfil extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Zootecnico/Perfil_model');
    }

    public function index(){
        $id_zootecnico = $this->session->userdata('s_id_zootecnico');
        $data['zootecnico'] = $this->Perfil_model->get_perfil($id_zootecnico);

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Perfil/index', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }

    public function editDir(){
        $id_domicilio = $this->session->userdata('s_id_domicilio');
        $data['domicilio'] = $this->Perfil_model->get_direccion($id_domicilio);

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Perfil/editDom', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
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
        redirect( base_url() . 'Zootecnico/Perfil/');
    }

    public function editPerfil(){
        $id_zootecnico = $this->session->userdata('s_id_zootecnico');
        $data['zootecnico'] = $this->Perfil_model->get_zoo($id_zootecnico);
        
        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Perfil/editPerf', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }

    public function editar_zoo(){
        $paramZoo['id_zootecnico']     = $this->session->userdata('s_id_zootecnico');
        $paramZoo['nombre']            = $this->input->post('txtNombre');
        $paramZoo['ap_paterno']        = $this->input->post('txtApPaterno');
        $paramZoo['ap_materno']        = $this->input->post('txtApMaterno');
        $paramZoo['telefono_local']    = $this->input->post('txtTelCasa');
        $paramZoo['telefono_celular']  = $this->input->post('txtTelCel');
        $paramZoo['cedula']            = $this->input->post('txtCedula');
        $paramZoo['email']             = $this->input->post('txtEmail');
        $paramZoo['fecha_nacimiento']  = $this->input->post('txtFechaNaci');

        $this->Perfil_model->edit_zoo($paramZoo);
        redirect( base_url() . 'Zootecnico/Perfil/');
    }

    public function editPass(){
        $data['mensaje'] = "";
        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Perfil/editPass', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }

    public function editar_pass(){
        $id_sesiones       = $this->session->userdata('s_id_sesiones');
        $old_contrasena    = md5($this->input->post('old_contrasena'));//actual
        $contrasena        = md5($this->input->post('contrasena'));//nueva

        $resultado = $this->Perfil_model->get_pass($id_sesiones, $old_contrasena);

        if($resultado == 0){
            $data['mensaje'] = "Tu contraseña actual no coincide"; 
            $this->load->view('Zootecnico/Layout_zoo/header');
            $this->load->view('Zootecnico/Layout_zoo/menu');
            $this->load->view('Zootecnico/Perfil/editPass', $data);
            $this->load->view('Zootecnico/Layout_zoo/footer');
        }else{
            $this->Perfil_model->edit_pass($id_sesiones, $contrasena);
            $this->load->view('Zootecnico/Layout_zoo/header');
            $this->load->view('Zootecnico/Layout_zoo/menu');
            $this->load->view('Zootecnico/Perfil/success');
            $this->load->view('Zootecnico/Layout_zoo/footer');  
        }
    }    

}