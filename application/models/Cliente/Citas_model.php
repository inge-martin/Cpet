<?php 

class Citas_model extends CI_Model{

    //llena el combo de mascota
	public function get_mascota(){
		$id_cliente = $this->session->userdata('s_id_cliente');
		$data = array();
		$this->db->select('m.id_mascota, m.nombre, m.sexo, m.color, r.nombre AS "raza"');
		$this->db->from('mascota m, cliente c, asignacion_cliente_m cm, raza r');
		$this->db->where('cm.id_cliente = c.id_cliente');
		$this->db->where('cm.id_mascota = m.id_mascota');
		$this->db->where('m.id_raza = r.id_raza');
		$this->db->where('m.status', 'Activo');
		$this->db->where('cm.id_cliente', $id_cliente);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function get_citas1($id_cliente){
		$this->db->select('ci.id_citas id, zo.nombre zoo_n, zo.ap_paterno zoo_p, zo.ap_materno zoo_m, 
			cli.nombre cli_n, cli.ap_paterno cli_p, cli.ap_materno cli_m,
			ci.motivo, ci.fecha, ci.turno, ci.clave, ci.status');
		$this->db->from('citas ci, cliente cli, zootecnico zo');
		$this->db->where('ci.id_cliente = cli.id_cliente');
		$this->db->where('ci.id_zootecnico = zo.id_zootecnico');
		$this->db->where('ci.id_cliente', $id_cliente);
		$this->db->order_by('ci.start', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_citas($id_cliente){
		$this->db->select('c.id_citas, c.motivo, c.start, c.turno, c.clave, c.status, cli.nombre cli, 
			cli.ap_paterno cli_p, cli.ap_materno cli_m, m.nombre mascota ');
		$this->db->from('citas c, cliente cli, mascota m');
		$this->db->where('c.id_cliente = cli.id_cliente');
		$this->db->where('c.id_cliente = cli.id_cliente');
		$this->db->where('c.id_mascota = m.id_mascota');
		$this->db->where('c.status = "Pendiente"');
		$this->db->where('c.id_cliente', $id_cliente);
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

}
?>