<?php
class Servicios_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_servicios($id_servicios = 0){
        if ($id_servicios === 0){
            $query = $this->db->get('servicios');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('servicios', array('id_servicios' => $id_servicios));
        return $query->row_array();
    }
    
    public function get_servicios_by_id($id_servicios = 0){
        if ($id_servicios === 0){
            $query = $this->db->get('servicios');
            return $query->result_array();
        }

        $query = $this->db->get_where('servicios', array('id_servicios' => $id_servicios));
        return $query->row_array();
    }
    
    public function set_servicios($id_servicios = 0){
        $this->load->helper('url');

        //$slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
             'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'costo' => $this->input->post('costo')
            );
        
        if ($id_servicios == 0){
            return $this->db->insert('servicios', $data);
        }else{
            $this->db->where('id_servicios', $id_servicios);
            return $this->db->update('servicios', $data);
        }
    }
    
    public function delete_servicios($id_servicios){
        $this->db->where('id_servicios', $id_servicios);
        return $this->db->delete('servicios');
    }
}
