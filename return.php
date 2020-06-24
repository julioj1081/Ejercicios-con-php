<?php
  /*Este es una funcion con un return*/
  /*VARIABLES*/
  $subtotal = 1500;
  $tasa = 0.16;
  $iva = 0;


  /*FUNCIONES*/
  function calculacion_de_iva($sub_total, $porcent){
    $ivaCalculo = $sub_total * (1*$porcent);
    return $ivaCalculo;
  }
  /*INICIO*/
  print "<p>Subtotal : ".$subtotal."</p>";
  #calculo del iva
  $iva = calculacion_de_iva($subtotal, $tasa);

  /*Resultado del iva*/
  print "<p>IVA: ".$iva."</p>"
 ?>
