<?php
class Cliente_model extends CI_Model{

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

    //llena el combo zootecnico
    public function get_zootecnico(){
        $data = array();
        $query = $this->db->get('zootecnico');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    public function get_cli(){
        $this->db->select('c.id_cliente, c.nombre cliente, c.ap_paterno, c.ap_materno,
         c.telefono_local, c.telefono_celular, c.email, c.sexo, c.fecha_nacimiento, 
         z.nombre zootecnico, z.ap_paterno zoo_paterno, z.ap_materno zoo_materno');
        $this->db->from('cliente c, zootecnico z, asignacion_cliente_z cz');
        $this->db->where('c.id_cliente = cz.id_cliente');
        $this->db->where('cz.id_zootecnico = z.id_zootecnico');
        $query = $this->db->get();        
        return $query->result_array();
    }

    public function get_detalle_cli($id_cliente){
        $this->db->select('
            s.usuario, s.status, z.id_zootecnico, z.nombre AS "zoo", z.ap_paterno AS "zoo_p",
            c.nombre, c.ap_paterno, c.ap_materno, c.telefono_local, c.telefono_celular, 
            c.email, c.sexo, c.fecha_nacimiento, c.fotografia,
            d.calle, d.numero, d.numero_int, d.manzana, d.lote, d.cp, d.colonia,
            e.nombre Estado, municipios.nombre Municipio, l.nombre Localidad');
        $this->db->from('cliente c, domicilio d, sesiones s, estados e, municipios, localidades l, 
            asignacion_cliente_z cz, zootecnico z');
        $this->db->where('c.id_domicilio = d.id_domicilio');
        $this->db->where('c.id_cliente = s.id_cliente');
        $this->db->where('d.id_estado = e.id_estado');
        $this->db->where('d.id_municipio = municipios.id_municipio');
        $this->db->where('d.id_localidad = l.id_localidad');
        $this->db->where('c.id_cliente = cz.id_cliente');
        $this->db->where('cz.id_zootecnico = z.id_zootecnico');
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

    public function insert_cli($paramCli){
        $clientes = array(
            'nombre'            => $paramCli['nombre'],
            'ap_paterno'        => $paramCli['ap_paterno'],
            'ap_materno'        => $paramCli['ap_materno'],
            'telefono_local'    => $paramCli['telefono_local'],
            'telefono_celular'  => $paramCli['telefono_celular'],
            'email'             => $paramCli['email'],
            'sexo'              => $paramCli['sexo'],
            'fecha_nacimiento'  => $paramCli['fecha_nacimiento'],
            'fotografia'        => $paramCli['fotografia'],
            'id_domicilio'      => $paramCli['id_domicilio']
            );
        $this->db->insert('cliente', $clientes);
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
            'id_zootecnico'     => $paramCZ['id_zootecnico'],
            'id_cliente'        => $paramCZ['id_cliente']
            );
        $this->db->insert('asignacion_cliente_z', $cz);
    }    
}
