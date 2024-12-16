<?php
    // Nos unimos a la sesion
    session_start();
    // Y comprobamos que el usuario que se haya autenticado, y que sea administrador
    if(!isset($_SESSION["permission"]) || $_SESSION["permission"]==1){
        // Si no se ha autenticado, redirigimos al login
        header("Location:index.php?loginIndex=true");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
</head>
<body>
    <h1>Bienvenido usuario <?= $_SESSION["user"] ?></h1>

    <h2>Listado de productos</h2>
    <ul>
        <li>Producto 1</li>
        <li>Producto 2</li>
    </ul>
    <p>Pulse <a href="logout.php">aquí</a> para salir</p>
</body>
</html>