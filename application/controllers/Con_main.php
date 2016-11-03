<?php
class Con_main extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('vmain');
    }
    
    public function guardar(){
        echo "fasdasdasd";
    }
    
}