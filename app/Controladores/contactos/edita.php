<?php
require_once '../../conexion.php';

//print_r($_POST);
//echo $sql;
$res=$con->query("update empleados
set
nombre='".$_POST["nom"]."',
telefono='".$_POST["tel"]."',
correo='".$_POST["correo"]."'
where
id_empleado=".$_POST["id_empleado"]."");
echo "<script type=''>
	alert('Los datos de este Empleado fueron Modificados Correctamente!');
	window.location='../../../index.php';
</script>";
?>