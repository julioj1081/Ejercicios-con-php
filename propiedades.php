<?php
$archivo = "datos.txt";
$path = "datos/";
if(file_exists($path.$archivo)){
  if(is_file($path.$archivo)){
    print "<p>Si el archivo existe en la carpeta '$path'.</p>";
    $tamanio = filesize($path.$archivo);
    $creado = filectime($path.$archivo);
    $modificado = filemtime($path.$archivo);
    if($tamanio < 1024){
      $media = "b";
    }
    if($tamanio >= 1024 && $tamanio<1024000){
      $media = "Kb";
      $tamanio /= 1000;
    }
    if($tamanio > 1024000){
      $media = "Mb";
      $tamanio /= 1000000;
    }
    $screado = date("D M j G:i:s T Y",$creado);
    $sModificado = date("d/m/Y H:m:s",$modificado);
    print "<p>El archivo $archivo tiene un tamaño de $tamanio $media</p>";
    print "<p>Creado $screado</p>";
    print "<p>Modificado $sModificado</p>";
  }
  if(is_dir($path.$archivo)){
    print "<p>Si existe el directorio '$archivo'.</p>";
  }
}else{
  print "<p>No existe el archivo '$archivo' en la carpeta '$path'.</p>";
}
 ?>
