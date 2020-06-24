<?php
    $archivo = "datos/datos.txt";
if(touch($archivo)){
    //PARA PODER AGREGAR TEXTO
    $linea1 = "Hombres necios que acusais a la mujer, sin razon,\n";
    $linea2 = "sin ver que sois la ocasion de los mismo que culpais,\n";
    $linea3 = "si con ansia sin igual solicitais su desden,\n";
    $linea4 = "porque quereis que obren bien si  la incitais al mal\n";
    $archivoID = fopen($archivo, "w");
    fwrite($archivoID,$linea1);
    fwrite($archivoID,$linea2);
    fwrite($archivoID,$linea3);
    fwrite($archivoID,$linea4);
    fclose($archivoID);
    
    //AÑADIR TEXTO SIN QUE SE REMPLAZE
    $linea1 = "2Hombres necios que acusais a la mujer, sin razon,\n";
    $linea2 = "2sin ver que sois la ocasion de los mismo que culpais,\n";
    $linea3 = "2si con ansia sin igual solicitais su desden,\n";
    $linea4 = "2porque quereis que obren bien si  la incitais al mal\n";
    $archivoID = fopen($archivo, "a");
    fwrite($archivoID,$linea1);
    fwrite($archivoID,$linea2);
    fwrite($archivoID,$linea3);
    fwrite($archivoID,$linea4);
    fclose($archivoID);
    
    
    
    
    $archivoID = fopen($archivo, "r");
    //LEEMOS TODO EL ARCHIVO DEL TXT
    while(!feof($archivoID)){
        
        $linea = fgets($archivoID, 1024);
        //
        print "<p>".$linea."</p>";
    }
    fclose($archivoID);
}
?>