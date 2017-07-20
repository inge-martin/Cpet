<?php
class Vacunacion_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }
    
    //llena el combo mascota
    public function get_mascota(){
        $id_zootecnico = $this->session->userdata('s_id_zootecnico');
        $data = array();
        $this->db->select('m.id_mascota, m.nombre, m.sexo, m.color, r.nombre AS "raza"');
        $this->db->from('mascota m, raza r, zootecnico z, cliente c, 
            asignacion_cliente_z cz, asignacion_cliente_m cm');
        $this->db->where('m.id_raza = r.id_raza');
        $this->db->where('m.id_mascota = cm.id_mascota');
        $this->db->where('m.status !=', 'Finado');
        $this->db->where('cm.id_cliente = c.id_cliente');
        $this->db->where('c.id_cliente = cz.id_cliente');
        $this->db->where('cz.id_zootecnico = z.id_zootecnico');
        $this->db->where('z.id_zootecnico', $id_zootecnico);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    //llena el combo vacunas
    public function get_vacunas(){
        $data = array();    
        $query = $this->db->get('vacunas');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }    

    public function get_vacunacion(){
        $id_zootecnico = $this->session->userdata('s_id_zootecnico');
        $this->db->select('clini.nombre AS "clinica", z.nombre AS "zoo", z.ap_paterno AS "zoo_p", z.ap_materno AS "zoo_m",
            c.nombre AS "cliente", c.ap_paterno AS "cli_p", c.ap_materno AS "cli_m", m.nombre AS "mascota", m.id_mascota,
            m.sexo, r.nombre as "raza", m.color');
        $this->db->from('cliente c, asignacion_cliente_z cz, zootecnico z, asignacion_clinica_z cliz, clinica clini, 
            mascota m, asignacion_cliente_m cm, carnet, vacunas, raza r');
        $this->db->where('c.id_cliente = cz.id_cliente');
        $this->db->where('cz.id_zootecnico = z.id_zootecnico');
        $this->db->where('z.id_zootecnico = cliz.id_zootecnico');
        $this->db->where('cliz.id_clinica = clini.id_clinica');
        $this->db->where('m.id_mascota = cm.id_mascota');
        $this->db->where('cm.id_cliente = c.id_cliente');
        $this->db->where('carnet.id_vacuna = vacunas.id_vacuna');
        $this->db->where('m.id_mascota = carnet.id_mascota');
        $this->db->where('m.id_raza = r.id_raza');
        $this->db->group_by('carnet.id_mascota');
        $this->db->where('z.id_zootecnico', $id_zootecnico);
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

    public function insert_vacunacion($param){
        $carnet = array (
            'id_mascota'            => $param['id_mascota'],
            'id_vacuna'             => $param['id_vacuna'],
            'fecha_aplicacion'      => $param['fecha_aplicacion'],
            'siguiente_aplicacion'  => $param['siguiente_aplicacion']
            );
        $this->db->insert('carnet', $carnet);
    }

    //para imprimir
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
