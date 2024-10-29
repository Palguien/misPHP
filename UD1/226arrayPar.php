<?php
declare(strict_types=1);
//Pablo Pollos
    
    /*
        -Una función que averigüe si un número es par: esPar(int $num): bool
        -Una función que devuelva un array de tamaño $tam con números aleatorios 
        comprendido entre $min y $max : arrayAleatorio(int $tam, int $min, int $max) : array
        -Una función que reciba un $array por referencia y devuelva la cantidad de números
        pares que hay almacenados y los sustituya por 0: arrayPares(array &$array): int
    */ 
    

    function esPar(int $num){
        if($num%2==0){
            return true;
        }else{
            return false;
        }
        
    }

    function arrayAleatorio(int $tam, int $min, int $max){
        $arr=[];
        for ($i=0; $i < $tam; $i++) { 
            array_push($arr, rand($min,$max));
        }
        return $arr;
    }

    function arrayPares(array &$array){
        $pares=0;
        for ($i=0; $i < count($array); $i++) { 
            if(esPar($array[$i])){
                $pares++;
                $array[$i]=0;
            }
        }
        return $pares;

    }

    //main
    $arr=arrayAleatorio(10,1,25);
    print_r($arr);
    echo "<hr>";
    echo "Pares: ".arrayPares($arr)."<br>";
    print_r($arr);

    

    
?>
</body>