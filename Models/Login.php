<?php

/**
 * modelo login
 */
class Login
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

	public function validateUser($data)
	{
		try {
			$strSql = "SELECT * FROM usuario
			WHERE nombre = '{$data['nombre']}' AND clave = '{$data['clave']}'";
			$query = $this->pdo->select($strSql);
			if (isset($query[0]->id_usuario)) {
				$_SESSION['user'] = $query[0];
				return true;
			}else{
				return 'nombre o contraseña no validos';
			}
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}