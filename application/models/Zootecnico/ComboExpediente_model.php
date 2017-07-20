<?php 

class ComboExpediente_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}			

	public function getClinica(){
		$s = $this->db->get('clinica');
		return $s->result();
	}

	public function getZootecnico($id_clinica){
		$this->db->select('acz.id_zootecnico, z.nombre, z.ap_paterno, z.ap_materno');
		$this->db->from('asignacion_clinica_z acz, zootecnico z');
		$this->db->where('acz.id_zootecnico = z.id_zootecnico');
		$this->db->where('acz.id_clinica', $id_clinica);
		$s = $this->db->get();
		return $s->result();
	}

	public function getCliente($id_zootecnico){
		$this->db->select('acz.id_cliente, c.nombre, c.ap_paterno, c.ap_materno');
		$this->db->from('asignacion_cliente_z acz, cliente c');
		$this->db->where('acz.id_cliente = c.id_cliente');
		$this->db->where('acz.id_zootecnico', $id_zootecnico);
		$s = $this->db->get();
		return $s->result();
	}

	public function getMascota($id_cliente){
		$this->db->select('acm.id_mascota, m.nombre, m.sexo, m.color');
		$this->db->from('asignacion_cliente_m acm, mascota m');
		$this->db->where('acm.id_mascota = m.id_mascota');
		$this->db->where('acm.id_cliente', $id_cliente);
		$s = $this->db->get();
		return $s->result();
	}
}
?>