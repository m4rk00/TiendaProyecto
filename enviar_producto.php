<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$mensaje = $_POST['mensaje'];
$descripcion = $_POST['descripcion'];
$producto = $_POST['producto'];
$especific = $_POST['especific'];
$precio = $_POST['precio'];
$precio2 = 15;
$precio = ($precio + $precio2); 
$mail2 = "contactanos@regalosgregory.com";

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$header2 = 'From:' . $mail2 . " \r\n";
$header2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header2 .= "Mime-Version: 1.0 \r\n";
$header2 .= "Content-Type: text/plain";

$message = "Pedido para ser enviado: " . $name . " \r\n";
$message .= "Articulo solicitado: " . $producto . " \r\n";
$message .= "Precio del articulo: " . $precio . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Sus especificaciones extras fueron:" . $especific . " \r\n";
$message .= "Su direccion es: " . $mensaje. " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$message2 = "Recibimos tu siguiente pedido a domicilio:\r\n";
$message2 .= "Articulo solicitado: " . $producto . " \r\n";
$message2 .= "Direccion de entrega: " . $mensaje . " \r\n";
$message2 .= "Sus especificaciones extras fueron:" . $especific . " \r\n";
$message2 .= "\n\nRecuerda que para pagos solo estan disponibles las siguientes formas:" .  " \r\n";
$message2 .= "\n\nDEPOSITO O TRANSFERENCIA \r\n";
$message2 .= "BANCOMER: \r\n";
$message2 .= "Beneficiario: Gregorio Gonzales Mancilla \r\n";
$message2 .= "Numero de Cuenta: 289 596 209 9 \r\n";
$message2 .= "Numero de Tarjeta: 4152 3137 2725 9983 \r\n";
$message2 .= "Monto: " . $precio ." MXN \r\n";
$message2 .= "\r\nOXXO: \r\n";
$message2 .= "Inbursa: 465 828 501 135 501 7 \r\n";
$message2 .= "Beneficiario: Gregorio Gonzales Mancilla \r\n";
$message2 .= "Monto: " . $precio ." MXN \r\n";
$message2 .= "\r\nRECUERDA REENVIARNOS UNA FOTO DEL DEPOSITO AL SIGUIENTE CORREO: regalosgregory2009@hotmail.com \r\n";
$message2 .= "O si lo prefieres al siguiente WhatsApp: 4271184819 \r\n";
$message2 .= "Pedido Recibido el: " . date('d/m/Y', time());
$message2 .= "\r\nGracias por comprar con nosotros!";

$para2= $mail;
$para = 'contactanos@regalosgregory.com';
$asunto2 = 'Mensaje de Regalos Gregory';
$asunto = 'Pedido enviar a domicilio:';

mail($para, $asunto, utf8_decode($message), $header);
mail($para2, $asunto2, utf8_decode($message2), $header2);

header("Location:compra_terminada.html");
?>