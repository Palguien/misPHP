<?php
//Pablo Pollos

    /*
    crea una función que permite generar una letra aleatoria, mayúscula o minúscula, dependiendo de lo que yo quiera.
    */
    //si $mayus es true devuelve mayúscula aleatoria, si es false, minúscula
    function randLet($mayus){
        if($mayus){
            return chr(rand(65,90));
        }else{
            return chr(rand(97,122));
        }
    }

    //main
    //mayus
    echo randLet(1)."<br>";
    //minus
    echo randLet(0);


?>