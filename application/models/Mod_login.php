<?php

class Mod_login extends CI_Model
{   
        /**
         * 
         * @param String $usu
         * @param String $pass
         * @return boolean
         */
	public function login($usu,$pass){
            $this->db->select('u.id,u.id_cliente, c.nombre, c.apellido');
            $this->db->from('usuarios u');
            $this->db->join('clientes c','c.id = u.id_cliente');
            $this->db->where('u.nombre',$usu);
            $this->db->where('u.password',$pass);

            $resultado = $this->db->get();

            if ($resultado->num_rows() == 1) {
                $row = $resultado->row();

                $ses_login = array(
                        'ses_id_cliente' => $row->id_cliente,
                        'ses_id_usuario' => $row->id,
                        'ses_usuario' => ucfirst($row->nombre)." ".ucfirst($row->apellido)
                        );

                $this->session->set_userdata($ses_login);
                return true;    
            }
            else{
                return false;
            }
	}//fin login
}