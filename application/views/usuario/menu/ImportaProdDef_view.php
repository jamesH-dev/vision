<div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <h3 class="">Área do Analista</h3>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Menu</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <!--<div class="collapse navbar-collapse justify-content-end">
              <form class="navbar-form">
                 <div class="input-group no-border">
                  <input type="text" value="" placeholder="Search...">
                  <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div> 
              </form>-->
              <!-- <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="javascript:;">
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                      Stats
                    </p>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">notifications</i>
                    <span class="notification">5</span>
                    <p class="d-lg-none d-md-block">
                      Some Actions
                    </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                    <a class="dropdown-item" href="#">Another Notification</a>
                    <a class="dropdown-item" href="#">Another One</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">
                      Account
                    </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Log out</a>
                  </div>
                </li>
              </ul> 
            </div>-->
          </div> <!-- FIM DO CONTAINER FLUID DO NAV -->
        </nav>
        <!-- End Navbar -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card shadow mb-4"> <!-- Card Collapsable -->
                  <a href="#diario" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="diario" style="color: white; background-color: #411947">
                    <h3>IMPORTAÇÕES MENSAIS</h3>
                  </a>
                  <hr>               
                  <div class="collapse show" id="diario">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                          <form action="<?= base_url();?>usuario/menu/analista/importar-produto-definitivo/arquivo" class="excel-upl" id="excel-upl" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            <h3><i class="material-icons" style="margin-right: 4px; font-size: 40px; ">cloud_upload</i>Importar Produto (DEFINITIVO)</h3>
                            <input type="file" name="fileURL_prod_def">                            
                            <button type="submit" name="import_prod_def" class="float-right btn btn-primary">Importar</button>  
                            </form> 
                            <?php if(form_error('fileURL_prod_def')) {?> <br>   
                              <div class="alert alert-primary alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?php print form_error('fileURL_prod_def'); ?>
                              </div>
                            <?php } ?>
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


