<?php

class Login_model extends CI_Model{

	public function validar($user, $pass){

		$this->db->select('*');
		$this->db->from('sesiones');
		$this->db->where('usuario', $user);
		$this->db->where('contrasena', $pass);
		$query = $this->db->get();

		//si retorna cero no hay nada
		if ($query->num_rows() == 0) {
			//no hay usuario con esas claves
			return 0;
		}elseif ($query->num_rows() != 0) {

			$r = $query->row();
			
			if($r->status == 0){
				// No esta activo
				return 5;
			}else{
				//Si esta activo
				if(!is_null($r->id_admin)){
					return 1;
				}
				if(!is_null($r->id_zootecnico)){
					return 2;
				}
				if(!is_null($r->id_cliente)){
					return 3;
				}
				if(!is_null($r->id_empleado)){
					return 4;
				}			 	
			}
		}
	}

	public function validar1($user, $pass){

		$this->db->select('*');
		$this->db->from('sesiones');
		$this->db->where('usuario', $user);
		$this->db->where('contrasena', $pass);
		//$this->db->where('status = 1');
		$query = $this->db->get();

		//si retorna cero no hay nada
		if ($query->num_rows() == 0) {
			//no hay usuario con esas claves
			return 0;
		}else{
			$r = $query->row();

			if(!is_null($r->id_admin)){
				return 1;
			}
			if(!is_null($r->id_zootecnico)){
				return 2;
			}
			if(!is_null($r->id_cliente)){
				return 3;
			}
			if(!is_null($r->id_empleado)){
				return 4;
			}			 	
		}
	}

	public function administrador($user, $pass){
		$this->db->select('*');
		$this->db->from('sesiones s, administrador a');
		$this->db->where('s.usuario', $user);
		$this->db->where('s.contrasena', $pass);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			//no hay nada
			return 0;
		}else{
			$r = $query->row();

			$vars_sesion 	= array(
				's_id_sesiones' 	=> $r->id_sesiones,
				's_usuario' 		=> $r->usuario,
				's_status'			=> $r->status,
				's_id_admin'		=> $r->id_admin,
				's_id_domicilio'	=> $r->id_domicilio,
				's_nombre'			=> $r->nombre,
				's_ap_paterno'		=> $r->ap_paterno,
				's_ap_materno'		=> $r->ap_materno,
				's_fotografia'		=> $r->fotografia
				);

			//guardas las variables en una sesión
			$this->session->set_userdata($vars_sesion);
			return "admin";				
		}
	}

	public function zootecnico($user, $pass){
		$this->db->select('s.id_sesiones, s.usuario, s.status, s.id_zootecnico,
			z.nombre, z.ap_paterno, z.ap_materno, z.email, z.fotografia, z.id_domicilio,
			cli.nombre nombreClinica');
		$this->db->from('sesiones s, zootecnico z, asignacion_clinica_z cz, clinica cli');
		$this->db->where('s.id_zootecnico = z.id_zootecnico');
		$this->db->where('cz.id_zootecnico = z.id_zootecnico');
		$this->db->where('cz.id_clinica = cli.id_clinica');
		$this->db->where('s.usuario', $user);
		$this->db->where('s.contrasena', $pass);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			//no hay nada
			return 0;
		}else{
			$r = $query->row();

			$vars_sesion 	= array(
				's_id_sesiones' 	=> $r->id_sesiones,
				's_usuario' 		=> $r->usuario,
				's_status'			=> $r->status,
				's_id_zootecnico'	=> $r->id_zootecnico,
				's_nombreClinica'	=> $r->nombreClinica,
				's_id_domicilio'	=> $r->id_domicilio,
				's_nombre'			=> $r->nombre,
				's_ap_paterno'		=> $r->ap_paterno,
				's_ap_materno'		=> $r->ap_materno,
				's_fotografia'		=> $r->fotografia
				);

			//guardas las variables en una sesión
			$this->session->set_userdata($vars_sesion);
			return "zoo";				
		}
	}	

	public function cliente($user, $pass){  
		$this->db->select('s.id_sesiones, s.usuario, s.id_cliente, c.nombre, c.ap_paterno, c.ap_materno, c.fotografia, c.id_domicilio, z.id_zootecnico, z.nombre zoo, z.ap_paterno zoo_p, z.ap_materno zoo_m, cli.nombre nombreClinica');
		$this->db->from('sesiones s, cliente c, zootecnico z, asignacion_cliente_z cz, clinica cli, asignacion_clinica_z cliz');
		$this->db->where('s.id_cliente = c.id_cliente');
		$this->db->where('c.id_cliente = cz.id_cliente');
		$this->db->where('cz.id_zootecnico = z.id_zootecnico');
		$this->db->where('cliz.id_zootecnico = z.id_zootecnico');
		$this->db->where('cliz.id_clinica = cli.id_clinica');
		$this->db->where('usuario', $user);
		$this->db->where('contrasena', $pass);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			//no hay nada
			return 0;
		}else{
			$r = $query->row();

			$vars_sesion 	= array(
				's_id_sesiones' 	=> $r->id_sesiones,
				's_usuario' 		=> $r->usuario,
				's_id_cliente'		=> $r->id_cliente,
				's_nombre'			=> $r->nombre,
				's_ap_paterno'		=> $r->ap_paterno,
				's_ap_materno'		=> $r->ap_materno,
				's_fotografia'		=> $r->fotografia,
				's_id_domicilio'	=> $r->id_domicilio,
				's_nombreClinica'	=> $r->nombreClinica,
				's_id_zootecnico'	=> $r->id_zootecnico,
				's_zoo'				=> $r->zoo . " " . $r->zoo_p . " " . $r->zoo_m
				);
			//guardas las variables en una sesión
			$this->session->set_userdata($vars_sesion);
			return "cli";				
		}
	}

	public function empleado($user, $pass){
		$this->db->select('s.id_sesiones, s.usuario, s.id_empleado, e.nombre, e.ap_paterno,
			e.ap_materno, e.fotografia, e.id_domicilio, z.id_zootecnico, cli.nombre nombreClinica');
		$this->db->from('sesiones s, empleado e, zootecnico z, asignacion_empleado_z ez, clinica cli, asignacion_clinica_z cz');
		$this->db->where('s.id_empleado = e.id_empleado');
		$this->db->where('e.id_empleado = ez.id_empleado');
		$this->db->where('ez.id_zootecnico = z.id_zootecnico');
		$this->db->where('cz.id_zootecnico = z.id_zootecnico');
		$this->db->where('cz.id_clinica = cli.id_clinica');
		$this->db->where('usuario', $user);
		$this->db->where('contrasena', $pass);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			//no hay nada
			return 0;
		}else{
			$r = $query->row();

			$vars_sesion 	= array(
				's_id_sesiones' 	=> $r->id_sesiones,
				's_usuario' 		=> $r->usuario,
				's_id_empleado'		=> $r->id_empleado,
				's_nombre'			=> $r->nombre,
				's_ap_paterno'		=> $r->ap_paterno,
				's_ap_materno'		=> $r->ap_materno,
				's_nombreClinica'	=> $r->nombreClinica,
				's_fotografia'		=> $r->fotografia,
				's_id_domicilio'	=> $r->id_domicilio,
				's_id_zootecnico'	=> $r->id_zootecnico
				);

			//guardas las variables en una sesión
			$this->session->set_userdata($vars_sesion);
			return "emp";				
		}
	}	

}
?>