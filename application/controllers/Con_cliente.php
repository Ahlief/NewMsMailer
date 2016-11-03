<?php
class Con_cliente extends CI_Controller{
    public function __construct() {
        parent::__construct();
            $this->load->model('mod_cliente');
            $this->load->model('mod_usuario');
           // $this->load->library('encryption');
    }
    
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('clientes/vnuevocliente');
        $this->load->view('layout/footer');
    }
    
    public function guardar(){
        echo "Registros guardados";
        //Cliente
        $data_cliente['nombre'] = $this->input->post('nombre_cliente');
        $data_cliente['apellido'] = $this->input->post('apellido');
        $data_cliente['telefono'] = $this->input->post('telefono');
        //usuario
        $data_usuario['nombre'] = $this->input->post('nombre_usuario');
        $data_usuario['correo'] = $this->input->post('correo');         
        $data_usuario['password'] = sha1($this->input->post('password'));

        $lastId = $this->mod_cliente->insertar_cliente($data_cliente);

        if ($lastId > 0) {
            $data_usuario['id_cliente'] = $lastId;
            $this->mod_usuario->insertar_usuario($data_usuario);
        }
    }
    
}