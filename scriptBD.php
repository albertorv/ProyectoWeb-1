<?php 

	$location = $_SERVER['REQUEST_URI'];
 
	
	//Conexión de Base de Datos mySql
    mysqli_connect("localhost","root","12345","estudiantes");
    $fp = fopen ($fecha.".csv", "r");
    while ($data = fgetcsv ($fp, 1000, ";")){
    	$insertar="INSERT INTO estudiante ('nombre','apellidos','cedula','correo','telefono')
    	VALUES ('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."')";
    }
    fclose($fp);
	// Lee el fichero en una variable,
	// y convierte su contenido a una estructura de datos
	$json = file_get_contents("config.json");
	$data = json_decode($json, true);
	$Server=$data["Server"]; 
	$User=$data["User"]; 
	$Pass=$data["Pass"];
	$DB=$data["DB"];
	echo $User;
	echo $Server;

	/*$conexion = mysql_connect("localhost", "root","12345");
	mysql_database("estudiantes",$conexion);
	$q = mysql_query("select * from estudiante",$conexion);*/
/*
    include("includes/class.phpmailer.php");
    include("includes/class.smtp.php");
    $mail = new PHPMailer();

    $mail->From=$Correo;
    $mail->FromNames=$Nombre; 
    $mail->AddAddress("albertorv.07@gmail.com"); // Dirección a la que llegaran los mensajes.
// Datos que apareceran en el correo que reciba
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Contacto";
    $mail->Body     =  "Nombre: $Nombre \n<br />".
    "Email: $Correo \n<br />".
    "Tel: $Telefono \n<br />".
    "Mensaje: $Mensaje \n<br />";
// Servidor SMTP
    $mail->IsSMTP(); 
    $mail->Host = "smtp.gmail.com";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "albertorv.07@gmail.com"; 
    $mail->Password = "xxxxx"; 

    $mail->From = "albertorv.07@gmail.com"; 
	$mail->FromName = "Alberto Rodríguez Villalobos"; 
	$mail->Subject = "Se ingredaron los estudiantes en la Base de Datos"; 
	$mail->AltBody = "Notificación de estudiante por día"; 
	$mail->MsgHTML("Cantidad de estudiantes hoy:".$contador); 
	$mail->AddAddress("albertorv.07@gmail.com", "Destino"); 
	$mail->IsHTML(true); 
	if(!$mail->Send()){
		echo "Error:" .$mail->ErrorInfo;
	}else {
		echo "Mensaje Enviado";
	}
*/
 ?>


