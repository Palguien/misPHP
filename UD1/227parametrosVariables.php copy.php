<?php
declare(strict_types=1);
//Pablo Pollos
    
    /*
        -Una función que devuelva el mayor de todos los números recibidos como parámetros:
        function mayor(): int. Utiliza las funciones func_get_args(), etc... No puedes usar la función max().
        -Una función que concatene todos los parámetros recibidos separándolos con un espacio:
        function concatenar(...$palabras) : string. Utiliza el operador ...
    */ 
    

    function mayor(){
        $arr=func_get_args();
        sort($arr);
        return($arr[count($arr)-1]);     
    }

    function concatenar(...$palabras){
        $str = "";
        foreach ($palabras as $parte) {
            $str = $str + $parte;
        }
    }

    //main
    echo mayor(10,37,2,38,0);
    echo concatenar(10,37,2,38,0,"Hola",14);

    

    
?>
</body>