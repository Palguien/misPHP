<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>219</title>
</head>
<body>

<?php

//Pablo Pollos
    
    /*Rellena un array de 100 elementos de manera aleatoria con valores M o F
    (por ejemplo ["M", "M", "F", "M", ...]). Una vez completado, vuelve a 
    recorrerlo y calcula cuantos elementos hay de cada uno de los valores 
    almacenando el resultado en un array asociativo ['M' => 44, 'F' => 66] 
    (no utilices variables para contar las M o las F). Finalmente, muestra 
    el resultado por pantalla.*/ 
    $arrSim = [];
    for ($i=0; $i < 100; $i++) { 
        $val = rand(0,1);
        if($val==1){
            array_push($arrSim,"M");
        }else{
            array_push($arrSim,"F");
        }
    }
    $arrAso = array_count_values($arrSim);
    print_r($arrAso);
    
?>
</body>
</html>