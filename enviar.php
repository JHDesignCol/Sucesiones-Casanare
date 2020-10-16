<?php 
    $destino = "jhdesign992020@gmail.com";
    $destinoFinal = "cyrabogadosasociados@gmail.com";
	$nombre = $_POST["name"];
	$remite = $_POST["email"];
	$mensaje = $_POST["mensaje"];

	$contenido = "Nombre: ". $nombre. "\nCorreo: ". $remite. "\nMensaje: ". $mensaje;
	mail($destino, "Sucesion para: "+$nombre, $contenido);
	header("Location: index.html");

 ?>