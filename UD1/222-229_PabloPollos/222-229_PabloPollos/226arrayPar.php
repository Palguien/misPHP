<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos">
    <title>226</title>
</head>
<body>

<?php
    //Una función que averigüe si un número es par
    function esPar(int $num){
        return ($num%2==0);
    }
   
    //Una función que devuelva un array de tamaño $tam con números aleatorios comprendido entre $min y $max
    function arrayAleatorio(int $tam, int $min, int $max){
        $arr = [];
        for ($i=0; $i < $max; $i++) { 
            array_push($arr,rand($min,$max));
        }
        return $arr;
    }

    //Una función que reciba un $array por referencia y devuelva la cantidad de números pares que hay almacenados y los sustituya por 0
    function arrayPares(array &$array){
        $pares=0;
        foreach ($array as $key) {
            if(esPar($key)){
                $pares++;
                $key=0;
            }
        }
        return $pares;

    }

    //main
    $arr = arrayAleatorio(5,0,10);
    print_r($arr);
    echo "<hr>";
    print_r(arrayPares($arr));
    echo "<hr>";
    print_r($arr);
?>

</body>
</html>