<?php
$destino = "fabianra999@gmail.com";
$name =  $_POST["name"];
$email =  $_POST["email"];
$mensage =  $_POST["mensage"];

$email_subject = "Contacto web Paola.com:  $name";
$email_body = "Has recibido un mensaje nuevo. "." Aquí están los detalles: " ."\nNombre: " . $name . "\nCorreo: " . $email . "\nMensage: " . $mensage;


$result = mail($destino, "q pasa: ", $email_body);
if(!$result) {
	print "<p class='Error'>Problem in Sending Mail.</p>";
	echo "Error";
	header("Location:index.php");
} else {
	print "<p class='success'>Contact Mail Sent.</p>";
	echo "Success";
	header("Location:index.php");
}

?>
