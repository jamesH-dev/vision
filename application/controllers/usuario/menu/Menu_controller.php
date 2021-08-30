<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Menu_controller extends Sistema_Controller {

    public function index()
    {
        $data['variavel'] = 'buscanobanco';
        if ($this->session->userdata('nivel_usuario') == 1)
        {
            $this->usuario_view('Inicial_view', $data);
        }

        elseif ($this->session->userdata('nivel_usuario') == 2)
        { 
        	$this->gerente_view('Inicial_view', $data);
        }
    }

}
