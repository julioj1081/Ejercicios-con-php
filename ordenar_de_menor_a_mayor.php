<?php
  /*Este arreglo nos permite ordenar un arreglo de menor a mayor*/
  $calificaciones = array(
0 => 4,
1 => 1,
2 => 7,
3 => 2,
4 => 0,
5 => 5);
//para sortear numeros
/*sort($calificaciones, SORT_STRING)*/
sort($calificaciones);
foreach ($calificaciones as $key => $value) {
  // code...
  echo "<p>Calificaciones[".$key."] = ".$value."</p>";
}
 ?>
