<?php

class Rankings_gte_model extends CI_model
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

    public function atingido($cn, $tipo)
    {
        if ($tipo == 1)
        {
            $meta = $this->Geral_gte_model->quadro_busca_meta($cn, $tipo)->servico_meta;
            $realizado = $this->Geral_gte_model->busca_resultado_cn($cn,1)->remuneracao_vendas_servicos;
            $result = ($realizado / $meta) * 100;
            return $result;
        }

        elseif ($tipo == 2)
        {
            $meta = $this->Geral_gte_model->quadro_busca_meta($cn ,$tipo)->produto_meta;
            $realizado = $this->Geral_gte_model->busca_resultado_cn($cn,2)->valor_vendas_produtos;
            $result = ($realizado / $meta) * 100;
            return $result;
        }

        elseif ($tipo == 3)
        {
           $meta = $this->Geral_gte_model->quadro_busca_meta($cn, $tipo)->acessorio_meta;
            $realizado = $this->Geral_gte_model->busca_resultado_cn($cn,3)->valor_vendas_produtos;
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

    

    public function busca_melhores($tipo, $loja)
    {
        if ($tipo == 1)
        {
            $this->db->select('vendedor_vendas_servicos');
            $this->db->select_sum('remuneracao_vendas_servicos');
            $this->db->from('vendas_servicos');
            $this->db->where('grupo_vendas_servicos!=', '0');
            $this->db->where('filial_vendas_servicos', $loja);
            $this->db->group_by(array('vendedor_vendas_servicos', 'filial_vendas_servicos'));
            $this->db->order_by('remuneracao_vendas_servicos', 'DESC');
            $query = $this->db->get();
            return $query->result();
        }

        elseif ($tipo == 2)
        {
            $this->db->select('vendedor_vendas_produtos');
            $this->db->select_sum('valor_vendas_produtos');
            $this->db->from('vendas_produtos');
            $this->db->where('produto_vendas_produtos!=', 'Acessório');
            $this->db->where('filial_vendas_produtos', $loja);
            $this->db->group_by(array('vendedor_vendas_produtos'));
            $this->db->order_by('valor_vendas_produtos', 'DESC');
            $query = $this->db->get();
            return $query->result();
        }

         elseif ($tipo == 3)
        {
            $this->db->select('vendedor_vendas_produtos');
            $this->db->limit(5);
            $this->db->select_sum('valor_vendas_produtos');
            $this->db->from('vendas_produtos');
            $this->db->where('produto_vendas_produtos', 'Acessório');
            $this->db->where('filial_vendas_produtos', $loja);
            $this->db->group_by('vendedor_vendas_produtos');
            $this->db->order_by('valor_vendas_produtos', 'DESC');
            $query = $this->db->get();
            return $query->result();
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

    # --------------------------------------------------------------------------------------- #
    # 							   CÁLCULO DA TENDÊNCIA E DSV                                 #
    # --------------------------------------------------------------------------------------- #

    function contagem_dias($data_inicial)
    {
        if($data_inicial->data == NULL)
        {
            $data1 = date('Y/m/1');
            $data2 = date('Y/m/d');
            // converte as datas para o formato timestamp
            $d1 = strtotime($data1); 
            $d2 = strtotime($data2);
            // verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
            $dataFinal = ($d2 - $d1) / 86400;

            return $dataFinal;
        }
        else
        {
            $data1 = $data_inicial;
            $data2 = date('Y/m/d');
            // converte as datas para o formato timestamp
            $d1 = strtotime($data1->data); 
            $d2 = strtotime($data2);
            // verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
            $dataFinal = ($d2 - $d1) / 86400;

            return $dataFinal;
        }
        
    }

    function dsv($cn, $grupo)
    {
        $data_inicial = $this->Geral_gte_model->busca_dsv($cn, $grupo);
        $contagem = $this->Geral_gte_model->contagem_dias($data_inicial);
        return $contagem;
    }


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

    public function tendencia_loja($cn, $tipo)
        {
            
            if ($tipo == 1)
            {
                $real = $this->Geral_gte_model->busca_resultado_loja($cn, $tipo)->remuneracao_vendas_servicos;
                $total = $this->Geral_gte_model->dias_uteis_total();
                $restante = $this->Geral_gte_model->dias_uteis_restante();
                $meta = $this->Geral_gte_model->quadro_busca_meta($cn, $tipo)->servico_meta;
                if(($total - $restante) == 0)
                {
                    $percorrido = 1;
                }
                else
                {
                    $percorrido = $total - $restante;
                }
                    $tendenciaCN = ((($real / $percorrido) * $total) / $meta) * 100;
                    return $tendenciaCN;
                }

            elseif ($tipo == 2) 
            {
                $real = $this->Geral_gte_model->busca_resultado_loja($cn, $tipo)->valor_vendas_produtos;
                $total = $this->Geral_gte_model->dias_uteis_total();
                $restante = $this->Geral_gte_model->dias_uteis_restante();
                $meta = $this->Geral_gte_model->quadro_busca_meta($cn, $tipo)->produto_meta;
                if(($total - $restante) == 0)
                {
                    $percorrido = 1;
                }
                else
                {
                    $percorrido = $total - $restante;
                }
                $tendenciaCN = ((($real / $percorrido) * $total) / $meta) * 100;
                return $tendenciaCN;
            }

            elseif ($tipo == 3) 
            {
                $real = $this->Geral_gte_model->busca_resultado_loja($cn, $tipo)->valor_vendas_produtos;
                $total = $this->Geral_gte_model->dias_uteis_total();
                $restante = $this->Geral_gte_model->dias_uteis_restante();
                $meta = $this->Geral_gte_model->quadro_busca_meta($cn, $tipo)->acessorio_meta;
                if(($total - $restante) == 0)
                {
                    $percorrido = 1;
                }
                else
                {
                    $percorrido = $total - $restante;
                }
                $tendenciaCN = ((($real / $percorrido) * $total) / $meta) * 100;
                return $tendenciaCN;
            }


        }

        public function tendencia_cn($cn, $tipo)
        {
            
            if ($tipo == 1)
            {
                $real = $this->Geral_gte_model->busca_resultado_cn($cn, $tipo)->remuneracao_vendas_servicos;
                $total = $this->Geral_gte_model->dias_uteis_total();
                $restante = $this->Geral_gte_model->dias_uteis_restante();
                $meta = $this->Geral_gte_model->quadro_busca_meta($cn, $tipo)->servico_meta;
                if(($total - $restante) == 0)
                {
                    $percorrido = 1;
                }
                else
                {
                    $percorrido = $total - $restante;
                }
                    $tendenciaCN = ((($real / $percorrido) * $total) / $meta) * 100;
                    return $tendenciaCN;
                }

            elseif ($tipo == 2) 
            {
                $real = $this->Geral_gte_model->busca_resultado_cn($cn, $tipo)->valor_vendas_produtos;
                $total = $this->Geral_gte_model->dias_uteis_total();
                $restante = $this->Geral_gte_model->dias_uteis_restante();
                $meta = $this->Geral_gte_model->quadro_busca_meta($cn, $tipo)->produto_meta;
                if(($total - $restante) == 0)
                {
                    $percorrido = 1;
                }
                else
                {
                    $percorrido = $total - $restante;
                }
                $tendenciaCN = ((($real / $percorrido) * $total) / $meta) * 100;
                return $tendenciaCN;
            }

            elseif ($tipo == 3) 
            {
                $real = $this->Geral_gte_model->busca_resultado_cn($cn, $tipo)->valor_vendas_produtos;
                $total = $this->Geral_gte_model->dias_uteis_total();
                $restante = $this->Geral_gte_model->dias_uteis_restante();
                $meta = $this->Geral_gte_model->quadro_busca_meta($cn, $tipo)->acessorio_meta;
                if(($total - $restante) == 0)
                {
                    $percorrido = 1;
                }
                else
                {
                    $percorrido = $total - $restante;
                }
                $tendenciaCN = ((($real / $percorrido) * $total) / $meta) * 100;
                return $tendenciaCN;
            }


        }
    
    public function quadro_calcula_tendencia($loja, $tipo)
    {
    	if ($tipo == 1) 
    	{
    		$real = $this->Geral_gte_model->quadro_busca_soma_realizado($loja, $tipo)->remuneracao_vendas_servicos;
	    	$total = $this->Geral_gte_model->dias_uteis_total();
	    	$restante = $this->Geral_gte_model->dias_uteis_restante();
	    	$meta = $this->Geral_gte_model->quadro_busca_meta($loja, $tipo)->servico_meta;
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
    		$real = $this->Geral_gte_model->quadro_busca_soma_realizado($loja, $tipo)->valor_vendas_produtos;
	    	$total = $this->Geral_gte_model->dias_uteis_total();
	    	$restante = $this->Geral_gte_model->dias_uteis_restante();
	    	$meta = $this->Geral_gte_model->quadro_busca_meta($loja, $tipo)->produto_meta;
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
    		$real = $this->Geral_gte_model->quadro_busca_soma_realizado($loja, $tipo)->valor_vendas_produtos;
	    	$total = $this->Geral_gte_model->dias_uteis_total();
	    	$restante = $this->Geral_gte_model->dias_uteis_restante();
	    	$meta = $this->Geral_gte_model->quadro_busca_meta($loja, $tipo)->acessorio_meta;
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
                $meta = $this->Geral_gte_model->quadro_busca_meta($nomeMeta, $tipo)->servico_meta;
                $resultado = $this->Geral_gte_model->soma_serv($nomeMeta)->remuneracao_vendas_servicos;
                $restante = $this->Geral_gte_model->dias_uteis_restante();
                $result = ($meta - $resultado) / $restante;
                return $result;
            }

            elseif ($tipo == 2)
            {
                $meta = $this->Geral_gte_model->quadro_busca_meta($nomeMeta,$tipo)->produto_meta;
                $resultado = $this->Geral_gte_model->soma_prod($nomeMeta)->valor_vendas_produtos;
                $restante = $this->Geral_gte_model->dias_uteis_restante();
                $result = ($meta-$resultado)/$restante;
                return $result;
            }

            elseif ($tipo == 3)
            {
                $meta = $this->Geral_gte_model->quadro_busca_meta($nomeMeta, $tipo)->acessorio_meta;
                $resultado = $this->Geral_gte_model->soma_acess($nomeMeta)->valor_vendas_produtos;
                $restante = $this->Geral_gte_model->dias_uteis_restante();
                $result = ($meta-$resultado)/$restante;
                return $result;
            }

            else
            {
                return NULL;
            }
            
        }   


}
