<?php
class Empleados extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Zootecnico/Empleado_model');
    }

    public function index(){
        $data['empleado'] = $this->Empleado_model->get_empleado();
        $data['title'] = 'Listado de Empleados';

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Empleado/index', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }

    public function view($id_empleado = NULL){
        $data['empleado'] = $this->Empleado_model->get_detalle_empleado($id_empleado);
        
        if (empty($data['empleado'])){
            show_404();
        }

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Empleado/view', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }

    public function newEmpleado(){
        //llena el combo
        $data['error'] = ' ';
        // $data['title'] = 'Crear nueva raza';
        $data['rol'] = $this->Empleado_model->get_rol();
        $data['pregunta'] = $this->Empleado_model->get_pregunta();
        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Empleado/create', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');         
    }

    public function nuevoEmpleado(){
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
        
        // Guardas Empleado 
        $paramEmpleado['nombre']            = $this->input->post('txtNombre');
        $paramEmpleado['ap_paterno']        = $this->input->post('txtApPaterno');
        $paramEmpleado['ap_materno']        = $this->input->post('txtApMaterno');
        $paramEmpleado['telefono_local']    = $this->input->post('txtTelCasa');
        $paramEmpleado['telefono_celular']  = $this->input->post('txtTelCel');
        $paramEmpleado['sexo']              = $this->input->post('txtSexo');
        $paramEmpleado['email']             = $this->input->post('txtEmail');
        $paramEmpleado['fecha_nacimiento']  = $this->input->post('txtFechaNaci');
        $paramEmpleado['fotografia']        = $this->input->post('txtFotografia');
        $paramEmpleado['id_rol_empleado']   = $this->input->post('id_rol_empleado');

        // Guardas Sesion
        $paramSesi['usuario']        = $this->input->post('txtUsuario');
        $paramSesi['contrasena']     = md5($this->input->post('txtContrasena'));
        $paramSesi['id_pregunta']    = $this->input->post('id_pregunta');
        $paramSesi['respuesta']      = md5($this->input->post('txtRespuesta'));          
        $paramSesi['status']         = 1;
        $paramSesi['id_admin']       = NULL;
        $paramSesi['id_cliente']     = NULL;
        $paramSesi['id_zootecnico']  = NULL;
        
        //subes imagen
        $config['upload_path'] = './assets/image/fotos/empleado/';
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
            $this->load->view('Zootecnico/Layout_zoo/header');
            $this->load->view('Zootecnico/Layout_zoo/menu');
            $this->load->view('Zootecnico/Empleado/create',$data);
            $this->load->view('Zootecnico/Layout_zoo/footer');
        }else{
            $last_iDom = $this->Empleado_model->insert_domicilio($paramDom);
            $file_info = $this->upload->data();
            $paramEmpleado['fotografia']   = $file_info['file_name'];
            $paramEmpleado['id_domicilio'] = $last_iDom;        
            $last_idEmpleado  = $this->Empleado_model->insert_empleado($paramEmpleado);
            $paramSesi['id_empleado']      = $last_idEmpleado;
            $last_idSess  = $this->Empleado_model->insert_sesiones($paramSesi);

            $paramEZ['id_zootecnico']   = $this->session->userdata('s_id_zootecnico');
            $paramEZ['id_empleado']     = $last_idEmpleado;

            $this->Empleado_model->insert_asignacion($paramEZ);

            $this->load->view('Zootecnico/Layout_zoo/header');
            $this->load->view('Zootecnico/Layout_zoo/menu');
            $this->load->view('Zootecnico/Empleado/success');
            $this->load->view('Zootecnico/Layout_zoo/footer');
        }   
    }    

}
