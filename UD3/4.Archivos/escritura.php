<?php
    $file="fichero_salida.txt";
    $texto = "Hola,esto está escrito en el fichero";

    $fp = fopen($file, "w");
    //Si queremos añadir texto debe abrirse a+
    //$fp = fopen($file, "a+");

    fwrite($fp, $texto);
    fclose($fp);
?>