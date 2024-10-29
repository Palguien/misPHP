<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos">
    <title>229</title>
</head>
<body>

<?php
    // devuelve la cantidad de dígitos de un número.
    function digitos(int $num){
        $array = str_split($num);
        return count($array);
    }

    //  devuelve el dígito que ocupa, empezando por la izquierda, la posición $pos.
    function digitoN(int $num, int $pos){
        $array = str_split($num);
        if(digitos($num)>=$pos){
            return $array[$pos];
        }else{
            return "";
        }
        
    }
    // le quita por detrás (derecha) $cant dígitos.
    function quitaPorDetras(int $num, int $cant){
        $val=$num;
        for ($i=0; $i < $cant; $i++) { 
            $val=$val/10;
        }
        return ((int)$val);
    }
    // le quita por delante (izquierda) $cant dígitos.
    function quitaPorDelante(int $num, int $cant){
        $num = strrev($num);
        $num = quitaPorDetras($num,$cant);
        return strrev($num);
    }

    echo "digitos(12345)<br>";
    echo digitos(12345);
    echo "<hr>";

    echo "digitoN(12345,3)<br>";
    echo digitoN(12345,3);
    echo "<hr>";

    echo "quitaPorDetras(12345,2)<br>";
    echo quitaPorDetras(12345,2);
    echo "<hr>";

    echo "quitaPorDelante(12345,2)<br>";
    echo quitaPorDelante(12345,2);
?>

</body>
</html>