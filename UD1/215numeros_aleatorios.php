<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>215</title>
</head>
<body>
<?php
//Pablo Pollos
    
    /*Genera un array aleatorio de 33 elementos con números 
    comprendidos entre el 0 y 100 y calcula: mayor, menor, media*/
    $lista=[];
    $total=0;
    $SIZE=33;
    while(count($lista)<$SIZE){
        $val=rand(0,100);
        $total=$val+$total;
        array_push($lista,$val);
    }
    
    echo "[ ";
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

    echo "<hr>";
    //orden descendente
    sort($lista);
    echo "Mayor = ".$lista[$SIZE-1]."<br>";
    //orden descendente
    echo "Menor = ".$lista[0]."<br>";
    //media
    echo "Media = ".$total/$SIZE;

?>
</body>
</html>