<?php $url     = $this->helpers['URLHelper']->getURL();?>
<?php $path    = $this->helpers['URLHelper']->getLocation(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <title>ASP Softwares</title>

    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php //echo $url;?>/assets/images/favicon.ico"> -->
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
    <link href="<?php echo $url; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url; ?>/assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url; ?>/assets/css/flaticon.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url; ?>/assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url; ?>/assets/libs/fancybox-master/dist/jquery.fancybox.min.css" rel="stylesheet" type="text/css" >
    <!--Main Slider-->

    <link href="<?php echo $url; ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $url; ?>/assets/css/system_style.css" rel="stylesheet">
    <!-- <link href="assets/css/header.css" rel="stylesheet" type="text/css">
        <link href="assets/css/footer.css" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="assets/css/index.css" rel="stylesheet" type="text/css" /> -->
        <link href="<?php echo $url; ?>/assets/css/custom.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <!-- <?php //require ROOT . '/views/home_shared/menu.php'; ?> -->

        <div class="medium-10 columns page">
            <?php require $file; ?>
        </div>

    <!-- <div class="footer">
        <?php //require ROOT . '/views/home_shared/footer.php'; ?>
    </div> -->

    <!--Footer Section End-->
    <!-- Site Wraper End -->

    <script type="text/javascript" src="<?php echo $url; ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo $url; ?>/assets/libs/jquery-mask/jquery.mask.min.js"></script>

    <script>
        var URL     = "<?php echo $url; ?>";
        var Helpers = {};
    </script>      

</body>
</html>