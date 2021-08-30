<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Área do Analista</h4>
       </div><!-- FIM DO PAGE HEADER -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">
                Metas Importadas no Banco de Dados
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="basic-datatables" class="display table table-hover">
                    <thead>                            
                      <th scope="col">Atribuição</th>
                      <th scope="col">Função</th>
                      <th scope="col">Meta de Serviço</th>
                      <th scope="col">Meta de Produto</th>
                      <th scope="col">Meta de Acessório</th>
                      <th scope="col">Meta de FPD</th>
                      <th scope="col">Data da Meta</th>                     
                    </thead>
                    <tbody>
                      <?php foreach($dataInfo as $key=>$element) { ?>
                      <tr>
                        <td><?php print $element['nome_meta'];?></td>
                        <td><?php print $element['funcao_meta'];?></td>
                        <td><?php print $element['servico_meta'];?></td>
                        <td><?php print $element['produto_meta'];?></td>
                        <td><?php print $element['acessorio_meta'];?></td>
                        <td><?php print $element['fpd_meta'];?></td>
                        <td><?php print $element['mes_meta'];?></td>                                
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div><!-- FIM DO PAGE INNER -->
  </div>
</div><!-- FIM DO MAIN PANEL -->