<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .oscuro{
            background-color: black;
            color: white;
        }
    </style>
</head>

<?php
    $nombrecookie = 'visitas';

    if(!isset($_COOKIE['fondo'])){
        setcookie('fondo', 'claro', time()+3600*48);
        echo "Bienvenido por primera vez";
    }else{
        echo "Bienvenido";
    }

?>

<body class="<?= $_COOKIE['fondo']?>" >
    <br>
    <a href="oscuro.php">Modo oscuro</a><br>
    <a href="claro.php">Modo claro</a><br>
    <a href="borrarCookie.php">Borrar cookies</a><br>

</body>
</html>