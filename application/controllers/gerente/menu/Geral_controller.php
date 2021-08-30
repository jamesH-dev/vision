<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Geral_controller extends Sistema_Controller {

    public function index()
    {        

        $loja = $this->session->userdata('loja_usuario');

    	#RESULTADO GERAL
        $data['soma_serv'] = $this->Geral_gte_model->soma_serv($loja);
        $data['soma_prod'] = $this->Geral_gte_model->soma_prod($loja);
        $data['soma_acess'] = $this->Geral_gte_model->soma_acess($loja);
        $data['serv_geral']  = $this->Geral_model->soma_serv();
        $data['prod_geral']  = $this->Geral_model->soma_prod();
        $data['acess_geral']  = $this->Geral_model->soma_acess();

        $data['atingido_serv'] = $this->Geral_gte_model->atingido(1, $loja);
        $data['atingido_prod'] = $this->Geral_gte_model->atingido(2, $loja);
        $data['atingido_acess'] = $this->Geral_gte_model->atingido(3, $loja);

        $data['tendencia_serv'] = $this->Geral_gte_model->tendencia_loja($loja,1);

        $data['tendencia_prod'] = $this->Geral_gte_model->tendencia_loja($loja,2);

        $data['tendencia_acess'] = $this->Geral_gte_model->tendencia_loja($loja,3);


        $data['media_dia_serv'] = $this->Geral_gte_model->media_dia($loja, 1);
        $data['media_dia_prod'] = $this->Geral_gte_model->media_dia($loja, 2);
        $data['media_dia_acess'] = $this->Geral_gte_model->media_dia($loja, 3);

        $data['media_serv'] = $this->Geral_gte_model->media_resultado($loja, 1);
        $data['media_prod'] = $this->Geral_gte_model->media_resultado($loja, 2);
        $data['media_acess'] = $this->Geral_gte_model->media_resultado($loja, 3);

        $data['atingimento_serv'] = $this->Geral_gte_model->media_atingimento($loja,1);
        $data['atingimento_prod'] = $this->Geral_gte_model->media_atingimento($loja,2);
        $data['atingimento_acess'] = $this->Geral_gte_model->media_atingimento($loja,3);

        #CONTAGEM
        $data['dias_total'] = $this->Geral_gte_model->dias_uteis_total();
        $data['dias_restante'] = $this->Geral_gte_model->dias_uteis_restante();

        #QUADRO GERAL
        $data['consultores'] = $this->Geral_gte_model->lista_vendedores($loja);


        $this->gerente_view('Geral_view', $data);
    }


    public function grafico_fmb()
    {
        $dados['tarefas'] = array(
            "labels" => array("Trabalho","Escrever livro e tutoriais","Redes Sociais","Assistir TV","Dormir"),
            "datasets" => array(
                array(
                    "label" => "Tempo gasto em tarefas diárias",
                    "data" => array(6,4,2,4,8),
                    "backgroundColor" => array('rgba(255, 99, 132, 0.2)','rgba(54, 162, 235, 0.2)','rgba(255, 206, 86, 0.2)','rgba(75, 192, 192, 0.2)','rgba(153, 102, 255, 0.2)','rgba(255, 159, 64, 0.2)'),
                    "borderColor" => array('rgba(255,99,132,1)','rgba(54, 162, 235, 1)','rgba(255, 206, 86, 1)','rgba(75, 192, 192, 1)','rgba(153, 102, 255, 1)','rgba(255, 159, 64, 1)'),
                    "borderWidth" => 1
                )
            )
        );
        $dados['opcoes'] = array(
            "title" => array(
                "display" => true,
                "text" => "DonnutChart"
            )
        );

        echo json_encode($dados);
    }



   

    

}