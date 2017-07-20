<?php
class Servicios_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_servicios(){
        $query = $this->db->get('servicios');
        return $query->result_array();
    }

}
