<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AnalistaDiario_controller extends Sistema_Controller {

    public function index()
    {
    	function data_para_banco($data_sem_tratar){
            $data_separada = explode("-", $data_sem_tratar);
            $data_tratada = $data_separada[2] . "/" . $data_separada[1] . "/" . $data_separada[0];
            return $data_tratada;
        }

        $data_servico = $this->Analista_model->ultima_data_servico()->MAXIMO;
        $data_produto = $this->Analista_model->ultima_data_produto()->MAXIMO;

        $data['data_servico'] = data_para_banco($data_servico);
        $data['data_produto'] = data_para_banco($data_produto);
        $this->usuario_view('AnalistaDiario_view', $data);
    }

}
