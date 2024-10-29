<?php
//Pablo Pollos
    
    /*  a partir de una frase con palabras sólo separadas por espacios, devolver

        -Letras totales y cantidad de palabras
        -Una línea por cada palabra indicando su tamaño
*/
    
function vocCount($str){
    $letras= count(str_split($str));
    $arr = explode(" ",$str);
    $palabras=count($arr);
    $letras=$letras-($palabras-1);
    echo "Letras = ".$letras;
    echo "<br>Palabras = ".$palabras;
    foreach ($arr as $key) {
        echo "<br>$key tiene ".count(str_split($key))." letras";
    }
}

    //main
    $str = "Hola buenos dias";
    echo $str."<hr>";
    vocCount($str);
    
?>
