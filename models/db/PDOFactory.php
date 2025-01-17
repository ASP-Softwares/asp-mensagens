<?php

/**
*
* Classe responsável por criar uma
* instância da PDO. 
*
* @author Raphael C. Silva
*
**/
class PDOFactory
{

	public static function createPDO($configFile = null)
	{

		if(is_null($configFile)){
			$configFile = ROOT . DIRECTORY_SEPARATOR . 'config/connection.php';
		}

		$config = require $configFile;
		$object = new PDO($config['dsn'], $config['username'], $config['password'], array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
			PDO::ATTR_ERRMODE 			 => PDO::ERRMODE_EXCEPTION
		));

		return $object;

	}

}