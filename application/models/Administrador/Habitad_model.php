<?php
class Habitad_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_habitad($id_habitad = 0){
        if ($id_habitad === 0){
            $query = $this->db->get('habitad');
            return $query->result_array();
        }
        $query = $this->db->get_where('habitad', array('id_habitad' => $id_habitad));
        return $query->row_array();
    }
    
    public function get_habitad_by_id($id_habitad = 0){
        if ($id_habitad === 0){
            $query = $this->db->get('habitad');
            return $query->result_array();
        }
        $query = $this->db->get_where('habitad', array('id_habitad' => $id_habitad));
        return $query->row_array();
    }
    
    public function set_habitad($id_habitad = 0){
        $this->load->helper('url');

        //$slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion')
            );
        
        if ($id_habitad == 0){
            return $this->db->insert('habitad', $data);
        }else{
            $this->db->where('id_habitad', $id_habitad);
            return $this->db->update('habitad', $data);
        }
    }
    
    public function delete_habitad($id_habitad){
        $this->db->where('id_habitad', $id_habitad);
        return $this->db->delete('habitad');
    }
}
