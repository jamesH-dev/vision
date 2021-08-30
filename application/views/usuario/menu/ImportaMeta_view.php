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
                 Módulo de Metas - Importações Mensais
               </div>
               <div class="card-body">
                  <form action="<?= base_url();?>usuario/menu/analista/importar-meta/arquivo" class="excel-upl" id="excel-upl" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <h3><i class="fas fa-file-excel" style="margin-right: 4px; font-size: 40px; "></i>Importar Meta</h3>
                    <input type="file" name="fileURL_meta">                            
                    <button type="submit" name="import_meta" class="float-right btn btn-primary">Importar</button>  
                  </form> 
                  <?php if(form_error('fileURL_meta')) {?> <br>   
                    <div class="alert alert-primary alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <?php print form_error('fileURL_meta'); ?>
                    </div>       
                  <?php } ?>
               </div>
             </div>
           </div>
         </div>
       </div>     
    </div><!-- FIM DO PAGE INNER -->
  </div>
</div><!-- FIM DO MAIN PANEL -->