<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Minha Premiação</h4>
      </div><!-- FIM DO PAGE HEADER -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card card-profile card-secondary" style="margin-bottom: 0px !important; padding-bottom: 10px;">
                  <div class="card-header">
                    <h2 class="text-white"><?= $_SESSION ['minuscula_usuario'] ?></h2>
                    <h2 class="text-white"><?= $_SESSION ['loja_usuario'] ?></h2>                    
                    <br>
                    <div class="row">
                      <div class="col"></div>
                      <div class="col"></div>
                      <div class="col">
                        <div class="profile-picture">
                          <div class="avatar avatar-xxl">
                            <img src="<?= base_url() ?><?= $_SESSION ['diretorio_foto_usuario'] ?>" alt="..." class="avatar-img rounded-circle">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <div class="card-title text-secondary">
                          Parâmetros Serviços
                        </div>
                        <div class="table-responsive">
                          <table class="table table-hover text-center">
                            <thead>
                              <tr>
                                <th>Atingimento</th>
                                <th>Premiação</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>80%</td>
                                <td>2%</td>
                              </tr>
                              <tr>
                                <td>90%</td>
                                <td>3%</td>
                              </tr>
                              <tr>
                                <td>100%</td>
                                <td>5%</td>
                              </tr>
                              <tr>
                                <td>110%</td>
                                <td>6%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-title text-secondary">
                          Parâmetros Produtos
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover text-center">
                          <thead>
                            <tr>
                              <th>Atingimento</th>
                              <th>Premiação</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>80%</td>
                              <td>0,5%</td>
                            </tr>
                            <tr>
                              <td>90%</td>
                              <td>1%</td>
                            </tr>
                            <tr>
                              <td>100%</td>
                              <td>2%</td>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="card-header">
              <div class="card-title">
                Premiação - Serviços
              </div>              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered text-center table-head-bg-secondary">
                  <thead>
                    <tr>
                      <th colspan="4" class="table-bordered"><i class="far fa-chart-bar" style="font-size: 25px;"></i> Resultado</th>
                      <th colspan="3" class="table-bordered"><i class="fas fa-recycle" style="font-size: 25px;"></i> Descontos</th>
                      <th colspan="2"><i class="fas fa-coins" style="font-size: 25px;"></i> Cálculo Final</th>
                    </tr>
                    <tr>
                      <th class="table-bordered direita">Meta</th>
                      <th>Realizado</th>
                      <th>Atingimento</th>
                      <th>Premiação</th>
                      <th class="table-bordered direita">Estornos</th>
                      <th>Pós-Vendas</th>
                      <th class="table-bordered esquerda">UNR*</th>
                      <th>Líquido</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>R$ <?= number_format($meta_serv->servico_meta,2,',','.')?></td>
                      <td>R$ <?= number_format($real_serv->remuneracao_vendas_servicos,2,',','.')?></td>
                      <td><?= number_format($atingido_serv,2,',','.')?>%</td>
                      <td><?= number_format($premiacao_serv,2,',','.')?>%</td>
                      <td>R$ <?= number_format($estornos->assinatura_estornos,2,',','.')?></td>
                    </tr>
                  </tbody>
                  <caption class="text-right">*Upgrades não reconhecidos</caption>
                </table>
              </div>
            </div>
            <div class="card-header">
              <div class="card-title">
                Premiação - Produtos
              </div>              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered text-center table-head-bg-secondary">
                  <thead>
                    <tr>
                      <th>Meta</th>
                      <th>Realizado</th>
                      <th>Atingimento</th>
                      <th>Premiação</th>
                      <th>Total</th>                
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>R$ <?= number_format($meta_prod->produto_meta,2,',','.')?></td>

                      <td>R$ <?= number_format($real_prod->valor_vendas_produtos,2,',','.')?></td>

                      <td><?= number_format($atingido_prod,2,',','.')?>%</td>

                      <td><?= number_format($premiacao_prod,2,',','.')?>%</td>
                      <td>R$ <?= number_format($total_prod,2,',','.')?></td>
                    </tr>
                  </tbody>
                </table>
                <div class="card-header text-right">
                  <div class="card-title">
                    Total:
                    <?php 
                      $total = $total_serv + $total_prod;
                      echo "R$ ".number_format($total,2,',','.');
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                  <div class="btn btn-secondary text-right">
                    <a class="text-white" href=""><b>Listar Estornos</b></a>
                  </div>
                </div>
                <div class="col">
                  <div class="btn btn-secondary text-right">
                    <a class="text-white" href=""><b>Listar Pós-Vendas</b></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- FIM DO CARD -->
        </div>
      </div>      
    </div><!-- FIM DO PAGE INNER -->
  </div>
</div><!-- FIM DO MAIN PANEL -->