<?php
require_once("app/conexion.php");
?>
<html>
<head>
<title>
Registro de Empleados
</title>
   <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

   <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
   <link rel="stylesheet" href="public/css/cssIndex.css">
<script language="javascript" type="text/javascript">
	function eliminar(id)
	{
		if (confirm("Realmente desea eliminar el registro?"))
		{
			window.location="app/Controladores/contactos/elimina.php?id_empleado="+id;
		}
	}
</script>
</head>
<body>
<div class="container">
<h1>Tabla de Registros de Empleados</h1>
  <p>Tabla de <strong>Contenido Editable</strong> donde puedes modificar a tu gusto los datos de los Empleados.</p>
<div id="table" class="table-editable">
    <a style="text-decoration:none" class="table-add glyphicon glyphicon-plus" href="vistas/agregar.php" title="Agregar Empelados"></a>
    <table class="table">
      <tr>
        <th>Nombre (A-Z)</th>
        <th>Teléfono (DDD) Numero</th>
        <th>E-mail</th>
        <th></th>
        <th></th>
      </tr>

<?php
	$ConsultaDatos=$con->query("select * from empleados order by nombre asc");
	while ($RegistroDatos = $ConsultaDatos->fetch_object())
{
?>    
      <tr>
        <td><?php echo $RegistroDatos->nombre;?></td>
        <td><?php echo $RegistroDatos->telefono;?></td>
        <td><?php echo $RegistroDatos->correo;?></td>
        <td>
          <a style="text-decoration:none" class="table-remove glyphicon glyphicon-edit" href="vistas/modificar.php?id_empleado=<?php echo $RegistroDatos->id_empleado;?>" title="Modificar"></a>
        </td>
        <td>
          <a style="text-decoration:none" class="table-up glyphicon glyphicon-remove" href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $RegistroDatos->id_empleado;?>')"></a>
        </td>
      </tr>
      <?php
}
      ?>
    </table>
  </div>
</div>
</body>
</html>