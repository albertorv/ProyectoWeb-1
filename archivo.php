<?php 

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
	//Conexión de Base de Datos mySql
    mysqli_connect("localhost","root","","estudiantes");
	
    $fp = fopen ($fecha.".csv", "r");

    while ($data = fgetcsv ($fp, 1000, ";")){

    	$insertar="INSERT INTO estudiante ('nombre','apellidos','cedula','correo','telefono')
    	VALUES ('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."')";
    }
    fclose($fp);
    header('refresh:2; url=index.html');
?>
