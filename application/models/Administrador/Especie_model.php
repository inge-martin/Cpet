<?php
class Especie_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	//llena el combo
	public function get_habitad(){
		$data = array();
		$query = $this->db->get('habitad');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function get_especie($id_especie = 0){
		if ($id_especie === 0){
			$this->db->select('especie.*, habitad.nombre nombreH');
			$this->db->from('habitad');
			$this->db->join('especie', 'especie.id_habitad = habitad.id_habitad');
			$query = $this->db->get();
			return $query->result_array();
		}
		$query = $this->db->get_where('especie', array('id_especie' => $id_especie));
		return $query->row_array();
	}

	public function get_especie_by_id($id_especie = 0){
		if ($id_especie === 0){
			$query = $this->db->get('especie');
			return $query->result_array();
		}
		$query = $this->db->get_where('especie', array('id_especie' => $id_especie));
		return $query->row_array();
	}

	public function set_especie($id_especie = 0){
		$this->load->helper('url');

        //$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'id_habitad' 	=> $this->input->post('id_habitad'),
			'nombre' 		=> $this->input->post('nombre'),
			'descripcion' 	=> $this->input->post('descripcion')
			);

		if ($id_especie == 0){
			return $this->db->insert('especie', $data);
		}else{
			$this->db->where('id_especie', $id_especie);
			return $this->db->update('especie', $data);
		}
	}

	public function delete_especie($id_especie){
		$this->db->where('id_especie', $id_especie);
		return $this->db->delete('especie');
	}
}
?>
