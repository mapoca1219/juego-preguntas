<?php

/**
 * Controlador principaL
 */
class HomeController
{
	public function index()
	{
		if (isset($_SESSION['user'])) {
			require 'Views/Layout.php';
			require 'Views/Home.php';
			require 'Views/Scripts.php';
		}
	}
}