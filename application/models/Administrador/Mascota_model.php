<?php
class Mascota_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    //llena el combo cliente
    public function get_cliente(){
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

    public function get_mascota(){
        $this->db->select('m.*, c.nombre as "dueño", c.ap_paterno');
        $this->db->from('mascota m, cliente c, asignacion_cliente_m cm');
        $this->db->where('m.id_mascota = cm.id_mascota');
        $this->db->where('cm.id_cliente = c.id_cliente');
        $this->db->where('m.status != ', 'Finado');
        $this->db->order_by('m.status');
        $query = $this->db->get();        
        return $query->result_array();
    }

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

    public function get_mascota1(){
        $this->db->select('m.*, c.nombre as "dueño", c.ap_paterno');
        $this->db->from('mascota m, cliente c, asignacion_cliente_m cm');
        $this->db->where('m.id_mascota = cm.id_mascota');
        $this->db->where('cm.id_cliente = c.id_cliente');
        $this->db->where('m.status = ', 'Finado');
        $this->db->order_by('m.status');
        $query = $this->db->get();        
        return $query->result_array();
    }

    public function insert_mascota($paramMascota){
        $mascotas = array(
            'nombre'            => $paramMascota['nombre'],
            'sexo'              => $paramMascota['sexo'],
            'descripcion'       => $paramMascota['descripcion'],
            'fecha_nacimiento'  => $paramMascota['fecha_nacimiento'],
            'peso'              => $paramMascota['peso'],
            'status'            => $paramMascota['status'],
            'color'             => $paramMascota['color'],
            'fotografia'        => $paramMascota['fotografia'],
            'alergias'          => $paramMascota['alergias'],
            'id_habitad'        => $paramMascota['id_habitad'],
            'id_especie'        => $paramMascota['id_especie'],
            'id_raza'           => $paramMascota['id_raza']
            );
        $this->db->insert('mascota', $mascotas);
        return $this->db->insert_id();
    }
    
    public function delete_mascota($id_mascota){
        $this->db->where('id_mascota', $id_mascota);
        return $this->db->delete('mascota');
    }    

    public function insert_asignacion($paramCM){
        $cm = array (
            'id_cliente' => $paramCM['id_cliente'],
            'id_mascota' => $paramCM['id_mascota']
            );
        $this->db->insert('asignacion_cliente_m', $cm);
    }      
}
