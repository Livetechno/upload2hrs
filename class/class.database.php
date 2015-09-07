<?php 
/*
//////////////////////////////////////
// Archivo: class.database.php
// Objetivo: Gestiona la conexion a la base de datos
// Fecha: 07-09/20015
//////////////////////////////////////
*/

class Database {

	protected $servidor = "localhost"; // Servidor
	protected $usuario	= "root"; // Usuario
	protected $password	= ""; // Contraseña
	protected $database	= "app_upload2hrs"; // Base de datos
	protected $charset 	= "UTF8";
	public $mysqli;

	public function init(){
		$this->mysqli = new mysqli($this->servidor,$this->usuario,$this->password,$this->database);
		@$this->mysqli->set_charset($this->charset);
		if ($this->mysqli->connect_errno) {
			echo "Error al conectar a la base de datos";
			return false;
		}
		return $this->mysqli;
	}
	
}


 ?>