<?php
class Clinica_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_clinica(){
        $query = $this->db->get('clinica');
        return $query->result_array();
    }

    public function get_detalle_clinica($id_clinica){
        $this->db->select('
            c.id_clinica, c.nombre, c.telefono1, c.telefono2, c.email, c.sitioweb, 
            c.fotografia, c.dias, c.horario, d.id_domicilio,
            d.calle, d.numero, d.numero_int, d.manzana, d.lote, d.cp, d.colonia,
            e.nombre Estado, m.nombre Municipio, l.nombre Localidad');
        $this->db->from('clinica c, domicilio d, estados e, municipios m, localidades l');
        $this->db->where('c.id_domicilio = d.id_domicilio');
        $this->db->where('d.id_estado = e.id_estado');
        $this->db->where('d.id_municipio = m.id_municipio');
        $this->db->where('d.id_localidad = l.id_localidad');
        $this->db->where('c.id_clinica', $id_clinica);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert_domicilio($paramDom){
        $domicilio = array(
            'id_estado'     => $paramDom['id_estado'],
            'id_municipio'  => $paramDom['id_municipio'],
            'id_localidad'  => $paramDom['id_localidad'],
            'cp'            => $paramDom['cp'],
            'colonia'       => $paramDom['colonia'],
            'calle'         => $paramDom['calle'],
            'numero'        => $paramDom['numero'],
            'numero_int'    => $paramDom['numero_int'],
            'manzana'       => $paramDom['manzana'],
            'lote'          => $paramDom['lote']
            );        
        $this->db->insert('domicilio',$domicilio);
        return $this->db->insert_id();
    }

    public function insert_clinica($paramClinica){
        $clinica = array(
            'nombre'        => $paramClinica['nombre'],
            'telefono1'     => $paramClinica['telefono1'],
            'telefono2'     => $paramClinica['telefono2'],
            'email'         => $paramClinica['email'],
            'dias'          => $paramClinica['dias'],
            'horario'       => $paramClinica['horario'],
            'sitioweb'      => $paramClinica['sitioweb'],
            'fotografia'    => $paramClinica['fotografia'],
            'id_domicilio'  => $paramClinica['id_domicilio']
            );
        $this->db->insert('clinica', $clinica);
        return $this->db->insert_id();
    }

    public function edit_clinica($paramClinica){
        $id_clinica = $paramClinica['id_clinica'];
        $clinica = array(
            'nombre'        => $paramClinica['nombre'],
            'telefono1'     => $paramClinica['telefono1'],
            'telefono2'     => $paramClinica['telefono2'],
            'email'         => $paramClinica['email'],
            'dias'          => $paramClinica['dias'],
            'horario'       => $paramClinica['horario'],
            'sitioweb'      => $paramClinica['sitioweb']
            );
        $this->db->where('id_clinica', $id_clinica);
        return $this->db->update('clinica', $clinica);                
    }

    public function edit_clinica_dom($paramDom){
        $id_domicilio = $paramDom['id_domicilio'];
        $dom_clinica = array(
            'calle'         => $paramDom['calle'],
            'cp'            => $paramDom['cp'],
            'colonia'       => $paramDom['colonia'],
            'manzana'       => $paramDom['manzana'],
            'lote'          => $paramDom['lote'],
            'numero'        => $paramDom['numero'],
            'numero_int'    => $paramDom['numero_int']
            );
        $this->db->where('id_domicilio', $id_domicilio);
        return $this->db->update('domicilio', $dom_clinica);                
    }

    public function delete_clinica($id_clinica){
        $this->db->where('id_clinica', $id_clinica);
        return $this->db->delete('clinica');
    }        
    
}
