<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>221</title>
</head>
<body>

    <form action="" method="GET">
        <label for="name" id="name">Nombre:</label>
        <input type="test" id="name" name="name"><br>

        <label for="enviar" id="enviar">Enviar</label>
        <input type="submit" id="enviar" name="enviar"><br> 
    </form>
    <hr>

<?php

//Pablo Pollos
    
    /*Modifica el ejercicio anterior para que enviado un nombre vía URL me indique
    mi altura y si está por encima o por debajo de la media (muestra la media).*/ 
    
    $name = $_GET['name'];

    $arrAso = array (
        "Felipe" => 2.1,
        "Rigoberto" => 1.2,
        "Aurelia" => 1.9,
        "Julia" => 1.6,
        "Goku" => 1.9,
        "John" => 1.74,
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
    echo "<hr>";

    if(isset($arrAso[$name])){
        echo $name." : ".$arrAso[$name]."<br>";
        if($arrAso[$name]>$tot/count($arrAso)){
            echo "Por encima de la media";
        }elseif ($arrAso[$name]<$tot/count($arrAso)) {
            echo "Por debajo de la media";
        }else{
            echo "Coincide con la media";
        }
    }else{
        echo "No has seleccionado ningún nombre de la lista";
    }

?>

</body>
</html>