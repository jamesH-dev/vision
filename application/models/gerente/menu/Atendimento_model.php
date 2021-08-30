<?php

class Atendimento_model extends CI_model
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

    public function lista_loja()
    {
        $this->db->select('filial_vendas_servicos');
        $this->db->from('vendas_servicos');
        $this->db->group_by('filial_vendas_servicos');
        $query = $this->db->get();
        return $query->result();
    }



}
