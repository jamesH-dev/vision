<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
      </div><!-- FIM DO PAGE HEADER -->
      <div class="row">
          <div class="col-sm-6 col-md-3">
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
                              <?php $ci =& get_instance(); $tend_geral_serv = $ci->tendencia_geral(1); ?> 
                              <?= (floatval($tend_geral_serv) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($tend_geral_serv) >70 and
                                   floatval($tend_geral_serv) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($tend_geral_serv) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 11px;">
                            </i> <?php echo number_format($tend_geral_serv,2,',','.')."%";?>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- FIM DA PRIMEIRA COL RESULTADOS GERAIS -->
          <div class="col-sm-6 col-md-3">
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
                              <?php $ci =& get_instance(); $tend_geral_prod = $ci->tendencia_geral(2); ?> 
                              <?= (floatval($tend_geral_prod) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($tend_geral_prod) >70 and
                                   floatval($tend_geral_prod) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($tend_geral_prod) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 11px;">
                            </i> <?php echo number_format($tend_geral_prod,2,',','.')."%";?>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- FIM DA SEGUNDA COL RESULTADOS GERAIS -->
          <div class="col-sm-6 col-md-3">
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
                              <?php $ci =& get_instance(); $tend_geral_acess = $ci->tendencia_geral(3); ?> 
                              <?= (floatval($tend_geral_acess) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($tend_geral_acess) >70 and
                                   floatval($tend_geral_acess) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($tend_geral_acess) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 11px;">
                            </i> <?php echo number_format($tend_geral_acess,2,',','.')."%";?>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>                        
          </div><!-- FIM DA TERCEIRA COL RESULTADOS GERAIS -->
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-icon">
                    <div class="icon-big text-center icon-secondary bubble-shadow-small">
                      <i class="fas fa-dollar-sign"></i>
                    </div>
                  </div>
                  <div class="col col-stats ml-3 ml-sm-0">
                    <div class="numbers">
                      <p class="card-category">Bônus Trimestral</p>
                      <h4 class="card-title">R$ 200.000,00</h4>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col col-stats ml-3 ml-sm-0"> <!--COL ATINGIMENTO E TENDÊNCIA 4 MUDAR VARIÁVEL-->
                    <div class="col-md-6">
                      <div class="numbers"> <!--NUMBERS ATINGIMENTO E TENDÊNCIA 2-->
                        <hr>
                        <div class="stats text-center" style="font-size: 11px;"> <!--STATS ATINGIMENTO E TENDÊNCIA 2-->      
                          <strong>Antingimento</strong> <br>
                            <i class=" fas fa-circle 
                              <?= (floatval($atingido_prod) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($atingido_prod) >70 and
                                   floatval($atingido_prod) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($atingido_prod) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 11px;">
                            </i> <?=number_format($atingido_acess,2,',','.')?>%
                        </div>
                      </div> 
                    </div>
                    <div class="col-md-6">
                      <div class="numbers"> <!--NUMBERS ATINGIMENTO E TENDÊNCIA 2-->
                        <hr>
                        <div class="stats text-center" style="font-size: 11px;"> <!--STATS ATINGIMENTO E TENDÊNCIA 2-->      
                          <strong>Tendência</strong> <br>
                            <i class=" fas fa-circle
                              <?php $ci =& get_instance(); $tend_geral_acess = $ci->tendencia_geral(3); ?>
                              <?= (floatval($tend_geral_acess) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($tend_geral_acess) >70 and
                                   floatval($tend_geral_acess) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($tend_geral_acess) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 11px;">
                            </i> <?php echo number_format($tend_geral_acess,2,',','.')."%"; ?>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- FIM DA QUARTA COL RESULTADOS GERAIS -->
      </div><!-- FIM DA PRIMEIRA ROL GERAL -->
      <div class="row">
        <div class="col-sm-6 col-md-3">
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
        <div class="col-sm-6 col-md-3">
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
        <div class="col-sm-6 col-md-3">
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
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row">
                <div class="col-3">
                  <div class="icon-big text-center">
                    <i class="
                      <?= (($media_acess->media / $atingimento_acess) <= 0.5) ? "text-danger fas fa-exclamation-circle" : ""?>
                      <?= ((($media_acess->media / $atingimento_acess) > 0.5) and 
                          (($media_acess->media / $atingimento_acess) <=0.9))  ? "text-warning fas fa-exclamation-triangle" : ""?>
                      <?= (($media_acess->media / $atingimento_acess) > 0.9) ? "text-success fas fa-check-circle" : "" ?>">
                    </i>
                  </div>
                </div>
                <div class="col col-stats">
                  <div class="numbers">
                    <p class="card-category">Necessidade Dia</p>
                    <h5>
                      Receita: R$ <?= number_format($atingimento_acess,2,',','.') ?>
                      <br> 
                      Físico: <?= round(($atingimento_acess / $media_acess->media)) ?> acessos
                    </h5>
                  </div>
                  <div class="col col-stats d-block d-sm-none ">
                  <div class="numbers">
                    <h4 class="card-title text-right">Bônus</h4>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- FIM DETALHES BÔNUS -->
      </div>
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
                echo "já percorremos ".$qte." ";
              }?> <strong>
            <?= (($dias_total-$dias_restante)>1) ? " dias" : " dia" ?></strong> da nossa jornada e
            <?= ($dias_restante>1) ? "faltam " : "falta "?><strong>
            <?= fmod($dias_restante,2)>1 ? number_format($dias_restante,1,',','.') : $dias_restante?>
            <?= ($dias_restante>1) ? " dias" : " dia" ?></strong>
            para alcançar o <strong>nosso objetivo</strong>
          </label>
        </div>
      </div><!-- FIM DA SEGUNDA ROW GERAL --><br>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">
                <i class="fas fa-shopping-bag"></i>
                Resumo por Loja
              </div>                  
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
                    <th scope="col" class="table-bordered">Loja</th>
                    <th scope="col" class="table-bordered direita">Meta</th>
                    <th scope="col">Realizado</th>
                    <th scope="col" colspan="2">Tendência</th>
                    <th scope="col" class="table-bordered direita">Meta</th>
                    <th scope="col">Realizado</th>
                    <th scope="col" colspan="2" class="table-bordered esquerda">Tendência (%)</th>
                    <th scope="col">Meta</th>
                    <th scope="col">Realizado</th>
                    <th scope="col" colspan="2" class="table-bordered esquerda">Tendência</th>
                  </tr>
                </thead>
                <tbody style="margin-left: auto; margin-right: auto;">
                  <?php foreach ($quadro as $linha): ?>
                      <tr>
                        <td  class="table-bordered">
                          <?= $linha->filial_quadro ?>
                        </td>
                        <td>R$
                          <?= number_format(floatval($linha->meta_servico_quadro),2,',','.')?>
                        </td>
                        <td class="">R$
                          <?= number_format(floatval($linha->real_servico_quadro),2,',','.')?>
                        </td>
                        <td class="text-right direita indicador ">
                          <i class="fas fa-circle
                              <?= 
                                (floatval($linha->tendencia_servico_quadro) <=70) ? 'text-danger' : '' ?>
                              <?= 
                                (floatval($linha->tendencia_servico_quadro) >70 and 
                                 floatval($linha->tendencia_servico_quadro) <90) ? 'text-warning' : '' ?>
                              <?=
                                (floatval($linha->tendencia_servico_quadro) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 13px;"></i>
                        </td>
                        <td class="esquerda ">
                          <?= number_format(floatval($linha->tendencia_servico_quadro),2,',','.')?>%
                        </td>
                        <td class="table-bordered direita ">R$ 
                          <?= number_format(floatval($linha->meta_produto_quadro),2,',','.')?>
                        </td>
                        <td class="table-bordered direita esquerda ">R$ 
                          <?= number_format(floatval($linha->real_produto_quadro),2,',','.')?>
                        </td>
                        <td class="text-right table-bordered esquerda direita indicador ">
                          <i class="fas fa-circle
                              <?= (floatval($linha->tendencia_produto_quadro) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($linha->tendencia_produto_quadro) >70 and floatval($linha->tendencia_produto_quadro) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($linha->tendencia_produto_quadro) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 13px;"></i>
                        </td>
                        <td class="table-bordered esquerda ">
                          <?= number_format(floatval($linha->tendencia_produto_quadro),2,',','.')?>%
                        </td>
                        <td class="">R$
                          <?= number_format(floatval($linha->meta_acessorio_quadro),2,',','.')?>
                        </td>
                        <td class="">R$
                          <?= number_format(floatval($linha->real_acessorio_quadro),2,',','.')?>
                        </td>
                        <td class="text-right indicador ">
                          <i class="fas fa-circle
                              <?= (floatval($linha->tendencia_acessorio_quadro) <=70) ? 'text-danger' : '' ?>
                              <?= (floatval($linha->tendencia_acessorio_quadro) >70 and floatval($linha->tendencia_acessorio_quadro) <90) ? 'text-warning' : '' ?>
                              <?= (floatval($linha->tendencia_acessorio_quadro) >=90) ? 'text-success' : '' ?>"
                              style="font-size: 13px;"></i>
                        </td>
                        <td class="table-bordered esquerda">
                          <?= number_format(floatval($linha->tendencia_acessorio_quadro),2,',','.')?>%
                        </td>
                      </tr> <!-- FIM DA LINHA DA TABELA -->
                      <?php endforeach ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div><!-- FIM DA PRIMEIRA COL GERAL -->
      </div><!-- FIM DA TERCEIRA ROW GERAL -->
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <div class="card-title">
                <i class="fas fa-clone"></i> Vendas por Grupo
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Grupo</th>
                        <th>Quantidade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($grupos as $grupo => $grupo_vendas_servicos): ?>
                        <tr>
                          <td>
                            <?=$grupo_vendas_servicos->grupo_vendas_servicos ?>
                          </td>
                          <td>
                            <?=$grupo_vendas_servicos->CONTAGEM ?>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <div class="card-title">
               <i class="fas fa-mobile"></i> Relação Tipo de Produtos
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Tipo Produto</th>
                        <th>Quantidade</th>
                        <th>Valor Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($tipo_produto as $tipo => $produto_vendas_produtos): ?>
                        <tr>
                          <td>                            
                            <?=$produto_vendas_produtos->produto_vendas_produtos ?>
                          </td>
                          <td>
                            <?=$produto_vendas_produtos->CONTAGEM ?>
                          </td>
                          <td>R$
                            <?=number_format($produto_vendas_produtos->SOMA,2,',','.')?>
                          </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- FIM DA SÉTIMA ROW GERAL -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">FMB Controle</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <br><br><br><br>
                  <div class="chart-container">
                    <canvas id="doughnutChart" style="width: 50%; height: 50%"></canvas>
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
                        <?php
                          $ci =& get_instance();
                          $fmb = $ci->Geral_model->lista_fmb();
                          $qte_total = $ci->Geral_model->quantidade_g2();
                          foreach ($fmb as $linha):
                        ?>
                          <tr>
                            <td>R$ <?= number_format($linha->valor_vendas_servicos,2,',','.') ?></td>
                            <td><?= $linha->CONTAGEM ?></td>
                            <td>
                              <?= number_format(($linha->CONTAGEM / $qte_total->CONTAGEM) * 100,2,',','.') ?>%
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
      </div><!-- FIM DA OITAVA ROW GERAL -->
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
                    <canvas id="doughnutChart_email" style="width: 50%; height: 50%"></canvas>
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
                    <canvas id="doughnutChart_pos_pago" style="width: 50%; height: 50%"></canvas>
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
                    <canvas id="doughnutChart_controle" style="width: 50%; height: 50%"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- FIM DA NONA ROW GERAL -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Upgrades X Aparelhos</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="chart-container">
                    <canvas id="myMultipleLineChart_upgrades" style="width: 50%; height: 50%"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- FIM DA NONA ROW GERAL -->

    </div><!-- FIM DO PAGE INNER -->
  </div>
</div><!-- FIM DO MAIN PANEL -->
