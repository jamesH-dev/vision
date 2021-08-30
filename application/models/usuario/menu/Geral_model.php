<?php

class Geral_model extends CI_model
{

   	public function cadastrando($dados){
        $this->db->insert('tabela', $dados);
    }

   	public function atualizando($data){
                    //onde coluna tal = tal
        $this->db->where('coluna_id', $data['dados_id']);
                    //vai na coluna tal e atualiza pra tal
        $this->db->set('coluna', $data['dados']);
                        //nome da tabela
        $this->db->update('tabela'); 
        //echo $this->db->last_query();
     }

    # --------------------------------------------------------------------------------------- #
    # 									    SOMAS E MÉDIAS                                    #
    # --------------------------------------------------------------------------------------- #

    public function soma_serv()
    {
    	$this->db->select_sum('remuneracao_vendas_servicos');
    	$this->db->from('vendas_servicos');
    	$this->db->where('grupo_vendas_servicos!=', '0');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function soma_prod()
    {
    	$this->db->select_sum('valor_vendas_produtos');
    	$this->db->from('vendas_produtos');
    	$this->db->where('produto_vendas_produtos!=', 'Acessório');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function soma_acess()
    {
    	$this->db->select_sum('valor_vendas_produtos');
    	$this->db->from('vendas_produtos');
    	$this->db->where('produto_vendas_produtos', 'Acessório');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function soma_dia ($tipo)
    {
        if ($tipo == 1)
        {
            $this->db->select('data_vendas_servicos');
            $this->db->select_sum('remuneracao_vendas_servicos', 'soma');
            $this->db->from('vendas_servicos');
            $this->db->where('grupo_vendas_servicos !=', '0');
            $this->db->group_by('data_vendas_servicos');
            $query = $this->db->get();
            return $query->result();
        }

        elseif ($tipo == 2)
        {
            $this->db->select('data_vendas_produtos');
            $this->db->select_sum('valor_vendas_produtos', 'soma');
            $this->db->from('vendas_produtos');
            $this->db->where('produto_vendas_produtos !=', 'Acessório');
            $this->db->group_by('data_vendas_produtos');
            $query = $this->db->get();
            return $query->result();
        }

        elseif ($tipo == 3)
        {
            $this->db->select('data_vendas_produtos');
            $this->db->select_sum('valor_vendas_produtos', 'soma');
            $this->db->from('vendas_produtos');
            $this->db->where('produto_vendas_produtos', 'Acessório');
            $this->db->group_by('data_vendas_produtos');
            $query = $this->db->get();
            return $query->result();
        }

        else
        {
            return NULL;
        }

    }

    public function media_dia ($tipo)
    {
        if ($tipo == 1)
        {
            $soma = $this->Geral_model->soma_dia($tipo);
            $qte = 0;
            $total = 0;
            foreach ($soma as $key => $value)
            {
                $total = $total + $value->soma;
                $qte++;
            }
            $result = $total / $qte;
            return $result;
        }

        elseif ($tipo == 2)
        {
            $soma = $this->Geral_model->soma_dia($tipo);
            $qte = 0;
            $total = 0;
            foreach ($soma as $key => $value)
            {
                $total = $total + $value->soma;
                $qte++;
            }
            $result = $total / $qte;
            return $result;
        }

        elseif ($tipo == 3)
        {
            $soma = $this->Geral_model->soma_dia($tipo);
            $qte = 0;
            $total = 0;
            foreach ($soma as $key => $value)
            {
                $total = $total + $value->soma;
                $qte++;
            }
            $result = $total / $qte;
            return $result;
        }

        else 
        {
            return NULL;
        }
    }

     public function media_resultado($tipo)
    {
        if ($tipo == 1)
        {
            $pesquisa = $this->Geral_model->soma_dia(1); 
            $this->db->select_avg('remuneracao_vendas_servicos','media');
            $this->db->from('vendas_servicos');
            $this->db->where('grupo_vendas_servicos!=', '0');
            $query = $this->db->get();
            return $query->row();
        }

        elseif ($tipo == 2)
        {
            $this->db->select_avg('valor_vendas_produtos','media');
            $this->db->from('vendas_produtos');
            $this->db->where('produto_vendas_produtos!=', 'Acessório');
            $query = $this->db->get();
            return $query->row();
        }

        elseif ($tipo == 3)
        {
            $this->db->select_avg('valor_vendas_produtos','media');
            $this->db->from('vendas_produtos');
            $this->db->where('produto_vendas_produtos', 'Acessório');
            $query = $this->db->get();
            return $query->row();
        }

        else
        {
            return NULL;
        }
    }

    public function atingido_geral($tipo)
    {
        if ($tipo == 1)
        {
            $meta = $this->Geral_model->quadro_busca_meta('GERAL',$tipo)->servico_meta;
            $realizado = $this->Geral_model->soma_serv()->remuneracao_vendas_servicos;
            $result = ($realizado / $meta) * 100;
            return $result;
        }

        elseif ($tipo == 2)
        {
            $meta = $this->Geral_model->quadro_busca_meta('GERAL',$tipo)->produto_meta;
            $realizado = $this->Geral_model->soma_prod()->valor_vendas_produtos;
            $result = ($realizado / $meta) * 100;
            return $result;
        }

        elseif ($tipo == 3)
        {
           $meta = $this->Geral_model->quadro_busca_meta('GERAL',$tipo)->acessorio_meta;
            $realizado = $this->Geral_model->soma_acess()->valor_vendas_produtos;
            $result = ($realizado / $meta) * 100;
            return $result;
        }

        else
        {
            return NULL;
        }
    }





    # --------------------------------------------------------------------------------------- #
    # 											BUSCAS                                        #
    # --------------------------------------------------------------------------------------- #

    public function quadro_busca_soma_realizado($loja, $tipo)
    {
    	if ($tipo == 1) 
    	{
    		$this->db->select_sum('remuneracao_vendas_servicos');
	    	$this->db->from('vendas_servicos');
	    	$this->db->where('grupo_vendas_servicos!=', '0');
	    	$this->db->where('filial_vendas_servicos', $loja);
	    	$query = $this->db->get();
	    	return $query->row();
    	}

    	elseif ($tipo == 2) 
    	{
    		$this->db->select_sum('valor_vendas_produtos');
	    	$this->db->from('vendas_produtos');
	    	$this->db->where('produto_vendas_produtos!=', 'Acessório');
	    	$this->db->where('filial_vendas_produtos', $loja);
	    	$query = $this->db->get();
	    	return $query->row();
    	}

    	elseif ($tipo == 3) 
    	{
    		$this->db->select_sum('valor_vendas_produtos');
	    	$this->db->from('vendas_produtos');
	    	$this->db->where('produto_vendas_produtos', 'Acessório');
	    	$this->db->where('filial_vendas_produtos', $loja);
	    	$query = $this->db->get();
	    	return $query->row();
    	}

    	else
    	{
    		return NULL;
    	}
    }

    public function busca_resultado_cn($cn, $tipo)
    {
        if ($tipo == 1)
        {
            $this->db->select_sum('remuneracao_vendas_servicos');
            $this->db->from('vendas_servicos');
            $this->db->where('grupo_vendas_servicos!=', '0');
            $this->db->where('vendedor_vendas_servicos', $cn);
            $query = $this->db->get();
            return $query->row();
        }

        elseif ($tipo == 2)
        {
            $this->db->select_sum('valor_vendas_produtos');
            $this->db->from('vendas_produtos');
            $this->db->where('produto_vendas_produtos!=', 'Acessório');
            $this->db->where('vendedor_vendas_produtos', $cn);
            $query = $this->db->get();
            return $query->row();
        }

        elseif ($tipo == 3)
        {
            $this->db->select_sum('valor_vendas_produtos');
            $this->db->from('vendas_produtos');
            $this->db->where('produto_vendas_produtos', 'Acessório');
            $this->db->where('vendedor_vendas_produtos', $cn);
            $query = $this->db->get();
            return $query->row();
        }

        else
        {
            return NULL;
        }


    }

    public function busca_melhores($tipo)
    {
        if ($tipo == 1)
        {
            $this->db->select(array('vendedor_vendas_servicos', 'filial_vendas_servicos'));
            $this->db->select_sum('remuneracao_vendas_servicos');
            $this->db->from('vendas_servicos');
            $this->db->where('grupo_vendas_servicos!=', '0');
            $this->db->group_by(array('vendedor_vendas_servicos', 'filial_vendas_servicos'));
            $this->db->order_by('remuneracao_vendas_servicos', 'DESC');
            $this->db->limit(5);
            $query = $this->db->get();
            return $query->result();
        }

        elseif ($tipo == 2)
        {
            $this->db->select(array('vendedor_vendas_produtos', 'filial_vendas_produtos'));
            $this->db->select_sum('valor_vendas_produtos');
            $this->db->from('vendas_produtos');
            $this->db->where('produto_vendas_produtos!=', 'Acessório');
            $this->db->group_by(array('vendedor_vendas_produtos', 'filial_vendas_produtos'));
            $this->db->order_by('valor_vendas_produtos', 'DESC');
            $this->db->limit(5);
            $query = $this->db->get();
            return $query->result();
        }

         elseif ($tipo == 3)
        {
            $this->db->select(array('vendedor_vendas_produtos', 'filial_vendas_produtos'));
            $this->db->limit(5);
            $this->db->select_sum('valor_vendas_produtos');
            $this->db->from('vendas_produtos');
            $this->db->where('produto_vendas_produtos', 'Acessório');
            $this->db->group_by(array('vendedor_vendas_produtos', 'filial_vendas_produtos'));
            $this->db->order_by('valor_vendas_produtos', 'DESC');
            $this->db->limit(5);
            $query = $this->db->get();
            return $query->result();
        }

        else
        {
            return NULL;
        }

    }

    public function quadro_busca_meta($nome, $tipo)
    {	
    	if ($tipo == 1)
    	{
    		$this->db->select('servico_meta');
		    $this->db->from('meta');
		    $this->db->where('nome_meta', $nome);
		    $query = $this->db->get();
		    return $query->row();
    	}

    	elseif ($tipo == 2) 
    	{
    		$this->db->select('produto_meta');
		    $this->db->from('meta');
		    $this->db->where('nome_meta', $nome);
		    $query = $this->db->get();
		    return $query->row();
		}

		elseif ($tipo == 3) 
		{
			$this->db->select('acessorio_meta');
		    $this->db->from('meta');
		    $this->db->where('nome_meta', $nome);
		    $query = $this->db->get();
		    return $query->row();
		}

		else
		{
			return NULL;
		}


    }

    public function quadro_geral()
	{
		$query = $this->db->get('quadro');
		return $query->result();
	}

    public function busca_grupo()
    {
        $this->db->select('grupo_vendas_servicos');
        $this->db->select("COUNT('grupo_vendas_servicos') AS CONTAGEM");
        $this->db->from('vendas_servicos');
        $this->db->where('grupo_vendas_servicos!=', '0');
        $this->db->group_by('grupo_vendas_servicos');
        $query = $this->db->get();
        return $query->result();
    }

    public function busca_tipo_produto()
    {
        $this->db->select('produto_vendas_produtos');
        $this->db->select("COUNT('produto_vendas_produtos') AS CONTAGEM");
        $this->db->select_sum('valor_vendas_produtos','SOMA');
        $this->db->from('vendas_produtos');
        $this->db->where('produto_vendas_produtos!=', 'Acessório');
        $this->db->group_by('produto_vendas_produtos');
        $this->db->order_by('SOMA', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }


    # --------------------------------------------------------------------------------------- #
    # 							 		 CÁLCULO DA TENDÊNCIA                                 #
    # --------------------------------------------------------------------------------------- #

    function dias_uteis_total()
    {
		$mes = date('m');
		$ano = date('Y');
		$uteis = 0;
		$sabado = 0;
		// Obtém o número de dias no mês 
		// (http://php.net/manual/en/function.cal-days-in-month.php)
		$dias_no_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano); 

		for($dia = 1; $dia <= $dias_no_mes; $dia++)
		{
			// Aqui você pode verifica se tem feriado
			// ----------------------------------------
			// Obtém o timestamp
			// (http://php.net/manual/pt_BR/function.mktime.php)
			$timestamp = mktime(0, 0, 0, $mes, $dia, $ano);
			$semana    = date("N", $timestamp);

			if($semana <= 5) $uteis++;
			if($semana == 6) $sabado++;
		}
		$uteis = $uteis + ($sabado / 2);
		return $uteis;
	}

	function dias_uteis_restante()
	{
		$mes = date('m');
		$ano = date('Y');
		$uteis = 0;
		$sabado = 0;
		// Obtém o número de dias no mês 
		// (http://php.net/manual/en/function.cal-days-in-month.php)
		$dias_no_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano); 

		for($dia = date('d'); $dia <= $dias_no_mes; $dia++)
		{

			// Aqui você pode verifica se tem feriado
			// ----------------------------------------
			// Obtém o timestamp
			// (http://php.net/manual/pt_BR/function.mktime.php)
			$timestamp = mktime(0, 0, 0, $mes, $dia, $ano);
			$semana    = date("N", $timestamp);

			if($semana <= 5) $uteis++;
			if($semana == 6) $sabado++;
		}

		$uteis = $uteis + ($sabado / 2);
		return $uteis;

    }
    
    public function quadro_calcula_tendencia($loja, $tipo)
    {
    	if ($tipo == 1) 
    	{
    		$real = $this->Geral_model->quadro_busca_soma_realizado($loja, $tipo)->remuneracao_vendas_servicos;
	    	$total = $this->Geral_model->dias_uteis_total();
	    	$restante = $this->Geral_model->dias_uteis_restante();
	    	$meta = $this->Geral_model->quadro_busca_meta($loja, $tipo)->servico_meta;
	    	if(($total - $restante) == 0)
            {
                $percorrido = 1;
            }
            else
            {
                $percorrido = $total - $restante;
            }
	    	$tendencia = ((($real / $percorrido) * $total) / $meta) * 100;
			return $tendencia;
    	}

    	elseif ($tipo == 2) 
    	{
    		$real = $this->Geral_model->quadro_busca_soma_realizado($loja, $tipo)->valor_vendas_produtos;
	    	$total = $this->Geral_model->dias_uteis_total();
	    	$restante = $this->Geral_model->dias_uteis_restante();
	    	$meta = $this->Geral_model->quadro_busca_meta($loja, $tipo)->produto_meta;
	    	if(($total - $restante) == 0)
            {
                $percorrido = 1;
            }
            else
            {
                $percorrido = $total - $restante;
            }
	    	$tendencia = ((($real / $percorrido) * $total) / $meta) * 100;
			return $tendencia;
    	}

    	elseif ($tipo == 3) 
    	{
    		$real = $this->Geral_model->quadro_busca_soma_realizado($loja, $tipo)->valor_vendas_produtos;
	    	$total = $this->Geral_model->dias_uteis_total();
	    	$restante = $this->Geral_model->dias_uteis_restante();
	    	$meta = $this->Geral_model->quadro_busca_meta($loja, $tipo)->acessorio_meta;
	    	if(($total - $restante) == 0)
            {
                $percorrido = 1;
            }
            else
            {
                $percorrido = $total - $restante;
            }
	    	$tendencia = ((($real / $percorrido) * $total) / $meta) * 100;
			return $tendencia;
    	}
    	
    }

    function media_atingimento($nomeMeta, $tipo)
        {
            if ($tipo == 1)
            {
                $meta = $this->Geral_model->quadro_busca_meta($nomeMeta, $tipo)->servico_meta;
                $resultado = $this->Geral_model->soma_serv()->remuneracao_vendas_servicos;
                $restante = $this->Geral_model->dias_uteis_restante();
                $result = ($meta - $resultado) / $restante;
                return $result;
            }

            elseif ($tipo == 2)
            {
                $meta = $this->Geral_model->quadro_busca_meta($nomeMeta,$tipo)->produto_meta;
                $resultado = $this->Geral_model->soma_prod()->valor_vendas_produtos;
                $restante = $this->Geral_model->dias_uteis_restante();
                $result = ($meta-$resultado)/$restante;
                return $result;
            }

            elseif ($tipo == 3)
            {
                $meta = $this->Geral_model->quadro_busca_meta($nomeMeta, $tipo)->acessorio_meta;
                $resultado = $this->Geral_model->soma_acess()->valor_vendas_produtos;
                $restante = $this->Geral_model->dias_uteis_restante();
                $result = ($meta-$resultado)/$restante;
                return $result;
            }

            else
            {
                return NULL;
            }
            
        }



 	# --------------------------------------------------------------------------------------- #
    # 									GRAVAÇÕES NO QUADRO GERAL                             #
    # --------------------------------------------------------------------------------------- #

    # LOJA CENTRO #   
    
    public function quadro_grava_centro ($dados)
    {	
    	$this->db->from('quadro');
    	$this->db->like('filial_quadro','LOJA CENTRO');
    	$this->db->update('quadro',$dados);

    }

    # LOJA SHOPPING #

    public function quadro_grava_shopping ($dados)
    {	
    	$this->db->from('quadro');
    	$this->db->like('filial_quadro','LOJA SHOPPING');
    	$this->db->update('quadro',$dados);

    }

    # LOJA JANUÁRIA #

    public function quadro_grava_januaria ($dados)
    {	
    	$this->db->from('quadro');
    	$this->db->like('filial_quadro','LOJA JANUÁRIA');
    	$this->db->update('quadro',$dados);

    }

    # LOJA SÃO FRANCISCO #

    public function quadro_grava_s_francisco ($dados)
    {	
    	$this->db->from('quadro');
    	$this->db->like('filial_quadro','LOJA SÃO FRANCISCO', 'none');
    	$this->db->update('quadro',$dados);

    }

    # LOJA CORAÇÃO DE JESUS #

    public function quadro_grava_c_jesus ($dados)
    {	
    	$this->db->from('quadro');
    	$this->db->like('filial_quadro','LOJA CORAÇÃO DE JESUS');
    	$this->db->update('quadro',$dados);

    }

    # LOJA PORTEIRINHA #
    

    public function quadro_grava_porteirinha ($dados)
    {	
    	$this->db->from('quadro');
    	$this->db->like('filial_quadro','LOJA PORTEIRINHA');
    	$this->db->update('quadro',$dados);

    }

    # LOJA JANAÚBA #
    
    public function quadro_grava_janauba ($dados)
    {	
    	$this->db->from('quadro');
    	$this->db->like('filial_quadro','LOJA JANAÚBA');
    	$this->db->update('quadro',$dados);

    }

    # LOJA JAÍBA #
    
    public function quadro_grava_jaiba ($dados)
    {	
    	$this->db->from('quadro');
    	$this->db->like('filial_quadro','LOJA JAÍBA');
    	$this->db->update('quadro',$dados);

    }

    # LOJA BRASÍLIA DE MINAS #
    
    public function quadro_grava_b_minas ($dados)
    {	
    	$this->db->from('quadro');
    	$this->db->like('filial_quadro','LOJA BRASÍLIA DE MINAS');
    	$this->db->update('quadro',$dados);

    }

    # LOJA MANGA #
    
    public function quadro_grava_manga ($dados)
    {	
    	$this->db->from('quadro');
    	$this->db->like('filial_quadro','LOJA MANGA');
    	$this->db->update('quadro',$dados);

    }

    public function lista_fmb ()
    {
        $this->db->select('valor_vendas_servicos');
        $this->db->select('COUNT(valor_vendas_servicos) AS CONTAGEM');
        $this->db->from('vendas_servicos');
        $this->db->where('grupo_vendas_servicos', 'G2');
        //$this->db->where('filial_vendas_servicos', $loja);
        $this->db->group_by('valor_vendas_servicos');
        $query = $this->db->get();
        return $query->result();
    }


    public function perca_receita ()
    {
        $this->db->select('COUNT(valor_vendas_servicos) as CONTAGEM');
        $this->db->from('vendas_servicos');
        $this->db->where('grupo_vendas_servicos', 'G2');
        $this->db->where('valor_vendas_servicos', '39.99');
        $entrada = $this->db->get();
        $diferenca = 15;
        $total = $diferenca * $entrada->row()->CONTAGEM;
        return $total;
    }

    public function quantidade_g2 ()
    {
        $this->db->select('COUNT(valor_vendas_servicos) AS CONTAGEM');
        $this->db->from('vendas_servicos');
        $this->db->where('grupo_vendas_servicos', 'G2');
        $query = $this->db->get();
        return $query->row();
    }

    public function conta_email_validos ()
    {
        $this->db->select('COUNT(email_vendas_servicos) AS CONTAGEM');
        $this->db->from('vendas_servicos');
        $this->db->where('email_vendas_servicos!=', '');
        $query = $this->db->get();
        return $query->row();
    }
    

    


}
