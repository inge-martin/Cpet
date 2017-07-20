<?php
class Zootecnico_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    //llena el combo pregunta
    public function get_pregunta(){
        $data = array();
        $query = $this->db->get('pregunta');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
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
    
    public function get_zoo(){
        $this->db->select('z.*, c.nombre as "clinica"');
        $this->db->from('zootecnico z, clinica c, asignacion_clinica_z cz');
        $this->db->where('z.id_zootecnico = cz.id_zootecnico');
        $this->db->where('cz.id_clinica = c.id_clinica');
        $query = $this->db->get();        
        return $query->result_array();
    }

    public function get_detalle_zoo($id_zootecnico = 0){
        $this->db->select('c.id_clinica, c.nombre AS "clinica", s.usuario, s.status, 
            z.nombre, z.ap_paterno, z.ap_materno, z.telefono_local, z.telefono_celular, 
            z.email, z.sexo, z.fecha_nacimiento, z.fotografia, z.cedula,
            d.calle, d.numero, d.numero_int, d.manzana, d.lote, d.cp, d.colonia,
            e.nombre Estado, m.nombre Municipio, l.nombre Localidad');
        $this->db->from('zootecnico z, domicilio d, sesiones s, estados e, municipios m, localidades l, 
            asignacion_clinica_z cz, clinica c');
        $this->db->where('z.id_domicilio = d.id_domicilio');
        $this->db->where('z.id_zootecnico = s.id_zootecnico');
        $this->db->where('d.id_estado = e.id_estado');
        $this->db->where('d.id_municipio = m.id_municipio');
        $this->db->where('d.id_localidad = l.id_localidad');
        $this->db->where('z.id_zootecnico = cz.id_zootecnico');
        $this->db->where('cz.id_clinica = c.id_clinica');
        $this->db->where('z.id_zootecnico', $id_zootecnico);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert_domicilio($paramDom){
        $domicilio = array(
            'calle'         => $paramDom['calle'],
            'numero'        => $paramDom['numero'],
            'numero_int'    => $paramDom['numero_int'],
            'colonia'       => $paramDom['colonia'],            
            'manzana'       => $paramDom['manzana'],
            'lote'          => $paramDom['lote'],
            'cp'            => $paramDom['cp'],
            'id_estado'     => $paramDom['id_estado'],
            'id_municipio'  => $paramDom['id_municipio'],
            'id_localidad'  => $paramDom['id_localidad']
            );        
        $this->db->insert('domicilio',$domicilio);
        return $this->db->insert_id();
    }

    public function insert_zoo($paramZoo){
        $zootecnico = array(
            'nombre'            => $paramZoo['nombre'],
            'ap_paterno'        => $paramZoo['ap_paterno'],
            'ap_materno'        => $paramZoo['ap_materno'],
            'telefono_local'    => $paramZoo['telefono_local'],
            'telefono_celular'  => $paramZoo['telefono_celular'],
            'email'             => $paramZoo['email'],
            'sexo'              => $paramZoo['sexo'],
            'fecha_nacimiento'  => $paramZoo['fecha_nacimiento'],
            'fotografia'        => $paramZoo['fotografia'],
            'cedula'            => $paramZoo['cedula'],
            'id_domicilio'      => $paramZoo['id_domicilio']
            );
        $this->db->insert('zootecnico', $zootecnico);
        return $this->db->insert_id();
    }

    public function insert_sesiones($paramSesiones){
        $sesiones = array (
            'usuario'       => $paramSesiones['usuario'],
            'contrasena'    => $paramSesiones['contrasena'],
            'status'        => $paramSesiones['status'],
            'id_zootecnico' => $paramSesiones['id_zootecnico'],
            'id_cliente'    => $paramSesiones['id_cliente'],
            'id_pregunta'   => $paramSesiones['id_pregunta'],
            'respuesta'     => $paramSesiones['respuesta'],
            'id_admin'      => $paramSesiones['id_admin']
            );
        $this->db->insert('sesiones', $sesiones);
        return $this->db->insert_id();
    }

    public function insert_asignacion($paramCZ){
        $cz = array (
            'id_clinica'        => $paramCZ['id_clinica'],
            'id_zootecnico'     => $paramCZ['id_zootecnico']
            );
        $this->db->insert('asignacion_clinica_z', $cz);
    }

}
