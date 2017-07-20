<?php
class Perfil_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_perfil($id_admin){
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

    public function get_direccion($id_domicilio){
        $query = $this->db->get_where('domicilio', array('id_domicilio' => $id_domicilio));
        return $query->row_array();
    }

    public function edit_direccion($paramDir){
        $id_domicilio = $paramDir['id_domicilio'];
        $domicilio = array(
            'id_estado'     =>$paramDir['estado'],
            'id_municipio'  =>$paramDir['municipio'],
            'id_localidad'  =>$paramDir['localidad'],
            'cp'            =>$paramDir['cp'],
            'calle'         =>$paramDir['calle'],
            'numero'        =>$paramDir['numero'],
            'numero_int'    =>$paramDir['numero_int'],
            'colonia'       =>$paramDir['colonia'],
            'manzana'       =>$paramDir['manzana'],
            'lote'          =>$paramDir['lote']
            );
        $this->db->where('id_domicilio', $id_domicilio);
        return $this->db->update('domicilio', $domicilio);                
    }    

    public function get_admin($id_admin){
        $query = $this->db->get_where('administrador', array('id_admin' => $id_admin));
        return $query->row_array();
    }

    public function edit_admin($paramAdmin){
        $id_admin = $paramAdmin['id_admin'];
        $administrador = array(
            'nombre'            => $paramAdmin['nombre'],
            'ap_paterno'        => $paramAdmin['ap_paterno'],
            'ap_materno'        => $paramAdmin['ap_materno'],
            'telefono_local'    => $paramAdmin['telefono_local'],
            'telefono_celular'  => $paramAdmin['telefono_celular'],
            'email'             => $paramAdmin['email'],
            'sexo'              => $paramAdmin['sexo'],
            'fecha_nacimiento'  => $paramAdmin['fecha_nacimiento']
            );
        $this->db->where('id_admin', $id_admin);
        return $this->db->update('administrador', $administrador); 
    }

    public function get_pass($id_sesiones, $contrasena){
        $this->db->select('*');
        $this->db->from('sesiones');
        $this->db->where('id_sesiones', $id_sesiones);
        $this->db->where('contrasena', $contrasena);
        $query = $this->db->get();
        //si retorna cero no hay nada
        if ($query->num_rows() == 0) {
            //no hay usuario con esas claves
            return 0;
        }else{
            $r = $query->row();
            return $r->id_sesiones;             
        }
    }

    public function edit_pass($id_sesiones, $contrasena){
        $this->db->set('contrasena', $contrasena);
        $this->db->where('id_sesiones', $id_sesiones);
        $query = $this->db->update('sesiones');
        return $query;
    }

}
