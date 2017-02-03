<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Área Para Agregar Contactos</title>
<link rel="stylesheet" type="text/css" href="../public/css/skeleton.min.css">
<link rel="stylesheet" type="text/css" href="../public/css/styles.css">


<script language="javascript" type="text/javascript" src="../public/js/jsModificaEliminaAdiciona.js"></script>
<script language="javascript" type="text/javascript" src="../public/js/jsUltimoQuery.js"></script>
<script language="javascript" type="text/javascript" src="../public/js/jsMascaraTelefono.js"></script>
</head>

<body onload="limpiar()">
  <form action="../app/Controladores/contactos/adiciona.php" method="post" name="form">
    <div class="row">
    <div class="twelve columns">
      <label for="nombre">Nombre</label>
      <input class="u-full-width" type="text" name="nom" placeholder="Su Nombre...">
    </div>
    <div class="twelve columns">
      <label for="Telefono">Teléfono</label>
      <input class="telefono" type="text" name="tel" placeholder="Su Telefono...">
    </div>
    <div class="twelve columns">
      <label for="correo">Correo</label>
      <input class="u-full-width" type="text" name="correo" placeholder="Su Correo...">
    </div>
    
    <input type="button" value="Volver" title="Volver" onclick="history.back();" class="button-primary">
    <input type="button" value="Guardar Cambios" title="Agregar Empleado" onclick="validar()" />
  
  </form>
  <script type="text/javascript">
  $(document).ready(function(){
  $('.telefono').mask('(00) 9 9999-9999');
});
</script>
   </body>
</html>