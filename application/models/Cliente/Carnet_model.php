<?php
class Carnet_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    // index de carnet
    public function get_carnet(){
        $id_cliente = $this->session->userdata('s_id_cliente');
        $this->db->select('m.id_mascota, m.nombre mascota, m.sexo, m.color, raza.nombre raza, m.fecha_nacimiento');
        $this->db->from('carnet c, cliente cli, mascota m, asignacion_cliente_m acm, raza');
        $this->db->where('c.id_mascota = m.id_mascota');
        $this->db->where('m.id_mascota = acm.id_mascota');
        $this->db->where('acm.id_cliente = cli.id_cliente');
        $this->db->where('m.id_raza = raza.id_raza');
        $this->db->where('cli.id_cliente', $id_cliente);
        $this->db->group_by('c.id_mascota');
        $query = $this->db->get();        
        return $query->result_array();
    }

    public function get_detalle_vacunacion($id_mascota){
        $this->db->select('m.nombre AS "mascota", m.sexo, m.descripcion, m.fecha_nacimiento, m.peso, m.color, 
            m.fotografia, m.alergias, h.nombre Habitad, e.nombre Especie, r.nombre AS "raza",
            c.nombre AS "cliente", c.ap_paterno AS "cli_p", c.ap_materno AS "cli_m",
            z.nombre as "zoo", z.ap_paterno as "zoo_p", z.ap_materno as "zoo_m", cli.nombre AS "clinica",
            va.nombre AS "vacuna", car.fecha_aplicacion, car.siguiente_aplicacion,
            m.id_mascota, c.id_cliente, z.id_zootecnico, cli.id_clinica');
        $this->db->from('mascota m, habitad h, especie e, raza r, cliente c, asignacion_cliente_m cm,
            zootecnico z, asignacion_cliente_z cz, clinica cli, asignacion_clinica_z cliz,carnet car, vacunas va');
        $this->db->where('m.id_habitad = h.id_habitad');
        $this->db->where('m.id_especie = e.id_especie');
        $this->db->where('m.id_raza = r.id_raza');
        $this->db->where('m.id_mascota = cm.id_mascota');
        $this->db->where('cm.id_cliente = c.id_cliente');
        $this->db->where('c.id_cliente = cz.id_cliente');
        $this->db->where('cz.id_zootecnico = z.id_zootecnico');
        $this->db->where('z.id_zootecnico = cliz.id_zootecnico');
        $this->db->where('cliz.id_clinica = cli.id_clinica');        
        $this->db->where('car.id_vacuna = va.id_vacuna');        
        $this->db->where('m.id_mascota = car.id_mascota');        
        $this->db->where('car.id_mascota', $id_mascota);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    public function get_detalle_carnet($id_mascota){
        $this->db->select('m.nombre AS "mascota", m.sexo, m.descripcion, m.fecha_nacimiento, m.peso, m.color, 
            m.fotografia, m.alergias, h.nombre Habitad, e.nombre Especie, r.nombre AS "raza",
            c.nombre AS "cliente", c.ap_paterno AS "cli_p", c.ap_materno AS "cli_m",
            z.nombre as "zoo", z.ap_paterno as "zoo_p", z.ap_materno as "zoo_m", cli.nombre AS "clinica",
            va.nombre AS "vacuna", car.fecha_aplicacion, car.siguiente_aplicacion,
            m.id_mascota, c.id_cliente, z.id_zootecnico, cli.id_clinica');
        $this->db->from('mascota m, habitad h, especie e, raza r, cliente c, asignacion_cliente_m cm,
            zootecnico z, asignacion_cliente_z cz, clinica cli, asignacion_clinica_z cliz,carnet car, vacunas va');
        $this->db->where('m.id_habitad = h.id_habitad');
        $this->db->where('m.id_especie = e.id_especie');
        $this->db->where('m.id_raza = r.id_raza');
        $this->db->where('m.id_mascota = cm.id_mascota');
        $this->db->where('cm.id_cliente = c.id_cliente');
        $this->db->where('c.id_cliente = cz.id_cliente');
        $this->db->where('cz.id_zootecnico = z.id_zootecnico');
        $this->db->where('z.id_zootecnico = cliz.id_zootecnico');
        $this->db->where('cliz.id_clinica = cli.id_clinica');        
        $this->db->where('car.id_vacuna = va.id_vacuna');        
        $this->db->where('m.id_mascota = car.id_mascota');        
        $this->db->where('car.id_mascota', $id_mascota);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }   
}