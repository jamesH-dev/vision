<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Coordenador_controller extends Sistema_Controller {

    public function index()
    {
        $data['coordenadores'] = $this->Coordenador_model->lista_coordenador();

        $this->usuario_view('Coordenador_view', $data);
    }

}
