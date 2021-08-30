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
                Serviços Importados no Banco de Dados
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Filial</th>
                      <th scope="col">Data</th>
                      <th scope="col">Vendedor</th>
                      <th scope="col">Cliente</th>
                      <th scope="col">CPF</th>
                      <th scope="col">Servico</th>
                      <th scope="col">Plano</th>
                      <th scope="col">Acesso</th>
                      <th scope="col">Email</th>
                      <th scope="col">Next</th>
                      <th scope="col">GED</th>
                      <th scope="col">Valor</th>
                      <th scope="col">Remuneração</th>
                      <th scope="col">Grupo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($dataInfo as $key=>$element) { ?>
                      <tr>
                        <td><?php print $element['filial_vendas_servicos'];?></td>
                        <td><?php print $element['data_vendas_servicos'];?></td>
                        <td><?php print $element['vendedor_vendas_servicos'];?></td>
                        <td><?php print $element['cliente_vendas_servicos'];?></td>
                        <td><?php print $element['cpf_vendas_servicos'];?></td>
                        <td><?php print $element['servico_vendas_servicos'];?></td>
                        <td><?php print $element['plano_vendas_servicos'];?></td>
                        <td><?php print $element['acesso_vendas_servicos'];?></td>
                        <td><?php print $element['email_vendas_servicos'];?></td>
                        <td><?php print $element['next_vendas_servicos'];?></td>
                        <td><?php print $element['ged_vendas_servicos'];?></td>
                        <td><?php print $element['valor_vendas_servicos'];?></td>
                        <td><?php print $element['remuneracao_vendas_servicos'];?></td>
                        <td><?php print $element['grupo_vendas_servicos'];?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div><!-- FIM DO PAGE INNER -->
  </div>
</div><!-- FIM DO MAIN PANEL -->