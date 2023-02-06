<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "jordyalba959@.com";
  $subject = "Nuevo mensaje de contacto";
  $message = "Nombre: " . $name . "\n" . "Número de celular: " . $phone . "\n" . "Email: " . $email . "\n" . "Mensaje: " . $message;
  $headers = "From: " . $email;

  if (mail($to, $subject, $message, $headers)) {
    echo "<script>alert('El mensaje se ha enviado con éxito');</script>";
  } else {
    echo "<script>alert('Ha ocurrido un error al enviar el mensaje');</script>";
  }
}
?>