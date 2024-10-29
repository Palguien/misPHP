<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos">
    <title>224</title>
</head>
<body>

<?php
    /*Escribe una función para calcular potencias. Recibirá como argumentos la base y el exponente, que es opcional y tiene valor por defecto 2 (elevar al cuadrado)*/
    function potencia($base, $exp=2){
        $tot=$base;
        for ($i=1; $i < $exp; $i++) { 
            $tot=$tot*$base;
        }
        return $tot;
    }

    //main
    echo "potencia(2,3) = ".potencia(2,3);
    echo "<br>potencia(5) = ".potencia(5);

   

?>

</body>
</html>