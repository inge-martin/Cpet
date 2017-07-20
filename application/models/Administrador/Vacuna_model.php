<?php
class Vacuna_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_vacunas($id_vacuna = 0){
        if ($id_vacuna === 0){
            $query = $this->db->get('vacunas');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('vacunas', array('id_vacuna' => $id_vacuna));
        return $query->row_array();
    }
    
    public function get_vacunas_by_id($id_vacuna = 0){
        if ($id_vacuna === 0){
            $query = $this->db->get('vacunas');
            return $query->result_array();
        }

        $query = $this->db->get_where('vacunas', array('id_vacuna' => $id_vacuna));
        return $query->row_array();
    }
    
    public function set_vacunas($id_vacuna = 0){
        $this->load->helper('url');

        //$slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'costo' => $this->input->post('costo')
            );

        if ($id_vacuna == 0){
            return $this->db->insert('vacunas', $data);
        }else{
            $this->db->where('id_vacuna', $id_vacuna);
            return $this->db->update('vacunas', $data);
        }
    }
    
    public function delete_vacunas($id_vacuna){
        $this->db->where('id_vacuna', $id_vacuna);
        return $this->db->delete('vacunas');
    }
}
