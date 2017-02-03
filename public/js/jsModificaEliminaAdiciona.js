// Desarrollado por www.cesarcancino.com
//*****************************************************************************
//Valida correo
function valida_correo(correo) {
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }
//*************************************************************************************************************************************
//valida números con expresiones regulares RegEx
function valida_numero(numero)
{
if (!/^\([0-9]{2}\)\s{1}[0-9]{1}\s{1}[0-9]{4}-([0-9]{4}|[0-9]{3})$/i.test(numero)){
		return false;
}else{
		return true;
	}
}
//*******************************************************************************************************
//función para validar cadenas de solo letras
function valida_cadena(texto)
	{
		var RegExPattern = "[1-9]";
		 if (texto.match(RegExPattern))
		 {
		 	return false;
		 }else
		 {
		 	return true;
		 }
	}
//************************************************************
function limpiar()
{
	document.form.reset();
	document.form.nom.focus();
}

function validar()
{
	var form =document.form;
	if (form.nom.value==0)
	{
		alert("ingrese el nombre");
		form.nom.value="";
		form.nom.focus();
		return false;
	}
	if (valida_numero(form.tel.value)==0)
	{
		alert("ingrese un número de Teléfono válido");
		form.tel.value="";
		form.tel.focus();
		return false;
	}
	if (form.correo.value==0)
	{
		alert("ingrese el E-Mail");
		form.correo.value="";
		form.correo.focus();
		return false;
	}
	if (valida_correo(form.correo.value)==false)
	{
		alert("ingrese un E-Mail correcto");
		form.correo.value="";
		form.correo.focus();
		return false;
	}
	document.form.submit();
}
