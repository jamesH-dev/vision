<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
        </div><!-- FIM DO PAGE HEADER -->
        <div class="row">
          <div class="col">
            <div class="card card-stats card-round">
              <div class="card-body ">
                <div class="row align-items-center"> <!--ROW VENDAS E ÍCONE 1-->
                  <div class="col-icon">
                    <div class="icon-big text-center icon-primary bubble-shadow-small">
                      <i class="fas fa-clipboard-check"></i>
                    </div>
                  </div>
                  <div class="col col-stats ml-3 ml-sm-0">
                    <div class="numbers">
                      <p class="card-category">Vendas Serviços</p>
                      <h4 class="card-title">R$ <?= number_format(floatval($soma_serv->remuneracao_vendas_servicos),2,',','.')?></h4>
                    </div>
                    <div class="numbers text-right col">
                      <i class="fas fa-chart-pie"></i>
                      <h4 class="card-title"><?= number_format((($soma_serv->remuneracao_vendas_servicos / $serv_geral->remuneracao_vendas_servicos)*100),2,',','.') ?>%</h4>
                    </div>                      
                  </div>
                </div>
                <div class="row align-items-center"> <!--ROW ATINGIMENTO E TENDÊNCIA 1-->
                  <div class="col col-stats ml-3 ml-sm-0"> <!--COL ATINGIMENTO E TENDÊNCIA 1-->
                    <div class="col-md-6">
                      <div class="numbers"> <!--NUMBERS ATINGIMENTO E TENDÊNCIA 2-->
                        <hr>
                        <div class="stats text-center" style="font-size: 11px;"> <!--STATS ATINGIMENTO E TENDÊNCIA 2-->      
                          <strong>Antingimento</strong> <br>
                            <i class="fas fa-circle
                              <?= (floatval($atingido_serv) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($atingido_serv) >70 and
                                   floatval($atingido_serv) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($atingido_serv) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 11px;">
                            </i> <?=number_format($atingido_serv,2,',','.')?>%
                        </div>
                      </div> 
                    </div>
                    <div class="col-md-6">
                      <div class="numbers"> <!--NUMBERS ATINGIMENTO E TENDÊNCIA 2-->
                        <hr>
                        <div class="stats text-center" style="font-size: 11px;"> <!--STATS ATINGIMENTO E TENDÊNCIA 2-->      
                          <strong>Tendência</strong> <br>
                            <i class="fas fa-circle
                              <?= (floatval($tendencia_serv) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($tendencia_serv) >70 and
                                   floatval($tendencia_serv) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($tendencia_serv) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 11px;">
                            </i> <?php echo number_format($tendencia_serv,2,',','.')."%";?>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- FIM DA PRIMEIRA COL RESULTADOS GERAIS -->
          <div class="col">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row align-items-center"><!--ROW VENDAS E ÍCONE 2-->
                  <div class="col-icon">
                    <div class="icon-big text-center icon-info bubble-shadow-small">
                      <i class="fas fa-mobile-alt"></i>
                    </div>
                  </div>
                  <div class="col col-stats ml-3 ml-sm-0">
                    <div class="numbers">
                      <p class="card-category">Vendas Aparelhos</p>
                      <h4 class="card-title">R$ <?= number_format(floatval($soma_prod->valor_vendas_produtos),2,',','.')?></h4>
                    </div>
                    <div class="numbers text-right col">
                      <i class="fas fa-chart-pie"></i>
                      <h4 class="card-title"><?= number_format((($soma_prod->valor_vendas_produtos / $prod_geral->valor_vendas_produtos)*100),2,',','.') ?>%</h4>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center"> <!--ROW ATINGIMENTO E TENDÊNCIA 2-->
                  <div class="col col-stats ml-3 ml-sm-0"> <!--COL ATINGIMENTO E TENDÊNCIA 2-->
                    <div class="col-md-6">
                      <div class="numbers"> <!--NUMBERS ATINGIMENTO E TENDÊNCIA 2-->
                        <hr>
                        <div class="stats text-center" style="font-size: 11px;"> <!--STATS ATINGIMENTO E TENDÊNCIA 2-->      
                          <strong>Antingimento</strong> <br>
                            <i class="fas fa-circle 
                              <?= (floatval($atingido_prod) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($atingido_prod) >70 and
                                   floatval($atingido_prod) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($atingido_prod) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 11px;">
                            </i> <?=number_format($atingido_prod,2,',','.')?>%
                        </div>
                      </div> 
                    </div>
                    <div class="col-md-6">
                      <div class="numbers"> <!--NUMBERS ATINGIMENTO E TENDÊNCIA 2-->
                        <hr>
                        <div class="stats text-center" style="font-size: 11px;"> <!--STATS ATINGIMENTO E TENDÊNCIA 2-->      
                          <strong>Tendência</strong> <br>
                            <i class="fas fa-circle
                              <?= (floatval($tendencia_prod) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($tendencia_prod) >70 and
                                   floatval($tendencia_prod) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($tendencia_prod) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 11px;">
                            </i> <?php echo number_format($tendencia_prod,2,',','.')."%";?>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- FIM DA SEGUNDA COL RESULTADOS GERAIS -->
          <div class="col">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row align-items-center"><!--ROW VENDAS E ÍCONE 3-->
                  <div class="col-icon">
                    <div class="icon-big text-center icon-primary bubble-shadow-small">
                      <i class="fas fa-wallet"></i>
                    </div>
                  </div>
                  <div class="col col-stats ml-3 ml-sm-0">
                    <div class="numbers">
                      <p class="card-category">Vendas Acessórios</p>
                      <h4 class="card-title">R$ <?= number_format(floatval($soma_acess->valor_vendas_produtos),2,',','.')?></h4>
                    </div>
                    <div class="numbers text-right col">
                      <i class="fas fa-chart-pie"></i>
                      <h4 class="card-title"><?= number_format((($soma_acess->valor_vendas_produtos / $acess_geral->valor_vendas_produtos)*100),2,',','.') ?>%</h4>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center"> <!--ROW ATINGIMENTO E TENDÊNCIA 3-->
                  <div class="col col-stats ml-3 ml-sm-0"> <!--COL ATINGIMENTO E TENDÊNCIA 3-->
                    <div class="col-md-6">
                      <div class="numbers"> <!--NUMBERS ATINGIMENTO E TENDÊNCIA 3-->
                        <hr>
                        <div class="stats text-center" style="font-size: 11px;"> <!--STATS ATINGIMENTO E TENDÊNCIA 3-->      
                          <strong>Antingimento</strong> <br>
                            <i class="fas fa-circle
                              <?= (floatval($atingido_acess) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($atingido_acess) >70 and
                                   floatval($atingido_acess) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($atingido_acess) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 11px;">
                            </i> <?=number_format($atingido_acess,2,',','.')?>%
                        </div>
                      </div> 
                    </div>
                    <div class="col-md-6">
                      <div class="numbers"> <!--NUMBERS ATINGIMENTO E TENDÊNCIA 3-->
                        <hr>
                        <div class="stats text-center" style="font-size: 11px;"> <!--STATS ATINGIMENTO E TENDÊNCIA 3-->      
                          <strong>Tendência</strong> <br>
                            <i class="fas fa-circle
                              <?= (floatval($tendencia_acess) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($tendencia_acess) >70 and
                                   floatval($tendencia_acess) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($tendencia_acess) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 11px;">
                            </i> <?php echo number_format($tendencia_acess,2,',','.')."%";?>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>                        
          </div><!-- FIM DA TERCEIRA COL RESULTADOS GERAIS -->
        </div><!-- FIM DA ROL RESULTADOS -->
        <div class="row">
          <div class="col">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <div class="icon-big text-center">
                      <i class="
                        <?= (($media_dia_serv / $atingimento_serv) <= 0.5) ? "text-danger fas fa-exclamation-circle" : ""?>
                        <?= ((($media_dia_serv / $atingimento_serv) > 0.5) and 
                            (($media_dia_serv / $atingimento_serv) <=0.9))  ? "text-warning fas fa-exclamation-triangle" : ""?>
                        <?= (($media_dia_serv / $atingimento_serv) > 0.9) ? "text-success fas fa-check-circle" : "" ?>">
                      </i>
                    </div>
                  </div>
                  <div class="col col-stats">
                    <div class="numbers">
                      <p class="card-category">Necessidade Dia</p>
                      <h5>
                        Receita: R$ <?= number_format($atingimento_serv,2,',','.') ?>
                        <br> 
                        Físico: <?= round(($atingimento_serv / $media_serv->media)) ?> acessos
                      </h5>
                    </div>
                    <div class="col col-stats d-block d-sm-none ">
                    <div class="numbers">
                      <h4 class="card-title text-right">Serviços</h4>
                    </div>
                  </div>
                  </div>                    
                </div>
              </div>
            </div>
          </div><!-- FIM DETALHES SERVIÇOS -->
          <div class="col">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <div class="icon-big text-center">
                      <i class="
                        <?= (($media_dia_prod / $atingimento_prod) <= 0.5) ? "text-danger fas fa-exclamation-circle" : ""?>
                        <?= ((($media_dia_prod / $atingimento_prod) > 0.5) and 
                            (($media_dia_prod / $atingimento_prod) <=0.9))  ? "text-warning fas fa-exclamation-triangle" : ""?>
                        <?= (($media_dia_prod / $atingimento_prod) > 0.9) ? "text-success fas fa-check-circle" : "" ?>">
                      </i>
                    </div>
                  </div>
                  <div class="col col-stats">
                    <div class="numbers">
                      <p class="card-category">Necessidade Dia</p>
                      <h5>
                        Receita: R$ <?= number_format($atingimento_prod,2,',','.') ?>
                        <br> 
                        Físico: <?= round(($atingimento_prod / $media_prod->media)) ?> terminais
                      </h5>
                    </div>
                    <div class="col col-stats d-block d-sm-none ">
                    <div class="numbers">
                      <h4 class="card-title text-right">Produtos</h4>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- FIM DETALHES APARELHOS -->
          <div class="col">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <div class="icon-big text-center">
                      <i class="
                        <?= (($media_dia_acess / $atingimento_acess) <= 0.5) ? "text-danger fas fa-exclamation-circle" : ""?>
                        <?= ((($media_dia_acess / $atingimento_acess) > 0.5) and 
                            (($media_dia_acess / $atingimento_acess) <=0.9))  ? "text-warning fas fa-exclamation-triangle" : ""?>
                        <?= (($media_dia_acess / $atingimento_acess) > 0.9) ? "text-success fas fa-check-circle" : "" ?>">
                      </i>
                    </div>
                  </div>
                  <div class="col col-stats">
                    <div class="numbers">
                      <p class="card-category">Necessidade Dia</p>
                      <h5>
                        Receita: R$ <?= number_format($atingimento_acess,2,',','.') ?>
                        <br> 
                        Físico: <?= round(($atingimento_acess / $media_acess->media)) ?> itens
                      </h5>
                    </div>
                    <div class="col col-stats d-block d-sm-none ">
                    <div class="numbers">
                      <h4 class="card-title text-right">Acessórios</h4>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- FIM DETALHES ACESSÓRIOS -->
        </div><!-- FIM DA ROW DETALHES -->
        <div class="row">
          <div class="col-md-12 text-right">
            <label class="text-justify">
              Neste mês temos <strong><?= $dias_total ?> dias de oportunidades,</strong>
              <?php
                $qte = $dias_total - $dias_restante;
                if (fmod($qte,2)>1)
                {
                  number_format($qte,2,',','.');
                }
                if ($qte == 0)
                {
                  echo "estamos percorrendo o <strong>primeiro</strong> ";
                }
                else
                {
                  echo "já percorremos <strong>".$qte."</strong>   ";
                }?> <strong>
              <?= (($dias_total-$dias_restante)>1) ? " dias" : " dia" ?></strong> da nossa jornada e
              <?= ($dias_restante>1) ? "faltam " : "falta "?><strong>
              <?= fmod($dias_restante,2)>1 ? number_format($dias_restante,1,',','.') : $dias_restante?>
              <?= ($dias_restante>1) ? " dias" : " dia" ?></strong>
              para alcançar o <strong>nosso objetivo</strong>
            </label>
          </div>
        </div><!-- FIM DA ROW CONTAGEM DE TEMPO --><br>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">
                 <i class="fas fa-shopping-bag"></i> RESULTADO <?= $nome_loja ?>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover text-center">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col" colspan="4" class="table-bordered" style="border-top-width: 1px;"><i class="fas fa-clipboard-check" style="font-size: 16px;"></i> Serviços</th>
                          <th scope="col" colspan="4" class="table-bordered" style="border-top-width: 1px;"><i class="fas fa-mobile-alt" style="font-size: 16px;"></i> Aparelhos</th>
                          <th scope="col" colspan="4" class="table-bordered" style="border-top-width: 1px;"><i class="far fas fa-wallet" style="font-size: 16px;"></i> Acessórios</th>
                        </tr>
                        <tr>
                          <th scope="col">Consultor</th>
                          <th scope="col" class="table-bordered direita">Meta</th>
                          <th scope="col">Realizado</th>
                          <th scope="col" colspan="2">Tendência</th>
                          <th scope="col" class="table-bordered direita">Meta</th>
                          <th scope="col">Realizado</th>
                          <th scope="col" colspan="2" class="table-bordered esquerda">Tendência</th>
                          <th scope="col">Meta</th>
                          <th scope="col">Realizado</th>
                          <th scope="col" colspan="2" class="table-bordered esquerda">Tendência</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($consultores as $nomes):?>
                            <tr>
                              <td><?=$nomes->vendedor_vendas_servicos ?></td>
                              <td class="table-bordered direita">
                                <?php 
                                  $ci =& get_instance();
                                  $metacn_serv = $ci->Geral_gte_model->quadro_busca_meta($nomes->vendedor_vendas_servicos,1);
                                  echo "R$ ".number_format($metacn_serv->servico_meta,2,',','.');
                                ?>    
                              </td>
                              <td>
                                <?php 
                                  $ci =& get_instance();
                                  $resultcn_serv = $ci->Geral_gte_model->busca_resultado_cn($nomes->vendedor_vendas_servicos,1);
                                  echo "R$ ".number_format($resultcn_serv->remuneracao_vendas_servicos,2,',','.');
                                ?>    
                              </td>
                              <td>
                                <i class="fas fa-circle
                                  <?php 
                                    $ci =& get_instance();
                                    $tendenciacn_serv = $ci->Geral_gte_model->tendencia_cn($nomes->vendedor_vendas_servicos,1);
                                  ?>
                                  <?= 
                                    (floatval($tendenciacn_serv) <=70) ? 'text-danger' : '' ?>
                                  <?= 
                                    (floatval($tendenciacn_serv) >70 and 
                                     floatval($tendenciacn_serv) <90) ? 'text-warning' : '' ?>
                                  <?=
                                    (floatval($tendenciacn_serv) >=90) ? 'text-success' : '' ?>"
                                  style="font-size: 13px;"></i>
                              </td>
                              <td class="table-bordered esquerda">
                                <?php echo number_format($tendenciacn_serv,2,',','.')."%";?>    
                              </td><!-- FIM SERVIÇO -->
                              <td>
                                <?php 
                                  $ci =& get_instance();
                                  $metacn_prod = $ci->Geral_gte_model->quadro_busca_meta($nomes->vendedor_vendas_servicos,2);
                                  echo "R$ ".number_format($metacn_prod->produto_meta,2,',','.');
                                ?>    
                              </td>
                              <td>
                                <?php 
                                  $ci =& get_instance();
                                  $resultcn_prod = $ci->Geral_gte_model->busca_resultado_cn($nomes->vendedor_vendas_servicos,2);
                                  echo "R$ ".number_format($resultcn_prod->valor_vendas_produtos,2,',','.');
                                ?>    
                              </td>
                              <td>
                                <i class="fas fa-circle
                                  <?php 
                                    $ci =& get_instance();
                                    $tendenciacn_prod = $ci->Geral_gte_model->tendencia_cn($nomes->vendedor_vendas_servicos,2);
                                  ?>
                                  <?= 
                                    (floatval($tendenciacn_prod) <=70) ? 'text-danger' : '' ?>
                                  <?= 
                                    (floatval($tendenciacn_prod) >70 and 
                                     floatval($tendenciacn_prod) <90) ? 'text-warning' : '' ?>
                                  <?=
                                    (floatval($tendenciacn_prod) >=90) ? 'text-success' : '' ?>"
                                  style="font-size: 13px;"></i>
                              </td>
                              <td class="table-bordered esquerda">
                                <?php echo number_format($tendenciacn_prod,2,',','.')."%";?>    
                              </td><!-- FIM APARELHO -->
                              <td>
                                <?php 
                                  $ci =& get_instance();
                                  $metacn_acess = $ci->Geral_gte_model->quadro_busca_meta($nomes->vendedor_vendas_servicos,3);
                                  echo "R$ ".number_format($metacn_acess->acessorio_meta,2,',','.');
                                ?>    
                              </td>
                              <td>
                                <?php 
                                  $ci =& get_instance();
                                  $resultcn_acess = $ci->Geral_gte_model->busca_resultado_cn($nomes->vendedor_vendas_servicos,3);
                                  echo "R$ ".number_format($resultcn_acess->valor_vendas_produtos,2,',','.');
                                ?>    
                              </td>
                              <td>
                                <i class="fas fa-circle
                                  <?php 
                                    $ci =& get_instance();
                                    $tendenciacn_acess = $ci->Geral_gte_model->tendencia_cn($nomes->vendedor_vendas_servicos,3);
                                  ?>
                                  <?= 
                                    (floatval($tendenciacn_acess) <=70) ? 'text-danger' : '' ?>
                                  <?= 
                                    (floatval($tendenciacn_acess) >70 and 
                                     floatval($tendenciacn_acess) <90) ? 'text-warning' : '' ?>
                                  <?=
                                    (floatval($tendenciacn_acess) >=90) ? 'text-success' : '' ?>"
                                  style="font-size: 13px;"></i>
                              </td>
                              <td class="table-bordered esquerda">
                                <?php echo number_format($tendenciacn_acess,2,',','.')."%";?>    
                              </td><!-- FIM ACESSÓRIO -->
                            </tr>
                          <?php endforeach; ?>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- FIM DA ROW QUADRO GERAL -->
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <div class="card-title">
                  <i class="fas fa-tasks"></i> DETALHAMENTO DO RESULTADO
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover text-center">
                    <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col" colspan="3" class="table-bordered" style="border-top-width: 1px;"><i class="fas fa-gem" style="font-size: 16px;"></i> Pós-Pago</th>
                          <th scope="col" colspan="3" class="table-bordered" style="border-top-width: 1px;"><i class="fas fa-mobile" style="font-size: 16px;"></i> Controle</th>
                          <th scope="col" colspan="3" class="table-bordered" style="border-top-width: 1px;"><i class="fas fa-at" style="font-size: 16px;"></i> Internet/Fixo</th>
                          <th scope="col" colspan="3" class="table-bordered" style="border-top-width: 1px;"><i class="fas fa-caret-square-up" style="font-size: 16px;"></i> Upgrade</th>
                        </tr>
                        <tr>
                          <th scope="col">Consultor</th>
                          <th scope="col" class="table-bordered direita">Receita </th>
                          <th scope="col" >Físico</th>
                          <th scope="col">DSV*</th>
                          <th scope="col" class="table-bordered direita">Receita </th>
                          <th scope="col">Físico</th>
                          <th scope="col">DSV*</th>
                          <th scope="col" class="table-bordered direita">Receita </th>
                          <th scope="col">Físico</th>
                          <th scope="col">DSV*</th>
                          <th scope="col" class="table-bordered direita">Receita </th>
                          <th scope="col">Físico</th>
                          <th scope="col" class="table-bordered esquerda">DSV*</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($consultores as $nomes):?>
                          <tr>
                            <td><?=$nomes->vendedor_vendas_servicos ?></td>
                            <td class="table-bordered direita">
                              <?php
                              $ci =& get_instance();
                              $result_g1 = $this->Geral_gte_model->busca_grupo_result_cn($nomes->vendedor_vendas_servicos, 'G1');
                              floatval($result_g1->SOMA);
                              echo "R$".number_format($result_g1->SOMA,2,',','.');
                              ?>
                            </td>
                            <td>
                              <?php
                              $ci =& get_instance();
                              $qte_g1 = $this->Geral_gte_model->busca_grupo_cn($nomes->vendedor_vendas_servicos, 'G1');
                              echo $qte_g1->CONTAGEM." acessos";
                              ?>
                            </td>
                            <td class="table-bordered esquerda">
                              <?php
                              $ci =& get_instance();
                              $dsv_g1 = $this->Geral_gte_model->dsv($nomes->vendedor_vendas_servicos, 'G1');
                              echo round($dsv_g1)." dias";
                              ?>
                            </td>
                            <td>
                              <?php
                              $ci =& get_instance();
                              $result_g2 = $this->Geral_gte_model->busca_grupo_result_cn($nomes->vendedor_vendas_servicos, 'G2');
                              floatval($result_g2->SOMA);
                              echo "R$".number_format($result_g2->SOMA,2,',','.');
                              ?>
                            </td>
                            <td>
                              <?php
                              $ci =& get_instance();
                              $qte_g2 = $this->Geral_gte_model->busca_grupo_cn($nomes->vendedor_vendas_servicos, 'G2');
                              echo $qte_g2->CONTAGEM." acessos";
                              ?>
                            </td>
                            <td class="table-bordered esquerda">
                              <?php
                              $ci =& get_instance();
                              $dsv_g2 = $this->Geral_gte_model->dsv($nomes->vendedor_vendas_servicos, 'G2');
                              echo round($dsv_g2)." dias";
                              ?>
                            </td>
                            <td>
                              <?php
                              $ci =& get_instance();
                              $result_g3 = $this->Geral_gte_model->busca_grupo_result_cn($nomes->vendedor_vendas_servicos, 'G3');
                              floatval($result_g3->SOMA);
                              echo "R$".number_format($result_g3->SOMA,2,',','.');
                              ?>
                            </td>
                            <td>
                              <?php
                              $ci =& get_instance();
                              $qte_g3 = $this->Geral_gte_model->busca_grupo_cn($nomes->vendedor_vendas_servicos, 'G3');
                              echo $qte_g3->CONTAGEM." acessos";
                              ?>
                            </td>
                            <td class="table-bordered esquerda">
                              <?php
                              $ci =& get_instance();
                              $dsv_g3 = $this->Geral_gte_model->dsv($nomes->vendedor_vendas_servicos, 'G3');
                              echo round($dsv_g3)." dias";
                              ?>
                            </td>
                            <td>
                              <?php
                              $ci =& get_instance();
                              $result_g6 = $this->Geral_gte_model->busca_grupo_result_cn($nomes->vendedor_vendas_servicos, 'G6');
                              floatval($result_g6->SOMA);
                              echo "R$".number_format($result_g6->SOMA,2,',','.');
                              ?>
                            </td>
                            <td>
                              <?php
                              $ci =& get_instance();
                              $qte_g6 = $this->Geral_gte_model->busca_grupo_cn($nomes->vendedor_vendas_servicos, 'G6');
                              echo $qte_g6->CONTAGEM." acessos";
                              ?>
                            </td>
                            <td class="table-bordered esquerda">
                              <?php
                              $ci =& get_instance();
                              $dsv_g6 = $this->Geral_gte_model->dsv($nomes->vendedor_vendas_servicos, 'G6');
                              echo round($dsv_g6)." dias";
                              ?>
                            </td>
                          </tr>
                        <?php endforeach;?>
                      </tbody>
                      <tfoot>
                        <caption class="text-right">* Dias sem Vendas</caption>                        
                      </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div><!-- FIM DA ROW QUADRO DETALHAMENTO DE RESULTADO -->
        <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">FMB Controle</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="chart-container">
                    <canvas id="doughnutChart_loja" style="width: 50%; height: 50%"></canvas>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="table table-responsive">
                    <table class="table table-hover table-bordered text-center">
                      <thead>
                        <tr class="table-bordered">
                          <th>Assinatura</th>
                          <th>Quantidade</th>
                          <th>%</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($fmb as $linha):?>
                          <tr>
                            <td>R$ <?= number_format($linha->valor_vendas_servicos,2,',','.') ?></td>
                            <td><?= $linha->CONTAGEM ?></td>
                            <td>
                              <?= number_format((($linha->CONTAGEM / $qte_total->CONTAGEM) * 100),2,',','.') ?>%
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                    <div class="card-footer text-white text-center">
                      <div class="bg-danger">
                        <b>PERCA DE RECEITA: R$ <?= number_format($perca_receita,2,',','.') ?></b>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <div class="card-title">E-mails</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="chart-container">
                    <canvas id="doughnutChart_email_loja" style="width: 50%; height: 50%"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Pós Pago</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="chart-container">
                    <canvas id="doughnutChart_pos_pago_loja" style="width: 50%; height: 50%"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Controle</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="chart-container">
                    <canvas id="doughnutChart_controle_loja" style="width: 50%; height: 50%"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- FIM DA OITAVA ROW GERAL -->

      
      
    </div><!-- FIM DO PAGE INNER -->
  </div>

</div><!-- FIM DO MAIN PANEL -->