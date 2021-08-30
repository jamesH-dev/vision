<?php

class Analista_model extends CI_Model {

    private $_batchImport;
 
    public function setBatchImport($batchImport) {
        $this->_batchImport = $batchImport;
    }
 
    // save data
    public function importData($tipo) {
        if ($tipo == 1) 
        {
            $data = $this->_batchImport;
            $this->db->insert_batch('vendas_servicos', $data);
        }
        elseif ($tipo == 2) 
        {
            $data = $this->_batchImport;
            $this->db->insert_batch('vendas_produtos', $data);
        }
        elseif ($tipo == 3) 
        {
            $data = $this->_batchImport;
            $this->db->insert_batch('meta', $data);
        }
        elseif ($tipo == 4) 
        {
            $data = $this->_batchImport;
            $this->db->insert_batch('vendas_servicos_definitivo', $data);
        }
        elseif ($tipo == 5) 
        {
            $data = $this->_batchImport;
            $this->db->insert_batch('vendas_produtos_definitivo', $data);
        }
        elseif ($tipo == 6) 
        {
            $data = $this->_batchImport;
            $this->db->insert_batch('estornos', $data);
        }
        elseif ($tipo == 7) 
        {
            $data = $this->_batchImport;
            $this->db->insert_batch('notas_atendimentos', $data);
        }
        else 
        {
            return NULL;
        }
    }    



    function exclui_informacoes($tabela)
    {
        if ($tabela == 'servicos') 
        {
            $this->db->empty_table('vendas_servicos');          
        }

        elseif ($tabela == 'produtos') 
        {
            $this->db->empty_table('vendas_produtos');          
        }

        elseif ($tabela == 'meta') 
        {
            $this->db->empty_table('meta');          
        }

        elseif ($tabela == 'notas_atendimentos') 
        {
            $this->db->empty_table('notas_atendimentos');          
        }

        else
        {
            return NULL;
        }
    }

    public function ultima_data_servico()
    {
        $this->db->select('MAX(data_vendas_servicos) AS MAXIMO');
        $this->db->from('vendas_servicos');
        $query = $this->db->get();
        return $query->row();
    }

    public function ultima_data_produto()
    {
        $this->db->select('MAX(data_vendas_produtos) AS MAXIMO');
        $this->db->from('vendas_produtos');
        $query = $this->db->get();
        return $query->row();
    }

}