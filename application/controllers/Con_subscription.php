<?php
class Con_subscription extends CI_Controller
{
    private $secret_string  = "16ba1df7b92894b7f743d9ef3f6f2d4a";

    public function __construct() {
        parent::__construct();
    }
    
    public function unsubscribe() 
    {
        $id=$this->input->get('i');
        $vh=$this->input->get('vh');

        $encode = md5( $id . $this->secret_string );

        if( $vh != $encode ) {
            $data['mensaje'] = "El correo que intentas dar de baja no se encuentra en la base de datos";
        }
        else {
        $data_subscripcion['id'] = $id);
        $this->mod_subscription->unsubscribe($data_subscripcion);    
        }
    }

    public function sendMail()
    {
        //cargamos la libreria email de ci
        $this->load->library("email");

        //configuracion para gmail
        $configGmail = array(
            'protocol' => 'smtp',
            'smtp_host' => 'send.one.com',
            'smtp_port' => 25,
            'smtp_user' => 'oscar@mibuenordenador.com',
            'smtp_pass' => 'Chucho69',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );

        //cargamos la configuración para enviar con gmail
        $this->email->initialize($configGmail);

        $this->email->from('oscar@mibuenordenador.com');
        $this->email->to("freashart@hotmail.com");
        $this->email->subject('Esto es una prueba');
        $this->email->message('<h2>Correo con imagen</h2>
            <hr><br>
            Kurt Cobain
            <br>
            <a href="http://www.facebook.com/intecsolt"><img src="'.base_url().'img/7.jpg" height="150" width="150"></a>
            <h3>Click en la imagen y dale like a mi pagina :D</h3><br>
            <a target="_blank" href="'.$this->linkmaker(2).'">Unsubscribe</a>'
            );


        for ($i=1; $i <=1 ; $i++) { 
            if ($this->email->send()) {
                echo "Enviado by litokurt";
            }else{
                show_error($this->email->print_debugger());
            }
            sleep(1);
        }
        
    }


    public function linkmaker($user_id)
    {
        $key = md5($user_id.$this->secret_string);     
        $link = base_url()."con_subscription/unsubscribe?i=".$user_id."&vh=".$key;
        return $link;
    }    
}