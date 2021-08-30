<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>404</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?=base_url() ?>assets/img/icon.ico" type="image/x-icon"/>
    
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
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/azzara.css">
</head>
<body class="page-not-found">
    <div class="wrapper not-found">
        <h1 class="animated fadeIn">404</h1>
        <div class="desc animated fadeIn"><span>OOPS!</span><br/>Percebi que você está perdido</div>
        <a href="<?=base_url() ?>usuario/menu" class="btn btn-primary btn-back-home mt-4 animated fadeInUp">
            <span class="btn-label mr-2">
                <i class="flaticon-home"></i>
            </span>
            Voltar para o início
        </a>
    </div>
    <script src="<?= base_url()?>assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url()?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= base_url()?>assets/js/core/popper.min.js"></script>
    <script src="<?= base_url()?>assets/js/core/bootstrap.min.js"></script>
</body>
</html>