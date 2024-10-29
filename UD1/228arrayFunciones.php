<?php    
//Pablo Pollos

    /* haciendo uso de un array que almacene el nombre de las funciones del archivo anterior, 
    a partir de dos números recibidos por URL, recorre el array e invoca a las funciones de
    manera dinámica haciendo uso de funciones variable.*/

    
    $arr = func_get_args(include_once("biblioteca.php"));
    print_r($arr);
    $func = $arr(0);
    echo $func(10,20);
    echo sumar(10,20);
    echo res(40,20);


?>