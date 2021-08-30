<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Entrar | Delta Vision</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url()?>assets/img/vision_ico.png" sizes="24x24" type="image/pngxsxs"/>

    <!-- Fonts and icons -->
    <script src="<?= base_url() ?>assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Open+Sans:300,400,600,700"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['<?= base_url() ?>assets/css/fonts.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/azzara.css">
    <style type="text/css">
        .fundo
        {
            width: 100%;  
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;

            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            z-index: 1;  
        }
        .logo{
            width: 300px;
            height: 235px;
            margin-left: 20px;
            margin-bottom: 20px;

        }
    </style>
</head>
<body class="login">
    <div style="width: 100%; margin: 0 auto;">        
        <div class="fundo" style="background-image: url('<?= base_url() ?>assets/img/bg-01.jpg');">
            <div class="wrapper wrapper-login">
                <div class="container container-login animated fadeIn">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid " src="<?= base_url() ?>assets/img/logo.png">        
                        </div>                                          
                    </div><br><br>
                    <form class="login-form" action="<?= base_url('login') ?>" method="post">
                        <div class="form-group form-floating-label">
                            <input id="username" name="usuario_email" type="text" class="form-control input-border-bottom" required>
                            <label for="username" class="placeholder">Usuário</label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input id="password" name="usuario_password" type="password" class="form-control input-border-bottom" required>
                            <label for="password" class="placeholder">Senha</label>
                            <div class="show-password">
                                <i class="flaticon-interface"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-secondary btn-round">Entrar </button>
                            </div>
                            <div class="col-md-4"></div>
                        </div><br><br>
                        <?php alert($this->session->flashdata('login'), 'danger') ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/ready.js"></script>
</body>
</html>