<?php

/**
 * Modelo Pregunta
 */
class Pregunta
{
	private $pdo;

	public function __construct()
	{
		try {
			$this->pdo = new Conexion;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getAll()
	{
		try {
			$strSql = "SELECT * FROM preguntas";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newPregunta($data)
	{
		try {
			$this->pdo->insert('preguntas' , $data);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getById($id)
	{
     	try {
     		$strSql = "SELECT * FROM preguntas WHERE id_pregunta = :id_pregunta";
     		$array = ['id_pregunta' => $id];
     		$query = $this->pdo->select($strSql,$array);
     		return $query;
     	} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function updatePregunta($data)
	{
		try {
			$strWhere = 'id_pregunta='.$data['id_pregunta'];
			$this->pdo->update('preguntas' , $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function deletePregunta($data)
	{
		try {
			$strWhere = 'id_pregunta='.$data['id_pregunta'];
			$this->pdo->delete('preguntas' , $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}


}