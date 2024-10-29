<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiradados</title>
</head>
<body>  
    <div>
        <?php
        //Pablo Pollos Iglesias
        //Tiradados DC 5
        $salir = false;
        for ($i = 1; $i <= 10 && !$salir; $i++) {
            $dado = rand(1, 6);
            echo "Tirando el dado... ";
            echo "<br>";
            echo "<pre>";
            echo " _____</br>";
            echo "|     |</br>";
            echo "|  $dado  |<br>";
            echo "|_____|<br>";
            echo "<br>";
            if ($dado === 5) {
                echo "Éxito</br>";
                $salir = true;
            }
        }
        $resul = (($i-1)<10) ? ($i-1)." intento/s" : "5 no obtenido en los 10 intentos";
        echo $resul;
        ?>
    </div>
</body>
</html>