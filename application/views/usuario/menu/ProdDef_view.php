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
                <h2>Produtos Importados no Banco de Dados</h2>
                <div class="float-right">  
                    <a href="<?= base_url()?>usuario/menu/analista" class="btn btn-primary btn-sm"><i class="fa fa-file-upload"></i> Voltar para Área do Analista</a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class=col-md-12>
                <div class="card-body">                  
                      <div class="table-responsive">                  
                          <table id="tabela" class="table table-hover table-light">
                            <thead>                              
                                <th scope="col">Filial</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Vendedor</th>
                                <th scope="col">Data</th>
                                <th scope="col">Valor</th>     
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
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                      </div>
                    </div>                
              </div>
            </div>

