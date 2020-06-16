<?php

/**
*
* Definição do ambiente (local ou online)
*
* @author Vitor Paes
*
**/

/**
*
* Verificação do ambiente atual
*
**/
$env = 'prod';

if(!empty($_SERVER['SERVER_NAME']) and $_SERVER['SERVER_NAME'] === 'localhost' or substr_compare($_SERVER['SERVER_NAME'], "192", 0) or substr_compare($_SERVER['SERVER_NAME'], "127", 0)){
	$env = 'dev';
}

// var_dump($_SERVER['SERVER_NAME']);die;

/**
*
* Controle do erro reporting de acordo com o ambiente.
*
**/
$error = -1;

if($env == 'prod'){
	$error = false;
}

error_reporting(E_ALL);