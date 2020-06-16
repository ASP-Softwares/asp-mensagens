<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Emprezaz.com">
    <title>Emprezaz.com</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="<?php echo $this->helpers['URLHelper']->getURL('/assets/libs/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css'); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      <?php require $file; ?>
    </div>
    
    <script src="<?php echo $this->helpers['URLHelper']->getURL('/assets/libs/jquery/jquery-3.2.1.min.js'); ?>"></script>
  </body>
</html>