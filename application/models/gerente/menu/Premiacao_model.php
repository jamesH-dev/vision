<?php

class Premiacao_model extends CI_Model
{
	public function busca_gerente($nome)
	{
		$this->db->select();
		$this->db->from('usuarios');
		$this->db->where('nome_usuario','$nome');
		$query = $this->db->get();
		return $query->row();
	}

	public function lista_vendedores($loja)
    {       
        $this->db->select('vendedor_vendas_servicos');
        $this->db->from('vendas_servicos');
        $this->db->where('filial_vendas_servicos', $loja);
        $this->db->group_by('vendedor_vendas_servicos');
        $query1 = $this->db->get_compiled_select();

        $this->db->select('vendedor_vendas_produtos');
        $this->db->from('vendas_produtos');
        $this->db->where('filial_vendas_produtos', $loja);
        $this->db->group_by('vendedor_vendas_produtos');
        $query2 = $this->db->get_compiled_select();

        $query = $this->db->query($query1.' UNION '.$query2);

        return $query->result();        
    }

	public function busca_meta ($cn, $tipo)
	{
		if ($tipo == 1)
		{
			$this->db->select('servico_meta');
			$this->db->from('meta');
			$this->db->where('nome_meta', $cn);
			$query = $this->db->get();
			return $query->row();
		}
		elseif ($tipo == 2)
		{
			$this->db->select('produto_meta');
			$this->db->from('meta');
			$this->db->where('nome_meta', $cn);
			$query = $this->db->get();
			return $query->row();
		}
		elseif ($tipo == 3)
		{
			$this->db->select('acessorio_meta');
			$this->db->from('meta');
			$this->db->where('nome_meta', $cn);
			$query = $this->db->get();
			return $query->row();
		}
	}

	public function busca_realizado ($loja, $tipo)
	{
		if ($tipo == 1)
		{
			$this->db->select_sum('remuneracao_vendas_servicos');
			$this->db->from('vendas_servicos');
			$this->db->where('filial_vendas_servicos', $loja);
			$query = $this->db->get();
			return $query->row();
		}
		elseif ($tipo == 2)
		{
			$this->db->select_sum('valor_vendas_produtos');
			$this->db->from('vendas_produtos');
			$this->db->where('filial_vendas_produtos', $loja);
			$this->db->where('produto_vendas_produtos!=','Acessório');
			$query = $this->db->get();
			return $query->row();
		}

		elseif ($tipo == 3)
		{
			$this->db->select_sum('valor_vendas_produtos');
			$this->db->from('vendas_produtos');
			$this->db->where('filial_vendas_produtos', $loja);
			$this->db->where('produto_vendas_produtos','Acessório');
			$query = $this->db->get();
			return $query->row();
		}
		
	}

	public function atingimento ($loja, $gerente, $tipo)
	{
		if ($tipo == 1)
		{
			$meta = $this->Premiacao_model->busca_meta($gerente, $tipo);
			$real = $this->Premiacao_model->busca_realizado($loja, $tipo);
			$result = ($real->remuneracao_vendas_servicos / $meta->servico_meta) * 100;
			return $result;
		}

		elseif ($tipo == 2)
		{
			$meta = $this->Premiacao_model->busca_meta($gerente, $tipo);
			$real = $this->Premiacao_model->busca_realizado($loja, $tipo);
			$result = ($real->valor_vendas_produtos / $meta->produto_meta) * 100;
			return $result;
		}

		elseif ($tipo == 3)
		{
			$meta = $this->Premiacao_model->busca_meta($gerente, $tipo);
			$real = $this->Premiacao_model->busca_realizado($loja, $tipo);
			$result = ($real->valor_vendas_produtos / $meta->acessorio_meta) * 100;
			return $result;
		}
	}

	public function verifica_premiacao ($loja, $gerente, $tipo)
	{
		if ($tipo == 1)
		{
			$atingido = $this->Premiacao_model->atingimento($loja, $gerente, $tipo);
			if (($atingido >= 90) and ($atingido < 90))
			{
				$result = 2;
			}
			elseif (($atingido >= 90) and ($atingido < 100)) 
			{
				$result = 5;
			}
			elseif (($atingido >= 100) and ($atingido < 120)) 
			{
				$result = 10;
			}
			elseif ($atingido >= 120)
			{
				$result = 12;
			}
			else
			{
				$result = 0;
			}
			return $result;
		}
		elseif ($tipo == 2)
		{
			$atingido = $this->Premiacao_model->atingimento($loja, $gerente, $tipo);
			if (($atingido >= 80) and ($atingido < 90))
			{
				$result = 0.5;
			}
			elseif (($atingido >= 90) and ($atingido < 100)) 
			{
				$result = 1;
			}
			elseif ($atingido >= 100)
			{
				$result = 2;
			}
			else
			{
				$result = 0;
			}
			return $result;
		}

		else
		{
			$result = 0;
			return $result;
		}
	}

	public function calcula_premiacao ($loja, $nome, $tipo)
	{
		if ($tipo == 1)
		{
			$atingido = $this->Premiacao_model->atingimento($loja, $nome, $tipo);
			$real = $this->Premiacao_model->busca_realizado($loja, $tipo);
			if (($atingido >= 80) and ($atingido < 90))
			{
				$result = $real->remuneracao_vendas_servicos * 0.02;
			}
			elseif (($atingido >= 90) and ($atingido < 100)) 
			{
				$result = $real->remuneracao_vendas_servicos * 0.05;
			}
			elseif (($atingido >= 100) and ($atingido < 110)) 
			{
				$result = $real->remuneracao_vendas_servicos * 0.1;
			}
			elseif ($atingido >= 110)
			{
				$result = $real->remuneracao_vendas_servicos * 0.12;
			}
			else
			{
				$result = 0;
			}
			return $result;
		}
		elseif ($tipo == 2)
		{
			$atingido = $this->Premiacao_model->atingimento($loja, $nome, $tipo);
			$real = $this->Premiacao_model->busca_realizado($loja, $tipo);
			if (($atingido >= 80) and ($atingido < 90))
			{
				$result = $real->valor_vendas_produtos * 0.005;
			}
			elseif (($atingido >= 90) and ($atingido < 100)) 
			{
				$result = $real->valor_vendas_produtos * 0.01;
			}
			elseif ($atingido >= 100)
			{
				$result = $real->valor_vendas_produtos * 0.02;
			}
			else
			{
				$result = 0;
			}
			return $result;
		}

		else
		{
			$result = 0;
			return $result;
		}
	}

	public function resultado_final($cn)
	{
		$servico = $this->Premiacao_model->calcula_premiacao($cn,1);
		$produto = $this->Premiacao_model->calcula_premiacao($cn,2);
		$result = $servico + $produto;
		return $result;
	}

	public function busca_estorno($loja)
	{
		$this->db->select_sum('assinatura_estornos');
		$this->db->from('estornos');
		$this->db->where('loja_estornos', $loja);
		$query = $this->db->get();
		return $query->row();
	}


}