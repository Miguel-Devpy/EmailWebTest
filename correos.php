<?php
    $destinatario = 'mampueros@uni.pe';
    // esto es al correo al que enviara el mensaje
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "enviado desde la pagina web";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario,$asunto,$mensajeCompleto,$header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>
