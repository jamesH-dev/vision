<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Selecione o Gerente:</h4>
       </div><!-- FIM DO PAGE HEADER -->
       <div class="row">
        <?php foreach ($gerentes as $key => $value): ?>
           <div class="col-md-4">
             <div class="card">
               <div class="card card-profile card-secondary" style="margin-bottom: 0px !important; padding-bottom: 10px;">
                  <div class="card-header">
                    <div class="profile-picture">
                      <div class="avatar avatar-xxl">
                        <img src="<?= base_url() ?><?= $value->diretorio_foto_usuario ?>" alt="..." class="avatar-img rounded-circle">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="user-profile text-center">
                      <div class="name"><?= $value->minuscula_usuario?></div>
                      <div class="job"><?= $value->loja_usuario?></div><br>
                      <div class="view-profile">
                        <a href="<?= base_url() ?>usuario/menu/premiacao/loja?loja=<?=$value->loja_usuario?>" class="btn btn-secondary btn-block">Entrar</a>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
           </div>
        <?php endforeach;?>
       </div>

      
    </div><!-- FIM DO PAGE INNER -->
  </div>

</div><!-- FIM DO MAIN PANEL -->