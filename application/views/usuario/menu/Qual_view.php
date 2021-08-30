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
                Notas Importadas no Banco de Dados
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="basic-datatables" class="display table table-hover">
                    <thead>                              
                        <th scope="col">Filial</th>
                        <th scope="col">Venda</th>
                        <th scope="col">Vendedor</th>
                        <th scope="col">Email do Cliente</th>
                        <th scope="col">Telefone do Cliente</th>
                        <th scope="col">Nota Atribuída</th>
                        <th scope="col">Observação do Cliente</th>
                        <th scope="col">Observação da Avaliação</th>     
                    </thead>
                    <tbody>
                      <?php foreach($dataInfo as $key=>$element) { ?>
                      <tr>
                        <td><?php print $element['filial_notas_atendimentos'];?></td>
                        <td><?php print $element['venda_notas_atendimentos'];?></td>
                        <td><?php print $element['vendedor_notas_atendimentos'];?></td>
                        <td><?php print $element['email_notas_atendimentos'];?></td>
                        <td><?php print $element['telefone_notas_atendimentos'];?></td>
                        <td><?php print $element['nota_notas_atendimentos'];?></td>
                        <td><?php print $element['obs_cliente_notas_atendimentos'];?></td>
                        <td><?php print $element['obs_aval_notas_atendimentos'];?></td>                 
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