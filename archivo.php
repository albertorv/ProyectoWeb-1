<?php 
	$location = $_SERVER['REQUEST_URI'];

	
	
	$conexion = mysql_connect("localhost", "root","12345");
	mysql_database("estudiantes",$conexion);
	$q = mysql_query("select * from estudiante",$conexion);

 ?>