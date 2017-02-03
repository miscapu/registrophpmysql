<?php
require_once '../../conexion.php';

$ConsultaContato=$con->query("delete from empleados where id_empleado=".$_GET["id_empleado"]."");

echo "<script type='text/javascript'>
	    alert('Los datos de este Empleado fueron eliminados Correctamente!');
	    window.location='../../../index.php';
	  </script>";
?>