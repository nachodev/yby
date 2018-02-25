<?php
$mail = "neosorro@gmail.com";
$title = "[YourBestYou] Solicitud de mentoría";

// El mensaje
$message = "Ha habido una nueva solicitud de mentoría para " .$_POST['mentor'] . "<br>";
$message .= "Nombre: " . $_POST['name'] . "<br>";
$message .= "Email: " . $_POST['email'] . "<br>" ;
$message .= "Mensaje: " . $_POST['message'] . "<br>";

// Enviarlo
mail( $mail, $title, $message);

echo json_encode($_POST);
?>
