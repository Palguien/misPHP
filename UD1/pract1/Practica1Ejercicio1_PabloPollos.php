<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title> Práctica 1 - Ejercicio 1</title>
</head>
<body>

    <form action="" method="GET">
        <label for="num" id="num">num_numeros: </label>
        <input type="test" id="num" name="num"><br>

        <label for="min" id="min">num_min:</label>
        <input type="test" id="min" name="min"><br>

        <label for="max" id="max">num_max:</label>
        <input type="test" id="max" name="max"><br>

        <input type="submit" id="enviar" name="enviar">
    </form>
    <hr>

<?php
    
    //Valores de URL
    $num_numeros = $_GET['num'];    //tamaño de array
    $num_min = $_GET['min'];    //limite inferior de rango
    $num_max = $_GET['max'];    //limite superior de rango
    
    if($num_numeros <= 0 || $num_max <= 0 || $num_min < 0 || $num_min>$num_max){
        echo "Error al introducir datos. Solo positivos y que el rango tenga sentidos, por favor";
    }else{
        //Primer contados
        $contados=[[],[]];    //array con menores y mayores de la mitad
        $mitad = ($num_min+$num_max)/2; //mitad del rango
        //echo "Mitad = ".$mitad;
        $numeros=[];   //array de numeros
        for ($i=0; $i < $num_numeros; $i++) {
            //generación de valores
            $val=rand($num_min, $num_max);
            array_push($numeros,$val);
            //comprobación contados
            if($val>$mitad){
                //mayores que mitad
                array_push($contados[1],$val);
            }else{
                //menores que mitad
                array_push($contados[0],$val);
            }
        }

        //Segundo contados
        $contados2=[[],[]];    //array con menores y mayores de la mitad
        $numeros2=[];   //array de numeros
        for ($i=0; $i < $num_numeros; $i++) {
            //generación de valores
            $val=rand($num_min, $num_max);
            array_push($numeros2,$val);
            //comprobación contados
            if($val>$mitad){
                //mayores que mitad
                array_push($contados2[1],$val);
            }else{
                //menores que mitad
                array_push($contados2[0],$val);
            }
        }

        echo "Primer numeros (Mayores que mitad = ".count($contados[1]).") :<br>";
        print_r($numeros);
        echo "<hr>Segundo numeros (Mayores que mitad = ".count($contados2[1]).") :<br>";
        print_r($numeros2);
        echo "<hr>";

        //Comprobación de que contados es mayor
        if(count($contados2[1])>count($contados[1])){
            $numeros=$numeros2;
            $contados=$contados2;
            echo "Segundo mayor que Primero. Cambiamos los Arrays";
        }else{
            echo "Segundo menor que Primero. No cambiamos los Arrays";
        }
        echo "<hr> Array resultado = <br>";
        print_r($numeros);
        echo "<br>Sus numeros mayores de la mitad: <br>";
        print_r($contados[1]);
        echo "<br>Sus numeros mayores de la mitad: <br>";
        print_r($contados[0]);
    }

    
?>
</body>
</html>
