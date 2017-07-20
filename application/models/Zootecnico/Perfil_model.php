<?php
class Perfil_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_perfil($id_zootecnico){
        $this->db->select('
            s.usuario, s.status,
            z.nombre, z.ap_paterno, z.ap_materno, z.telefono_local, z.telefono_celular, 
            z.email, z.sexo, z.fecha_nacimiento, z.fotografia, z.cedula,
            d.calle, d.numero, d.numero_int, d.manzana, d.lote, d.cp, d.colonia,
            e.nombre Estado, m.nombre Municipio, l.nombre Localidad');
        $this->db->from('zootecnico z, domicilio d, sesiones s, estados e, municipios m, localidades l');
        $this->db->where('z.id_domicilio = d.id_domicilio');
        $this->db->where('z.id_zootecnico = s.id_zootecnico');
        $this->db->where('d.id_estado = e.id_estado');
        $this->db->where('d.id_municipio = m.id_municipio');
        $this->db->where('d.id_localidad = l.id_localidad');
        $this->db->where('z.id_zootecnico', $id_zootecnico);
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

    public function get_zoo($id_zootecnico){
        $query = $this->db->get_where('zootecnico', array('id_zootecnico' => $id_zootecnico));
        return $query->row_array();
    }

    public function edit_zoo($paramZoo){
        $id_zootecnico = $paramZoo['id_zootecnico'];
        $zootecnico = array(
            'nombre'            => $paramZoo['nombre'],
            'ap_paterno'        => $paramZoo['ap_paterno'],
            'ap_materno'        => $paramZoo['ap_materno'],
            'telefono_local'    => $paramZoo['telefono_local'],
            'telefono_celular'  => $paramZoo['telefono_celular'],
            'email'             => $paramZoo['email'],
            'cedula'              => $paramZoo['cedula'],
            'fecha_nacimiento'  => $paramZoo['fecha_nacimiento']
            );
        $this->db->where('id_zootecnico', $id_zootecnico);
        return $this->db->update('zootecnico', $zootecnico); 
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
