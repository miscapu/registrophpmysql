<?php
require_once("../app/conexion.php");
$res= $con ->query("select * from empleados where id_empleado=".$_GET["id_empleado"]."");
?>
<html>
<head>
<title>Agregar Empleado</title>
<link rel="stylesheet" type="text/css" href="../public/css/skeleton.min.css">
<link rel="stylesheet" type="text/css" href="../public/css/styles.css">

<script language="javascript" type="text/javascript" src="../public/js/jsModificaEliminaAdiciona.js"></script>
<script language="javascript" type="text/javascript" src="../public/js/jsUltimoQuery.js"></script>
<script language="javascript" type="text/javascript" src="../public/js/jsMascaraTelefono.js"></script>
</head>

<body onLoad="limpiar()">
<?php
if ($reg = $res->fetch_object())
{
?>
<form action="../app/Controladores/contactos/edita.php" method="post" name="form">
    <div class="row">
    <div class="twelve columns">
      <label for="nombre">Nombre</label>
      <input class="u-full-width" type="text" name="nom" placeholder="Su Nombre..." value="<?php echo $reg->nombre;?>">
    </div>
    <div class="twelve columns">
      <label for="Telefono">Teléfono</label>
      <input class="telefono" type="text" name="tel" placeholder="Su Telefono..." value="<?php echo $reg->telefono;?>">
    </div>
    <div class="twelve columns">
      <label for="correo">Correo</label>
      <input class="u-full-width" type="text" name="correo" placeholder="Su Correo..." value="<?php echo $reg->correo;?>">
    </div>
    <input type="hidden" name="id_empleado" value="<?php echo $_GET["id_empleado"];?>">
    <input type="button" value="Volver" title="Volver" onClick="history.back();" class="button-primary">
    <input type="button" value="Guardar Cambios" title="Agregar Empleado" onClick="validar()" />
</form>
<?php
}
?>
<script type="text/javascript">
	$(document).ready(function(){
  $('.telefono').mask('(00) 9 9999-9999');
});
</script>
</body>
</html>