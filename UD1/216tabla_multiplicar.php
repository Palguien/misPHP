<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>216</title>
</head>
<body>
    <form action="" method="GET">
        <label for="number" id="number">Número:</label>
        <input type="test" id="number" name="number"><br>

        <label for="enviar" id="enviar">Enviar</label>
        <input type="submit" id="enviar" name="enviar"><br> 
    </form>
    <hr>
<?php

//Pablo Pollos
    
    /*Muestra dentro de una tabla HTML la tabla de multiplicar del número que
    reciba como parámetro por URL. Utiliza <thead> con sus respectivos <th> y <tbody> para dibujar la tabla.*/ 
    if($_GET['number']==null){
        $num=0;
    }else{
        $num = $_GET['number'];
    }
    
    echo "<table border='solid'>";
    echo "<th>Tabla del $num</th>";
    for ($i=1; $i <= 10; $i++) { 
        $res = $num * $i;
        echo "<tr><td>$num * $i = $res</td></tr>";
    }
    echo "</table>";
    
?>
</body>
</html>