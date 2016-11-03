<?php
/**
* 
*/
class Con_login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mod_login');
	}

	public function index(){
		$data['mensaje'] = '';
		$this->load->view('vlogin',$data);
	}

	public function ingresar(){
		$usu = $this->input->post('usuario');
		$pass = sha1($this->input->post('password'));

		$resulset = $this->mod_login->login($usu,$pass);

		if ($resulset) {
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('clientes/vupdpersona');
			$this->load->view('layout/footer');
		}else{
			$data['mensaje'] = "Usuario o contraseña erronea";
			$this->load->view('vlogin',$data);
		}
	}
}