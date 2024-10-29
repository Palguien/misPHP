<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>220</title>
</head>
<body>

<?php

//Pablo Pollos
    
    /*Mediante un array asociativo, almacena el nombre y la altura de 5 personas
    (nombre => altura). Posteriormente, recorre el array y muéstralo en una 
    tabla HTML. Finalmente añade una última fila a la tabla con la altura media.*/ 
    $arrAso = array (
        "Felipe" => 2.1,
        "Rigoberto" => 1.2,
        "Aurelia" => 1.9,
        "Julia" => 1.6,
        "Goku" => 1.9,
    );
    $tot=0;
    foreach ($arrAso as $nombre => $altura) {
        $tot=$tot+$altura;
    }
    echo "<table border='solid'>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Altura</th>";
    echo "</tr>";
    foreach ($arrAso as $nombre => $altura) {
        echo "<tr>";
        echo "<td>$nombre</td>";
        echo "<td>$altura</td>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "<th>Media</th>";
    echo "<th>".$tot/count($arrAso)."</th>";
    echo "</tr>";
    echo "</table>";
    
?>
</body>
</html>