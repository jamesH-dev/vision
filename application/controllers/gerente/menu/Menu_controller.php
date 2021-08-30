<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Menu_controller extends Sistema_Controller {

    public function index()
    {
        $data['variavel'] = 'buscanobanco';
        $this->gerente_view('Inicial_view', $data);
    }

}
