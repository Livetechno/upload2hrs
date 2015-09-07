<?php 
/*
//////////////////////////////////////
// Archivo: class.general.php
// Objetivo: Configuracion general de la aplicacion.
// Fecha: 07-09/20015
*/

require_once('class.database.php');

class General extends Database{

	public function __construct(){
		$this->db = $this->init();
	}
	
	public function estado($log, $msg){
		switch ($log) {
			case 'exito':
				$mensaje = '<div class="alert alert-success" role="alert"><strong>Éxito:</strong> '.$msg.' </div>';
				break;
			
			case 'error':
				$mensaje = '<div class="alert alert-danger" role="alert"><strong>Error:</strong> '.$msg.' </div>';
				break;
		}

		return $mensaje;
	}

	public function listaUpload(){
		$consulta 	=	$this->db->query("SELECT * FROM uploads WHERE privado = 0");
		return $consulta;
	}
	
}

$general = new General();

?>