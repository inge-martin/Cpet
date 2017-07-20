<?php
class Administrador_model extends CI_Model{

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

    public function get_admin(){
        $query = $this->db->get('administrador');
        return $query->result_array();
    }

    public function get_detalle_admin($id_admin){
        $this->db->select('
            s.usuario, s.status,
            a.nombre, a.ap_paterno, a.ap_materno, a.telefono_local, a.telefono_celular, 
            a.email, a.sexo, a.fecha_nacimiento, a.fotografia,
            d.calle, d.numero, d.numero_int, d.manzana, d.lote, d.cp, d.colonia,
            e.nombre Estado, m.nombre Municipio, l.nombre Localidad');
        $this->db->from('administrador a, domicilio d, sesiones s, estados e, municipios m, localidades l');
        $this->db->where('a.id_domicilio = d.id_domicilio');
        $this->db->where('a.id_admin = s.id_admin');
        $this->db->where('d.id_estado = e.id_estado');
        $this->db->where('d.id_municipio = m.id_municipio');
        $this->db->where('d.id_localidad = l.id_localidad');
        $this->db->where('a.id_admin', $id_admin);
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

    public function insert_admin($paramAdmin){
        $administrador = array(
            'nombre'            => $paramAdmin['nombre'],
            'ap_paterno'        => $paramAdmin['ap_paterno'],
            'ap_materno'        => $paramAdmin['ap_materno'],
            'telefono_local'    => $paramAdmin['telefono_local'],
            'telefono_celular'  => $paramAdmin['telefono_celular'],
            'email'             => $paramAdmin['email'],
            'sexo'              => $paramAdmin['sexo'],
            'fecha_nacimiento'  => $paramAdmin['fecha_nacimiento'],
            'fotografia'        => $paramAdmin['fotografia'],
            'id_domicilio'      => $paramAdmin['id_domicilio']
            );
        $this->db->insert('administrador', $administrador);
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

}
