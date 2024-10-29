<?php
//Pablo Pollos

    /*
    crea una función que a partir de un tamaño, genere una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria.
    */
    //si $val es 0 devuelve mayúscula aleatoria; si es 1, minúscula; y si no es ninguno de ellos, un dígito
    function randLetNum($val){
        if($val==0){
            return chr(rand(65,90));
        }else if($val==1){
            return chr(rand(97,122));
        }else{
            return chr(rand(48,57));
        }
    }
    //genera una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria de longitud $len
    function randPassword($len){
        if($len<=0){
            return "ERROR";
        }
        $psw="";
        for ($i=0; $i < $len; $i++) { 
            $psw=$psw.randLetNum(rand(0,2));
        }
        return $psw;
    }


    //main
    echo randPassword(8);



?>