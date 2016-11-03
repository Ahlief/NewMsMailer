<?php
class Mod_usuario extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * 
     * @param array $param
     * return void
     */
    public function insertar_usuario($param){
            $campos = array(
                    'nombre' => $param['nombre'],
                    'password' => $param['password'],
                    'id_cliente' => $param['id_cliente']
            );

            $this->db->insert('usuarios',$campos);
    }
    
    /**
     * 
     * @param int $idCliente
     * return void
     */
    public function eliminar_usuario($idCliente){
            $this->db->where('id_cliente',$idClienteP);
            $this->db->delete('usuarios');
    }
}