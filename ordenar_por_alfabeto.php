<?php
  //php que arrgla un arrglo por abcd de pendiendo de las mayusculas
  $alumnos = array(
    0 => "Manuel",
    1 => "michel",
    2 => "Pedro",
    3 => "Ana",
    4 => "Pablo",
    9 => "julio",
    5 => "Zoi",
    6 => "Laura",
    7 => "luisa",
    8 => "Jorge");
    /*usamos el sort para que sea de forma natural*/
    sort($alumnos, SORT_NATURAL | SORT_FLAG_CASE);
    /**USAMOS FOREACH PARA COMBINAR ARREGLOS*/
    foreach ($alumnos as $key => $value) {
      // code...
      print "<p>Alumnos[".$key."] = ".$value."</p>";
    }

 ?>
