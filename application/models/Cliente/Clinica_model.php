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
			c.fotografia, c.dias, c.horario,
			d.calle, d.numero, d.manzana, d.lote, d.cp, d.colonia, d.numero_int,
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
}
