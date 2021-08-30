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
                <h4 class="card-title"><i class="fas fa-cloud-upload-alt"></i> Importação Diária</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-home-tab-icons" data-toggle="pill" href="#v-pills-home-icons" role="tab" aria-controls="v-pills-home-icons" aria-selected="true">
                        <i class="fas fa-clipboard-check"></i>
                        Importação de Serviços
                      </a>
                      <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                        <i class="fas fa-mobile-alt "></i>
                        Importação de Produtos
                      </a>
                      <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-qual-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                        <i class="fas fa-tachometer-alt "></i>
                        Importação de NPS
                      </a>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="tab-content" id="v-pills-with-icon-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons"><br><br>
                        <div class="row">
                          <div class="col-md-9">
                            <h3>Último Serviço Importado</h3>
                            <h3><?= $data_servico ?></h3>
                          </div>
                          <div class="col-md-3">                            
                            <div class="btn btn-primary">
                              <a style="color: white" href="<?= base_url()?>usuario/menu/analista/importar-servico">Iniciar Módulo</a>                            
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons"><br><br>
                        <div class="row">
                          <div class="col-md-9">
                            <h3>Último Produto Importado</h3>
                            <h3><?= $data_produto ?></h3>
                          </div>
                          <div class="col-md-3">
                            <div class="btn btn-primary">
                              <a style="color: white" href="<?= base_url()?>usuario/menu/analista/importar-produto">Iniciar Módulo</a> 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-pills-qual-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons"><br><br>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="btn btn-primary">
                              <a style="color: white" href="<?= base_url()?>usuario/menu/analista/importar-qualidade">Iniciar Módulo</a>                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--FIM DA PRIMEIRA ROW -->
      </div>
    </div>
  </div>
</div>