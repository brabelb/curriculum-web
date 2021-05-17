<?php

  $destino = "bamamanic@gmail.com"; //creamos variable ($destino) y asignamos el correo del destinatario.
  $name = $_POST["name"];           //almacenamiento de datos ingresados en el formulario
  $email = $_POST["email"];
  $subjet = $_POST["subjet"];
  $message = $_POST["message"];
  $contenido = "Nombre: " . $name . "\nEmail: " . $email . "\nAsunto: " . $subjet . "\nMensaje: " . $message; //Concatenamos las variables.  
  mail($destino, $subjet, $contenido); //Instruccion para enviar el mail
  //header("Location:index/gratitude.html");   //para que nos direccione a otra pagina de agradecimiento

?>
