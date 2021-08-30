<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Loja_controller extends Sistema_Controller {

    public function index()
    {        
    	#RESULTADO GERAL

    	if ($this->input->get('loja') == 'CENTRO')
    	{
    		$loja = 'LOJA CENTRO';
    	}

    	elseif ($this->input->get('loja') == 'SHOPPING')
    	{
    		$loja = 'LOJA SHOPPING';
    	}

    	elseif ($this->input->get('loja') == 'JANUARIA')
    	{
    		$loja = 'LOJA JANUÁRIA';
    	}

    	elseif ($this->input->get('loja') == 'S_FRANCISCO')
    	{
    		$loja = 'LOJA SÃO FRANCISCO';
    	}

    	elseif ($this->input->get('loja') == 'C_JESUS')
    	{
    		$loja = 'LOJA CORAÇÃO DE JESUS';
    	}

    	elseif ($this->input->get('loja') == 'PORTEIRINHA')
    	{
    		$loja = 'LOJA PORTEIRINHA';
    	}

    	elseif ($this->input->get('loja') == 'JANAUBA')
    	{
    		$loja = 'LOJA JANAÚBA';
    	}

    	elseif ($this->input->get('loja') == 'JAIBA')
    	{
    		$loja = 'LOJA JAÍBA';
    	}

    	elseif ($this->input->get('loja') == 'B_MINAS')
    	{
    		$loja = 'LOJA BRASÍLIA DE MINAS';
    	}

    	elseif ($this->input->get('loja') == 'MANGA')
    	{
    		$loja = 'LOJA MANGA';
    	}

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
        $data['nome_loja'] = $loja;

        #FMB
        $data['fmb'] = $this->Geral_gte_model->lista_fmb($loja);
        $data['perca_receita'] = $this->Geral_gte_model->perca_receita($loja);
        $data['qte_total'] = $this->Geral_gte_model->quantidade_g2($loja);


        $this->usuario_view('Loja_view', $data);
    }



   

    

}