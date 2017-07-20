<?php
class Empleado_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    //llena el combo
    public function get_rol(){
        $data = array();
        $query = $this->db->get('rol_empleado');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    public function get_empleado(){
        $id_zootecnico = $this->session->userdata('s_id_zootecnico');
        $this->db->select('e.*, z.nombre zootecnico, z.ap_paterno zoo_paterno, c.nombre clinica, r.nombre rol');
        $this->db->from('empleado e, asignacion_empleado_z ez, zootecnico z, asignacion_clinica_z cz, clinica c, rol_empleado r');
        $this->db->where('e.id_empleado = ez.id_empleado');
        $this->db->where('ez.id_zootecnico = z.id_zootecnico');
        $this->db->where('z.id_zootecnico = cz.id_zootecnico');
        $this->db->where('cz.id_clinica = c.id_clinica');
        $this->db->where('r.id_rol_empleado = e.id_rol_empleado');
        $this->db->where('z.id_zootecnico', $id_zootecnico);
        $query = $this->db->get();        
        return $query->result_array();
    }

    public function get_detalle_empleado($id_empleado){
        $this->db->select('
            s.usuario, s.status, z.nombre AS "zoo", z.ap_paterno  AS "zoo_p", z.id_zootecnico,
            e.nombre, e.ap_paterno, e.ap_materno, e.telefono_local, e.telefono_celular, 
            e.email, e.sexo, e.fecha_nacimiento, e.fotografia, r.nombre Rol,
            d.calle, d.numero, d.numero_int, d.manzana, d.lote, d.cp, d.colonia,
            es.nombre Estado, m.nombre Municipio, l.nombre Localidad');
        $this->db->from('empleado e, domicilio d, sesiones s, estados es, municipios m, localidades l, 
            rol_empleado r, asignacion_empleado_z ez, zootecnico z');
        $this->db->where('e.id_domicilio = d.id_domicilio');
        $this->db->where('e.id_empleado = s.id_empleado');
        $this->db->where('d.id_estado = es.id_estado');
        $this->db->where('d.id_municipio = m.id_municipio');
        $this->db->where('d.id_localidad = l.id_localidad');
        $this->db->where('e.id_rol_empleado = r.id_rol_empleado');
        $this->db->where('e.id_empleado = ez.id_empleado');
        $this->db->where('ez.id_zootecnico = z.id_zootecnico');
        $this->db->where('e.id_empleado', $id_empleado);
        $query = $this->db->get();
        return $query->row_array();
    } 

    public function insert_domicilio($paramDom){
        $domicilio = array(
            'calle'         => $paramDom['calle'],
            'numero'        => $paramDom['numero'],
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

    public function insert_empleado($paramEmpleado){
        $empleado = array(
            'nombre'            => $paramEmpleado['nombre'],
            'ap_paterno'        => $paramEmpleado['ap_paterno'],
            'ap_materno'        => $paramEmpleado['ap_materno'],
            'telefono_local'    => $paramEmpleado['telefono_local'],
            'telefono_celular'  => $paramEmpleado['telefono_celular'],
            'email'             => $paramEmpleado['email'],
            'sexo'              => $paramEmpleado['sexo'],
            'fecha_nacimiento'  => $paramEmpleado['fecha_nacimiento'],
            'fotografia'        => $paramEmpleado['fotografia'],
            'id_rol_empleado'   => $paramEmpleado['id_rol_empleado'],
            'id_domicilio'      => $paramEmpleado['id_domicilio']
            );
        $this->db->insert('empleado', $empleado);
        return $this->db->insert_id();
    }

    public function insert_sesiones($paramSesiones){
        $sesiones = array (
            'usuario'       => $paramSesiones['usuario'],
            'contrasena'    => $paramSesiones['contrasena'],
            'status'        => $paramSesiones['status'],
            'id_zootecnico' => $paramSesiones['id_zootecnico'],
            'id_cliente'    => $paramSesiones['id_cliente'],
            'id_admin'      => $paramSesiones['id_admin'],
            'id_empleado'   => $paramSesiones['id_empleado']
            );
        $this->db->insert('sesiones', $sesiones);
        return $this->db->insert_id();
    }

    public function insert_asignacion($paramEZ){
        $ez = array (
            'id_zootecnico'     => $paramEZ['id_zootecnico'],
            'id_empleado'       => $paramEZ['id_empleado']
            );
        $this->db->insert('asignacion_empleado_z', $ez);
    }        
}
