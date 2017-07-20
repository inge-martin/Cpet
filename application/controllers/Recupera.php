<?php

class Recupera extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Recupera_model');
	}

	public function index(){
		$data['mensaje'] = '';
		$data['pregunta'] = $this->Recupera_model->get_pregunta();
		$this->load->view('vRecuperar',$data);
	}

	public function validar(){
		$usuario 		= $this->input->post('usuario');
		$id_pregunta	= $this->input->post('id_pregunta');
		$respuesta 		= md5($this->input->post('respuesta'));

		$resultado = $this->Recupera_model->validar($usuario, $id_pregunta, $respuesta);

		if($resultado == 0){
			$data['pregunta'] = $this->Recupera_model->get_pregunta();
			$data['mensaje'] = "Tu usuario o respuesta son incorrectos.";
			$this->load->view('vRecuperar', $data);
		}else{
			$data['id_sesiones'] =  $resultado;
			$this->load->view('vPass', $data);	
		}
	}

	public function cambiar(){
		$id_sesiones	= $this->input->post('id_sesiones');
		$contrasena 	= md5($this->input->post('txtContrasena'));

		$this->Recupera_model->cambiar($id_sesiones, $contrasena);

		$data['mensaje'] = 'Tu contraseña fue cambiada con exito';
		$this->load->view('vLogin', $data);
	}

}
?>