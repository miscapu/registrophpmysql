<?php 
require_once '../../conexion.php';

$ConsultaContato=$con->query("insert into empleados
values
(null,'".$_POST["nom"]."','".$_POST["tel"]."','".$_POST["correo"]."')");
echo "<script type='text/javascript'>
     alert('Los Datos del Empleado fueron Ingresados Correctamente!');
     window.location='../../../index.php';
      </script>";
?>
