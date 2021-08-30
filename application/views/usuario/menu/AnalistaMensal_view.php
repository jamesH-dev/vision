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
              <h4 class="card-title"><i class="fas fa-info-circle"></i> Métodos de Importação</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab-icons" data-toggle="pill" href="#v-pills-home-icons" role="tab" aria-controls="v-pills-home-icons" aria-selected="true">
                      <i class="fas fa-calendar-check"></i>
                      Importação Diária
                    </a>
                    <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                      <i class="fas fa-calendar-alt "></i>
                      Importação Mensal
                    </a>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="tab-content" id="v-pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons"><br><br>
                      <p>A importação diária é a parte que você mais utiliza, esse espaço é exclusivo para enviar a base de serviços e produtos.</p>

                      <p>Assim que você realiza a importação por este método, todas as vendas anteriormente importadas são excluídas, dando espaço para as novas.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons"><br><br>
                      <p>A importação mensal é exclusiva para enviar o quadro de metas, resultados finais e estornos. </p>
                      <p>Atenção, todas as importações deste método não excluem as importações anteriores, somente importe quando as informações estiverem 100% corretas. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--FIM DA PRIMEIRA ROW -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">
                <i class="far fa-calendar-alt"></i> Importações Mensais
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <h3><i class="fas fa-cloud-upload-alt" style="margin-right: 4px; font-size: 40px; "></i>Importar Serviços (DEFINITIVO)</h3>
                  <div class="btn btn-primary">
                    <a style="color: white" href="<?= base_url()?>usuario/menu/analista/importar-servico-definitivo">Módulo Serviços - Mensal</a>                       
                  </div>
                </div> <!-- FIM PRIMEIRA COL -->
                <div class="col-md-6">
                  <h3><i class="fas fa-cloud-upload-alt" style="margin-right: 4px; font-size: 40px; "></i>Importar Produtos (DEFINITIVO)</h3>
                  <div class="btn btn-primary">
                    <a style="color: white" href="<?= base_url()?>usuario/menu/analista/importar-produto-definitivo">Módulo Produtos - Mensal</a>                      
                  </div>
                </div> <!-- FIM SEGUNDA COL -->
                <div class="col-md-6"><br><br>
                  <h3><i class="fas fa-cloud-upload-alt" style="margin-right: 4px; font-size: 40px; "></i>Importar Metas</h3>
                  <div class="btn btn-primary">
                    <a style="color: white" href="<?= base_url()?>usuario/menu/analista/importar-meta">Módulo Meta</a>                              
                  </div>
                </div> <!-- FIM TERCEIRA COL -->
                <div class="col-md-6"><br><br>
                  <h3><i class="fas fa-cloud-upload-alt" style="margin-right: 4px; font-size: 40px; "></i>Importar Estornos</h3>
                  <div class="btn btn-primary">
                    <a style="color: white" href="<?= base_url()?>usuario/menu/analista/importar-estornos">Módulo Estornos</a>                              
                  </div>
                </div> <!-- FIM TERCEIRA COL -->
              </div>
            </div>
          </div>
        </div>
      </div><!--FIM DA SEGUNDA ROW-->     
    </div><!-- FIM DO PAGE INNER -->
  </div><!-- FIM DO CONTENT -->
</div><!-- FIM DO MAIN PANEL -->
