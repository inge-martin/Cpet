<?php
class Perfil extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Empleado/Perfil_model');
    }

    public function index(){
        $id_empleado = $this->session->userdata('s_id_empleado');
        $data['empleado'] = $this->Perfil_model->get_perfil($id_empleado);

        $this->load->view('Empleado/Layout_emp/header');
        $this->load->view('Empleado/Layout_emp/menu');
        $this->load->view('Empleado/Perfil/index', $data);
        $this->load->view('Empleado/Layout_emp/footer');
    }

    public function editDir(){
        $id_domicilio = $this->session->userdata('s_id_domicilio');
        $data['domicilio'] = $this->Perfil_model->get_direccion($id_domicilio);

        $this->load->view('Empleado/Layout_emp/header');
        $this->load->view('Empleado/Layout_emp/menu');
        $this->load->view('Empleado/Perfil/editDom', $data);
        $this->load->view('Empleado/Layout_emp/footer');
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
        redirect( base_url() . 'Empleado/Perfil/');
    }

    public function editPerfil(){
        $data['empleado'] = $this->Perfil_model->get_emp();
        
        $this->load->view('Empleado/Layout_emp/header');
        $this->load->view('Empleado/Layout_emp/menu');
        $this->load->view('Empleado/Perfil/editPerf', $data);
        $this->load->view('Empleado/Layout_emp/footer');
    }

    public function editar_emp(){
        $paramEmp['nombre']            = $this->input->post('txtNombre');
        $paramEmp['ap_paterno']        = $this->input->post('txtApPaterno');
        $paramEmp['ap_materno']        = $this->input->post('txtApMaterno');
        $paramEmp['telefono_local']    = $this->input->post('txtTelCasa');
        $paramEmp['telefono_celular']  = $this->input->post('txtTelCel');
        $paramEmp['email']             = $this->input->post('txtEmail');
        $paramEmp['sexo']              = $this->input->post('txtSexo');
        $paramEmp['fecha_nacimiento']  = $this->input->post('txtFechaNaci');

        $this->Perfil_model->edit_emp($paramEmp);
        redirect( base_url() . 'Empleado/Perfil/');
    }

    public function editPass(){
        $data['mensaje'] = "";
        $this->load->view('Empleado/Layout_emp/header');
        $this->load->view('Empleado/Layout_emp/menu');
        $this->load->view('Empleado/Perfil/editPass', $data);
        $this->load->view('Empleado/Layout_emp/footer');
    }

    public function editar_pass(){
        $id_sesiones       = $this->session->userdata('s_id_sesiones');
        $old_contrasena    = md5($this->input->post('old_contrasena'));//actual
        $contrasena        = md5($this->input->post('contrasena'));//nueva

        $resultado = $this->Perfil_model->get_pass($id_sesiones, $old_contrasena);

        if($resultado == 0){
            $data['mensaje'] = "Tu contraseña actual no coincide"; 
            $this->load->view('Empleado/Layout_emp/header');
            $this->load->view('Empleado/Layout_emp/menu');
            $this->load->view('Empleado/Perfil/editPass', $data);
            $this->load->view('Empleado/Layout_emp/footer');
        }else{
            $this->Perfil_model->edit_pass($id_sesiones, $contrasena);
            $this->load->view('Empleado/Layout_emp/header');
            $this->load->view('Empleado/Layout_emp/menu');
            $this->load->view('Empleado/Perfil/success');
            $this->load->view('Empleado/Layout_emp/footer');  
        }
    }     

}