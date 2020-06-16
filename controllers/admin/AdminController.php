<?php

/**
*
* Controller do admin.
*
* @author Raphael C. Silva
*
**/
class AdminController extends Controller
{

	public function index()
	{
		if($this->helpers['AdminSession']->hasAdmin()) {

			$this->setLayout('admin/shared/layout.php');
			$this->view('admin/home/index.php');

		} else {

			$this->view('admin/login/index.php');

		}

	}

	public function login()
	{	

		$this->view('admin/login/index.php');

	}

	public function execLogin()
	{

		$username  	= filter_var($_POST['username']);
		$password  	= filter_var($_POST['password']);

		$adminLogin = new AdminUsernameChecker;

		echo json_encode(array(
			'login' => $adminLogin->login($username, $password)
		));

	}

	public function checkAdmin()
	{
		$username = filter_var($_POST['username']);
		$checker  = new AdminUsernameChecker;

		echo json_encode(array(
			'check' => $checker->check($username)
		));

	}

	public function logout(){
		// apaga os dados do usuário logado

		$this->helpers['AdminSession']->deleteAdmin();
		header('Location: ' . $this->helpers['URLHelper']->getURL('/login'));

	}

}