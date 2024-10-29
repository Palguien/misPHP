<?php
//Pablo Pollos

    /*
    Crea un programa que permita al usuario leer un conjunto de números separados por espacios. 
    El programa filtrará los números leídos para volver a mostrar únicamente los números pares e indicará la cantidad existente.

    Dame números: 1 4 7 9 23 10 8
    Los 3 números pares son: 4 10 8
    */

    //main
    $str = "1 4 7 9 23 10 8";
    echo "Números: ".$str."<br>";
    $arr = explode(" ",$str);
    $pares="";
    foreach ($arr as $key) {
        if(intval($key)%2==0){
            $pares=$pares." ".$key;
        }
    }
    echo "Pares: ".$pares."<br>";


?>