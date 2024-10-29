<?php
//Pablo Pollos
    
    /*investiga que hace la función str_word_count, y vuelve a hacer el ejercicio.*/
    
function vocCount($str){
    str_word_count($str);
    $letras= count(str_split($str));
    $palabras=str_word_count($str,0);
    $letras=$letras-($palabras-1);
    echo "Letras = ".$letras;
    echo "<br>Palabras = ".$palabras;
    $arr=str_word_count($str,1);
    foreach ($arr as $key) {
        echo "<br>$key tiene ".count(str_split($key))." letras";
    }
}

    //main
    $str = "Hola buenos dias";
    echo $str."<hr>";
    vocCount($str);
    
?>
