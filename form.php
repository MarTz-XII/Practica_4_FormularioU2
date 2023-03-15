<?php

$nombre = $_POST ['nombre'];
$Apellido = $_POST ['apellido'];

//Como me llagaria el formulario a cierto correo?


$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje = "Enviado la fecha del " . date('d/m/Y',time());

$para = 'martzrl4@gmail.com';
$asunto = 'Este mail fue enviado desde la pagina web';


mail($para, $asunto, $nombre);
echo "<script>alert('correo enviado exitosamente') </script>";
echo "<script> setTimeout(\"location.href='index.html'\",2000) </script>";


?>
