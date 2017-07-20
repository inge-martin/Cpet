<?php
class Mascota_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    //index mascota
    public function get_mascota(){
        $id_cliente = $this->session->userdata('s_id_cliente');
        $this->db->select('m.*');
        $this->db->from('mascota m, cliente c, asignacion_cliente_m cm');
        $this->db->where('m.id_mascota = cm.id_mascota');
        $this->db->where('cm.id_cliente = c.id_cliente');
        $this->db->where('c.id_cliente', $id_cliente);
        $this->db->order_by('m.status');
        $query = $this->db->get();        
        return $query->result_array();
    }

    //detalle mascota
    public function get_detalle_mascota($id_mascota){
        $this->db->select('m.status,
            m.nombre, m.sexo, m.descripcion, m.fecha_nacimiento, m.peso, m.color, 
            m.fotografia, m.alergias, h.nombre Habitad, e.nombre Especie, r.nombre Raza,
            c.nombre AS "dueño", c.ap_paterno, c.ap_materno, c.id_cliente ');
        $this->db->from('mascota m, habitad h, especie e, raza r, cliente c, asignacion_cliente_m cm');
        $this->db->where('m.id_habitad = h.id_habitad');
        $this->db->where('m.id_especie = e.id_especie');
        $this->db->where('m.id_raza = r.id_raza');
        $this->db->where('m.id_mascota = cm.id_mascota');
        $this->db->where('cm.id_cliente = c.id_cliente');
        $this->db->where('m.id_mascota', $id_mascota);
        $query = $this->db->get();
        return $query->row_array();
    } 
}