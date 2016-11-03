<?php
class Mod_cliente extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * 
     * @param object $data
     * @return string
     * return int
     */
    public function insertar_cliente($data) {
        $campos = array(
            'id' => 0,
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'telefono' => $data['telefono']
        );
        $this->db->insert('clientes',$campos);
        return $this->db->insert_id();
        
    }
}