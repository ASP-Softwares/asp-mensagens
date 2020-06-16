<?php

/**
*
* Arquivo com as configurações do banco de dados.
*
* @author Raphael C. Silva
*
**/

$config = array(
	'dsn'      => 'mysql:dbname=boletos;host=45.229.104.29',
	'username' => 'ASPDev',
	'password' => 'asp2019@@'
);

// Caso seja o ambiente de produção a configuração é trocada
if(ENV == 'prod'){
	$config = array(
		'dsn'      => 'mysql:dbname=boletos;host=45.229.104.29',
		'username' => 'ASPDev',
		'password' => 'asp2019@@'
	);
}

return $config;