<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>223</title>
</head>
<body>

<?php

//Pablo Pollos
    
    /*Escribe un programa que obtenga la capital de un país y si no le decimos nada,
     que nos diga todas las capitales que sabe. Llama a una función pasándole el país o nada */ 
    
    /* function capitales($arr){
        echo "Capitales:<br>";
        foreach ($arr as $pais => $capital) {
            echo $capital;
        }
        
    }*/

    function capitales($arr, $nombre){
        if(isset($nombre)==false){
            echo "Capitales:<br>";
            foreach ($arr as $pais => $capital) {
                echo $capital." ";
            }
        }else{
            if(isset($arr[$nombre])){
                echo $arr[$nombre];
            }else{
                echo "País no reconocido";
            }
        }
        
    }

    $arrAso = array (
        "España" => "Madrid",
        "Francia" => "París",
        "Alemania" => "Berlín",
        "Alemania del Este" => "Berlín",
        "Italia" => "Roma"
    );

    //main
    echo 'capitales($arrAso, null):<br>';
    capitales($arrAso, null);
    echo "<hr>";

    echo 'capitales($arrAso, "España"):<br>';
    capitales($arrAso, "España");
    echo "<hr>";

    echo 'capitales($arrAso, "Singapur"):<br>';
    capitales($arrAso, "Singapur");
    
?>
</body>
</html>