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
                Estornos Importados no Banco de Dados
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Terminal</th>
                      <th scope="col">Tipo Comissão</th>
                      <th scope="col">Data Serviço</th>
                      <th scope="col">Data Baixa</th>
                      <th scope="col">Valor</th>
                      <th scope="col">Apurado</th>
                      <th scope="col">Cliente</th>
                      <th scope="col">CPF</th>
                      <th scope="col">Serviço</th>
                      <th scope="col">Grupo</th>
                      <th scope="col">Assinatura</th>
                      <th scope="col">Consultor</th>
                      <th scope="col">Loja</th>
                      <th scope="col">Referência</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($dataInfo as $key=>$element) { ?>
                      <tr>
                        <td><?php print $element['terminal_estornos'];?></td>
                        <td><?php print $element['comissao_estornos'];?></td>
                        <td><?php print $element['data_servico_estornos'];?></td>
                        <td><?php print $element['data_baixa_estornos'];?></td>
                        <td><?php print $element['valor_estornos'];?></td>
                        <td><?php print $element['apurado_estornos'];?></td>
                        <td><?php print $element['cliente_estornos'];?></td>
                        <td><?php print $element['cpf_estornos'];?></td>
                        <td><?php print $element['servico_estornos'];?></td>
                        <td><?php print $element['grupo_estornos'];?></td>
                        <td><?php print $element['assinatura_estornos'];?></td>
                        <td><?php print $element['consultor_estornos'];?></td>
                        <td><?php print $element['loja_estornos'];?></td>
                        <td><?php print $element['referencia_estornos'];?></td>
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