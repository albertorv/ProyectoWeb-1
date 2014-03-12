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
	


	$archivo = fopen($fecha.".csv", "a") or die("Problemas en la creación del archivo");
	fwrite($archivo, $nombre.";".$apellido.";".$cedula.";".$email.";".$telefono."\n");
	fclose($archivo);
	//Conexión de Base de Datos mySql
    mysqli_connect("localhost","root","12345","estudiantes");
	
   
    while (($data = fgetcsv($archivo, 1000, ",")) !== FALSE) {
 	$numero = count($data);
   
    
    foreach ($data as $row) {
        $fila .= "'".$row."'".",";
        echo $fila."\n";
    }
    $fila = substr($fila, 0, -1);
    echo $fila."\n";
    
    // Consulta MySQL
    mysqli_query($mysqli,'INSERT INTO `estudiante`(`nombre`, `apellidos` ,`cedula`, `correo`,`telefono`) VALUES ('.$fila.')')
     or die('La Consulta no puede ser realizada: '.mysqli_error($mysqli));
    fclose($fp);
}
	// Lee el fichero en una variable,
	// y convierte su contenido a una estructura de datos
	$json = file_get_contents("config.json");
	$data = json_decode($json, true);
	$IP=$data["Server"]; 
	$USER=$data["User"]; 
	$PASSWORD=$data["Pass"];
	$DB=$data["DB"];

	echo $USER;
	echo $IP;


?>

