<?php

require 'Models/Login.php';
/**
 * controlador de inicio de sesión
 */
class LoginController
{
	private $model;

	public function __construct()
	{
		$this->model = new Login;
	}

	public function index()
	{
		require 'Views/Login.php';
	}

	public function loginIn()
	{
        $validateUser = $this->model->validateUser($_POST);
        if ($validateUser === true) {
        	header('Location: ?controller=home');
        }else{
        	$error = [
        		'errorMessage' => $validateUser,
        		'nombre' => $_POST['nombre']
        	];
        	require 'Views/Login.php';
        }
	}
	public function logout()
	{
		if ($_SESSION['user']) {
			session_destroy();
			header('Location: ?controller=login');
		} else {
			header('Location: ?controller=login');
		}
	}
	
}