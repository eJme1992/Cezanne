<?php

// define variables and set to empty values
$nombre_error = $email_error = $telefono_error = $evento_error = "";
$nombre = $email = $telefono = $evento = $mensaje = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    $nombre_error = "Nombre es un campo obligatorio";
  } else {
    $nombre = test_input($_POST["nombre"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
      $nombre_error = "Solo están permitidos letras y espacios";
    }
  }

  if (empty($_POST["evento"])) {
    $evento_error = "Tipo de Evento es un campo obligatorio";
  } else {
    $evento = test_input($_POST["evento"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$evento)) {
      $evento_error = "Solo están permitidos letras y espacios";
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email es un campo obligatorio";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Formato de email inválido";
    }
  }

  if (empty($_POST["telefono"])) {
    $telefono_error = "Teléfono es un campo obligatorio";
  } else {
    $telefono = test_input($_POST["telefono"]);
  }

  if (empty($_POST["mensaje"])) {
    $mensaje = "";
  } else {
    $mensaje = test_input($_POST["mensaje"]);
  }

  if ($nombre_error == '' and $evento_error == '' and $email_error == '' and $telefono_error == '' ){
      $mensaje_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $mensaje_body .=  "$key: $value\n";
      }

      $to = 'info@cezanne.com.ar';
      $subject = 'Contacto desde la web';
      if (mail($to, $subject, $mensaje_body)){
          $success = "Tu mensaje fue enviado ¡Gracias por contactarnos!";
          $nombre = $email = $evento = $telefono = $mensaje = '';

          /*echo "<script> fbq('track', 'CompleteRegistration', { value: 250.00, currency: 'ARS', }); </script>";*/
          header("Location:gracias.php");
         die();
      }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}