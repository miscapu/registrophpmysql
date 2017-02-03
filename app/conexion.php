<?php
$nombreservidor = "localhost";
$nombreusuario = "root";
$contrasenia = "mignan22";
$basededatos = "trabajo_de_curso";

// Creando la conexión
$con = new mysqli($nombreservidor, $nombreusuario, $contrasenia, $basededatos);

// Comprovando conexión
if ($con->connect_error) {
	die("Conexión Fallida: " . $con->connect_error);
}


//******************************************************************
function saludo()
{
	echo "hola mundo";
}
//*************************************************************
//Convierto los acentos a HTML
function chao_tilde($entra)
{
$traduce=array( 'á' => '&aacute;' , 'é' => '&eacute;' , 'í' => '&iacute;' , 'ó' => '&oacute;' , 'ú' => '&uacute;' , 'ñ' => '&ntilde;' , 'Ñ' => '&Ntilde;' , 'ä' => '&auml;' , 'ë' => '&euml;' , 'ï' => '&iuml;' , 'ö' => '&ouml;' , 'ü' => '&uuml;');
$sale=strtr( $entra , $traduce );
return $sale;
}
?>
