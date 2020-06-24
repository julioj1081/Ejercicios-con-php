<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fechas Getdate</title>
<?php
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$dias[] ="Domingo";
	$dias[] ="Lunes";
	$dias[] ="Martes";
	$dias[] ="Miercoles";
	$dias[] ="Jueves";
	$dias[] ="Viernes";
	$dias[] ="Sabado";

	$fecha_array = getdate();
	$dia = $dias[$fecha_array["wday"]];
	$mes = $meses[$fecha_array["mon"]-1];
	print "hoy es".$dia." ".$fecha_array["mday"]." de ".$mes." de ".$fecha_array["year"].", son las ".$fecha_array["hours"]." con ".$fecha_array["minutes"]."minutos.";
?>
</head>

<body>

</body>
</html>
