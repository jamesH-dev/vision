<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Rankings</h4>
       </div><!-- FIM DO PAGE HEADER -->
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">
                  <i class="fas fa-award"></i> Maiores Resultados - Serviços                    
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover text-center">
                    <thead>
                      <tr>
                        <th colspan="2">Posição</th>
                        <th>Consultor</th>
                        <th>Valor Venda</th>
                        <th colspan="2">Atingimento</th>
                      </tr>
                      <tbody>                          
                        <?php $a=1; ?>
                        <?php foreach ($melhores_serv as $melhor => $key): ?>
                          <tr>
                            <td class="text-center">
                              <?php if(($a == 1) or ($a == 2) or ($a == 3)):?>
                                <i class="fas fa-crown" style="
                                  <?= ($a == 1) ? "color: #eab030" : ""?>
                                  <?= ($a == 2) ? "color: #8b8c87" : ""?>
                                  <?= ($a == 3) ? "color: #94694d" : ""?>
                                "></i>
                              <?php endif;?>
                            </td>
                            <td>
                              <?= $a++ ?>
                            </td>
                            <td>
                              <?=$key->vendedor_vendas_servicos?>
                            </td>
                            <td>R$
                              <?=number_format(floatval($key->remuneracao_vendas_servicos),2,',','.') ?>
                            </td>
                            <td>
                              <i class="fas fa-circle
                                <?php
                                   $ci =& get_instance();                                     
                                   $td = number_format($ci->Rankings_gte_model->atingido($key->vendedor_vendas_servicos, 1),2,',','.');
                                   if ($td <= 70) {echo 'text-danger';}
                                ?>
                                <?=
                                  (($td > 70) and 
                                  ($td < 90)) ? 'text-warning' : ''
                                ?>
                                <?=
                                  $td >= 90 ? 'text-success' : ''
                                ?> text-right"
                                
                                style="font-size: 13px";></i>                                  
                            </td>
                            <td class="text-left">
                              <?php                                  
                                echo $td."%";
                              ?>                          
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </thead>
                  </table>
                </div>
              </div>                
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">
                  <i class="fas fa-award"></i> Maiores Resultados - Produtos                    
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover text-center">
                    <thead>
                      <tr>
                        <th colspan="2">Posição</th>
                        <th>Consultor</th>
                        <th>Valor Venda</th>
                        <th colspan="2">Atingimento</th>
                      </tr>
                      <tbody>                          
                        <?php $b=1; ?>
                        <?php foreach ($melhores_prod as $melhor => $key): ?>
                          <tr>
                            <td class="text-center">
                              <?php if(($b == 1) or ($b == 2) or ($b == 3)):?>
                                <i class="fas fa-crown" style="
                                  <?= ($b == 1) ? "color: #eab030" : ""?>
                                  <?= ($b == 2) ? "color: #8b8c87" : ""?>
                                  <?= ($b == 3) ? "color: #94694d" : ""?>
                                "></i>
                              <?php endif;?>
                            </td>
                            <td>
                              <?= $b++ ?>
                            </td>
                            <td>
                              <?=$key->vendedor_vendas_produtos?>
                            </td>
                            <td>R$
                              <?=number_format(floatval($key->valor_vendas_produtos),2,',','.') ?>
                            </td>
                            <td>
                              <i class="fas fa-circle
                                <?php
                                   $ci =& get_instance();                                     
                                   $td2 = number_format($ci->Rankings_gte_model->atingido($key->vendedor_vendas_produtos, 2),2,',','.');
                                   if ($td2 <= 70) {echo 'text-danger';}
                                ?>
                                <?=
                                  (($td2 > 70) and 
                                  ($td2 < 90)) ? 'text-warning' : ''
                                ?>
                                <?=
                                  $td2 >= 90 ? 'text-success' : ''
                                ?> text-right"
                                
                                style="font-size: 13px";></i>                                  
                            </td>
                            <td class="text-left">
                              <?php                                  
                                echo $td2."%";
                              ?>                          
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </thead>
                  </table>
                </div>
              </div>                
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">
                  <i class="fas fa-award"></i> Maiores Resultados - Acessórios                    
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover text-center">
                    <thead>
                      <tr>
                        <th colspan="2">Posição</th>
                        <th>Consultor</th>
                        <th>Valor Venda</th>
                        <th colspan="2">Atingimento</th>
                      </tr>
                      <tbody>                          
                        <?php $c=1; ?>
                        <?php foreach ($melhores_acess as $melhor => $key): ?>
                          <tr>
                            <td class="text-center">
                              <?php if(($c == 1) or ($c == 2) or ($c == 3)):?>
                                <i class="fas fa-crown" style="
                                  <?= ($c == 1) ? "color: #eab030" : ""?>
                                  <?= ($c == 2) ? "color: #8b8c87" : ""?>
                                  <?= ($c == 3) ? "color: #94694d" : ""?>
                                "></i>
                              <?php endif;?>
                            </td>
                            <td>
                              <?= $c++ ?>
                            </td>
                            <td>
                              <?=$key->vendedor_vendas_produtos?>
                            </td>
                            <td>R$
                              <?=number_format(floatval($key->valor_vendas_produtos),2,',','.') ?>
                            </td>
                            <td>
                              <i class="fas fa-circle
                                <?php
                                   $ci =& get_instance();                                     
                                   $td3 = number_format($ci->Rankings_gte_model->atingido($key->vendedor_vendas_produtos, 3),2,',','.');
                                   if ($td3 <= 70) {echo 'text-danger';}
                                ?>
                                <?=
                                  (($td3 > 70) and 
                                  ($td3 < 90)) ? 'text-warning' : ''
                                ?>
                                <?=
                                  $td3 >= 90 ? 'text-success' : ''
                                ?> text-right"
                                
                                style="font-size: 13px";></i>                                  
                            </td>
                            <td class="text-left">
                              <?php                                  
                                echo $td3."%";
                              ?>                          
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </thead>
                  </table>
                </div>
              </div>                
            </div>
          </div>
      </div>
      
    </div><!-- FIM DO PAGE INNER -->
  </div>

</div><!-- FIM DO MAIN PANEL -->