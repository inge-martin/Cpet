<?php
class Citas_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_citas(){
        $this->db->select('c.status, 
            z.nombre zoo, z.ap_paterno zoo_p, z.ap_materno zoo_m,
            cli.nombre cli, cli.ap_paterno cli_p, cli.ap_materno cli_m,
            m.nombre mascota,
            c.start, c.turno, c.clave');
        $this->db->from('citas c, cliente cli, mascota m, zootecnico z');
        $this->db->where('c.id_zootecnico = z.id_zootecnico');
        $this->db->where('c.id_cliente = cli.id_cliente');
        $this->db->where('c.id_mascota = m.id_mascota');
        $this->db->order_by('c.start', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
}
