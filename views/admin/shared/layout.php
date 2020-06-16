<?php $url          = $this->helpers['URLHelper']->getURL();?>
<?php $location     = $this->helpers['URLHelper']->getLocationAdmin();?> 
<?php $path         = $this->helpers['URLHelper']->getLocation();?>
<script type="text/javascript"> 
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <title>ASP - Acessos</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $url;?>/assets/img/favicon/favicon.ico">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">

    <link href="<?php echo $url ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url ?>/assets/libs/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url ?>/assets/libs/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url ?>/assets/css/flaticon.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url ?>/assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url ?>/assets/libs/fancybox-master/dist/jquery.fancybox.min.css" rel="stylesheet" type="text/css" >
    <!--Main Slider-->

    <!-- template -->

    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/template/radio-score.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/template/main.css">
    <!-- end template  -->

    <!-- customs css  -->
    <link href="<?php echo $url ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $url ?>/assets/css/header.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url ?>/assets/css/dashboard_style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url ?>/assets/css/system_style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url ?>/assets/css/custom.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <header class="page-header">
        <div class="expanded row">
            <div class="col-md-2 logo">
                <img src="<?php echo $url; ?>/assets/img/logos/ASP Softwares.png">
            </div>
            <!-- navbar right -->
            <div class="col-md-10 navbar-right">
                <div class="toggle-menu" data-open-sidebar>
                    <i class="fa fa-bars" style="margin-left: 10px;"></i>
                </div>

                <ul class="nav pull-right">
                    <li class="switch-li toggle-sidebar">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </li>

                    <li class="divider"></li>

                    <div class="operations-menu">

                        <li class="mr-0">
                            <a href="javascript:void(0)" onclick="location.reload();">
                                <i class="fa fa-sync-alt"></i>
                            </a>
                        </li>

                        <li class="hide-fullscreen ml-0">
                            <a href="javascript:void(0)" data-action="fullscreen">
                                <i class="fa fa-expand"></i>
                            </a>
                        </li>

                    </div>
                    
                </ul>
            </div>
        </div>
    </header>

    <section id="content">
        <div class="expanded row app-wrap">

            <div class="col-md-2 c-2">

                <?php require ROOT . '/views/admin/shared/menu.php'; ?>

            </div>

            <div class="col-md-10 page">

                <?php require $file;?>

            </div>
        </div>
    </section>

</body>

<script type="text/javascript" src="<?php echo $url ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $url ?>/assets/js/bootstrap.min.js"></script>

<!-- Easing Effect Js -->
<script src="<?php echo $url ?>/assets/js/jquery.easing.js" type="text/javascript"></script>
<script>
    var URL = "<?php echo $url; ?>";
    var Helpers = {};
</script>      

<script src="<?php echo $url; ?>/assets/libs/MaskMoney/jquery.maskMoney.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="<?php echo $url; ?>/assets/libs/chart/Chart.bundle.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>
<script src="<?php echo $url; ?>/assets/libs/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
<script src="<?php echo $url; ?>/assets/libs/jquery-validation-1.17.0/dist/localization/messages_pt_BR.min.js"></script>
<script src="<?php echo $url; ?>/assets/libs/igorescobar-jQuery-Mask-Plugin-v1.7.6/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.js"></script>
<script src="<?php echo $url; ?>/assets/js/helpers/helpers.js"></script>
<script src="<?php echo $url; ?>/assets/js/login/loginAdmin.js"></script>
<script type="text/javascript" src="https://unpkg.com/sweetalert2@7.21.1/dist/sweetalert2.all.js"></script>
<script src="<?php echo $url; ?>/assets/js/template/app.js"></script>


<!-- customs js -->
<?php if($location == 'empresa') { ?>
    <script src="<?php echo $url; ?>/assets/js/admin/enterprise.js"></script>
<?php } else if($path == 'registers') { ?>
    <script src="<?php echo $url; ?>/assets/js/imports/imports.js"></script>
<?php } else if($location == 'sistema') { ?>
    <script src="<?php echo $url; ?>/assets/js/admin/system.js"></script>
<?php } ?>
<script src="<?php echo $url ?>/assets/js/custom.js" type="text/javascript"></script>

</html>