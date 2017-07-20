<?php
class Valoracion_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function validar(){
        $id_cliente = $this->session->userdata('s_id_cliente');
        $this->db->where('id_cliente', $id_cliente);
        $this->db->where(array('valoracion !=' => NULL));
        $query = $this->db->get('asignacion_cliente_z');
        return $query->result_array();
    }

    public function get_valoracion(){
        $id_cliente = $this->session->userdata('s_id_cliente');
        $this->db->select('z.id_zootecnico, z.nombre as zootecnico, z.ap_paterno, z.ap_materno, 
            z.cedula, z.fotografia as foto_zoo, c.id_cliente, c.nombre, cli.nombre as clinica, 
            cli.telefono1, cli.fotografia as foto_cli, cz.valoracion');
        $this->db->from('asignacion_cliente_z cz, cliente c, zootecnico z, 
            clinica cli, asignacion_clinica_z cliz');
        $this->db->where('c.id_cliente = cz.id_cliente');
        $this->db->where('cz.id_zootecnico = z.id_zootecnico');
        $this->db->where('z.id_zootecnico = cliz.id_zootecnico');
        $this->db->where('cliz.id_clinica = cli.id_clinica');
        $this->db->where('c.id_cliente', $id_cliente);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function guarda_valoracion($id_zootecnico, $id_cliente, $valoracion){
        $this->db->set('valoracion', $valoracion);
        $this->db->where('id_zootecnico', $id_zootecnico);
        $this->db->where('id_cliente', $id_cliente);
        $this->db->update('asignacion_cliente_z');
    }
}