<?php 
	date_default_timezone_set("America/Costa_Rica");
	$fecha=date("dmY");
 
	
	$db = new mysqli('localhost', 'root', '', 'estudiantes');

	if (($paso = fopen($fecha.".csv","r")) !== false) {
		while (($data = fgetcsv($paso, 1000,";")) !== false) {
			foreach($data as $i => $content) {
				$data[$i] = $db->real_escape_string($content); // caracteres especiales los convierte en String cuando viene desde el CSV
			}
			$db->query("INSERT INTO estudiante VALUES('" . implode("','", $data) . "');"); //implode acepta parámetros en cualquier orden
		}
		fclose($paso);
	}


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


