<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Geral_controller extends Sistema_Controller {

    public function index()
    {
        
    	#RESULTADO GERAL
        $data['soma_serv'] = $this->Geral_model->soma_serv();
        $data['soma_prod'] = $this->Geral_model->soma_prod();
        $data['soma_acess'] = $this->Geral_model->soma_acess();

        $data['atingimento_serv'] = $this->Geral_model->media_atingimento('GERAL',1);
        $data['atingimento_prod'] = $this->Geral_model->media_atingimento('GERAL',2);
        $data['atingimento_acess'] = $this->Geral_model->media_atingimento('GERAL',3);

        $data['media_dia_serv'] = $this->Geral_model->media_dia(1);
        $data['media_dia_prod'] = $this->Geral_model->media_dia(2);
        $data['media_dia_acess'] = $this->Geral_model->media_dia(3);

        $data['media_serv'] = $this->Geral_model->media_resultado(1);
        $data['media_prod'] = $this->Geral_model->media_resultado(2);
        $data['media_acess'] = $this->Geral_model->media_resultado(3);

        $data['atingido_serv'] = $this->Geral_model->atingido_geral(1);
        $data['atingido_prod'] = $this->Geral_model->atingido_geral(2);
        $data['atingido_acess'] = $this->Geral_model->atingido_geral(3);

        #CONTAGEM
        $data['dias_total'] = $this->Geral_model->dias_uteis_total();
        $data['dias_restante'] = $this->Geral_model->dias_uteis_restante();

        #QUADRO GERAL
        $data['quadro'] = $this->Geral_model->quadro_geral();

        
        
        # ---------------------------------------------------------------------------------------- #
        # 						   CONTROLE DE RESULTADO (VENDAS REALIZADAS)				       #
        # ---------------------------------------------------------------------------------------- #

        # LOJA CENTRO #

        $soma_quadro['servico_CENTRO'] = array
        (
        	'real_servico_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA CENTRO', 1)->remuneracao_vendas_servicos,
        );

        $soma_quadro['produto_CENTRO'] = array
        (
        	'real_produto_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA CENTRO', 2)->valor_vendas_produtos,
        );

        $soma_quadro['acessorio_CENTRO'] = array
        (
        	'real_acessorio_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA CENTRO', 3)->valor_vendas_produtos,
        );



        # LOJA SHOPPING #

        $soma_quadro['servico_SHOPPING'] = array
        (
        	'real_servico_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA SHOPPING', 1)->remuneracao_vendas_servicos,
        );

        $soma_quadro['produto_SHOPPING'] = array
        (
        	'real_produto_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA SHOPPING', 2)->valor_vendas_produtos,
        );

        $soma_quadro['acessorio_SHOPPING'] = array
        (
        	'real_acessorio_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA SHOPPING', 3)->valor_vendas_produtos,
        );



        # LOJA JANUÁRIA #

        $soma_quadro['servico_JANUARIA'] = array
        (
        	'real_servico_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA JANUÁRIA', 1)->remuneracao_vendas_servicos,
        );

        $soma_quadro['produto_JANUARIA'] = array
        (
        	'real_produto_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA JANUÁRIA', 2)->valor_vendas_produtos,
        );

        $soma_quadro['acessorio_JANUARIA'] = array
        (
        	'real_acessorio_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA JANUÁRIA', 3)->valor_vendas_produtos,
        );



        # LOJA SÃO FRANCISCO #

        $soma_quadro['servico_S_FRANCISCO'] = array
        (
        	'real_servico_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA SÃO FRANCISCO', 1)->remuneracao_vendas_servicos,
        );

        $soma_quadro['produto_S_FRANCISCO'] = array
        (
        	'real_produto_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA SÃO FRANCISCO', 2)->valor_vendas_produtos,
        );

        $soma_quadro['acessorio_S_FRANCISCO'] = array
        (
        	'real_acessorio_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA SÃO FRANCISCO', 3)->valor_vendas_produtos,
        );



         # LOJA CORAÇÃO DE JESUS #

        $soma_quadro['servico_C_JESUS'] = array
        (
        	'real_servico_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA CORAÇÃO DE JESUS', 1)->remuneracao_vendas_servicos,
        );

        $soma_quadro['produto_C_JESUS'] = array
        (
        	'real_produto_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA CORAÇÃO DE JESUS', 2)->valor_vendas_produtos,
        );

        $soma_quadro['acessorio_C_JESUS'] = array
        (
        	'real_acessorio_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA CORAÇÃO DE JESUS', 3)->valor_vendas_produtos,
        );



         # LOJA PORTEIRINHA #

        $soma_quadro['servico_PORTEIRINHA'] = array
        (
        	'real_servico_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA PORTEIRINHA', 1)->remuneracao_vendas_servicos,
        );

        $soma_quadro['produto_PORTEIRINHA'] = array
        (
        	'real_produto_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA PORTEIRINHA', 2)->valor_vendas_produtos,
        );

        $soma_quadro['acessorio_PORTEIRINHA'] = array
        (
        	'real_acessorio_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA PORTEIRINHA', 3)->valor_vendas_produtos,
        );


         # LOJA JANAÚBA #

        $soma_quadro['servico_JANAUBA'] = array
        (
        	'real_servico_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA JANAÚBA', 1)->remuneracao_vendas_servicos,
        );

        $soma_quadro['produto_JANAUBA'] = array
        (
        	'real_produto_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA JANAÚBA', 2)->valor_vendas_produtos,
        );

        $soma_quadro['acessorio_JANAUBA'] = array
        (
        	'real_acessorio_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA JANAÚBA', 3)->valor_vendas_produtos,
        );


         # LOJA JAÍBA #

        $soma_quadro['servico_JAIBA'] = array
        (
        	'real_servico_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA JAÍBA', 1)->remuneracao_vendas_servicos,
        );

        $soma_quadro['produto_JAIBA'] = array
        (
        	'real_produto_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA JAÍBA', 2)->valor_vendas_produtos,
        );

        $soma_quadro['acessorio_JAIBA'] = array
        (
        	'real_acessorio_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA JAÍBA', 3)->valor_vendas_produtos,
        );



         # LOJA BRASILIA DE MINAS #

        $soma_quadro['servico_B_MINAS'] = array
        (
        	'real_servico_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA BRASÍLIA DE MINAS', 1)->remuneracao_vendas_servicos,
        );

        $soma_quadro['produto_B_MINAS'] = array
        (
        	'real_produto_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA BRASÍLIA DE MINAS', 2)->valor_vendas_produtos,
        );

        $soma_quadro['acessorio_B_MINAS'] = array
        (
        	'real_acessorio_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA BRASÍLIA DE MINAS', 3)->valor_vendas_produtos,
        );


         # LOJA MANGA #

        $soma_quadro['servico_MANGA'] = array
        (
        	'real_servico_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA MANGA', 1)->remuneracao_vendas_servicos,
        );

        $soma_quadro['produto_MANGA'] = array
        (
        	'real_produto_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA MANGA', 2)->valor_vendas_produtos,
        );

        $soma_quadro['acessorio_MANGA'] = array
        (
        	'real_acessorio_quadro' => $this->Geral_model->quadro_busca_soma_realizado('LOJA MANGA', 3)->valor_vendas_produtos,
        );


        # ---------------------------------------------------------------------------------------- #
        # 									CONTROLE DE METAS								       #
        # ---------------------------------------------------------------------------------------- #

        # LOJA CENTRO #

        $meta['meta_servico_CENTRO'] = array
        (
        	'meta_servico_quadro' => $this->Geral_model->quadro_busca_meta('LOJA CENTRO', 1)->servico_meta,
        );

        $meta['meta_produto_CENTRO'] = array
        (
        	'meta_produto_quadro' => $this->Geral_model->quadro_busca_meta('LOJA CENTRO', 2)->produto_meta,
        );

        $meta['meta_acessorio_CENTRO'] = array
        (
        	'meta_acessorio_quadro' => $this->Geral_model->quadro_busca_meta('LOJA CENTRO', 3)->acessorio_meta,
        );

        # LOJA SHOPPING #

        $meta['meta_servico_SHOPPING'] = array
        (
        	'meta_servico_quadro' => $this->Geral_model->quadro_busca_meta('LOJA SHOPPING', 1)->servico_meta,
        );

        $meta['meta_produto_SHOPPING'] = array
        (
        	'meta_produto_quadro' => $this->Geral_model->quadro_busca_meta('LOJA SHOPPING', 2)->produto_meta,
        );

        $meta['meta_acessorio_SHOPPING'] = array
        (
        	'meta_acessorio_quadro' => $this->Geral_model->quadro_busca_meta('LOJA SHOPPING', 3)->acessorio_meta,
        );

        # LOJA JANUÁRIA #

        $meta['meta_servico_JANUARIA'] = array
        (
        	'meta_servico_quadro' => $this->Geral_model->quadro_busca_meta('LOJA JANUÁRIA', 1)->servico_meta,
        );

        $meta['meta_produto_JANUARIA'] = array
        (
        	'meta_produto_quadro' => $this->Geral_model->quadro_busca_meta('LOJA JANUÁRIA', 2)->produto_meta,
        );

        $meta['meta_acessorio_JANUARIA'] = array
        (
        	'meta_acessorio_quadro' => $this->Geral_model->quadro_busca_meta('LOJA JANUÁRIA', 3)->acessorio_meta,
        );

        # LOJA SÃO FRANCISCO #

        $meta['meta_servico_S_FRANCISCO'] = array
        (
        	'meta_servico_quadro' => $this->Geral_model->quadro_busca_meta('LOJA SÃO FRANCISCO', 1)->servico_meta,
        );

        $meta['meta_produto_S_FRANCISCO'] = array
        (
        	'meta_produto_quadro' => $this->Geral_model->quadro_busca_meta('LOJA SÃO FRANCISCO', 2)->produto_meta,
        );

        $meta['meta_acessorio_S_FRANCISCO'] = array
        (
        	'meta_acessorio_quadro' => $this->Geral_model->quadro_busca_meta('LOJA SÃO FRANCISCO', 3)->acessorio_meta,
        );

        # LOJA CORAÇÃO DE JESUS #

        $meta['meta_servico_C_JESUS'] = array
        (
        	'meta_servico_quadro' => $this->Geral_model->quadro_busca_meta('LOJA CORAÇÃO DE JESUS', 1)->servico_meta,
        );

        $meta['meta_produto_C_JESUS'] = array
        (
        	'meta_produto_quadro' => $this->Geral_model->quadro_busca_meta('LOJA CORAÇÃO DE JESUS', 2)->produto_meta,
        );

        $meta['meta_acessorio_C_JESUS'] = array
        (
        	'meta_acessorio_quadro' => $this->Geral_model->quadro_busca_meta('LOJA CORAÇÃO DE JESUS', 3)->acessorio_meta,
        );

        # LOJA PORTEIRINHA #

        $meta['meta_servico_PORTEIRINHA'] = array
        (
        	'meta_servico_quadro' => $this->Geral_model->quadro_busca_meta('LOJA PORTEIRINHA', 1)->servico_meta,
        );

        $meta['meta_produto_PORTEIRINHA'] = array
        (
        	'meta_produto_quadro' => $this->Geral_model->quadro_busca_meta('LOJA PORTEIRINHA', 2)->produto_meta,
        );

        $meta['meta_acessorio_PORTEIRINHA'] = array
        (
        	'meta_acessorio_quadro' => $this->Geral_model->quadro_busca_meta('LOJA PORTEIRINHA', 3)->acessorio_meta,
        );

        # LOJA JANAÚBA #

        $meta['meta_servico_JANAUBA'] = array
        (
        	'meta_servico_quadro' => $this->Geral_model->quadro_busca_meta('LOJA JANAÚBA', 1)->servico_meta,
        );

        $meta['meta_produto_JANAUBA'] = array
        (
        	'meta_produto_quadro' => $this->Geral_model->quadro_busca_meta('LOJA JANAÚBA', 2)->produto_meta,
        );

        $meta['meta_acessorio_JANAUBA'] = array
        (
        	'meta_acessorio_quadro' => $this->Geral_model->quadro_busca_meta('LOJA JANAÚBA', 3)->acessorio_meta,
        );

        # LOJA JAÍBA #

        $meta['meta_servico_JAIBA'] = array
        (
        	'meta_servico_quadro' => $this->Geral_model->quadro_busca_meta('LOJA JAÍBA', 1)->servico_meta,
        );

        $meta['meta_produto_JAIBA'] = array
        (
        	'meta_produto_quadro' => $this->Geral_model->quadro_busca_meta('LOJA JAÍBA', 2)->produto_meta,
        );

        $meta['meta_acessorio_JAIBA'] = array
        (
        	'meta_acessorio_quadro' => $this->Geral_model->quadro_busca_meta('LOJA JAÍBA', 3)->acessorio_meta,
        );

        # LOJA BRASÍLIA DE MINAS #

        $meta['meta_servico_B_MINAS'] = array
        (
        	'meta_servico_quadro' => $this->Geral_model->quadro_busca_meta('LOJA BRASÍLIA DE MINAS', 1)->servico_meta,
        );

        $meta['meta_produto_B_MINAS'] = array
        (
        	'meta_produto_quadro' => $this->Geral_model->quadro_busca_meta('LOJA BRASÍLIA DE MINAS', 2)->produto_meta,
        );

        $meta['meta_acessorio_B_MINAS'] = array
        (
        	'meta_acessorio_quadro' => $this->Geral_model->quadro_busca_meta('LOJA BRASÍLIA DE MINAS', 3)->acessorio_meta,
        );

        # LOJA MANGA #

        $meta['meta_servico_MANGA'] = array
        (
        	'meta_servico_quadro' => $this->Geral_model->quadro_busca_meta('LOJA MANGA', 1)->servico_meta,
        );

        $meta['meta_produto_MANGA'] = array
        (
        	'meta_produto_quadro' => $this->Geral_model->quadro_busca_meta('LOJA MANGA', 2)->produto_meta,
        );

        $meta['meta_acessorio_MANGA'] = array
        (
        	'meta_acessorio_quadro' => $this->Geral_model->quadro_busca_meta('LOJA MANGA', 3)->acessorio_meta,
        );


        # ---------------------------------------------------------------------------------------- #
        # 				     				CONTROLE DE TENDÊNCIA								   #
        # ---------------------------------------------------------------------------------------- #

        # LOJA CENTRO #

        $tendencia['tend_servico_CENTRO'] = array
        (
        	'tendencia_servico_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA CENTRO', 1)
        );

        $tendencia['tend_produto_CENTRO'] = array
        (
        	'tendencia_produto_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA CENTRO', 2)
        );

        $tendencia['tend_acessorio_CENTRO'] = array
        (
        	'tendencia_acessorio_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA CENTRO', 3)
        );

        # LOJA SHOPPING #
        
        $tendencia['tend_servico_SHOPPING'] = array
        (
        	'tendencia_servico_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA SHOPPING', 1)
        );

        $tendencia['tend_produto_SHOPPING'] = array
        (
        	'tendencia_produto_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA SHOPPING', 2)
        );

        $tendencia['tend_acessorio_SHOPPING'] = array
        (
        	'tendencia_acessorio_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA SHOPPING', 3)
        );

        # LOJA JANUÁRIA #
        
        $tendencia['tend_servico_JANUARIA'] = array
        (
        	'tendencia_servico_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA JANUÁRIA', 1)
        );

        $tendencia['tend_produto_JANUARIA'] = array
        (
        	'tendencia_produto_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA JANUÁRIA', 2)
        );

        $tendencia['tend_acessorio_JANUARIA'] = array
        (
        	'tendencia_acessorio_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA JANUÁRIA', 3)
        );

        # LOJA SÃO FRANCISCO #
        
        $tendencia['tend_servico_S_FRANCISCO'] = array
        (
        	'tendencia_servico_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA SÃO FRANCISCO', 1)
        );

        $tendencia['tend_produto_S_FRANCISCO'] = array
        (
        	'tendencia_produto_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA SÃO FRANCISCO', 2)
        );

        $tendencia['tend_acessorio_S_FRANCISCO'] = array
        (
        	'tendencia_acessorio_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA SÃO FRANCISCO', 3)
        );

         # LOJA CORAÇÃO DE JESUS #
        
        $tendencia['tend_servico_C_JESUS'] = array
        (
        	'tendencia_servico_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA CORAÇÃO DE JESUS', 1)
        );

        $tendencia['tend_produto_C_JESUS'] = array
        (
        	'tendencia_produto_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA CORAÇÃO DE JESUS', 2)
        );

        $tendencia['tend_acessorio_C_JESUS'] = array
        (
        	'tendencia_acessorio_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA CORAÇÃO DE JESUS', 3)
        );

         # LOJA PORTEIRINHA #
        
        $tendencia['tend_servico_PORTEIRINHA'] = array
        (
        	'tendencia_servico_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA PORTEIRINHA', 1)
        );

        $tendencia['tend_produto_PORTEIRINHA'] = array
        (
        	'tendencia_produto_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA PORTEIRINHA', 2)
        );

        $tendencia['tend_acessorio_PORTEIRINHA'] = array
        (
        	'tendencia_acessorio_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA PORTEIRINHA', 3)
        );

         # LOJA JANAÚBA #
        
        $tendencia['tend_servico_JANAUBA'] = array
        (
        	'tendencia_servico_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA JANAÚBA', 1)
        );

        $tendencia['tend_produto_JANAUBA'] = array
        (
        	'tendencia_produto_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA JANAÚBA', 2)
        );

        $tendencia['tend_acessorio_JANAUBA'] = array
        (
        	'tendencia_acessorio_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA JANAÚBA', 3)
        );

         # LOJA JAÍBA #
        
        $tendencia['tend_servico_JAIBA'] = array
        (
        	'tendencia_servico_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA JAÍBA', 1)
        );

        $tendencia['tend_produto_JAIBA'] = array
        (
        	'tendencia_produto_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA JAÍBA', 2)
        );

        $tendencia['tend_acessorio_JAIBA'] = array
        (
        	'tendencia_acessorio_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA JAÍBA', 3)
        );

         # LOJA BRASILIA DE MINAS #
        
        $tendencia['tend_servico_B_MINAS'] = array
        (
        	'tendencia_servico_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA BRASILIA DE MINAS', 1)
        );

        $tendencia['tend_produto_B_MINAS'] = array
        (
        	'tendencia_produto_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA BRASILIA DE MINAS', 2)
        );

        $tendencia['tend_acessorio_B_MINAS'] = array
        (
        	'tendencia_acessorio_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA BRASILIA DE MINAS', 3)
        );

         # LOJA MANGA #
        
        $tendencia['tend_servico_MANGA'] = array
        (
        	'tendencia_servico_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA MANGA', 1)
        );

        $tendencia['tend_produto_MANGA'] = array
        (
        	'tendencia_produto_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA MANGA', 2)
        );

        $tendencia['tend_acessorio_MANGA'] = array
        (
        	'tendencia_acessorio_quadro' => $this->Geral_model->quadro_calcula_tendencia('LOJA MANGA', 3)
        );

        # ---------------------------------------------------------------------------------------- #
        #                       CONTROLE DO RANKING CN'S TABELAS E GRÁFICOS                        #
        # ---------------------------------------------------------------------------------------- #

        $data['melhores_serv'] = $this->Geral_model->busca_melhores(1);
        $data['melhores_prod'] = $this->Geral_model->busca_melhores(2);
        $data['melhores_acess'] = $this->Geral_model->busca_melhores(3);
        
        $data['grupos'] = $this->Geral_model->busca_grupo();
        $data['tipo_produto'] = $this->Geral_model->busca_tipo_produto();

        $data['perca_receita'] = $this->Geral_model->perca_receita();


        

        # ---------------------------------------------------------------------------------------- #
        # 				     CONTROLE DO QUADRO GERAL (ATUALIZAÇÃO DE INFORMAÇÕES)				   #
        # ---------------------------------------------------------------------------------------- #

        # LOJA CENTRO #

        # VENDAS REALIZADAS #
        $this->Geral_model->quadro_grava_centro($soma_quadro['servico_CENTRO']);
        $this->Geral_model->quadro_grava_centro($soma_quadro['produto_CENTRO']);
        $this->Geral_model->quadro_grava_centro($soma_quadro['acessorio_CENTRO']);

        # META #
        $this->Geral_model->quadro_grava_centro($meta['meta_servico_CENTRO']);
        $this->Geral_model->quadro_grava_centro($meta['meta_produto_CENTRO']);
        $this->Geral_model->quadro_grava_centro($meta['meta_acessorio_CENTRO']);

        # TENDÊNCIA #
  		$this->Geral_model->quadro_grava_centro($tendencia['tend_servico_CENTRO']);
  		$this->Geral_model->quadro_grava_centro($tendencia['tend_produto_CENTRO']);
  		$this->Geral_model->quadro_grava_centro($tendencia['tend_acessorio_CENTRO']);       


        # LOJA SHOPPING #

        # VENDAS REALIZADAS #
        $this->Geral_model->quadro_grava_shopping($soma_quadro['servico_SHOPPING']);
        $this->Geral_model->quadro_grava_shopping($soma_quadro['produto_SHOPPING']);
        $this->Geral_model->quadro_grava_shopping($soma_quadro['acessorio_SHOPPING']);

        # META #
        $this->Geral_model->quadro_grava_shopping($meta['meta_servico_SHOPPING']);
        $this->Geral_model->quadro_grava_shopping($meta['meta_produto_SHOPPING']);
        $this->Geral_model->quadro_grava_shopping($meta['meta_acessorio_SHOPPING']);

        # TENDÊNCIA #
        $this->Geral_model->quadro_grava_shopping($tendencia['tend_servico_SHOPPING']);
        $this->Geral_model->quadro_grava_shopping($tendencia['tend_produto_SHOPPING']);
        $this->Geral_model->quadro_grava_shopping($tendencia['tend_acessorio_SHOPPING']);

        # LOJA JANUÁRIA #

        # VENDAS REALIZADAS #
        $this->Geral_model->quadro_grava_januaria($soma_quadro['servico_JANUARIA']);
        $this->Geral_model->quadro_grava_januaria($soma_quadro['produto_JANUARIA']);
        $this->Geral_model->quadro_grava_januaria($soma_quadro['acessorio_JANUARIA']);

        # META #
        $this->Geral_model->quadro_grava_januaria($meta['meta_servico_JANUARIA']);
        $this->Geral_model->quadro_grava_januaria($meta['meta_produto_JANUARIA']);
        $this->Geral_model->quadro_grava_januaria($meta['meta_acessorio_JANUARIA']);

        # TENDÊNCIA #
        $this->Geral_model->quadro_grava_januaria($tendencia['tend_servico_JANUARIA']);
        $this->Geral_model->quadro_grava_januaria($tendencia['tend_produto_JANUARIA']);
        $this->Geral_model->quadro_grava_januaria($tendencia['tend_acessorio_JANUARIA']);

        # LOJA SÃO FRANCISCO #

        # VENDAS REALIZADAS #
        $this->Geral_model->quadro_grava_s_francisco($soma_quadro['servico_S_FRANCISCO']);
        $this->Geral_model->quadro_grava_s_francisco($soma_quadro['produto_S_FRANCISCO']);
        $this->Geral_model->quadro_grava_s_francisco($soma_quadro['acessorio_S_FRANCISCO']);

        # META #
        $this->Geral_model->quadro_grava_s_francisco($meta['meta_servico_S_FRANCISCO']);
        $this->Geral_model->quadro_grava_s_francisco($meta['meta_produto_S_FRANCISCO']);
        $this->Geral_model->quadro_grava_s_francisco($meta['meta_acessorio_S_FRANCISCO']);

        # TENDÊNCIA #
        $this->Geral_model->quadro_grava_s_francisco($tendencia['tend_servico_S_FRANCISCO']);
        $this->Geral_model->quadro_grava_s_francisco($tendencia['tend_produto_S_FRANCISCO']);
        $this->Geral_model->quadro_grava_s_francisco($tendencia['tend_acessorio_S_FRANCISCO']);

       	# LOJA CORAÇÃO DE JESUS #
       	
       	# VENDAS REALIZADAS #
        $this->Geral_model->quadro_grava_c_jesus($soma_quadro['servico_C_JESUS']);
        $this->Geral_model->quadro_grava_c_jesus($soma_quadro['produto_C_JESUS']);
        $this->Geral_model->quadro_grava_c_jesus($soma_quadro['acessorio_C_JESUS']);

        # META #
        $this->Geral_model->quadro_grava_c_jesus($meta['meta_servico_C_JESUS']);
        $this->Geral_model->quadro_grava_c_jesus($meta['meta_produto_C_JESUS']);
        $this->Geral_model->quadro_grava_c_jesus($meta['meta_acessorio_C_JESUS']);

        # TENDÊNCIA #
        $this->Geral_model->quadro_grava_c_jesus($tendencia['tend_servico_C_JESUS']);
        $this->Geral_model->quadro_grava_c_jesus($tendencia['tend_produto_C_JESUS']);
        $this->Geral_model->quadro_grava_c_jesus($tendencia['tend_acessorio_C_JESUS']);

        # LOJA PORTEIRINHA #
        
        # VENDAS REALIZADAS #
        $this->Geral_model->quadro_grava_porteirinha($soma_quadro['servico_PORTEIRINHA']);
        $this->Geral_model->quadro_grava_porteirinha($soma_quadro['produto_PORTEIRINHA']);
        $this->Geral_model->quadro_grava_porteirinha($soma_quadro['acessorio_PORTEIRINHA']);

        # META #
        $this->Geral_model->quadro_grava_porteirinha($meta['meta_servico_PORTEIRINHA']);
        $this->Geral_model->quadro_grava_porteirinha($meta['meta_produto_PORTEIRINHA']);
        $this->Geral_model->quadro_grava_porteirinha($meta['meta_acessorio_PORTEIRINHA']);

        # TENDÊNCIA #
        $this->Geral_model->quadro_grava_porteirinha($tendencia['tend_servico_PORTEIRINHA']);
        $this->Geral_model->quadro_grava_porteirinha($tendencia['tend_produto_PORTEIRINHA']);
        $this->Geral_model->quadro_grava_porteirinha($tendencia['tend_acessorio_PORTEIRINHA']);

        # LOJA JANAÚBA #

        # VENDAS REALIZADAS #
        $this->Geral_model->quadro_grava_janauba($soma_quadro['servico_JANAUBA']);
        $this->Geral_model->quadro_grava_janauba($soma_quadro['produto_JANAUBA']);
        $this->Geral_model->quadro_grava_janauba($soma_quadro['acessorio_JANAUBA']);

        # META #
        $this->Geral_model->quadro_grava_janauba($meta['meta_servico_JANAUBA']);
        $this->Geral_model->quadro_grava_janauba($meta['meta_produto_JANAUBA']);
        $this->Geral_model->quadro_grava_janauba($meta['meta_acessorio_JANAUBA']);

        # TENDÊNCIA #
        $this->Geral_model->quadro_grava_janauba($tendencia['tend_servico_JANAUBA']);
        $this->Geral_model->quadro_grava_janauba($tendencia['tend_produto_JANAUBA']);
        $this->Geral_model->quadro_grava_janauba($tendencia['tend_acessorio_JANAUBA']);

        # LOJA JAÍBA #

        # VENDAS REALIZADAS #
        $this->Geral_model->quadro_grava_jaiba($soma_quadro['servico_JAIBA']);
        $this->Geral_model->quadro_grava_jaiba($soma_quadro['produto_JAIBA']);
        $this->Geral_model->quadro_grava_jaiba($soma_quadro['acessorio_JAIBA']);

        # META #
        $this->Geral_model->quadro_grava_jaiba($meta['meta_servico_JAIBA']);
        $this->Geral_model->quadro_grava_jaiba($meta['meta_produto_JAIBA']);
        $this->Geral_model->quadro_grava_jaiba($meta['meta_acessorio_JAIBA']);

        # TENDÊNCIA #
        $this->Geral_model->quadro_grava_jaiba($tendencia['tend_servico_JAIBA']);
        $this->Geral_model->quadro_grava_jaiba($tendencia['tend_produto_JAIBA']);
        $this->Geral_model->quadro_grava_jaiba($tendencia['tend_acessorio_JAIBA']);

        # LOJA BRASÍLIA DE MINAS #
        
        # VENDAS REALIZADAS #
        $this->Geral_model->quadro_grava_b_minas($soma_quadro['servico_B_MINAS']);
        $this->Geral_model->quadro_grava_b_minas($soma_quadro['produto_B_MINAS']);
        $this->Geral_model->quadro_grava_b_minas($soma_quadro['acessorio_B_MINAS']);

        # META #
        $this->Geral_model->quadro_grava_b_minas($meta['meta_servico_B_MINAS']);
        $this->Geral_model->quadro_grava_b_minas($meta['meta_produto_B_MINAS']);
        $this->Geral_model->quadro_grava_b_minas($meta['meta_acessorio_B_MINAS']);

        # TENDÊNCIA #
        $this->Geral_model->quadro_grava_b_minas($tendencia['tend_servico_B_MINAS']);
        $this->Geral_model->quadro_grava_b_minas($tendencia['tend_produto_B_MINAS']);
        $this->Geral_model->quadro_grava_b_minas($tendencia['tend_acessorio_B_MINAS']);

        # LOJA MANGA #

        # VENDAS REALIZADAS #
        $this->Geral_model->quadro_grava_manga($soma_quadro['servico_MANGA']);
        $this->Geral_model->quadro_grava_manga($soma_quadro['produto_MANGA']);
        $this->Geral_model->quadro_grava_manga($soma_quadro['acessorio_MANGA']);

        # META #
        $this->Geral_model->quadro_grava_manga($meta['meta_servico_MANGA']);
        $this->Geral_model->quadro_grava_manga($meta['meta_produto_MANGA']);
        $this->Geral_model->quadro_grava_manga($meta['meta_acessorio_MANGA']);

        # TENDÊNCIA #
        $this->Geral_model->quadro_grava_manga($tendencia['tend_servico_MANGA']);
        $this->Geral_model->quadro_grava_manga($tendencia['tend_produto_MANGA']);
        $this->Geral_model->quadro_grava_manga($tendencia['tend_acessorio_MANGA']);




        $this->usuario_view('Geral_view', $data);
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

    function tendencia_geral($tipo)
    {
        
        if ($tipo == 1)
        {
            $real = $this->Geral_model->soma_serv()->remuneracao_vendas_servicos;
            $total = $this->Geral_model->dias_uteis_total();
            $restante = $this->Geral_model->dias_uteis_restante();
            $meta = $this->Geral_model->quadro_busca_meta('GERAL', $tipo)->servico_meta;
            if(($total - $restante) == 0)
            {
                $percorrido = 1;
            }
            else
            {
                $percorrido = $total - $restante;
            }
            $tendenciaGeral = ((($real / $percorrido) * $total) / $meta) * 100;
            return $tendenciaGeral;
        }

        elseif ($tipo == 2) 
        {
            $real = $this->Geral_model->soma_prod()->valor_vendas_produtos;
            $total = $this->Geral_model->dias_uteis_total();
            $restante = $this->Geral_model->dias_uteis_restante();
            $meta = $this->Geral_model->quadro_busca_meta('GERAL', $tipo)->produto_meta;
            if(($total - $restante) == 0)
            {
                $percorrido = 1;
            }
            else
            {
                $percorrido = $total - $restante;
            }
            $tendenciaGeral = ((($real / $percorrido) * $total) / $meta) * 100;
            return $tendenciaGeral;
        }

        elseif ($tipo == 3) 
        {
            $real = $this->Geral_model->soma_acess()->valor_vendas_produtos;
            $total = $this->Geral_model->dias_uteis_total();
            $restante = $this->Geral_model->dias_uteis_restante();
            $meta = $this->Geral_model->quadro_busca_meta('GERAL', $tipo)->acessorio_meta;
            if(($total - $restante) == 0)
            {
                $percorrido = 1;
            }
            else
            {
                $percorrido = $total - $restante;
            }
            $tendenciaGeral = ((($real / $percorrido) * $total) / $meta) * 100;
            return $tendenciaGeral;
        }


    }



   

    

}