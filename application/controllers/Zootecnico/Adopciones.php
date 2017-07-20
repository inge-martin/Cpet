<?php
class Adopciones extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Zootecnico/Adopcion_model');
    }

    public function index(){
        $data['adopcion'] = $this->Adopcion_model->get_adopcion();
        $data['title'] = 'Listado de Mascotas';

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Adopcion/index', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }

    public function view($id_adopcion = 0){
        $data['adopcion'] = $this->Adopcion_model->get_detalle_adopcion($id_adopcion);
        
        if (empty($data['adopcion'])){
            show_404();
        }

        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Adopcion/view', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }
    
    public function newAdopcion(){
        $data['error'] = ' ';
        //llena el combo
        $data['clinica'] = $this->Adopcion_model->get_clinica();
        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Adopcion/create', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');         
    }

    public function nuevaAdopcion(){      
        // Guardas Adopcion 
        $paramAdopcion['nombre']        = $this->input->post('nombre');
        $paramAdopcion['color']         = $this->input->post('color');
        $paramAdopcion['edad']          = $this->input->post('edad');
        $paramAdopcion['id_especie']    = $this->input->post('especie');
        $paramAdopcion['id_raza']       = $this->input->post('raza');
        $paramAdopcion['status']        = $this->input->post('status');
        $paramAdopcion['alergias']      = $this->input->post('alergias');
        $paramAdopcion['sexo']          = $this->input->post('sexo');
        $paramAdopcion['vacunas']       = $this->input->post('vacunas');
        $paramAdopcion['esterilizado']  = $this->input->post('esterilizado');
        $paramAdopcion['descripcion']   = $this->input->post('descripcion');
        $paramAdopcion['talla']         = $this->input->post('talla');
        $paramAdopcion['fotografia']    = $this->input->post('fotografia');

        $config['upload_path']      = './assets/image/fotos/adopcion';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = '5000';
        $config['max_width']        = '5000';
        $config['max_height']       = '5000';
        $config['encrypt_name']     = TRUE;
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        
        //si al subir imagen manda error 
        if (!$this->upload->do_upload("fotografia")) {
            $data['error'] = $this->upload->display_errors('<p>', '</p>');
            $this->load->view('Zootecnico/Layout_zoo/header');
            $this->load->view('Zootecnico/Layout_zoo/menu');
            $this->load->view('Zootecnico/Adopcion/create',$data);
            $this->load->view('Zootecnico/Layout_zoo/footer');

        }else{
            $file_info = $this->upload->data();
            $paramAdopcion['fotografia']   = $file_info['file_name'];

            $id_adopcion  = $this->Adopcion_model->insert_adopcion($paramAdopcion);
            $paramCA['id_clinica']    = $this->input->post('id_clinica');
            $paramCA['id_adopcion']    = $id_adopcion;

            $this->Adopcion_model->insert_ca($paramCA);

            $this->load->view('Zootecnico/Layout_zoo/header');
            $this->load->view('Zootecnico/Layout_zoo/menu');
            $this->load->view('Zootecnico/Adopcion/success');
            $this->load->view('Zootecnico/Layout_zoo/footer');
        }
    }
    
    public function editar_adopcion(){
        $paramAdopcion['id_adopcion']   = $this->input->post('id_adopcion');
        $paramAdopcion['nombre']        = $this->input->post('nombre');
        $paramAdopcion['color']         = $this->input->post('color');
        $paramAdopcion['edad']          = $this->input->post('edad');
        $paramAdopcion['especie']       = $this->input->post('especie');
        $paramAdopcion['raza']          = $this->input->post('raza');
        $paramAdopcion['status']        = $this->input->post('status');
        $paramAdopcion['alergias']      = $this->input->post('alergias');
        $paramAdopcion['sexo']          = $this->input->post('sexo');
        $paramAdopcion['vacunas']       = $this->input->post('vacunas');
        $paramAdopcion['esterilizado']  = $this->input->post('esterilizado');
        $paramAdopcion['descripcion']   = $this->input->post('descripcion');
        $paramAdopcion['talla']         = $this->input->post('talla');
        $paramAdopcion['fotografia']    = $this->input->post('fotografia');

        $this->Adopcion_model->edit_adopcion($paramAdopcion);
        redirect( base_url() . 'Zootecnico/Adopciones/view/'.$paramAdopcion['id_adopcion']);
    } 
    
    public function edit(){
        $id_adopcion = $this->uri->segment(4);
        
        if (empty($id_adopcion)){
            show_404();
        }
        
        $data['error'] = ' ';
        $data['adopcion'] = $this->Adopcion_model->get_detalle_adopcion($id_adopcion);
        //llena el combo
        $data['clinica'] = $this->Adopcion_model->get_clinica();
        $this->load->view('Zootecnico/Layout_zoo/header');
        $this->load->view('Zootecnico/Layout_zoo/menu');
        $this->load->view('Zootecnico/Adopcion/edit', $data);
        $this->load->view('Zootecnico/Layout_zoo/footer');
    }

    public function delete(){
        $id_adopcion = $this->uri->segment(4);
        
        if (empty($id_adopcion)){
            show_404();
        }

        $this->Adopcion_model->delete_ca($id_adopcion);        
        $this->Adopcion_model->delete_adopcion($id_adopcion);        
        redirect( base_url() . 'Zootecnico/Adopciones');
    }
}
