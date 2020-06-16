<?php

/**
*
* Controller do admin.
*
* @author Vitor Paes
*
**/
class StatusController extends Controller
{

	public function index(array $params){
		$encrypted = $params[0];	
		$cData = new ClientsData;

		$message = $cData->getMessage($encrypted);
		
		$this->setLayout('shared/layout.php');
		$this->view('status/index.php', array(
			'message' => $message
		));
	}

	public function bloqueado(array $params){
		
		$encrypted = $params[0];	
		$cData = new ClientsData;

		$cliente = $cData->getClient($encrypted);
		
		$this->setLayout('shared/layout.php');
		$this->view('status/bloqueado.php', array(
			'cliente' => $cliente
		));

	}

}