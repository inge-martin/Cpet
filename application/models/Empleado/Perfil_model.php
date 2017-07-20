<?php
class Perfil_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_perfil($id_empleado){
        $this->db->select('s.usuario, s.status, 
            e.nombre, e.ap_paterno, e.ap_materno, e.telefono_local, e.telefono_celular, 
            e.email, e.sexo, e.fecha_nacimiento, e.fotografia, 
            d.calle, d.numero, d.numero_int, d.manzana, d.lote, d.cp, d.colonia,
            es.nombre Estado, m.nombre Municipio, l.nombre Localidad, rol_empleado.nombre as rol, 
            z.nombre as zoo, z.ap_paterno as zoo_p, z.ap_materno as zoo_m');
        $this->db->from('empleado e, domicilio d, sesiones s, estados es, municipios m,
         localidades l, rol_empleado, zootecnico z, asignacion_empleado_z ez');
        $this->db->where('e.id_domicilio = d.id_domicilio');
        $this->db->where('e.id_rol_empleado = rol_empleado.id_rol_empleado');
        $this->db->where('e.id_empleado = s.id_empleado');
        $this->db->where('d.id_estado = es.id_estado');
        $this->db->where('d.id_municipio = m.id_municipio');
        $this->db->where('d.id_localidad = l.id_localidad');
        $this->db->where('e.id_empleado = ez.id_empleado');
        $this->db->where('ez.id_zootecnico = z.id_zootecnico');
        $this->db->where('e.id_empleado', $id_empleado);
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

    public function get_emp(){
        $id_empleado = $this->session->userdata('s_id_empleado');
        $query = $this->db->get_where('empleado', array('id_empleado' => $id_empleado));
        return $query->row_array();
    }

    public function edit_emp($paramEmp){
        $id_empleado = $this->session->userdata('s_id_empleado');
        $empleado = array(
            'nombre'            => $paramEmp['nombre'],
            'ap_paterno'        => $paramEmp['ap_paterno'],
            'ap_materno'        => $paramEmp['ap_materno'],
            'telefono_local'    => $paramEmp['telefono_local'],
            'telefono_celular'  => $paramEmp['telefono_celular'],
            'email'             => $paramEmp['email'],
            'sexo'              => $paramEmp['sexo'],
            'fecha_nacimiento'  => $paramEmp['fecha_nacimiento']
            );
        $this->db->where('id_empleado', $id_empleado);
        return $this->db->update('empleado', $empleado); 
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
