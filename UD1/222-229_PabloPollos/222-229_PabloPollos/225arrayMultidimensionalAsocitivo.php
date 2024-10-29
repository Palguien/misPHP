<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos">
    <title>225</title>
</head>
<body>

<?php
    /*Inventa un array multidimensional de tipo asociativo. Añade datos y léelo. Realiza un cambio (por ejemplo aumentar la nómina) 
    Crea arrays unidimesionales donde guardes los datos en ese recorrido. Muestra posteriormente los datos de esos creados. (NOTA: Puedes usar formulario para introducir datos).*/
    $personas = array(
        array("Nombre" => "Juan", "Nómina" => 1200),
        array("Nombre" => "María", "Nómina" => 1400)
    );
    print_r($personas);
    array_push($personas, array("Nombre" => "Carlos", "Nómina" => 1300));
    echo"<hr>";
    foreach ($personas as $persona) {
        $persona["Nómina"]+=99;
        foreach ($persona as $clave => $valor) {
            echo "$clave: $valor ";
        }
        echo "<br>";
    }

   

?>

</body>
</html>