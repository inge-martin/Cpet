<?php 

class ComboExpediente extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Administrador/ComboExpediente_model');
	}

	public function getClinicas(){
		$resultado = $this->ComboExpediente_model->getClinica();
		echo json_encode($resultado);
	}

	public function getZootecnicos(){
		$id_clinica = $this->input->post('id_clinica');
		$resultado = $this->ComboExpediente_model->getZootecnico($id_clinica);
		echo json_encode($resultado);
	}

	public function getClientes(){
		$id_zootecnico = $this->input->post('id_zootecnico');
		$resultado = $this->ComboExpediente_model->getCliente($id_zootecnico);
		echo json_encode($resultado);
	}

	public function getMascotas(){
		$id_cliente = $this->input->post('id_cliente');
		$resultado = $this->ComboExpediente_model->getMascota($id_cliente);
		echo json_encode($resultado);
	}	
}
?>