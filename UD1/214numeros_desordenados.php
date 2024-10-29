<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>214</title>
</head>
<body>
<?php
//Pablo Pollos
    
    /*Escribe un programa que muestre los números pares del 0 al 50 (dentro de una
    lista desordenada). Modifica el programa para que le demos el valor máximo por URL.*/ 
    $lista=[];
    $num=10;
    $max;
    if($num%2==0){
        $max=$num/2+1;
    }else{
        $max=($num-1)/2+1;
    }
    while(count($lista)<$max){
        $val=rand(0,$num);
        if($val%2==0){
            $bool=in_array($val, $lista);
            if($bool==false){
                array_push($lista,$val);
            }
        }
    }
    echo "$num<hr>[ ";
    $primero=1;
    foreach ($lista as $numero) {
        if($primero==1){
            echo "$numero";
            $primero--;
        }else{
            echo ", $numero";
        }
    }
    echo "]";
    
?>
</body>
</html>