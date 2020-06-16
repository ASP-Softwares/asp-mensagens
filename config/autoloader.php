<?php

/**
*
* Autoloader
* 
* @author Raphael C. Silva
*
**/

/**
*
* Pastas onde as classes serão adicionadas.
* OBS: Para suporte de uma nova pasta adicione no array.
*
**/
$paths = array(
  'controllers',
  'controllers/admin',
  'controllers/status',
  'helpers',
  'models',
  'models/db',
  'models/admin',
  'models/clients'
);

/**
*
* Registrando o autoloader
*
**/
spl_autoload_register(function($classname) use ($paths){

  $found = false;

  foreach($paths as $path){

    $file = $path . DIRECTORY_SEPARATOR . $classname . '.php';

    if(file_exists($file)){
      require $file;
      $found = true;
      break;
    }

  }

  if(!$found){
    exit('Class ' . $classname . ' not found.');
  }

});