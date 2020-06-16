<?php $url     = $this->helpers['URLHelper']->getURL();?>
<?php $path    = $this->helpers['URLHelper']->getLocation(); ?>
<link href="<?php echo $url;?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $url;?>/assets/libs/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $url;?>/assets/css/login.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $url;?>/assets/img/favicon/favicon.ico">

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta name="keywords" content="">
  <title>Admin - AcessCounter</title>
</head>
<body>

  <section id="entrar">
    <div class="container">

      <center>
        <div class="col-md-5">
          <div class="card-login">
            <div class="card-title">
              <h3>Entrar</h3>
              <h5 id="name-user">Admin</h5>
            </div>
            <div class="inputs">
              <input type="text" class="form-control" aria-label="Default" placeholder="Login ou e-mail" id="login">
              <input type="password" class="form-control hide" placeholder="Senha" id="senha">
            </div>
            <div class="buttons">
              <div class="btn btn-voltar hide">
                <i class="fa fa-arrow-left"></i>
              </div>
              <div class="btn btn-entrar">
                <i class="fa fa-arrow-right"></i>
              </div>
            </div>

          </div>
        </div>
      </center>

    </div>
  </section>

</body>
</html>

<script>
  var URL     = "<?php echo $url; ?>";
  var Helpers = {};
</script>  

<script type="text/javascript" src="<?php echo $url ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $url ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php echo $url ?>/assets/js/jquery.easing.js" type="text/javascript"></script>
<script src="<?php echo $url ?>/assets/js/jquery.appear.js" type="text/javascript"></script>
<!-- sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- custom js login.js -->
<script type="text/javascript" src="<?php echo $url ?>/assets/js/login/loginAdmin.js"></script>