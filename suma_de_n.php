<?php
  $n = $_POST['n'];
  for ($i=1; $i <= $n; $i++) {
    // code...
    $suma = $suma +$i;
  }
  echo "La suma de 1 a $n es $suma";
 ?>
