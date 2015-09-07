<?php 
/*
//////////////////////////////////////
// Archivo: class.gestionupload.php
// Objetivo: Gestiona la subida interna del upload.
// Fecha: 07-09/20015
//////////////////////////////////////
*/

require_once('class.upload.php');
require_once('class.database.php');

class GestionUpload extends Database{
	
	public $nombreIMG;
	protected $db;

	public function __construct(){
		$this->nombreIMG = $this->generarNombre();
		$this->db = $this->init();
	}

	public function upload($archivo){

		$upload = new Upload($archivo);
		if ($upload->uploaded) {
		 	$upload->file_new_name_body 	=	$this->nombreIMG;
		 	$privado 	=	$_POST["privado"];
		 	$extension 	=	end((explode(".", $archivo["name"])));
		 	$upload->allowed = array('image/*');
		 	$upload->process('../upload/');
		 	if ($upload->processed) {
		 		$consulta 	=	$this->db->query("INSERT INTO uploads VALUES (null, '$this->nombreIMG.$extension', '$privado', now())");
				$upload->Clean();
				header("Location: ../index.php?log=exito&msg=Archivo subido con éxito.");
				return false;
		   	}else {
		   		header("Location: ../index.php?log=error&msg=".$upload->error);
				return false;
			} 
		} 


	}

	public function generarNombre(){
		return md5(mt_rand(10000,90000));
	}

	
}


?>