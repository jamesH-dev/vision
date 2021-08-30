<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AnalistaMensal_controller extends Sistema_Controller {

    public function index()
    {
        $data['variavel'] = 'buscanobanco';
        $this->usuario_view('AnalistaMensal_view', $data);
    }

}
