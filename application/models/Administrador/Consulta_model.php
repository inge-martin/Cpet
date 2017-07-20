<?php
class Consulta_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_consulta(){
        $this->db->select('c.detalle_revision, c.fecha_consulta, t.nombre tratamiento, se.nombre servicios, 
            z.nombre zootecnico, m.nombre mascota, cli.nombre cliente, cli.ap_paterno cli_p');
        $this->db->from('consulta c, tratamiento t, servicios se, zootecnico z, consulta_m cm, mascota m, asignacion_cliente_m acm, cliente cli');
        $this->db->where('c.id_tratamiento = t.id_tratamiento');
        $this->db->where('c.id_servicios = se.id_servicios');
        $this->db->where('c.id_zootecnico = z.id_zootecnico');
        $this->db->where('c.id_consulta = cm.id_consulta');
        $this->db->where('cm.id_mascota = acm.id_mascota');
        $this->db->where('acm.id_cliente = cli.id_cliente');
        $this->db->where('cm.id_mascota = m.id_mascota');
        // $this->db->where('z.id_zootecnico', $id_zootecnico);
        $this->db->order_by('c.fecha_consulta', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    
}
