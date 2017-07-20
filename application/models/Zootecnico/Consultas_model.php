<?php 

class Consultas_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

    //llena el combo mascota
	public function get_mascota(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$data = array();
		$this->db->select('m.id_mascota, m.nombre, m.sexo, m.color, r.nombre AS "raza"');
		$this->db->from('mascota m, raza r, zootecnico z, cliente c, 
			asignacion_cliente_z cz, asignacion_cliente_m cm');
		$this->db->where('m.id_raza = r.id_raza');
		$this->db->where('m.status != ','Perdido');
		$this->db->where('m.status != ','Finado');
		$this->db->where('m.id_mascota = cm.id_mascota');
		$this->db->where('cm.id_cliente = c.id_cliente');
		$this->db->where('c.id_cliente = cz.id_cliente');
		$this->db->where('cz.id_zootecnico = z.id_zootecnico');
		$this->db->where('z.id_zootecnico', $id_zootecnico);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	//llena el combo mascota externa
	public function get_mascota_ex(){
		$id_zootecnico = $this->session->userdata('s_id_zootecnico');
		$data = array();
		$this->db->select('m.id_mascota, m.nombre, m.sexo, m.color, r.nombre AS "raza"');
		$this->db->from('mascota m, raza r, zootecnico z, cliente c, 
			asignacion_cliente_z cz, asignacion_cliente_m cm');
		$this->db->where('m.id_raza = r.id_raza');
		$this->db->where('m.status != ','Perdido');
		$this->db->where('m.status != ','Finado');
		$this->db->where('m.id_mascota = cm.id_mascota');
		$this->db->where('cm.id_cliente = c.id_cliente');
		$this->db->where('c.id_cliente = cz.id_cliente');
		$this->db->where('cz.id_zootecnico = z.id_zootecnico');
		$this->db->where('z.id_zootecnico !=', $id_zootecnico);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	//llena el combo tratamiento
	public function get_tratamiento(){
		$query = $this->db->get('tratamiento');
		return $query->result_array();
	}

	//llena el combo servicios
	public function get_servicios(){
		$query = $this->db->get('servicios');
		return $query->result_array();
	}

	public function get_consultas($id_zootecnico){
		$this->db->select('c.id_consulta, c.detalle_revision, c.fecha_consulta, t.nombre tratamiento, se.nombre servicios, 
			z.nombre zootecnico, m.nombre mascota, cli.nombre cliente, cli.ap_paterno cli_p');
		$this->db->from('consulta c, tratamiento t, servicios se, zootecnico z, consulta_m cm, mascota m, asignacion_cliente_m acm, cliente cli');
		$this->db->where('c.id_tratamiento = t.id_tratamiento');
		$this->db->where('c.id_servicios = se.id_servicios');
		$this->db->where('c.id_zootecnico = z.id_zootecnico');
		$this->db->where('c.id_consulta = cm.id_consulta');
		$this->db->where('cm.id_mascota = acm.id_mascota');
		$this->db->where('acm.id_cliente = cli.id_cliente');
		$this->db->where('cm.id_mascota = m.id_mascota');
		$this->db->where('z.id_zootecnico', $id_zootecnico);
		$this->db->order_by('c.fecha_consulta', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insert_consulta($paramConsulta){
		$consulta = array(
			'id_zootecnico' 	=> $paramConsulta['id_zootecnico'],
			'detalle_revision' 	=> $paramConsulta['detalle_revision'],
			'fecha_consulta' 	=> $paramConsulta['fecha_consulta'],
			'id_tratamiento' 	=> $paramConsulta['id_tratamiento'],
			'id_servicios' 		=> $paramConsulta['id_servicios']
			);
		$this->db->insert('consulta', $consulta);
		return $this->db->insert_id();
	}

	public function insert_consulta_m($paramConsulta_m){
		$consulta_m = array(
			'id_consulta' 	=> $paramConsulta_m['id_consulta'],
			'id_mascota' 	=> $paramConsulta_m['id_mascota']
			);
		$this->db->insert('consulta_m', $consulta_m);
		return $this->db->insert_id();
	}

}

?>