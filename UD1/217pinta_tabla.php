<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>217</title>
</head>
<body>

<?php

//Pablo Pollos
    
    /*A partir de un número de filas y columnas, crear una tabla con ese tamaño. 
    Las celdas deben estar rellenadas con los valores de las coordenadas de cada celda.*/ 
    $fil = 5;
    $col = 6;
    echo "<table border='solid'>";
    for ($i=0; $i < $fil; $i++) { 
        echo "<tr>";
        for ($j=0; $j < $col; $j++) { 
            echo "<td>($i,$j)</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    
?>
</body>
</html>