<?php

require 'Models/Preguntas.php';

/**
 * controlador de preguntas
 */
class PreguntaController
{
	private $model;

	public function __construct()
	{
		$this->model = new Pregunta;
	}

	public function index()
	{
		if (isset($_SESSION['user'])) {
			require 'Views/Layout.php';
			$products = $this->model->getAll();
			require 'Views/Pregunta/list.php';
			require 'views/Scripts.php';
		}
	}

	public function new()
	{
		if (isset($_SESSION['user'])) {
			require 'Views/Layout.php';
			require 'Views/Pregunta/new.php';
			require 'views/Scripts.php';
	    }
	}

	public function save()
	{
		$this->model->newPregunta($_REQUEST);
		header('Location: ?controller=product');
	}

	public function edit()
	{
		if (isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$data = $this->model->getById($id);
			require 'Views/Layout.php';
			require 'Views/Pregunta/edit.php';
			require 'views/Scripts.php';
		}
	}

	public function update()
	{
		if ($_POST) {
			$this->model->updatePregunta($_POST);
			header('Location: ?controller=pregunta');
		}
	}

	public function delete()
	{
     	$this->model->deletePregunta($_REQUEST);
		header('Location: ?controller=pregunta');
	}
}