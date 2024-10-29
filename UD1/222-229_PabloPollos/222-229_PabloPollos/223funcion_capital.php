<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos">
    <title>223</title>
</head>
<body>

<?php
    /*Escribe un programa que obtenga la capital de un país y si no le decimos nada, que nos diga todas las capitales que sabe. Llama a una función pasándole el país o nada*/
    function capital($pais="..."){
        $arrAso = array (
            "España" => "Madrid",
            "Francia" => "París",
            "Alemania" => "Berlín",
            "Alemania del Este" => "Berlín",
            "Italia" => "Roma"
        );
        if($pais!="..."){
            if(isset($arrAso[$pais])){
                echo $arrAso[$pais];
            }else{
                echo "El país no está en el array";
            }
        }else{
            echo "Capitales: <br>";
            foreach ($arrAso as $key => $value) {
                echo $value." ";
            }
        }
    }  

    //main
    echo 'capital("España"):<br>';
    capital("España");
    echo "<hr>";
    echo 'capital("Cataluña"):<br>';
    capital("Cataluña");
    echo "<hr>";
    echo 'capital():<br>';
    capital();

?>

</body>
</html>