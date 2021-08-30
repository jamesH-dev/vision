<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Rankings_controller extends Sistema_Controller {

    public function index()
    {
        $data['melhores_serv'] = $this->Rankings_gte_model->busca_melhores(1,$this->session->userdata('loja_usuario'));
        $data['melhores_prod'] = $this->Rankings_gte_model->busca_melhores(2,$this->session->userdata('loja_usuario'));
        $data['melhores_acess'] = $this->Rankings_gte_model->busca_melhores(3,$this->session->userdata('loja_usuario'));
        $this->gerente_view('Rankings_view', $data);
    }

}
