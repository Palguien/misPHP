<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    $nombrecookie = 'visitas';

    if(!isset($_COOKIE[$nombrecookie])){
        setcookie($nombrecookie, '1', time()+3600*24);
        echo "Bienvenido por primera vez";
    }else{
        $visitas = (int) $_COOKIE[$nombrecookie];

        $visitas++;
        setcookie($nombrecookie, $visitas, time()+3600*24);
        echo "Bienvenido por $visitas ª vez";
    }

?>
<br>
<a href="borrarCookie.php">Borrar cookies</a>

</body>
</html>
