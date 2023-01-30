<?php

$nombre = $_POST['nombre'];
$mail = $_POST['contacto'];
$contenido = $_POST['contenido'];

$header = 'From:' . $mail . "\r\n";
$header = "X-Mailer: PHP/" . phpversion() . "\r\n";
$header = "Mime-Version 1.0 \r\n";
$header = "Content-Type: text/plain";

$mensaje = "Este mensaje es enviado por: " . $nombre;
$mensaje = "Su mail es: " . $mail;
$mensaje = "Mensaje: " . $contenido;
$mensaje = "Enviado el: " . date('d/m/Y', time());



$para = 'agustin.molee@gmail.com';
$asunto = 'Mensaje de reclutador';

echo($mail);
mail($para, $asunto, utf8_decode($contenido), $header);

header("Location:index.html");
?>