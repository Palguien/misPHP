<?php
    $file = "fichero_salida.txt";
    $fp = fopen($file,"r");

    //filesize() nos devuelve el tamaño del archivo
    $contents = fread($fp, filesize($file));
    echo $contents;

    fclose($fp);$file = "fichero_salida.txt";
    $fp = fopen($file,"r");

    //filesize() nos devuelve el tamaño del archivo
    $contents = fread($fp, filesize($file));
    echo $contents;

    fclose($fp);
?>