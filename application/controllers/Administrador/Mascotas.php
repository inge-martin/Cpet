<?php
class Mascotas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Mascota_model');
    }

    public function index(){
        $data['mascota'] = $this->Mascota_model->get_mascota();
        $data['title'] = 'Listado de Mascotas';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Mascota/index', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function finadas(){
        $data['mascota'] = $this->Mascota_model->get_mascota1();
        $data['title'] = 'Listado de Mascotas';

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Mascota/index2', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function view($id_admin){
        $data['mascota'] = $this->Mascota_model->get_detalle_mascota($id_admin);
        
        if (empty($data['mascota'])){
            show_404();
        }

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Mascota/view', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function viewF($id_admin){
        $data['mascota'] = $this->Mascota_model->get_detalle_mascota($id_admin);
        
        if (empty($data['mascota'])){
            show_404();
        }

        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Mascota/view2', $data);
        $this->load->view('Administrador/Layout_admin/footer');
    }

    public function newPet(){
        $data['error'] = ' ';
        $data['cliente'] = $this->Mascota_model->get_cliente();
        $this->load->view('Administrador/Layout_admin/header');
        $this->load->view('Administrador/Layout_admin/menu');
        $this->load->view('Administrador/Mascota/create', $data);
        $this->load->view('Administrador/Layout_admin/footer');         
    }

    public function nuevaMascota(){      
        // Guardas Mascota 
        $paramMascota['nombre']             = $this->input->post('txtNombre');
        $paramMascota['sexo']               = $this->input->post('txtSexo');
        $paramMascota['descripcion']        = $this->input->post('txtDescripcion');
        $paramMascota['fecha_nacimiento']   = $this->input->post('txtFechaNaci');
        $paramMascota['peso']               = $this->input->post('txtPeso');
        $paramMascota['color']              = $this->input->post('txtColor');
        $paramMascota['fotografia']         = $this->input->post('txtFotografia');
        $paramMascota['alergias']           = $this->input->post('txtAlergias');
        $paramMascota['id_habitad']         = $this->input->post('txtHabitad');
        $paramMascota['id_especie']         = $this->input->post('txtEspecie');
        $paramMascota['id_raza']            = $this->input->post('txtRaza');
        $paramMascota['status']             = "Activo";

        $config['upload_path']      = './assets/image/fotos/mascota';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = '5000';
        $config['max_width']        = '5000';
        $config['max_height']       = '5000';
        $config['encrypt_name']     = TRUE;
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        
        //si al subir imagen manda error 
        if (!$this->upload->do_upload("txtFotografia")) {
            $data['error'] = $this->upload->display_errors('<p>', '</p>');
            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Mascota/create',$data);
            $this->load->view('Administrador/Layout_admin/footer');

        }else{
            $file_info = $this->upload->data();
            $paramMascota['fotografia']   = $file_info['file_name'];
            $last_idMas  = $this->Mascota_model->insert_mascota($paramMascota);

            $paramCM['id_cliente']      = $this->input->post('id_cliente');
            $paramCM['id_mascota']      = $last_idMas;

            $this->Mascota_model->insert_asignacion($paramCM);

            $this->load->view('Administrador/Layout_admin/header');
            $this->load->view('Administrador/Layout_admin/menu');
            $this->load->view('Administrador/Mascota/success');
            $this->load->view('Administrador/Layout_admin/footer');
        }
    }
    
    public function delete(){
        $id_mascota = $this->uri->segment(4);
        
        if (empty($id_mascota)){
            show_404();
        }

        $this->Mascota_model->delete_mascota($id_mascota);        
        redirect( base_url() . 'Administrador/Mascotas');
    }

    public function finado(){
        $id_mascota = $this->uri->segment(4);
        
        if (empty($id_mascota)){
            show_404();
        }

        $this->Mascota_model->mascota_finada($id_mascota);        
        redirect( base_url() . 'Administrador/Mascotas');
    }    

}
