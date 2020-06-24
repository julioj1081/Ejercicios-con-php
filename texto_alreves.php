<?php
$cadena1 = "Hola como estas";
$cadena2 = "";
for ($i=0; $i <strlen($cadena1) ; $i++) {
  // code...
  $cadena2 = $cadena1[$i].$cadena2;
}
print "<p>$cadena1</p>";
print "<p>$cadena2</p>";
 ?>
