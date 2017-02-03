<?php
$nombreservidor = "localhost";
$nombreusuario = "root";
$contrasenia = "*****";
$basededatos = "nombreBaseDeDatos";

// Creando la conexión
$con = new mysqli($nombreservidor, $nombreusuario, $contrasenia, $basededatos);

// Comprovando conexión
if ($con->connect_error) {
	die("Conexión Fallida: " . $con->connect_error);
}
?>
