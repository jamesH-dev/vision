<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Lista_loja_controller extends Sistema_Controller {

    public function index()
    {
        $data['gerentes'] = $this->Lista_loja_model->lista_gerentes();
        $this->usuario_view('Lista_loja_view', $data);
    }

}
