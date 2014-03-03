<?php 

	$location = $_SERVER['REQUEST_URI'];
 
	date_default_timezone_set("America/Costa_Rica");
	$fecha=date("dmY");
	$nombre=$_POST["name"];
	$apellido=$_POST["apellidos"];
	$cedula=$_POST["cedula"];
	$email=$_POST["email"];
	$telefono=$_POST["telefono"];

	$archivo = fopen($fecha.".csv", "a") or die("Problemas en la creación del archivo");
	fwrite($archivo, $nombre.";".$apellido.";".$cedula.";".$email.";".$telefono."\n");
	fclose($archivo);
	
 ?>


