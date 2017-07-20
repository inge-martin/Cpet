<?php
class Clientes extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Cliente_model');
    }

    public function index(){
        $data['cliente'] = $this->Cliente_model->get_cli();
        $data['title'] = 'Listado de Clientes';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Cliente/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view($id_cliente){
        $data['cliente'] = $this->Cliente_model->get_detalle_cli($id_cliente);
        $data['mascota'] = $this->Cliente_model->get_mascota($id_cliente);
        
        if (empty($data['mascota'])){
            // show_404();
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Cliente/add_pet');
            $this->load->view('Administrador/Layout_admin/footer');
        }else{

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Cliente/view', $data);
            $this->load->view('Administrador/Layout_admin/footer');
        }
    }

    public function newCli(){
        $data['error'] = ' ';
        $data['zootecnico'] = $this->Cliente_model->get_zootecnico();
        $data['pregunta'] = $this->Cliente_model->get_pregunta();
        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Cliente/create', $data);
        $this->load->view('Administrador/Layout_admin/footer');         
    }

    public function nuevoCli(){
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
        
        // Guardas Cliente 
        $paramCli['nombre']            = $this->input->post('txtNombre');
        $paramCli['ap_paterno']        = $this->input->post('txtApPaterno');
        $paramCli['ap_materno']        = $this->input->post('txtApMaterno');
        $paramCli['telefono_local']    = $this->input->post('txtTelCasa');
        $paramCli['telefono_celular']  = $this->input->post('txtTelCel');
        $paramCli['sexo']              = $this->input->post('txtSexo');
        $paramCli['email']             = $this->input->post('txtEmail');
        $paramCli['fecha_nacimiento']  = $this->input->post('txtFechaNaci');
        $paramCli['fotografia']        = $this->input->post('txtFotografia');

        // Guardas Sesion
        $paramSesi['usuario']        = $this->input->post('txtUsuario');
        $paramSesi['contrasena']     = md5($this->input->post('txtContrasena'));
        $paramSesi['id_pregunta']    = $this->input->post('id_pregunta');
        $paramSesi['respuesta']      = md5($this->input->post('txtRespuesta'));        
        $paramSesi['status']         = 1;
        $paramSesi['id_admin']       = NULL;
        $paramSesi['id_zootecnico']  = NULL;
        $paramSesi['id_empleado']    = NULL;

        //subes imagen
        $config['upload_path'] = './assets/image/fotos/cliente/';
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
            $this->load->view('Administrador/Cliente/create',$data);
            $this->load->view('Administrador/Layout_admin/footer');
        }else{
            $last_iDom = $this->Cliente_model->insert_domicilio($paramDom);
            $file_info = $this->upload->data();
            $paramCli['fotografia']   = $file_info['file_name'];
            $paramCli['id_domicilio'] = $last_iDom;        
            $last_idCli  = $this->Cliente_model->insert_cli($paramCli);
            $paramSesi['id_cliente']      = $last_idCli;
            $last_idSess  = $this->Cliente_model->insert_sesiones($paramSesi);

            $paramCZ['id_zootecnico']   = $this->input->post('id_zootecnico');
            $paramCZ['id_cliente']      = $last_idCli;

            $this->Cliente_model->insert_asignacion($paramCZ);

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Cliente/success');
            $this->load->view('Administrador/Layout_admin/footer');
        }   
    } 

}
