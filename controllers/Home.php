<?php

/**
*
* Controller da página inicial.
*
* @author Raphael C. Silva
*
**/
class Home extends Controller
{

	public function index()
	{

		$this->setLayout('site/home/index.php');
		$this->view('site/home/home.php');

	}

	public function about(array $params)
	{

		$this->setLayout('site/home/index.php');
		$this->view('site/home/about-us.php');

	}

}