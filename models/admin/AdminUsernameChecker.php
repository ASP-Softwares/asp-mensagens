<?php

/**
*
* Classe que verifica se o nome de usuário
* corresponde a alguma tabela do banco de dados.
*
* @author Willen L. Carneiro
*
**/
class AdminUsernameChecker
{

	private $pdoQuery;
	private $adminData;
	// private $password;
	private $unities;

	public function __construct()
	{

		$this->pdoQuery = new PDOQuery;
		$this->adminData   = new AdminSession;
		// $this->password   = new PasswordConverter;

	}

	private function getData($username, $table)
	{

		$data = $this->pdoQuery->fetch('SELECT * FROM ' . $table . ' WHERE Login = :value LIMIT 1', array(
			':value' => $username
		));

		if($data){

			return $data;

		} else {

			$data = $this->pdoQuery->fetch('SELECT * FROM ' . $table . ' WHERE Email = :value LIMIT 1', array(
				':value' => $username
			));

			return $data;
		}

	}

	private function checkUsernameAndPassword($username, $password, $dbUsername, $dbPassword, $dbEmail)
	{

		if(strtolower($username) !== strtolower($dbUsername)){
			if(strtolower($username) !== strtolower($dbEmail)){
				return false;
			}
		}

		if($password !== $dbPassword){
			return false;
		}

		return true;

	}


	private function saveData($table, array $data)
	{

		$pdo = array(
			'id'         => $data['Id'],
			'name'       => $data['Nome'],
			'username'   => $data['Login'],
			'password'   => $data['Senha'],
		);

		$this->adminData->saveAdmin($pdo);

	}

	private function checkUser($username, $password, $table)
	{

		$data = $this->getData($username, $table);

		if($data and $this->checkUsernameAndPassword($username, $password, $data['Login'], $data['Senha'], $data['Email'])){

			$this->saveData($table, $data);
			return true;

		}

		return false;

	}


	public function login($username, $password)
	{


		if($this->checkUser($username, $password, 'admin')){

			return true;

		}

		return false;

	}


	public function check($username)
	{
		
		$data = $this->pdoQuery->fetchAll('SELECT Id FROM admin WHERE Login = :value LIMIT 1', array(
			':value' => $username
		));

		if(count($data) === 1){
			return true;
		} else {
			$data = $this->pdoQuery->fetchAll('SELECT Id FROM admin WHERE Email = :value LIMIT 1', array(
				':value' => $username
			));
			if(count($data) === 1){
				return true;
			}
		}

		return false;

	}

}