<?php

/**
*
* Classe que manipula os dados do usuário na sessão.
*
* @author Willen L. Carneiro
* 
**/
class AdminSession
{

	private function control()
	{
		
		if(!isset($_SESSION)){
			
			session_start();

		}

	}

	public function saveAdmin(array $data)
	{
		$this->control();
		$_SESSION['Admin'] = $data;
		
	}


	public function hasAdmin()
	{

		$this->control();

		if(isset($_SESSION['Admin'])){
			return true;
		}

		return false;

	}

	public function getAdmin($info)
	{

		$this->control();

		if(isset($_SESSION['Admin'][$info])){
			return $_SESSION['Admin'][$info];
		}

	}

	public function showAdmin($info)
	{

		$this->control();

		echo $_SESSION['Admin'][$info];

	}

	public function setAdmin($info, $value)
	{

		$this->control();

		$_SESSION['Admin'][$info] = $value;

	}

	public function deleteAdmin()
	{

		$this->control();
		unset($_SESSION['Admin']);

	}

}