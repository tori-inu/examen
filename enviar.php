<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "cmellado2002@gmail.com";

    $asunto = "Cotización";

    $carta = "De: $nombre\n";
    $carta .= "Email: $email\n";
    $carta .= "Teléfono: $telefono\n";
    $carta .= "Mensaje: $mensaje\n";

    if(mail($destinatario, $asunto, $carta)) {
        header("Location: gracias.html");
        exit;
    } else {
        echo "Error al enviar el correo. Por favor, inténtalo de nuevo.";
    }
?>
