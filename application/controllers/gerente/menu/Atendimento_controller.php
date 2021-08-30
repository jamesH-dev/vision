<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Atendimento_controller extends Sistema_Controller {

    public function index()
    {
        $data['loja'] = $this->Atendimento_model->lista_loja(); 
        $this->gerente_view('Atendimento_view', $data);
    }

    public function carregar()
	{
		$dados = $this->input->get();
		
	}

}
