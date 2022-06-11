<?php

/**
 * controlador administrador
 */
class AdminController
{
	
	public function index()
	{
		require 'Views/Layout.php';
		require 'Views/Admins/list.php';
		require 'Views/Scripts.php';
	}
}