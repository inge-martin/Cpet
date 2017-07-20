<?php
class Expediente_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

//llena el combo clinica
    public function cbo_clinica(){
        $data = array();
        $query = $this->db->get('clinica');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

//llena el combo zootecnico
    public function cbo_zootecnico(){
        $data = array();
        $query = $this->db->get('zootecnico');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

//llena el combo cliente
    public function cbo_cliente(){
        $data = array();
        $query = $this->db->get('cliente');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

//llena el combo mascota
    public function cbo_mascota(){
        $data = array();
        $query = $this->db->get('mascota');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    public function get_clinica($id_clinica){
        $this->db->select('c.nombre, c.telefono1,
            c.telefono2, c.email, c.dias, c.horario, c.sitioweb, d.calle, d.numero, d.manzana, 
            d.lote, d.cp, e.nombre estado, m.nombre municipio, l.nombre localidad');
        $this->db->from('clinica c, domicilio d, estados e, municipios m, localidades l');
        $this->db->where('c.id_domicilio = d.id_domicilio');
        $this->db->where('d.id_estado = e.id_estado');
        $this->db->where('d.id_municipio = m.id_municipio');
        $this->db->where('d.id_localidad = l.id_localidad');
        $this->db->where('c.id_clinica', $id_clinica);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_zootecnico($id_zootecnico){
        $this->db->select('z.nombre, z.ap_paterno, z.ap_materno, z.telefono_local, z.telefono_celular, 
            z.email, z.sexo, z.fecha_nacimiento, z.fotografia, z.cedula, d.calle, d.numero, d.manzana, 
            d.lote, d.cp, e.nombre estado, m.nombre municipio, l.nombre localidad');
        $this->db->from('zootecnico z, domicilio d, estados e, municipios m, localidades l');
        $this->db->where(' z.id_domicilio = d.id_domicilio');
        $this->db->where('d.id_estado = e.id_estado');
        $this->db->where('d.id_municipio = m.id_municipio');
        $this->db->where('d.id_localidad = l.id_localidad');
        $this->db->where('z.id_zootecnico', $id_zootecnico);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_cliente($id_cliente){
        $this->db->select('c.nombre, c.ap_paterno, c.ap_materno, c.telefono_local, c.telefono_celular, c.email, 
            c.sexo, c.fecha_nacimiento, c.fotografia, d.calle, d.numero, d.manzana, d.lote, d.cp, 
            e.nombre estado, m.nombre municipio, l.nombre localidad');
        $this->db->from('cliente c, domicilio d, estados e, municipios m, localidades l');
        $this->db->where(' c.id_domicilio = d.id_domicilio');
        $this->db->where('d.id_estado = e.id_estado');
        $this->db->where('d.id_municipio = m.id_municipio');
        $this->db->where('d.id_localidad = l.id_localidad');
        $this->db->where('c.id_cliente', $id_cliente);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_mascota($id_mascota){
        $this->db->select('m.nombre, m.sexo, m.descripcion, m.fecha_nacimiento, m.peso, m.color, m.fotografia,
            m.alergias, h.nombre habitad, e.nombre especie, r.nombre raza');
        $this->db->from('mascota m, habitad h, especie e, raza r');
        $this->db->where('m.id_habitad = h.id_habitad');
        $this->db->where('m.id_especie = e.id_especie');
        $this->db->where('m.id_raza = r.id_raza');
        $this->db->where('m.id_mascota', $id_mascota);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_vacuna($id_mascota){
        $this->db->select('v.nombre, c.fecha_aplicacion, c.siguiente_aplicacion');
        $this->db->from('carnet c, vacunas v');
        $this->db->where('c.id_vacuna = v.id_vacuna');
        $this->db->where('c.id_mascota', $id_mascota);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_consulta($id_mascota){
        $this->db->select('c.detalle_revision, c.fecha_consulta, t.nombre tratamiento, s.nombre servicio');
        $this->db->from('consulta c, consulta_m cm, tratamiento t, servicios s');
        $this->db->where('c.id_consulta = cm.id_consulta');
        $this->db->where('c.id_tratamiento = t.id_tratamiento');
        $this->db->where('c.id_servicios = s.id_servicios');
        $this->db->where('cm.id_mascota', $id_mascota);
        $query = $this->db->get();
        return $query->result_array();
    }
}