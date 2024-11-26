<?php
    $filePath = "matriz.txt";
    
    if(file_exists($filePath)){
        $file = fopen(filename: $filePath, mode: "r");

        if($file){
            echo "Lectura fila por fila:";
            while (!feof($file)){
                fscanf($file, "%d %d %d", $num1,$num2,$num3);
                echo "<br> $num1,$num2,$num3";
            }
            fclose($file);
        }else{
            echo "No se pudo abrir el archivo";
        }
        
    }else{
        echo "No se pudo encontrar el archivo";
    }
?>