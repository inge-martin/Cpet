<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index(){
		$data['mensaje'] = '';
		$this->load->view('vLogin',$data);
	}

	public function logout(){
		$this->session->unset_userdata('vars_sesion');
		$this->session->sess_destroy();
		redirect(base_url()."Login");
	}

	public function validar(){
		$user = $this->input->post('txtUsuario');
		$pass = md5($this->input->post('txtContrasena'));

		$resultado = $this->Login_model->validar($user, $pass);

		switch ($resultado) {
			case 0:
				$data['mensaje'] = "Tu usuario o contraseña son incorrectos.";
				$this->load->view('vLogin',$data);
				break;
			case 1:
				$admin = $this->Login_model->administrador($user, $pass);
				if($admin == 'admin'){
					redirect(base_url(). 'Administrador/inicio');
				}				
				break;
			case 2:
				$zoo = $this->Login_model->zootecnico($user, $pass);
				if($zoo == 'zoo'){
					redirect(base_url(). 'Zootecnico/inicio');
				}
				break;
			case 3:
				$cli = $this->Login_model->cliente($user, $pass);
				if($cli == 'cli'){
					redirect(base_url(). 'Cliente/inicio');
				}				
				break;
			case 4:
				$emp = $this->Login_model->empleado($user, $pass);
				if($emp == 'emp'){
					redirect(base_url(). 'Empleado/inicio');
				}				
				break;
			case 5:
				$data['mensaje'] = "Tu perfil esta se encuentra dado de baja.";
				$this->load->view('vLogin',$data);
				break;																		
			default:
				$data['mensaje'] 	= "No sabemos que paso";
				$this->load->view('vLogin',$data);	
				break;
		}
	}

}
?>