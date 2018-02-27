<?php
$mail = "vocacion@yourbestyou.es";
$title = "[YourBestYou] Solicitud de mentoría";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// El mensaje
$message = "Ha habido una nueva solicitud de mentoría para " .$_POST['mentor'] . "<br><br>";
$message .= "<strong> Nombre: </strong> " . $_POST['name'] . "<br><br>";
$message .= "<strong> Email: </strong>" . $_POST['email'] . "<br><br>" ;
$message .= "<strong> Mensaje: </strong>" . $_POST['message'] . "<br><br>";

// Enviarlo
mail( $mail, $title, $message, $headers);

echo json_encode($_POST);
?>
