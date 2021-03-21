<?php
$destino = "pastorinimateo@hotmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

mail($destino, $nombre, $correo, $telefono, $mensaje,)
?>