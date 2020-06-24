<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" method="post">
      <p>Ingresa un numero</p>
      <input type="text" name="n" placeholder="ingresa el numero en decimal">
      <input type="submit" name="boton" value="convertir">
    </form>
  </body>
</html>

<?php
  $numero = $_POST['n'];
  $binario ="";
  do{
    $d = $numero % 2;
    /*Convercion de cadena*/
    $binario = $d.$binario;
    $numero = intval($numero/2);
  }while($numero>=2);
  $binario = $numero.$binario;
  print "<p>El numero binario es ".$binario." el numero en decimal es: ".$_POST['n']."</p>";
 ?>
