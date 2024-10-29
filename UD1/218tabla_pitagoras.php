<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>218</title>
</head>
<body>

<?php

//Pablo Pollos
    
    /*Crea un programa que muestre por pantalla una tabla de multiplicar 
    de Pitágoras. Da formato a la columna y fila principales.*/ 
    $fil = 10;
    $col = 10;
    echo "<table border='solid'>";
    echo "<tr>";
    echo "<th>X</th>";
    for ($j=1; $j <= $col; $j++) { 
        echo "<th>$j</th>";
    }
    echo "</tr>";
    for ($i=1; $i <= $fil; $i++) { 
        echo "<tr>";
        echo "<th>$i</th>";
        for ($j=1; $j <= $col; $j++) { 
            echo "<td>".($i*$j)."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    
?>
</body>
</html>