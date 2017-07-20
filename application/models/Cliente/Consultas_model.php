<?php 

class Consultas_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function get_consultas($id_cliente){
		$this->db->select('mas.nombre mascota, con.detalle_revision, con.fecha_consulta, t.nombre tratamiento, se.nombre servicios, z.nombre zootecnico, z.ap_paterno z_p');
		$this->db->from('consulta_m cm, consulta con, mascota mas, tratamiento t, servicios se, asignacion_cliente_m acm, cliente cli, zootecnico z');
		$this->db->where('cm.id_mascota = mas.id_mascota');
		$this->db->where('con.id_consulta = cm.id_consulta');
		$this->db->where('con.id_zootecnico = z.id_zootecnico');
		$this->db->where('con.id_tratamiento = t.id_tratamiento');
		$this->db->where('con.id_servicios = se.id_servicios');
		$this->db->where('cm.id_mascota = acm.id_mascota');
		$this->db->where('acm.id_cliente = cli.id_cliente');
		$this->db->where('cli.id_cliente', $id_cliente);
		$this->db->order_by('con.fecha_consulta', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

}

?>