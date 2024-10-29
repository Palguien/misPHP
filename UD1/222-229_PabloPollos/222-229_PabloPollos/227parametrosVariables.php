<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos">
    <title>227</title>
</head>
<body>

<?php
    /*Una función que devuelva el mayor de todos los números recibidos como parámetros: function mayor(): int.
    Utiliza las funciones func_get_args(), etc... No puedes usar la función max().*/
    function mayor(){
        $arr=func_get_args();
        sort($arr);
        return $arr[count($arr)-1];

    }
    /*Una función que concatene todos los parámetros recibidos separándolos con un espacio: 
    function concatenar(...$palabras) : string. Utiliza el operador ...*/
    function concatenar(...$palabras){
        $str="";
        for ($i=0; $i < count($palabras); $i++) { 
            $str=$str.$palabras[$i];
        }
        return $str;
    }

    echo mayor(5,2,7);
    echo "<hr>";
    echo concatenar(1,2,3,"asdf",4);

   

?>

</body>
</html>