<?php
class Adopcion_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_adopcion(){
        $this->db->select('c.nombre clinica, a.status, a.nombre, e.nombre especie, r.nombre raza, a.sexo, a.descripcion, 
            a.edad, a.color, a.talla, a.esterilizado, a.vacunas, a.id_adopcion');
        $this->db->from('adopcion a, clinica c, clinica_adopcion ca, raza r, especie e');
        $this->db->where('a.id_adopcion = ca.id_adopcion');
        $this->db->where('a.id_raza = r.id_raza');
        $this->db->where('a.id_especie = e.id_especie');        
        $this->db->where('ca.id_clinica = c.id_clinica');
        $this->db->order_by('a.status',"desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    //llena el combo clinica
    public function get_clinica(){
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

    public function insert_adopcion($paramAdopcion){
        $adopcion = array(
            'nombre'        =>$paramAdopcion['nombre'],
            'id_raza'       =>$paramAdopcion['id_raza'],
            'edad'          =>$paramAdopcion['edad'],
            'color'         =>$paramAdopcion['color'],
            'id_especie'    =>$paramAdopcion['id_especie'],
            'sexo'          =>$paramAdopcion['sexo'],
            'alergias'      =>$paramAdopcion['alergias'],
            'fotografia'    =>$paramAdopcion['fotografia'],
            'status'        =>$paramAdopcion['status'],
            'vacunas'       =>$paramAdopcion['vacunas'],
            'descripcion'   =>$paramAdopcion['descripcion'],
            'esterilizado'  =>$paramAdopcion['esterilizado'],
            'talla'         =>$paramAdopcion['talla']
            );
        $this->db->insert('adopcion', $adopcion);
        return $this->db->insert_id();        
    }

    public function insert_ca($paramCA){
        $ca = array (
            'id_clinica'    => $paramCA['id_clinica'],
            'id_adopcion'   => $paramCA['id_adopcion']
            );
        $this->db->insert('clinica_adopcion', $ca);
    }

    public function get_detalle_adopcion($id_adopcion){
        $this->db->select('a.id_adopcion, a.descripcion,
            a.nombre AS "Adopcion_Nombre", r.nombre raza, a.edad, a.color, e.nombre especie, a.sexo, a.alergias, 
            a.fotografia AS "Foto_adopcion", a.status, a.vacunas, a.esterilizado, a.talla,
            c.id_clinica, c.nombre AS "Clinica", c.telefono1, c.telefono2, c.email, c.dias, c.horario, 
            c.fotografia AS "Foto_Clinica"');
        $this->db->from('adopcion a, clinica_adopcion ca, clinica c, raza r, especie e');
        $this->db->where('ca.id_clinica = c.id_clinica');
        $this->db->where('a.id_raza = r.id_raza');
        $this->db->where('a.id_especie = e.id_especie');
        $this->db->where('ca.id_adopcion = a.id_adopcion');
        $this->db->where('a.id_adopcion', $id_adopcion);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function edit_adopcion($paramAdopcion){
        $id_adopcion = $paramAdopcion['id_adopcion'];
        $adopcion = array(
            'nombre'        =>$paramAdopcion['nombre'],
            'status'        =>$paramAdopcion['status'],
            'descripcion'   =>$paramAdopcion['descripcion'],
            'edad'          =>$paramAdopcion['edad']
            // 'raza'          =>$paramAdopcion['raza'],
            // 'color'         =>$paramAdopcion['color'],
            // 'especie'       =>$paramAdopcion['especie'],
            // 'sexo'          =>$paramAdopcion['sexo'],
            // 'alergias'      =>$paramAdopcion['alergias'],
            // 'fotografia'    =>$paramAdopcion['fotografia'],
            // 'vacunas'       =>$paramAdopcion['vacunas'],
            // 'esterilizado'  =>$paramAdopcion['esterilizado'],
            // 'talla'         =>$paramAdopcion['talla']
            );
        $this->db->where('id_adopcion', $id_adopcion);
        return $this->db->update('adopcion', $adopcion);                
    }    
    
    public function delete_adopcion($id_adopcion){
        $this->db->where('id_adopcion', $id_adopcion);
        return $this->db->delete('adopcion');
    }

    public function delete_ca($id_adopcion){
        $this->db->where('id_adopcion', $id_adopcion);
        return $this->db->delete('clinica_adopcion');
    }

}
