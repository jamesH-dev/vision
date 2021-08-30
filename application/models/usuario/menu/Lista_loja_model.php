<?php

class Lista_loja_model extends CI_model
{
	public function lista_gerentes()
	{
		$this->db->select(array('minuscula_usuario', 'loja_usuario', 'diretorio_foto_usuario'));
		$this->db->from('usuarios');
		$this->db->where('funcao_usuario', 'Gerente');
		$query = $this->db->get();
		return $query->result();
	}

}
