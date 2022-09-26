<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$mail2 = "contactanos@regalosgregory.com";

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$header2 = 'From:' . $mail2 . " \r\n";
$header2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header2 .= "Mime-Version: 1.0 \r\n";
$header2 .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$message2 = "Recibimos tu siguiente mensaje:\r\n";
$message2 .= $_POST['message'] . " \r\n";
$message2 .= "Enviado el: " . date('d/m/Y', time());
$message2 .= "\r\nPronto lo contestaremos!";

$para2= $mail;
$para = 'contactanos@regalosgregory.com';
$asunto = 'Mensaje de Regalos Gregory';
$asunto2 = 'Regalos Gregory';

mail($para, $asunto, utf8_decode($message), $header);
mail($para2, $asunto, utf8_decode($message2), $header2);

header("Location:index.html");
?>