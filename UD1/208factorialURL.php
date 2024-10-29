<?php
//Pablo Pollos Iglesias

    //$num es la variable que recogerá el valor de la URL
    //https://localhost/misPHP/UD1/208factorialURL.php?num=5
    //https://localhost/...ruta.../nombre_script.php?var=valor
    $numero=$_GET["num"];
    echo "num = $numero</br>";
    
    //Factorial de nº aleatorio (1-10)
    $fact=1;
    if($numero>=0){
        for ($i=1; $i <= $numero; $i++) { 
            $fact=$fact*$i;
        }
        echo "$numero! = $fact";
    }else{
        echo "$numero! = ERROR";
    }
?>