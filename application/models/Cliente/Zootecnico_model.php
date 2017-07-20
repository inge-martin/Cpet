<?php
class Zootecnico_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_detalle_zoo(){
        $id_cliente = $this->session->userdata('s_id_cliente');
        $this->db->select('c.id_clinica, c.nombre AS "clinica", s.usuario, s.status, 
            z.nombre zoo, z.ap_paterno, z.ap_materno, z.telefono_local, z.telefono_celular, 
            z.email, z.sexo, z.fecha_nacimiento, z.fotografia, z.cedula,
            d.calle, d.numero, d.numero_int, d.manzana, d.lote, d.cp, d.colonia,
            e.nombre Estado, m.nombre Municipio, l.nombre Localidad,
            cli.nombre, cli.id_cliente, z.id_zootecnico');
        $this->db->from('zootecnico z, domicilio d, sesiones s, estados e, municipios m, localidades l, 
            asignacion_clinica_z cz, clinica c, asignacion_cliente_z cliz, cliente cli');
        $this->db->where('z.id_domicilio = d.id_domicilio');
        $this->db->where('z.id_zootecnico = s.id_zootecnico');
        $this->db->where('d.id_estado = e.id_estado');
        $this->db->where('d.id_municipio = m.id_municipio');
        $this->db->where('d.id_localidad = l.id_localidad');
        $this->db->where('z.id_zootecnico = cz.id_zootecnico');
        $this->db->where('cz.id_clinica = c.id_clinica');
        $this->db->where('z.id_zootecnico = cliz.id_zootecnico');
        $this->db->where('cliz.id_cliente = cli.id_cliente');
        $this->db->where('cli.id_cliente', $id_cliente);
        $query = $this->db->get();
        return $query->row_array();
    }

}
