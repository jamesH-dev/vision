<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Rankings_controller extends Sistema_Controller {

    public function index()
    {
        $data['melhores_serv'] = $this->Geral_model->busca_melhores(1);
        $data['melhores_prod'] = $this->Geral_model->busca_melhores(2);
        $data['melhores_acess'] = $this->Geral_model->busca_melhores(3);
        
        $data['grupos'] = $this->Geral_model->busca_grupo();
        $data['tipo_produto'] = $this->Geral_model->busca_tipo_produto();

    
        $this->usuario_view('Rankings_view', $data);
    }

    function tendencia_cn($cn, $tipo)
        {            
            if ($tipo == 1)
            {
                $real = $this->Geral_model->busca_resultado_cn($cn, $tipo)->remuneracao_vendas_servicos;
                $total = $this->Geral_model->dias_uteis_total();
                $restante = $this->Geral_model->dias_uteis_restante();
                $meta = $this->Geral_model->quadro_busca_meta($cn, $tipo)->servico_meta;
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
                $real = $this->Geral_model->busca_resultado_cn($cn, $tipo)->valor_vendas_produtos;
                $total = $this->Geral_model->dias_uteis_total();
                $restante = $this->Geral_model->dias_uteis_restante();
                $meta = $this->Geral_model->quadro_busca_meta($cn, $tipo)->produto_meta;
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
                $real = $this->Geral_model->busca_resultado_cn($cn, $tipo)->valor_vendas_produtos;
                $total = $this->Geral_model->dias_uteis_total();
                $restante = $this->Geral_model->dias_uteis_restante();
                $meta = $this->Geral_model->quadro_busca_meta($cn, $tipo)->acessorio_meta;
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

}
