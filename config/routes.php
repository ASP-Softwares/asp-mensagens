<?php

/**
*
* Definição das rotas e seus respectivos controllers e actions
*
* @author Raphael C. Silva
*
**/

$commonRoutes = array(
	'/'          	   	=> 	'HomeController/index',
	'status/bloqueado'  => 	'StatusController/bloqueado',
	'status/mensagem'  => 	'StatusController/index',
);

$commonPost = array(
);


$commonRoutes = array_merge($commonRoutes, $commonPost);

return $commonRoutes;