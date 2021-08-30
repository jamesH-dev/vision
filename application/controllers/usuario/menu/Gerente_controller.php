<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Gerente_controller extends Sistema_Controller {

    public function index()
    {
        $data['vendedores'] = $this->Gerente_model->lista_vendedores($this->input->get('loja'));
        $data['loja'] = $this->input->get('loja');

        $this->usuario_view('Gerente_view', $data);
    }

}
