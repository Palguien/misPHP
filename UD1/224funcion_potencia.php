<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>224</title>
</head>
<body>

<?php

//Pablo Pollos
    
    /*Escribe una función para calcular potencias. Recibirá como argumentos la base y 
    el exponente, que es opcional y tiene valor por defecto 2 (elevar al cuadrado) */ 
    

    function potencia($base, $exponente){
        if(isset($exponente)==false){
            return $base*$base;
        }else{
            $tot=$base;
            for ($i=1; $i < $exponente; $i++) { 
                $tot=$tot*$base;
            }
            return $tot;
        }
        
    }

    //main
    echo 'potencia(5, null):<br>';
    echo potencia(5, null);
    echo "<hr>";

    echo 'potencia(5, 3):';
    echo potencia(5, 3);

    
?>
</body>
</html>