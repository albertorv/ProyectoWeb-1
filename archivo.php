<?php 
	$location = $_SERVER['REQUEST_URI'];
	$link = mysql_connect('mysql_host', 'root', '12345');
	print_r($est);
	echo "Guardado";
	$est=save($link);
 ?>