<?php
//el substr sirve para traer una subcadena de un string principal
$mail = "julioj1081@hotmail.com";
$arroba = strpos($mail,"@");
$arroba++;
$punto = strpos($mail, ".", $arroba);
$lon = $punto-$arroba;
//subtrae el mail despues de arroba y antes que termine
$servicio = substr($mail, $arroba, $lon);

print "<p>La arroba se encuentra en : $arroba</p>";
print "<p>El punto  se encuentra en : $punto</p>";
print "<p>La longitud es : $lon</p>";
print "<p>El servicio es : $servicio</p>";

print "El correo es : $mail";
 ?>
