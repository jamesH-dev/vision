<?php

class Coordenador_model extends CI_Model
{
	public function busca_loja($coordenador, $loja)
	{
		$this->db->select('nome_loja');
		$this->db->from('loja');
		$this->db->where('coordenador_loja','$coordenador');
		$this->db->where('nome_loja','$loja');
		$query = $this->db->get();
		return $query->result();
	}

	public function lista_coordenador()
	{
		$this->db->select('coordenador_loja');
		$this->db->from('loja');
		$this->db->group_by('coordenador_loja');
		$query = $this->db->get();
		return $query->result();
	}

	public function busca_meta ($coordenador, $tipo)
	{
		if ($tipo == 1)
		{
			$this->db->select('servico_meta');
			$this->db->from('meta');
			$this->db->where('nome_meta', $coordenador);
			$query = $this->db->get();
			return $query->row();
		}
		elseif ($tipo == 2)
		{
			$this->db->select('produto_meta');
			$this->db->from('meta');
			$this->db->where('nome_meta', $coordenador);
			$query = $this->db->get();
			return $query->row();
		}
	}

	public function busca_realizado ($coordenador, $tipo)
	{
		if ($tipo == 1)
		{
			$this->db->select_sum('remuneracao_vendas_servicos');
			$this->db->from('vendas_servicos');
			$this->db->where('coordenador_vendas_servicos', $coordenador);
			$this->db->where('grupo_vendas_servicos!=', '0');
			$query = $this->db->get();
			return $query->row();
		}
		if ($tipo == 2)
		{
			$this->db->select_sum('valor_vendas_produtos');
			$this->db->from('vendas_produtos');
			$this->db->where('coordenador_vendas_produtos', $coordenador);
			//$this->db->where('produto_vendas_produtos!=', 'Acessório');
			$query = $this->db->get();
			return $query->row();
		}
		
	}

	public function atingimento ($coordenador, $tipo)
	{
		if ($tipo == 1)
		{
			$meta = $this->Coordenador_model->busca_meta($coordenador, $tipo);
			$real = $this->Coordenador_model->busca_realizado($coordenador, $tipo);
			$result = ($real->remuneracao_vendas_servicos / $meta->servico_meta) * 100;
			return $result;
		}

		elseif ($tipo == 2)
		{
			$meta = $this->Coordenador_model->busca_meta($coordenador, $tipo);
			$real = $this->Coordenador_model->busca_realizado($coordenador, $tipo);
			$result = ($real->valor_vendas_produtos / $meta->produto_meta) * 100;
			return $result;
		}

	}

	public function verifica_premiacao ($coordenador, $tipo)
	{
		if ($tipo == 1)
		{
			$atingido = $this->Coordenador_model->atingimento($coordenador, $tipo);
			$real = $this->Coordenador_model->busca_realizado($coordenador, $tipo);
			if (($atingido >= 90) and ($atingido < 100))
			{
				$result = 1;
			}
			elseif (($atingido >= 100) and ($atingido < 110)) 
			{
				$result = 2;
			}
			elseif ($atingido >= 110)
			{
				$result = 3;
			}
			else
			{
				$result = 0;
			}
			return $result;
		}
		elseif ($tipo == 2)
		{
			$atingido = $this->Coordenador_model->atingimento($coordenador, $tipo);
			$real = $this->Coordenador_model->busca_realizado($coordenador, $tipo);
			if (($atingido >= 90) and ($atingido < 100))
			{
				$result = 0.25;
			}
			elseif (($atingido >= 100) and ($atingido < 110)) 
			{
				$result = 0.4;
			}
			elseif ($atingido >= 110)
			{
				$result = 0.6;
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

	public function calcula_premiacao ($coordenador, $tipo)
	{
		if ($tipo == 1)
		{
			$atingido = $this->Coordenador_model->atingimento($coordenador, $tipo);
			$real = $this->Coordenador_model->busca_realizado($coordenador, $tipo);
			if (($atingido >= 90) and ($atingido < 100))
			{
				$result = $real->remuneracao_vendas_servicos * 0.01;
			}
			elseif (($atingido >= 100) and ($atingido < 110)) 
			{
				$result = $real->remuneracao_vendas_servicos * 0.02;
			}
			elseif ($atingido >= 110)
			{
				$result = $real->remuneracao_vendas_servicos * 0.03;
			}
			else
			{
				$result = 0;
			}
			return $result;
		}
		elseif ($tipo == 2)
		{
			$atingido = $this->Coordenador_model->atingimento($coordenador, $tipo);
			$real = $this->Coordenador_model->busca_realizado($coordenador, $tipo);
			if (($atingido >= 90) and ($atingido < 100))
			{
				$result = $real->valor_vendas_produtos * 0.0025;
			}
			elseif (($atingido >= 100) and ($atingido < 110)) 
			{
				$result = $real->valor_vendas_produtos * 0.004;
			}
			elseif ($atingido >= 110)
			{
				$result = $real->valor_vendas_produtos * 0.006;
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

	public function resultado_final($coordenador)
	{
		$servico = $this->Coordenador_model->calcula_premiacao($coordenador,1);
		$produto = $this->Coordenador_model->calcula_premiacao($coordenador,2);
		$result = $servico + $produto;
		return $result;
	}


}