<?php
    //correo a que se envia el   msj
    $detinatario= "armando_biebs97@hotmail.com";
    $nombre = $_POST ['nombre']
    $asunto = $_POST['asunto']

    $mensaje = $_POST ['mensaje']
    $email = $_POST['email']

    $header = "Enviado desde la pagina de Registro de visitas";
    $mensajeCompleto = $mensaje . "\Atyentamnete".$nombre;

    mail($detinatario, $asunto, $mensajeCompleto, $header);

    echo <script> alert('correo enviado')</script>;
    echo <script>setTimeout(\"location.href='index.html\", 1000)</script>;
?>