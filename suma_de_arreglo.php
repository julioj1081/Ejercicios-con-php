<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];

//la suma es 49 = 7,9,10,21,2
  $arreglo = array($n1,$n2,$n3,$n4,$n5);
  for ($i=0; $i < 5 ; $i++) {
    // code...
    $suma += $arreglo[$i];
    //$suma = $suma+$arreglo[$i];
  }
  echo "La suma de los elementos del arreglo es $suma";
 ?>
