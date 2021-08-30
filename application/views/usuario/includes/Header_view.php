<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Delta Vision</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="<?= base_url()?>assets/img/vision_ico.png" sizes="24x24" type="image/pngxsxs"/>

  <!-- Fonts and icons -->
  <script src="<?=base_url() ?>assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {"families":["Open+Sans:300,400,600,700"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['<?=base_url() ?>assets/css/fonts.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/azzara.css" >

</head>

<body class="">
  <div class="wrapper ">
    <div class="main-header" data-background-color="purple">
      <!-- Logo Header -->
      <div class="logo-header">
        
        <a href="<?= base_url() ?>usuario/menu" class="logo">
          <img src="<?= base_url() ?>assets/img/logo3.png" alt="navbar brand" class="navbar-brand" style="width: 152px; height: 28.5px; margin: 15px; margin-right: 10px">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
        <div class="navbar-minimize" style="margin-top: 20px;">
          <button class="btn btn-minimize btn-rounded">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg">
        <!--
        <div class="container-fluid">
          <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pr-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input type="text" placeholder="Buscar ..." class="form-control">
              </div>
            </form>
          </div>
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
              <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                <i class="fa fa-search"></i>
              </a>
            </li>
            <li class="nav-item dropdown hidden-caret">
              <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-envelope"></i>
              </a>
              <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                <li>
                  <div class="dropdown-title d-flex justify-content-between align-items-center">
                    Messages                  
                    <a href="#" class="small">Mark all as read</a>
                  </div>
                </li>
                <li>
                  <div class="message-notif-scroll scrollbar-outer">
                    <div class="notif-center">
                      <a href="#">
                        <div class="notif-img"> 
                          <img src="../assets/img/jm_denis.jpg" alt="Img Profile">
                        </div>
                        <div class="notif-content">
                          <span class="subject">Jimmy Denis</span>
                          <span class="block">
                            How are you ?
                          </span>
                          <span class="time">5 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img"> 
                          <img src="../assets/img/chadengle.jpg" alt="Img Profile">
                        </div>
                        <div class="notif-content">
                          <span class="subject">Chad</span>
                          <span class="block">
                            Ok, Thanks !
                          </span>
                          <span class="time">12 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img"> 
                          <img src="../assets/img/mlane.jpg" alt="Img Profile">
                        </div>
                        <div class="notif-content">
                          <span class="subject">Jhon Doe</span>
                          <span class="block">
                            Ready for the meeting today...
                          </span>
                          <span class="time">12 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img"> 
                          <img src="../assets/img/talha.jpg" alt="Img Profile">
                        </div>
                        <div class="notif-content">
                          <span class="subject">Talha</span>
                          <span class="block">
                            Hi, Apa Kabar ?
                          </span>
                          <span class="time">17 minutes ago</span> 
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown hidden-caret">
              <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="notification">4</span>
              </a>
              <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                <li>
                  <div class="dropdown-title">You have 4 new notification</div>
                </li>
                <li>
                  <div class="notif-scroll scrollbar-outer">
                    <div class="notif-center">
                      <a href="#">
                        <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                        <div class="notif-content">
                          <span class="block">
                            New user registered
                          </span>
                          <span class="time">5 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                        <div class="notif-content">
                          <span class="block">
                            Rahmad commented on Admin
                          </span>
                          <span class="time">12 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img"> 
                          <img src="../assets/img/profile2.jpg" alt="Img Profile">
                        </div>
                        <div class="notif-content">
                          <span class="block">
                            Reza send messages to you
                          </span>
                          <span class="time">12 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                        <div class="notif-content">
                          <span class="block">
                            Farrah liked Admin
                          </span>
                          <span class="time">17 minutes ago</span> 
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown hidden-caret">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                  <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <li>
                  <div class="user-box">
                    <div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                    <div class="u-text">
                      <h4>Hizrian</h4>
                      <p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">My Profile</a>
                  <a class="dropdown-item" href="#">My Balance</a>
                  <a class="dropdown-item" href="#">Inbox</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Account Setting</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Logout</a>
                </li>
              </ul>
            </li>
            
          </ul>
        </div> -->
      </nav>
      <!-- End Navbar -->
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
      
      <div class="sidebar-background"></div>
      <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
          <div class="user">
            <div class="avatar-sm float-left mr-2">
              <img src="<?=base_url()?><?=$_SESSION['diretorio_foto_usuario'] ?>" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="info">
              <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                <span>
                  <?= $_SESSION ['minuscula_usuario'] ?>
                  <span class="user-level"><?= $_SESSION ['funcao_usuario'] ?></span>
                  <span class="caret"></span>
                </span>
              </a>
              <div class="clearfix"></div>

              <div class="collapse in" id="collapseExample">
                <ul class="nav">
                  <li>
                    <a href="<?= base_url()?>logout">
                      <span class="link-collapse">Sair</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a href="<?= base_url()?>usuario/menu/visao-geral">
                <i class="fas fa-chart-line"></i>
                <p>Visão Geral</p>
              </a>
            </li>
            <li class="nav-section">
              <!--<span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>-->
              <h4 class="text-section">Visão Detalhada</h4>
            </li>
            <li class="nav-item">
              <a data-toggle="collapse" href="#base">
                <i class="fas fa-shopping-bag"></i>
                <p>Lojas</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="base">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="<?=base_url()?>usuario/menu/lojas?loja=CENTRO">
                      <span class="sub-item">Loja Centro</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>usuario/menu/lojas?loja=SHOPPING">
                      <span class="sub-item">Loja Shopping</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>usuario/menu/lojas?loja=JANUARIA">
                      <span class="sub-item">Loja Januária</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>usuario/menu/lojas?loja=S_FRANCISCO">
                      <span class="sub-item">Loja São Francisco</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>usuario/menu/lojas?loja=C_JESUS">
                      <span class="sub-item">Loja Coração de Jesus</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>usuario/menu/lojas?loja=PORTEIRINHA">
                      <span class="sub-item">Loja Porteirinha</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>usuario/menu/lojas?loja=JANAUBA">
                      <span class="sub-item">Loja Janaúba</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>usuario/menu/lojas?loja=JAIBA">
                      <span class="sub-item">Loja Jaíba</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>usuario/menu/lojas?loja=B_MINAS">
                      <span class="sub-item">Loja Brasília de Minas</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>usuario/menu/lojas?loja=MANGA">
                      <span class="sub-item">Loja Loja Manga</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="<?=base_url() ?>usuario/menu/rankings">
                <i class="fas fa-trophy"></i>
                <p>Rankings</p>
                <!-- <span class="caret"></span> -->
              </a>              
            </li>
            <li class="nav-item">
              <a data-toggle="collapse" href="#forms">
                <i class="fas fa-money-bill-wave"></i>
                <p>Premiação</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="forms">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="<?= base_url() ?>usuario/menu/premiacao/coordenador">
                      <span class="sub-item">Coordenador</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= base_url() ?>usuario/menu/premiacao/lista-lojas">
                      <span class="sub-item">Lojas</span>
                    </a>
                  </li>                 
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a data-toggle="collapse" href="#tables">
                <i class="fas fa-chart-bar"></i>
                <p>Análise Qualitativa</p>
                <!-- <span class="caret"></span> -->
              </a>              
            </li>
            <li class="nav-item">
              <a data-toggle="collapse" href="#maps">
                <i class="fas fa-hand-rock"></i>
                <p>Cinturão UFC</p>
                <!-- <span class="caret"></span> -->
              </a>              
            </li>
            <li class="nav-item">
              <a data-toggle="collapse" href="#charts">
                <i class="fas fa-database"></i>
                <p>Área do Analista</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="<?=base_url()?>usuario/menu/analista-diario">
                      <span class="sub-item">Importações Diárias</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>usuario/menu/analista-mensal">
                      <span class="sub-item">Importações Mensais</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            
            <!--<li class="nav-item">
              <a href="widgets.html">
                <i class="fas fa-desktop"></i>
                <p>Widgets</p>
                <span class="badge badge-count badge-success">4</span>
              </a>
            </li>
            <li class="nav-item">
              <a data-toggle="collapse" href="#custompages">
                <i class="fas fa-paint-roller"></i>
                <p>Custom Pages</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="custompages">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="login.html">
                      <span class="sub-item">Login & Register 1</span>
                    </a>
                  </li>
                  <li>
                    <a href="login2.html">
                      <span class="sub-item">Login & Register 2</span>
                    </a>
                  </li>
                  <li>
                    <a href="userprofile.html">
                      <span class="sub-item">User Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="404.html">
                      <span class="sub-item">404</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a data-toggle="collapse" href="#submenu">
                <i class="fas fa-bars"></i>
                <p>Menu Levels</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="submenu">
                <ul class="nav nav-collapse">
                  <li>
                    <a data-toggle="collapse" href="#subnav1">
                      <span class="sub-item">Level 1</span>
                      <span class="caret"></span>
                    </a>
                    <div class="collapse" id="subnav1">
                      <ul class="nav nav-collapse subnav">
                        <li>
                          <a href="#">
                            <span class="sub-item">Level 2</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="sub-item">Level 2</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a data-toggle="collapse" href="#subnav2">
                      <span class="sub-item">Level 1</span>
                      <span class="caret"></span>
                    </a>
                    <div class="collapse" id="subnav2">
                      <ul class="nav nav-collapse subnav">
                        <li>
                          <a href="#">
                            <span class="sub-item">Level 2</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#">
                      <span class="sub-item">Level 1</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->
    
  




































<!--
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?=base_url() ?>assets/img/sidebar-1.jpg"> -->
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      <div class="logo"><a href="<?= base_url() ?>usuario/menu" class="simple-text logo-normal">
          <img class="img-fluid" src="<?= base_url() ?>assets/img/logo.png">
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>usuario/menu/visao-geral">
              <i class="material-icons">dashboard</i>
              <p>Visão Geral</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>usuario/menu/visao-loja">
              <i class="material-icons">local_mall</i>
              <p>Visão Loja</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url() ?>usuario/menu/analise-qualitativa">
              <i class="material-icons">insert_chart_outlined</i>
              <p>Análise Qualitativa</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url() ?>usuario/menu/premiacao">
              <i class="material-icons">attach_money</i>
              <p>Premiação</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="menu/cinturao.html">
              <i class="material-icons">sports_mma</i>
              <p>Cinturão UFC</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url() ?>usuario/menu/analista">
              <i class="material-icons">developer_mode</i>
              <p>Área Analista</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    -->