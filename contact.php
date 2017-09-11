<?php
/**
 * Formulario
 *  $destino : correo destino;
 *  $name,$email,$email,$asunto,$mensage : campos formulario;
 *  $date : Fecha de envio;
 */
$destino = 'fabianra999@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$mensage = $_POST['mensage'];
$date = date('d/m/Y', time());

/**
 * Header Email
 */
$header = 'From: ' . $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

/**
 * Body Email
 */
$mensaje = "Este mensaje fue enviado por " . $name . ".\r\n";
$mensaje .= "Su e-mail es: " . $email . ".\r\n";
$mensaje .= "Enviado el: " . $date . ".\r\n";
$mensaje .= "Su asunto: " . $asunto . ".\r\n";
$mensaje .= "Mensaje: " . $mensage . ".\r\n";

/**
 * Asunto Email
 */
$asuntoMail = 'Contacto sitio Web | ' . $name;

/**
 * Envio Email
 */
//mail($destino, $asuntoMail, utf8_decode($mensaje), $header);

//header('location:index.php');


$result = mail($destino, $asuntoMail, utf8_decode($mensaje), $header);
if (!$result) {
    //header("Location:contactoError.php");
    header("Location:index.php");
} else {
    //header("Location:contactoSuccess.php");
    header("Location:index.php");
}
?>