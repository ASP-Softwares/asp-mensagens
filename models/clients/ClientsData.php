<?php
date_default_timezone_set('America/Sao_Paulo');
/**
*
* Classe que busca dados de clientes no banco
*
* @author Vítor Paes
* 
**/
class ClientsData
{

	private $pdoQuery;

	public function __construct(){

		$this->pdoQuery = new PDOQuery;

	}

	public function getClient($idCliente){
		
		$id = base64_decode($idCliente);

		$sql = 'SELECT c.*
		FROM cliente c
		WHERE c.Id = :id';

		$cliente = $this->pdoQuery->fetch($sql, array(
			':id' => $id
		));

		return $cliente;
	}

	public function getMessage($idmsg){

		$id = base64_decode($idmsg);

		$sql = 'SELECT msg.HTML
		FROM mensagem msg
		WHERE msg.Id = :id';

		$data = $this->pdoQuery->fetch($sql, array(
			':id' => $id
		));

		return $data;

	}
	
}