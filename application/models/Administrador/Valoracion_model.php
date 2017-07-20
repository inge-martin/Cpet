<?php
class Valoracion_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_valoracion(){
        $this->db->select('z.id_zootecnico, z.nombre as zootecnico, z.ap_paterno, z.ap_materno, 
            z.cedula, z.fotografia as foto_zoo, c.id_cliente, c.nombre as cli, 
            c.ap_paterno as cli_p, c.ap_materno as cli_m, cli.nombre as clinica, 
            cli.telefono1, cli.fotografia as foto_cli, cz.valoracion');
        $this->db->from('asignacion_cliente_z cz, cliente c, zootecnico z, 
            clinica cli, asignacion_clinica_z cliz');
        $this->db->where('c.id_cliente = cz.id_cliente');
        $this->db->where('cz.id_zootecnico = z.id_zootecnico');
        $this->db->where('z.id_zootecnico = cliz.id_zootecnico');
        $this->db->where('cliz.id_clinica = cli.id_clinica');
        $query = $this->db->get();
        return $query->result_array();
    }
}
