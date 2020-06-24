<?php
//el strstr sirve para buscar dentro de una cadena
$cadena1 = "Hola como estas";
$cadena2 = "como";
$resultado = strstr($cadena1,$cadena2);

if($resultado ==false){
  print "No se encontro la cadena2 '$cadena2' en el enunciado '$cadena1'";
}else{
  print "Si se encontro la candena2 '$cadena2' en el enunciado '$cadena1'";
}

print "<p>el resultado es '$resultado'</p>";
 ?>
