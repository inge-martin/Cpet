<?php
class Administradores extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Administrador_model');
    }

    public function index(){
        $data['administrador'] = $this->Administrador_model->get_admin();
        $data['title'] = 'Listado de Administradores';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Administrador/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view($id_admin){
        $data['administrador'] = $this->Administrador_model->get_detalle_admin($id_admin);
        
        if (empty($data['administrador'])){
            show_404();
        }

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Administrador/view', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function newAdmin(){
        $data['error'] = ' ';
        $data['pregunta'] = $this->Administrador_model->get_pregunta();
        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Administrador/create', $data);
        $this->load->view('Administrador/Layout_admin/footer');         
    }

    public function nuevoAdmin(){
        // Recibes datos de domicilio
        $paramDom['id_estado']          = $this->input->post('txtEstado');
        $paramDom['id_municipio']       = $this->input->post('txtMunicipio');
        $paramDom['id_localidad']       = $this->input->post('txtLocalidad');
        $paramDom['cp']                 = $this->input->post('txtCp');
        $paramDom['calle']              = $this->input->post('txtCalle');
        $paramDom['numero']             = $this->input->post('txtNumero');
        $paramDom['numero_int']         = $this->input->post('txtNumero_int');
        $paramDom['colonia']            = $this->input->post('txtColonia');
        $paramDom['manzana']            = $this->input->post('txtManzana');
        $paramDom['lote']               = $this->input->post('txtLote');
        
        // Recibes datos de Administrador 
        $paramAdmin['nombre']            = $this->input->post('txtNombre');
        $paramAdmin['ap_paterno']        = $this->input->post('txtApPaterno');
        $paramAdmin['ap_materno']        = $this->input->post('txtApMaterno');
        $paramAdmin['telefono_local']    = $this->input->post('txtTelCasa');
        $paramAdmin['telefono_celular']  = $this->input->post('txtTelCel');
        $paramAdmin['sexo']              = $this->input->post('txtSexo');
        $paramAdmin['email']             = $this->input->post('txtEmail');
        $paramAdmin['fecha_nacimiento']  = $this->input->post('txtFechaNaci');
        $paramAdmin['fotografia']        = $this->input->post('txtFotografia');

        // Recibes datos de la sesion
        $paramSesi['usuario']           = $this->input->post('txtUsuario');
        $paramSesi['contrasena']        = md5($this->input->post('txtContrasena'));
        $paramSesi['id_pregunta']       = $this->input->post('id_pregunta');
        $paramSesi['respuesta']         = md5($this->input->post('txtRespuesta'));
        $paramSesi['status']            = 1;
        $paramSesi['id_zootecnico']     = NULL;
        $paramSesi['id_cliente']        = NULL;
        $paramSesi['id_empleado']       = NULL;
        
        //subes imagen
        $config['upload_path'] = './assets/image/fotos/administrador/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);

        //si al subir imagen manda error 
        //regresas el error al formulario
        if (!$this->upload->do_upload("txtFotografia")) {
            $data['error'] = $this->upload->display_errors('<p>', '</p>');
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Administrador/create',$data);
            $this->load->view('Administrador/Layout_admin/footer');
        }else{
            $last_iDom = $this->Administrador_model->insert_domicilio($paramDom);            
            $file_info = $this->upload->data();
            $paramAdmin['fotografia']   = $file_info['file_name'];
            $paramAdmin['id_domicilio'] = $last_iDom;        
            $last_idAdmin  = $this->Administrador_model->insert_admin($paramAdmin);
            $paramSesi['id_admin']      = $last_idAdmin;
            $last_idSess  = $this->Administrador_model->insert_sesiones($paramSesi);

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Administrador/success');
            $this->load->view('Administrador/Layout_admin/footer');
        }   
    }     

}
