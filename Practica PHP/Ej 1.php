<?php
$destinatario = "leilenavila@gmail.com ";
$asunto = "Contacto PHP";
$cuerpo = '
<html>
    <head>
        <title>Envio de mail</title>
    </head>
    <body>
        <h1>Envío de mail.</h1>
        <p>
            <b>Contenido</b>.
           <li>Item1</li>
           <li>Item2</li>
           <li>Item3</li>
        </p>
      <p>
        Leilen
      </p>
      <p>
        Saludos.
      </p>
    </body>
</html>
';
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
$headers .= "From: Leilen Avila <leilenavila@mail.com>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers)
?> 