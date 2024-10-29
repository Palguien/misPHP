<?php    
//Pablo Pollos

    /*  crea un archivo con funciones para sumar, restar, multiplicar y dividir dos números.*/
    function sumar($a, $b){
        return $a + $b;
    }
    function multiplicar($a, $b){
        return $a * $b;
    }
    function res($a, $b){
        return $a - $b;
    }
    function div($a, $b){
        return $a / $b;
    }
    //digitos(int $num): int → devuelve la cantidad de dígitos de un número.
    function digitos(int $num){
        $dig=0;
        while($num>=1){
            $num=$num/10;
            $dig++;
        }
        return $dig;

    }
    //digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando por la izquierda, la posición $pos.
    function digitoN(int $num, int $pos){
        return (int)("".$num)[$pos];
    }
    //quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha) $cant dígitos.
    function quitaPorDetras(int $num, int $cant){
        for ($i=0; $i < $cant; $i++) { 
            $num=$num/10;
        }
        return (int)$num;
        
    }
    //quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda) $cant dígitos.
    //Giro el numero (strrev()) y uso quitaPorDetras()
    function quitaPorDelante(int $num, int $cant){return (int)strrev(quitaPorDetras(strrev($num),$cant));}

    //main
    /*
    echo digitos(234)."<br>";
    echo digitoN(1234567,3)."<br>";
    echo quitaPorDetras(12345,2)."<br>";
    echo quitaPorDelante(12345,2);*/

?>