<?php
class Extravio_model extends CI_Model{

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
        $this->db->where('cm.id_cliente = c.id_cliente');
        $this->db->where('c.id_cliente = cz.id_cliente');
        $this->db->where('cz.id_zootecnico = z.id_zootecnico');
        $this->db->where('z.id_zootecnico', $id_zootecnico);
        $this->db->where('m.status != "Perdido"');     
        $this->db->where('m.status != "Finado"');     
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }    

    //index 
    public function get_extravio1(){
        $this->db->select('m.status,
            m.nombre AS "Mascota", m.sexo, m.color, m.fotografia, r.nombre AS "Raza", 
            ex.id_extravio, ex.senas_particulares, ex.ubicacion, ex.fecha_extravio,
            c.nombre AS "Cliente", c.ap_paterno, c.ap_materno, c.telefono_local, c.telefono_celular');
        $this->db->from('mascota m, extravio ex, habitad h, especie e, raza r, cliente c, asignacion_cliente_m cm');
        $this->db->where('m.id_mascota = ex.id_mascota');
        $this->db->where('m.id_habitad = h.id_habitad');
        $this->db->where('m.id_especie = e.id_especie');
        $this->db->where('m.id_raza = r.id_raza');
        $this->db->where('c.id_cliente = cm.id_cliente');
        $this->db->where('cm.id_mascota = m.id_mascota');
        $this->db->where('m.status = "Perdido"');
        $this->db->order_by('ex.fecha_extravio');
        $this->db->group_by('ex.id_mascota');
        $query = $this->db->get();
        return $query->result_array();
    }

    //index extravios para cada zootecnico
    public function get_extravio(){
        $id_zootecnico = $this->session->userdata('s_id_zootecnico');
        $this->db->select('ex.id_extravio, m.status, m.nombre Mascota, m.sexo, m.color, ex.fecha_extravio, ex.senas_particulares, ex.ubicacion');
        $this->db->from('extravio ex, mascota m, asignacion_cliente_m cm, asignacion_cliente_z cz, zootecnico z, cliente c');
        $this->db->where('ex.id_mascota = m.id_mascota');
        $this->db->where('m.id_mascota = cm.id_mascota');
        $this->db->where('cm.id_cliente = c.id_cliente');
        $this->db->where('c.id_cliente = cz.id_cliente');
        $this->db->where('cz.id_zootecnico = z.id_zootecnico');
        $this->db->where('z.id_zootecnico', $id_zootecnico);
        $this->db->order_by('ex.fecha_extravio');
        $this->db->group_by('ex.id_mascota');
        $query = $this->db->get();
        return $query->result_array();
    }    

    //view
    public function get_detalle_extravio($id_extravio){
        $this->db->select('m.status,
            m.nombre AS "Mascota", m.sexo, m.descripcion, m.fecha_nacimiento, m.peso, m.color, m.descripcion,
            m.fotografia AS "Foto_mascota", m.alergias, h.nombre AS "Habitad", e.nombre AS "Especie", r.nombre AS "Raza",
            ex.id_extravio, ex.senas_particulares, ex.ubicacion, ex.fecha_extravio, m.id_mascota,
            c.nombre AS "Cliente", c.ap_paterno, c.ap_materno, c.telefono_local, c.telefono_celular,
            c.fotografia, c.email');
        $this->db->from('mascota m, extravio ex, habitad h, especie e, raza r, cliente c, asignacion_cliente_m cm');
        $this->db->where('m.id_mascota = ex.id_mascota');
        $this->db->where('m.id_habitad = h.id_habitad');
        $this->db->where('m.id_especie = e.id_especie');
        $this->db->where('m.id_raza = r.id_raza');
        $this->db->where('c.id_cliente = cm.id_cliente');
        $this->db->where('cm.id_mascota = m.id_mascota');
        $this->db->where('ex.id_extravio', $id_extravio);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert_extravio($paramEX){
        $extravio = array (
            'id_mascota'            => $paramEX['id_mascota'],
            'senas_particulares'    => $paramEX['senas_particulares'],
            'ubicacion'             => $paramEX['ubicacion'],
            'fecha_extravio'        => $paramEX['fecha_extravio']
            );
        $this->db->insert('extravio', $extravio);
    }

    //Actualiza el status de la mascota
    public function actualiza_status($id_mascota, $status){
        $this->db->set('status', $status);
        $this->db->where('id_mascota', $id_mascota);
        $this->db->update('mascota');             
    } 

    public function edit_extravio($paramEX){
        $id_extravio = $paramEX['id_extravio'];
        $extravio = array (
            'id_mascota'            => $paramEX['id_mascota'],
            'senas_particulares'    => $paramEX['senas_particulares'],
            'ubicacion'             => $paramEX['ubicacion'],
            'fecha_extravio'        => $paramEX['fecha_extravio']
            );
        $this->db->where('id_extravio', $id_extravio);
        return $this->db->update('extravio', $extravio);                
    }

    public function delete_extravio($id_extravio){
        $this->db->where('id_extravio', $id_extravio);
        return $this->db->delete('extravio');
    }
}
