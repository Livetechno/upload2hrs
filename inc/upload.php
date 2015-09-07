<?php 
/*
//////////////////////////////////////
// Archivo: upload.php
// Objetivo: Se encarga de gestionar el upload del archivo.
// Fecha: 07-09/20015
*/

require_once('../class/class.gestionupload.php');
$uploadArchivo = new GestionUpload();
$uploadArchivo->upload($_FILES["archivo"]);

?>