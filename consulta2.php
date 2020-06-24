<?php

$matricula = $_POST['n'];

  $conexion = mysql_connect("localhost","root","1234567890") or die("Error en la conexion");
  mysql_select_db("upvm",$conexion) or die("Error en la base de datos");
  $sql ="SELECT * FROM alumnos WHERE matricula=$matricula";
  $datos = mysql_query($sql, $conexion) or die("Error en el sql");

//IMPRECION DE REGISTROS DE UNA TABLA


// CREAR UN PROGRAMA QUE CONSULTE LOS DATOS DE UN alumno
/*
MATRICULA
Nombre completo
Direccion
Telefono
Correo
Carrera
*/
while($reg=mysql_fetch_array($datos)){
//renglones de la tabla
    echo "<tr>";
      echo "matricula: $reg[matricula] <br>";
      //este es el nombre completo
      echo "Nombre completo: $reg[ApellidoPaterno] $reg[ApellidoMaterno] $reg[nombre]<br>";
      echo "Direccion: $reg[Direccion]<br>";
      echo "Telefono: $reg[Telefonos]<br>";
      echo "Corrreo: $reg[Correo]<br>";
      echo "Clave: $reg[Clave]<br>";
      echo "Carrera: $reg[Carrera]<br>";
    echo "</tr>";
  }

  mysql_close($conexion);
  mysql_free_result($datos);
 ?>
