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
                Produtos Importados no Banco de Dados
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="basic-datatables" class="display table table-hover">
                    <thead>                              
                        <th scope="col">Filial</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Vendedor</th>
                        <th scope="col">Data</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Coordenador</th>     
                    </thead>
                    <tbody>
                      <?php foreach($dataInfo as $key=>$element) { ?>
                      <tr>
                        <td><?php print $element['filial_vendas_produtos'];?></td>
                        <td><?php print $element['produto_vendas_produtos'];?></td>
                        <td><?php print $element['modelo_vendas_produtos'];?></td>
                        <td><?php print $element['cliente_vendas_produtos'];?></td>
                        <td><?php print $element['vendedor_vendas_produtos'];?></td>
                        <td><?php print $element['data_vendas_produtos'];?></td>
                        <td><?php print $element['valor_vendas_produtos'];?></td>
                        <td><?php print $element['coordenador_vendas_produtos'];?></td>                 
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