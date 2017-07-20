<?php
class Raza_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	//llena el combo
	public function get_especie(){
		$data = array();
		$query = $this->db->get('especie');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function get_raza($id_raza = 0){
		if ($id_raza === 0){
			$this->db->select('r.id_raza, r.nombre, r.descripcion, e.nombre nombreE, h.nombre nombreH');
			$this->db->from('raza r, especie e, habitad h');
			$this->db->where('h.id_habitad = e.id_habitad');
			$this->db->where('e.id_especie = r.id_especie');
			// $this->db->where('id_raza', $id_raza);
			$query = $this->db->get();
			return $query->result_array();
		}
		$query = $this->db->get_where('raza', array('id_raza' => $id_raza));
		return $query->row_array();
	}

	public function get_raza_by_id($id_raza = 0){
		if ($id_raza === 0){
			$query = $this->db->get('raza');
			return $query->result_array();
		}
		$query = $this->db->get_where('raza', array('id_raza' => $id_raza));
		return $query->row_array();
	}

	public function set_raza($id_raza = 0){
		$this->load->helper('url');

        //$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'nombre' 		=> $this->input->post('nombre'),
			'descripcion' 	=> $this->input->post('descripcion'),
			'id_especie' 	=> $this->input->post('id_especie')
			);

		if ($id_raza == 0){
			return $this->db->insert('raza', $data);
		}else{
			$this->db->where('id_raza', $id_raza);
			return $this->db->update('raza', $data);
		}
	}

	public function delete_raza($id_raza){
		$this->db->where('id_raza', $id_raza);
		return $this->db->delete('raza');
	}
}
?>
