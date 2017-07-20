<?php
class Adopcion_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_adopcion(){
        $this->db->select('c.nombre clinica, a.status, a.nombre, r.nombre raza, e.nombre especie, a.sexo, a.descripcion, 
            a.edad, a.color, a.talla, a.esterilizado, a.vacunas, a.id_adopcion');
        $this->db->from('adopcion a, clinica c, clinica_adopcion ca, raza r, especie e');
        $this->db->where('a.id_adopcion = ca.id_adopcion');
        $this->db->where('ca.id_clinica = c.id_clinica');
        $this->db->where('a.id_raza = r.id_raza');
        $this->db->where('a.id_especie = e.id_especie');
        $this->db->where('a.status', "En Adopción");
        $this->db->order_by('a.status',"desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_detalle_adopcion($id_adopcion){
        $this->db->select('a.id_adopcion, a.descripcion,
            a.nombre AS "Adopcion_Nombre", r.nombre raza, a.edad, a.color, e.nombre especie, a.sexo, a.alergias, 
            a.fotografia AS "Foto_adopcion", a.status, a.vacunas, a.esterilizado, a.talla,
            c.id_clinica, c.nombre AS "Clinica", c.telefono1, c.telefono2, c.email, c.dias, c.horario, c.fotografia AS "Foto_Clinica"');
        $this->db->from('adopcion a, clinica_adopcion ca, clinica c, raza r, especie e');
        $this->db->where('ca.id_clinica = c.id_clinica');
        $this->db->where('a.id_raza = r.id_raza');
        $this->db->where('a.id_especie = e.id_especie');
        $this->db->where('ca.id_adopcion = a.id_adopcion');
        $this->db->where('a.id_adopcion', $id_adopcion);
        $query = $this->db->get();
        return $query->row_array();
    }

}
