<?php 

		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$mail = $_POST['mail'];
		$subject = $_POST['subject']

		$header = 'From: ' . $mail . " \r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-Type: text/plain";

		$mensaje = "Este mensaje fue enviado por " . $name . ", con numero telefónico " . $phone . " \r\n";
		$mensaje .= "Su e-mail es: " . $mail . " \r\n";
		$mensaje .= "El asunto es: " . $subject . " \r\n";
		$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
		$mensaje .= "Enviado el " . date('d/m/Y', time());

		$para = 'info@paolodavila.com';
		$asunto = 'Contacto desde Paolo Dávila';

		mail($para, $asunto, utf8_decode($mensaje), $header);
 ?>