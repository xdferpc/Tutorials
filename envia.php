<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",
 de la empresa " . $empresa . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = xdferpc@gmail.com;
$asunto = Asunto web;

mail($para, $asunto, $mensaje, $header);
echo"<script>alert('correo enviado correctamente')</script>";
echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>
