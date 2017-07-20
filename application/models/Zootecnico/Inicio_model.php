<?php

class Inicio_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	//llena los accesos rapidos
	public function get_clientes(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$this->db->select('*');
		$this->db->from('asignacion_cliente_z');
		$this->db->where('id_zootecnico', $id_zootecnico);
		$query = $this->db->get();
		return $query->num_rows();
	}

	//llena los accesos rapidos
	public function get_mascotas(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$this->db->select('*');
		$this->db->from('mascota, cliente, asignacion_cliente_m cm, zootecnico z, asignacion_cliente_z cz');
		$this->db->where('mascota.id_mascota = cm.id_mascota');
		$this->db->where('cm.id_cliente = cliente.id_cliente');
		$this->db->where('cliente.id_cliente = cz.id_cliente');
		$this->db->where('cz.id_zootecnico = z.id_zootecnico');
		$this->db->where('z.id_zootecnico', $id_zootecnico);
		$query = $this->db->get();        
		return $query->num_rows();
	}	

	//llena los accesos rapidos
	public function get_empleados(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$this->db->select('*');
		$this->db->from('asignacion_empleado_z');
		$this->db->where('id_zootecnico', $id_zootecnico);
		$query = $this->db->get();
		return $query->num_rows();
	}

	//llena los accesos rapidos
	public function get_citas(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$this->db->select('*');
		$this->db->from('citas');
		$this->db->where('citas.status = "Pendiente"');
		$this->db->where('id_zootecnico', $id_zootecnico);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_ultimas_mascotas(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$this->db->select('mascota.*, cliente.nombre as "dueño", cliente.ap_paterno');
		$this->db->from('mascota, cliente, asignacion_cliente_m cm, zootecnico z, asignacion_cliente_z cz');
		$this->db->where('mascota.id_mascota = cm.id_mascota');
		$this->db->where('cm.id_cliente = cliente.id_cliente');
		$this->db->where('cliente.id_cliente = cz.id_cliente');
		$this->db->where('cz.id_zootecnico = z.id_zootecnico');
		$this->db->where('z.id_zootecnico', $id_zootecnico);
		$this->db->limit('5');
		$query = $this->db->get();        
		return $query->result_array();
	}

	public function getCalendario(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$this->db->select('c.id_citas id, c.start, c.end, c.status, c.turno, 
			c.backgroundColor, c.borderColor, c.motivo description, c.clave,
			concat("Mascota: ", m.nombre) as title, cli.nombre cliente');
		$this->db->from('citas c, cliente cli, mascota m, zootecnico z');
		$this->db->where('c.id_cliente = cli.id_cliente');
		$this->db->where('c.id_mascota = m.id_mascota');
		$this->db->where('z.id_zootecnico = c.id_zootecnico');
		$this->db->where('c.status = "Pendiente"');
		$this->db->where('z.id_zootecnico', $id_zootecnico);
		return $this->db->get()->result();
	}

}