<?php
class Zootecnicos extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Zootecnico_model');
    }

    public function index(){
        $data['zootecnico'] = $this->Zootecnico_model->get_zoo();
        $data['title'] = 'Listado de Zootécnicos';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Zootecnico/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view($id_zootecnico){
        $data['zootecnico'] = $this->Zootecnico_model->get_detalle_zoo($id_zootecnico);
        
        if (empty($data['zootecnico'])){
            show_404();
        }

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Zootecnico/view', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function newZoo(){
        $data['error'] = ' ';
        $data['clinica']    = $this->Zootecnico_model->get_clinica();
        $data['pregunta']   = $this->Zootecnico_model->get_pregunta();
        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Zootecnico/create', $data);
        $this->load->view('Administrador/Layout_admin/footer');         
    }

    public function nuevoZoo(){
        // Guardas Domicilio
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
        
        // Guardas Zootecnico 
        $paramZoo['nombre']            = $this->input->post('txtNombre');
        $paramZoo['ap_paterno']        = $this->input->post('txtApPaterno');
        $paramZoo['ap_materno']        = $this->input->post('txtApMaterno');
        $paramZoo['telefono_local']    = $this->input->post('txtTelCasa');
        $paramZoo['telefono_celular']  = $this->input->post('txtTelCel');
        $paramZoo['sexo']              = $this->input->post('txtSexo');
        $paramZoo['email']             = $this->input->post('txtEmail');
        $paramZoo['fecha_nacimiento']  = $this->input->post('txtFechaNaci');
        $paramZoo['fotografia']        = $this->input->post('txtFotografia');
        $paramZoo['cedula']            = $this->input->post('txtCedula');

        // Guardas Sesion
        $paramSesi['usuario']       = $this->input->post('txtUsuario');
        $paramSesi['contrasena']    = md5($this->input->post('txtContrasena'));
        $paramSesi['id_pregunta']   = $this->input->post('id_pregunta');
        $paramSesi['respuesta']     = md5($this->input->post('txtRespuesta'));
        $paramSesi['status']        = 1;
        $paramSesi['id_admin']      = NULL;
        $paramSesi['id_cliente']    = NULL;
        $paramSesi['id_empleado']   = NULL;
        
        //subes imagen
        $config['upload_path'] = './assets/image/fotos/zootecnico/';
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
            $this->load->view('Administrador/Zootecnico/create',$data);
            $this->load->view('Administrador/Layout_admin/footer');
        }else{
            $last_iDom = $this->Zootecnico_model->insert_domicilio($paramDom);
            $file_info = $this->upload->data();
            $paramZoo['fotografia']   = $file_info['file_name'];
            $paramZoo['id_domicilio'] = $last_iDom;        
            $last_idZoo  = $this->Zootecnico_model->insert_zoo($paramZoo);
            $paramSesi['id_zootecnico']      = $last_idZoo;
            $last_idSess  = $this->Zootecnico_model->insert_sesiones($paramSesi);

            $paramCZ['id_clinica']     = $this->input->post('id_clinica');
            $paramCZ['id_zootecnico']  = $last_idZoo;

            $this->Zootecnico_model->insert_asignacion($paramCZ);

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Zootecnico/success');
            $this->load->view('Administrador/Layout_admin/footer');
        }   
    }    

}
