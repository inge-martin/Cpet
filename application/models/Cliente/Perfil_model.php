<?php
class Perfil_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_perfil($id_cliente){
        $this->db->select('m.nombre mascota, m.id_mascota,
            s.usuario, s.status, z.id_zootecnico, z.nombre AS "zoo", z.ap_paterno AS "zoo_p",
            c.nombre, c.ap_paterno, c.ap_materno, c.telefono_local, c.telefono_celular, 
            c.email, c.sexo, c.fecha_nacimiento, c.fotografia,
            d.calle, d.numero, d.numero_int, d.manzana, d.lote, d.cp, d.colonia,
            e.nombre Estado, municipios.nombre Municipio, l.nombre Localidad');
        $this->db->from('cliente c, domicilio d, sesiones s, estados e, municipios, localidades l, 
            asignacion_cliente_z cz, zootecnico z, mascota m, asignacion_cliente_m cm');
        $this->db->where('c.id_domicilio = d.id_domicilio');
        $this->db->where('c.id_cliente = s.id_cliente');
        $this->db->where('d.id_estado = e.id_estado');
        $this->db->where('d.id_municipio = municipios.id_municipio');
        $this->db->where('d.id_localidad = l.id_localidad');
        $this->db->where('c.id_cliente = cz.id_cliente');
        $this->db->where('cz.id_zootecnico = z.id_zootecnico');
        $this->db->where('m.id_mascota = cm.id_mascota');
        $this->db->where('cm.id_cliente = c.id_cliente');        
        $this->db->where('c.id_cliente', $id_cliente);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_mascota($id_cliente){
        $this->db->select('cm.id_cliente, cm.id_mascota, m.nombre');
        $this->db->from('asignacion_cliente_m cm, mascota m');
        $this->db->where('cm.id_mascota = m.id_mascota');
        $this->db->where('cm.id_cliente', $id_cliente);
        $query = $this->db->get();
        return $query->result_array();
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

    public function get_cli($id_cliente){
        $query = $this->db->get_where('cliente', array('id_cliente' => $id_cliente));
        return $query->row_array();
    }

    public function edit_cli($paramCli){
        $id_cliente = $paramCli['id_cliente'];
        $cliente = array(
            'nombre'            => $paramCli['nombre'],
            'ap_paterno'        => $paramCli['ap_paterno'],
            'ap_materno'        => $paramCli['ap_materno'],
            'telefono_local'    => $paramCli['telefono_local'],
            'telefono_celular'  => $paramCli['telefono_celular'],
            'email'             => $paramCli['email'],
            'sexo'              => $paramCli['sexo'],
            'fecha_nacimiento'  => $paramCli['fecha_nacimiento']
            );
        $this->db->where('id_cliente', $id_cliente);
        return $this->db->update('cliente', $cliente); 
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
