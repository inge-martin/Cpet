<?php 
/*
class Citas_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function get_citas($id_zootecnico){
		$this->db->select('c.id_citas, c.motivo, c.start, c.turno, c.clave, c.status, cli.nombre cli, 
			cli.ap_paterno cli_p, cli.ap_materno cli_m, m.nombre mascota ');
		$this->db->from('citas c, cliente cli, mascota m');
		$this->db->where('c.id_cliente = cli.id_cliente');
		$this->db->where('c.id_cliente = cli.id_cliente');
		$this->db->where('c.id_mascota = m.id_mascota');
		$this->db->where('c.status = "Pendiente"');
		$this->db->where('id_zootecnico', $id_zootecnico);
		$this->db->order_by('c.start');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insert_cita($paramCita){
		$cita = array(
			'fecha' 		=> $paramCita['fecha'],
			'id_zootecnico' => $paramCita['id_zootecnico'],
			'id_cliente' 	=> $paramCita['id_cliente'],
			'id_mascota' 	=> $paramCita['id_mascota'],
			'motivo' 		=> $paramCita['motivo'],
			'turno' 		=> $paramCita['turno'],
			'status' 		=> $paramCita['status'],
			'clave' 		=> $paramCita['clave']
			);
		$this->db->insert('citas', $cita);
	}

	public function get_detalle_cita($id_citas){
		$this->db->select('c.id_citas, c.motivo, c.start, c.turno, c.clave, c.status, cli.nombre cli, 
			cli.ap_paterno cli_p, cli.ap_materno cli_m, m.nombre mascota ');
		$this->db->from('citas c, cliente cli, mascota m');
		$this->db->where('c.id_cliente = cli.id_cliente');
		$this->db->where('c.id_cliente = cli.id_cliente');
		$this->db->where('c.id_mascota = m.id_mascota');
		$this->db->where('c.id_citas', $id_citas);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function edit_cita($param){
		$id_citas = $param['id_citas'];
		$citas = array(
			'status' =>$param['status']
			);
		$this->db->where('id_citas', $id_citas);
		return $this->db->update('citas', $citas);
	}

	//--------para el combo de cliente mascota
	public function getCliente($id_zootecnico){
		$this->db->select('c.id_cliente, c.nombre, c.ap_paterno, c.ap_materno');
		$this->db->from('asignacion_cliente_z cz, zootecnico z, cliente c');
		$this->db->where('cz.id_cliente = c.id_cliente');
		$this->db->where('cz.id_zootecnico = z.id_zootecnico');
		$this->db->where('z.id_zootecnico', $id_zootecnico);
		$s = $this->db->get();
		return $s->result();
	}

	public function getMascota($s){    
		$this->db->select('acm.id_cliente, acm.id_mascota, m.nombre, m.sexo, m.color');
		$this->db->from('asignacion_cliente_m acm, mascota m');
		$this->db->where('acm.id_mascota = m.id_mascota');
		$this->db->where('acm.id_cliente', $s);
		$s = $this->db->get();
		return $s->result();
	}
}
*/
?>

<?php 

class Citas_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function get_citas($id_zootecnico){
		$this->db->select('c.*, cli.nombre cli, cli.ap_paterno cli_p, cli.ap_materno cli_m, m.nombre mascota');
		$this->db->from('citas c, cliente cli, mascota m');
		$this->db->where('c.id_cliente = cli.id_cliente');
		$this->db->where('c.id_cliente = cli.id_cliente');
		$this->db->where('c.id_mascota = m.id_mascota');
		$this->db->where('c.status = "Pendiente"');
		$this->db->where('id_zootecnico', $id_zootecnico);
		$this->db->order_by('c.start');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insert_cita($paramCita){
		$cita = array(
			'start' 		=> $paramCita['start'],
			'end' 			=> $paramCita['end'],
			'backgroundColor'=> $paramCita['backgroundColor'],
			'borderColor' 	=> $paramCita['borderColor'],
			'id_zootecnico' => $paramCita['id_zootecnico'],
			'id_cliente' 	=> $paramCita['id_cliente'],
			'id_mascota' 	=> $paramCita['id_mascota'],
			'motivo' 		=> $paramCita['motivo'],
			'turno' 		=> $paramCita['turno'],
			'status' 		=> $paramCita['status'],
			'clave' 		=> $paramCita['clave']
			);
		$this->db->insert('citas', $cita);
		return $this->db->insert_id();
	}

	public function get_detalle_cita($id_citas){
		$this->db->select('c.id_citas, c.motivo, date(c.start) start, c.end, c.turno, c.clave, c.status, cli.nombre cli, 
			cli.ap_paterno cli_p, cli.ap_materno cli_m, m.nombre mascota, z.nombre zoo, 
			z.ap_paterno zoo_p, z.ap_materno zoo_m,');
		$this->db->from('citas c, cliente cli, mascota m, zootecnico z');
		$this->db->where('c.id_cliente = cli.id_cliente');
		$this->db->where('c.id_zootecnico = z.id_zootecnico');
		$this->db->where('c.id_mascota = m.id_mascota');
		$this->db->where('c.id_citas', $id_citas);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function edit_cita($param){
		$id_citas = $param['id_citas'];
		$citas = array(
			'status' =>$param['status']
			);
		$this->db->where('id_citas', $id_citas);
		return $this->db->update('citas', $citas);
	}

	//--------para el combo de cliente mascota
	public function getCliente($id_zootecnico){
		$this->db->select('c.id_cliente, c.nombre, c.ap_paterno, c.ap_materno');
		$this->db->from('asignacion_cliente_z cz, zootecnico z, cliente c');
		$this->db->where('cz.id_cliente = c.id_cliente');
		$this->db->where('cz.id_zootecnico = z.id_zootecnico');
		$this->db->where('z.id_zootecnico', $id_zootecnico);
		$s = $this->db->get();
		return $s->result();
	}

	public function getMascota($s){    
		$this->db->select('acm.id_cliente, acm.id_mascota, m.nombre, m.sexo, m.color');
		$this->db->from('asignacion_cliente_m acm, mascota m');
		$this->db->where('acm.id_mascota = m.id_mascota');
		$this->db->where('acm.id_cliente', $s);
		$s = $this->db->get();
		return $s->result();
	}
}

?>