<?php
class Tratamiento_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_tratamiento($id_tratamiento = 0){
        if ($id_tratamiento === 0){
            $query = $this->db->get('tratamiento');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('tratamiento', array('id_tratamiento' => $id_tratamiento));
        return $query->row_array();
    }
    
    public function get_tratamiento_by_id($id_tratamiento = 0){
        if ($id_tratamiento === 0){
            $query = $this->db->get('tratamiento');
            return $query->result_array();
        }

        $query = $this->db->get_where('tratamiento', array('id_tratamiento' => $id_tratamiento));
        return $query->row_array();
    }
    
    public function set_tratamiento($id_tratamiento = 0){
        $this->load->helper('url');

        //$slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'costo' => $this->input->post('costo')
            );

        if ($id_tratamiento == 0){
            return $this->db->insert('tratamiento', $data);
        }else{
            $this->db->where('id_tratamiento', $id_tratamiento);
            return $this->db->update('tratamiento', $data);
        }
    }
    
    public function delete_tratamiento($id_tratamiento){
        $this->db->where('id_tratamiento', $id_tratamiento);
        return $this->db->delete('tratamiento');
    }
}
