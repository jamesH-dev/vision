<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Análise de Atendimento</h4>
       </div><!-- FIM DO PAGE HEADER -->
       <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">
                 <i class="fas fa-eye"></i> Atendimento Vivo GO
                </div><br> 
                <div>
                  <span>Selecione o período:<br></span>
                  <form action="<?= base_url()?>" method ="get">
                    <input type="text" name="data_inicial" id="data_inicial" readonly="readonly" required="required"><span> a</span>
                    <input type="text" name="data_final" id="data_final" readonly="readonly" required="required">
                    <button class="btn-primary" type="submit" name="carregar">Carregar</button>                    
                  </form>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover text-center">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col" colspan="6" class="esquerda direita baixo" style="border-top-width: 0px;"></th>
                          <th scope="col" colspan="6" class="table-bordered" style="border-top-width: 1px;"><i class="fas fa-tachometer-alt"></i> Net Promoter Score</th>
                        </tr>
                        <tr class="table-bordered">
                          <th scope="col" class="table-bordered">Filial</th>
                          <th scope="col" class="table-bordered">Média de Atendimento</th>
                          <th scope="col" class="table-bordered">Qte. Avaliações</th>
                          <th scope="col" class="table-bordered" colspan="2">Avaliações (%)</th>
                          <th scope="col" class="table-bordered">Total de Atend.</th>
                          <th scope="col" class="table-bordered">Atend. S/ Email</th>
                          <th scope="col" class="table-bordered">Detratores</th>
                          <th scope="col" class="table-bordered">Neutros</th>
                          <th scope="col" colspan="2" class="table-bordered">Promotores</th>
                          <th scope="col" colspan="2" class="table-bordered">NPS</th>
                          <th scope="col" colspan="2" class="table-bordered">Detalhar</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($loja as $key => $value):?>
                            <tr class="table-bordered">
                              <td><?=$value->filial_vendas_servicos ?></td>
                            </tr>
                          <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- FIM DA ROW QUADRO GERAL -->
      
      
      
    </div><!-- FIM DO PAGE INNER -->
  </div>

</div><!-- FIM DO MAIN PANEL -->