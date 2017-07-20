<?php

class Inicio_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function get_clientes(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$this->db->select('*');
		$this->db->from('asignacion_cliente_z');
		$this->db->where('id_zootecnico', $id_zootecnico);
		$query = $this->db->get();
		return $query->num_rows();
	}

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

	public function get_adopciones(){
		// $id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$this->db->select('*');
		$this->db->from('adopcion');
		// $this->db->where('id_zootecnico', $id_zootecnico);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_citas(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$this->db->select('*');
		$this->db->from('citas');
		$this->db->where('citas.status = "Pendiente"');
		// $this->db->where('status != "Atendida"');
		// $this->db->where('status != "Cancelada"');
		// $this->db->where('status != "No se presento"');
		$this->db->where('id_zootecnico', $id_zootecnico);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_citas_hoy(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$this->db->select('citas.*, c.nombre, c.ap_paterno');
		$this->db->from('citas, cliente c');
		$this->db->where('date(citas.start) = curdate()');
		$this->db->where('citas.id_cliente = c.id_cliente');
		$this->db->where('citas.status = "Pendiente"');
		// $this->db->where('status != "Cancelada"');
		// $this->db->where('status != "No se presento"');
		$this->db->where('id_zootecnico', $id_zootecnico);
		$this->db->limit('5');
		$query = $this->db->get();
		return $query->result_array();
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
	
}