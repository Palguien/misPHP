<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
            color: black;
        }
        button:hover{
            background-color:gray;
            cursor: pointer;
        }
    </style>
</head>

<?php
    $nombrecookie = 'visitas';
    $clase;

    if(!isset($_COOKIE['fondo'])){
        setcookie('fondo', 'claro', time()+3600*48);
        echo "Bienvenido por primera vez";
    }else{
        if($_COOKIE['fondo']=='oscuro'){
            echo "<style>body{background-color: black; color:white;}</style>";
        }else{
            echo "<style>body{background-color: antiquewhite; color:grey;}</style>";
        }
        echo "Bienvenido";
    }
?>

<body>
    <br>
    <button><a href="oscuro.php">Modo oscuro</a></button><br>
    <button><a href="claro.php">Modo claro</a></button><br>
    <button><a href="borrarCookie.php">Borrar cookies</a></button><br>
</body>
</html>