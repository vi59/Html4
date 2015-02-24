<?php


$nombre = utf8_decode($_POST['nombre']);


$apellidos = utf8_decode($_POST['apellidos']);

$email = utf8_decode($_POST['email']);

$telefono = utf8_decode($_POST['telefono']);

$mensajeCliente = utf8_decode($_POST['mensajeCliente']);

echo "<br/>   Los datos recogidos en el formulario que acaba de rellenar son: ";

echo"<br/><br/>Nombre: ". $nombre;
echo"<br/><br/>Apellidos: ".$apellidos;
echo"<br/><br/>Email: ".$email;
echo"<br/><br/>Telefono: ".$telefono;
echo"<br/><br/>Mensaje enviado por usted:<br/><br/> ".$mensajeCliente;

echo"<br/><br/>Desde <b>Novos Tempos</b> queremos agradecerle su atención. Gracias.</span>";

?>
