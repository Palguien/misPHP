<?php
    $nombreArchivo='archivo.txt';

    $archivo = fopen($nombreArchivo, 'r');

    if($archivo === FALSE){
        echo "No existe el archivo o no se pudo leer";
    }else{
        while(!feof($archivo)){
            $car = fgetc($archivo);
            echo $car;
        }

        fclose($archivo); //No olvides cerrar
    }
?>
