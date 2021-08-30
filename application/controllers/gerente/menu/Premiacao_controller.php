<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Premiacao_controller extends Sistema_Controller {

    public function index()
    {
    	$loja = $this->session->userdata('loja_usuario');
    	$nome = $this->session->userdata('nome_usuario');

        $data['gerente'] = $nome;
        $data['meta_serv'] = $this->Premiacao_model->busca_meta($nome, 1);
        $data['meta_prod'] = $this->Premiacao_model->busca_meta($nome, 2);
        $data['meta_acess'] = $this->Premiacao_model->busca_meta($nome, 3);
        $data['real_serv'] = $this->Premiacao_model->busca_realizado($loja, 1);
        $data['real_prod'] = $this->Premiacao_model->busca_realizado($loja, 2);
        $data['real_acess'] = $this->Premiacao_model->busca_realizado($loja, 3);
        $data['atingido_serv'] = $this->Premiacao_model->atingimento($loja, $nome, 1);
        $data['atingido_prod'] = $this->Premiacao_model->atingimento($loja, $nome, 2);
        $data['atingido_acess'] = $this->Premiacao_model->atingimento($loja, $nome, 3);
        $data['premiacao_serv'] = $this->Premiacao_model->verifica_premiacao($loja, $nome, 1);
        $data['premiacao_prod'] = $this->Premiacao_model->verifica_premiacao($loja, $nome, 2);
        $data['premiacao_acess'] = $this->Premiacao_model->verifica_premiacao($loja, $nome, 3);
        $data['total_serv'] = $this->Premiacao_model->calcula_premiacao($loja, $nome, 1);
        $data['total_prod'] = $this->Premiacao_model->calcula_premiacao($loja, $nome, 2);
        $data['estornos'] = $this->Premiacao_model->busca_estorno($loja);


        $this->gerente_view('Premiacao_view', $data);
    }

}
