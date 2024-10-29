<?php
//Pablo Pollos
    
    /*escribe una función que devuelva un booleano indicando si una palabra es palíndroma (se lee igual de izquierda a derecha que de derecha a izquierda, por ejemplo, “No traces en ese cartón”).*/
    
function palindromo($str){
    $bueno = ["á","Á","é","É","í","Í","ó","Ó","ú","Ú"];
    $malo = ["a","A","e","E","i","I","o","O","u","U"];
    $pali=str_replace($bueno, $malo, $str);
    $pali = implode(str_word_count($pali,1));
    echo $pali."<br>";
    $pali=strtolower($pali);
    return $pali;
}

    //main
    $str = "No traces en ese cartón";
    echo $str."<hr>";
    $str = palindromo($str);
    if(strrev($str)==$str){
        echo "<br>Palíndromo";
    }else{
        echo "<br>No palíndromo";
    }
    
    
?>