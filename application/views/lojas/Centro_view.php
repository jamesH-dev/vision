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
                              (($media_dia_serv / $atingimento_serv) <=0.8))  ? "text-warning fas fa-exclamation-triangle" : ""?>
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
                              (($media_dia_prod / $atingimento_prod) <=0.8))  ? "text-warning fas fa-exclamation-triangle" : ""?>
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
                              (($media_dia_acess / $atingimento_acess) <=0.8))  ? "text-warning fas fa-exclamation-triangle" : ""?>
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
                              (($media_acess->media / $atingimento_acess) <=0.8))  ? "text-warning fas fa-exclamation-triangle" : ""?>
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

      
      
    </div><!-- FIM DO PAGE INNER -->
  </div>

</div><!-- FIM DO MAIN PANEL -->