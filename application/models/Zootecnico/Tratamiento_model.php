<?php
class Tratamiento_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_tratamiento(){
        $query = $this->db->get('tratamiento');
        return $query->result_array();
    }
}
?>